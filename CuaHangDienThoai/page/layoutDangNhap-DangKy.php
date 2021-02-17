<?php
	session_start();
?>
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
		<style> 
			.logo-login{
				height: 20%;
				width: 20%;
			}
			.border-login{
				border: 1px solid black;
				border-radius: 5px;
			}
			hr{
				border:0px;
			}
			#warning-username,#warning-password{
				color:red;
			}
		</style>
	</head>
	<body>
	<?php 
		
			include( $level.Header."Header.php");
			include( $level.Header."Menu.php");
			include($level.LIB."DB.php");
	?>
		<div class="container" >
			<div class="row" style = "background-color: lavender;">
				<div class="col-12" >
		<?php 
			if($IsDangKy==true)
				include($level.Content."DangkyForm.php");
			if($IsDangNhap==true)
				include($level.Content."DangnhapForm.php");
		?>
				</div>
			</div>
		</div>
		
	<?php
		include( $level.Footer."Footer.php");
	?>
	</body>
	</HTML>