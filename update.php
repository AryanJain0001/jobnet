
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
           
            
		<?php
session_start();
 $id=$_SESSION["idd"];
   $con=mysqli_connect("localhost","root","","jobnet");
    $r=mysqli_query($con,"select * from registered where id='$id'");
    $row=mysqli_Fetch_row($r);
  
   if(isset($_POST['Update'])) // when click on Update button
{ 
       $sp= $_POST['sp'];
      $nm= $_POST['nm'];
	  $r1=$_POST['r1'];
	  $pno=$_POST['pno'];
	  $email=$_POST['email'];
	  $uname=$_POST['uname'];
	  $pass=$_POST['pass'];
	   $sname=$_POST['sname'];
	    $cname=$_POST['cname'];
		 $ten=$_POST['ten'];
		  $twelve=$_POST['twelve'];
		   $cor=$_POST['cor'];
		    $col=$_POST['col'];
			 $image=$_POST['image'];
			  $resume=$_POST['resume'];
	   
	  $check=mysqli_query($con," select username and sp from registered where username='$uname' and sp='$sp'");
$res=mysqli_num_rows($check);
if($res>0)
     {
	    $edit ="UPDATE registered SET name='$nm', gender='$r1' ,contact='$pno', email='$email'  , password='$pass', sname='$sname' , cname='$cname' , cor='$cor' , col='$col' , image='$image' , resume='$resume'  where sp='$sp' and username='$uname'";
	     $query_run = mysqli_query($con,$edit);
	
	       if($query_run)
			{     
		       echo "<script>alert('Details updated successfully.')
				window.location.href='index.php'</script>";
	   
	  
			} 
	      else
			{  echo "<script>alert('Details not updated .')
                window.location.href='update.php' </script>"; 

}}
         else { echo "<script>alert('Username/Security pin not in existence .')
                window.location.href='update.php' </script>"; 
				}
}

?>
		
		
  <form action='' method='post'>
</br></br> <table align='center' border=0 style="background:transparent; color:black;box-shadow:7px 7px 7px 2px #afabaa;" cellspacing=0 rules='none'cellpadding=2 width=65% height=80%>

<tr> <td colspan ='2' align='center'> <font size="5" style="color:#90c317;">UPDATE YOUR DETAILS </td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr>
<td colspan='2'>
<tr> <td colspan ='2' align='center'> <h2 style="font-size:16px;margin-left:100px;color:red !important" class="h3 d-flex  align-items-center mb-10 text-primary"> NOTE: You need to enter your security pin and username to do changes. </h2></td></tr>

	<tr><td></td></tr>
<tr><td></td></tr>
	 <tr>
    <td >Security Pin</td>
	<td colspan='2' ><input style="caret-color:#90c317;" type='text' placeholder='Enter Here' required name='sp'  value=''></td>
  </tr>
 <tr><td></td></tr>
<tr><td></td></tr>  <tr><td></td></tr>  <tr><td></td></tr>
<tr>
    <td >Username</td>
	<td colspan='2'><input style="caret-color:#90c317;" type='text'  required name='uname' placeholder='Enter Here'  value=''></td>
  </tr>
  <tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>  <tr><td></td></tr>
 
<tr>
    <td>Applicant's Name</td>
	<td colspan='2'><input style="caret-color:#90c317;" type='text'  required name='nm' value='<?php echo $row[1]; ?>'></td>
  </tr>
  <tr><td></td></tr>
<tr><td></td></tr>  <tr><td></td></tr>  <tr><td></td></tr>

 <tr>
    <td >Gender</td>
	<td colspan='5'>
	 <input type='radio'   required name='r1' <?php if($row[2]=="Male") echo "checked";?>  value='Male'>Male
	<input type='radio'  required name='r1' <?php if($row[2]=="Female") echo "checked";?>    value='Female'>Female
     </td> 
