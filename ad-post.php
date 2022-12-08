<?php
include "auth.php";
include "connection.php";
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
    <h1>Post Ads</h1>
  </div>
</div>
<!--inner heading end--> 

<!--ad post start-->
<div class="inner-wrap listing">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-2"></div>
      <div class="col-md-6 col-sm-8">
        <div class="login">
          <div class="contctxt">Ad Information</div>
          <div class="formint conForm">
            <form method="post" enctype="multipart/form-data">
              <div class="input-wrap">
                <input type="text" name="title" placeholder="Ad Title" class="form-control" required>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="input-wrap">
                    <select name="category" class="form-control" required>
                      <option value>Category </option>
                      <option value="Accessories">Accessories</option>
                      <option value="Clothing">Clothings</option>
                      <option value="Furnitures">Furnitures</option>
                      <option value="Electronics">Electronics</option>
                      <option value="Gadgets">Gadgets</option>
                      <option value="Foot wears">Foot wears</option>
                      <option value="Skin care products">Skin care products</option>
                      <option value="Fairly used equipments<">Fairly used equipments</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-wrap">
                    <select name="size" class="form-control" required>
                      <option value>Size </option>
                      <option value="S">S</option>
                      <option value="M">M</option>
                      <option value="L">L</option>
                      <option value="XL">XL</option>
                      <option value="XXL">XXL</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="input-wrap">
                    <input type="text" name="color" placeholder="Color" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-wrap">
                    <input type="text" name="brand" placeholder="Brand" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-wrap">
                    <input type="text" name="price" placeholder="Price" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="input-wrap">
                <textarea class="form-control" name="description" placeholder="Ad Description"></textarea>
              </div>
              
              
              
              <div class="input-wrap">
              <input class="form-control" id="upload" name="product_img1" type="file" required>
              </div>
              <div class="input-wrap">
              <input class="form-control" id="upload" name="product_img2" type="file">
              </div>
              <div class="input-wrap">
              <input class="form-control" id="upload" name="product_img3" type="file">
              </div>
              <div class="input-wrap">
              <input class="form-control" id="upload" name="product_img4" type="file">
              </div>
            
              <div class="sub-btn">
                <input type="submit" class="sbutn" name="submit" value="Submit Now">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-2"></div>
    </div>
  </div>
</div>
<!--ad post end--> 

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

<!-- Mirrored from malikhassan.com/html/classified/ad-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jan 2022 21:17:35 GMT -->
</html>
<?php
if (isset($_POST['submit'])) {
  $title=mysqli_real_escape_string($link, $_POST['title']);
  $category=mysqli_real_escape_string($link, $_POST['category']);
  $size=mysqli_real_escape_string($link, $_POST['size']);
  $color=mysqli_real_escape_string($link, $_POST['color']);
  $brand=mysqli_real_escape_string($link, $_POST['brand']);
  $price=mysqli_real_escape_string($link, $_POST['price']);
  $description=mysqli_real_escape_string($link, $_POST['description']);
  $vId = $_SESSION['id'];

  $image1=$_FILES['product_img1']['name'];
  $tmp_image1=$_FILES['product_img1']['tmp_name'];
  $size_image1=$_FILES['product_img1']['size'];
  $error1=$_FILES['product_img1']['error'];


  if ($image1 !== '') {
    $fileExt = explode('.', $image1);
    $fileActual = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActual,$allowed)){
    
      if($error1 === 0){
        $fileDest1 = uniqid('', true) . '.' . $fileActual;
        move_uploaded_file($tmp_image1,'product_images/'.$fileDest1);
      
        $fileDest = '';
        $i = 0;
        $fileDestexplode = array();
        for ($i=2; $i < 5 ; $i++) { 
          if ( !empty($_FILES['product_img'.$i]['name'])) {
            $imagei=$_FILES['product_img'.$i]['name'];
            $tmp_imagei=$_FILES['product_img'.$i]['tmp_name'];
            $size_imagei=$_FILES['product_img'.$i]['size'];
            $errori=$_FILES['product_img'.$i]['error'];

            if ($size_imagei > 2000000) {
              echo "<script>alert('Image should be less than or equal to 2mb!!')</script>";
              $_SESSION['failure'] = 'error';

            }else {
              $fileExt = explode('.', $imagei);
              $fileActual = strtolower(end($fileExt));
              $allowed = array('jpg', 'jpeg', 'png');

              if (in_array($fileActual,$allowed)){
              
                if($errori === 0){
                  $fileDesti = uniqid('', true) . '.' . $fileActual;
                  
                  move_uploaded_file($tmp_imagei, 'product_images/'.$fileDesti);
                    
                  $fileDest .= $fileDesti. ',';
                  $fileDestexplode = explode(',', $fileDest);
                
                }else {
                  echo "<script>alert('There is an error with your second/third/fourth image')</script>";
                  $_SESSION['failure'] = 'error';
                }
              
              }else {
                echo "<script>alert('Pls upload .jpg or .jpeg or .png images')</script>";
                $_SESSION['failure'] = 'error';
              }
        
            }

            if (isset($_SESSION['failure'])) {
              $i = 4;
              unset($_SESSION['failure']);

            }
            
          }
        }
        
        for ($i=0; $i < 4 ; $i++) { 
          if (empty($fileDestexplode[$i])) {
            $fileDestexplode[$i] = NULL;
          }
        }
        $sql = "INSERT into products (vendor_id,product,price,category,description, color,size, brand, status,img1,date, img2, img3, img4 ) values ('$vId','$title','$price','$category','$description','$color','$size', '$brand', 'pending', '$fileDest1', NOW(), '$fileDestexplode[0]', '$fileDestexplode[1]', '$fileDestexplode[2]')";
            
        $insert= mysqli_query($link, $sql) 
          or die(mysqli_error($link));

        if($insert) {

          echo "<script>alert('You have successfully submitted your ad for reviewing!!')</script>";
        }

      }else {
        echo "<script>alert('There is an error with your first image')</script>";
        
      }
    
    }else {
      echo "<script>alert('Pls upload .jpg or .jpeg or .png image')</script>";
    }

  }elseif ($size_image1 > 2000000) {
    echo "<script>alert('Image should be less than or equal to 2mb!!')</script>";

  }else {
    echo "<script>alert('Select your image(s) (first one is required)!!')</script>";
  }
                         
}
?>