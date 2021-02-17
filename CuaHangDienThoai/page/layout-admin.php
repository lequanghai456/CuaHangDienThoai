<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trang Web Bán Điện Thoại Di Động</title>
		<link rel="stylesheet" href=<?php echo $level.Vendor."bootstrap-4/css/bootstrap.min.css";?>>
		<link href=<?php echo $level.Vendor."fontawesome-free-5.8.2\css\all.min.css";?> rel="stylesheet" type="text/css"/>
		<link href=<?php echo $level.CSS."style.css";?> rel="stylesheet" type="text/css" media="screen,print" />
		<script src=<?php echo $level.Vendor."js/jquery-3.2.1.slim.min.js";?>></script>
		<script src=<?php echo $level.Vendor."js/popper.min.js";?>></script>
		<script src=<?php echo $level.Vendor."bootstrap-4/js/bootstrap.min.js";?>></script>	
	</header>
	<body>
		<?php
			include( $level.Header."Header-Admin.php");
			include( $level.Header."Menu.php");
		?>
		<div class="container">
			<div class="row">
				<?php
				if($_isMeoVat==true)
				{
					include($level.Content."admin-meovat-form.php");
					include($level.Content."admin-meovat-content.php");
				}
				else if($_isSanPham==true)
				{
					include($level.Content."admin-sanpham-form.php");
					include($level.Content."admin-sanpham-content.php");
				}
				else if($_isTinTuc==true)
				{
					include($level.Content."admin-tintuc-form.php");
					include($level.Content."admin-tintuc-content.php");
				}
				else if($_isTaiKhoan==true)
				{
					include($level.Content."admin-taikhoan-form.php");
					include($level.Content."admin-taikhoan-content.php");
				}
				else if($_isHoaDon==true)
				{
					include($level.Content."admin-hoadon-form.php");
					include($level.Content."admin-hoadon-content.php");
				}
				?>
			</div>

		</div>
		
	</body>
</html>