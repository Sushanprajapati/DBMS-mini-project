<?php 
session_start();
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$phone = $_POST['phone'];
    $address = $_POST['address'];


if(!empty($firstname) || !empty($lastname) || !empty($gender) || !empty($email) || !empty($pass) ||!empty($phone) || !empty($address))
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
  $SELECT = "SELECT email from registration Where email = ? Limit 1 "; 
   $INSERT = "INSERT Into registration (firstname, lastname, gender, email, pass,phone,address) values(?,?,?,?,?,?,?)";
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
            $stmt->bind_param("sssssis", $firstname,$lastname, $gender, $email, $pass, $phone, $address);
            $stmt->execute();
             echo "<center>Registration Done" ;
            echo "<br>You can now enjoy our services";
             echo "<center><a href='../login/index.php' target='_blank' style='text-decoration:underlined; color:black; font-size:21px;' >Go Back to Login Page</a>";
        }
        else
        {
            echo"<center>Sorry, Registration Failed";
            echo "<br>";
            echo "Your email-id may have already been registered!!</center>";
          echo "<center><a href='index.html' target='_blank' style='text-decoration:underlined; color:black; font-size:21px;' >Go Back</a>";
        }
        $stmt->close(); 
    }
}
else
{
    echo"All Fields are required";
    die(); 
}