<?php 
include "auth.php";
include "connection.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<?php include "head.php"; ?>

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
	<div class="page-wrapper">
		<?php include "header.php"; ?>
		<!-- start page container -->
		<div class="page-container">
			<?php include "sidebar.php";?>
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">New Ad</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Ads</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">New Ad</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>New Ad</header>
									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
										data-mdl-for="panel-button">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
								<form method="post" enctype="multipart/form-data">
								<div class="card-body row">
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="title" name="title" required>
											<label class="mdl-textfield__label">Ad Title</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											
											<select class="mdl-textfield__input" name="category" required>
												<option class="mdl-menu__item" value>Category </option>
												<option class="mdl-menu__item" value="Accessories">Accessories</option>
												<option class="mdl-menu__item" value="Clothing">Clothings</option>
												<option class="mdl-menu__item" value="Furnitures">Furnitures</option>
												<option class="mdl-menu__item" value="Electronics">Electronics</option>
												<option class="mdl-menu__item" value="Gadgets">Gadgets</option>
												<option class="mdl-menu__item" value="Foot wears">Foot wears</option>
												<option class="mdl-menu__item" value="Skin care products">Skin care products</option>
												<option class="mdl-menu__item" value="Fairly used equipments<">Fairly used equipments</option>
											</select>
											
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<select class="mdl-textfield__input" name="size" required>
											<option class="mdl-menu__item" value>Size </option>
											<option class="mdl-menu__item" value="S">S</option>
											<option class="mdl-menu__item" value="M">M</option>
											<option class="mdl-menu__item" value="L">L</option>
											<option class="mdl-menu__item" value="XL">XL</option>
											<option class="mdl-menu__item" value="XXL">XXL</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="color" required>
											<label class="mdl-textfield__label" for="text5">Color</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="brand" required>
											<label class="mdl-textfield__label" for="text5">Brand</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="price" required>
											<label class="mdl-textfield__label" for="text5">Price</label>
										</div>
									</div>
									
									<div class="col-lg-6 p-t-20">
											<label class="mdl-textfield__label">Image1</label>
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											
              								<input class="mdl-textfield__input" id="upload" name="product_img1" type="file" required>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
											<label class="mdl-textfield__label">Image2</label>
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											
              								<input class="mdl-textfield__input" id="upload" name="product_img2" type="file" required>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
											<label class="mdl-textfield__label">Image3</label>
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											
              								<input class="mdl-textfield__input" id="upload" name="product_img3" type="file" required>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
											<label class="mdl-textfield__label">Image4</label>
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											
              								<input class="mdl-textfield__input" id="upload" name="product_img4" type="file" required>
										</div>
									</div>
									
									<div class="col-lg-12 p-t-20">
										<div class="mdl-textfield mdl-js-textfield txt-full-width">
											<textarea class="mdl-textfield__input" rows="4" id="text7" name="description" placeholder="Ad Description"></textarea>
											<label class="mdl-textfield__label" for="text7">Description</label>
										</div>
									</div>
									<div class="col-lg-12 p-t-20 text-center">
										<button type="submit" name="submit" 
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
										<a
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default" href='view_ads.php'>Cancel</a>
									</div>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			
		</div>
		<!-- end page container -->
		<?php include "footer.php"; ?>
	</div>
	<?php include "scripts.php"; ?>
</body>


</html>
<?php
	if(isset($_POST['submit'])){
		$name=mysqli_real_escape_string($link, $_POST['name']);
		$email=mysqli_real_escape_string($link, $_POST['email']);
		$roomtype=mysqli_real_escape_string($link, $_POST['roomtype']);
		$arrive=mysqli_real_escape_string($link, $_POST['arrive']);
		$depart=mysqli_real_escape_string($link, $_POST['depart']);
		$address=mysqli_real_escape_string($link, $_POST['address']);
		$gender=mysqli_real_escape_string($link, $_POST['gender']);
		$phone=mysqli_real_escape_string($link, $_POST['phone']);

		$check=mysqli_query($link, "SELECT * from rooms where type='$roomtype' and status != 'Booked'");
		$count=mysqli_num_rows($check);
		if($count==0){
			echo "<script>alert('Room Already Exits')</script>";
		}else{
		while($cc=mysqli_fetch_array($check)){
		$roomno=$cc['room_no'];
	}

			$insert=mysqli_query($link, "INSERT into bookings (name,email,phone,gender,address,date,checkout,status,room) values ('$name','$email','$phone','$gender','$address','$arrive','$depart','paid','$roomno')")or die(mysqli_error($link));

			$update=mysqli_query($link,"UPDATE rooms set status='Booked' where room_no='$roomno'")or die(mysqli_error($link));
			echo "<script>alert('Booking Added Successfully')</script>";
			echo "<script>window.open('view_booking.php', '_self')</script>";
		}
	}
?>