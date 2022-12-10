<?php include "auth.php"; ?>
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
								<div class="page-title">All Vendors</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Vendors</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">All Vendors</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									<header>All Vendors</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									
									<div class="table-scrollable">
										<table class="table table-hover table-checkable order-column full-width"
											id="example4">
											<thead>
												<tr>
													<th class="center">First <br> Name </th>
													<th class="center">Last <br> Name </th>
													<th class="center"> Email </th>
													<th class="center"> Location </th>
													<th class="center"> Zipcode </th>
													<th class="center"> Phone </th>
													<th class="center"> Verification File </th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($link, "SELECT * from vendors");
												while($row=mysqli_fetch_array($query)){
													
												?>
												<tr class="odd gradeX">
													<td class="center"><?php echo $row['first_name']; ?></td>
													<td class="center"><?php echo $row['last_name']; ?></td>
													<td class="center">
														<?php echo $row['email']; ?>
													 </td>
													<td class="center"><?php echo $row['location'];?></td>
													<td class="center"><?php echo $row['zipcode']; ?></td>
													<td class="center"><?php echo $row['phone']; ?></td>
													<td class="center"><?php echo $row['file']; ?></td>
													<td class="center">
														<a class="btn btn-tbl-delete btn-xs" href='delete_vendor.php?id=<?php echo $row['id']?>' onclick='confirm("Are you sure you want to delete this Vendor?")'>
															<i class="fa fa-trash-o "></i>
														</a>
													</td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
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