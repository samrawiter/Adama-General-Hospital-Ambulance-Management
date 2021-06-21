
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> location search</title>
<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<script src="aa.js" type="text/javascript"></script>
</head>
<body>
<table  border="0" align="center" width="750px">

<tr>
<td colspan="3" width="750px">
<div id="sse2">
        <div id="sses2"  >
         <ul>
         <li><a href="indexd">Home</a></li>
         <li><a href="logout.php">logout</a></li>
         </ul>
         </div>
    </div>
</td>
</tr>

<table align="center" id="insides" width="850px">
<tr>

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
<?php
include "connection.php";
$location=$_POST['location'];

$disp=mysql_query("select patient_id,fname,lname,sex,contact,city,dat,location from patients where location='$location'");
	echo '<table style="width:700px;border:1px solid #336699;border-radius:10px;" id="vtable">
         <tr>';
			echo '<th bgcolor="#336699" ><font color="white" size="2">patient_id</th>
			<th bgcolor="#336699"><font color="white" size="2">fname</th>
            <th bgcolor="#336699"><font color="white" size="2">lname</th>
			<th bgcolor="#336699"><font color="white" size="2">sex</th>
			<th bgcolor="#336699"><font color="white" size="2">contact</th>
			<th bgcolor="#336699"><font color="white" size="2">city</th>
			<th bgcolor="#336699"><font color="white" size="2">dat</th>
			<th bgcolor="#336699"><font color="white" size="2">location</th>
            </tr>';
			$rowcolor=0;
			$intt=mysql_num_rows($disp);
			echo"<br><br>";
			
			echo"</script>";
			echo"<br><br>";
			while($row=mysql_fetch_array($disp)){
			$ctrl = $row['location'];
  print ("<tr>");
  print ("<td><font size='2'>" . $row['patient_id'] . "</td>");
	 print ("<td><font size='2'>" . $row['fname'] . "</td>");
	   print ("<td><font size='2'>" . $row['lname'] . "</td>");
	   print ("<td><font size='2'>" . $row['sex'] . "</td>"); 
	   print ("<td><font size='2'>" . $row['contact'] . "</td>"); 
	   print ("<td><font size='2'>" . $row['city'] . "</td>"); 
	   print ("<td><font size='2'>" . $row['dat'] . "</td>"); 
	   print ("<td><font size='2'>" . $row['location'] . "</td>"); 
		print("<td align = 'center' width = '1'></td>
		");
  print ("</tr>");
  }
print( "</table>");
			?>    
</td>


<form action="loc.php" method="POST">
</form>
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
