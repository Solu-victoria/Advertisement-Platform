<?php
include "auth.php";

$mark=$_GET['mark'];
$idd=$_GET['id'];

$sql = "UPDATE products SET status='$mark' WHERE id='$idd'";
$update = mysqli_query($link, $sql) or die(mysqli_error($link));

If ($update){
echo "<script>window.open('view_ads.php', '_self')</script>";
}
?>