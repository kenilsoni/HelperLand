
var toDateOutput = document.querySelector("#toDateOutput");
var fromDateOutput = document.querySelector("#fromDateOutput");
var fromDate = document.querySelector("#fromDate");
var hamburger = document.querySelector(".tgle_class");
var halfPage = document.querySelector(".halfPage");
var verticleMenu = document.querySelector(".verticleMenu");
var toDate = document.querySelector("#toDate");
var tbody = document.querySelector("tbody");

var toDateOutput1 = document.querySelector("#toDateOutput1");
var fromDateOutput1 = document.querySelector("#fromDateOutput1");
var fromDate1 = document.querySelector("#fromDate1");
var toDate1 = document.querySelector("#toDate1");



hamburger.addEventListener("click", () => {
	[verticleMenu, hamburger].forEach((ele) => ele.classList.toggle("open"));
});
halfPage.addEventListener("click", () => {
	[verticleMenu, hamburger].forEach((ele) => ele.classList.remove("open"));
});

// datatable

jQuery.extend(jQuery.fn.dataTableExt.oSort, {
	"serviceDate-pre": function (a) {
		const time = a
			.match(/<div class="time">.*<\/div>/)[0]
			.replace(`<div class="time">`, "")
			.replace("</div>", "");
		a = a
			.match(/<h5>.*<\/h5>/)[0]
			.replace("<h5>", "")
			.replace("</h5>", "");
		let d = a.split("/");
		let day = d[0].length === 1 ? `0${d[0]}` : d[0];
		let month = d[1].length === 1 ? `0${d[1]}` : d[1];
		let year = d[2].length === 1 ? `0${d[2]}` : d[2];
		a = `${month}/${day}/${year}`;
		return a.toString();
	},
	"serviceDate-asc": function (a, b) {
		const dateA = new Date(a);
		const dateB = new Date(b);
		return dateA < dateB;
	},
	"serviceDate-desc": function (a, b) {
		const dateA = new Date(a);
		const dateB = new Date(b);
		return dateB > dateA;
	},
});


var dt = new DataTable("#adminUserManagementTable", {
	dom: "Rtlp",
	responsive: false,
	pagingType: "simple_numbers",
	language: {
		paginate: {
			previous: "<img src='./assets/Images/adminNextPreviousButton.svg' alt='previous' />",
			next: '<img src="./assets/Images/adminNextPreviousButton.svg" alt="next" style="transform: rotate(180deg)" />',
		},
		info: "Total Record: _MAX_",
		lengthMenu: "Show_MENU_Entries",
	},
	columnDefs: [
		{ orderable: false, targets: [5, 6] },
		{ type: "serviceDate", targets: 1 },
	],
});
jQuery.extend(jQuery.fn.dataTableExt.oSort, {
	"kmNum-pre": function (a) {
		a = a.replace(" km", "");
		if (a === "No Data") {
			a = "999999999";
		}
		return parseInt(a);
	},
	"kmNum-asc": function (a, b) {
		return a - b;
	},
	"kmNum-desc": function (a, b) {
		return b - a;
	},
});

var dt2 = new DataTable("#adminUserManagementTable2", {
	dom: "Rtlp",
	responsive: false,
	pagingType: "simple_numbers",

	language: {
		paginate: {
			previous: "<img src='./assets/Images/adminNextPreviousButton.svg' alt='previous' />",
			next: '<img src="./assets/Images/adminNextPreviousButton.svg" alt="next" style="transform: rotate(180deg)" />',
		},
		info: "Total Record: _MAX_",
		lengthMenu: "Show_MENU_Entries",
	},
	columnDefs: [

		{ orderable: false, targets: 5 },
		{ orderable: false, targets: 6 },

	],
});
// jquery plugin

$(function () {
	$("#fromDate").datepicker({ dateFormat: 'dd-mm-yy' });
	$("#toDate").datepicker({ dateFormat: 'dd-mm-yy' });
	$("#fromDate1").datepicker({ dateFormat: 'dd-mm-yy' });
	$("#toDate1").datepicker({ dateFormat: 'dd-mm-yy' });

});

var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
var popoverList = popoverTriggerList.map((popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl));

