<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href='./assets/css/Contact.css'/>
    <link rel="shortcut icon" href="./assets/Images/favicon.png" type="image/x-icon">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>


   
	<?php include "header.php"; ?>

	<?php include "Login_modal.php"; ?>
	<?php if(isset($_SESSION['contact'])){if($_SESSION['contact']==1){?>
							<script>
							swal({
								title: "Good job! ",
								text: "Your query is send successfully!",
								icon: "success",
								});
								</script>
						<?php unset($_SESSION['contact']);}elseif($_SESSION['contact']==2){?>
							<script>
							swal({
								title: "Sorry!",
								text: "Something went wrong!",
								icon: "error",
								});
								</script>
					<?php	unset($_SESSION['contact']);} } ?>
        <!-- Contact Image -->
		<section class="contactusCarousel">
			<img src="./assets/Images/contactUsImage.png" alt="aboutHeaderImage" />
		</section>

		<div class="contactUsHeader container flex-column d-flex align-items-center justify-content-center">
			<div class="contactUsHeaderText text-center ">Contact us</div>
			<div class="contactUsHeaderDecoration w-100 d-flex align-items-center justify-content-center">
				<span></span>
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25">
					<path
						fill-rule="evenodd"
						fill="#1D7A8C"
						d="M22.93 13.616c.575 0 1.068-.481 1.068-1.122 0-.56-.493-1.041-1.068-1.041-.987 0-9.26-.321-9.26-10.053 0-.921-1.096-1.3-1.671-1.3-.576 0-1.069.379-1.069 1.3 0 9.732-8.39 10.053-9.26 10.053H.985c-.575.08-.985.481-.985 1.041 0 1.056.492 1.041 1.67 1.041.466 0 9.26.321 9.26 10.414 0 .56.493 1.041 1.069 1.041.493.71.986-.401.986-.71 0-10.344 8.876-10.664 9.863-10.664h.082z"
					/>
				</svg>
				<span></span>
			</div>
			<div class="contactInfo w-100 d-flex flex-wrap align-items-center justify-content-evenly">
				<div class="address d-flex flex-column align-items-center justify-content-center">
					<svg xmlns="http://www.w3.org/2000/svg" width="34" height="54">
						<path
							fill-rule="evenodd"
							fill="#1D7A8C"
							d="M17.1.2c4.584 0 8.85 1.713 12.7 4.9 3.06 3.8 4.194 7.252 4.194 12.53 0 4.203-3.059 9.95-5.726 14.975-.819 1.525-1.598 2.991-1.788 4.3L18.237 53.23c-.331.685-.357.978-1.831.645a1.378 1.378 0 0 1-.643-.645L7.952 36.905c-.623-1.309-1.403-2.775-2.202-4.3C3.63 27.581.5 21.833.5 17.63c0-5.278 1.413-8.74 4.491-12.53C8.7 1.913 12.316.2 17.1.2zm0 8.496c2.208 0 4.292.939 5.791 2.444 1.5 1.505 2.435 3.598 2.435 6.49 0 1.74-.935 3.831-2.435 5.337-1.499 1.505-3.583 2.444-5.791 2.444-2.389 0-4.473-.939-5.992-2.444-1.499-1.505-2.435-3.597-2.435-5.337 0-2.894.936-4.985 2.435-6.49 1.519-1.505 3.603-2.444 5.992-2.444zm3.844 5.264c-1.013-1.16-2.395-2.506-3.844-2.506-1.649 0-2.42 1.346-3.54 2.506-1.13.152-2.14 1.54-2.14 3.68 0 .968 1.01 2.357 2.14 3.48 1.12 1.17 1.891 1.534 3.54 1.534 1.449 0 2.831-.364 3.844-1.534 1.012-1.123 1.636-2.512 1.636-3.48.001-2.14-.622-3.528-1.636-3.68zM27.8 6.957c-3.311-2.6-6.856-4.203-10.7-4.203-3.35 0-7.59 1.603-10.161 4.203-2.59 2.58-4.188 6.159-4.188 10.683 0 3.529 2.883 8.925 5.414 13.675.819 1.545 1.598 3.03 2.26 4.398L17.8 49.456l5.772-13.743c.663-1.368 1.568-2.853 2.26-4.398 2.531-4.75 5.414-10.146 5.414-13.675.002-4.524-1.595-8.103-3.446-10.683z"
						/>
					</svg>
					<div class="text-center">1111 Lorem ipsum text 100,<br />Lorem ipsum AB</div>
				</div>
				<div class="phone d-flex flex-column align-items-center justify-content-center">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="46" height="52">
						<image
							width="46"
							height="52"
							xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAA0CAMAAADCKvr4AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACWFBMVEUdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeowdeoz///+TM67+AAAAxnRSTlMAAgYImPdcH8uuYcJZNOX0mQTXDGTaIKIDR078zyEl+o/cG7XsD3JB+BUsB7P5pvYBgRprXwtN8Mqw8iNTMCIqdRKvu/EOEPWfkP08Y7ge0hRdUU/+aR2cxwV/0N6tSDPjhOfilifmKKRAHBmpqyaSUBPv1ttbZSnOFo77t1UK8+oN7dmDnXhLQmZ8glK+0zasVGLJbVeJzemHL8SnCUPdfj6jMoy0F2juWIo5pTpMVnrfRugtky6huuEYXtV9cOCGsqiIbjtmgvnvAAAAAWJLR0THjQVKWwAAAAd0SU1FB+ULEgsMOxZ2x10AAALXSURBVEjHlZVnVxNREIYnhtCCFBWIhmIQkGJwQSIlQECDFFFAgwULoAKCqBAQpAnYsYANURDFgijYsff6/i43myyScza763yZJ5Mnc+7cvblLZA/FPPqPULqpAHe5tocnvLzV8JFnz/f1gz8FLPBdKMdehMCgYJWGFmOJDNtbGxJKYeFLiXQ6aTsCy2w74xkZRdFYLqkHx8TaUhw7aLxqhaSuT+BSQMhKhhKRJKVjlT0ns4OG+iVI2AasdlBKKlFaukR7IzIcFI1MykKiuG4Kz3ZQDtYoNGvNuaL6urx8HgsKlbQeReLtzRsCHLRRxf6y2Fdcd1PxxKhTSqgUm0T1zeyEfHtLGSlRIKpvyds6236bfns8ysVXs2OnkscMJO8KjxPXd6NilitRWKUR13P2pPLosZc/EiKxT1Vth1zU1EraNE+73w6lqJO2SeEPIwfeqJeh0wE0cDlJf5CR41cVHuLyYTTK0ZuszfZbrEUVIMc/glYut+GonNtPoda3c+CODjntazu77FPmo1uOn+1YzrHiTpOc5YT0ZHFQn94b8a/q0u87XmP/0qQ9wcsnT532cOWfgRcPzQZbPotCIL3flX8O57nMXMBFAymKegYGKUeHLqUL/xIu2+EKrl5zgzlmiOXrenOmsG4Y5v8prTcsuDkyiltjRLfvYFz42bWnWB0HvmmQXf7YOCrvsptwD6Ntgn6TNS927uf7ndoH7H4NwVom6Gf2+BmdChMIKSF6OIwJQb86ptd5sslHeEykmYJWcOIwi3XauaDGkyZintbgmZBfH4jnTgXmBV6+Yk9Ty0yOkJ80ivJ4p8pra+cb2/X4VnD9ynd4H+RU0TTgQ1Q3Pgo/L5q0zHxyrvjMwDrAuNBp5DPUfU4D9FsiK8hlGL7EIHFOt6/4ZiSRYIwJwHfHizDqB372kUQEpQHFU43TjR06/JKSuR35XQw2VLo6Ro7OTWH6U83zXyXRw9syqx3QAAAAAElFTkSuQmCC"
						/>
					</svg>
					<div class="text-center">
						<a href="tel:+49(40)123567890">+49 (40) 123 56 7890</a><br /><a href="tel:+49(40)987560000">+49 (40) 987 56 0000</a>
					</div>
				</div>
				<div class="email d-flex flex-column align-items-center justify-content-center">
					<img src="./assets/Images/emailIcon.png" alt="emailIcon" />
					<div class="text-center"><a href="mailto:info@helperland.com">info@helperland.com</a></div>
				</div>
			</div>
			<hr class="w-100" />
		</div>
		<!-- contactUsForm -->
		<div class="contactUsForm container">
			<div class="contactUsFormHeader text-center pb-3">Get in touch with us</div>
			<form action='?function=insert_contactus' method="post">
			
				<div class="row align-items-center justify-content-center g-2">
					<div class="form-item col-12 col-sm-6">
						<input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required />
					</div>
					<div class="form-item col-12 col-sm-6">
						<input type="text" class="form-control" name="lname" id="fname" placeholder="Last Name" required />
					</div>
					<div class="form-item col-12 col-sm-6">
						<div class="input-group mx-0 row">
							<input type="text" class="input-group-text col-2 px-0" id="countryCode" placeholder="+91" />
							<input
								type="text"
								name="mobile"
								class="form-control col-10"
								placeholder="Mobile Number"
								aria-label="Mobile Number"
								aria-describedby="basic-addon1"
								required
							/>
						</div>
					</div>
					<div class="form-item col-12 col-sm-6">
						<input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required/>
					</div>
					<div class="form-item col-12">
						<select class="form-select" aria-label="Subect" name="subject">
							<option selected>Subject</option>
							<option value="1">General</option>
							<option value="2">Inquiry</option>
							<option value="3">Renewal</option>
							<option value="4">Revocation</option>
						</select>
					</div>
					<div class="form-item col-12">
						<textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
					</div>
					<div class="upload-btn-wrapper">
						<button class="btn">Upload a file</button>
						<input type="file" name="image" />
						</div>
					<button class="submit rounded-pill border-0 outline-0" name="submit">Submit</button>
				</div>
			</form>
		</div>
		<!-- Map Image -->
		<div class="map">
			<img src="./assets/Images/locationMarker.png" alt="locationMarker" />

			<img src="./assets/Images/map.png" alt="mapImage" />
		</div>
		<?php include "footer.php"; ?>
</body>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src='./assets/js/Contact.js'></script>
</html>