
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

// const names = [
// 	"Jackson Sofia",
// 	"Levi Emily",
// 	"Sebastian Avery",
// 	"Mateo Mila",
// 	"Jack Scarlett",
// 	"iam Olivia",
// 	"oah Emma",
// 	"liver Ava",
// 	"lijah Charlotte",
// 	"illiam Sophia",
// 	"ames Amelia",
// 	"enjamin Isabella",
// 	"ucas Mia",
// 	"enry Evelyn",
// 	"Alexander Harper",
// 	"Mason Camila",
// 	"Michael Gianna",
// 	"Ethan Abigail",
// 	"Daniel Luna",
// 	"Jacob Ella",
// 	"Logan Elizabeth",
// 	"Owen Eleanor",
// 	"Theodore Madison",
// 	"Aiden Layla",
// 	"Samuel Penelope",
// 	"Joseph Aria",
// 	"John Chloe",
// 	"David Grace",
// 	"Wyatt Ellie",
// 	"Matthew Nora",
// 	"Luke Hazel",
// 	"Asher Zoey",
// 	"Carter Riley",
// 	"Julian Victoria",
// 	"Grayson Lily",
// 	"Leo Aurora",
// 	"Jayden Violet",
// 	"Gabriel Nova",
// 	"Isaac Hannah",
// 	"Lincoln Emilia",
// 	"Anthony Zoe",
// 	"Hudson Stella",
// 	"Dylan Everly",
// 	"Ezra Isla",
// 	"Thomas Leah",
// 	"Charles Lillian",
// 	"Christopher Addison",
// 	"Jaxon Willow",
// 	"Maverick Lucy",
// 	"Josiah Paisley",
// 	"Isaiah Natalie",
// 	"Andrew Naomi",
// 	"Elias Eliana",
// 	"Joshua Brooklyn",
// 	"Nathan Elena",
// ];

// for (let i = 0; i < 55; i++) {
// 	let x = Math.floor(Math.random() * 100);
// 	let status;
// 	if (x <= 25 && x >= 0) {
// 		status = "cancelled";
// 	} else if (x <= 50 && x > 25) {
// 		status = "completed";
// 	} else if (x <= 75 && x > 50) {
// 		status = "new";
// 	} else if (x <= 100 && x > 75) {
// 		status = "pending";
// 	}
// 	let popoverContent = "";
// 	if (status === "pending") {
// 		popoverContent = `<a href='#' class='custPopoverAnch'>Edit & Reschedule</a><a href='#' class='custPopoverAnch'>Refund</a><a href='#' class='custPopoverAnch'>Cancel</a><a href='#' class='custPopoverAnch'>Change SP</a><a href='#' class='custPopoverAnch'>Escalate</a><a href='#' class='custPopoverAnch'>History Log</a><a href='#' class='custPopoverAnch'>Download Invoice</a>`;
// 	} else if (status === "completed") {
// 		popoverContent = `<a href='#' class='custPopoverAnch'>Refund</a><a href='#' class='custPopoverAnch'>Escalate</a><a href='#' class='custPopoverAnch'>History Log</a><a href='#' class='custPopoverAnch'>Download Invoice</a>`;
// 	}
// 	tbody.innerHTML += `<tr>
// 					<td class="serviceId">${Math.floor(Math.random() * 3000 * i)}</td>
// 					<td>
// 						<div class="tdHead d-flex align-items-center justify-content-start">
// 							<img src="./assets/Images/calender.png" />
// 							<h5>${new Date(i * 86400000).getDate()}/${new Date(i * 86400000).getMonth() + 1}/${new Date(i * 86400000).getFullYear()}</h5>
// 						</div>
// 						<div class="timing d-flex align-items-center justify-content-start">
// 							<img src="./assets/Images/clock.png" />
// 							<div class="time">12:00 - 18:00</div>
// 						</div>
// 					</td>
// 					<td>
// 						<div class="custName text-md-nowrap text-sm-wrap">${names[54 - i]}</div>
// 						<div class="custAddress d-flex text-md-nowrap text-sm-wrap align-items-center justify-content-start">
// 							<img src="./assets/Images/addressIcon.png" />
// 							Musterstrabe 5,12345 Bonn
// 						</div>
// 					</td>
// 					<td>
// 						<div class="serviceProvider d-flex align-items-center justify-content-start">
// 							<img class="rounded-circle" src="./assets/Images/serviceProviderProfileImage.svg" />
// 							<div class="serviceProviderInfo">
// 								<div class="serviceProviderName">${names[i]}</div>
// 								<div class="feedback d-flex align-items-center justify-content-center">
// 									<img src="./assets/Images/starFilled.svg" /><img src="./assets/Images/starFilled.svg" /><img
// 										src="./assets/Images/starFilled.svg"
// 									/><img src="./assets/Images/starFilled.svg" /><img src="./assets/Images/starUnfilled.svg" />4
// 								</div>
// 							</div>
// 						</div>
// 					</td>
// 					<td class="text-center"><span class='status ${status}'>${status}</span></td>
// 					<td class="actionTd">
// 						<div 
// 						class="action rounded-circle d-flex flex-column align-items-center justify-content-center position-relative" 
// 						${
// 							popoverContent !== ""
// 								? 'data-bs-toggle="popover" data-bs-offset="-30,10" data-bs-placement="bottom" data-bs-content="' +
// 								  popoverContent +
// 								  '" data-bs-html="true"'
// 								: ""
// 						}
// 						>
// 							<div class="dot rounded-circle"></div>
// 							<div class="dot rounded-circle"></div>
// 							<div class="dot rounded-circle"></div>
// 						</div>
// 					</td>
// 				</tr>`;
// }


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
		{ orderable: false, targets: [5,6] },
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
		{ orderable: false, targets: 1 },
		{ orderable: false, targets: 2 },
		{ orderable: false, targets: 4 },
		{ orderable: false, targets: 7 },
		{ type: "num", targets: 3 },
		{ type: "kmNum", targets: 5 },
	],
});
// jquery plugin

