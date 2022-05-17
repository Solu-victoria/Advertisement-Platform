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
                <input type="text" name="title" placeholder="Ad Title" class="form-control">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="input-wrap">
                    <select name="category" class="form-control">
                      <option>Category </option>
                      <option value="Men Wear">Men Wear</option>
                      <option value="Women Wear">Women Wear</option>
                      <option value="Beddings">Beddings</option>
                      <option value="Shoes">Shoes</option>
                      <option value="Accessories">Accessories</option>
                      <option value="Hats">Hats</option>
                      <option value="Cosmetics">Cosmetics</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-wrap">
                    <select name="size" class="form-control">
                      <option>Size </option>
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
                    <input type="text" name="color" placeholder="Color" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-wrap">
                    <input type="text" name="brand" placeholder="Brand" class="form-control">
                  </div>
                </div>
              </div>
              <div class="input-wrap">
                <textarea class="form-control" name="description" placeholder="Ad Description"></textarea>
              </div>
              
              
              
              <div class="input-wrap">
              <input class="form-control" id="upload" name="product_img1" type="file">
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
              
              
              <div class="contctxt persional">Persional Information</div>
              <div class="row">
                <div class="col-md-6">
                  <div class="input-wrap">
                    <input type="text" name="fname" placeholder="First Name" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-wrap">
                    <input type="text" name="lname" placeholder="Last Name" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-wrap">
                    <input type="email" name="email" placeholder="Email" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-wrap">
                    <input type="text" name="phone" placeholder="Phone" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-wrap">
                    <select name="country" class="form-control">
                      <option>Select Country </option>
                      <option value="New York">New York</option>
                      <option value="Chicago">Chicago</option>
                      <option value="03">San Diego</option>
                      <option value="04">Los Angeles</option>
                      <option value="05">Houston</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-wrap">
                    <input type="text" name="city" placeholder="City" class="form-control">
                  </div>
                </div>
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
<div class="footer-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <h3>ABOUT Classify</h3>
        <div class="footer-logo"><img src="images/footer-logo.png" alt=""></div>
        <p>Integer ac lorem sit amet est rhoncus dapi bus don cad pede acus morbi elit nunc molestie at ultrices eu eleifen lorem ut dictum erat masa... <a href="about-us.html">Read More</a></p>
      </div>
      <div class="col-md-2 col-sm-6">
        <h3>Quick  LInks</h3>
        <ul class="footer-links">
          <li><a href="#.">Home</a></li>
          <li><a href="#.">About Us</a></li>
          <li><a href="#.">Features</a></li>
          <li><a href="#.">Categories</a></li>
          <li><a href="#.">Blog</a></li>
          <li><a href="#.">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6">
        <h3>MAIN CATEGORIES</h3>
        <ul class="footer-category">
          <li><a href="#.">Electronics</a></li>
          <li><a href="#.">Vahicles</a></li>
          <li><a href="#.">Bikes</a></li>
          <li><a href="#.">Animals</a></li>
          <li><a href="#.">Toys</a></li>
          <li><a href="#."> Furniture</a></li>
          <li><a href="#.">Marketing</a></li>
          <li><a href="#.">Technology</a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-3 col-sm-6">
        <h3>MAIN CATEGORIES</h3>
        <div class="address">Lorem # 38, Ispum Hill, Lorem, WA 12345 </div>
        <div class="info"><i class="fa fa-phone" aria-hidden="true"></i> <a href="#.">(777) 123 4567</a></div>
        <div class="info"><i class="fa fa-fax" aria-hidden="true"></i> <a href="#.">(123) 456 7890</a></div>
      </div>
    </div>
    <div class="copyright">Copyright © 2022 Onyinye - All Rights Reserved.</div>
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

