<?php
session_start();

  $name=$_SESSION["user"];
  $po=$_REQUEST["d"];
  
   $con=mysqli_connect("localhost","root","","jobnet");
$r=mysqli_query($con,"delete from cv where name='$name' && po='$po' ");
					 
if($r)
{ 
echo "<script>alert('removed')
            window.location.href='show.php'  </script>" ;   
}
  
?>