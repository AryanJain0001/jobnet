<!DOCTYPE html>
<html>
<head>
<title>JobNet</title>
	 <link rel = "icon" href = "images/logo.png" 
        type = "image/logo.png">
<link rel="stylesheet" href="fonts/line-icons/style.css">
   <link rel="stylesheet" href="fonts/icomoon/style.css">
   <style>
ul {
	width:100%;

  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow:hidden;
  background-color:grey;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;

}

li a:hover {
  background-color: #111;

}


/* Style the active class (and buttons on mouse-over) */
.active, .li:hover {
  background-color: black;
  color: white;
}
</style>		
 </head>
 <header>
<div style="background-color:#afabaa;width:100%;height:17%;">
 	 &nbsp;&nbsp; <a style="text-decoration:none;color:#90c317" href="comdelete.php" ><button class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="background-color:transparent;button-hover:white;float:right;margin-right:10px;width:30px;height:30px;font-size:18px;border-color:transparent;"><span align='center' style='color:red;' class='mr-2 icon-power-off'></span></a></button>
 	 &nbsp;&nbsp; <a style="text-decoration:none;color:#90c317" href="commsg.php" ><button class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="background-color:transparent;button-hover:white;float:right;margin-right:10px;width:30px;height:30px;font-size:18px;border-color:transparent;"><span align='center' style='color:#90c317;' class='mr-2 icon-chat'></span></a></button>
 	 &nbsp;&nbsp; <a style="text-decoration:none;color:#90c317" href="comhelp.php" ><button class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="background-color:transparent;button-hover:white;float:right;margin-right:10px;width:30px;height:30px;font-size:18px;border-color:transparent;"><span align='center' style='color:yellow;' class='mr-2 icon-help'></span></a></button>

<img src="images/logo1.png" width='200px' height='80px' style="float:center;margin-left:500px;margin-top:15px;"></img>

				
</div>
</header>
<div style="width:100%; height:2px;background-color:black">
</div>
<div style="float:left;background-color:#afabaa;width:100%;height:30%;">

<ul>

  <li ><a href="cprofile.php">HOME</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
   
<li><a href="editprofile.php">EDIT PROFILE</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li  ><a href="change.php">CHANGE PLAN</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>

<li  ><a href="fillcom.php">FILL COMPANY DETAILS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewcom.php">VIEW COMPANY DETAILS</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li class='active'><a href="editcom.php">EDIT COMPANY DETAILS</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>

</ul>
</div>
<div style="width:100%; height:2px;background-color:black">
</div>
<div style="width:100%; height:70%;">
     
		<?php
session_start();
 $id=$_SESSION["cdd"];
 $cnm=$_SESSION["cnm"];
   $con=mysqli_connect("localhost","root","","jobnet");
    $r=mysqli_query($con,"select * from companyfill where companyname='$cnm'  ");
    $row=mysqli_Fetch_row($r);
  
   if(isset($_POST['Update'])) // when click on Update button
{ 
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

	  $check=mysqli_query($con," select cnm and cpin from comregistered where cnm='$cnm' and cpin='$cpin'");
      $res=mysqli_num_rows($check);
if($res>0)
     {
	    $edit ="UPDATE companyfill SET logo='$logo', companyname='$cname' ,post='$post', field='$field'  , location='$location', type='$type' , photo='$photo' , publishedon='$publish' , vacancy='$vacancy' , exp='$exp' , salary='$salary' , gender='$gender' , deadline='$deadline' , description='$describe' , req='$req'  , edu='$edu' where cpin='$cpin' and cnm='$cnm'";
	     $query_run = mysqli_query($con,$edit);
	
	       if($query_run)
			{     
		       echo "<script>alert('Details updated successfully.')
				window.location.href='cprofile.php'</script>";
	   
	  
			} 
	      else
			{  echo "<script>alert('Details not updated .')
                window.location.href='editcom.php' </script>"; 

}}
         else { echo "<script>alert('Username/Security pin not in existence .')
                window.location.href='editcom.php' </script>"; 
				}
}

?>
		<form action='' method='post' >
<table border='0' cellspacing=0 cellpadding=12 align='center' style="background:#afabaa; color:white;" width=70% height=100%>

