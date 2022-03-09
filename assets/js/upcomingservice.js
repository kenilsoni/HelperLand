const navMenu = document.querySelector(".fullPage");
const fullPageHidden = document.querySelector(".fullPageHidden");
const navbarHamburger = document.querySelector(".navSm .tgle_class");
const tbody = document.querySelector("tbody");
const verticalNavbar = document.querySelector(".verticalNavbar");
const serviceHistoryTableContainer = document.querySelector(".serviceHistoryTableContainer");


verticalNavbar.style.minHeight = `${window.innerHeight - document.querySelector("nav").clientHeight - document.querySelector("heading") - 60}px`;

navbarHamburger.addEventListener("click", () => navMenu.classList.add("open"));
fullPageHidden.addEventListener("click", () => navMenu.classList.remove("open"));

document.addEventListener("wheel", () => navMenu.classList.remove("open"));

const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
const popoverList = popoverTriggerList.map((popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl));

const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
const tooltipList = tooltipTriggerList.map((tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl));

window.addEventListener("resize", () => {
	verticalNavbar.style.minHeight = `${window.innerHeight - document.querySelector("nav").clientHeight - document.querySelector("heading") - 60}px`;
});







var dt = new DataTable("#upcomingHistoryTable", {
	dom: "Blfrtip",
	responsive: true,
	pagingType: "full_numbers",
	language: {
		paginate: {
			first: "<img src='./assets/Images/firstPage.png' alt='first' />",
			previous: "<img src='./assets/Images/previous.png' alt='previous' />",
			next: '<img src="./assets/Images/previous.png" alt="next" style="transform: rotate(180deg)" />',
			last: "<img src='./assets/Images/firstPage.png' alt='first' style='transform: rotate(180deg)' />",
		},
		info: "Total Record: _MAX_",
		lengthMenu: "Show_MENU_Entries",
	},
	buttons: ["excel"],
	columnDefs: [
		{ orderable: false, targets: [4,5]},
		{ type: "kmNum", targets: 3 },
		{ type: "serviceDate", targets: 1 },
	],
});

jQuery.extend(jQuery.fn.dataTableExt.oSort, {
	"kmNum-pre": function (a) {
		a = a.replace(" km", "");
		return parseInt(a);
	},
	"kmNum-asc": function (a, b) {
		return a - b;
	},
	"kmNum-desc": function (a, b) {
		return b - a;
	},
});
var dt = new DataTable("#newServiceTable", {
	dom: "Blfrtip",
	responsive: true,
	pagingType: "full_numbers",
	language: {
		paginate: {
			first: "<img src='./assets/Images/firstPage.png' alt='first' />",
			previous: "<img src='./assets/Images/previous.png' alt='previous' />",
			next: '<img src="./assets/Images/previous.png" alt="next" style="transform: rotate(180deg)" />',
			last: "<img src='./assets/Images/firstPage.png' alt='first' style='transform: rotate(180deg)' />",
		},
		info: "Total Record: _MAX_",
		lengthMenu: "Show_MENU_Entries",
	},
	buttons: ["excel"],
	columnDefs: [{ orderable: false, targets: [1,2,3,4,5] }],
});
var dt = new DataTable("#servicehistoryTable", {
	dom: "Blfrtip",
	responsive: true,
	pagingType: "full_numbers",
	language: {
		paginate: {
			first: "<img src='./assets/Images/firstPage.png' alt='first' />",
			previous: "<img src='./assets/Images/previous.png' alt='previous' />",
			next: '<img src="./assets/Images/previous.png" alt="next" style="transform: rotate(180deg)" />',
			last: "<img src='./assets/Images/firstPage.png' alt='first' style='transform: rotate(180deg)' />",
		},
		info: "Total Record: _MAX_",
		lengthMenu: "Show_MENU_Entries",
	},
	buttons: ["excel"],
	columnDefs: [
		{ orderable: false, targets: [1,2]},
	
	],
});
var dt = new DataTable("#mytable4", {
	dom: "Blfrtip",
	responsive: true,
	pagingType: "full_numbers",
	language: {
		paginate: {
			first: "<img src='./assets/Images/firstPage.png' alt='first' />",
			previous: "<img src='./assets/Images/previous.png' alt='previous' />",
			next: '<img src="./assets/Images/previous.png" alt="next" style="transform: rotate(180deg)" />',
			last: "<img src='./assets/Images/firstPage.png' alt='first' style='transform: rotate(180deg)' />",
		},
		info: "Total Record: _MAX_",
		lengthMenu: "Show_MENU_Entries",
	},
	buttons: ["excel"],
	columnDefs: [
		{ orderable: false},
	
	],
});

