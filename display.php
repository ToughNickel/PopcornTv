<?php
	$name = $_POST['name'];
	$db = mysqli_connect("localhost","root","","second_data") or die("Failed to connect");
	$result = mysqli_query($db,"select * from item where ino = '$name'");
	$row = mysqli_fetch_array($result);
	echo "the ino = ".$row['ino'];
	echo "<br>the price =  ".$row['price'];
	echo "<br>\n";
?>