<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_21/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 09:16:49 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Evently</title>
<?php include_once('topscripts.php')?>

</head>
<body>
<?php include_once('header.php')?>
<!-- Wrapper -->
<div id="wrapper">


<div class="clearfix"></div>

	<div class="full-page-container">

			<div class="full-page-sidebar">
				<div class="full-page-sidebar-inner" data-simplebar>
					<div class="sidebar-container">



						<!-- Category -->
						<form method="post" action="<?=site_url("Project/myPosts")?>" >
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
			</div>
			<!-- Full Page Sidebar / End -->

			<!-- Full Page Content -->
			<div class="full-page-content-container" data-simplebar>
				<div class="full-page-content-inner">

					

					<div class="listings-container grid-layout margin-top-35">


						<?php
						foreach ($posts as $p) {
							?>
							<!-- Job Listing -->
							<a href="<?=site_url("Project/loadPost/$p->projectid") ?>" class="job-listing">


								<!-- Job Listing Details -->
								<div class="job-listing-details" style="background-image: url(<?= base_url("resources/media/images/" . $p->coverpage) ?>);background-size: cover;height: 200px;">
									<!-- Logo -->
									

									<!-- Details -->
									<div class="job-listing-description">
										<h4 class="job-listing-company bg-light text-dark p-2 d-inline-block rounded text-capitalize">
											<?= $p->uname ?><!-- <span class="verified-badge" title="Verified Employer"
												data-tippy-placement="top"></span> -->
										</h4>
										
									</div>
								</div>
								<div class="job-listing-footer">
								<h3 class="job-listing-title text-primary  text-capitalize">
											<?= $p->title ?>
										</h3>
									<span class="bookmark-icon"></span>
									<ul>
										<li><i class="icon-material-outline-location-on"></i><?= $p->catname ?></li>
										<li><i class="icon-material-outline-business-center"></i>
										<?= $p->eventdatetime ?>
										</li>
										<li><i class="icon-material-outline-account-balance-wallet"></i>
											<?= $p->budget ?>
										</li>
										<li><i class="icon-material-outline-access-time"></i>
											<?= $p->addedDT ?>
										</li>
									</ul>
								</div>
							</a>
							<?php
						}
						?>
					</div>
				</div>


			</div>

</div>


</div>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_21/jobs-grid-layout-full-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 09:18:28 GMT -->
</html>