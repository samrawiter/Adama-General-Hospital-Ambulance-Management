<?php
	include("connection.php");
	session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Register</title>
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
         <li><a href="indexd.php">Home</a></li>
         <li><a href="index.php">Register</a></li>
         <li><a href="new6.php">Message</a></li>
       <li><a href="login.php" id="log">Login</a></li>
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
<b><p align="center"><font face="arial" size="3px" color="#336699">Registration form </font></p></b>


    <script type="text/javascript">
    function validateForm()
    {  
	var a=document.forms["reg"]["patient_id"].value;
    var b=document.forms["reg"]["message_id"].value;
    var c=document.forms["reg"]["driver_name"].value;
    var d=document.forms["reg"]["location"].value;
	var e=document.forms["reg"]["ambulance_name"].value;
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e==""))
      {
      alert("All Field must be filled out");
      return false;
      }
	  if (a==null || a=="")
      {
      alert("patient_id must be filled out");
      return false;
      }
    if (b==null || b=="")
      {
      alert("message_id must be filled out");
      return false;
      }
    if (c==null || c=="")
      {
      alert("driver_name must be filled out");
      return false;
      }
    if (d==null || d=="")
      {
      alert("location must be filled out");
      return false;
      }
    if (e==null || e=="")
      {
      alert("ambulance_name must be filled out");
      return false;
      }
    }
    </script>
<body>
    

   

    <form name="reg" action="drvrform.php" onsubmit="return validateForm()" method="post">
    <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
      <tr>
        <td colspan="2">
    		<div align="center">
    		  
    	    </div></td>
      </tr>
      <tr>
        <td><div align="right">driver_name:</div></td>
        <td><input type="text" name="driver_name" /></td>
      </tr>
      <tr>
        <td><div align="right">location:</div></td>
        <td><input type="text" name="location" /></td>
      </tr>
	  <tr>
        <td width="95"><div align="right">ambulance_name:</div></td>
        <td width="171"><input type="text" name="ambulance_name" /></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td><input name="submit" type="submit" value="Submit" /></td>
      </tr>
    </table>
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
