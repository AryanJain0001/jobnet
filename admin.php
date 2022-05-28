<!DOCTYPE html>
<html>
<head>
<title>JobNet</title>
	 <link rel = "icon" href = "images/logo.png" 
        type = "image/logo.png">
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
<body>
<header>
<div style="background-color:#afabaa;width:100%;height:20%;">
<a href='adm.php'><input type='image' src="images/logo1.png" width='300px' height='100px' style="float:center;margin-left:480px;margin-top:20px;"></img></a>
</div>
</header>

<div style="width:100%; height:2px;background-color:black">
</div>

<div style="float:left;background-color:#afabaa;width:100%;height:30%;">

<ul>

    
<li><a href="viewcompany.php">COMPANY DETAILS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li class='li active'><a href="admin.php">FILL COMPANY DETAILS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="viewreg.php">RESISTRATION</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewcv.php">APPLIED</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewquery.php">QUERIES</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewreplies.php">REPLIES</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewsave.php" style="display:block;">SAVED JOBS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
</ul>
</div>
<br><br>




	<div style="background-color:white;width:100%;height:100%;">
<form action='adminnext.php' method='post' enctype='multipart/form-data'>
<table border='0' cellspacing=0 cellpadding=12 align='center' style="background:#afabaa; color:white;" width=70% height=100%>

<tr> <td colspan=2 align='center'><font size="5" color='black'>NEW ENTERIES HERE</td></tr> 
  <tr>
    <td ><font size="4">LOGO</td>
	<td colspan='5'><input type='file'  name='lg' value=''></td>
  </tr>
  
   <tr>
    <td><font size="4">COMPANY NAME </td>
	<td colspan='5'><input type='text' name='cnm' value=''></td>
  </tr>
  
  <tr>
    <td ><font size="4">POST</td>
	<td colspan='4'><input type='text' name='post' value=''></td>
  </tr>
  
  <tr>
    <td ><font size="4">FIELD</td>
	<td colspan='4'><input type='text' name='field' value=''></td>
  </tr>

  
   <tr>
    <td ><font size="4">LOCATION</td>
	<td colspan='5'><input type='text' name='location' value=''></td>
  </tr>
  
  <tr>
    <td ><font size="4">TYPE</td>
	<td colspan='5'>
	 <input type='radio' name='r1' value='PART TIME'>PART TIME
	<input type='radio' name='r1' value='FULL TIME'>FULL TIME
	</td> </tr>
	
	<tr>
    <td><font size="4">PHOTO</td>
	<td colspan='5'><input type='file'  name='pho' value=''></td>
  </tr>
	
	<tr>
    <td><font size="4">PUBLISHED ON </td>
	<td colspan='5'><input type='date' name='po'  value=''></td>
  </tr>
  
  <tr>
    <td><font size="4">VACANCY</td>
	<td colspan='5'><input type='text' name='vac'  value=''></td>
  </tr>
  
   
    <tr>
    <td ><font size="4">EXPERIENCE</td>
	<td colspan='5'><input type='text' name='exp'  value=''></td>
  </tr>
 

<tr>
    <td ><font size="4">SALARY </td>
	<td colspan='2'><input type='text' name='salary' value=''></td>
	</tr>
	<tr>
    <td ><font size="4">GENDER</td>
	<td colspan='5'>
	 <input type='radio' name='r2' value='MALE'>MALE
	<input type='radio' name='r2' value='FEMALE'>FEMALE
   <input type='radio' name='r2' value='ANY'>ANY
   

	</td> </tr>

     <tr>
    <td ><font size="4">APPLICATION DEADLINE</td>
	<td colspan='4'><input type='date'  name='ad' value=''></td>
  </tr>
   
   <tr>
  <td> <font size="4">JOB DESCRIPTION</td>
  <td colspan='4' align='center'> <textarea rows='10' cols='40' name='desc' value=''>
 </textarea></td>
 </tr>

  <tr>
  <td> <font size="4">REQUIREMENTS</td>
  <td colspan='4' align='center'> <textarea rows='10' cols='40' name='req' value=''>
 </textarea></td>
 </tr>

  <tr>
  <td><font size="4"> EDUCATION + EXPERIENCE</td>
  <td colspan='4'  align='center'> <textarea rows='10' cols='40' name='edu' value=''>
 </textarea></td>
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
</body></html>
