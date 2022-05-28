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
<div style="background-color:#afabaa;width:100%;height:17%;">
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

   <li ><a href="cprofile.php">HOME</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
   
<li><a href="editprofile.php">EDIT PROFILE</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li class='active' ><a href="change.php">CHANGE PLAN</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>

<li  ><a href="fillcom.php">FILL COMPANY DETAILS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewcom.php">VIEW COMPANY DETAILS</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="editcom.php">EDIT COMPANY DETAILS</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>

</ul>
</div>


<div style="width:100%; height:70%;">
<h1 style="color:#90c317;font-family:calibri;margin-left:480px;margin-top:50px;font-size:38px;">CHANGE   &nbsp; PLAN</h1>
<?php
session_start();

 $cnm=$_SESSION["cnm"];
   $con=mysqli_connect("localhost","root","","jobnet");
    $r=mysqli_query($con,"select * from comregistered where cnm='$cnm'  ");
    $row=mysqli_Fetch_row($r);
  
   if(isset($_POST['Update'])) // when click on Update button
{ 
     
$plan=$_POST["plan"];


	  $check=mysqli_query($con," select cnm  from comregistered where cnm='$cnm' ");
      $res=mysqli_num_rows($check);
if($res>0)
     {
	    $edit ="UPDATE comregistered SET plan='$plan'  where   cnm='$cnm'";
		
	     $query_run = mysqli_query($con,$edit);
	
	       if($query_run)
			{     
		          
		       echo "<script>alert('changed successfully.')
				window.location.href='cprofile.php'</script>";
	   
	  
			} 
	      else
			{  echo "<script>alert('Details not updated .')
                window.location.href='change.php' </script>"; 

}}
         else { echo "<script>alert('Username/Security pin not in existence .')
                window.location.href='comsignup.php' </script>"; 
				}
}?>
<form action='' method='post'>
<table border='0' style="width:40%; height:40%;margin-left:360px;box-shadow:5px 5px 5px 2px #afabaa;margin-top:-20px;" rules='none' cellpadding=8 cellspacing=2>
<tr><td><h1 style='margin-left:170px;font-size:20px;font-family:calibri'>CHOOSE PLAN</td></tr>
<tr><td style='font-size:19px;font-family:calibri;'><input  type='radio'  required  name='plan' <?php if($row[7]=="1month") echo "checked";?> value='1month'>1 &nbsp;MONTH</td><td>&#x20b9; 2000</td></tr>
<tr><td style='font-size:19px;font-family:calibri;'><input type='radio'  required name='plan' <?php if($row[7]=="6months") echo "checked";?> value='6months'>6 &nbsp;MONTHS</td><td>&#x20b9; 12000</td></tr>
<tr><td style='font-size:19px;font-family:calibri;'><input type='radio'  required name='plan' <?php if($row[7]=="1year") echo "checked";?> value='1year'>1 &nbsp;YEAR</td><td>&#x20b9; 22000</td></tr>
<tr><td><input style="background-color:#121212;border-color:#90c317;color:#fff;width:100px;height:30px;font-size:17px;margin-left:200px;" type='submit' value='UPDATE' name='Update' ></td></tr>
</table>
</form>
</div>
</div></html>