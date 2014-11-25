<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbfmo-2";

// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die('Could not connect: ' . mysql_error());
} 
else
mysql_select_db($dbname, $conn);
//$conn->close();

?>