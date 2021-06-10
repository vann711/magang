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

<!-- bike -->
<div class="parts">
    <div class="container">
        <h2>SEMUA SEPEDA</h2>
        <?= $this->session->flashdata('message'); ?>
        <div class="bike-parts-sec">
            <div class="rsidebar span_1_of_left">
                <section class="sky-form">
                    <div class="product_right">
                        <h3 class="m_2">Kategori</h3>
                    </div>
                </section>

                <label class="checkbox" hidden><input type="radio" class="btn" name="checkbox" onclick="filterSelection('all')" checked> Show All</label>

                <section class="sky-form row mb-5">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
                        <h4 class="text-warning">Kategori</h4>
                        <div class="row row1 scroll-pane">
                            <div class="col col-4">
                                <div class="container" id="myBtnContainer">
                                    <?php foreach ($category_type->result_array() as $ct) : ?>
                                        <label class="checkbox"><input type="radio" id="btn" name="checkbox" onclick="filterSelection('<?= $ct['category'] ?>')"> <?= $ct['category'] ?></label>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="sky-form row mb-5">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
                        <h4 class="text-warning">Merek</h4>
                        <div class="row row1 scroll-pane">
                            <div class="col col-4">
                                <div class="container" id="myBtnContainer">
                                    <?php foreach ($merk_type->result_array() as $mt) : ?>
                                        <label class="checkbox"><input type="radio" id="btn" name="checkbox" onclick="filterSelection('<?= $mt['merk'] ?>')"> <?= $mt['merk'] ?></label>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="sky-form row mb-5">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
                        <h4 class="text-warning">Warna</h4>
                        <div class="row row1 scroll-pane">
                            <div class="col col-4">
                                <div class="container" id="myBtnContainer">
                                    <?php foreach ($warna->result_array() as $w) : ?>
                                        <label class="checkbox"><input type="radio" id="btn" name="checkbox" onclick="filterSelection('<?= $w['warna'] ?>')"> <?= $w['warna'] ?></label>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <div class="bike-parts">
                <div class="top">
                    <ul>
                        <li><a href="<?= base_url('/') ?>">Beranda</a></li>
                        <li>
                            <p> / </p>
                        </li>
                        <li><a href="#">Sepeda</a></li>
                    </ul>
                </div>
                <div class="bike-apparels">
                    <!-- <div class="parts1"> -->
                    <div class="row">
                        <?php foreach ($produk as $bk) :  ?>
                            <?php $name = $bk['nama']; ?>
                            <?php $nama = character_limiter($name, 20); ?>
                            <div class="part-sec1 <?= $bk['merk'], $bk['category'], $bk['warna'] ?>">
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 d-flex justify-content-center" style="margin-bottom: 10px; margin-top:10px">
                                    <div class="card" style="width: 14rem;">
                                        <img class="card-img-top" src="<?= base_url('assets/images/produk') ?>/<?= $bk['gambar'] ?>" width="150px" height="150px" alt="<?= $bk['merk'] ?>">
                                        <?php if ($bk['diskon'] == null) { ?>
                                            <div class=" card-body text-center">
                                                <h5 class="card-title"><strong><?= $nama ?></strong></h5>
                                                <p class="card-text"><?= number_format($bk['harga'], 0, ',', '.') ?></p>
                                                <a href="<?= base_url('Bicycle/detail/' . $bk['slug']) ?>" class="qck">Lihat Produk</a>
                                            </div>
                                        <?php } else { ?>
                                            <div class=" card-body text-center">
                                                <h5 class="card-title"><strong><?= $nama ?></strong></h5>
                                                <p class="card-text"><del><?= number_format($bk['harga'], 0, ',', '.') ?></del><span class="text-danger"> <?= number_format($bk['harga_diskon'], 0, ',', '.') ?></span></p>
                                                <a href="<?= base_url('Bicycle/detail/' . $bk['slug']) ?>" class="qck">Lihat Produk</a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->

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
    filterSelection("all")

    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("part-sec1");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
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