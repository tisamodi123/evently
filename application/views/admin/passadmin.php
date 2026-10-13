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
            <!-- row -->
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="card profile-card card-bx m-b30">
                            <div class="card-header">
                                <h6 class="title">Account setup</h6>
                            </div>
                            <form class="profile-form" method="post" enctype="multipart/form-data" action="<?=site_url("admin/Admin/changepwd")?>">
                                <div class="card-body">
                                    <div class="row">
                                            <div class="author-profile">
                                            <div class="author-media">
                                                <img src="images/user.jpg" alt="">
                                                <div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
                                                    <input type="file"  name="fup"class="update-flie">
                                                    <i class="fa fa-camera"></i>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-6 m-b30">
                                            <label class="form-label">Current password</label>
                                            <input type="text"  name="txtcpwd" class="form-control" >
                                        </div>
                                        <?php
                                  if(isset($msg))
                                  {
                                  ?>
                                  <p class="text-danger"><?=$msg?></p>
                                  <?php
                                  }
                                  ?>
                                        
                                        
                                       
                                                                           </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">UPDATE</button>
                                    <a href="<?= site_url("admin/Admin/changepwd") ?>" class="btn-link">Change Password</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>




    
    <?= include_once("bottomscripts.php") ?>

</body>

</html>