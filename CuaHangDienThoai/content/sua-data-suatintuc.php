<?php
	$level="../";
	include($level."config.php");
	include($level.LIB."DB.php");
	$id=$_GET['idchuyenmuc'];
	$tieude=$_GET['txttieude'];
	$noidung=$_GET['txtnoidung'];
	$ketqua= DP::run_query("update tintuc set tieude=?,noidung=? where idchuyenmuc=?",[$tieude,$noidung,$id],1);
	header("location:".$level.PAGE."admin-tintuc.php");
?>