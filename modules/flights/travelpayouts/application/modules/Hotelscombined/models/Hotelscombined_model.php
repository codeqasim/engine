<?php
class Hotelscombined_model extends CI_Model{
    public $jsonfile;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

     // update front settings
       function update_front_settings(){
        $fdata = new stdClass();
        $fdata->showHeaderFooter = $this->input->post('showheaderfooter');

        $fdata->aid = $this->input->post('aid');
        $fdata->brandID = $this->input->post('brandid');
        $fdata->searchBoxID = $this->input->post('searchid');
        $fdata->headerTitle = $this->input->post('headertitle');

        app()->service("ModuleService")->update('Hotelscombined', 'settings', $fdata);
        $this->session->set_flashdata('flashmsgs', "Updated Successfully");

      }

      function get_front_settings(){
        $fileData = app()->service("ModuleService")->get('Hotelscombined')->settings;
        return $fileData;
      }

}
