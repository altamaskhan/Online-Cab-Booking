<?php
@session_start();
if(isset($_POST['sub']))
{
$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['date'];
$d=$_POST['address'];
$j=$_POST['contact'];
$e=$_POST['email'];
$p=$_POST['pass'];
$f=$_POST['pin'];

include('db.php');

$data="insert into ureg (sno,fname,lname,date,address,contact,email,pass,pin)values('','$a','$b','$c','$d','$j','$e','$p','$f')";
if(mysql_query($data))
{
echo"<script>alert('registration successfully ....')</script>";
echo"<script>location='signup.php'</script>";
}
}
?>