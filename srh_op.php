
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Id search</title>
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
         <li><a href="operator.php">Home</a></li>
     <li><a href="logout.php">Logout</a></li>
       
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
</tr>
<tr>
<td><br><br><center><img src="slideshow/images/DSC01751.JPG" width="150px" height="100px"></center></td>
</tr><br>
</table>
<br>


</td>

<td valign="top" height="450px">
<br>
<br>
<b><p align="center"><font face="arial" size="3px" color="#336699">To see full information of recorded document please enter your attrebute:</p></b>
<hr>
<b><p align="center"><font face="arial" size="3px" color="#336699">find by id number </font></p></b>

<form action="src.php" method="POST">
<input type="text" name="patient_id"><br/>
<input type="submit" name="submit" value="View Info"><br/>
</form>
<b><p align="center"><font face="arial" size="3px" color="#336699">Find by location </font></p></b>

<form action="loc.php" method="POST"><br/>
<input type="text" name="location"><br/>
<input type="submit" name="submit" value="View Info">
</form>
<b><p align="center"><font face="arial" size="3px" color="#336699">Find by city </font></p></b>

<form action="city.php" method="POST"><br/>
<input type="text" name="city"><br/>
<input type="submit" name="submit" value="View Info">
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
