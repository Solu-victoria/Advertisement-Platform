<div class="topbar-wrap">
  <div class="container"> 
    <!-- row start -->
    <div class="row"> 
      <!-- col-md-4 start -->
      
      
      <?php 
    if ($email != "") {
      ?>
      <div class="col-md-4 col-sm-6 col-xs-6">
        <div class="user-wrap">
          <!-- <div class="login-btn"><a href="login.html">Login</a></div> -->
          <div class="register-btn"><a href="#">Welcome <?php echo "Swanky"; ?></a></div>
          <div class="clearfix"></div>
        </div>
      </div>
      <?php 
    }else{
    ?>
    <div class="col-md-4 col-sm-6 col-xs-6">
        <div class="user-wrap">
          <div class="login-btn"><a href="login.php">Login</a></div>
          <div class="register-btn"><a href="register.php">Register</a></div>
          <div class="clearfix"></div>
        </div>
      </div>
      <?php
    }
    ?>
      <!-- col-md-4 end --> 
      
      <!-- col-md-4 start -->
      <div class="col-md-8 col-sm-6 col-xs-6">
        <ul class="social-wrap">
          <li><a href="#."><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
          <li><a href="#."><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
          <li><a href="#."><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
          <li><a href="#."><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
          <li><a href="#."><i class="fa fa-vimeo-square" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <!-- col-md-4 end --> 
    </div>
    <!-- row end --> 
  </div>
</div>