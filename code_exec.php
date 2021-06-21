

    <?php
    session_start();
    include('connection.php');
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $sex=$_POST['sex'];
    $location=$_POST['location'];
    $contact=$_POST['contact'];
    $city=$_POST['city'];
     mysql_query("INSERT INTO patients(fname, lname, sex, location, contact,city)VALUES('$fname', '$lname', '$sex', '$location', '$contact', '$city')");
    header("location: index.php?remarks=success");
    mysql_close($con);
    ?>