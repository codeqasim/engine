<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Juniperback extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Juniper/Juniper_model');
        $method_segment = $this->uri->segment(3);
        // Access Checkpoint
        // Module enabled/disabled checkpoint
        $chk = $this->App->service('ModuleService')->isActive('Juniper');
        if ( ! $chk && $method_segment != "settings" && $method_segment != "update_settings") {
            backError_404($this->data);
        }
        $this->role    = $this->session->userdata('pt_role');

        // If user is not log in then redirect the to admin panel.
        $this->data['userloggedin'] = $this->session->userdata('pt_logged_id');

        if (empty($this->data['userloggedin']))
        {
            // Redirect user to admin/index (Admin Dashboard)
            $urisegment =  $this->uri->segment(1);

            $this->session->set_userdata('prevURL', current_url());

            redirect($urisegment);
        }

        // If user is admin then assign `admin` to segment otherwise `supplier`
        $administrator = $this->session->userdata('pt_logged_admin');

        if ( ! empty ($administrator))
        {
            $this->data['adminsegment'] = "admin";
        }
        else
        {
            $this->data['adminsegment'] = "supplier";
        }

        // Usecase 1: If someone make changes in session then this check can be helpful.
        // If segment string is `admin` then validate it otherwise validated `supplier`
        if ($this->data['adminsegment'] == "admin")
        {
            $checkpoint = modules :: run('Admin/validadmin');
            if ( ! $checkpoint) // If checkpoint become fail
            {
                redirect('admin');
            }
        }
        else
        {
            $checkpoint = modules :: run('supplier/validsupplier');
            if ( ! $checkpoint) // If checkpoint become fail
            {
                redirect('supplier');
            }
        }

        // Assign PHP Travel app settings, get it from settings table.
        $this->data['appSettings'] = modules :: run('Admin/appSettings');

        $this->data['addpermission'] = true;

        if($this->role == "supplier" || $this->role == "admin")
        {
            $this->editpermission = pt_permissions("edithotels", $this->data['userloggedin']);
            $this->deletepermission = pt_permissions("deletehotels", $this->data['userloggedin']);

            $this->data['addpermission'] = pt_permissions("addhotels", $this->data['userloggedin']);
        }

        $this->data['isadmin'] = $this->session->userdata('pt_logged_admin');
        $this->data['isSuperAdmin'] = $this->session->userdata('pt_logged_super_admin');
        $this->data['page_title'] = 'Juniper Setting';
        $this->load->helper("all");
    }

    public function index()
    {
        $this->data['main_content'] = 'Juniper/index';
        $this->data['page_title'] = 'Juniper Index';
        $this->data['header_title'] = 'Juniper Index';
        $this->load->view('Admin/template', $this-> data);
    }

    public function settings()
    {   
        //$this->data['currency'] = $this->Juniper_model->currencies();
        $this->data['moduleSetting'] = $this->App->service("ModuleService")->get("Juniper");
        $this->data['main_content'] = 'Juniper/settings';
        $this->data['page_title'] = 'Juniper Settings';
        $this->data['header_title'] = 'Juniper Settings';
        $this->load->view('Admin/template', $this->data);
    }

    public function update_settings()
    {
        $payload = $this->input->post();
        $this->App->service("ModuleService")->update('Juniper', 'apiConfig', $payload['apiConfig']);
        redirect(base_url('admin/juniper/settings'));
    }

    public function bookings(){
        $booking_data = $this->Juniper_model->all_bookings();
        $tbody = "";
        foreach ($booking_data as $booking) {
            $tbody .= '
            <tr>
            <td>'.$booking['name'].'</td>
            <td>'.$booking['email'].'</td>
            <td>'.$booking['phone'].'</td>
            <td>'.$booking['address'].'</td>
            <td><div class="btn-group"><a href="'.site_url('admin/juniper/bookings/view/'.$booking['id']).'" class="btn btn-primary btn-xs">View</a><a href="#" class="btn btn-danger btn-xs">Delete</a></div></td>
            </tr>
            ';    
        }
        
        $content = "
        <table class='table table-striped'>
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Contact #</th>
        <th>Address</th>
        <th>Action</th>
        </tr>".$tbody."
        </table>";
        $this->data['content'] = $content;
        $this->data['page_title'] = 'Juniper Booking Management';
        $this->data['main_content'] = 'temp_view';
        $this->data['header_title'] = 'Booking Management';
        $this->load->view('Admin/template', $this->data);
    }

    function view(){
        $id = $this->uri->segment(5);
        if (empty($id)) {
            redirect(site_url('admin/juniper/bookings'));
        }

        $booking_data = $this->Juniper_model->booking_data($id);
        $rooms_data = $this->Juniper_model->rooms_data($id);
        //dd($rooms_data);
        $data_rooms = "";

        foreach ($rooms_data as $rooms) {
            $data_rooms .= '
            <tr>
            <td>'.$rooms['title'].'</td>
            <td>'.$rooms['name'].'</td>
            <td>'.$rooms['surname'].'</td>
            </tr>';
        }

        $api_data = $this->Juniper_model->api_data($id);

        $content = '
        <div class="row">
        <div class="col-md-7">
        <h2>User Information</h2>
        <table class="table table-striped">
        <tr><td>Name</td><td>'.$booking_data['name'].'</td></tr>
        <tr><td>Email</td><td>'.$booking_data['email'].'</td></tr>
        <tr><td>Phone</td><td>'.$booking_data['phone'].'</td></tr>
        <tr><td>Address</td><td>'.$booking_data['address'].'</td></tr>
        <tr><td>Additional Notes</td><td>'.nl2br($booking_data['additionalnotes']).'</td></tr>
        <tr><td>Nationality</td><td>'.$booking_data['nationality'].'</td></tr>
        <tr><td>Checkin Date</td><td>'.$booking_data['checkin_date'].'</td></tr>
        <tr><td>Checkout Date</td><td>'.$booking_data['checkout_date'].'</td></tr>
        <tr><td>City</td><td>'.get_city_name($booking_data['city'])." ( ".$booking_data['city'].' )</td></tr>
        <tr><td>Hotel Code</td><td>'.$booking_data['hotel_code'].'</td></tr>
        <tr><td>Agreement</td><td>'.$booking_data['agreement'].'</td></tr>
        <tr><td>Hotel Name</td><td>'.$booking_data['hotel_name'].'</td></tr>
        <tr><td>Hotel Address</td><td>'.$booking_data['hotel_address'].'</td></tr>
        <tr><td>Room Type</td><td>'.$booking_data['type'].'</td></tr>
        <tr><td>Currency</td><td>'.$booking_data['currency'].'</td></tr>
        <tr><td>Required Rooms</td><td>'.$booking_data['required'].'</td></tr>
        <tr><td>Total Price</td><td>'.$booking_data['total_price_room'].'</td></tr>
        </table>
        </div>';

        $content .= '
        <div class="col-md-5">
        <h2>Passengers Information</h2>
        <table class="table table-striped">
        <tr>
        <td>Title</td>
        <td>Name</td>
        <td>Sur Name</td>
        </tr>
        '.$data_rooms.'
        </table>
        <br>
        <h2>Booking Information</h2>
        <table class="table table-striped">
        <tr>
        <td>Supplier</td>
        <td>Booking ID</td>
        <td>Status</td>
        <td>Deadline</td>
        </tr>
        <tr>
        <td>'.$api_data['supplier'].'</td>
        <td>'.$api_data['booking_id'].'</td>
        <td>'.$api_data['status'].'</td>
        <td>'.$api_data['deadline'].'</td>
        </tr>
        </table>
        </div>
        </div>
        ';

        $this->data['content'] = "<a href='".site_url('admin/juniper/bookings')."' class='btn btn-success btn-sm'>Return</a><br><br>".$content;
        $this->data['page_title'] = 'Juniper Booking Management';
        $this->data['main_content'] = 'temp_view';
        $this->data['header_title'] = 'Booking Details';
        $this->load->view('Admin/template', $this->data);
    }
}
