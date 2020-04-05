/* Vehicle Update : edit-new-vehicle */
function updateVehicle(vehicle_id){
		var vehicle_id = vehicle_id;
		var vehicle_type = $('#vehicle_type').val();
		var vehicle_model = $('#vehicle_model').val();
		var plate_no = $('#plate_no').val();
		var seats = $('#seats').val();
		
						$.ajax({
							url: "php/editAddVehicle.php",
							method: 'post',
							data: {
							vehicle_id:vehicle_id,
							vehicle_type : vehicle_type,
							vehicle_model : vehicle_model,
							plate_no : plate_no,
							seats : seats							
						},
						success: function(data){ // What to do if we succeed
							console.log(data);
							
							$('#show-error').append('<p><br/>'+data+'</p>');
							$.each(data.errors, function(key, value){
								$('.show-error').show();
								$('.show-error').append('<p>'+value+'</p>');
							});
						},
						error: function(jqXHR, textStatus, errorThrown) {  // What to do if we fail
								$('#show-error').append('<p><br/>'+textStatus+'</p>');
								console.log(textStatus);
								console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
						}
					});

}

/* Get Vehicle Data to update it*/

function editVehicleDetails(vehicle_id){
		var vehicle_id = vehicle_id;
		
		
						$.ajax({
							url: "php/getVehicleUpdate.php",
							method: 'post',
							data: {
							vehicle_id:vehicle_id						
						},
						success: function(data){ // What to do if we succeed
							console.log(data);
							var obj = JSON.parse(data);
							$.each(obj,function(index,item){
								$('#vehicle_type').val(item.vehicle_name);
							    $('#vehicle_model').val(item.vehicle_type);
								$('#plate_no').val(item.vehicle_number);
								$('#seats').val(item.seats);
							});
							//$('#show-error').append('<p><br/>'+data+'</p>');
							$.each(data.errors, function(key, value){
								$('.show-error').show();
								$('.show-error').append('<p>'+value+'</p>');
							});
						},
						error: function(jqXHR, textStatus, errorThrown) {  // What to do if we fail
								$('#show-error').append('<p><br/>'+textStatus+'</p>');
								console.log(textStatus);
								console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
						}
					});

}


/* View Driver Detail: view-add-drivers.php*/
function getDriverDetails(driver_id){ alert(driver_id);
var driver_id = driver_id;
						$.ajax({
							url: "php/getDriverDetails.php",
							method: 'get',
							data: {
							driver_id:driver_id
						},
						success: function(data){ // What to do if we succeed
							console.log(data);
							// $('#show-error').append('<p><br/>'+data+'</p>');	
							// setTimeout(function(){
								 // document.getElementById("show-error").innerHTML="";
								 // },3000);
							
							var obj = JSON.parse(data);
							$.each(obj,function(index,item){ 
							var data1 ="<span class='user-image'>";
							data1 = data1 + "<img class='img-responsive img-circle' src='assets/images/profile/"+item.driver_photo+"' alt=''/>";
							data1 = data1 + "</span>"; 
							data1 = data1 + "<span class='user-name'>"+item.fullname+"</span>";
							$('#user-area').append(data1);
							});
							$.each(obj,function(index,item){ 
								var data1 ="<ul>";
								
								 data1 = data1 + "<li>";
                                 data1 = data1 + "<span>FullName</span>";
                                 data1 = data1 + "<span>"+item.fullname+"</span>";
                                 data1 = data1 + "</li>"; 
								 
								 
								 data1 = data1 + "<li>";
                                 data1 = data1 + "<span>Email Address</span>";
                                 data1 = data1 + "<span>"+item.email+"</span>";
                                 data1 = data1 + "</li>"; 
								 
								 data1 = data1 + "<li>";
                                 data1 = data1 + "<span>Phone Number</span>";
                                 data1 = data1 + "<span>"+item.mobile_number+"</span>";
                                 data1 = data1 + "</li>"; 
								 
								 data1 = data1 + "<li>";
                                 data1 = data1 + "<span>Birthdate</span>";
                                 data1 = data1 + "<span>"+item.dob+"</span>";
                                 data1 = data1 + "</li>"; 
								 
								 data1 = data1 + "<li>";
                                 data1 = data1 + "<span>Gender</span>";
                                 data1 = data1 + "<span>"+item.gender+"</span>";
                                 data1 = data1 + "</li>"; 
								 
								 data1 = data1 + "<li>";
                                 data1 = data1 + "<span>State</span>";
                                 data1 = data1 + "<span>"+item.state+"</span>";
                                 data1 = data1 + "</li>"; 
								 
								 data1 = data1 + "<li>";
                                 data1 = data1 + "<span>City</span>";
                                 data1 = data1 + "<span>"+item.city+"</span>";
                                 data1 = data1 + "</li>"; 
								 
								 data1 = data1 + "<li>";
                                 data1 = data1 + "<span>Address</span>";
                                 data1 = data1 + "<span>"+item.street+"</span>";
                                 data1 = data1 + "</li>"; 
								 
								 data1 = data1 + "<li>";
                                 data1 = data1 + "<span>Status</span>";
                                 data1 = data1 + "<span>"+item.status+"</span>";
                                 data1 = data1 + "</li>"; 
								 data1 = data1 + "</ul>";
								 
								 $('#user-details').append(data1);
							});
							$.each(data.errors, function(key, value){
								$('.show-error').show();
								$('.show-error').append('<p>'+value+'</p>');
							});
						},
						error: function(jqXHR, textStatus, errorThrown) {  // What to do if we fail
								$('#show-error').append('<p><br/>'+textStatus+'</p>');
								console.log(textStatus);
								console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
						}
					});
}

