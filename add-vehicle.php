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
                                <h1 class="title">Add Vehicle</h1>
                            </div>
                            <div class="pull-right">
                                <div class="right-tools">
                                    <a href="add-new-vehicle.php" class="btn btn-primary"><i class="fa fa-plus"></i> <span>Add New Vehicle</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
					<div id="alert-danger"></div>
                    <div class="col-lg-12">
                        <section class="box has-border-left-3">
                            <header class="panel_header">
                                <h2 class="title pull-left">Vehicle List</h2>
                            </header>
                            <div class="content-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="table-responsive">
										<table id="vehicleDatatables" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
														<th class="no-sort text-center">Sr #</th>
                                                        <th class="no-sort">Image</th>
                                                        <th>Vehicle Make</th>
														<th>Vehicle Model</th>
														<th>Vehicle Plate Number</th>
														<th class="text-center">Person Capacity</th>
														<th class="text-center">Status</th>
							<th> </th>
						</tr>
					</thead>
					<tbody>                  
                    </tbody>
                                </table> 
                                            <!--<table id="vehicleDatatables" class="table table-small-font no-mb table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="check-area no-sort">
                                                            <label>
                                                                <input id="selectAll" type="checkbox" class="checkbox"><span></span>
                                                            </label>
                                                            <div id="dropdown-table-menu" class="dropdown-table">
                                                                <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Select Action <span class="caret"></span></button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a id="delete_all" class="btn"><i class="fa fa-trash"></i> Delete All</a></li>
                                                                </ul>
                                                            </div>    
                                                        </th>
                                                        <th class="no-sort text-center">Sr #</th>
                                                        <th class="no-sort">Image</th>
                                                        <th>Vehicle Make</th>
                                                        <th>Vehicle Model</th>
                                                        <th>Vehicle Plate Number</th>
                                                        <th class="text-center">Person Capacity</th>
                                                        <th class="text-center">Status</th>
                                                        <th class="text-center">Action</th>
														<th class="no-sort text-center">Sr #</th>
                                                        <th class="no-sort">Image</th>
                                                        <th>Vehicle Make</th>
														<th>Vehicle Plate Number</th>
														<th class="text-center">Person Capacity</th>
                                                    </tr></thead>
                                                <tbody>-->
                                                <!--    <tr data-row-id="1">
                                                        <td class="check-area no-sort text-center">
                                                            <label>
                                                                <input type="checkbox" class="checkbox" data-id="1"><span></span>
                                                            </label>
                                                        </td>                                                        
                                                        <th class="text-center">1</th>
                                                        <td class="text-center">
                                                            <img class="img-circle img-user" src="assets/images/vehicle/vehicle-1.jpg" alt=""/>
                                                        </td>
                                                        <td>Audi</td>
                                                        <td>N-239N</td>
                                                        <td>BX-AQ-890</td>
                                                        <td class="text-center">4</td>
                                                        <td class="text-center"><span class="status-complete">Approved</span></td>
                                                        <td class="text-center">
                                                            <a href="edit-new-vehicle.html" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                                            <a href="view-new-vehicle.html" class="btn btn-warning btn-sm" data-toggle="modal" data-target=".view-vehicle-detail"><i class="fa fa-eye"></i></a>
                                                            <a class="btn btn-danger btn-sm remove-row" data-id="1"><i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-row-id="2">
                                                        <td class="check-area no-sort">
                                                            <label>
                                                                <input type="checkbox" class="checkbox" data-id="2"><span></span>
                                                            </label>
                                                        </td>     
                                                        <th class="text-center">2</th>
                                                        <td class="text-center">
                                                            <img class="img-circle img-user" src="assets/images/vehicle/vehicle-2.jpg" alt=""/>
                                                        </td>
                                                        <td>Luxurious</td>
                                                        <td>MXZ-550</td>
                                                        <td>BX-AQ-890</td>
                                                        <td class="text-center">4</td>
                                                        <td class="text-center"><span class="status-complete">Approved</span></td>
                                                        <td class="text-center">
                                                            <a href="edit-new-vehicle.html" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                                            <a href="view-new-vehicle.html" class="btn btn-warning btn-sm" data-toggle="modal" data-target=".view-vehicle-detail"><i class="fa fa-eye"></i></a>
                                                            <a class="btn btn-danger btn-sm remove-row" data-id="2"><i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-row-id="3">
                                                        <td class="check-area no-sort">
                                                            <label>
                                                                <input type="checkbox" class="checkbox" data-id="3"><span></span>
                                                            </label>
                                                        </td>    
                                                        <th class="text-center">3</th>
                                                        <td class="text-center">
                                                            <img class="img-circle img-user" src="assets/images/vehicle/vehicle-3.jpg" alt=""/>
                                                        </td>
                                                        <td>Tata</td>
                                                        <td>Neno390</td>
                                                        <td>BX-AQ-890</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center"><span class="status-cancelled">Rejected</span></td>
                                                        <td class="text-center">
                                                            <a href="edit-new-vehicle.html" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                                            <a href="view-new-vehicle.html" class="btn btn-warning btn-sm" data-toggle="modal" data-target=".view-vehicle-detail"><i class="fa fa-eye"></i></a>
                                                            <a class="btn btn-danger btn-sm remove-row" data-id="3"><i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>-->
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

        <div class="modal fade view-vehicle-detail" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="viewModal">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Vehicle Detail</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
                    </div>
                    <div class="vehicleview-box">
                        <div class="vehicle-img">
                           <img src="assets/images/vehicle1.png" alt=""/>
                        </div>
                        <div class="vehicleinfo-area">
                            <div class="vehicle-info clearfix">
                                <div class="vehicle-title">Vehicle Name</div>
                                <div class="vehicle-name" id="vehicle_type_view"></div>
                            </div>
                            <div class="vehicle-info clearfix">
                                <div class="vehicle-title">Vehicle Model</div>
                                <div class="vehicle-name" id="vehicle_model_view"></div>
                            </div>
                            <div class="vehicle-info clearfix">
                                <div class="vehicle-title">Vehicle Plate Number</div>
                                <div class="vehicle-name" id="plate_no_view"></div>
                            </div>
                            <div class="vehicle-info clearfix">
                                <div class="vehicle-title">Person Capacity</div>
                                <div class="vehicle-name" id="seats_view"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
	<!--	For Delete -->
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
		Deleting Record:
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Do you really want to delete this record?</p>
        </div>
        <div class="modal-footer">
          
           <button type="submit" class="btn btn-default" id="confirmDeleteVehicle">Yes</button>
		   <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>

        <!-- js -->
       <?php include('layout/footer.php');?>
    </body>
