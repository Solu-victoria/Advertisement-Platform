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
								<div class="page-title">All Ads</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Ads</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">All Ads</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									<header>All Ads</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									<div class="row p-b-20">
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group">
												<a href="new_ad.php" id="addRow" class="btn btn-info">
													Add New <i class="fa fa-plus"></i>
												</a>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group pull-right">
												<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
													data-toggle="dropdown">Tools
													<i class="fa fa-angle-down"></i>
												</a>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="javascript:;">
															<i class="fa fa-print"></i> Print </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-pdf-o"></i> Save as PDF </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-excel-o"></i> Export to Excel </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="table-scrollable">
										<table class="table table-hover table-checkable order-column full-width"
											id="example4">
											<thead>
												<tr>
													<th class="center"> Ad title </th>
													<th class="center"> Location </th>
													<th class="center"> Price </th>
													<th class="center"> Category </th>
													<th class="center"> Description </th>
													<th class="center"> Seller </th>
													<th class="center"> Color </th>
													<th class="center"> Brand </th>
													<th class="center"> Size </th>
													<th class="center"> Status </th>
													<th class="center"> Date </th>
													<th class="center"> Action </th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($link, "SELECT * from products");
												while($row=mysqli_fetch_array($query)){
													$vId = $row['vendor_id'];
													$query2=mysqli_query($link, "SELECT * from vendors where id='$vId'");
													$row2=mysqli_fetch_array($query2);
												?>
												<tr class="odd gradeX">
													<td class="center"><?php echo $row['product']; ?></td>
													<td class="center"><?php if ($vId === '0') {
														echo 'Nsukka, Nigeria';
													}else {
														echo $row2['location'];
													}
													?> </td>
													<td class="center"><?php echo $row['price']; ?></td>
													<td class="center"><?php echo $row['category']; ?></td>
													<td class="center"><?php echo $row['description']; ?></td>
													<td class="center"><?php  
													if ($vId === '0') {
														echo 'Onyinye Fashion Enterprise';
														}else {
															echo $row2['first_name'].' '. $row2['last_name'] ;
														}?></td>
													<td class="center"><?php echo $row['color']; ?></td>
													<td class="center"><?php echo $row['brand']; ?></td>
													<td class="center"><?php echo $row['size']; ?></td>
													<td class="center">
														<span class="label label-sm label-success"><?php echo $row['status']; ?> </span>
													</td>
													<td class="center"><?php echo $row['date']; ?></td>
													<td class="center">
													<a class="btn btn-tbl-edit btn-xs" href='change_status.php?id=<?php echo $row['id']; ?>&mark=
														<?php if ($row['status'] === 'pending') { ?>
																approved'>
																<i class="fa fa-check" style="color:green"></i>
															<?php }elseif ($row['status'] === 'approved') { ?>
																pending'>		
																<i class="fa fa-close" style="color:red"></i>
															<?php }
														?>
															</a>
														<a class="btn btn-tbl-delete btn-xs" href='delete_ad.php?id=<?php echo $row['id']?>' onclick='confirm("Are you sure you want to delete this Ad?")'>
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