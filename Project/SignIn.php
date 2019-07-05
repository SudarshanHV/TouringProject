<?php
	require "header.php";
?>

<main>

</main>

<?php
	require "footer.php"
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
</head>
<body>
	<form action="includes/signin.inc.php" method="post">
		<label for="username"><strong>UserName:</strong></label>
		<input id="username" type="text" name="username" placeholder="UserName" required /></br>
		<label for="password"><strong>Password:</strong></label>
		<input id="password" type="password" name="password" placeholder="Password" title="Minimum 5 characters password needed" minlength="5" required/></br>
		<input type="submit" value="Sign In" name="submit-signin"/></br>
	</form>
    <p>
    	New to the page <a href="signup.php">Sign Up</a></br>
    </p>
</body>
</html>
