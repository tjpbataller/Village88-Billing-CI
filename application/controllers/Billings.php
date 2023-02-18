<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   
class Billings extends CI_Controller {
    public function index()
    {
        $this->load->model("Billing");
        $view_data = array("billings" => $this->Billing->show_all());
        $this->load->view("billings/index", $view_data);
    }

    public function filter()
    {
        $input = $this->input->post(NULL, TRUE);
        $this->load->model("Billing");
        $this->Billing->filter_dates($input);
        redirect("/");
    }
}
?>