$(function() {
    $("#fromDate").datepicker();
    $("#toDate").datepicker();
	$("#fromDate1").datepicker();
    $("#toDate1").datepicker();
	
});
// $( function() {
//     $( "#datepicker" ).datepicker();
//     $( "#anim" ).on( "change", function() {
//       $( "#datepicker" ).datepicker( "option", "showAnim", $( this ).val() );
//     });
//   } );
// $("#fromDate").datepicker({
// 	changeMonth: true,
// 	changeYear: true,
// 	showButtonPanel: true,
// });
// $("#toDate").datepicker({
// 	changeMonth: true,
// 	changeYear: true,
// 	showButtonPanel: true,
// });
// fromDate.addEventListener("focusout", () => {
// 	setTimeout(() => {
// 		if (fromDate.value) fromDateOutput.innerHTML = fromDate.value;
// 	}, 500);
// });
// toDate.addEventListener("focusout", () => {
// 	setTimeout(() => {
// 		if (toDate.value) toDateOutput.innerHTML = toDate.value;
// 	}, 500);
// });
// $("#fromDate1").datepicker({
// 	changeMonth: true,
// 	changeYear: true,
// 	showButtonPanel: true,
// });
// $("#toDate1").datepicker({
// 	changeMonth: true,
// 	changeYear: true,
// 	showButtonPanel: true,
// });
// fromDate1.addEventListener("focusout", () => {
// 	setTimeout(() => {
// 		if (fromDate1.value) fromDateOutput1.innerHTML = fromDate1.value;
// 	}, 500);
// });
// toDate1.addEventListener("focusout", () => {
// 	setTimeout(() => {
// 		if (toDate1.value) toDateOutput1.innerHTML = toDate1.value;
// 	}, 500);
// });
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})

