<?php
session_start();

$cname=$_POST["cn"];
$post=$_POST["po"];
$loc=$_POST["loc"];
$why=$_POST["why"];
$name=$_POST["nm"];





$con=mysqli_connect("localhost","root","","jobnet");

$r=mysqli_query($con,"insert into cv(cname,po,location,name,why)
             values('$cname','$post','$loc','$name','$why')");
					$_SESSION["po"]=$post;
 if($r)
{	echo "<script>alert('Congrats! Your application is done successfully')
            window.location.href='index.php'</script>";
	}
else
	echo mysqli_error($con);
?>
