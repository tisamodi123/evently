<div id="footer">



    <!-- Footer Top Section -->

    <div class="footer-top-section">

        <div class="container">

            <div class="row">

                <div class="col-xl-12">



                    <!-- Footer Rows Container -->

                    <div class="footer-rows-container">



                        <!-- Left Side -->

                        <div class="footer-rows-left">

                            <div class="footer-row">

                                <div class="footer-row-inner footer-logo" style="position: relative;top: -10px;">

                                    <img src="<?= base_url('resources/media/') ?>images/logod.png" alt="" style="width: 100px;height: 100px;object-fit:cover">

                                </div>

                            </div>

                        </div>



                        <!-- Right Side -->

                        <div class="footer-rows-right">



                            <!-- Social Icons -->

                            <div class="footer-row">

                                <div class="footer-row-inner">

                                    <ul class="footer-social-links">

                                        <li>

                                            <a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">

                                                <i class="icon-brand-facebook-f"></i>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">

                                                <i class="icon-brand-twitter"></i>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">

                                                <i class="icon-brand-google-plus-g"></i>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">

                                                <i class="icon-brand-linkedin-in"></i>

                                            </a>

                                        </li>

                                    </ul>

                                    <div class="clearfix"></div>

                                </div>

                            </div>



                            <!-- Language Switcher -->

                            <div class="footer-row">

                                <div class="footer-row-inner">

                                    <select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5">

                                        <option selected>English</option>



                                    </select>

                                </div>

                            </div>

                        </div>



                    </div>

                    <!-- Footer Rows Container / End -->

                </div>

            </div>

        </div>

    </div>

    <!-- Footer Top Section / End -->



    <!-- Footer Middle Section -->

    <div class="footer-middle-section">

        <div class="container">

            <div class="row">



                <!-- Links -->

                <?php

                if (isset($_SESSION['type1'])) {

                    $_SESSION['type1'];



                ?>



                    <div class="col-xl-2 col-lg-2 col-md-3">

                        <div class="footer-links">





                            <h3>For Client</h3>

                            <ul>

                                <li><a class="current" href="<?= site_url("Project/loadProject") ?>">Upload Project</a>



                                </li>

                                <li><a class="current" href="<?= site_url("Project/myPosts") ?>">Gallery</a></li>







                                <li><a href="#"><span>Browse Jobs</span></a></li>





                            </ul>

                        </div>

                    </div>

                <?php

                }

                ?>

                <?php

                if (isset($_SESSION['type2'])) {

                    $_SESSION['type2'];



                ?>

                    <div class="col-xl-2 col-lg-2 col-md-3">

                        <div class="footer-links">



                            <h3>For Event Manager</h3>

                            <ul>

                                <li><a class="current" href="<?= site_url("Project/Explore") ?>">New Events</a></li>

                                <li><a class="current" href="<?= site_url("Project/loadeventupload") ?>">Upload Post</a></li>

                                <li><a class="current" href="<?= site_url("Project/loadeventpost") ?>">Our Post</a></li>

                                <li><a class="current" href="<?= site_url("Project/mybids") ?>">My Bids</a></li>

                                <li><a class="current" href="<?= site_url("Project/mysaveposts") ?>">My Save Posts</a></li>



                            </ul>

                        </div>

                    </div>

                <?php

                }

                ?>



                <!-- Links -->

                <div class="col-xl-2 col-lg-2 col-md-3">

                    <div class="footer-links">

                        <h3>Contact Event manager</h3>

                        <ul>

                            <li><a class="current" href="<?= site_url("Project/loadprofile") ?>">Event manager profile</a></li>

                        </ul>

                    </div>

                </div>



                <div class="col-xl-2 col-lg-2 col-md-3">

                    <div class="footer-links">

                        <h3>Sign Up</h3>

                        <ul>

                            <li><a href="<?= site_url("Client/loadReg2") ?>"> Client </a></li>

                            <li><a href="<?= site_url("User/loadReg") ?>"> Event Manager </a></li>



                        </ul>

                    </div>

                </div>



                <!-- Links -->

                <div class="col-xl-2 col-lg-2 col-md-3">

                    <div class="footer-links">

                        <h3>Account</h3>

                        <ul>

                            <!-- <li><a href="<?= site_url("User/loadLogin") ?>"><span>Log In</span></a></li> -->

                            <?php

                            if (isset($_SESSION['uname'])) {

                            ?>



                                <?php

                                if (isset($_SESSION['type1'])) {

                                ?>

                                    <li><a href="<?= site_url("Client/oldeditdata") ?>"> Edit client</a></li>



                                    <li><a href="<?= site_url("Client/cprofile") ?>"> profile Client</a></li>

                                <?php

                                }

                                ?>

                                <?php

                                if (isset($_SESSION['type2'])) {

                                ?>

                                    <li><a href="<?= site_url("User/oldeditdata") ?>"> Edit Event manager</a></li>



                                    <li><a href="<?= site_url("User/eprofile") ?>">profile Event manager</a></li>

                                <?php

                                }

                                ?>



                                <li><a href="<?= site_url("Home/logout") ?>"> Logout</a></li>



                            <?php

                            } else {

                            ?>

                                <li><a href="<?= site_url("Client/loadLogin2") ?>"> Client Login</a></li>

                                <li><a href="<?= site_url("User/loadLogin") ?>"> Event Manager Login</a></li>

                            <?php

                            }

                            ?>

                        </ul>

                    </div>

                </div>



                <!-- Newsletter -->

                <!--                                                <div class="col-xl-4 col-lg-4 col-md-12">

                                                                    <h3><i class="icon-feather-mail"></i> Sign Up For a Newsletter</h3>

                                                                    <p>Weekly breaking news, analysis and cutting edge advices on job searching.</p>

                                                                    <form action="#" method="get" class="newsletter">

                                                                                  <input type="text" name="fname" placeholder="Enter your email address">

                                                                                  <button type="submit"><i class="icon-feather-arrow-right"></i></button>

                                                                    </form> -->

            </div>

        </div>

    </div>

</div>

</div>