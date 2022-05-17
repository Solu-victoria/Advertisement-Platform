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

<!--slider start-->
<div class="slider-wrap">
  <div class="container">
    <div class="sliderTxt">
      <h1>World’s Largest Fashion Ad Portal</h1>
      <p>Search from over 15,00,000 Fashion Ads & Post unlimited Fashion Ads free!</p>
      <form>
        <div class="row form-wrap">
          <div class="col-md-3">
            <div class="input-group">
              <input type="text" name="keyword" placeholder="Enter Keyword..." class="form-control">
            </div>
          </div>
          <div class="col-md-3">
            <div class="input-group">
              <select name="location" class="dropdown">
                <option>Location... </option>
                <option value="new-york">New York</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="input-group">
              <select name="category" class="dropdown">
                <option>Category... </option>
                <option value="mobile">Mobile</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="input-btn">
              <input type="submit" class="sbutn" value="Search">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!--slider end--> 

<!--feature start-->
<div class="feature-wrap">
  <div class="container">
    <div class="heading-title">Featured Ads</div>
    <div class="heading-text">Find out & explore new businesses near your area and see what's happening !!!</div>
    <ul class="row feature-service">
      <?php 
      $query2=mysqli_query($link, "SELECT * from products ORDER BY RAND() LIMIT 0,4");
      while ($fetch2=mysqli_fetch_array($query2)) {
        $date2 = date_create($fetch2['date']);
      ?>
      <li class="col-md-3 col-sm-6 col-xs-12">
        <div class="feature-image" style=" overflow: hidden;  width: 100%; height: 150px;"><img src="product_images/<?php echo $fetch2['img1']; ?>" alt="" style="margin-left: auto; margin-right: auto; text-align: center; object-fit: cover;">
          <div class="price">$<?php echo $fetch2['price']; ?></div>
        </div>
        <div class="feature">
          <div class="feat-bg">
            <h3><a href="detail-page.php?id=<?php echo $fetch2['id']; ?>"><?php echo $fetch2['product']; ?></a></h3>
          </div>
          <div class="feature-detail">
            <ul class="featureList">
              <li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $fetch2['location']; ?></li>
              <li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date_format($date2,"Y,m,d"); ?></li>
            </ul>
          </div>
        </div>
      </li>
      <?php 
    }
    ?>
    </ul>
    <div class="view-btn"><a href="features.php">View All Feature ads</a></div>
  </div>
</div>
<!--feature end--> 

