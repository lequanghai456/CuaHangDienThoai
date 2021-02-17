<?php
	$level="../";
	include($level."config.php");
	include($level.LIB."DB.php");
	$id = $_GET['idxoa'];
	$ketqua = DP::run_query("DELETE FROM users WHERE username = ?",[$id],1);
	header("location:".$level.PAGE."admin-taikhoan.php");
?>