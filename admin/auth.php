<?php
session_start();
include "connection.php";
$email=$_SESSION['email'];
if(!$email){
    echo "<script>window.open('login.php')</script>";
}

?>