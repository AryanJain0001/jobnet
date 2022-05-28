<?php
session_start();

$cnm=$_POST["cnm"];
$cmail=$_POST["cmail"];
$ccon=$_POST["ccon"];
$cpass=$_POST["cpass"];
$cpin=$_POST["cpin"];
$cadd=$_POST["cadd"];





$con=mysqli_connect("localhost","root","","jobnet");

	
$r=mysqli_query($con,"insert into comregistered(cnm,cmail,ccon,cadd,cpass,cpin)
              values('$cnm','$cmail','$ccon','$cadd','$cpass','$cpin')");
		$_SESSION['cnm']=$cnm;
if($r)
{	echo "<script>alert('REGISTRATION DONE')
           
              window.location.href='comsignup2.php' </script>" ;
	}
else
echo mysqli_error($con);
  
  
  
  
?>
