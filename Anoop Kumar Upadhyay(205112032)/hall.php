<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>hall</title>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
.style2 {color: #000066}
body {
	background-color: #C0DCC0;
}
-->
</style>
</head>

<body>
<table width="1260" height="485" border="1">
  <tr>
    <td width="1250" height="364" background="hall.jpg">&nbsp;</td>
  </tr>
</table>


<p align="center" class="style1">WELCOME ROR HALL REGISTRATION: </p>
<form id="form1" name="form1" method="post" action="hall.php">
  <table width="323" border="1" align="center" bordercolor="#660000" bgcolor="#999999">
    <tr>
      <td width="163"><span class="style2">STOPADVISOR NAME </span></td>
      <td width="144"><input name="f_name" type="text" id="f_name" /></td>
    </tr>
    <tr>
      <td><span class="style2">EVENT NAME </span></td>
      <td><input name="e_name" type="text" id="e_name" /></td>
    </tr>
    <tr>
      <td><span class="style2">EMAIL-ID</span></td>
      <td><input name="email" type="text" id="email" /></td>
    </tr>
    <tr>
      <td><span class="style2">MOBILE NUMBER </span></td>
      <td><input name="m_number" type="text" id="m_number" /></td>
    </tr>
    <tr>
      <td><span class="style2">NAME OF HALL </span></td>
      <td><input name="h_name" type="text" id="h_name" /></td>
    </tr>
    <tr>
      <td><span class="style2">BOOKING DATE </span></td>
      <td><input name="date" type="text" id="date" /></td>
    </tr>
    <tr>
      <td><span class="style2">TIME DURATION </span></td>
      <td><input name="timing" type="text" id="timing" /></td>
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
 $f_name=$_POST['f_name'];
 $e_name=$_POST['e_name'];
 $email=$_POST['email'];
 $m_number=$_POST['m_number'];
 $h_name=$_POST['h_name'];
 $date=$_POST['date'];
 $timing=$_POST['timing'];


if($f_name=='')
{
echo "<script>alert('please Enter your faculty name')</script>";
exit();
}
if($e_name=='')
{
echo "<script>alert('please Enter your Roll no')</script>";
exit();
}
if($email=='')
{
echo "<script>alert('please Enter your email')</script>";
exit();
}
if($m_number==''){
echo "<script>alert('please Enter your mobile number')</script>";
exit();
}
if($h_name==''){
echo "<script>alert('please Enter your hall name')</script>";
exit();
}
if($date=='')
{
echo "<script>alert('please Enter your date')</script>";
exit();
}
if($timing=='')
{
echo "<script>alert('please Enter your timing')</script>";
exit();
}
else
{
$que="insert into hall(f_name,e_name,email,m_number,h_name,date,timing) values ('$f_name','$e_name','$email','$m_number','$h_name','$date','$timing')";

if(mysql_query($que)){
echo "<script>alert('registration successful...!!!')</script>";
echo "<script>window.open('menu.php','_self')</script>";
}
}
}


?>


