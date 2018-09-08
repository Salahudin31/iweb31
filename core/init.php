<?php
session_start();
ob_start(); // Added to avoid a common error of 'header already sent'
require_once 'connect/db.php';
function my_autoload($class)
{   $filename = 'classes/'.$class.'.php';
	include_once $filename;
}
spl_autoload_register('my_autoload');
try {
	//objek
	$film 			= new Film($db);

	//spareparts
	$genre			= new Genre($db);
	$kategori 		= new Kategori($db);
	$kualitas 		= new Kualitas($db);
	$negara 		= new Negara($db);
	$rating 		= new Rating($db);

} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>