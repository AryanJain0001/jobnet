<!-- viewing  queries-->
<!DOCTYPE html>
<html>
<head>

<title>JobNet</title>
	 <link rel = "icon" href = "images/logo.png" 
        type = "image/logo.png">
			<style>
ul {
	width:100%;

  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow:hidden;
  background-color:grey;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;

}

li a:hover {
  background-color: #111;

}


/* Style the active class (and buttons on mouse-over) */
.active, .li:hover {
  background-color: black;
  color: white;
}
</style>		
</head>
<body>

<header>
<div style="background-color:#afabaa;width:100%;height:20%;">
<img src="images/logo1.png" width='300px' height='100px' style="float:center;margin-left:480px;margin-top:20px;"></img>
</div>
</header>

<div style="width:100%; height:2px;background-color:black">
</div>

<div style="float:left;background-color:#afabaa;width:100%;height:30%;">

<ul>

    
<li><a href="viewcompany.php">COMPANY DETAILS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="admin.php">FILL COMPANY DETAILS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="viewreg.php">RESISTRATION</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewcv.php">APPLIED</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li  ><a href="viewquery.php">QUERIES</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewreplies.php">REPLIES</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewsave.php" style="display:block;">SAVED JOBS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="history.php" style="display:block;">HISTORY</a></li>
</ul>
</div>
<br><br>
<?php
session_start();
 //$id=$_SESSION["idd"];
 $ids=$_REQUEST["a"];
   $con=mysqli_connect("localhost","root","","jobnet");
    $r=mysqli_query($con,"select * from help where username='$ids'");
    $row=mysqli_Fetch_row($r);
  
   if(isset($_POST['rep'])) // when click on reply button
{ 
       $reply= $_POST['reply'];
      $nm= $_POST['nm'];
	 
	   
        $q=mysqli_query($con,"insert into replies(username,reply)
              values('$nm','$reply')");
		 
         if($q)
          {	echo "<script>alert('Your reply to their queries is sent.')
          	window.location.href='viewquery.php'</script>" ;
	          }
          else
	    echo mysqli_error($con);
}

?>
     <form action='' method='post'>

<table border='0' cellspacing=0 cellpadding=12 align='center' style="background:#afabaa; color:white;" width=100% height=100%>
	<tr>
	<td colspan='2'align='center'><font size="6" color='black'>Reply to applicants' queries </td>
	</tr>
	<tr><td width='600px' align='center'><font size="4" >USER NAME:<td width='600px' >
	<input type='text' name='nm' value ='<?php echo $row[1]; ?>' maxlength=6  align='center'style='width:260px;height:30px'></td>
	</tr>
	<tr><td width='600px' align='center'><font size="4">REPLY:<td width='600px'><textarea rows='10' cols='40' name='reply' value=''></textarea></td>
	<tr>
  
	<td align='center' width=50%>
     <input type='submit' name='rep' value='SEND'>
	</td>

   <td width=50% align='center'>
     <input type='reset' value='CANCEL'>
	</td>
</tr>
 </tr>
 </tr>
 </table>
 


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