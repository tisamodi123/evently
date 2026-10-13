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
		<div id="titlebar" class="gradient">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Event manager</h2>
						<span>Event manager Profile Pic</span>


					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-4">

					<div class="sidebar-container">



						<!-- Category -->
						<form method="post" action="<?=site_url("Project/Explore")?>" >
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

						<!-- Keywords -->



						<div class="sidebar-widget">
							<h3>Category</h3>
							<select class=" with-border" data-size="7" title="Select Category" name="txtcate">
								<option value="-1"> select category</option>
								<?php
								foreach ($cate as $c) {
								?>
									<option value="<?= $c->categoryid ?>"><?= $c->categoryname ?></option>
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
				<div class="col-xl-9 col-lg-8 content-left-offset">

					
					<!-- Freelancers List Container -->
					<div class="freelancers-container freelancers-grid-layout margin-top-35">

						<?php
						foreach ($posts as $p) {
						?>
							<!--Freelancer -->
							<div class="freelancer">

								<!-- Overview -->
								<div class="freelancer-overview" style="background-image: url(<?= base_url("resources/media/images/" . $p->coverpage) ?>);background-size: cover;height: 300px;background-color: rgba(0,0,0,0.5);background-blend-mode: multiply;">
									<div class="freelancer-overview-inner">
										
										<?php
										/*
										if (isset($mysave) && is_array($mysave) && count($mysave) == 0) {
										?>
										<span class="save-icon">
											<a href="<?= site_url("Project/eventsavepost/$p->projectid") ?>" class="btn btn-dark ">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:white;">
													<path d="M19 24l-7-6-7 6v-24h14v24z" />
												</svg>
											</a>
										</span>
										<?php
										} else if (isset($mysave)) {
										?>
										<span class="save-icon">
											<a href="<?= site_url("Project/eventunsavepost/$p->projectid") ?>" class="btn btn-dark ">
												<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" style="fill:white;">
													<path d="M5 0v24l7-6 7 6v-24h-14zm1 1h12v20.827l-6-5.144-6 5.144v-20.827z" />
												</svg>
											</a>
										</span>
										<?php
										}
										*/
										?>



										<!-- Name -->
										<div class="freelancer-name">
											<h4><a href="" class="text-light fw-bold text-capitalize fs-3"><?= $p->uname ?><img class="flag" src="images/flags/gb.svg" alt="" title="United Kingdom" data-tippy-placement="top"></a></h4>

										</div>

									</div>
								</div>

								<!-- Details -->
								<div class="freelancer-details p-4">
									<div class="freelancer-details-list">
										<h3 class="text-primary"><?= $p->title ?></h3>
										<ul>
											<li>Location <strong><i class="icon-material-outline-location-on"></i><?= $p->catname ?></strong></li>
											<li><i class="icon-material-outline-business-center"></i>
												<?= $p->eventdatetime ?>
											</li>
											<li><i class="icon-material-outline-account-balance-wallet"></i>
												<?= $p->budget ?>
											</li>
											<li><i class="icon-material-outline-access-time"></i>
												<?= !empty($p->addedDT) ? $p->addedDT : (!empty($p->created_at) ? $p->created_at : (!empty($p->actionstartdate) ? $p->actionstartdate : '')) ?>
											</li>
										</ul>
									</div>
									<a href="<?= site_url("Project/loadPost/$p->projectid") ?>" class="button button-sliding-icon ripple-effect bg-primary">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>

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