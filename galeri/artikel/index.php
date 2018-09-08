<?php
require '../../core/init.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Iweb31</title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/sal.min.css">
	<link rel="icon" href="../../assets/img/salahudin31.jpg">
	<script type="text/javascript" src="../../assets/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
		    $("#flip1").click(function(){
		        $("#panel1").slideToggle("fast");
		    });
		});
		$(document).ready(function(){
		    $("#flip2").click(function(){
		        $("#panel2").slideToggle("fast");
		    });
		});
		$(document).ready(function(){
		    $("#flip3").click(function(){
		        $("#panel3").slideToggle("fast");
		    });
		});
		$(document).ready(function(){
		    $("#flip4").click(function(){
		        $("#panel4").slideToggle("fast");
		    });
		});
	</script>
</head>

<body>
	<!-- header gambar
		<img class="img-fluid img-btm-1" src="../../assets/img/intro-dua.jpg" alt="">
		<div class="caption-page">
			<h2 class="site-heading text-center">
				<span class="site-heading-upper">Welcome to Salahudin31</span>
				<span class="site-heading-lower">Welcome to Salahudin31</span>
			</h2>
		</div>
	-->
	<nav class="navbar navbar-expand-sm bg-success navbar-dark">
		<div class="container">	<a class="navbar-brand" href="#">Iweb31</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">	<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="../../index.php">Home</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="../../tentang kami/index.php">Tentang Kami</a>
					</li>
					<li class="nav-item active"><a class="nav-link" href="../index.php">Galeri</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="isi mt-1 border-btm">
		<div class="container mb-36 pl-1">
			<h2 class="section-btm-text">
				<span class="heading-text">Penggunaan HTML Yang Benar</span>
			</h2>
			<div class="row no-gutters">
				<div class="col-lg-7 col-md-7 col-xs-12 col-sm-12 mr-2 mb-2">
					<iframe class="ml-1-files w-100" src="../../assets/files/Laporan Tugas KKP.pdf"></iframe>
				</div>
				<div class="col-lg-4 col-md-4 mb-1">
					<div class="bg-success">
						<h4 class="section-btm-text color-white">
							<span class="heading-text">Detail</span>
						</h4>
					</div>
					<div class="ml-1">
						<table>
							<tr>
								<td>Judul</td>
								<td>Penggunaan HTML Yang Benar</td>
							</tr>
							<tr>
								<td>Kategori</td>
								<td>Pemrograman Website</td>
							</tr>
							<tr>
								<td>Jumlah Halaman</td>
								<td>15 Halaman</td>
							</tr>
							<tr>
								<td>Tanggal Keluar</td>
								<td>12 Agustus</td>
							</tr>
							<tr>
								<td class="text-top">Keterangan</td>
								<td class="text-justify">adalah sebuah konveksi yang berdiri dalam dunia percetakan dan juga design brand. Berdasarkan pasar indonesia yang sedang berkembang initials subject berniat untuk menjadi salah satu penyedia jasa tersebut.</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="ml-1">Link download file
				<div class="pl-1 link-kat-size"><a class="active" href="download/index.php">Download</a>
				</div>
			</div>
		</div>
	</div>
	<div class="section-kat">
		<div class="link-kat"><a class="active" href="#">All</a>
		</div>
		<div class="link-kat"><a href="#">Film Bioskop</a>
		</div>
		<div class="link-kat"><a href="#">Anime</a>
		</div>
		<div class="link-kat"><a href="#">Artikel</a>
		</div>
		<div class="link-kat"><a href="#">Terbaru</a>
		</div>
	</div>
	<div class="isi">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-4 col-md-4 col-sm-4 col-6">
					<div class="p-15">
						<a class="btn-img" href="artikel/index.php">
							<img src="../../assets/img/profil.jpg" class="img-fluid">	<span class="code-book">&#x1F4D6; </span>Berbagi itu indah</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-6">
					<div class="p-15">
						<a class="btn-img" href="../video/index.php">
							<img src="../../assets/img/profil.jpg" class="img-fluid">	<span class="code-book">&#x25B6; </span>Fly With Me 2018</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-6">
					<div class="p-15">
						<a class="btn-img" href="artikel/index.php">
							<img src="../../assets/img/profil.jpg" class="img-fluid">	<span class="code-book">&#x1F4D6; </span>Berbagi itu indah</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-6">
					<div class="p-15">
						<a class="btn-img" href="artikel/index.php">
							<img src="../../assets/img/profil.jpg" class="img-fluid">	<span class="code-book">&#x1F4D6; </span>Berbagi itu indah</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-6">
					<div class="p-15">
						<a class="btn-img" href="artikel/index.php">
							<img src="../../assets/img/profil.jpg" class="img-fluid">	<span class="code-book">&#x1F4D6; </span>Berbagi itu indah</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-6">
					<div class="p-15">
						<a class="btn-img" href="../video/index.php">
							<img src="../../assets/img/profil.jpg" class="img-fluid">	<span class="code-book">&#x25B6; </span>One Piece ep - 876</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<ul class="pagination">
				<li><a class="pagination-link" href="#">&laquo;</a>
				</li>
				<li><a class="pagination-link" href="#">1</a>
				</li>
				<li><a class="pagination-link" href="#">2</a>
				</li>
				<li><a class="pagination-link" href="#">3</a>
				</li>
				<li><a class="pagination-link" href="#">&raquo;</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="section-footer">
		<div class="container">
			<div class="row no-gutters pt-1">
				<div class="col-md-5 col-sm-4 col-4">
					<div class="p-1">
						<h4 class="site-footer">
							<span class="site-heading-lower">Created by salahudin31</span>
						</h4>
						<?php
							$genres = $genre->select_genre_asc();
							foreach ($genres as $genre_value) {
						?>
						<div class="link-gen"><a href="#"><?php echo $genre_value['nm_genre'];?></a>
						</div>
						<?php
							}
						?>
					</div>
				</div>
				<div class="col-md-7 col-sm-8 col-8">
					<h2 class="section-btm-text">
						<span class="heading-text-sm">Terkait</span>
					</h2>
					<div class="d-block border radius-5 bg-white m-1">
						<div class="pointer text-center" id="flip1">	<span>&#x1F4D6; </span>Artikel Perancangan</div>
						<div id="panel1">
							<embed class="ml-1-files" width="590" src="../../assets/files/Laporan Tugas KKP.pdf"></embed><span class="xs-files">apabila file tidak tampil, harap klik selengkapnya.</span>
							<div class="btn-bl">	<a href="#">Selengkapnya</a>
							</div>
						</div>
					</div>
					<div class="d-block border radius-5 bg-white m-1">
						<div class="pointer text-center" id="flip2">	<span>&#x25B6; </span>One Piece Ep - 855</div>
						<div id="panel2">
							<video class="ml-3-video" width="400" controls>
								<source src="../../assets/video/video_360p.mp4" type="video/mp4">
							</video>
							<div class="btn-bl">	<a href="../video/index.php">Selengapnya</a>
							</div>
						</div>
					</div>
					<div class="d-block border radius-5 bg-white m-1">
						<div class="pointer text-center" id="flip3">	<span>&#x1F4D6; </span>Artikel Perancangan</div>
						<div id="panel3">Perancangan adalah ...
							<div class="btn-bl">	<a href="#">Selengapnya</a>
							</div>
						</div>
					</div>
					<div class="d-block border radius-5 bg-white m-1">
						<div class="pointer text-center" id="flip4">	<span>&#x1F4D6; </span>Artikel Perancangan</div>
						<div id="panel4">Perancangan adalah ...
							<div class="btn-bl">	<a href="#">Selengapnya</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-caption text-center">
		<label>&copy; Salahudin31</label>
	</div>
</body>

</html>