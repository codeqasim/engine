<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

include_once 'OpenAPI.php';

class EasypaysaController extends OpenAPI
{
    /**
     * Success: 0000
     * System Error: 0001
     * Required field is missing: 0002
     * Invalid Order ID: 0003
     * Merchant Account does not exist: 0004
     */
    const SUCCESS_CODE = 0000;
    const SUCCESS_STRING = "PAID";
    
    public function __construct()
    {
        parent::__construct();
    }

    public function checkout($orderId = 0)
    {
        // Update gateway payment option in booking table.
        $this->updateGatewayPaymentOption($orderId, 'CC');
        $this->load->view('paymentgateway/easypaysa_checkout');
    }

    public function update_invoice($order_id)
    {
        $this->db->where('booking_id', $order_id);
        $booking = $this->db->get('pt_bookings')->row();
        $this->db->set('booking_status', 'paid');
        $this->db->set('booking_payment_type', 'easypaisa');
        $this->db->set('booking_payment_date', time());
        $this->db->set('booking_amount_paid', $booking->booking_remaining);
        $this->db->set('booking_remaining', 0);
        $this->db->set('booking_txn_id', $response->transaction_id);
        $this->db->where('booking_id', $booking->booking_id);
        $this->db->update('pt_bookings');
        // Acknowledge faisalMovers ticketing system and send notification to user.
        updateFMTicketingSystem($booking);
        invoiceConfirmationNotification($booking->booking_id);
    }

    public function confirmation()
    {
        if($_GET['success'] == 'true') {
            $order_id = explode('_', $_GET['orderRefNumber'])[1];
            $this->update_invoice($order_id);
        } else {
            echo 'Transaction Failed';
        }
    }

    public function ipn()
    {
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );
        $response = json_decode(file_get_contents($_GET['url'], false, stream_context_create($arrContextOptions)));
        if( ! empty($response) && $response->transaction_status == self::SUCCESS_STRING) {
            $txn = explode('_', $response->order_id);
            $order_id = $txn[1];
            if($txn[0] == 'WTXN') { // Wallet transaction
                $this->db->where('txn_ref', $response->order_id);
                $row = $this->db->get('wallet_invoice')->row();

                $this->load->model('WalletModel');
                $wallet = new WalletModel();
                $wallet->creditWallet($row->user_id, $row->amount, $row->txn_ref, $row->gateway, "deposit");

                $this->db->where('id', $row->id);
                unset($row->id);
                $row->status = 'paid';
                $this->db->update('wallet_invoice', $row);
            } else {
                $this->update_invoice($order_id);
            }
        }
    }

    public function initTxn()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('orderRefNum', 'oreder ID', 'required');
        $this->form_validation->set_rules('amount', 'Amount', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('txnType', 'Transaction Type', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->output->set_content_type('application/json');
            $this->output->set_output(json_encode([
                'status' => 'error',
                'data' => validation_errors()
            ]));
        }
        else 
        {
            $this->orderId = $this->input->post('orderRefNum');
            $this->txnAmount = $this->input->post('amount');
            $this->accountNumber = $this->input->post('mobile');
            $this->msisdn = $this->input->post('mobile');
            $this->emailAddress = $this->input->post('email');
            $this->txnType = $this->input->post('txnType');
            $response = $this->initiateTransaction();
            // Update gateway payment option in booking table.
            $this->updateGatewayPaymentOption($this->orderId, $this->txnType);
            file_put_contents(APPPATH.'logs/easypaisa.txt', 'post: '.json_encode($_POST). ' || response: '. json_encode($response) . PHP_EOL, FILE_APPEND);
            $status = "fail";
            if($this->txnType == 'OTC' && $response->responseCode == self::SUCCESS_CODE) {
                $message = "Thank you for initiating your payment, To pay your Easypaisa Token# <strong>{$response->paymentToken}</strong>, visit your nearest Easypaisa shop.";
                $status = "success";
            } elseif($this->txnType == 'MA' && $response->responseCode == self::SUCCESS_CODE) {
                $message = 'Thank you for initiating your payment, kindly pay the amount from your Mobile Account.';
                $status = "success";
            } else {
                $message = 'Transaction Failed!';
            }
            $this->output->set_content_type('application/json');
            $this->output->set_output(json_encode([
                'status' => $status,
                'message' => $message,
                'data' => $response
            ]));
        }
    }

    public function inquireTxn()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('orderRefNum', 'oreder ID', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->output->set_content_type('application/json');
            $this->output->set_output(json_encode([
                'status' => 'error',
                'data' => validation_errors()
            ]));
        }
        else 
        {
            $this->orderId = $this->input->post('orderRefNum');
            $response = $this->inquireTransaction();
            $this->output->set_content_type('application/json');
            $this->output->set_output(json_encode($response));
        }
    }

    public function updateGatewayPaymentOption($order_id, $option_type)
    {
        $booking_id = explode('_', $order_id)[1];
        $this->db->set('booking_payment_option', $option_type);
        $this->db->where('booking_id', $booking_id);
        $this->db->update('pt_bookings');
    }
}