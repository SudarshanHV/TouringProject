<?php
	require "header.php";
?>

<main>
	<link rel="stylesheet" type="text/css" href="index.css">
	<script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
		
	<script src="bootstrap.js"></script>


	<?php
		if(isset($_SESSION['Name'])){
			echo 'You are logged in!!';
		}
		else{
			echo 'You are logged out!!';
		}
	?>

	<div class="container">
		<h3 class="text">Life Is A Journey to be Travelled</h3>
		<h4 class="text">Set off on a new Journey!!</h4>
		<a href="TourList.html"class="button">Book A Tour</a>
	</div>
	</header>
</main>

<?php
	require "footer.php"
?>
















