<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
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
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/'); ?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/'); ?>vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/'); ?>vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="v<?= base_url('assets/front/'); ?>endor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/'); ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/'); ?>css/main.css">
<!--===============================================================================================-->
<style>
	 @import url(https://fonts.googleapis.com/css?family=Raleway);body{background: #f9f9f9;font-size: 16px;font-family: 'Raleway', sans-serif}.container{margin-top: 2px}.title{color: #1a1a1a;text-align: center;margin-bottom: 10px}.content{position: relative;width: 90%;max-width: 400px;margin: auto;overflow: hidden}.content .content-overlay{background: rgba(0,0,0,0.3	);position: absolute;height: 99%;width: 100%;left: 0;top: 0;bottom: 0;right: 0;opacity: 0;-webkit-transition: all 0.4s ease-in-out 0s;-moz-transition: all 0.4s ease-in-out 0s;transition: all 0.4s ease-in-out 0s}.content:hover .content-overlay{opacity: 1}.content-image{width: 100%}img{border-radius: 5px}.content-details{position: absolute;text-align: center;padding-left: 1em;padding-right: 1em;width: 100%;top: 50%;left: 50%;opacity: 0;-webkit-transform: translate(-50%, -50%);-moz-transform: translate(-50%, -50%);transform: translate(-50%, -50%);-webkit-transition: all 0.3s ease-in-out 0s;-moz-transition: all 0.3s ease-in-out 0s;transition: all 0.3s ease-in-out 0s}.content:hover .content-details{top: 50%;left: 50%;opacity: 1}.content-details h3{color: #fff;font-weight: 500;letter-spacing: 0.15em;margin-bottom: 0.5em;text-transform: uppercase}.content-details p{color: #fff;font-size: 0.8em}.fadeIn-bottom{top: 80%}
</style>
</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		 
		<div class="container-menu-desktop trans-05">
			<div class="wrap-menu-desktop bg-light" style="top: 0px;">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="<?= base_url('assets/front/'); ?>images/icons/foto1.png" alt="IMG-LOGO" height="25px">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop ">
						<ul class="main-menu">
							<li>
								<a href="<?= base_url() ?>">Home</a>
							</li>
							<li>
								<a href="#About">About</a>
							</li>
							<li>
								<a href="#Konten">Konten</a>
							</li>
							<li>
								<a href="#footer">Contact</a>
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
		<!-- <div class="mt-4">
			<?= $this->session->flashdata('alert',true) ?>
		</div> -->

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
			<li>
				<a href="<?= base_url() ?>">Home</a>
			</li>
			<li>
				<a href="#About">About</a>
			</li>
			<li>
				<a href="#Konten">Konten</a>
			</li>
			<li>
				<a href="#footer">Contact</a>
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

		<div style="margin-top: 85px;">
			<?= $this->session->flashdata('alert',true) ?>
		</div>	
	</header>
	
	
	<!-- Slider -->
	<section class="section-slide" style="margin-top: 10px;">
		<div class="wrap-slick1">
			<div class="slick1">
			<?php $no=1; foreach ($caraousel as $aa) { ?>
				<div class="carousel-item <?php if($no==1) {echo 'active';}?>">
					<div class="item-slick1" style="background-image: url(<?= base_url('assets/upload/caraousel/' . $aa['foto'])?>);"></div>
				</div>
				<?php $no++;} ?>
			</div>
		</div>
	</section>
	<!-- Content page -->
	<section class="bg0 p-t-2 p-b-0" id="About">
		<div class="container" >
			<div class="p-b-66">
				<h3 class="ltext-105 cl5 txt-center respon1"><br><br>
					About
				</h3>
			</div>
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 col-lg-9">
					<div class="p-r-45 p-r-0-lg">
						<!-- item blog -->
						<div class="p-b-20">
							<a href="" class="hov-img0 how-pos5-parent">
								<img src="<?= base_url('assets/front/'); ?>images/foto2.jpg" alt="IMG-BLOG" height="max" width="max">

								<div class="flex-col-c-m size-123 bg9 how-pos5">
									<span class="ltext-107 cl2 txt-center">
										22
									</span>

									<span class="stext-109 cl3 txt-center">
										Jan 2018
									</span>
								</div>
							</a>

							<div class="p-t-32">
								<h4 class="p-b-15">
									<a href="" class="ltext-108 cl2 hov-cl1 trans-04">
										Erclae
									</a>
								</h4>

								<p class="stext-117 cl6">
									Erclae berasal dari kalimat "sup<b>ER CLA</b>ss <b>E</b>" yakni kelas kami kelas E dengan total murid keseluruhan 32 ( 10 Siswa, dan 22 Siswi ) 
								</p>

								<div class="flex-w flex-sb-m p-t-18">
									<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
										<span>
											<span class="cl4">By</span> Erclae  
											<span class="cl12 m-l-4 m-r-6">|</span>
										</span>

										<span>
											10 Siswa  
											<span class="cl12 m-l-4 m-r-6">|</span>
										</span>

										<span>
											22 Siswi
										</span>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	<section class="bg0 p-t-0 p-b-60" id="Konten">
		<div class="container" >
			<div class="p-b-66">
				<h3 class="ltext-105 cl5 txt-center respon1"><br><br>
					Our Blogs
				</h3>
			</div>

			<div class="row">
				<?php foreach ($konten as $uu) { ?>
					<div class="col-md-4">
						<div class="content" style="margin: 5px;"> 
							<a href="<?= $uu['instagram'] ?>">
								<div class="content-overlay"></div> 
								<img class="content-image" src="<?= base_url('assets/upload/konten/'.$uu['foto'])?>" height="330px" width="400px">
								<div class="content-details fadeIn-bottom">
									<h3 class="content-title"><?= $uu['judul'] ?></h3>
									<svg fill="#ffffff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
										width="50px" height="50px" viewBox="0 0 169.063 169.063"
										xml:space="preserve">
									<g>
										<path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
											c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
											c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
											c17.455,0,31.656,14.201,31.656,31.655V122.407z"/>
										<path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
											C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
											c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/>
										<path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
											c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
											C135.661,29.421,132.821,28.251,129.921,28.251z"/>
									</g>
									</svg>
								</div>
							</a> 
						</div>
						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl4">
										By
									</span>

									<span class="cl5">
										<?= $uu['nama'] ?>
									</span>
								</span>
								<span>
									<span class="cl4">
										on Categories
									</span>

									<span class="cl5">
										<?= $uu['nama_kategori'] ?>
									</span>
								</span>
							</div>
							<h4 class="p-b-12">
								<a href="<?= base_url('home/artikel/').$uu['slug'] ?>" class="mtext-101 cl2 hov-cl1 trans-04">
									<?= $uu['judul'] ?>
								</a>
							</h4>
						</div>
					</div>
				<?php } ?>
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
	<script src="<?= base_url('assets/front/'); ?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/front/'); ?>vendor/slick/slick.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/front/'); ?>vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/front/'); ?>vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/front/'); ?>vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/front/'); ?>vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
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
