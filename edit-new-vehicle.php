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
                                <h1 class="title">Edit New Vehicle</h1>
                            </div>
                            <div class="pull-right">
                                <div class="right-tools">
                                    <a href="add-vehicle.html" class="btn btn-primary"><i class="fa fa-chevron-left"></i> <span>Back</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
					<div id="show-error"></div>
                    <div class="col-lg-12">
                        <form class="" action="#" method="post">
                            <ul class="nav nav-tabs primary">
                                <li class="active">
                                    <a href="#personal-info" data-toggle="tab">
                                        <i class="fa fa-user"></i> Vehicle Information
                                    </a>
                                </li>
                                <li>
                                    <a href="#document" data-toggle="tab">
                                        <i class="fa fa-file"></i> Document
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="personal-info">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="col-sm-12 avatar-img ">
                                                <div class="avatar-image-wrapper">
                                                    <div class="img-picker"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Vehicle Make</label>
                                                    <div class="controls">
                                                        <input type="text" id="vehicle_type" class="form-control" placeholder="Enter Vehicle Make">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pr">
                                                 <div class="form-group">
                                                    <label class="form-label">Vehicle Model</label>
                                                    <div class="controls">
                                                        <input type="text" id="vehicle_model" class="form-control" placeholder="Enter Vehicle Model">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Vehicle Plate Number</label>
                                                    <div class="controls">
                                                        <input type="text" id="plate_no" class="form-control"  placeholder="Enter Vehicle Plate Number" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pr">
                                                <div class="form-group">
                                                    <label class="form-label">Available Seats/Person capacity</label>
                                                    <div class="controls">
                                                        <input type="text" id="seats" class="form-control" placeholder="Enter Available Seats/Person capacity">
                                                    </div>
                                                </div>
                                            </div>                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="document">
                                    <div class="document-gallery">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="doc-img">
                                                    <img src="assets/images/vehicle/vehicle-2.jpg" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary main-btn" onclick="updateVehicle(<?php echo $_REQUEST['vehicle_id'];?>);"><i class="fa fa-check"></i> Submit</button>
                                </div>
                            </div>       
                        </form>
                    </div>
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

var vehicle_id = "<?php echo $_REQUEST['vehicle_id']; ?>";

editVehicleDetails(vehicle_id);



});
</script>