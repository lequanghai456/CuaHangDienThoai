<?php
$level ="../";
include ($level."config.php");
include ($level.LIB."DB.php");
$id = $_GET['idxoa'];
$result = DP::run_query("delete from binhluan 
where idbinhluan = ?",[$id],2);
header('location:'.$level.PAGE."layoutduyetBL.php");
?>