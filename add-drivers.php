
<html>
	<body>
	
	<?php include('layout/header.php');?>
	
        <!-- tobar :: end -->
        <!-- main-container :: start -->
		
		<?php include('layout/side-bar.php');?>
            <!-- sidebar :: end -->
            <!-- content area :: start -->
			<style>
   .ui-widget-header,.ui-state-default, ui-button {
    background:#b9cd6d;
     border: 1px solid #b9cd6d;
      color: #FFFFFF;
      font-weight: bold;
    }
</style>
	
            <section id="main-content" class=" ">
                <div class="wrapper main-wrapper row" style=''>
                    <div class='col-xs-12'>
                        <div class="page-title">
                            <div class="pull-left">
                                <h1 class="title">Add Drivers</h1>
                            </div>
                            <div class="pull-right">
                                <div class="right-tools">
                                    <a href="add-new-driver.php" class="btn btn-primary"><i class="fa fa-plus"></i> <span>Add New Driver</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12">
                        <section class="box has-border-left-3">
                            <header class="panel_header">
                                <h2 class="title pull-left">Drivers List</h2>
                            </header>
                            <div class="content-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="table-responsive">
										<div id="alert-danger"></div>
                                            <table id="driverDatatables" class="table table-small-font no-mb table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                     <!--   <th class="check-area no-sort">
                                                            <label>
                                                                <input id="selectAll" type="checkbox" class="checkbox"><span></span>
                                                            </label>
                                                            <div id="dropdown-table-menu" class="dropdown-table">
                                                                <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Select Action <span class="caret"></span></button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a id="delete_all" class="btn"><i class="fa fa-trash"></i> Delete All</a></li>
                                                                </ul>
                                                            </div>    
                                                        </th>-->
                                                        <th class="no-sort">Sr #</th>
                                                        <th class="no-sort">Image</th>
                                                        <th class="text-left">Full Name</th>
                                                        <th class="text-left">Email Address</th>
                                                        <th class="text-center">Mobile Number</th>
                                                        <th class="text-center">State</th>
                                                        <th class="text-center">City</th>
                                                        <th class="text-center ">Status</th>
                                                        <th class="text-center">Action</th>
                                                    </tr></thead>
                                                <tbody>
                                                <!--    <tr data-row-id="1">
                                                        <td class="check-area no-sort text-center">
                                                            <label>
                                                                <input type="checkbox" class="checkbox" data-id="1"><span></span>
                                                            </label>
                                                        </td>                                                        
                                                        <th class="text-center">1</th>
                                                        <td class="text-center">
                                                            <img class="img-circle img-user" src="assets/images/profile/avatar-1.png" alt=""/>
                                                        </td>
                                                        <td>Wycliffe Shane</td>
                                                        <td>wycliffe@gmail.com</td>
                                                        <td class="text-center">815-569-8534</td>
                                                        <td class="text-center">Nairobi</td>
                                                        <td class="text-center">Machakos</td>
                                                        <td class="text-center"><span class="status-complete">Approved</span></td>
                                                        <td class="text-center">
                                                            <a href="edit-add-drivers.html" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                                            <a href="view-add-drivers.html" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
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
                                                            <img class="img-circle img-user" src="assets/images/profile/avatar-2.png" alt=""/>
                                                        </td>
                                                        <td>Mike Philip</td>
                                                        <td>mike@gmail.com</td>
                                                        <td class="text-center">314-416-9274</td>
                                                        <td class="text-center">Nakuru</td>
                                                        <td class="text-center">Kilifi</td>
                                                        <td class="text-center"><span class="status-pending">Pending</span></td>
                                                        <td class="text-center">
                                                            <a href="edit-add-drivers.html" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                                            <a href="view-add-drivers.html" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
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
                                                            <img class="img-circle img-user" src="assets/images/profile/avatar-3.png" alt=""/>
                                                        </td>
                                                        <td>Ajay Philip</td>
                                                        <td>Ajay@gmail.com</td>
                                                        <td class="text-center">314-416-9000</td>
                                                        <td class="text-center">Nakuru</td>
                                                        <td class="text-center">Kilifi</td>
                                                        <td class="text-center"><span class="status-cancelled">Rejected</span></td>
                                                        <td class="text-center">
                                                            <a href="edit-add-drivers.html" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                                            <a href="view-add-drivers.html" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                                            <a class="btn btn-danger btn-sm remove-row" data-id="3"><i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>-->
                                                </tbody>
                                            </table>
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
		<!-- Modal -->
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
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
           <button type="submit" class="btn btn-default" id="confirmDeleteDriver">Yes</button>
        </div>
      </div>
    </div>
  </div>
  
</div>
        <!-- main-container :: end -->
        <!-- js -->
        <?php include('layout/footer.php');?>
    </body>
</html>
<script>
var company_id = "<?php echo $_SESSION['id']; ?>";
$(document).ready(function() {

showDriverList(company_id);

	
	$('#myModal').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id'); 
		$('#confirmDeleteDriver').data('rowid', rowid);
        
     });
	
});

	 $('#confirmDeleteDriver').click(function(){
		var driver_id = $(this).data('rowid');
		alert(driver_id);
		$.ajax({
            type : 'post',
            url : 'php/deleteDriver.php', //Here you will fetch records 
            data: {
							driver_id:driver_id
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