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

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="bootstrap.php">Home</a></li>
    <li><a href="about.php">ABOUT US</a></li>
    <li><a href="dest.php">DESTINATIONS</a></li>
    <li><a href="login/index.php">BOOKINGS</a></li>
    <li><a href="gallery.php">GALLERY</a></li>
    <li><a href="contact.php">CONTACT</a></li>
    <li><a href="login/index.php">LOGIN/SIGNUP</a></li>

      </ul>        
      </div> </div>
</nav>
     
     <script language="JavaScript" type="text/javascript">
  $(document).ready(function(){
    $('.carousel').carousel({
      interval: 3000
    })
  });    
</script> 
     
     
     <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="Images/devaiah-mallangada-kalaiah-QU36RaoCM-Q-unsplash.jpg" alt="Picture may contain Elephant">
      <div class="carousel-caption">
       
        <h4>Chitwan</h4>

          Explore the great wildlife adventures. The home of great One-Horned Rhinocerous and many more.

      </div>
    </div>
    <div class="item">
      <img src="Images/poonhill.jpg" alt="Picture may contain a mountain">
      <div class="carousel-caption">
          <h4>Poonhill Trek</h4>
       Experience the millenium trek to Poonhill. Enjoy the fruitfull view of mysterious mountain ranges.
      </div>
    </div>
    <div class="item">
      <img src="Images/shaouraav-shreshtha-_P5SJb7WJQY-unsplash.jpg" alt="Photo may contain temples">
      <div class="carousel-caption">
        
       <h4>Kathmandu Durbar Square</h4>
Experience the life in the "City of Temples". The diversified cultures and traditions will make you go speechless.
      </div>
    </div>
      <div class="item">
      <img src="Images/samrat-khadka-2bxAoXcfwwM-unsplash.jpg" alt="Photo may contain scenery">
      <div class="carousel-caption">
        
       <h4>Paragliding</h4>
      Experience the breathtaking paragliding opportunity in Pokhara. Explore how the city of rain looks like.
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <div id="band" class="container text-center">
    <h3>FEATURED PROGRAMS</h3>  
<p>
        We, Yeti Holidays, are proud to present a selection of finely tailored programs. We are committed to making your travel efficient and innovative.</p>
     </div>
      <div id="image">
    <div class="col-md-4 text-center container">
      <h5>Kathmandu Valley Tour</h5>
        <img src="Images/glimpse.jpg" class="img-circle"><br><br>
        <a href="login/index.php" class="btn btn-primary">Go Here</a>
        
      </div>
      <div class="col-md-4 text-center container" style=" border-left: 2px solid #E9E9E9;">
      <h5>Annapurna Base Camp</h5>
         <img src="Images/anan.jpg" class="img-circle" >
          <br><br>
          <a href="login/index.php" class="btn btn-primary">Go Here</a>
      </div>  
      <div class="col-md-4 text-center container" style=" border-left: 2px solid #E9E9E9;">
      <h5>Everest Base Camp</h5>
         <img src="Images/everest.jpg" class="img-circle">
          <br><br>
          <a href="login/index.php" class="btn btn-primary">Go Here</a>
      </div>
        </div><br><hr>
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
                <div class="line-h"></div><p>Yeti Holidays understands the challenges of the modern tourism industry and knows that planning, developing and adapting destination resources to the evolving needs of the market is the key to success. We take all trends in tourism business into consideration, invest in new infrastructure and offer both leisure and business travel solutions. </p>
                </div>
                <div class="col-md-4"><h3>Social Links</h3>
                <div class="line-h"></div>
                    <center><div class="social">
                        <ul>
                            <li> <a href="https://www.facebook.com/dominator.sushan" style=" border-right: 2px solid #E9E9E9; padding-right: 25px;"><i class="fa fa-facebook fa-2x" aria-hidden="true" ></i></a></li>
                            <li><a href="https://twitter.com/dominatorsushan" style=" border-right: 2px solid #E9E9E9; padding-right: 25px;"> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/sushan.prajapati.3" style=" border-right: 2px solid #E9E9E9; padding-right: 25px;"><i class="fa fa-instagram fa-2x" aria-hidden="true" ></i></a></li>
                            <li> <a href="https://www.youtube.com/channel/UC4tpRWnrkXt6Q5lTmzuXmpg?view_as=subscriber"> <i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a></li></ul>
                        </div></center>
                </div>
                
                <div class="col-md-4"><h3>Our Bunker</h3>
                <div class="line-h"></div>
                    <p>BMS Institute of Technology & Management<br>
                    Doddaballapur main-road<br>
                    Avalahalli, Bangalore-560064</p>
                </div>
      </div>
        <hr style=" color:black;">
     <div class="container-fluid copy">
            <center><div><h3> Copyright &copy 2019 - All Rights Reserved - Privacy Policy</h3></div>
         </center>
     </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>