<?php
/**
 * 
 */
class Film
{
	private $db;
	function __construct($databse)
	{
		$this->db=$databse;
	}
	function count_film($kd_kategori){
		$query = $this->db->prepare("SELECT COUNT(`kode_kategori`) FROM `film` WHERE `kode_kategori` = ?");
		$query->bindValue(1,$kd_kategori);
		try {
			$query->execute();
			$row=$query->fecthColumn();
			if($row==1){
				return true;
			}else{
				return false;
			}
		} catch (PDOException $e){
			die($e->getMessage()); 
		}
	}
	function add_film($kd_film,$kd_genre,$kd_negara,$kd_kategori,$kd_kualitas,$kd_rating,$tgl_r,$jdl_film,$link_film,$durasi,$desk){
		$query = $this->db->prepare("INSERT INTO `film` (`$kode_film`,`$kode_genre`,`$kode_negara`,`$kode_kategori`,`$kode_kualitas`,`$kode_rating`,`$tgl_rilis`,`$judul_film`,`$link_film`,`$durasi`,`$desk`) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
		$query->bindValue(1,$kd_film);
		$query->bindValue(2,$kd_genre);
		$query->bindValue(3,$kd_negara);
		$query->bindValue(4,$kd_kategori);
		$query->bindValue(5,$kd_kualitas);
		$query->bindValue(6,$kd_rating);
		$query->bindValue(7,$tgl_r);
		$query->bindValue(8,$jdl_film);
		$query->bindValue(9,$link_film);
		$query->bindValue(10,$durasi);
		$query->bindValue(11,$desk);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function delete_film($id_film){
		$query = $this->db->prepare("DELETE FROM `film` WHERE `id_film` = ? ");
		$query->bindValue(1,$id_film);
		try {
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function update_film($id_film,$kd_film,$kd_genre,$kd_negara,$kd_kategori,$kd_kualitas,$kd_rating,$tgl_r,$jdl_film,$link_film,$durasi,$desk){
		$query = $this->db->prepare("UPDATE `film` SET `kode_film` = ?, `kode_genre` = ?, `kode_negara` = ?, `kode_kategori` = ?, `kode_kualitas` = ?, `kode_rating` = ?, `tgl_rilis` = ?, `judul_film` = ?, `link_film` = ?, `durasi` = ?, `desk` = ? WHERE `id_film` = ?");
		$query->bindValue(12,$id_film);
		$query->bindValue(1,$kd_film);
		$query->bindValue(2,$kd_genre);
		$query->bindValue(3,$kd_negara);
		$query->bindValue(4,$kd_kategori);
		$query->bindValue(5,$kd_kualitas);
		$query->bindValue(6,$kd_rating);
		$query->bindValue(7,$tgl_r);
		$query->bindValue(8,$jdl_film);
		$query->bindValue(9,$link_film);
		$query->bindValue(10,$durasi);
		$query->bindValue(11,$desk);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function select_film_desc(){
		$query = $this->db->prepare("SELECT * FROM `film` ORDER BY `id_film` DESC ");
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
	function select_film_desc_pagging($posisi,$batas){
		$query = $this->db->prepare("SELECT * FROM `film` ORDER BY `id_film` DESC LIMIT  ".$posisi.",".$batas." ");
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
	function select_film_kd($kd_film){
		$query = $this->db->prepare("SELECT * FROM `film` WHERE `kode_film` = ?");
		$query->bindValue(1, $kd_film);
		try{
			$query->execute();
			return $query->fetch();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function select_film_genre($genre_film){
		$query = $this->db->prepare("SELECT * FROM `film` WHERE `kode_genre` = ?");
		$query->bindValue(1, $genre_film);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
	function select_film_negara($negara_film){
		$query = $this->db->prepare("SELECT * FROM `film` WHERE `kode_negara` = ?");
		$query->bindValue(1, $negara_film);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
	function select_film_kategori($kategori_film){
		$query = $this->db->prepare("SELECT * FROM `film` WHERE `kode_kategori` = ?");
		$query->bindValue(1, $kategori_film);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
}
?>