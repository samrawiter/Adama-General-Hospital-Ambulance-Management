<?php
if($_POST){
$name=$_POST['name'];
$message=$_POST['message'];
$handle=fopen("comments.html","a");
fwrite($handle,"Writer:-".$name."</b>:<br/>"."Message:-".$message."<br/>");
fclose($handle);
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> About Us</title>
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
         <li><a href="logout.php">Logout</a></li>       
         </ul>
         </div>
</div>
</td>
</tr>
<table align="center" id="insides" width="850px">
<tr>
<td width="25%" height="300px" valign="top" id="insides">
<table>
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
<b><p align="center"><font face="arial" size="3px" color="#336699">About Us</font></p></b>
<form action="" method="POST">
Message:<textarea rows="8" cols="30" name="message"></textarea><br/>
Sender Name:<input type="text" name="name"><br/>
<input type= "submit" value="post!"><br/>
</form>
<?php include "comments.html";?>
</td>
</tr>
</table>
</table>
<div id="sample">
      <footer>      
        <p align="center"><font face="Times New Roman" color="white" size="2">Copyright &copy Adama general hospital .</font></p>
        <br><br>
      </footer>
</div>
</body>
</html>
