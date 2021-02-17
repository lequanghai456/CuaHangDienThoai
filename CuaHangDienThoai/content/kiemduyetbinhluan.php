<div class="row">
						<div class="col-12" style="color:red;font-size:30px;"> Bình Luận</div>
						<div class="col-12">
						<table class="table table-hover">
							<thead>
							<tr>
								<th>Tên sản phẩm</th>
								<th>Ảnh</th>
								<th>Tên Người Bình Luận</th>
								<th>Nội dung</th>
								<th>Ngày Đăng</th>
								<th>Trạng Thái</th>
							</tr>
							</thead>
							
							<tbody>
								<?php
									foreach($binhluan as $bl)
									{
								?>
								<tr>
									<td><?php echo $bl['Tensp']; ?></td>
									<td>		
										<img style="width:100px;height:100px;" src="<?php echo $level.IMG.$bl['anhdaidien']; ?>"/>
									</td>
									<td><?php echo $bl['nguoidang']; ?></td>
									<td><?php echo $bl['noidung']; ?></td>
									<td><?php echo $bl['ngaydang']; ?></td>
									<td><?php if($bl['Trangthai'] == 1)
										echo 'Đang chờ';
									else
										echo 'Đã duyệt';
										?>
									</td>
									<td>
										<form action="<?php echo $level.Content."Data-DuyetBL.php";?>" method="GET">
											<input type = "hidden" value= "<?php echo $bl['idbinhluan']; ?>" name="idduyet">
											<input type="submit" class="btn btn-success" value="Duyệt">
										</form>
									</td>
									<td>
										<form action="<?php echo $level.Content."Data-XoaBL.php";?>" method="GET">
											<input type = "hidden" value= "<?php echo $bl['idbinhluan']; ?>"name="idxoa">
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