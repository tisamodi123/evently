<!DOCTYPE html>
<html lang="en">

<head>


    <!-- PAGE TITLE HERE -->
    <title>Evently Admin</title>
    <?= include_once('topscripts.php') ?>


</head>

<body>


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
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start-->
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo rounded" style="height: 500px;"></div>
                                </div>
                                <div class="profile-info">

                                    <?php
                                    foreach ($post as $p) {
                                    ?>
                                        <div class="profile-photo">
                                            <img src="<?= base_url("resources/media/images/" . $p->profilepic) ?>" class=" rounded-circle" style="width: 100px;height: 100px;object-fit: cover;" alt="">

                                        </div>
                                        <div class="profile-details">
                                            <div class="profile-name px-3 pt-2">
                                                <p>Name</p>
                                                <h4 class="text-primary mb-0 text-capitalize"><?= $p->username ?></h4>

                                            </div>
                                            <div class="profile-email px-2 pt-2">
                                                <p>Email</p>
                                                <h4 class="text-muted mb-0 text-capitalize"><?= $p->email ?></h4>

                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                            <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                        </g>
                                                    </svg></a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
                                                    </a>
                                                    <a class="dropdown-item" href="<?= site_url("admin/Admin/oldeditdata/$p->adminid") ?>">
                                                        <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Edit Profile</li>
                                                    </a>

                                                </ul>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
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