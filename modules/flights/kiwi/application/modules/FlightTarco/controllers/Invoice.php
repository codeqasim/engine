<?php
class Invoice extends MX_Controller{
    const Module = 'FlightTarco';

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
        $this->load->model('FlightTarco/TrFlights_model');
    }
    /**
     * Show Payment Status of the specified booking.
     */
    public function index()
    {
        ini_set('display_errors',1);
        $url_array = $this->uri->segment_array();
        $checkoutResponse = $this->TrFlights_model->get_invoice($url_array[3]);
        $created_at = strtotime($checkoutResponse->created_at);
        $now =  strtotime(date("Y-m-d H:i:s",time()));
        $difference =  ($now-$created_at)/60;
        if(($checkoutResponse->status == "unpaid") && $difference > 30 ){
            $this->TrFlights_model->update_invoice($checkoutResponse->id,"cancel");
        }
        $checkoutResponse = $this->TrFlights_model->get_invoice($url_array[3]);
        $invoice = $this->parseInvoiceData($checkoutResponse);
        $this->load->model('Admin/Payments_model');
        $this->data['dataAdapter'] = $invoice;
        $this->data['invoice_details'] = $checkoutResponse;
        $this->data['config'] = $this->App->service('ModuleService')->get(self::Module)->apiConfig;
        $this->theme->view('modules/flights/tarco_flight/invoice', $this->data, $this);
    }

    private function parseInvoiceData($booking)
    {
        $invoice = new stdClass();
        $invoice->responseMessage = 'Response Message';
        $invoice->booking_id = $booking->id;
        $invoice->currency = $booking->Currency_code;
        $invoice->price = $booking->price;
        $invoice->taxes =$booking->Currency_code.' '.'0';
        $invoice->total_price = $booking->Currency_code.' '.$booking->price;
        $invoice->segments = $booking->flightData;

        return $invoice;
    }


}