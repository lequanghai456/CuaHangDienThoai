<?php
	$level="../";
	include($level."config.php");
	include($level.LIB."DB.php");
	$tieude = $_GET['txttieude'];
	$noidung = $_GET['txtnoidung'];
	$ketqua = DP::run_query("INSERT INTO tintuc(tieude,noidung,trangthai) VALUES (?,?,?)",[$tieude,$noidung,1],3);
	var_dump($_GET);
	header("location:".$level.PAGE."admin-tintuc.php");
?>