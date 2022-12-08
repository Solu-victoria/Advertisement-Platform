<?php
include "connection.php";
include "auth.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; ?>
<body>

<!--top bar start-->
<?php include "topbar.php"; ?>
<!--top bar start end--> 

<!--header start-->
<?php include "header.php"; ?>
<!--header start end--> 

<!--inner start-->
<div class="inner-heading">
  <div class="container">
    <h1>Contact Us</h1>
  </div>
</div>
<!--inner end-->

<div class="inner-wrap">
  <div class="container"> 
    <!--contact start-->
    <div class="contact-info">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="contactWrp">
            <div class="contact-icon"> <i class="fa fa-map-marker" aria-hidden="true"></i> </div>
            <h5>Our Location</h5>
            <p>8500 lorem, New Ispum, Dolor amet sit 12301</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="contactWrp">
            <div class="contact-icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
            <h5>Call Us</h5>
            <p>Phone : +12 345 67 09 <br>
              Fax : +12 345 67 09</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="contactWrp">
            <div class="contact-icon"> <i class="fa fa-laptop" aria-hidden="true"></i> </div>
            <h5>Connect Online</h5>
            <p>Email : info@yoursite.com <br>
              Email : info@yoursite.com </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="contactWrp">
            <div class="contact-icon"> <i class="fa fa-globe" aria-hidden="true"></i> </div>
            <h5>Visit Us</h5>
            <p>Website : www.yoursite.com<br>
              Website : www.yoursite.com</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <form>
          <div class="row">
            <div class="col-sm-6">
              <div class="input-wrap">
                <input type="text" name="name" placeholder="Full Name" class="form-control">
                <div class="form-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input-wrap">
                <input type="text" name="phone" placeholder="Your Phone" class="form-control">
                <div class="form-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
              </div>
            </div>
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
            <button class="sub" type="submit" value="submit" name="submitted"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Send Message</button>
          </div>
        </form>
      </div>
      <div class="col-md-6">
      <div class="mapWrp">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3439665.415133291!2d-85.42187768895461!3d32.658159955276645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f136c51d5f8157%3A0x6684bc10ec4f10e7!2sGeorgia!5e0!3m2!1sen!2sus!4v1505905563776" width="100" height="300" style="border:0" allowfullscreen></iframe>
      </div>
      </div>
    </div>
    <!--contact end--> 
  </div>
</div>

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
</body>

<!-- Mirrored from malikhassan.com/html/classified/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jan 2022 21:17:56 GMT -->
</html>