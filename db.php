<?php
	$connection = new mysqli("localhost","root","root","store");

	if($connection->connect_error){
		echo "ERROR IN DB CONNECTION";
	}
?>