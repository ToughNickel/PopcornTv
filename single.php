<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script src="js/responsiveslides.min.js"></script>

<!-- This stylesheet is for small changes -->
<link href="css/small" rel = "stylesheet" type = "text/css">










<?php

session_start();
$uri = $_SERVER['REQUEST_URI'];
$movie = (explode("?movie=",$uri))[1];
$db = mysqli_connect('localhost','root','','popcorntv') or die('Error connecting to MySQL server.');

$result = mysqli_query($db,"select * from description where name = '$movie'") or die("Failed to query ".mysqli_errno());
$result2 = mysqli_query($db,"select * from movies where name = '$movie'") or die("Failed to query ".mysqli_errno());
$row = mysqli_fetch_array($result);
$row2 = mysqli_fetch_array($result2);

?>








<!-- header section -->
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
         <li><img width = "40" height = "40" src="images/newuser1.png" alt=""/></li>
         <li><p><a href="login.php">Login</a></p></li>
         <li class="last"><i class="edit"> </i></li>
         <div class="clearfix"> </div>
         </ul>
      </div>
      <div class="clearfix"> </div>
        </div>













        
     <div class="content">
           <div class="movie_top">



           <style type="text/css">
           		body{
           		<?php 	echo "background-image: url('images/".$movie.".jpg');"; ?>
           		<?php 	echo "background-repeat: no-repeat;" ?>
           		<?php echo "background-size: 100% 100%;" ?>
           		<?php echo "opacity: 0.9;"; ?>
           		}
           </style>



                 <div class="col-md-9 movie_box">
                        <div class="grid images_3_of_2">
                          <div class="movie_image">
                                <span class="movie_rating">3.5</span>
                                <?php echo "<img src='images/".$movie.".jpg'class='img-responsive' alt=''/>" ?>
                            </div>
                            <div class="movie_rate">
                              <div class="rating_desc"><p>Your Vote :</p></div>
                              <form action="" class="sky-form">
                   <fieldset>         
                   <section>
                     <div class="rating">
                    <input type="radio" name="stars-rating" id="stars-rating-5">
                    <label for="stars-rating-5"><i class="icon-star"></i></label>
                    <input type="radio" name="stars-rating" id="stars-rating-4">
                    <label for="stars-rating-4"><i class="icon-star"></i></label>
                    <input type="radio" name="stars-rating" id="stars-rating-3">
                    <label for="stars-rating-3"><i class="icon-star"></i></label>
                    <input type="radio" name="stars-rating" id="stars-rating-2">
                    <label for="stars-rating-2"><i class="icon-star"></i></label>
                    <input type="radio" name="stars-rating" id="stars-rating-1">
                    <label for="stars-rating-1"><i class="icon-star"></i></label>
                   </div>
                  </section>
                  </fieldset>
                   </form>
                   <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="desc1 span_3_of_2">
                          <p class="movie_option"><strong>Date of Release: </strong><?php echo $row2['date_of_release']; ?></p>
                          <p class="movie_option"><strong>Category: </strong><?php echo $row2['genre']; ?></p>
                          <p class="movie_option"><strong>Run Time (min): </strong><?php echo $row2['run_time_in_min']; ?></p>
                          <p class="movie_option"><strong>Actors: </strong><?php echo $row2['actors']; ?></p>
                          <p class="movie_option"><strong>IMdb Rating: </strong><?php echo $row2['IMDB_rating']; ?></p>
                            <p class="movie_option"><strong>Age restriction: </strong>13</p> 
                            <p>Trailer</p>
                        <video width="320" height="240" controls>
  <source src="videos/movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
Your browser does not support the video tag.
</video> 
                            <div class="down_btn"><?php echo "<a class='btn1' href='videos/movie.mp4' download='".$row2['name']."'><span> </span>Download</a>" ?></div>
                         </div>
                        <div class="clearfix"> </div>
                        <p class="m_4"><?php echo $row['descrip']; ?></p>
                        <p>                                   </p><p>Watch It Online!</p><p>                                   </p>
                        <video width="320" height="240" controls>
  <source src="videos/movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
