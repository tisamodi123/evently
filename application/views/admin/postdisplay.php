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
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <!-- <div class="content-body">
            <!-- row -->
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- container starts -->
            <div class="container-fluid">

                <!-- row -->

                <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                    <div class="row">
                        <!-- Column starts -->
                        <div class="col-md-12">
                            <div class="card dz-card" id="accordion-one">
                                <div class="card-header flex-wrap">
                                    <div>
                                        <h4 class="card-title">Post Datatable</h4>
                                        
                                    </div>
                                    
                                </div>
                                <!--tab-content-->
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="Preview" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                <table id="example" class="display table" style="min-width: 845px">
                                                    <thead>
                                                        <tr>  
                                                            <th>Thumbnail</th>                                        
                                                            <th>Title</th>
                                                            <th>Eventmanager Name</th>
                                                            
                                                            

                                                            <th>City Name</th>
                                                            <th>More Info</th>
                                                        </tr>
                                                    </thead>
                                                  
                                                    <tbody>
                                                         <?php
                                                        foreach ($post as $p) {
                                                          ?>
                                                        <tr>
                                                            <td><img style="height:50px;width: 50px;object-fit: cover;border:3px solid" class="rounded-circle border-primary" src="<?= base_url("resources/media/images/". $p->thumbnail) ?>" alt=""></td>
                                                            
                                                            <td><?= $p->title ?></td>
                                                            <td><?= $p->ename ?></td>
                                                            
                                                            
                                                            <td><?= $p->catname ?></td>
                                                                <td>
                                                        
                                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="<?=site_url("admin/Admin/moreinfopost/$p->postid") ?>">View Details</a>
                                                                
                                                            </div>
                                                        
                                                    </td>                                                  
                                                        </tr>
                                                        <?php
                                                         }
                                                          ?>

                                                    </tbody>
                                                    <tfoot>
                                                         <tr>  
                                                            <th>Thumbnail</th>                                        
                                                            <th>Title</th>
                                                            <th>Eventmanager Name</th>
                                                            
                                                            

                                                            <th>City Name</th>
                                                            <th>More Info</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /Default accordion -->
                                    </div>
                                    <div class="tab-pane fade " id="html" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body pt-0 p-0 code-area">
                                            <!-- Default accordion -->
                                            <pre class="mb-0"><code class="language-html">
 &lt;div class="table-responsive"&gt;
    &lt;table id="example" class="display table" style="min-width: 845px"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Position&lt;/th&gt;
                &lt;th&gt;Office&lt;/th&gt;
                &lt;th&gt;Age&lt;/th&gt;
                &lt;th&gt;Start date&lt;/th&gt;
                &lt;th&gt;Salary&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;Tiger Nixon&lt;/td&gt;
                &lt;td&gt;System Architect&lt;/td&gt;
                &lt;td&gt;Edinburgh&lt;/td&gt;
                &lt;td&gt;61&lt;/td&gt;
                &lt;td&gt;2011/04/25&lt;/td&gt;
                &lt;td&gt;$320,800&lt;/td&gt;
            &lt;/tr&gt;
            
        &lt;/tbody&gt;
        &lt;tfoot&gt;
            &lt;tr&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Position&lt;/th&gt;
                &lt;th&gt;Office&lt;/th&gt;
                &lt;th&gt;Age&lt;/th&gt;
                &lt;th&gt;Start date&lt;/th&gt;
                &lt;th&gt;Salary&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/tfoot&gt;
    &lt;/table&gt;
&lt;/div&gt;
</code></pre>
                                        </div>
                                        <!-- /Default accordion -->
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




    </div>
    <?= include_once("bottomscripts.php") ?>

</body>

</html>