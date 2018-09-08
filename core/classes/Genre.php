<?php
/**
 * 
 */
class Genre
{
	private $db;
	function __construct($database)
	{
		$this->db=$database;
	}
	function count_genre($kd_genre){
		$query = $this->db->prepare("SELECT COUNT(`kode_genre`) FROM `genre` = ?");
		$query->bindValue(1,$kd_genre);
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
	function add_genre($kd_genre,$nm_genre,$desk_genre){
		$query = $this->db->prepare("INSERT INTO `genre` (`kode_genre`,`nm_genre`,`desk_genre`) VALUES (?,?,?)");
		$query->bindValue(1,$kd_genre);
		$query->bindValue(2,$nm_genre);
		$query->bindValue(3,$desk_genre);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function delete_genre($kd_genre){
		$query = $this->db->prepare("DELETE FROM `genre` WHERE `kode_genre` = ? ");
		$query->bindValue(1,$kd_genre);
		try {
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function update_genre($kd_genre,$nm_genre,$desk_genre){
		$query = $this->db->prepare("UPDATE `genre` SET `nm_genre` = ?, `desk_genre` = ? WHERE `kode_genre` = ?");
		$query->bindValue(3,$kd_genre);
		$query->bindValue(1,$nm_genre);
		$query->bindValue(2,$desk_genre);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function select_genre_asc(){
		$query = $this->db->prepare("SELECT * FROM `genre` ORDER BY `nm_genre` ASC ");
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
	function select_genre_kd($kd_genre){
		$query = $this->db->prepare("SELECT * FROM `genre` WHERE `kode_genre` = ? ");
		$query->bindValue(1, $kd_genre);
		try{
			$query->execute();
			return $query->fetch();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}
}
?>