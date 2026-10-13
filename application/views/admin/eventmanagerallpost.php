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
            <div class="content-body">
            <div class="container-fluid mh-auto">
                
                <div class="row">
                      <?php
                        foreach ($posts as $p) {
                            ?>

                    <div class="col-lg-12 col-xl-6 col-xxl-4">
                         
                        <div class="card">
                           
                            <div class="card-body">
                              
                                <div class="row m-b-30">
                        <a href="<?= site_url("Project/allposts/$p->postid") ?>">
                               <a  href="<?=site_url("admin/Admin/moreinfopost/$p->postid") ?>">                                    <div class="col-md-5 col-xxl-12">

                                        <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                            <div class="new-arrivals-img-contnent">

                                                <img class="img-fluid" src="<?= base_url("resources/media/images/" . $p->thumbnail) ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                               
                                    <div class="col-md-7 col-xxl-12">
                                        <div class="new-arrival-content position-relative">
                                            <h4><a href="<?= site_url("admin/Admin/moreinfopost/$p->postid") ?>"> <?= $p->title ?></a></h4>
                                            <p>Event manager : <span class="item"> <?= $p->ename ?> </span></p>
                                            <p>City : <span class="item"> <?= $p->catname ?> </span></p>
                                                                                   </div>
                                    </div>
                                </div>
                          
                            </div>

                        </div>
                          
                    </div>
                     </a>
                </a>
                              <?php
                        }
                        ?>
                    
                </div>
            </div>
        </div>
        
    </div>




    
    <?= include_once("bottomscripts.php") ?>

</body>

</html>