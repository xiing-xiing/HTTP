<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>
<body>
<center>
<h1>�α�¼����</h1>
<?php
$cid = $_POST['cid'];
$cname = $_POST['cname'];
$ccredit = $_POST['ccredit'];
if(!$cid || !$cname ||!$ccredit)
{
echo "����������";
exit;
}

$cid = addslashes($cid);
$cname = addslashes($cname);
$ccredit = addslashes($ccredit);
@ $db = new mysqli("localhost","customer","password","sgrademangement");
if(mysqli_connect_errno())
{
echo "�������ݿ�ʧ��";
exit;
}
$query = "insert into course values('".$cid."','".$cname."','".$ccredit."')";
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
