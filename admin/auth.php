<?php
session_start();
include "connection.php";
$email2=$_SESSION['email2'];
if(!isset($email2)){
    echo "<script>window.open('login.php','_self')</script>";
}

?>