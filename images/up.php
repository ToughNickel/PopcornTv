<?php

session_start();
$db = mysqli_connect('localhost','root','','popcorntv') or die('Error connecting to MySQL server.');

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
} else {
    echo "File is not an image.";
    $uploadOk = 0;
}

$name = $_POST['moviename'];
$actors = $_POST['actors'];
$genre = $_POST['genre'];
$release = $_POST['release'];
$runtime = $_POST['runtime'];
$rating = $_POST['rating'];
$descrip = htmlspecialchars($_POST['descrip']);

$name = str_replace(" ", "_", $name);
$actors = str_replace("'", "`", $actors);
$descrip = str_replace("'", "`", $descrip);


echo $name."<br>".$actors."<br>".$genre."<br>".$release."<br>".$runtime."<br>".$rating."<br>".$descrip."<br>";

$sql = "INSERT INTO `movies`(`name`, `actors`, `genre`, `date_of_release`, `run_time_in_min`, `IMDB_rating` ) VALUES ('".$name."', '".$actors."', '".$genre."', ".$release.", ".$runtime.", ".$rating.")";
if(mysqli_query($db,$sql)){
	echo "Success";
}
else echo "Failed  ...,".mysqli_error($db);

$sql = "INSERT INTO `description`( `name` , `descrip` ) VALUES ('".$name."','".$descrip."')";
if(mysqli_query($db,$sql)){
	header("location: profile.php?username=toughnickel");
}
else header("location: profile.php?username=toughnickel");
?>