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
	<div id="wrapper " class="p-0 ">

		<!-- Header Container
================================================== -->


		<!-- Header Container / End -->



		<!-- Intro Banner
================================================== -->
		<!-- add class "disable-gradient" to enable consistent background overlay -->
		<div>
			<!-- url(http://localhost/mainproject/resources/media/images/clientlogin.jpg) linear-gradient(to right,violet,goldenrod) -->


			<div class="container-fluid " style="height:713px;background-size:cover;padding:10%;background:linear-gradient(to top,rgba(255,0,255,0.5),rgba(218,165,30,0.5)),url(<?= base_url("resources/media/images/clientlogin.jpeg") ?>);background-size: cover;">

				<div class="row">
					<div class="col-xl-6 offset-xl-3 card p-4" style="background-color: rgba(0,0,0,0.5);">


						<div class="login-register-page ">
							<!-- Welcome Text -->
							<div class="welcome-text text-white">
								<h3 class="text-light">We're glad to see you again!</h3>

							</div>

							<!-- Form -->
							<form method="post" action="<?= site_url("Client/login2") ?>">
								<div class="input-with-icon-left">
									<i class="icon-material-baseline-mail-outline"></i>
									<input type="text" class="input-text with-border" name="txtuname" id="username" placeholder="username" required />
								</div>

								<div class="input-with-icon-left">
									<i class="icon-material-outline-lock"></i>
									<input type="password" class="input-text with-border" name="txtpwd" id="password" placeholder="Password" required />
								</div>
								<!-- <a href="#" class="forgot-password text-primary">Forgot Password?</a> -->
								<div>
									<span class="text-light">Don't have an account? </span>

									<a href="<?= site_url("Client/loadReg2") ?>" class="forgot-password text-primary">Sign Up!</a>
								</div>
								<?php
								if (isset($msg1)) {
								?>
									<div class="form-group">
										<label class="text-danger text-center text-capitalize bg-light"><?= $msg1 ?></label>
									</div>
								<?php
								}
								?>
							

								<button class="button full-width button-sliding-icon ripple-effect margin-top-10 bg-primary" type="submit">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>

							</form>




						</div>

					</div>
				</div>
			</div>
		</div>
		<?php
		if (isset($msg)) {
		?>
			<div class="container-fluid position-absolute top-0 d-flex align-items-center justify-content-center" style="height: 100vh;width: 100%;background-color: rgba(0,0,0,0.8);z-index: 999999;">

				<div class="form-group">
					<svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" fill="#fd0000" width="50%" style="display: block;margin: auto;" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<path d="m2.095 19.886 9.248-16.5c.133-.237.384-.384.657-.384.272 0 .524.147.656.384l9.248 16.5c.064.115.096.241.096.367 0 .385-.309.749-.752.749h-18.496c-.44 0-.752-.36-.752-.749 0-.126.031-.252.095-.367zm9.907-6.881c-.414 0-.75.336-.75.75v3.5c0 .414.336.75.75.75s.75-.336.75-.75v-3.5c0-.414-.336-.75-.75-.75zm-.002-3c-.552 0-1 .448-1 1s.448 1 1 1 1-.448 1-1-.448-1-1-1z" fill-rule="nonzero" />
					</svg>
					<label class="text-danger fs-1 fw-bold text-center"><?= $msg ?></label>
				</div>
			</div>

		<?php
		}
		?>



		<!-- Content
================================================== -->
		<!-- Category Boxes -->


		<!-- Footer
================================================== -->

		<!-- Footer / End -->


		<?php include_once('bottomscripts.php') ?>
		<!-- Wrapper / End -->
</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_21/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 09:17:12 GMT -->

</html>