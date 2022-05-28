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
              
			  <li><a href="help.php" >Help</a></li>
              
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
			 <?php
				if(isset($_SESSION["idd"])){
			  ?>

			 &nbsp;&nbsp; <a href="msg.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="background-color:transparent;"><span class="mr-2 icon-chat"></span></a>
			  
			 &nbsp;&nbsp; <a href="logout.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="background-color:transparent;button-hover:white;">
			  
			  <span class="mr-2 icon-unlock" ></span></a>
				
			  <?php

				} 
		?>
				
				
				
            </div>
          </div>

        </div>
      </div>
    </header>
	 <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/.jpg');" id="home-section">

    </section>
	

  
  <div class="container"  >
        <div class="row align-items-center justify-content-center" >
          <div class="col-md-12">
            <div class="mb-5 text-center">
           
 
 <br><br><br>
 <form action='' method='post'>
  <h5 class="h3 d-flex  align-items-center mb-10 text-primary" style='align:center;margin-left:500px;'>PROFILE</h5>
  <?php 
  $id=$_SESSION["idd"];
  $username=$_SESSION["user"];
  
  
  $con=mysqli_connect("localhost","root","","jobnet");

   $r=mysqli_query($con,"select image from registered where  username='$username'");
    if($row=mysqli_fetch_array($r))
	
   echo "<img style='border-radius:48%;width:200px;height:160px;border-color:black;' src='images/$row[0]' >"; 


   ?>
<?php
  $id=$_SESSION["idd"];
   $con=mysqli_connect("localhost","root","","jobnet");
    $r=mysqli_query($con,"select * from registered where id='$id'");
    $row=mysqli_Fetch_row($r);
   {
 ?>
<br><br>
 <table border=0 style="background-color:transparent;color:black;border-width:-0.2px;box-shadow:7px 7px 7px 7px #afabaa;margin-top:-90px;"  align='center' height=50% width=50% cellspacing=0 cellpadding=8>
<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr>
<td STYLE='font-size:18pt;font-weight:bold;align:left;'>Applicant's name</td>
<td STYLE='font-size:18pt;'><?php echo $row[1]; ?></td>
</tr><tr><td></td></tr><tr><td></td></tr>
<tr>
<td STYLE='font-size:18pt;font-weight:bold;align:left;'>Username</td>
<td STYLE='font-size:18pt;'><?php echo $row[5]; ?></td>
</tr><tr><td></td></tr><tr><td></td></tr>
<tr>
<td STYLE='font-size:18pt;font-weight:bold;align:left;'>Gender</td>
<td STYLE='font-size:18pt;'><?php echo $row[2]; ?></td>
</tr><tr><td></td></tr><tr><td></td></tr>
<tr>
<td STYLE='font-size:18pt;font-weight:bold;align:left;'>email</td>
<td STYLE='font-size:18pt;'><?php echo $row[4]; ?></td>
</tr><tr><td></td></tr><tr><td></td></tr>
<tr>
<td STYLE='font-size:18pt;font-weight:bold;align:left;'>Contact No.</td>
<td STYLE='font-size:18pt;'><?php echo $row[3]; ?></td>
</tr>
<tr><td></td></tr><tr><td></td></tr>
</table>
  <?php
  }
  ?> 
   <table align='center'>
   <tr>
   <td><a href='update.php'><input type='button'  value='Update' align='center' style='width:100px; height:35px;background-color:white;color:black;border-radius:50%;box-shadow:5px 5px #afabaa;border-color:black !important;' class="btn btn-primary border-width-6 d-none d-lg-inline-block" ></a>
   </td>
   <td>
<a href='show.php'> &nbsp;&nbsp; <input type='button' value='Applied' align='center' style='width:100px; height:35px;background-color:white;color:black;border-radius:50%;box-shadow:5px 5px #afabaa;border-color:black !important;' class="btn btn-primary border-width-6 d-none d-lg-inline-block" ></a>
</td>
<td>
<a href='show1.php'> &nbsp;&nbsp; <input type='button' value='Saved' align='center' style='width:100px; height:35px;background-color:white;color:black;border-radius:50%;box-shadow:5px 5px #afabaa;border-color:black !important;' class="btn btn-primary border-width-6 d-none d-lg-inline-block" ></a>
</td>
&nbsp;
<td>	<a href='delete.php'>  &nbsp;&nbsp; <input type='button' value='Delete' name='delete' style='width:110px; height:35px;background-color:white;color:black;box-shadow:5px 5px #afabaa;border-radius:50%;border-color:black !important;' class="btn btn-primary border-width-6 d-none d-lg-inline-block" ></a>

 </td>

 </table>

  
    </section>
            
    

</br><br/><br><br><br><br><br><br>

   
   
    
    <footer class="site-footer">

      <a href="#top" class="smoothscroll scroll-top" style="background-color:#121212">
        <span class="icon-keyboard_arrow_up"style="color:#90c317 !important" ></span>
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

