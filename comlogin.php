<!DOCTYPE html>
<html>

 <head>
 <title>JobNet</title>
	 <link rel = "icon" href = "images/logo.png" 
        type = "image/logo.png">
   <script>
     function logins(name,pass)
	  {if (name=='company'&& pass=='123')
	    window.location.href='comsignup.php' 
	  else if (name=='')
	  alert("enter  username" );
	  else if (pass=='')
	   alert("enter  password ");
	   else
	    alert("invalid  username and password" );
	   
	  }
	</script> 
	</head>
	<body>
	<div style="background-color:white;width:100%;height:100%;">
	<form name='mylogin' >
<table   border='0' width=50%; align='center' style="background:#afabaa; color:white;" cellspacing=0 rules='none' cellpadding=14>
<tr><td style="margin-top:70px;"colspan=2 ><h3 style="text-align:center"><img src="images/logo1.png"  height='100px' align='center' width='300px'></img></br> </h3> </td></tr>
<tr><tr><td></tr></td><tr><td></tr></td><tr><td></tr></td><tr><td></tr></td><tr><td></tr></td><tr><td></tr></td></tr><tr><td></tr></td></tr>
<tr> <td colspan=2 align='center' style="margin-top:-400px;"> <font size="6" color='black' >COMPANY LOGIN HERE </td>
</tr> 
<tr><td width='600px' align='center'>
<font size="4" >USER NAME:<td width='600px' >
<input type='text'  required name='nm' value ='' maxlength=7 placeholder='Enter Username'  align='center'style='width:300px;height:30px'></td>
</tr>
<tr><td width='600px' align='center' >
<font size="4">PASSWORD:<td width='600px'>
<input type='password'  required name='pass' value='' placeholder='Enter Password'  align='center' style='width:300px;height:30px'></td>
</tr></td>
 

<tr>
<td colspan=2 align='center' >
<input style="color:black;font-weight:bold;width:100px;height:30px;" type='button' name='btn' value='LOGIN'
  onclick='logins(nm.value,pass.value)'>
  <input style="color:black;font-weight:bold;width:100px;height:30px;;"style="background-color:#90c317;" type='reset' value='CANCEL'></td>
</tr><tr><td></tr></td><tr><td></tr></td><tr><td></tr></td></tr><tr><td></tr></td></tr><tr><td></tr></td></tr>
</table>
</div>

</form>
</body>