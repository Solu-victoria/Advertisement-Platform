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
    <h1>Grid List</h1>
  </div>
</div>
<!--inner heading end--> 

<!--grid start-->
<div class="inner-wrap listing">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="sortbybar">
          <div class="sortbar">
            <div class="row">
              <!-- <div class="col-md-6 col-sm-6 col-xs-8">
                <div class="input-group"> <span class="input-group-addon" id="basic-addon3">Sort By</span>
                  <select class="form-control">
                    <option>Most recent</option>
                    <option>Price: Rs Low to High</option>
                    <option>Price: Rs High to Low</option>
                  </select>
                </div>
              </div> -->
              <div class="col-md-6 col-sm-6 col-xs-4">
                <div class="listingBar">
                  <div class="listIcon"><a href="listing.php"><i class="fa fa-list" aria-hidden="true"></i></a></div>
                  <div class="boxesIcon"><a href="grid.php"><i class="fa fa-th-large" aria-hidden="true"></i></a></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ul class="listService row grid">
          
        <?php
      $query=mysqli_query($link, "SELECT * from products where status='approved'");
      while ( $fetch=mysqli_fetch_array($query)) {
        
      ?>
          <li class="col-md-6 col-sm-6">
            <div class="listWrpService">
              <div class="listImg"><img src="product_images/<?php echo $fetch['img1']; ?>" alt="">
                <div class="price">$<?php echo $fetch['price']; ?></div>
              </div>
              <?php 
                $vId = $fetch['vendor_id'];
                $query2=mysqli_query($link, "SELECT * from vendors where id='$vId'");
                $fetch2=mysqli_fetch_array($query2);

              ?>
              <h3><a href="detail-page.php?id=<?php echo $fetch['id']; ?>&&vId=<?php echo $vId; ?>"><?php echo $fetch['product']; ?></a></h3>
              <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $fetch2['location']; ?></div>
              <p><?php echo substr($fetch['description'], 0, 300); ?> </p>
              <div class="view-btn"><a href="detail-page.php?id=<?php echo $fetch['id']; ?>&&vId=<?php echo $vId; ?>">View Details</a></div>           
             </div>
          </li>
          <?php
        }
        ?>
        </ul>
        <div class="pagiWrap">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="showreslt">Showing 1-10</div>
            </div>
            <div class="col-md-8 col-sm-8">
              <ul class="pagination">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--grid end--> 

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