<div class="col-10"  style="background-color: #7cfc005e;">
					</br>
					
					<form action="<?php echo $level.Content."themsanpham.php";?>" method="post" enctype="multipart/form-data">

						<div class="row">
							<div class="col-2">Tên Sản Phẩm</div>
							<div class="col-10">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Nhập tên sản phẩm" name="txttensanpham">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-2">Giá</div>
							<div class="col-10">
								<div class="form-group">
									<input type="text" class="form-control" id="" placeholder="Nhập giá" name="txtgia">
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-2">Giá</div>
							<div class="col-10">
								<div class="form-group">
									<input type="file" id="hinhanh"  name="hinhanh">
								</div>
							</div>
						</div>
							
						<div class="row">
							<div class="col-2">Nhà cung cấp</div>
							<div class="col-10">
							<select name="nhacungcap" class="custom-select">
								<option selected>Chọn nhà cung cấp</option>
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
								<option selected>Chọn loại sản phẩm</option>
								<?php
									foreach($loaisp as $lsp){
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
								<input type = "hidden" value= "<?php ?>" name="id">
								<input type="submit" class="btn btn-primary" value="Thêm">	
							</div>								
						</div>
					</form>
					
					<div class="row">
						<div class="col-12" style="color:red;font-size:30px;">Thông tin sản phẩm</div>
						<div class="col-12">
						<table class="table table-hover">
							<thead>
							<tr>
								<th>Tên sản phẩm</th>
								<th>Giá</th>
								<th>Ảnh</th>
								<th>Loại sản phẩm</th>
								<th>Nhà cung cấp</th>
							</tr>
							</thead>
							
							<tbody>
								<?php
									foreach($sanpham as $sp){
								?>
								<tr>
									<td><?php echo $sp['Tensp']; ?></td>
									<td><?php echo $sp['Gia']; ?></td>
									<td>		
										<img style="width:100px;height:100px;" src="<?php echo $level.IMG.$sp['anhdaidien']; ?>"/>
									</td>
									<td><?php echo $sp['TenNCC']; ?></td>
									<td><?php echo $sp['Tenloaisp']; ?></td>
									
									<td>
										<form action="<?php echo $level.Content."suasanpham.php";?>" method="GET">
											<input type = "hidden" value= "<?php echo $sp['idsanpham']; ?>" name="id">
											<input type="submit" class="btn btn-success" value="Sửa">
										</form>
									</td>
									<td>
										<form action="<?php echo $level.Content."xoasanpham.php"; ?>" method="GET">
											<input type = "hidden" value= "<?php echo $sp['idsanpham']; ?>" name="idxoa">
											<input type="submit" class="btn btn-danger" value="Xoá">
										</form>
									</td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						</div>
					</div>
					
				</div>