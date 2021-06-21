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
<b><p align="center"><font face="arial" size="3px" color="#336699">Patient Registration form </font></p></b>


    <script language="javascript">
function doCheck()
{
  var f=document.getElementById("fname");
  var l=document.getElementById("lname");
  var s=document.getElementById("sex");
  var lo=document.getElementById("location");
  var c=document.getElementById("contact");
  var ci=document.getElementById("city");
  if(f.value == "")
  {
    alert ("enter the fname");
	f.focus();
	return false;
	}
  
  if(l.value == "")
  {
    alert ("enter the lname");
	l.focus();
	return false;
	}
    
   if(s.value == "")
  {
    alert ("enter your sex");
	s.focus();
	return false;
	}	
	
  if(lo.value == "")
  {
    alert ("enter the location");
    lo.focus();
	return false;
	}           
	
  if(c.value == "")
  {
    alert ("enter the phone number");
    
	c.focus();
	return false;
	}
   else if(!parseInt(c.value))
		{    
                    alert("Enter valid Phone number ");
					c.focus();
		    return false;	
		}
            else if(((c.value.length)<6) || ((c.value.length)>11))
	                     {
	               alert("Phone no should contain atleast 10 integers ");  
	            
	               c.focus();
                        return false;
	                  }                 
    if(ci.value == "")
  {
    alert ("enter the city");
	ci.focus();
	return false;
	}
}
  </script>
<body>
    

   
<form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
   
<table width="455" border="0">
  <tr>
    <th width="197" scope="col"><div align="right">first name:</div></th>
    <th width="248" scope="col">
      <div align="left">
        <input name="fname" type="text" id="fname" />
      </div>        </th>
  </tr>
  
  
  <tr>
    <th scope="row"><div align="right"> last name:</div></th>
    <td>
      <input name="lname" type="text" id="lname" />        </td>
  </tr>
  <tr>
    <th scope="row"><div align="right"> sex:</div></th>
    <td>
      <input name="sex" type="text" id="sex" />        </td>
  </tr>
  <tr>
    <th scope="row"><div align="right"> location:</div></th>
    <td>
      <input name="location" type="text" id="location" />        </td>
  </tr>
 
 <tr>
    <th scope="row"><div align="right">contact:</div></th>
    <td>
      <input name="contact" type="integers" id="contact" />       </td>
  </tr>
  <tr>
    <th scope="row"><div align="right"> city:</div></th>
    <td>
      <input name="city" type="text" id="city" />        </td>
  </tr>
      <label>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>
      <input name="Submit" type="Submit" id="submit" value="Register" onclick="return doCheck()" />
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
