 <!-- viewing  queries-->
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
<img src="images/logo1.png" width='300px' height='100px' style="float:center;margin-left:480px;margin-top:20px;"></img>
</div>
</header>

<div style="width:100%; height:2px;background-color:black">
</div>

<div style="float:left;background-color:#afabaa;width:100%;height:30%;">

<ul>

    
<li><a href="viewcompany.php">COMPANY DETAILS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="admin.php">FILL COMPANY DETAILS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="viewreg.php">RESISTRATION</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="viewcv.php">APPLIED</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewquery.php">QUERIES</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="viewreplies.php">REPLIES</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="viewsave.php" style="display:block;">SAVED JOBS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li class='li active'><a href="history.php" style="display:block;">HISTORY</a></li>
</ul>
</div>

<br><br>
<div style="background-color:white;width:100%;height:100%;">
<table  height='100%' width='100%' border='0' align='center' style="background:#afabaa; color:white;box-shadow:7px 7px 7px 2px black;margin-top:-10px;" cellspacing=1  cellpadding=8>
<tr>
 <td colspan=8 align='center'> <font size="7" color='black'>ALL COMPANIES</td></br>
</tr> <tr>
<th align='left' style="color:#132020">Id</th>

<th align='left' style="color:#132020">COMPANY NAME</th>
<th align='left' style="color:#132020">POST</th>
<th align='left' style="color:#132020">CONTACT</th>
<th align='left' style="color:#132020">ADDRESS</th>
<th align='left' style="color:#132020">ACTIVITY</th>


<?php
$con=mysqli_connect("localhost","root","","jobnet");
$r=mysqli_query($con,"select * from allcompany ");


while($row=mysqli_fetch_array($r))
{ echo "<tr>";
 
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>"; 
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td></tr>";

}
?>
  </table>
  </div>
  </body>
  </html>  