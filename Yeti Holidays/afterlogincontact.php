<?php 
 session_start();
?>
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
      <a class="navbar-brand" href="bootstrap.html"><img src="Images/logo.jpg" height="200px" width="200px" class="img-responsive"></a>
    </div>
    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="afterlogin.php">Home</a></li>
    <li><a href="about.php">ABOUT US</a></li>
    <li><a href="dest.php">DESTINATIONS</a></li>
    <li><a href="afterloginbooking.php">BOOKINGS</a></li>
    <li><a href="gallery.html">GALLERY</a></li>
    <li class="active"><a href="afterlogincontact.php">CONTACT</a></li>
    <li><a href="logout.php">LOGOUT</a></li>

      </ul>        
      </div> </div>
</nav>
     <div id="kathmandubook">
     <div class="ktm"><center><h3>Contact Us:</h3></center>
                 <hr class="line" style="width:35%; height: 2px;">
         <?php 
        if(isset($_GET['msg1']))
        {
            echo $_GET['msg1'];
            
        }
?>
     </div> 
     </div>
      <div class="container bg-8">
                <div class="col-md-4"><h3>Yeti Holidays</h3>
                <div class="line-h"></div><p>Yeti Holidays understands the challenges of the modern tourism industry and knows that planning, developing and adapting destination resources to the evolving needs of the market is the key to success. We take all trends in tourism business into consideration, invest in new infrastructure and offer both leisure and business travel solutions. </p>
                <br>
                    <h4 style="font-weight:600; font-size:17px; color:#34363b;">Address:</h4>
                
                    <p>BMS Institute of Technology & Management<br>
                    Doddaballapur main-road<br>
                    Avalahalli, Bangalore-560064</p>
                    <br>
                    <h4 style="font-weight:600; font-size:17px; color:#34363b;">Phone:</h4>
                
                    <p>+91 8310821250
                        <br>+91 8792716138</p>
                    
                </div>
                <div class="col-md-4"><h3>Enquiries</h3>
                <div class="line-h"></div><br>
                    <center><form action="enquiry.php" method="post">
                    <div class="input-group">
    <span class="input-group-addon">Name: * </span>
    <input id="email" type="text" class="form-control" name="name" placeholder="Fullname" required style="width:90%;">
                        </div><br>
                        
                    <div class="input-group">
    <span class="input-group-addon">Email: * </span>
    <input id="email" type="email" class="form-control" name="email" placeholder="@xyz.com" required style="width:90%;">
                        </div><br>
                        <div class="input-group">
    <span class="input-group-addon">Subject</span>
    <input id="email" type="text" class="form-control" name="subject" placeholder="Subject" style="width:90%;">
                        </div><br>
                        
                        <div class="input-group">
    <span class="input-group-addon">Queries</span>
                            <textarea rows="6" cols="20" type="text" class="form-control" name="enquire" style="width:90%;" required></textarea>
                        </div><br>
                        
                        <center>
                 <input class="btn btn-primary sub btn--radius-2 " type="submit" name="sub" value="Submit">
                </center>
                        </form>
                    
                    </center>
                </div>
                <div class="col-md-4">
               
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.4421656584095!2d77.56931653054471!3d13.134485798531696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae18a5c54ece35%3A0x49c4c47a68a60b9c!2sBMS%20Institute%20of%20Technology%20and%20Management!5e0!3m2!1sen!2sin!4v1573902303328!5m2!1sen!2sin" width="100%" height="390" frameborder="0" style="border-radius:50px; border-width:2px;" allowfullscreen="" ></iframe>
                    
                    
                </div>
            </div>
    
        <hr style="opacity:0.5;">
            <center><div class="copy"><h3> Copyright &copy 2019 - All Rights Reserved - Privacy Policy</h3></div></center> 
    </body>
</html>