<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>
<body>
<center>
<?php
$sid = $_POST['sid'];
$sname = $_POST['sname'];
$cid = $_POST['cid'];
$cname = $_POST['cname'];
$sgrade = $_POST['sgrade'];
if(!$sid || !$sname ||!$cid ||!$cname || !$sgrade)
{
echo "����������";
exit;
}

$sid = addslashes($sid);
$sname = addslashes($sname);
$cid = addslashes($cid);
$cname = addslashes($cname);
$sgrade = addslashes($sgrade);

@ $db = new mysqli("localhost","customer","password","sgrademangement");
if(mysqli_connect_errno())
{
echo "�������ݿ�ʧ��";
exit;
}
$query = "insert into grade values('".$sid."','".$sname."','".$cid."','".$cname."','".$sgrade."')";
$result = $db->query($query);
if($result)
{
echo $db->affected_rows."����ɹ�";
}
else
{
echo $db->affected_rows."����ʧ��";
}
$db->close();
?>
</center>
</body>
</html>
