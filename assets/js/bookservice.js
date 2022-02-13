var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
var popoverList = popoverTriggerList.map((popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl));

const tgle_class = document.querySelector(".tgle_class");
const navmenu = document.querySelector(".navmenu");
tgle_class.addEventListener("click", () => {
	tgle_class.classList.toggle("open");
	navmenu.classList.toggle("open");
});
$(document).ready(function(){
$("#second").hide();
$("#address-list").hide();
$("#make-payment").hide();
$(document).on("click", "#step4", function (e) {

	$.ajax({
		type: "POST",
		url: "?controller=Bookservice&function=payment_done",
		datatype: "json",
		data: $("#form-4").serialize(),
		beforeSend: function () {
			$('#loader').removeClass('hidden')
		},		
		success: function (data) {
			if (data == 1) {

				window.location.href = '?controller=Helperland&function=HomePage';


			} else if (data == 0) {
				swal({
					title: 'sorry!',
					text: 'something went wrong',
					icon: 'error',
				});
			}
		},
		complete: function () {
			$('#loader').addClass('hidden')
		},
		
	});
});

$(document).on("click", "#step3", function (e) {
	$.ajax({
		type: "POST",
		url: "?controller=Bookservice&function=customer_details",
		datatype: "json",
		data: $("#form-3").serialize(),
		beforeSend: function () {
			$('#loader').removeClass('hidden')
		},
		success: function (data) {
			if (data == 1) {

				$("#first").hide();
				$("#second").hide();
				$("#address-list").hide();
				$("#make-payment").show();
				$("#4").addClass("add");
				$("#1,#2,#3").removeClass("add");
				$("#2,#3,#4").addClass("add-color");
				$("#img4").attr("src", "./assets/Images/payment-white.png");
				$("#img3").attr("src", "./assets/Images/details-white.png");
				$("#img2").attr("src", "./assets/Images/schedule-white.png");
				$(document).on("click", "#1", function () {
					$("#img2").attr("src", "./assets/Images/schedule.png");
					$("#img3").attr("src", "./assets/Images/details.png");
					$("#img4").attr("src", "./assets/Images/payment.png");
					$("#first").show();
					$('#second').hide();
					$('#address-list').hide();
					$('#make-payment').hide();
					$("#2,#3,#4").removeClass("add add-color");
					$("#1").addClass("add add-color");
					$('#4').click(false);
					$('#2').click(false);
					$('#3').click(false);


				});
				$(document).on("click", "#2", function () {



					$("#img2").attr("src", "./assets/Images/schedule-white.png");
					$("#img3").attr("src", "./assets/Images/details.png");
					$("#second").show();
					$('#address-list').hide();
					$("#first").hide();
					$('#make-payment').hide();
					$("#2").addClass("add add-color");
					$("#3").removeClass("add add-color");
					$("#1").removeClass("add");

					$('#3').click(false);

				});
				$(document).on("click", "#3", function () {



					$("#img4").attr("src", "./assets/Images/payment.png");
					$("#img2").attr("src", "./assets/Images/schedule-white.png");
					$("#img3").attr("src", "./assets/Images/details-white.png");
					$("#second").hide();
					$('#address-list').show();
					$('#make-payment').hide();
					$("#first").hide();
					$("#3").addClass("add add-color");
					$("#4").removeClass("add add-color");
					$("#1").removeClass("add");


				});
			} else if (data == 0) {
				swal({
					title: 'sorry!',
					text: 'Please select address',
					icon: 'warning',
				});
			}



		},
		complete: function () {
			$('#loader').addClass('hidden')
		},

	});


	e.preventDefault();
});
$(document).on("click", "#step2", function (e) {
	$.ajax({
		type: "POST",
		url: "?controller=Bookservice&function=scheduleplan",
		datatype: "json",
		data: $("#form-2").serialize(),
		beforeSend: function () {
			$('#loader').removeClass('hidden')
		},
		success: function (data) {

			if (data == 1) {

				$("#first").hide();
				$("#second").hide();
				$("#address-list").show();
				$(document).on("click", "#1", function () {

					$("#img2").attr("src", "./assets/Images/schedule.png");
					$("#img3").attr("src", "./assets/Images/details.png");
					$("#first").show();
					$('#second').hide();
					$('#address-list').hide();
					$("#2,#3").removeClass("add add-color");
					$("#1").addClass("add add-color");
					$('#2').click(false);


				});
				$(document).on("click", "#2", function () {

					$("#second").show();
					$("#img2").attr("src", "./assets/Images/schedule-white.png");
					$("#img3").attr("src", "./assets/Images/details.png");

					$('#address-list').hide();
					$("#first").hide();
					$("#2").addClass("add add-color");
					$("#3").removeClass("add add-color");
					$("#1").removeClass("add");


				});




				$(document).on("click", ".add-address-btn", function () {
					$(".add-address-box").css("display", "block");
					$(this).hide();
				});
				$(document).on("click", ".clear-btn", function () {
					$(".add-address-box").hide();
					$(".add-address-btn").show();
				});
				$(document).on("click", ".save-btn", function () {
					$street = $(".street").val().replace(/\s/g, "").trim();

					$house = $(".house").val().replace(/\s/g, "").trim();
					$postal = $(".postal").val().replace(/\s/g, "").trim();
					$city = $(".city").val().replace(/\s/g, "").trim();
					$phone = $(".phone").val().replace(/\s/g, "").trim();
					$(".box").append('<div class="address-check-box"><span><input type="radio" name="address1" value="' + $street + ' ' + $house + ' ' + $postal + ' ' + $city + ' ' + $phone + '" required></span><span><p><strong>Address</strong>:' + ' ' + $street + ' ' + $house + ' ' + $city + ' ' + $postal + '</p><p><strong>Phone number:</strong><a name="phone">' + ' ' + $phone + '</a></p></span>	</div>');
					$(".add-address-box").hide();
					$(".add-address-btn").show();



				});
				$("#2,#3").addClass("add-color");
				$("#3").addClass("add");
				$("#1,#2,#4").removeClass("add");
				$("#img3").attr("src", "./assets/Images/details-white.png");
				$("#4").removeClass("add-color");
				$("#img4").attr("src", "./assets/Images/payment.png");
				$("#img2").attr("src", "./assets/Images/schedule-white.png");
			} else if (data == 0) {
				swal({
					title: "sorry!",
					text: "something went wrong",
					icon: "error",
				});
			}


		},
		complete: function () {
			$('#loader').addClass('hidden')
		},
	});
	e.preventDefault();
});
$(document).on("click", ".pin-btn", function (e) {
	var pincode = $(".pincode-input-box").val();
	var pincode = $.isNumeric(pincode);
	$("#form-2").trigger("reset");
	function Hideoven() {
		$("#insideOvenImg").attr("src", "./assets/Images/4.png");
		$(".label3").css({
			"border": "2px solid #C8C8C8",
			"border-radius": "50%"
		});
		$(".three").hide();
	}
	function HideFridge() {
		$("#insideFridgeImg").attr("src", "./assets/Images/5.png");
		$(".label2").css({
			"border": "2px solid #C8C8C8",
			"border-radius": "50%"
		});
		$(".four").hide();
	}
	function HideLaundry() {
		$("#laundryImg").attr("src", "./assets/Images/2.png");
		$(".label4").css({
			"border": "2px solid #C8C8C8",
			"border-radius": "50%"
		});
		$(".one").hide();
	}
	function HideInterior() {

		$("#interiorImg").attr("src", "./assets/Images/1.png");
		$(".label5").css({
			"border": "2px solid #C8C8C8",
			"border-radius": "50%"
		});
		$(".two").hide();
	}
	function HideCabinet() {

		$("#insideCabinetImg").attr("src", "./assets/Images/3.png");
		$(".label1").css({
			"border": "2px solid #C8C8C8",
			"border-radius": "50%"
		});
		$(".five").hide();
	}

	Hideoven();
	HideCabinet();
	HideInterior();
	HideLaundry();
	HideFridge();
	if (pincode) {
		$.ajax({
			type: "POST",
			url: "?controller=Bookservice&function=checkpincode",
			datatype: "json",
			data: $("#form-data").serialize(),
			beforeSend: function () {
				$('#loader').removeClass('hidden')
			},
			success: function (data) {
				if (data == 1) {

					$("#first").hide();
					$("#second").show();
					$("#1,#3,#4").removeClass("add");
					$("#2").addClass("add-color add");
					$("#3,#4").removeClass("add-color");
					$("#img2").attr("src", "./assets/Images/schedule-white.png");
					$("#img3").attr("src", "./assets/Images/details.png");
					$("#img4").attr("src", "./assets/Images/payment.png");
					$(document).on("click", "#1", function () {
						$("#img2").attr("src", "./assets/Images/schedule.png");
						$("#first").show();
						$('#second').hide();
						$("#2").removeClass("add add-color");
						$("#1").addClass("add-color add");

					});

					$(document).on("click", "#insideCabinetCheck", function () {
						if ($(this).prop("checked") == true) {
							$("#insideCabinetImg").attr("src", "./assets/Images/3-green.png");
							$(".label1").css({
								"border": "2px solid #1D7A8C",
								"border-radius": "50%"
							});
							$(".duration1").html("<p  class='five' style='display: flex;justify-content: space-between;'>Inside Cabinet <span style='text-align: right;''>30 Mins &nbsp;</span></p>");
						} else if ($(this).prop("checked") == false) {
							HideCabinet();
						}

					});

					$(document).on("click", "#insideFridgeCheck", function () {
						if ($(this).prop("checked") == true) {
							$("#insideFridgeImg").attr("src", "./assets/Images/5-green.png");
							$(".label2").css({
								"border": "2px solid #1D7A8C",
								"border-radius": "50%"
							});
							$(".duration2").html("<p  class='four' style='display: flex;justify-content: space-between;'>Inside Fridge <span style='text-align: right;''>30 Mins &nbsp;</span</p>");
						} else if ($(this).prop("checked") == false) {
							HideFridge();
						}
					});

					$(document).on("click", "#insideOvenCheck", function () {
						if ($(this).prop("checked") == true) {
							$("#insideOvenImg").attr("src", "./assets/Images/4-green.png");
							$(".label3").css({
								"border": "2px solid #1D7A8C",
								"border-radius": "50%"
							});
							$(".duration3").html("<p  class='three' style='display: flex;justify-content: space-between;'>Inside Oven<span style='text-align: right;''>30 Mins &nbsp;</span</p>");
						} else if ($(this).prop("checked") == false) {
							Hideoven();
						}
					});


					$(document).on("click", "#laundryCheck", function () {
						if ($(this).prop("checked") == true) {
							$("#laundryImg").attr("src", "./assets/Images/2-green.png");
							$(".label4").css({
								"border": "2px solid #1D7A8C",
								"border-radius": "50%"
							});
							$(".duration4").html("<p  class='one' style='display: flex;justify-content: space-between;'>Laundry & Wash <span style='text-align: right;''>30 Mins &nbsp;</span</p>");
						} else if ($(this).prop("checked") == false) {
							HideLaundry();
						}
					});


					$(document).on("click", "#interiorCheck", function () {
						if ($(this).prop("checked") == true) {
							$("#interiorImg").attr("src", "./assets/Images/1-green.png");
							$(".label5").css({
								"border": "2px solid #1D7A8C",
								"border-radius": "50%"
							});
							$(".duration5").html("<p  class='two' style='display: flex;justify-content: space-between;'>Interior Cleaning <span style='text-align: right;''>30 Mins &nbsp;</span</p>");
						} else if ($(this).prop("checked") == false) {
							HideInterior();

						}
					});
					$(document).on("change", "select,input", function () {

						$date = $(".date").val();
						$time = $(".time").val();
						$(".details").html('<p>' + $date + ' ' + ' ' + $time + '</p>');
					});
				} else if (data == 0) {

					swal({
						title: 'Sorry!! ',
						text: 'Service is not available here!',
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
			title: 'Sorry!! ',
			text: 'Please enter valid pincode!',
			icon: 'warning',
		});
	}
	e.preventDefault();
});
});