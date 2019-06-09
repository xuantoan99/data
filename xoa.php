<?php
	$id=$_GET['id'];
	echo $id;
	include('ketnoi.php');
	$sql="delete from sanpham where ID='$id'";
	$thucthi=mysqli_query($conn,$sql);
	if($thucthi) {header('location:hienthi.php');}
	else echo "không xóa được";
 
?>