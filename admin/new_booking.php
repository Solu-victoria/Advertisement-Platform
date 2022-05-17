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
								<div class="page-title">Add Room Booking</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Booking</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Booking</li>
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
									<form method="post">
								<div class="card-body row">
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="title" name="title">
											<label class="mdl-textfield__label">Ad Title</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="email" id="txtemail" name="email">
											<label class="mdl-textfield__label">Email</label>
											<span class="mdl-textfield__error">Enter Valid Email Address!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<select class="mdl-textfield__input" name="gender">
												<option class="mdl-menu__item" value="">Room Type</option>
												<option class="mdl-menu__item" value="Male">Male</option>
												<option class="mdl-menu__item" value="Female">Female</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text"
												pattern="-?[0-9]*(\.[0-9]+)?" id="text5" name="phone">
											<label class="mdl-textfield__label" for="text5">Mobile Number</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
											<label class="mdl-textfield__label">Arrive</label>
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="date" id="date" name="arrive">
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
											<label class="mdl-textfield__label">Depart</label>
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="date" id="date2" name="depart">
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<select class="mdl-textfield__input" name="roomtype">
												<option class="mdl-menu__item" value="">Room Type</option>
												<option class="mdl-menu__item" value="Single">Single</option>
												<option class="mdl-menu__item" value="Double">Double</option>
												<option class="mdl-menu__item" value="Quad">Quad</option>
												<option class="mdl-menu__item" value="King">King</option>
												<option class="mdl-menu__item" value="Suite">Suite</option>
											</select>
										</div>
									</div>
									<div class="col-lg-12 p-t-20">
										<div class="mdl-textfield mdl-js-textfield txt-full-width">
											<textarea class="mdl-textfield__input" rows="4" id="text7" name="address"></textarea>
											<label class="mdl-textfield__label" for="text7">Address</label>
										</div>
									</div>
									<div class="col-lg-12 p-t-20 text-center">
										<button type="submit" name="submit" 
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
										<button type="button"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
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