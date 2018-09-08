<?php
/**
 * 
 */
class Kualitas
{
	private $db;
	function __construct($database)
	{
		$this->db=$database;
	}
	function count_kualitas($kd_kualitas){
		$query = $this->db->prepare("SELECT COUNT(`kode_kualitas`) FROM `kualitas` = ?");
		$query->bindValue(1,$kd_kualitas);
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
	function add_kualitas($kd_kualitas,$nm_kualitas){
		$query = $this->db->prepare("INSERT INTO `kualitas` (`kode_kualitas`,`nm_kualitas`) VALUES (?,?)");
		$query->bindValue(1,$kd_kualitas);
		$query->bindValue(2,$nm_kualitas);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function delete_kualitas($kd_kualitas){
		$query = $this->db->prepare("DELETE FROM `kualitas` WHERE `kode_kualitas` = ? ");
		$query->bindValue(1,$kd_kualitas);
		try {
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function update_kualitas($kd_kualitas,$nm_kualitas){
		$query = $this->db->prepare("UPDATE `kualitas` SET `nm_kualitas` = ? WHERE `kode_kualitas` = ?");
		$query->bindValue(2,$kd_kualitas);
		$query->bindValue(1,$nm_kualitas);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function select_kualitas(){
		$query = $this->db->prepare("SELECT * FROM `kualitas` ");
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
}
?>