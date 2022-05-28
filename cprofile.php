<?php 
session_start();
?>
<!DOCTYPE html>
 <html>
 <head>
 <title>JobNet</title>
	 <link rel = "icon" href = "images/logo.png" 
        type = "image/logo.png">
  <link rel="stylesheet" href="fonts/line-icons/style.css">
   <link rel="stylesheet" href="fonts/icomoon/style.css">
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
 <header>
<div style="background-color:#afabaa;width:100%;height:20%;">
 	 &nbsp;&nbsp; <a style="text-decoration:none;color:#90c317" href="comdelete.php" ><button class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="background-color:transparent;button-hover:white;float:right;margin-right:10px;width:30px;height:30px;font-size:18px;border-color:transparent;"><span align='center' style='color:red;' class='mr-2 icon-power-off'></span></a></button>
 	 &nbsp;&nbsp; <a style="text-decoration:none;color:#90c317" href="commsg.php" ><button class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="background-color:transparent;button-hover:white;float:right;margin-right:10px;width:30px;height:30px;font-size:18px;border-color:transparent;"><span align='center' style='color:#90c317;' class='mr-2 icon-chat'></span></a></button>
 	 &nbsp;&nbsp; <a style="text-decoration:none;color:#90c317" href="comhelp.php" ><button class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="background-color:transparent;button-hover:white;float:right;margin-right:10px;width:30px;height:30px;font-size:18px;border-color:transparent;"><span align='center' style='color:yellow;' class='mr-2 icon-help'></span></a></button>

<img src="images/logo1.png" width='200px' height='80px' style="float:center;margin-left:500px;margin-top:15px;"></img>

				
</div>
</header>
<div style="width:100%; height:2px;background-color:black">
</div>
<div style="float:left;background-color:#afabaa;width:100%;height:30%;">

<ul>

    
 <li class='active'><a href="cprofile.php">HOME</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
   
<li><a href="editprofile.php">EDIT PROFILE</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li  ><a href="change.php">CHANGE PLAN</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>

<li  ><a href="fillcom.php">FILL COMPANY DETAILS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewcom.php">VIEW COMPANY DETAILS</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="editcom.php">EDIT COMPANY DETAILS</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>

</ul>
</div>






<div style="width:100%;height:90%;">





<?php
   
	 $cnm=$_SESSION['cnm'];
	 
	$con=mysqli_connect("localhost","root","","jobnet");
		
		$r=mysqli_query($con,"select *  from comregistered where cnm='$cnm' ");
		while($row=mysqli_fetch_array($r)){
	?>
	
<table border=0 style="width:37%;height:50%;margin-left:400px;margin-top:80px;box-shadow:5px 5px 5px 5px #afabaa;border-radius:10%" rules='none'>
<tr><td ><?php echo "<h1 style='font-family:calibri;color:#90c317;margin-left:70px;'>$row[1]</h1>";?>  </td></tr>
<tr><td> <?php echo "<h3 style='font-size:22px;font-family:calibri;color:black;margin-left:100px;'><span align='center' style='color:grey;' class='mr-2 icon-envelope'></span> &nbsp;$row[2] </h3>";?>  </td></tr>
<tr><td><?php echo "<h3 style='font-size:22px;font-family:calibri;color:black;margin-left:100px;'><span align='center' style='color:grey;' class='mr-2 icon-mobile'></span>&nbsp;$row[3]</h3>";?>  </td></tr>
<tr><td><?php echo "<h3 style='font-size:22px;font-family:calibri;color:black;margin-left:100px;'><span align='center' style='color:grey;' class='mr-2 icon-room'></span> &nbsp;$row[4]</h3>";?>  </td></tr>
	<tr><td><a href='deletecom.php'><button value='' style='width:150px;height:50px;color:black;font-family:calibri;font-size:22px;margin-left:120px;border:0'><span align='center' style='color:grey;' class='mr-2 icon-trash'></span>CANCEL SUBSCRIPTION</button></a></td></tr>

		<?php } ?>
</table>

</div>
	


</html>