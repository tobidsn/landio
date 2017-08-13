<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="{{ asset('cardio/css/normalize.css') }}">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="{{ asset('cardio/css/bootstrap.css') }}">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="{{ asset('cardio/css/owl.css') }}">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('cardio/css/animate.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="{{ asset('cardio/fonts/font-awesome-4.1.0/css/font-awesome.min.css') }}">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="{{ asset('cardio/fonts/eleganticons/et-icons.css') }}">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="{{ asset('cardio/css/cardio.css') }}">
</head>

<body>
	<div class="preloader">
		<img src="{{ asset('cardio/img/loader.gif') }}" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="{{ asset('cardio/img/logo.png') }}" data-active-url="{{ asset('cardio/img/logo-active.png') }}" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="{{ URL::to('belanja') }}">Belanja</a></li>
					<li><a href="#tentang">Tentang</a></li>
					<li><a href="#masalah">Masalah</a></li> 
					<li><a href="#cara-kerja">Cara Kerja</a></li>
					<li><a href="#kontak">Kontak</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Login</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="tentang">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white">Belanja sembari sedekah.</h3>
							<h1 class="white typed">{{ config('app.name') }} memudahkan anda untuk berdonasi.</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
				<div class="col-md-4">
					<div class="intro-table intro-table-first">
						<h5 class="white heading">Jadwal Sedekah</h5>
						<div class="owl-carousel owl-schedule bottom">
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Act Semarang</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">13 Mar 2017</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Yayasan Peduli Anak</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">02 April 2017</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Pendeta Jalanan</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">03 April 2017</h5>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Act Semarang</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">13 Mar 2017</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Yayasan Peduli Anak</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">02 April 2017</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Pendeta Jalanan</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">03 April 2017</h5>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Act Semarang</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">13 Mar 2017</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Yayasan Peduli Anak</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">02 April 2017</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Pendeta Jalanan</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">03 April 2017</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">Orang Baik</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular">Daftar Sekarang</h4>
							<h4 class="white heading small-pt">Jadi Donatur</h4>
							<a href="{{ URL::to('register') }}" target="_blank" class="btn btn-white-fill expand">Daftar</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-third">
						<h5 class="white heading">Testimoni</h5>
						<div class="owl-testimonials bottom">
							<div class="item">
								<h4 class="white heading content">"Kembangkan terus website ini!"</h4>
								<h5 class="white heading light author">Eka Wahyu</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">"Semoga bisa sukses dan maju"</h4>
								<h5 class="white heading light author">Iqna Aulia</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">"Website ini sangat bermanfaat"</h4>
								<h5 class="white heading light author">Muhamad Ali</h5>
							</div>
						</div>
					</div>
				</div> 
			</div>
			<h3 style="text-align : center;">{{ config('app.name') }} memudahkan anda untuk berdonasi sebelum berbelanja.</h3>
		    <h4 style="text-align : center;">Situs rekomendasi belanja untuk seluruh orang baik di Indonesia. Dengan anda klik dan belanja berdasarkan referensi kami, maka anda sudah membantu mendonasikan casback anda untuk orang yang membutuhkan.</h4>
		    <p style="text-align : center;">Kami mendonasikan 100% penghasilan untuk didonasikan ke Anak Yatim dan Fakir Miskin.</p>
		</div>
	</section>
	<section id="masalah" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Masalah</h2>
				<h4 class="light muted">Masalah yang masih ada di Indonesia.</h4>
			</div>
			<div class="row services">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="{{ asset('cardio/img/icons/heart-blue.png') }}" alt="" class="icon">
						</div>
						<h4 class="heading">Kesehatan</h4>
						<p class="description">Lebih dari 250 juta penduduk Indonesia, tidak dapat mengakses fasilitas kesehatan bahkan fasilitas termurah yang ada. (Fair Future Foundations, 2015).</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="{{ asset('cardio/img/icons/guru-blue.png') }}" alt="" class="icon">
						</div>
						<h4 class="heading">Pendidikan</h4>
						<p class="description">2.3 juta anak Indonesia dengan umur 7-15 tahun tidak dapat mengakses pendidikan (Unicef, 2014).</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="{{ asset('cardio/img/icons/weight-blue.png') }}" alt="" class="icon">
						</div>
						<h4 class="heading">Kesejahteraan</h4>
						<p class="description">26 juta orang Indonesia hidup di bawah kemiskinan (Word Bank and BPS, 2014).</p>
					</div>
				</div>
			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="cara-kerja" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">Cara Kerja</h2>
				<h4 class="light muted">Langkah - langkah di {{ config('app.name') }}.</h4>
			</div>
			<div class="row" style="text-align: center;">
				  <p>1. Cari Produk</p>
			      <p>2. Klik Beli</p>
			      <p>3. Anda akan diarahkan ke toko online yang anda pilih.</p>
			      <p>4. Silahkan belanja sesuai kebutuhan anda.</p>
			      <p>5. {{ config('app.name') }} mendapatkan pendapatan dari iklan dan affiliasi</p>
			      <p>6. {{ config('app.name') }} memberikan 100% dari penghasilan iklan tersebut ke Anak Yatim</p>
			</div>
		</div>
	</section>
	<section class="section section-padded blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							<i class="icon fa fa-heart"></i>
							<h4 class="white light">{{ config('app.name') }} Mengajak anda untuk turut serta berperan membuka akses kesehatan, meningkatkan mutu pendidikan, dan mengatasi kemiskinan</h4>
							<h4 class="light-white light">#sehat #pendidikan #maju</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-fighter-jet"></i>
							<h4 class="white light">{{ config('app.name') }} ingin menjadi sarana yang dapat memudahkan khalayak untuk menciptakan perubahan disekitarnya.</h4>
							<h4 class="light-white light">#indonesia #berbagi #perubahan</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-shopping-cart"></i>
							<h4 class="white light">{{ config('app.name') }} ingin memudahkan cara berdonasi yang mudah.</h4>
							<h4 class="light-white light">#belanja #sambil #sedekah</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer id="kontak">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Gabung jadi bagian gotong Royong</h3>
					<h5 class="light regular light-white">Untuk perubahan yang lebih .</h5>
					<a href="{{ URL::to('register') }}" class="btn btn-blue ripple trial-button">Daftar</a>
				</div>
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Hubungi Kami <span class="open-blink"></span></h3>
					<div class="row opening-hours">
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Email</h5>
							<h3 class="regular white">tobidsn@gmail.com</h3>
						</div>
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">No. HP/WA</h5>
							<h3 class="regular white">087830390977</h3>
						</div>
					</div>
					<div class="row opening-hours">
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Senin - Jumat</h5>
							<h3 class="regular white">17:00 - 06:00</h3>
						</div>
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Sabtu - Minggu</h5>
							<h3 class="regular white">10:00 - 18:00</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>By {{ config('app.name') }}</p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="{{ asset('cardio/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('cardio/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('cardio/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('cardio/js/wow.min.js') }}"></script>
	<script src="{{ asset('cardio/js/typewriter.js') }}"></script>
	<script src="{{ asset('cardio/js/jquery.onepagenav.js') }}"></script>
	<script src="{{ asset('cardio/js/main.js') }}"></script>
</body>

</html>
