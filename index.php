<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php include 'include/assetCss.php'; ?>
  </head>
  <body>


	<div class="container">
	<div class = "lg" data-target="#login">
	</div>
	  <form class="form-signin" method="POST">
		<div class="text-center">
		<img src="assets/images/aquachill-logo.png" height="80px" alt="">
		<hr>
		<h2 class="form-signin-heading">Please sign in</h2>
		</div>
		<label for="inputEmail" class="sr-only">Email address</label>
		<input type="email" name = "username" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" name = "password" id="inputPassword" class="form-control" placeholder="Password" required>
		<div class="checkbox">
		  <label>
			<input type="checkbox" value="remember-me"> Remember me
		  </label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit" name = "login">Sign in</button>
	  </form>
	</div> <!-- /container -->
<?php

	$connection = mysqli_connect('localhost', 'root', 'root');
	if (!$connection){
		die("Database Connection Failed" . mysqli_error($connection));
	}
	$select_db = mysqli_select_db($connection, 'aquachill');
	if (!$select_db){
		die("Database Selection Failed" . mysqli_error($connection));
		
	}

    if (isset($_POST['login']))
	{
        $username = $_POST['username'];
        $password = $_POST['password'];
 
        $query = "SELECT * FROM `user` WHERE Username='" .$username. "' AND Password='" .$password. "'";
        $result = mysqli_query($connection, $query);
		$no_of_login_value = mysqli_num_rows($result);
        if($no_of_login_value > 0)
		{
			echo "User login Successfully.";
			header( "refresh:1; url=summary.php" );
        }
		else
		{
            echo "User login Failed";
        }
    }


?>
	
		<!--  -->
  </body>
</html>
