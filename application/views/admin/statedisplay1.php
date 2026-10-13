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

                      <?php
                        if(isset($_REQUEST['btnadd']))
                        {


                    ?>
                                    <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Your State</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form class="form-valide-with-icon needs-validation" method="post" novalidate  action="<?= site_url("admin/Admin/stateadd")?>">
                                        <div class="mb-3">
                                              <div class="input-group">

                                                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Enter a State.." name="txtstate" required>
                                                <div class="invalid-feedback">
                                                    Please Enter a State
                                                  </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn me-2 btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-danger light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                    ?>
                     <?php
                        if(isset($_REQUEST['btnedit']))
                        {


                    ?>
                                    <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Update Your State Forms </h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form class="form-valide-with-icon needs-validation" method="post" novalidate  action="<?= site_url("admin/Admin/editst/".$old->stateid)?>">
                                        <div class="mb-3">
                                              <div class="input-group">

                                                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Enter a state.." value="<?=$old->statename?>"name="txtst" required>
                                                <div class="invalid-feedback">
                                                    Please Enter a state
                                                  </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn me-2 btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-danger light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                    ?>
                <!-- row -->

                <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                    <div class="row">
                        <!-- Column starts -->
                        <div class="col-md-12">
                            <div class="card dz-card" id="accordion-one">
                                <div class="card-header flex-wrap">
                                    <div>
                                        <h4 class="card-title">State Datatable</h4>
               
                                    </div>
                                    <ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                  <form>
                                                    <button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#Preview" type="submit" name="btnadd" role="tab"  aria-selected="true">Add State</button></form>
                                                </li>
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
                                                            <th>StateId</th>
                                                            <th>StateName</th>
                                                            <th>City</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                  
                                                    <tbody>
                                                         <?php
                                                        foreach ($post as $p) {
                                                          ?>
                                                        <tr>
                                                            
                                                            <td><?= $p->stateid ?></td>
                                                            <td><?= $p->statename ?></td>
                                                               <td>
                                                        
                                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="<?=site_url("admin/Admin/allcity/$p->stateid") ?>">View Details</a>
                                                                
                                                            </div>
                                                        </td>
                                                             <td>
                                                                    <div class="d-flex">
                                                                         <form method="post" action="<?=site_url("admin/Admin/olddatast/".$p->stateid)?>">
                                                                     <button name="btnedit" type="submit" class="btn text-light btn-rounded btn-sm my-0">✏️ </button>
                                                                        </form>
                                                                        <a href="<?=site_url('admin/Admin/stateremove/'.$p->stateid)?>" class="btn btn-danger shadow btn-xs sharp"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="trash" fill="white">
                                                                                <path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18ZM20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Zm-3-1a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"></path>
                                                                            </svg></a>
                                                                    </div>
                                                        </td>

                                                            
                                                        </tr>
                                                        <?php
                                                         }
                                                          ?>

                                                    </tbody>
                                                    <tfoot>
                                                            <tr>                                                            
                                                            <th>StateId</th>
                                                            <th>StateName</th>
                                                            <th>City</th>
                                                            <th>Action</th>
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