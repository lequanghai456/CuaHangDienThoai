            <div class="row">
                 <div class="col-4 offset-4">
                     <hr>
                    <center><h1>Đăng nhập</h1></center><hr>
                    <form action=<?php echo $level.Content."XuLy.php"?> method='POST' >
							<div class="form-group">
								<label for="username">Tài khoản:</label>
								<input type="text" name ="username" class="form-control" placeholder="Username" id="username"></input></td>
							</div>
							<div class="form-group">
								<label for="pwd">Mật Khẩu:</label>
								<input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd"></input>
							</div>
							<div>
								<td><button type="submit" name='dangnhap' class="btn btn-primary" onclick=>Đăng nhập</button></td>
							</div>
                    </form>
                 </div>
             </div>
             <div class="row">
                <div class="col-12">
                    <hr>
                        <center>Bạn chưa có tài khoản?<a href=<?php echo $level."Dangky.php"?>>Đăng ký</a></center>
                    <hr>
                </div>
             </div>