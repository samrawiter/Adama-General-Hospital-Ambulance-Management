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
         <li><a href="admin.php">Home</a></li>       
       <li><a href="logout.php" id="log">Logout</a></li>
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
<tr>
<td>&nbsp;<a href="assign.php">Manage Ambulsnce</a></td>
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
	function doCheck()

{
  var a=document.getElementById("driver_name");
  var b=document.getElementById("ambulance_name");
  
  if(a.value == "")
  {
    alert ("enter the driver_name");
	a.focus();
	return false;
	}	
	
  if(b.value == "")
  {
    alert ("enter the ambulance_name");
    b.focus();
	return false;
	}           
     
}
  </script>
    
    </script>
<body>

    <form name="reg" action="code.php" onsubmit="return validateForm()" method="post">
    <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
      <tr>
        <td colspan="2">
    		<div align="center">
    		  
    	    </div></td>
      </tr>
      <tr>
        <td width="95"><div align="right">driver_name:</div></td>
        <td width="171"><input type="text" name="driver_name" /></td>
      </tr>
      <tr>
        <td><div align="right">ambulance_name:</div></td>
        <td><input type="text" name="location" /></td>
      </tr>
	  
    
      
      <tr>
        <td><div align="right"></div></td>
        <td><input name="submit" type="submit" value="Submit" /></td>
      </tr>
    </table>
    </form>
</td>

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
