<header id="header-container" style="height: 90px;" class="fullwidth">



    <!-- Header -->

    <div id="header" style="height: 90px">

        <div class="container">



            <!-- Left Side Content -->

            <div class="left-side" style="height: 90px;">



                <!-- Logo -->

                <div id="logo">

                    <a href="<?= isset($_SESSION['type2']) ? site_url("Project/homeevent") : site_url("home/index") ?>"><img src="<?= base_url('resources/media/') ?>images/logo.png" style="height: 100px; width: 100px;margin-top:30px" alt="Evently Logo"></a>

                </div>



                <!-- Main Navigation -->

                <nav id="navigation">

                    <ul id="responsive">


                    <?php

                              
                       
                        if (isset($_SESSION['type2'])) {

                        //    $_SESSION['type2'];



                        ?>

                        <li><a href="<?= site_url("Project/homeevent") ?>" class="current">Home</a>
                        </li>
                                <?php

                                } else {



                                ?>

                        <li><a href="<?= site_url("home/index") ?>" class="current">Home</a>
                        </li>

                                <?php

                                }

                                ?>


                        <!--  client -->

                        <?php

                        if (isset($_SESSION['type1'])) {

                            $_SESSION['type1'];



                        ?>


                        <!-- <li><a href="<?= site_url("User/index") ?>" class="current">Home</a>
                        </li> -->
                            <li><a class="current" href="<?= site_url("Project/loadProject") ?>">Upload Project</a>



                            </li>

                            <li><a class="current" href="<?= site_url("Project/myPosts") ?>">Gallery</a></li>

                            <li><a class="current" href="<?= site_url("Project/loadprofile") ?>">Event manager profile</a></li>

                        <?php

                        }

                        ?>





                        <!--                                  event manager -->

                        <?php

                        if (isset($_SESSION['type2'])) {

                            $_SESSION['type2'];



                        ?>
<!-- 
                        <li><a href="<?= site_url("Project/homeevent") ?>" class="current">Home</a>
                        </li> -->

                            <li><a class="current" href="<?= site_url("Project/Explore") ?>">New Events</a></li>

                            <li><a class="current" href="<?= site_url("Project/loadeventupload") ?>">Upload Post</a></li>

                            <li><a class="current" href="<?= site_url("Project/loadeventpost") ?>">Our Post</a></li>

                            <li><a class="current" href="<?= site_url("Project/mybids") ?>">My Bids</a></li>

                            <li><a class="current" href="<?= site_url("Project/mysaveposts") ?>">My Save Posts</a></li>

                        <?php

                        }

                        ?>







                    </ul>

                </nav>

                <div class="clearfix"></div>

                <!-- Main Navigation / End -->



            </div>

            <!-- Left Side Content / End -->





            <!-- Right Side Content / End -->

            <div class="right-side">



                <!-- User Menu -->

                <div class="header-widget">



                    <!-- Messages -->



                    <div class="header-notifications user-menu">

                        <div class="header-notifications-trigger">

                            <a href="#">

                                <?php

                                if (isset($_SESSION['uname'])) {

                                ?>

                                    <div class="user-avatar status-online"><img src="<?= base_url("resources/media/images/" . $_SESSION["profile"]) ?>" alt="" style="width: 45px;height:45px;object-fit: cover;"></div>

                                <?php

                                } else {



                                ?>

                                    <div class="user-avatar "><img src="<?= base_url('resources/media/') ?>images/default.png" alt=""></div>

                                <?php

                                }

                                ?>

                            </a>

                        </div>



                        <!-- Dropdown -->

                        <div class="header-notifications-dropdown">



                            <!-- User Status -->

                            <div class="user-status">



                                <!-- User Name / Avatar -->

                                <div class="user-details">



                                    <?php

                                    if (isset($_SESSION['uname'])) {

                                    ?>

                                        <div class="user-avatar status-online"><img src="<?= base_url("resources/media/images/" . $_SESSION["profile"]) ?>" alt="" style="width: 45px;height: 45px;object-fit: cover;"></div>

                                    <?php

                                    } else {



                                    ?>

                                        <div class="user-avatar"><img src="<?= base_url('resources/media/') ?>images/default.png" alt=""></div>

                                    <?php

                                    }

                                    ?>

                                    <div class="user-name text-capitalize">

                                        <?php

                                        if (isset($_SESSION['uname'])) {

                                            echo $_SESSION['uname'];
                                        }

                                        ?>

                                        <span></span>

                                    </div>



                                </div>







                            </div>



                            <ul class="user-menu-small-nav">





                                

                                <?php

                                if (isset($_SESSION['uname'])) {

                                ?>



                                    <?php

                                    if (isset($_SESSION['type1'])) {

                                    ?>

                                        <li><a href="<?= site_url("Client/oldeditdata") ?>"><i class="icon-material-outline-settings"></i> Client Edit</a></li>



                                        <li><a href="<?= site_url("Client/cprofile") ?>"><i class="icon-material-outline-dashboard"></i> Client Profile</a></li>

                                    <?php

                                    }

                                    ?>

                                    <?php

                                    if (isset($_SESSION['type2'])) {

                                    ?>

                                        <li><a href="<?= site_url("User/oldeditdata") ?>"><i class="icon-material-outline-settings"></i>  Event manager Edit</a></li>



                                        <li><a href="<?= site_url("User/eprofile") ?>"><i class="icon-material-outline-dashboard"></i>  Event manager profile</a></li>

                                    <?php

                                    }

                                    ?>



                                    <li><a href="<?= site_url("Home/logout") ?>"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>



                                <?php

                                } else {

                                ?>

                                    <li><a href="<?= site_url("Client/loadLogin2") ?>"><i class="icon-material-outline-dashboard"></i> Client</a></li>

                                    <li><a href="<?= site_url("User/loadLogin") ?>"><i class="icon-material-outline-dashboard"></i> Event Manager</a></li>

                                    <!-- <li><a href="<?= site_url("User/oldeditdata") ?>"><i class="icon-material-outline-power-settings-new"></i> Edit Event manager</a></li> -->

                                <?php

                                }

                                ?>



                            </ul>



                        </div>

                    </div>



                </div>

            </div>

            <!-- Right Side Content / End -->



        </div>

    </div>

    <!-- Header / End -->



</header>