<?php
$currentDate=date('Y-m-d');
$baseDate = !empty($pinfo->addedDT) ? $pinfo->addedDT : (!empty($pinfo->created_at) ? $pinfo->created_at : (!empty($pinfo->actionstartdate) ? $pinfo->actionstartdate : $currentDate));
$expiryDate=date('Y-m-d',strtotime($baseDate . ' +7 days'));
						
?>
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
	<div id="wrapper">

		<!-- Header Container
================================================== -->
		<?php include_once('header.php') ?>
		<div class="clearfix"></div>
		<!-- Header Container / End -->



		<!-- Intro Banner
================================================== -->
		<!-- add class "disable-gradient" to enable consistent background overlay -->
		<div id="titlebar" class="gradient">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Event manager</h2>
						<span>Event manager Post Page</span>


					</div>
				</div>
			</div>
		</div>

		<!-- Post Content -->
		<div class="container">
			<div class="row">

				<!-- Inner Content -->
				<div class="col-xl-8 col-lg-8">
					<!-- Blog Post -->
					<div class="blog-post single-post">

						<!-- Blog Post Thumbnail -->
						<div class="blog-post-thumbnail">
							<div class="blog-post-thumbnail-inner">

								<img src="<?= base_url('resources/media/images/' . $pinfo->coverpage) ?>" alt="<?= htmlspecialchars($pinfo->title ?? 'Cover') ?>">
							</div>
						</div>
