<?php

session_start();
$db = mysqli_connect('localhost','root','','popcorntv') or die('Error connecting to MySQL server.');

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
$descrip = str_replace('"', '`', $descrip);


if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(explode('.',$_FILES['image']['name'])[1]);
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be exactly 2 MB';
      }

      $file_name = $name.".".$file_ext;
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success ".$file_tmp;
      }else{
         print_r($errors);
      }
   }

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