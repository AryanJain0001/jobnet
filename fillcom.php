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
   
<li><a href="editprofile.php">EDIT PROFILE</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li  ><a href="change.php">CHANGE PLAN</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>

<li class='active' ><a href="fillcom.php">FILL COMPANY DETAILS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewcom.php">VIEW COMPANY DETAILS</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="editcom.php">EDIT COMPANY DETAILS</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>

</ul>
</div>

<div style="width:100%; height:2px;background-color:black">
</div>
<div style="width:100%; height:70%;">
<form action='cfillnext.php' method='post' enctype='multipart/form-data'>
<table border='0' cellspacing=0 cellpadding=12 align='center' style="background:#afabaa; color:white;" width=70% height=100%>

<tr> <td colspan=2 align='center'><font size="5" color='black'>FILL ENTERIES HERE</td></tr> 
  <tr>
    <td ><font size="4">LOGO</td>
	<td colspan='5'><input type='file'  style='width:300px;height:30px;caret-color:#90c317;'  required name='lg' value=''></td>
  </tr>
  
   <tr>
    <td><font size="4">COMPANY NAME </td>
	<td colspan='5'><input type='text'   style='width:300px;height:30px;caret-color:#90c317;'required name='cnm' value=''></td>
  </tr>
  
  <tr>
    <td ><font size="4">POST</td>
	<td colspan='4'><input type='text'   style='width:300px;height:30px;caret-color:#90c317;'required name='post' value=''></td>
  </tr>
  
  <tr>
    <td ><font size="4">FIELD</td>
	<td colspan='4'><input type='text'   style='width:300px;height:30px;caret-color:#90c317;'required name='field' value=''></td>
  </tr>

  
   <tr>
    <td ><font size="4">LOCATION</td>
	<td colspan='5'><input type='text'   style='width:300px;height:30px;caret-color:#90c317;'required name='location' value=''></td>
  </tr>
  
  <tr>
    <td ><font size="4">TYPE</td>
	<td colspan='5'>
	 <input type='radio'  required name='r1' value='PART TIME'>PART TIME
	<input type='radio'  required name='r1' value='FULL TIME'>FULL TIME
	</td> </tr>
	
	<tr>
    <td><font size="4">PHOTO</td>
	<td colspan='5'><input type='file'    style='width:300px;height:30px;caret-color:#90c317;'required name='pho' value=''></td>
  </tr>
	
	<tr>
    <td><font size="4">PUBLISHED ON </td>
	<td colspan='5'><input type='date'   style='width:300px;height:30px;caret-color:#90c317;'required name='po'  value=''></td>
  </tr>
  
  <tr>
    <td><font size="4">VACANCY</td>
	<td colspan='5'><input type='text'   style='width:300px;height:30px;caret-color:#90c317;'required name='vac'  value=''></td>
  </tr>
  
   
    <tr>
    <td ><font size="4">EXPERIENCE</td>
	<td colspan='5'><input type='text'   style='width:300px;height:30px;caret-color:#90c317;'required name='exp'  value=''></td>
  </tr>
 

<tr>
    <td ><font size="4">SALARY </td>
	<td colspan='2'><input type='text'   style='width:300px;height:30px;caret-color:#90c317;'required name='salary' value=''></td>
	</tr>
	<tr>
    <td ><font size="4">GENDER</td>
	<td colspan='5'>
	 <input type='radio'  required name='r2' value='MALE'>MALE
	<input type='radio'  required name='r2' value='FEMALE'>FEMALE
   <input type='radio'  required name='r2' value='ANY'>ANY
   

	</td> </tr>

     <tr>
    <td ><font size="4">APPLICATION DEADLINE</td>
	<td colspan='4'><input type='date'    style='width:300px;height:30px;caret-color:#90c317;'required name='ad' value=''></td>
  </tr>
   
   <tr>
  <td> <font size="4">JOB DESCRIPTION</td>
  <td colspan='4' align='center'> <input type='text'  style='width:300px;height:30px;caret-color:#90c317;' required name='desc' value=''>
</td>
 </tr>

  <tr>
  <td> <font size="4">REQUIREMENTS</td>
  <td colspan='4' align='center'> <input type='text'    style='width:300px;height:30px;caret-color:#90c317;' required name='req' value=''>
</td>
 </tr>

  <tr>
  <td><font size="4"> EDUCATION + EXPERIENCE</td>
  <td colspan='4'  align='center'> <input type='text'    style='width:300px;height:30px;caret-color:#90c317;'required name='edu' value=''>
 </td>
 </tr>

	  
  <tr>
   <td align='center' colspan=5 >
     <input style="background-color:white;color:black;font-weight:bold;width:100px;height:30px;" type='submit' value='Feed'>
     <input style="background-color:white;color:black;font-weight:bold;width:100px;height:30px;" type='reset' value='Cancel'>
	</td>
</tr>
</table>
</form>
</div>
</html>