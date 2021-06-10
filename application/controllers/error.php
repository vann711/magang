<?php
if( ! defined('BASEPATH')) or exit('No direct script access allowed');

class Error extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('error404.php');
    }
}