<?php
session_start();
session_destroy();

header("location:comlogin.php");
?>