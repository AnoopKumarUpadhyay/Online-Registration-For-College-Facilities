<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>guesthouse</title>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
body {
	background-color: #C0DCC0;
}
.style2 {color: #000033}
-->
</style>
</head>

<body>
<table width="1236" height="341" border="1">
  <tr>
    <td width="1226" height="337" background="guesthouse.jpg">&nbsp;</td>
  </tr>
</table>
<p align="center" class="style1">WELCOME TO REGISTRATION FOR GUESTHOUSE: </p>
<form id="form1" name="form1" method="post" action="guesthouse.php">
  <table width="367" border="1" align="center" bordercolor="#330000" bgcolor="#999999">
    <tr>
      <td width="207"><span class="style2">GUEST NAME </span></td>
      <td width="144"><input name="g_name" type="text" id="g_name" /></td>
    </tr>
    <tr>
      <td><span class="style2">GUEST EMAIL-ID </span></td>
      <td><input name="g_mail" type="text" id="g_mail" /></td>
    </tr>
    <tr>
      <td><span class="style2">GUEST MOBILE</span></td>
      <td><input name="g_m_number" type="text" id="g_m_number" /></td>
    </tr>
    <tr>
      <td><span class="style2">GUEST ADDRESS </span></td>
      <td><input name="g_address" type="text" id="g_address" /></td>
    </tr>
    <tr>
      <td><span class="style2">NO OF PERSONS </span></td>
      <td><input name="persons" type="text" id="persons" /></td>
    </tr>
    <tr>
      <td><span class="style2">NO OF ROOMS NEEDED </span></td>
      <td><input name="rooms" type="text" id="rooms" /></td>
    </tr>
    <tr>
      <td><span class="style2">NO OF DAYS </span></td>
      <td><input name="days" type="text" id="days" /></td>
    </tr>
    <tr>
      <td><span class="style2">ARRIVAL DATE </span></td>
      <td><input name="a_date" type="text" id="a_date" /></td>
    </tr>
    <tr>
      <td><span class="style2">DEPARTURE DATE </span></td>
      <td><input name="d_date" type="text" id="d_date" /></td>
    </tr>
    <tr>
      <td><span class="style2">PURPOSE OF STAY </span></td>
      <td><input name="purpose" type="text" id="purpose" /></td>
    </tr>
    <tr>
      <td><span class="style2">APPLICANT NAME </span></td>
      <td><input name="a_name" type="text" id="a_name" /></td>
    </tr>
    <tr>
      <td><span class="style2">APPLICANT EMAIL-ID </span></td>
      <td><input name="a_email" type="text" id="a_email" /></td>
    </tr>
    <tr>
      <td><span class="style2">APPLICANT DEPARTMENT </span></td>
      <td><input name="a_department" type="text" id="a_department" /></td>
    </tr>
    <tr>
      <td><span class="style2">APPLICANT ROLL NUMBER </span></td>
      <td><input name="a_roll_number" type="text" id="a_roll_number" /></td>
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
 $g_name=$_POST['g_name'];
 $g_mail=$_POST['g_mail'];
 $g_m_number=$_POST['g_m_number'];
 $g_address=$_POST['g_address'];
 $persons=$_POST['persons'];
 $rooms=$_POST['rooms'];
 $days=$_POST['days'];
 $a_date=$_POST['a_date'];
 $d_date=$_POST['d_date'];
 $purpose=$_POST['purpose'];
 $a_name=$_POST['a_name'];
 $a_email=$_POST['a_email'];
 $a_department=$_POST['a_department'];
 $a_roll_number=$_POST['a_roll_number'];

 


if($g_name=='')
{
echo "<script>alert('please Enter guest name')</script>";
exit();
}
if($g_mail=='')
{
echo "<script>alert('please Enter gust email-id')</script>";
exit();
}
if($g_m_number=='')
{
echo "<script>alert('please Enter guest mobile number ')</script>";
exit();
}
if($g_address==''){
echo "<script>alert('please Enter guest address')</script>";
exit();
}
if($persons==''){
echo "<script>alert('please Enter no of persons')</script>";
exit();
}
if($rooms=='')
{
echo "<script>alert('please Enter no of rooms')</script>";
exit();
}
if($days=='')
{
echo "<script>alert('please Enter no of days')</script>";
exit();
}
if($a_date=='')
{
echo "<script>alert('please Enter arrival date')</script>";
exit();
}
if($d_date=='')
{
echo "<script>alert('please Enter your departure date')</script>";
exit();
}
if($purpose=='')
{
echo "<script>alert('please Enter purpose to stay')</script>";
exit();
}
if($a_name=='')
{
echo "<script>alert('please Enter applicant name')</script>";
exit();
}
if($a_email=='')
{
echo "<script>alert('please Enter applicant email-id')</script>";
exit();
}
if($a_department=='')
{
echo "<script>alert('please Enter applicant department')</script>";
exit();
}
if($a_roll_number=='')
{
echo "<script>alert('please Enter applicant roll number')</script>";
exit();
}
else
{
$que="insert into guest_house(g_name,g_mail,g_m_number,g_address,persons,rooms,days,a_date,d_date,purpose,a_name,a_email,a_department,a_roll_number) values ('$g_name','$g_mail','$g_m_number','$g_address','$persons','$rooms','$days','$a_date','$d_date','$purpose','$a_name','$a_email','$a_department','$a_roll_number')";
if(mysql_query($que)){
echo "<script>alert('registration successful...!!!')</script>";
echo "<script>window.open('menu.php','_self')</script>";
}
}
}


?>


