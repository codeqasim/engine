<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 4/29/2019
 * Time: 10:45 PM
 */
class Invoice extends MX_Controller
{
    const Module = 'TravelhopeFlights';

    public function __construct()
    {
        parent :: __construct();

        $chk = $this->App->service('ModuleService')->isActive(self::Module);
        if (!$chk) { Error_404($this); }

        modules::load('Front');
        $this->data['lang_set'] = $this->session->userdata('set_lang');
        $this->data['phone'] = $this->load->get_var('phone');
        $this->data['contactemail'] = $this->load->get_var('contactemail');
        $defaultlang = pt_get_default_language();

        if (empty($this->data['lang_set'])) {
            $this->data['lang_set'] = $defaultlang;
        }

        $this->lang->load("front", $this->data['lang_set']);
        $contact = $this->Settings_model->get_contact_page_details();
        $this->data['contactphone'] = $contact[0]->contact_phone;
        $this->data['contactemail'] = $contact[0]->contact_email;
        $this->data['contactaddress'] = $contact[0]->contact_address;

        $this->data['appModule'] = self::Module;

        $this->load->library('Model/SearchForm');
        $this->load->model('TravelhopeFlights/BookinngEngineBookings');
    }

    /**
     * Show invoice of the specified booking.
     *
     * @param int $invoice_id
     */
    public function index($invoice_id = 0)
    {
        $this->data['page_title'] = 'Invoice';
        $this->data['header_title'] = 'Invoice';

        $booking = new BookinngEngineBookings();
        $booking->loadById($invoice_id);
        $invoice = $this->parseInvoiceData($booking);
        $invoice->access_token = $invoice_id;

        $this->data['dataAdapter'] = $invoice;
        $notification_flag = $this->input->get('n');
        $this->data['notification_flag'] = ($notification_flag == 'y') ? 1 : 0;
        $this->data['notifiable_emails'] = array($this->session->userdata('email'));

        $this->theme->view('modules/flights/travelhope_flight/invoice', $this->data, $this);
    }

    private function parseInvoiceData($booking)
    {
        $invoice = new stdClass();
        $invoice->responseMessage = 'Response Message';
        $invoice->booking_id = $booking->getBookingId();
        $bookingRequest = $booking->getBookingRequest();
        $invoice->bookingTraveler = array_merge(
            $bookingRequest->adults,
            $bookingRequest->children,
            $bookingRequest->infants
        );
        $checkoutResponse = $booking->getCheckoutResponse();
        $invoice->base_price = $checkoutResponse->currency.' '.$checkoutResponse->total;
        $invoice->taxes = $checkoutResponse->currency.' '.$checkoutResponse->book_fee;
        $invoice->total_price = $checkoutResponse->currency.' '.$checkoutResponse->total;
        $invoice->segments = $bookingRequest->flight_data;
        return $invoice;
    }
}