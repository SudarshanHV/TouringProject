<?php
	$server="localhost";
	$dbuser="root";
	$dbpassword="Gloryglorymanunited";
	$dbname="userdata";

	$conn=mysqli_connect($server,$dbuser,$dbpassword,$dbname);

	if(!$conn){
		die ("Connection failed: ".mysqli_connect_error());
	}
	