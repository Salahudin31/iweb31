<?php
require '../../../core/init.php';
if (isset($_GET['kd'])) {
    $kd_film = $_GET['kd'];

    $films = $film->select_film_kd($kd_film);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Iweb31</title>
	<link rel="stylesheet" type="text/css" href="../../../assets/css/sal.min.css">
	<link rel="icon" href="../../../assets/img/salahudin31.jpg">
	<script type="text/javascript" src="../../../assets/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="../../../assets/js/bootstrap.min.js"></script>
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
		<img class="img-fluid img-btm-1" src="../../../assets/img/intro-dua.jpg" alt="">
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
					<li class="nav-item"><a class="nav-link" href="../../../index.php">Home</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="../../../tentang kami/index.php">Tentang Kami</a>
					</li>
					<li class="nav-item active"><a class="nav-link" href="../index.php">Galeri</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="isi mt-1">
		<div class="container mb-36 text-center">
			<h2 class="section-btm-text text-center">
				<span class="heading-text">One Piece Ep 850</span>
			</h2>
			<div class="link-kat"><a href="#">Download</a>
			</div>
		</div>
	</div>
	<div class="section-footer">
		<div class="container">
			<div class="row no-gutters pt-1">
				<div class="col-lg-5 col-md-5 col-sm-4 col-12">
					<div class="p-1">
						<h4 class="border-btm">
							<span class="site-heading-lower">Genre</span>
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
					<div class="p-1">
						<h4 class="border-btm">
							<span class="site-heading-lower">Negara</span>
						</h4>
						<?php
							$negaras = $negara->select_negara_asc();
							foreach ($negaras as $negara_value) {
						?>
						<div class="link-gen"><a href="#"><?php echo $negara_value['nm_negara'];?></a>
						</div>
						<?php
							}
						?>
					</div>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-8 col-12">
					<h4 class="site-footer pt-1">
						<span class="site-heading-lower">Lainnya</span>
					</h4>
					<div class="d-block border radius-5 bg-white m-1">
						<div class="pointer text-center" id="flip1">	<span>&#x1F4D6; </span>Artikel Perancangan</div>
						<div id="panel1">
							<embed class="ml-1-files" width="590" src="../../../assets/files/Laporan Tugas KKP.pdf"></embed><span class="xs-files">apabila file tidak tampil, harap klik selengkapnya.</span>
							<div class="btn-bl">	<a href="#">Selengkapnya</a>
							</div>
						</div>
					</div>
					<div class="d-block border radius-5 bg-white m-1">
						<div class="pointer text-center" id="flip2">	<span>&#x25B6; </span>One Piece Ep - 855</div>
						<div id="panel2">
							<video class="ml-3-video" width="400" controls>
								<source src="../../../assets/video/video_360p.mp4" type="video/mp4">
							</video>
							<div class="btn-bl">	<a href="#">Selengapnya</a>
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
<?php
}else{
    echo "<script>location=('../?artikel');alert('Sorry, no data available.')</script>";
}
?>