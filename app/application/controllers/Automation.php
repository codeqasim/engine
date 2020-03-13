<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Automation extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Global_Model",'gm');

    }

    public function index()
    {
    }

    public function currencies()
    {
        $currencies = $this->gm->all_currencies();
        $send_currency = "";
        foreach ($currencies as $index => $currency) {
            if ($index == 0) {
                $send_currency = $currency->name;
            } else {
                $send_currency = $send_currency . "," . $currency->name;
            }
        }
        $result = (array)json_decode(file_get_contents(Config::$currency_url.Config::$currency_key.'&source=USD&currencies=' . $send_currency))->quotes;
        foreach ($result as $key =>$item)
        {
            $insert_array = array('name'=>$key,'rate'=>$item);
            $this->gm->add_corn_data($insert_array);
        }
        foreach ($currencies as $currency) {
            $currency_or = $this->gm->curency_by_id($currency->id);
            $currency_or["rate"] = $result["USD" . $currency->name];
            $this->gm->update($currency_or["id"],$currency_or);
        }
        $currencies = $this->gm->all_currencies();
        header('Content-Type: application/json');

        echo json_encode($currencies);
    }


}