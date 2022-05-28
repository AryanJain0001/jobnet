<?php
session_start();
?>
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
<a style="text-decoration:none;color:#90c317;" href="addelete.php"><button class="btn btn-primary border-width-2 d-none d-lg-inline-block" style="background-color:transparent;button-hover:white;float:right;margin-right:10px;width:30px;height:30px;font-size:18px;border-color:transparent;"><span align='center' style='color:red;' class='mr-2 icon-power-off'></span></a></button>

<a href='adm.php'><input type='image'  src="images/logo1.png" width='300px' height='100px' style="float:center;margin-left:480px;margin-top:20px;"></img></a>

</div>
</header>

<div style="width:100%; height:2px;background-color:black">
</div>

<div style="float:left;background-color:#afabaa;width:100%;height:30%;">

<ul>

    
<li><a href="viewcompany.php">COMPANY DETAILS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="admin.php">FILL COMPANY DETAILS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li ><a href="viewreg.php">RESISTRATION</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewcv.php">APPLIED</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewquery.php">QUERIES</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewreplies.php">REPLIES</a></LI><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="viewsave.php" style="display:block;">SAVED JOBS</a></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
</ul>
</div>

<div style="width:100%;height:50%;background-color:white;">
<h1 style="font-size:60px;font-color:#90c317;margin-left:500px;margin-top:200px;">WELCOME</h1>
</div>
<footer></footer>
</body>
</html>