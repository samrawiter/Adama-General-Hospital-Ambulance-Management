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

<!--Main menus-->
<tr>
<td colspan="3" width="750px">
<div id="sse2">
        <div id="sses2"  >
         <ul>
         <li><a href="operator.php">Home</a></li>
         <li><a href="aboutus.php">About Us</a></li>
		  <li><a href="logiin.php">login</a></li>
         <li><a href="contact.php">Contact Us</a></li>
     <li><a href="index.php">Register</a></li>
       
         </ul>
         </div>
    </div>
</td>
</tr>
</table>
<?php 
  session_start();

  echo "<!DOCTYPE html>\n<html><head>";

  require_once 'functions.php';

  $userstr = ' (Guest)';

  if (isset($_SESSION['username']))
  {
    $username     = $_SESSION['username'];
    $loggedin = TRUE;
    $userstr  = " ($username)";
  }
  else $loggedin = FALSE;

  echo "
  <link rel='stylesheet' " .
       "href='styless.css' type='text/css'>"                     .
       "</head><body><center><canvas id='logo' width='624' "    .
       "height='96'>$appname</canvas></center>"             .
       "<script src='javascript.js'></script>";
?>

<?php
	include("connection.php");
	
?>

</body>
</html>

