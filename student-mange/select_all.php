<?php
session_start(); 
@ $db = new mysqli("localhost","customer","password","sgrademangement");
if(mysqli_connect_errno())
{
echo "�������ݿ�ʧ��";
}

$query = "select *  from grade ";
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
    <td width="110" height="28" background="pic/in_20.gif">ѧ��	</td>
    <td width="136" background="pic/in_20.gif">����</td>
    <td width="132" background="pic/in_20.gif">�γ̺�</td>
    <td width="115" background="pic/in_20.gif">��Ŀ</td>
    <td width="111" background="pic/in_20.gif">����</td>
    <td width="67" background="pic/in_20.gif">&nbsp;</td>
    <td width="66" background="pic/in_20.gif">&nbsp;</td>
  </tr><?php for($i = 0; $i < $num_result; $i++)
	{
	$row = $result->fetch_assoc();
	?>
  <tr> 
    <td background="pic/in_20.gif"><?php echo stripslashes($row['sid']);?></td>
    <td background="pic/in_20.gif"><?php echo stripslashes($row['sname']);?></td>
    <td background="pic/in_20.gif"><?php echo stripslashes($row['cid']);?></td>
    <td background="pic/in_20.gif"><?php echo stripslashes($row['cname']);?></td>
    <td background="pic/in_20.gif"><?php echo stripslashes($row['sgrade']); ?></td>
	<td background="pic/in_20.gif"><a href="delete.php">ɾ��</a></td>
    <td background="pic/in_20.gif"><a href="change_grade.php">�޸�</a></td>
  </tr>
	<?php
	}
	//$result->free();
	$db->close();
	?>
</table>
</form>
</body>
</html>
