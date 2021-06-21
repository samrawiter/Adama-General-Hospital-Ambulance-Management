<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
 } else {
 ?>
 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>
<?php
$user_id=$_SESSION['user_id'];
$result=mysql_query("select * from employees where user_id='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$FirstName=$row['Fname'];
$middleName=$row['Mname'];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ambulance Management System in Adama General Hospital </title>
<link href="adminstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="slideshow/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="slideshow/js-image-slider.js" type="text/javascript"></script>
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

<script src="aa.js" type="text/javascript"></script>
<script>
  function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='raccount.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>
</head>
<body>
<table  border="0" align="center" width="750px">

<tr>
<td colspan="3">
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

<table align="center" id="insides" width="850px" height="645px">
<tr>

<td width="25%" height="500px" valign="top" id="insides">
<table>
<tr>
<th align="center" width="250px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="2">AMSAGH</font></th>
</tr>
<tr>
<td><br><br><center><img src="slideshow/images/DSC01751.JPG" width="150px" height="100px"></center></td>
</tr>
</table>
<table>

</table>
<br>
<br>
<table border="0">
<tr>
<th width="300px" bgcolor="#336699" height="25px"><font face="arial" color="white" size="2">Manage Account</font></th>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="cua.php">Create User Account</a></td>
</tr>
</table>
<br>

</td>

<td valign="top">
<br>
<br>
   
    <?php		
			$admin=mysql_query("select *from employees where level='1'");
			$countadmin=mysql_num_rows($admin);
			
			$pro=mysql_query("select *from employees where level='3'");
			$countpro=mysql_num_rows($pro);
			
			$pmana=mysql_query("select *from employees where level='2'");
			$countpmana=mysql_num_rows($pmana);
			
			echo '<font size="2"><br><br><h2><u>Information:</u></h2><br><br> There are '.$countadmin. ' Administrator    &nbsp;&nbsp; and &nbsp;&nbsp;&nbsp;'.$countpmana.'&nbsp;&nbsp;oprator <br><br> Total number number of employees is ' .($countadmin+ $countpro+$countpmana).'.'.'</font>' ;
			echo"<br><br>";
   ?>
   
<table align='center' style='border-radius:15px;border:1px solid #336699; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);'>
<tr>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Names</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>User ID</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Sex</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Level</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Username</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Password</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>De-Activate</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Delete</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Edit</th>
</tr>  
<?php
$result = mysql_query("SELECT * FROM employees");
while($row = mysql_fetch_array($result))
  {
$ctrl = $row['user_id'];
$fname=$row['Fname'];
$mNAME=$row['Mname'];
$sex=$row['sex'];
$level=$row['level'];
$username=$row['username'];
$password=$row['password'];
$status=$row['status'];
?>
<tr>
<td><?php echo $fname."&nbsp;".$mNAME;?></td>
<td><?php echo $row['user_id'];?></td>
<td><?php echo $sex;?></td>
<td><?php echo $level;?></td>
<td><?php echo $username;?></td>
<td><?php echo $password;?></td>	
<td><?php
						if(($status)=='0')
						{
						?>
                       			 <a href="status.php?status=<?php echo $row['user_id'];?>" onclick="return confirm('Really you activate (<?php echo $fname?>)');">
                        		<img src="IMG/deactivate.png" id="view" width="16" height="16" alt="" />Deactivated </a>
                        <?php
						}
						if(($status)=='1')
						{
						?>
                       			 <a href="status.php?status=<?php echo $row['user_id'];?>" onclick="return confirm('Really you De-activate (<?php echo $fname?>)');"> 
                       			 <img src="IMG/activate.png" width="16" id="view" height="16" alt=""  />Activated</a>
                        <?php
						}
                        ?>
						</td>
						<?php
						print("<td style='height:30px;' align = 'center' width = '1'><a href = 'deleteuser.php?key=".$ctrl."'><img width='15px' height='15px' src = 'img/actions-delete.png' title='Delete' onclick='isdelete();'></img></a></td>
		<td style='height:30px;'><a href = 'modifyuser.php?user_id=".$ctrl."'><img src = 'img/actions-edit.png' width='15px' height='15px' title='Edit' ></img></a></td>
		");?>

		</tr>
<?php
  }
print( "</table>");
mysql_close($conn);
?>
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
