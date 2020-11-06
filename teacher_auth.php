<?php
session_start();
include 'config1.php';
include 'connect_db.php';

$name = $_POST["name"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];


if((isset($_POST['add'])) || (isset($_POST['delete']))){
    
    if(isset($_POST['add']))
    {
        if((empty($username)) || (empty($name)) || (empty($password)) || (empty($email))){ 
            echo"empty..!!!"; 
        }
        else{
            $sql = "insert into teacher (name,username,password,email) values ('".$name."','".$username."','".sha1($password)."','".$email."');";
            $result1 = "select * from teacher where username = $username";
            mysql_query($result1);
            if(mysql_query($sql)){
                if($result1->num_rows == 0){
                    $msg = "Record added successfully";
                    echo "<script type='text/javascript'>window.alert('$msg');";
                    echo "window.location='teacher.php'";
                    echo "</script>";
                    $table = "CREATE TABLE sub_assign.".$username." (course VARCHAR(50) NOT NULL UNIQUE KEY,
                                                          course_id VARCHAR(20) NOT NULL UNIQUE KEY)";
                    mysql_query($table);
                }
            }
            else{
                if($result1->num_rows == 0){
                    $msg = "Username already exists.";
                    echo "<script type='text/javascript'>window.alert('$msg');";
                    echo "window.location='teacher.php'";
                    echo "</script>";
                }
                else{
                    $msg = "Record could not be added";
                    echo "<script type='text/javascript'>window.alert('$msg');";
                    echo "window.location='teacher.php'";
                    echo "</script>"; 
                }
            }
        }
    }
    
    
    if(isset($_POST['delete']))
	//(isset($_POST['delete']))
    {
        $sql = "delete from teacher where username = '".$username."'";
        $result1 = "select * from teacher where username = $username";
        error_reporting(E_ALL ^ E_WARNING); 
        $row = mysql_num_rows($result1);
        if(mysql_query($sql)){ 
            if($row == 0){
                $msg = "Record deleted successfully";
                echo "<script type='text/javascript'>window.alert('$msg');";
                echo "window.location='teacher.php'";
                echo "</script>";
                echo"deleted..!!!!!!!!!!!!!!!";
                $table = "DROP TABLE sub_assign.".$username."";
                mysql_query($table);
            }
        }
        else{
            $msg = "Could not be removed.";
            echo "<script type='text/javascript'>window.alert('$msg');";
            echo "window.location='teacher.php'";
            echo "</script>";
            echo"NOT deleted..!!!!!!!!!!!!!!";
        }
    }
}

        
        
        
        /*else{
    $msg = "Please enter valid fields.";
    echo "<script type='text/javascript'>window.alert('$msg');";
    echo "window.location='teacher.php'";
    echo "</script>";
}*/
