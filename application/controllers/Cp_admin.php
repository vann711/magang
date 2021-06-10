<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cp_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_produk');
        $this->load->model('M_admin');
        $this->load->library('form_validation');
    }

    // auth
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $data = [
            'user'   => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];

        if ($data['user'] != null) {
            redirect('cp_admin/dashboard');
        } else {
            if ($this->form_validation->run() == false) {
                $this->load->view('admin/header');
                $this->load->view('admin/auth');
                $this->load->view('admin/footer');
            } else {
                $this->_login();
            }
        }
    }

    public function _login()
    {
        $email = $this->input->post('email', true);
        $pass = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if (password_verify($pass, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id'],
                ];
                // set userdata ke session
                $this->session->set_userdata($data);

                if ($user['role_id'] == 2) {
                    redirect('cp_admin/dashboard');
                } else {
                    redirect('cp_admin/s_admin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password</div>');
                redirect('cp_admin/');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email not Registered</div>');
            redirect('cp_admin/');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been Logout</div>');
        redirect('cp_admin/');
    }

    public function user()
    {
        $data = [
            'pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->num_rows(),
            'notif_pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->result_array(),
        ];
        $this->load->view('admin/header');
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('admin/footer');
    }

    public function changePass()
    {
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password Dont Match',
            'min_length' => 'Password to short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data = [
                'pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->num_rows(),
                'notif_pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->result_array(),
            ];
            $this->load->view('admin/header');
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/profile', $data);
            $this->load->view('admin/footer');
        } else {
            $data = [
                'password' => password_hash($this->input->post("password1"), PASSWORD_DEFAULT),
            ];
            $this->db->where('email', $this->session->userdata('email'));
            $this->db->update('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success</strong> to change Password.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
            redirect('cp_admin/dashboard');
        }
    }
    // auth end

    // dashboard
    public function Dashboard()
    {
    

        if ($this->session->userdata('role_id') == 2) {

        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/sepeda/cp_admin/dashboard/index';
        $config['total_rows'] = $this->M_admin->countAllData();
        $config['per_page'] = 10;

        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);

            $data = [
                'pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->num_rows(),
                'notif_pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->result_array(),
                'pesanan_selesai'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 1])->num_rows(),
                'pesanan_list'   => $this->db->get_where('pesanan', ['is_active' => 1])->result_array(),
                'jasa'      => $this->db->get('jasa')->row_array(),
                'produk'    => $this->db->get('produk')->num_rows(),
                'history_list' => $this->db->order_by('transaction_time', 'desc'),
                'history_list' => $this->M_admin->getData($config['per_page'], $data['start']),
                'gross_amount' => $this->db->get_where('history_order')->result_array(),
            ];
            $this->load->view('admin/header');
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('admin/footer');
        } elseif ($this->session->userdata('role_id') == 1) {
            redirect('cp_admin/s_admin');
        } else {
            redirect('cp_admin/');
        }
    }

    // end dashboard


    // category & subcategory
    public function category()
    {
        if ($this->session->userdata('role_id') == 2) {
            $data = [
                'category' => $this->db->get('category')->result_array(),
                'subcategory' => $this->db->get('slug')->result_array(),
                'pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->num_rows(),
                'notif_pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->result_array(),
            ];
            $this->load->view('admin/header');
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/category_v', $data);
            $this->load->view('admin/footer');
        } elseif ($this->session->userdata('role_id') == 1) {
            redirect('cp_admin/s_admin');
        } else {
            redirect('cp_admin/');
        }
    }

    public function addCategory()
    {
        $this->form_validation->set_rules('nama', 'Category name', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Failed</strong> to Add Category.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
            redirect('cp_admin/category');
        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
            ];

            $this->db->insert('category', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success</strong> to Add Category.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
            redirect('cp_admin/category');
        }
    }
    public function addSubCategory()
    {
        $this->form_validation->set_rules('nama', 'Category name', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Failed</strong> to Add Sub Category.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
            redirect('cp_admin/category');
        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
                'category' => $this->input->post('category'),
            ];

            $this->db->insert('slug', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success</strong> to Add Sub Category.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
            redirect('cp_admin/category');
        }
    }
    public function deleteSubCategory($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('slug');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success</strong> to Delete Sub Category.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
        redirect('cp_admin/category');
    }
    public function deleteCategory($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('category');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success</strong> to Delete Category.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
        redirect('cp_admin/category');
    }
    // end category


    // Product
    public function product()
    {
        if ($this->session->userdata('role_id') == 2) {
            $data = [
                'produk'    => $this->db->get('produk')->result_array(),
                'category'  => $this->db->get('category')->result_array(),
                'subcategory'  => $this->db->get('slug')->result_array(),
                'notif_pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->result_array(),
                'pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->num_rows(),
            ];
            $this->load->view('admin/header');
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/product_v', $data);
            $this->load->view('admin/footer');
        } elseif ($this->session->userdata('role_id') == 1) {
            redirect('cp_admin/s_admin');
        } else {
            redirect('cp_admin/');
        }
    }

    public function productAdd()
    {
        if ($this->session->userdata('role_id') == 2) {
            $data = [
                'produk'    => $this->db->get('produk')->result_array(),
                'category'  => $this->db->get('category')->result_array(),
                'subcategory'  => $this->db->get('slug')->result_array(),
                'notif_pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->result_array(),
                'pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->num_rows(),
            ];
            $this->load->view('admin/header');
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/product_add_v', $data);
            $this->load->view('admin/footer');
        } elseif ($this->session->userdata('role_id') == 1) {
            redirect('cp_admin/s_admin');
        } else {
            redirect('cp_admin/');
        }
    }

    public function addProduk()
    {
        $config['upload_path']          = './assets/images/produk';
        $config['allowed_types']        = 'jpeg|jpg|png|PNG';
        $config['max_size']             = 5000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Failed</strong> to Add Product.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
            redirect('cp_admin/product');
        } else {
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
            $nama   = $this->input->post('name', true);
            $category   = $this->input->post('category');
            $sub   =  $this->input->post('sub');
            $stok   = $this->input->post('stok');
            $berat   = $this->input->post('berat');
            $harga   = $this->input->post('harga');
            $warna   = $this->input->post('warna');
            $merk   = $this->input->post('merk');
            $deskripsi   = $this->input->post('deskripsi');
            $popular  = $this->input->post('popular', true);
            $diskon  = $this->input->post('diskon', true);
            $harga_diskon  = $this->input->post('harga_d');
            $slug = url_title($this->input->post('name'));

            $data = [
                'nama'          => $nama,
                'slug'          => $slug,
                'category'      => $category,
                'subcategory'   => $sub,
                'deskripsi'     => $deskripsi,
                'warna'         => $warna,
                'merk'          => $merk,
                'stok'          => $stok,
                'berat'         => $berat,
                'harga'         => $harga,
                'list_popular'  => $popular,
                'diskon'        => $diskon,
                'harga_diskon'  => $harga_diskon,
                'gambar'        => $gambar,
            ];

            $this->db->insert('produk', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success</strong> to Add Product.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
            redirect('cp_admin/product');
        }
    }

    public function getId($id)
    {
        if ($this->session->userdata('role_id') == 2) {
            $data = [
                'produk'    => $this->M_produk->get_produkId($id),
                'category'  => $this->db->get('category')->result_array(),
                'subcategory'  => $this->db->get('slug')->result_array(),
                'notif_pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->result_array(),
                'pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->num_rows(),
            ];
            $this->load->view('admin/header');
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/product_edit_v', $data);
            $this->load->view('admin/footer');
        } elseif ($this->session->userdata('role_id') == 1) {
            redirect('cp_admin/s_admin');
        } else {
            redirect('cp_admin/');
        }
    }

    public function deleteProduk($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('produk');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success</strong> to Delete Product.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
        redirect('cp_admin/product');
    }

    public function editProduk()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('stok', 'Stok', 'required|trim|numeric');
        $this->form_validation->set_rules('berat', 'berat', 'required|trim|numeric');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim|numeric');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Failed</strong> to Edit Produk.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
            redirect('cp_admin/product');
        } else {
            $nama   = $this->input->post('nama', true);
            $category   = $this->input->post('category');
            $sub   = $this->input->post('sub');
            $stok   = $this->input->post('stok');
            $berat   = $this->input->post('berat');
            $harga   = $this->input->post('harga');
            $warna   = $this->input->post('warna');
            $merk   = $this->input->post('merk');
            $deskripsi   = $this->input->post('deskripsi');
            $slug = url_title($this->input->post('nama'));
            $popular  = $this->input->post('popular', true);
            $diskon  = $this->input->post('diskon', true);
            $harga_diskon  = $this->input->post('harga_d');

            $data = [
                'nama'          => $nama,
                'slug'          => $slug,
                'category'      => $category,
                'subcategory'   => $sub,
                'deskripsi'     => $deskripsi,
                'warna'         => $warna,
                'merk'          => $merk,
                'stok'          => $stok,
                'berat'         => $berat,
                'harga'         => $harga,
                'list_popular'  => $popular,
                'diskon'        => $diskon,
                'harga_diskon'  => $harga_diskon,
            ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('produk', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success</strong> to Edit Product.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
            redirect('cp_admin/product');
        }
    }
    // end produk


    // payment & ongkir
    public function payment()
    {
        if ($this->session->userdata('role_id') == 2) {
            $data = [
                'payment' => $this->db->get('payment')->result_array(),
                'jasa' => $this->db->get('jasa')->result_array(),
                'notif_pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->result_array(),
                'pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->num_rows(),
            ];
            $this->load->view('admin/header');
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/payment_v', $data);
            $this->load->view('admin/footer');
        } elseif ($this->session->userdata('role_id') == 1) {
            redirect('cp_admin/s_admin');
        } else {
            redirect('cp_admin/');
        }
    }

    public function editJasa()
    {
        $data = [
            'nama'      => $this->input->post('nama'),
            'harga'      => $this->input->post('harga'),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('jasa', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success</strong> to Edit Jasa Ongkir.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
        redirect('cp_admin/payment');
    }

    public function addBank()
    {
        if ($this->session->userdata('role_id') == 2) {
            $data = [
                'pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->num_rows(),
                'notif_pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->result_array(),
            ];
            $this->load->view('admin/header');
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/payment_add_v', $data);
            $this->load->view('admin/footer');
        } elseif ($this->session->userdata('role_id') == 1) {
            redirect('cp_admin/s_admin');
        } else {
            redirect('cp_admin/');
        }
    }

    public function addPayment()
    {
        $data = [
            'bank'      => $this->input->post('nama'),
            'no_bank'      => $this->input->post('no_rek'),
            'nama_bank'      => $this->input->post('namap'),
        ];

        $this->db->insert('payment', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success</strong> to Add Bank.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
        redirect('cp_admin/payment');
    }

    public function editBank($id)
    {
        if ($this->session->userdata('role_id') == 2) {
            $data = [
                'pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->num_rows(),
                'bank'      => $this->db->get_where('payment', ['id' => $id])->row_array(),
                'notif_pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->result_array(),
            ];
            $this->load->view('admin/header');
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/payment_edit_v', $data);
            $this->load->view('admin/footer');
        } elseif ($this->session->userdata('role_id') == 1) {
            redirect('cp_admin/s_admin');
        } else {
            redirect('cp_admin/');
        }
    }

    public function editPayment()
    {
        $data = [
            'bank'      => $this->input->post('nama'),
            'no_bank'      => $this->input->post('no_rek'),
            'nama_bank'      => $this->input->post('namap'),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('payment', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success</strong> to edit Bank.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
        redirect('cp_admin/payment');
    }

    public function deletePayment($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('payment');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success</strong> to Delete Bank.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
        redirect('cp_admin/payment');
    }

    // END payment & ongkir


    // Blog
    public function blog()
    {
        if ($this->session->userdata('role_id') == 2) {
            $data = [
                'blog' => $this->db->get('blog')->result_array(),
                'pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->num_rows(),
                'notif_pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->result_array(),
            ];
            $this->load->view('admin/header');
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/blog_v', $data);
            $this->load->view('admin/footer');
        } elseif ($this->session->userdata('role_id') == 1) {
            redirect('cp_admin/s_admin');
        } else {
            redirect('cp_admin/');
        }
    }

    public function tambahBlog()
    {
        if ($this->session->userdata('role_id') == 2) {
            $data = [
                'pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->num_rows(),
                'notif_pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->result_array(),
            ];
            $this->load->view('admin/header');
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/blog_add_v', $data);
            $this->load->view('admin/footer');
        } elseif ($this->session->userdata('role_id') == 1) {
            redirect('cp_admin/s_admin');
        } else {
            redirect('cp_admin/');
        }
    }

    public function addBlog()
    {
        $config['upload_path']          = './assets/images/blog';
        $config['allowed_types']        = 'jpeg|jpg|png|PNG';
        $config['max_size']             = 100000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Failed</strong> to Add Blog.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
            redirect('cp_admin/blog');
        } else {
            $gambar     = $this->upload->data();
            $gambar     = $gambar['file_name'];
            $isi        = $this->input->post('isi');
            $judul      = $this->input->post('judul');
            $category   = $this->input->post('category');

            timezone_open("Asia/Bangkok");

            $data = [
                'judul'     => $judul,
                'category'     => $category,
                'isi'       => $isi,
                'slug'      => url_title($this->input->post('judul')),
                'image'    => $gambar,
                'create_at' => date('y-m-d')
            ];

            $this->db->insert('blog', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success</strong> to Add Blog.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
            redirect('cp_admin/blog');
        }
    }

    public function editBlog($slug)
    {
        if ($this->session->userdata('role_id') == 2) {
            $data = [
                'pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->num_rows(),
                'blog'      => $this->db->get_where('blog', ['slug' => $slug])->row_array(),
                'notif_pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->result_array(),
            ];
            $this->load->view('admin/header');
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/blog_edit_v', $data);
            $this->load->view('admin/footer');
        } elseif ($this->session->userdata('role_id') == 1) {
            redirect('cp_admin/s_admin');
        } else {
            redirect('cp_admin/');
        }
    }

    public function editingBlog()
    {
        $data = [
            'judul'         => $this->input->post('judul'),
            'isi'           => $this->input->post('isi'),
            'slug'          => url_title($this->input->post('judul'))
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('blog', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success</strong> to edit Blog.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
        redirect('cp_admin/blog');
    }

    public function deleteBlog($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('blog');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success</strong> to Delete Blog.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
        redirect('cp_admin/blog');
    }

    // pesanan
    public function detail_pesanan($id)
    {
        if ($this->session->userdata('role_id') == 2) {
            $data = [
                'pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->num_rows(),
                'pesan'      => $this->db->get_where('pesanan', ['id' => $id])->row_array(),
                'notif_pesanan'   => $this->db->get_where('pesanan', ['is_active' => 1, 'is_acc' => 0])->result_array(),
            ];
            $this->load->view('admin/header');
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/pesanan_v', $data);
            $this->load->view('admin/footer');
        } elseif ($this->session->userdata('role_id') == 1) {
            redirect('cp_admin/s_admin');
        } else {
            redirect('cp_admin/');
        }
    }

    public function delete_pesanan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pesanan');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success</strong> to Delete pesanan.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
        redirect('cp_admin/dashboard');
    }

    public function acc_pesanan($id)
    {
        $this->db->where('id', $id);
        $this->db->update('pesanan', ['is_acc' => 1]);

        $pesan = $this->db->get_where('pesanan', ['id' => $id])->row_array();
        $email = $pesan['email'];

        $this->_sendEmailAcc($email);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success</strong> to Acc this order.
              Jangan lupa Untuk hubungi Customer
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
        redirect('cp_admin/dashboard');
    }

    public function change_pesanan($id)
    {
        $this->db->where('id', $id);
        $this->db->update('pesanan', ['is_acc' => 0]);

        $pesan = $this->db->get_where('pesanan', ['id' => $id])->row_array();
        $email = $pesan['email'];

        $this->_sendEmailnotAcc($email);

        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Success</strong> to not ACC this order.
              Jangan lupa Untuk hubungi Customer
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
        redirect('cp_admin/dashboard');
    }

    function _sendEmailAcc($email)
    {
        $from_email = 'ghiffa.jayabike78@gmail.com'; //change this to yours
        $subject = 'Pesanan Diterima';
        $message = 'Dear User,
                    <br /><br />
                    Pesanan Kamu telah kami terima dan akan kami proses, akan ada yang mengubungi kamu melalui nomor yang kamu input saat order
                    <br /><br />
                    Thanks
                    <br />
                    Ghiffa Jaya Bike Team';

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name
        $config['smtp_user'] = 'ghiffa.jayabike78@gmail.com';
        $config['smtp_port'] = '465'; //smtp port number
        $config['smtp_pass'] = 'fauzi78a'; //$from_email password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['newline'] = "\r\n"; //use double quotes

        $this->load->library('email', $config);
        $this->email->from($from_email, 'Status Pesanan');
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);
        if ($this->email->send()) {
            return true;
        } else {
            echo "gagal";
            echo $this->email->print_debugger();
            die;
        }
    }

    function _sendEmailnotAcc($email)
    {
        $from_email = 'ghiffa.jayabike78@gmail.com'; //change this to yours
        $subject = 'Pesanan Tidak Dapat di proses';
        $message = 'Dear User,
                    <br /><br />
                    Pesanan Kamu tidak dapat kami proses karena lain hal, akan ada yang mengubungi kamu melalui nomor yang kamu input saat order untuk pengembalian dana
                    <br /><br />
                    Thanks
                    <br />
                    Ghiffa Jaya Bike Team';

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name
        $config['smtp_user'] = 'ghiffa.jayabike78@gmail.com';
        $config['smtp_port'] = '465'; //smtp port number
        $config['smtp_pass'] = 'fauzi78a'; //$from_email password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['newline'] = "\r\n"; //use double quotes

        $this->load->library('email', $config);
        $this->email->from($from_email, 'Status Pesanan');
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);
        if ($this->email->send()) {
            return true;
        } else {
            echo "gagal";
            echo $this->email->print_debugger();
            die;
        }
    }

    // end email

    // sAdmin
    public function s_admin()
    {
        if ($this->session->userdata('role_id') == 1) {
            $data = [
                'user'  => $this->db->get_where('user', ['role_id' => 2])->result_array(),
            ];
            $this->load->view('s_admin/header');
            $this->load->view('s_admin/topbar');
            $this->load->view('s_admin/index', $data);
            $this->load->view('s_admin/footer');
        } elseif ($this->session->userdata('role_id') == 2) {
            redirect('cp_admin/dashboard');
        } else {
            redirect('cp_admin/');
        }
    }

    public function ganti_sAdmin()
    {
        $data = [
            'email'     => $this->input->post('email'),
            'password'  => password_hash($this->input->post("password"), PASSWORD_DEFAULT),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong> to change Password.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
        redirect('cp_admin/s_admin');
    }
}
