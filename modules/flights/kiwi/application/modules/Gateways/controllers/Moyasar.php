<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

//require __DIR__ . '/../moyasar-sdk/vendor/autoload.php';

class Moyasar extends MX_Controller {

    public function init()
    {
        $key = $this->input->post('key');
        $invoiceid = $this->input->post('invoiceid');
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $cardnum = $this->input->post('cardnum');
        $expMonth = $this->input->post('expMonth');
        $expYear = $this->input->post('expYear');
        $cvv = $this->input->post('cvv');
        $amount = $this->input->post('amount');
        $currency = $this->input->post('currency');
        $description = $this->input->post('description');
        $callback = base_url("Gateways/moyasar/payment_callback/{$invoiceid}");

        Moyasar\Client::setApiKey($key);
        $card = [
            "type" => Moyasar\Payment::CREDIT_CARD,
            "name" => $firstname.' '.$lastname,
            "number" => $cardnum,
            "cvc" => $cvv,
            "month" => $expMonth,
            "year" => $expYear
        ];

        try {
            $response = Moyasar\Payment::create(($amount * 100), $card, $description, $currency, $callback);
            redirect($response->source->transaction_url);
        } catch (Exception $e) {
            $this->session->set_flashdata('gateway_exception', $e->getMessage());
            redirect(base_url("invoice?id={$invoiceid}"));
        }
    }

    public function all()
    {
        Moyasar\Client::setApiKey("sk_test_SAdDv1Z7WjTE9cJiWDDVBwZVh2akNRS8YDLMAoai");
        $all = Moyasar\Payment::all();
        echo '<pre>';
        print_r($all);
    }

    public function payment_callback($invoiceid = 0)
    {
        $status = $this->input->get('status');
        $status = ($status == failed)?'unpaid':$status;

        $this->db->set('booking_status', $status);
        $this->db->where('booking_id', $invoiceid);
        $this->db->update('pt_bookings');

        redirect(base_url("invoice?id={$invoiceid}"));
    }
}
