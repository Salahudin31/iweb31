<?php 
ob_start(); // Added to avoid a common error of 'header already sent'
session_start();
//database
require_once 'connect/db.php';
//objek
require_once 'classes/film.php';

//spareparts
require_once 'classes/genre.php';
require_once 'classes/kategori.php';
require_once 'classes/kualitas.php';
require_once 'classes/negara.php';
require_once 'classes/rating.php';

	//objek
	$film 			= new Film($db);

	//spareparts
	$genre			= new Genre($db);
	$kategori 		= new Kategori($db);
	$kualitas 		= new Kualitas($db);
	$negara 		= new Negara($db);
	$rating 		= new Rating($db);

$errors = array();
?>