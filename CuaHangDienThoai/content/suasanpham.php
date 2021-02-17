<?php
	$level="../";
	include($level."config.php");
	include($level.LIB."DB.php");
	$id = $_GET['id'];
	include($level.Content."data-suasanpham.php");
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
	</header>
	<body>
		<?php
			include( $level.Header."Header-Admin.php");
			include( $level.Header."Menu.php");
		?>
		<div class="container">
			<div class="row">
				<div class="col-2">
					<div class="row">
						<div class="col-12">	
							</br><button type="button" class="btn btn-secondary btn-block">Thống kê</button>
							</br><button type="button" class="btn btn-secondary btn-block"><a style="color:white;text-decoration: none;" href="<?php echo $level."admin-sanpham.php"; ?>">Sản Phẩm</a></button>
							</br><button type="button" class="btn btn-secondary btn-block"><a style="color:white;text-decoration: none;" href="<?php echo $level."admin-tintuc.php"; ?>">Tin Tức</a></button>
							</br><button type="button" class="btn btn-secondary btn-block active"><a style="color:white;text-decoration: none;" href="<?php echo $level."admin-meovat.php"; ?>">Mẹo Hay</a></button>	
						</div>
					</div>		
				</div>
				
				<div class="col-10"  style="background-color: #7cfc005e;">
					</br>
						
					<form action="<?php echo $level.Content."sua-data-suasanpham.php";?>" method="post" enctype="multipart/form-data">	
							<div class="row">
								<div class="col-2">Tên Sản Phẩm</div>
								<div class="col-10">
									<div class="form-group">
											<input type="text" class="form-control" value="<?php echo $sanpham[0]['Tensp'];?>" name="txttensanpham">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-2">Giá</div>
								<div class="col-10">
									<div class="form-group">
										<input type="text" class="form-control" id="" value="<?php echo $sanpham[0]['Gia']; ?>" name="txtgia">
									</div>
								</div>
							</div>
							
							<div class="row">
							<div class="col-2">Chọn ảnh</div>
							<div class="col-10">
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="hinhanh" id="customFile" value="<?php echo $sanpham[0]['anhdaidien']; ?>">
									<label class="custom-file-label" for="customFile"><?php echo $sanpham[0]['anhdaidien']; ?></label>
								</div>
							</div>
							</div>
							</br>
							
							<div class="row">
							<div class="col-2">Nhà cung cấp</div>
							<div class="col-10">
							<select name="nhacungcap" class="custom-select">
								<option selected value="<?php echo $nhacungcapchon[0]['MANCC']; ?>"><?php echo $nhacungcapchon[0]['TenNCC'];?></option>
								<?php
									foreach($nhacungcap as $ncc){
								?>
									<option value="<?php echo $ncc['MANCC']; ?>"><?php echo $ncc['TenNCC']; ?></option>
								<?php
									}
								?>
							</select>
							</div>
						</div></br>
						
						<div class="row">
							<div class="col-2">Loại sản phẩm</div>
							<div class="col-10">
							<select name="loaisanpham" class="custom-select">
								<option selected value="<?php echo $loaisanphamchon[0]['idLoaisp']; ?>"><?php echo $loaisanphamchon[0]['Tenloaisp'];?></option>
								<?php
									foreach($loaisanpham as $lsp){
								?>
									<option value="<?php echo $lsp['idLoaisp']; ?>"><?php echo $lsp['Tenloaisp']; ?></option>
								<?php
									}  
								?>
							</select>
							</div>
						</div></br>
						<div class="row">
							<div class="col-2 offset-5">
								<input type = "hidden" value= "<?php echo $id;?>" name="id">
								<input type="submit" class="btn btn-primary" value="Sửa">		
							</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>