<?php
session_start();


$otp=$_POST["otp"];

$cnm=$_SESSION['cnm'];

$con=mysqli_connect("localhost","root","","jobnet");
 $f=mysqli_query($con,"UPDATE  comregistered SET otp='$otp' WHERE cnm='$cnm'; ");
 if($f)
{	echo "<script>alert('THANK YOU')
              window.location.href='companylog.php' </script>" ;
	}
else
{echo mysqli_error($con);}
 


   
?>

 