$(document).ready(function(){
	
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
	$(document).on("click",".service_request",function(){
		$(".usermgmt_data").hide();
		$(".servicereq_data").show();

		$(".service_request").addClass("color_click");
		$(".user_management").removeClass("color_click");
		
	})
	$(document).on("click",".user_management",function(){
		$(".servicereq_data").hide();
		$(".usermgmt_data").show();
		$(".service_request").removeClass("color_click");
		$(".user_management").addClass("color_click");
	})
	getservice_data();
	// $('[data-bs-toggle="popover"]').popover(); 
	function getservice_data(){
		// var myTable = $('.adminUserManagementTable').DataTable();
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
					for (var i = 0; i < len; i++) {
						date_string(obj[i][0].ServiceStartDate, obj[i][0].SubTotal);

					     	if(obj[i][4] != undefined){
						 	var avg1 = Number(obj[i][4].AverageRating);
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
						    }

							// if (obj[i][1] != undefined) {
							// 	var classadd = "disabled";
							// 	var color2 = "color_cancel";
							// 	var tooltip = "rateactive2";
							// }
							// else {
							// 	var classadd = "";
							// 	var color2 = "color_complete";
							// 	var tooltip = "rateactive";
							// }
							if (obj[i][0].Status == 1) {
								// var disabled = "disabled";
								// var color = "color_cancel";
								var text = "Completed";
								var popoverContent = `<a href='#' class='custPopoverAnch'>Refund</a><a href='#' class='custPopoverAnch'>Escalate</a><a href='#' class='custPopoverAnch'>History Log</a><a href='#' class='custPopoverAnch'>Download Invoice</a>`;
							} else if (obj[i][0].Status == 2) {
								var disabled = "";
								var color = "color_complete";
								var text = "Pending";
								var popoverContent = `<a href='#' class='custPopoverAnch'>Edit & Reschedule</a><a href='#' class='custPopoverAnch'>Refund</a><a href='#' class='custPopoverAnch'>Cancel</a><a href='#' class='custPopoverAnch'>Change SP</a><a href='#' class='custPopoverAnch'>Escalate</a><a href='#' class='custPopoverAnch'>History Log</a><a href='#' class='custPopoverAnch'>Download Invoice</a>`;
							}else if (obj[i][0].Status == 3) {
								var disabled = "";
								var color = "color_complete";
								var text = "Cancel";
								var popoverContent=" ";
							}else if (obj[i][0].Status == 4) {
								var disabled = "";
								var color = "color_complete";
								var text = "Assign";
								var popoverContent=" ";
							}
								
							if (obj[i][0].ServiceProviderId != null) {

						dt.row.add($(`<tr>
											<td class="serviceId">${obj[i][0].ServiceId}</td>
											<td>
												<div class="tdHead d-flex align-items-center justify-content-start" style="width:10rem;">
													<img src="./assets/Images/calender.png" />
													<h5>${dateString}</h5>
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
											<td><span class="paymentAmount d-xs-inline-block d-sm-block "><span class="paymentSign">€</span>${obj[i][0].TotalCost}</span></td>
											<td class="text-center"><span class='status ${text}'>${text}</span></td>
											<td class="actionTd">
												<div 
												class="action rounded-circle d-flex flex-column align-items-center justify-content-center position-relative" 
												${
													popoverContent != ""
														? 'data-bs-toggle="popover" data-bs-offset="-30,10" data-bs-placement="bottom" data-bs-content="' +
														  popoverContent +
														  '" data-bs-html="true"'
														: ""
												}
												>
													<div class="dot rounded-circle"></div>
													<div class="dot rounded-circle"></div>
													<div class="dot rounded-circle"></div>
												</div>
											</td>
										</tr>`)).draw();
											}
											else{
												dt.row.add($(`<tr>
												<td class="serviceId">${obj[i][0].ServiceId}</td>
												<td>
													<div class="tdHead d-flex align-items-center justify-content-start" style="width:10rem;">
														<img src="./assets/Images/calender.png" />
														<h5>${dateString}</h5>
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
												<td><span class="paymentAmount d-xs-inline-block d-sm-block "><span class="paymentSign">€</span>${obj[i][0].TotalCost}</span></td>
												<td class="text-center"><span class='status ${text}'>${text}</span></td>
												<td class="actionTd">
													<div 
													class="action rounded-circle d-flex flex-column align-items-center justify-content-center position-relative" 
													${
														popoverContent !== ""
															? 'data-bs-toggle="popover" data-bs-offset="-30,10" data-bs-placement="bottom" data-bs-content="' +
															  popoverContent +
															  '" data-bs-html="true"'
															: ""
													}
													>
														<div class="dot rounded-circle"></div>
														<div class="dot rounded-circle"></div>
														<div class="dot rounded-circle"></div>
													</div>
												</td>
											</tr>`)).draw();
											}
					}
				}
			},
			complete: function () {
			$('#loader').addClass('hidden')
			}
				
		})
	}
})

// var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
// var popoverList = popoverTriggerList.map((popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl));