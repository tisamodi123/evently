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
                             <button class="btn btn-dark" style="background-color: rgba(0,0,0,0.5);border: 0px;">Login As Client</button>
                                <button class="btn btn-dark" style="background-color: rgba(0,0,0,0.5);border: 0px;">Login As Event Manager</button>
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
                        foreach ($ass as $p) {
                        ?>
                            <div class="col-md-4">
                                <!-- Photo Box -->
                                <a href="<?= site_url("Project/loadPost/$p->projectid") ?>" class="photo-box small" data-background-image="<?= base_url("resources/media/images/" . $p->coverpage) ?>">
                                    <div class="photo-box-content">
                                        <h3><?= $p->title ?></h3>
                                        <span>BUdget : <?= $p->budget ?></span>
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
                            <h3>PROJECTS</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categories Carousel -->
            <div class="fullwidth-carousel-container margin-top-20">
                <div class="testimonial-carousel testimonials">

                    <?php
                    foreach ($posts as $p) {
                    ?>
                        <!-- Item -->
                        <div class="fw-carousel-review">
                            <a href="<?= site_url("Project/loadPost/$p->projectid") ?>">
                                <div class="testimonial-box" style="background-image: url(<?= base_url("resources/media/images/" . $p->coverpage) ?>);background-size: cover;background-color: rgba(0,0,0,0.5);background-blend-mode: multiply;">

                                    <div class="testimonial-author">
                                        <img src="<?= base_url("resources/media/images/" . $p->coverpage) ?>" style="width: 100%;height: 500px;object-fit: cover;object-position: 0% 0%;">
                                        <h4 class="pt-3 text-capitalize fw-bold fs-3 text-light" style="letter-spacing: 2px;"><?= $p->title ?></h4>
                                        <span>Budget : <?= $p->budget ?></span> 
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