<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-J5n77gHAnUAa65w8A8p0ZvRT', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');	
    }

    public function index()
    {
    	$this->load->view('checkout_snap');
    }

	// public function order()
    // {
    // 	$data['order'] = $this->db->get('history_order')->result();
	// 	$this->load->view('Admin/index', $data);
    // }

	//request data provinsi
	public function dataprovinsi()
    {
    	$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"key: 11998244d9f67cbbf1f46111e5b1cbf6"
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		echo "cURL Error #:" . $err;
		} else {
		//konversi data ke bentuk array
		$array_response = json_decode($response,TRUE);
		//mengambil data yang diperlukan kemudian disimpan dalam variabel
		$dataprovinsi = $array_response["rajaongkir"]["results"];

		echo "<option value=''>--Pilih Provinsi--</option>";

		//pengulangan untuk menampilkan option berupa data provinsi dan membuat atribut untuk menampung data yang diperulkan
		foreach ($dataprovinsi as $key => $tiap_provinsi) {
			echo "<option value='".$tiap_provinsi["province_id"]."' id_provinsi='".$tiap_provinsi["province_id"]."'>";
			echo $tiap_provinsi["province"];
			echo "</option>";
		}
		}
    }

	//request data distrik
	public function datadistrik()
	{
		$id_provinsi_terpilih = $_POST["id_provinsi"];
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=".$id_provinsi_terpilih,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"key: 11998244d9f67cbbf1f46111e5b1cbf6"
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		echo "cURL Error #:" . $err;
		} else {
		//konversi data ke bentuk array
		$array_response = json_decode($response,TRUE);
		//mengambil data yang diperlukan kemudian disimpan dalam variabel
		$data_distrik = $array_response["rajaongkir"]["results"];

		echo "<option value=''>--Pilih Distrik--</option>";
		
		//pengulangan untuk menampilkan option berupa data distrik dan membuat atribut untuk menampung data yang diperulukan
		foreach ($data_distrik as $key => $tiap_distrik) {
			echo "<option value=''
			id_distrik='".$tiap_distrik["city_id"]."' 
			nama_provinsi='".$tiap_distrik["province"]."'
			nama_distrik='".$tiap_distrik["city_name"]."'
			tipe_distrik='".$tiap_distrik["type"]."'
			kodepos='".$tiap_distrik["postal_code"]."'    >";
			echo $tiap_distrik["type"]." ";
			echo $tiap_distrik["city_name"];
			echo "</option>";
		}
		}
	}

	//request data paket
	public function datapaket()
	{
		//menampung data yang dikirimkan dari ajax
		$ekspedisi = $_POST["ekspedisi"];
		$distrik = $_POST["distrik"];
		$berat = $_POST["berat"];
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		//(456 merupakan id dari kota tangerang), memasukkan data
		CURLOPT_POSTFIELDS => "origin=456&destination=".$distrik."&weight=".$berat."&courier=".$ekspedisi,
		CURLOPT_HTTPHEADER => array(
			"content-type: application/x-www-form-urlencoded",
			"key: 11998244d9f67cbbf1f46111e5b1cbf6"
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		echo "cURL Error #:" . $err;
		} else {
		//konversi data ke bentuk array
		$array_response = json_decode($response,TRUE);
		//mengambil data yang diperlukan kemudian disimpan dalam variabel
		$datapaket = $array_response["rajaongkir"]["results"]["0"]["costs"];

		echo "<option value=''>--Pilih Paket--</option>";

		//pengulangan untuk menampilkan option berupa data paket dan membuat atribut untuk menampung data yang diperulukan
		foreach ($datapaket as $key => $tiap_paket) {
			echo "<option
			paket='".$tiap_paket["service"]."'
			ongkir='".$tiap_paket["cost"]["0"]["value"]."'
			etd='".$tiap_paket["cost"]["0"]["etd"]."'>";
			echo $tiap_paket["service"]." ";
			echo number_format($tiap_paket["cost"]["0"]["value"])." ";
			echo $tiap_paket["cost"]["0"]["etd"];
			echo "</option>";
		}
		}
	}


    public function token()
    {
		//menangkap data yang dikirimkan dari ajax
		$nama_produk = $this->input->post('nama_produk');
		$nama = $this->input->post('nama');
		$no = $this->input->post('no');
		$qty = $this->input->post('qty');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$harga_produk = $this->input->post('harga_produk');
		$Htotal = $this->input->post('Htotal');
		$Htot = $this->input->post('Htot');
		$ongkir = $this->input->post('ongkir');
		$paket = $this->input->post('paket');
		$ekspedisi = $this->input->post('ekspedisi');
		// Required
		$transaction_details = array(
		  'order_id' => rand(),
		  'gross_amount' => $Htot, // no decimal allowed for creditcard (harga total)
		);

		// Optional
		$item1_details = array(
		  'id' => 'a1',
		  'price' => $harga_produk, //harga produk
		  'quantity' => $qty, // quantity
		  'name' => $nama_produk // nama produk
		);

		// Optional
		$item2_details = array(
		  'id' => 'a2',
		  'price' => $ongkir, // harga ongkir
		  'quantity' => 1,
		  'name' => "Delivery Charges ($ekspedisi $paket)" //nama ekspedisi dan paket
		);

		// Optional
		$item_details = array ($item1_details, $item2_details);

		// // Optional
		// $billing_address = array(
		//   'first_name'    => "Andri",
		//   'last_name'     => "Litani",
		//   'address'       => "Mangga 20",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16602",
		//   'phone'         => "081122334455",
		//   'country_code'  => 'IDN'
		// );

		// Optional
		$shipping_address = array(
		//   'first_name'    => "Obet",
		//   'last_name'     => "Supriadi",
		  'address'       => $alamat, //alamat pengiriman
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16601",
		//   'phone'         => "08113366345",
		//   'country_code'  => 'IDN'
		);

		// Optional
		$customer_details = array(
		  'first_name'    => $nama, //nama pengirim
		  'email'         => $email, //email pengirim
		  'phone'         => $no, //nomor telepon pengirim
		  'shipping_address'=> $shipping_address //alamat pengirim yang menyambung dari variavel shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'minute', 
            'duration'  => 30
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }

    public function finish()
    {
    	$result = json_decode($this->input->post('result_data'), true);
		//menampung value yang didapat dari form
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no = $this->input->post('no');
		$alamat = $this->input->post('alamat');

		//menyimpan data ke dalam database
    	$data = [
			'order_id' => $result['order_id'],
			'nama' => $nama,
			'email' => $email,
			'no' => $no,
			'alamat' => $alamat,
			'gross_amount' => $result['gross_amount'],
			'payment_type' => $result['payment_type'],
			'transaction_time' => $result['transaction_time'],
			'bank' => $result['va_numbers'][0]["bank"],
			'va_number' => $result['va_numbers'][0]["va_number"],
			'status_code' => $result['status_code']
		];

		$simpan = $this->db->insert('history_order',$data);
		if($simpan){
			// echo "Sukses";
			redirect('index.php');
			// echo '<script type="text/javascript">
  	// 		alert("Terima Kasih");
			// </script>';
			// window.location= "Bicycle.php";
		}
		else{
			echo "gagal";
		}
    }
}
