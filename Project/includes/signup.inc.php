<?php
	if(isset($_POST['submit-signup'])){
		require 'dbh.php';
		$username=$_POST['username'];
		$email=$_POST['email'];
		$pwd=$_POST['password'];
		$pwdre=$_POST['password-retype'];

		if(empty($username)||empty($email)||empty($pwd)||empty($pwdre)){
			header("Location: ../signup.php?error=emptyfields&mail=".$email."&username=".$username);
			exit();
		}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username)){
			header("Location: ../signup.php?error=invalidmailusername&mail=".$email."&username=".$username);
			exit();
		}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			header("Location: ../signup.php?error=invalidmail&username=".$username);
			exit();	
		}
		else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
			header("Location: ../signup.php?error=invalidusername&mail=".$email);
			exit();
		}
		else if($pwd!==$pwdre){
			header("Location: ../signup.php?error=passwordcheck&mail=".$email."&username=".$username);
			exit();
		}
		else{
			$sql= "SELECT username FROM userdata WHERE username=? ";
			$stmt=mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql)){
				echo "SQL Error!!";
			}
			else{
				mysqli_stmt_bind_param($stmt,"s",$username);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck=mysqli_stmt_num_rows($stmt);
				if($resultCheck>0){
					header("Location: ../signup.php?error=usertaken&mail=".$email);
					exit();
				}
				else{
					$sql="INSERT INTO userdata(username, password, email) VALUES (?,?,?)";
					$stmt=mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt,$sql)){
						header("Location: ../signup.php?error=SQLerror");
						exit();
					}
					else{
						$hash_pwd=password_hash($pwd, PASSWORD_DEFAULT);
						mysqli_stmt_bind_param($stmt,"sss",$username,$hash_pwd,$email);
						mysqli_stmt_execute($stmt);
						header("Location: ../signup.php?signup=success");
						exit();
					}
				}
			}
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
		}
	}		
else{
	header("Location: ../index.php");
	exit();
}
?>