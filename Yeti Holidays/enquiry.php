<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$enquire = $_POST['enquire'];
$msg1 = "";
if(!empty($name) || !empty($email) || !empty($subject) || !empty($enquire))
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
   $INSERT = "INSERT Into enquiry (name, email,subject, enquire) values(?,?,?,?)";
        $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssss", $name, $email, $subject, $enquire);
            $stmt->execute();
        $msg1 .="<center>Thank You for the quieries!" ;
            $msg1 .="<br>You will be notified soon!";
            header("Location:afterlogincontact.php?msg1=".$msg1);
        $stmt->close(); 
    }
}
else
{
    $msg1 .="All Fields are required";
     header ("Location: afterlogincontact.php?msg1=".$msg1);
    die(); 
}
                 ?>