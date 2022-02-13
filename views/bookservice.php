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
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
	<div id="loader" class="lds-dual-ring hidden overlay" style="
    width: 100vw;
    height: 100vh;
"></div>
	<?php include "header.php";  ?>
	<?php include "Login_modal.php";
	?>
	<?php if (!isset($_SESSION['user_id'])) {
		$_SESSION['user_unset'] = 1; ?>
		<script>
			window.location.href = "?controller=Helperland&function=HomePage";
		</script>
	<?php  } ?>

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
					<form id="form-data">

						<label class="pin-label" for="pincode">
							Please enter your zip code:
						</label>
						<br>
						<input class="pincode-input-box" type="number" name="pincode" placeholder="Postal code" required>
						<input class="pin-btn" type="submit">
					</form>
				</div>

				<div class="schedule-plan" id="second">
					<form id="form-2">

						<div class="selectRoomAndBath">
							<div class="media">
								<label for="dateAndtime"> When do you need cleaner? </label>
								<div class="part1">

									<div class="date-input ">

										<label class="datelbl">
											<input type="date" name="date" class="date" value="<?php echo date('Y-m-d'); ?>" />
										</label>
									</div>
									<div class="labl">
										<input type="time" name="time" class="time" />
									</div>

								</div>
							</div>

							<div class="totalTime">
								<label for="dateAndtime"> How long do you need your cleaner to stay?</label>
								<br />
								<select name="range" class="hour">
									<option value="8">8:00</option>
									<option value="8.5">8:30</option>
									<option value="9">9:00</option>
									<option value="9.5">9:30</option>
									<option value="10">10:00</option>
									<option value="10.5">10:30</option>
									<option value="11">11:00</option>
									<option value="11.5">11:30</option>
									<option value="12">12:00</option>
									<option value="12.5">12:30</option>
									<option value="13">13:00</option>
									<option value="13.5">13:30</option>
									<option value="14">14:00</option>
									<option value="14.5">14:30</option>
									<option value="15">15:00</option>
									<option value="15.5">15:30</option>
									<option value="16">16:00</option>
									<option value="16.5">16:30</option>
									<option value="17">17:00</option>
									<option value="17.5">17:30</option>
									<option value="18">18:00</option>
								</select>
							</div>
						</div>
						<div class="extraService-checkbox">
							<h4>Extra services</h4>
							<div id="custom-checkboxes">
								<div class="checkbox">
									<input type="checkbox" name="insideCabinet" id="insideCabinetCheck" class="htmlcheckbox" value="1">
									<label for="insideCabinetCheck" class="label1"><img src="./assets/Images/3.png" id="insideCabinetImg" alt=""></label>
									<p>inside cabinets</p>
								</div>

								<div class="checkbox">
									<input type="checkbox" id="insideFridgeCheck" name="insideFridge" value="2" class="htmlcheckbox">
									<label for="insideFridgeCheck" class="label2"><img src="./assets/Images/5.png" id="insideFridgeImg" alt=""></label>
									<p>inside Fridge</p>
								</div>

								<div class="checkbox">
									<input type="checkbox" name="insideOven" value="3" id="insideOvenCheck" class="htmlcheckbox">
									<label for="insideOvenCheck" class="label3"><img src="./assets/Images/4.png" id="insideOvenImg" alt=""></label>
									<p>inside Oven</p>
								</div>

								<div class="checkbox">
									<input type="checkbox" id="laundryCheck" name="laundry" value="4" class="htmlcheckbox">
									<label for="laundryCheck" class="label4"><img src="./assets/Images/2.png" id="laundryImg" alt=""></label>
									<p>Laundry Wash & Dry</p>
								</div>

								<div class="checkbox">
									<input type="checkbox" id="interiorCheck" name="interior" value="5" class="htmlcheckbox">
									<label for="interiorCheck" class="label5"><img src="./assets/Images/1.png" id="interiorImg" alt=""></label>
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
							<input type="checkbox" name="haveapat" class="pet" value="1"> <label class="have-pet">I have pets at home</label>
						</div>

						<div style="text-align: right;"><button class="continue" id="step2" name="submit">Continue</button></div>

					</form>
				</div>


				<div id="address-list">
					<form id="form-3">
						<label for="Address">
							Enter your details, so we can serve you in better way!
						</label>
						<?php if (isset($_SESSION['addressdata'])) {
							$data = $_SESSION['addressdata'];

							foreach ($data as $users) {
						?>
								<div class="address-check-box1">
									<span><input type="radio" class="radiobtn" name="address1" value="<?php


																										echo $users['AddressLine1'] . ' ' . $users['AddressLine2'] . ' ' . $users['City'] . ' ' . $users['PostalCode'] . ' ' . $users['Mobile'];
																										?>"></span>
									<span>
										<p><strong>Address: </strong>
											<?php

											echo $users['AddressLine1'] . ' ' . $users['AddressLine2'] . ' ' . $users['City'] . ' ' . $users['PostalCode'];


											?> </p>
										<p><strong>Phone number: </strong>
											<?php



											echo $users['Mobile'];


											?></p>
									</span>

								</div>
						<?php }
						} ?>
						<div class="box">

						</div>


						<button type="button" class="add-address-btn">+ Add New Address</button>
						<div class="add-address-box">
							<div class="address-taker-box">
								<div>
									<label for="streetname">
										Street name
									</label>
									<br>
									<input type="text" name="streetname" class="street" placeholder="Street name">
								</div>
								<div>
									<label for="housename">
										House number
									</label>
									<br>

									<input type="text" name="housename" class="house" placeholder="House name">
								</div>
							</div>
							<div class="address-taker-box">
								<div>
									<label for="postalcode">
										Postal code
									</label>
									<br>
									<input type="text" name="postalcode" class="postal" placeholder="Postal code">

								</div>
								<div>
									<label for="city">
										City
									</label>
									<br>
									<input type="text" name="city" class="city" placeholder="City">
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
										<input type="tel" name="phonenumber" class="phone" placeholder="Phone number">
									</div>
								</div>
								<div id="tel2">

								</div>
							</div>
							<div class="Button">
								<button class="save-btn" type="button">Save</button>
								<button class="clear-btn" type="button">Cancel</button>
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

						<div style="text-align: right;"><button class="continue" id="step3" name="submit">Continue</button></div>
					</form>


				</div>

				<div id="make-payment">

					<h4>Pay sechurely with Helperland payment gateway!</h4>


					<form id="form-4">

						<input class="form-control make-payment-input" type="text" placeholder="card number" name="confirm">

						<div class="payment-condition">
							<input type="checkbox" name="acceptPrivacyPolicy" id="acceptPrivacyPolicy">
							<label for="acceptPrivacyPolicy">
								I accepted <a href="">terms and conditions</a>, the cancellation policy and the <a href="">privacy policy</a>. I confirm that Helperland starts to execute the contract before the expiry of the withdrawal period and I lose my right of withdrawal as a consumer with full performance of the contract.
							</label>
						</div>

						<div style="text-align:right"><button class="continue" id="step4" name="submit">Continue</button></div>

					</form>
				</div>

			</div>

		</div>


		<div class="setup-right">
			<div class="price-card">
				<h3>Payment Summary</h3>
				<div class="details">

					<!-- <p>01/01/2018 @ 4:00 pm <span>1 bed, 1 bath.</span></p> -->
				</div>
				<h4>Duration</h4>

				<p style="display: flex;justify-content: space-between;">Basic <span style="text-align: right;">3 Hrs 30 Mins &nbsp;</span< /p>
						<p>Extra Services</p>
						<div class="duration">
							<div class="duration1"></div>
							<div class="duration2"></div>
							<div class="duration3"></div>
							<div class="duration4"></div>
							<div class="duration5"></div>


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
		<div class="payment-small">
			<button type="button" class="btn btn-primary smbtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
				Payment Summery
			</button>
			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h3>Payment Summary</h3>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="setup-right1">
								<div class="price-card">

									<div class="details">

										<!-- <p>01/01/2018 @ 4:00 pm <span>1 bed, 1 bath.</span></p> -->
									</div>
									<h4>Duration</h4>

									<p style="display: flex;justify-content: space-between;">Basic <span style="text-align: right;">3 Hrs 30 Mins &nbsp;</span< /p>
											<p>Extra Services</p>
											<div class="duration">


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

					</div>
				</div>
			</div>
		</div>
	</div>
	</section>

	<?php include "footer.php"; ?>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="./assets/js/bookservice.js">
</script>

</html>