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
<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("ambulances",$conn);
$sql="select * from patients where ambulance_id=0";
$records=mysql_query($sql);
$countx=mysql_num_rows($records);
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>AMBULNCE</title>
<link rel="icon" type="image/png" href="img/dbuicon.png"/>
<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<script src="aa.js" type="text/javascript"></script>
</head>
<body>
<table  border="0" align="center" width="750px">

<tr>
<td colspan="3">
<div id="sse2">
        <div id="sses2"  >
         <ul>
         <li><a href="operator.php">Home</a></li>
          <li><a href="logout.php" id="log">Logout</a></li>
       </ul>
         </div>
    </div>

</td>
</tr>
<table align="center" id="insides" width="850px"height="455px">
<tr>

<td width="25%" height="400px" valign="top" id="insides">
<table>
<tr>
<th align="center" width="250px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="2">AGHAMS</font></th>
</tr>
<tr>
<td><br><br><center><img src="slideshow/images/DSC01751.JPG" width="150px" height="100px"></center></td>
</tr>
</table>
<table>
<tr>
<th align="center" width="450px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="2">Operator Page</font></th>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="view_info.php">View info</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="index.php">register</a></td>
</tr><br/><br/>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="insert.php">Send message</a></td>
</tr>
</table>
<br>
<br>
</td>

<td valign="top">
<?
echo $countx."mycount value".$sql;
if ($countx)
{
	
	echo <a href="assign.php"><center><img src="slideshow/images/Blawg-Alert.gif" width="40px" title="click to new see message"><center></;
}?>
<br>
<br>
<font face="Arial" size="2px">the operator page............</font>
               
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
