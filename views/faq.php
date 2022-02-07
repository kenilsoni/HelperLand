<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href='./assets/css/Faq.css'/>
    <link rel="shortcut icon" href="./assets/Images/favicon.png" type="image/x-icon">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>


  
	<?php include "header.php"; ?>

	<?php include "Login_modal.php"; ?>
		<!-- FAQ Image -->
		<section class="faqimg">
			<img src="./assets/Images/banner.png" alt="faqHeaderImage" />
		</section>
		<!-- Main container Start -->
		<section>
			<div class="flex-column d-flex align-items-center justify-content-center">
				<div class="faqHeader">FAQs</div>
				<div class="faqheaderstyle w-100 d-flex align-items-center
					justify-content-center">
					<span></span>
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25">
						<path
							fill-rule="evenodd"
							fill="#1D7A8C"
							d="M22.93 13.616c.575 0 1.068-.481 1.068-1.122
							0-.56-.493-1.041-1.068-1.041-.987 0-9.26-.321-9.26-10.053
							0-.921-1.096-1.3-1.671-1.3-.576 0-1.069.379-1.069 1.3 0 9.732-8.39
							10.053-9.26 10.053H.985c-.575.08-.985.481-.985 1.041 0 1.056.492 1.041
							1.67 1.041.466 0 9.26.321 9.26 10.414 0 .56.493 1.041 1.069
							1.041.493.71.986-.401.986-.71 0-10.344 8.876-10.664 9.863-10.664h.082z"
							/>
					</svg>
					<span></span>
				</div>
					<div class="faqHeaderText text-center">
						Whether you are Customer or Service provider, We have tried our best to
						solve all your queries and questions.
				    </div>
			</div>
		</section>

			<div class="select_btn">
				<div class="row d-flex align-items-center justify-content-center">
					<div class="forCustomer active text-center col-12 col-sm-12 col-md-6">FOR
						CUSTOMER</div>
					<div class="forServiceProvider text-center col-12 col-sm-12 col-md-6">FOR
						SERVICE PROVIDER</div>
				</div>
			</div>
			<section class="faq container">
				<div class="accordion" id="faqAccordion"></div>
			</section>
            <?php include "footer.php"; ?>
</body>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src='./assets/js/Faq.js'></script>
</html>