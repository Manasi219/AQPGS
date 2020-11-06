<?php
ob_start();
session_start();
error_reporting(E_ERROR);
if(isset($_POST["assign"])){
    
    include 'config1.php';
    include 'home.php';
    $course = $_POST["course"];
    $course_id = $_POST["course_id"];

    $result = mysql_query("select * from  poorvac  where course = '".$course."' and course_id = '".$course_id."'");
    
    if(mysql_num_rows($result) == 1){
        
        $_SESSION['course'] = $course;
        $_SESSION['id'] = $course_id;
        //echo $_SESSION['id'];
        //echo $sub;
        header('location: add.php');
    }
    else{
        $msg = "Invalid input";
        echo "<script type='text/javascript'>window.alert('$msg');";
        echo "window.location='home.php'";
        echo "</script>";
    }
}
