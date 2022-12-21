<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include "connection.php";
include "auth.php";
$code = bin2hex(random_bytes(2));

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
            <?php
          if (!empty($_SESSION['successmessage'])) {
            $message = $_SESSION['successmessage'];
            echo '<div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> '.$message.'
          </div>';
          unset($_SESSION['successmessage']);
          }elseif (!empty($_SESSION['errormessage'])){
            $message = $_SESSION['errormessage'];
            echo '<div class="alert alert-error alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error!</strong> '.$message.'
          </div>';
          unset($_SESSION['errormessage']);
          }
          ?>
            <div class="formint conForm">
              <form method='POST' enctype='multipart/form-data'>
                <div class="input-wrap">
                  <input type="text" name="fname" placeholder="First Name" class="form-control" required>
                  <input type="hidden" name="token" value="<?php echo $code; ?>">
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
                  <label for="file">Upload official document for your verification (NIN/Passport/Voters'Card/Driver's
                    License)</label>
                </div>
                <div class="sub-btn">
                  <input type="submit" class="sbutn" name="submit">
                </div>
                <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> Have an account? <a
                    href="login.php">Login Here</a></div>
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

</html>

<?php
if (isset($_POST['submit'])) {
  $fname = mysqli_real_escape_string($link, $_POST['fname']);
  $lname = mysqli_real_escape_string($link, $_POST['lname']);
  $password = mysqli_real_escape_string($link, $_POST['password']);
  $cpassword = mysqli_real_escape_string($link, $_POST['cpassword']);
  $zcode = mysqli_real_escape_string($link, $_POST['zcode']);
  $email = mysqli_real_escape_string($link, $_POST['email']);
  $phone = mysqli_real_escape_string($link, $_POST['phone']);
  $country = mysqli_real_escape_string($link, $_POST['country']);
  $city = mysqli_real_escape_string($link, $_POST['city']);
  $token = mysqli_real_escape_string($link, $_POST['token']);
  $location = $city . ', ' . $country;

  if ($password === $cpassword) {

    $Fname = $_FILES['file']['name'];
    $fsize = $_FILES['file']['size'];
    $ftemp = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];

    $res = mysqli_query($link, "select * from vendors where email ='$email'") or die(mysqli_error($link));
    $count = mysqli_num_rows($res);
    if ($count > 0) {
      echo "<script>alert('Email must be unique, This one already exists!!')</script>";

    } elseif ($Fname === '') {
      echo "<script>alert('Input a document for verification!!')</script>";

    } elseif ($fsize > 2000000) {
      echo "<script>alert('Document should be less than or equal to 2mb!!')</script>";

    } else {


      $fileExt = explode('.', $Fname);
      $fileActual = strtolower(end($fileExt));
      $allowed = array('jpg', 'jpeg', 'png', 'pdf');
      // if (isset($Fname)) {
      //   echo $Fname;
      // }
      if (in_array($fileActual, $allowed)) {

        if ($error === 0) {
          $uniq = uniqid('', true) . '.' . $fileActual;
          $fileDest = "vendor_docs/" . $uniq;
          move_uploaded_file($ftemp, $fileDest);

          $sql = "INSERT into vendors (first_name,last_name,password,location,zipcode, email,phone,is_verified, file) values ('$fname','$lname','$password','$location','$zcode','$email','$phone', '$token', '$fileDest')";

          $insert = mysqli_query($link, $sql)
            or die(mysqli_error($link));

          if ($insert) {
            include "config.php";

            require_once 'PHPMailer/src/Exception.php';
            require_once 'PHPMailer/src/PHPMailer.php';
            require_once 'PHPMailer/src/SMTP.php';

            //PHPMailer Object
            $mail = new PHPMailer(true); //Argument true in constructor enables exceptions

            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = $host;
            $mail->SMTPAuth = true;
            $mail->Username = $username;
            $mail->Password = $password;
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            //From email address and name
            $mail->setFrom($username, "Onyinye Advertising Platform");

            //To address and name
            $mail->addAddress($email); //Recipient name is optional

            //Send HTML or Plain Text email
            $mail->isHTML(true);

            $mail->Subject = "Verify your email";
            $mail->Body = "Click <a href='https://localhost:8000/verify.php?token=".$token."'>here</a> to verify your email";

            $mail->smtpConnect([
              'tls' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
              ]
            ]);

            try {
              $mail->send();
              $_SESSION['successmessage'] = "Registration Successful, Please confirm email";
              echo "<script>window.open('register.php','_self')</script>";
            } catch (Exception $e) {
              $_SESSION['errormessage'] = "Mailer Error: " . $mail->ErrorInfo;
              echo "<script>window.open('register.php','_self')</script>";
            }
            // $_SESSION['email'] = $email;

            // $row=mysqli_fetch_array($res);
            // $_SESSION['id'] = $row['id'];

            // echo "<script>window.open('index.php', '_self')</script>";
          }

        } else {
          $_SESSION['errormessage'] = "There is an error with the file";
          echo "<script>window.open('register.php','_self')</script>";

        }


      } else {
        $_SESSION['errormessage'] = "Pls upload .jpg or .jpeg or .pdf or .png file";
        echo "<script>window.open('register.php','_self')</script>";
      }

    }
  } else {
    $_SESSION['errormessage'] = "Passwords mismatch! Try again";
    echo "<script>window.open('register.php','_self')</script>";

  }


}