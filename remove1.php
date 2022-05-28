<?php
session_start();

  $name=$_SESSION["user"];
  $po=$_REQUEST["e"];
  
   $con=mysqli_connect("localhost","root","","jobnet");
$r=mysqli_query($con,"delete from save where username='$name' && post='$po' ");
					 
if($r)
{ 
echo "<script>alert('removed')
            window.location.href='show1.php'  </script>" ;   
}
  
?>