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
<h1 style="color:#90c317;font-family:calibri;margin-left:550px;margin-top:30px;font-size:38px;">PAYMENT</h1>
<br><br><br>
<form action='paynext.php' method='post'>
<table border='0' style="width:40%; height:90%;margin-left:400px;box-shadow:5px 5px 5px 2px #afabaa;margin-top:-60px;" rules='1' cellpadding=0 cellspacing=0>
<tr><td style="font-size:24px;font-family:calibri;color:brown;float:center;">Payment Details </td><td><img src='images/visa.jfif' style="width:220px;height:80px;float:right;"></img></td></tr>

<tr><td colspan=2><h3 style="margin-left:50px;font-size:20px;font-family:calibri;">CARD NUMBER</h3></td></tr>
<tr><td colspan=2><input type='text' style="width:300px;height:30px;margin-left:50px;"  required name='cardn' placeholder='valid card number' value='' maxlength=12></td></tr>

<tr><td colspan=2><h3 style="margin-left:50px;font-size:20px;font-family:calibri;">EXPIRY DATE</h3></td></tr>
<tr><td colspan=2><input type='text' style="width:100px;height:30px;margin-left:50px;"  required name='exp' placeholder='MM/YY' value='' ></td></tr>

<tr><td colspan=2><h3 style="margin-left:50px;font-size:20px;font-family:calibri;">CV CODE</h3></td></tr>
<tr><td colspan=2><input type='text' style="width:100px;height:30px;margin-top:-10px;margin-left:50px;"  required name='cvc' placeholder='CVC' value=''></td></tr>


<tr><td colspan=2><h3 style="margin-left:50px;font-size:20px;font-family:calibri;"></h3></td></tr>
<tr>
<td colspan='2' style=" align:center;margin-top:20px;"><input style="background-color:#121212;border-color:#90c317;color:#fff;width:130px;height:50px;font-size:17px;margin-left:120px;" type='submit' value='PAY'></td>
</tr>
<tr><td></td><tr>
</table>
</form>
</div>
</html>
