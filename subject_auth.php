<?php
session_start();
include 'sub_db.php';
include 'subject.php';
//echo "you are on subject_auth page <br><br>";

$tname = $_POST["tname"];
$course = $_POST["subject"];
$code = $_POST['code'];

if((isset($_POST['add'])) || (isset($_POST['remove']))){
    if(isset($_POST['add'])){

        $sql = "Insert into course(username,course,course_code) values ('".$tname."','".$course."','".$code."')";
        $a = "Insert into $tname(course,course_id) values ('".$course."','".$code."')";
        if(mysql_query($sql)){
            if(mysql_query($a)){
                $msg = "Subject assigned successfully";
                 echo "<script type='text/javascript'>window.alert('$msg');";
                 echo "window.location='subject.php'";
                 echo "</script>";
            }
        }
        else{
            $msg = "Subject already assigned";
            echo "<script type='text/javascript'>window.alert('$msg');";
            echo "window.location='subject.php'";
            echo "</script>";
        }

    }

    if(isset($_POST['remove'])){

        $sql = "delete from course where course_code = '".$code."'";
        $a = "delete from $tname where course_id = '".$code."'";
        if(mysql_query($sql)){
            if(mysql_query($a)){
            $msg = "Subject removed successfully";
            echo "<script type='text/javascript'>window.alert('$msg');";
            echo "window.location='subject.php'";
            echo "</script>";
            }
        }
    }
}



