<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kho</title>
<link rel="stylesheet" type="text/css" href="ht.css">
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
        <div id="all2">
        <table align="center" border="1" cellpadding="1" cellspacing="1" style="margin:auto">
        <tr>
        	<td><h4>STT</h4></td>
        	<td><h4>TÊN HÀNG</h4></td>
            <td><h4>CODE</h4></td>
            <td><h4>SỐ LƯỢNG</h4></td>
            <td><h4>GIÁ TIỀN</h4></td>
            <td><h4>LOẠI HÀNG</h4></td>
            <td><h4>KÍCH CỠ</h4></td>
            <td><h4>HÌNH MẪU</h4></td>
            <td><a href="themsp.php">THÊM SP</a></td>
    	</tr>
        <?php 
	include('ketnoi.php');
	$sql2="select * from sanpham";
	$thucthi2=mysqli_query($conn,$sql2);
	while ($row=mysqli_fetch_array($thucthi2))
	{
		?>
    <tr>
    	<td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['code'];?></td>
        <td><?php echo $row['amount'];?></td>
        <td><?php echo $row['price'];?></td>
        <td><?php echo $row['species'];?></td>
        <td><?php echo $row['size'];?></td>
        <td><img src="img/<?php echo $row['image'];?>" width="100px" height="50px"></td>
        <td><a href="xoa.php?id=<?php echo $row['id']; ?>"onclick="if(confirm('bạn có chắc chắn xóa không?'))return true; else return false;">Xóa</a></td>
  
  <td><a href="sua.php?id=<?php echo $row['id']; ?>">Sửa</td>
        </tr>
        <?php }?>
        </table>
		</div>
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
