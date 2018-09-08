<?php
require 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Iweb31</title>
	<link rel="stylesheet" title="sal style" type="text/css" href="assets/css/sal.min.css">
	<link rel="icon" title="icon webi" href="assets/img/salahudin31.jpg">
	<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
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
		<img class="img-fluid img-btm-1" src="assets/img/intro-dua.jpg" alt="">
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
					<li class="nav-item active"><a class="nav-link" href="../iweb31/">Home</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="tentang kami/">Tentang Kami</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="galeri/">Galeri</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="row no-gutters mt-1 mb-1">
		<div class="col-lg-4 col-md-4 col-sm-4 col-12">
			<div class="p-1">
				<img src="assets/img/profil.jpg" class="img-fluid">
				<div class="mt-1 text-center">	<a class="link-content" href="galeri/?kategori=022A">Anime</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-12">
			<div class="p-1">
				<img src="assets/img/profil.jpg" class="img-fluid">
				<div class="mt-1 text-center">	<a class="link-content" href="galeri/?kategori=023B">Movie</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-12">
			<div class="p-1">
				<img src="assets/img/profil.jpg" class="img-fluid">
				<div class="mt-1 text-center">	<a class="link-content" href="galeri/?kategori=011A">Artikel</a>
				</div>
			</div>
		</div>
	</div>
	<div class="section-btm text-center">
		<div class="container head-section-btm border-btm">
			<h2 class="section-btm-text">
				<span class="heading-text">Iweb31</span>
				<span class="desc-text">adalah sebuah konveksi yang berdiri dalam dunia percetakan dan juga design brand. Berdasarkan pasar indonesia yang sedang berkembang initials subject berniat untuk menjadi salah satu penyedia jasa tersebut. </span>
			</h2>
		</div>
	</div>
	<div class="isi">
		<div class="container">
			<div class="row no-gutters mb-2">
				<?php
					$films = $film->select_film_desc();
					$film_count = count($films);
					$limit = 16;
					$total_results = $film_count;
					$total_pages = ceil($total_results/$limit);

					if (!isset($_GET['page'])) {
					    $page = 1;
					} else{
					    $page = $_GET['page'];
					}

					$starting_limit = ($page-1)*$limit;
					$films = $film->select_film_desc_pagging($starting_limit,$limit);
					foreach ($films as $film_value) {
				?>
				<div class="col-lg-2 col-md-2 col-sm-2 col-6">
					<div class="p-15">
						<a class="btn-img" href="galeri/video/?kd=<?php echo $film_value['kode_film'];?>">
							<img src="assets/img/profil.jpg" class="img-fluid" alt="<?php echo $film_value['judul_film'];?>">	<span class="code-book">&#x25B6; </span><?php echo $film_value['judul_film'];?></a>
					</div>
				</div>
				<?php
					}
				?>
				
			</div>
		</div>
		<div class="container">
			<ul class="pagination">
				<?php
				$prev = $page - 1;
				$next = $page + 1;
				if($page>1) { ?>
					<li><a class="pagination-link" href="<?php echo "?page=$prev"; ?>">&laquo;</a>
					</li>
				<?php } ?>
				<?php
				for ($page=1; $page <= $total_pages ; $page++):?>
					
					<li><a class="pagination-link" href="<?php echo "?page=$page"; ?>"><?php  echo $page; ?></a>
					</li>
				<?php 	endfor;
				if($total_pages > $page) { ?>
					<li><a class="pagination-link" href="<?php echo "?page=$next"; ?>">&raquo;</a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="section-footer">
		<div class="container">
			<div class="row no-gutters pt-1 pb-1">
				<div class="col-lg-6 col-md-6 col-sm-6 col-12">
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
				<div class="col-lg-6 col-md-6 col-sm-6 col-12">
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
			</div>
		</div>
	</div>
	<div class="footer-caption text-center">
		<label>&copy; Salahudin31</label>
	</div>
</body>

</html>