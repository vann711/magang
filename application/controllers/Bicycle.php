<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bicycle extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_produk');
    }

    public function index()
    {
        $data = [
            'produk'            => $this->db->get_where('produk', ['stok !=' => 0])->result_array(),
            'category'          => $this->db->get('category')->result_array(),
            'merk_type'         => $this->M_produk->filter_type('merk'),
            'warna'             => $this->M_produk->filter_type('warna'),
            'category_type'     => $this->M_produk->filter_type('category')
        ];

        $this->load->view('template/header', $data);
        $this->load->view('pages/Bicycle', $data);
        $this->load->view('template/footer');
    }

    public function detail($slug)
    {
        $data = [
            'produk_lain'   => $this->db->get('produk')->result_array(),
            'produk'        => $this->M_produk->get_produkSlug($slug),
            'category'      => $this->db->get('category')->result_array(),
        ];
        $this->load->view('template/header');
        $this->load->view('pages/detail_bicycle', $data);
        $this->load->view('template/footer');
    }

    public function order($slug)
    {
        $data = [
            'produk'        => $this->M_produk->get_produkSlug($slug),
            'category'      => $this->db->get('category')->result_array(),
            'jasa'          => $this->db->get_where('jasa', ['id' => 1])->row_array(),
            'bank'          => $this->db->get_where('payment')->result_array(),
        ];

        $this->load->view('template/header');
        $this->load->view('pages/buy_bicycle', $data);
        $this->load->view('template/footer');
    }

    public function buy()
    {
        $config['upload_path']          = './assets/images/pesanan';
        $config['allowed_types']        = 'jpeg|jpg|png|PNG';
        $config['max_size']             = 5000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('message', '<div class="" role="alert">
                  <strong>Failed</strong> to Order Item.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
            redirect('Bicycle/');
        } else {
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
            $nama   = $this->input->post('nama', true);
            $email   = $this->input->post('email', true);
            $alamat   =  $this->input->post('alamat', true);
            $id_p   = $this->input->post('id_p');
            $item   = $this->input->post('item');
            $namarek   = $this->input->post('namarek');
            $no   = $this->input->post('no');
            $qty   = $this->input->post('qty');
            $Htotal   = $this->input->post('Htotal');
            $is_active   = 0;
            $is_acc   = 0;

            $data = [
                'kode_pesan'        => $id_p,
                'qty'               => $qty,
                'gambar'            => $gambar,
                'item_pesanan'      => $item,
                'nama'              => $nama,
                'email'             => $email,
                'namarek'           => $namarek,
                'no_hp'             => $no,
                'alamat'            => $alamat,
                'harga_total'       => $Htotal,
                'is_active'         => $is_active,
                'is_acc'            => $is_acc,
                'date_created'      => time(),
            ];

            $token = base64_encode(random_bytes(31));
            $user_token = [
                'email'         => $email,
                'token'         => $token,
                'date_created'  => time()
            ];

            $user = $this->db->get_where('user_token', ['email' => $email])->row_array();

            if ($user) {
                $this->session->set_flashdata('message', '<h5 class="" role="alert" style="color: red">
                  <strong>Gagal</strong> Email Kamu belum di verifikasi. 
                </h5>');
                redirect('Bicycle/');
            } else {

                $this->db->insert('pesanan', $data);
                $this->db->insert('user_token', $user_token);

                $this->_sendEmail($token);


                $this->session->set_flashdata('message', '<div class="" role="alert" style="color: red">
                    <strong>Success</strong> to Order this product.
                    Please Check your email
                  </div>');
                redirect('Bicycle/');
            }
        }
    }

    function _sendEmail($token)
    {
        $from_email = 'ghiffa.jayabike78@gmail.com'; //change this to yours
        $subject = 'Verify Your Email Address';
        $message = 'Dear User,
                    <br /><br />
                    Please click on the below activation link to verify your email address.
                    <br /><br /> 
                    <a href="' . base_url('Bicycle/') . 'verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '"> Click Here!!</a>
                    <br /><br /><br />
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
        $this->email->from($from_email, 'Verify Your order on Ghiffa Jaya bike');
        $this->email->to($this->input->post('email'));
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

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user_token', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('pesanan');

                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class=""style="color: red">
                    <strong>Success</strong> Aktivasi Email. pesananmu akan di proses. 
                    <a>Hubungi kami jika ada pertanyaan via Whatsapp atau email</a>
                  </div>');
                    redirect('Bicycle/');
                } else {
                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('message', '<div class=""style="color: red">
                    <strong>Failed</strong> Token dan email sudah kadaluarsa.
                  </div>');
                    redirect('Bicycle/');
                }
            } else {
                $this->db->delete('user_token', ['email' => $email]);
                $this->session->set_flashdata('message', '<div class=""style="color: red">
                    <strong>Failed</strong> Aktivasi email.
                  </div>');
                redirect('Bicycle/');
            }
        } else {
            $this->db->delete('user_token', ['email' => $email]);
            $this->session->set_flashdata('message', '<div class=""style="color: red">
                    <strong>Failed</strong> Aktivasi email.
                  </div>');
            redirect('Bicycle/');
        }
    }

    public function clearUser()
    {
        $userToken     = $this->db->get('user_token')->result_array();
        $user     = $this->db->get('pesanan')->result_array();

        foreach ($userToken as $ut) {
            foreach ($user as $u) {
                $date_created = time() - $ut['date_created'];
                $timeLimit = 60 * 60 * 2;
                echo $date_created;
                echo " ";
                echo $timeLimit;
                if ($date_created >= $timeLimit && $u['is_active'] == 0) {
                    $this->db->where(['email' => $ut['email']]);
                    $this->db->delete('user_token');

                    $this->db->where(['email' => $ut['email']]);
                    $this->db->delete('pesanan');
                }
            }
        }
    }
}
