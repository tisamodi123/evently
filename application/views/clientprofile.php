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


        <div class=" freelancer-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12" style="background-image: url(<?= base_url('resources/media/images/' . $profileinfo->profilepic) ?>);background-size: cover;padding: 100px 100px;background-color: rgba(0,0,0,0.8);background-blend-mode: overlay;">
                        <div class="single-page-header-inner">
                            <div class="left-side d-flex justify-content-center flex-column align-items-center">


                                <img src="<?= base_url('resources/media/images/' . $profileinfo->profilepic) ?>" class="img-responsive d-block" style="width: 200px;height: 200px;border-radius: 50%;object-fit: cover;border: 5px solid white;">



                                <div class="header-details ">
                                    <h3 class="text-capitalize text-light fw-bold mb-3 text-center mt-3"><?= $profileinfo->username ?> <span></span></h3>

                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">

            <!-- Content -->
            <div class="col-xl-8 col-lg-8 content-right-offset">

                <!-- Page Content -->
                <div class="single-page-section">
                    <h3 class="margin-bottom-25">About Me</h3>
                    <p><?= $profileinfo->bio ?></p>
                </div>




            </div>


            <!-- Sidebar -->
            <div class="col-xl-4 col-lg-4">
                <div class="sidebar-container">

                    <!-- Profile Overview -->
                    <div class="profile-overview">
                        <div class="overview-item"><strong>Email id</strong><span><?= $profileinfo->email ?></span></div>
                        <div class="overview-item"><strong>Contact no</strong><span><?= $profileinfo->contactno ?></span></div>
                        <div class="overview-item"><strong>City</strong><span><?= $profileinfo->catname ?></span></div>
                        <div class="overview-item"><a href="<?= site_url("Client/oldeditdata") ?>"><strong>Edit Profile</strong></a></div>
                        
                    </div>


                </div>
            </div>

           
        </div>
    </div>


    <?php include_once('footer.php') ?>

    <?php include_once('bottomscripts.php') ?>
    <!-- Wrapper / End -->
</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_21/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 09:17:12 GMT -->

</html>