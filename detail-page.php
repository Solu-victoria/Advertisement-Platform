<?php
include "connection.php";
include "auth.php";
$id=$_GET['id'];
$query=mysqli_query($link, "SELECT * from products where id = '$id'");
$fetch=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; ?>
<body>

<?php include "topbar.php"; ?>

<?php include "header.php"; ?>

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
        <h2>Description</h2>
        <p><b>Color:</b> <?php echo $fetch['color']; ?></p>
        <p><b>Size:</b> <?php echo $fetch['size']; ?></p>
        <p> <?php echo $fetch['description']; ?> </p>
        <h2>Shopping Guide</h2>
        <ul class="featureLinks">
          <li>Donec elementum pharetra dapibus</li>
          <li>Nam dictum vestibulum diam</li>
          <li>Orci varius natoque penatibus et magnis</li>
          <li>Proin facilisis ante in turpis venenatis</li>
          <li>Vestibulum lectus ex, faucibus</li>
          <li>Morbi efficitur elit ac dolor porttitor</li>
          <li>Fusce rhoncus vehicula lacus vitae</li>
          <li>Sed porttitor risus vitae justo gravida</li>
        </ul>
      </div>
      <div class="col-md-4">
        <div class="sidebarWrp">
          <div class="userinfo">
            <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
            <h3><?php echo ucfirst($fetch['seller']); ?></h3>
            <p>Member Since 2014</p>
            <div class="readmore"><a href="#"><?php echo $fetch['location']; ?></a></div>
          </div>
          <div class="innerprice">$<?php echo $fetch['price']; ?></div>
          <div class="phone">(777) 123 4567</div>
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
<div class="footer-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <h3>ABOUT Classify</h3>
        <div class="footer-logo"><img src="images/footer-logo.png" alt=""></div>
        <p>Integer ac lorem sit amet est rhoncus dapi bus don cad pede acus morbi elit nunc molestie at ultrices eu eleifen lorem ut dictum erat masa... <a href="#">Read More</a></p>
      </div>
      <div class="col-md-2 col-sm-6">
        <h3>Quick  LInks</h3>
        <ul class="footer-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Features</a></li>
          <li><a href="#">Categories</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6">
        <h3>MAIN CATEGORIES</h3>
        <ul class="footer-category">
          <li><a href="#">Automotive</a></li>
          <li><a href="#">Humanities</a></li>
          <li><a href="#">Computers</a></li>
          <li><a href="#">Education</a></li>
          <li><a href="#">Health / Fitness</a></li>
          <li><a href="#"> Internet Services</a></li>
          <li><a href="#">Marketing</a></li>
          <li><a href="#">Technology</a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-3 col-sm-6">
        <h3>MAIN CATEGORIES</h3>
        <div class="address">Lorem # 38, Ispum Hill, Lorem, WA 12345 </div>
        <div class="info"><i class="fa fa-phone" aria-hidden="true"></i> <a href="#">(777) 123 4567</a></div>
        <div class="info"><i class="fa fa-fax" aria-hidden="true"></i> <a href="#">(123) 456 7890</a></div>
      </div>
    </div>
    <div class="copyright">Copyright © 2017 Classify - All Rights Reserved.</div>
  </div>
</div>

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