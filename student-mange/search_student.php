<?php
session_start(); 
$sid = $_POST['sid'];
@ $db = new mysqli("localhost","customer","password","sgrademangement");
if(mysqli_connect_errno())
{
echo "�������ݿ�ʧ��";
}

$query = "select * from grade where sid = '".$sid."'";
$result = $db ->query($query);
$num_result = $result->num_rows;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ѧ���ɼ�����ϵͳ</title>
</head>
<body background="pic/bg.gif">
<form name="form1" method="post">
<table width="767" height="324" border="0" align="center">
  <tr>
    <td height="228" colspan="7" background="pic/top.gif">    </td>
  </tr>
  <tr>
    <td height="22" colspan="7" background="pic/in_01.gif"></td>
    </tr>
  <tr>
    <td height="28" background="pic/in_20.gif">ѧ��	</td>
    <td background="pic/in_20.gif">����</td>
    <td background="pic/in_20.gif">����</td>
    <td background="pic/in_20.gif">�Ա�</td>
    <td background="pic/in_20.gif">����ϵ</td>
    <td background="pic/in_20.gif">&nbsp;</td>
    <td background="pic/in_20.gif">&nbsp;</td>
  </tr><?php for($i = 0; $i < $num_result; $i++)
	{
	$row = $result->fetch_assoc();
	?>
  <tr> 
    <td background="pic/in_20.gif"><?php echo stripslashes($row['sid']);?></td>
    <td background="pic/in_20.gif"><?php echo stripslashes($row['sname']);?></td>
    <td background="pic/in_20.gif"><?php echo stripslashes($row['sage']);?></td>
    <td background="pic/in_20.gif"><?php echo stripslashes($row['ssex']);?></td>
    <td background="pic/in_20.gif"><?php echo stripslashes($row['sdept']); ?></td>
	<td background="pic/in_20.gif"><a href="delete.php">ɾ��</a></td>
	<td background="pic/in_20.gif"><a href="change_grade.php">�޸�</a></td>
  </tr>
	<?php
	}
	$result->free();
	$db->close();
	?>
</table>
</form>
</body>
</html>
