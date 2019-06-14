<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Đăng Nhập</title>
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
        <form method="post" >
	<table align="center" border="0" cellpadding="0" cellspacing="10" style="margin:auto">
    	<tr>
        	<td colspan="2" align="center"><h1>ĐĂNG NHẬP</h1></td>
        </tr>
        <tr>
        	
            <td><input type="text" name="tk" placeholder="Tên tài khoản *"></td>
        </tr>
        <tr>
            <td><input type="password" name="mk" placeholder="Mật khẩu *"></td>
        </tr>
        <tr>
        	<td colspan="2" align="center"><input type="submit" name="ok" value="Đăng nhập"></td>
        </tr>
    </table>
</form>
<?php
	include('ketnoi.php');
	if(isset($_POST['ok']))
	{$tk=$_POST['tk'];
		$mk=$_POST['mk'];
		$query="select * from khachhang where account='$tk' and password='$mk'";
		$result=mysqli_query($conn,$query);
		$count=mysqli_num_rows($result);
		if($count==1)
			{$_SESSION['user']=$tk;
			header("location:hienthi.php");
			 echo "Thanh cong"; }
			else{echo "<p style='color:red;'>Sai tài khoản hoặc mật khẩu!</p>";}
		}
?>
		</div>
        <div id="right"></div>
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
