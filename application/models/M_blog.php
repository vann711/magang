<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_blog extends CI_Model
{

    public function filter_type($type)
    {
        $this->db->distinct();
        $this->db->select($type);
        $this->db->from('blog');
        return $this->db->get();
    }

    public function get_blogSlug($slug)
    {
        return $this->db->get_where('blog', ['slug' => $slug])->row_array();
    }
}