var dataTables_length = document.querySelector(".dataTables_length");
$(".dataTables_length").insertAfter(".dataTable");
$(".tableHeader").insertAfter(".dt-buttons");

var dataTables_length = document.querySelector(".dt-buttons");
$("#filter_pet").insertAfter(".dt-buttons");
// $(".tableHeader").insertAfter(".dt-buttons");
// dt-buttons
// ####################################################################################################
function mysetting(){
	$(".mysetting").show();
	$("#tab2").hide();
	$("#tab1").show();
	$("#btn1").css('border-bottom','3px solid #1d7a8c');
	$("#btn2").css('border-bottom','3px solid #e1e1e1');
	$('.dashboard_btn,.newservice_btn,.upcomingservice_btn,.schedule_btn,.shistory_btn,.blockcust_btn,.ratings_btn').css('background','none');
	$(".dashboard,.upcoming_service,.newservicereq,.service_schedule,.service_history,.my_ratings,.block_customer").hide();
	getserviceprovider_details();
}
function getserviceprovider_details(){
	$.ajax({
		type: "GET",
		url: "?controller=UpcomingService&function=getsp_detail",
		datatype: "json",
		beforeSend: function () {
			$('#loader').removeClass('hidden')
		},
		success: function (data) {
			obj = JSON.parse(data);
				if (typeof obj === "object") {
					var len = obj.length;
					console.log(obj);
				for(let i=0;i<len;i++)
				{
					var currentDate = new Date(obj[0][0].DateOfBirth);
					var date = currentDate.getDate();
					var month = currentDate.getMonth();
					var year = currentDate.getFullYear();
					var dateString = year + "-" + ("0" + (month + 1)).slice(-2) + "-" + ("0" + date).slice(-2);
					if(obj[0][0].Gender==1){
						var checked="exampleRadios1";
					}else if(obj[0][0].Gender==2){
						var checked="exampleRadios2";
					}else if(obj[0][0].Gender==3){
						var checked="exampleRadios3";
					}
					
					$(".fname").val(obj[0][0].FirstName);
					$(".lname").val(obj[0][0].LastName);
					$(".email").val(obj[0][0].Email);
					$(".mobile").val(obj[0][0].Mobile);
					$(".dob").val(dateString);
					$(".nationality").val(obj[0][0].NationalityId);
					$("#"+checked+"").prop("checked", true);					
					$(".avatar_main").attr("src","./assets/Images/"+obj[0][0].UserProfilePicture+".png");
					$("#"+obj[0][0].UserProfilePicture+"").prop("checked", true);

					if(obj[1]!=undefined){
						$(".address1").val(obj[1][0].AddressLine1);
					$(".address2").val(obj[1][0].AddressLine2);
					$(".postal").val(obj[1][0].PostalCode);
					$(".city").val(obj[1][0].City);
					}
					
				}
			}
			else if(data==0){
				swal({
					title: 'sorry!! ',
					text: 'something went wrong!!',
					icon: 'error',
				});
			}
			
		},
		complete: function () {
			$('#loader').addClass('hidden')
		}
	});

}
$(document).on("click",".update_data",function(){

	var fname=$(".fname").val();
	var lname=$(".lname").val();
	var email=$(".email").val();
	var mobile=$(".mobile").val();
	var nid=$(".nationality").val();									
	var add1=$(".address1").val();
	var add2=$(".address2").val();
    var postal=$(".postal").val();
	var city=$(".city").val();
				
 if((fname && lname && email && mobile && nid && add1 && add2 && postal && city) != ""){
	$.ajax({
		type: "POST",
		url: "?controller=UpcomingService&function=updatesp_detail",
		datatype: "json",
		data:$("#user_details").serialize(),
		beforeSend: function () {
			$('#loader').removeClass('hidden')
		},
		success: function (data) {
			if(data==1){
				swal({
					title: 'Graet Job!! ',
					text: 'Data updated successfully!!',
					icon: 'success',
				});
				getserviceprovider_details()
				
			}else if(data==0){
				swal({
					title: 'sorry!! ',
					text: 'something went wrong!!',
					icon: 'error',
				});
			}
		},
		complete: function () {
			$('#loader').addClass('hidden')
		}
	});
} else{
	swal({
		title: 'sorry!! ',
		text: 'Please fill required fields!',
		icon: 'warning',
	});
}
})
$(document).on("click",".mysetting_btn",function(){
	mysetting();
});
$(document).on("click", "#update_password", function () {
	let oldpassword = $("#oldpass").val();
	let newpassword = $("#password_reg").val();
	let cpassword = $("#confirmPassword").val();
	if ((newpassword != '') && (oldpassword != '')) {

		$.ajax({
			type: "POST",
			url: "?controller=Servicehistory&function=update_password",
			datatype: "json",
			data: $(".form-3").serialize(),
			beforeSend: function () {
				$('#loader').removeClass('hidden')
			},
			success: function (data) {
				if (data == 1) {
					swal({
						title: 'Great job!! ',
						text: 'Password change successfully!',
						icon: 'success',
					});
					$(".form-3").trigger('reset');

				}
				else if (data == 0) {
					swal({
						title: 'sorry!! ',
						text: 'Old password is not matching!!',
						icon: 'warning',
					});
				}
			},
			complete: function () {
				$('#loader').addClass('hidden')
			},
		});
	}
	else {
		swal({
			title: 'sorry!! ',
			text: 'Invalid password!!',
			icon: 'warning',
		});
	}
});
$(document).on("click","#btn2",function(){
	$("#btn2").css('border-bottom','3px solid #1d7a8c');
$("#btn1").css('border-bottom','3px solid #e1e1e1');
	$("#tab1").hide();
	$("#tab2").show();
});
$(document).on("click","#btn1",function(){
	$("#btn1").css('border-bottom','3px solid #1d7a8c');
$("#btn2").css('border-bottom','3px solid #e1e1e1');
	$("#tab2").hide();
	$("#tab1").show();
	getserviceprovider_details()
});
// #######################################################################################################
$(document).on("click", "#avatar-female", function () {
	if ($(this).prop("checked") == true) {

		$(".avatar_main").attr("src","./assets/Images/avatar-female.png");
		$(".second,.third,.four,.five,.six").css("border","none");
	}
})
$(document).on("click", "#avatar-car", function () {
	if ($(this).prop("checked") == true) {
	
		$(".avatar_main").attr("src","./assets/Images/avatar-car.png");
		$(".first,.third,.four,.five,.six").css("border","none");
	}	
})
$(document).on("click", "#avatar-hat", function () {
	if ($(this).prop("checked") == true) {
		
		$(".avatar_main").attr("src","./assets/Images/avatar-hat.png");

	}
})
$(document).on("click", "#avatar-iron", function () {
	if ($(this).prop("checked") == true) {
		
		$(".avatar_main").attr("src","./assets/Images/avatar-iron.png");
	
	}
})
$(document).on("click", "#avatar-male", function () {
	if ($(this).prop("checked") == true) {
		
		$(".avatar_main").attr("src","./assets/Images/avatar-male.png");
		
	}
})
$(document).on("click", "#avatar-ship", function () {
	if ($(this).prop("checked") == true) {
		
		$(".avatar_main").attr("src","./assets/Images/avatar-ship.png");
	
	}
})
// ###################################################################################################################
$(document).on("click",".dashboard_btn",function(){
	$(".mysetting,.upcoming_service,.newservicereq,.service_schedule,.service_history,.my_ratings,.block_customer").hide();
	$(".dashboard").show();
	$('.dashboard_btn').css('background','#146371');
	$('.newservice_btn,.upcomingservice_btn,.schedule_btn,.shistory_btn,.blockcust_btn,.ratings_btn').css('background','none');

});
$(document).on("click",".accept_btn",function(){
	var serviceid=$(".service_id").val();

	$.ajax({
		type: "POST",
		url: "?controller=UpcomingService&function=acceptService",
		datatype: "json",
		data:{serviceid:serviceid},
		beforeSend: function () {
			$('#loader').removeClass('hidden')
		},
		success: function (data) {
			if(data==1){
				swal({
					title: 'Great job!! ',
					text: 'This service is assigned to you!!',
					icon: 'success',
				});
				getNewService()
			}
			else if(data==0){
				swal({
					title: 'sorry!! ',
					text: 'something went wrong!!',
					icon: 'error',
				});
			}
		}
	})
})
// $('#pet_checkbox').on('change', function() {
// 	if ($(this).is(':checked')) {
// 	  $.fn.dataTable.ext.search.push(
// 		function(settings, data, dataIndex) {  
// 		   return data[0] > 27
// 		}
// 	  )
// 	} else {
// 	  $.fn.dataTable.ext.search.pop()
// 	}
// 	table.draw()
//   })
function getNewService(){
	var myTable = $('#newServiceTable').DataTable();
		$.ajax({
			type: "GET",
			url: "?controller=UpcomingService&function=getNewService",
			datatype: "json",
			beforeSend: function () {
				$('#loader').removeClass('hidden')
			},
			success: function (data) {
				obj = JSON.parse(data);
				if (typeof obj === "object") {
					var len = obj.length;


					myTable.clear().draw();
					for (var i = 0; i < len; i++) {

						
						let d = new Date(obj[i].ServiceStartDate);
						let subtotal = obj[i].ServiceHours;
						let hour = ("0" + d.getHours()).slice(-2);
						let minute = ("0" + d.getMinutes()).slice(-2);
						let add = ("0" + (Number(hour) + Number(subtotal))).slice(-2);;
						let time = hour + ":" + minute + " - " + add + ":00";
						var date = d.getDate();
						var month = d.getMonth();
						var year = d.getFullYear();
						var dateString = date + "-" + ("0" + (month + 1)).slice(-2) + "-" + year;

						myTable.row.add($(`<tr>
											<td>
											<div class="tdHead d-flex align-items-center justify-content-center">
											<input type="hidden" class="serviceid" name="serviceid" value="${obj[i].ServiceRequestId}"/>
											<h5 class="service-id" style="width:75px;">${obj[i].ServiceId}</h5>
										</div>
							
											
													</td>
													<td>
													<div class="tdHead service_detail d-flex align-items-center justify-content-start" style="width:7rem;"  type="button" data-toggle="modal" data-target="#servicedetail_btn" >
													<img src="./assets/Images/calender.png" />
															<h5 class="datenew">${dateString}</h5>
														</div>
														<img src="./assets/Images/clock.png" />
														<span class="timing">${time}</span>
													</td>
												<td class="w-25">
													<div class="customerdetail  align-items-center justify-content-start">
													<span class="custname">${obj[i].FirstName} ${obj[i].LastName} <br></span><span>${obj[i].AddressLine1} ${obj[i].AddressLine2} ${obj[i].City} ${obj[i].PostalCode} 
													</span>
													</div>
												</td>
											
												<td><span class="paymentAmount d-xs-inline-block d-sm-block "><span class="paymentSign">€</span>${obj[i].TotalCost}</span></td>
												<td></td>
													<td class="action d-flex justify-content-around">
													<button class="accept position-relative d-flex align-items-center justify-content-center rounded-pill text-nowrap service_detail" type="button" data-toggle="modal" data-target="#servicedetail_btn" >Accept</button>
													
													</td>
												</tr>`)).draw();


					}
				}
			},
			complete: function () {
				$('#loader').addClass('hidden')
			}
		});
}
function newservice(){
	$('.newservice_btn').css('background','#146371');
	$(".newservicereq").show();
	$(".mysetting,.upcoming_service,.dashboard,.service_schedule,.service_history,.my_ratings,.block_customer").hide();
	$('.dashboard_btn,.upcomingservice_btn,.schedule_btn,.shistory_btn,.blockcust_btn,.ratings_btn').css('background','none');
	getNewService();
}
$(document).on("click",".newservice_btn",function(){
	newservice();
})
$(document).on("click", ".service_detail", function () {


	var date = $(this).closest('tr').find(".datenew").text();
	var time = $(this).closest('tr').find(".timing").text();
	var datetime = date + " " + time;
	var serviceid = $(this).closest('tr').find(".service-id").text();
	var service = $(this).closest('tr').find(".serviceid").val();
	var amount = $(this).closest('tr').find(".paymentAmount").text();
	var custname = $(this).closest('tr').find(".custname").text();
	var sid=$(this).closest('tr').find(".serviceid").val();


	$(".date_time").text(datetime);
	$(".service_id").text(serviceid);
	$(".net_amount").text(amount);
	$(".cust_name").text(custname);
	$(".service_id").val(sid);

	$.ajax({
		type: "POST",
		url: "?controller=Servicehistory&function=service_detail",
		datatype: "json",
		data: { serviceid: service },
		beforeSend: function () {
			$('#loader').removeClass('hidden')
		},
		success: function (data) {
			var obj = JSON.parse(data);
			var len = obj.length;


			for (var i = 0; i < len; i++) {
				var eservice = obj[i].ServiceExtraId;
				var array = Array.from(eservice.toString()).map(Number);

				var array1 = [];
				if (array.includes(1)) {
					array1.push("Inside cabinets");
				}
				if (array.includes(2)) {
					array1.push("Inside fridge");
				}
				if (array.includes(3)) {
					array1.push("Inside oven");
				}
				if (array.includes(4)) {
					array1.push("laundry wash & dry");
				}
				if (array.includes(5)) {
					array1.push("Interiors Windows");
				}

				let comments = obj[i].HasPets;
				if (comments == 1) {
					var dta = "I Have Pet At Home"
				}
				else if (comments == 0) {
					var dta = "I Don't Have Pet At Home"
				}

				var address = obj[i].AddressLine1 + " " + obj[i].AddressLine2 + " " + obj[i].City + " " + obj[i].PostalCode;

				$(".duration").text(obj[i].SubTotal);
				$(".extra_service").text(array1);
				$(".service_address").text(address);
				$(".service_mobile").text(obj[i].Mobile);
				$(".service_email").text(obj[i].Email);
				$(".service_comment").text(obj[i].Comments);
				$(".service_pet").text(dta);
		
			}

		},
		complete: function () {
			$('#loader').addClass('hidden')
		}
	})

})
function schedule_service(){
	$('.schedule_btn').css('background','#146371');
	$(".service_schedule").show();
	$(".mysetting,.upcoming_service,.dashboard,.newservicereq,.service_history,.my_ratings,.block_customer").hide();
	$('.dashboard_btn,.upcomingservice_btn,.newservice_btn,.shistory_btn,.blockcust_btn,.ratings_btn').css('background','none');
}
$(document).on("click",".schedule_btn",function(){
	schedule_service();
})
function getservicehistory(){
	var myTable = $('#servicehistoryTable').DataTable();
		$.ajax({
			type: "GET",
			url: "?controller=UpcomingService&function=getservice_history",
			datatype: "json",
			beforeSend: function () {
				$('#loader').removeClass('hidden')
			},
			success: function (data) {
				obj = JSON.parse(data);
				if (typeof obj === "object") {
					var len = obj.length;


					myTable.clear().draw();
					for (var i = 0; i < len; i++) {

						
						let d = new Date(obj[i].ServiceStartDate);
						let subtotal = obj[i].ServiceHours;
						let hour = ("0" + d.getHours()).slice(-2);
						let minute = ("0" + d.getMinutes()).slice(-2);
						let add = ("0" + (Number(hour) + Number(subtotal))).slice(-2);;
						let time = hour + ":" + minute + " - " + add + ":00";
						var date = d.getDate();
						var month = d.getMonth();
						var year = d.getFullYear();
						var dateString = date + "-" + ("0" + (month + 1)).slice(-2) + "-" + year;

						myTable.row.add($(`<tr>
											<td>
											<div class="tdHead d-flex align-items-center justify-content-start">
											<input type="hidden" class="serviceid" name="serviceid" value="${obj[i].ServiceRequestId}"/>
											<h5 class="service-id" style="width:75px;">${obj[i].ServiceId}</h5>
										</div>
							
											
													</td>
													<td >
													<div class="service_detail tdHead  d-flex align-items-center justify-content-center" style="width:7rem;"  type="button" data-toggle="modal" data-target="#servicedetail_btn2" >
													<img src="./assets/Images/calender.png" />
															<h5 class="datenew">${dateString}</h5>
														</div>
														
														<img src="./assets/Images/clock.png" />
														<span class="timing">${time}</span>
													</td>
													<td class="d-none paymentAmount">${obj[i].TotalCost}</td>
												<td class="w-25">
													<div class="customerdetail  align-items-center justify-content-start">
													<span class="custname">${obj[i].FirstName} ${obj[i].LastName} <br></span><span>${obj[i].AddressLine1} ${obj[i].AddressLine2} ${obj[i].City} ${obj[i].PostalCode} 
													</span>
													</div>
												</td>
											
												
												</tr>`)).draw();


					}
				}
			},
			complete: function () {
				$('#loader').addClass('hidden')
			}
		});
}
function service_history(){
	$('.shistory_btn').css('background','#146371');
	$(".service_history").show();
	$(".mysetting,.upcoming_service,.dashboard,.newservicereq,.service_schedule,.my_ratings,.block_customer").hide();
	$('.dashboard_btn,.upcomingservice_btn,.newservice_btn,.schedule_btn,.blockcust_btn,.ratings_btn').css('background','none');
	getservicehistory();
}
$(document).on("click",".shistory_btn",function(){
	service_history();
})
function getrating_data(){
	var myTable = $('#mytable4').DataTable();
	
		$.ajax({
			type: "GET",
			url: "?controller=UpcomingService&function=getratingdata",
			datatype: "json",
			beforeSend: function () {
				$('#loader').removeClass('hidden')
			},
			success: function (data) {
				obj = JSON.parse(data);
				console.log(obj);
				if (typeof obj === "object") {
					var len = obj.length;

					myTable.clear().draw();
					for (var i = 0; i < len; i++) {

						
						let d = new Date(obj[i].ServiceStartDate);
						let subtotal = obj[i].ServiceHours;
						let hour = ("0" + d.getHours()).slice(-2);
						let minute = ("0" + d.getMinutes()).slice(-2);
						let add = ("0" + (Number(hour) + Number(subtotal))).slice(-2);;
						let time = hour + ":" + minute + " - " + add + ":00";
						var date = d.getDate();
						var month = d.getMonth();
						var year = d.getFullYear();
						var dateString = date + "-" + ("0" + (month + 1)).slice(-2) + "-" + year;
						var avg1 = Number(obj[i].Ratings);
						var avg = avg1.toFixed(2);
						let star = Math.round(avg);
						let remainning = 5 - star;
						var starfilled = "";
						var starfilled1 = "";
						for (let i = 0; i < star; i++) {
							starfilled += '<img src="./assets/Images/starFilled.svg"/>';

						}
						for (let i = 0; i < remainning; i++) {
							starfilled1 += '<img src="./assets/Images/starUnfilled.svg"/>';
						}
						myTable.row.add($(`<tr>
						<td>
						<h5 class="card-title">${obj[i].ServiceId}</h5>
						<h6 class="card-subtitle mb-2 text-muted">${obj[i].FirstName} ${obj[i].LastName} </h6>
		
						
								</td>
								<td >
								<div class="service_detail tdHead  d-flex align-items-center justify-content-center" style="width:7rem;">
								<img src="./assets/Images/calender.png" />
										<h5 class="datenew">${dateString}</h5>
									</div>
									
									<img src="./assets/Images/clock.png" />
									<span class="timing">${time}</span>
								</td>
								<td>
								<div>Ratings</div>
								<div class="customerdetail  align-items-center justify-content-start">
								${starfilled}${starfilled1}  ${avg}
								</span>
								</div>
							</td>
						
								<td>

							<p>Customer Comments</p>
							${obj[i].Comments==null ? " ": obj[i].Comments}
							</td>
							
							
							</tr>`)).draw();


					// 	$(".my_ratings").append(`
						
					// 	<div class="divContent mb-2" >
					// 	 <div class="card m-20" style="width: auto; box-shadow: 0 0 6px rgb(0 0 0 / 25%);">
					// 		 <div class="card-body">
					// 			 <div class="row">
					// 				 <div class="col-sm-3">
					// 					 <h5 class="card-title">${obj[i].ServiceId}</h5>
					// 					 <h6 class="card-subtitle mb-2 text-muted">${obj[i].FirstName} ${obj[i].LastName} </h6>
					// 				 </div>
					// 				 <div class="col-sm-6">
					// 					 <div><img src="./assets/Images/calender.png" />&nbsp;<b>${dateString}</b></div>
					// 					 <div><img src="./assets/Images/clock.png" />&nbsp;${time}</div>
					// 				 </div>
					// 				 <div class="col-sm-3">
					// 					 <span>ratings</span>
					// 					 <div class="td-rating" >
					// 						 <div class="rating-info">
					// 							 <div class="info-ratings">
					// 								${starfilled}${starfilled1}  ${avg}
													
					// 							 </div>
					// 						 </div>
					// 					 </div>
					// 				 </div>
					// 			 </div>
					// 		 <hr>
					// 		 <p>Customer Comments</p>
					// 		 <strong>
					// 		${obj[i].Comments==null ? " ": obj[i].Comments}
					// 		</strong>
					// 		 </div> 
					// 	 </div>
						 
					//  </div>
					
					// 	`);
					
					
					}
				}
			},
			complete: function () {
				$('#loader').addClass('hidden')
			}
		});
}
function rating(){
	$('.ratings_btn').css('background','#146371');
	$(".my_ratings").show();
	$(".mysetting,.upcoming_service,.dashboard,.newservicereq,.service_schedule,.service_history,.block_customer").hide();
	$('.dashboard_btn,.upcomingservice_btn,.newservice_btn,.schedule_btn,.blockcust_btn,.shistory_btn').css('background','none');
	getrating_data();
}
$(document).on("click",".ratings_btn",function(){
	rating();
})
function block_customer(){
	$('.blockcust_btn').css('background','#146371');
	$(".block_customer").show();
	$(".mysetting,.upcoming_service,.dashboard,.newservicereq,.service_schedule,.service_history,.my_ratings").hide();
	$('.dashboard_btn,.upcomingservice_btn,.newservice_btn,.schedule_btn,.ratings_btn,.shistory_btn').css('background','none');
}
$(document).on("click",".blockcust_btn",function(){
	block_customer();
})
// ###############################################################################################################
function getUpcomingService(){
	var myTable = $('#upcomingHistoryTable').DataTable();
		$.ajax({
			type: "GET",
			url: "?controller=UpcomingService&function=getUpcomingService",
			datatype: "json",
			beforeSend: function () {
				$('#loader').removeClass('hidden')
			},
			success: function (data) {
				obj = JSON.parse(data);
				if (typeof obj === "object") {
					var len = obj.length;


					myTable.clear().draw();
					for (var i = 0; i < len; i++) {

						
						let d = new Date(obj[i].ServiceStartDate);
						let subtotal = obj[i].ServiceHours;
						let hour = ("0" + d.getHours()).slice(-2);
						let minute = ("0" + d.getMinutes()).slice(-2);
						let add = ("0" + (Number(hour) + Number(subtotal))).slice(-2);;
						let time = hour + ":" + minute + " - " + add + ":00";
						var date = d.getDate();
						var month = d.getMonth();
						var year = d.getFullYear();
						var dateString = date + "-" + ("0" + (month + 1)).slice(-2) + "-" + year;
						

						myTable.row.add($(`<tr>
											<td>
											<div class="tdHead d-flex align-items-center justify-content-center">
											<input type="hidden" class="serviceid" name="serviceid" value="${obj[i].ServiceRequestId}"/>
											<h5 class="service-id" style="width:75px;">${obj[i].ServiceId}</h5>
											
										</div>
							
											
													</td>
													<td>
													<div class="tdHead service_detail d-flex align-items-center justify-content-start" style="width:7rem;"  type="button" data-toggle="modal" data-target="#servicedetail_upcoming" >
													<img src="./assets/Images/calender.png" />
															<h5 class="datenew">${dateString}</h5>
														</div>
														<img src="./assets/Images/clock.png" />
														<span class="timing">${time}</span>
													</td>
												<td class="w-25">
													<div class="customerdetail  align-items-center justify-content-start">
													<span class="custname">${obj[i].FirstName} ${obj[i].LastName} <br></span><span>${obj[i].AddressLine1} ${obj[i].AddressLine2} ${obj[i].City} ${obj[i].PostalCode} 
													</span>
													</div>
												</td>
											
												<td><span class="paymentAmount d-xs-inline-block d-sm-block "><span class="paymentSign">€</span>${obj[i].TotalCost}</span></td>
												<td></td>
													<td class="action d-flex justify-content-around">
													<button class="cancel position-relative d-flex align-items-center justify-content-center rounded-pill text-nowrap service_detail" type="button" data-toggle="modal" data-target="#servicedetail_upcoming">Cancel</button>
													
													</td>
												</tr>`)).draw();


					}
				}
			},
			complete: function () {
				$('#loader').addClass('hidden')
			}
		});

}
function upcoming_service(){

	$('.upcomingservice_btn').css('background','#146371');
	$(".upcoming_service").show();
	$(".mysetting,.block_customer,.dashboard,.newservicereq,.service_schedule,.service_history,.my_ratings").hide();
	$('.dashboard_btn,.blockcust_btn,.newservice_btn,.schedule_btn,.ratings_btn,.shistory_btn').css('background','none');
	getUpcomingService()
}
getUpcomingService();
$(document).on("click","#cancel_btn",function(){
	var serviceid=$(".service_id").val();
	$.ajax({
		type: "POST",
		url: "?controller=UpcomingService&function=cancelService",
		datatype: "json",
		data:{serviceid:serviceid},
		beforeSend: function () {
			$('#loader').removeClass('hidden')
		},
		success: function (data) {
			if(data==1){
				swal({
					title: 'Great job!! ',
					text: 'This service is successfully cancel!',
					icon: 'success',
				});
				getUpcomingService();
			}
			else if(data==0){
				swal({
					title: 'sorry!! ',
					text: 'something went wrong!!',
					icon: 'error',
				});
			}
		}
	})
})
$(document).on("click","#complete_btn",function(){
	var serviceid=$(".service_id").val();
	$.ajax({
		type: "POST",
		url: "?controller=UpcomingService&function=completeservice",
		datatype: "json",
		data:{serviceid:serviceid},
		beforeSend: function () {
			$('#loader').removeClass('hidden')
		},
		success: function (data) {
			if(data==1){
				swal({
					title: 'Great job!! ',
					text: 'This service is successfully complete!',
					icon: 'success',
				});
				getUpcomingService();
			}
			else if(data==0){
				swal({
					title: 'sorry!! ',
					text: 'something went wrong!!',
					icon: 'error',
				});
			}
		}
	})
})
$(document).on("click",".upcomingservice_btn",function(){
	upcoming_service();
})

$(document).on("click",".newservice",function(){
	$('.newservice_btn').css('background','#146371');
	$(".newservicereq").show();
	$(".mysetting,.block_customer,.dashboard,.service_schedule,.service_history,.my_ratings").hide();
	$('.dashboard_btn,.blockcust_btn,.upcomingservice_btn,.schedule_btn,.ratings_btn,.shistory_btn').css('background','none');
})