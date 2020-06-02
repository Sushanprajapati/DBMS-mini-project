<?php 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$departuredate = $_POST['departuredate'];
$arrivaldate = $_POST['arrivaldate'];
$location = $_POST['location'];
$msg = $_POST['msg'];
    $departuredate=date('Y-m-d',strtotime($departuredate));
$arrivaldate=date('Y-m-d',strtotime($arrivaldate));
if(!empty($firstname) || !empty($lastname)||!empty($address)|| !empty($phone)|| !empty($email) || !empty($departuredate) || !empty($arrivaldate) || !empty($location) || !empty($msg))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "minidatabase";
    
    //create connection
    
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
    if(mysqli_connect_error())
    {
        die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
    }
    else
    { 
  $SELECT = "SELECT email from annapurnabooking Where email = ? Limit 1 "; 
   $INSERT = "INSERT Into annapurnabooking (firstname, lastname, address,phone, email, departuredate, arrivaldate, location,msg) values(?,?,?,?,?,?,?,?,?)";
    //prepared statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        
        if ($rnum==0) //make sure it is new record
        {            
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssisssss", $firstname, $lastname, $address, $phone, $email, $departuredate, $arrivaldate, $location, $msg);
            $stmt->execute();
             $msg1 .="<center>Booking Done" ;
            $msg1 .="<br>You can now enjoy our services";
             header("Location: annapurnabookingmain.php?msg1=".$msg1);
        }
        else
        {
             $msg1 .="<center>Sorry, Booking Failed";
            $msg1 .="<br>";
            $msg1 .="Your email-id may have already been registered!!</center>";
            header ("Location: annapurnabookingmain.php?msg1=".$msg1);
        }
        $stmt->close(); 
    }
}
else
{
    $msg1 .="All Fields are required";
     header ("Location: annapurnabookingmain.php?msg1=".$msg1);
    die(); 
}