<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login(Customer)</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="login.php">
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
                    <center><img src="images/login.png" alt="This may contain an icon" class="img-responsive" height="100px" width="100px"></center>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="email" name="email" required>
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						
						<input id="myinput" class="input100 " type="password" name="pass" required>
						<span class="focus-input100" data-placeholder="Password"></span>
                        
					</div>
                    <input type="checkbox" onclick="myFunction()">&nbsp;&nbsp;&nbsp;Show Password

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<input type="submit" value="Login" class="login100-form-btn">
                            
						</div>
					</div>
                    <?php 
                       if(isset($_GET['error']))
        {
            echo $_GET['error'];
            
        }
                        ?>
					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="../signup/index.php">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	    <script type="text/javascript">
    function myFunction() {
  var x = document.getElementById("myinput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
    
    </script>


</body>

</html>