<!--Categories start-->
<div class="categories-wrap">
  <div class="container">
    <div class="heading-title"><span>Categories</span></div>
    <div class="heading-text">Find out & explore new businesses near your area and see what's happening !!!</div>
    <ul class="row categories-service">
      <li class="col-md-3 col-sm-6">
        <div class="categorybox">
          <div class="icon"><i class="fa fa-male" aria-hidden="true"></i></div>
          <h4><a href="#">Men Wears</a></h4>
          <ul class="categories">
            <li><a href="#">T-shirts ( 20 )</a></li>
            <li><a href="#">Trouser ( 09 )</a></li>
            <li><a href="#">Boxers ( 15 )</a></li>
            <li><a href="#">Cleaning Jobs ( 0 )</a></li>
            <li><a href="#">Others ( 160 )</a></li>
          </ul>
        </div>
      </li>
      <li class="col-md-3 col-sm-6">
        <div class="categorybox">
          <div class="icon"><i class="fa fa-female" aria-hidden="true"></i></div>
          <h4><a href="#">Women Wears</a></h4>
          <ul class="categories">
            <li><a href="#">House For Sale ( 20 )</a></li>
            <li><a href="#">House For Rent ( 09 )</a></li>
            <li><a href="#">Land For Sale ( 15 )</a></li>
            <li><a href="#">Apartments, Flats For Sale ( 0 )</a></li>
            <li><a href="#">Property For Sale ( 160 )</a></li>
          </ul>
        </div>
      </li>
      <li class="col-md-3 col-sm-6">
        <div class="categorybox">
          <div class="icon"><i class="fa fa-solid fa-bed" aria-hidden="true"></i></div>
          <h4><a href="#">Beddings</a></h4>
          <ul class="categories">
            <li><a href="#">Expensive Cars ( 20 )</a></li>
            <li><a href="#">Heavy Vehicles( 09 )</a></li>
            <li><a href="#">Van ( 15 )</a></li>
            <li><a href="#">Classic & Fancy ( 0 )</a></li>
            <li><a href="#">Trucks ( 160 )</a></li>
          </ul>
        </div>
      </li>
      <li class="col-md-3 col-sm-6">
        <div class="categorybox">
          <div class="icon"><i class="fa fa-shoe-prints" aria-hidden="true"></i></div>
          <h4><a href="#">Shoes</a></h4>
          <ul class="categories">
            <li><a href="#">Cell Phones ( 20 )</a></li>
            <li><a href="#">Tablets( 09 )</a></li>
            <li><a href="#">Laptops ( 15 )</a></li>
            <li><a href="#">Printers ( 0 )</a></li>
            <li><a href="#">Others ( 160 )</a></li>
          </ul>
        </div>
      </li>
      <li class="col-md-3 col-sm-6">
        <div class="categorybox">
          <div class="icon"><i class="fa fa-solid fa-headset" aria-hidden="true"></i></div>
          <h4><a href="#">Accessories</a></h4>
          <ul class="categories">
            <li><a href="#">Birds ( 20 )</a></li>
            <li><a href="#">Cats( 09 )</a></li>
            <li><a href="#">Fishes ( 15 )</a></li>
            <li><a href="#">Dogs ( 0 )</a></li>
            <li><a href="#">Others ( 160 )</a></li>
          </ul>
        </div>
      </li>
      <li class="col-md-3 col-sm-6">
        <div class="categorybox">
          <div class="icon"><i class="fa fa-brands fa-redhat" aria-hidden="true"></i></div>
          <h4><a href="#">Hats</a></h4>
          <ul class="categories">
            <li><a href="#">Weddings ( 20 )</a></li>
            <li><a href="#">Property ( 09 )</a></li>
            <li><a href="#">Construction ( 15 )</a></li>
            <li><a href="#">Plumbing ( 0 )</a></li>
            <li><a href="#">Others ( 160 )</a></li>
          </ul>
        </div>
      </li>
      <li class="col-md-3 col-sm-6">
        <div class="categorybox">
          <div class="icon"><i class="fa fa-paintbrush" aria-hidden="true"></i></div>
          <h4><a href="#">Cosmetics</a></h4>
          <ul class="categories">
            <li><a href="#">Clothes ( 20 )</a></li>
            <li><a href="#">Shoes( 09 )</a></li>
            <li><a href="#">Beauty Products( 15 )</a></li>
            <li><a href="#">Wathes & Jewellery ( 0 )</a></li>
            <li><a href="#">Others ( 160 )</a></li>
          </ul>
        </div>
      </li>
      <li class="col-md-3 col-sm-6">
        <div class="categorybox">
          <div class="icon"><i class="fa fa-heart" aria-hidden="true"></i></div>
          <h4><a href="#">Others</a></h4>
          <ul class="categories">
            <li><a href="#">Flower shop ( 20 )</a></li>
            <li><a href="#">Luxar Hotel ( 09 )</a></li>
            <li><a href="#">Bar( 15 )</a></li>
            <li><a href="#">Restaurant ( 0 )</a></li>
            <li><a href="#">Others ( 160 )</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>
<!--Categories end--> 

