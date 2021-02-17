<?php
	$sanpham=DP::run_query("select * from sanpham WHERE idsanpham=?",[$id],2);
	$nhacungcapchon=DP::run_query("select * from nhacungcap WHERE MANCC=?",[$sanpham[0]['Manhacungcap']],2);
	$nhacungcap=DP::run_query("select * from nhacungcap",[],2);
	$loaisanphamchon = DP::run_query("SELECT * FROM loaisp where idLoaisp = ?",[$sanpham[0]['idloaisp']],2);
	$loaisanpham = DP::run_query("SELECT * FROM loaisp",[],2);
?>