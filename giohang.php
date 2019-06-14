<?php
	include('ketnoi.php');
	$id=$_GET['masp'];	
	$sql="select * from sanpham where code='$id'";
	$thucthi=mysqli_query($conn,$sql);
	$row2=mysqli_fetch_array($thucthi);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>giỏ hàng</title>
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
        <?php
		include('ketnoi.php');
$sql2="select * from sanpham";
	$thucthi2=mysqli_query($conn,$sql2);
	while ($row=mysqli_fetch_array($thucthi2))
	{
		?>
<form method="post">
	<table border="1">
    	<tr>
        	<td colspan="7">GIỎ HÀNG</td>
        </tr>
        <tr>
        	<td>Mã Sản Phẩm</td>
            <td>Tên Sản Phẩm</td>
            <td>Ảnh Sản Phẩm</td>
            <td>Giá Sản Phẩm</td>
            <td>Số Lượng</td>
            <td colspan="2"></td>
        </tr>
	
        <tr>
        	<td><?php echo $row['code'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><img src="img/<?php echo $row['image'];?>" width="100px" height="100px"/></td>
            <td><?php echo $row['price'];?></td>
            <td><?php echo $row['amount'];?></td>
            <td><input type="text" name="sl" value="<?php if(isset($_POST['ok']))
													{echo $_POST['sl'];}
													else {echo "1";} ?>"/><br><?php if($row['amount']==1) echo "Hết Hàng"; else echo "** tối đa ".$row['amount']." sản phẩm **"; ?></td>
            <td><input type="submit" value="Thanh toán" name="tt"></td>
        </tr>
        <tr>
        	<td colspan="5">Tổng tiền phải trả:</td>
        	<td colspan="2"><?php 
						if($_POST['sl'] <= $row['amount'])
					{$tong=0;$sl=($row['amount']-$_POST['sl']); 
					echo $tong=$row['price']*$_POST['sl']." .VNĐ";
				$sql3="update sanpham set amount='$sl' where code='$id'";
				$q2=mysql_query($sql3);}
				else {echo "<script>alert('không đủ hàng')</script>";
					echo $tong=$row['price']." .VNĐ";}  ?>
                    <input type="submit" name="ok" value="Đặt Hàng"></td>
        </tr>
    
    </table>
</form>
<?php }?>
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
