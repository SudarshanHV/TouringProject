<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">

	<title>Landing Page</title>
</head>
<body>
	<header>
	<nav class="navbar navbar-default">
		<div class="container"><!-- Constricts elements inside Navbar -->
			<div class="navbar-header">
				<!-- Hamburger Code -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-collapse" aria-expanded="false">
        		<span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
      			</button>
				
				<!-- Brand name Code -->
				<a href="index.php" class="navbar-brand">Home Page</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-collapse">
				<ul class="nav navbar-nav">
					<li><a href="#">Upload</a></li>
					<li><a href="#">Forum</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php
						if(isset($_SESSION['Name'])){
							echo '<li><a href="includes/logout.inc.php">Log Out</a></li>';	
						}
						else{
							echo '<li><a href="SignIn.php">Sign In</a></li>
							<li><a href="signup.php">Sign Up</a></li>';
						}
					?>
					<li><a href="TourList.html">Book Now</a></li>
				</ul>
			</div>
		</div>	
	</nav>
	


</body>
</html>