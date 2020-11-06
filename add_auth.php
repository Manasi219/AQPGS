<?php
session_start();
include 'config.php';
include 'add.php';

$question = $_POST["ques"];
$unit = $_POST["unit"];
$marks = $_POST["marks"];

if(isset($_POST['add']))
{
    if($marks == 6){
        
        $sql = "insert into ".unit.$unit._6."(qid,qname,marks) values (qid,'".$question."',".$marks.")";
    }
    else {
        $sql = "insert into ".unit.$unit."(qid,qname,marks) values (qid,'".$question."',".$marks.")";
    }
    if(mysql_query($sql)){
        $msg = "Record inserted successfully";
        echo "<script type='text/javascript'>window.alert('$msg');";
        echo "window.location='add.php'";
        echo "</script>";
    }
    else{
        $msg = "Record not successfully";
        echo "<script type='text/javascript'>window.alert('$message');";
        echo "window.location='add.php'";
        echo "</script>";
    }
}