<tr> <td colspan=2 align='center'><font size="5" color='black'>UPDATE ENTERIES </td></tr> 
  <tr>
    <td ><font size="4">LOGO</td>
	<td colspan='5'><input type='file'   required name='lg' value='<?php echo $row[1]; ?>'></td>
  </tr>
  
   <tr>
    <td><font size="4">COMPANY NAME </td>
	<td colspan='5'><input type='text'  required name='cnm' value='<?php echo $row[2]; ?>'></td>
  </tr>
  
  <tr>
    <td ><font size="4">POST</td>
	<td colspan='4'><input type='text'  required name='post' value='<?php echo $row[3]; ?>'></td>
  </tr>
  
  <tr>
    <td ><font size="4">FIELD</td>
	<td colspan='4'><input type='text'  required name='field' value='<?php echo $row[4]; ?>'></td>
  </tr>

  
   <tr>
    <td ><font size="4">LOCATION</td>
	<td colspan='5'><input type='text'  required name='location' value='<?php echo $row[5]; ?>'></td>
  </tr>
  
  <tr>
    <td ><font size="4">TYPE</td>
	<td colspan='5'>
	 <input type='radio'  required name='r1' <?php if($row[6]=="PART FULL") echo "checked";?> value='PART TIME'>PART TIME
	<input type='radio'  required name='r1' <?php if($row[6]=="FULL TIME") echo "checked";?>  value='FULL TIME'>FULL TIME
	</td> </tr>
	
	<tr>
    <td><font size="4">PHOTO</td>
	<td colspan='5'><input type='file'   required name='pho' value='<?php echo $row[7]; ?>'></td>
  </tr>
	
	<tr>
    <td><font size="4">PUBLISHED ON </td>
	<td colspan='5'><input type='date'  required name='po'  value='<?php echo $row[8]; ?>'></td>
  </tr>
  
  <tr>
    <td><font size="4">VACANCY</td>
	<td colspan='5'><input type='text'  required name='vac'  value='<?php echo $row[9]; ?>'></td>
  </tr>
  
   
    <tr>
    <td ><font size="4">EXPERIENCE</td>
	<td colspan='5'><input type='text'  required name='exp'  value='<?php echo $row[10]; ?>'></td>
  </tr>
 

<tr>
    <td ><font size="4">SALARY </td>
	<td colspan='2'><input type='text'  required name='salary' value='<?php echo $row[11]; ?>'></td>
	</tr>
	<tr>
    <td ><font size="4">GENDER</td>
	<td colspan='5'>
	 <input type='radio'  required name='r2' <?php if($row[12]=="MALE") echo "checked";?>  value='MALE'>MALE
	<input type='radio'  required name='r2'  <?php if($row[12]=="FEMALE") echo "checked";?> value='FEMALE'>FEMALE
   <input type='radio'  required name='r2'  <?php if($row[12]=="ANY") echo "checked";?> value='ANY'>ANY
   

	</td> </tr>

     <tr>
    <td ><font size="4">APPLICATION DEADLINE</td>
	<td colspan='4'><input type='date'   required name='ad' value='<?php echo $row[13]; ?>'></td>
  </tr>
   
   <tr>
  <td> <font size="4">JOB DESCRIPTION</td>
  <td colspan='4' align='center'> <input type='text'   required name='desc' value='<?php echo $row[14]; ?>'>
</td>
 </tr>

  <tr>
  <td> <font size="4">REQUIREMENTS</td>
  <td colspan='4' align='center'> <input type='text   required name='req' value='<?php echo $row[15]; ?>'>
</td>
 </tr>

  <tr>
  <td><font size="4"> EDUCATION + EXPERIENCE</td>
  <td colspan='4'  align='center'> <input type='text'  required name='edu' value='<?php echo $row[16]; ?>'>
 </td>
 </tr>

	  
  <tr>
   <td align='center' colspan=5 >
     <input style="background-color:white;color:black;font-weight:bold;width:100px;height:30px;" type='submit' value='UPDATE' name='Update'>
     <input style="background-color:white;color:black;font-weight:bold;width:100px;height:30px;" type='reset' value='CANCEL'>
	</td>
</tr>
</table>
</form>
</div>
</html>