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
$conn = mysqli_connect('localhost','root','','popcorntv') or die('Error connecting to MySQL server');
$key = explode("?", $_SERVER['REQUEST_URI'])[1];
$table = "movies";
if($key == "series") $table = "series"; 

$result = mysqli_query($conn, "select name from ".$table);

?>




<body >

<div class="container">
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
                 <li><img width = '40' height = '40' src='images/newuser1.png' alt=''/></li>
                 <li><p><a href='profile.php'>Login</a></p></li>
                 <li class="last"><i class="edit"> </i></li>
                 <div class="clearfix"> </div>
               </ul>
            </div>

    <br><br><br><br><br><br>
            <div class="content">
      	     <div class="register">
			   <div class="col-md-6 login-left">
			  	 <h3>List</h3>
				 <?php 
				    while($row = mysqli_fetch_assoc($result))  
				    	echo "<div><span><a href = 'single.php?movie=".$row['name']."'><img width = '250' height = '340' src='images/".$row['name'].".jpg' alt='".$row['name']."'/></a><br><br></span></div>";
				 ?>
			   </div>


            <div class="clearfix"> </div>
          </div>
          <div class="clearfix"> </div>
    </div>
<div class="container"> <br>













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