<div class="col-10"  style="background-color: #7cfc005e;">
					</br>
					
					<div class="row">
						<div class="col-12" style="color:red;font-size:30px;">Thông tin tin tức</div>
						<div class="col-12">
						<table class="table table-hover" style="color:black;">
							<thead>
							<tr>
								<th>Tên Tài Khoản</th>
							</tr>
							</thead>
							
							<tbody>
								<?php
									foreach($ketqua as $tt){
								?>
								<tr>
									<td><?php echo $tt['Username']; ?></td>
									<td><?php if($tt['isAdmin'] == '1') echo 'admin'; else echo  'Nhân viên'; ?></td>
									
									<td>
										<form action="<?php echo $level.Content."xoataikhoan.php"; ?>" method="GET">
											<input type = "hidden" value= "<?php echo $tt['Username']; ?>" name="idxoa">
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