Your browser does not support the video tag.
</video> 
                    <form method="post" action="contact-post.html">
              <div class="to">
                          <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:3%">
              </div>
              <div class="text">
                         <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
                      </div>
                      <div class="form-submit1">
                     <input name="submit" type="submit" id="submit" value="Submit Your Message"><br>
                  </div>

  


              <div class="clearfix"></div>
                    </form>
                    <div class="single">
                    <h1>10 Comments</h1>
                    <ul class="single_list">
                  <li>
                      <div class="preview"><a href="#"><img src="images/2.jpg" class="img-responsive" alt=""></a></div>
                      <div class="data">
                          <div class="title">Smriti  /  2 hours ago  /  <a href="#">reply</a></div>
                          <p>Overall One of the best Action Movies.

Excellent making , good cast & crew selections . Though the escape scene of The Rock and Jason Statham should have been more better but i also liked it But mostly the End scenes were far way better like the previous movies of Fast and Furious Series. Watched each and every movie of Fast And Furious series and hopefully waiting for the 9th one.</p>
                      </div>
                      <div class="clearfix"></div>
                  </li>
                   <li>
                      <div class="preview"><a href="#"><img src="images/3.jpg" class="img-responsive" alt=""></a></div>
                      <div class="data">
                          <div class="title">Wernay  /  2 hours ago  /  <a href="#">reply</a></div>
                          <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent </p>
                      </div>
                      <div class="clearfix"></div>
                  </li>
                   <li>
                      <div class="preview"><a href="#"><img src="images/4.jpg" class="img-responsive" alt=""></a></div>
                      <div class="data">
                          <div class="title">mr.dev  /  2 hours ago  /  <a href="#">reply</a></div>
                          <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum. qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,</p>
                      </div>
                     <div class="clearfix"></div>
                  </li>
                <li class="middle">
                      <div class="preview"><a href="#"><img src="images/5.jpg" class="img-responsive" alt=""></a></div>
                      <div class="data-middle">
                          <div class="title">Wernay  /  2 hours ago  /  <a href="#">reply</a></div>
                          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                      </div>
                      <div class="clearfix"></div>
                  </li>
                  <li class="last-comment">
                      <div class="preview"><a href="#"><img src="images/6.jpg" class="img-responsive" alt=""></a></div>
                      <div class="data-last">
                          <div class="title">mr.dev  /  2 hours ago  /  <a href="#">reply</a></div>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit </p>
                      </div>
                      <div class="clearfix"></div>
                  </li>
                   <li>
                      <div class="preview"><a href="#"><img src="images/7.jpg" class="img-responsive" alt=""></a></div>
                      <div class="data">
                          <div class="title">denpro  /  2 hours ago  /  <a href="#">reply</a></div>
                          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                      </div>
                      <div class="clearfix"></div>
                  </li>
              </ul>
                      </div>
                      </div>
                      <div class="col-md-3">
                        <div class="movie_img"><div class="grid_2">
              <img src="images/pic6.jpg" class="img-responsive" alt="">
              <div class="caption1">
                  <ul class="list_5 list_7">
                      <li><i class="icon5"> </i><p>3,548</p></li>
                    </ul>
                    <i class="icon4 icon6 icon7"> </i>
                    <p class="m_3">Guardians of the Galaxy</p>
              </div>
                </div>
               </div>
                          <div class="grid_2 col_1">
              <img src="images/pic2.jpg" class="img-responsive" alt="">
              <div class="caption1">
                <ul class="list_3 list_7">
                    <li><i class="icon5"> </i><p>3,548</p></li>
                  </ul>
                  <i class="icon4 icon7"> </i>
                  <p class="m_3">Guardians of the Galaxy</p>
              </div>
               </div>
                <div class="grid_2 col_1">
              <img src="images/pic9.jpg" class="img-responsive" alt="">
              <div class="caption1">
                <ul class="list_3 list_7">
                    <li><i class="icon5"> </i><p>3,548</p></li>
                  </ul>
                  <i class="icon4 icon7"> </i>
                  <p class="m_3">Guardians of the Galaxy</p>
              </div>
               </div>
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