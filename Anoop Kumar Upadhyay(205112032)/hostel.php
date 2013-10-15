<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>hostel</title>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
body {
	background-color: #C0DCC0;
}
.style4 {color: #003366}
-->
</style>
</head>

<body>
<table width="1239" height="233" border="1">
  <tr>
    <td width="1229" background="hostel.jpg">&nbsp;</td>
  </tr>
</table>
<p align="center" class="style1">WELCOME TO HOSTEL REGISTRATION: </p>

<form id="form1" name="form1" method="post" action="hostel.php">
  <table width="300" border="1" align="center" bordercolor="#660033" bgcolor="#999999">
    <tr>
      <td width="140"><span class="style4">NAME</span></td>
      <td width="144"><input name="name" type="text" id="name" /></td>
    </tr>
    <tr>
      <td><span class="style4">ROLL NUMBER </span></td>
      <td><input name="roll_number" type="text" id="roll_number" /></td>
    </tr>
    <tr>
      <td><span class="style4">COURSE</span></td>
      <td><input name="course" type="text" id="course" /></td>
    </tr>
    <tr>
      <td><span class="style4">DEPARTMENT</span></td>
      <td><input name="department" type="text" id="department" /></td>
    </tr>
    <tr>
      <td><span class="style4">YEAR</span></td>
      <td><input name="year" type="text" id="year" /></td>
    </tr>
    <tr>
      <td><span class="style4">SEMESTER</span></td>
      <td><input name="semester" type="text" id="semester" /></td>
    </tr>
    <tr>
      <td><span class="style4">HOSTEL</span></td>
      <td><input name="h_name" type="text" id="h_name" /></td>
    </tr>
    <tr>
      <td><span class="style4">ROOM NUMBER </span></td>
      <td><input name="room_number" type="text" id="room_number" /></td>
    </tr>
    <tr>
      <td><span class="style4">FLOOR</span></td>
      <td><input name="floor" type="text" id="floor" /></td>
    </tr>
    <tr>
      <td><span class="style4">DATE OF JOINING </span></td>
      <td><input name="j_date" type="text" id="j_date" /></td>
    </tr>
    <tr>
      <td><span class="style4">MOBILE NUMBER </span></td>
      <td><input name="m_number" type="text" id="m_number" /></td>
    </tr>
    <tr>
      <td><span class="style4">EMAIL_ID</span></td>
      <td><input name="email" type="text" id="email" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" />
      </div></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
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
 $floor=$_POST['floor'];
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
if($floor=='')
{
echo "<script>alert('please Enter your floor')</script>";
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
$que="insert into hostel(name,roll_number,course,department,year,semester,h_name,room_number,floor,j_date,m_number,email) values ('$name','$roll_number','$course','$department','$year','$semester','$h_name','$room_number','$floor','$j_date','$m_number','$email')";
if(mysql_query($que)){
echo "<script>alert('registration successful...!!!')</script>";
echo "<script>window.open('menu.php','_self')</script>";
}
}
}


?>


