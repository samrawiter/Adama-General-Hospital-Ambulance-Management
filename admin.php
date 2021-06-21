<?php
  include("connection.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
 } else {
 ?>

<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>

<?php

$user_id=$_SESSION['user_id'];

$result=mysql_query("select * from employees where user_id='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$FirstName=$row['Fname'];
$middleName=$row['Mname'];
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Ambulance Management System in Adama General Hospital  admin</title>
<link href="adminstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

<script src="aa.js" type="text/javascript"></script>
</head>
<body>
<table  border="0" align="center" width="750px">
<tr>
<td colspan="3">
<div id="sse2">
        <div id="sses2"  >
         <ul>
         <li><a href="indexd.php">Home</a></li>
           <li><a href="logout.php" id="log">Logout</a></li>
           <li> </ul>
		   
         </div>
    </div>

</td>
</tr>
<table align="center" id="insides" width="850px" height="543px">
<tr>
<td width="25%" height="400px" valign="top" id="insides">
<table>
<tr>
<th align="center" width="250px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="2">AGHAMS</font></th>
</tr>
<tr>
<td><br><br><center><img src="slideshow/images/DSC01751.JPG" width="150px" height="100px"></center></td>
<tr>

</table>
<table>
</table>
<br>
<br>
<table border="0">
<tr>
<th width="300px" bgcolor="#336699" height="25px"><font face="arial" color="white" size="2">Manage Account</font></th>
</tr>
<tr>
<td>&nbsp;<a href="raccount.php">Manage User</a></td>
</tr>
<tr>
<td>&nbsp;<a href="dr.php">Manage Ambulsnce</a></td>
</tr>
<tr>
<td>&nbsp;<a href="delete_account_server.php">view information</a></td>
</tr>
<tr>
<td>&nbsp;<a href="insert.php">Send Message</a></td>
</tr>
</table>
<br>
<br>
</td>

<td valign="top">
<br>
<br>
<b><p align="center"><font face="arial" size="3px" color="#336699">Manager page </font></p></b>
<br><br><br>
<h5><font face="Arial" size="2px">This page is only for the administrator.All his tasks are found in this page.The manager or the administrator can manage user and ambulance,send message,view messageand view information in this page</font>
                   </h5>
</td>
</tr>
</table>
</table>

<div id="sample">
      <footer>
    <br>
    <div align="right">
</div>
        <p align="center"><font face="Times New Roman" color="white" size="2">Copyright &copy Adama general hospital .</font></p>
    <br><br>
        </footer>
</div>
</body>
</html>
