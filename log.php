<?php
@session_start();
include('db.php');
if(isset($_POST['sub']))
{
$e=$_POST['email'];
$p=$_POST['pass'];
if(!empty($e) && !empty($p))
{
$data="select * from ureg where email='$e' and pass='$p'";
$data1=mysql_query($data);
$query_row=mysql_num_rows($data1);
if($query_row==1)
{
$rec=mysql_fetch_row($data1);
//$_SESSION['email']=$rec[6];
	//$_SESSION['sno']=$rec[0];
echo"<script>location='a.php'</script>";
}
}
else
{
echo"you must enter username and password";
echo"<script>location='index.php'</script>";
}
}
?>