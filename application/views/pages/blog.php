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

<!-- style-blog -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
body{
	font-family: 'Poppins', sans-serif;
}

.blog-post{
	display: flex;
	flex-direction: row;
	margin: 10rem;
	justify-content: center;
	align-items: center;
	background-color: lightblue;
}

.blog-post-img{
	flex: 1;
	padding:2rem 2rem 2rem 0rem;
}

.blog-post-img>img{
	width: 100%;
	height: 100%;
	border-radius: 0.3rem;
	object-fit: cover;
	transform: translateX(-50px);
	box-shadow: 0px 0px 3px 3px rgba(0,0,0,.5);
}

.blog-post-info{
	flex: 2;
	padding: 2rem;
}

.blog-post-title h2{
	color: black;
	text-transform: uppercase;
}

.blog-post-read-more a{
	cursor: pointer;
	font-style: normal;
	border-radius: 0.3rem;
	padding: 0.5rem;
	background-color: white;
	border:1px solid black;
	color: black !important;
	box-shadow: 0 0.05em 0.1em rgba(0,0,0,.25);
}

.blog-post-read-more a:hover{
	transition: .5s;
	background-color: grey;
	border: 1px solid black;
	color: #fff;
}

.blog-load{
    display: none;
}
</style>
<!--/style-blog-->

<!-- blog -->
<div class="parts">
    <div class="container">
        <h2>Artikel Kami</h2>
        <div class="bike-parts-sec">
            <div class="rsidebar span_1_of_left">
                <section class="sky-form">
                    <div class="product_right">
                        <h3 class="m_2">Kategori Artikel</h3>
                    </div>
                </section>
                <section class="sky-form row mb-5">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
                        <div class="row row1 scroll-pane">
                            <div class="col col-4">
                                <div class="container" id="myBtnContainer">
                                    <label class="checkbox" hidden><input type="radio" class="btn" name="checkbox" onclick="filterSelection('all')" checked> Show All</label>
                                    <?php foreach ($category_type->result_array() as $ct) : ?>
                                        <label class="checkbox"><input type="radio" id="btn" name="checkbox" onclick="filterSelection('<?= $ct['category'] ?>')"> <?= $ct['category'] ?></label>
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
                        <li><a href="<?= base_url('/') ?>">home</a></li>
                        <li>
                            <p> / </p>
                        </li>
                        <li><a href="#">blog</a></li>
                    </ul>
                </div>
                <p></p>

                
                    <?php foreach ($blog as $bk) :  ?>
                    <div class="blog-load">
                    <?php $judul = $bk['judul']; ?>
                    <?php $title = $judul; ?>
                    <?php $isi = $bk['isi']; ?>
                    <?php $content = character_limiter($isi, 100) ?>
                    <div class="part-sec1 <?= $bk['category'] ?> ">
                        <div class="blog-post">
                            <div class="blog-post-img">
                                <img src="<?= base_url('assets/images/blog/') ?><?= $bk['image'] ?>">
                            </div>
                            <div class="blog-post-info">
                                <div class="blog-post-title">
                                    <h2><?= $title ?></h2>
                                </div>
                                <div class="blog-post-desc">
                                    <p><?= $content ?></p>
                                </div>
                                <div class="blog-post-read-more">
                                    <a href="<?= base_url('blog/detail/' . $bk['slug']) ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <?php endforeach; ?>
                    <button type="button" id="load_more" class="btn btn-success center-block showMore" onclik>Show More</button>
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

<script>
    $(".blog-load").slice(0, 3).show(); //memunculkan 3 blog

    $(".showMore").on("click",function(){
        $(".blog-load:hidden").slice(0, 3).show(); // memunculkan 3 blog hidden ketika button show more di klik

        if($(".blog-load:hidden").length ==0){
            $(".showMore").fadeOut(); //button akan di hide ketika length = 0
        }
    });

    $(".checkbox").on("change",function(){
        $(".blog-load").hide();

        $(".blog-load").slice(0, 3).show();
        $(".showMore").show();
    });
</script>