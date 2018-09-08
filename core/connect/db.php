<?php

$config = array('host' => 'localhost','user' => 'root','pass' => '','dbname' => 'iweb31' );

$db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['user'], $config['pass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>