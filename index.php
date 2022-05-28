<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>JobNet</title>
	 <link rel = "icon" href = "images/logo.png" 
        type = "image/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">
   
          
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">    
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary"  role="status">
      <span  class="sr-only">Loading...</span>
    </div>
  </div>
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    




    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-left">
          <div class="site-logo col-6"><a href="index.php" >JobNet</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.php" class="nav-link active">Home</a></li>
              <li><a href="contact.php">Contact</a></li>
              
			  <li><a href="help.php" >Help</a></li>
			  

            </ul>
          </nav>
       
         <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
			  <a href="signup1.php" style="border-color:#90c317;margin-left:-50px;" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add user"></span>Sign Up</a>

              <?php
				if(isset($_SESSION["idd"])){
			  ?>

			 &nbsp;&nbsp; <a href="msg.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="background-color:transparent;"><span class="mr-2 icon-chat"></span></a>
			  
			 &nbsp;&nbsp; <a href="logout.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="background-color:transparent;button-hover:white;">
			  
			  <span class="mr-2 icon-unlock" ></span></a>
				
			 &nbsp;&nbsp; <a href="profile.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="background-color:transparent;">
			  
			  <span align='center' class="mr-2 icon-person"></span></a>
				
				
				
				<?php

				} 
				else { ?>
				
			 <a href="login1.php" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block" style="background-color:transparent;border-color:#90c317;font-color:white;">
			  
			  <span class="mr-2 icon-lock_outline"></span>Log In</a>
				<?php } ?>   
				      
                    
