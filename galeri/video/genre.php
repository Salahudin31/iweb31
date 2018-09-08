<?php

    $kd_genre = $_GET['genre'];

    $film_get_genre = $film->select_film_genre($kd_genre);

?>
<div class="row no-gutters">
	<?php
		foreach ($film_get_genre as $film_value) {
	?>
	<div class="col-lg-3 col-md-3 col-sm-3 col-6 column film">
		<div class="p-15">
			<a class="btn-img" href="?kd=<?php echo $film_value['kode_film'];?>">
				<img src="../../assets/img/profil.jpg" class="img-fluid" alt="<?php echo $film_value['judul_film'];?>">	<span class="code-book">&#x25B6; </span><?php echo $film_value['judul_film'];?></a>
		</div>
	</div>
	<?php
		}
	?>
</div>