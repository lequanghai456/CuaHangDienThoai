<?php
	$level="../";
	include($level."config.php");
	include($level.LIB."DB.php");
	$tieude = $_GET['txttieude'];
	$noidung = $_GET['txtnoidung'];
	$ketqua = DP::run_query("INSERT INTO meovat(tieude,noidung,trangthai) VALUES (?,?,?)",[$tieude,$noidung,1],3);
	header("location:".$level.PAGE."admin-meovat.php");
?>