<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Become A Provider | Helperland</title>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="./assets/css/become_provider.css" />
		<link rel="shortcut icon" href="./assets/Images/favicon.png" type="image/x-icon" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>
	</head>
	<body>
		<nav class="d-flex justify-content-between text-white" id="vlr">
			<div class="logoDiv">
				<a class="d-block" href="?function=Homepage">
					<img id="new" src="./assets/Images/white-logo-transparent-background.png" alt="logo" />
				</a>
				<div class="tgle_class h1 me-5"></div>
			</div>
			<div class="navMenu text-white d-flex justify-content-center align-items-center align-items-start ">
				<div class="navItem active"><a href="../BookService/BookService.html">Book a Cleaner</a></div>
				<div class="navItem"><a href="?function=pricepage">Prices</a></div>
				<div class="navItem"><a href="#">Our Guarantee</a></div>
				<div class="navItem"><a href="#">Blog</a></div>
				<div class="navItem"><a href="?function=contactpage">Contact us</a></div>
				<div class="navItem active"><a  type="button" data-bs-toggle="modal" data-bs-target="#myModal">Login</a></div>
				<div class="navItem active"><a href="?function=become_providerpage">Become a Helper</a></div>
				<div class="dropdown">
					<div class="d-flex" type="button" id="languageChanger" data-bs-toggle="dropdown" aria-expanded="false">
						<div class="languageFlag">
							<img src="./assets/Images/flag.png" alt="flag" />
						</div>
						<div class="arrowBottom">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="7">
								<image
									width="12"
									height="7"
									xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAHCAQAAACWu2SvAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQflCxILOC+3huDXAAAAa0lEQVQI103NoQoCYQDD8VkMggYRLYLFt7rmI10ziMVkEs6m2ZcwWQQRsdh/huM73dL+jC0qjYn8eaSxijNu5h2euuISA0c8LUUs3HEybFt7fMyMvXEQKQMbvDywa8nvsgbrknvSaZt+qhK+nGpkpn2sFJAAAAAASUVORK5CYII="
								/>
							</svg>
						</div>
					</div>
					<ul class="dropdown-menu mt-3 me-1" aria-labelledby="languageChanger">
						<li class="languageFlag d-flex align-items-center justify-content-center dropdown-item">
							<div class="me-2">
								<img src="./assets/Images/flag.png" alt="flag" />
							</div>
							<div class="countryName">Japan</div>
						</li>
						<li class="languageFlag d-flex align-items-center justify-content-center dropdown-item">
							<div class="me-2">
								<img src="./assets/Images/flag.png" alt="flag" />
							</div>
							<div class="countryName">Dubai</div>
						</li>
						<li class="languageFlag d-flex align-items-center justify-content-center dropdown-item">
							<div class="me-2">
								<img src="./assets/Images/flag.png" alt="flag" />
							</div>
							<div class="countryName">France</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>


	<?php include "Login_modal.php"; ?>
		<header class="container-fluid d-flex align-items-center justify-content-center flex-column">
			<form action="?function=createaccount_user" method="post" id="signup-form">
				<h2 class="formHeader text-center">Register Now!</h2>
				<input type="hidden" name="usertype" value="2">
				<input class="form-control" type="text" name="fname" id="fname" placeholder="First Name" required/>
				<input class="form-control" type="text" name="lname" id="lname" placeholder="Last Name" required/>
				<input class="form-control" type="email" name="email" id="ProviderEmail" placeholder="Email Address" required/>
				<div class="input-group mx-0 row">
					<input type="text" class="input-group-text col-2 px-0" id="countryCode" placeholder="+91" />
					<input
						type="text"
						name="mobile"
						id="phone"
						class="form-control col-10"
						placeholder="Phone Number"
						aria-label="Phone Number"
						aria-describedby="basic-addon1"
						autocomplete="off"
						required
					/>
				</div>
				<input class="form-control" type="password" name="password" id="password_reg" placeholder="Password" required/>
				<span class="glyphicon form-control-feedback" id="password_reg1"></span>
				<input class="form-control" type="password"name="confirmPassword" id="confirmPassword"  placeholder="Confirm Password" required disabled/>
				<span class="glyphicon form-control-feedback" id="confirmPassword1">
     					 </span>
				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="sendNewsletter" />
					<label class="form-check-label" for="sendNewsletter">Send me newsletters from Helperland</label>
				</div>
				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="acceptTerms" />
					<label class="form-check-label" for="acceptTerms">
						I accept <a href="#">terms and conditions</a> & <a href="#">privacy policy</a>
					</label>
				</div>
				<img src="./assets/Images/iAmNotRobot.png" alt="i am not robot image" />
				<button class="become rounded-pill m-auto d-flex align-items-center justify-content-center" type="submit">
					<span>Get Started</span>
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="11">
						<path
							fill-rule="evenodd"
							fill="#FFF"
							d="M.14 4.533h20.786C19.677 2.746 19.56 1.581 18.992.6c2.84 2.131 6.531 3.557 10.993 4.898-4.462 1.285-7.991 2.852-10.993 6.102.191-2.32.709-3.363 1.973-5.263H.14V4.533z"
						/>
					</svg>
				</button>
			</form>
			<svg id="scrollDown" xmlns="http://www.w3.org/2000/svg" width="47" height="47">
				<path
					stroke="#FFF"
					fill="none"
					d="M23.499 3.499c11.046 0 20 8.955 20 20 0 11.046-8.954 20-20 20-11.045 0-20-8.954-20-20 0-11.045 8.955-20 20-20z"
				/>
				<path
					fill-rule="evenodd"
					fill="#FFF"
					d="M30.584 25.522a.835.835 0 0 0-1.188 0l-5.055 5.083V14.348c0-.47-.378-.85-.845-.85-.206 0-.845.38-.845.85v16.257l-5.049-5.083a.835.835 0 0 0-1.188 0c.426.331.426.863 0 1.195l6.491 6.527c.795.165.378.248.598.248a.837.837 0 0 0 .597-.248l6.491-6.527a.865.865 0 0 0-.007-1.195z"
				/>
			</svg>
		</header>

		<div class="howItWorks position-relative">
			<svg class="spray" xmlns="http://www.w3.org/2000/svg" width="199" height="219">
				<path
					fill-rule="evenodd"
					fill="#F6F6F6"
					d="m195.94 45.631-10.999-2.114 6.004-12.35 8.045 8.19-3.05 6.274zm-40.835-14.435L129.21 54.528l-29.02-14.166 3.691-10.138-18.271-8.78s-9.745-5.658 3.177-9.331C96.431 9.939 123.869.744 123.869.744s5.62-2.099 11.662.851l53.158 25.965-7.873 16.195-25.711-12.559zM120.64 74.482s2.969 3.122.271 8.67c-1.968 4.049-5.529 2.121-7.731 6.982-1.539 2.834 2.172 5.814-.714 11.75-1.641 3.375-7.16 3.662-8.735 6.901-1.574 3.455-1.177 5.985-.241 7.753.936 2.462 13.496 17.282-.872 46.838-19.485 40.081-24.468 50.608-24.468 50.608s-2.438 6.891-7.272 4.53c-4.438-2.361-69.052-33.729-69.052-33.729s-4.32-3.113.403-12.83l21.65-44.535s19.475-41.089 63.819-69.029c6.139 2.751 32.942 16.091 32.942 16.091zM93.795 41.33l38.877 18.989-6.298 12.956-38.877-18.99 6.298-12.955zm81.834 3.899s-9.718 20.577-2.359 42.937c0 0 1.663 3.317-1.455 4.974-1.226.474-3.013.11-6.369-5.036-6.452-9.893-13.546-28.139-7.542-51.533l17.725 8.658z"
				/>
			</svg>
			<svg class="vacumCleaner" xmlns="http://www.w3.org/2000/svg" width="251" height="236">
				<path
					fill-rule="evenodd"
					fill="#F6F6F6"
					d="M238.727 112.588c-4.067 5.18-10.154 8.322-15.874 10.248v-20.722c.716-.575 1.416-1.181 2.053-1.889 6.903-7.679 9.594-23.629 6.509-47.416-1.105-12.701-7.313-22.148-17.633-28.086-14.035-8.077-34.667-8.198-52.56-.315-16.645 7.332-29.361 24.175-37.305 37.52 4.207 2.379 5.934 7.609 3.807 12.02-1.597 3.319-4.916 5.254-8.375 5.254-.909 0-2.619-.287-3.876-.866L68.855 180.421c3.928 2.517 5.441 7.739 3.315 11.863-1.625 3.254-4.912 5.138-8.324 5.138-.859 0-1.718-.167-2.568-.322l-6.439 14.013h.872c5.126 0 9.286 4.147 9.286 9.258 0 5.11-4.16 9.257-9.286 9.257H9.285c-5.126 0-9.285-4.147-9.285-9.257 0-5.111 4.159-9.258 9.285-9.258h25.149l10.121-22.176-.307-.152c-4.591-2.278-6.462-7.832-3.588-12.41 1.644-4.494 7.047-6.125 11.584-4.267l44.987-98.516a92.42 92.42 0 0 1 1.556-3.625c-3.083-2.666-4.165-7.128-2.313-10.974 1.936-4.022 6.398-5.999 10.936-4.193 8.893-16.65 24.562-37.32 46.3-47.328 23.492-10.344 50.071-9.877 69.92 1.217 14.725 8.795 24.253 23.754 26.248 42.125 3.228 29.647-.417 49.855-11.151 61.774zm-47.992-21.82h18.186c5.589 0 4.643-.485 4.643 4.629v73.202c-5.159-2.397-10.888-3.772-16.947-3.772-22.238 0-40.335 18.038-40.335 40.583 0 8.892 3.189 17.409 8.491 24.218h-44.064c-5.13 0-9.285-6.457-9.285-11.068l8.77-56.186c13.668-67.244 65.411-71.606 70.541-71.606zm5.882 84.072c6.25 0 12.067 1.114 16.947 4.299a31.436 31.436 0 0 1 4.642 3.702 31.566 31.566 0 0 1 4.652 5.712c3.032 4.777 4.814 10.419 4.814 16.807 0 6.086-1.968 12.048-5.329 16.996-1.806 2.774-4.03 5.004-6.556 6.985-2.683 2.106-5.157 3.777-9.011 4.915a30.897 30.897 0 0 1-10.159 1.736c-3.047 0-6.968-.629-10.158-1.736a31.05 31.05 0 0 1-8.626-4.628c-7.437-5.656-12.266-13.968-12.266-24.218 0-17.44 13.928-30.57 31.05-30.57zm0 45.72c8.599 0 15.572-6.952 15.572-15.2 0-8.896-6.973-15.849-15.572-15.849-8.477 0-15.157 6.953-15.157 15.849 0 8.248 6.73 15.2 15.157 15.2z"
				/>
			</svg>
			<svg class="broom" xmlns="http://www.w3.org/2000/svg" width="258" height="273">
				<path
					fill-rule="evenodd"
					fill="#F6F6F6"
					d="M257.913 165.919c0 2.371-.714 3.181-3.094 4.742L112.48 269.54c-.237.237-4.998 4.268-11.9 3.32-1.905-.238-84.737-12.094-92.116-13.516-4.998-.949-5.712-5.928 0-8.774 13.856-7.113 79.025-41.021 125.915-64.733-2.909 2.608-3.571 9.484-3.571 9.484L17.51 253.416l87.116 13.041 140.91-97.693-53.793-4.979-20.947 10.67c-1.904-1.615-5.474-3.082-8.806-3.082h-.715c10.236-5.217 17.852-8.774 20.47-10.196 7.617-3.795 12.14-4.269 14.525-4.269h1.423c1.19 0 42.607 4.743 55.698 5.691 2.856.238 4.998 1.621 4.522 3.32zm-110.919 24.66c1.19-.948 19.756-10.67 20.708-11.144.476-.238.714-.238.714 0 .238.237.238.948.238 2.515v17.166l-22.85 14.464v-19.681c0-.475 0-2.371 1.19-3.32zm-15.472 25.609s10.473 3.083 10.949 3.32c.477.237 1.429.237 2.381-.237l27.134-17.073c.715-.237 1.19-1.068 1.19-1.897v-21.34l19.995-10.434 39.988 4.313-129.485 88.875-71.407-10.265 98.541-50.912-.951 12.568c0 1.434.475 2.608 1.665 3.082zm32.61-38.558c-.238-.329-18.566 9.155-20.232 10.104-2.142 1.185-2.619 5.69-2.619 6.165v20.629l-6.902-2.134s1.428-14.938 2.071-16.836c-.167-1.896.785-7.113 5.069-8.818.714-.903 17.376-9.914 18.328-10.388 3.333-1.423 4.047 0 4.285 1.278zm-26.659 1.331-2.618-3.557L1.86 8.472C.579 6.338.341 3.73 1.8 2.7 3.942.41 6.561.647 8.227 2.781l134.721 168.354 2.856 3.557 1.904 2.609c-2.856 1.66-5.713 3.082-8.093 4.268l-2.142-2.608z"
				/>
			</svg>
			<svg class="brush" xmlns="http://www.w3.org/2000/svg" width="170" height="255">
				<path
					fill-rule="evenodd"
					fill="#F6F6F6"
					d="m129.256 121.387 37.308 13.764-9.133 24.842L54.82 121.864l8.395-24.644 37.308 13.567L141.257.1l6.497 2.286 6.497 2.397 2.744 1.012 6.497 2.397 6.497 2.398-40.733 110.797zm18.41 133.605-32.192-11.877 7.243-45.52-13.246-4.887-7.242 45.52-21.7-8.005 15.601-42.437-12.994-4.794-15.601 42.436-21.798-8.042 23.667-39.46-13.228-4.466-23.668 39.046L.8 200.516l46.631-66.303 107.067 39.501-6.832 81.278z"
				/>
			</svg>
			<svg class="bigBroom" xmlns="http://www.w3.org/2000/svg" width="193" height="303">
				<path
					fill-rule="evenodd"
					fill="#F6F6F6"
					d="m178.783 182.523-62.842 30.161-2.224 1.07-2.225 1.07L9.319 2.463C8.595.952 7.1.11 5.429.11c-.651 0-1.282.049-1.874.337l-1.114.54A4.289 4.289 0 0 0 .246 3.464C.132 4.559.64 5.733.439 6.774L102.587 219.95l-2.224.21-2.229 1.07-72.29 34.7c-9.744 4.588-2.214 17.342 1.866 24.774v19.819c0 1.368.466 2.577 1.827 2.577s2.763-1.209 2.763-2.577v-22.197l4.634-2.379v19.622c0 1.367 1.446 2.891 2.466 2.891 1.36 0 2.465-1.524 2.465-2.891v-22l4.931-2.379v19.528c0 2.132 1.105 2.477 2.466 2.477 1.361 0 2.465-.345 2.465-2.477v-21.906l4.931-2.378v19.329a2.472 2.472 0 0 0 2.466 2.477 2.472 2.472 0 0 0 2.466-2.477V264.56l4.93-2.883v19.131a2.473 2.473 0 0 0 2.466 2.478 2.473 2.473 0 0 0 2.466-2.478v-21.509l4.931-2.379v18.829a2.472 2.472 0 0 0 2.466 2.477 2.472 2.472 0 0 0 2.465-2.477v-21.207l4.931-2.378v18.938a2.473 2.473 0 0 0 2.466 2.477c2.009 0 2.466-1.11 2.466-2.477v-21.316l4.93-2.379v18.536a2.473 2.473 0 0 0 2.466 2.478c1.361 0 2.807-1.11 2.807-2.478V245.24l4.59-2.594v18.65c0 1.368 1.77 2.477 2.465 2.477a2.472 2.472 0 0 0 2.466-2.477v-21.029l4.931-2.378v18.041a2.472 2.472 0 0 0 2.465 2.477 2.472 2.472 0 0 0 2.466-2.477v-20.419l4.931-2.379v17.843a2.473 2.473 0 0 0 2.466 2.477 2.472 2.472 0 0 0 2.465-2.477v-20.221l4.932-2.378V246.2c0 1.187 1.104 2.297 2.663 2.297 1.163 0 2.268-1.11 2.268-2.297v-20.203l4.931-2.378v18.031c0 .782 1.104 1.893 2.465 1.893 1.362 0 2.466-1.111 2.466-1.893v-20.409l4.931-2.379v17.248a2.472 2.472 0 0 0 2.466 2.477 2.471 2.471 0 0 0 2.465-2.477v-19.626l4.932-2.378v17.05a2.472 2.472 0 0 0 2.465 2.477c1.361 0 3.141-1.11 3.141-2.477v-19.429l4.85-2.378V226.2c0 1.368.51 2.478 1.871 2.478a2.472 2.472 0 0 0 2.466-2.478v-19.229l4.931-2.379v16.654a2.473 2.473 0 0 0 2.466 2.477 2.472 2.472 0 0 0 2.465-2.477v-19.032l3.201-1.546c0-8.211-3.062-23.348-14.217-18.145z"
				/>
			</svg>
			<svg class="smallBrush" xmlns="http://www.w3.org/2000/svg" width="242" height="245">
				<path
					fill-rule="evenodd"
					fill="#F6F6F6"
					d="M237.946 240.96c-2.688 2.701-6.207 4.16-9.733 4.16-3.522 0-7.045-1.459-9.733-4.16l-82.9-83.322 19.87-18.858 82.496 82.619c5.375 5.395 5.375 14.154 0 19.561zm-88.574-108.584-19.466 19.56-1.418 1.429-1.086 1.088-14.021-14.095-9.93-9.975L127.7 106.4l9.196 8.847 14.756 15.553-.862.146-1.418 1.43zM7.779 85.467c-3.286 1.34-6.264-.793-7.351-3.682-.287-.665-.028-1.6.272-2.427-.41-1.82.138-3.637 2.097-4.891a110.678 110.678 0 0 0 6.659-4.606c4.306-3.221 7.977-6.645 10.777-10.571 2.472-3.954 4.302-7.68 5.377-13.471.678-3.321 4.373-4.936 7.51-4.225 1.185.301 2.488.512 3.792.669.862.104 1.734.177 2.6.238.899.06 1.797.109 2.696.14l3.977-3.995c-.245-.685-.498-1.372-.811-2.038-.04-.081-.061-.165-.1-.246a7.433 7.433 0 0 1-.635-1.867 5.896 5.896 0 0 1 .221-3.032l1.501 1.304 1.52 2.113 1.521.531 10.969 9.528L80.59 62.42l-9.968-24.963-6.47-16.869-.792-2.058-.79-2.055-.309-.807A389.311 389.311 0 0 1 72.793 1.812C74.229.2 76.572.332 78.65.307c.679.211 1.305.549 1.887.957 1.443.394 1.046.859 1.44 1.402l.443-.063-.263.281c.318.489.57 1.013.698 1.594.025.112.06.226.09.342l38.565 95.112-23.989 24.498L7.779 85.467z"
				/>
			</svg>
			<h2 class="howItWorksHeader text-center">How it works</h2>
			<div class="container-fluid d-flex align-items-center justify-content-center flex-column howItWorksCards">
				<div class="row flex-wrap-reverse align-items-center justify-content-center justify-content-md-between howItWorksCard">
					<div class="info col-12 col-sm-12 col-md-6">
						<h3 class="howItWorksCardHeader text-center text-md-start">Register Yourself</h3>
						<p class="howItWorksCardText text-center text-md-start">
							Provide your basic information to register yourself as a service provider.
						</p>
						<a href="#" class="readMore d-flex align-items-center justify-content-center justify-content-md-start">
							Read More
							<svg xmlns="http://www.w3.org/2000/svg" width="29" height="9">
								<path
									fill-rule="evenodd"
									fill="#4F4F4F"
									d="M.1 3.708h21.392C20.456 2.246 19.94 1.292 19.887.6c2.357 1.634 5.421 2.8 9.213 3.897-3.792 1.051-6.721 2.334-9.213 4.803.573-1.708.589-2.562 1.637-4.117H.1V3.708z"
								/>
							</svg>
						</a>
					</div>
					<div
						class="howItWorksCardImage d-flex align-items-center justify-content-center justify-content-md-end col-12 col-sm-12 col-md-6"
					>
						<img src="./assets/Images/howItWorksCardImage1.png" alt="image1" />
					</div>
				</div>
				<div class="row align-items-center justify-content-center justify-content-md-between howItWorksCard">
					<div
						class="
							howItWorksCardImage
							d-flex
							align-items-center
							justify-content-center justify-content-md-start
							col-12 col-sm-12 col-md-6
						"
					>
						<img src="./assets/Images/howItWorksCardImage2.png" alt="image2" />
					</div>
					<div class="info col-12 col-sm-12 col-md-6">
						<h3 class="howItWorksCardHeader text-center text-md-start">Get service requests</h3>
						<p class="howItWorksCardText text-center text-md-start">
							You will get service requests from customes depend on service area and profile.
						</p>
						<a href="#" class="readMore d-flex align-items-center justify-content-center justify-content-md-start">
							Read More
							<svg xmlns="http://www.w3.org/2000/svg" width="29" height="9">
								<path
									fill-rule="evenodd"
									fill="#4F4F4F"
									d="M.1 3.708h21.392C20.456 2.246 19.94 1.292 19.887.6c2.357 1.634 5.421 2.8 9.213 3.897-3.792 1.051-6.721 2.334-9.213 4.803.573-1.708.589-2.562 1.637-4.117H.1V3.708z"
								/>
							</svg>
						</a>
					</div>
				</div>
				<div class="row flex-wrap-reverse align-items-center justify-content-center justify-content-md-between howItWorksCard">
					<div class="info col-12 col-sm-12 col-md-6">
						<h3 class="howItWorksCardHeader text-center text-md-start">Complete Service</h3>
						<p class="howItWorksCardText text-center text-md-start">
							Accept service requests from your customers and complete your work.
						</p>
						<a href="#" class="readMore d-flex align-items-center justify-content-center justify-content-md-start">
							Read More
							<svg xmlns="http://www.w3.org/2000/svg" width="29" height="9">
								<path
									fill-rule="evenodd"
									fill="#4F4F4F"
									d="M.1 3.708h21.392C20.456 2.246 19.94 1.292 19.887.6c2.357 1.634 5.421 2.8 9.213 3.897-3.792 1.051-6.721 2.334-9.213 4.803.573-1.708.589-2.562 1.637-4.117H.1V3.708z"
								/>
							</svg>
						</a>
					</div>
					<div
						class="howItWorksCardImage d-flex align-items-center justify-content-center justify-content-md-end col-12 col-sm-12 col-md-6"
					>
						<img src="./assets/Images/howItWorksCardImage3.png" alt="image3" />
					</div>
				</div>
			</div>
		</div>

		<?php include "footer.php"; ?>
	</body>
	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"
	></script>
	<script src="./assets/js/password_validator.js"></script>
	<script>
		const nav = document.querySelector("nav");
		const tgle_class = document.querySelector(".tgle_class");
		
		const navMenu = document.querySelector(".navMenu");
		

        const scrollDown = document.querySelector("#scrollDown");
        const howItWorks = document.querySelector(".howItWorks");


        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        const tooltipList = tooltipTriggerList.map((tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl));

		window.addEventListener("scroll", () => {
			if (window.scrollY > 70) {
				nav.classList.add("bg-grey");
				document.getElementById("new").style.maxHeight="64px";
                   
                document.getElementById("new").style.maxWidth="93px";
			} else {
				nav.classList.remove("bg-grey");
				document.getElementById("new").style.maxHeight="102px";
                   
                document.getElementById("new").style.maxWidth="138px";
			}
		});
        scrollDown.addEventListener("click", () => {
            scrollDown.scrollIntoView();
        });
		tgle_class.addEventListener("click", () => {
			tgle_class.classList.toggle("open");
			navMenu.classList.toggle("open");
		});
	</script>
</html>