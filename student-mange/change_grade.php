<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>
<?php

$sid = $_SESSION['deletename'];
$mysql = mysqli_connect("localhost","customer","password","sgrademangement");
if(mysqli_connect_errno())
{
echo "连接数据库失败";
}

$mysql->query ( "delete from grade where sid = '".$sid."'");
$url = "insert_grade.html";
echo "<script type='text/javascript'>"."location.href='".$url."'"."</script>";
?>
<body>
<h1>删除结果</h1>
</body>
</html>
