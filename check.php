<?php
 session_start();
$con=mysqli_connect("localhost","root","","jobnet");
$sp=$_POST["sp"];
$name=$_POST["nm"];

$r=mysqli_query($con,"select * from registered where sp='$sp'  and username='$name'");
					 
if($row=mysqli_fetch_array($r))
{ 
$_SESSION["idd"]=$row[0];
header("location:update.php");   
   
}
else
	echo "<script>alert('Your Security pin/username does not match our record. Please recheck.')
              window.location.href='security.php' </script>" ;
?>