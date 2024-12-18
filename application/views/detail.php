<!DOCTYPE html>
<html lang="en">
<head>
	<title>Detail</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url('assets/front/'); ?>images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/'); ?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/'); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/'); ?>fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/'); ?>fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/'); ?>vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/'); ?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/'); ?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/'); ?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/'); ?>vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/'); ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/'); ?>css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop trans-05">
			<div class="wrap-menu-desktop" style="top: 0px;">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="<?= base_url('assets/front/'); ?>images/icons/foto1.png" alt="IMG-LOGO" height="25px">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="<?= base_url() ?>">Home</a>
							</li>
							<li>
								<a href="#">Kategori</a>
								<ul class="sub-menu">
									<?php foreach ($kategori as $kate) { ?>
									<li>
										<a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
									</li>
									<?php } ?>
								</ul>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>
					</div>
				</nav>
			</div>	
		</div>
		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="<?= base_url('assets/front/'); ?>images/icons/foto1.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li class="active-menu">
					<a href="<?= base_url() ?>">Home</a>
					<ul class="sub-menu">
						<li><a href="<?= base_url(); ?>">Homepage 1</a></li>
					</ul>
				</li>
								
				<?php foreach ($kategori as $kate) { ?>
				<li>
					<a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
				</li>
				<?php } ?>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="<?= base_url('assets/front/'); ?>images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form action="<?php echo base_url('home/search'); ?>" class="wrap-search-header flex-w p-l-15" method="post">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="keyword" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row">
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h5 class="mtext-111 cl2 p-b-16">
							<?= $konten->judul; ?>
						</h5>
						<br>
						<h4	>
							<i class="stext-155 cl3 p-b-26">
								<?= $konten->keterangan; ?>
							</i>
						</h4>
						<div class="bor16 p-l-29 p-b-9 m-t-22">
							<span class="stext-111 cl8">
								- <i><?= $konten->nama_kategori; ?></i>
							</span>
						</div>
					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							<img src="<?= base_url('assets/upload/konten/'.$konten->foto)?>" alt="IMG">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
		

	<!-- Footer -->
	<footer id="footer" class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>
					<ul>
						<li class="p-b-10">
							<a href="<?= base_url() ?>" class="stext-107 cl7 hov-cl1 trans-04">Home</a>
							<?php foreach ($kategori as $kate) { ?>
								<a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>" class="stext-107 cl7 hov-cl1 trans-04">
								<br>
								<?= $kate['nama_kategori'] ?>
							</a>
							<?php } ?>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Information
					</h4>
					
					<p class="stext-107 cl7 size-201">
	                    <?= $konfig->profil_website; ?>
					</p>
				</div>
				
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Location
					</h4>
                    <p class="stext-107 cl7 size-201">
						<?= $konfig->alamat; ?>
					</p>
					<p class="stext-107 cl7 size-201">
						<?= $konfig->email; ?>
					</p>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						SOCIAL MEDIA
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="<?= $konfig->facebook; ?>" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="<?= $konfig->instagram; ?>" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
								<i class="fa fa-instagram"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="p-t-10">
				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Setya</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="<?= base_url('assets/front/'); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/front/'); ?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/front/'); ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('assets/front/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/front/'); ?>vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/front/'); ?>vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/front/'); ?>vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/front/'); ?>js/main.js"></script>
	
</body>
</html>