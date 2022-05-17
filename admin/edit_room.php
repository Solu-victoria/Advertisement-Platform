<?php
include "auth.php";
include "connection.php";
$id=$_GET['id'];

$query=mysqli_query($link,"SELECT * from rooms where id='$id'");
$row=mysqli_fetch_array($query);

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
			<?php include "sidebar.php"; ?>
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Edit Room Details</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Rooms</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Edit Room Details</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Edit Room Details</header>
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
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtRoomNo" name="roomno" placeholder="<?php echo $row['room_no']; ?>" value="<?php echo $row['room_no']; ?>">
											<label class="mdl-textfield__label">Room Number</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<select class="mdl-textfield__input" name="roomtype">
												<option class="mdl-menu__item" value="<?php echo $row['type']; ?>"><?php echo $row['type']; ?></option>
												<option class="mdl-menu__item" value="Single">Single</option>
												<option class="mdl-menu__item" value="Double">Double</option>
												<option class="mdl-menu__item" value="Quad">Quad</option>
												<option class="mdl-menu__item" value="King">King</option>
												<option class="mdl-menu__item" value="Suite">Suite</option>
											</select>
											<label class="mdl-textfield__label">Room Type</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<select class="mdl-textfield__input" name="ac">
												<option class="mdl-menu__item" value="<?php echo $row['ac']; ?>"><?php echo $row['ac']; ?></option>
												<option class="mdl-menu__item" value="AC">AC</option>
												<option class="mdl-menu__item" value="NonAC">Non AC</option>
											</select>
											<label class="mdl-textfield__label">AC/Non AC</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<select class="mdl-textfield__input" name="meal">
												<option class="mdl-menu__item" value="<?php echo $row['meal']; ?>"><?php echo $row['meal']; ?></option>
												<option class="mdl-menu__item" value="Breakfast">Free Breakfast</option>
												<option class="mdl-menu__item" value="Dinner">Free Dinner</option>
												<option class="mdl-menu__item" value="Breakfast and Dinner">Free Breakfast & Dinner</option>
												<option class="mdl-menu__item" value="none">No Free Food</option>
											</select>
											<label class="mdl-textfield__label">Meal</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<select class="mdl-textfield__input" name="bed">
												<option class="mdl-menu__item" value="<?php echo $row['bed']; ?>"><?php echo $row['bed']; ?></option>
												<option class="mdl-menu__item" value="1">1</option>
												<option class="mdl-menu__item" value="2">2</option>
												<option class="mdl-menu__item" value="3">3</option>
												<option class="mdl-menu__item" value="4">4</option>
											</select>
											<label class="mdl-textfield__label">Bed Capacity</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="rent" 
												pattern="-?[0-9]*(\.[0-9]+)?" id="text7" placeholder="<?php echo $row['rent']; ?>">
											<label class="mdl-textfield__label" for="text7">Rent Per Night</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-12 p-t-20 text-center">
										<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink" name="submit">Submit</button>
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
		$roomno=mysqli_real_escape_string($link, $_POST['roomno']);
		$roomtype=mysqli_real_escape_string($link, $_POST['roomtype']);
		$ac=mysqli_real_escape_string($link, $_POST['ac']);
		$meal=mysqli_real_escape_string($link, $_POST['meal']);
		$bed=mysqli_real_escape_string($link, $_POST['bed']);
		$rent=mysqli_real_escape_string($link, $_POST['rent']);

		$auth=mysqli_query($link, "SELECT * from rooms where room_no='$roomno'");
		$count=mysqli_num_rows($auth);

		if($count!=0){
			echo "<script>alert('Room Already Exits')</script>";
		}else{
			$insert=mysqli_query($link, "UPDATE rooms set room_no='$roomno',type='$roomtype',ac='$ac',meal='$meal',bed='$bed',rent='$rent' where id='$id'")or die(mysqli_error($link));
			echo "<script>alert('Room Updated Successfully')</script>";
			echo "<script>window.open('edit_room.php?id=$id')</script>";
		}
	}
?>