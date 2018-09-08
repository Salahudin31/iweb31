<?php

    $kd_negara = $_GET['negara'];

    $film_get_negara = $film->select_film_negara($kd_negara);

?>
<div class="row no-gutters">
	<?php
		foreach ($film_get_negara as $film_value) {
	?>
	<div class="col-lg-3 col-md-3 col-sm-3 col-6 column film">
		<div class="p-15">
			<a class="btn-img" href="video/?kd=<?php echo $film_value['kode_film'];?>">
				<img src="../assets/img/profil.jpg" class="img-fluid" alt="<?php echo $film_value['judul_film'];?>">	<span class="code-book">&#x25B6; </span><?php echo $film_value['judul_film'];?></a>
		</div>
	</div>
	<?php
		}
	?>
</div>