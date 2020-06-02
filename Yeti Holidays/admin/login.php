<?php
session_start();
   $username = $_POST['username'];
$password = $_POST['password'];


$error = "";
$sql = "select username,password from administrator where username = '$username'";
if(!empty($username) || !empty($password))
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
            if($rows["password"] == $password && $rows["username"] == $username)
            {        
                $username = $rows['username'];
        
                $_SESSION['username'] = $username;
                               
                header('location: adminafterlogin.php');
            }
            else if($rows["password" != $password])
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
            $error .="<center>Invalid Username";
            header("Location: index.php?error=".$error);
        }
    }
}
else {
    echo "All fields are required!!";
    die();
}
?>