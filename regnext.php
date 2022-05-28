<?php
session_start();

$aname=$_POST["nm"];
$gen=$_POST["r1"];
$contact=$_POST["pno"];
$email=$_POST["email"];
$username=$_POST["uname"];
$pass=$_POST["pass"];
$sp=$_POST["sp"];



$con=mysqli_connect("localhost","root","","jobnet");
$check=mysqli_query($con," select username from registered where username='$username'");
$res=mysqli_num_rows($check);
if($res>0)
     { echo "<script>alert('Username already exists , choose a different one.')
              window.location.href='signup1.php' </script>" ;
	}
else
	{
$r=mysqli_query($con,"insert into registered(name,gender,contact,email,username,password,sp)
              values('$aname','$gen','$contact','$email','$username','$pass','$sp')");
			
		$_SESSION['uname']=$username;
		 
		 
if($r)
{	echo "<script>alert('saved .')
           
              window.location.href='signup2.php' </script>" ;
	}
else
echo mysqli_error($con);}
  
  
  
  
?>
