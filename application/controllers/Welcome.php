<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$data = [
			'category'		=> $this->db->get('category')->result_array(),
			'product'		=> $this->db->get_where('produk', ['list_popular' => 1, 'stok !=' => 0])->result_array()
		];

		$this->load->view('template/header', $data);
		$this->load->view('pages/index', $data);
		$this->load->view('template/footer');
	}
}
