<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class TravelhopeHotelsBack extends MX_Controller
{
    const MODULE = "TravelhopeHotels";
    const SLUG = "thhotels";
    const BOOKING_TABLE = "travelhope_hotels_bookings";

	public function __construct()
    {
        parent::__construct();
        $method_segment = $this->uri->segment(3);
        // Access Checkpoint
        // Module enabled/disabled checkpoint
        $chk = $this->App->service('ModuleService')->isActive(self::MODULE);
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
        $this->data['page_title'] = self::MODULE.' Setting';
	}
	
	public function index()
    {
        $this->data['main_content'] = self::MODULE.'/index';
        $this->data['page_title'] = self::MODULE.' Index';
        $this->data['header_title'] = self::MODULE.' Index';
        $this->load->view('Admin/template', $this->data);
    }

    public function settings()
    {
        $this->data['moduleSetting'] = $this->App->service("ModuleService")->get(self::MODULE);
        $this->data['main_content'] = self::MODULE.'/settings';
        $this->data['page_title'] = self::MODULE.' Settings';
        $this->data['header_title'] = self::MODULE.' Settings';
        $this->load->view('Admin/template', $this->data);
    }

    public function update_settings()
    {
        $payload = $this->input->post();
        $this->App->service("ModuleService")->update(self::MODULE, 'apiConfig', $payload['apiConfig']);
        redirect(base_url('admin/'.self::SLUG.'/settings'));
	}

    /**
     * Bookings
     */
    public function bookings()
    {
        $this->load->helper('xcrud');
        $xcrud = xcrud_get_instance();
        $xcrud->table(self::BOOKING_TABLE);
        $xcrud->columns('id, booking_id, destination, hotel_name, room_name, price, currency, checkin, checkout, adults, children, created_at');
        $xcrud->order_by('id', 'desc');

        $xcrud->button(base_url(self::SLUG.'/invoice/{id}'), 'View Invoice', 'fa fa-search-plus', 'btn btn-primary', array('target' => '_blank'));

        $this->data['add_link'] = '';
        $xcrud->unset_add();
        $xcrud->unset_view();
        $xcrud->unset_edit();
        $xcrud->unset_print();
        $xcrud->unset_csv();

        $this->data['content'] = $xcrud->render();
        $this->data['main_content'] = self::MODULE.'/bookings';
        $this->data['table_name'] = 'travelhope_hotels_bookings';
        $this->data['main_key'] = 'id';
        $this->data['page_title'] = self::MODULE.' Booking Management';
        $this->data['header_title'] = self::MODULE.' Booking Management';

        $this->load->view('Admin/template', $this->data);
    }
}
