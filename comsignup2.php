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
<h1 style="color:#90c317;font-family:calibri;margin-left:400px;margin-top:50px;font-size:38px;">COMPANY   &nbsp; SUBSCRIPTION</h1>
<br><br><br><br><br>
<form action='comnext2.php' method='post'>
<table border='0' style="width:40%; height:40%;margin-left:360px;box-shadow:5px 5px 5px 2px #afabaa;margin-top:-20px;" rules='none' cellpadding=8 cellspacing=2>
<tr><td><h1 style='margin-left:170px;font-size:20px;font-family:calibri'>CHOOSE PLAN</td></tr>
<tr><td style='font-size:19px;font-family:calibri;'><input  type='radio'  required  name='plan' value='1month'>1 &nbsp;MONTH</td><td>&#x20b9; 2000</td></tr>
<tr><td style='font-size:19px;font-family:calibri;'><input type='radio'  required name='plan' value='6months'>6 &nbsp;MONTHS</td><td>&#x20b9; 12000</td></tr>
<tr><td style='font-size:19px;font-family:calibri;'><input type='radio'  required name='plan' value='1year'>1 &nbsp;YEAR</td><td>&#x20b9; 22000</td></tr>
<tr><td  colspan='2' style="margin-left:10px; align:center;"><input style="background-color:#121212;border-color:#90c317;color:#fff;width:50%;height:150%;font-size:17px;margin-left:120px;" type='submit' value='PROCEED'></td></tr>

</table>
</form>
</div>
</html>