<!DOCTYPE html>
<html>
<head>
<title>JobNet</title>
 <link rel = "icon" href = "images/logo.png" 
        type = "image/logo.png">
<style>
ul {
	width:112.7%;

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
<div style="background-color:#afabaa;width:139%;height:20%;">
<a href='adm.php'><input type='image' src="images/logo1.png" width='300px' height='100px' style="float:center;margin-left:480px;margin-top:20px;"></img></a>
</div>
</header>


<div style="width:139%; height:2px;background-color:black">
</div>

<div style="float:left;background-color:#afabaa;width:123.4%;height:30%;">

<ul>

<li  class='li active'><a href="viewcompany.php">COMPANY DETAILS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="admin.php">FILL COMPANY DETAILS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="viewreg.php">RESISTRATION</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewcv.php">APPLIED</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewquery.php">QUERIES</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewreplies.php">REPLIES</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewsave.php" style="display:block;">SAVED JOBS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
</ul>
</div>

<div style="width:100%;height:90%;background-color:white;">
<table  height='90%' width='100%' border='0' align='center' style="background:#afabaa; color:white;box-shadow:7px 7px 7px 2px black;" cellspacing=1  cellpadding=8>
<tr>
 <td colspan=17 align='center'> <font size="7" color='black'> Companies  details.</td></br>
</tr> <tr>
<th  style="color:#132020">Id</th>
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
$con=mysqli_connect("localhost","root","","jobnet");
$r=mysqli_query($con,"select * from companyfill ");


while($row=mysqli_fetch_array($r))
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



}
?>
  </table>
  </div>

  </body>
  </html>  