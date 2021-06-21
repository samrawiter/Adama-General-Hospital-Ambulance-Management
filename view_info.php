<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> vie information</title>
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
         <li><a href="operator.php">Home</a></li>
         <li><a href="aboutus.php">About Us</a></li>
         <li><a href="contact.php">Contact Us</a></li>
     <li><a href="index.php">Register</a></li>
	 <li><a href="logout.php">logout</a></li>
       
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

<td valign="top" height="450px">
<br>
<br>
<b><p align="center"><font face="arial" size="3px" color="#336699">View Patint Information</font></p></b>


<?php
$conn=mysql_connect("localhost","root","");//create connection
mysql_select_db("ambulance",$conn);//to select from the db
$sql="SELECT * FROM patients";
$records=mysql_query($sql)
?>

<html>
<head>
<title>geyuefg</title>
</head>
<body>
<table width="600"border="1"cellpadding="1">
<tr>
<th>patient_id</th>
<th>fname</th>
<th>lname</th>
<th>sex</th>
<th>city</th>
<th>dat</th>
<th>location</th>
</tr>
<?php
while($patients=mysql_fetch_assoc($records)){
echo "<tr>";
echo "<td>".$patients['patient_id']."</td>";
echo "<td>".$patients['fname']."</td>";
echo "<td>".$patients['lname']."</td>";
echo "<td>".$patients['sex']."</td>";
echo "<td>".$patients['city']."</td>";
echo "<td>".$patients['dat']."</td>";
echo "<td>".$patients['location']."</td>";
echo "</tr>";
}
?>
</body>
<html></td>
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
