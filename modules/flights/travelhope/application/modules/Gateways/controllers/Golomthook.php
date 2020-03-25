<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Golomthook extends MX_Controller{

	public function webhook(){
	
	if(isset($_GET['success']) && $_GET['success'] == 0){
	
		$tx_id = explode('-', $_GET['trans_numberUnique'])[0];
	         $this->db->set('booking_txn_id', $tx_id);
	          $this->db->set('booking_payment_type', 'golomt');
        	  $this->db->set('booking_status', 'paid');
        	  $this->db->where('booking_id', $_SESSION['BOOKING_ID']);
        	  $this->db->update('pt_bookings');
        	  redirect(site_url($_SESSION['paymentGatewayAfterCompleteRedirect']));		
	}
	
	}

}
