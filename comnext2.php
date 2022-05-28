<?php
session_start();


$plan=$_POST["plan"];
$cnm=$_SESSION['cnm'];

$con=mysqli_connect("localhost","root","","jobnet");
 $f=mysqli_query($con,"UPDATE  comregistered SET plan='$plan' WHERE cnm='$cnm'; ");
 if($f)
{	echo "<script>alert('next step.')
              window.location.href='pay.php' </script>" ;
	}
else
{echo mysqli_error($con);}
 


   
?>

 ?>