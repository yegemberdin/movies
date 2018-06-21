<?php

	while($row = $q->fetch_object()){
		$id = $row->id;
		$title = $row->title;
		$country = $row->country;
		$genre = $row->genre;
		$year = $row->year;
		$url = $row->url;
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