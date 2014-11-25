<?php
require 'Connect.php';
session_start();
if(isset($_SESSION['userName']))
  unset($_SESSION['userName']);
  
if(isset($_SESSION['name']))
  unset($_SESSION['name']);

 session_destroy();
 mysql_close($conn);
header("location: main_login.php")
?>