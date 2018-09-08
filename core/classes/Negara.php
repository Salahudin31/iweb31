<?php
/**
 * 
 */
class Negara
{
	private $db;
	function __construct($database)
	{
		$this->db=$database;
	}
	function count_negara($kd_negara){
		$query = $this->db->prepare("SELECT COUNT(`kode_negara`) FROM `negara` = ?");
		$query->bindValue(1,$kd_negara);
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
	function add_negara($kd_negara,$nm_negara){
		$query = $this->db->prepare("INSERT INTO `negara` (`kode_negara`,`nm_negara`) VALUES (?,?)");
		$query->bindValue(1,$kd_negara);
		$query->bindValue(2,$nm_negara);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function delete_negara($kd_negara){
		$query = $this->db->prepare("DELETE FROM `negara` WHERE `kode_negara` = ? ");
		$query->bindValue(1,$kd_negara);
		try {
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function update_negara($kd_negara,$nm_negara){
		$query = $this->db->prepare("UPDATE `negara` SET `nm_negara` = ? WHERE `kode_negara` = ?");
		$query->bindValue(2,$kd_negara);
		$query->bindValue(1,$nm_negara);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function select_negara_asc(){
		$query = $this->db->prepare("SELECT * FROM `negara` ORDER BY `nm_negara` ASC ");
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
	function select_negara_kd($kd_negara){
		$query = $this->db->prepare("SELECT * FROM `negara` WHERE `kode_negara` = ? ");
		$query->bindValue(1, $kd_negara);
		try{
			$query->execute();
			return $query->fetch();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}
}
?>