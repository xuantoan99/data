<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>thu nghiệm</title>
</head>
<body>
	<div align="center">
            <form action="thunghiem.php" method="get">
                Search: <input type="text" name="search" />
                <input type="submit" name="ok" value="search" />
            </form>
        </div>
        <?php
		include('ketnoi.php');
        if (isset($_GET['ok'])) 
        {
            $search = addslashes($_GET['search']);
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            }
            else
            {
                $query="select * from sanpham where $search like '%$search%'";
                $sql=mysql_query($query);
                $num = mysql_num_rows($sql);
                if ($num > 0 && $search != "") 
                {
                    echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
                    echo '<table border="1" cellspacing="0" cellpadding="10">';
                    while ($row = mysql_fetch_assoc($sql)) {
                        echo '<tr>';
                            echo "<td>{$row['img']}</td>";
                            echo "<td>{$row['name']}</td>";
                            echo "<td>{$row['price']}</td>";
                            echo "<td>{$row['size']}</td>";
                            echo "<td>{$row['amount']}</td>";
                        echo '</tr>';
                    }
                    echo '</table>';
                } 
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        ?> 
	
</body>
</html>