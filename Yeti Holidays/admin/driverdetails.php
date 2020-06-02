<?php 
 session_start();
?>
<html>
<head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="../css/bootstrap.min.css" rel="stylesheet">
   <link href="../css/style.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Bookings</title>
    
 </head>
    
    <style>
    .btn-success{
        padding: 10px;
        border-radius: 10px;
        color:#fff;
        background-color:#5cb85c;
        border-color:#4cae4c;
        text-decoration: none;
        font-size: 18px;
    }
    .btn-success:hover
    {
        color:#fff;
        background-color:#449d44;
        border-color:#398439;
    }
    table{
        width:100%;
        text-align: center;
        font-size: 19px;
        font-family: sans-serif;
        
    }
    table th{
        background-color: beige;
        padding: 20px;
        color: #25302B;
    }
    table tr:nth-child(even){
        background-color:#b8e0c1;
      padding: 20px;
        font-size: 16px;
        color:darkslategray;
       
    }
    table tr:nth-child(odd){
        background-color:floralwhite;
        padding: 20px;
        font-size: 16px;
    }
        table tr td{
            padding: 20px;
        }
    </style>
 <body>
       <script type="text/javascript">
function deletes(regdno)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='deletevehicle.php?regdno='+regdno;
     }
}</script>
        
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!--Grouping for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="afterlogin.html"><img src="../Images/logo.jpg" height="200px" width="200px" class="img-responsive"></a>
    </div>

      <div class="echo">
     <ul class="nav navbar-nav"><li style="font-size: 16px; color: 9e9898">Welcome
         <br>
        <?php
             echo ($_SESSION['username']);
                                
        
         ?>
      </li></ul>
      </div>
      
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="adminafterlogin.php">HOME</a></li>
          <li><a href="managebooking.php">MANAGE BOOKINGS</a></li>
          <li  class="active"><a href="driverdetails.php">MANAGE DRIVERS</a></li>
    <li><a href="../logout.php">LOGOUT</a></li>

      </ul>        
      </div> </div>
</nav>
            
         <center>
        <div id="kathmandubook">
     <div class="ktm">
         <h4>Driver Details!</h4></div></div>
     
         <div style="overflow-x: auto;">
     <table>
        <tr>
            <th>Regd No</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Time</th>
            <th>Departure Date</th>
            <th>Pick up Location</th>
            <th>Vehicle No:</th>
            <th>Action</th>
           
        <?php 
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
        $sql = "SELECT * FROM  driverdetail";
        $result = $conn-> query($sql);
        if ($result-> num_rows > 0)
        {
            while($row = $result-> fetch_assoc())
            {
                
                
                echo "<tr>";
                echo "<td>".$row["regdno"]."</td>"; 
                 echo "<td>".$row["name"]."</td>"; 
                 echo "<td>".$row["address"]."</td>"; 
                 echo "<td>".$row["phone"]."</td>"; 
                 echo "<td>".$row["time"]."</td>"; 
                 echo "<td>".$row["departuredate"]."</td>";
                 echo "<td>".$row["location"]."</td>"; 
                 echo "<td>".$row["vehicleno"]."</td>"; 
                echo "<td><a href='#' onclick='deletes($row[regdno])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";       
            }
            echo "</table>";
        }
        else {
            echo "No records!!";
        }}
            ?>
        </tr>
        </table>
         </div>
         </center>
     
     
     
     
<div id="abc" class="container text-center">
    <h3>Find us here</h3>  
     </div>
     
     
<div id="map">
<div class="googlemap col-md-6">
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7770.8671336271855!2d77.56670360000001!3d13.135029200000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae18a5c54ece35%3A0x49c4c47a68a60b9c!2sBMS%20Institute%20of%20Technology%20and%20Management!5e0!3m2!1sen!2sin!4v1573897095281!5m2!1sen!2sin"  width="100%" height="270" frameborder="0" style="border-radius:20px;" allowfullscreen="" style="margin-top: 10px;"></iframe>
    </div>
    <div class="contact col-md-6"> 
        <h1>Yeti Holidays Pvt. Limited</h1>
<br> <div class="contact1">
        <h3> Office Address</h3>
    <i class="fa fa-location-arrow fa-2x" aria-hidden="true"></i>&nbsp<p> BMS Institute of Technolgy & Management, Avalahalli, Bangalore<br>
    <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp yetiholiday@gmail.com<br>
        <i class="fa fa-mobile fa-2x" aria-hidden="true" ></i>&nbsp&nbsp +91 8310821250</p>
        </div></div>
    </div>
    
            <div class="container bg-8">
                <div class="col-md-4"><h3>About</h3>
                <div class="line-h"></div><p>The project is to build capacity of practitioners and decision makers to guide and handhold them to plan, design and implement online E-waste Collection System including policy, collection, transportation and treatment in a college,city and country as a whole.</p>
                </div>
                <div class="col-md-4"><h3>Social Links</h3>
                <div class="line-h"></div>
                    <div class="social">
                        <ul>
                            <li> <a href="https://www.facebook.com/"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/"> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
                            <li> <a href="https://www.youtube.com/"> <i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a></li></ul>
                    </div>
                </div>
                <div class="col-md-4"><h3>Our Bunker</h3>
                <div class="line-h"></div>
                    <p>BMS Institute of Technology & Management<br>
                    Doddaballapur main-road<br>
                    Avalahalli, Bangalore-560064</p>
                </div>
            </div>
        <hr style="opacity:0.5;">
            <center><div class="copy"><h3> Copyright &copy 2019 - All Rights Reserved - Privacy Policy</h3></div></center>
     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <script src="js/bootstrap.min.js"></script>
     </center></body>
</html>