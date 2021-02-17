<div class="col-10"  style="background-color: #7cfc005e;">
					</br>
					
					<div class="row">
						<div class="col-12" style="color:red;font-size:30px;">Thông tin tin tức</div>
						<div class="col-12">
						<table class="table table-hover" style="color:black;">
							<thead>
							<tr>
								<th>Mã Hóa Đơn</th>
								<th>Ngày Lập</th>
								<th>Người Lập</th>
							</tr>
							</thead>
							
							<tbody>
								<?php
									foreach($ketqua as $tt){
								?>
								<tr>
									<td><?php echo $tt['mahoadon']; ?></td>
									<td><?php echo $tt['ngaylap'] ?></td>
									<td><?php echo $tt['username'] ?></td>
									
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						</div>
					</div>
					
				</div>