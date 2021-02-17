<div class="col-10"  style="background-color: #7cfc005e;">
					</br>
					
					<form action="<?php echo $level.Content."themtintuc.php";?>" method="get">	
						<div class="row">
							<div class="col-2">Tiêu đề</div>
							<div class="col-10">
								<div class="form-group">
									<input type="textara" class="form-control" placeholder="Nhập tiêu đề" name="txttieude">
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-2">Nội dung</div>
							<div class="form-group col-10">
							  <textarea class="form-control" name="txtnoidung"  placeholder="Nhập nội dung" rows="5" id="comment"></textarea>
							</div>
						</div>

						
						<div class="row">
							<div class="col-2 offset-5">
								<input type = "hidden" value= "<?php ?>" name="id">
								<input type="submit" class="btn btn-primary" value="Thêm">	
							</div>								
						</div>
					</form>
					
					<div class="row">
						<div class="col-12" style="color:red;font-size:30px;">Thông tin tin tức</div>
						<div class="col-12">
						<table class="table table-hover">
							<thead>
							<tr>
								<th>Tiêu đề</th>
								<th>Nội dung</th>
							</tr>
							</thead>
							
							<tbody>
								<?php
									foreach($tintuc as $tt){
								?>
								<tr>
									<td><?php echo $tt['tieude']; ?></td>
									<td><?php echo $tt['noidung']; ?></td>
									
									<td>
										<form action="<?php echo $level.Content."suatintuc.php"; ?>" method="GET">
											<input type = "hidden" value= "<?php echo $tt['idchuyenmuc']; ?>" name="id">
											<input type="submit" class="btn btn-success" value="Sửa">
										</form>
									</td>
									<td>
										<form action="<?php echo $level.Content."xoatintuc.php"; ?>" method="GET">
											<input type = "hidden" value= "<?php echo $tt['idchuyenmuc']; ?>" name="idxoa">
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