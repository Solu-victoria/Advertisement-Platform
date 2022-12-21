<?php
include "auth.php";
$id=$_GET['id'];

$delete= mysqli_query($link, "DELETE from vendors where id='$id'");
$delete= mysqli_query($link, "DELETE from products where vendor_id='$id'");
if($delete){
	echo "<script>alert('Vendor Deleted Successfully')</script>";
	echo "<script>window.history.back()</script>";
}
?>