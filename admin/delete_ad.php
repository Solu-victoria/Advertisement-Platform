<?php
include "auth.php";
$id=$_GET['id'];

$delete= mysqli_query($link, "DELETE from products where id='$id'");
if($delete){
	echo "<script>alert('Ad Deleted Successfully')</script>";
	echo "<script>window.history.back()</script>";
}
?>