<?php
	include("connection.php");
	session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> About me</title>
<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<script src="aa.js" type="text/javascript"></script>
</head>
<body>
<table  border="0" align="center" width="750px">

<!--Main menus-->
<tr>
<td colspan="3" width="750px">
<div id="sse2">
        <div id="sses2"  >
         <ul>
         <li><a href="indexd.php">Home</a></li>
         <li><a href="aboutus.php">About Us</a></li>
         <li><a href="contact.php">Contact Us</a></li>
     <li><a href="index.php">Register</a></li>
       
         </ul>
         </div>
    </div>
</td>
</tr>
<!--End of main menus-->
<table align="center" id="insides" width="850px">
<tr>
<!--Sub menus-->
<td width="25%" height="300px" valign="top" id="insides">
<table  >
<tr>
<th align="center" width="250px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="2">AMSAGH</font></th>
</tr>
<tr>
<td><br><br><center><img src="slideshow/images/DSC01751.JPG" width="150px" height="100px"></center></td>
<tr>
<td><br><br><center><img src="slideshow/images/DSC01751.JPG" width="150px" height="100px"></center></td>
</tr>
</tr>
</table>
<br>


</td>
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top" height="450px">
<br>
<br>
<?php
include "connection.php";
$contact=$_POST['contact'];

$disp=mysql_query("select patient_id,fname,lname,sex,contact,city,dat,location from patients where contact='$contact'");
while($result=mysql_fetch_array($disp,MYSQL_ASSOC))
{
echo"<br/> patient_id:".$result['patient_id'];
echo"<br/> fname:".$result['fname'];
echo"<br/> lname:".$result['lname'];
echo"<br/> sex:".$result['sex'];
echo"<br/> contact:".$result['contact'];
echo"<br/> city:".$result['city'];
echo"<br/> dat:".$result['dat'];
echo"<br/> location:".$result['location'];
}
?>

<form action="displayy.php" method="POST">
</form>
</td>
</tr>
</table>
<!--End Body of section-->
</table>
<!--Footer-->

<div id="sample">
      <footer>
      <br>
      <div align="right">
</div>
        <p align="center"><font face="Times New Roman" color="white" size="2">Copyright &copy Adama general hospital .</font></p>
        <br><br>
    

      </footer>
</div>
<!--End of Footer-->
</body>
</html>
