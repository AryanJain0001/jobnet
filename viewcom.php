
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
<div style="background-color:#afabaa;width:112.7%;height:17%;">
 	 &nbsp;&nbsp; <a style="text-decoration:none;color:#90c317" href="comdelete.php" ><button class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="background-color:transparent;button-hover:white;float:right;margin-right:10px;width:30px;height:30px;font-size:18px;border-color:transparent;"><span align='center' style='color:red;' class='mr-2 icon-power-off'></span></a></button>
 	 &nbsp;&nbsp; <a style="text-decoration:none;color:#90c317" href="commsg.php" ><button class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="background-color:transparent;button-hover:white;float:right;margin-right:10px;width:30px;height:30px;font-size:18px;border-color:transparent;"><span align='center' style='color:#90c317;' class='mr-2 icon-chat'></span></a></button>
 	 &nbsp;&nbsp; <a style="text-decoration:none;color:#90c317" href="comhelp.php" ><button class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="background-color:transparent;button-hover:white;float:right;margin-right:10px;width:30px;height:30px;font-size:18px;border-color:transparent;"><span align='center' style='color:yellow;' class='mr-2 icon-help'></span></a></button>

<img src="images/logo1.png" width='200px' height='80px' style="float:center;margin-left:500px;margin-top:15px;"></img>

				
</div>
</header>
<div style="width:112.7%; height:2px;background-color:black">
</div>
<div style="float:left;background-color:#afabaa;width:112.7%;height:30%;">

<ul>

   <li ><a href="cprofile.php">HOME</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
   
<li><a href="editprofile.php">EDIT PROFILE</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li  ><a href="change.php">CHANGE PLAN</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>

<li  ><a href="fillcom.php">FILL COMPANY DETAILS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li class='active'><a href="viewcom.php">VIEW COMPANY DETAILS</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="editcom.php">EDIT COMPANY DETAILS</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>

</ul>
</div>

<div style="width:112.7%; height:2px;background-color:black">
</div>

<div style="width:112.7%;height:90%;background-color:white;">
<table  height='90%' width='100%' border='0' align='center' style="background:#afabaa; color:white;margin-top:-18px;box-shadow:7px 7px 7px 2px black;" cellspacing=1  cellpadding=8>
<tr>
 <td colspan=17 align='center'> <font size="10" color='black'> Companies  details.</td></br>
</tr> <tr>
<th style="color:#132020">Id</th>
<th style="color:#132020">Logo</th>
<th style="color:#132020">Company name</th>
<th style="color:#132020">Post</th>
<th style="color:#132020">Field</th>
<th style="color:#132020">Location</th>
<th style="color:#132020">Type</th>
<th style="color:#132020">Photo</th>
<th style="color:#132020">Published on</th>
<th style="color:#132020">Vacancy</th>
<th style="color:#132020">Experience</th>
<th style="color:#132020">Salary</th>
<th style="color:#132020">Gender</th>
<th style="color:#132020">Deadline</th>
<th style="color:#132020">Description</th>
<th style="color:#132020">Requirement</th>
<th style="color:#132020">Education/Experience</th>

<?php
$cnm=$_SESSION['cnm'];
$con=mysqli_connect("localhost","root","","jobnet");
$r=mysqli_query($con,"select * from companyfill where companyname='$cnm' ");


if($row=mysqli_fetch_array($r))
{ echo "<tr>";
 
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>"; 
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>"; 
echo "<td>$row[8]</td>";
echo "<td>$row[9]</td>";
echo "<td>$row[10]</td>";
echo "<td>$row[11]</td>";
echo "<td>$row[12]</td>";
echo "<td>$row[13]</td>"; 
echo "<td>$row[14]</td>";
echo "<td>$row[15]</td>";
echo "<td>$row[16]</td>";

echo "</tr>";

}
else
{
	echo mysqli_error($con);
  }
?>
  </table>
  </div>
  </body>
  </html>  