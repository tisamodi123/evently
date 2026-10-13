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


        <div class="browse-job login-style3" style="background-image: url(<?=base_url('resources/media/')?>images/Garden-Night-Shot.png );">
            <!-- Coming Soon -->
            <div class="bg-img-fix overflow-hidden" style="background-image: linear-gradient(to top,black,transparent); height: 100vh;">
                <div class="row gx-0">
                    <div class="col-md-3"></div>
                    <div class="col-md-6  ">
                        <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 653px;" tabindex="0">
                            <div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                <div class="login-form style-2">
                                    <div class="card-body">
                                        <div class="logo-header text-center mb-4">
                                            <a href="<?= site_url("home/index") ?>" class="logo"><img src="<?= base_url('resources/media/images/logo.png') ?>" alt="Evently Logo" style="max-height: 80px;"></a>
                                        </div>
                                        <nav>
                                            <div class="nav nav-tabs border-bottom-0" id="nav-tab" role="tablist">

                                                <div class="tab-content w-100" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="nav-personal" role="tabpanel" aria-labelledby="nav-personal-tab">
                                                        <form method="post" action="<?= site_url("admin/Admin/login") ?>" class=" dz-form pb-3">
                                                            <h3 class="form-title m-t0">Admin Information</h3>
                                                            <div class="dz-separator-outer m-b5">
                                                                <div class="dz-separator bg-primary style-liner"></div>
                                                            </div>
                                                            <p>Enter your Username and your Password. </p>
                                                            <div class="form-group mb-3">
                                                                <input type="username" class="form-control" placeholder="Username" name="txtuname">
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <input type="password" class="form-control" placeholder="Password" name="txtpwd">
                                                            </div>
                                                            <div class="form-group text-left mb-5 forget-main">
                                                                <button type="submit" class="btn btn-primary">Sign Me In</button>
                                                                <span class="form-check d-inline-block">
                                                                    <input type="checkbox" class="form-check-input" id="check1" name="example1">
                                                                    <label class="form-check-label" for="check1">Remember me</label>
                                                                </span>
                                                                <?php
                                                                if (isset($msg)) {
                                                                ?>
                                                                    <div class="form-group">
                                                                        <label class="text-danger"><?= $msg ?></label>
                                                                    </div>
                                                                <?php
                                                                }
                                                                ?>
                                                                
                                                            </div>

                                                        </form>

                                                    </div>

                                                </div>

                                            </div>
                                        </nav>
                                    </div>


                                </div>
                            </div>
                            <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;">
                                <div class="mCSB_draggerContainer">
                                    <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 0px; display: block; height: 652px; max-height: 643px; top: 0px;">
                                        <div class="mCSB_dragger_bar" style="line-height: 0px;"></div>
                                        <div class="mCSB_draggerRail"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
            <!-- Full Blog Page Contant -->
        </div>
        <!--**********************************
                Content body end
            ***********************************-->
    </div>




    </div>
    <?= include_once("bottomscripts.php") ?>

</body>

</html>