</tr>
  <tr><td></td></tr>  <tr><td></td></tr>  <tr><td></td></tr>  <tr><td></td></tr>
   <tr>
    <td>Contact Number</td>
	<td colspan='2'><input style="caret-color:#90c317;" type='text'  required name='pno' value='<?php echo $row[3]; ?>'></td>
  </tr>
  <tr><td></td></tr>
<tr><td></td></tr>  <tr><td></td></tr>  <tr><td></td></tr>
   <tr>
    <td >Email</td>
	<td colspan='2'><input  style="caret-color:#90c317;" type='text'  required name='email' value='<?php echo $row[4]; ?>'></td>
  </tr>
  <tr><td></td></tr>
<tr><td></td></tr>  <tr><td></td></tr>  <tr><td></td></tr>
  	
  <tr>
    <td >Password</td>
	<td colspan='2'><input style="caret-color:#90c317;"  type='password' placeholder='Cannot be displayed'  required name='pass' value=''></td>
  </tr>
  <tr><td></td></tr>
<tr><td></td></tr>
     <tr><td></td></tr>  <tr><td></td></tr> 
<tr>
    <td>School Name</td>
	<td colspan='2'><input style="caret-color:#90c317;" type='text'  required name='sname' value='<?php echo $row[7]; ?>'></td>
  </tr>
  <tr><td></td></tr>
<tr><td></td></tr>  <tr><td></td></tr>  <tr><td></td></tr>
<tr>
    <td>College Name</td>
	<td colspan='2'><input style="caret-color:#90c317;" type='text'  required name='cname' value='<?php echo $row[8]; ?>'></td>
  </tr>
  <tr><td></td></tr>
<tr><td></td></tr>  <tr><td></td></tr>  <tr><td></td></tr>
<tr>
    <td>10th %</td>
	<td colspan='2'><input style="caret-color:#90c317;" type='text'  required name='ten' value='<?php echo $row[9]; ?>'></td>
  </tr>
  <tr><td></td></tr>
<tr><td></td></tr>  <tr><td></td></tr>  <tr><td></td></tr>

<tr>
    <td>12%</td>
	<td colspan='2'><input style="caret-color:#90c317;" type='text'  required name='twelve' value='<?php echo $row[10]; ?>'></td>
  </tr>
  <tr><td></td></tr>
<tr><td></td></tr>  <tr><td></td></tr>  <tr><td></td></tr>

<tr>
    <td>Course</td>
	<td colspan='2'><input style="caret-color:#90c317;" type='text'  required name='cor' value='<?php echo $row[11]; ?>'></td>
  </tr>
  <tr><td></td></tr>
<tr><td></td></tr>  <tr><td></td></tr>  <tr><td></td></tr>
<tr>
    <td>College%</td>
	<td colspan='2'><input style="caret-color:#90c317;" type='text'  required name='col' value='<?php echo $row[13]; ?>'></td>
  </tr>
  <tr><td></td></tr>
<tr><td></td></tr>  <tr><td></td></tr>  <tr><td></td></tr>
<tr>
    <td>Profile photo</td>
	<td colspan='2'><input  type='file'  required name='image' value='<?php echo $row[13]; ?>'></td>
  </tr>
  <tr><td></td></tr>
<tr><td></td></tr>  <tr><td></td></tr>  <tr><td></td></tr>
<tr>
    <td>Resume</td>
	<td colspan='2'><input type='file'  required name='resume' value='<?php echo $row[14]; ?>'></td>
  </tr>
  <tr><td></td></tr>
<tr><td></td></tr>  <tr><td></td></tr>  <tr><td></td></tr>
	 <tr><td></td></tr>  <tr><td></td></tr>  <tr><td></td></tr>  <tr><td></td></tr>  <tr><td></td></tr>
  <tr>
       <td align='center'width=50% ><input type='submit' value='SAVE' name='Update'></a></td>
   <td  align='center' width=50%>
     <input type='reset' value='CANCEL'>
	</td>


</tr>
</table>
</form>
</br><br/>
  

   
   <footer class="site-footer">

      <a href="#top" class="smoothscroll scroll-top">
        <span class="icon-keyboard_arrow_up"></span>
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