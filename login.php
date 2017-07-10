<?php

$uri = $_SERVER['REQUEST_URI'];
$pop = (explode("login.php",$uri))[1];
$use = "n";
if($pop == "?popF") $use = "y";

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Movie_store A Entertainment Category Flat Bootstarp Resposive Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Movie_store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />


<script type = "application/x-javascript"> 
addEventListener("load", function() 
						{ 
							setTimeout(hideURLbar, 0); 
						}, false); 

						function hideURLbar()
						{ 
							window.scrollTo(0,1); 
						} 

						function show()
						{
							alert("Login Failed!!");
						}
</script>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
</head>
<body <?php if($use == "y") echo "onload = 'show();' "; ?>>
<div class="container">
	<div class="container_wrap">
		<div class="header_top">
		    <div class="col-sm-3 logo"><a href="index.html"><img src="images/logo.png" alt="" width="82" height="82" /></a></div>
		    <div class="col-sm-6 nav">
			  <ul>
				 <li><span class="simptip-position-bottom simptip-movable" data-tooltip="MOVIE"><a href="movie.html"> </a> </span></li>
				 <li><span class="simptip-position-bottom simptip-movable" data-tooltip="TV"><a href="movie.html"> </a></span></li>
			 </ul>
			</div>

			<div class="col-sm-3 header_right"  >
			   <ul class="header_right_box">
				 <li><img width = "40" height = "40" src="images/newuser1.png" alt=""/></li>
				 <li><p><a href="login.php">Login</a></p></li>
				 <li class="last"><i class="edit"> </i></li>
				 <div class="clearfix"> </div>
			   </ul>
			</div>
			<div class="clearfix"> </div>
	      </div>
	      <div class="content">
      	     <div class="register">
			   <div class="col-md-6 login-left">
			  	 <h3>New Customers</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="register.php">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right">
			  	<h3>Registered Customers</h3>
				<p>If you have an account with us, please log in.</p>

				<form action = "process.php" method = "POST">
				  <div>
					<span>Username<label>*</label></span>
					<input type="text" id = "user" name = "user"> 
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					<input type="password" id = "user" name = "pass"> 
				  </div>
				  <!--<a class="forgot" href="#">Forgot Your Password?</a>-->
				  <input type="submit" id = "btn" value="Login" >
			    </form>

			   </div>	
			   <div class="clearfix"> </div>
		     </div>
           </div>
    </div>
</div>
<div class="container"> 










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
				</div> <br>
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
</html>