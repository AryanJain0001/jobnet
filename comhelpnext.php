<?php
$cnm=$_POST["nm"];
$query=$_POST["query"];

$con=mysqli_connect("localhost","root","","jobnet");
 $check=mysqli_query($con," select cnm  from comregistered where cnm='$cnm' ");
$res=mysqli_num_rows($check);
if($res>0)
     {

        $r=mysqli_query($con,"insert into companyquery(companyname,query)
              values('$cnm','$query')");
		 
         if($r)
          {	echo "<script>alert('Queries received. We will soon revert back to you')
          	window.location.href='comhelp.php'</script>" ;
	          }
          else
	    echo mysqli_error($con);
	}
  else { echo "<script>alert('Username not in existence .')
                window.location.href='comhelp.php' </script>"; 
		}

?>