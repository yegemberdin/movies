<?php

	include('db.php');

	$q = $connection->query("SELECT * FROM films ORDER BY year");
	$genres = $connection->query("SELECT DISTINCT genre FROM films");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> MovieTime</title>
	<link rel="stylesheet" href="style.css">
	<script src = "inx.js"></script>
	
</head>
<body>
	<?php include('fronter.php') ?>
	<div class="books">
	<?php  
		if($_GET['page'] == "" || $_GET['page'] == "all")
			include("all.php");
		else{
			$genre = $_GET['page'];
			include("genre.php");
		}
	?>
	</div>
	<?php include('footer.php') ?>
</body>

</html>

