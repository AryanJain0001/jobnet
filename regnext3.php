<?php
session_start();

$username=$_SESSION['uname'];



move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]);
move_uploaded_file($_FILES["resume"]["tmp_name"],"images/".$_FILES["resume"]["name"]);

$image=$_FILES["image"]["name"];
$resume=$_FILES["resume"]["name"];


$con=mysqli_connect("localhost","root","","jobnet");

 $f=mysqli_query($con,"UPDATE  registered SET image='$image',resume='$resume'
              WHERE username='$username';
		 ");

	

if($f)
{	echo "<script>alert('REGISTRATION DONE.')
window.location.href='index.php'
             </script>" ;
	}
else
{echo mysqli_error($con);}

?>