/* Show driver List: add-driver.php */
function showDriverList(company_id){
 var table = $('#driverDatatables').DataTable( {
        "ajax": {
            "url": "php/getDriverData.php",
			"data": function ( d ) {
                 d.id = company_id;
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
			
			{ "data": "driver_id" },
            {"data": "driver_photo",
                         "render": function (data, type, row) {
                             
                             return '<img src="uploadDriverImage/' + data + '" />';

                         }  
                        },
            { "data": "fullname" },
            { "data": "email" },
            { "data": "mobile_number" },
			{ "data": "state" },
			{ "data": "city" },
			{ "data": "status",
			 render : function(data, type, row) {
			 var id = row.driver_id;
			 if( data === 'active'){
              return '<a href="#" style="text-decoration: none"><span class="status-complete" id="status_active" onclick="changeDriverStatus('+id+')">'+data+'</span></a>';
			  }
			  if( data === 'deactive'){
              return '<a href="#" style="text-decoration: none"><span class="status-pending" id="status_deactive" onclick="changeDriverStatus('+id+')">'+data+'</span></a>';
			  }
          } 
		  },
			{                      

                                  "render": function (data, type, row, meta) {
                                   var id = row.driver_id;
								  
                                   //return '<a href="edit-new-vehicle.html?vehicle_id='+id+'">Edit</a>';
								   return '<a href="edit-add-drivers.php?driver_id='+id+'" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>'+ " " +'<a href="view-add-drivers.php?driver_id='+id+'" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>'+ " " + '<a href="#"  class="btn btn-danger btn-sm remove-row"  data-id="'+id+'"data-toggle="modal" data-target="#myModal"data-id="3"><i class="fa fa-trash"></i></a>';
								   
                                        }
                                    }
            
        ],
			
    } );
	}
	function changeDriverStatus(id){
	var driver_id = id;
	$.ajax({
							url: "php/updateDriverStatus.php",
							method: 'post',
							data: {
							driver_id:driver_id
						},
						success: function(data){ // What to do if we succeed
							console.log(data);
							
							 var table = $('#driverDatatables').DataTable();
							 table.ajax.reload();
							
							$.each(data.errors, function(key, value){
								$('.show-error').show();
								$('.show-error').append('<p>'+value+'</p>');
							});
						},
						error: function(jqXHR, textStatus, errorThrown) {  // What to do if we fail
								$('#show-error').append('<p><br/>'+textStatus+'</p>');
								console.log(textStatus);
								console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
						}
					});
	
	}
//function deleteDriver(company_id,driver_id){
//	alert(driver_id);
					//var result = confirm("Want to delete?");
					// ConfirmDialog('Data will be deleted permanently! Are you sure you want to delete?');
					// $(".ui-dialog-titlebar").hide();
					// function ConfirmDialog(message) {
							// $('<div></div>').appendTo('body')
							// .html('<div><h6>'+message+'?</h6></div>')
							
							// .dialog({
								// modal: true, title: 'Delete Record', zIndex: 20000, autoOpen: true,
								// width: '', resizable: true,
								// buttons: {
									// Yes: function () {
										
										// $.ajax({
											// url: "php/deleteVehicleData.php",
											// method: 'post',
											// data: {
											// id:id
										// },
										// success: function(data){ 
										// console.log(data.id);// What to do if we succeed
											// $('#showVehicle').empty();
											// getData(mechanic_id);
											 // $('#alert-danger').append('<p><br/>'+data+'</p>');
												// setTimeout(function(){
													 // document.getElementById("alert-danger").innerHTML="";
													 // },3000);
												
											// $.each(data.errors, function(key, value){
												// $('.alert-danger').show();
												// $('.alert-danger').append('<p>'+value+'</p>');
											// });
										// },
										// error: function(jqXHR, textStatus, errorThrown) {  // What to do if we fail
												// console.log(textStatus);
												// console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
										// }
									// });	
										
										


										// $(this).dialog("close");
									// },
									// No: function () {                                                                 
										//$('body').append('<h1>Confirm Dialog Result: <i>No</i></h1>');

										// $(this).dialog("close");
									// }
								// },
								// close: function (event, ui) {
									// $(this).remove();
								// }
							// });
					// };


//}

/* Edit Driver Data : edit-add-drivers.php */
function editDriverDetails(driver_id){
						$.ajax({
							url: "php/editAddDrivers.php",
							method: 'post',
							data: {
							driver_id:driver_id
						},
						success: function(data){ // What to do if we succeed
							console.log(data);
							console.log($('#gender').find(":selected").text());
							var obj = JSON.parse(data);
							 // $('#gender').html('');
							 // $('#country').html('');
							 // $('#state').html('');
							$.each(obj,function(index,item){
								$('#name').val(item.fullname);
								$('#email_id').val(item.email);
								$('#phone').val(item.mobile_number);
								$('#dob').val(item.dob);
								if(item.gender=="female"){
								document.getElementById("gender").selectedIndex = "2";
								}
								if(item.gender=="male"){
								document.getElementById("gender").selectedIndex = "1";
								}
								
								//$('#gender').val('<option >' + item.gender + '</option>');
								//$("#gender").html('<option value="'+ item.gender +'">'+ item.gender +'</option>')
								//$('#gender').val(item.gender);
								$('#street').val(item.street);
								$('#country').append('<option >' + item.country + '</option>');
								$('#state').append('<option >' + item.state + '</option>');
								$('#city').val(item.city);
								$('#zipCode').val(item.postal_code);
								$('#password').val(item.password);
								$('#cPassword').val(item.password);
								$('#image').html('<img src="uploadLic/' + item.photo  + '" class="doc-img"/>');
							});
							$.each(data.errors, function(key, value){
								$('.show-error').show();
								$('.show-error').append('<p>'+value+'</p>');
							});
						},
						error: function(jqXHR, textStatus, errorThrown) {  // What to do if we fail
								$('#show-error').append('<p><br/>'+textStatus+'</p>');
								console.log(textStatus);
								console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
						}
					});

}
/* Edit Route : edit-route.php */
function editRoute(id){
var id = id;
					$.ajax({
							url: "php/getRouteData.php",
							method: 'get',
							data: {
							id:id
						},
						success: function(data){ // What to do if we succeed
							console.log(data);
							// $('#show-error').append('<p><br/>'+data+'</p>');	
							// setTimeout(function(){
								 // document.getElementById("show-error").innerHTML="";
								 // },3000);
							
							var obj = JSON.parse(data);
							$.each(obj,function(index,item){
								$('#address_pickup').val(item.address_pickup);
								$('#address_dest').val(item.address_dest);
							});
							$.each(data.errors, function(key, value){
								$('.show-error').show();
								$('.show-error').append('<p>'+value+'</p>');
							});
						},
						error: function(jqXHR, textStatus, errorThrown) {  // What to do if we fail
								$('#show-error').append('<p><br/>'+textStatus+'</p>');
								console.log(textStatus);
								console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
						}
					});
 
}
function saveEditRoute(id){
	var add_pickup = $('#address_pickup').val();
	var add_dest = $('#address_dest').val();
	
						$.ajax({
							url: "php/saveEditRoute.php",
							method: 'get',
							data: {
							id:id,
							add_pickup:add_pickup,
							add_dest:add_dest
						},
						success: function(data){ // What to do if we succeed
							console.log(data);
							$('#show-error').append('<p><br/>'+data+'</p>');	
							// setTimeout(function(){
								 // document.getElementById("show-error").innerHTML="";
								 // },3000);
							
							var obj = JSON.parse(data);
							$.each(obj,function(index,item){
								$('#address_pickup').val(item.address_pickup);
								$('#address_dest').val(item.address_dest);
							});
							$.each(data.errors, function(key, value){
								$('.show-error').show();
								$('.show-error').append('<p>'+value+'</p>');
							});
						},
						error: function(jqXHR, textStatus, errorThrown) {  // What to do if we fail
								$('#show-error').append('<p><br/>'+textStatus+'</p>');
								console.log(textStatus);
								console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
						}
					});

}
/* Delete Route */
function removeRoute(id,company_id){
						$.ajax({
							url: "php/removeRoute.php",
							method: 'get',
							data: {
							id:id
						},
						success: function(data){ // What to do if we succeed
							console.log(data);
							$('#displayRoute').empty();
							displayRoute(company_id);
							 $('#show-error').append('<p><br/>'+data+'</p>');	
							// setTimeout(function(){
								 // document.getElementById("show-error").innerHTML="";
								 // },3000);
							
							var obj = JSON.parse(data);
							$.each(obj,function(index,item){
								$('#address_pickup').val(item.address_pickup);
								$('#address_dest').val(item.address_dest);
							});
							$.each(data.errors, function(key, value){
								$('.show-error').show();
								$('.show-error').append('<p>'+value+'</p>');
							});
						},
						error: function(jqXHR, textStatus, errorThrown) {  // What to do if we fail
								$('#show-error').append('<p><br/>'+textStatus+'</p>');
								console.log(textStatus);
								console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
						}
					});
}

/* Get all routes : add-route.php */
function displayPage(id){
var id = id;
					$.ajax({
							url: "php/getTotalCount.php",
							method: 'post',
							data: {
							id:id
						},
						success: function(data){ // What to do if we succeed
							console.log(data);
							var obj = JSON.parse(data);
							//console.log(obj.total);
							$.each(obj,function(index,item){ console.log(item.total);
							var i;
							if(item.total <=9){
								i = 1;
								}
								else
								if(item.total>9){
								i = (Math.floor(item.total/9))+1;
								}
								for (var j=1; j<=i; j++) { 
								$('#paging').append("<a href='add-route.php?page="+j+"'>"+j+"</a> ");
							 }
							
							});
							
							$.each(data.errors, function(key, value){
								$('.show-error').show();
								$('.show-error').append('<p>'+value+'</p>');
							});
							
							/* Pagination */
							
						},
						error: function(jqXHR, textStatus, errorThrown) {  // What to do if we fail
								$('#show-error').append('<p><br/>'+textStatus+'</p>');
								console.log(textStatus);
								console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
						}
					});


}
function displayRoute(id,page){
$.ajax({
							url: "php/getRoute.php",
							method: 'post',
							data: {
							id:id,
							page:page
						},
						success: function(data){ // What to do if we succeed
							console.log(data);
							var obj = JSON.parse(data);
							//var index=1;
							$.each(obj,function(index,item){
							
							var add_pickup = item.address_pickup.split(','); //alert(add_pickup[2]);
							var add_dest = item.address_dest.split(','); //alert(add_pickup[2]);
							
							var data1 ="<div class='col-md-4'>";
							data1 = data1 + "<div class='routedetails-box'>";
							data1 = data1 + "<div class='route-header clearfix'>";
							data1 = data1 + "<div class='route-title'>Route"+ index +"</div>"
							data1 = data1 + "data<div class='route-action'>";
                            data1 = data1 + "<a href='edit-route.php?route_id="+item.id+"' class='btn btn-success btn-xs' data-toggle='tooltip' data-placement='top' title='Edit Route'><i class='fa fa-pencil'></i></a>";
                            data1 = data1 + "<a href='#' class='btn btn-danger btn-xs' data-toggle='tooltip' data-placement='top' title='Remove Route' onclick='removeRoute(\"" + item.id + "\",\"" + id + "\");'><i class='fa fa-close'></i></a>";
                            data1 = data1 + "</div>";
							data1 = data1 + "</div>";
                            data1 = data1 +"<div class='route-area'>";
                            data1 = data1 +"<iframe class='route-map' src='https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d17742.983877611223!2d-84.35425946458327!3d33.743117762998345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1538975337859' frameborder='0' style='border:0' allowfullscreen></iframe>";
                            data1 = data1 + "</div>";
							data1 = data1 + "<div class='route-details'>";
                            data1 = data1 + "<div class='pickup-route'>";
                            data1 = data1 + "<span class='pr-title'>"+add_pickup[1]+ "," + add_pickup[2]+"</span>";
                            data1 = data1 + "<span class='pr-time'>"+item.pickup_time+"</span>";
							data1 = data1 + "</div>";
                            data1 = data1 + "<div class='destination-route'>";
                            data1 = data1 + "<span class='pr-title'>"+add_dest[1]+ "," + add_dest[2]+"</span>";
                            data1 = data1 + "<span class='pr-time'>"+item.dest_time+"</span>";
                            data1 = data1 + "</div>";
                            data1 = data1 + "</div>";
                            data1 = data1 + "</div>";
                            data1 = data1 + "</div>";
							$('#displayRoute').append(data1);
							
							});
							 },
						error: function(jqXHR, textStatus, errorThrown) {  // What to do if we fail
								$('#show-error').append('<p><br/>'+textStatus+'</p>');
								console.log(textStatus);
								console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
						}
					});
}
// function displayRoute(id){
// var id = id;
					// $.ajax({
							// url: "php/getRoute.php",
							// method: 'post',
							// data: {
							// id:id
						// },
						// success: function(data){ // What to do if we succeed
							// console.log(data);
							// alert(data);
							// $('#show-error').append('<p><br/>'+data+'</p>');
							// var obj = JSON.parse(data);
							//var page = Paginator(obj); console.log(page);
							// $.each(page.data,function(index,item){
								// var data1 = item.address_pickup;
								//$('#displayRoute').append(data1);
							// });
							
							// $.each(page.data,function(index,item){
							
							// var add_pickup = item.address_pickup.split(','); //alert(add_pickup[2]);
							// var add_dest = item.address_dest.split(','); //alert(add_pickup[2]);
							
							// var data1 ="<div class='col-md-4'>";
							// data1 = data1 + "<div class='routedetails-box'>";
							// data1 = data1 + "<div class='route-header clearfix'>";
							// data1 = data1 + "data<div class='route-action'>";
                            // data1 = data1 + "<a href='edit-route.php?route_id="+item.id+"' class='btn btn-success btn-xs' data-toggle='tooltip' data-placement='top' title='Edit Route'><i class='fa fa-pencil'></i></a>";
                            // data1 = data1 + "<a href='#' class='btn btn-danger btn-xs' data-toggle='tooltip' data-placement='top' title='Remove Route' onclick='removeRoute(\"" + item.id + "\",\"" + id + "\");'><i class='fa fa-close'></i></a>";
                            // data1 = data1 + "</div>";
							// data1 = data1 + "</div>";
                            // data1 = data1 +"<div class='route-area'>";
                            // data1 = data1 +"<iframe class='route-map' src='https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d17742.983877611223!2d-84.35425946458327!3d33.743117762998345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1538975337859' frameborder='0' style='border:0' allowfullscreen></iframe>";
                            // data1 = data1 + "</div>";
							// data1 = data1 + "<div class='route-details'>";
                            // data1 = data1 + "<div class='pickup-route'>";
                            // data1 = data1 + "<span class='pr-title'>"+add_pickup[1]+ "," + add_pickup[2]+"</span>";
                            // data1 = data1 + "<span class='pr-time'>"+item.pickup_time+"</span>";
							// data1 = data1 + "</div>";
                            // data1 = data1 + "<div class='destination-route'>";
                            // data1 = data1 + "<span class='pr-title'>"+add_dest[1]+ "," + add_dest[2]+"</span>";
                            // data1 = data1 + "<span class='pr-time'>"+item.dest_time+"</span>";
                            // data1 = data1 + "</div>";
                            // data1 = data1 + "</div>";
                            // data1 = data1 + "</div>";
                            // data1 = data1 + "</div>";
							// $('#displayRoute').append(data1);
							
							// });
							// setTimeout(function(){
								 // document.getElementById("show-error").innerHTML="";
								 // },3000);							
							// $.each(data.errors, function(key, value){
								// $('.show-error').show();
								// $('.show-error').append('<p>'+value+'</p>');
							// });
							
							// /* Pagination */
							
						// },
						// error: function(jqXHR, textStatus, errorThrown) {  // What to do if we fail
								// $('#show-error').append('<p><br/>'+textStatus+'</p>');
								// console.log(textStatus);
								// console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
						// }
					// });


// }
// function Paginator(items, page, per_page) {
 
  // var page = page || 1,
  // per_page = per_page || 10,
  // offset = (page - 1) * per_page,
 
  // paginatedItems = items.slice(offset).slice(0, per_page),
  // total_pages = Math.ceil(items.length / per_page);
  // return {
  // page: page,
  // per_page: per_page,
  // pre_page: page - 1 ? page - 1 : null,
  // next_page: (total_pages > page) ? page + 1 : null,
  // total: items.length,
  // total_pages: total_pages,
  // data: paginatedItems
  // };
// }
/* Login Validation */
function checkLogin(){
	
	var email = $('#email').val();
	var password = $('#password').val();
	//alert(password);
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(!regex.test(email)){
		$('#show_error').append('Incorrect email id');;
		return false;
	}
	
				$.ajax({
							url: "php/checkLogin.php",
							method: 'post',
							data: {
							email:email,
							pwd:password
						},
						success: function(data){ // What to do if we succeed
							//console.log(data);
							$('#show-error').append('<p><br/>'+data+'</p>');	
							// setTimeout(function(){
								 // document.getElementById("show-error").innerHTML="";
								 // },3000);							
							$.each(data.errors, function(key, value){
								$('.show-error').show();
								$('.show-error').append('<p>'+value+'</p>');
							});
						},
						error: function(jqXHR, textStatus, errorThrown) {  // What to do if we fail
								$('#show-error').append('<p><br/>'+textStatus+'</p>');
								console.log(textStatus);
								console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
						}
					});
		
}
/* Insert GEO Location : add-new-route.php */
function getPickupDetails(id){

		var location = $("#addressPickup").val(); 
		if(location == ""){
		$('#show-error').empty();
		$('#show-error').append('<p><br/> Please enter Pickup location information! </p>');
		setTimeout(function(){
								 document.getElementById("show-error").innerHTML="";
								 },3000);
				return;
		return;
		}
		var param = {address: location, key: 'AIzaSyAF9GH9ZPJeI5rtJGUaEUV7Dyfbtdjc2NI '};
		
		$.ajax({
		  url: 'https://maps.googleapis.com/maps/api/geocode/json',
		  data:param, 
		  success: function(response) {
			//console.log(response);
			var address_pickup = response.results[0].formatted_address; 
			var lat_pickup = response.results[0].geometry.location.lat;
			var lng_pickup = response.results[0].geometry.location.lng;
			
			var dest = getDestDetails(response.results[0],id);
			//$('#show-error').append('<p><br/>'+response+'</p>');
		  },
		  error: function(jqXHR, textStatus, errorThrown) {  // What to do if we fail
		  // $('#show-error').append('<p><br/> Please enter required information! </p>');
		  // setTimeout(function(){
								 // document.getElementById("show-error").innerHTML="";
								 // },3000);
		  console.log(textStatus);
		  console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		  } 
		});
}

function getDestDetails(pickupResponse,id){

		var location_dest = $("#addressDestination").val(); //alert(location);
		if(location_dest == ""){
				$('#show-error').empty();
				$('#show-error').append('<p><br/> Please enter Destination location information! </p>');
				setTimeout(function(){
								 document.getElementById("show-error").innerHTML="";
								 },3000);
				return;
				}		
		var param = {address: location_dest, key: 'AIzaSyAF9GH9ZPJeI5rtJGUaEUV7Dyfbtdjc2NI '};
			
					$.ajax({
					  url: 'https://maps.googleapis.com/maps/api/geocode/json',
					  data:param, 
					  success: function(response) {
						//console.log(response);
						var address_dest = response.results[0].formatted_address; 
						var lat_dest = response.results[0].geometry.location.lat;
						var lng_dest = response.results[0].geometry.location.lng;
						
						insertdata(pickupResponse,response.results[0],id);
						$('#show-error').append('<p><br/>'+textStatus+'</p>');
					  },
					 error: function(jqXHR, textStatus, errorThrown) {  // What to do if we fail
						// $('#show-error').append('<p><br/> Please enter required information!</p>');
						// setTimeout(function(){
								 // document.getElementById("show-error").innerHTML="";
								 // },3000);
						console.log(textStatus);
						console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
					 }
					});
}

function add_geoLocation(id) { 
	var pickup = getPickupDetails(id); 
}

					
function insertdata(pickupResponse,destResponse,id)
{
	var address_pickup = pickupResponse.formatted_address;
	var lat_pickup = pickupResponse.geometry.location.lat; 
	var lng_pickup = pickupResponse.geometry.location.lng; 
	var address_dest = destResponse.formatted_address;
	var lat_dest = destResponse.geometry.location.lat; 
	var lng_dest = destResponse.geometry.location.lng; 
	
	var dt_pickup = $("#date_pickup").val(); 
	var dt_dest = $("#date_dest").val();	
	
	if(dt_pickup == ""){
		dt_pickup = new Date();
		dt_pickup = dt_pickup.toDateString();		
	}
	if(dt_dest == ""){
		dt_dest = new Date();
		dt_dest = dt_dest.toDateString();		
	}
	
	
						$.ajax({
									url: "php/insertGeoLocation.php",
									method: 'get',
									data: {
									address_pickup: address_pickup,
									address_dest: address_dest,
									lat_pickup: lat_pickup,
									lng_pickup: lng_pickup,
									lat_dest:lat_dest,
									lng_dest:lng_dest,
									dt_pickup:dt_pickup,
									dt_dest:dt_dest,
									id:id
							  },
							success: function(data){ //alert(data); // What to do if we succeed
								$('#show-error').append('<p><br/>'+data+'</p>');		
								$.each(data.errors, function(key, value){
										
								$('.show-error').show();
								$('.show-error').append('<p>'+value+'</p>');
								});
							},
							error: function(jqXHR, textStatus, errorThrown) {
									alert(textStatus);// What to do if we fail
									$('#show-error').append('<p><br/>'+textStatus+'</p>');
									// setTimeout(function(){
									 // document.getElementById("show-error").innerHTML="";
									 // },3000);
								    console.log(textStatus);
									console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
							}
						});
}