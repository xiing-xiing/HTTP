<?php
session_start();
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
$query = "select count(*) from customer where name = '".$name."' and password = '".$password."'";
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
$url = "student_result.php";

//echo "location.href = "/"'.$url.'";
$_SESSION['customer_user'] = $name;
echo $_SESSION['customer_user'];

//echo "<h1>��½�ɹ�,����˴��鿴�Լ��ĳɼ���</h1> <a href='customer_result.php?name=".$name."'>�鿴�ɼ�</a>";
echo "<script type='text/javascript'>"."location.href='".$url."'"."</script>";

//Header ("Location: $url");


}
else 
{
echo "<h1>ʧ��</h1>";
}
}

?>