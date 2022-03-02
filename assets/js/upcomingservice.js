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

for (let i = 0; i < 10; i++) {
	tbody.innerHTML += `<tr>
					<td class="serviceId">${Math.floor(Math.random() * 3000 * i)}</td>
					<td>
								<div class="tdHead d-flex align-items-center justify-content-start">
									<img src="./assets/Images/calender.png" />
									<h5>${new Date(i * 86400000).getDate()}/${new Date(i * 86400000).getMonth() + 1}/${new Date(i * 86400000).getFullYear()}</h5>
								</div>
								<div class="timing d-flex align-items-center justify-content-start">
									<img src="./assets/Images/clock.png" />
									<div class="time">12:00 - 18:00</div>
								</div>
							</td>
							<td>
								<div class="custName text-md-nowrap text-sm-wrap">David Bough</div>
								<div class="custAddress d-flex text-md-nowrap text-sm-wrap align-items-center justify-content-start">
									<img src="./assets/Images/addressIcon.png" />
									Musterstrabe 5,12345 Bonn
								</div>
							</td>
							<td class="text-start distance">${Math.floor(Math.random() * i * 10)} km</td>
							<td><button class="rounded-pill position-relative d-flex align-items-center justify-content-center text-nowrap cancel">Cancel</button></td>
						</tr>`;
}


let dataTables_length = document.querySelector(".dataTables_length");
$(".dataTables_length").insertAfter(".dataTable");
$(".tableHeader").insertAfter(".dt-buttons");



const dt = new DataTable("#upcomingHistoryTable", {
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
		{ orderable: false, targets: 4 },
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
$(document).on("click",".mysetting_btn",function(){
$(".mysetting").show();
$("#tab2").hide();
$("#tab1").show();
$("#btn1").css('border-bottom','3px solid #1d7a8c');
$("#btn2").css('border-bottom','3px solid #e1e1e1');
$('.dashboard_btn,.newservice_btn,.upcomingservice_btn,.schedule_btn,.shistory_btn,.blockcust_btn,.ratings_btn').css('background','none');
$(".dashboard,.upcoming_service,.newservicereq,.service_schedule,.service_history,.my_ratings,.block_customer").hide();
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
});

$(document).on("click", "#female_logo", function () {
	if ($(this).prop("checked") == true) {
		$(".first").css({
			"border": "2px solid #1D7A8C",
			"border-radius": "50%"
		});
		$(".avatar_main").attr("src","./assets/Images/avatar-female.png");
		$(".second,.third,.four,.five,.six").css("border","none");
	}
})
$(document).on("click", "#car_logo", function () {
	if ($(this).prop("checked") == true) {
		$(".second").css({
			"border": "2px solid #1D7A8C",
			"border-radius": "50%"
		});
		$(".avatar_main").attr("src","./assets/Images/avatar-car.png");
		$(".first,.third,.four,.five,.six").css("border","none");
	}
})
$(document).on("click", "#hat_logo", function () {
	if ($(this).prop("checked") == true) {
		$(".third").css({
			"border": "2px solid #1D7A8C",
			"border-radius": "50%"
		});
		$(".avatar_main").attr("src","./assets/Images/avatar-hat.png");
		$(".first,.second,.four,.five,.six").css("border","none");
	}
})
$(document).on("click", "#iron_logo", function () {
	if ($(this).prop("checked") == true) {
		$(".four").css({
			"border": "2px solid #1D7A8C",
			"border-radius": "50%"
		});
		$(".avatar_main").attr("src","./assets/Images/avatar-iron.png");
		$(".first,.second,.third,.five,.six").css("border","none");
	}
})
$(document).on("click", "#male_logo", function () {
	if ($(this).prop("checked") == true) {
		$(".five").css({
			"border": "2px solid #1D7A8C",
			"border-radius": "50%"
		});
		$(".avatar_main").attr("src","./assets/Images/avatar-male.png");
		$(".first,.second,.third,.four,.six").css("border","none");
	}
})
$(document).on("click", "#ship_logo", function () {
	if ($(this).prop("checked") == true) {
		$(".six").css({
			"border": "2px solid #1D7A8C",
			"border-radius": "50%"
		});
		$(".avatar_main").attr("src","./assets/Images/avatar-ship.png");
		$(".first,.second,.third,.four,.five").css("border","none");
	}
})

$(document).on("click",".dashboard_btn",function(){
	$(".mysetting,.upcoming_service,.newservicereq,.service_schedule,.service_history,.my_ratings,.block_customer").hide();
	$(".dashboard").show();
	$('.dashboard_btn').css('background','#146371');
	$('.newservice_btn,.upcomingservice_btn,.schedule_btn,.shistory_btn,.blockcust_btn,.ratings_btn').css('background','none');

});
$(document).on("click",".newservice_btn",function(){
	$('.newservice_btn').css('background','#146371');
	$(".newservicereq").show();
	$(".mysetting,.upcoming_service,.dashboard,.service_schedule,.service_history,.my_ratings,.block_customer").hide();
	$('.dashboard_btn,.upcomingservice_btn,.schedule_btn,.shistory_btn,.blockcust_btn,.ratings_btn').css('background','none');
})
$(document).on("click",".schedule_btn",function(){
	$('.schedule_btn').css('background','#146371');
	$(".service_schedule").show();
	$(".mysetting,.upcoming_service,.dashboard,.newservicereq,.service_history,.my_ratings,.block_customer").hide();
	$('.dashboard_btn,.upcomingservice_btn,.newservice_btn,.shistory_btn,.blockcust_btn,.ratings_btn').css('background','none');
})
$(document).on("click",".shistory_btn",function(){
	$('.shistory_btn').css('background','#146371');
	$(".service_history").show();
	$(".mysetting,.upcoming_service,.dashboard,.newservicereq,.service_schedule,.my_ratings,.block_customer").hide();
	$('.dashboard_btn,.upcomingservice_btn,.newservice_btn,.schedule_btn,.blockcust_btn,.ratings_btn').css('background','none');
})
$(document).on("click",".ratings_btn",function(){
	$('.ratings_btn').css('background','#146371');
	$(".my_ratings").show();
	$(".mysetting,.upcoming_service,.dashboard,.newservicereq,.service_schedule,.service_history,.block_customer").hide();
	$('.dashboard_btn,.upcomingservice_btn,.newservice_btn,.schedule_btn,.blockcust_btn,.shistory_btn').css('background','none');
})
$(document).on("click",".blockcust_btn",function(){
	$('.blockcust_btn').css('background','#146371');
	$(".block_customer").show();
	$(".mysetting,.upcoming_service,.dashboard,.newservicereq,.service_schedule,.service_history,.my_ratings").hide();
	$('.dashboard_btn,.upcomingservice_btn,.newservice_btn,.schedule_btn,.ratings_btn,.shistory_btn').css('background','none');
})

$(document).on("click",".upcomingservice_btn",function(){
	$('.upcomingservice_btn').css('background','#146371');
	$(".upcoming_service").show();
	$(".mysetting,.block_customer,.dashboard,.newservicereq,.service_schedule,.service_history,.my_ratings").hide();
	$('.dashboard_btn,.blockcust_btn,.newservice_btn,.schedule_btn,.ratings_btn,.shistory_btn').css('background','none');
})

