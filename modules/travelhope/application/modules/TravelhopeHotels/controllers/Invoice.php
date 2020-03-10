<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 4/29/2019
 * Time: 10:45 PM
 */
class Invoice extends MX_Controller
{
    const MODULE = "TravelhopeHotels";
    const THEME_MODULE = "modules/hotels/travelhopehotels";

    public function __construct()
    {
        parent :: __construct();

        $chk = $this->App->service('ModuleService')->isActive(self::MODULE);
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

        $this->data['appModule'] = self::MODULE;

        $this->load->model(self::MODULE.'/BookinngEngineBookings');
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
        $this->data['invoice'] = $invoice;
        $notification_flag = $this->input->get('n');
        $this->data['notification_flag'] = ($notification_flag == 'y') ? 1 : 0;
        $this->data['notifiable_emails'] = array($this->session->userdata('email'));

        $this->theme->view(self::THEME_MODULE.'/invoice', $this->data, $this);
    }

    /**
     * @param $booking
     * @return stdClass
     */
    private function parseInvoiceData($booking)
    {
        $bookingRequest = json_decode($booking->getBookingRequest());
        $checkoutResponse = json_decode($booking->getCheckoutResponse());

        $invoice = new stdClass();
        $invoice->id = $booking->getId();
        $invoice->booking_code = $booking->getBookingId();
        $invoice->additionaNotes = "";
        $invoice->currency_code = $bookingRequest->room_data->currency;
        $invoice->total_amount = $bookingRequest->room_data->price;
        $invoice->total_nights = $booking->getTotalNights();
        $invoice->checkin = $bookingRequest->room_data->checkin;
        $invoice->checkout = $bookingRequest->room_data->checkout;
        $invoice->room_name = $bookingRequest->hotel_data->room_name;
        $invoice->hotel_image = $checkoutResponse->hotels->slider_image;
        $invoice->hotel_location = $bookingRequest->hotel_data->address;
        $invoice->hotel_name = $bookingRequest->hotel_data->hotel_name;
        $invoice->guest = $bookingRequest->account;
        $invoice->created_at = $booking->getCreatedAt();

        return $invoice;
    }
}