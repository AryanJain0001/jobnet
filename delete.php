<?php
  $name=$_REQUEST["a"];
   $con=mysqli_connect("localhost","root","","jobnet");
$r=mysqli_query($con,"delete from registered where username='$name'");
					 
if($r)
{ 
echo "<script>alert('Your account is deleted')
              window.location.href='signup1.php' </script>" ;   
}
else
	{echo "<script>alert('Something seems incorrect. Please recheck.')
              window.location.href='profile.php' </script>" ;
  
  }
  
?>