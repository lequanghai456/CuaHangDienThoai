<div class="col-xl-9 col-md-12 col-12">
	<!--Điện thoại-->
	<h4 class="bg-danger p-3 text-white" style="display: inline;">Điện thoại</h4><a style="text-decoration: none; float: right;" class="link" href="<?php echo $level.PAGE."phone.php?page=1"?>">Xem Thêm...</a>
	<hr>
	<div class="row">
				<?php
				foreach ($Sanphamdt as $post)
				{
				?>
				
					<div class="col-lg-3 khung col-sm-6">
						<div class="thumbnail row">
							<img src=<?php echo $level.IMG.$post['anhdaidien'];?>>	
						<button class="Mua row btn"><p class="sp1"><br><br><?php echo $post['Tensp']?><br><?php echo $post['Gia']?></p></button>
						</div>
						<p class="row btn-consts">
						<a class="btn btn-warning col-6" href="<?php echo $level.PAGE."register.php?id=".$post['idsanpham']?>">Chi tiết</a>
						<a class="btn btn-success col-6" href="<?php echo $level.PAGE."giohang.php?id=".$post['idsanpham']?>">Giỏ Hàng</a>
						</p>
					</div>
				
				<?php
				}
				?>
				</div>
	<br>
	<!--Máy tính bảng-->
	<h4 class="bg-danger p-3 text-white" style="display: inline;">Máy tính bảng</h4><a style="text-decoration: none;float: right;" href="<?php echo $level.PAGE."tablet.php?page=1"?>">Xem Thêm...</a>
	<hr>
	<div class="row">
				<?php
				foreach($Sanphamlt as $post)
				{
				?>
					<div class="col-lg-3 khung col-sm-6">
						<div class="thumbnail row">
							<img src=<?php echo $level.IMG.$post['anhdaidien'];?>>	
						<button class="Mua row btn"><p class="sp1"><br><br><?php echo $post['Tensp']?><br><?php echo $post['Gia']?></p></button>
						</div>
						<p class="row btn-consts">
						<a class="btn btn-warning col-6" href="<?php echo $level.PAGE."register.php?id=".$post['idsanpham']?>">Chi tiết</a>
						<a class="btn btn-success col-6" href="<?php echo $level.PAGE."giohang.php?id=".$post['idsanpham']?>">Giỏ Hàng</a>
						</p>
					</div>
				<?php
				}
				?>
					
	</div>				
</div>
