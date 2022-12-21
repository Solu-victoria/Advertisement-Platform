<?php
include "auth.php";

$mark=$_GET['mark'];
$idd=$_GET['id'];

$query = mysqli_query($link, "SELECT * from products where id='$idd'");
$row = mysqli_fetch_assoc($query);
$vendorId = $row["vendor_id"];

$sel = mysqli_query($link, "SELECT * from vendors where id = '$vendorId'");
$fet = mysqli_fetch_assoc($sel);

if($fet['is_approved']){
    $sql = "UPDATE products SET status='$mark' WHERE id='$idd'";
    $update = mysqli_query($link, $sql) or die(mysqli_error($link));
    
    If ($update){
    echo "<script>window.open('view_ads.php', '_self')</script>";
    }
}else{
    echo "<script>alert('Vendor\'s KYC not verified')</script>";
    echo "<script>window.open('view_ads.php', '_self')</script>";
}


?>