<?php
 session_start();
  if(isset($_POST['login']))
  {$con=mysqli_connect("localhost","root","","jobnet");

$cnm=$_POST["cnm"];

$cpass=$_POST["cpass"];


$r=mysqli_query($con,"select * from comregistered where cnm='$cnm' and cpass='$cpass'");
					 
if($row=mysqli_fetch_array($r))
{ 
$_SESSION["cdd"]=$row[0];
$_SESSION["cnm"]=$row[1];
 

echo "<script>alert('Login Successful.')
              window.location.href='cprofile.php' </script>" ;
 
   
}
else

	echo "<script>alert('Your Username/Password seems incorrect. Please recheck.')
            window.location.href='companylog.php' </script>" ;
  }
  
  
  
?>