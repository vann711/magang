<script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-Wjzw51mSIsAWyLzQ"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<div class="banner-bg banner-sec">
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/') ?>images/logos.png" alt="" width="25%" /></a>
            </div>
            <div class="top-nav">
                <label class="mobile_menu" for="mobile_menu">
                    <span>Menu</span>
                </label>
                <input id="mobile_menu" type="checkbox">
                <ul class="nav">
                    <li class="dropdown1"><a href="<?= base_url('Bicycle/') ?>">SEPEDA</a>
                        <ul class="dropdown2">
                            <?php foreach ($category as $c) : ?>
                                <li><a href="<?= base_url('Bicycle/') ?>"><?= $c['nama'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="dropdown1">
                        <a class="shop" href="<?= base_url('blog/') ?>">ARTIKEL</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--/banner-->

<div class="cart">
    <div class="container">
        <div class="cart-top">
            <a href="<?= base_url('/') ?>">
                << home</a>
        </div>
        <div class="col-md-9 cart-items">
            <?= $this->session->flashdata('message'); ?>
            <h2>Keranjang Saya</h2>
            <div>
                <!-- <h4>Pembayaran Transfer ke :</h4> -->
                <hr style="border: 1px solid black;">
                <!-- <div class="container">
                    <div class="row">
                        <?php foreach ($bank as $bk) : ?>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <p><span>Bank :</span> <?= $bk['bank'] ?></p>
                                <p><span>An :</span> <?= $bk['nama_bank'] ?></p>
                                <p><span>No Rek :</span><?= $bk['no_bank'] ?></p>
                                <p>_____________________________</p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div> -->
            </div>
            <div class="cart-header">
                <div class="cart-sec">
                    <div class="cart-item cyc">
                        <img src="<?= base_url('assets/images/produk/' . $produk['gambar']) ?>" />
                    </div>
                    <div class="cart-item-info">
                    <h3><?= $produk['nama'] ?><span>Merk :<?= $produk['merk'] ?></h3>
                        <?php if ($produk['diskon'] == null) { ?>
                            <h4><span>Rp. </span> <?= number_format($produk['harga'], 0, ',', '.')  ?></h4>
                        <?php } else { ?>
                            <h4><span>Rp. </span> <?= number_format($produk['harga_diskon'], 0, ',', '.')  ?></h4>
                        <?php } ?>
                        <p class="qty">Qty ::</p>
                        <input min="1" type="number" id="quantity" name="quantity" value="1" onkeyup="myQty()" class="form-control input-small">
                    </div>
                    <div class="clearfix"></div>
                    <!-- <div class="delivery">
                        <p></p>
                        <span style="color: red;">Untuk Split payment harap hubungi <a href="https://api.whatsapp.com/send?phone=081261689501">Whatsapp</a></span>
                        <div class="clearfix"></div>
                    </div> -->
                </div>
            </div>

            <!-- ongkir -->
            <hr style="border: 1px solid black;">
            <div class="container">
                    <h3>Delivery</h3>
                    <form method="post">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Provinsi</label>
                                    <select class="form-control" name="nama_provinsi">
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Distrik</label>
                                    <select class="form-control" name="nama_distrik">

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Ekspedisi</label>
                                    <select class="form-control" name="nama_ekspedisi">
                                        <option value="">--Pilih Ekspedisi--</option>
                                        <option value="pos">Pos Indonesia</option>
                                        <option value="tiki">TIKI</option>
                                        <option value="jne">JNE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Paket</label>
                                    <select class="form-control" name="nama_paket">

                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- input hidden untuk menampung value  -->
                        <input type="text" name="total_berat" id="total_berat" value="<?= $produk['berat'] ?>" hidden>
                        <input type="text" name="provinsi" hidden>
                        <input type="text" name="distrik" hidden>
                        <input type="text" name="tipe" hidden>
                        <input type="text" name="kodepos" hidden>
                        <input type="text" name="ekspedisi" id="ekspedisi" hidden>
                        <input type="text" name="paket" id="paket" hidden>
                        <input type="text" name="ongkir" id="ongkir" hidden>
                            <?php if ($produk['diskon'] == null) { ?>
                                <input type="text" name="harga_barang" id="harga_barang" value="<?= $produk['harga'] ?>" hidden>
                            <?php } else { ?>
                                <input type="text" name="harga_barang" id="harga_barang" value="<?= $produk['harga_diskon'] ?>" hidden>
                            <?php } ?>
                        <input type="text" name="estimasi" hidden>
                    </form>
                </div>

                <script src="js/jquery.min.js"></script>
                <script type="js/bootstrap.min.js"></script>

                <script>
                    $(document).ready(function(){
                        //mengambil data provinsi
                        $.ajax({
                            type:'post',
                            url:'<?=site_url()?>/snap/dataprovinsi',
                            success:function(hasil_provinsi)
                            {
                                //menampilkan data provinsi ke dalam select "nama_provinsi"
                                $("select[name=nama_provinsi]").html(hasil_provinsi);
                            }
                        });

                        //jika select provinsi di change atau dipilih maka...
                        $("select[name=nama_provinsi]").on("change",function(){
                            //mengambil id_provinsi yang dipilih (dari atribut yang dibuat)
                            var id_provinsi_terpilih = $("option:selected",this).attr("id_provinsi");
                            //mengambil data distrik dari id_provinsi yang dipilih
                            $.ajax({
                                type:'post',
                                url:'<?=site_url()?>/snap/datadistrik',
                                data:'id_provinsi='+id_provinsi_terpilih,
                                success:function(hasil_distrik)
                                {
                                    //menampilkan data provinsi ke dalam select "nama_distrik"
                                    $("select[name=nama_distrik]").html(hasil_distrik);
                                }
                            });
                        });

                        //jika select ekspedisi di change atau dipilih maka...
                        $("select[name=nama_ekspedisi]").on("change",function(){

                            //mendapatkan ekspedisi yang dipilih
                            var ekspedisi_terpilih = $("select[name=nama_ekspedisi]").val();

                            //mendapatkan id_distrik yang dipilih
                            var distrik_terpilih = $("option:selected","select[name=nama_distrik]").attr("id_distrik");

                            //mendapatkan total_berat dari inputan
                            var qty = document.getElementById('quantity').value;
                            var berat = $("input[name=total_berat]").val();
                            qty_berat = qty * berat;
                            var total_berat = qty_berat;

                            //mengambil data paket dari ekspedisi yang dipilih
                            $.ajax({
                                type:'post',
                                url:'<?=site_url()?>/snap/datapaket',
                                data:'ekspedisi='+ekspedisi_terpilih+'&distrik='+distrik_terpilih+'&berat='+total_berat,
                                success:function(hasil_paket)
                                {
                                    $("select[name=nama_paket]").html(hasil_paket);

                                    //letakkan nama ekspedisi terpilih di input ekspedisi
                                    $("input[name=ekspedisi]").val(ekspedisi_terpilih);
                                }
                            })
                        });

                        //mengambil value
                        $("select[name=nama_distrik]").on("change",function(){
                            var prov = $("option:selected",this).attr("nama_provinsi");
                            var dist = $("option:selected",this).attr("nama_distrik");
                            var tipe = $("option:selected",this).attr("tipe_distrik");
                            var kodepos = $("option:selected",this).attr("kodepos");

                            //menyimpan value ke dalam input
                            $("input[name=provinsi]").val(prov);
                            $("input[name=distrik]").val(dist);
                            $("input[name=tipe]").val(tipe);
                            $("input[name=kodepos]").val(kodepos);
                        });

                        //mengambil value
                        $("select[name=nama_paket]").on("change",function(){
                            var paket = $("option:selected",this).attr("paket");
                            var ongkir = $("option:selected",this).attr("ongkir");
                            var etd = $("option:selected",this).attr("etd");

                            //menyimpan value ke dalam input
                            $("input[name=paket]").val(paket);
                            $("input[name=ongkir]").val(ongkir);
                            $("input[name=estimasi]").val(etd);

                            //menghitung harga total
                            var harga_barang = document.getElementById('harga_barang').value;
                            var qty = document.getElementById('quantity').value;
                            var total = qty * harga_barang;
                            var bilangan = total;
                            var Htotal = parseInt(ongkir) + parseInt(bilangan);
                            var Htot = Htotal;
                            var Htot_format = (Htotal).toLocaleString(
                            undefined, // leave undefined to use the visitor's browser 
                            // locale or a string like 'en-US' to override it.
                            { minimumFractionDigits: 2 }
                            );
                            $("input[name=Htot]").val(Htot);
                            $("input[name=Htot_format]").val(Htot_format);
                        })
                    });
                </script>
                <!-- ongkir -->
        </div>
        

        <div class="col-md-3 cart-total">
            <div class="price-details">
                <h3>Price Details</h3>
                <span>Total</span>
                <?php if ($produk['diskon'] == null) { ?>
                    <span class="total" id="item"><?= number_format($produk['harga'], 0, ',', '.')  ?></span>
                <?php } else { ?>
                    <span class="total" id="item"><?= number_format($produk['harga_diskon'], 0, ',', '.')  ?></span>
                <?php } ?>
                <span>Delivery Charges</span>
                <!-- <span class="total" id="ongkir"><?= number_format($jasa['harga'], 0, ',', '.')  ?></span> -->
                <input type="text" name="ongkir" disabled>
                <div class="clearfix"></div>
            </div>
            <h4 class="last-price">TOTAL</h4>
            <input type="text" name="Htot" id="Htot" hidden>
            <input type="text" name="Htot_format" disabled>
            <!-- <?php if ($produk['diskon'] == null) { ?>
                <?php $hargaT = $produk['harga'] + $jasa['harga'] ?>
                <span class="total final" id="total"><?= number_format($hargaT, 0, ',', '.')  ?></span>
            <?php } else { ?>
                <?php $hargaT = $produk['harga_diskon'] + $jasa['harga'] ?>
                <span class="total final" id="total"><?= number_format($hargaT, 0, ',', '.')  ?></span>
            <?php } ?> -->
            <br>
            <div class="clearfix"></div>

            
            <input type="text" id="id_p" name="id_p" value="<?= rand(100, 999) ?>" hidden>
            <input type="text" id="nama_produk" name="nama_produk" value="<?= $produk['nama'] ?>" hidden>
            <input type="text" id="qty" name="qty" value="1" hidden>
            <?php if ($produk['diskon'] == null) { ?>
                <?php $hargaT = $produk['harga'] + $jasa['harga'] ?>
            <?php } else { ?>
                <?php $hargaT = $produk['harga_diskon'] + $jasa['harga'] ?>
            <?php } ?>
            <input type="text" id="Htotal" name="Htotal" value="<?= $hargaT; ?>" hidden>

            <!-- input untuk menyimpan data pengirim -->
            <h3><strong>Pengiriman</strong></h3>
            <form id="payment-form" method="post" action="<?=site_url()?>/snap/finish">
            <input type="hidden" name="result_type" id="result-type" value="">
            <input type="hidden" name="result_data" id="result-data" value="">
            <input type="text" class="form-control" placeholder="Nama" id="nama" name="nama" required>
            <p></p>
            <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
            <p></p>
            <input type="number" class="form-control" placeholder="No Hp" id="no" name="no" required>
            <p></p>
            <textarea type="text" class="form-control" placeholder="Alamat Lengkap" name="alamat" id="alamat" required></textarea>
            <p></p>
            </form>
            
            <!-- <label for="bukti">Upload Bukti Transfer</label>
            <input type="file" id="image" name="image" required>
            <p></p>
            <button type="submit" class="btn btn-lg btn-outline-warning" data-toggle="modal" data-target="#exampleModalCenter" onclick="return alert('Tolong check email & verifikasi')">Order</button> -->
            <button class="btn btn-lg btn-outline-warning" id="pay-button">Pay!</button>
            
        </div>
    </div>
</div>
<?php if ($produk['diskon'] == null) { ?>
                <input type="text" id="harga_produk" name="item" value="<?= $produk['harga'] ?>" hidden>
            <?php } else { ?>
                <input type="text" id="harga_produk" name="item" value="<?= $produk['harga_diskon'] ?>" hidden>
            <?php } ?>

<!--midtrans-->
    <script type="text/javascript">
  
    $('#pay-button').click(function (event) {
      event.preventDefault();
      $(this).attr("disabled", "disabled");
    
    //variabel untuk menampung value yang didapat dari form
    var nama_produk = $("#nama_produk").val();
    var nama = $("#nama").val();
    var no = $("#no").val();
    var qty = $("#qty").val();
    var email = $("#email").val();
    var alamat = $("#alamat").val();
    var harga_produk = $("#harga_produk").val();
    var Htotal = $("#Htotal").val();
    var Htot = $("#Htot").val();
    var ongkir = $("#ongkir").val();
    var paket = $("#paket").val();
    var ekspedisi = $("#ekspedisi").val();
    $.ajax({
        type : 'POST',
      url: '<?=site_url()?>/snap/token',
      //data yang akan dikirimkan
      data : {nama:nama,no:no,qty:qty,email:email,alamat:alamat,Htotal:Htotal,nama_produk:nama_produk,harga_produk:harga_produk,ekspedisi:ekspedisi,Htot:Htot,ongkir:ongkir,paket:paket},
      cache: false,

      success: function(data) {
        //location = data;

        console.log('token = '+data);
        
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type,data){
          $("#result-type").val(type);
          $("#result-data").val(JSON.stringify(data));
          //resultType.innerHTML = type;
          //resultData.innerHTML = JSON.stringify(data);
        }

        snap.pay(data, {
          
          onSuccess: function(result){
            changeResult('success', result);
            console.log(result.status_message);
            console.log(result);
            $("#payment-form").submit();
          },
          onPending: function(result){
            changeResult('pending', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          },
          onError: function(result){
            changeResult('error', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          }
        });
      }
    });
  });

  </script>
  <!--midtrans-->




<!-- contact -->
<div class="contact">
    <div class="container">
        <h3>HUBUNGI KAMI</h3>
        <p>Apa bila ingin diantar langsung dan berlokasi di Tangerang</p>
        <div class="row mt-5" style="margin-top: 50px; margin-bottom: 50px;">
            <div class="row">
                <div class="col-lg-3 col-sm-6 mt-2">
                    <a href="https://api.whatsapp.com/send?phone=081261689501">
                        <img src="<?= base_url('assets/') ?>images/whatsappLogo.png" alt="ghiffa jaya bike" width="100px" height="50px">
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 mt-2">
                    <a href="mailto: ghiffa.jayabike78@gmail.com">
                        <img src="<?= base_url('assets/') ?>images/emailLogo.png" alt="ghiffa jaya bike" width="60px" height="40px">
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 mt-2">
                    <a href="https://www.facebook.com/profile.php?id=100062278608473">
                        <img src="<?= base_url('assets/') ?>images/fb.png" alt="ghiffa jaya bike" width="50px" height="40px">
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 mt-2">
                    <a href="https://www.instagram.com/ghiffajayabikes/">
                        <img src="<?= base_url('assets/') ?>images/ig.png" alt="ghiffa jaya bike" width="70px" height="50px">
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 mt-5">
                <h2>Ghiffa Jaya Bike</h2>
                <p>Telah menjual sepeda sejak 2015 dan terus berkembang untuk menjadi penjual sepeda di kota Tangerang</p>
            </div>
            <div class="col-md-4 mt-5">
                <h2>Mendukung</h2>
                <div class="row">
                    <div class="col-md-4 mt-2">
                        <img src="<?= base_url('assets/images/') ?>homecredit.png" alt="jualsepedatangerang" width="50px" height="50px">
                    </div>
                    <div class="col-md-4 mt-2">
                        <a href="https://www.tokopedia.com/ghiffajaya/">
                            <img src="<?= base_url('assets/') ?>images/tokped.png" alt="" width="70px" height="50px">
                        </a>
                    </div>
                    <div class="col-md-4 mt-2">
                        <img src="<?= base_url('assets/images/') ?>spektra.png" alt="jualsepedatangerang" width="70px" height="50px">
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <h2>Lokasi</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.669482075244!2d106.6085344!3d-6.2085518!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcbee77994c8fa857!2sGhiffa%20Jaya%20Bikes!5e0!3m2!1sid!2sid!4v1608621580364!5m2!1sid!2sid" width="90%" height="10%" frameborder="0" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>

<script>
    function myQty() {
        var ongkir = <?= $jasa['harga'] ?>;
        console.log(ongkir)
        var qty = document.getElementById('quantity').value;
        <?php if ($produk['diskon'] == null) { ?>
            var harga = <?= $produk['harga'] ?>;
        <?php } else { ?>
            var harga = <?= $produk['harga_diskon'] ?>;
        <?php } ?>

        var total = qty * harga;
        var bilangan = total;
        var totalH = total + ongkir

        var reverse = bilangan.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
        ribuan = ribuan.join('.').split('').reverse().join('');

        var reversee = totalH.toString().split('').reverse().join(''),
            ribuann = reversee.match(/\d{1,3}/g);
        ribuann = ribuann.join('.').split('').reverse().join('');

        document.getElementById('qty').value = qty;
        document.getElementById('item').innerHTML = ribuan;
        document.getElementById('total').innerHTML = ribuann;
        document.getElementById('Htotal').value = totalH;
    }
</script>
<script>
    setInterval(function() {
        checkUserToken();
    }, 3000);

    function checkUserToken() {
        $.get('<?= base_url('Bicycle/clearUser'); ?>', function(log) {
            console.log(log);
        });
    }
</script>
<script>
    setInterval(function() {
        checkUserToken();
    }, 3000);

    function checkUserToken() {
        $.get('<?= base_url('Bicycle/clearUser'); ?>', function(log) {
            console.log(log);
        });
    }
</script>