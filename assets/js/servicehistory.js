var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
var popoverList = popoverTriggerList.map((popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl));

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map((tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl));


var verticalNavbar = document.querySelector(".verticalNavbar");
var navMenu = document.querySelector(".fullPage");
var fullPageHidden = document.querySelector(".fullPageHidden");
var navbarHamburger = document.querySelector(".navSm .tgle_class");

verticalNavbar.style.minHeight = `${window.innerHeight - document.querySelector("nav").clientHeight - document.querySelector("heading") - 60}px`;

navbarHamburger.addEventListener("click", () => navMenu.classList.add("open"));
fullPageHidden.addEventListener("click", () => navMenu.classList.remove("open"));



window.addEventListener("resize", () => {
	verticalNavbar.style.minHeight = `${window.innerHeight - document.querySelector("nav").clientHeight - document.querySelector("heading") - 60}px`;
});

// ##########################################################################################################
// datatable

var dt = new DataTable(".serviceHistoryTable", {
	dom: "Blfrtip",
	responsive: false,
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
	columnDefs: [{ orderable: false, targets: [4] }],
});
var dt = new DataTable(".serviceHistoryTable2", {
	dom: "Blfrtip",
	responsive: false,
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
	columnDefs: [{ orderable: false, targets: [4, 5] }],
});
var dt = new DataTable(".address_table", {
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
	columnDefs: [{ orderable: false }],
});
var dt = new DataTable("#fav_provider", {
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
	columnDefs: [{ orderable: false }],
});

var dataTables_length = document.querySelector(".dataTables_length");
$(".dataTables_length").insertAfter(".dataTable");
$(".tableHeader").insertAfter(".dt-buttons");

// ##########################################################################################################

