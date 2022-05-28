<?php
 session_start();
 
 $cnm=$_SESSION["cnm"];
   $con=mysqli_connect("localhost","root","","jobnet");
$r=mysqli_query($con,"delete from comregistered where cnm='$cnm'");
					 
if($r)
{ 
echo "<script>alert('YOU ARE NO MORE A SUBSCRIBER.')
              window.location.href='comlogin.php' </script>" ;   
}
else
	{echo "<script>alert('Something seems incorrect. Please recheck.')
              window.location.href='cprofile.php' </script>" ;
  
  }
  
?>