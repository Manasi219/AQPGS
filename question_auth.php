<?php
session_start();
include 'config.php';
include 'question.php';

$subject = $_POST["subject"];
$unit = $_POST["unit"];
$ques = $_POST["ques"];
$marks = $_POST["marks"];

if(isset($_POST['add']))
{
    if($marks == 6){
        $message = "not inserted";
        echo "<script type='text/javascript'>window.alert('$message');";
        echo "window.location='add.php'";
        echo "</script>";
        $sql = "insert into ".unit.$unit._a."(subject,qid,qname,marks) values ('".$subject."',qid,'".$question."',".$marks.")";
    }
    else {
        $sql = "insert into ".unit.$unit."(subject,qid,qname,marks) values ('".$subject."',qid,'".$question."',".$marks.")";
    }
    if(mysql_query($sql)){
        $msg = "Record inserted successfully";
        echo "<script type='text/javascript'>window.alert('$msg');";
        echo "window.location='add.php'";
        echo "</script>";
    }
    else{
        echo"record not inserted.";
    }
}
else 
{
   echo"unable to insert"; 
}


