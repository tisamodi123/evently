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
		<div class="dashboard-content-container" data-simplebar>
			<div class="dashboard-content-inner">

				<!-- Dashboard Headline -->
				<div class="dashboard-headline">
					<h3>Edit Profile</h3>


				</div>

				<!-- Row -->
				<div class="row">

					<!-- Dashboard Box -->
					<div class="col-xl-12">
						<div class="dashboard-box margin-top-0">

							<!-- Headline -->
							<div class="headline">
								<h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
							</div>

							<div class="content with-padding padding-bottom-0">
								<form method="post" enctype="multipart/form-data" action="<?= site_url("Client/editprofile/" . $old->clientid) ?>">
									<div class="row">

										<div class="col-auto">
											<div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
												<img class="profile-pic" src="<?= base_url('resources/media/images/' . $old->profilepic) ?>" alt="" />
												<div class="upload-button"></div>
												<input class="file-upload" name="fup" type="file" accept="image/*" />
											</div>
										</div>

										<div class="col">
											<div class="row">

												<div class="col-xl-6">
													<div class="submit-field">
														<h5>First Name</h5>
														<input type="text" name="txtname" class="with-border" value="<?= $old->username ?>">
													</div>
												</div>





												<div class="col-xl-6">
													<div class="submit-field">
														<h5>Email</h5>
														<input type="text" name="txtemail" class="with-border" value="<?= $old->email ?>">
													</div>
												</div>
												<div class="col-xl-6">
													<div class="submit-field">
														<h5>Contact No</h5>
														<input type="text" name="txtcontact" class="with-border form-control" value="<?= $old->contactno ?>">
													</div>
												</div>
												<div class="col-xl-6">
													<div class="submit-field">
														<h5>city</h5>
														<select type="text" class="with-border" name="cat">
															<?php
															foreach ($cat as $c) {
															?>
																<option value="<?= $c->cityid ?>"><?= $c->cityname ?></option>
															<?php
															}
															?>
														</select>

													</div>
												</div>

												<div class="col-xl-12">
													<div class="submit-field">
														<h5>Bio</h5>

														<textarea type="text" style="height: 200px" name="txtbio" class="with-border "><?= $old->bio ?></textarea>
													</div>
												</div>
											</div>
											<!-- Button -->
											<div class="col-xl-12">
												<button class="btn btn-primary">UPDATE</button>
												<a href="<?= site_url("Client/changepwd") ?>" class="btn-link">Change password</a>
											</div>

										</div>
									</div>
							</div>
							</form>
						</div>
					</div>
				</div>


				



			</div>
			<!-- Row / End -->



		</div>
	</div>
	</div>

	<!-- Content
================================================== -->
	<!-- Category Boxes -->




	<?php include_once('bottomscripts.php') ?>
	<!-- Wrapper / End -->
</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_21/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 09:17:12 GMT -->

</html>