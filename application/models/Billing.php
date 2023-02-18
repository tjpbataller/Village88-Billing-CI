<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Billing extends CI_Model
{
    public function show_all()
    {
        return $this->filter_dates("");
    }

    public function filter_dates($dates)
    {
        $query = "SELECT MONTHNAME(charged_datetime) AS month, YEAR(charged_datetime) AS year, SUM(amount) as total FROM billing GROUP BY month, year HAVING year BETWEEN ? AND ? ORDER BY year";
        if(!$this->session->userdata("billings") && !$this->session->userdata("from") && !$this->session->userdata("to") && $dates == "")
        {
            $this->session->set_userdata("from", "2011-01-01");
            $this->session->set_userdata("to", "2011-12-30");
        }
        else if($this->session->userdata("billings") && $this->session->userdata("from") && $this->session->userdata("to") && $dates !== "")
        {
            $this->session->set_userdata("from", $dates["from"]);
            $this->session->set_userdata("to", $dates["to"]);
        }
        $values = array($this->session->userdata("from"), $this->session->userdata("to"));
        $result = $this->db->query($query, $values)->result_array();
        $this->session->set_userdata("billings", $result);
        return $this->session->userdata("billings");
    }
}
?>