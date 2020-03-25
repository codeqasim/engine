<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Zarinpalhook extends MX_Controller{

	public function webhook()
	{
        $this->load->library('zarinpal');
        var_dump($_GET);exit();
        if($_GET['Status'] == 'OK'){
            if($this->zarinpal->verify($merchant_id , $amount, $authority)){
                $refid = $this->zarinpal->getRefId();
                // Save data and redirect user to invoice page.
                // if(isset($_GET['vpc_TxnResponseCode']) && $_GET['vpc_TxnResponseCode'] == 0)
                // {
                //       $this->db->set('booking_txn_id', $_GET['vpc_ReceiptNo']);
                //       $this->db->set('booking_payment_type', 'migs');
                //       $this->db->set('booking_status', 'paid');
                //       $this->db->where('booking_id', $_GET['vpc_MerchTxnRef']);
                // 	  $this->db->update('pt_bookings');
                // }
            }
        }
		// redirect(site_url($_SESSION['paymentGatewayAfterCompleteRedirect']));
	}
}
