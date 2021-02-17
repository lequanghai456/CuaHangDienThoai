<section	 class="col-xl-9 col-md-12 col-12">
    <div class="container"> 
        <div class="row" style="background-color: lavender;">
			<div class="col-12">
                <!--Tiêu đề-->
                <div class="row">
                    <div class="col-12">
                       <center><h1>Thông tin sản phẩm</h1></center>
                    </div>
                </div> 
                <br>
                <!--Thông tin sản phẩm-->
                    <?php
					foreach($sanpham as $post)
					{
					?>
					<div class="row">
                        <div class="col-4">
                            <img src=<?php echo $level.IMG.$post['anhdaidien'];?> style="width: 100%; height: 100%;" alt="">
                        </div>
                        <div class="col-8">
                                <div>
                                    <p>Tên sản phẩm:<?php echo " ".$post['Tensp']; ?> </p>
                                    <p>Giá sản phẩm:<?php echo " ".$post['Gia'].$post['Donvi']; ?></p>
									<p>Nhà cung cấp:<?php echo " ".$post['TenNCC'];?></p>
                                    <p>Cần thanh toán:<?php echo " ".$post['Gia'].$post['Donvi']; ?></p>
                                </div>
                        </div>
                    </div>
					<?php
					}
					?>
                    <!--Giá sản phẩm-->
                    <div class="row">
                        <div class="col-12">
						
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <!--Radio kiểm tra giới tính-->
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <input id="male" type="radio" class="form-check-input" name="optradio">Anh
                                        </label>
                                      </div> 
                                </div>
                                <div class="col-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <input id="female" type="radio" class="form-check-input" name="optradio">Chị
                                        </label>
                                      </div> 
                                </div>
                                <p id="demo3" style="color: red;"></p>
                            </div>
                            <!--Họ tên, số điện thoại-->
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Họ tên">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone" placeholder="Số điện thoại">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <p class="col-6" id="demo" style="color: red;"></p>
                                <p class="col-6" id="demo2" style="color: red;"></p>
                            </div>
                            <!--Yêu cầu khác-->
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="request" placeholder="Yêu cầu khác">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="container" style="background-color: lawngreen;">
                                        <!--Để chọn nhanh hơn-->
                                        <div class="row">
                                            <div class="col-12">
                                                <p><b>Để phục vụ nhanh hơn, </b>Hãy chọn thêm</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                    <input id="dathang" type="radio" class="form-check-input" name="checkproduct">Đặt hàng
                                                    </label>
                                                </div> 
                                            </div>
                                            <div class="col-4">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                    <input id="nhantaicho" type="radio" class="form-check-input" name="checkproduct">Nhận tại cửa hàng
                                                    </label>
                                                </div> 
                                            </div>
                                            <p class="col-5" id="demo4" style="color: red;"></p>
                                        </div>
                                        <br> 
                                        <!--Thành phố -tỉnh , quận-huyện-->   
                                        <div class="row">
                                            <div class="col-6">
                                                <select class="form-control" id="sel1" name="sellist1">
                                                    <option>Chọn thành phố (tỉnh)</option>
                                                    <option>TP Hồ Chí Minh</option>
                                                    <option>Long An</option>
                                                    <option>Tiền Giang</option>
                                                    <option>Bến Tre</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <select class="form-control" id="sel2" name="sellist2">
                                                <option>Chọn quận (huyện)</option>
                                                <option>Quận 1</option>
                                                <option>Quận 2</option>
                                                <option>Quận 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <!--Phường xã, số nhà ấp-->
                                        <div class="row">
                                            <div class="col-6">
                                                <select class="form-control" id="sel3" name="sellist3">
                                                    <option>Chọn phường (xã)</option>
                                                    <option>Phường 1</option>
                                                    <option>Phường 2</option>
                                                    <option>Phường 3</option>
                                                    <option>Phường 4</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="street" placeholder="Số nhà, tên đường">
                                                </div>
                                            </div>
                                        </div>
                                        <!--Note-->
                                        <div class="row">
                                            <div class="col-12">
                                                <p style="color:red"><b>Hướng dẫn: </b>Chọn địa chỉ để biết thời gian giao hàng</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="checkbox" class="form-check-input" value="">Gọi cho người khác nhận hàng (nếu có)
                                                    </label>
                                                  </div>
                                            </div>
                                        </div>
                                        <br>
                                     </div>
                                </div>   
                            </div>
                            
                            <br>
                            <!--Buton đặt hàng-->
                            <div class="row">
                               <div class="col-2 offset-5">
                                    <button id="button" type="button"  onclick="checkInfo();" class="btn btn-success">Đặt hàng</button>
                               </div>
                            </div><br>
                        </div>
                    </div> 
                </div>
		</div>
	<!--thông tin nhập-->
	<p id="Thôngtin"></p>
    <br>
	<!--Bình luận-->
		<div class="row mt-4 mb-4 comment">
			<div class="col-12 title pl-0">
				Bình luận
			</div>
			<form action ="<?php echo $level.Content."addcomment.php"?>" method ="get" class="col-12 write-comment pl-0 pr-0">
				<div class="input-group mb-3">
				<?php
				if(isset($_SESSION['username']))
				{
				?>
					<input readonly type ="textarea" class="form-control" name = "nguoidang" placeholder="Người đăng" rows="3" value="<?php echo $_SESSION['username'];?>"></input>
				<?php
				}
				else
				{
				?>
					<input type ="textarea" class="form-control" name = "nguoidang" placeholder="Người đăng" rows="3"></input>
				<?php
				}
				?>
					<input type ="textarea" class="form-control" name ="noidung" placeholder="Nội dung bình luận" rows="3"></input>
					<input type ="textarea" name="idsanpham" class="form-control" placeholder="Nội dung bình luận" rows="3" hidden ="true" value ="<?php echo $sanpham[0]['idsanpham'];?>"></input>
					<div class="input-group-append">
						<button class="btn btn-success" type="submit">
							Gửi bình luận</button>
					</div>
				</div>
			</form>
			<?php
				foreach($binhluan as $post)
				{
			?>
				<div class="col-12 media border p-3">
					<img src="<?php echo $level.IMG.'a1.png';?>" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width: 60px;">
					<div class="media-body">
						<h4>
							<?php echo $post['nguoidang'];?> <small><i><?php echo $post['ngaydang'];?></i></small></h4>
						<p>
							<?php echo $post['noidung'];?></p>
					</div>
				</div>
			<?php
				}
			?>
        </div>
    </div>
<script type="text/javascript" src=<?php echo $level.JS."javascript.js";?>></script>    
</section>
		
