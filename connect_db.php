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
$db_selected = mysql_select_db("login");
?>

