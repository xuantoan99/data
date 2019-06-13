<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Đăng Ký</title>
<link rel="stylesheet" type="text/css" href="trangchu/dd.css">
</head>

<body>
	<div id="all">
    	<div id="header"><h1 style="padding-top:40px">SHOP BÁN HÀNG ONLINE</h1>
        </div>
        <div id="nav">
        	<ul>
            	<li><a href="trangchu.php">TRANG CHỦ</a></li>
                <li><a href="#">SẢN PHẨM</a></li>
                <li><a href="#">THÔNG TIN</a></li>
                <li><a href="#">LIÊN HỆ</a></li>
            </ul>
        </div>
        <div id="all2">
        <div id="left"><img src="trangchu/img/im8.jpg" width="230" height="450"><img src="trangchu/img/logo_23.gif" width="225" height="270"></div>
        
        
        <div id="center">
        <form method="post">
    	<table align="center" border="0" cellpadding="0" cellspacing="10" style="margin:auto">
        	<h1 align="center">ĐĂNG KÝ</h1>
            <tr>
            	<td colspan="2"><input type="text" placeholder="Họ và tên *" size="40px" name="ten"></td>
            </tr>
            <tr>
            	<td colspan="2"><input type="text" placeholder="Email *" size="40px" name="email"></td>
            </tr>
            <tr>
            	<td colspan="2"><input type="text" placeholder="Số điện thoại *" size="40px" name="sdt"></td>
            </tr>
            <tr>
            	<td colspan="2"><input type="text" placeholder="Địa chỉ *" size="40px" name="dc"></td>
            </tr>
            <tr>
            	<td colspan="2"><input type="text" placeholder="Tài khoản *" size="40px" name="tk"></td>
            </tr>
            <tr>
            	<td colspan="2"><input type="text" placeholder="Mật khẩu *" size="40px" name="mk"></td>
            </tr>
            <tr>
            	<td colspan="2"><input type="text" placeholder="Nhập lại mật khẩu *" size="40px" name="mkl"></td>
            </tr>
            <tr>
            	
                <td><select name="lc">
                	<option value="Thanh toán khi nhận hàng">Thanh toán khi nhận hàng</option>
                    <option value="Thẻ tín dụng/Ghi nợ">Thẻ tín dụng/Ghi nợ</option>
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
		$tk=$_POST['tk'];
		$mk=$_POST['mk'];
		$mkl=$_POST['mkl'];
		$sdt=$_POST['sdt'];
		$diachi=$_POST['dc'];
		$luachon=$_POST['lc'];
		
		$sql="insert into khachhang(name,address,phone,email,phuongthuctt,account,password) values('$name','$diachi','$sdt','$email','$luachon','$tk','$mk')";
		$thucthi=mysqli_query($conn,$sql);
		
		if(!$thucthi)
	  {echo  "<script> alert('Không thành công')</script>";}  
      else {echo  "<script> alert('thành công')</script>";
	 			 header('location:dangnhap.php');}
	}
	?>
		</div>
        <div id="right"><img src="trangchu/img/im7.png" width="140" height="400"><img src="trangchu/img/img2.jpg" width="140" height="300"></div>
        <div id="clr"></div>
        <div id="menu">
        	<ul>
            	<li><a href="trangchu.php">TRANG CHỦ</a></li>
                <li><a href="#">SẢN PHẨM</a></li>
                <li><a href="#">THÔNG TIN</a></li>
                <li><a href="#">LIÊN HỆ</a></li>
            </ul>
        </div>
        <div id="footer">
        <a href="#">Đăng nhập</a> | <a href="#">Đăng ký</a> <br><br>
        ©2012  Web thời trang chuẩn Chuẩn All Rights Reserved.
        </div>
        </div>
        </form>
    </div>

</body>
</html>
