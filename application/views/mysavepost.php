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
					<?php
					foreach ($posts as $p) {
					?>
						<div class="col-md-4 mb-3">
							<a href="<?= site_url("Project/mysaveposts/$p->saveid") ?>">
								<a href="<?= site_url("Project/loadPost/$p->projectid") ?>">
									<div class="company-inner-alignment  card shadow">
										<span class="card-img-top " style="height: 300px;"><img src="<?= base_url("resources/media/images/" . $p->coverpage) ?>" style="height: 300px;object-fit: cover; " class="w-100 rounded-top"></span>
										<div class=" card-body">
											<h4 class="card-title fs-4 fw-bold text-success text-uppercase text-center"><?= $p->title ?></h4>
											<hr>
											<p class="card-text">
												<span class="fw-bold">Client Name : </span><?= $p->username ?><br>
												<span class="fw-bold">Budget : </span><?= $p->budget ?><br>
												<span class="fw-bold">Date : </span><?= $p->eventdatetime ?><br>
											</p>

										</div>
										<div class="card-footer">
											<a class="btn btn-outline-primary rounded-pill w-100" href="<?= site_url("Project/eventunsavepost/" . $p->projectid) ?>" class="reply"><i class="fa fa-reply"></i>UNSAVE</a>
										</div>
									</div>
								</a>
							</a>
						</div>
					<?php
					}
					?>
				</div>
			</div>


			<!-- Spacer -->
			<div class="margin-top-70"></div>
			<!-- Spacer / End-->

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