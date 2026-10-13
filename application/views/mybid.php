<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_21/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 09:16:49 GMT -->

<head>

	<!-- Basic Page Needs
================================================== -->
	<title>Evently</title>
	<?php include_once('topscripts.php') ?>

</head>

<body>

	<!-- Wrapper -->


	<!-- Header Container
================================================== -->
	<?php include_once('header.php') ?>
	<div id="wrapper">
		<div class="clearfix"></div>
		<!-- Header Container / End -->



		<!-- Intro Banner
================================================== -->
		<!-- add class "disable-gradient" to enable consistent background overlay -->
		<div class="intro-banner" data-background-image="images/home-background.jpg">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-4">
						<div class="sidebar-container">

							<!-- Location -->
							<form method="post" action="<?=site_url("Project/mybids")?>" >
						<div class="sidebar-widget">
							<h3>City</h3>
							<select class="selectpicker with-border" data-size="7" title="Select City" name="txtcity">
								<option value="-1"> select city</option>
								<?php
								foreach ($cat as $c) {
								?>
									<option value="<?= $c->cityid ?>"><?= $c->cityname ?></option>
								<?php
								}
								?>

							</select>
						</div>

						<!-- Keywords -->



						
<!-- 						<button class="button ripple-effect bg-primary" name="btnsearch">Search</button>
 -->						<input type="submit" name="btnsearch">
						<div class="clearfix"></div>
</form>

					</div>
				</div>
					<div class="col-xl-9 col-lg-8 content-left-offset">

						<h1 class="page-title">My Bids</h1>



						<div class="listings-container margin-top-35">
							<?php
							foreach ($posts as $p) {
							?>

								<!-- Job Listing -->
								<a href="<?= site_url("Project/loadPost/$p->projectbidid") ?>" class="job-listing">
									<a href="<?= site_url("Project/loadPost/$p->projectid") ?>" class="job-listing">

										<!-- Job Listing Details -->
										<div class="job-listing-details ">
											<div class=" row">
												<img src="<?= base_url("resources/media/images/" . $p->coverpage) ?>" alt="" class="w-100 col-md-6">
												<div class="h-100 col-md-6">
													<h3 class="job-listing-company mb-2"><?= $p->title ?></h3>

													<h4 class="job-listing-title mb-2 text-success">Bugdet:- ₹<?= $p->budget ?> </h4>
													<h4 class="job-listing-title mb-2 text-success">My Bid:- ₹<?= $p->price ?> </h4>
													<!-- <h4 class="job-listing-title mb-2 text-success">Lowest Bid:- ₹<?= $min->price ?> </h4> -->
													<p class="job-listing-text"><?= $p->description ?> </p>
												</div>
											</div>
										</div>

										<!-- Job Listing Footer -->
										<div class="job-listing-footer">
											<ul>
												<li><i class="icon-material-outline-location-on"></i> <?= $p->catname ?></li>
												<li><i class="icon-material-outline-face "></i> <?= $p->cname ?></li>
												<li><i class="icon-material-outline-access-time"></i> Event Date:-<?= $p->edate ?></li>
											</ul>
										</div>
									</a>
								</a>
							<?php
							}
							?>




						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Content
================================================== -->
	<!-- Category Boxes -->


	<!-- Footer
================================================== -->
<?php include_once('footer.php') ?>
	<!-- Footer / End -->


	<?php include_once('bottomscripts.php') ?>
	<!-- Wrapper / End -->
</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_21/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 09:17:12 GMT -->

</html>