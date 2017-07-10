<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script src="js/responsiveslides.min.js"></script>

<!-- This stylesheet is for small changes -->
<link href="css/small" rel = "stylesheet" type = "text/css">
<link href="css/style" rel = "stylesheet" type = "text/css">
<script type="text/javascript">
  function show(para){
    alert("Welcome " + para + " to PopCornTV");
  }
</script>














<?php
session_start();
// Create connection
$username = "root";
$server = "localhost";
$db = "PopcornTV";	
$password = "";			 
$conn = new mysqli($server, $username, $password, $db);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$uri = $_SERVER['REQUEST_URI'];$user = "";$wen = "n";$admin = "f";

if(strpos($uri,"USERNAME"))
{
  $user = (explode('USERNAME=', $uri))[1];
  $wen = "y";
}
else $user = (explode('username=', $uri))[1];

$sql = "SELECT * FROM login where username = '$user'";
$result = $conn->query($sql);
$row = $result -> fetch_array();
$email = $row['email'];
$pass = $row['password'];

if($user == "toughnickel"){
  $admin = "t";
}


$conn->close(); 
?>













<body >

<div class="container" <?php if($wen == "y") echo "onload = 'show(".$user.");'"; ?>>
    <div class="container_wrap">
        <div class="header_top">
            <div class="col-sm-3 logo"><a href="index.html"><img src="images/logo.png" alt="" width="82" height="82" /></a></div>
            <div class="col-sm-6 nav">
              <ul>
                 <li><span class="simptip-position-bottom simptip-movable" data-tooltip="TV"><a href="movie.html"> </a> </span></li>
                 <li><span class="simptip-position-bottom simptip-movable" data-tooltip="MOVIES"><a href="movie.html"> </a></span></li>
             </ul>
            </div>
            <div class="col-sm-3 header_right">
               <ul class="header_right_box">
                 <li><?php echo "<img width = '40' height = '40' src='images/".$user.".png' alt=''/>" ?></li>
                 <li><p><?php echo "<a href='profile.php?username=".$user."'>"; ?><?php echo strtoupper($user); ?></a></p></li>
                 <li class="last"><i class="edit"> </i></li>
                 <div class="clearfix"> </div>
               </ul>
            </div>

    <br><br><br><br><br><br>
            <div class="content">
      	     <div class="register">
			   <div class="col-md-6 login-left">
			  	 <h3>Profile</h3>
				 <p><br><strong>Name : </strong><?php echo strtoupper($user); ?><br></p>
                 <p><br><strong>Email-ID : </strong><?php echo $email; ?><br></p>
				 <p><br><strong>Password : </strong><?php echo $pass; ?><br></p>
			   </div>


            <div class="clearfix"> </div>
          </div>
          <div class="clearfix"> </div>
    </div>
<div class="container"> <br>

<?php

if($admin == "t"){
  echo "<a href = 'update.php' ><input type='button' id = 'update' value = 'Add a new Movie/TV' /></a>";
}

?>















<!-- footer section -->
 <footer id="footer">
    <div id="footer-3d">
        <div class="gp-container">
            <span class="first-widget-bend"> </span>
        </div>      
    </div>
    <div id="footer-widgets" class="gp-footer-larger-first-col">
        <div class="gp-container">
            <div class="footer-widget footer-1">
                <div class="wpb_wrapper">
                    <img src="images/logo2.jpg" alt="PopcornTV"/>
                </div> 
              <br>
              <p>The most popular place to get your favourite movies and series, We have now </p>
              <p class="text">added movies and TV series from regional languages too!! What are you waiting for ? <br>Get your account in PopcornTV now!</p>
             </div>
             <div class="footer_box">
              <div class="col_1_of_3 span_1_of_3">
                    <h3>Categories</h3>
                    <ul class="first">
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">TV Series</a></li>
                    </ul>
              </div>
              <div class="col_1_of_3 span_1_of_3">
                    <h3>About Us</h3>
                    <ul class="first">
                        <li><a href="aboutus.html">Developer</a></li>
                    </ul>
             </div>
            <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
  </footer>
</div>
</body>