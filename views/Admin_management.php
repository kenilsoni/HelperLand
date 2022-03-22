<?php
session_start();
if (!isset($_SESSION['user_name'])) {
	header("location:?controller=Helperland&function=HomePage");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Admin - Service Request | Helperland</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
	<link rel="stylesheet" href="./assets/css/admin_management.css" />
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
	<link rel="shortcut icon" href="./assets/Images/favicon.png" type="image/x-icon" />
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->


</head>

<body>
	<div id="loader" class="lds-dual-ring hidden overlay" style="
    width: 100vw;
    height: 100vh;
"></div>
	<nav class="d-flex align-items-center justify-content-between">
		<div class="logo"><a href="#">helperland</a></div>
		<div class="userInfo d-flex align-items-center justify-content-center">
			<svg class="userLogo" xmlns="http://www.w3.org/2000/svg" width="36" height="36">
				<path fill-rule="evenodd" fill="#FFF" d="M35.999 17.999C35.999 8.75 27.924 0 17.999 0 8.75 0 0 8.75 0 17.999c0 5.243 2.254 9.968 5.842 13.26l-.017.015.584.492c.038.032.079.059.117.09.31.257.631.501.959.738.106.076.212.153.32.228.349.798.708.469 1.075.685.08.048.52.094.24.139.402.229.811 1.254 1.231.642l.093.042a17.834 17.834 0 0 0 4.474 1.399c.474.082.953.147 1.438.191l.177.014c.627.04.972.065 1.466.065.491 0 .974-.025 1.455-.064l.182-.013c.481-.044.957-.108 1.984-.188-.517-.008-.476-.015-.436-.023a17.8 17.8 0 0 0 4.292-1.345c.05-.023.1-.044.15-.068.674-.19.799-.394 1.186-.612.096-.055.488-.11 1.178-.166-.539-.208-.193.44.144-.655.121-.082.239-.169.359-.256.287-.206 1.137-.42.844-.643.061-.049.126-.092.186-.142l.599-.5-.018-.015c3.62-3.159 5.895-8.041 5.895-13.31zm-34.691 0c0-9.203 7.488-16.691 16.691-16.691 9.204 0 16.691 7.488 16.691 16.691 0 4.96-2.176 9.419-5.01 12.478-.804-.133-.998-.252-1.196-.351l-5.542-2.771c-.498-.249-.806-.749-.806-.855v-2.385c.128-.159.263-.338.403-.535a13.327 13.327 0 0 0 1.713-3.353c1.558-.394 1.364-.527 1.364-1.487v-2.986c0-.568-.208-1.118-.256-1.551v-3.055c.34-.339-.17-2.257-1.557-3.838-1.206-1.377-3.159-2.074-5.804-2.074-2.645 0-4.597.697-5.803 2.073-1.387 1.582-1.267 3.499-1.233 3.839v3.054a2.385 2.385 0 0 0-.581 1.551v2.977c0 .064.324.736.878 1.19.53 2.077 1.621 3.649 2.024 4.182v1.894c0 .534-.291 1.214-.761 1.282l-5.175 2.823c-.165.089-.158.194-.492.311-3.403-3.058-5.548-7.489-5.548-12.413zm26.483 13.505c-.229.166-.462.327.129.481-.936.575-1.044.141-1.155.21a16.35 16.35 0 0 1-.944.543c-.07.038-.142.073-.213.11-.737.377-1.5.702-2.283.966l-.083.028c-.411.136-.826 1.148-1.247.361l-.004.001c-.424.105-.853.192-1.285.263l-.035.007c-.407.066-.817.114-1.228.15l-.218.016c-.407.031-.815.05-1.226.05-.415 0-.828-.02-1.24-.051l-.213-.016a16.98 16.98 0 0 1-1.292-.163 16.582 16.582 0 0 1-2.547-.635l-.077-.026c-.412-.14-.819-.295-1.219-.467l-.008-.004c-.153-.163-.75-.343-1.116-.534-.048-.025-.096-.048-.143-.074a17.284 17.284 0 0 1-.985-.573c.481.713-.19.113-.285-.183a16.32 16.32 0 0 1-.875-.611c-.03-.022-.058-.045-.087-.068l.062-.035 5.176-2.823c1.25-.486 1.443-1.327 1.443-2.431v-2.358l-.151-.182c-.014-.016-1.322-1.737-1.964-4.068l-.06-.26-.223-.144c-.315-.204-.503-.544-.503-.254v-2.978c0-.304.129-.587.868-.8l-.288-.195v-3.646l-.006.139c-.002.65.444-1.815.914-3.079.946-.241 2.568-1.626 4.819-1.626 2.243 0 3.86 1.335 4.809 1.614 1.107 1.251.926 2.971.925 3.101l-.006 3.498.216.195c.235.212.364.496.364.801v2.986c0-.199-.317.224-.773.365l-.325.1-.105.324a12.1 12.1 0 0 1-1.634 3.294c-.171.827-.338.457-.481.621l-.163.185V26.5c0 .605.587 2.04 1.531 2.026l5.542 2.77c.035.018.07.036.501.055-.467.053-.539.102-.609.153z"></path>
			</svg>
			<div class="userName d-none d-md-block"><?php echo $_SESSION['user_name'] . ' ' . $_SESSION['last_name']; ?></div>
			<a href='?controller=Helperland&function=logout'><img class="mx-2 mx-md-0" src="./assets/Images/logout.png" /></a>
			<div class="tgle_class"></div>
		</div>
	</nav>
	<div class="d-flex align-items-start">
		<div class="verticleMenu d-flex">
			<div class="menu w-100 bg-white">
				<div class="menuItem service_request">Service Requests</div>
				<div class="menuItem user_management">User Management</div>
				<!-- <div class="collapsableMenu">
						<div
							class="box-shadow-none text-start collapseBtn collapsed"
							type="button"
							data-bs-toggle="collapse"
							data-bs-target="#couponCodeManagement"
							aria-expanded="false"
							aria-controls="couponCodeManagement"
						>
							Coupon Code Management
							<img src="./assets/Images/admin-small-arrow.png" />
						</div>
						<div class="collapse" id="couponCodeManagement">
							<a href="#" class="collapseAnch d-block">Coupon Codes</a>
							<a href="#" class="collapseAnch d-block">Usage History</a>
						</div>
					</div>
					<div class="menuItem">Escalation Management</div>
					<div class="menuItem active">Service Requests</div>
					<div class="menuItem">Service Providers</div>
					<div class="menuItem">
						User Management
					  </div>
					 
					<div class="collapsableMenu">
						<div
							class="box-shadow-none text-start collapseBtn collapsed"
							type="button"
							data-bs-toggle="collapse"
							data-bs-target="#financeModule"
							aria-expanded="false"
							aria-controls="financeModule"
						>
							Finance Module
							<img src="./assets/Images/admin-small-arrow.png" />
						</div>
						<div class="collapse" id="financeModule">
							<a href="#" class="collapseAnch d-block">All Transactions</a>
							<a href="#" class="collapseAnch d-block">Generate Payment</a>
							<a href="#" class="collapseAnch d-block">Customer Invoices</a>
						</div>
					</div>
					<div class="menuItem">Zip Code Management</div>
					<div class="menuItem">Rating Management</div>
					<div class="menuItem">Inquiry Management</div>
					<div class="menuItem">Newsletter Management</div>
					<div class="collapsableMenu">
						<div
							class="box-shadow-none text-start collapseBtn collapsed"
							type="button"
							data-bs-toggle="collapse"
							data-bs-target="#contentManagement"
							aria-expanded="false"
							aria-controls="contentManagement"
						>
							Content Management
							<img src="./assets/Images/admin-small-arrow.png" />
						</div>
						<div class="collapse" id="contentManagement">
							<a href="#" class="collapseAnch d-block">Blog</a>
							<a href="#" class="collapseAnch d-block">FAQs</a>
						</div>
					</div> -->
			</div>
			<div class="halfPage d-md-none d-block"></div>

		</div>


		<div class="dataDiv servicereq_data">

			<h2 class="heading">Service Requests</h2>
			<div class="filterForm d-flex flex-wrap align-items-center justify-content-center bg-white">
				<input type="number" class="form-control m-0 box-shadow-none mw-sm-100 myInputTextField" name="sericeId" id="sericeId" placeholder="Service ID" />
				<select name="customer" class="form-select m-0 box-shadow-none" id="customer">
					<option selected value="customer">Customer</option>

				</select>
				<select name="serviceProvider" class="form-select m-0 box-shadow-none" id="serviceProvider">
					<option selected value="serviceProvider">Service Provider</option>

				</select>
				<select name="status" id="status" class="form-select m-0 box-shadow-none">
					<option selected value="status">Status</option>
					<option value="Assign">Assign</option>
					<option value="Completed">Completed</option>
					<option value="Pending">Pending</option>
					<option value="Cancel">Cancel</option>
				</select>
				<label class="dateLabel d-flex align-items-center justify-content-start form-control box-shadow-none" for="fromDate">
					<input type="text" class="m-0 top-0 start-0 box-shadow-none" name="fromDate" id="fromDate" />
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
						<path fill-rule="evenodd" fill="#1FB6FF" d="M.457 20.1V2.143H4.15V.12h1.848v2.023H9.76V.12h1.163v2.023H14.1V.12h1.748v2.023h3.694V20.1H.457zM17.695 6.456H2.304v11.706h15.391V6.456zM7.229 11.385H5.382V9.536h1.847v1.849zm0 4.425H5.382v-2.577h1.847v2.577zm3.694-4.425H9.76V9.536h1.163v1.849zm0 4.425H9.76v-2.577h1.163v2.577zm3.694-4.425H12.77V9.536h1.847v1.849zm0 4.425H12.77v-2.577h1.847v2.577z" />
					</svg>
					<div id="fromDateOutput">From Date</div>
				</label>
				<label class="dateLabel d-flex align-items-center justify-content-start form-control box-shadow-none" for="toDate">
					<input type="text" class="m-0 top-0 start-0 box-shadow-none" name="toDate" id="toDate" />
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
						<path fill-rule="evenodd" fill="#1FB6FF" d="M.457 20.1V2.143H4.15V.12h1.848v2.023H9.76V.12h1.163v2.023H14.1V.12h1.748v2.023h3.694V20.1H.457zM17.695 6.456H2.304v11.706h15.391V6.456zM7.229 11.385H5.382V9.536h1.847v1.849zm0 4.425H5.382v-2.577h1.847v2.577zm3.694-4.425H9.76V9.536h1.163v1.849zm0 4.425H9.76v-2.577h1.163v2.577zm3.694-4.425H12.77V9.536h1.847v1.849zm0 4.425H12.77v-2.577h1.847v2.577z" />
					</svg>
					<div id="toDateOutput">To Date</div>
				</label>
				<button class="search">Search</button>
				<button class="clear">Clear</button>
			</div>
			<table id="adminUserManagementTable">
				<thead class="text-center">
					<tr>
						<th>Service ID</th>
						<th>Service Date</th>
						<th>Customer Details</th>
						<th>Service Provider</th>
						<th>Net Amount</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
			<!-- Model For Edit and Reschedule Service -->
			<div class="modal fade" id="EditServiceRequest" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="staticBackdropLabel">Edit Service Request</h4>
							<a href="#" data-dismiss="modal" aria-label="Close" id="close"></a>
						</div>
						<div class="modal-body">
							<form id="form1">
								<input type="hidden" name="service_id" class="service_id" />
								<input type="hidden" name="sp_id" class="sp_id" />
								<input type="hidden" name="userid" class="userid" />
								<input type="hidden" name="servicereqid_display" class="servicereqid_display" />
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Date</label>
											<input type="date" name="date_modal" class="form-control1 size date_modal">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Time</label>
											<input type="time" name="time_modal" class="form-control1 size time_modal">
										</div>
									</div>
								</div>
								<h5>Service Address</h5>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Street name</label>
											<input type="text" name="add1_modal" class="form-control1 size add1_modal">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>House number</label>
											<input type="text" name="add2_modal" class="form-control1 size add2_modal">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="postalcode">Postal Code</label>
											<input type="text" name="postal_modal" class="form-control1 size postal_modal">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="city">City</label>
											<input type="text" name="city_modal" class="form-control1 size city_modal">
										</div>
									</div>
								</div>
								<h5>Invoice Address</h5>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Street name</label>
											<input type="text"  class="form-control1 size add1_modal" readonly="readonly">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>House number</label>
											<input type="text"  class="form-control1 size add2_modal" readonly="readonly">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Postal Code</label>
											<input type="text"  class="form-control1 size postal_modal" readonly="readonly">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="city">City</label>
											<input type="text"  class="form-control1 size city_modal" readonly="readonly">
										</div>
									</div>
								</div>

								<h5>Why do you want to rechedule service requests?</h5>
								<div class="row">
									<div class="col">
										<textarea rows="5" class="form-control1 size2" name="comment_modal" placeholder="why do you want to rechedule service requests?"></textarea>
									</div>
								</div>
								<h5>Call Center EMP notes</h5>
								<div class="row">
									<div class="col">
										<textarea rows="5" class="form-control1 size2" name="comment2_modal" placeholder="Enter Notes"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<button style="background:#1fb6ff;color:white" type="button" class="btn btn-modal form-control1 size3" data-dismiss="modal" id="update_btn">Update</button>
									</div>
								</div>
							</form>

						</div>

					</div>
				</div>
			</div>
			<!-- End Model -->
			<!-- Model For Refund Amount -->
			<div class="modal fade" id="refund_modal" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="staticBackdropLabel">Refund Amount</h4>
							<a href="#" data-dismiss="modal" aria-label="Close" id="close"></a>
						</div>
						<div class="modal-body">
							<form id="form-refund">
								<input type="hidden" name="re-servid" id="refund_serv_id">
								<div class="row mb-3">
									
											<div class="col-4">
												Paid Amount<br>
												<span class="paid-amt"></span>€
											</div>
											<div class="col-4">
												Refunded Amount<br>
												<span class="refunded-amt"></span>€
											</div>
										
									<div class="col-4">
										In Balance Amount<br>
										<span class="inbalance-amt"></span>€
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label for="">Amount</label>
											<div class="input-group mb-3">
												<input type="text" name="re-amount" class="form-control calculate-amount" aria-label="Text input with dropdown button">
												<select name="method" name="re-method" id="select-method">
													<option value="0" selected>Percentage</option>
													<option value="1">Euro</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="">Calculate (In €)</label>
											<input type="text" name="re-total" class="form-control" id="calculated-amt" readonly="readonly">
										</div>
									</div>
								</div>
								<br>
								<div class="divtitle">Why you want to refund amount?</div>
								<div class="row">
									<div class="col">
										<textarea name="re-comment" rows="3" class="form-control refund-comment" placeholder="Why you want to refund amount?"></textarea>
									</div>
								</div>

								<br>
								<div class="divtitle">Call Center EMP notes</div>
								<div class="row mb-3">
									<div class="col">
										<textarea name="" id="" rows="3" class="form-control" placeholder="Enter Notes?" ></textarea>
									</div>
								</div>

								<div class="row ">
									<div class="col">
										<button style="background:#1fb6ff;color:white" class="btn btn-modal form-control" name="refund" id="btn_refund">Refund</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End Model -->
			<footer>©2018 Helperland. All rights reserved.</footer>
		</div>
		<div class="dataDiv usermgmt_data">
			<h2 class="heading d-flex align-items-center justify-content-between">
				User Management
				<button><img src="./assets/Images/admin-plus-sign.png" />Add New User</button>
			</h2>
			<form class="filterForm d-flex flex-wrap align-items-center justify-content-center bg-white">
				<select name="userName" class="form-select m-0 box-shadow-none" id="userName">
					<option selected value="userName">User Name</option>
				</select>
				<select name="userRole" class="form-select m-0 box-shadow-none" id="userType">
					<option selected value="userType">User Type</option>
					<option value="Customer">Customer</option>
					<option value="Service Provider">Service Provider</option>

				</select>
				<div class="input-group m-0 row">
					<input type="text" class="input-group-text col-2 col-sm-3 px-0" id="countryCode" placeholder="+91" />
					<input type="text" class="form-control col-10 col-sm-9 box-shadow-none" placeholder="Mobile Number" aria-label="Mobile Number" autocomplete="off" id="mobile" />
				</div>
				<label class="dateLabel d-flex align-items-center justify-content-start form-control box-shadow-none" for="fromDate1">
					<input type="text" class="m-0 top-0 start-0 box-shadow-none" name="fromDate1" id="fromDate1" />
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
						<path fill-rule="evenodd" fill="#1FB6FF" d="M.457 20.1V2.143H4.15V.12h1.848v2.023H9.76V.12h1.163v2.023H14.1V.12h1.748v2.023h3.694V20.1H.457zM17.695 6.456H2.304v11.706h15.391V6.456zM7.229 11.385H5.382V9.536h1.847v1.849zm0 4.425H5.382v-2.577h1.847v2.577zm3.694-4.425H9.76V9.536h1.163v1.849zm0 4.425H9.76v-2.577h1.163v2.577zm3.694-4.425H12.77V9.536h1.847v1.849zm0 4.425H12.77v-2.577h1.847v2.577z" />
					</svg>
					<div id="fromDateOutput1">From Date</div>
				</label>
				<label class="dateLabel d-flex align-items-center justify-content-start form-control box-shadow-none" for="toDate1">
					<input type="text" class="m-0 top-0 start-0 box-shadow-none" name="toDate1" id="toDate1" />
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
						<path fill-rule="evenodd" fill="#1FB6FF" d="M.457 20.1V2.143H4.15V.12h1.848v2.023H9.76V.12h1.163v2.023H14.1V.12h1.748v2.023h3.694V20.1H.457zM17.695 6.456H2.304v11.706h15.391V6.456zM7.229 11.385H5.382V9.536h1.847v1.849zm0 4.425H5.382v-2.577h1.847v2.577zm3.694-4.425H9.76V9.536h1.163v1.849zm0 4.425H9.76v-2.577h1.163v2.577zm3.694-4.425H12.77V9.536h1.847v1.849zm0 4.425H12.77v-2.577h1.847v2.577z" />
					</svg>
					<div id="toDateOutput1">To Date</div>
				</label>
				<button class="search2" type="button">Search</button>
				<button class="clear2" type="button">Clear</button>
			</form>
			<div class="tableFilterSm h4 d-flex align-items-center d-md-none px-1">
				Filter Table :
				<img src="./assets/Images/filter.png" tabindex="0" class="sortingButton" data-bs-toggle="popover" data-bs-offset="10,15" data-bs-trigger="focus" data-bs-placement="bottom" data-bs-custom-class="sortingPopover" data-bs-html="true" data-bs-content="
						<label class='sortingRadioLabel form-check-label' for='userNameAsc'>
							<input class='form-check-input box-shadow-none' checked type='radio' data-st-col='0' data-st-type='asc' name='sortingRadio' id='userNameAsc' />
							User Name: A to Z
						</label>
						<label class='sortingRadioLabel form-check-label' for='userNamedesc'>
							<input class='form-check-input box-shadow-none' type='radio' data-st-col='0' data-st-type='desc' name='sortingRadio' id='userNamedesc' />
							User Name: Z to A
						</label>
						<label class='sortingRadioLabel form-check-label' for='postalCodeAsc'>
							<input class='form-check-input box-shadow-none' type='radio' data-st-col='3' data-st-type='asc' name='sortingRadio' id='postalCodeAsc' />
							Postal Code: Assending
						</label>
						<label class='sortingRadioLabel form-check-label' for='postalCodeDesc'>
							<input class='form-check-input box-shadow-none' type='radio' data-st-col='3' data-st-type='desc' name='sortingRadio' id='postalCodeDesc' />
							Postal Code: Decending
						</label>
						<label class='sortingRadioLabel form-check-label' for='distanceAsc'>
							<input class='form-check-input box-shadow-none' type='radio' data-st-col='5' data-st-type='asc' name='sortingRadio' id='distanceAsc' />
							Radius: Near to Far
						</label>
						<label class='sortingRadioLabel form-check-label' for='distanceDesc'>
							<input class='form-check-input box-shadow-none' type='radio' data-st-col='5' data-st-type='desc' name='sortingRadio' id='distanceDesc' />
							Radius: Far to Near
						</label>
						" />
			</div>
			<table id="adminUserManagementTable2">
				<thead>
					<tr>
						<th>User Name</th>
						<th>Date Of Registration</th>
						<th>Uaer Type</th>
						<th>Phone</th>
						<th>Postal Code</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>


			<footer>©2018 Helperland. All rights reserved.</footer>
		</div>

	</div>

	</div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="./assets/js/admin_management.js"></script>

</html>