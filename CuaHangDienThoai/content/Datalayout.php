<?php
$slideshow = DP::run_query("SELECT * FROM slideshow",[],2);
$Sanphamdt = DP::run_query("SELECT * FROM sanpham,loaisp where loaisp.idLoaisp = sanpham.idloaisp and loaisp.idLoaisp = ? limit 0,4",[1],2);
$Sanphamlt = DP::run_query("SELECT * FROM sanpham,loaisp where loaisp.idLoaisp = sanpham.idloaisp and loaisp.idLoaisp = ? limit 0,4",[2],2);
$Sanphamhot = DP::run_query("SELECt * FROM sanpham where ? limit 0,2",[1],2);
$Tintuc = DP::run_query("SELECT * FROM tintuc",[],2);
$Meohay = DP::run_query("SELECT * FROM meovat",[],2);
?>
