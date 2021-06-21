<html>
<body>
<?php
include('connection.php');
	$result = mysql_query("SELECT * FROM patients")
		or die("SELECT Error: ".mysql_error());
	//$num_rows = mysql_num_rows($result);
?>
<table width="600"border="1"cellpadding="1">
<tr>
<th>patient_id</th>
<th>fname</th>
<th>lname</th>
<th>contact</th>
<th>dat</th>
<th>location</th>
<th>ambulance_id</th>
</tr>
<?php
        // loop through results of database query, displaying them in the table 
	while($row = mysql_fetch_array($result))
        {
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td width=10%>' . $row['patient_id'] . '</td>';
		echo '<td width=20%>'. $row['fname'] .'</td>';
		  echo '<td width=10%>' . $row['lname'] . '</td>';
                echo '<td width=20%>' . $row['contact'] . '</td>';
                echo '<td width=10%>' . $row['dat'] . '</td>';
				 echo '<td width=10%>' . $row['location'] . '</td>';
				 echo '<td width=10%>' . $row['ambulance_id'] . '</td>';
				  echo "</tr>"; 
	}
echo "</table>";
//mysql_close($link);
?>

<br>
<form method="POST" action="delete_account_server.php">
<pre>
Enter Id Number to Delete: <input type="text" name="patient_id" size="5">
<input type="submit" value="Submit">
<pre>
</form>
</body>
</html>

