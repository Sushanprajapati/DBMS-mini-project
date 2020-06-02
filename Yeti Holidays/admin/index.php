<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login(Admin)</title>
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
						Admin Login
					</span>
                    <center><img src="images/login.png" alt="This may contain an icon" class="img-responsive" height="100px" width="100px"></center>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="username" required>
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						
						<input id="myinput" class="input100 " type="password" name="password" required>
						<span class="focus-input100" data-placeholder="Password"></span>
                        
					</div>
                
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
				</form>
			</div>
		</div>
	</div>
	    
</body>

</html>