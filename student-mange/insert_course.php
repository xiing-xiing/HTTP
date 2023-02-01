<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>
<body>
<center>
<h1>课表录入结果</h1>
<?php
$cid = $_POST['cid'];
$cname = $_POST['cname'];
$ccredit = $_POST['ccredit'];
if(!$cid || !$cname ||!$ccredit)
{
echo "请输入完整";
exit;
}

$cid = addslashes($cid);
$cname = addslashes($cname);
$ccredit = addslashes($ccredit);
@ $db = new mysqli("localhost","customer","password","sgrademangement");
if(mysqli_connect_errno())
{
echo "连接数据库失败";
exit;
}
$query = "insert into course values('".$cid."','".$cname."','".$ccredit."')";
$result = $db->query($query);
if($result)
{
echo $db->affected_rows."插入成功";
}
else
{
echo $db->affected_rows."插入失败";
}
$db->close();
?>
</center>
</body>
</html>