<!--Latest ads start-->
<div class="feature-wrap">
  <div class="container">
    <div class="heading-title">Latest Ads</div>
    <div class="heading-text">Find out & explore new businesses near your area and see what's happening !!!</div>
    <ul class="row feature-service">
      <?php
      $query=mysqli_query($link, "SELECT * from products");
      while ( $fetch=mysqli_fetch_array($query)) {
        $date = date_create($fetch['date']);
        
      ?>
      <li class="col-md-3 col-sm-6 col-xs-12">
        <div class="feature-image"><img src="product_images/<?php echo $fetch['img1']; ?>" alt="">
          <div class="price">$<?php echo $fetch['price']; ?></div>
        </div>
        <div class="feature">
          <div class="feat-bg">
            <h3><a href="detail-page.php?id=<?php echo $fetch2['id']; ?>"><?php echo $fetch['product']; ?></a></h3>
          </div>
          <div class="feature-detail">
            <ul class="featureList">
              <li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $fetch['location']; ?></li>
              <li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date_format($date,"Y,m,d"); ?></li>
            </ul>
          </div>
        </div>
      </li>
      <?php
    }
    ?>
    </ul>
    <div class="view-btn"><a href="listing.php">View All Latest ads</a></div>
  </div>
</div>
<!--Latest ads end--> 

<!--Testimonials start-->
<div class="testimonials-wrap">
  <div class="container">
    <div class="heading-wrap">
      <div class="heading-title">Testimonials</div>
    </div>
    <ul class="owl-carousel testimonials">
      <li class="item">
        <div class="testi-info">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis augue ultricies, molestie nisl mollis, efficitur velit. Nunc urna ligula, malesuada nec condimentum eu, tincidunt sit amet purus.</p>
          <div class="name">Kety York <span>Lorem Ispum</span></div>
          <div class="client-image"><img src="images/client.jpg" alt=""></div>
        </div>
      </li>
      <li class="item">
        <div class="testi-info">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis augue ultricies, molestie nisl mollis, efficitur velit. Nunc urna ligula, malesuada nec condimentum eu, tincidunt sit amet purus.</p>
          <div class="name">John Doe <span>Lorem Ispum</span></div>
          <div class="client-image"><img src="images/client2.jpg" alt=""></div>
        </div>
      </li>
      <li class="item">
        <div class="testi-info">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis augue ultricies, molestie nisl mollis, efficitur velit. Nunc urna ligula, malesuada nec condimentum eu, tincidunt sit amet purus.</p>
          <div class="name">John Doe <span>Lorem Ispum</span></div>
          <div class="client-image"><img src="images/client.jpg" alt=""></div>
        </div>
      </li>
      <li class="item">
        <div class="testi-info">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis augue ultricies, molestie nisl mollis, efficitur velit. Nunc urna ligula, malesuada nec condimentum eu, tincidunt sit amet purus.</p>
          <div class="name">John Doe <span>Lorem Ispum</span></div>
          <div class="client-image"><img src="images/client2.jpg" alt=""></div>
        </div>
      </li>
      <li class="item">
        <div class="testi-info">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis augue ultricies, molestie nisl mollis, efficitur velit. Nunc urna ligula, malesuada nec condimentum eu, tincidunt sit amet purus.</p>
          <div class="name">John Doe <span>Lorem Ispum</span></div>
          <div class="client-image"><img src="images/client.jpg" alt=""></div>
        </div>
      </li>
      <li class="item">
        <div class="testi-info">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis augue ultricies, molestie nisl mollis, efficitur velit. Nunc urna ligula, malesuada nec condimentum eu, tincidunt sit amet purus.</p>
          <div class="name">John Doe <span>Lorem Ispum</span></div>
          <div class="client-image"><img src="images/client2.jpg" alt=""></div>
        </div>
      </li>
    </ul>
  </div>
</div>
<!--Testimonials end--> 

<!--business start-->
<div class="business-wrap">
  <div class="container">
    <ul class="row business-service">
      <li class="col-md-4">
        <div class="business-image"><img src="images/laptop.png" alt=""></div>
        <h3>CREATE FREE LISTINGS</h3>
        <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa</p>
      </li>
      <li class="col-md-4">
        <div class="business-image"><img src="images/globe-ad.png" alt=""></div>
        <h3>PUBLISH YOUR AD</h3>
        <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa</p>
      </li>
      <li class="col-md-4">
        <div class="business-image"><img src="images/advertise.png" alt=""></div>
        <h3>ADVERTISE Classify</h3>
        <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa</p>
      </li>
    </ul>
  </div>
</div>
<!--business end--> 

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