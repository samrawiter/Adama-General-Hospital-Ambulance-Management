
<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("ambulance",$conn);
$sql="SELECT * FROM 'patients  ";
$result=mysql_query($sql)
?>

<?php
if(isset($_POST['search']))
{
$valueToSearch=$_POST['valueToSearch'];
$query="SELECT * FROM 'patients' WHERE concat('patient_id','fname','lname','sex','city','location','location','ambulance_name')LIKE '%".$valueToSearch."%'";
$search_result=filterTable($query);
}
else{
$query="SELECT * FROM patients";
$search_result= filterTable($query);
}
function filterTable($query){
$connect=mysqli_connect("localhost","root","","ambulance");
$filter_Result=mysqli_query($connect,$query);
return $filter_Result;
}
?>
<html>
<head>
<title>full information</title>
</head>
<body>
<form action="a.php"method="post">
<input type="text" name=" " placeholder="value to search"><br><br>
<input type="submit" name="search" value="Filter"><br><br>
<table width="600"border="1"cellpadding="1">
<tr>
<th>patient_id</th>
<th>fname</th>
<th>lname</th>
<th>Sex</th>
<th>dat</th>
<th>city</th>
<th>location</th>
<th>contact</th>
<th>ambulance_name</th>
</tr>


<?php while($row=mysqli_fetch_array($search_result)):?>
<tr>
<td><?php echo $row['patient_id'];?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['lname'];?></td>
<td><?php echo $row['sex'];?></td>
<td><?php echo $row['city'];?></td>
<td><?php echo $row['location'];?></td>
<td><?php echo $row['contact'];?></td>
<td><?php echo $row['ambulance_name'];?></td>
</tr>
<?php endwhile;?>
</form>
</table>
</body>
</html>