<?php
														if (isset($_SESSION['type2'])) {
										if(count($mysave)==0)
										{
											?>
										<span class="save-icon">
											<a href="<?= site_url("Project/eventsavepost/$pinfo->projectid") ?>" class="btn btn-dark ">
<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" style="fill:white;">
													<path d="M5 0v24l7-6 7 6v-24h-14zm1 1h12v20.827l-6-5.144-6 5.144v-20.827z" />
												</svg>

											</a>
										</span>
										<?php
									}
									else
									{

										
										 ?>
										<span class="save-icon">
											<a href="<?= site_url("Project/eventunsavepost/$pinfo->projectid") ?>" class="btn btn-dark ">
												
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:white;">
													<path d="M19 24l-7-6-7 6v-24h14v24z" />
												</svg>
											</a>
										</span>
										<?php
									}
								}
									?>
						<!-- Blog Post Content -->
						<div class="blog-post-content">
							<h3 class="margin-bottom-10">
								<?= $pinfo->title ?>
							</h3>

							<div class="blog-post-info-list margin-bottom-20">
								<a href="#" class="blog-post-info">
									Event Date : <?= $pinfo->eventdatetime ?>
								</a>
								

								<a href="#" class="blog-post-info">
									Budget :<?= $pinfo->budget ?>
								</a>
								<a href="#" class="blog-post-info">
									Added Date : <?= !empty($pinfo->addedDT) ? $pinfo->addedDT : (!empty($pinfo->created_at) ? $pinfo->created_at : (!empty($pinfo->actionstartdate) ? $pinfo->actionstartdate : '')) ?>
								</a>
								<a href="#" class="blog-post-info">
									Action End Date : <?= $expiryDate ?>
								</a>
								<br>
								<a class="icon-material-outline-location-on">
									<?= $pinfo->catname ?>
								</a>
								<?php if (!empty($min->price)): ?>
								<a href="#" class="blog-post-info">
									Lowest Bid:- ₹<?= $min->price ?>
								</a>
								<?php endif; ?>
							</div>

							<p class="margin-top-20 margin-bottom-20">
								<?= $pinfo->description ?>
							</p>


						</div>
						<!-- Blog Post Content / End -->
						<!-- Comments -->
						<div class="row">
							<div class="col-xl-12">
								<section class="comments">
									<h3 class="margin-top-45 margin-bottom-0">Add Bid <span class="comments-amount">(
											<?= count($description) ?>)
										</span></h3>

									<ul>
										<?php
										foreach ($description as $c) {
										?>
											<li >
												<div style="width: 100px ;  height: 100px;display: inline-block;float: left;padding: 0 17px 0 0;position: absolute;left: 0px; top: -5px;">
													<img src="<?= base_url('resources/media/images/' . $c->image) ?>" alt="" style="width: 100px;height: 100px;" class="rounded-circle">
												</div>
												<div class="comment-content">
													<div class="arrow-comment"></div>
													<div class="comment-by">
														<?= $c->username ?><span class="date">
															<?= !empty($c->createdDT) ? $c->createdDT : (!empty($c->created_at) ? $c->created_at : '') ?>
														</span>
														<?php
														if (isset($_SESSION['type2'])) {
														?>
															<?php 
																if ($c->status==1) {
															?>

															<p class="btn btn-success" >Accepted Bid</p>
															<?php
																}
															?>
															<?php
															if (($_SESSION['mid'] == $c->eventmanagerid || $_SESSION['mid'] == $pinfo->projectid)and $pinfo->status==0) {
															?>
																<a href="<?= site_url('Project/removebid/' . $c->projectbidid . '/' . $c->projectid) ?>" class="reply"><i class="fa fa-reply"></i>Delete
																</a>
															<?php
															}

															?>
														<?php
														}
														?>

														<?php
														if (isset($_SESSION['type1'])) {
														?>
															<?php 
																if ($pinfo->status==0) {
															?>

															<a href="<?= site_url('Project/accpetbids/' . $c->projectbidid . '/' . $c->projectid.'/'.$c->eventmanagerid) ?>" class="reply"><i class="fa fa-reply"></i>Accept
															</a>
															<?php
																}
															?>

															<?php 
																if ($c->status==1) {
															?>

															<p class="btn btn-success" >Accepted Bid</p>
															<?php
																}
															?>
															<?php
															if (($_SESSION['uid'] == $c->projectbidid || $_SESSION['uid'] == $pinfo->projectid) and $pinfo->status==0) {
															?>
																<a href="<?= site_url('Project/removebid/' . $c->projectbidid . '/' . $c->projectid) ?>" class="reply"><i class="fa fa-reply"></i>Delete
																</a>

															<?php
															}

															?>
														<?php
														}
														?>

													</div>
													<p>
													<p>BID Price:
														<?= $c->price ?>
													</p>
													<?= $c->description ?>

													</p>
												</div>


											</li>
										<?php
										}
										?>
									</ul>



								</section>

							</div>
						</div>
						<!-- Comments / End -->
						<?php

						if ($expiryDate < $currentDate) {
						  ?>
						  <p class="btn btn-danger">Project Expired</p>
						  <?php
						} 
						else {
						 
						
						if (isset($_SESSION['type2']) and $pinfo->status==0) {
						?>

							<!-- Leava a Comment -->
							<div class="row">
								<div class="col-xl-12">

									<h3 class="margin-top-35 margin-bottom-30 "></h3>

									<!-- Form -->
									<form method="post" action="<?= site_url("Project/addbid/$pinfo->projectid") ?>">
										<?php
										if (count($test) == 0) {

										?>

											<div class="row">
												<div class="col-xl-6">
													<div class="input-with-icon-left no-border">
														<i class="icon-material-outline-account-circle"></i>
														<input type="text" class="input-text" name="txtprice" id="price" placeholder="price" required />
													</div>
												</div>


												<textarea name="txtdesc" cols="30" rows="5" placeholder="description"></textarea>
												<!-- Button -->
												<button class="button button-sliding-icon ripple-effect margin-bottom-40  bg-primary" type="submit">ADD BID <i class="icon-material-outline-arrow-right-alt"></i></button>
											<?php
										}
											?>
									</form>



								</div>
							</div>
							<!-- Leava a Comment / End -->

					</div>
					<!-- Inner Content / End -->
				<?php
						}
					}
				?>
				</div>
				<div class="col-xl-4 col-lg-4 content-left-offset">
					<div class="sidebar-container">

						<?php
						if (isset($_SESSION['type1'])) {
						?>

							<form method="post" id="" action="<?= site_url("Project/loadimage/$pinfo->projectid") ?>" enctype="multipart/form-data">
								<label class="file d-flex align-items-end">
									<label class=" rounded btn btn-light m-0">
										<input type="file" name="fup" class="btn file-control">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
											<path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
										</svg>  Image
									</label>
									<button type="submit" class="cmn-btn btn btn-light ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" id="upload-image">
											<path d="M19,13a1,1,0,0,0-1,1v.38L16.52,12.9a2.79,2.79,0,0,0-3.93,0l-.7.7L9.41,11.12a2.85,2.85,0,0,0-3.93,0L4,12.6V7A1,1,0,0,1,5,6h7a1,1,0,0,0,0-2H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V14A1,1,0,0,0,19,13ZM5,20a1,1,0,0,1-1-1V15.43l2.9-2.9a.79.79,0,0,1,1.09,0l3.17,3.17,0,0L15.46,20Zm13-1a.89.89,0,0,1-.18.53L13.31,15l.7-.7a.77.77,0,0,1,1.1,0L18,17.21ZM22.71,4.29l-3-3a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-3,3a1,1,0,0,0,1.42,1.42L18,4.41V10a1,1,0,0,0,2,0V4.41l1.29,1.3a1,1,0,0,0,1.42,0A1,1,0,0,0,22.71,4.29Z"></path>
										</svg>  Image</button>
								</label>
								<style>
									input[type="file"] {
										display: none;
									}
								</style>
							</form>


							<form method="post" id="" action="<?= site_url("Project/loadvideo/$pinfo->projectid") ?>" enctype="multipart/form-data">

								<label class="file d-flex align-items-end">
									<label class=" rounded btn btn-light m-0">
										<input type="file" name="fup" class="btn file-control">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
											<path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
										</svg>  Video
									</label>
									<button type="submit" class="cmn-btn btn btn-light ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" id="upload-image">
											<path d="M19,13a1,1,0,0,0-1,1v.38L16.52,12.9a2.79,2.79,0,0,0-3.93,0l-.7.7L9.41,11.12a2.85,2.85,0,0,0-3.93,0L4,12.6V7A1,1,0,0,1,5,6h7a1,1,0,0,0,0-2H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V14A1,1,0,0,0,19,13ZM5,20a1,1,0,0,1-1-1V15.43l2.9-2.9a.79.79,0,0,1,1.09,0l3.17,3.17,0,0L15.46,20Zm13-1a.89.89,0,0,1-.18.53L13.31,15l.7-.7a.77.77,0,0,1,1.1,0L18,17.21ZM22.71,4.29l-3-3a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-3,3a1,1,0,0,0,1.42,1.42L18,4.41V10a1,1,0,0,0,2,0V4.41l1.29,1.3a1,1,0,0,0,1.42,0A1,1,0,0,0,22.71,4.29Z"></path>
										</svg>  Video</button>
								</label>
								<style>
									input[type="file"] {
										display: none;
									}
								</style>
							</form>
						<?php
						}
						?>
						<!-- Widget -->
						<div class="sidebar-widget">

							<h3>Upload Your Posts</h3>
							<ul class="widget-tabs">
								<?php
								foreach ($post as $p) {
								?>
									<!-- Post #1 -->
									<li class="position-relative">
										<a href="" class="widget-content active ">
											<img src="<?= base_url("resources/media/images/" . $p->imageurl) ?>" alt="">
											<div class="widget-text">
												<h5><?= $p->title ?></h5>
												<span><?= $p->eventdatetime ?></span>
											</div>
											<a href="<?= site_url('Project/removeimage/' . $p->projectimageid . '/' . $p->projectid) ?>" class=" w-100 btn btn-dark">Delete</a>
										</a>
									</li>
								<?php
								}
								?>
								<!-- Post #2 -->

							</ul>

						</div>

						<!-- Widget / End-->
						<div class="">

							<h3>Upload Your videos</h3>
							<ul>
								<?php
								foreach ($videos as $pd) {
								?>
									<li class="position-relative">
										<a href="" class="widget-content active ">
											<video width="320" height="320" controls>
												<source src="<?= base_url("resources/media/videos/" . $pd->videourl) ?>" type="video/mp4">
												Your browser does not support the video tag.
											</video>
											<a href="<?= site_url('Project/removevideo/' . $pd->projectvideoid . '/' . $pd->projectid) ?>" class=" w-100 btn btn-dark">Delete</a>
										</a>
									</li>
									<!-- Post #1 -->

								<?php
								}
								?>
								<!-- Post #2 -->

							</ul>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Spacer -->
	<div class="padding-top-40"></div>


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