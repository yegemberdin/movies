<?php
	
	$q2 = $connection->query("SELECT * FROM films WHERE genre=\"$genre\" ORDER BY year");

	while($row = $q2->fetch_object()){
		$title = $row->title;
		$country = $row->country;
		$genre = $row->genre;
		$year = $row->year;
		$url = $row->url;
		$id = $row->id;
?>
	<div class = "out">
		<img src=<?php echo "$url"; ?> alt="">
		<div class = "in">
			<?php echo "<span>Title: $title</span> <br>"; ?>
			<?php echo "<span>Country: $country</span> <br>"; ?>
			<?php echo "<span>Genre: $genre</span> <br>"; ?>
			<?php echo "<span>Year: $year</span> <br>"; ?>
		</div>
		<a href="description.php?id=<?php echo $id; ?>"><button class="cart" id ="cart">SHOW</button></a>
	</div>
<?php 
}
?>