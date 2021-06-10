<!--banner-->
<script src="<?= base_url('assets/') ?>js/responsiveslides.min.js"></script>
<script>
    $(function() {
        $("#slider").responsiveSlides({
            auto: false,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>
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

<div class="product">
    <div class="container">
        <div class="ctnt-bar cntnt">
            <div class="content-bar">
                <div class="single-page">
                    <div class="product-head">
                        <a href="<?= base_url('/') ?>">Home</a> / <span><?= $produk['nama'] ?></span>
                    </div>
                    <!--Include the Etalage files-->
                    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/etalage.css">
                    <script src="<?= base_url('assets/') ?>js/jquery.etalage.min.js"></script>
                    <script>
                        jQuery(document).ready(function($) {

                            $('#etalage').etalage({
                                thumb_image_width: 400,
                                thumb_image_height: 400,
                                source_image_width: 800,
                                source_image_height: 1000,
                                show_hint: true,
                                click_callback: function(image_anchor, instance_id) {
                                    alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                                }
                            });

                        });
                    </script>
                    <!--//details-product-slider-->
                    <div class="details-left-slider">
                        <ul id="etalage">
                            <li>
                                <a href="optionallink.html">
                                    <img class="etalage_thumb_image" src="<?= base_url('assets/images/produk/' . $produk['gambar']) ?>" class="img-responsive" />
                                    <img class="etalage_source_image" src="<?= base_url('assets/images/produk/' . $produk['gambar']) ?>" class="img-responsive" title="<?= $produk['nama'] ?>" />
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="details-left-info">
                        <h3><?= $produk['nama'] ?></h3>
                        <h4>Merk : <?= $produk['merk'] ?></h4>
                        <h4></h4>
                        <?php if ($produk['diskon'] == null) { ?>
                            <p class="harga"><label>Rp.</label> <?= number_format($produk['harga'], 0, ',', '.')  ?></p>
                        <?php } else { ?>
                            <p class="harga" style="color: grey;"><del><label>Rp.</label> <?= number_format($produk['harga'], 0, ',', '.')  ?></del></p>
                            <p class="harga"><label>Rp.</label> <?= number_format($produk['harga_diskon'], 0, ',', '.')  ?></p>
                        <?php } ?>
                        <div class="btn_form">
                            <a href="<?= base_url('Bicycle/order/' . $produk['slug']) ?>">Beli</a>
                        </div>
                        <div class="bike-type">
                            <p>TYPE ::<span>Sepeda <?= $produk['category'] ?></span></p>
                            <p>BRAND ::<span><?= $produk['merk'] ?></span>
                            </p>
                        </div>
                        <h5>Deskripsi ::</h5>
                        <p class="desc">
                        <div><?= $produk['deskripsi'] ?></div>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="single-bottom2">
            <h6>Produk Lainnya</h6>
            <?php $no = 0; ?>
            <?php $limit = 3; ?>
            <?php shuffle($produk_lain); ?>
            <?php foreach ($produk_lain as $pl) : ?>
                <div class="product">
                    <div class="product-desc">
                        <div class="product-img product-img2">
                            <img src="<?= base_url('assets/images/produk/' . $pl['gambar']) ?>" class="img-responsive " alt="jual sepeda tangerang" />
                        </div>
                        <div class="prod1-desc">
                            <h5><a class="product_link" href="<?= base_url('Bicycle/detail/' . $pl['slug']) ?>"><?= $pl['nama'] ?></a></h5>
                            <p class="product_descr">Merk : <?= $pl['merk'] ?></p>
                            <p class="product_descr">Warna : <?= $pl['warna'] ?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="product_price">
                        <?php if ($pl['diskon'] == null) { ?>
                            <span class="price-access">Rp. <?= number_format($pl['harga'], 0, ',', '.')  ?></span>
                        <?php } else { ?>
                            <span class="price-access"><del>Rp. <?= number_format($pl['harga'], 0, ',', '.')  ?></del></span>
                            <span class="price-access" style="color: red;">Rp. <?= number_format($pl['harga_diskon'], 0, ',', '.')  ?></span>
                        <?php } ?>
                        <a class="button1" href="<?= base_url('Bicycle/detail/' . $pl['slug']) ?>"><span>Lihat</span></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <?php $no++; ?>
                <?php if ($limit <= $no) break; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>

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
    setInterval(function() {
        checkUserToken();
    }, 3000);

    function checkUserToken() {
        $.get('<?= base_url('Bicycle/clearUser'); ?>', function(log) {
            console.log(log);
        });
    }
</script>