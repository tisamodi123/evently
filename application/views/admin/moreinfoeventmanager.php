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
                            <h4 class="heading mb-0 blog-title">Event manager info</h4>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="blog-img">
                                        <img src="<?= base_url('resources/media/images/' . $pinfo->image) ?>" alt="" class="blk-img" style="height: 450px;object-fit: cover;">
                                        <div class="blog-text">
                                            <!--   <img src="images/contacts/pic1.jpg" class="avatar rounded-circle me-2" alt="">  -->

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="blog-post">
                                        <div class="post-1">
                                            <!--    <img src="images/profile/friends/f1.jpg" class="avatar rounded-circle me-2 custome-avatar" alt=""> -->
                                            <div class="post-data d-flex flex-column justify-content-between align-items-start" style="line-height: 1.7em;">
                                                <p class="badge badge-secondary border-0 fs-3 text-capitalize"><?= $pinfo->username ?></p>
                                                <p class="text-danger fw-bold pt-2 fs-4">Email : <?= $pinfo->emailid ?></p>
                                                <p class="fs-5 text-success fw-bold pt-2  fs-4">Phone No : <?= $pinfo->contactno ?></p>
                                                <p class="fs-5 text-primary fw-bold pt-2 fs-4">City : <?= $pinfo->catname ?></p>
                                                <h4><a href="app-profile-2.html " class="fs-3"><?= $pinfo->bio ?></a></h4>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="container-fluid mh-auto">
            <h1 class="text-center text-primary">Past Projects</h1>

                <div class="row">
                    <?php
                    foreach ($posts as $p) {
                    ?>

                        <div class="col-lg-12 col-xl-6 col-xxl-4">

                            <div class="card">

                                <div class="card-body">

                                    <div class="row m-b-30">
                                        <a href="<?= site_url("admin/Admin/moreinfopost/$p->postid") ?>">
                                            <div class="col-md-12 ">

                                                <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                                    <div class="new-arrivals-img-contnent">

                                                        <img class="w-100" style="height: 200px;object-fit: cover;" src="<?= base_url("resources/media/images/" . $p->thumbnail) ?>" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 ">

                                                <div class="new-arrival-content position-relative">
                                                    <h4><a href="<?= site_url("admin/Admin/moreinfopost/$p->postid") ?>"> <?= $p->title ?></a></h4>

                                                    <p class="fw-normal fs-5 text-dark fw-bold">Event Date & Time : <span class="item fw-normal fs-4 text-primary"><?= $p->createdDT ?></span></p>
                                                    <div>
                                                        <p class="fw-bold fs-4 text-success"> City : <?= $p->catname ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        </a>
                    <?php
                    }
                    ?>

                </div>
            </div>
            <div class="container-fluid">
                <h1 class="text-center text-primary">Reviews</h1>
                <div class="row">
                    <?php
                    foreach ($review as $r) {

                    ?>

                        <div class="col-md-4">

                            <div class="card box-hover">

                                <div class="card-body">
                                    <div class="products style-1">
                                        <img src="<?= base_url("resources/media/images/" . $r->ppic) ?>" class="avatar rounded-circle" style="width: 70px;height: 70px;object-fit: cover;" alt="">
                                        <div>
                                            <h6>Client : <?= $r->cname ?></h6>
                                            <span class="fs-4 fw-bold">Rating : <span class="fs-3 text-warning "><?= $r->rating ?></span></span>
                                        </div>
                                    </div>
                                    <p class="my-3 fs-3 text-primary">Review : <?= $r->review ?></p>



                                </div>
                                <div class="card-footer d-flex justify-content-between flex-wrap">
                                    <div class="due-progress">
                                        <p class="mb-0 text-black fs-5">Review Date and Time :
                                        <p class="text-black fs-4"><?= $r->createdDT ?></p>
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