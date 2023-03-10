<?php
include "auth.php"; 
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; ?>
<body>

<!--=================================================--> 
<?php include "topbar.php"; ?>

<?php include "header.php"; ?>

<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h1>Features</h1>
  </div>
</div>
<!--inner heading end--> 

<!--about start-->
<div class="inner-wrap about">
  <div class="container">
    <ul class="row feature-service">
      <?php
      $query=mysqli_query($link, "SELECT * from products where status='approved'");
      while ( $fetch=mysqli_fetch_array($query)) {
        $date = date_create($fetch['date']);
        
      ?>
      <li class="col-md-3 col-sm-6 col-xs-12">
        <div class="feature-image"><img src="product_images/<?php echo $fetch['img1']; ?>" alt="">
          <div class="price">$<?php echo $fetch['price']; ?></div>
        </div>
        <?php 
          $vId = $fetch['vendor_id'];
          $query2=mysqli_query($link, "SELECT * from vendors where id='$vId'");
          $fetch2=mysqli_fetch_array($query2);

        ?>
        <div class="feature">
          <div class="feat-bg">
            <h3><a href="detail-page.php?id=<?php echo $fetch['id']; ?>&&vId=<?php echo $vId; ?>"><?php echo $fetch['product']; ?></a></h3>
          </div>
          <div class="feature-detail">
            <ul class="featureList">
              <li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php if ($vId === '0') {
														echo 'Nsukka, Nigeria';
													}else {
														echo $fetch2['location'];
													}
													?></li>
              <li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date_format($date,"Y,m,d"); ?></li>
            </ul>
          </div>
        </div>
      </li>
      <?php 
    }
    ?>
      
    </ul>
  </div>
</div>
<!--about end--> 

<!--=================================================--> 
<?php include "footer.php"; ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 

<!-- general script file --> 
<script src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/script.js"></script>



</body>


</html>