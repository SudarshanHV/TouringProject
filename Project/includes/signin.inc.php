<?php
	if(isset($_POST['submit-signin'])){
		require 'dbh.php';
		$username=$_POST['username'];
		$password=$_POST['password'];
     	
     	if(empty($username)||empty($password)){
     		header("Location: ../SignIn.php?error=emptyfields");
	    	exit();
     	}
     	else{
     		$sql="SELECT * FROM userdata WHERE username=?;";
     		$stmt=mysqli_stmt_init($conn);
     		if(!mysqli_stmt_prepare($stmt,$sql)){
						header("Location: ../index.php?error=SQLerror");
						exit();
					}
					else{
						mysqli_stmt_bind_param($stmt,"s",$username);
						mysqli_stmt_execute($stmt);
						$result=mysqli_stmt_get_result($stmt);
						if($row = mysqli_fetch_assoc($result)){
							$pwdCheck= password_verify($password, $row['password']);
							if($pwdCheck== false){
								header("Location: ../index.php?error=Incorrectpassword");
								exit();
							}
							else if($pwdCheck==true){
								session_start();
								$_SESSION['Name']=$row['username'];
								$_SESSION['ID']=$row['userid'];
								header("Location: ../index.php?login=success");
								exit();
							}
							else{
								echo 'Else statement';
								header("Location: ../index.php?error=ProblemPassword");
								exit();
							}

						}
						else{
							header("Location: ../index.php?error=nouser");
							exit();
						}
     				}
			}
		}
	else{
		header("Location: ../index.php");
	    exit();
	}
?>