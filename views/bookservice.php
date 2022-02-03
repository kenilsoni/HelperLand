<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Book Service | Helperland</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
	<link rel="stylesheet" href="./assets/css/bookservice.css" />
	<link rel="shortcut icon" href="./assets/Images/favicon.png" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
	<?php include "header.php";  ?>
	<?php include "Login_modal.php"; ?>
	<!-- Image  -->
	<section class="priceimg">
		<img src="./assets/Images/book-service-banner.jpg" alt="pricesHeaderImage" />
	</section>
	<!-- PriceHeader start -->
	<section class="pricesHeader container">
		<div class="pricesHeaderText text-center">Set up your cleaning service</div>
		<div class="pricesHeaderDecoration w-100 d-flex align-items-center justify-content-center">
			<span></span>
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25">
				<path fill-rule="evenodd" fill="#1D7A8C" d="M22.93 13.616c.575 0 1.068-.481 1.068-1.122 0-.56-.493-1.041-1.068-1.041-.987 0-9.26-.321-9.26-10.053 0-.921-1.096-1.3-1.671-1.3-.576 0-1.069.379-1.069 1.3 0 9.732-8.39 10.053-9.26 10.053H.985c-.575.08-.985.481-.985 1.041 0 1.056.492 1.041 1.67 1.041.466 0 9.26.321 9.26 10.414 0 .56.493 1.041 1.069 1.041.493.71.986-.401.986-.71 0-10.344 8.876-10.664 9.863-10.664h.082z" />
			</svg>
			<span></span>
		</div>
	</section>
	<div class="setup">
		<div class="setup-left">
			<div class="setup-options">
				<ul>
					<li id="1" class="add add-color">
						<img id="img1" src="./assets/Images/setup-service-white.png" alt="setupService" />
						<span>
							Setup
							Service
						</span>
					</li>
					<li id="2">
						<img id="img2" src="./assets/Images/schedule.png" alt="schedule" /> <span>Schedule & Plan</span>
					</li>
					<li id="3">
						<img id="img3" src="./assets/Images/details.png" alt="details" /> <span>Your Details</span>
					</li>
					<li id="4">
						<img id="img4" src="./assets/Images/payment.png" alt="make payment" /> <span>Make Payment</span>
					</li>
				</ul>
			</div>

			<div id="shawdata">
	
				<div class="pincode-check" id="first">
					<form action="?controller=Bookservice&function=checkpincode" method="post">
						<label class="pin-label" for="pincode">
							Please enter your zip code:
						</label>
						<br>
						<input class="pincode-input-box" type="number" name="pincode" placeholder="Postal code">
						<input class="pin-btn" type="submit">
					</form>
				</div>
			
				<?php if(isset($_GET['flag'])) { if($_GET['flag'] == "second") {?>
					<script>
						$("#first").hide();
						$("#1,#3,#4").removeClass("add");
						$("#2").addClass("add-color add");
						$("#3,#4").removeClass("add-color");
						$("#img2").attr("src", "./assets/Images/schedule-white.png");
						$("#img3").attr("src", "./assets/Images/details.png");
						$("#img4").attr("src", "./assets/Images/payment.png");
						$(document).on("click", "#insideCabinetCheck", function() {
							if ($(this).prop("checked") == true) {
								$("#insideCabinetImg").attr("src", "./assets/Images/3-green.png");
							} else if ($(this).prop("checked") == false) {
								$("#insideCabinetImg").attr("src", "./assets/Images/3.png");
							}
						});

						$(document).on("click", "#insideFridgeCheck", function() {
							if ($(this).prop("checked") == true) {
								$("#insideFridgeImg").attr("src", "./assets/Images/5-green.png");
							} else if ($(this).prop("checked") == false) {
								$("#insideFridgeImg").attr("src", "./assets/Images/5.png");
							}
						});

						$(document).on("click", "#insideOvenCheck", function() {
							if ($(this).prop("checked") == true) {
								$("#insideOvenImg").attr("src", "./assets/Images/4-green.png");
							} else if ($(this).prop("checked") == false) {
								$("#insideOvenImg").attr("src", "./assets/Images/4.png");
							}
						});


						$(document).on("click", "#laundryCheck", function() {
							if ($(this).prop("checked") == true) {
								$("#laundryImg").attr("src", "./assets/Images/2-green.png");
							} else if ($(this).prop("checked") == false) {
								$("#laundryImg").attr("src", "./assets/Images/2.png");
							}
						});


						$(document).on("click", "#interiorCheck", function() {
							if ($(this).prop("checked") == true) {
								$("#interiorImg").attr("src", "./assets/Images/1-green.png");
							} else if ($(this).prop("checked") == false) {
								$("#interiorImg").attr("src", "./assets/Images/1.png");
							}
						});
					</script>
					<div class="schedule-plan" id="second">
						<form action="?controller=Bookservice&function=scheduleplan" method="post">
							<label for="selectRoomAndBath">
								Select number of rooms and bath
							</label>
							<br />
							<div>
								<select name="numberOfRoom">
									<option value="1">1 bed</option>
									<option value="2">2 bed</option>
									<option value="3">3 bed</option>
									<option value="4">4 bed</option>
									<option value="5">5 bed</option>
								</select>
								<select name="numberOfBath">
									<option value="1">1 bath</option>
									<option value="2">2 bath</option>
									<option value="3">3 bath</option>
									<option value="4">4 bath</option>
									<option value="5">5 bath</option>
								</select>
							</div>
							<div class="selectRoomAndBath">
								<div>
									<label for="dateAndtime"> When do you need cleaner? </label>
									<div style="display: flex">
										<div class="date-input">
											<img src="./assets/Images/calendar.png" alt="calender" />
											<input type="date" name="date" required/>
										</div>
										<input type="time" name="time" required />
									</div>
								</div>
								<div class="totalTime">
									<label for="dateAndtime"> When do you need cleaner? </label>
									<br />
									<select name="range">
										<option value="1">1.0 Hrs</option>
										<option value="2">2.0 Hrs</option>
										<option value="3">3.0 Hrs</option>
										<option value="4">4.0 Hrs</option>
										<option value="5">5.0 Hrs</option>
									</select>
								</div>
							</div>
							<div class="extraService-checkbox">
								<h4>Extra services</h4>
								<div id="custom-checkboxes">
									<div class="checkbox">
										<input type="checkbox" name="insideCabinet" id="insideCabinetCheck" class="htmlcheckbox" value="1">
										<label for="insideCabinetCheck"><img src="./assets/Images/3.png" id="insideCabinetImg" alt=""></label>
										<p>inside cabinets</p>
									</div>

									<div class="checkbox">
										<input type="checkbox" id="insideFridgeCheck" name="insideFridge"  value="2" class="htmlcheckbox">
										<label for="insideFridgeCheck"><img src="./assets/Images/5.png" id="insideFridgeImg" alt=""></label>
										<p>inside Fridge</p>
									</div>

									<div class="checkbox">
										<input type="checkbox" name="insideOven" value="3" id="insideOvenCheck" class="htmlcheckbox">
										<label for="insideOvenCheck"><img src="./assets/Images/4.png" id="insideOvenImg" alt=""></label>
										<p>inside Oven</p>
									</div>

									<div class="checkbox">
										<input type="checkbox" id="laundryCheck" name="laundry" value="4" class="htmlcheckbox">
										<label for="laundryCheck"><img src="./assets/Images/2.png" id="laundryImg" alt=""></label>
										<p>Laundry Wash & Dry</p>
									</div>

									<div class="checkbox">
										<input type="checkbox" id="interiorCheck" name="interior" value="5"class="htmlcheckbox">
										<label for="interiorCheck"><img src="./assets/Images/1.png" id="interiorImg" alt=""></label>
										<p>interior Windows</p>
									</div>
								</div>
							</div>
							<div class="comment-box">
								<label for="comment">
									Comments
								</label>
								<br>
								<textarea name="comment" id="comment" cols="30" rows="10"></textarea>
								<br>
								<input type="checkbox" name="haveapat" value="1"> <label class="have-pet">I have pets at home</label>
							</div>

							<div style="text-align: right;"><button class="continue" type="submit" name="submit" value="Continue">Continue</button></div>

						</form>
					</div>



				<?php } }?>
				<?php if(isset($_GET['flag'])) { if($_GET['flag'] == "third") { ?>
					

					<script>
					$("#first").hide();
					$("#second").hide();	
					$(document).on("click", ".add-address-btn", function () {
						$(".add-address-box").css("display", "block");
						$(this).hide();
					});
					$("#2,#3").addClass("add-color");
					$("#3").addClass("add");
					$("#1,#2,#4").removeClass("add");
					$("#img3").attr("src", "./assets/Images/details-white.png");
					$("#4").removeClass("add-color");
					$("#img4").attr("src", "./assets/Images/payment.png");
					$("#img2").attr("src", "./assets/Images/schedule-white.png");
					</script>
					<div id="address-list">
						<form action="?controller=Bookservice&function=customer_details" method="post">
							<label for="Address">
								Enter your details, so we can serve you in better way!
							</label>
							<div class="address-check-box">
								<span><input type="radio" name="address1"></span>
								<span>
									<p><strong>Address: </strong><?php 
									//  session_start();
									 if(isset($_SESSION['addressdata']))
									 {
										$data=$_SESSION['addressdata'];
										foreach ($data as $users) { echo $users['AddressLine1'].' '.$users['AddressLine2'].' '.$users['City'].' '.$users['State'].' '.$users['PostalCode'] ;}
									 }
																		
									
									 ?> </p>
									<p><strong>Phone number: </strong><?php 
									//  session_start();
									 if(isset($_SESSION['addressdata']))
									 {
										foreach ($data as $users) { echo $users['Mobile'];}
									 }?></p>
								</span>
							</div>

							<div class="address-check-box">
								<span><input type="radio" name="address1"></span>
								<span>
									<p><strong>Address: </strong> </p>
									<p><strong>Phone number: </strong></p>
								</span>
							</div>

							<button type="button" class="add-address-btn">+ Add New Address</button>
							<div class="add-address-box" action="" method="post">
								<div class="address-taker-box">
									<div>
										<label for="streetname">
											Street name
										</label>
										<br>
										<input type="text" name="streetname" placeholder="Street name">
									</div>
									<div>
										<label for="housename">
											House number
										</label>
										<br>

										<input type="text" name="housename" placeholder="House name">
									</div>
								</div>
								<div class="address-taker-box">
									<div>
										<label for="postalcode">
											Postal code
										</label>
										<br>
										<input type="text" name="postalcode" placeholder="Postal code">

									</div>
									<div>
										<label for="city">
											City
										</label>
										<br>
										<input type="text" name="city" placeholder="City">
									</div>
								</div>
								<div class="address-taker-box tel">
									<div>
										<label for="phonenumber">
											Phone number
										</label>
										<br>
										<div class="tel-box">
											<span class="tel-icon">
												+49
											</span>
											<input type="tel" name="phonenumber" placeholder="Phone number">
										</div>
									</div>
									<div id="tel2">

									</div>
								</div>
								<div class="Button">
									<button class="save-btn" type="submit">Save</button>
									<button class="clear-btn">Cancel</button>
								</div>
							</div>
							<h4 class="favourite-title">Your Favourite Service Providers</h4>
							<div class="favourite-box">
								<label for="comment">
									Your can choose your favourite service provider from the below list
								</label>
								<div class="favourite-worker">
									<div style="text-align: center; width:20%;">
										<img class="favourite-worker-img" src="./assets/Images/cap.png" alt="cap">
										<p class="mb-2">Sandip Patel</p>
										<button class="btn btn-outline-secondary" type="button">Select</button>
									</div>
								</div>

							</div>
							
						<div style="text-align: right;"><input class="continue" type="submit" name="submit" value="Continue"></div>
						</form>
			
					
					</div>


		<?php } }?>
		<?php if(isset($_GET['flag'])) { if($_GET['flag'] == "four") { ?>
			<script>
			$("#first").hide();
			$("#second").hide();
			$("#address-list").hide();
			$("#4").addClass("add");
			$("#1,#2,#3").removeClass("add");
			$("#2,#3,#4").addClass("add-color");
			$("#img4").attr("src", "./assets/Images/payment-white.png");
			$("#img3").attr("src", "./assets/Images/details-white.png");
			$("#img2").attr("src", "./assets/Images/schedule-white.png");

			</script>

			<div id="make-payment">

				<h4>Pay sechurely with Helperland payment gateway!</h4>


				<form action="?controller=Bookservice&function=payment_done" method="post">

					<input class="form-control make-payment-input" type="text" placeholder="card number" name="confirm" required>

					<div class="payment-condition">
						<input type="checkbox" name="acceptPrivacyPolicy" id="acceptPrivacyPolicy" required>
						<label for="acceptPrivacyPolicy">
							I accepted <a href="">terms and conditions</a>, the cancellation policy and the <a href="">privacy policy</a>. I confirm that Helperland starts to execute the contract before the expiry of the withdrawal period and I lose my right of withdrawal as a consumer with full performance of the contract.
						</label>
					</div>

					<div style="text-align:right"><input type="submit" class="complete" value="Complete Booking" name="submit"></div>

				</form>
			</div>
		<?php }} ?>
			</div>


	</div>
		<div class="setup-right">
			<div class="price-card">
				<h3>Payment Summary</h3>
				<div class="details">
					<p>01/01/2018 @ 4:00 pm <span>1 bed, 1 bath.</span></p>
				</div>
				<h4>Duration</h4>
				<div class="duration">
					<p>Basic <span>Inside cabinets (extra)</span></p>
					<p style="text-align: right">3 Hrs <span>30 Mins</span></p>
				</div>
				<div class="cover">
					<div class="totalhour">
						<span><strong>Total Service Time</strong></span>
						<span><strong>3.5 Hrs</strong></span>
					</div>
				</div>
				<div class="cover">
					<div class="pay-list">
						<p>Per cleaning <span>Discount</span></p>
						<p style="text-align: right">
							<strong>$87</strong><span><strong>-$27</strong></span>
						</p>
					</div>
				</div>
				<div class="pay-list totalPay">
					<p>
						<span style="color: #1d7a8c; font-size: 20px; padding-bottom: 11px">Total Payment</span>
						<span>Effective Price</span>
					</p>
					<p style="text-align: right">
						<strong style="color: #1d7a8c; font-size: 42px">$63</strong><span><strong>$50.4</strong></span>
					</p>
				</div>
				<p class="condition">
					<span style="color: red">*</span>You will save 20% according to
					§35a EStG.
				</p>

				<div class="seeWhatInclude">
					<p> <img style="width: 30px;" src="./assets/Images/smile.png" alt="smile"> See what is always included</p>
				</div>
			</div>
			<h3 class="question ">Questions?</h3>
			<div class="accordion" id="accordionExample">
				<div class="accordion-item question-list">
					<h2 class="accordion-header" id="headingOne">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<img class="right-icon" src="./assets/Images/keyboard-right-arrow-button-copy.png" alt="right"> Which Helperland professional will come to my place?
						</button>
					</h2>
					<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
						</div>
					</div>
				</div>
				<div class="accordion-item question-list">
					<h2 class="accordion-header" id="headingTwo">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<img class="right-icon" src="./assets/Images/keyboard-right-arrow-button-copy.png" alt="right"> Which Helperland professional will come to my place?
						</button>
					</h2>
					<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
						</div>
					</div>
				</div>
				<div class="accordion-item question-list">
					<h2 class="accordion-header" id="headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							<img class="right-icon" src="./assets/Images/keyboard-right-arrow-button-copy.png" alt="right"> Which Helperland professional will come to my place?
						</button>
					</h2>
					<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
						</div>
					</div>
				</div>
				<div class="accordion-item question-list">
					<h2 class="accordion-header" id="headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<img class="right-icon" src="./assets/Images/keyboard-right-arrow-button-copy.png" alt="right"> Which Helperland professional will come to my place?
						</button>
					</h2>
					<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
						</div>
					</div>
				</div>
				<div class="accordion-item question-list">
					<h2 class="accordion-header" id="headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							<img class="right-icon" src="./assets/Images/keyboard-right-arrow-button-copy.png" alt="right"> Which Helperland professional will come to my place?
						</button>
					</h2>
					<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
						</div>
					</div>
				</div>
				<div class="accordion-item question-list">
					<h2 class="accordion-header" id="headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
							<img class="right-icon" src="./assets/Images/keyboard-right-arrow-button-copy.png" alt="right"> Which Helperland professional will come to my place?
						</button>
					</h2>
					<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
						</div>
					</div>
				</div>
				<div class="accordion-item question-list">
					<h2 class="accordion-header" id="headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
							<p><img class="right-icon" src="./assets/Images/keyboard-right-arrow-button-copy.png" alt="right"> Which Helperland professional will come to my place?</p>
						</button>
					</h2>
					<div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
						</div>
					</div>
				</div>
			</div>
			<div style="text-align: left;margin:10px 0;"><a class="more-help" href="">For more help</a></div>
		</div>
	</div>
	</section>

	<?php include "footer.php"; ?>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="./assets/js/bookservice.js">
</script>

</html>