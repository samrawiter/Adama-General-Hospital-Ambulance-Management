<?php
	include("connection.php");  
 ?>

<?php
$user_id="";
$result=mysql_query("select * from employees where user_id='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$FirstName=$row['Fname'];
$middleName=$row['Mname'];
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Ambulance Management System in Adama General Hospital </title>
<link rel="icon" type="image/png" href="img/dbuicon.png"/>
<link href="adminstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<body>
<table  border="0" align="center" width="750px">

<tr>
<td colspan="3">
<div id="sse2">
        <div id="sses2"  >
         <ul>
         <li><a href="indexd.php">Home</a></li>
         <li><a href="aboutus.php">About Us</a></li>
         <li><a href="login.php" id="log">Login</a></li>
         </ul>
         </div>
    </div>
</td>
</tr>

<table align="center" id="insides" width="850px" height="550px">
<tr>

<td width="25%" height="500px" valign="top" id="insides">
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
<th align="center" width="450px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="2">Manage Record</font></th>
</tr>
</table>
<br>
<br>

<br>
<br>
</td>
<td valign="top">
<br>
<br>
               <?php
			$sel=mysql_query("SELECT * FROM messages");
			echo '<table style="width:500px;border:1px solid #336699;border-radius:10px;" id="vtable">
         <tr>';
			echo '<th bgcolor="#336699" ><font color="white" size="2">message_id</th>
			<th bgcolor="#336699"><font color="white" size="2">Names</th>
            <th bgcolor="#336699"><font color="white" size="2">Message</th>
            </tr>';
			$rowcolor=0;
			$intt=mysql_num_rows($sel);
			echo"<br><br>";
			echo"<font face='times new roman' size='2px' color='red'>";
			echo'There are &nbsp;'.$intt.'&nbsp; new messages.';
			echo"</font>";
			echo"</script>";
			echo"<br><br>";
			while($row=mysql_fetch_array($sel)){
			$ctrl = $row['message_id'];
  print ("<tr>");
  print ("<td><font size='2'>" . $row['message_id'] . "</td>");
	 print ("<td><font size='2'>" . $row['name'] . "</td>");
	   print ("<td><font size='2'>" . $row['message'] . "</td>");		
		print("<td align = 'center' width = '1'></td>
		");
  print ("</tr>");
  }
print( "</table>");
			?>    
</td>

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
<!--End of Footer-->
</body>
</html>
