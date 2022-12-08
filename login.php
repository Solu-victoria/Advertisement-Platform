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

<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h1>Login</h1>
  </div>
</div>
<!--inner heading end--> 

<!--login start-->
<div class="inner-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-2"></div>
      <div class="col-md-6 col-sm-8">
        <div class="login">
          <div class="contctxt">User Login</div>
          <div class="formint conForm">
            <form method='POST'>
              <div class="input-wrap">
                <input type="email" name="email" placeholder="Email" class="form-control" required>
              </div>
              <div class="input-wrap">
                <input type="password" name="password" placeholder="Password" class="form-control" required>
              </div>
              <div class="sub-btn">
                <input type="submit" class="sbutn" name="submit" value="Login">
              </div>
              <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <a href="register.php">Register Here</a></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-2"></div>
    </div>
  </div>
</div>
<!--login end--> 

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
</body>

<!-- Mirrored from malikhassan.com/html/classified/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jan 2022 21:15:41 GMT -->
</html>

<?php
  if (isset($_POST['submit'])) { 
    $email=mysqli_real_escape_string($link, $_POST['email']);
    $password=mysqli_real_escape_string($link, $_POST['password']);

    $res = mysqli_query($link, "select * from vendors where email ='$email' AND password='$password'");
      $count = mysqli_num_rows($res);

      if ($count>0) {
       
        $_SESSION['email'] = $email;

        $row=mysqli_fetch_array($res);
        $_SESSION['id'] = $row['id'];

        echo "<script>window.open('index.php', '_self')</script>";

      }else {
        echo "<script>alert('Inputs do not match our records!! Try again.')</script>";
      
      }
  }