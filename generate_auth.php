<?php
ob_start();
session_start();
include'generate_home.php';

if(isset($_POST['unit'])){
     header('Location: unit.php');
}

if(isset($_POST['final'])){
     header('Location: generate.php');
}

?>
