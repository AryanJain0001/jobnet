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
   
<li class='active'><a href="editprofile.php">EDIT PROFILE</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li  ><a href="change.php">CHANGE PLAN</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>

<li  ><a href="fillcom.php">FILL COMPANY DETAILS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewcom.php">VIEW COMPANY DETAILS</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="editcom.php">EDIT COMPANY DETAILS</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>

</ul>
</div>


<div style="width:100%; height:70%;">
<h1 style="color:#90c317;font-family:calibri;margin-left:480px;margin-top:50px;font-size:38px;">COMPANY   &nbsp; LOGIN</h1>
<?php
session_start();

 $cnm=$_SESSION["cnm"];
   $con=mysqli_connect("localhost","root","","jobnet");
    $r=mysqli_query($con,"select * from comregistered where cnm='$cnm'  ");
    $row=mysqli_Fetch_row($r);
  
   if(isset($_POST['Update'])) // when click on Update button
{ 
     
$cnm=$_POST["cnm"];
$cmail=$_POST["cmail"];
$ccon=$_POST["ccon"];
$cpass=$_POST["cpass"];
$cpin=$_POST["cpin"];
$cadd=$_POST["cadd"];

	  $check=mysqli_query($con," select cnm and cpin from comregistered where cnm='$cnm' and cpin='$cpin'");
      $res=mysqli_num_rows($check);
if($res>0)
     {
	    $edit ="UPDATE comregistered SET cnm='$cnm', cmail='$cmail' ,ccon='$ccon', cpass='$cpass'  , cpin='$cpin', cadd='$cadd'   where cpin='$cpin' and cnm='$cnm'";
	     $query_run = mysqli_query($con,$edit);
	
	       if($query_run)
			{     
		       echo "<script>alert('Details updated successfully.')
				window.location.href='companylog.php'</script>";
	   
	  
			} 
	      else
			{  echo "<script>alert('Details not updated .')
                window.location.href='editprofile.php' </script>"; 

}}
         else { echo "<script>alert('Username/Security pin not in existence .')
                window.location.href='comsignup.php' </script>"; 
				}
}

?><br><br><br><br><br>


<form action='' method='post'>
<table border='0' style="width:40%; height:50%;margin-left:360px;box-shadow:5px 5px 5px 2px #afabaa;" rules='none' cellpadding=8 cellspacing=2>
<tr><td colspan='1' style="font-size:18px;font-weight:bold;font-family:calibri;">COMPANY NAME</td><td><input type='text'  required name='cnm' placeholder='name' value='<?php echo $row[1]; ?>' style='width:300px;height:30px;caret-color:#90c317;'></td><tr>
<tr><td style="font-size:18px;font-weight:bold;font-family:calibri;" >COMPANY EMAIL</td><td><input type='text'  required name='cmail' placeholder='email' value='<?php echo $row[2]; ?>' style='width:300px;height:30px;caret-color:#90c317;'></td><tr>
<tr><td style="font-size:18px;font-weight:bold;font-family:calibri;">CONTACT NO.</td><td><input type='text' maxlength='10'  required name='ccon' placeholder='contact no.' value='<?php echo $row[3]; ?>' style='width:300px;height:30px;caret-color:#90c317;'></td><tr>
<tr><td style="font-size:18px;font-weight:bold;font-family:calibri;">ADDRESS</td><td><input type='text'   required name='cadd' placeholder='address' value='<?php echo $row[4]; ?>' style='width:300px;height:30px;caret-color:#90c317;'></td><tr>

<tr><td style="font-size:18px;font-weight:bold;font-family:calibri;">PASSWORD</td><td ><input type='password' maxlength='8'  required name='cpass' placeholder='password' value='' style='width:300px;height:30px;caret-color:#90c317;'></td><tr>
<tr><td style="font-size:18px;font-weight:bold;font-family:calibri;">SECURITY PIN</td ><td><input type='password' maxlength='4'  required name='cpin' placeholder='4digit pin' value='<?php echo $row[6]; ?>' style='width:300px;height:30px;caret-color:#90c317;'></td><tr>
<tr>
<td style="margin-left:10px; align:center;"><input style="background-color:#121212;border-color:#90c317;color:#fff;width:100px;height:30px;font-size:17px" type='submit' value='Update' name='Update' ></td>
<td  colspan='2' style="margin-left:10px; align:center;"><input style="background-color:#121212;border-color:#90c317;color:#fff;width:100px;height:30px;font-size:17px" type='reset' value='cancel'></td>
</tr>

</table></form>


