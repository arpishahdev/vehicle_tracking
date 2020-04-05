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
                                <h1 class="title">Add New Vehicle</h1>
                            </div>
                            <div class="pull-right">
                                <div class="right-tools">
                                    <a href="add-vehicle.php" class="btn btn-primary"><i class="fa fa-chevron-left"></i> <span>Back</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
					<div id="alert-danger"></div>
                    <div class="col-lg-12">
                        <form enctype="multipart/form-data" id="fupForm">
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
                                                        <input type="text" id="vehicle_type" class="form-control" placeholder="Enter Vehicle Type">
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
                                                        <input type="text" id="plate_no" class="form-control"  placeholder="Enter Vehicle Plate Number">
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
                                                  <!--  <img src="assets/images/vehicle/vehicle-2.jpg" alt=""/>-->
                                                </div>
                                            </div>
                                             <div class="col-md-2">
                                                <input type="file" class="form-control" id="fileToUploadVehicle" name="fileToUploadVehicle[]" accept="image/jpeg,image/gif,image/png" multiple/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary main-btn"><i class="fa fa-check"></i> Submit</button>
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
var company_id = "<?php echo $_SESSION['id'];?>";
		$("#fupForm").on('submit', function(e){ 
										var vehicle_type = $('#vehicle_type').val();
										var vehicle_model = $('#vehicle_model').val();
										var plate_no = $('#plate_no').val();
										var seats = $('#seats').val();
										
										
			var formData = new FormData(this);
			//alert(fullname);
			formData.append('company_id', company_id);
			formData.append('vehicle_type', vehicle_type);
			formData.append('vehicle_model', vehicle_model);
			formData.append('plate_no', plate_no);
			formData.append('seats', seats);
			
			
				e.preventDefault();
				$.ajax({
					type: 'POST',
					url: 'php/addNewVehicle.php',
					data:formData,
					contentType: false,
					cache: false,
					processData:false,
					beforeSend: function(){
						$('.submitBtn').attr("disabled","disabled");
						$('#fupForm').css("opacity",".5");
					},
					success: function(msg){
					 $('#alert-danger').empty();
					   $('#alert-danger').append('<p><br/>'+msg+'</p>');
					   //$('#image').html('<img src="upload/' + msg  + '" class="doc-img"/>');
						// setTimeout(function(){
										 // document.getElementById("alert-danger").innerHTML="";
										 // },3000);
										
					   
						$('#fupForm').css("opacity","");
						$(".submitBtn").removeAttr("disabled");
					},
								error: function(jqXHR, textStatus, errorThrown) {  // What to do if we fail
										console.log(textStatus);
										console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
								}
				},'json');
			});
			
		});
</script>