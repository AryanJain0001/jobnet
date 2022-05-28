<?php
$username=$_POST["nm"];
$query=$_POST["query"];

$con=mysqli_connect("localhost","root","","jobnet");
 $check=mysqli_query($con," select username  from registered where username='$username' ");
$res=mysqli_num_rows($check);
if($res>0)
     {

        $r=mysqli_query($con,"insert into help(username,query)
              values('$username','$query')");
		 
         if($r)
          {	echo "<script>alert('Queries received. We will soon revert back to you')
          	window.location.href='help.php'</script>" ;
	          }
          else
	    echo mysqli_error($con);
	}
  else { echo "<script>alert('Username not in existence .')
                window.location.href='help.php' </script>"; 
		}

?>