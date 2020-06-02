<html>
<head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
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
      <a class="navbar-brand" href="afterlogin.html"><img src="Images/logo.jpg" height="200px" width="200px" class="img-responsive"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="afterlogin.php">Home</a></li>
    <li><a href="about.php">ABOUT US</a></li>
    <li><a href="dest.php">DESTINATIONS</a></li>
 <li><a href="afterloginbooking.php">BOOKINGS</a></li>
    <li><a href="gallery.php">GALLERY</a></li>
    <li><a href="contact.php">CONTACT</a></li>
    <li><a href="logout.php">LOGOUT</a></li>
      </ul>        
      </div> </div>
</nav>
    <br>
     
     <center>
     <form method="POST" action="everestbooking.php">
         
         <div id="kathmandubook">
             <div class="ktm"><center><h3>Book your Everest Base Camp Trekking</h3></center>
                 <hr class="line" style="width:55%; height: 2px;">
                  <?php 
        if(isset($_GET['msg1']))
        {
            echo $_GET['msg1'];
            
        }
?>
             
             </div>
             
             
<div class="input-group">
    <span class="input-group-addon">Firstname: * </span>
    <input id="email" type="text" class="form-control" name="firstname" placeholder="firstname(as per your Govn ID)" required>
  </div><br>
<div class="input-group">
    <span class="input-group-addon">Lastname: *</span>
    <input id="email" type="text" class="form-control" name="lastname" placeholder="lastname" required>
  </div><br>
<div class="input-group">
    <span class="input-group-addon add">Address: *</span>
    <input id="email" type="text" class="form-control " name="address" placeholder="address" required>
  </div><br>
       
<div class="input-group">
    <span class="input-group-addon" style="padding-right:10px;">Phone no: * </span>
<input id="email" type="text" class="form-control" name="phone" placeholder="10 digit phone number" required>
  </div><br>
             
  <div class="input-group">
    <span class="input-group-addon">Email ID:     <i class="glyphicon glyphicon-user"></i> </span>
    <input id="email" type="text" class="form-control" name="email" placeholder="Email" required>
  </div><br>
  
    <div class="ktm"><center><h3>Mention your Travelling Date:</h3></center>
                 <hr class="line" style="width:40%; border-bottom-width: 2px;">
             </div>   
<br>       
             
    <div class="input-group">
    <span class="input-group-addon">Departure date:  </span>
    <input id="email" type="date" class="form-control" name="departuredate" placeholder="mm/dd/yyyy" style="width:20%;" required>
  </div><br>
             
    <div class="input-group">
    <span class="input-group-addon" style="padding-right:28px;">Arriving date:       </span>
    <input id="email" type="date" class="form-control" name="arrivaldate" placeholder="mm/dd/yyyy" style="width:20%;" required>
  </div><br>
            
    <div class="input-group">
    <span class="input-group-addon" style="padding-right:28px;">Pick-up Location</span>
    <input id="email" type="text" class="form-control" name="location" style="width:48%;" required>
  </div><br>
   
    <hr class="line" style="width:100%; border-bottom-width: 2px;">        
    <div class="input-group">
    <span class="input-group-addon">Please specify if you have any health problems: </span>
      <textarea rows="2" cols="10" id="msg" type="text" class="form-control" name="problem" placeholder="Health Issues"></textarea>
             </div>
             <br>
  <div class="input-group">
    <span class="input-group-addon">Additional Queries: </span>
      <textarea rows="5" cols="47" id="msg" type="text" class="form-control" name="msg" placeholder="Additional Info"></textarea>
             </div>
             <br>
             <center>
                 <input class="btn btn-primary sub btn--radius-2 " type="submit" name="sub" value="Submit">
                </center>
         </div>
</form>
     </center>
        
    
     <div class="ktm"><center><h3>Already Booked?</h3></center>
                 <hr class="line" style="width:100%; border-bottom-width: 2px;">
         <center>
             <a href="afterloginbooking.php" class="btn btn-primary">Booking Status</a></center>
             </div>

     
     
     
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
     
    </body>
</html>