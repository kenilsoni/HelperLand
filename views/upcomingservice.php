<?php
session_start();
if (!isset($_SESSION['user_name'])) {
	header("location:?function=HomePage");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Customer - Upcoming Service | Helperland</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
	<link rel="stylesheet" href="./assets/css/upcomingservice.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/r-2.2.9/rg-1.1.4/datatables.min.css" />
	<link rel="shortcut icon" href="./assets/Images/favicon.png" type="image/x-icon" />
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
	
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.css"> -->

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->


</head>

<body>
	<div id="loader" class="lds-dual-ring hidden overlay" style="
    width: 100vw;
    height: 100vh;
"></div>
	<nav class="d-none d-md-flex align-items-center justify-content-between text-white">
		<div class="logoDiv">
			<a class="d-block" href="?function=Homepage">
				<img src="./assets/Images/logo-small.png" alt="logo" />
			</a>
		</div>
		<div class="navMenu collapsed text-white d-flex align-items-start align-items-md-center justify-content-center">
			<div class="navItem"><a href="?function=pricepage">Plans & Services</a></div>
			<div class="navItem"><a href="#">Warranty</a></div>
			<div class="navItem"><a href="#">Blog</a></div>
			<div class="navItem"><a href="?function=contactpage">Contact</a></div>
			<div class="loggedInMenu d-flex align-items-center justify-content-center">
				<div class="notifications position-relative">
					<img src="./assets/Images/icon-notification.png" />
					<span class="position-absolute text-center badge rounded-circle">2</span>
				</div>
				<div class="userInfo d-flex align-items-center justify-content-center" tabindex="0" role="button" data-bs-html="true" data-bs-toggle="popover" title="<div class='userInfoText'>Welcome,<br /><?php if (isset($_SESSION['user_name'])) {
																																																					echo $_SESSION['user_name'];
																																																				} ?></div>" data-bs-content="<a class='d-block userInfoItem newservice' >My Dashboard</a><a class='d-block userInfoItem mysetting_btn' >My Settings</a><a class='d-block userInfoItem' href='?function=logout'>Logout</a>">
					<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36">
						<path fill-rule="evenodd" fill="#FFF" d="M35.999 17.999C35.999 8.75 27.924 0 17.999 0 8.75 0 0 8.75 0 17.999c0 5.243 2.254 9.968 5.842 13.26l-.017.015.584.492c.038.032.079.059.117.09.31.257.631.501.959.738.106.076.212.153.32.228.349.798.708.469 1.075.685.08.048.52.094.24.139.402.229.811 1.254 1.231.642l.093.042a17.834 17.834 0 0 0 4.474 1.399c.474.082.953.147 1.438.191l.177.014c.627.04.972.065 1.466.065.491 0 .974-.025 1.455-.064l.182-.013c.481-.044.957-.108 1.984-.188-.517-.008-.476-.015-.436-.023a17.8 17.8 0 0 0 4.292-1.345c.05-.023.1-.044.15-.068.674-.19.799-.394 1.186-.612.096-.055.488-.11 1.178-.166-.539-.208-.193.44.144-.655.121-.082.239-.169.359-.256.287-.206 1.137-.42.844-.643.061-.049.126-.092.186-.142l.599-.5-.018-.015c3.62-3.159 5.895-8.041 5.895-13.31zm-34.691 0c0-9.203 7.488-16.691 16.691-16.691 9.204 0 16.691 7.488 16.691 16.691 0 4.96-2.176 9.419-5.01 12.478-.804-.133-.998-.252-1.196-.351l-5.542-2.771c-.498-.249-.806-.749-.806-.855v-2.385c.128-.159.263-.338.403-.535a13.327 13.327 0 0 0 1.713-3.353c1.558-.394 1.364-.527 1.364-1.487v-2.986c0-.568-.208-1.118-.256-1.551v-3.055c.34-.339-.17-2.257-1.557-3.838-1.206-1.377-3.159-2.074-5.804-2.074-2.645 0-4.597.697-5.803 2.073-1.387 1.582-1.267 3.499-1.233 3.839v3.054a2.385 2.385 0 0 0-.581 1.551v2.977c0 .064.324.736.878 1.19.53 2.077 1.621 3.649 2.024 4.182v1.894c0 .534-.291 1.214-.761 1.282l-5.175 2.823c-.165.089-.158.194-.492.311-3.403-3.058-5.548-7.489-5.548-12.413zm26.483 13.505c-.229.166-.462.327.129.481-.936.575-1.044.141-1.155.21a16.35 16.35 0 0 1-.944.543c-.07.038-.142.073-.213.11-.737.377-1.5.702-2.283.966l-.083.028c-.411.136-.826 1.148-1.247.361l-.004.001c-.424.105-.853.192-1.285.263l-.035.007c-.407.066-.817.114-1.228.15l-.218.016c-.407.031-.815.05-1.226.05-.415 0-.828-.02-1.24-.051l-.213-.016a16.98 16.98 0 0 1-1.292-.163 16.582 16.582 0 0 1-2.547-.635l-.077-.026c-.412-.14-.819-.295-1.219-.467l-.008-.004c-.153-.163-.75-.343-1.116-.534-.048-.025-.096-.048-.143-.074a17.284 17.284 0 0 1-.985-.573c.481.713-.19.113-.285-.183a16.32 16.32 0 0 1-.875-.611c-.03-.022-.058-.045-.087-.068l.062-.035 5.176-2.823c1.25-.486 1.443-1.327 1.443-2.431v-2.358l-.151-.182c-.014-.016-1.322-1.737-1.964-4.068l-.06-.26-.223-.144c-.315-.204-.503-.544-.503-.254v-2.978c0-.304.129-.587.868-.8l-.288-.195v-3.646l-.006.139c-.002.65.444-1.815.914-3.079.946-.241 2.568-1.626 4.819-1.626 2.243 0 3.86 1.335 4.809 1.614 1.107 1.251.926 2.971.925 3.101l-.006 3.498.216.195c.235.212.364.496.364.801v2.986c0-.199-.317.224-.773.365l-.325.1-.105.324a12.1 12.1 0 0 1-1.634 3.294c-.171.827-.338.457-.481.621l-.163.185V26.5c0 .605.587 2.04 1.531 2.026l5.542 2.77c.035.018.07.036.501.055-.467.053-.539.102-.609.153z" />
					</svg>
					<svg xmlns="http://www.w3.org/2000/svg" width="11" height="6">
						<path fill-rule="evenodd" fill="#FFF" d="M.113.674C.37.597 0 .5 0 .394 0 .287.37.191.113.113c.152.297.399.297.55 0L5.499 5.43 10.336.113c.151.297.398.297.55 0 .484.155.484.406 0 .561l-5.112 5.21c-.151.506-.398.506-.55 0L.113.674z" />
					</svg>
				</div>
				<div class="tgle_class me-3 me-md-0"></div>
			</div>
		</div>
	</nav>
	<nav class="navSm d-flex d-md-none align-items-center justify-content-between">
		<div class="logoDiv">
			<a class="d-block" href="?function=HomePage">
				<img src="./assets/Images/logo-small.png" alt="logo" />
			</a>
		</div>
		<div class="notifications position-relative">
			<img src="./assets/Images/icon-notification.png" />
			<span class="position-absolute text-center badge rounded-circle">2</span>
		</div>
		<div class="tgle_class me-3 me-md-0"></div>
		<div class="fullPage d-flex">
			<div class="fullPageHidden"></div>
			<div class="navSmMenu bg-white">
				<div class="greetings">
					Welcome,<br />
					<strong><?php if (isset($_SESSION['user_name'])) {
								echo $_SESSION['user_name'];
							} ?></strong>
				</div>
				<hr class="my-1" />
				<div class="navSmMenuItem">Dashboard</div>
				<div class="navSmMenuItem">New Service Request</div>
				<div class="navSmMenuItem active">Upcoming Services</div>
				<div class="navSmMenuItem">Service Schedule</div>
				<div class="navSmMenuItem">Service History</div>
				<div class="navSmMenuItem">My Ratings</div>
				<div class="navSmMenuItem">Block Customer</div>
				<div class="navSmMenuItem">My Settings</div>
				<div class="navSmMenuItem">Logout</div>
				<hr class="my-1" />
				<div class="navSmMenuItem"><a href="prices.html">Plans & Services</a></div>
				<div class="navSmMenuItem"><a href="#">Warranty</a></div>
				<div class="navSmMenuItem"><a href="#">Blog</a></div>
				<div class="navSmMenuItem"><a href="contact.html">Contact</a></div>
				<hr class="my-1" />
			</div>
		</div>
	</nav>
	<h1 class="heading d-flex align-items-center justify-content-center flex-wrap text-break">Welcome,&nbsp;<span><?php if (isset($_SESSION['user_name'])) {
																														echo $_SESSION['user_name'];
																													} ?></span></h1>
	<div class="container position-relative d-flex align-items-start justify-content-center">
		<div class="verticalNavbar d-none d-md-block">
			<ul class="verticalNavItems p-0 m-0">
				<!-- <li class="verticalNavItem dashboard_btn" >Dashboard</li> -->
				<li class="verticalNavItem newservice_btn">New Service Request</li>
				<li class="verticalNavItem upcomingservice_btn active">Upcoming Services</li>
				<li class="verticalNavItem schedule_btn">Service Schedule</li>
				<li class="verticalNavItem shistory_btn">Service History</li>
				<li class="verticalNavItem ratings_btn">My Ratings</li>
				<li class="verticalNavItem blockcust_btn">Block Customer</li>
			</ul>
		</div>
		<div class="serviceHistoryTableContainer">
			<div class="upcoming_service">
				<!-- <h2 class="tableHeader">Upcoming History</h2> -->
				<table id="upcomingHistoryTable">
					<thead>
						<tr>
							<th>Service ID</th>
							<th>Service Date</th>
							<th>Customer Details</th>
							<th>Payment</th>
							<th>Distance</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			
			</div>
				<!-- Modal for service detail (upcoming)-->
				<div class="modal fade" id="servicedetail_upcoming" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 555555;">
					<div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Service Details</h5><br>
								<a href="#" data-dismiss="modal" aria-label="Close" id="close"></a>


							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-7">
										<div class="sd_bdr">
											<input type="hidden" class="service_id" />
											<input type="hidden" class="date-time" />
											<strong>Date and time:&nbsp;</strong><span class="date_time"></span><br>
											<strong>Duration:&nbsp;</strong><span class="duration"></span>
											<hr>
										</div>
										<div class="sd_bdr"><strong>Service id:&nbsp;</strong><span class="service_id"></span><br>
											<strong>Extras:&nbsp;</strong><span class="extra_service"></span><br>
											<strong>Net amount:&nbsp;</strong><span class="net_amount"></span>
											<hr>
										</div>
										<div class="sd_bdr">
											<strong>Customer Name:&nbsp;</strong><span class="cust_name"></span><br>
											<strong>Service Address:&nbsp;</strong><span class="service_address"></span><br>
											<hr>
										</div>
										<div class="sd_bdr">
											<strong>Comments:&nbsp;</strong><span class="service_comment"></span>
											<p class="service_pet"></p>
											<hr>
										</div>
										<div class="d-flex">
											<button data-dismiss="modal" class="cancel_modal position-relative d-flex align-items-center justify-content-center rounded-pill text-nowrap" type="button" id="cancel_btn">
												<span>&#10540;</span>&nbsp;Cancel</button>
											<button data-dismiss="modal" class="complete_modal position-relative d-flex align-items-center justify-content-center rounded-pill text-nowrap" type="button" id="complete_btn">
												<span>&#10003;</span>&nbsp;Complete</button>
										</div>
									</div>
									<div class="col-5 modal-section-map">
										<iframe class="h-100 w-100" allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJxzZgCD_hvkcRTC-2Pt6bXt0&amp;key=AIzaSyAag-Mf1I5xbhdVHiJmgvBsPfw7mCqwBKU"></iframe>
									</div>
								</div>
							</div>
							<!-- <div class="modal-footer justify-content-start" style="border:none;"> -->

							<!-- <button data-dismiss="modal" class="cancel position-relative d-flex align-items-center justify-content-center rounded-pill text-nowrap" type="button" data-toggle="modal" data-target="#cancel" id="cancel_service">Cancel</button> -->

							<!-- </div> -->
						</div>
					</div>
				</div>
			<div class="dashboard">

			</div>
			<div class="newservicereq">
				<!-- <div id="filter_pet">
					<input type="checkbox" id="pet_checkbox"/> 
					<label for="pet_checkbox">Include Pet at Home</label>
					</div> -->

				<table id="newServiceTable">
					<thead>
						<tr class="text-center align-item-center">
							<th>Service ID</th>
							<th>Service Date</th>
							<th>Customer Details</th>
							<th>Payment</th>
							<th>Time Conflict</th>

							<th>Action</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>

				<!-- Modal for service detail -->
				<div class="modal fade" id="servicedetail_btn" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 555555;">
					<div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Service Details</h5><br>
								<a href="#" data-dismiss="modal" aria-label="Close" id="close"></a>


							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-7">
										<div class="sd_bdr">
											<input type="hidden" class="service_id" />
											<strong>Date and time:&nbsp;</strong><span class="date_time"></span><br>
											<strong>Duration:&nbsp;</strong><span class="duration"></span>
											<hr>
										</div>
										<div class="sd_bdr"><strong>Service id:&nbsp;</strong><span class="service_id"></span><br>
											<strong>Extras:&nbsp;</strong><span class="extra_service"></span><br>
											<strong>Net amount:&nbsp;</strong><span class="net_amount"></span>
											<hr>
										</div>
										<div class="sd_bdr">
											<strong>Customer Name:&nbsp;</strong><span class="cust_name"></span><br>
											<strong>Service Address:&nbsp;</strong><span class="service_address"></span><br>

											<hr>
										</div>
										<div class="sd_bdr">
											<strong>Comments:&nbsp;</strong><span class="service_comment"></span>
											<p class="service_pet"></p>
											<hr>
										</div>
										<button data-dismiss="modal" class="accept_modal position-relative d-flex align-items-center justify-content-center rounded-pill text-nowrap accept_btn" type="button"><span>&#10003;</span>&nbsp;Accept</button>
									</div>
									<div class="col-5 modal-section-map">
										<iframe class="h-100 w-100" allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJxzZgCD_hvkcRTC-2Pt6bXt0&amp;key=AIzaSyAag-Mf1I5xbhdVHiJmgvBsPfw7mCqwBKU"></iframe>
									</div>
								</div>
							</div>
							<!-- <div class="modal-footer justify-content-start" style="border:none;"> -->

							<!-- <button data-dismiss="modal" class="cancel position-relative d-flex align-items-center justify-content-center rounded-pill text-nowrap" type="button" data-toggle="modal" data-target="#cancel" id="cancel_service">Cancel</button> -->

							<!-- </div> -->
						</div>
					</div>
				</div>
			</div>
			<div class="service_schedule">
				<!-- <div class="d-none arrow_cal"></div> -->
			<div id='calendar'></div>
				
			
			</div>
			<div class="service_history">
			  <table id="servicehistoryTable">
					<thead>
						<tr class=" align-item-center">
							<th>Service ID</th>
							<th>Service Date</th>
							<th>Customer Details</th>
							
						</tr>
					</thead>
					<tbody></tbody>
				</table>

				<!-- Modal for service detail(servicehistory) -->
				<div class="modal fade" id="servicedetail_btn2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 555555;">
					<div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Service Details</h5><br>
								<a href="#" data-dismiss="modal" aria-label="Close" id="close"></a>


							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-7">
										<div class="sd_bdr">
											<input type="hidden" class="service_id" />
											<strong>Date and time:&nbsp;</strong><span class="date_time"></span><br>
											<strong>Duration:&nbsp;</strong><span class="duration"></span>
											<hr>
										</div>
										<div class="sd_bdr"><strong>Service id:&nbsp;</strong><span class="service_id"></span><br>
											<strong>Extras:&nbsp;</strong><span class="extra_service"></span><br>
											<strong>Net amount:&nbsp;</strong><span class="net_amount"></span>
											<hr>
										</div>
										<div class="sd_bdr">
											<strong>Customer Name:&nbsp;</strong><span class="cust_name"></span><br>
											<strong>Service Address:&nbsp;</strong><span class="service_address"></span><br>

											<hr>
										</div>
										<div class="sd_bdr">
											<strong>Comments:&nbsp;</strong><span class="service_comment"></span>
											<p class="service_pet"></p>
											
										</div>
								
									</div>
									<div class="col-5 modal-section-map">
										<iframe class="h-100 w-100" allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJxzZgCD_hvkcRTC-2Pt6bXt0&amp;key=AIzaSyAag-Mf1I5xbhdVHiJmgvBsPfw7mCqwBKU"></iframe>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="my_ratings">
			<table id="mytable4">
					<thead class="d-none">
						<tr class=" align-item-center">
							<th>Service ID</th>
							<th>Service Date</th>
							<th>Customer Details</th>
							
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
			<div class="block_customer">
			<table id="blockcust_table">
					<thead class="d-none">
						<tr class=" align-item-center">
							<th>Service ID</th>
							
							
						</tr>
					</thead>
					<tbody class="d-flex flex-wrap"></tbody>
				</table>
			</div>
			<div class="mysetting">
				<div class="row m-3 text-center" style="color:#646464 ; font-weight: bold;cursor: pointer;">
					<div class="col random " id="btn1">My Detail</div>
					<div class="col  random " id="btn2">Change Password</div>

				</div>
				<div id="tab2">
					<form style="color:#646464 ; font-weight: bold;" id="signup-form" class="form-3">
						<div class="form m-3">
							<div class="row mb-3">
								<div class="col-md-4">
									<label for="inputEmail4">Old Password</label>
									<input type="password" name="oldpassword" id="oldpass" class="form-control" placeholder="Old Password" required>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-md-4">
									<label for="inputEmail4">New Password</label>
									<input type="password" name="password" class="form-control" id="password_reg" placeholder="New Password" required>
									<span class="glyphicon form-control-feedback" id="password_reg1"></span>
								</div>

							</div>
							<div class="row mb-3">
								<div class="col-md-4">
									<label for="inputEmail4">Repeat Password</label>
									<input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Repeat Password" disabled>
									<span class="glyphicon form-control-feedback" id="confirmPassword1">
								</div>

							</div>


						</div>
						<button type="button" name="submit" id="update_password" style="background-color: #1D7A8C; margin-left:18px" class="btn rounded-pill text-white">Save</button>
					</form>

				</div>
				<div id="tab1">
					<form id="user_details">
						<p><b> Account Status : </b> Active </p>
						<div class="basic_detail">
							<h6><b>Basic Details</b></h6>
							<div class="avtar_user"><img class="avatar_main" src="./assets/Images/avatar-hat.png"></div>
						</div>
						<hr class="w-75">
						<div class="row m-20 mb-3">
							<div class="col-sm-4 m-20">
								<div class="form-group">
									<label>First name</label>
									<input type="text" class="form-control fname" name="fname" id="FirstName" placeholder="FirstName" required />
								</div>

							</div>
							<div class="col-sm-4 m-20">
								<div class="form-group">
									<label>Last name</label>
									<input type="text" class="form-control lname" name="lname" placeholder="LastName" />
								</div>
							</div>
							<div class="col-sm-4 m-20">
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control email" name="email" placeholder="Email" disabled />
								</div>
							</div>
						</div>
						<div class="row m-20 mb-3">
							<div class="col-sm-4 m-20">
								<label>Mobile Number</label>
								<div class="input-group">
									<span class="input-group-text" id="basic-addon1">+91</span>
									<input type="number" class="form-control mobile" name="mobile" placeholder="Phone Number" aria-label="Username" aria-describedby="basic-addon1">
								</div>
							</div>
							<div class="col-sm-4 m-20">
								<div class="form-group">
									<label>Date of Birth</label>
									<input type="date" class="form-control dob" name="dob">
								</div>
							</div>
							<div class="col-sm-4 m-20 ">
								<div class="form-group">
									<label>Nationality</label>
									<select class="form-select nationality" aria-label="Default select example" name="nationality">
										<option value="1">German</option>
										<option value="2">American</option>
										<option value="3">Indian</option>
										<option value="4">Canadian</option>
									</select>
								</div>
							</div>
						</div>
						<label> Gender </label>
						<div class="row mb-3 ">
							<div class="form-check col" style="margin-left:20px;">
								<input class="form-check-input" type="radio" name="radiobtn_gender" id="exampleRadios1" value="1">
								<label class="form-check-label" for="exampleRadios1">
									Male
								</label>
							</div>
							<div class="form-check col">
								<input class="form-check-input" type="radio" name="radiobtn_gender" id="exampleRadios2" value="2">
								<label class="form-check-label" for="exampleRadios2">
									Female
								</label>
							</div>
							<div class="form-check col">
								<input class="form-check-input" type="radio" name="radiobtn_gender" id="exampleRadios3" value="3">
								<label class="form-check-label" for="exampleRadios3">
									Rather not to say
								</label>
							</div>
						</div>
						<label> Select Avatar</label>

						<div class="form-group row">
							<div class="columnAvatar col ">
								<input type="radio" name="radiobtn_avatar" id="avatar-female" class="htmlcheckbox" value="avatar-female">
								<label for="avatar-female"> <img class="avatar first " src="./assets/Images/avatar-female.png"></label>
							</div>
							<div class="columnAvatar col ">
								<input type="radio" name="radiobtn_avatar" id="avatar-car" class="htmlcheckbox" value="avatar-car">
								<label for="avatar-car"><img class="avatar second" src="./assets/Images/avatar-car.png"></label>
							</div>
							<div class="columnAvatar col ">
								<input type="radio" name="radiobtn_avatar" id="avatar-hat" class="htmlcheckbox" value="avatar-hat">
								<label for="avatar-hat"> <img class="avatar third " src="./assets/Images/avatar-hat.png"></label>
							</div>
							<div class="columnAvatar col ">
								<input type="radio" name="radiobtn_avatar" id="avatar-iron" class="htmlcheckbox" value="avatar-iron">
								<label for="avatar-iron"> <img class="avatar four " src="./assets/Images/avatar-iron.png"></label>
							</div>
							<div class="columnAvatar col ">
								<input type="radio" name="radiobtn_avatar" id="avatar-male" class="htmlcheckbox" value="avatar-male">
								<label for="avatar-male"><img class="avatar five " src="./assets/Images/avatar-male.png"></label>
							</div>
							<div class="columnAvatar col ">
								<input type="radio" name="radiobtn_avatar" id="avatar-ship" class="htmlcheckbox" value="avatar-ship">
								<label for="avatar-ship"><img class="avatar six " src="./assets/Images/avatar-ship.png"></label>
							</div>
						</div>
						</select>

						<h6 style="margin-top:10px;"><b>My Address</b></h6>
						<hr>
						<div class="row m-20">
							<div class="col-sm-4 m-20 mb-3">
								<div class="form-group">
									<label>Street Name</label>
									<input type="text" class="form-control address1" name="address1" placeholder="StreetName">
								</div>

							</div>
							<div class="col-sm-4 m-20">
								<div class="form-group">
									<label>House Number</label>
									<input type="text" class="form-control address2" name="address2" placeholder="HouseNumber">
								</div>
							</div>
							<div class="col-sm-4 m-20">
								<div class="form-group">
									<label>Postal code</label>
									<input type="number" class="form-control postal" name="postal" placeholder="Postal Code">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label>City</label>
									<input type="text" class="form-control city" name="city" placeholder="City">
								</div>
							</div>
						</div>
						<hr>
						<div class="m-20">
							<button class="Reschedule update_data" type="button"> Save </button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="footerMain d-flex align-items-center justify-content-between">
			<div class="footerLogo">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="106" height="78">
					<image width="106" height="78" xlink:href="data:img/png;base64,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" />
				</svg>
			</div>
			<div class="footerMenu d-flex flex-wrap align-items-center justify-content-center">
				<div class="footerMenuItem"><a href="?function=HomePage">HOME</a></div>
				<div class="footerMenuItem"><a href="?function=aboutpage">ABOUT</a></div>
				<div class="footerMenuItem"><a href="#">TESTIMONIALS</a></div>
				<div class="footerMenuItem"><a href="?function=faqpage">FAQS</a></div>
				<div class="footerMenuItem"><a href="#">INSURANCE POLICY</a></div>
				<div class="footerMenuItem"><a href="#">IMPRESSUM</a></div>
			</div>
			<div class="socialMedia d-flex flex-nowrap align-items-center justify-content-center">
				<a class="d-flex align-items-center justify-content-center rounded-circle" href="https://facebook.com/helperDE" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Like Us on Facebook">
					<svg xmlns="http://www.w3.org/2000/svg" width="9" height="18">
						<path fill-rule="evenodd" fill="#CCC" d="M1.947 3.48v2.481H0v3.033h1.947V18.1h4.001V8.995h2.685S8.885 7.541 9.7 5.95H5.963V3.876c0-.31.437-.728.868-.728H9.11V.9H6.46C1.848.9 1.947 3.27 1.947 3.48z" />
					</svg>
				</a>
				<a class="d-flex align-items-center justify-content-center rounded-circle" href="https://instagram.com" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Follow Us on Instagram">
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

<!-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.js"></script> -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/r-2.2.9/rg-1.1.4/datatables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

<script src="./assets/js/password_validator.js"></script>

<script src="./assets/js/upcomingservice.js"></script>
<?php
if (isset($_GET['id'])) {
	if ($_GET['id'] == 1) { ?>
		<script>
			newservice();
		</script>

	<?php } else if ($_GET['id'] == 7) { ?>
		<script>
			mysetting();
		</script>
	<?php } else if ($_GET['id'] == 2) { ?>
		<script>
			upcoming_service();
		</script>

	<?php } else if ($_GET['id'] == 3) { ?>
		<script>
			schedule_service();
		</script>
	<?php } else if ($_GET['id'] == 4) { ?>
		<script>
			service_history();
		</script>
	<?php } else if ($_GET['id'] == 5) { ?>
		<script>
			rating();
		</script>
	<?php } else if ($_GET['id'] == 6) { ?>
		<script>
			block_customer();
		</script>
<?php }
} ?>

</html>