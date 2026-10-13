<!DOCTYPE html>
<html lang="en">

<head>


    <!-- PAGE TITLE HERE -->
    <title>Evently Admin</title>
    <?= include_once('topscripts.php') ?>


</head>

<body>

    
    <div id="main-wrapper">
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    
                   
                    <div class="col-xl-12">
                        <div class="card bg-primary-light analytics-card">
                            <div class="card-body mt-4 pb-1">
                                <div class="row align-items-center"> 
                                    <div class="col-xl-2">
                                        <h3 class="mb-3">TOTAL</h3>
                                        <p class="mb-0 text-primary pb-4">Yout statistics for<br> 1 month period.</p>
                                    </div>
                                    <div class="col-xl-10">
                                        <div class="row">
                                            <div class="col-xl-3">
                                                <div class="card ov-card">
                                                    <div class="card-body">
                                                        <div class="ana-box">   
                                                            <div class="ic-n-bx">
                                                                <div class="icon-box bg-primary rounded-circle">
                                                                    <i class="fa-solid fa-basketball text-white"></i>
                                                                </div>
                                                            </div>
                                                            <div class="anta-data">
                                                                <h5>City</h5>
                                                                <span><a class="dropdown-item" href="<?=site_url("admin/Admin/citydisplay") ?>">Click Here  </a></span>
                                                                <h3><?=count($allcity)?></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card ov-card">
                                                    <div class="card-body">
                                                        <div class="ana-box">   
                                                            <div class="ic-n-bx">
                                                                <div class="icon-box bg-primary rounded-circle">
                                                                    <i class="fa-brands fa-facebook-f text-white"></i>
                                                                </div>
                                                            </div>
                                                            <div class="anta-data">
                                                                <h5>State</h5>
                                                                <span><a class="dropdown-item" href="<?=site_url("admin/Admin/statedisplay") ?>">Click Here  </a></span>
                                                                <h3><?=count($allstate)?></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card ov-card">
                                                    <div class="card-body">
                                                        <div class="ana-box">   
                                                            <div class="ic-n-bx">
                                                                <div class="icon-box bg-primary rounded-circle">
                                                                    <i class="fa-brands fa-amazon text-white"></i>
                                                                </div>
                                                            </div>
                                                            <div class="anta-data">
                                                                <h5>Category</h5>
                                                                <span><a class="dropdown-item" href="<?=site_url("admin/Admin/categorydisplay") ?>">Click Here  </a></span>
                                                                <h3><?=count($allcategory)?></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card ov-card">
                                                    <div class="card-body">
                                                        <div class="ana-box">   
                                                            <div class="ic-n-bx">
                                                                <div class="icon-box bg-primary rounded-circle">
                                                                    <i class="fa-brands fa-behance text-white"></i>
                                                                </div>
                                                            </div>
                                                            <div class="anta-data">
                                                                <h5>Client</h5>
                                                                <span><a class="dropdown-item" href="<?=site_url("admin/Admin/userdisplay") ?>">Click Here  </a></span>
                                                                <h3><?=count($allclient)?></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card ov-card">
                                                    <div class="card-body">
                                                        <div class="ana-box">   
                                                            <div class="ic-n-bx">
                                                                <div class="icon-box bg-primary rounded-circle">
                                                                    <i class="fa-brands fa-aws text-white"></i>
                                                                </div>
                                                            </div>
                                                            <div class="anta-data">
                                                                 <h5>Event manager</h5>
                                                                <span><a class="dropdown-item" href="<?=site_url("admin/Admin/eventmanagerdisplay") ?>">Click Here  </a></span>
                                                                <h3><?=count($alleventmanager)?></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card ov-card">
                                                    <div class="card-body">
                                                        <div class="ana-box">   
                                                            <div class="ic-n-bx">
                                                                <div class="icon-box bg-primary rounded-circle">
                                                                    <i class="fa-brands fa-instagram text-white"></i>
                                                                </div>
                                                            </div>
                                                            <div class="anta-data">
                                                                <h5>Projects</h5>
                                                                <span><a class="dropdown-item" href="<?=site_url("admin/Admin/projectdisplay") ?>">Click Here  </a></span>
                                                                <h3><?=count($allprojects)?></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-xl-3">
                                                <div class="card ov-card">
                                                    <div class="card-body">
                                                        <div class="ana-box">   
                                                            <div class="ic-n-bx">
                                                                <div class="icon-box bg-primary rounded-circle">
                                                                    <i class="fa-brands fa-instagram text-white"></i>
                                                                </div>
                                                            </div>
                                                            <div class="anta-data">
                                                                <h5>Posts</h5>
                                                                <span><a class="dropdown-item" href="<?=site_url("admin/Admin/postdisplay") ?>">Click Here  </a></span>
                                                                <h3><?=count($allposts)?></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-8 col-lg-7">
                        <div class="card h-auto">
                            <div class="card-header border-0 pb-3">
                                <h4 class="heading mb-0">Running Projects</h4>
                                <a href="javascript:void(0)" class="btn btn-sm btn-primary">View All</a>
                            </div>
                            <div class="card-body pt-0">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                               
                                            <div class="card">
                                                <?php
                                                if (!empty($review)) {
                                                    foreach ($review as $r) {
                                                ?>
                                                <div class="card-body">
                                                    <div class="card-media">
                                                        <img src="images/p1.gif" alt="">
                                                    </div>

                                                    <div class="media-data">
                                                        <h4><a href="#"><?= $r->ename ?? '' ?> <?= !empty($r->rating) ? '('.$r->rating.'★)' : '' ?></a></h4>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-list avatar-list-stacked">
                                                                <img src="images/contacts/pic666.jpg" class="avatar avatar-md  rounded-circle" alt="">
                                                                <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                                <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                                <img src="images/contacts/pic666.jpg" class="avatar avatar-md  rounded-circle" alt="">
                                                            </div>
                                                            <span>21+ Team</span>
                                                        </div>
                                                        <div class="dateformat d-flex justify-content-between align-items-end">
                                                            <div>
                                                                <p>Due Date</p>
                                                                <span>06 Sep 2021</span>
                                                            </div>
                                                            <span class="badge badge-danger light border-0">Pending</span>
                                                        </div>
                                                    </div>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                              
                                        </div>
                                       
                                </div>
                            </div>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
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
        
    </div>




    
    <?= include_once("bottomscripts.php") ?>

</body>

</html>