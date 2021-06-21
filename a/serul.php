<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<head>
<title>Searching for a patient...</title>
</head>
<body>
<html>
<body bgcolor=#ffffff>
<CENTER>
<table width="1011" height="618" border=7>
  <p>
  <tr>
    <td style="background-image:db.jpg)" width=974 height=100 bgcolor="#CCCCCC" align="center"><a href="file:///D|/sampleproject/ "> <img src="p1.JPG" style="margin:8px;" border=1 width=175 height=91 align="left" ></a> <img src="p1.JPG" style="margin:8px;" border=1 width=190 height=93 align="right" >
        <p>
        <h5 >WELCOME TO  <br>
          HOSPITAL DATABASE </h5></td>
  </tr>
  <tr>
    <td style= bgcolor="#333333" width=850 height=25 align="left"><b style="color:#FFFFFF"> patient Search form</b>    
    </td>
  </tr> 
  <tr>
    <td style="background-image:; padding-left:50px;" height=437 bgcolor="#FFFFFF"><p>
      
               <form name="form1" method="post" action="serul.php">
			   <center>
			   <img src="online.jpg" align="top" height="80" width="400">
               <img src="online.jpg" align="left" height="720" width="200">
               <img src="online.jpg" align="right" height="720" width="200">
			   <br>
			<b style="color:#FF0000"> Please provide name of the patient in the text box to search!</b>
			<br></br>             					
                    <input type="text" name="contact" />
					<input type="submit" name="submit" value="Search"> 
<?php
	 if(isset($_POST['submit']))
	  {		 
	  $contact=$_POST['contact'];
	 if($_POST['contact']){		 
	  $db=mysql_connect  ("localhost", "root") or die ('I cannot connect to the database  because: ' . mysql_error());			 
	  $mydb=mysql_select_db("ambulance");	 	
	  $sql="SELECT  sex,patient_id, fname,contact,city,dat,location,lname,ambulance_id,message_id FROM patients WHERE contact LIKE '%" . $contact .  "%'";	 		 
	  $rs=mysql_query($sql)OR die(mysql_error());
	  $num=mysql_num_rows($rs);
	  if ($num == 0)
{
echo"<br>";
echo "<b>Sorry, but we can not find an entry to match your query...</b><br><br>";
}
else{	
 echo"<br><br>"; 
 
echo"<br><br>"; 
	 echo "SEARCH RESULT(S)";
	 echo"<br><br>";
$i = 0; 
 echo "<TABLE width=650 align=center cellpadding=6 cellspacing=0 border=1>"; 
 echo "<tr>"; 
  echo "<td width=35% bgcolor=£cccccc>sex</td>"; 
 echo "<td width=35% bgcolor=£cccccc>patient_id</td>"; 
 echo "<td width=20% bgcolor=£cccccc>fname</td>"; 
 echo "<td width=20% bgcolor=£cccccc>contact</td>"; 
 echo "<td width=20% bgcolor=£cccccc>city</td>"; 
 echo "<td width=5% bgcolor=£cccccc>dat</td>"; 
 echo "<td width=5% bgcolor=£cccccc>location</td>";
 echo "<td width=5% bgcolor=£cccccc>lname</td>"; 
 echo "<td width=5% bgcolor=£cccccc>ambulance_id</td>";
  echo "<td width=35% bgcolor=£cccccc>message_id</td>"; 

 echo "</tr>"; 
 while ($i < $num): 
  $sex = mysql_result($rs,$i,"sex"); 
 $patient_id = mysql_result($rs,$i,"patient_id"); 
 $fname = mysql_result($rs,$i,"fname"); 
 $contact = mysql_result($rs,$i,"contact"); 
 $city = mysql_result($rs,$i,"city"); 
 $dat = mysql_result($rs,$i,"dat");  
 $location = mysql_result($rs,$i,"location");
 $lname = mysql_result($rs,$i,"lname");
 $ambulance_id = mysql_result($rs,$i,"ambulance_id");
   $message_id = mysql_result($rs,$i,"message_id"); 
 echo "<tr>";
  echo "<td>" . $sex . "</td>";
 echo "<td>" . $patient_id . "</td>"; 
 echo "<td>" . $fname. "</td>"; 
 echo "<td>" . $contact. "</td>"; 
 echo "<td>" . $city. "</td>";
 echo "<td>" . $dat. "</td>";
 echo "<td>" . $location. "</td>"; 
 echo "<td>" . $lname. "</td>";
 echo "<td>" . $ambulance_id. "</td>";
 echo "<td>" . $message_id . "</td>";
 echo "</tr>"; 
 $i++;
 endwhile; 
 echo"</table>";
}  
	  } 	 
	  else{	 
	  echo  "<p><b>Please enter a search query</b></p>";	 
	  }	
	  } 	
	?>
	</td>
 </form>  
</TABLE>
	  <p>&nbsp; 
 Copyright ©
<body>
</html>
