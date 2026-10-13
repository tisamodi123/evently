<!DOCTYPE html>
<html lang="en">

<head>


    <!-- PAGE TITLE HERE -->
    <title>Evently Admin</title>
    <?= include_once('topscripts.php') ?>


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div>
            <img src="images/pre.gif" alt="">
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <?= include_once('nav.php') ?>
        <!--**********************************
            Nav header end
        ***********************************-->


        <!--**********************************
            Header start
        ***********************************-->
        <?= include_once("header.php") ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?= include_once("sidebar.php") ?>

        <div class="content-body">
            <!-- container starts -->
            <div class="container-fluid">
                <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                    <div class="card">
                        <div class="card-header border-0">
                            <h4 class="heading mb-0 blog-title">Project info</h4>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="blog-img">
                                        <img src="<?= base_url('resources/media/images/' . $pinfo->coverpage) ?>" alt="" class="blk-img">
                                        <div class="blog-text">
                                            <!--   <img src="images/contacts/pic1.jpg" class="avatar rounded-circle me-2" alt="">  -->

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="blog-post">
                                        <div class="post-1">
                                            <!--    <img src="images/profile/friends/f1.jpg" class="avatar rounded-circle me-2 custome-avatar" alt=""> -->
                                            <div class="post-data">
                                                <p class="badge badge-secondary border-0 fs-3 text-capitalize"><?= $pinfo->title ?></p>
                                                <br>
                                                <p class="text-danger fw-bold pt-2 fs-4">Client Name : <?= $pinfo->cname ?></p>

                                                <p class="fs-5 text-success fw-bold pt-2  fs-4">Budget : <?= $pinfo->budget ?></p>
                                                <p class="fs-5 text-primary fw-bold pt-2 fs-4">City : <?= $pinfo->catname ?></p>
                                                <p class="fs-5 text-primary fw-bold pt-2 fs-4">Category : <?= $pinfo->catename ?></p>
                                                <p class="fs-5 text-primary fw-bold pt-2 fs-4 ">Event date-time : <?= $pinfo->eventdatetime ?></p>
                                                <p class="fs-5 text-primary fw-bold pt-2 fs-4">Action start-date : <?= $pinfo->actionstartdate ?></p>
                                                <h4><a href="app-profile-2.html " class="fs-3" style="line-height: 1.7em;"><?= $pinfo->description ?></a></h4>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <div class="container-fluid">
            <h1 class="text-center text-primary">Project Bids</h1>
                <div class="row">
                    <?php
                    foreach ($mybid as $b) {

                    ?>

                        <div class="col-md-4">

                            <div class="card box-hover">

                                <div class="card-body">
                                    <div class="products style-1">
                                        <img src="<?= base_url("resources/media/images/" . $b->img) ?>" class="avatar rounded-circle" style="width: 70px;height: 70px;object-fit: cover;" alt="">
                                        <div>
                                            <h6 class="text-capitalize">Event Manager : <?= $b->ename ?></h6>
                                            <span class="text-success fw-bold">Bid Price : <?= $b->price ?></span>
                                        </div>
                                    </div>
                                    <h4 class="my-3 text-primary">Description : <?= $b->description ?></h4>
                                </div>
                                <div class="card-footer d-flex justify-content-between flex-wrap">
                                    <div class="due-progress ">
                                        <p class="mb-0 text-black fs-5 h5">Bid Date and Time :
                                        <p class="text-black fs-3"><?= $b->createdDT ?></p>
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <!--/tab-content-->
        </div>
    </div>
    </div>
    <!-- Column ends -->




    </div>
    </div>

    </div>

    <!--**********************************
                Content body end
            ***********************************-->




    </div>
    <?= include_once("bottomscripts.php") ?>

</body>

</html>