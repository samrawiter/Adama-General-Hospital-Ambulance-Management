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
         <li><a href="admin.php">Home</a></li>
         <li><a href="logout.php">logout</a></li>    
         </ul>
         </div>
    </div>
</td>
</tr>

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

                </div>
                <div id='navigationleft'>
                    <center><p>Select the patient ID and the ambulance ID to assign.</p></center>
                    
                    <hr />
                </div>
				
                <div id='main' style="width: 590px; margin-right: auto; margin-left: auto; text-align:center;">
                    <p><center><u><h2>Assigning page.</h2></u></center></p>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                    Patient ID: 
                    <select name="patient_id" required="">
                        <?php 
                            include 'connection.php';
                            $q="select patient_id from patients where ambulance_id=0";
                            $q1=  mysql_query($q);
                           
                            if(mysql_num_rows($q1)>0){
                                 echo "<option> </option>";
                                 echo "<option>--Select Patient ID--</option>";
                                while($res=@mysql_fetch_assoc($q1)){
                                     echo "<option>".$res['patient_id']."</option>";
                                }
							?>
							</select>
							<select name="ambulance_id" required="">
							<?php
				                        $q="select ambulance_id from ambulances where patient_id='$patient_id'";
                            $q1=  mysql_query($q);
                            
                            if(mysql_num_rows($q1)>0){
                                 echo "<option> </option>";
                                 echo "<option>--Select ambulance id--</option>";
                                while($res=@mysql_fetch_assoc($q1)){
                                     echo "<option>".$res['ambulance_id']."</option>";
                                }
                            }else{echo "<option>OO, every ambulance are assigned</option>";
                            echo "no ambulance available, come here with new ambulance.";
                            
                            }
							}
                        ?>
                    </select>
                    <button type='submit' name='sub'>Assign</button><br>
                    </form>
                    <?php 
                    if(isset($_POST['sub'])){
                           $patient_id=$_POST['patient_id'];
			
				      $ambulance_id=$_POST['ambulance_id'];
					   $update = mysql_query("update patients set ambulance_id='$ambulance_id' WHERE patient_id='{$patient_id}'") or die(mysql_error());
                  }?>
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
        <p align="center"><font face="Times New Roman" color="white" size="2">Copyright &copy Adama general hospital .</font></p>
        <br><br>
    

      </footer>
</div>
<!--End of Footer-->
</body>
</html>
