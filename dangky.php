<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ĐĂNG KÝ</title>
</head>
<body>
	<form>
    	<table align="center" border="0" cellpadding="0" cellspacing="10" >
        	<h1 align="center">ĐĂNG KÝ</h1>
            <tr>
            	<td colspan="2"><input type="text" placeholder="Họ và tên *" size="40px" name="ten"></td>
            </tr>
            <tr>
            	<td colspan="2"><input type="text" placeholder="Email *" size="40px" name="email"></td>
            </tr>
            <tr>
            	<td colspan="2"><input type="password" placeholder="Mật khẩu *" size="40px" name="mk"></td>
            </tr>
            <tr>
            	<td colspan="2"><input type="text" placeholder="Số điện thoại *" size="40px" name="sdt"></td>
            </tr>
            <tr>
            	<td colspan="2"><input type="text" placeholder="Địa chỉ *" size="40px" name="dc"></td>
            </tr>
            <tr>
            	
                <td><select name="lc">
                	<option>Thanh toán khi nhận hàng</option>
                    <option>Thẻ tín dụng/Ghi nợ</option>
                	</select></td>
            </tr>
            <tr>
            	<td colspan="2" align="center"><input type="submit" value="Đăng kí" name="ok"></td>
            </tr>
        </table>
    </form>
    
    <?php 
	include('ketnoi.php');
	if(isset($_POST['ok']))
	{
		$name=$_POST['ten'];
		$email=$_POST['email'];
		$mk=$_POST['mk'];
		$sdt=$_POST['sdt'];
		$diachi=$_POST['dc'];
		$luachon=$_POST['lc'];
		
		$sql="insert into quanli(name,address,phone,sex,account,password,comment,hobby,image) values('$name','$diachi','$dienthoai','$gioitinh','$tentaikhoan','$matkhau','$ghichu','$demsothich','$tp2')";
		$thucthi=mysqli_query($conn,$sql);
		
		if(!$thucthi)
	  {echo  "<script> alert('Không thành công')</script>";}  
      else {echo  "<script> alert('thành công')</script>";
	 			 header('location:truyxuat.php');}
	}
	?>
</body>
</html>