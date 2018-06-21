<?php

	include('db.php');

	$q = $connection->query("SELECT * FROM films ORDER BY year");
	$genres = $connection->query("SELECT DISTINCT genre FROM films");

	$id = $_GET['id'];
	$desc = $connection->query("SELECT * FROM films WHERE id=\"$id\" ");
	$row = $desc->fetch_object();
	

	$title = $row->title;
	$country = $row->country;
	$genre = $row->genre;
	$year = $row->year;
	$url = $row->url;
	$description = $row->description;
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Film Shop</title>
	<link rel="stylesheet" href="style2.css">
	<script src = "inx.js"></script>
</head>

<body>

	<?php include('fronter.php') ?>
	<div class="name">
		<p> 
			<?php echo $title; ?>

		</p>
	</div>
	<div class="description"> 
		<img src="<?php echo $url; ?>">
		<div class="components">
			<p>
				Country: <b> <?php echo $country; ?> </b>
			</p>		

			<p> 
				Genre: <b> <?php echo $genre; ?> </b>
			</p>		
			
			<p>
				Year: <b> <?php echo $year; ?> </b>
			</p>

			<p>
				Description: <br> <?php echo $description; ?>
			</p>
			
		</div>

	</div>

	<?php include('footer.php') ?>

</body>

</html>

