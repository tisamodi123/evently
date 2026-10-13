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
                            <h4 class="heading mb-0 blog-title">Post info</h4>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="blog-img">
                                        <img src="<?= base_url('resources/media/images/' . $pinfo->thumbnail) ?>" alt="" class="blk-img" style="height: 450px;object-fit: cover;">
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
                                                <p class="text-danger fw-bold pt-2 fs-4">Event Manager Name : <?= $pinfo->ename ?></p>


                                                <p class="fs-5 text-primary fw-bold pt-2 fs-4">City : <?= $pinfo->catname ?></p>

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
            
            <!--/tab-content-->
        </div>



        <!--**********************************
                Content body end
            ***********************************-->




    </div>
    <?= include_once("bottomscripts.php") ?>

</body>

</html>