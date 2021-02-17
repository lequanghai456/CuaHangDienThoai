<?php
	$idsanpham = $_GET['id'];
	$sanpham = DP::run_query('SELECT * From sanpham A,Nhacungcap B where A.Manhacungcap = B.MANCC and A.idsanpham =?',[$idsanpham],2);
	$binhluan = DP::run_query('SELECT * From binhluan where idsanpham=? and Trangthai=0',[$idsanpham],2);
?>