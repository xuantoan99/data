
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>HIỂN THỊ</title>
</head>
<body>
<?php 
	include('ketnoi.php');
	$sql2="select * from sanpham";
	$thucthi2=mysqli_query($conn,$sql2);
	while ($row=mysqli_fetch_array($thucthi2))
	{
		?>
   <table border="1" bgcolor="#99FF00" cellpadding="0" cellspacing="0">
        <tr>
        	<td><h4>STT</h4></td>
        	<td><h4>TÊN HÀNG</h4></td>
            <td><h4>CODE</h4></td>
            <td><h4>SỐ LƯỢNG</h4></td>
            <td><h4>GIÁ TIỀN</h4></td>
            <td><h4>LOẠI HÀNG</h4></td>
            <td><h4>KÍCH CỠ</h4></td>
            <td><h4>HÌNH MẪU</h4></td>
    	</tr>
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
</body>
</html>