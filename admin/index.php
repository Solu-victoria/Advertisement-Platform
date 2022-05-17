<?php include "auth.php"; 
$query=mysqli_query($link,"SELECT * from products where status ='approved'");
$available=mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">
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
								<div class="page-title">Dashboard</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>
					<!-- start widget -->
					<div class="state-overview">
						<div class="row">
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-blue">
									<span class="info-box-icon push-bottom"><i class="material-icons">style</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Approved Ads</span>
										<span class="info-box-number"><?php echo $available; ?></span>
										<div class="progress">
											<div class="progress-bar width-60"></div>
										</div>
										
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-orange">
									<span class="info-box-icon push-bottom"><i
											class="material-icons">card_travel</i></span>
									<div class="info-box-content">
										<span class="info-box-text">New Ads</span>
										<span class="info-box-number">155</span>
										<div class="progress">
											<div class="progress-bar width-40"></div>
										</div>
										
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-purple">
									<span class="info-box-icon push-bottom"><i
											class="material-icons">phone_in_talk</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Inquiry</span>
										<span class="info-box-number">52</span>
										<div class="progress">
											<div class="progress-bar width-80"></div>
										</div>
										
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-success">
									<span class="info-box-icon push-bottom"><i
											class="material-icons">monetization_on</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Total Ads</span>
										<span class="info-box-number">13,921</span><span>$</span>
										<div class="progress">
											<div class="progress-bar width-60"></div>
										</div>
										
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
						</div>
					</div>
					<!-- end widget -->
					<!-- start Payment Details -->
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>Latest Ads</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table5">
												<thead>
												<tr>
													<th class="center"> Ad title </th>
													<th class="center"> Location </th>
													<th class="center"> Price </th>
													<th class="center"> Seller </th>
													<th class="center"> Color </th>
													<th class="center"> Size </th>
													<th class="center"> status </th>
													<th class="center"> date </th>
													<th class="center"> Action </th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($link, "SELECT * from products");
												while($row=mysqli_fetch_array($query)){
												?>
												<tr class="odd gradeX">
													<td class="center"><?php echo $row['product']; ?></td>
													<td class="center"><?php echo $row['location']; ?> </td>
													<td class="center"><?php echo $row['price']; ?></td>
													<td class="center"><?php echo $row['seller']; ?></td>
													<td class="center"><?php echo $row['color']; ?></td>
													<td class="center"><?php echo $row['size']; ?></td>
													<td class="center">
														<span class="label label-sm label-success"><?php echo $row['status']; ?> </span>
													</td>
													<td class="center"><?php echo $row['date']; ?></td>
													<td class="center">
														<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
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
					<!-- end Payment Details -->
					
					
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