<html>
	<body>
	
	<?php include('layout/header.php');?>
	
        <!-- tobar :: end -->
        <!-- main-container :: start -->
		
		<?php include('layout/side-bar.php');?>
            <!-- sidebar :: end -->
            <!-- content area :: start -->
            <section id="main-content" class=" ">
                <div class="wrapper main-wrapper row" style=''>
                    <div class='col-xs-12'>
                        <div class="page-title">
                            <div class="pull-left">
                                <h1 class="title">Driver Details</h1>
                            </div>
                            <div class="pull-right">
                                <div class="right-tools">
                                    <a href="add-drivers.php" class="btn btn-primary"><i class="fa fa-chevron-left"></i> <span>Back</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4">
                        <section class="box user-box">
                            <div class="content-header">
                                <div class="img-bg">
                                    <img class="img-responsive" src="assets/images/bg-profile.jpg" alt=""/>
                                </div>
                                <div class="user-area" id="user-area">
                                  <!--  <span class="user-image">
                                        <img class="img-responsive img-circle" src="assets/images/profile/avatar-1.png" alt=""/>
                                    </span>
                                    <span class="user-name" id="name">Wycliffe Shane</span>-->
                                </div>
                            </div>
                            <div class="content-body">
                                <div class="user-details" id="user-details">
                                <!--    <ul>
                                        <li> 
                                            <span>FullName</span>
                                            <span><div id="fullName"></div></span>
                                        </li>
                                        <li> 
                                            <span>Email Address</span>
                                            <span><div id="email"></div></span>
                                        </li>
                                        <li> 
                                            <span>Phone Number</span>
                                            <span><div id="phone"></div></span>
                                        </li>
                                        <li> 
                                            <span>Birthdate</span>
                                            <span><div id="dob"></div></span>
                                        </li>
                                        <li> 
                                            <span>Gender</span>
                                            <span><div id="gender"></div></span>
                                        </li>
                                        <li> 
                                            <span>State</span>
                                            <span><div id="state"></div></span>
                                        </li>
                                        <li> 
                                            <span>City</span>
                                            <span><div id="city"></div></span>
                                        </li>
                                        <li> 
                                            <span>Address1<br><i class="add-title">Home</i></span>
                                            <span><div id="street"></div></span>
                                        </li>
                                        <li> 
                                            <span>Status</span>

                                            <span><i class="status-complete"><div id="status"></div></i></span>
                                        </li>
                                    </ul>-->
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-8">
                        <section class="box">
                            <div class="proof-area">
                                <ul class="nav nav-tabs primary">
                                    <li class="active"><a href="#licence" data-toggle="tab">Licence</a></li>
                                    <li><a href="#vehicle" data-toggle="tab">Vehicle Image</a></li>
                                    <li><a href="#plate" data-toggle="tab">Plate No.</a></li>
                                    <li><a href="#address" data-toggle="tab">Address Proof</a></li>
                                </ul>
                                <div class="tab-content transparent clearfix">
                                    <div class="tab-pane fade in active" id="licence">
                                        <div class="demo-gallery">
                                            <ul id="lightgallery" class="list-unstyled row">
                                                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="assets/images/driving.licence.jpg" data-src="assets/images/driving.licence.jpg" data-sub-html="<h4>Driving Licence</h4><p>Wycliffe Shane</p>">
                                                    <a href="">
                                                        <img class="img-responsive" src="assets/images/driving.licence.jpg">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="vehicle">
                                        <div class="row">
                                            <div class="demo-gallery">
                                                <div class="col-xs-6 col-sm-4 col-md-3" data-responsive="assets/images/driving.licence.jpg" data-src="assets/images/driving.licence.jpg" data-sub-html="<h4>Driving Licence</h4><p>Wycliffe Shane</p>">
                                                    <img class="img-responsive" src="assets/images/vehicle1.png" alt=""/>
                                                </div>
                                                <div class="col-xs-6 col-sm-4 col-md-3">
                                                    <img class="img-responsive" src="assets/images/vehicle2.png" alt=""/>
                                                </div>
                                                <div class="col-xs-6 col-sm-4 col-md-3">
                                                    <img class="img-responsive" src="assets/images/vehicle3.png" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="plate">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img class="img-responsive" src="assets/images/no-plate.jpg" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="address">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img class="img-responsive" src="assets/images/address-proof.jpg" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="box">
                            <header class="panel_header">
                                <h2 class="title pull-left">Ride Activity</h2>
                            </header>
                            <div class="content-body">    
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div id="container1" style="min-width: 310px; height: 435px; margin: 0 auto"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">History</h2>
                            </header>
                            <div class="content-body">    
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="table-responsive">
                                            <table id="table-1" class="table table-small-font no-mb table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Sr#</th>
                                                        <th>Trip ID</th>
                                                        <th>Driver Name</th>
                                                        <th>Vehicle No.</th>
                                                        <th>Pickup Location</th>
                                                        <th>Destination Location</th>
                                                        <th>Travel Time</th>
                                                        <th>Payment Mode</th>
                                                        <th>Payment</th>
                                                        <th>Review</th>
                                                        <th class="no-sort">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>TRIPID001</td>
                                                        <td>David Miller</td>
                                                        <td>KUC 265U</td>
                                                        <td>Machakos</td>
                                                        <td>Kiambu</td>
                                                        <td>45:00 min</td>
                                                        <td>MPESA</td>
                                                        <td class="text-center">$100</td>
                                                        <td>
                                                            <div class="star-rating">
                                                                <span class="fa fa-star" data-rating="1"></span>
                                                                <span class="fa fa-star" data-rating="2"></span>
                                                                <span class="fa fa-star-o" data-rating="3"></span>
                                                                <span class="fa fa-star-o" data-rating="4"></span>
                                                                <span class="fa fa-star-o" data-rating="5"></span>
                                                                <input type="hidden" name="whatever1" class="rating-value" value="2">
                                                            </div>
                                                        </td>
                                                        <td><span class="status-complete">Paid</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td>TRIPID002</td>
                                                        <td>Nishant Joshi</td>
                                                        <td>KUC 275U</td>
                                                        <td>Machakos</td>
                                                        <td>Kiambu</td>
                                                        <td>40:00 min</td>
                                                        <td>Airtel Money</td>
                                                        <td class="text-center">$80</td>
                                                        <td>
                                                            <div class="star-rating">
                                                                <span class="fa fa-star" data-rating="1"></span>
                                                                <span class="fa fa-star" data-rating="2"></span>
                                                                <span class="fa fa-star" data-rating="3"></span>
                                                                <span class="fa fa-star-o" data-rating="4"></span>
                                                                <span class="fa fa-star-o" data-rating="5"></span>
                                                                <input type="hidden" name="whatever1" class="rating-value" value="3">
                                                            </div>
                                                        </td>
                                                        <td><span class="status-pending">Processing</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td>TRIPID003</td>
                                                        <td>Krunal Patel</td>
                                                        <td>KUC 285U</td>
                                                        <td>Machakos</td>
                                                        <td>Kiambu</td>
                                                        <td>15:00 min</td>
                                                        <td>Paypal</td>
                                                        <td class="text-center">$50</td>
                                                        <td>
                                                            <div class="star-rating">
                                                                <span class="fa fa-star" data-rating="1"></span>
                                                                <span class="fa fa-star" data-rating="2"></span>
                                                                <span class="fa fa-star" data-rating="3"></span>
                                                                <span class="fa fa-star" data-rating="4"></span>
                                                                <span class="fa fa-star-o" data-rating="5"></span>
                                                                <input type="hidden" name="whatever1" class="rating-value" value="4">
                                                            </div>
                                                        </td>
                                                        <td><span class="status-cancelled">Unpaid</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </section>
            <!-- content area :: end -->
        </div>
        <!-- main-container :: end -->
        <!-- js -->
        <?php include('layout/footer.php');?>
    </body>
</html>

<script>
$(document).ready(function() {
	var driver_id = "<?php echo $_REQUEST['driver_id']; ?>";
	console.log(driver_id);
	getDriverDetails(driver_id);
});
</script>