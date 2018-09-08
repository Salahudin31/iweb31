<?php
require '../../core/init.php';
if (isset($_GET['kd'])) {
    $kd_film = $_GET['kd'];

    $film_get = $film->select_film_kd($kd_film);
    $kategori_get = $kategori->select_kategori_kd($film_get['kode_kategori']);
    $genre_get = $genre->select_genre_kd($film_get['kode_genre']);
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Iweb31</title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/sal.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		<div class="container mb-1">
			<div class="row no-gutters">
				<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
					<?php 
						if (isset($_GET['genre'])) {
							$kd_genre = $_GET['genre'];
							$genres = $genre->select_genre_kd($kd_genre);
							echo "<div class='link-kat'><a class='btn active disable'>".$genres['nm_genre']."</a>
								</div><a class='btn-bagde' href='../'><i class='fa fa-close'></i></a>";
							include_once("genre.php");
						}elseif (isset($_GET['negara'])){
							$kd_negara = $_GET['negara'];
							$negaras = $negara->select_negara_kd($kd_negara);
							echo "<div class='link-kat'><a class='btn active disable'>".$negaras['nm_negara']."</a>
								</div><a class='btn-bagde' href='../'><i class='fa fa-close'></i></a>";
							include_once("negara.php");
						}else {
					?>
					<h2 class="section-btm-text">
						<span class="heading-text">One Piece Ep 850</span>
					</h2>
					<video class="w-auto mb-1" controls>
						<source src="../../assets/video/video_360p.mp4" type="video/mp4">
					</video>
					<div class="bg-success">
						<h4 class="section-btm-text color-white">
							<span class="heading-text">Detail</span>
						</h4>
					</div>
					<div class="ml-1">
						<table>
							<tr>
								<td>Judul</td>
								<td><?php echo $film_get['judul_film'];?></td>
							</tr>
							<?php
								if ("") {
							?>
							<?php
								} else{
							?>
							<tr>
								<td>Episode</td>
								<td>850</td>
							</tr>
							<?php
								}
							?>
							<tr>
								<td>Durasi</td>
								<td><?php echo $film_get['durasi'];?></td>
							</tr>
							<tr>
								<td>Kategori</td>
								<td><?php echo $kategori_get['nm_kategori'];?></td>
							</tr>
							<tr>
								<td>Genre</td>
								<td><?php echo $genre_get['nm_genre'];?></td>
							</tr>
							<tr>
								<td>Tanggal Keluar</td>
								<td><?php echo date('d-M-Y H:i:s',$film_get['tgl_rilis']); ?></td>
							</tr>
							<tr>
								<td>Rating</td>
								<td>9.2 / 10</td>
							</tr>
							<tr>
								<td>Sinopsis</td>
								<td><?php echo $film_get['desk'];?></td>
							</tr>
						</table>
					</div>
					<div class="p-1 bg-cloud">
						<div class="mt-1"><span class="pr-59">Google Drive</span>
							<?php
								$kualitas_ = $kualitas->select_kualitas();
								foreach ($kualitas_ as $kulitas_value) {
							?>
							<div class="link-kat-size"><a href="download/index.php"><?php echo $kulitas_value['nm_kualitas'];?></a>
							</div>
							<?php
								}
							?>
						</div>
						<div><span class="pr-95">Mega Cloud</span>
							<?php
								$kualitas_ = $kualitas->select_kualitas();
								foreach ($kualitas_ as $kulitas_value) {
							?>
							<div class="link-kat-size"><a href="download/index.php"><?php echo $kulitas_value['nm_kualitas'];?></a>
							</div>
							<?php
								}
							?>
						</div>
						<div><span class="pr-2">Openload</span>
							<?php
								$kualitas_ = $kualitas->select_kualitas();
								foreach ($kualitas_ as $kulitas_value) {
							?>
							<div class="link-kat-size"><a href="download/index.php"><?php echo $kulitas_value['nm_kualitas'];?></a>
							</div>
							<?php
								}
							?>
						</div>
						<div><span class="pr-15">Zippyshare</span>
							<?php
								$kualitas_ = $kualitas->select_kualitas();
								foreach ($kualitas_ as $kulitas_value) {
							?>
							<div class="link-kat-size"><a href="download/index.php"><?php echo $kulitas_value['nm_kualitas'];?></a>
							</div>
							<?php
								}
							?>
						</div>
					</div>
				<?php 
					}
				?>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
					<div class="p-1 m-1 bg-initials">
						<h4 class="border-btm">
							<span class="site-heading-lower">Genre</span>
						</h4>
						<?php
							$genres = $genre->select_genre_asc();
							foreach ($genres as $genre_value) {
						?>
						<div class="link-gen"><a href="?genre=<?php echo $genre_value['kode_genre'];?>"><?php echo $genre_value['nm_genre'];?></a>
						</div>
						<?php
							}
						?>
					</div>
					<div class="p-1 m-1 bg-initials">
						<h4 class="border-btm">
							<span class="site-heading-lower">Negara</span>
						</h4>
						<?php
							$negaras = $negara->select_negara_asc();
							foreach ($negaras as $negara_value) {
						?>
						<div class="link-gen"><a href="?negara=<?php echo $negara_value['kode_negara'];?>"><?php echo $negara_value['nm_negara'];?></a>
						</div>
						<?php
							}
						?>
					</div>
					<div class="p-1 m-1 bg-initials">
						<h4 class="border-btm">
							<span class="site-heading-lower">Serupa</span>
						</h4>
						<div class="p-02">
							<a class="btn-img bg-white" href="">
								<img src="../../assets/img/profil.jpg" class="img-fluid">	<span class="code-book">&#x25B6; </span>Berbagi itu indah</a>
						</div>
						<div class="p-02">
							<a class="btn-img bg-white" href="">
								<img src="../../assets/img/profil.jpg" class="img-fluid">	<span class="code-book">&#x25B6; </span>Berbagi itu indah</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
		if (isset($_GET['genre'])) {
			include_once("genre.php");
		}else {
	?>
	<div  id="myBtnContainer" class="section-kat">
		<div class="link-kat"><a class="btn active" onclick="filterSelection('all')">All</a>
		</div>
		<div class="link-kat"><a class="btn" onclick="filterSelection('film')">Film Bioskop</a>
		</div>
		<div class="link-kat"><a class="btn" onclick="filterSelection('anime')">Anime</a>
		</div>
		<div class="link-kat"><a class="btn" onclick="filterSelection('artikel')">Artikel</a>
		</div>
		<div class="link-kat"><a class="btn" onclick="filterSelection('terbaru')">Terbaru</a>
		</div>
	</div>
	<div class="isi">
		<div class="container">
			<div class="row no-gutters mb-2">
				<?php
					$films = $film->select_film_desc();
					$film_count = count($films);
					$limit = 8;
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
					<div class="col-lg-2 col-md-2 col-sm-2 col-6 column film">
						<div class="p-15">
							<a class="btn-img" href="?kd=<?php echo $film_value['kode_film'];?>">
								<img src="../../assets/img/profil.jpg" class="img-fluid" alt="<?php echo $film_value['judul_film'];?>">	<span class="code-book">&#x25B6; </span><?php echo $film_value['judul_film'];?></a>
						</div>
					</div>
					<?php } ?>
			</div>
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
	<?php
		}
	?>
	<div class="section-footer">
		<div class="container">
			<div class="row no-gutters pt-1 pb-1">
				<div class="col-lg-6 col-md-6 col-sm-6 col-12">
					<h2 class="section-btm-text">
						<span class="heading-text">Iweb31</span>
						<span class="desc-text">adalah sebuah konveksi yang berdiri dalam dunia percetakan dan juga design brand. Berdasarkan pasar indonesia yang sedang berkembang initials subject berniat untuk menjadi salah satu penyedia jasa tersebut. </span>
					</h2>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-12">
					
				</div>
			</div>
		</div>
	</div>
	<div class="footer-caption text-center">
		<label>&copy; Salahudin31</label>
	</div>

	<script type="text/javascript">
		filterSelection("all") // Execute the function and show all columns
		function filterSelection(c) {
		  var x, i;
		  x = document.getElementsByClassName("column");
		  if (c == "all") c = "";
		  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
		  for (i = 0; i < x.length; i++) {
		    w3RemoveClass(x[i], "show");
		    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
		  }
		}

		// Show filtered elements
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

		// Hide elements that are not selected
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

		// Add active class to the current button (highlight it)
		var btnContainer = document.getElementById("myBtnContainer");
		var btns = btnContainer.getElementsByClassName("btn");
		for (var i = 0; i < btns.length; i++) {
		  btns[i].addEventListener("click", function(){
		    var current = document.getElementsByClassName("active");
		    current[0].className = current[0].className.replace(" active", "");
		    this.className += " active";
		  });
		}
	</script>
</body>

</html>