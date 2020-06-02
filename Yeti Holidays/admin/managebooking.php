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
    <title>Home</title>
 </head>
 <body>
        
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
    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="adminafterlogin.php">HOME</a></li>
    <li class="active"><a href="managebooking.php">MANAGE BOOKINGS</a></li> 
          <li ><a href="driverdetails.php">MANAGE DRIVERS</a></li>
    <li><a href="../logout.php">LOGOUT</a></li>

      </ul>        
      </div> </div>
</nav>
     
    
    <div id="band" class="container text-center">
    <h3 style="margin-top:80px;">Manage Bookings</h3>  
<p>
        Please choose the following options to manage.</p>
     </div>
      <div id="image">
    <div class="col-md-4 text-center container">
      <h5>Kathmandu Valley Tour</h5>
        <img src="../Images/glimpse.jpg" class="img-circle"><br><br>
        <a href="managekathmandubooking.php" class="btn btn-primary">Manage</a>
        
      </div>
      <div class="col-md-4 text-center container" style=" border-left: 2px solid #E9E9E9;">
      <h5>Annapurna Base Camp</h5>
         <img src="../Images/anan.jpg" class="img-circle" >
          <br><br>
        <a href="manageannapurnabooking.php" class="btn btn-primary">Manage</a>
      </div>  
      <div class="col-md-4 text-center container" style=" border-left: 2px solid #E9E9E9;">
      <h5>Everest Base Camp</h5>
         <img src="../Images/everest.jpg" class="img-circle">
          <br><br>
        <a href="manageeverestbooking.php" class="btn btn-primary">Manage</a>
      </div>
        </div><br>
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
    </body>
</html>