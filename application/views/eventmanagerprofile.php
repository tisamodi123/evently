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






	</div>
	<div class="row p-5	">
		<div class="col-md-3">
			<div class="sidebar-container">
				<form method="post" action="<?= site_url("Project/loadprofile") ?>">
					<div class="sidebar-widget">
						<h3>City</h3>
						<select class=" with-border" data-size="7" title="Select City" name="txtcity">
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
					<input type="submit" name="btnsearch">
					<div class="clearfix"></div>
				</form>

			</div>
		</div>
		<div class="col-md-9">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Event manager</h2>
						<span>Event manager Profile Pic</span>


					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-md-12 content-left-offset">




					<!-- Freelancers List Container -->
					<div class="freelancers-container freelancers-grid-layout margin-top-35">
						<?php
						foreach ($profile as $p) {
						?>
							<!--Freelancer -->
							<div class="freelancer rounded">

								<!-- Overview -->
								<div class="freelancer-overview rounded-top" style="background-image: url(<?= base_url("resources/media/images/" . $p->image) ?>);height: 300px;background-size: cover;background-color: rgba(255,255,255,0.5);background-blend-mode: multiply;">
									<div class="freelancer-overview-inner">

										<!-- Bookmark Icon -->
										<!-- <span class="bookmark-icon"></span> -->

										<!-- Name -->
										<div class="freelancer-name">
											<a href="<?= site_url("Project/loadprofile/$p->eventmanagerid") ?>">
												<h4 class="fw-bold text-light text-capitalize h4 bg-dark p-2 w-25 rounded"><?= $p->uname ?></h4>
											</a>
											<span><?= !empty($p->titlename) ? $p->titlename : (!empty($p->bio) ? $p->bio : '') ?></span>
										</div>

										<?php if (!empty($avg->rate)): ?>
										<div class="freelancer-rating">
											<div class="star-rating" data-rating="<?= $avg->rate ?>"></div>
										</div>
										<?php endif; ?>
									</div>
								</div>

								<!-- Details -->
								<div class="freelancer-details">
									<div class="freelancer-details-list">
										<ul>
											<li>Location <strong><i class="icon-material-outline-location-on"></i><?= $p->catname ?></strong></li>
											<li>Contact NO <strong><?= $p->contactno ?></strong></li>
											<li>Email Id<strong><?= $p->emailid ?></strong></li>
										</ul>
									</div>
									<a href="<?= site_url("Project/loadeventmoreinfoProfile/$p->eventmanagerid") ?>" class="button button-sliding-icon ripple-effect bg-primary">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>

								</div>
							</div>
							<!-- Freelancer / End -->
						<?php
						}
						?>

					</div>
					<!-- Freelancers Container / End -->
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