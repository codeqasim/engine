<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Molliehook extends MX_Controller{

	public function webhook()
	{
	    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.mollie.com/v2/payments/".$_SESSION['mollie_id']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer '.$_SESSION['mollie_key'],
            'Accept: application/json;charset=UTF-8',
            'Content-Type: application/json'
            ));
        $response = curl_exec($ch);
        curl_close($ch);
        $x = json_decode($response);
        unset($_SESSION['mollie_key']);
        unset($_SESSION['mollie_id']);

// 		Save data and redirect user to invoice page.
		if($x->status == "paid")
		{
	          $this->db->set('booking_txn_id', $x->id);
	          $this->db->set('booking_payment_type', 'mollie');
	          $this->db->set('booking_status', 'paid');
	          $this->db->where('booking_id', $x->metadata->order_id);
			  $this->db->update('pt_bookings');
		}
		redirect(site_url($_SESSION['paymentGatewayAfterCompleteRedirect']));
	}
}
