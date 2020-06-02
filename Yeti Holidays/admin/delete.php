<?php
 $host= "localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="minidatabase";

    //create connection
    
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
    if(mysqli_connect_error())
    {
        die ('Connection to Server Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else
    {
       	$info=$_GET['bookingid'];	
	mysqli_query($conn,"delete from kathmandubooking where bookingid='$info'");
    header('location:managekathmandubooking.php?info=managekathmandubooking');
	
    }
?>