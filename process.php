<?php 
$username = $_POST['user'];
$password = md5($_POST['pass']);

$username = stripcslashes($username);
$password = stripcslashes($password);
$_SESSION['Error'] = "Unable to login '$username'";

#$username = mysql_real_escape_string($username);
#$password = mysql_real_escape_string($password);

$db = mysqli_connect('localhost','root','','popcorntv') or die('Error connecting to MySQL server.');

$result = mysqli_query($db,"select * from login where username = '$username' and password = '$password'") or die("Failed to query ".mysqli_errno());

$row = mysqli_fetch_array($result);
if (($row['username'] == $username) && ($row['password'] == $password) ){
	//echo "Here comes the profile page\nSucces!! Welcome ".$username;
	header("location: profile.php?username=".$username);
} 
else {
	header("location: login.php?popF");
}
