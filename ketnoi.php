<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>connect</title>
</head>
<body>
	<?php
		$conn=mysqli_connect('localhost','root','','webbanhang') or die ('notconnect');
		mysqli_query($conn,"set names 'utf8'");
	?>
</body>
</html>