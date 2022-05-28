<!DOCTYPE html>
<html>
<head>
<title>JobNet</title>
	 <link rel = "icon" href = "images/logo.png" 
        type = "image/logo.png">
		
<style>
.h1{
	font-family:calibri;
	font-size:22px;
}
</style>
</head>
<body>
<header>
<div style="background-color:#afabaa;width:100%;height:20%;">
<img src="images/logo1.png" width='300px' height='100px' style="float:center;margin-left:480px;margin-top:20px;"></img>
</div>
</header>
<div style="width:100%; height:70%;">
<h1 style="color:#90c317;font-family:calibri;margin-left:400px;margin-top:50px;font-size:38px;">COMPANY   &nbsp; REGISTRATION</h1>


   
<form action='comnext.php' method='post'>
<table border='0' style="width:50%; height:80%;margin-left:360px;box-shadow:7px 7px 7px 2px #afabaa;" rules='none' cellpadding=8 cellspacing=2>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td colspan='1' style="font-size:18px;font-weight:bold;font-family:calibri;">COMPANY NAME</td><td><input type='text'  required name='cnm' placeholder='name' value='' style='width:300px;height:30px;caret-color:#90c317;'></td><tr>
<tr><td style="font-size:18px;font-weight:bold;font-family:calibri;" >COMPANY EMAIL</td><td><input type='text'  required name='cmail' placeholder='email' value='' style='width:300px;height:30px;caret-color:#90c317;'></td><tr>
<tr><td style="font-size:18px;font-weight:bold;font-family:calibri;">CONTACT NO.</td><td><input type='text' maxlength='10'  required name='ccon' placeholder='contact no.' value='' style='width:300px;height:30px;caret-color:#90c317;'></td><tr>
<tr><td style="font-size:18px;font-weight:bold;font-family:calibri;">ADDRESS</td><td><input type='text'   required name='cadd' placeholder='address' value='' style='width:300px;height:30px;caret-color:#90c317;'></td><tr>

<tr><td style="font-size:18px;font-weight:bold;font-family:calibri;">PASSWORD</td><td ><input type='password' maxlength='8'  required name='cpass' placeholder='password' value='' style='width:300px;height:30px;caret-color:#90c317;'></td><tr>
<tr><td style="font-size:18px;font-weight:bold;font-family:calibri;">SECURITY PIN</td ><td><input type='password' maxlength='4'  required name='cpin' placeholder='4digit pin' value='' style='width:300px;height:30px;caret-color:#90c317;'></td><tr>
  <tr><td colspan=2><input type='checkbox' name='check' value=''>I agree all the terms and conditions of JOBNET.</td></tr> 

<tr>
<td style=" align:center;" colspan=2><input style="background-color:#121212;border-color:#90c317;color:#fff;width:100%;height:150%;font-size:17px" type='submit' value='SUBMIT' ></td></tr>
<tr>
<td  colspan='2' style="margin-left:10px; align:center;"><input style="background-color:#121212;border-color:#90c317;color:#fff;width:100%;height:150%;font-size:17px" type='reset' value='CANCEL'></td>
</tr>
<tr><td style='font-family:calibri;font-size:20px;margin-left:70px;'>Alredy have an account<a style="color:#90c317;text-decoration:none;" href='companylog.php'>&nbsp; login</a></td></tr>

</table></form>

</div>
</html>