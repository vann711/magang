<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function countAllData()
    {
        return $this->db->get('history_order')->num_rows();
    }

    public function getAllData()
    {
        return $this->db->get('history_order')->result_array();
    }

    public function getData($limit, $start)
    {
        return $this->db->get('history_order', $limit, $start)->result_array();
    }
}
