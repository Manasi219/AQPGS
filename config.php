<?php

$servername = "localhost";
$username = "root";
$password="";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
$db_oomd = mysql_select_db("oomd");
//$db_os = mysql_select_db("os");
//$db_mp = mysql_select_db("mp");
//$db_java=  mysql_select_db("java");
//echo "Connected successfully";
?>

