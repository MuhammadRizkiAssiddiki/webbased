<?php
$this->load->view('templates/header');
 ?>
 <body class="fixed-left">
   <div id="wrapper">
     <?php $this->load->view('templates/sidebar'); ?>

     <div class="content-page">
     <!-- Start content -->
        <div class="content">
          <div class="container">
            <div class="row">
		            <div class="col-xs-12">
			               <div class="page-title-box">
                        <h4 class="page-title">Dashboard - SCHULOGY </h4>
                          <ol class="breadcrumb p-0">
                            <li>
                                <a href="<?php echo base_url('backend/administrator'); ?>">Schulgy</a>
                              </li>
                              <li>
                                <a href="">Dashboard</a>
                              </li>
                              <li class="active">
                                Dashboard
                              </li>
                           </ol>
                        <div class="clearfix"></div>
                      </div>
							  </div>
						</div>
            <!-- end row -->
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-layers pull-xs-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Orders</h6>
                        <h2 class="m-b-20" data-plugin="counterup">1,587</h2>
                        <span class="label label-success"> +11% </span> <span class="text-muted">From previous period</span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-paypal pull-xs-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Revenue</h6>
                        <h2 class="m-b-20">$<span data-plugin="counterup">46,782</span></h2>
                        <span class="label label-danger"> -29% </span> <span class="text-muted">From previous period</span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-chart pull-xs-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Average Price</h6>
                        <h2 class="m-b-20">$<span data-plugin="counterup">15.9</span></h2>
                        <span class="label label-pink"> 0% </span> <span class="text-muted">From previous period</span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-rocket pull-xs-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Product Sold</h6>
                        <h2 class="m-b-20" data-plugin="counterup">1,890</h2>
                        <span class="label label-warning"> +89% </span> <span class="text-muted">Last year</span>
                    </div>
                </div>
            </div>
            <!-- end row -->
          </div> <!-- container -->
      </div> <!-- content -->
     </div>
    <!-- End content-page -->
   </div>
 </body>

 <?php
 $this->load->view('templates/footer');
  ?>
