

    <?php
    session_start();
    include('connection.php');
    $driver_name=$_POST['driver_name'];
    $location=$_POST['location'];
	$ambulance_name=$_POST['ambulance_name'];
	mysql_query("INSERT INTO ambulances( driver_name, location, ambulance_name )VALUES('$patient_id ,'$message_id','$driver_name', '$location', '$ambulance_name')");
    header("location: drvrreg.php?remarks=success");
    mysql_close($con);
    ?>