<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>mess</title>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
.style2 {color: #003366}
body {
	background-color: #C0DCC0;
}
-->
</style>
</head>

<body>
<table width="1273" height="389" border="1">
  <tr>
    <td width="1263" height="383" background="mess.JPG">&nbsp;</td>
  </tr>
</table>
<p align="center" class="style1">WELCOME TO MESS REGISTRATION</p>
<form id="form1" name="form1" method="post" action="mess.php">
  <table width="311" border="1" align="center" bordercolor="#330033" bgcolor="#999999">
    <tr>
      <td width="151">NAME</td>
      <td width="144"><input name="name" type="text" id="name" /></td>
    </tr>
    <tr>
      <td>ROLL NUMBER </td>
      <td><input name="roll_number" type="text" id="roll_number" /></td>
    </tr>
    <tr>
      <td>COURSE</td>
      <td><input name="course" type="text" id="course" /></td>
    </tr>
    <tr>
      <td>DEPARTMENT</td>
      <td><input name="department" type="text" id="department" /></td>
    </tr>
    <tr>
      <td>YEAR</td>
      <td><input name="year" type="text" id="year" /></td>
    </tr>
    <tr>
      <td>SEMESTER</td>
      <td><input name="semester" type="text" id="semester" /></td>
    </tr>
    <tr>
      <td>HOSTEL</td>
      <td><input name="h_name" type="text" id="h_name" /></td>
    </tr>
    <tr>
      <td>ROOM NUMBER </td>
      <td><input name="room_number" type="text" id="room_number" /></td>
    </tr>
    <tr>
      <td>MESS</td>
      <td><input name="m_name" type="text" id="m_name" /></td>
    </tr>
    <tr>
      <td>DATE OF JOINING </td>
      <td><input name="j_date" type="text" id="j_date" /></td>
    </tr>
    <tr>
      <td>MOBILE NUMBER </td>
      <td><input name="m_number" type="text" id="m_number" /></td>
    </tr>
    <tr>
      <td>EMAIL</td>
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
 $course=$_POST['course'];
 $department=$_POST['department'];
 $year=$_POST['year'];
 $semester=$_POST['semester'];
 $h_name=$_POST['h_name'];
 $room_number=$_POST['room_number'];
 $m_name=$_POST['m_name'];
 $j_date=$_POST['j_date'];
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
if($course=='')
{
echo "<script>alert('please Enter your Course')</script>";
exit();
}
if($department==''){
echo "<script>alert('please Enter your department')</script>";
exit();
}
if($year==''){
echo "<script>alert('please Enter your year')</script>";
exit();
}
if($semester=='')
{
echo "<script>alert('please Enter your semester')</script>";
exit();
}
if($h_name=='')
{
echo "<script>alert('please Enter your hostel')</script>";
exit();
}
if($room_number=='')
{
echo "<script>alert('please Enter your room number')</script>";
exit();
}
if($m_name=='')
{
echo "<script>alert('please Enter your mess')</script>";
exit();
}
if($j_date=='')
{
echo "<script>alert('please Enter your joining date')</script>";
exit();
}if($m_number=='')
{
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
$que="insert into mess(name,roll_number,course,department,year,semester,h_name,room_number,m_name,j_date,m_number,email) values ('$name','$roll_number','$course','$department','$year','$semester','$h_name','$room_number','$m_name','$j_date','$m_number','$email')";
if(mysql_query($que)){
echo "<script>alert('registration successful...!!!')</script>";
echo "<script>window.open('menu.php','_self')</script>";
}
}
}


?>


