<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>JobNet</title>
	 <link rel = "icon" href = "images/logo.png" 
        type = "image/logo.png">

</head>
<body>
<header>
<div style="background-color:#afabaa;width:100%;height:20%;">
<img src="images/logo1.png" width='300px' height='100px' style="float:center;margin-left:480px;margin-top:20px;"></img>
</div>
</header>
<div style="width:100%; height:70%;">
<br><br><br><br><br>
<form action='otpnext.php' method='post'>
<table border='0' style="width:34%; height:60%;margin-left:400px;box-shadow:5px 5px 5px 2px #afabaa;margin-top:-60px;" rules='1' cellpadding=0 cellspacing=10>
<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr><td style="font-size:24px;font-family:calibri;color:brown;">Enter OTP sent on your mobile no.</td></tr>
<tr><td style="color:red">Don't share your otp with anyone</td></tr>
<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr><td colspan=2 style="margin-left:50px;"><input type='text' style="width:300px;height:30px;" name='otp' placeholder='OTP' value='' maxlength=4></td></tr>


<tr><td><input style="background-color:black;color:#90c317;width:150px;height:40px;font-size:20px;margin-left:90px;" type='submit' value='SEND'></td></tr>
</table>
</form>
</div>
</html>
