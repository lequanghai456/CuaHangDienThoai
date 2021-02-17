<?php
	$level="../";
	include($level."config.php");
	include($level.LIB."DB.php");
	$id = $_GET['idxoa'];
	$ketqua = DP::run_query("DELETE FROM sanpham WHERE sanpham.idsanpham = ?",[$id],1);
	header("location:".$level.PAGE."admin-sanpham.php");
?>