<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_blog');
    }

    public function index()
    {
        $data = [
            'blog'          => $this->db->get('blog')->result_array(),
            'category'      => $this->db->get('category')->result_array(),
            'category_type' => $this->M_blog->filter_type('category'),
        ];

        $this->load->view('template/header', $data);
        $this->load->view('pages/blog', $data);
        $this->load->view('template/footer');
    }

    public function detail($slug)
    {
        $data = [
            'produk_lain'   => $this->db->get('produk')->result_array(),
            'blog'          => $this->M_blog->get_blogSlug($slug),
            'category'      => $this->db->get('category')->result_array(),
        ];
        $this->load->view('template/header');
        $this->load->view('pages/detail_blog', $data);
        $this->load->view('template/footer');
    }
}
