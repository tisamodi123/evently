<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_21/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 09:16:49 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Evently</title>
<?php include_once('topscripts.php')?>

</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php include_once('header.php')?>
<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Intro Banner
================================================== -->
<!-- add class "disable-gradient" to enable consistent background overlay -->
<div class="intro-banner" data-background-image="images/home-background.jpg">
    <div class="container">
        
            
            <!-- Dashboard Headline -->
            <div class="dashboard-headline">
                <h2>POST</h2>
                <span>EVENT UPLOAD POSTS</span>

                <!-- Breadcrumbs -->
                
            </div>
    
            <!-- Row -->
            <div class="row">

                <!-- Dashboard Box -->
                <div class="col-xl-12">
                    <div class="dashboard-box margin-top-0">

                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-feather-folder-plus"></i>Post Upload Form</h3>
                        </div>
                        <form method="post" id="" action="<?=site_url("Project/eventupload")?>" enctype="multipart/form-data">
                        <div class="content with-padding padding-bottom-10 ">
                            <div class="row">

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5 class="fw-bold">Post Title</h5>
                                        <input type="text" name="txtposttitle" class="with-border form-control bg-light ">
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="submit-field">
                                        <h5 class="fw-bold">Post Description</h5>
                                        <textarea cols="30" rows="5" name="txtdesc" class="with-border form-control bg-light "></textarea>
                                        
                                    </div>
                                </div>

                                

                               <div class="uploadButton margin-top-30">
                                            <input type="file" class="input-text form-control bg-light " name="fup" id="image-register" required />

                                            <span class="uploadButton-file-name">Images or documents that might be helpful in describing your event</span>
                                        </div>


                          
                    <div class="col-xl-6">
                                            <div class="submit-field">
                                                <h5 class="fw-bold">City</h5>
                                                <select class="selectpicker form-select bg-light " data-size="7" title="Select City" name="cat">
                                                    <?php
                                                    foreach ($cat as $c) {
                                                    ?>
                                                        <option value="<?= $c->cityid ?>"><?= $c->cityname ?></option>
                                                    <?php
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 ">
                    
            <button class="button ripple-effect big margin-top-30 bg-primary" type="submit" ><i class="icon-feather-plus"></i>Upload Event Post </button>
                </div>

                
                
                </form>
    </div>

    </div>
</div>




<?php include_once('bottomscripts.php')?>
<!-- Wrapper / End -->
</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_21/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 09:17:12 GMT -->
</html>