</div>




				</div>
            

        </div>
      </div>
    </header>

    <!-- HOME --;-->
  
	   
             <?php
				if(isset($_SESSION["idd"])){
			  ?>
      <section class="home-section section-hero overlay bg-image" id="home-section">
	   <video autoplay muted loop playsinline style='width:100%; object-fit:over;'>
	   <source src='images/video.mp4' type='video/mp4' >
	   </video>
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
			<br><br>
		
              <h1 class="text-white font-weight-bold" style="margin-top:-800px;" >The Easiest Way To Get Your Dream Job</h1>
              <p></p>
            </div>
			
            <form action='search.php' method="post" class="search-jobs-form">
              <div class="row mb-5" style="margin-left:30px;">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0" style="float:left;margin-top:-700px;margin-left:70px;">
                  
			 <?php
			$con=mysqli_connect("localhost","root","");
			$s=mysqli_select_db($con,"jobnet");
		
			 echo "<select name='drop' class='selectpicker' data-style='btn-white btn-lg' data-width='100%' data-live-search='true' title='job title' >";
			
		 
			$r=mysqli_query($con,"select distinct(field)  from company ");
			while($row=mysqli_fetch_array($r))
			{
		     $f=$row['0']; 
			 echo "<option>$f</option>";
			
			}
			echo "</select>";
			?> 
			<h3 style="width:70%;margin-top:-700px;"></h4>
		
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0" style="float:center;margin-top:-700px;">
                  <?php
			$con=mysqli_connect("localhost","root","");
			$s=mysqli_select_db($con,"jobnet");
		
			 echo "<select name='nm' class='selectpicker' data-style='btn-white btn-lg' data-width='100%' data-live-search='true' title='location' >";
			
		 
			$r=mysqli_query($con,"select distinct(location)  from company ");
			while($row=mysqli_fetch_array($r))
			{
		     $f=$row['0']; 
			  echo "<option>anywhere</option>";
			 echo "<option>$f</option>";
			
			}
			echo "</select>";
			?>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0" style="float:right;margin-top:-700px;">
                  <select name='time' class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type">
                    <option>Part Time</option>
                    <option>Full Time</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0" style="float:right;margin-top:-700px;margin-left:870px;">
          <input type='submit' value='SEARCH' name='go' style='width:140px; height:52px; background-color:#121212'  class="btn btn-primary border-width-2 d-none d-lg-inline-block" >
                </div>
              </div>
             
            </form>
			
          </div>
        </div>
      </div>
<br><br>
      

    </section>
    <?php

				} 
				else { ?>

				  <section class="home-section section-hero overlay bg-video"  id="home-section">  <!-- video-->
       <video autoplay muted loop playsinline style='width:100%; object-fit:over;'>
	   <source src='images/video.mp4' type='video/mp4' >
	   </video>
	   <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
			<br><br>
		
              <h1 class="text-white font-weight-bold" style="margin-top:-800px;">The Easiest Way To Get Your Dream Job</h1>
              <p></p><br><br><br><br><br><br><br><br><br><br><br>
			 
            </div>
			</div>
		
	      
	   </section>
				<?php } ?>
				
    <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('images/pic.jpg');">
      <div class="container">
        			<h2 align='center' style="font-weight:bold;color:#121212;">ABOUT US</h2>
			<p style="color:white;font-size:24px">JOBNET is a job consultancy website designed for the people who require job in any field and for the companies who require employees. Jobnet  recruit across various industry sectors. Here a person can choose among various fields and this is a place where one can find job according to their requirement. Jobnet is the pioneer of organised recruitment in India. Our roots in management consulting enable us to bring a unique approach to recruitment. </p>

      </div>
    </section>

    <section class="site-section" style="background-color:white;">
      <div class="container"  >

        <div class="row mb-5 justify-content-center" style="background-color:white;">
          <div class="col-md-7 text-center"  >
            <h3 class="section-title mb-2" > Job Lists</h3>
          </div>
        </div>
        
        <ul class="job-listings mb-5" style="border-color:#fff;background-color:white;">
          <?php
			include('db.php');
			
			$r=mysqli_query($con,"select * from company where id<11 &&  deadline>=current_date");
			while($row=mysqli_fetch_array($r)){
		  
		  ?>
		  <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center" style="border-color:#90c317;">
            <a href="job-single.php?a=<?php echo $row[0]; ?>"></a>
            <div class="job-listing-logo">
              <img src="images/<?php  echo $row[1];?>" alt="" style="border-radius:50%;" class="img-fluid">
            </div>

            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
              <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                <h3 style="font-size:28px;"><?php echo $row[3]; ?></h3>
                <strong><?php echo $row[2]; ?></strong>
              </div>
              <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                <span class="icon-room" style="color:red;"></span> 
					<?php  echo $row[5]; ?>
				</div>
              <div class="job-listing-meta"  >
                <span class="badge badge-success" style="background-color:#90c317;"><?php echo $row[6]; ?></span>
              </div>
            </div>
            
          </li><br><br><br>
			<?php } ?>
			
          
          

          
        </ul>

        <div class="row pagination-wrap">
          <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
            <span>Showing 10 Jobs</span>
          </div>
          <div class="col-md-6 text-center text-md-right">
            <div class="custom-pagination ml-auto">
              <a href="index.php" class="prev" >Prev</a>
              <div class="d-inline-block">
              <a href="index.php" class="active">1</a>
              <a href="index2.php">2</a>
              <a href="index3.php" >3</a>
 
              </div>
              <a href="index2.php" class="next">Next</a>
            </div>
          </div>
        </div>

      </div>
    </section>

       
    <section class="site-section py-4" >
      <div class="container">
  
        <div class="row align-items-center">
          <div class="col-12 text-center mt-4 mb-5">
            <div class="row justify-content-center">
              <div class="col-md-7">
                <h2 class="section-title mb-2">Company We've Helped</h2>
                <p class="lead" style="color:#90c317;">There are various companies we've helped in getting employees and also many individuals to get there dream job.<i class="icon-heart text-danger" aria-hidden="true"></i></p>
              </div>
            </div>
            
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_mailchimp.svg" alt="Image" class="img-fluid logo-1">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_paypal.svg" alt="Image" class="img-fluid logo-2">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_stripe.svg" alt="Image" class="img-fluid logo-3">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_visa.svg" alt="Image" class="img-fluid logo-4">
          </div>

          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_apple.svg" alt="Image" class="img-fluid logo-5">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_tinder.svg" alt="Image" class="img-fluid logo-6">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_sony.svg" alt="Image" class="img-fluid logo-7">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_airbnb.svg" alt="Image" class="img-fluid logo-8">
          </div>
		  <marquee behavior="scroll" direction="left" style="font-size:20px;color:black;">
             <?php
			$con=mysqli_connect("localhost","root","");
			$s=mysqli_select_db($con,"jobnet");
		   $r=mysqli_query($con,"select logo  from company ");
			while($row=mysqli_fetch_array($r))
			{
		     $f=$row['0']; 
			 echo "<img  style='width:150px; height:100px;' src='images/$f' >&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; ";
		
			}
		
			?></marquee>
        </div>
      </div>
    </section>


    <section class="bg-light pt-5 testimony-full" style="background-color:#121212;border-color:#90c317;">
	 <marquee behavior="scroll" direction="left" scrollamount="7" style="font-size:20px;color:black;">
             <?php
			$con=mysqli_connect("localhost","root","");
			$s=mysqli_select_db($con,"jobnet");
		   $r=mysqli_query($con,"select count(distinct id)  from company ");
			while($row=mysqli_fetch_array($r))
			{
		     $f=$row['0']; 
			
			 echo "<style='font-size:20px;'>Numbers of companies we are working with $f " ;
			}
		
			?></marquee>
			<br>
			<marquee behavior="scroll" direction="right" style="font-size:20px;color:black;">
			<?php
			$con=mysqli_connect("localhost","root","");
			$s=mysqli_select_db($con,"jobnet");
		   $r=mysqli_query($con,"select count(distinct id)  from registered ");
			while($row=mysqli_fetch_array($r))
			{
		     $f=$row['0']; 
			 echo "Numbers of candidates  working with us $f " ;
			}
		
			?>
	</marquee>
        
        <div class="owl-carousel single-carousel" style="background-color:#121212;">

        
         <div class="container" style="background-color:#121212;">
            <div class="row">
              <div class="col-lg-6 align-self-center text-center text-lg-left">
                <blockquote>
                  <p>&ldquo;I have always been very confident and very upbeat about the future potential of India.</br>I think it is a great country with great Potential.&rdquo;</p>
                  <p style="color:#90c317;"><cite> &mdash; Ratan N. Tata, @TATA</cite></p>
                </blockquote>
              </div>
              <div class="col-lg-6 align-self-center text-center text-lg-left">
                <img src="images/ratantata.jpg" alt="Image" class="img-fluid mb-0">
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 align-self-center text-center text-lg-left">
                <blockquote>
                  <p>&ldquo;Creativity is seeing the same thing, but thinking differently.&rdquo;</p>
                  <p style="color:#90c317;"><cite> &mdash; A.P.J. Abdul Kalam </cite></p>
                </blockquote>
              </div>
              <div class="col-lg-6 align-self-end text-center text-lg-right">
                <img src="images/apj.jpg" alt="Image" class="img-fluid mb-0">
              </div>
            </div>
          </div>

      </div>

    </section>

    <section class="pt-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/pic.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
            <h2 class="text-white">Get The Mobile Apps</h2>
            <p class="mb-5 lead text-white">Our app is available to everyone.</br>We would suggest you to download them from the store for better experience.<i class="icon-heart text-danger" aria-hidden="true"></i> </p>
            <p class="mb-0">
              <a href="#" class="btn btn-dark btn-md px-4 border-width-2" style="background-color:#121212;color:#90c317;"><span class="icon-apple mr-3" ></span>App Store</a>
              <a href="#" class="btn btn-dark btn-md px-4 border-width-2" style="background-color:#121212;color:#90c317;"><span class="icon-android mr-3"></span>Play Store</a>
            </p>
          </div>
          <div class="col-md-6 ml-auto align-self-end">
            <img src="images/apps.jpg"  class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    
    <footer class="site-footer">

      <a href="#top" class="smoothscroll scroll-top" style="background-color:#121212">
        <span class="icon-keyboard_arrow_up" style="color:#90c317 !important"></span>
      </a>

      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3 style="color:#fff;">Search Trending</h3>
            <ul class="list-unstyled">
              <li><a href="hs.php" >Hotel Staff</a></li>
              <li><a href="one.php">Designing</a></li>
              <li><a href="free.php">Freelancing</a></li>
              <li><a href="food.php">Food</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3 style="color:#fff;">Company</h3>
            <ul class="list-unstyled">
              <li><a href="aboutus.php">About Us</a></li>
             
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3 style="color:#fff;">Support</h3>
            <ul class="list-unstyled">
                <li><a href="tos.php">Terms of Service</a></li>
				<li><a href="review.php">Rate Us</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3 style="color:#fff;">Contact Us</h3>
            <div class="footer-social">
              <a href="#" style="background-color:black"><span class="icon-facebook"></span></a>
              <a href="#" style="background-color:black;"><span class="icon-twitter"></span></a>
              <a href="#" style="background-color:black;"><span class="icon-instagram"></span></a>
              <a href="#" style="background-color:black;"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p class="copyright" style="color:white;"><small>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | </a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
          </div>
        </div>
      </div>
    </footer>
  
  </div>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    
    <script src="js/bootstrap-select.min.js"></script>
    
    <script src="js/custom.js"></script>

     
  </body>
</html>