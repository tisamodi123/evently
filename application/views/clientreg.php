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
<div id="wrapper" style="padding: 0%;" >

<!-- Header Container
================================================== -->
<div class="clearfix"></div>
<div class="" style="height:713px;background-size:cover;padding:2.5%;background:linear-gradient(to top,rgba(255,0,255,0.5),rgba(218,165,30,0.5)),url(<?= base_url("resources/media/images/clientlogin.jpeg")?>);background-size: cover;">
     

    <div class="container">
    <div class="row">
        <div class="col-xl-6 offset-xl-3 card p-4" style="background-color: rgba(0,0,0,0.5);">

            <div class="login-register-page">
                <!-- Welcome Text -->
                
                    
                
                <div class="welcome-text">
                    <h3 style="font-size: 26px;" class="text-light">Let's create your account!</h3>
                    <span class="text-light">Already have an account? <a class="text-primary" href="<?=site_url("Client/loadLogin2")?>">Log In!</a></span>
                </div>

                
                    
                <!-- Form -->
                <form method="post" id="" action="<?=site_url("Client/register2")?>" enctype="multipart/form-data">
                    <?php
                    if(isset($msg))
                    {
                    ?>
                        <div class="form-group">
                            <label class="text-danger"><?=$msg?></label>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="input-with-icon-left">
                        <i class="icon-material-outline-account-circle"></i>


                        <input type="text" class="input-text with-border" name="txtuname" id="username-register" placeholder="Username" required
                        <?php 
                            if(isset($clientdata["username"]))
                                echo "Value=".$clientdata["username"];
                        ?>
                        />
                    </div>

                    <div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
                        <i class="icon-material-outline-lock"></i>
                        <input type="password" class="input-text with-border" name="txtpwd" id="password-register" placeholder="Password" required
                        <?php 
                            if(isset($clientdata["password"]))
                                echo "Value=".$clientdata["password"];
                        ?>
                        />
                    </div>


                    <div class="input-with-icon-left">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input type="text" class="input-text with-border" name="txtemail" id="emailaddress-register" placeholder="Email Address" required
                         <?php 
                            if(isset($clientdata["email"]))
                                echo "Value=".$clientdata["email"];
                        ?>
                        />
                    </div>

                        <div class="input-with-icon-left">
                        <i class="icon-feather-phone-call"></i>
                        <input type="text" class="input-text with-border" name="txtcontact" id="contactnumber-register" placeholder="contact number" required
                        <?php 
                            if(isset($clientdata["contactno"]))
                                echo "Value=".$clientdata["contactno"];
                        ?>
                        />
                    </div>


                    <div class="input-with-icon-left">
                        <i class="icon-material-outline-attach-file"></i>
                        <input type="file" class="input-text with-border" name="fup" id="image-register" required/>
                    </div>

                    <div class="input-with-icon-left">
                         <i class="icon-material-outline-location-city"></i>
                            <select class="input-text ms-5 " name="cat"  style="max-width: 507px">
                            <?php
                                foreach($cat as $c)
                                {
                            ?>
                                <option value="<?=$c->cityid?>"><?=$c->cityname?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </div>
                     <div class="input-with-icon-left"><i class="icon-material-outline-account-circle"></i>
                         <input type="text" class="input-text with-border" cols="30" rows="5"  name="txtbio" id="username-register" placeholder="Bio" required
                        <?php 
                            if(isset($userdata["bio"]))
                                echo "Value=".$userdata["bio"];
                        ?>
                        />
                    </div>
                    
                        
                
                
                <!-- Button -->
                <button class="button full-width button-sliding-icon ripple-effect margin-top-10 bg-primary" type="submit" >Register <i class="icon-material-outline-arrow-right-alt"></i></button>
                
                
                </form>
            </div>

        </div>
    </div>
</div>
</div>
<!-- Footer / End -->


<?php include_once('bottomscripts.php')?>
<!-- Wrapper / End -->
</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_21/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 09:17:12 GMT -->
</html>