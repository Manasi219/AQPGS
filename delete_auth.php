<?php
session_start();
include 'config.php';
include 'delete.php';

if(isset($_POST['delete']))
{
    $ques_id = $_POST["ques_id"];
    $unit = $_POST["unit"];
    $marks = $_POST['marks'];
    
    if($marks == 6){
        $sql = "delete from ".unit.$unit._a." where qid = $ques_id";
    }
    else{
        $sql = "delete from ".unit.$unit." where qid = $ques_id";
    }
   
    if(mysql_query($sql)){
        $msg = "Record deleted successfully";
        echo "<script type='text/javascript'>window.alert('$msg');";
        echo "window.location='delete.php'";
        echo "</script>";
    }
    else{
        $msg = "Please enter valid Fields..!!";
        echo "<script type='text/javascript'>window.alert('$msg');";
        echo "window.location='delete.php'";
        echo "</script>";
    }
}
