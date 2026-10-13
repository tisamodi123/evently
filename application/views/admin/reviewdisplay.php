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
                                        <h4 class="card-title">Review Datatable</h4>
               
                                    </div>
                                    <ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
                                                
                                            </ul>
                                </div>
                                <!--tab-content-->
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="Preview" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                <table id="example" class="display table" style="min-width: 845px">
                                                    <thead>
                                                        <tr>                                                            
                                                            <th>Eventmanager Name</th>
                                                            <th>Client Name</th>
                                                            <th>Rating</th>
                                                            <th>Review</th>
                                                            <th>CreatedDT</th>
                                                            </tr>
                                                    </thead>
                                                  
                                                    <tbody>
                                                         <?php
                                                        foreach ($post as $p) {
                                                          ?>
                                                        <tr>
                                                            
                                                            <td><?= $p->ename ?></td>
                                                            <td><?= $p->cname ?></td>
                                                            <td><?= $p->rating ?></td>
                                                            <td><?= $p->review ?></td>
                                                            <td><?= $p->createdDT ?></td>
                                                                                                                        
                                                        </tr>
                                                        <?php
                                                         }
                                                          ?>

                                                    </tbody>
                                                    <tfoot>
                                                            <tr>
                                                            <th>Eventmanager Name</th>
                                                            <th>Client Name</th>
                                                            <th>Rating</th>
                                                            <th>Review</th>
                                                            <th>CreatedDT</th>
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