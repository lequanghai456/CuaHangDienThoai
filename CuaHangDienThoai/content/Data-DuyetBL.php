<?php
$level ="../";
include ($level."config.php");
include ($level.LIB."DB.php");
$id = $_GET['idduyet'];
$result = DP::run_query("update binhluan 
set Trangthai =? where idbinhluan = ?",[0,$id],2);
header('location:'.$level.PAGE."layoutduyetBL.php");
?>