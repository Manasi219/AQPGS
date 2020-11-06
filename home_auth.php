<?php
session_start();
ob_start();
include 'config1.php';
//include 'home.php';
//if( !isset( $_SESSION['username'] ) ) 
   // mysql_close($db); 
    //header('Location: index.php');



if(isset($_POST["assign"])){
    include 'config1.php';
    $course = $_POST["course"];
    $course_id = $_POST["course_id"];
    $result = mysql_query("select * from poorvac where course = '".$course."' and course_code = '".$course_id."'");
    
    if(mysql_num_rows($result) == 1){
        
        $_SESSION['course_id'] = $course_id;
        header('location: add.php');
        
    }
    else{
        $msg = "Invalid input";
        echo "<script type='text/javascript'>window.alert('$msg');";
        echo "window.location='h_auth.php'";
        echo "</script>";
    }
}
