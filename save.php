
 <?php
  session_start();
  
  
$cname=$_REQUEST["a"];
  $post=$_REQUEST["b"];
  $username=$_SESSION["user"];
 $location=$_REQUEST["c"];
  
  
  $con=mysqli_connect("localhost","root","","jobnet");
  $r=mysqli_query($con,"insert into save(username,cname,post,location)
                      values('$username','$cname','$post','$location')");
					  
 if($r)
{	echo "<script>alert('saved ')
              window.location.href='index.php' </script>" ;
	}
else
echo mysqli_error($con);

?>