</html>
<script>
$(document).ready(function() {
var id = "<?php echo $_SESSION['id']; ?>";
 $('#vehicleDatatables').DataTable( {
        "ajax": {
            "url": "php/getVehicleData.php",
			"data": function ( d ) {
                 d.id = id;
                // d.custom = $('#myInput').val();
                // etc
             },
            "dataSrc": ""
        },
		"complete": function(xhr, responseText){
                            console.log(xhr);
                            console.log(responseText); //*** responseJSON: Array[0]
                        },
        "columns": [
			{ "data": "vehicle_id" },
            {"data": "photo",
                         "render": function (data, type, row) {
                             
                             return '<img src="assets/images/vehicle/' + data + '" />';

                         }  
                        },
            { "data": "vehicle_name" },
			{ "data": "vehicle_number" },
            { "data": "vehicle_number" },
            { "data": "seats" },
			{                      

                                  "render": function (data, type, row, meta) {
								  return '<span class="status-complete">Approved</span>';
								  }
			},
			{                      

                                  "render": function (data, type, row, meta) {
                                   var id = row.vehicle_id;
								   return '<a href="edit-new-vehicle.php?vehicle_id='+id+'" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>'+ " " +'<a href="#" data-target="#viewModal" data-id="'+id+'" id ="viewVehicle" data-toggle="modal" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>'+ " " + '<a href="#"  class="btn btn-danger btn-sm remove-row"  data-id="'+id+'" data-toggle="modal" data-target="#myModal" data-id="3"><i class="fa fa-trash"></i></a>';
								   //return '<a href="vehicle-detail.php?'+val+'">View</a>';
                                        }
                                    }
            
        ]   
    } );
	
	/* For view */
	$('#viewModal').on('show.bs.modal', function (e) {
        var vehicle_id = $(e.relatedTarget).data('id'); 
		//alert(rowid);
		$.ajax({
            type : 'post',
            url : 'php/viewIndDriver.php', //Here you will fetch records 
            data: {
							vehicle_id:vehicle_id
						}, //Pass $id
            success : function(data){
							//$('#viewModal').modal('hide');
							console.log(data);
							var obj = JSON.parse(data);
							$.each(obj,function(index,item){
							$('#vehicle_type_view').html( item.vehicle_name);
						    $('.vehicleinfo #vehicle_type_view').append(item.vehicle_name);
							    $('#vehicle_model_view').html(item.vehicle_type);
								$('#plate_no_view').html(item.vehicle_number);
								$('#seats_view').html(item.seats);
							});
											
            }
        });
     });
	 
	 /* For Delete */
	 $('#myModal').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id'); 
		$('#confirmDeleteVehicle').data('rowid', rowid);
        //alert(rowid);
     });
	
});
$('#confirmDeleteVehicle').click(function(){
		var vehicle_id = $(this).data('rowid');
		alert(vehicle_id);
		$.ajax({
            type : 'post',
            url : 'php/deleteVehicle.php', //Here you will fetch records 
            data: {
							vehicle_id:vehicle_id
						}, //Pass $id
            success : function(data){
			$('#myModal').modal('hide');
			location.reload();
			//$('#driverDatatables').empty();
											//showDriverList(company_id);
											 $('#alert-danger').append('<p><br/>'+data+'</p>');
												setTimeout(function(){
													 document.getElementById("alert-danger").innerHTML="";
													 },3000);
            }
        });
	});

</script>