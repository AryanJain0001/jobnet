<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>JobNet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel = "icon" href = "images/logo.png" 
        type = "image/logo.png">
    
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
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
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
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index.html">JobNet</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.php" class="nav-link ">Home</a></li>
             
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>
	
	<?php
				
			include('db.php');
			$id=$_REQUEST["a"];
			$r=mysqli_query($con,"select * from company where id='$id'");
			$row=mysqli_fetch_row($r);
				
		  
				?>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold"><?php  echo $row[3];?></h1>
            <div class="custom-breadcrumbs">
              <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
              <a href="#">Job</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong><?php  echo $row[3];?></strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section class="site-section">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center" >
              <div class="border p-2 d-inline-block mr-3 rounded" style="height:150px;">
                
				
				<img  src="images/<?php echo $row[1]; ?>"   alt="Image">
				</br><br><br></br></br></br></br></br></br></br></br></br></br>
              </div>
              <div>
                <h1><?php  echo $row[3];?></h1>
                <div>
                  <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>
				  <?php  echo $row[2];?></span>
                  <span class="m-2"><span class="icon-room mr-2"></span><?php  echo $row[5];?></span>
                  <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">
				  <?php  echo $row[6];?></span></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4" >
            <div class="row" style="width:600px;">
             
			 </br><br><br><br>
          

				<?php
					if(isset($_SESSION["idd"]))
					{
				?>
				
			 
	
          <a href="save.php?a=<?php  echo $row[2];?>&b=<?php echo $row[3]; ?>&c=<?php echo $row[5]; ?>" class="btn btn-block btn-light btn-md" style="border-color:white;width:150px;height:60px;"><span class="icon-heart-o mr-2 text-danger" ></span>Save Job</a>

                <a href="cv.php?a=<?php  echo $row[2];?>&b=<?php echo $row[3]; ?>&c=<?php echo $row[5]; ?>" class="btn btn-block btn-primary btn-md" style="width:150px; height:60px; ">Apply Now</a>
					<?php } else { ?>
		<a href="save.php?a=<?php  echo $row[2];?>&b=<?php echo $row[3]; ?>&c=<?php echo $row[5]; ?>" class="btn btn-block btn-light btn-md" style="border-color:white;width:150px;height:60px;"><span class="icon-heart-o mr-2 text-danger" ></span>Save Job</a>
				
				<a href="signup1.php" class="btn btn-block btn-primary btn-md" style="background-color:#90c317;border-color:#90c317;width:150px;height:60px;margin-top:-1px;">Apply Now</a>
					
					<?php  }  ?> 
			
		
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="mb-5">
              <figure class="mb-5"><img src="images/<?php echo $row[7];?>" alt="Image" class="img-fluid rounded"></figure>
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job Description</h3>
              <p>
			  <?php  echo $row[14];?></p>
            </div>
            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary">
			  <span class="icon-rocket mr-3"></span>Requirements</h3>
              <ul class="list-unstyled m-0 p-0">
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php  echo $row[15];?></span></li>
            </div>

            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Education + Experience</h3>
              <ul class="list-unstyled m-0 p-0">
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php  echo $row[16];?></span></li>
              </ul>
            </div>

            

            <div class="row mb-5">
              <div class="col-6">
                <a href="#" class="btn btn-block btn-light btn-md" style="border-color:transparent;"><span class="icon-heart-o mr-2 text-danger" "></span>Save Job</a>
              </div>
              <div class="col-6">
              <?php
					if(isset($_SESSION["idd"]))
					{
				?>
                <a href="cv.php?a=<?php  echo $row[2];?>&b=<?php echo $row[3]; ?>&c=<?php echo $row[5]; ?>"  style="background-color:#90c317;border-color:#90c317;" class="btn btn-block btn-primary btn-md">Apply Now</a>
					<?php } else { ?>
					
				<a href="signup1.php" class="btn btn-block btn-primary btn-md" style="background-color:#90c317;border-color:#90c317;" >Apply Now</a>
					
					<?php  }  ?>               </div>
            </div>

          </div>
          <div class="col-lg-4" >
            <div class="bg-light p-3 border rounded mb-4" >
              <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
              <ul class="list-unstyled pl-3 mb-0">
                <li class="mb-2"><strong class="text-black">Published on:&nbsp</strong><?php  echo $row[8];?></li>
                <li class="mb-2"><strong class="text-black">Vacancy:&nbsp</strong><?php  echo $row[9];?></li>
                <li class="mb-2"><strong class="text-black">Employment Status:&nbsp</strong><?php  echo $row[6];?></li>
                <li class="mb-2"><strong class="text-black">Experience:&nbsp</strong><?php  echo $row[10];?></li>
                <li class="mb-2"><strong class="text-black">Job Location:&nbsp</strong><?php  echo $row[5];?></li>
                <li class="mb-2"><strong class="text-black">Salary:&nbsp</strong><?php  echo $row[11];?></li>
                <li class="mb-2"><strong class="text-black">Gender:&nbsp</strong><?php  echo $row[12];?></li>
                <li class="mb-2"><strong class="text-black">Application Deadline:&nbsp</strong><?php  echo $row[13];?></li>
              </ul>
            </div>

            <div class="bg-light p-3 border rounded">
              <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
              <div class="px-3">
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook" style="color:#121212;"></span></a>
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter" style="color:#121212;"></span></a>
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin" style="color:#121212;"></span></a>
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest" style="color:#121212;"></span></a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="site-section" id="next">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">JOB LIST</h2>
          </div>
        </div>
        
        <ul class="job-listings mb-5" style="border-color:#fff;background-color:white;">
         <?php
			include('db.php');
			
			$r=mysqli_query($con,"select * from company  order by id desc limit 6");
			while($row=mysqli_fetch_array($r)){
				if($id==$row[0]){
					;
				}
				else{
					
		  
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
		  
			<?php } } ?>
			
          
          
        </ul>

        <div class="row pagination-wrap">
          <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
            <span>Showing 5 other Jobs</span>
          </div>
         
        </div>

      </div>
    </section>
    

    <section class="bg-light pt-5 testimony-full" style="background-color:#121212;border-color:#90c317;">
	 <marquee behavior="scroll" direction="left" style="font-size:20px;color:#90c317;">
             <?php
			$con=mysqli_connect("localhost","root","");
			$s=mysqli_select_db($con,"jobnet");
		   $r=mysqli_query($con,"select count(distinct id)  from company ");
			while($row=mysqli_fetch_array($r))
			{
		     $f=$row['0']; 
			 echo "Numbers of companies we are working with $f " ;
			}
		
			?></marquee>
			<br>
			<marquee behavior="scroll" direction="right" style="font-size:20px;color:#90c317;">
			<?php
			$con=mysqli_connect("localhost","root","");
			$s=mysqli_select_db($con,"jobnet");
		   $r=mysqli_query($con,"select count(distinct id)  from registered ");
			while($row=mysqli_fetch_array($r))
			{
		     $f=$row['0']; 
			 echo "        Numbers of candidates  working with us $f " ;
			}
		
			?>
	</marquee>
        
        <div class="owl-carousel single-carousel" style="background-color:#121212;">

        
          <div class="container">
            <div class="row">
              <div class="col-lg-6 align-self-center text-center text-lg-left">
                <blockquote>
                  <p>&ldquo;I have always been very confident and very upbeat about the future potential of India.</br>I think it is a great country with great Potential.&rdquo;</p>
                  <p><cite> &mdash; Ratan N. Tata, @TATA</cite></p>
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
                  <p><cite> &mdash; A.P.J. Abdul Kalam </cite></p>
                </blockquote>
              </div>
              <div class="col-lg-6 align-self-end text-center text-lg-right">
                <img src="images/apj.jpg" alt="Image" class="img-fluid mb-0">
              </div>
            </div>
          </div>

       </div>

    </section>

    <section class="pt-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
            <h2 class="text-white">Get The Mobile Apps</h2>
            <p class="mb-5 lead text-white">Our app is available to everyone.</br>We would suggest you to download them from the store for better experience.<i class="icon-heart text-danger" aria-hidden="true"></i> </p>
            <p class="mb-0">
              <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-apple mr-3"></span>App Store</a>
              <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-android mr-3"></span>Play Store</a>
            </p>
          </div>
          <div class="col-md-6 ml-auto align-self-end">
            <img src="images/apps.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    
    <footer class="site-footer">

      <a href="#top" class="smoothscroll scroll-top" style="background-color:#121212;">
        <span class="icon-keyboard_arrow_up" style="color:#90c317 !important "></span>
      </a>

       <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Search Trending</h3>
            <ul class="list-unstyled">
              <li><a href="hs.php">Hotel Staff</a></li>
              <li><a href="one.php">Designing</a></li>
              <li><a href="free.php">Freelancing</a></li>
              <li><a href="food.php">Food</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Company</h3>
            <ul class="list-unstyled">
              <li><a href="aboutus.php">About Us</a></li>
                <li><a href="viewreview.php">View Reviews and Ratings</a></li>

            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Support</h3>
            <ul class="list-unstyled">
                <li><a href="tos.php">Terms of Service</a></li>
				<li><a href="review.php">Rate Us</a></li>

            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Contact Us</h3>
            <div class="footer-social">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small>
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