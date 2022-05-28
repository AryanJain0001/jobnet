<?php 
session_start();
?>
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

<img src="images/logo1.png" width='200px' height='80px' style="float:center;margin-left:500px;margin-top:15px;"></img>

				
</div>
</header>
<div style="width:100%; height:2px;background-color:black">
</div>
<div style="float:left;background-color:#afabaa;width:100%;height:30%;">

<ul>

   <li ><a href="cprofile.php">HOME</a></li><li>&nbsp;&nbsp;</li>
  
<li><a href="editprofile.php">EDIT PROFILE</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="change.php">CHANGE PLAN</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="fillcom.php">FILL COMPANY DETAILS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewcom.php">VIEW COMPANY DETAILS</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="editcom.php">EDIT COMPANY DETAILS</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="comhistory.php">HISTORY</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>

</ul>
</div>



<div style="width:100%;height:90%;">
<form action='comhelpnext.php' method='post'>
<table border=0 style="width:37%;height:50%;margin-left:400px;margin-top:80px;box-shadow:5px 5px 5px 5px #afabaa;border-radius:10px;" rules='none'>
<tr>
<td colspan='2'align='center'><font size="6" style="color:#90c317;">HELP DESK </td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr><td width='600px' align='center' font size="4" style='font-weight:bold '>COMPANY NAME:</td>
<td width='600px' >
<input type='text' name='nm' value =''  placeholder='Enter Username'  align='center'style='width:260px;height:30px'></td>
</tr>
<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr><td width='600px' align='center' font size="4" style='font-weight:bold '>QUERY:</td>
<td width='600px'>
<input type='text'  name='query' style='width:260px;height:30px;align:left' placeholder='Enter query' value=''></td></tr>
<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr>
 <td align='center' width=50%>
     <input style="background-color:#121212;border-color:#90c317;color:#fff;width:150px;height:35px;" type='submit' value='SUBMIT'>
	</td>

   <td width=50% align='center'>
     <input style="background-color:#121212;border-color:#90c317;color:#fff;width:150px;height:35px" type='reset' value='CANCEL'>
	</td>
</tr>
</table>
</form>
</div>
</html>