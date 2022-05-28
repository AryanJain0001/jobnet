<?php
session_start();

$sname=$_POST["snm"];
$cname=$_POST["cnm"];
$ten=$_POST["10"];
$twelve=$_POST["12"];
$cor=$_POST["cor"];
$col=$_POST["col"];
$username=$_SESSION['uname'];

$con=mysqli_connect("localhost","root","","jobnet");
 $f=mysqli_query($con,"UPDATE  registered SET sname='$sname',cname='$cname',ten='$ten',twelve='$twelve',cor='$cor',col='$col'
              WHERE username='$username';
		 ");
if($f)
{	echo "<script>alert('saved .')
              window.location.href='signup3.php' </script>" ;
	}
else
{echo mysqli_error($con);}
 


   
?>
