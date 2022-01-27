<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href='../assets/css/Faq.css'/>
    <link rel="shortcut icon" href="../assets/Images/favicon.png" type="image/x-icon">
</head>

<body>


    <!-- Navbar start -->

    <nav class="d-flex justify-content-between align-items-center text-white">
        <div class="divlogo">
            <a class="d-block" href="./Homepage.php">
                <img src="../assets/Images/logo.png" alt="logo" />
            </a>
            <div class="tgle_class h1 me-3"></div>
        </div>
        <div class="navmenu text-white d-flex justify-content-center">
            <div class="navItem highlight"><a href="#">Book now</a></div>
            <div class="navItem active"><a href="./Price.php">Prices & Services</a></div>
            <div class="navItem"><a href="#">Warranty</a></div>
            <div class="navItem"><a href="#">Blog</a></div>
            <div class="navItem"><a href="./contact.php">Contact</a></div>
            <div class="navItem highlight"><a type="button" data-bs-toggle="modal" data-bs-target="#myModal">Login</a></div>
            <div class="navItem highlight"><a href="#">Become a Helper</a></div>
        </div>
    </nav>

	<?php include "Login_modal.php"; ?>
		<!-- FAQ Image -->
		<section class="faqimg">
			<img src="../assets/Images/banner.png" alt="faqHeaderImage" />
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

    <!-- newsletter start -->
    <div class="newsletter d-flex flex-column align-items-center justify-content-center">
        <div class="newsletterHeader">GET OUR NEWSLETTER</div>
        <div class="newsletterForm d-flex flex-wrap align-items-center justify-content-center">
            <input type="email" class="rounded-pill" name="email" id="email" placeholder="Your Email" />
            <button class="send rounded-pill">Submit</button>
        </div>
    </div>
    <!-- footer start -->
    <footer>
        <div class="footerMain d-flex align-items-center justify-content-between">
            <div class="footerLogo">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="106" height="78">
                    <image width="106" height="78" xlink:href="data:img/png;base64,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" />
                </svg>
            </div>
            <div class="footer_Menu d-flex flex-wrap align-items-center justify-content-center">
                <div class="footerMenuItem"><a href="./Homepage.php">HOME</a></div>
                <div class="footerMenuItem"><a href="./about.php">ABOUT</a></div>
                <div class="footerMenuItem"><a href="#">TESTIMONIALS</a></div>
                <div class="footerMenuItem"><a href="#">FAQS</a></div>
                <div class="footerMenuItem"><a href="#">INSURANCE POLICY</a></div>
                <div class="footerMenuItem"><a href="#">IMPRESSUM</a></div>
            </div>
            <div class="socialMedia d-flex flex-nowrap align-items-center justify-content-center">
                <a class="d-block" href="https://facebook.com" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="18">
                        <path fill-rule="evenodd" fill="#CCC" d="M1.947 3.48v2.481H0v3.033h1.947V18.1h4.001V8.995h2.685S8.885 7.541 9.7 5.95H5.963V3.876c0-.31.437-.728.868-.728H9.11V.9H6.46C1.848.9 1.947 3.27 1.947 3.48z" />
                    </svg>
                </a>
                <a class="d-block" href="https://instagram.com" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                        <path fill-rule="evenodd" fill="#CCC" d="M14.48 20H5.519A5.524 5.524 0 0 1 0 14.482V5.52C0 2.477 2.475.2 5.519.2h8.961c3.043 0 5.519 2.277 5.519 5.32v8.962A5.525 5.525 0 0 1 14.48 20zm3.744-5.518V5.52a3.748 3.748 0 0 0-3.744-3.744H5.519A3.749 3.749 0 0 0 1.774 5.52v8.962a3.749 3.749 0 0 0 3.745 3.744h8.961a3.748 3.748 0 0 0 3.744-3.744zm-2.855-8.536c-.099 0-.678-.14-.92-.381-.242-.243.221-.578.221-.921 0-.342-.463-.678-.221-.92.242-.242.821-.381.92-.381.343 0 1.111.139.92.381.242.242.381.578.381.92 0 .342-.139.678-.381.921.171.241-.577.381-.92.381zm-5.37 9.208c-2.841 0-5.153-2.312-5.153-5.054 0-2.941 2.312-5.252 5.153-5.252 2.842 0 5.153 2.311 5.153 5.252 0 2.742-2.311 5.054-5.153 5.054zm0-8.532c-1.863 0-3.379 1.516-3.379 3.478 0 1.764 1.516 3.28 3.379 3.28s3.379-1.516 3.379-3.28c0-1.962-1.516-3.478-3.379-3.478z" />
                    </svg>
                </a>
            </div>
        </div>
        <hr />
        <div class="terms text-center">
            ©2018 Helperland. All rights reserved. <a href="#">Terms and Conditions</a> | <a href="#">Privacy Policy</a>
        </div>
    </footer>
</body>
    <script src='../assets/js/Faq.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>