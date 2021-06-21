<?php
		include("connection.php");
	session_start();
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
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
         <li><a href="aboutus.php">About Us</a></li>
         <li><a href="new6.php">Message</a></li>
       <li><a href="login.php" id="log">Login</a></li>
         </ul>
         </div>
    </div>
</td>
</tr>
<table align="center" id="insides" width="850px" height="555px" >
<tr>
<td width="25%" height="500px" valign="top" id="insides">
<table  >
<tr>
<th align="center" width="250px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="2">AMSAGH</font></th>
</tr>
<tr>
<td><br><br><center><img src="slideshow/images/DSC01751.JPG" width="150px" height="100px"></center></td>
</tr>
</table>
<br>
<br>
<br>
</td>
<td valign="top">
<br>
<br>
	
<div style="width:420px; height:350px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">

  <form id="form1" name="login" method="POST" action="login.php" onsubmit="return validateForm()">
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 
 
 <div style="float:left;" ><strong><font color="white" size="2px">Member Login</font></strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;"><a href="index.php" title="Close"><img src="img/close_icon.gif"></a></div>
 
 
 </div>
 <?php
	   if (isset($_POST['submitlogin'])){ 
	    $username=$_POST['username'];
	    $password=$_POST['password'];
	    $sql = "SELECT * FROM employees WHERE username='$username' AND password='$password'";
	    $result = mysql_query($sql); 
		$rowCheck = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
        $status=$row['status'];
		 if($row['level']==1){ 
		 if($status==1)
		{
		$_SESSION['user_id']=$row['user_id'];
         echo "<script>window.location='admin.php';</script>";
			} 
			else
		{
		echo'<p class="wrong"> Your Account is not active Please contact the system Admin</p>';                                
		   echo' <meta content="4;login.php" http-equiv="refresh" />';	
		}
		}	
			else if($row['level']==2){
          if($status==1)
		{	
		$_SESSION['user_id']=$row['user_id'];
		
         echo'  <meta content="1;operator.php" http-equiv="refresh" />';
			}
			else
		{
		echo'  <p class="wrong"> Your Account is not active Please contact the system Admin</p>';                                
		   echo' <meta content="4;login.php" http-equiv="refresh" />';	
		   
		}
		}
			else if($row['level']==3){
          if($status==1)
		{
			
		$_SESSION['user_id']=$row['user_id'];
		
         echo'  <meta content="1;proctor.php" http-equiv="refresh" />';
			}
			else
		{
		echo' <p class="wrong"> Your Account is not active Please contact the system Admin</p>';                                
		   echo' <meta content="4;login.php" http-equiv="refresh" />';	
		}
		}
		else {
		
		echo'<br>';
       echo'  <p class="wrong">Check Your username or/and Password</p>';                                
		   echo' <meta content="4;login.php" http-equiv="refresh" />';	
		}
		}
    mysql_close($conn);
    ?>
 <p align="center"><img src="img/login_icon1.gif" title="Member Login" width="80"></p>
  <table width="286" valign="top" align="center" border="0">
  <tr>
	       <td class='para1_text' width="220px"><font color="red">*</font> Username:</td><td>
		   <input type="text"   name="username"   required x-moz-errormessage="Enter Username" ></td>
		 	     </tr>
		 <tr>
	       <td class='para1_text'><font color="red">*</font> Password:</td><td><input type="password" name="password" required x-moz-errormessage="Enter password" ></td>
	     </tr>
		 
  <tr>
    <td>&nbsp;</td>
	<br>
    <td><input type="submit" name="submitlogin" class="button_example" value="login" /></td>
  </tr>
</table> 
  </form>
</div>
</td>
</tr>
</table>
</table>
<div id="sample">
      <footer>
	  <br>
	  <div align="right">
</div>
        <p align="center"><font face="Times New Roman" color="white" size="2">Copyright &copy Adama general hospital.</font></p>
		<br>

      </footer>
</div>
</body>
</html>
