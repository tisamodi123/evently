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

        <div class="freelancer-header" style="background-image: url(<?= base_url('resources/media/images/' . $postinfo->thumbnail) ?>);background-color: rgba(0,0,0,0.5);padding: 100px;padding-top: 200px;padding-bottom: 200px; background-blend-mode: multiply;background-size: cover;background-position: 50% 50%;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-page-header-inner">
                            <div class="left-side">
                                <div class="header-details">
                                    <h3 class="text-capitalize text-light pb-2 fw-bold"><?= $postinfo->uname ?> </h3>
                                    <h4 class="text-light pb-2"><?= $postinfo->title ?></h4>
                                    <!-- <div class="star-rating" data-rating="5.0"></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <!-- Content -->
            <div class="col-md-7 content-right-offset p-5">

                <!-- Page Content -->
                <div class="single-page-section">
                    <h3 class="margin-bottom-25">About Me</h3>
                    <p><?= $postinfo->description ?></p>
                </div>




            </div>


            <!-- Sidebar -->
            <div class="col-md-5 pb-5 pt-5">
                <div class="sidebar-container">

                    <!-- Profile Overview -->
                    <div class="profile-overview">
                        <div class="overview-item"><strong>Email id</strong><span><?= $postinfo->email ?></span></div>
                        <div class="overview-item"><strong>Contact no</strong><span><?= $postinfo->contact ?></span></div>
                        <div class="overview-item"><strong>Date Time</strong><span><?= $postinfo->createdDT ?></span></div>
                    </div>


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