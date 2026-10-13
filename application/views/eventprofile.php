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
                    <div class="col-md-12" style="background-image: url(<?= base_url('resources/media/images/' . $profileinfo->image) ?>);background-size: cover;padding: 100px 100px;background-color: rgba(0,0,0,0.8);background-blend-mode: overlay;">
                        <div class="single-page-header-inner">
                            <div class="left-side d-flex justify-content-center flex-column align-items-center">


                                <img src="<?= base_url('resources/media/images/' . $profileinfo->image) ?>" class="img-responsive d-block" style="width: 200px;height: 200px;border-radius: 50%;object-fit: cover;border: 5px solid white;">



                                <div class="header-details ">
                                    <h3 class="text-capitalize text-light fw-bold mb-3 text-center mt-3"><?= $profileinfo->username ?> <?php if (!empty($profileinfo->titlename)): ?><span><?= $profileinfo->titlename ?></span><?php endif; ?></h3>

                                    <div class="star-rating" data-rating="<?= $avg->rate ?? 5.0 ?>"></div>

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
                        <div class="overview-item"><strong>Email id</strong><span><?= $profileinfo->emailid ?></span></div>
                        <div class="overview-item"><strong>Contact no</strong><span><?= $profileinfo->contactno ?></span></div>
                        <div class="overview-item"><strong>City</strong><span><?= $profileinfo->catname ?></span></div>
                    </div>


                </div>
            </div>

            <!-- Boxed List -->


                <div class="row">

                    <div class="col-xl-12">
                        <section class="comments">
                            <h3 class="margin-top-45 margin-bottom-0">Add Review <span class="comments-amount">(<?= count($review) ?>)</span></h3>

                            <ul>
                                <?php
                                foreach ($review as $r) {
                                ?>
                                    <li>

                                        <div class="avatar"><img src="<?= base_url('resources/media/images/' . $r->ppic) ?>"></div>


                                        <div class="comment-content">
                                            <div class="arrow-comment"></div>
                                            <div class="comment-by"><?= $r->cname ?> <div class="star-rating" data-rating="<?= $r->rating ?>"></div><span class="date"><?= $r->createdDT ?></span>
                                                <?php
                                                if ($_SESSION['mid'] == $r->eventmanagerid || $_SESSION['mid'] == $profileinfo->eventmanagerid) {
                                                ?>
                                                    <a href="<?= site_url('Project/removereview/' . $r->reviewid . '/' . $r->eventmanagerid) ?>" class="reply"><i class="fa fa-reply"></i>Delete</a>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                            <p>

                                                <?= $r->review ?>
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
            


        </div>
        <div class="boxed-list margin-bottom-60">
            <div class="boxed-list-headline">
                <h3><i class="icon-material-outline-business"></i> Event manager History</h3>
            </div>
            <div class="row">
                <?php
                foreach ($posts as $p) {
                ?>

                    <div class="col-md-3 g-3">
                        <a href="<?= site_url("Project/loadeventmoreinfoPost/$p->postid") ?>">
                            <div class="card " >
                                <img src="<?= base_url("resources/media/images/" . $p->thumbnail) ?>" alt="" class="card-img-top" style="height: 200px;object-fit: cover;">
                                <div class="card-header"><a href="#"><i class="icon-material-outline-business text-primary"></i> <?= $p->catname ?></a></div>
                                <div class="card-body " >
                                    <p class="text-center card-title fs-5 text-capitalize"><?= $p->title ?></p>
                                </div>
                                <div class="card-footer">
                                    <i class="icon-material-outline-date-range text-primary"></i> <?= $p->createdDT ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
        <!-- Boxed List / End -->
        <!-- Boxed List / End -->
    </div>


    <?php include_once('footer.php') ?>

    <?php include_once('bottomscripts.php') ?>
    <!-- Wrapper / End -->
</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_21/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 09:17:12 GMT -->

</html>