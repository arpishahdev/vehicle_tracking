<html>
	<body>
	<?php include('layout/header.php');?>
        <!-- tobar :: end -->
        <!-- main-container :: start -->
		<?php include('layout/side-bar.php');?>
            <!-- sidebar :: end -->
            <!-- content area :: start -->
        <div class="page-container row-fluid container-fluid">
            <!-- sidebar :: start -->
            <div class="page-sidebar fixedscroll">
                <div class="page-sidebar-wrapper" id="main-menu-wrapper">
                    <ul class='wraplist'>
                        <li class="">
                            <a href="dashboard.html">
                                <i class="fa flaticon-dashboard"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="add-drivers.html">
                                <i class="fa flaticon-driver"></i>
                                <span class="title">Add Drivers</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="assign-drivers.html">
                                <i class="fa flaticon-driver"></i>
                                <span class="title">Assign Drivers</span>
                            </a>
                        </li>
                        <li class="open">
                            <a href="add-route.html">
                                <i class="fa flaticon-gps"></i>
                                <span class="title">Add Route</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="add-vehicle.html">
                                <i class="fa flaticon-car-steering-wheel"></i>
                                <span class="title">Add Vehicle</span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa flaticon-progress-report"></i>
                                <span class="title">Reports</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="payment-report.html" >Payment Report</a>
                                </li>
                                <li>
                                    <a class="" href="driver-payment-report.html" >Driver Payment Report</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- sidebar :: end -->
            <!-- content area :: start -->
            <section id="main-content" class=" ">
                <div class="wrapper main-wrapper row" style=''>
                    <div class='col-xs-12'>
                        <div class="page-title">
                            <div class="pull-left">
                                <h1 class="title">Edit New Route</h1>
                            </div>
                            <div class="pull-right">
                                <div class="right-tools">
                                    <a href="add-route.html" class="btn btn-primary"><i class="fa fa-chevron-left"></i> <span>Back</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <section class="box has-border-left-3">
                        <header class="panel_header">
                            <h2 class="title pull-left">Route</h2>
                        </header>
                        <div class="content-body">
						<div id="show-error"></div>
                            <form>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">Add Pickup Location</label>
                                            <div class="controls input-group transparent">
                                                <span class="input-group-addon cust-pad"><i class="fa fa-map-marker green"></i></span>
                                                <input type="text" class="form-control" id="address_pickup" placeholder="Add Pickup Location" value="Pickup Location 1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Add Destination Location</label>
                                            <div class="controls input-group transparent">
                                                <span class="input-group-addon cust-pad"><i class="fa fa-map-marker red"></i></span>
                                                <input type="text" class="form-control" id="address_dest" placeholder="Add Destination Location" value="Destination Location 1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-primary main-btn" onclick="saveEditRoute(<?php echo $_GET['route_id']; ?>);"><i class="fa fa-check"></i> Submit</button>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="map-area">
                                            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29374.82985549621!2d72.52208875!3d23.02914215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1538744497991" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
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
var id = "<?php echo $_GET['route_id']; ?>";
//console.log(id);
editRoute(id);
});
</script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAF9GH9ZPJeI5rtJGUaEUV7Dyfbtdjc2NI&libraries=places&language=en-AU"></script>
        <script>
            var autocomplete = new google.maps.places.Autocomplete($("#address_pickup")[0], {});

            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var place = autocomplete.getPlace();
                console.log(place.address_components);
            });
        </script>
		<script>
            var autocomplete1 = new google.maps.places.Autocomplete($("#address_dest")[0], {});

            google.maps.event.addListener(autocomplete1, 'place_changed', function() {
                var place = autocomplete1.getPlace();
                console.log(place.address_components);
            });
        </script>