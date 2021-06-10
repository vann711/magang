    <!--banner-->
    <script src="<?= base_url('assets/') ?>js/responsiveslides.min.js"></script>
    <script>
    	$(function() {
    		$("#slider").responsiveSlides({
    			auto: true,
    			nav: true,
    			speed: 500,
    			namespace: "callbacks",
    			pager: true,
    		});
    	});
    </script>

    <!--navbar-->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!-- Simulate a smartphone / tablet -->


<!-- Top Navigation Menu -->
<!-- <div class="topnav">
  <a>Logo</a>
  <div id="myLinks">
 	<a href="<?= base_url('Bicycle/') ?>">SEPEDA</a>
	 <a href="<?= base_url('blog/') ?>">ARTIKEL</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div> -->

<!-- End smartphone / tablet look -->


<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>

</body>
   <!--navbar-->
   

    <div class="banner-bg banner-bg1">
    	<div class="container">
    		<div class="header">
    			<div class="logo">
    			</div>
    			<div class="top-nav">
    				<label class="mobile_menu" for="mobile_menu">
    					<span>Menu</span>
    				</label>
    				<input id="mobile_menu" type="checkbox">
    				<ul class="nav">
    					<li class="dropdown1">
    						<a href="<?= base_url('Bicycle/') ?>">SEPEDA</a>
    					</li>
    					<li class="dropdown1">
    						<a class="shop" href="<?= base_url('blog/') ?>">ARTIKEL</a>
    					</li>
    				</ul>
    			</div>
    			<div class="clearfix"></div>
    		</div>
    	</div>
    	<div class="caption">
    		<div class="slider">
    			<div class="callbacks_container">
    				<img src="<?= base_url('assets/') ?>images/logos.png" alt="jualsepedatangerang" width="15%">
    				<ul class="rslides" id="slider">
    					<?php foreach ($category as $c) : ?>
    						<li>
    							<h1>Sepeda <?= $c['nama'] ?></h1>
    						</li>
    					<?php endforeach; ?>
    				</ul>
    				<p><span>Ghiffa Jaya Bike</span> telah ada dari Tahun<span> 2015</span></p>
    				<a class="morebtn" href="<?= base_url('Bicycle/') ?>">BELI SEPEDA</a>
    			</div>
    		</div>
    	</div>
    	<div class="dwn">
    		<a class="scroll" href="#cate"><img src="<?= base_url('assets/') ?>images/scroll.png" alt="" /></a>
    	</div>
    </div>
    <!--/banner-->

	<!--category-->
<style>
*{
    box-sizing:border-box;
    font-family: 'Lato', sans-serif;
}

.wrapper{
    display: flex;
    width: 100%;
    justify-content: space-around;
}

.card{
	width: 280px;
	height: 360px;
	padding: 2rem 1rem;
	background: #fff;
	position: relative;
	display: flex;
	align-items: flex-end;
	box-shadow: 0px 7px 10px rgba(0,0,0,0.5);
	transition: 0.5s ease-in-out;
}

.card:hover{
	transform: translateY(20px);
}

.card:before{
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	display: block;
	width: 100%;
	height: 100%;
	background: linear-gradient(to bottom, rgba(0,176,155,0.5), rgba(0, 126, 255,1));
	z-index: 2;
	transition: 0.5s all;
	opacity: 0;
}

.card:hover:before{
	opacity: 1;
}

.card img{
	width: 100%;
	height: 100%;
	object-fit: cover;
	position: absolute;
	top: 0;
	left: 0;

}

.card .info{
	position: relative;
	z-index: 3;
	color: white;
	opacity: 1;
	transform: translateY(30px);
	transition: 0.5s all;
}
</style>

	<div class="container" style="margin-top:50px">
		<div class="row justify-content-center">
		<h3 style="text-align:center; margin-bottom:50px";><strong>Pilih Sepedamu</strong><br>Ghiffa Jaya Bike menyediakan sepeda berbagai usia</h3>
			
			<div class="col-md-4">
				<div class="wrapper">
					<div class="card" >
						<div class="inner">
							<img src="<?= base_url('assets/') ?>images/balita.jpg">
							<div class="info">
							<a href="<?= base_url('Bicycle/') ?>"><h1 ><strong>Balita<strong></h1></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="wrapper">
					<div class="card" >
						<div class="inner">
							<img src="<?= base_url('assets/') ?>images/anak.jpg">
							<div class="info">
							<a href="<?= base_url('Bicycle/') ?>"><h1 ><strong>Anak<strong></h1></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="wrapper">
					<div class="card" >
						<div class="inner">
							<img src="<?= base_url('assets/') ?>images/dewasa.jpg">
							<div class="info">
							<a href="<?= base_url('Bicycle/') ?>"><h1><strong>Dewasa<strong></h1></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<!--category-->

    <!--bikes-->
    <div class="container">
    	<div class="bikes" id="cate">
    		<h3>Sepeda Populer</h3>
    		<div class="bikes-grids">
    			<ul id="flexiselDemo1">
    				<?php foreach ($product as $p) : ?>
    					<li>
    						<a href="<?= base_url('Bicycle/detail/' . $p['slug']) ?>">
    							<img src="<?= base_url('assets/images/produk/') ?><?= $p['gambar'] ?>" alt="jual sepeda tangerang" width="200px" height="220px" />
    							<div class="row">
    								<div class="d-flex justify-content-center">
    									<h5><?= $p['merk'] ?> <?= $p['nama'] ?></h5>
    									<?php if ($p['diskon'] == null) { ?>
    										<p>Rp. <?= number_format($p['harga'], 0, ',', '.')  ?></p>
    									<?php } else { ?>
    										<p style="text-decoration: line-through black;">Rp. <?= number_format($p['harga'], 0, ',', '.')  ?></p>
    										<p>.</p>
    										<p style="color: red;">Rp. <?= number_format($p['harga'], 0, ',', '.')  ?></p>
    									<?php } ?>
    								</div>
    							</div>
    							<div class="viw">
    								<a href="<?= base_url('Bicycle/detail/' . $p['slug']) ?>">View</a>
    							</div>
    						</a>
    					</li>
    				<?php endforeach; ?>
    			</ul>
    		</div>
    	</div>
    </div>
    <!---->
    <script type="text/javascript" src="<?= base_url('assets/') ?>js/jquery.flexisel.js"></script>
    <script type="text/javascript">
    	$(window).load(function() {
    		$("#flexiselDemo1").flexisel({
    			visibleItems: 3,
    			animationSpeed: 1000,
    			autoPlay: true,
    			autoPlaySpeed: 3000,
    			pauseOnHover: true,
    			enableResponsiveBreakpoints: true,
    			responsiveBreakpoints: {
    				portrait: {
    					changePoint: 480,
    					visibleItems: 1
    				},
    				landscape: {
    					changePoint: 640,
    					visibleItems: 2
    				},
    				tablet: {
    					changePoint: 768,
    					visibleItems: 3
    				}
    			}
    		});
    	});
    </script>

    <!-- contact -->
    <div class="contact">
    	<div class="container">
    		<h3>HUBUNGI KAMI</h3>
    		<p>Apa bila ingin diantar langsung dan berlokasi di Tangerang</p>
    		<div class="row mt-5" style="margin-top: 50px; margin-bottom: 50px;">
    			<div class="row">
    				<div class="col-lg-3 col-sm-6 mt-2">
    					<a href="https://api.whatsapp.com/send?phone=6281261689501">
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