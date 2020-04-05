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
                                <h1 class="title">Edit New Driver</h1>
                            </div>
                            <div class="pull-right">
                                <div class="right-tools">
                                    <a href="add-drivers.php" class="btn btn-primary"><i class="fa fa-chevron-left"></i> <span>Back</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12">
					<div id="alert-danger" style="color: red;"></div>
					
                        <form enctype="multipart/form-data" id="fupForm">
                            <ul class="nav nav-tabs primary">
                                <li class="active">
                                    <a href="#personal-info" data-toggle="tab">
                                        <i class="fa fa-user"></i> Personal Information
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
                                                <div class="img-picker">
													<div class="form-control btn btn-default btn-block img-upload-btn">
														<i class="glyphicon glyphicon-plus"></i><input type="file" id="fileToUploadImage" name="fileToUploadImage" accept="image/x-png, image/gif, image/jpeg">
													</div>
												</div>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Full Name:</label>
                                                    <div class="controls">
                                                        <input type="text" id="name" class="form-control" placeholder="Enter First Name">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Email Address</label>
                                                    <div class="controls">
                                                        <input type="text" id="email_id" class="form-control"  placeholder="Enter Email Address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pr">
                                                <div class="form-group">
                                                    <label class="form-label">Phone Number</label>
                                                    <div class="controls">
                                                        <input type="text" id="phone" class="form-control"  placeholder="Enter Phone Number" value="815-569-8534">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Birthdate</label>
                                                    <div class="controls input-group date" id="datetimepicker1">
                                                        <input type="text" id="dob" class="form-control" placeholder="Select Birthdate">
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pr">
                                                <div class="form-group">
                                                    <label class="form-label">Gender</label>
                                                    <div class="controls">
                                                        <select class="form-control" id="gender" name="gender">
                                                            <option id="0">Select Gender</option>
                                                            <option id="1" selected="">Male</option>
                                                            <option id="2">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Address</label>
                                                    <div class="controls">
                                                        <textarea class="form-control" id="street" rows="5"  placeholder="Enter Address">254, Machakos Rd, Nairobi, Kenya</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Country</label>
                                                    <div class="controls">
                                                        <select class="form-control" name="formfield5" id="country">
                                                            <option id="0">Select Country</option>
                                                            <option id="1" >Kenya</option>
                                                            <option id="2">Country 2</option>
                                                            <option id="3">Country 3</option>
                                                            <option id="4">Country 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pr">
                                                <div class="form-group">
                                                    <label class="form-label">State</label>
                                                    <div class="controls">
                                                        <select class="form-control" name="formfield5" id="state">
                                                            <option id="0">Select State</option>
                                                            <option id="1" selected="">Nairobi</option>
                                                            <option id="2">State 2</option>
                                                            <option id="3">State 3</option>
                                                            <option id="4">State 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">City</label>
                                                    <div class="controls">
                                                        <input type="text" id="city" class="form-control" placeholder="Enter City">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pr">
                                                <div class="form-group">
                                                    <label class="form-label">Zipcode</label>
                                                    <div class="controls">
                                                        <input type="text" id="zipCode" class="form-control" placeholder="Enter Zipcode" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pl">
                                                <div class="form-group">
                                                    <label class="form-label">Password</label>
                                                    <div class="controls">
                                                        <input type="password" id="password" class="form-control" placeholder="Enter Password" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 no-pr">
                                                <div class="form-group">
                                                    <label class="form-label">Confirm Password</label>
                                                    <div class="controls">
                                                        <input type="password" id="cPassword" class="form-control" placeholder="Enter Confirm Password">
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
                                                    <div id="image" ></div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-3">
                                                <div class="doc-img">
                                                    <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" accept="image/jpeg,image/gif,image/png,application/pdf,.doc,.docx,application/msword" />
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
								
                            </div>
							
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary main-btn submitBtn"><i class="fa fa-check"></i> Submit</button>
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
var driver_id = "<?php echo $_REQUEST['driver_id']; ?>";
var company_id = "<?php echo $_SESSION['id'];?>";

editDriverDetails(driver_id);

								
					
$("#fupForm").on('submit', function(e){ 
								var fullname = $('#name').val();
								var email_id = $('#email_id').val();
								var phone = $('#phone').val();
								var dob = $('#dob').val();
								var gender = $('#gender').val();
								var street = $('#street').val();
								var country = $('#country').val();
								var state = $('#state').val();
								var city = $('#city').val();
								var zipcode = $('#zipCode').val();
								var password = $('#password').val();
								var cPassword = $('#cPassword').val();
	// var image_path = $('#fileToUpload').val();
	// var image = image_path.split('/').pop(); 
	alert(email_id);
	var formData = new FormData(this);
	formData.append('driver_id', driver_id);
	formData.append('company_id', company_id);
	formData.append('fullname', fullname);
	formData.append('email_id', email_id);
	formData.append('phone', phone);
	formData.append('dob', dob);
	formData.append('gender', gender);
	formData.append('street', street);
	formData.append('country', country);
	formData.append('state', state);
	formData.append('city', city);
	formData.append('zipcode', zipcode);
	formData.append('password', password);
	formData.append('cPassword', cPassword);
	
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'php/fileUploadUpdateDriverDetatils.php',
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