<!-- Mirrored from malikhassan.com/html/classified/ad-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jan 2022 21:17:35 GMT -->
</html>
<?php
if (isset($_POST['submit'])) {
                            $title=mysqli_real_escape_string($link, $_POST['title']);
                            $category=mysqli_real_escape_string($link, $_POST['category']);
                            $size=mysqli_real_escape_string($link, $_POST['size']);
                            $color=mysqli_real_escape_string($link, $_POST['color']);
                            $brand=mysqli_real_escape_string($link, $_POST['brand']);
                            $description=mysqli_real_escape_string($link, $_POST['description']);
                            # code...
                            $fname=mysqli_real_escape_string($link, $_POST['fname']);
                            $lname=mysqli_real_escape_string($link, $_POST['lname']);
                            $email=mysqli_real_escape_string($link, $_POST['email']);
                            $phone=mysqli_real_escape_string($link, $_POST['phone']);
                            $country=mysqli_real_escape_string($link, $_POST['country']);
                            $city=mysqli_real_escape_string($link, $_POST['city']);
                            $seller=$fname.' '.$lname;
                            $location=$city.', '.$country;
                             $image1=$_FILES['product_img1']['name'];
                             $image2=$_FILES['product_img2']['name'];
                             $image3=$_FILES['product_img3']['name'];
                             $image4=$_FILES['product_img4']['name'];
    $tmp_image1=$_FILES['product_img1']['tmp_name'];
    $size_image1=1000000; 
    $size_image2=1000000; 
    $size_image3=1000000; 
    $size_image4=1000000; 
    if($image1=="" || $image2=="" || $image3=="" || $image4==""){
        echo "<script>alert('Select a picture!!')</script>";
    }
     else if($_FILES['product_img1']['size']>=$size_image1 || $_FILES['product_img1']['size']==0 || $_FILES['product_img2']['size']>=$size_image2 || $_FILES['product_img2']['size']==0 || $_FILES['product_img3']['size']>=$size_image3 || $_FILES['product_img3']['size']==0 || $_FILES['product_img4']['size']>=$size_image4 || $_FILES['product_img4']['size']==0){
        echo "<script>alert('Image should be less than 1mb!!')</script>";
    }  else{
$img_ext1=explode(".",$image1);
        $image_ext1=$img_ext1['1'];
$img_ext2=explode(".",$image2);
        $image_ext2=$img_ext2['2'];
$img_ext3=explode(".",$image3);
        $image_ext3=$img_ext3['1'];
$img_ext4=explode(".",$image4);
        $image_ext4=$img_ext4['1'];
        $image1=rand(1,1000).rand(1,1000).time().".".$image_ext1;
        $image2=rand(1,1000).rand(1,1000).time().".".$image_ext2;
        $image3=rand(1,1000).rand(1,1000).time().".".$image_ext3;
        $image4=rand(1,1000).rand(1,1000).time().".".$image_ext4;
        if($image_ext1=="jpg"|| $image_ext1=="png" || $image_ext1=="jpeg" ||$image_ext1=="JPEG" || $image_ext1=="PNG" || $image_ext1=="JPG" || $image_ext2=="jpg"|| $image_ext2=="png" || $image_ext2=="jpeg" ||$image_ext2=="JPEG" || $image_ext2=="PNG" || $image_ext2=="JPG" || $image_ext3=="jpg"|| $image_ext3=="png" || $image_ext3=="jpeg" ||$image_ext3=="JPEG" || $image_ext3=="PNG" || $image_ext3=="JPG" || $image_ext4=="jpg"|| $image_ext4=="png" || $image_ext4=="jpeg" ||$image_ext4=="JPEG" || $image_ext4=="PNG" || $image_ext4=="JPG" ){
           
            move_uploaded_file($tmp_image1,"product_images/$image1");
            move_uploaded_file($tmp_image2,"product_images/$image2");
            move_uploaded_file($tmp_image3,"product_images/$image3");
            move_uploaded_file($tmp_image4,"product_images/$image4");
            
           $update = mysqli_query($link, "insert into products (product,price,location,seller,description,color,size,img1,img2,img3,img4,date) value ('$title','200','$location','$seller','$description','$color','$size','$image1','$image2','$image3','$image4',NOW())") or die(mysqli_error($link));
                            if($update){
                            echo "<script>alert('Ad added successfully')</script>";
                            echo "<script>window.open('ad-post.php','_self')</script>";
                        }else{
             echo "<script>alert('Error!!')</script>";
            
        }
    
}else{
             echo "<script>alert('Not an image')</script>";
        }
     }

                         
 }
 ?>