<?php
session_start();
   $email = $_POST['email'];
$pass = $_POST['pass'];


$error = "";
$sql = "select firstname,lastname, email,pass from registration where email = '$email'";
if(!empty($email) || !empty($pass))
{
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
        $result = mysqli_query($conn,$sql);
        $rows = mysqli_fetch_array($result);
       
        if($rows)
        {
            if($rows["pass"] == $pass && $rows["email"] == $email)
            {
                 $firstname = $rows['firstname'];
        
                $_SESSION['firstname'] = $firstname;
                               
                                    
                header('location:../afterlogin.php');
            }
            else if($rows["pass" != $pass])
            { 
                $error .="<center>Invalid Password";
                header ("Location: index.php?error=".$error);
            }
            else 
            { 
                $error .="<center>Invalid Password";
                header ("Location: index.php?error=".$error);
            }
        }
        else
        {
            $error .="<center>Invalid Email";
            header("Location: index.php?error=".$error);
        }
    }
}
else {
    echo "All fields are required!!";
    die();
}
?>