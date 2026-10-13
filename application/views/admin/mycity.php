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

           <div class="container-fluid mh-auto">
                
                <div class="row">

                      <?php
                        foreach ($posts as $p) {
                            ?>
                             <h4>State : <?= $p->stname ?></h4>

                    <div class="col-lg-12 col-xl-6 col-xxl-4">
                         
                        <div class="card ">
                           
                            <div class="card-body">
                              
                                <div class="row m-b-30">

                               
                                    <div class="col-md-7 col-xxl-12 ">
                                        <div class="new-arrival-content position-relative ">
                                            <p>City : <span class="item "><h4> <?= $p->cityname ?></h4> </span></p>
                                                                                </div>
                                    </div>
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