$(document).ready(function () {

	// ##########################################################################################################
	// rateyo
	$(function () {

		$(".rateyo").rateYo({
			starWidth: "20px"
		});

	});
	$(function () {
		$(".part1").rateYo().on("rateyo.change", function (e, data) {


			$(".ontime").val(data.rating);
		});
		$(".part2").rateYo().on("rateyo.change", function (e, data) {


			$(".friendly").val(data.rating);
		});
		$(".part3").rateYo().on("rateyo.change", function (e, data) {


			$(".qos").val(data.rating);
		});



	});
	// ###################################################################################################################
	// date conversion

	function date_string(date, total) {
		let d = new Date(date);
		let subtotal = total;
		var str = subtotal.toString();
		var numarray = str.split('.');
		var a = new Array();
		a = numarray;
		var first = Number(a[0]);
		var second = Number(a[1]);
		if (second == 50) {
			var min_first = 30;
		}
		else {
			var min_first = 00;
		}
		var hour = ("0" + d.getHours()).slice(-2);
		var minute = ("0" + d.getMinutes()).slice(-2);
		var hr = ("0" + (Number(hour) + Number(first))).slice(-2);
		var min = ("0" + (Number(minute) + Number(min_first))).slice(-2);
		if (min >= 60) {
			var min = ("0" + (Number(min) - 60)).slice(-2);
			var hr = Number(hr) + 1;
		}
		var date = d.getDate();
		var month = d.getMonth();
		var year = d.getFullYear();


		dateString = ("0" + date).slice(-2) + "-" + ("0" + (month + 1)).slice(-2) + "-" + year;
		time = hour + ":" + minute + " - " + hr + ":" + min;
	}

	// ###################################################################################################################
	// mysetting tab
	function getdetail() {
		$.ajax({
			type: "GET",
			url: "?controller=Servicehistory&function=getdetail",
			datatype: "json",
			beforeSend: function () {
				$('#loader').removeClass('hidden')
			},
			success: function (data) {
				obj = JSON.parse(data);
				if (typeof obj === "object") {
					var len = obj.length;
					for (var i = 0; i < len; i++) {
				
						if(obj[i].DateOfBirth != null){
							var currentDate = new Date(obj[i].DateOfBirth);
							var date = currentDate.getDate();
							var month = currentDate.getMonth();
							var year = currentDate.getFullYear();
							var dateString = year + "-" + ("0" + (month + 1)).slice(-2) + "-" + ("0" + date).slice(-2);
							$("#birthdate").val(dateString);
						}
						
					
						$("#fname").val(obj[i].FirstName);
						$("#lname").val(obj[i].LastName);
						$("#email").val(obj[i].Email);
						$("#mobile_2").val(obj[i].Mobile);
						
						$("#language").val(obj[i].LanguageId);
					}
					$("#tab1").show();
					$("#btn1").css('border-bottom', '3px solid #1d7a8c');
					$('.servicebtn').css('background', 'none');
					$('.favourite').hide();
					$('.service_history').hide();
					$('.dashboard').hide();
					$(".mysetting").show();
					$("#tab2").hide();
					$("#tab3").hide();
				} else if (data == 0) {
					Swal.fire({
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

	};
	$(document).on("click", "#update_detail", function (e) {
		e.preventDefault();
		var fname = $("#fname").val();
		var lname = $("#lname").val();
		var email = $("#email").val();
		var mobile = $("#mobile_2").val();
		var birthdate = $("#birthdate").val();

		if ((fname === "") || (email === "") || (mobile === "") || (lname === "") || (birthdate === "")) {
			Swal.fire({
				title: 'sorry!! ',
				text: 'Please enter all the fields!!',
				icon: 'warning',
			});
		}
		else {
			$.ajax({
				type: "POST",
				url: "?controller=Servicehistory&function=update_detail",
				datatype: "json",
				data: $("#form-1").serialize(),
				beforeSend: function () {
					$('#loader').removeClass('hidden')
				},
				success: function (data) {
					if (data == 1) {
						getdetail();
						Swal.fire({
							title: 'Great job!! ',
							text: 'Data updated successfully!!',
							icon: 'success',
						});
					} else if (data == 0) {
						Swal.fire({
							title: 'sorry!! ',
							text: 'something went wrong!!',
							icon: 'error',
						});
					}
				},
				complete: function () {
					$('#loader').addClass('hidden')
				},
			});
		}
	});
	$(document).on("click", ".mysettingbtn", function () {
		getdetail();
		$('.dashboardbtn').css('background', 'none');
		$('.favouritebtn').css('background', 'none');
	});
	function getaddress() {
		var myTable = $('.address_table').DataTable();
		$.ajax({
			type: "POST",
			url: "?controller=Servicehistory&function=getaddress",
			datatype: "json",
			data: $("#form-2").serialize(),
			beforeSend: function () {
				$('#loader').removeClass('hidden')
			},
			success: function (data) {
				obj = JSON.parse(data);
				if (typeof obj === "object") {
					var len = obj.length;
					
					
					myTable.clear().draw();
					for (var i = 0; i < len; i++) {
						myTable.row.add($(`<tr class='align-middle'> 
						<th scope='row'> <input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios1' value='option1'>
						</th>
						<td class='text-left' style='width:60%;'>
                            <input type='hidden' class='AddressId' value="${obj[i].AddressId}"/>
                            <input type='hidden' class='AddressLine1' value="${obj[i].AddressLine1}" />
                            <input type='hidden' class='AddressLine2' value="${obj[i].AddressLine2}" />
                            <input type='hidden' class='City' value="${obj[i].City}" />
                            <input type='hidden' class='PostalCode' value="${obj[i].PostalCode}"/>
                            <input type='hidden' class='Mobile'value="${obj[i].Mobile}"/>
        
                            <span style='font-weight: bold;'>Address:</span><span class='address_data'> ${obj[i].AddressLine1} ${obj[i].AddressLine2} ${obj[i].City} ${obj[i].PostalCode} </span>
                            <br><span style='font-weight: bold;'>Phone Number:</span><span class='phone_data'> ${obj[i].Mobile}</span>
                        </td>
                        <td class='text-center'><a class='editbtn py-2' data-toggle='modal' data-target='#exampleModal2'><img src='./assets/Images/editing.png' style='width:2rem;cursor:pointer;'/></a>
                            <a type='button'  id='deletebtn'><img src='./assets/Images/delete.png' style='width:2rem;'/></a>
                        </td>
        
                        </tr>`)).draw();

					}
					$("#tab2").show();
				}
				else if (data == 0) {
					myTable.clear().draw(); 
					// myTable.destroy();
					// Swal.fire({
					// 	title: 'sorry!! ',
					// 	text: 'Address list is empty!!',
					// 	icon: 'warning',
					// });
				}
			},
			complete: function () {
				$('#loader').addClass('hidden')
			}
		});

	}
	$(document).on("click", ".editbtn", function () {

		var addresslin1 = $(this).closest('tr').find(".AddressLine1").val();
		var addresslin2 = $(this).closest('tr').find(".AddressLine2").val();
		var city = $(this).closest('tr').find(".City").val();
		var postal = $(this).closest('tr').find(".PostalCode").val();
		var mobile = $(this).closest('tr').find(".Mobile").val();
		var AddressId = $(this).closest('tr').find(".AddressId").val();
		$("#addressline1").val(addresslin1);
		$("#addressline2").val(addresslin2);
		$("#postal").val(postal);
		$("#city").val(city);
		$("#mobile").val(mobile);
		$("#update-id").val(AddressId);

	});
	$(document).on("click", "#deletebtn", function () {
		Swal.fire({
			title: 'Are you sure?',
			text: "Once deleted, you will not be able to recover your address!",
			icon: "warning",
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
			if (result.isConfirmed) {
				var AddressId = $(this).closest('tr').find(".AddressId").val();
				$.ajax({
					type: "POST",
					url: "?controller=Servicehistory&function=delete_address",
					datatype: "json",
					data: { AddressId: AddressId },
					beforeSend: function () {
						$('#loader').removeClass('hidden')
					},
					success: function (data) {
						if (data == 1) {
							getaddress();
							Swal.fire(
								'Deleted!',
								'Your file has been deleted.',
								'success'
							)
							
						}
						else if (data == 0) {
							Swal.fire(
								'sorry!',
								'something went wrong.',
								'error'
							)
							getaddress()
						}
					},
					complete: function () {
						$('#loader').addClass('hidden')
					}
				})

			}
		})
			;
	});
	$("#btn1").click(function () {
		$("#btn1").css('border-bottom', '3px solid #1d7a8c');
		$("#btn2").css('border-bottom', '3px solid #e1e1e1');
		$("#btn3").css('border-bottom', '3px solid #e1e1e1');
		$("#tab1").show();
		$("#tab2").hide();
		$("#tab3").hide();
		$("#btn1").addClass("implement");
		$("#btn2").removeClass("implement");
		$("#btn3").removeClass("implement");
	});
	$(document).on("click", "#btn2", function () {
		$("#btn2").css('border-bottom', '3px solid #1d7a8c');
		$("#btn1").css('border-bottom', '3px solid #e1e1e1');
		$("#btn3").css('border-bottom', '3px solid #e1e1e1');
		$("#tab1").hide();
		$("#tab2").show();
		$("#tab3").hide();
		$("#btn1").removeClass("implement");
		$("#btn2").addClass("implement");
		$("#btn3").removeClass("implement");
		getaddress();
	});
	$("#btn3").click(function () {
		$("#btn3").css('border-bottom', '3px solid #1d7a8c');
		$("#btn2").css('border-bottom', '3px solid #e1e1e1');
		$("#btn1").css('border-bottom', '3px solid #e1e1e1');
		$("#tab1").hide();
		$("#tab2").hide();
		$("#tab3").show();
		$("#btn1").removeClass("implement");
		$("#btn2").removeClass("implement");
		$("#btn3").addClass("implement");
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
						Swal.fire({
							title: 'Great job!! ',
							text: 'Password change successfully!',
							icon: 'success',
						});
						$(".form-3").trigger('reset');

					}
					else if (data == 0) {
						Swal.fire({
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
			Swal.fire({
				title: 'sorry!! ',
				text: 'Invalid password!!',
				icon: 'warning',
			});
		}
	});
	$(document).on("click", "#add_address", function (e) {

		e.preventDefault();
		var addressline1 = $("#address1").val();
		var addressline2 = $("#address2").val();
		var postal = $("#zip").val();
		var city = $("#location").val();
		var mobile = $("#phone").val();
		if ((addressline1 === "") || (addressline2 === "") || (postal === "") || (city === "") || (mobile === "")) {
			Swal.fire({
				title: 'sorry!! ',
				text: 'Please enter all the fields!!',
				icon: 'warning',
			});
		}
		else {

			$.ajax({
				type: "POST",
				url: "?controller=Servicehistory&function=add_address",
				datatype: "json",
				data: $("#form-4").serialize(),
				beforeSend: function () {
					$('#loader').removeClass('hidden')
				},
				success: function (data) {
					if (data == 1) {
						getaddress();
						$("#form-4").trigger('reset');
						Swal.fire({
							title: 'Great Job!! ',
							text: 'Address added successfully!!',
							icon: 'success',
						});
					}
					else if (data == 0) {
						Swal.fire({
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

	});
	$(document).on("click", "#update_data", function (e) {

		e.preventDefault();
		var addressline1 = $("#addressline1").val();
		var addressline2 = $("#addressline2").val();
		var postal = $("#postal").val();
		var city = $("#city").val();
		var mobile = $("#mobile").val();
		if ((addressline1 === "") || (addressline2 === "") || (postal === "") || (city === "") || (mobile === "")) {
			Swal.fire({
				title: 'sorry!! ',
				text: 'Please enter all the fields!!',
				icon: 'warning',
			});
		}
		else {
			$.ajax({
				type: "POST",
				url: "?controller=Servicehistory&function=update_address",
				datatype: "json",
				data: $("#form-2").serialize(),
				beforeSend: function () {
					$('#loader').removeClass('hidden')
				},
				success: function (data) {
					if (data == 1) {
						getaddress();
						Swal.fire({
							title: 'Great Job!! ',
							text: 'Address updated successfully!!',
							icon: 'success',
						});

					}
					else if (data == 0) {
						Swal.fire({
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
	});
	// ############################################################################################################################	 
	// dashboard tab

	function onload_dashboard() {
		var myTable = $('#dashboard_data').DataTable();
		$.ajax({
			type: "GET",
			url: "?controller=Servicehistory&function=dashboard",
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



						date_string(obj[i].ServiceStartDate, obj[i].SubTotal);

						if (obj[i].ServiceProviderId == null) {

							myTable.row.add($(`<tr>
											<td>
											<div class="tdHead d-flex align-items-center justify-content-start">
											<input type="hidden" class="serviceid" name="serviceid" value="${obj[i].ServiceRequestId}"/>
											<input type="hidden" class="subtotal" name="subtotal" value="${obj[i].SubTotal}"/>
											<h5 class="service-id">${obj[i].ServiceId}</h5>
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
													<td><div class="serviceProvider d-flex align-items-center justify-content-start">
													 
													<div class="serviceProviderInfo">
														
													</div>
												</div></td>
												<td><span class="paymentAmount d-xs-inline-block d-sm-block "><span class="paymentSign">€</span>${obj[i].TotalCost}</span></td>

													<td class="action d-flex justify-content-around">
													<button class="re_id dateandtime position-relative d-flex align-items-center justify-content-center rounded-pill text-nowrap" type="button" data-toggle="modal" data-target="#reshedule">Reshedule</button>
													<button class="cancel position-relative d-flex align-items-center justify-content-center rounded-pill text-nowrap" type="button" data-toggle="modal" data-target="#cancel_service" id="cancel_servicereq">Cancel</button>
													</td>
												</tr>`)).draw();
						}
						else {
							var avg1 = Number(obj[i][0].AverageRating);
							var avg = avg1.toFixed(2);
							// var name = obj[i][0].Fullname;
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
												<div class="tdHead d-flex align-items-center justify-content-start">
												<input type="hidden" class="serviceid" name="serviceid" value="${obj[i].ServiceRequestId}"/>
												<input type="hidden" class="serviceproviderid" name="serviceproviderid" value="${obj[i].ServiceProviderId}"/>
												<h5 class="service-id">${obj[i].ServiceId}</h5>
												<input type="hidden" class="subtotal" name="subtotal" value="${obj[i].SubTotal}"/>
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
														<td ><div class="serviceProvider d-flex align-items-center justify-content-start">
								<img class="rounded-circle" src="./assets/Images/${obj[i].UserProfilePicture}.png" />
								<div class="serviceProviderInfo">
									<div class="serviceProviderName" >${obj[i].FullName}</div>
									<div class="feedback d-flex align-items-center justify-content-center">
									${starfilled}${starfilled1}
									 ${avg}
									</div>
								</div>
							</div></td>
														
														
													<td><span class="paymentAmount d-xs-inline-block d-sm-block "><span class="paymentSign">€</span>${obj[i].TotalCost}</span></td>
	
														<td class="action d-flex justify-content-around">
														<button class="re_id dateandtime position-relative d-flex align-items-center justify-content-center rounded-pill text-nowrap" type="button" data-toggle="modal" data-target="#reshedule">Reshedule</button>
														<button class="cancel position-relative d-flex align-items-center justify-content-center rounded-pill text-nowrap" type="button" data-toggle="modal" data-target="#cancel_service" id="cancel_servicereq">Cancel</button>
														</td>
													</tr>`)).draw();
						}


					}
				}
			},
			complete: function () {
				$('#loader').addClass('hidden')
			}
		});
	}
	onload_dashboard();
	$(document).on("click", ".dashboardbtn", function () {
		$('.favourite').hide();
		$(".mysetting").hide();
		$('.service_history').hide();
		$('.dashboard').show();
		$('.dbtn').css('background', '#146371');
		$('.sbtn').removeClass('active');
		$('.fbtn').css('background', 'none');
		$('.servicebtn').css('background', 'none');
		onload_dashboard();



	})

	$(document).on("click", '.re_id', function () {

		var serviceid = $(this).closest('tr').find(".serviceid").val();
		var serviceid_display = $(this).closest('tr').find(".service-id").text();

		var spid = $(this).closest('tr').find(".serviceproviderid").val();
		var time1 = $(this).closest('tr').find(".timing").text();
		var tim1 = time1.split("-");
		var date11 = $(this).closest('tr').find(".datenew").text();
		var subtotal = $(this).closest('tr').find(".subtotal").val();
		var parts = date11.split('-');
		var mydate = parts[2] + "-" + parts[1] + "-" + parts[0];

	
		console.log(subtotal);
		var first=tim1[0].trim();
		// var second=tim1[1].trim();
		// var final=Number(second[0],trim())-Number(first[0].trim())+":"+Number(second[1].trim())-Number(first[1].trim());
		// console.log(first);

		// hide previous date
		var dtToday = new Date();
		var month = dtToday.getMonth() + 1;
		var day = dtToday.getDate();
		var year = dtToday.getFullYear();
		if (month < 10)
			month = '0' + month.toString();
		if (day < 10)
			day = '0' + day.toString();
		var maxDate = year + '-' + month + '-' + day;
		

		if (spid != undefined) {
			$(".sp_id").val(spid);
		}
		$('#dates').attr('min', maxDate);
		$(".service_id").val(serviceid);
		$(".serviceid_display").val(serviceid_display);

		$("#dates").val(mydate);
		$("#times").val(first);
		$("#subtotal_modal").val(subtotal);


	})
	$(document).on("click", "#reschedule_btn", function () {

		$.ajax({
			type: "POST",
			url: "?controller=Servicehistory&function=reschedule",
			datatype: "json",
			data: $("#reschedule").serialize(),
			beforeSend: function () {
				$('#loader').removeClass('hidden')
			},
			success: function (data) {
	
				if (data==1) {
					onload_dashboard();
					console.log(obj[1]);
					Swal.fire({
						title: 'Great job!! ',
						text: 'Data updated successfully!!',
						icon: 'success',
					});
				}
				else if (data == 0) {
					Swal.fire({
						title: 'sorry!! ',
						text: 'service provider has already assign the service at that time!!',
						icon: 'error',
					});
				}
			},
			complete: function () {
				$('#loader').addClass('hidden')
			}
		})
	})
	// ############################################################################################################################	 
	// servicehistory tab
	function onload_service() {
		var myTable = $('#service_data').DataTable();
		$.ajax({
			type: "GET",
			url: "?controller=Servicehistory&function=service_datafind",
			datatype: "json",
			beforeSend: function () {
				$('#loader').removeClass('hidden')
			},
			success: function (data) {
				// console.log(data);
				obj = JSON.parse(data);
				if (typeof obj === "object") {
					var len = obj.length;


					myTable.clear().draw();
					for (var i = 0; i < len; i++) {

						date_string(obj[i].ServiceStartDate, obj[i].SubTotal);

						if (obj[i].Status == 3) {
							var disabled = "disabled";
							var color = "color_cancel";
							var tooltip = "rateactive2";
						} else if (obj[i].Status == 1) {
							var disabled = "";
							var color = "color_complete";
							var tooltip = "rateactive";
						}
						if (obj[i].ServiceProviderId != null) {
							var avg1 = Number(obj[i][0].AverageRating);
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

							if (obj[i][1] != undefined) {
								var classadd = "disabled";
								var color2 = "color_cancel";
								var tooltip = "rateactive2";
							}
							else {
								var classadd = "";
								var color2 = "color_complete";
								var tooltip = "rateactive";
							}

							myTable.row.add($(`<tr>
						<td>
						<div class="tdHead d-flex align-items-center justify-content-start">
						<input type="hidden" class="serviceid" name="serviceid" value="${obj[i].ServiceRequestId}"/>
						<input type="hidden" class="spid" value="${obj[i].ServiceProviderId}"/>
						<h5 class="service-id">${obj[i].ServiceId}</h5>
					</div>
								</td>
								<td style="width:7rem;cursor:pointer;">
								<div  class="tdHead service_detail d-flex align-items-center justify-content-start" data-toggle="modal" data-target="#servicedetail_btn" >
								<img src="./assets/Images/calender.png" />
										<h5 class="datenew">${dateString}</h5>
									</div>
									<img src="./assets/Images/clock.png" />
									<span class="timing">${time}</span>
				
								</td>
								<td ><div class="serviceProvider d-flex align-items-center justify-content-start">
								<img class="rounded-circle" src="./assets/Images/${obj[i][0].UserProfilePicture}.png" />
								<div class="serviceProviderInfo">
									<div class="serviceProviderName" >${obj[i][0].Fullname}</div>
									<div class="feedback d-flex align-items-center justify-content-center">
									${starfilled}${starfilled1}
									${avg}
									</div>
								</div>
							</div></td>
						
								<td><span class="paymentAmount d-xs-inline-block d-sm-block "><span class="paymentSign">€</span>${obj[i].TotalCost}</span></td>
								<td ><span class='status ${obj[i].Status == 3 ? "cancelled'>Cancelled" : "completed'>Completed"}</span></td>
								<td><button class=" ${color2} ${tooltip} rate position-relative d-flex align-items-center justify-content-center rounded-pill text-nowrap"data-toggle="modal" data-target="#rating"${classadd}>Rate SP</button></td>
							</tr>`)).draw();
						}
						else {
							myTable.row.add($(`<tr>
						<td>
						<div class="tdHead d-flex align-items-center justify-content-start">
						<input type="hidden" class="serviceid" name="serviceid" value="${obj[i].ServiceRequestId}"/>
						<h5 class="service-id">${obj[i].ServiceId}</h5>
					</div>
								</td>
								<td style="width:7rem;cursor:pointer;">
								<div  class="tdHead service_detail d-flex align-items-center justify-content-start" data-toggle="modal" data-target="#servicedetail_btn" >
								<img src="./assets/Images/calender.png" />
										<h5 class="datenew">${dateString}</h5>
									</div>
									<img src="./assets/Images/clock.png" />
									<span class="timing">${time}</span>
				
								</td>
								<td ><div class="serviceProvider d-flex align-items-center justify-content-start">
								</td>
						
								<td><span class="paymentAmount d-xs-inline-block d-sm-block "><span class="paymentSign">€</span>${obj[i].TotalCost}</span></td>
								<td ><span class='status ${obj[i].Status == 3 ? "cancelled'>Cancelled" : "completed'>Completed"}</span></td>
								<td><button class=" ${color} ${tooltip} rate position-relative d-flex align-items-center justify-content-center rounded-pill text-nowrap"data-toggle="modal" data-target="#rating"${disabled}>Rate SP</button></td>
							</tr>`)).draw();
						}

					}
				}
			},
			complete: function () {
				$('#loader').addClass('hidden')
			}
		});
	}
	onload_service();
	$(document).on("click", ".rate", function () {
		let name = $(this).closest('tr').find(".serviceProviderName").text().trim();
		let rating1 = $(this).closest('tr').find(".feedback").text().trim();
		let serviceid = $(this).closest('tr').find(".serviceid").val();
		let spid = $(this).closest('tr').find(".spid").val();
		let starhtml = $(this).closest('tr').find(".feedback").html();
		let imgsrc = $(this).closest('tr').find(".rounded-circle").attr('src');


		$(".serviceid_rate").val(serviceid);
		$(".spid_rate").val(spid);
		$(".spname").text(name);
		$(".starval").html(starhtml);
		$(".clean").attr("src", imgsrc);


		$(".avgrate").rateYo({
			readOnly: true,
			rating: rating1

		})

	})
	$(document).on("click", "#update_rating", function () {
		$.ajax({
			type: "POST",
			url: "?controller=Servicehistory&function=update_rating",
			datatype: "json",
			data: $("#update-rating").serialize(),
			beforeSend: function () {
				$('#loader').removeClass('hidden')
			},
			success: function (data) {
				if (data == 1) {
					$("#update-rating").trigger("reset");
					Swal.fire({
						title: 'Great job!! ',
						text: 'Data updated successfully!!',
						icon: 'success',
					});
					onload_service();
				} else if (data == 0) {
					Swal.fire({
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
	})
	$(document).on("click", ".servicebtn", function () {
		$(".mysetting").hide();
		$('.favourite').hide();
		$('.service_history').show();
		$('.dashboard').hide();
		$('.sbtn').css('background', '#146371');
		$('.dbtn').css('background', 'none');
		$('.fbtn').css('background', 'none');
		onload_service();



	})

	$(document).on("click", "#cancel_servicereq", function () {
		var service = $(this).closest('tr').find(".serviceid").val();
		$("#delete_key").val(service);
	})
	$(document).on("click", "#cancel_btn", function () {
		let val = $("#delete_key").val();
		let comment = $(".cancel_comment").text();

		if (typeof comment != null) {
			$.ajax({
				type: "POST",
				url: "?controller=Servicehistory&function=cancel_service",
				datatype: "json",
				data: { serviceid: val },
				beforeSend: function () {
					$('#loader').removeClass('hidden')
				},
				success: function (data) {
					if (data == 1) {
						onload_dashboard();
						Swal.fire({
							title: 'Great job!! ',
							text: 'Your service request has been cancelled!',
							icon: 'success',
						});

					} else if (data == 0) {
						Swal.fire({
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
		else {
			Swal.fire({
				title: 'warning!! ',
				text: 'Please enter something!!',
				icon: 'warning',
			});
		}

	})
	$(document).on("click", ".service_detail", function () {


		var date = $(this).closest('tr').find(".datenew").text();
		var time = $(this).closest('tr').find(".timing").text();
		var datetime = date + " " + time;
		var serviceid = $(this).closest('tr').find(".service-id").text();
		var service = $(this).closest('tr').find(".serviceid").val();
		var amount = $(this).closest('tr').find(".paymentAmount").text();

		$(".date_time").text(datetime);
		$(".service_id").text(serviceid);
		$(".net_amount").text(amount);
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

	// ############################################################################################################################	 
	// favorite provider tab

	function getfp_detail() {
		var myTable = $('#fav_provider').DataTable();
		$.ajax({
			type: "GET",
			url: "?controller=Servicehistory&function=fav_provider",
			datatype: "json",

			success: function (data) {
				obj = JSON.parse(data);
				// console.log(obj[2][2]==undefined);

				if (typeof obj === "object") {
					var len = obj.length;
					$(".fav_data").html("");
					myTable.clear().draw();
					// console.log(obj[i][2].);
					for (var i = 0; i < len; i++) {
						var avg1 = Number(obj[i][1].AverageRating);
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


						if (obj[i][2] == undefined) {
							myTable.row.add($(`<tr>
							<td>
							
							<div class="card m-2" style="width: 16rem;">
						 	<div class="card-body">
								
						 		<input type="hidden" class="spid_card" value="${obj[i].ServiceProviderId}"/>
						 		<div class="fav-img" style="text-align: center;">
						 			<img src="./assets/Images/${obj[i][0].UserProfilePicture}.png" />
						 		</div>
						 		<p class="card-text text-center" style="font-weight: bold;">${obj[i][0].FullName}<br><span>
						 			${starfilled}${starfilled1} ${avg}
						 			</span></p>
						 		<p class="card-text text-center">${obj[i][1].TotalCleaning} Cleanings</p>
						 		<div class="text-center d-flex justify-content-around">
						 		<button class="btn remove addfp_btn ">Favorite</button>
						 	    <button class="btn block addblockfp_btn ">Block</button>
						 		</div>
						 	</div>
						 </div>
							</td>
							
							
							</tr>
							
							`)).draw();

						} else {
							myTable.row.add($(`<tr>
							<td>
							
							<div class="card m-2" style="width: 16rem;">
							 	<div class="card-body">
									
							 		<input type="hidden" class="spid_card" value="${obj[i].ServiceProviderId}"/>
							 		<div class="fav-img" style="text-align: center;">
							 			<img src="./assets/Images/${obj[i][0].UserProfilePicture}.png" />
							 		</div>
							 		<p class="card-text text-center" style="font-weight: bold;">${obj[i][0].FullName}<br><span>
							 			${starfilled}${starfilled1} ${avg}
							 			</span></p>
							 		<p class="card-text text-center">${obj[i][1].TotalCleaning} Cleanings</p>
							 		<div class="text-center d-flex justify-content-around">
							 		${obj[i][2].IsFavorite == 1 ? `<button class="btn remove removefp_btn ">Remove</button>` : `<button class="btn remove addfp_btn">Favorite</button>`}
							 		${obj[i][2].IsBlocked == 0 ? `<button class="btn block addblockfp_btn ">Block</button>` : `<button class="btn block removeblockfp_btn">Unblock</button>`}
										
							 		</div>
							 	</div>
							 </div>
							</td>
							
							
							</tr>
							
							`)).draw();
						}


						// if(obj[i][2]==undefined){
						// 	$(".fav_data").append(`<div class="card m-2" style="width: 16rem;">
						// 	<div class="card-body">

						// 		<input type="hidden" class="spid_card" value="${obj[i].ServiceProviderId}"/>
						// 		<div class="fav-img" style="text-align: center;">
						// 			<img src="./assets/Images/${obj[i][0].UserProfilePicture}.png" />
						// 		</div>
						// 		<p class="card-text text-center" style="font-weight: bold;">${obj[i][0].FullName}<br><span>
						// 			${starfilled}${starfilled1} ${avg}
						// 			</span></p>
						// 		<p class="card-text text-center">${obj[i][1].TotalCleaning} Cleanings</p>
						// 		<div class="text-center d-flex justify-content-around">
						// 		<button class="btn remove addfp_btn ">Favorite</button>
						// 	    <button class="btn block addblockfp_btn ">Block</button>
						// 		</div>
						// 	</div>
						// </div>`);
						// }else{
						// 	$(".fav_data").append(`<div class="card m-2" style="width: 16rem;">
						// 	<div class="card-body">

						// 		<input type="hidden" class="spid_card" value="${obj[i].ServiceProviderId}"/>
						// 		<div class="fav-img" style="text-align: center;">
						// 			<img src="./assets/Images/${obj[i][0].UserProfilePicture}.png" />
						// 		</div>
						// 		<p class="card-text text-center" style="font-weight: bold;">${obj[i][0].FullName}<br><span>
						// 			${starfilled}${starfilled1} ${avg}
						// 			</span></p>
						// 		<p class="card-text text-center">${obj[i][1].TotalCleaning} Cleanings</p>
						// 		<div class="text-center d-flex justify-content-around">
						// 		${obj[i][2].IsFavorite==1 ?	`<button class="btn remove removefp_btn ">Remove</button>`: `<button class="btn remove addfp_btn">Favorite</button>`}
						// 		${obj[i][2].IsBlocked==0  ?	`<button class="btn block addblockfp_btn ">Block</button>`: `<button class="btn block removeblockfp_btn">Unblock</button>`}

						// 		</div>
						// 	</div>
						// </div>`);
						// }


					}
				}
			},
			complete: function () {
				$('#loader').addClass('hidden')
			}
		});
	}
	$(document).on("click", ".favouritebtn", function () {
		$(".mysetting").hide();
		$('.favourite').show();
		$('.service_history').hide();
		$('.dashboard').hide();
		$('.fbtn').css('background', '#146371');
		$('.dbtn').css('background', 'none');
		$('.sbtn').css('background', 'none');
		$('.verticalNavItem').removeClass('active');
		getfp_detail();

	})
	$(document).on("click", ".removefp_btn", function () {
		var spid = $(this).closest(".card-body").find(".spid_card").val();
		$.ajax({
			type: "POST",
			url: "?controller=Servicehistory&function=update_fav_provider",
			datatype: "json",
			data: { spid: spid },

			success: function (data) {
				if (data == 1) {

					getfp_detail();
					Swal.fire({
						title: 'Great job!! ',
						text: 'This Service Provider is Remove successfully!',
						icon: 'success',
					});
				}
				else if (data == 0) {
					Swal.fire({
						title: 'warning!! ',
						text: 'something went wrong!!',
						icon: 'error',
					});
				}
			},
			complete: function () {
				$('#loader').addClass('hidden')
			}
		})

	})
	$(document).on("click", ".addfp_btn", function () {
		var spid = $(this).closest(".card-body").find(".spid_card").val();
		$.ajax({
			type: "POST",
			url: "?controller=Servicehistory&function=add_fav_provider",
			datatype: "json",
			data: { spid: spid },

			success: function (data) {
				if (data == 1) {

					getfp_detail();
					Swal.fire({
						title: 'Great job!! ',
						text: 'This Service Provider is add successfully!',
						icon: 'success',
					});
				}
				else if (data == 0) {
					Swal.fire({
						title: 'warning!! ',
						text: 'something went wrong!!',
						icon: 'error',
					});
				}
			},
			complete: function () {
				$('#loader').addClass('hidden')
			}
		})

	})
	$(document).on("click", ".addblockfp_btn", function () {
		var spid = $(this).closest(".card-body").find(".spid_card").val();
		$.ajax({
			type: "POST",
			url: "?controller=Servicehistory&function=addblock_fav_provider",
			datatype: "json",
			data: { spid: spid },

			success: function (data) {
				if (data == 1) {

					getfp_detail();
					Swal.fire({
						title: 'Great job!! ',
						text: 'This Service Provider is Blocked successfully!',
						icon: 'success',
					});
				}
				else if (data == 0) {
					Swal.fire({
						title: 'warning!! ',
						text: 'something went wrong!!',
						icon: 'error',
					});
				}
			},
			complete: function () {
				$('#loader').addClass('hidden')
			}
		})

	})

	$(document).on("click", ".removeblockfp_btn", function () {
		var spid = $(this).closest(".card-body").find(".spid_card").val();
		$.ajax({
			type: "POST",
			url: "?controller=Servicehistory&function=removeblock_fav_provider",
			datatype: "json",
			data: { spid: spid },

			success: function (data) {
				if (data == 1) {

					getfp_detail();
					Swal.fire({
						title: 'Great job!! ',
						text: 'This Service Provider is Unblock successfully!',
						icon: 'success',
					});
				}
				else if (data == 0) {
					Swal.fire({
						title: 'warning!! ',
						text: 'something went wrong!!',
						icon: 'error',
					});
				}
			},
			complete: function () {
				$('#loader').addClass('hidden')
			}
		})

	})
});