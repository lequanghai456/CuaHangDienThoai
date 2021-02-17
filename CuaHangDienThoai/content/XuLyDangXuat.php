<?php session_start();
	$level="../";
	include ($level."config.php");
	include($level.LIB."DB.php");
	var_dump($_POST);
	if (isset($_SESSION['username'])){
	unset($_SESSION['username']); 
	unset($_SESSION['isadmin']);
	// xóa session login
	}
	header('location:'.$level.'index.php');
?>