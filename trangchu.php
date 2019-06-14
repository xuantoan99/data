<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trang Chủ</title>
<link rel="stylesheet" type="text/css" href="trangchu/dd.css">
</head>

<body>
	<div id="all">
    <form method="get">
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
        <div id="search"><img src="trangchu/img/cacdanhmuc.png" width="205" height="41" style="position:relative"><input type="text" placeholder="Nhập tên sản phẩm" style="width:750px; height:37px; position:absolute"><img src="trangchu/img/search.png" width="25" height="27" style="float:right; padding-top:9px"></div>
        <div id="all2">
        <div id="left"><img src="trangchu/img/im8.jpg" width="230" height="450"><img src="trangchu/img/logo_23.gif" width="225" height="270"></div>
        
        
        <div id="center"><img src="trangchu/img/khuyenmai_03.jpg" width="575" height="97">
        <?php 
	include('ketnoi.php');
	$sql2="select Max(id) from sanpham";
	$thucthi2=mysqli_query($conn,$sql2);
	while ($row2=mysqli_fetch_array($thucthi2))
	{$i=$row2['Max(id)'];
		$a=$i-6;
		 }?>
         
	<?php
	while($a<=$i){
			$a++;
	$sql="select * from sanpham where id=$a";
	$thucthi=mysqli_query($conn,$sql);
	while ($row=mysqli_fetch_array($thucthi))
	{
		?>
        <table>
        	<tr>
            	<td><img src="img/<?php echo $row['image'];?>" width="200" height="200"></td>
                <td><?php echo $row['name'];?><br>Kích cỡ: <?php echo $row['size'];?><br>Giá: <?php echo $row['price'];?><br>
                <a href="giohang.php?masp=<?php echo $row['code']; ?>"><img src="trangchu/img/mua ngay.gif" width="178" height="30"></a><a href="<a href="chitiet.php?masp=<?php echo $row['code']; ?>"><img src="trangchu/img/chitiet.jpg" width="144" height="30" style="padding-left:20px"></a></td>
            </tr>
			 <?php } }?>
        </table>
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
