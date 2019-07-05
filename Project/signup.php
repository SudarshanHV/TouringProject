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
	<title>Sign Up</title>
</head>
<body>
	<form action="includes/signup.inc.php" method="post">
        <label for="email"><strong>Email:</strong></label>
		<input id="email" type="email" name="email" pattern=".+@.+.com" placeholder="xyz@email.com" required /></br>		
		<label for="username"><strong>UserName:</strong></label>
		<input id="username" type="text" name="username" placeholder="User Name" required /></br>
		<label for="password"><strong>Password:</strong></label>
		<input id="password" type="password" name="password" placeholder="Password" title="Minimum 5 characters password needed" minlength="5" required/></br>
		<label for="password-retype"><strong>Retype Password:</strong></label>
		<input id="password-retype" type="password" name="password-retype" placeholder="Retype Password" title="Minimum 5 characters password needed" minlength="5" required/></br>
		<input type="submit" value="Sign Up" name="submit-signup"/></br>
	</form>
</body>
</html>





