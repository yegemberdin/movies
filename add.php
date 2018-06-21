<?php 

	include("db.php");


 	if($_POST['title']!= "" && $_POST['country']!="" && $_POST['genre']!="" && $_POST['year']!=""){

 		$title = $_POST['title'];
 		$country = $_POST['country'];
 		$genre = $_POST['genre'];
 		$year = $_POST['year'];
 		$file = $_FILES['fileToUpload'];
 		$description = $_POST['description'];
 		
		$target_dir = "images/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        $uploadOk = 1;
		    } else {
		        $uploadOk = 0;
		    }
		}

		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif") {
		    $uploadOk = 0;
		}
		
		if($uploadOk == 1 && move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			$connection->query("INSERT INTO films(id, title, country, genre, year, url, description) VALUES(NULL, \"$title\",\"$country\", \"$genre\", \"$year\", \"$target_file\", \"$description\")");

			header("Location:list.php");
		}
	 }
	 else{

		header("Location:list.php");
	 }

?>
