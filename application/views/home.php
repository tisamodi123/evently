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
        <div class="" style="background: linear-gradient(transparent,rgba(0,0,0,0.5)),url(<?= base_url("resources/media/images/coverimg.jpg") ?>);background-size: cover;background-color: transparent;padding: 10%;background-position: 50% 50%;">

            <!-- Transparent Header Spacer -->
            <div class="transparent-header-spacer"></div>

            <div class="container">

                <!-- Intro Headline -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-headline">
                            <h3>
                                <strong class="text-light">CELEBRATE LOVE WITH EVENTLY</strong>
                                <hr class="border border-light">
                                <span class="text-light">Evently</span><br>

                                <?php

                                if (isset($_SESSION['uname'])) {

                                ?>


                                <?php

                                }
                                else
                                {

                                ?>
                             <button class="btn btn-dark" style="background-color: rgba(0,0,0,0.5);border: 0px;"><a class="text-light" href="<?= site_url("Client/loadLogin2") ?>">Login As Client</a></button>
                                <button class="btn btn-dark" style="background-color: rgba(0,0,0,0.5);border: 0px;"><a class="text-light" href="<?= site_url("User/loadLogin") ?>">Login As Event Manager</a></button>
                                <?php
                            }
                            ?>
                            </h3>
                        </div>
                    </div>
                </div>





            </div>
        </div>
        <!-- Features Cities / End -->


        <div class="section margin-top-65 margin-bottom-30">
            <div class="container">
                <div class="row">

                    <!-- Section Headline -->
                    <div class="col-xl-12">
                        <div class="section-headline centered margin-top-0 margin-bottom-45">
                            <h3>Events</h3>
                        </div>
                    </div>
                    <?php
                    if (isset($_SESSION['type1'])) {

                    ?>

                        <?php
                        foreach ($post as $p) {
                        ?>
                            <div class="col-md-4">
                                <!-- Photo Box -->
                                <a href="<?= site_url("Home/loadpost/$p->projectid") ?>" class="photo-box small" data-background-image="<?= base_url("resources/media/images/" . $p->coverpage) ?>" style="height: 300px;">
                                    <div class="photo-box-content">
                                        <h3 class="text-capitalize"><?= $p->title ?></h3>
                                        <span>Budget : ₹<?= $p->budget ?></span>
                                    </div>

                                </a>
                            </div>

                        <?php
                        }
                    } else {
                        ?>
                        <div class="col-md-4">
                            <!-- Photo Box -->
                            <a href="<?= site_url("Project/Explore") ?>" class="photo-box small" data-background-image="<?= base_url("resources/media/images/weeding4.jpg") ?>">
                                <div class="photo-box-content">
                                    <h3>Wedding</h3>

                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <!-- Photo Box -->
                            <a href="<?= site_url("Project/Explore") ?>" class="photo-box small" data-background-image="<?= base_url("resources/media/images/weeding6.jpg") ?>">
                                <div class="photo-box-content">
                                    <h3>Ring ceremony</h3>

                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <!-- Photo Box -->
                            <a href="<?= site_url("Project/Explore") ?>" class="photo-box small" data-background-image="<?= base_url("resources/media/images/bd5.jpg") ?>">
                                <div class="photo-box-content">
                                    <h3>Birthday party</h3>

                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <!-- Photo Box -->
                            <a href="<?= site_url("Project/Explore") ?>" class="photo-box small" data-background-image="<?= base_url("resources/media/images/Seminar2.jpg") ?>">
                                <div class="photo-box-content">
                                    <h3>Seminar Events</h3>

                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <!-- Photo Box -->
                            <a href="<?= site_url("Project/Explore") ?>" class="photo-box small" data-background-image="<?= base_url("resources/media/images/bs3.jpg") ?>">
                                <div class="photo-box-content">
                                    <h3>Baby Shower</h3>

                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <!-- Photo Box -->
                            <a href="<?= site_url("Project/Explore") ?>" class="photo-box small" data-background-image="<?= base_url("resources/media/images/mf3.jpg") ?>">
                                <div class="photo-box-content">
                                    <h3>Music festival</h3>

                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <!-- Photo Box -->
                            <a href="<?= site_url("Project/Explore") ?>" class="photo-box small" data-background-image="<?= base_url("resources/media/images/sports4.jpg") ?>">
                                <div class="photo-box-content">
                                    <h3>Sports Events</h3>

                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <!-- Photo Box -->
                            <a href="<?= site_url("Project/Explore") ?>" class="photo-box small" data-background-image="<?= base_url("resources/media/images/ff4.jpg") ?>">
                                <div class="photo-box-content">
                                    <h3>Food festival</h3>

                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <!-- Photo Box -->
                            <a href="<?= site_url("Project/Explore") ?>" class="photo-box small" data-background-image="<?= base_url("resources/media/images/party4.jpg") ?>">
                                <div class="photo-box-content">
                                    <h3>Party Events</h3>

                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <!-- Photo Box -->
                            <a href="<?= site_url("Project/Explore") ?>" class="photo-box small" data-background-image="<?= base_url("resources/media/images/tradeshows3.jpg") ?>">
                                <div class="photo-box-content">
                                    <h3>Trade event</h3>

                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <!-- Photo Box -->
                            <a href="<?= site_url("Project/Explore") ?>" class="photo-box small" data-background-image="<?= base_url("resources/media/images/jb4.jpg") ?>">
                                <div class="photo-box-content">
                                    <h3>Job Fair</h3>

                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <!-- Photo Box -->
                            <a href="<?= site_url("Project/Explore") ?>" class="photo-box small" data-background-image="<?= base_url("resources/media/images/haldi4.jpg") ?>">
                                <div class="photo-box-content">
                                    <h3>Haldi</h3>

                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
        <div class="section gray padding-top-65 padding-bottom-55">

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Headline -->
                        <div class="section-headline centered margin-top-0 margin-bottom-5">
                            <h3>EVENT MANAGERS</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categories Carousel -->
            <?php
                    if (isset($_SESSION['type1'])) {

                    ?>
            <div class="fullwidth-carousel-container margin-top-20">
                <div class="testimonial-carousel testimonials">

                    <?php
                    foreach ($posts as $p) {
                    ?>
                        <!-- Item -->
                        <div class="fw-carousel-review">
                            
                            <a href="<?= site_url("Project/loadeventmoreinfoProfile/$p->eventmanagerid") ?>">
                                <div class="testimonial-box" style="background-image: url(<?= base_url("resources/media/images/" . $p->image) ?>);background-size: cover;background-color: rgba(0,0,0,0.5);background-blend-mode: multiply;">

                                    <div class="testimonial-author">
                                        <img src="<?= base_url("resources/media/images/" . $p->image) ?>" style="width: 100%;height: 500px;object-fit: cover;object-position: 0% 0%;">
                                        <h4 class="pt-3 text-capitalize fw-bold fs-3 text-light" style="letter-spacing: 2px;"><?= $p->uname ?></h4>
                                        <?php if (!empty($p->budget)): ?><span>Budget : <?= $p->budget ?></span><?php endif; ?>
                                    </div>
                                    <!--    <div class="testimonial">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.</div> -->
                                </div>
                            </a>
                        </div>

                    <?php
                    }
                    ?>

                </div>
            </div>
            <?php
                    }
                    else
                    {


                    ?>
            <div class="fullwidth-carousel-container margin-top-20">
                <div class="testimonial-carousel testimonials">

                    <?php
                    foreach ($posts as $p) {
                    ?>
                        <!-- Item -->
                        <div class="fw-carousel-review">
                            
                            <!-- <a href="<?= site_url("Project/loadprofile/$p->eventmanagerid") ?>"> -->
                                <div class="testimonial-box" style="background-image: url(<?= base_url("resources/media/images/" . $p->image) ?>);background-size: cover;background-color: rgba(0,0,0,0.5);background-blend-mode: multiply;">

                                    <div class="testimonial-author">
                                        <h4 class="pt-3 text-capitalize fw-bold fs-3 text-light" style="letter-spacing: 2px;"><?= $p->uname ?></h4>
                                        <?php if (!empty($p->budget)): ?><span>Budget : <?= $p->budget ?></span><?php endif; ?>
                                    </div>
                            <!-- </a> -->
                        </div>

                    <?php
                    }
                    ?>

                </div>
            </div>
            <?php
        }
            ?>
            <!-- Categories Carousel / End -->

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