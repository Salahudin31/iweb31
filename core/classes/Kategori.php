<?php
/**
 * 
 */
class Kategori
{
	private $db;
	function __construct($database)
	{
		$this->db=$database;
	}
	function count_kategori($kd_kategori){
		$query = $this->db->prepare("SELECT COUNT(`kode_kategori`) FROM `kategori` = ?");
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
	function add_kategori($kd_kategori,$nm_kategori){
		$query = $this->db->prepare("INSERT INTO `kategori` (`kode_kategori`,`nm_kategori`) VALUES (?,?)");
		$query->bindValue(1,$kd_kategori);
		$query->bindValue(2,$nm_kategori);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function delete_kategori($kd_kategori){
		$query = $this->db->prepare("DELETE FROM `kategori` WHERE `kode_kategori` = ? ");
		$query->bindValue(1,$kd_kategori);
		try {
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function update_kategori($kd_kategori,$nm_kategori){
		$query = $this->db->prepare("UPDATE `kategori` SET `nm_kategori` = ? WHERE `kode_kategori` = ?");
		$query->bindValue(2,$kd_kategori);
		$query->bindValue(1,$nm_kategori);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function select_kategori_desc(){
		$query = $this->db->prepare("SELECT * FROM `kategori` ORDER BY `nm_kategori` DESC ");
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
	function select_kategori_kd($kd_kategori){
		$query = $this->db->prepare("SELECT * FROM `kategori` WHERE `kode_kategori` = ? ");
		$query->bindValue(1, $kd_kategori);
		try{
			$query->execute();
			return $query->fetch();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}
}
?>