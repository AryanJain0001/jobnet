<?php
$username=$_POST["nm"];
$review=$_POST["review"];
$rate=$_POST["rate"];


$con=mysqli_connect("localhost","root","","jobnet");
 $check=mysqli_query($con," select username  from registered where username='$username' ");
$res=mysqli_num_rows($check);
if($res>0)
     {

        $r=mysqli_query($con,"insert into review(username,review,rate)
              values('$username','$review','$rate')");
		 
         if($r)
          {	echo "<script>alert('Thank You for rating us.')
          	window.location.href='index.php'</script>" ;
	          }
          else
	    echo mysqli_error($con);
	}
  else { echo "<script>alert('Username not in existence .')
                window.location.href='review.php' </script>"; 
		}

?>