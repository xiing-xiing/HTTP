<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>
<body>
<center>
<h1>����¼����</h1>
<?php
$sid = $_POST['sid'];
$sname = $_POST['sname'];
$sage = $_POST['sage'];
$ssex = $_POST['ssex'];
$sdept = $_POST['sdept'];
if(!$sid || !$sname ||!$sage ||!$ssex || !$sdept)
{
echo "����������";
exit;
}

$sid = addslashes($sid);
$sname = addslashes($sname);
$sage = addslashes($sage);
$ssex = addslashes($ssex);
$sdept = addslashes($sdept);

@ $db = new mysqli("localhost","customer","password","sgrademangement");
if(mysqli_connect_errno())
{
echo "�������ݿ�ʧ��";
exit;
}
$query = "insert into sinfo values('".$sid."','".$sname."','".$sage."','".$ssex."','".$sdept."')";
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
