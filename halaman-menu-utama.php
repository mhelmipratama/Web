<?php
session_start();
include 'config/koneksi.php';
include 'config/crud_karyawan.php';
if (isset($_SESSION['username']) === false) { // cek session apakah kosong(belum login) maka alihkan ke login.php
    header('Location: login.php');
}


?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Halaman-Menu-Utama</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="main.css" />
		<script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<a href="halaman-menu-utama.php" class="logo"><strong>Quinnzel</strong> Corp</a>
				<nav>
					<a href="#menu"><i class="far fa-user-circle"><?php echo $_SESSION['username']; ?></i></a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="halaman-menu-utama.php">Home</a></li>
					<li><a href="edit_profile.php">Edit Profile</a></li>
          			<li><a href="halaman-detail.php">Tentang</a></li>
          			<li><a href="halaman-data-karyawan.php">Data Karyawan</a></li>
					<li><a href="index.php">Logout</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>Welcome! You're succesfully login!<br />
					Quinnzel Corp</h1>
					<ul class="actions">
						<li><a href="#one" class="button alt scrolly big">Continue</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<article id="one" class="post style1">
				<div class="image">
					<img src="img/bg1-6.jpg" alt="" data-position="75% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2><a href="#">Perubahan Tata Cara Join bersama Kami</a></h2>
							<p class="info">3 days ago by <a href="#">Muhamad Helmi Pratama G</a></p>
						</header>
						<p>Ada beberapa tata cara yang kami ubah untuk bergabung bersama kami, bisa dilihat pada halaman awal sebelum anda login.</p>
						<ul class="actions">
							<li><a href="#" class="button alt">Join Us!</a></li>
						</ul>
					</div>
					<div class="postnav">
						<a href="#" class="prev disabled">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
							  </svg>
						</a>
						<a href="#two" class="scrolly next">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
							  </svg>
						</a>
					</div>
				</div>
			</article>

		<!-- Two -->
			<article id="two" class="post invert style1 alt">
				<div class="image">
					<img src="img/bg1-3.jpg" alt="" data-position="10% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2><a href="#">Perubahan Fitur yang Kami Tawarkan</a></h2>
							<p class="info">3 days ago by <a href="#">Muhamad Helmi Pratama G</a></p>
						</header>
						<p>Ada beberapa fitur yang telah kami lakukan perubahan untuk menjadi lebih baik, contohnya adalah fitur untuk logout sehingga anda dapat logout dan menuju halaman awal tanpa bersusah payah lagi.</p>
						<ul class="actions">
							<li><a href="#" class="button alt">Buy It!</a></li>
						</ul>
					</div>
					<div class="postnav">
						<a href="#one" class="scrolly prev">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
							  </svg>
						</a>
						<a href="#three" class="scrolly next">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
							  </svg>
						</a>
					</div>
				</div>
			</article>

		<!-- Three -->
			<article id="three" class="post style2">
				<div class="image">
					<img src="img/bg1-2.jpg" alt="" data-position="70% center" />
				</div>
				<div class="content">
					<div class="inner">
						<header>
							<h2><a href="#">Untuk Analysis yang Sudah Dianalisa dapat Dilihat dengan Fitur</a></h2>
							<p class="info">3 days ago by <a href="#">Muhamad Helmi Pratama G</a></p>
						</header>
						<p>Fitur untuk analisis dapat anda lihat siapa saja yang sudah kami bantu untuk mengelola datanya dan juga siapa saja yang sudah kami berikan solusi tentang masalah yang dihadapinya.</p>
						<ul class="actions">
							<li><a href="#" class="button alt">Completed Analysis!</a></li>
						</ul>
					</div>
					<div class="postnav">
						<a href="#two" class="scrolly prev">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
							  </svg>
						</a>
						<a href="#four" class="next disabled">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
							  </svg>
						</a>
					</div>
				</div>
			</article>

		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
				 @Copyright by 18111393_Muhamad Helmi Pratama_TIFRP18CIDA_UASWEB1 </a>.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>