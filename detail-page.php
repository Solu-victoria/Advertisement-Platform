<?php
include "connection.php";
include "auth.php";
$idd=$_GET['id'];
$vId=$_GET['vId'];

$query=mysqli_query($link, "SELECT * from products where id = '$idd'");
$fetch=mysqli_fetch_array($query);

$query2=mysqli_query($link, "SELECT * from vendors where id='$vId'");
$fetch2=mysqli_fetch_array($query2);
?>
<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; ?>
<body>

<?php include "topbar.php"; ?>

<?php include "header.php";?>

<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h1>Detail Page</h1>
  </div>
</div>
<!--inner heading end--> 

<!--Detail page start-->
<div class="inner-wrap about">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div id="main" role="main">
          <div class="slider">
            <div class="flexslider innerslider">
              <ul class="slides">
                <li data-thumb="product_images/<?php echo $fetch['img1']; ?>"> <img src="product_images/<?php echo $fetch['img1']; ?>" alt=""/> </li>
                <li data-thumb="product_images/<?php echo $fetch['img2']; ?>"> <img src="product_images/<?php echo $fetch['img2']; ?>" alt=""/> </li>
                <li data-thumb="product_images/<?php echo $fetch['img3']; ?>"> <img src="product_images/<?php echo $fetch['img3']; ?>" alt=""/> </li>
                <li data-thumb="product_images/<?php echo $fetch['img4']; ?>"> <img src="product_images/<?php echo $fetch['img4']; ?>" alt=""/> </li>
              </ul>
            </div>
          </div>
        </div>
        <h2>Shopping Guide</h2>
        <p><b>Color:</b> <?php echo $fetch['color']; ?></p>
        <p><b>Size:</b> <?php echo $fetch['size']; ?></p>
        <p> <?php echo $fetch['description']; ?> </p>
      </div>
      <div class="col-md-4">
        <div class="sidebarWrp">
          <div class="userinfo">
            <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
            <h3><?php if ($vId === '0') {
														echo 'Onyinye Fashion Enterprise';
													}else {
														echo $fetch2['first_name'].' '. $fetch2['last_name'];
													} ?>
          
            <div class="readmore"><a href="#"><?php if ($vId === '0') {
														echo 'Nsukka, Nigeria';
													}else {
														echo $fetch2['location'];
													}
													?></a></div>
          </div>
          <div class="innerprice">$<?php echo $fetch['price']; ?></div>
          <div class="phone"><?php if ($vId === '0') {
														echo '8134555430';
													}else {
														$fetch2['phone'];
													} ?></div>
          <!-- <div class="mapWrp">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30593401584!2d-74.25986539089548!3d40.69714941954754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2sus!4v1506615745397" width="100" height="250" style="border:0" allowfullscreen></iframe>
          </div> -->
          <form>
            <div class="contactWrp">
              <h3>Contact Now</h3>
              <div class="input-wrap">
                <input type="text" name="name" placeholder="First Name:" class="form-control">
                <div class="form-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
              </div>
              <div class="input-wrap">
                <input type="text" name="name" placeholder="Last ame:" class="form-control">
                <div class="form-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
              </div>
              <div class="input-wrap">
                <input type="text" name="email" placeholder="Your Email" class="form-control">
                <div class="form-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
              </div>
              <div class="input-wrap">
                <textarea class="form-control" placeholder="Type Your Message here.."></textarea>
                <div class="form-icon"><i class="fa fa-comment" aria-hidden="true"></i></div>
              </div> 
              <div class="contact-btn">
                <button class="sub" type="submit" value="submit" name="submitted"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Submit Now</button>
              </div>
            </div>
          </form>
            <br>
          <form method='post'>
            <h3>Subscribe</h3>
            <div class="input-wrap">
              <input type="text" name="email" placeholder="Your Email" class="form-control">
              <div class="form-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            </div>
            <div class="contact-btn">
                <button class="sub" type="submit" value="submit" name="submit"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Subscribe</button>
              </div>
          </form>
          <div class="safety-tips">
            <h3>Safety Tips</h3>
            <ul class="featureLinks">
              <li>Donec elementum pharetra</li>
              <li>Quisque mattis eget </li>
              <li>Aenean laoreet, urna non</li>
              <li>Nullam convallis</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Detail page end--> 

<!--=================================================--> 
<!--footer start-->
<?php include "footer.php"; ?>

<!--footer end--> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 

<!-- general script file --> 
<script src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/script.js"></script> 
<script defer src="js/jquery.flexslider.js"></script> 
<script type="text/javascript">
  
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
</body>

<!-- Mirrored from malikhassan.com/html/classified/detail-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jan 2022 21:17:35 GMT -->
</html>
<?php
if (isset($_POST['submit'])) {
  $email=mysqli_real_escape_string($link, $_POST['email']);

  $res = mysqli_query($link, "select * from subscription where email ='$email' AND vendor_id='$vId'");
  $count = mysqli_num_rows($res);

  if ($count>0) {
    echo "<script>alert('You have previously subscribed to this vendor before!!')</script>";
  }else {
    
    $sql = "INSERT into subscription (vendor_id,email,date) values ('$vId', '$email', NOW())";

    $insert= mysqli_query($link, $sql) 
            or die(mysqli_error($link));

    if($insert) {

      echo "<script>alert('You have successfully subscribed!!')</script>";
    }
  }
}