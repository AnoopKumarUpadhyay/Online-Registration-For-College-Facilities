<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>swimming pool</title>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
.style2 {color: #000033}
body {
	background-color: #C0DCC0;
}
-->
</style>
</head>

<body>
<table width="1246" height="312" border="1">
  <tr>
    <td width="1236" height="308" background="swimmingpool.jpg">&nbsp;</td>
  </tr>
</table>

<p align="center" class="style1">WELCOME TO REGISTRATION FOR SWIMMING POOL: </p>
<form id="form1" name="form1" method="post" action="swimmingpool.php">
  <table border="1" align="center" bordercolor="#330000" bgcolor="#999999">
    <tr>
      <td><span class="style2">NAME</span></td>
      <td><input name="name" type="text" id="name" /></td>
    </tr>
    <tr>
      <td><span class="style2">ROLL NUMBER </span></td>
      <td><input name="roll_number" type="text" id="roll_number" /></td>
    </tr>
    <tr>
      <td><span class="style2">DEPARTMENT</span></td>
      <td><input name="department" type="text" id="department" /></td>
    </tr>
    <tr>
      <td><span class="style2">SEX</span></td>
      <td><input name="sex" type="text" id="sex" /></td>
    </tr>
    <tr>
      <td><span class="style2">MOBILE NUMBER</span></td>
      <td><input name="m_number" type="text" id="m_number" /></td>
    </tr>
    <tr>
      <td><span class="style2">EMAIL-ID</span></td>
      <td><input name="email" type="text" id="email" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" />
      </div></td>
    </tr>
  </table>
</form>
<p align="center" class="style1">&nbsp;</p>
</body>
</html>



<?php

$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db("college_facilities",$con) or die(mysql_error());
if(isset($_POST['Submit']))
{
 $name=$_POST['name'];
 $roll_number=$_POST['roll_number'];
 $department=$_POST['department'];
 $sex=$_POST['sex'];
 $m_number=$_POST['m_number'];
 $email=$_POST['email'];


if($name=='')
{
echo "<script>alert('please Enter your Name')</script>";
exit();
}
if($roll_number=='')
{
echo "<script>alert('please Enter your Roll number')</script>";
exit();
}
if($department=='')
{
echo "<script>alert('please Enter your department')</script>";
exit();
}
if($sex==''){
echo "<script>alert('please Enter your sex')</script>";
exit();
}
if($m_number==''){
echo "<script>alert('please Enter your mobile number')</script>";
exit();
}
if($email=='')
{
echo "<script>alert('please Enter your email')</script>";
exit();
}
else
{
$que="insert into swimming_pool(name,roll_number,department,sex,m_number,email) values ('$name','$roll_number','$department','$sex','$m_number','$email')";
if(mysql_query($que)){
echo "<script>alert('registration successful...!!!')</script>";
echo "<script>window.open('menu.php','_self')</script>";
}
}
}


?>


