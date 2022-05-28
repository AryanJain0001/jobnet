<?php
 session_start();
$con=mysqli_connect("localhost","root","","jobnet");
$cpin=$_POST["cpin"];
$cnm=$_POST["cnm"];

$r=mysqli_query($con,"select * from comregistered where cpin='$cpin'  and cnm='$cnm'");
					 
if($row=mysqli_fetch_array($r))
{ 
$_SESSION["cdd"]=$row[0];
header("location:editprofile.php");   
   
}
else
	echo "<script>alert('Your Security pin/username does not match our record. Please recheck.')
              window.location.href='companyforgot.php' </script>" ;
?>