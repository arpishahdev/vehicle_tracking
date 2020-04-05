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
                                <h1 class="title">Add Route</h1>
                            </div>
                            <div class="pull-right">
                                <div class="right-tools">
                                    <a href="add-new-route.php" class="btn btn-primary"><i class="fa fa-plus"></i> <span>Add New Route</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
					<div id="show-error"></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12">
                        <section class="box has-border-left-3">
                            <header class="panel_header">
                                <h2 class="title pull-left">Route List</h2>
                            </header>
                            <div class="content-body">
                                <div class="row" id="displayRoute">
                              <!--      <div class="col-md-4">
                                        <div class="routedetails-box">
                                            <div class="route-header clearfix">
                                                <div class="route-title">Route 1</div>
                                                <div class="route-action">
                                                    <a href="edit-route.html" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Edit Route"><i class="fa fa-pencil"></i></a>
                                                    <a href="remove-route.html" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Remove Route"><i class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="route-area">
                                                <iframe class="route-map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d17742.983877611223!2d-84.35425946458327!3d33.743117762998345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1538975337859" frameborder="0" style="border:0" allowfullscreen></iframe>
                                            </div>
                                            <div class="route-details">
                                                <div class="pickup-route">
                                                    <span class="pr-title">Frankfurt, England</span>
                                                    <span class="pr-time">12/10/2019 10:11 AM </span>
                                                </div>
                                                <div class="destination-route">
                                                    <span class="pr-title">Nuremberg, England </span>
                                                    <span class="pr-time">12/10/2019 10:11 AM </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="routedetails-box">
                                            <div class="route-header clearfix">
                                                <div class="route-title">Route 2</div>
                                                <div class="route-action">
                                                    <a href="edit-route.html" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Edit Route"><i class="fa fa-pencil"></i></a>
                                                    <a href="remove-route.html" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Remove Route"><i class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="route-area">
                                                <iframe class="route-map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d17742.983877611223!2d-84.35425946458327!3d33.743117762998345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1538975337859" frameborder="0" style="border:0" allowfullscreen></iframe>
                                            </div>
                                            <div class="route-details">
                                                <div class="pickup-route">Pickup Location 1</div>
                                                <div class="destination-route">Destination Location 1</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="routedetails-box">
                                            <div class="route-header clearfix">
                                                <div class="route-title">Route 3</div>
                                                <div class="route-action">
                                                    <a href="edit-route.html" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Edit Route"><i class="fa fa-pencil"></i></a>
                                                    <a href="remove-route.html" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Remove Route"><i class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="route-area">
                                                <iframe class="route-map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d17742.983877611223!2d-84.35425946458327!3d33.743117762998345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1538975337859" frameborder="0" style="border:0" allowfullscreen></iframe>
                                            </div>
                                            <div class="route-details">
                                                <div class="pickup-route">Pickup Location 1</div>
                                                <div class="destination-route">Destination Location 1</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="routedetails-box">
                                            <div class="route-header clearfix">
                                                <div class="route-title">Route 4</div>
                                                <div class="route-action">
                                                    <a href="edit-route.html" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Edit Route"><i class="fa fa-pencil"></i></a>
                                                    <a href="remove-route.html" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Remove Route"><i class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="route-area">
                                                <iframe class="route-map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d17742.983877611223!2d-84.35425946458327!3d33.743117762998345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1538975337859" frameborder="0" style="border:0" allowfullscreen></iframe>
                                            </div>
                                            <div class="route-details">
                                                <div class="pickup-route">Pickup Location 1</div>
                                                <div class="destination-route">Destination Location 1</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="routedetails-box">
                                            <div class="route-header clearfix">
                                                <div class="route-title">Route 5</div>
                                                <div class="route-action">
                                                    <a href="edit-route.html" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Edit Route"><i class="fa fa-pencil"></i></a>
                                                    <a href="remove-route.html" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Remove Route"><i class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="route-area">
                                                <iframe class="route-map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d17742.983877611223!2d-84.35425946458327!3d33.743117762998345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1538975337859" frameborder="0" style="border:0" allowfullscreen></iframe>
                                            </div>
                                            <div class="route-details">
                                                <div class="pickup-route">Pickup Location 1</div>
                                                <div class="destination-route">Destination Location 1</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="routedetails-box">
                                            <div class="route-header clearfix">
                                                <div class="route-title">Route 6</div>
                                                <div class="route-action">
                                                    <a href="edit-route.html" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Edit Route"><i class="fa fa-pencil"></i></a>
                                                    <a href="remove-route.html" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Remove Route"><i class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="route-area">
                                                <iframe class="route-map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d17742.983877611223!2d-84.35425946458327!3d33.743117762998345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1538975337859" frameborder="0" style="border:0" allowfullscreen></iframe>
                                            </div>
                                            <div class="route-details">
                                                <div class="pickup-route">Pickup Location 1</div>
                                                <div class="destination-route">Destination Location 1</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
								
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="footer-table-action clearfix">
                                           <!-- <span class="paging_left">Showing <b>1</b> to <b>10</b> of <b>774</b> entries</span>-->
                                            <div class="pagination">
                                                <ul class="pagination">
													<div id ="paging"></div>
                                                    <!--<li>
                                                        <a href="#" aria-label="Previous">
                                                            <span aria-hidden="true">«</span>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li>
                                                        <a href="#" aria-label="Next">
                                                            <span aria-hidden="true">»</span>
                                                        </a>
                                                    </li>-->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
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
$(document).ready(function(){ 
	displayPage(<?php echo $_SESSION['id'];?>);
	<?php  
	if (isset($_REQUEST["page"])) {
	$paging = $_REQUEST["page"];
	}
	else{
	$paging= 1;
	}
	?>
	//console.log(page);
	displayRoute(<?php echo $_SESSION['id'];?>,<?php echo $paging ;?>);
	
});
</script>