$(document).ready(function () {

	$(".service_request").addClass("color_click");
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
	$(document).on("click", ".service_request", function () {
		$(".usermgmt_data").hide();
		$(".servicereq_data").show();

		$(".service_request").addClass("color_click");
		$(".user_management").removeClass("color_click");

	})
	$(document).on("click", ".user_management", function () {
		$(".servicereq_data").hide();
		$(".usermgmt_data").show();
		$(".service_request").removeClass("color_click");
		$(".user_management").addClass("color_click");
		getusermgmt_data();
	})
	getservice_data();

	$(document).on("click", ".search", function () {

		if ($('.myInputTextField').val() != "") {
			dt.search($('.myInputTextField').val()).draw();
		}
		if ($('#status').val() != "status") {
			dt.search($('#status').val()).draw();
		}
		if ($('#customer').val() != "customer") {
			dt.search($('#customer').val()).draw();
		}
		if ($('#serviceProvider').val() != "serviceProvider") {
			dt.search($('#serviceProvider').val()).draw();
		}
		if ($('#fromDate').val() != "") {
			dt.search($("#fromDate").val()).draw();
		}
		if ($('#toDate').val() != "") {
			dt.search($("#toDate").val()).draw();
		}

	})

	$(document).on("click", ".refund_btn", function () {
		var amount = $(this).closest('tr').find(".main_amt").text();
		$(".calculate-amount").val('');
		$("#calculated-amt").val('');

		$(".paid-amt").text(amount);
		$(".refunded-amt").text(amount);
		$(".inbalance-amt").text(amount);
		$(".paid-amt").text(amount);

	})
	$(".calculate-amount").on("change", function () {
		if ($("#select-method").val() == 0) {
			var percentToGet = Number($(this).val());
			var amount = Number($(".paid-amt").text());
			var remainning = Math.ceil((percentToGet / 100) * amount);
			var last = Number($(".paid-amt").text()) - Number(remainning);
			$(".inbalance-amt").text(last);
			$(".refunded-amt").text(remainning);
			$("#calculated-amt").val(remainning);
		}
		else {

			var written = Number($(this).val());
			var total = Number($(".paid-amt").text());
			$("#calculated-amt").val(written);
			var last = Number(total) - Number(written);
			$(".inbalance-amt").text(last);
			$(".refunded-amt").text(written);

		}
	})

	$(document).on("click", ".clear", function () {
		$('.myInputTextField').val('');
		$('#status').val('status');
		$('#customer').val('customer');
		$('#serviceProvider').val('serviceProvider');
		$('#fromDate').datepicker('setDate', null);
		$('#toDate').datepicker('setDate', null);

		dt.search('').draw();

	})

	$(document).on("click", ".search2", function () {
		if ($('#userName').val() != "userName") {
			dt2.search($('#userName').val()).draw();
		}

		if ($('#userType').val() != "userType") {
			dt2.search($('#userType').val()).draw();
		}

		if ($('#mobile').val() != "") {
			dt2.search($('#mobile').val()).draw();
		}
		if ($('#fromDate1').val() != "") {
			dt2.search($("#fromDate1").val()).draw();
		}
		if ($('#toDate1').val() != "") {
			dt2.search($("#toDate1").val()).draw();
		}

	})

	$(document).on("click", ".clear2", function () {
		$('#userName').val('userName');
		$('#userType').val('userType');
		$('#fromDate1').datepicker('setDate', null);
		$('#toDate1').datepicker('setDate', null);
		$('#mobile').val('');

		dt2.search('').draw();

	})
	function getservice_data() {

		$.ajax({
			type: "GET",
			url: "?controller=Admin&function=getservice_data",
			datatype: "json",
			beforeSend: function () {
				$('#loader').removeClass('hidden')
			},
			success: function (data) {
				obj = JSON.parse(data);
				console.log(obj);
				if (typeof obj === "object") {
					var len = obj.length;
					dt.clear().draw();
					var user = [];
					var serviceprovider = [];
					for (var i = 0; i < len; i++) {
						date_string(obj[i][0].ServiceStartDate, obj[i][0].SubTotal);

						if (obj[i][4] != undefined) {
							var avg1 = Number(obj[i][4].AverageRating);
							var avg = avg1.toFixed(2);

							let star = Math.round(avg);
							let remainning = 5 - star;
							var starfilled = "";
							var starfilled1 = "";

							user.push(obj[i][3].UserFullName);
							// var newOption = $('<option value="'+val+'">'+val+'</option>');
							// $('#customer').append(newOption);

							for (let i = 0; i < star; i++) {
								starfilled += '<img src="./assets/Images/starFilled.svg"/>';

							}
							for (let i = 0; i < remainning; i++) {
								starfilled1 += '<img src="./assets/Images/starUnfilled.svg"/>';
							}
						}


						if (obj[i][0].Status == 1) {
							var disabled = "";
							var text = "Completed";
							var popoverContent = `<div class='custPopoverAnch refund_btn' data-toggle='modal' data-target='#refund_modal'>Refund</div><div class='custPopoverAnch'>Escalate</div><div class='custPopoverAnch'>History Log</div><div class='custPopoverAnch'>Download Invoice</div>`;
						} else if (obj[i][0].Status == 2) {
							var disabled = "";

							var text = "Pending";
							var popoverContent = `<div  data-toggle='modal' data-target='#EditServiceRequest'class='custPopoverAnch' id="edit_btn">Edit & Reschedule</div><div class='custPopoverAnch'>Refund</div><div class='custPopoverAnch'>Cancel</div><div class='custPopoverAnch'>Change SP</div><div class='custPopoverAnch'>Escalate</div><div class='custPopoverAnch'>History Log</div><div class='custPopoverAnch'>Download Invoice</div>`;
						} else if (obj[i][0].Status == 3) {
							var disabled = "disabled";

							var text = "Cancel";
							var popoverContent = "";
						} else if (obj[i][0].Status == 4) {
							var disabled = "";

							var text = "Assign";
							var popoverContent = `<div  data-toggle='modal' data-target='#EditServiceRequest'class='custPopoverAnch' id="edit_btn">Edit & Reschedule</div><div class='custPopoverAnch'>Refund</div><div class='custPopoverAnch'>Cancel</div><div class='custPopoverAnch'>Change SP</div><div class='custPopoverAnch'>Escalate</div><div class='custPopoverAnch'>History Log</div><div class='custPopoverAnch'>Download Invoice</div>`;
						}

						if (obj[i][0].ServiceProviderId != null) {
							serviceprovider.push(obj[i][5].SPFullName);
							dt.row.add($(`<tr>
						<input type="hidden" value="${obj[i][1].AddressLine1}" class="add1"/>
						<input type="hidden" value="${obj[i][1].AddressLine2}" class="add2"/>
						<input type="hidden" value="${obj[i][1].City}" class="city"/>
						<input type="hidden" value="${obj[i][1].PostalCode}" class="postal"/>
						<input type="hidden" value="${obj[i][0].ServiceRequestId}" class="servicereq_id"/>
						<input type="hidden" value="${obj[i][0].UserId}" class="userid"/>
						<input type="hidden" value="${obj[i][0].ServiceProviderId}" class="sp_id"/>
											<td class="serviceId">${obj[i][0].ServiceId}</td>
											<td>
												<div class="tdHead d-flex align-items-center justify-content-start" style="width:10rem;">
													<img src="./assets/Images/calender.png" />
													<h5 class="datenew">${dateString}</h5>
												</div>
												<div class="timing d-flex align-items-center justify-content-start">
													<img src="./assets/Images/clock.png" />
													<div class="time">${time}</div>
												</div>
											</td>
											<td class="d-flex">
												<div class="d-flex align-items-center" style="margin-right:10px;">
												<img src="./assets/Images/addressIcon.png" /></div>
											
												
													<div class="custAddress d-flex text-md-nowrap text-sm-wrap align-items-center justify-content-start flex-column">
													${obj[i][3].UserFullName}<br>
													${obj[i][1].AddressLine1} ${obj[i][1].AddressLine2} ${obj[i][1].City} ${obj[i][1].PostalCode}
													</div>
												</td>
												
											<td>
											<div class="serviceProvider d-flex align-items-center justify-content-start">
											<img class="rounded-circle" src="./assets/Images/${obj[i][5].UserProfilePicture}.png" />
											<div class="serviceProviderInfo">
												<div class="serviceProviderName" >${obj[i][5].SPFullName}</div>
												<div class="feedback d-flex align-items-center justify-content-center">
												${starfilled}${starfilled1}
												${avg}
												</div>
											</div>
											</td>
											<td><span class="paymentAmount d-xs-inline-block d-sm-block "><span class="paymentSign">€</span ><span class="main_amt">${obj[i][0].TotalCost}</span></span></td>
											<td class="text-center"><span class='status ${text}'>${text}</span></td>
											<td class="actionTd">
											<div class="dropdown">
												<div class="dropdown-toggle " 
													id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false" ${disabled}>
													<svg xmlns="http://www.w3.org/2000/svg" width="63%" height="100%" fill="#8E8E8E" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
													<path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
												  </svg>
												</div>
												
												<ul class="dropdown-menu p-2">
													${popoverContent}
												</ul>
											</div>
											</td>
										</tr>`)).draw();
						}
						else {
							dt.row.add($(`<tr>
												<input type="hidden" value="${obj[i][1].AddressLine1}" class="add1"/>
												<input type="hidden" value="${obj[i][1].AddressLine2}" class="add2"/>
												<input type="hidden" value="${obj[i][1].City}" class="city"/>
												<input type="hidden" value="${obj[i][1].PostalCode}" class="postal"/>
												<input type="hidden" value="${obj[i][0].UserId}" class="userid"/>
												<input type="hidden" value="${obj[i][0].ServiceRequestId}" class="servicereq_id"/>
												<td class="serviceId">${obj[i][0].ServiceId}</td>
												<td>
													<div class="tdHead d-flex align-items-center justify-content-start" style="width:10rem;">
														<img src="./assets/Images/calender.png" />
														<h5 class="datenew">${dateString}</h5>
													</div>
													<div class="timing d-flex align-items-center justify-content-start">
														<img src="./assets/Images/clock.png" />
														<div class="time">${time}</div>
													</div>
												</td>
												<td class="d-flex ">
												<div class="d-flex align-items-center" style="margin-right:10px;">
												<img src="./assets/Images/addressIcon.png" /></div>
								
									
													<div class="custAddress d-flex text-md-nowrap text-sm-wrap align-items-center justify-content-start flex-column">
													${obj[i][3].UserFullName}<br>
													${obj[i][1].AddressLine1} ${obj[i][1].AddressLine2} ${obj[i][1].City} ${obj[i][1].PostalCode}
													</div>
												</td>
												<td>
												
												</td>
												<td><span class="paymentAmount d-xs-inline-block d-sm-block "><span class="paymentSign">€</span ><span class="main_amt">${obj[i][0].TotalCost}</span></span></td>
												<td class="text-center"><span class='status ${text}'>${text}</span></td>
												<td class="actionTd">
												<div class="dropdown">
												<div class="dropdown-toggle " 
													id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false" ${disabled}>
													<svg xmlns="http://www.w3.org/2000/svg" width="63%" height="100%" fill="#8E8E8E" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
													<path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
												  </svg>
												</div>
												
												<ul class="dropdown-menu p-2">
												${popoverContent}
												</ul>
											</div>
												</td>
											</tr>`)).draw();
						}
					}
					var unique = user.filter(function (itm, i, user) {
						return i == user.indexOf(itm);
					});
					for (i = 0; i < unique.length; i++) {
						var newOption = $('<option value="' + unique[i] + '">' + unique[i] + '</option>');
						$('#customer').append(newOption);
					}


					var unique2 = serviceprovider.filter(function (itm, i, serviceprovider) {
						return i == serviceprovider.indexOf(itm);
					});
					for (i = 0; i < unique2.length; i++) {
						var newOption1 = $('<option value="' + unique2[i] + '">' + unique2[i] + '</option>');
						$('#serviceProvider').append(newOption1);
					}


				}
			},
			complete: function () {
				$('#loader').addClass('hidden')
			}

		})
	}
	$(document).on("click", ".dropdown", function () {

		var servicereqid = $(this).closest('tr').find(".servicereq_id").val();
		var servicereqid_display = $(this).closest('tr').find(".serviceId").text().trim();
		var spid = $(this).closest('tr').find(".sp_id").val();
		var userid = $(this).closest('tr').find(".userid").val();
		var add1 = $(this).closest('tr').find(".add1").val();
		var add2 = $(this).closest('tr').find(".add2").val();
		var city = $(this).closest('tr').find(".city").val();
		var postal = $(this).closest('tr').find(".postal").val();
		var time1 = $(this).closest('tr').find(".timing").text();
		var tim1 = time1.split("-");
		var date11 = $(this).closest('tr').find(".datenew").text();
		var parts = date11.split('-');
		var mydate = parts[2] + "-" + parts[1] + "-" + parts[0];

		$(".time_modal").val(tim1[0].trim());
		$(".date_modal").val(mydate);
		$(".add1_modal").val(add1);
		$(".add2_modal").val(add2);
		$(".city_modal").val(city);
		$(".postal_modal").val(postal);
		$(".servicereqid_display").val(servicereqid_display);
		$(".service_id").val(servicereqid);
		$(".sp_id").val(spid);
		$(".userid").val(userid);



	})
	$(document).on("click", "#update_btn", function () {
		var add1 = $(".add1_modal").val();
		var add2 = $(".add2_modal").val();
		var postal = $(".postal_modal").val();
		var city = $(".city_modal").val();
		var date = $(".date_modal").val();
		var time = $(".time_modal").val();

		if ((add1 === "") || (add2 === "") || (postal === "") || (city === "") || (date === "") || (time === "")) {
			Swal.fire({
				title: 'sorry!! ',
				text: 'All the fields are required!!',
				icon: 'error',
			});
		}
		else {
			$.ajax({
				type: "POST",
				url: "?controller=Admin&function=reschedule",
				datatype: "json",
				data: $("#form1").serialize(),
				beforeSend: function () {
					$('#loader').removeClass('hidden')
				},
				success: function (data) {
					if (data == 1) {
						getservice_data();
						Swal.fire({
							title: 'Great job!! ',
							text: 'Data updated successfully!!',
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

			})

		}

	})
	function getusermgmt_data() {

		$.ajax({
			type: "GET",
			url: "?controller=Admin&function=getuser_data",
			datatype: "json",
			beforeSend: function () {
				$('#loader').removeClass('hidden')
			},
			success: function (data) {
				obj = JSON.parse(data);
				console.log(obj);
				if (typeof obj === "object") {
					var len = obj.length;
					var username = [];
					dt2.clear().draw();
					for (var i = 0; i < len; i++) {
						var d = new Date(obj[i].CreatedDate);
						var date = d.getDate();
						var month = d.getMonth();
						var year = d.getFullYear();
						dateString = ("0" + date).slice(-2) + "-" + ("0" + (month + 1)).slice(-2) + "-" + year;
						username.push(obj[i].FullName);

						dt2.row.add($(`<tr>
											<input type="hidden" class="userid" value="${obj[i].UserId}"/>
											<td class="serviceId"><div >${obj[i].FullName}</div></td>
											<td>
												<div class="tdHead d-flex align-items-center justify-content-start">
													<img src="./assets/Images/calender.png" />
													<h5 class="datenew">${dateString}</h5>
												</div>
												
											</td>
											<td>
												
											
												
													<div>
													${obj[i].UserTypeId == 1 ? "Customer" : "Service Provider"}
													</div>
												</td>
												
											<td>
											<div>
											${obj[i].Mobile}
												
											</div>
											</td>
											<td><div>${obj[i].ZipCode == null ? "" : obj[i].ZipCode}</div></td>
											<td ><span class='status ${obj[i].IsActive == 1 ? "Active'>Active" : "Inactive'>Inactive"}</span></td>
											<td class="actionTd">
											<div class="dropdown">
												<div class="dropdown-toggle " 
													id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
													<svg xmlns="http://www.w3.org/2000/svg" width="40%" height="100%" fill="#8E8E8E" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
													<path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
												  </svg>
												</div>
												<ul class="dropdown-menu p-2">
												${obj[i].IsActive == 1 ? `<div class='custPopoverAnch'>Edit</div><div class='custPopoverAnch' id="Inactive_btn">Deactive</div><div class='custPopoverAnch'>Service History</div>` : `<div class='custPopoverAnch'>Edit</div><div class='custPopoverAnch' id="active_btn">Active</div><div class='custPopoverAnch'>Service History</div>`}
												</ul>
											</div>
											</td>
										</tr>`)).draw();

					}
					var unique1 = username.filter(function (itm, i, username) {
						return i == username.indexOf(itm);
					});
					for (i = 0; i < unique1.length; i++) {
						var newOption = $('<option value="' + unique1[i] + '">' + unique1[i] + '</option>');
						$('#userName').append(newOption);
					}
				}
			},
			complete: function () {
				$('#loader').addClass('hidden')
			}

		})
	}
	$(document).on("click", "#active_btn", function () {
		var id = $(this).closest('tr').find(".userid").val();
		$.ajax({
			type: "POST",
			url: "?controller=Admin&function=active",
			datatype: "json",
			data: { id: id },
			beforeSend: function () {
				$('#loader').removeClass('hidden')
			},
			success: function (data) {
				if (data == 1) {
					getusermgmt_data();
					Swal.fire({
						title: 'Great job!! ',
						text: 'User is now active!!',
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
		})

	})
	$(document).on("click", "#Inactive_btn", function () {
		var id = $(this).closest('tr').find(".userid").val();
		$.ajax({
			type: "POST",
			url: "?controller=Admin&function=Inactive",
			datatype: "json",
			data: { id: id },
			beforeSend: function () {
				$('#loader').removeClass('hidden')
			},
			success: function (data) {
				if (data == 1) {
					getusermgmt_data();
					Swal.fire({
						title: 'Great job!! ',
						text: 'User is now Inactive!!',
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
		})

	})
})
