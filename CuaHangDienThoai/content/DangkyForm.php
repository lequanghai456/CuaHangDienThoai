<div class="row">
    <div class="col-4 offset-4">
		<hr>
        <center><h1>Đăng Kí</h1></center><hr>
        <form action=<?php echo $level.Content.'XuLyDangKy.php'?> method='post'>
			<div class="form-group">
				<label for="username">Tài Khoản <span style="color:red;">*</span></label>
				<input type="text"  class="form-control" placeholder="Username" name="username">
				<div id="warning-username"></div>
			</div>
			
			<div class="form-group">
				<label for="pwd">Mật khẩu: <span style="color:red;">*</span></label>
				<input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password">
				<div id="warning-password" ></div>
			</div>
			
			<div class="form-group">
				<label for="confirm-pwd">Nhập lại mật khẩu:<span style="color:red;">*</span></label>
				<input type="password" class="form-control" placeholder="Nhập lại mật khẩu" name="confirm">
				<div id="warning-confirm-password" ></div></td>
			</div>
			<button type="submit" class="btn btn-primary" name='dangky' >Đăng ký</button>
        </form>
		
	</div>
</div>
<div class="row">
	<div class="col-12">
		<hr>
		<center>Bạn đã có tài khoản? <a href=<?php echo $level.PAGE."Dangnhap.php"?>>Đăng nhập</a></center>
		<hr>
	</div>
</div>