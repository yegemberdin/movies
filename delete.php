<?php

	include('db.php');

	$id = $_GET['id'];
	$url = $_GET['url'];

	$connection->query("DELETE FROM films WHERE id=$id");

	header("Location:list.php");
	
?>
