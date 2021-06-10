<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Model
{
    public function get_produkId($id)
    {
        return $this->db->get_where('produk', ['id' => $id])->row_array();
    }

    public function filter_type($type)
    {
        $this->db->distinct();
        $this->db->select($type);
        $this->db->from('produk');
        return $this->db->get();
    }

    public function get_produkSlug($slug)
    {
        return $this->db->get_where('produk', ['slug' => $slug])->row_array();
    }

    public function getProduk()
    {
        $this->db->where('stok' != 0);
        $this->db->get('produk');
    }
}
