<?php
session_start();
include "connection.php";
include "functions.php";

$token = $_GET['token'];

$query = mysqli_query($link, "SELECT * from vendors where is_verified='$token'");
$fetch = mysqli_fetch_assoc($query);
$email = $fetch['email'];
$id = $fetch['id'];

$count = mysqli_num_rows($query);

if ($count == 0) {
    $_SESSION['errormessage'] = 'Failed to complete email verification.';
    redirect_to('login.php');
} else {
    mysqli_query($link, "UPDATE vendors set is_verified='1' where id = '$id'");
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $id;
    $_SESSION['successmessage'] = 'Your Email has been verified successfully';
    redirect_to('ad-post.php');
}