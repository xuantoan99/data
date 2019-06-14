<?php
	include('ketnoi.php');
	$id=$_GET['id'];	
	$sql="select * from sanpham where ID=$id";
	$thucthi=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($thucthi);
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sửa Sản Phẩm</title>
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
            	<td align="center">SỬA SẢN PHẨM</td>
            </tr>
            <tr>
            	<td>Tên sản phẩm:</td>
                <td><input type="text" name="ten" value="<?php echo $row['name']; ?>"></td>
            </tr>
            <tr>
            	<td>Mã sản phẩm;</td>
                <td><input type="text" name="ma" value="<?php echo $row['code']; ?>"></td>
            </tr>
            <tr>
            	<td>Số lượng:</td>
                <td><input type="text" name="soluong" value="<?php echo $row['amount']; ?>"></td>
            </tr>
            <tr>
            	<td>Giá tiền:</td>
                <td><input type="text" name="gia" value="<?php echo $row['price']; ?>"></td>
            </tr>
            <tr>
            	<td>Ảnh mẫu</td>
                <td><input type="file" name="anh"></td>
                <td><img src="img/<?php echo $row['image']; ?>" width="50px" height="50px"></td>
                </tr>
            <tr>
            	<td>Loại hàng</td>
                <td><?php $array=explode(' ',$row['species']); ?>
                	<input type="checkbox" name="loai[]" value="váy dài" <?php if(in_array('váy',$array)) echo "checked"; ?>>váy dài<br>
					<input type="checkbox" name="loai[]" value="sơ mi"<?php if(in_array('sơ',$array)) echo "checked"; ?>>sơ mi<br>
					<input type="checkbox" name="loai[]" value="quần shot"<?php if(in_array('quần',$array)) echo "checked"; ?>>quần shot<br></td>
				</tr>
                <tr>
            	<td>Kích cỡ:</td>
                <td><?php $array=explode(' ',$row['size']); ?>
                	<input type="checkbox" name="kichco[]" value="M" <?php if(in_array('M',$array)) echo "checked"; ?>>M<br>
					<input type="checkbox" name="kichco[]" value="L"<?php if(in_array('L',$array)) echo "checked"; ?>>L<br>
					<input type="checkbox" name="kichco[]" value="S"<?php if(in_array('S',$array)) echo "checked"; ?>>S<br></td>
				</tr>
            <tr>
                <td><input type="submit" name="submit" value="Sửa"></td>
                <td><input type="reset" name="submit" value="hủy"></td>
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
		
		$sql1="update sanpham set name='$name',code='$ma',amount='$soluong',price='$gia',species='$demloai',image='$tp2',size='$demkichco' where ID=$id";
		$thucthi1=mysqli_query($conn,$sql1);
		if(!$thucthi1)
	  {echo  "<script> alert('Không thành công')</script>";}  
      else {echo  "<script> alert('thành công')</script>";
	 			 header('location:hienthi.php');}
	}
	?>
    </div>

</body>
</html>
