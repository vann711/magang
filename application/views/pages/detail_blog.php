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

<!-- content -->
<section>
    <div class="container">
        <div class="product-head">
            <a href="<?= base_url('blog/') ?>">Blog</a> / <span><?= $blog['judul'] ?></span>
        </div>
        <div class="blog">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <h2><?= $blog['judul'] ?></h2>
                    <h5 class="badge badge-primary"><?= $blog['category'] ?></h5>
                    <br>
                    <div class="text-center">
                        <img src="<?= base_url('assets/images/blog/' . $blog['image']) ?>" alt="<?= $blog['judul'] ?>" width="40%" style="margin-bottom: 10px;">
                    </div>
                    <div class="isi" style="text-align: justify; font-size: medium;">
                        <?= $blog['isi'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /content -->


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