<?php
$name = $_POST['name'];
$password = $_POST['password'];
if((!isset($name)) || (!isset($password)))
{
}
else
{
$mysql = mysqli_connect ("localhost","customer","password");
if(!$mysql)
{
echo "�������ݿ�ʧ��";
exit;
}
$selected = mysqli_select_db($mysql,"sgrademangement");
if(!$selected)
{
echo "û�д���";
exit;
}
$query = "select count(*) from admin where name = '".$name."' and password = '".$password."'";
$result = mysqli_query($mysql,$query);
if(!$result)
{
echo "�鲻��";
exit;
}
$row = mysqli_fetch_row($result);
$count = $row[0];
if($count > 0)
{
$url = "admin_result.html";
echo "<script type='text/javascript'>"."location.href='".$url."'"."</script>";
}
else 
{
echo "<h1>ʧ��</h1>";
}
}

?>