<?php
session_start();
//echo $_SERVER['DOCUMENT_ROOT'];
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
	$hostname = 'localhost';
	$dbname = 'esneezeg_new_sneezeguard';
	$dbusername = 'esneezeg_andy149';
	$dbpassword = 'Qwdf#958';
	//$dbprefix='rw_';
	include("class.db.php");
	$database = new database($hostname, $dbusername, $dbpassword, $dbname);
?>