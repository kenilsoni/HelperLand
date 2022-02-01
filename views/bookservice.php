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
</head>

<body>
	<?php include "header.php"; ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="./assets/js/bookservice.js">
</script>
</html>