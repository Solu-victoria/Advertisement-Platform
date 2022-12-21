<?php
include "auth.php";

$idd=$_GET['id'];

$sql = "UPDATE vendors SET is_approved='1' WHERE id='$idd'";
$update = mysqli_query($link, $sql) or die(mysqli_error($link));

If ($update){
echo "<script>window.open('vendors.php', '_self')</script>";
}
?>