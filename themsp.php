<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thêm Sản Phẩm</title>
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
        <div id="left"></div>
        
        
        <div id="center">
        <form method="post" enctype="multipart/form-data">
    	<table width="600" cellpadding="0" cellspacing="5" border="1">
        	<tr>
            	<td align="center">THÊM SẢN PHẨM</td>
            </tr>
            <tr>
            	<td>Tên sản phẩm:</td>
                <td><input type="text" name="ten"></td>
            </tr>
            <tr>
            	<td>Mã sản phẩm;</td>
                <td><input type="text" name="ma"></td>
            </tr>
             <tr>
            	<td>Số lượng:</td>
                <td><input type="text" name="soluong"></td>
            </tr>
            <tr>
            	<td>Giá tiền:</td>
                <td><input type="text" name="gia"></td>
            </tr>
            <tr>
            	<td>Ảnh mẫu</td>
                <td><input type="file" name="anh"></td>
                </tr>
            <tr>
            	<td>Loại hàng</td>
                <td>
                	<input type="checkbox" name="loai[]" value="váy dài">váy dài<br>
					<input type="checkbox" name="loai[]" value="sơ mi">sơ mi<br>
					<input type="checkbox" name="loai[]" value="quần shot">quần shot<br></td>
				</tr>
                <tr>
            	<td>Kích cỡ:</td>
                <td><input type="checkbox" name="kichco[]" value="M">M<br>
					<input type="checkbox" name="kichco[]" value="L">L<br>
					<input type="checkbox" name="kichco[]" value="S">S<br></td>
				</tr>
            <tr>
                <td><input type="submit" name="submit" value="THÊM"></td>
                <td><input type="reset" name="submit" value="HỦY"></td>
                </tr>
		</table>
        </form>
        
<?php 
	include('ketnoi.php');
	if(isset($_POST['submit']))
	{
		$name=$_POST['ten'];
		$ma=$_POST['ma'];
		$soluong=$_POST['soluong'];
		$gia=$_POST['gia'];
		$loai=$_POST['loai'];
		$kichco=$_POST['kichco'];
		
		$tp1=$_FILES['anh']['tmp_name'];
	    $tp2=$_FILES['anh']['name'];
	
	move_uploaded_file($tp1,'img/'.$tp2);
	
	foreach ($_POST['loai'] as $dem1)
		{$demloai.=$dem1 ."";}
		
		foreach ($_POST['kichco'] as $dem2)
		{$demkichco.=$dem2 ."";}
		
		$sql="insert into sanpham(name,code,amount,price,species,image,size) values('$name','$ma','$soluong','$gia','$demloai','$tp2','$demkichco')";
		$thucthi=mysqli_query($conn,$sql);
		
		if(!$thucthi)
	  {echo  "<script> alert('Không thành công')</script>";}  
      else {echo  "<script> alert('thành công')</script>";
	 			 header('location:hienthi.php');}
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
