<?php
include "connection.php";
$id=$_GET['id'];

$delete= mysqli_query($link, "DELETE from rooms where id='$id'");
if($delete){
	echo "<script>alert('Room Deleted Successfully')</script>";
	echo "<script>window.open('all_rooms.php', '_self')</script>";
}
?>