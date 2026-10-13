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

<!-- Wrapper -->


<!-- Header Container
================================================== -->
<?php include_once('header.php')?>
<div id="wrapper">
<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Intro Banner
================================================== -->
<!-- add class "disable-gradient" to enable consistent background overlay -->
<div class="intro-banner" data-background-image="images/home-background.jpg">
	<div class="container">
		
		<div class="col-xl-12">
					<div id="test1" class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-lock"></i> Password & Security</h3>
						</div>
 <form method="post" action="<?=site_url("Client/changepwd")?>">
						<div class="content with-padding">
							<div class="row">
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Current Password</h5>
										<input type="password"  name="txtcpwd" class="with-border">
									</div>
									<?php
                                  if(isset($msg))
                                  {
                                  ?>
                                  <p class="text-danger"><?=$msg?></p>
                                  <?php
                                  }
                                  ?>
								</div>

								<!-- <div class="col-xl-4">
									<div class="submit-field">
										<h5>New Password</h5>
										<input type="password" name="txtpwd" class="with-border">
									</div>
								</div>
 -->
<!-- 								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Repeat New Password</h5>
										<input type="password"   class="with-border">
									</div>
								</div>
 -->
								<div class="col-xl-4">
								
                                    <button type="submit"  class="btn btn-primary me-2 mt-2">Submit</button>
                                    <button type="reset" class="btn bg-soft-danger mt-2">Cancle</button>
								</div>

							
							</div>
							</form>
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
<?php include_once('footer.php')?>
<!-- Footer / End -->


<?php include_once('bottomscripts.php')?>
<!-- Wrapper / End -->
</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_21/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 09:17:12 GMT -->
</html>