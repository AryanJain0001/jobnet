<?php
$logo=$_POST["lg"];
$cname=$_POST["cnm"];
$post=$_POST["post"];
$field=$_POST["field"];
$location=$_POST["location"];
$type=$_POST["r1"];
$photo=$_POST["pho"];
$publish=$_POST["po"];
$vacancy=$_POST["vac"];
$exp=$_POST["exp"];
$salary=$_POST["salary"];
$gender=$_POST["r2"];
$deadline=$_POST["ad"];
$describe=$_POST["desc"];
$req=$_POST["req"];
$edu=$_POST["edu"];

move_uploaded_file($_FILES["pho"]["tmp_name"],"images/".$_FILES["pho"]["name"]);
move_uploaded_file($_FILES["lg"]["tmp_name"],"images/".$_FILES["lg"]["name"]);

$pname=$_FILES["pho"]["name"];
$logo=$_FILES["lg"]["name"];


$con=mysqli_connect("localhost","root","","jobnet");

$r=mysqli_query($con,"insert into companyfill(logo,companyname,post,field,location,type,photo,publishedon,vacancy,
                    exp,salary,gender,deadline,description,req,edu)
              values('$logo','$cname','$post','$field','$location','$type','$pname','$publish','$vacancy','$exp',
			             '$salary','$gender','$deadline','$describe','$req','$edu')");
		 
if($r)
{	echo "<script>alert('enteries done')
            	    window.location.href='cprofile.php' 
</script>" ;
	;}
else
	echo mysqli_error($con);

?>
