<?php
session_start();


$cardn=$_POST["cardn"];
$exp=$_POST["exp"];
$cvc=$_POST["cvc"];
$cnm=$_SESSION['cnm'];

$con=mysqli_connect("localhost","root","","jobnet");
 $f=mysqli_query($con,"UPDATE  comregistered SET cardn='$cardn',exp='$exp',cvc='$cvc' WHERE cnm='$cnm'; ");
 if($f)
{	echo "<script>alert('one step more.')
              window.location.href='otp.php' </script>" ;
	}
else
{echo mysqli_error($con);}
 


   
?>

 ?>