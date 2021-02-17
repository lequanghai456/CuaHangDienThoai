<?php
	$level="../";
	include($level."config.php");
	include($level.LIB."DB.php");
	$id = $_GET['idxoa'];
	$ketqua=DP::run_query("delete from tintuc where idchuyenmuc=?",[$id],1);
	header("location:".$level.PAGE."admin-tintuc.php");
?>