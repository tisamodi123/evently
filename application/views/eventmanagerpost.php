<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo_21/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 09:16:49 GMT -->

<head>

    <!-- Basic Page Needs
================================================== -->
    <title>Evently</title>
    <?php include_once('topscripts.php') ?>

</head>

<body>

    <!-- Wrapper -->


    <!-- Header Container
================================================== -->
    <?php include_once('header.php') ?>
    <div id="wrapper">
        <div class="clearfix"></div>

        <div id="titlebar" class="white margin-bottom-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>POST</h2>
                        <span>EVENT POSTS</span>

                        <!-- Breadcrumbs -->

                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Blog Posts -->
        <div class="section white padding-top-0 padding-bottom-60 full-width-carousel-fix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="blog-carousel">
                            <?php
                            foreach ($posts as $p) {
                            ?>

                                <a href="<?= site_url("Project/loadeventmoreinfoPost/$p->postid") ?>" class="blog-compact-item-container">
                                    <div class="blog-compact-item">
                                        <img src="<?= base_url("resources/media/images/" . $p->thumbnail) ?>" alt="">
                                        <span class="blog-item-tag"><?= $p->uname ?></span>
                                        <div class="blog-compact-item-content">
                                            <ul class="blog-post-tags">
                                                <li><?= $p->title ?></li>
                                            </ul>
                                            <h3></h3>

                                        </div>

                                    </div>

                                </a>
                            <?php
                            }
                            ?>


                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Blog Posts / End -->


        <!-- Section -->
        <div class="section gray">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">

                        <!-- Section Headline -->
                        <div class="section-headline margin-top-60 margin-bottom-35">
                            <h4>Recent Posts</h4>
                        </div>
                        <?php
                        foreach ($recentpost as $r) {
                        ?>
                            <!-- Blog Post -->

                            <div class="blog-post card">
                                <a href="<?= site_url("Project/loadeventpost/$r->postid") ?>">
                                    <a href="<?= site_url("Project/loadeventmoreinfoPost/$r->postid") ?>" class="blog-compact-item-container">
                                    <div class="card-body">
                                        <div class="row p-3">
                                            <div class="col-md-4">
                                                <span class="blog-item-tag text-capitalize"><?= $r->uname ?></span>
                                                <img src="<?= base_url("resources/media/images/" . $r->thumbnail) ?>" alt="" class="w-100 rounded">
                                            </div>
                                            <div class="col-md-8">
                                                <span class="blog-post-date"><?= $r->title ?></span>
                                                <h3><?= $r->createdDT ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="<?= site_url('Project/removepost/' . $r->postid) ?>" class="btn btn-primary w-100" >Delete</a>

                                    </div>
                                </a>
                                </a>
                            </div>

                        <?php
                        }
                        ?>


                    </div>




                </div>
            </div>

            <!-- Spacer -->
            <div class="padding-top-40"></div>
            <!-- Spacer -->

        </div>


    </div>
    <?php include_once('footer.php') ?>
    <!-- Footer / End -->


    <?php include_once('bottomscripts.php') ?>
    <!-- Wrapper / End -->
</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_21/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 09:17:12 GMT -->

</html>