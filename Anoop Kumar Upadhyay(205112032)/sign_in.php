<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>sign_in</title>
<style type="text/css">
<!--
.style1 {color: #F0F0F0}
.style3 {
	color: #000033;
	font-weight: bold;
}
body {
	background-color: #C0DCC0;
}
-->
</style>
</head>

<body>

<center>
  <table width="1248" height="473" border="1">
    <tr>
      <td width="1238" height="105" background="1.jpg">&nbsp;</td>
    </tr>
    <tr>
      <td height="360" background="home.jpg">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><strong>SIGN IN HERE </strong>
  </p>
</center>
<form action="sign_in.php" method="post">
<table width="286" border="2" align="center" bordercolor="#CCCCCC">
  <tr>
    <td width="110"><span class="style3">USERNAME </span></td>
    <td width="158"><input name="username" type="text" id="username" /></td>
  </tr>
  <tr>
    <td><span class="style3">PASSWORD </span></td>
    <td><input name="password" type="password" id="password" /></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td colspan="2">
      <div align="center">
        <input name="sign_in" type="submit" id="sign_in" value="sign_in" />
        </div></td>
    </tr>
</table>

<span class="style1"></span>
</form>


</body>
</html>


<?php
	
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('college_facilities',$con) or die (mysql_error());
if(isset($_POST['sign_in']))
{
 $username=$_POST['username'];
 $password=$_POST['password'];
	if($username==''){
	echo "<script>alert('please Enter your Username')</script>";
	exit();
	}
	if($password==''){
	echo "<script>alert('please Enter your password')</script>";
	exit();
	}

$query="SELECT * FROM student_login WHERE username='$username' and password='$password'";
$run=mysql_query($query) or die (mysql_error());
if(mysql_num_rows($run)>0)
   { 
	$_SESSION['username'] == $myusername;
	echo "<script>alert('welcome...!!!')</script>";
    header("location:menu.php");
   }
   
else
 {
 echo '<font color="red" size="5"><center> USERNAME OR PASSWORD IS WRONG OR NOT SIGNED UP </center></font>';
 } 
 }
?>
 