<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Migshook extends MX_Controller{

	public function webhook()
	{
		require(__DIR__."/../migs/PaymentCodesHelper.php");
		include(__DIR__."/../migs/VPCPaymentConnection.php");
		include(__DIR__."/../migs/PHP_VPC_3Party_Order_DR.php");
		// Save data and redirect user to invoice page.
		if(isset($_GET['vpc_TxnResponseCode']) && $_GET['vpc_TxnResponseCode'] == 0)
		{
	          $this->db->set('booking_txn_id', $_GET['vpc_ReceiptNo']);
	          $this->db->set('booking_payment_type', 'migs');
	          $this->db->set('booking_status', 'paid');
	          $this->db->where('booking_id', $_GET['vpc_MerchTxnRef']);
			  $this->db->update('pt_bookings');
		}
		redirect(site_url($_SESSION['paymentGatewayAfterCompleteRedirect']));
	}
}
