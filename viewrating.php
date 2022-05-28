
   <!DOCTYPE html>     
  <!-- viewing  ratings-->
  <html>
<head>

<title>JobNet</title>
	 <link rel = "icon" href = "images/logo.png" 
        type = "image/logo.png">
</head>
<body>
<div style="background-color:white;width:100%;height:100%;">
<table  height='100%' width='80%' border='0' align='center' style="background:#afabaa; color:white;box-shadow:7px 7px 7px 2px black;" cellspacing=1  cellpadding=8>
<tr><td colspan=4  ><h3 style="text-align:center"><img src="images/logo1.png"  height='100px' align='center' width='300px'></img></td></tr>
<tr>
 <td colspan=8 align='center'> <font size="7" color='black'> Ratings & Reviews  </td></br>
</tr> <tr>
<th align='left'><font size="5" style="color:#132020">Id</th>
<th align='left'><font size="5" style="color:#132020">Username</th>
<th align='left'><font size="5" style="color:#132020">Reviews</th>
<th align='left'><font size="5" style="color:#132020">Ratings</th>

<?php
$con=mysqli_connect("localhost","root","","jobnet");
$r=mysqli_query($con,"select * from review ");


while($row=mysqli_fetch_array($r))
{ echo "<tr>";
 
echo "<td><font size='5'>$row[0]</td>";
echo "<td><font size='5'>$row[1]</td>"; 
echo "<td><font size='5'>$row[2]</td>"; 
echo "<td><font size='5'>$row[3]</td>";

}
?>

</table>
  </div>
  </body>
  </html>  
 