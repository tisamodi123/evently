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
                            <h4 class="heading mb-0 blog-title">Client info</h4>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="blog-img">
                                        <img src="<?= base_url('resources/media/images/' . $pinfo->profilepic) ?>" alt="" class="blk-img" style="height:450px">
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
                                                <p class="text-danger fw-bold pt-2 fs-4">Email : <?= $pinfo->email ?></p>
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
            <h1 class="text-center text-primary">Projects</h1>
                <div class="row">
                    <?php
                    foreach ($posts as $p) {
                    ?>

                        <div class="col-lg-12 col-xl-6 col-xxl-4">

                            <div class="card">

                                <div class="card-body">
                                     <a href="<?= site_url("admin/Admin/moreinfoproject/$p->projectid") ?>"> 
                                    <div class="row ">
                                        <div class="col-md-12 mb-4">
                                            <div class="new-arrival-product ">
                                                <div class="new-arrivals-img-contnent">

                                                    <img class="w-100" style="height: 300px;object-fit: cover;" src="<?= base_url("resources/media/images/" . $p->coverpage) ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="new-arrival-content position-relative">
                                                <h4><a href="<?= site_url("admin/Admin/moreinfoproject/$p->projectid") ?>"> <?= $p->title ?></a></h4>
                                                
                                                <p class="fw-normal fs-5 text-dark fw-bold">Event Date : <span class="item fw-normal fs-4 text-primary"> <?= $p->eventdatetime ?> </span></p>
                                                <div>
                                                    <p class="fw-bold fs-4 text-success"> Price : $ <?= $p->budget ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </a> 
                                </div>

                            </div>

                        </div>
                        </a>

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