<?php
	include('db.php');

	$q = $connection->query("SELECT * FROM films");
?>

<html>

<head>
	<title>MovieTime</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="scr.js"></script>
</head>

<body class="listbody">
	<h2 class = "listt">List of films</h2>
	<div class="form1">
		<div class="form2">
			<table class="table">
				<thead>
					<tr>
						<th>Title</th>
						<th>Country</th>
						<th>Genre</th>
						<th>Year</th>
						<th>Delete</th>
					</tr>
				</thead>
				<?php
				while($row = $q->fetch_object()){
					$id = $row->id;
					$title = $row->title;
					$country = $row->country;
					$genre = $row->genre;
					$year = $row->year;
				?>
				<tbody>
					<tr>
						<?php echo "<td>$title</td>" ?>
						<?php echo "<td>$country</td>"?>
						<?php echo "<td>$genre</td>" ?>
						<?php echo "<td>$year</td>" ?>
						<?php echo "<td class='delete'><a href='delete.php?id=$id'>DELETE</a></td>" ?> 
					</tr>
				</tbody>
				<?php
				}
				?>
			</table>
			<div class="back">
				<a href="index.php">back</a>
			</div>
			<button class="add" id="but">
				add
			</button>
		</div>
	</div>

<!--       Modal window  -->

	<div class="win" id = "div1">
		<form action="add.php" method = "POST" enctype="multipart/form-data">
 			<h2>add</h2>
 			<p><input type="text" name="title" placeholder = "Title"></p>
 			<p><input type="text" name="country" placeholder = "Country"></p>
 			<p><input type="text" name="genre" placeholder = "Genre"></p>
 			<p><input type="text" name="description" placeholder = "Description"></p>
 			<p><input type="text" name="year" placeholder = "Year"></p>
 			<p><input type="file" name = "fileToUpload" ></p>
 			<p><input type="submit" name = "sumbit" id = "but2" class="submit" value = "submit"></p>
 		</form>

 		<button class="close" id="close">
 			<img src="images/close.png" class ="cls" alt="">
 		</button>
	</div>

</body>
</html>
