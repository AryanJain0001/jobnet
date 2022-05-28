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
<h1 style="color:#90c317;font-family:calibri;margin-left:480px;margin-top:50px;font-size:38px;">COMPANY   &nbsp; LOGIN</h1>
<br><br><br><br><br>
<form action='companylogcheck.php' method='post'>
<table border='0' style="width:40%; height:50%;margin-left:360px;box-shadow:5px 5px 5px 2px #afabaa;" rules='none' cellpadding=8 cellspacing=2>



    <td align='center'style="font-size:18px;font-weight:bold;font-family:calibri;">COMPANY NAME</td>
	<td colspan='1' align='center' width=50%><input style='width:300px;height:30px;caret-color:#90c317;' type='text' placeholder='name'  required name='cnm' value=''></td>
  </tr>
  <tr><td></td></tr>
  <tr><td></td></tr>
 
  <tr>
    <td align='center' style="font-size:18px;font-weight:bold;font-family:calibri;align:left">PASSWORD</td>
	<td colspan='1' align='center'width=50%><input style='width:300px;height:30px;caret-color:#90c317;' type='password' placeholder='password' maxlength='8'  required  name='cpass' value=''></td>
  </tr>
<tr> <tr><td></td></tr>


<tr>
   <td colspan=1 >
     <input type='submit' style="margin-left:150px;background-color:#121212;border-color:#90c317;color:#fff;font-size:17px;width:100%;height:150%;" value='LOGIN' name='login'></td>
    </tr><tr><td> <input type='RESET' style="margin-left:150px;background-color:#121212;border-color:#90c317;color:#fff;font-size:17px;width:100%;height:150%;" value='CANCEL'></td>
</tr>
	</td></tr><tr><td></td></tr>
<tr><td style='font-family:calibri;font-size:20px;float:center;margin-left:150px;'>Forgot Password<a style="color:#90c317;text-decoration:none;" href='companyforgot.php'>&nbsp; click here</a></td></tr>



</table>
</form>
</div>
</html>