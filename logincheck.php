<?php
 session_start();
  if(isset($_POST['login']))
  {$con=mysqli_connect("localhost","root","","jobnet");
$name=$_POST["nm"];
$_SESSION['msg']=$_POST["nm"];

$pass=$_POST["pass"];
$r=mysqli_query($con,"select * from registered where username='$name'
                     and password='$pass'");
					 
if($row=mysqli_fetch_array($r))
{ 
$_SESSION["idd"]=$row[0];
$_SESSION["user"]=$row[5];

header("location:index.php");   
   
}
else
	echo "<script>alert('Your Username/Password seems incorrect. Please recheck.')
              window.location.href='index.php' </script>" ;
  }
  

  
?>