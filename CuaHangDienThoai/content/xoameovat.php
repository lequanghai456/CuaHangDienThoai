<?php
	$level="../";
	include($level."config.php");
	include($level.LIB."DB.php");
	$id = $_GET['idxoa'];
	$ketqua=DP::run_query("delete from meovat where idchuyenmuc=?",[$id],1);
	header("location:".$level.PAGE."admin-meovat.php");
?>