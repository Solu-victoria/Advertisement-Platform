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
    <h1>Register</h1>
  </div>
</div>
<!--inner heading end--> 

<!--register start-->
<div class="inner-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-2"></div>
      <div class="col-md-6 col-sm-8">
        <div class="login">
          <div class="contctxt">Please complete all fields.</div>
          <div class="formint conForm">
            <form method='POST' enctype='multipart/form-data'>
              <div class="input-wrap">
                <input type="text" name="fname" placeholder="First Name" class="form-control" required>
              </div>
              <div class="input-wrap">
                <input type="text" name="lname" placeholder="Last Name" class="form-control" required>
              </div>
              <div class="input-wrap">
                <input type="password" name="password" placeholder="Password" class="form-control" required>
              </div>
              <div class="input-wrap">
                <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control" required>
              </div>
              <div class="input-wrap">
                <input type="email" name="email" placeholder="Email" class="form-control" required>
              </div>
              <div class="input-wrap">
                <input type="text" name="city" placeholder="City" class="form-control" required>
              </div>
              <div class="input-wrap">
                <select name="country" class="form-control" required>
                  <option value>Select Country </option>
                  <option value="Nigeria">Nigeria </option>
                  <option value="USA">USA </option>
                  <option value="Germany">Germany </option>
                  <option value="UK">UK </option>
                </select>
              </div>
              <div class="input-wrap">
                <input type="text" name="zcode" placeholder="Zip code" class="form-control" required>
              </div>
              <div class="input-wrap">
                <input type="text" name="phone" placeholder="Phone Number" class="form-control" required>
              </div>
              <div class="input-wrap">
                <input type="file" name="file" accept="application/pdf, image/*" class="form-control" required>
                <label for="file">Upload official document for your verification (NIN/Passport/Voters'Card/Driver's License)</label>
              </div>
              <div class="sub-btn">
                <input type="submit" class="sbutn" name="submit">
              </div>
              <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> Have an account? <a href="login.php">Login Here</a></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-2"></div>
    </div>
  </div>
</div>
<!--register end--> 

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

<!-- Mirrored from malikhassan.com/html/classified/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jan 2022 21:15:41 GMT -->
</html>

<?php
  if (isset($_POST['submit'])) {
    $fname=mysqli_real_escape_string($link, $_POST['fname']);
    $lname=mysqli_real_escape_string($link, $_POST['lname']);
    $password=mysqli_real_escape_string($link, $_POST['password']);
    $cpassword=mysqli_real_escape_string($link, $_POST['cpassword']);
    $zcode=mysqli_real_escape_string($link, $_POST['zcode']);
    $email=mysqli_real_escape_string($link, $_POST['email']);
    $phone=mysqli_real_escape_string($link, $_POST['phone']);
    $country=mysqli_real_escape_string($link, $_POST['country']);
    $city=mysqli_real_escape_string($link, $_POST['city']);
    $location=$city.', '.$country;
    
    if ($password === $cpassword) {
      
      $Fname=$_FILES['file']['name'];
      $fsize=$_FILES['file']['size'];
      $ftemp=$_FILES['file']['tmp_name'];
      $error = $_FILES['file']['error'];

      $res = mysqli_query($link, "select * from vendors where email ='$email'") or die(mysqli_error($link));
      $count = mysqli_num_rows($res);
      if ($count>0) {
        echo "<script>alert('Email must be unique, This one already exists!!')</script>";
      
      }elseif ($Fname === '') {
        echo "<script>alert('Input a document for verification!!')</script>";

      }elseif ($fsize > 2000000) {
        echo "<script>alert('Document should be less than or equal to 2mb!!')</script>";

      }else {
        
      
        $fileExt = explode('.', $Fname);
        $fileActual = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg', 'png', 'pdf');
  // if (isset($Fname)) {
  //   echo $Fname;
  // }
        if (in_array($fileActual,$allowed)){
        
          if($error === 0){
            $uniq = uniqid('', true) . '.' . $fileActual;
            $fileDest = "vendor_docs/" . $uniq;
            move_uploaded_file($ftemp,$fileDest);
          
            $sql = "INSERT into vendors (first_name,last_name,password,location,zipcode, email,phone, file) values ('$fname','$lname','$password','$location','$zcode','$email','$phone', '$fileDest')";
              
            $insert= mysqli_query($link, $sql) 
                or die(mysqli_error($link));
            
            if($insert) {
              $_SESSION['email'] = $email;

              $row=mysqli_fetch_array($res);
              $_SESSION['id'] = $row['id'];

              echo "<script>window.open('index.php', '_self')</script>";
            }

          }else {
            echo "<script>alert('There is an error with the file')</script>";
            
          }
        

        }else {
          echo "<script>alert('Pls upload .jpg or .jpeg or .pdf or .png file')</script>";
        }
        
      }
    }else {
      echo "<script>alert('Passwords mismatch! Try again')</script>";
        
    }
    

  }