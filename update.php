<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script src="js/responsiveslides.min.js"></script>

<!-- This stylesheet is for small changes -->
<link href="css/small" rel = "stylesheet" type = "text/css">
<link rel="stylesheet" type="text/css" href="css/style">




<div class="container">
	<div class="container_wrap">
		<div class="header_top">
		    <div class="col-sm-3 logo"><a href="index.html"><img src="images/logo.png" alt=""/></a></div>
		    <div class="col-sm-6 nav">
			  <ul>
				 <li><span class="simptip-position-bottom simptip-movable" data-tooltip="TV"><a href="movie.html"> </a> </span></li>
				 <li><span class="simptip-position-bottom simptip-movable" data-tooltip="MOVIES"><a href="movie.html"> </a></span></li>
			 </ul>
			</div>
			<div class="col-sm-3 header_right">
			   <ul class="header_right_box">
				 <li><img width = "40" height = "40" src="images/toughnickel.png" alt=""/></li>
				 <li><p><a href="profile.php?username=toughnickel">ToughNickel</a></p></li>
				 <li class="last"><i class="edit"> </i></li>
				 <div class="clearfix"> </div>
			   </ul>
			</div>
			<div class="clearfix"> </div>
	    </div>
	      <div class="clearfix"> </div>
	</div>
</div>
<div class = "container">


<div class="content">
      	     <div class="register">


		  	  <form name = "register" action = "up.php" method = "POST" enctype="multipart/form-data"> 
				 <div class="register-top-grid">
					<h3>Details To Be Filled</h3>

					 <div>
						<span>Movie Name<label>*</label></span>
						<input type="text" name = "moviename" required autocomplete = "Movie Name"> 
					 </div>

					 <div>
						 <span>Date of release<label>*</label></span>
						 <input type="text" name = "release" required autocomplete="2017-07-06"> 
					 </div>

					 <div>
						 <span>Actors<label></label></span>
						 <input type="text" name = "actors" required autocomplete="--Actors--"> 
					 </div>

					 <div>
						 <span>Genre(s)<label></label></span>
						 <input type="text" name = "genre" required autocomplete="Action Comedy"> 
					 </div>

					 <div>
						 <span>IMdb Rating (out of 10.0)<label></label></span>
						 <input type="text" name = "rating" required autocomplete="0.0"> 
					 </div>

					 <div>
						 <span>Run time (in min)<label></label></span>
						 <input type="text" name = "runtime" required autocomplete="100"> 
					 </div>

					 <div>
						 <span>Description<label></label></span>
						 <TEXTAREA ROWS=8 COLS=69 name = "descrip" id = "descrip"></TEXTAREA>
						 <span>Select image to upload:</span>
    					<input type="file" name="image" id="image">
					 </div>

					 <div class="clearfix"> </div>
					 </div>
				     
					 </div>
					 <!--<label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required />-->
				
				<div class="clearfix"> </div>
				<div class="register-but">
				
					   <input id = "update" type="submit" value="SUBMIT">
					   <div class="clearfix"> </div>
					   <div class="clearfix"> </div>
				   </form>


				</div>





<!-- footer section -->
 <footer id="footer">
  <div id="footer-3d">
    <div class="gp-container">
      <span class="first-widget-bend"></span>
    </div>    
  </div>
    <div id="footer-widgets" class="gp-footer-larger-first-col">
    <div class="gp-container">
            <div class="footer-widget footer-1">
              <div class="wpb_wrapper">
          <img src="images/logo2.jpg" alt="PopCornTv"/>
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