<?php
ob_start();
session_start();

include 'connect_db.php';
include 'index.php';
//$username  = $_POST["username"];
//$password  = $_POST["password"];

if(isset($_POST['login']))
{
    include 'connect_db.php';
    $username  = $_POST["username"];
    $password  = $_POST["password"];
    $result = mysql_query('select * from teacher where username = "'.$username.'" and password = "'.sha1($password).'"');
    if(mysql_num_rows($result) == 1)
    {
        $_SESSION['username'] = $username;
       
        if($_POST["username"] == "admin")
        {
            header('Location: admin_home.php');
        }
        else
        {
            header('Location: welcome_user.php');
        }
    }
    else 
    {
        $message = "username or password invalid...!!";
        echo "<script type='text/javascript'>window.alert('$message');";
        echo "window.location='index.php'";
        echo "</script>";
    }
        
 }
 