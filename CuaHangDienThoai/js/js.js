function ham1()
{
	var button=document.getElementById("button");
	button.addEventListener('click',function(){
		

		var _name = document.getElementById("name");
		var _phone = document.getElementById("phone");
		var _Diachi = document.getElementById("diachi");
		var _Sex = new Array("Anh ","Chị ","Nam ","Nữ ");
		var _city = document.getElementById("3");

		if(_name.value == "")
			document.getElementById("demo").innerHTML ="Tên không được để trống";
		else 
			if(_name.value.length < 5)
				document.getElementById("demo").innerHTML ="Tên nhập dài hơn 5 ký tự";
			else
				document.getElementById("demo").innerHTML ="";




		if(_phone.value == "")
			document.getElementById("demo2").innerHTML ="số điện thoại ko được để trống";
		else{
			if(isNaN( _phone.value)||( _phone.value.length < 10 ||_phone.value.length > 11))
				document.getElementById("demo2").innerHTML=" Nhập điện thoại chỉ có ký tự số và chứa 10 đến 11 số. ";
			else
				document.getElementById("demo2").innerHTML ="";
		}



		if(document.getElementById("male").checked||document.getElementById("female").checked)
			document.getElementById("demo3").innerHTML="";
		else
			document.getElementById("demo3").innerHTML="Phải chọn giới tính";



		if(_Diachi.value == "")
			document.getElementById("demo4").innerHTML ="Địa chỉ không được để trống";
		else
			document.getElementById("demo4").innerHTML ="";

		var _kq="";
		var c=document.getElementById("demo").innerHTML+document.getElementById("demo2").innerHTML+document.getElementById("demo3").innerHTML+document.getElementById("demo4").innerHTML;
		if(c=="")
			{
				if(document.getElementById("male").checked) _kq+=_Sex[0];
				else _kq+=_Sex[1];
				_kq+=_name.value+" đã đặt mua thành công xin hãy xem lại thông tin của ";
				
				if(document.getElementById("male").checked) _kq+=_Sex[0];
				else _kq+=_Sex[1];
				_kq+=" .Nếu thông tin chưa chính xác xin vui lòng sửa lại"
				_kq+="<br><div>Thông tin khách hàng</div><br>Họ tên: "+_name.value+"<br>Số điện thoại:"+_phone.value+"<br>Địa điểm giao hàng: "+_Diachi.value+"<br>Giới tính: ";
				
				if(document.getElementById("male").checked) _kq+=_Sex[2];
				else _kq+=_Sex[3];
				document.getElementById('Thôngtin').innerHTML=_kq;
			}
			else
				document.getElementById('Thôngtin').innerHTML="";
	});
}
window.onload = ham1();