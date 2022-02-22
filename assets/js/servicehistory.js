var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
var popoverList = popoverTriggerList.map((popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl));

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map((tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl));
var tbody = document.getElementById("service_body");
var tbody2 = document.getElementById("dashboard_data");
var verticalNavbar = document.querySelector(".verticalNavbar");
var navMenu = document.querySelector(".fullPage");
var fullPageHidden = document.querySelector(".fullPageHidden");
var navbarHamburger = document.querySelector(".navSm .tgle_class");

verticalNavbar.style.minHeight = `${window.innerHeight - document.querySelector("nav").clientHeight - document.querySelector("heading") - 60}px`;

navbarHamburger.addEventListener("click", () => navMenu.classList.add("open"));
fullPageHidden.addEventListener("click", () => navMenu.classList.remove("open"));


var names = [
	"enry Evelyn",
	"Alexander Harper",
	"Mason Camila",
	"Michael Gianna",
	"iam Olivia",
	"oah Emma",
	"liver Ava",
	"lijah Charlotte",
	"illiam Sophia",
	"ames Amelia",
	"enjamin Isabella",
	"ucas Mia",
	"Ethan Abigail",
	"Daniel Luna",
	"Jacob Ella",
	"Logan Elizabeth",
	"Jackson Sofia",
	"Levi Emily",
	"Sebastian Avery",
	"Mateo Mila",
	"Jack Scarlett",
	"Owen Eleanor",
	"Theodore Madison",
	"Aiden Layla",
	"Samuel Penelope",
	"Joseph Aria",
	"John Chloe",
	"David Grace",
	"Wyatt Ellie",
	"Matthew Nora",
	"Luke Hazel",
	"Asher Zoey",
	"Carter Riley",
	"Julian Victoria",
	"Grayson Lily",
	"Leo Aurora",
	"Jayden Violet",
	"Gabriel Nova",
	"Isaac Hannah",
	"Lincoln Emilia",
	"Anthony Zoe",
	"Hudson Stella",
	"Dylan Everly",
	"Ezra Isla",
	"Thomas Leah",
	"Charles Lillian",
	"Christopher Addison",
	"Jaxon Willow",
	"Maverick Lucy",
	"Josiah Paisley",
	"Isaiah Natalie",
	"Andrew Naomi",
	"Elias Eliana",
	"Joshua Brooklyn",
	"Nathan Elena",
];
for (let i = 0; i < 20; i++) {
	tbody.innerHTML += `<tr>
					<td>
								<div class="tdHead d-flex align-items-center justify-content-start">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16">
										<path
											fill-rule="evenodd"
											fill="#646464"
											d="M.365 16.9V1.715H3.32V.9h1.478v.815h2.463V.9h1.477v.815h2.463V.9h1.477v.815h2.955V16.9H.365zM14.156 5.165H1.843v9.365h12.313V5.165zM5.783 9.108H4.305V7.63h1.478v1.478zm0 3.542H4.305v-2.063h1.478v2.063zm2.955-3.542H7.261V7.63h1.477v1.478zm0 3.542H7.261v-2.063h1.477v2.063zm2.955-3.542h-1.477V7.63h1.477v1.478zm0 3.542h-1.477v-2.063h1.477v2.063z"
										/>
									</svg>
									<h5>${new Date(i * 86400000).getDate()}/${new Date(i * 86400000).getMonth() + 1}/${new Date(i * 86400000).getFullYear()}</h5>
								</div>
								<div class="timing">12:00 - 18:00</div>
							</td>
							<td>
								<div class="serviceProvider d-flex align-items-center justify-content-start">
									<img class="rounded-circle" src="./assets/Images/serviceProviderProfileImage.svg" />
									<div class="serviceProviderInfo">
										<div class="serviceProviderName">${names[i]}</div>
										<div class="feedback d-flex align-items-center justify-content-center">
											<img src="./assets/Images/starFilled.svg" /><img src="./assets/Images/starFilled.svg" /><img
												src="./assets/Images/starFilled.svg"
											/><img src="./assets/Images/starFilled.svg" /><img src="./assets/Images/starUnfilled.svg" />4
										</div>
									</div>
								</div>
							</td>
							<td><span class="paymentAmount d-xs-inline-block d-sm-block text-center"><span class="paymentSign">€</span>${Math.floor(
								(i + 1) * Math.random() * 20
							)}</span></td>
							<td class="text-center"><span class='status ${Math.random() > 0.6 ? "cancelled'>Cancelled" : "completed'>Completed"}</span></td>
							<td><button class="rate position-relative d-flex align-items-center justify-content-center rounded-pill text-nowrap">Rate SP</button></td>
						</tr>`;
}
for (let i = 0; i < 20; i++) {
	tbody2.innerHTML += `<tr>
					<td>
								<div class="tdHead d-flex align-items-center justify-content-start">
									
									<h5>${Math.floor(Math.random()*9000) + 1000}</h5>
								</div>
					
							</td>
							<td>
							<div class="tdHead d-flex align-items-center justify-content-start">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16">
										<path
											fill-rule="evenodd"
											fill="#646464"
											d="M.365 16.9V1.715H3.32V.9h1.478v.815h2.463V.9h1.477v.815h2.463V.9h1.477v.815h2.955V16.9H.365zM14.156 5.165H1.843v9.365h12.313V5.165zM5.783 9.108H4.305V7.63h1.478v1.478zm0 3.542H4.305v-2.063h1.478v2.063zm2.955-3.542H7.261V7.63h1.477v1.478zm0 3.542H7.261v-2.063h1.477v2.063zm2.955-3.542h-1.477V7.63h1.477v1.478zm0 3.542h-1.477v-2.063h1.477v2.063z"
										/>
									</svg>
									<h5>${new Date(i * 86400000).getDate()}/${new Date(i * 86400000).getMonth() + 1}/${new Date(i * 86400000).getFullYear()}</h5>
								</div>
								<div class="timing">12:00 - 18:00</div>
							</td>
							<td><div class="serviceProvider d-flex align-items-center justify-content-start">
							<img class="rounded-circle" src="./assets/Images/serviceProviderProfileImage.svg" />
							<div class="serviceProviderInfo">
								<div class="serviceProviderName">${names[i]}</div>
								<div class="feedback d-flex align-items-center justify-content-center">
									<img src="./assets/Images/starFilled.svg" /><img src="./assets/Images/starFilled.svg" /><img
										src="./assets/Images/starFilled.svg"
									/><img src="./assets/Images/starFilled.svg" /><img src="./assets/Images/starUnfilled.svg" />4
								</div>
							</div>
						</div></td>
							<td class="text-center"><span class='status ${Math.random() > 0.6 ? "cancelled'>Cancelled" : "completed'>Completed"}</span></td>
							<td class="d-flex justify-content-between">
							<button class="dateandtime position-relative d-flex align-items-center justify-content-center rounded-pill text-nowrap">Change date and time</button>
							<button class="cancel position-relative d-flex align-items-center justify-content-center rounded-pill text-nowrap">Cancel</button>
							</td>
						</tr>`;
}
window.addEventListener("resize", () => {
	verticalNavbar.style.minHeight = `${window.innerHeight - document.querySelector("nav").clientHeight - document.querySelector("heading") - 60}px`;
});



var dt = new DataTable(".serviceHistoryTable", {
	dom: "Blfrtip",
	responsive: true,
	pagingType: "full_numbers",
	language: {
		paginate: {
			first: "<img src='./assets/Images/firstPage.png' alt='first' />",
			previous: "<img src='./assets/Images/previous.png' alt='previous' />",
			next: '<img src="./assets/Images/previous.png" alt="next" style="transform: rotate(180deg)" />',
			last: "<img src='./assets/Images/firstPage.png' alt='first' style='transform: rotate(180deg)' />",
		},
		info: "Total Record: _MAX_",
		lengthMenu: "Show_MENU_Entries",
	},
	buttons: ["excel"],
	columnDefs: [{ orderable: false, targets: 4 }],
});
// var dt = new DataTable(".serviceHistoryTable2", {
// 	dom: "Blfrtip",
// 	responsive: true,
// 	pagingType: "full_numbers",
// 	language: {
// 		paginate: {
// 			first: "<img src='./assets/Images/firstPage.png' alt='first' />",
// 			previous: "<img src='./assets/Images/previous.png' alt='previous' />",
// 			next: '<img src="./assets/Images/previous.png" alt="next" style="transform: rotate(180deg)" />',
// 			last: "<img src='./assets/Images/firstPage.png' alt='first' style='transform: rotate(180deg)' />",
// 		},
// 		info: "Total Record: _MAX_",
// 		lengthMenu: "Show_MENU_Entries",
// 	},
// 	buttons: ["excel"],
// 	columnDefs: [{ orderable: false, targets: 4 }],
// });
var dataTables_length = document.querySelector(".dataTables_length");
$(".dataTables_length").insertAfter(".dataTable");
$(".tableHeader").insertAfter(".dt-buttons");

$(document).ready(function(){

function onload_servicedata(){
	// for (let i = 0; i < 20; i++) {
	// $("#service_body").html(`<tr>
	// <td>
	// 			<div class="tdHead d-flex align-items-center justify-content-start">
	// 				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16">
	// 					<path
	// 						fill-rule="evenodd"
	// 						fill="#646464"
	// 						d="M.365 16.9V1.715H3.32V.9h1.478v.815h2.463V.9h1.477v.815h2.463V.9h1.477v.815h2.955V16.9H.365zM14.156 5.165H1.843v9.365h12.313V5.165zM5.783 9.108H4.305V7.63h1.478v1.478zm0 3.542H4.305v-2.063h1.478v2.063zm2.955-3.542H7.261V7.63h1.477v1.478zm0 3.542H7.261v-2.063h1.477v2.063zm2.955-3.542h-1.477V7.63h1.477v1.478zm0 3.542h-1.477v-2.063h1.477v2.063z"
	// 					/>
	// 				</svg>
	// 				<h5>${new Date(i * 86400000).getDate()}/${new Date(i * 86400000).getMonth() + 1}/${new Date(i * 86400000).getFullYear()}</h5>
	// 			</div>
	// 			<div class="timing">12:00 - 18:00</div>
	// 		</td>
	// 		<td>
	// 			<div class="serviceProvider d-flex align-items-center justify-content-start">
	// 				<img class="rounded-circle" src="./assets/Images/serviceProviderProfileImage.svg" />
	// 				<div class="serviceProviderInfo">
	// 					<div class="serviceProviderName">${names[i]}</div>
	// 					<div class="feedback d-flex align-items-center justify-content-center">
	// 						<img src="./assets/Images/starFilled.svg" /><img src="./assets/Images/starFilled.svg" /><img
	// 							src="./assets/Images/starFilled.svg"
	// 						/><img src="./assets/Images/starFilled.svg" /><img src="./assets/Images/starUnfilled.svg" />4
	// 					</div>
	// 				</div>
	// 			</div>
	// 		</td>
	// 		<td><span class="paymentAmount d-xs-inline-block d-sm-block text-center"><span class="paymentSign">€</span>${Math.floor(
	// 			(i + 1) * Math.random() * 20
	// 		)}</span></td>
	// 		<td class="text-center"><span class='status ${Math.random() > 0.6 ? "cancelled'>Cancelled" : "completed'>Completed"}</span></td>
	// 		<td><button class="rate position-relative d-flex align-items-center justify-content-center rounded-pill text-nowrap">Rate SP</button></td>
	// 	</tr>`);
	// }
}


// onload_servicedata()



// ###################################################################################################################
	function getaddress(){
		$.ajax({
			type: "POST",
			url: "?controller=Servicehistory&function=getaddress",
			datatype: "json",
			data: $("#form-2").serialize(),
			success:function(data){
				obj = JSON.parse(data);
				if(typeof obj==="object"){
					var len=obj.length;
				
					var modal=document.getElementById('update_modal');
					modal.innerHTML="";
					for(var i=0; i<len; i++){
					
						modal.innerHTML+=`<tr class='align-middle'> 
						<th scope='row'> <input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios1' value='option1'>
						</th>
						<td class='text-left' style='width:60%;'>
                            <input type='hidden' class='AddressId' value="${obj[i].AddressId}"/>
                            <input type='hidden' class='AddressLine1' value="${obj[i].AddressLine1}" />
                            <input type='hidden' class='AddressLine2' value="${obj[i].AddressLine2}" />
                            <input type='hidden' class='City' value="${obj[i].City}" />
                            <input type='hidden' class='PostalCode' value="${obj[i].PostalCode}"/>
                            <input type='hidden' class='Mobile'value="${obj[i].Mobile}"/>
        
                            <span style='font-weight: bold;'>Address:</span><span class='address_data'> ${obj[i].AddressLine1} ${obj[i].AddressLine2} ${obj[i].City} ${obj[i].PostalCode} </span>
                            <br><span style='font-weight: bold;'>Phone Number:</span><span class='phone_data'> ${obj[i].Mobile}</span>
                        </td>
                        <td class='text-center'><a class='editbtn py-2' data-toggle='modal' data-target='#exampleModal2'><img src='./assets/Images/editing.png' style='width:14%;cursor:pointer;'/></a>
                            <a type='button'  id='deletebtn'><img src='./assets/Images/delete.png' style='width:14%;'/></a>
                        </td>
        
                        </tr>`;																						
					}
					$("#tab2").show();
				}
				else if(data==0){
					swal({
						title: 'sorry!! ',
						text: 'something went wrong!!',
						icon: 'error',
					});
				}
			}
		});

	}	
	$(document).on("click",".editbtn",function(){

		var addresslin1 = $(this).closest('tr').find(".AddressLine1").val();
		var addresslin2 = $(this).closest('tr').find(".AddressLine2").val();
		var city = $(this).closest('tr').find(".City").val();
		var postal = $(this).closest('tr').find(".PostalCode").val();
		var mobile = $(this).closest('tr').find(".Mobile").val();
		var AddressId = $(this).closest('tr').find(".AddressId").val();
			$("#addressline1").val(addresslin1);
			$("#addressline2").val(addresslin2);
			$("#postal").val(postal);
			$("#city").val(city);
			$("#mobile").val(mobile);
			$("#update-id").val(AddressId);
		   
	});
	$(document).on("click","#deletebtn",function(){
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover your address!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		  })
		  .then((willDelete) => {
			if (willDelete) {
				var AddressId = $(this).closest('tr').find(".AddressId").val();		
				$.ajax({
					type: "POST",
					url: "?controller=Servicehistory&function=delete_address",
					datatype: "json",
					data: {AddressId:AddressId},
					success:function(data){
						if(data==1){
							getaddress();
							swal("Your address has been deleted!", {
								icon: "success",
							  });
						}
					}
					});
			  
			} else {
			  swal("Your address is safe!");
			}
		  });
	});
	$("#btn1").click(function() {
		$("#btn1").css('border-bottom','3px solid #1d7a8c');
		$("#btn2").css('border-bottom','3px solid #e1e1e1');
		$("#btn3").css('border-bottom','3px solid #e1e1e1');
		$("#tab1").show();
		$("#tab2").hide();
		$("#tab3").hide();
		$("#btn1").addClass("implement");
		$("#btn2").removeClass("implement");
		$("#btn3").removeClass("implement");
	  });
	  $("#btn3").click(function() {
		$("#btn3").css('border-bottom','3px solid #1d7a8c');
		$("#btn2").css('border-bottom','3px solid #e1e1e1');
		$("#btn1").css('border-bottom','3px solid #e1e1e1');
		$("#tab1").hide();
		$("#tab2").hide();
		$("#tab3").show();
		$("#btn1").removeClass("implement");
		$("#btn2").removeClass("implement");
		$("#btn3").addClass("implement");
	  });
// #######################################################################################################################
	  $(document).on("click","#update_password",function(){
		let oldpassword=$("#oldpass").val();
		let newpassword=$("#password_reg").val();
		let cpassword=$("#confirmPassword").val();
		if((newpassword !='') && (oldpassword !='')){

		$.ajax({
				type: "POST",
				url: "?controller=Servicehistory&function=update_password",
				datatype: "json",
				data: $(".form-3").serialize(),
				success:function(data){
					if(data==1){
						swal({
							title: 'Great job!! ',
							text: 'Password change successfully!',
							icon: 'success',
						});
						$(".form-3").trigger('reset');

					}
					else if(data==0){
						swal({
							title: 'sorry!! ',
							text: 'Old password is not matching!!',
							icon: 'warning',
						});
					}
				}
		});
		}
		else{
			swal({
				title: 'sorry!! ',
				text: 'Invalid password!!',
				icon: 'warning',
			});
		}
	  });
// ############################################################################################################################	 

	$(document).on("click","#add_address",function(e){

		e.preventDefault();	
		var addressline1= $("#address1").val();
		var addressline2=$("#address2").val();
		var postal=$("#zip").val();
		var city=$("#location").val();
		var mobile=$("#phone").val();
		if((addressline1==="") || (addressline2==="") || (postal==="") || (city==="") ||  (mobile==="")){
			swal({
									title: 'sorry!! ',
									text: 'Please enter all the fields!!',
									icon: 'warning',
								});
		}
		else{
	
		$.ajax({
				type: "POST",
				url: "?controller=Servicehistory&function=add_address",
				datatype: "json",
				data: $("#form-4").serialize(),
				success:function(data){
					if(data==1){
						getaddress();
						$("#form-4").trigger('reset');
						swal({
							title: 'Great Job!! ',
							text: 'Address added successfully!!',
							icon: 'success',
						});
					}
					else if(data==0){
						swal({
							title: 'sorry!! ',
							text: 'something went wrong!!',
							icon: 'error',
						});
					}
				}
			});
		}
	
	});
	$(document).on("click","#update_data",function(e){
		
		e.preventDefault();	
		var addressline1= $("#addressline1").val();
		var addressline2=$("#addressline2").val();
		var postal=$("#postal").val();
		var city=$("#city").val();
		var mobile=$("#mobile").val();
		if((addressline1==="") || (addressline2==="") || (postal==="") || (city==="") ||  (mobile==="")){
			swal({
									title: 'sorry!! ',
									text: 'Please enter all the fields!!',
									icon: 'warning',
								});
		}
		else{
		$.ajax({
				type: "POST",
				url: "?controller=Servicehistory&function=update_address",
				datatype: "json",
				data: $("#form-2").serialize(),
				success:function(data){
					if(data==1){
						getaddress();
						swal({
							title: 'Great Job!! ',
							text: 'Address updated successfully!!',
							icon: 'success',
						});
					
					}
					else if(data==0){
						swal({
							title: 'sorry!! ',
							text: 'something went wrong!!',
							icon: 'error',
						});
					}
				}
			});
		}	
	});
	$(document).on("click","#btn2",function(){
		$("#btn2").css('border-bottom','3px solid #1d7a8c');
		$("#btn1").css('border-bottom','3px solid #e1e1e1');
		$("#btn3").css('border-bottom','3px solid #e1e1e1');
		$("#tab1").hide();
		$("#tab2").show();
		$("#tab3").hide();
		$("#btn1").removeClass("implement");
		$("#btn2").addClass("implement");
		$("#btn3").removeClass("implement");
		getaddress();
	});

// #########################################################################################################################
	function getdetail()
	{
		$.ajax({
			type: "GET",
			url: "?controller=Servicehistory&function=getdetail",
			datatype: "json",
			success:function(data){
				obj = JSON.parse(data);
				if(typeof obj==="object"){
					var len=obj.length;
					for(var i=0; i<len; i++){
						var currentDate = new Date(obj[i].DateOfBirth);
						var date = currentDate.getDate();
						var month = currentDate.getMonth();
						var year = currentDate.getFullYear();						
						var dateString = year+ "-" +("0" + (month + 1)).slice(-2)+ "-" + date;
						$("#fname").val(obj[i].FirstName);
							$("#lname").val(obj[i].LastName);
							$("#email").val(obj[i].Email);
							$("#mobile_2").val(obj[i].Mobile);
							$("#birthdate").val(dateString);
							$("#language").val(obj[i].LanguageId);							
					}
					$("#tab1").show();
					$("#btn1").css('border-bottom','3px solid #1d7a8c');
					$('.servicebtn').css('background','none');
					$('.favourite').hide();
					$('.service_history').hide();
					$('.dashboard').hide();
					$(".mysetting").show();
					$("#tab2").hide();
					$("#tab3").hide();
				}else if(data==0){
					swal({
						title: 'sorry!! ',
						text: 'something went wrong!!',
						icon: 'error',
					});
				}
			}
		});

	};
	$(document).on("click","#update_detail",function(e){
		e.preventDefault();	
		var fname= $("#fname").val();
		var lname=$("#lname").val();
		var email=$("#email").val();
		var mobile=$("#mobile_2").val();
		var birthdate=$("#birthdate").val();
		
		if((fname==="") || (email==="") || (mobile==="") ||  (lname==="") || (birthdate==="")){
			swal({
									title: 'sorry!! ',
									text: 'Please enter all the fields!!',
									icon: 'warning',
								});
		}
		else{
			$.ajax({
				type: "POST",
				url: "?controller=Servicehistory&function=update_detail",
				datatype: "json",
				data:$("#form-1").serialize(),
				success:function(data){
					if(data==1){
						getdetail();
						swal({
							title: 'Great job!! ',
							text: 'Data updated successfully!!',
							icon: 'success',
						});
					}else if(data==0){
						swal({
							title: 'sorry!! ',
							text: 'something went wrong!!',
							icon: 'error',
						});
					}
				}
			});
		}
	});
	$(document).on("click",".mysettingbtn",function(){
	getdetail();
	$('.dashboardbtn').css('background','none');
	$('.favouritebtn').css('background','none');
	});
// #############################################################################################################	
	$(document).on("click",".dashboardbtn",function(){
		$('.favourite').hide();
		$(".mysetting").hide();
		$('.service_history').hide();
		$('.dashboard').show();
		$('.dbtn').css('background','#146371');
		$('.sbtn').removeClass('active');
		$('.fbtn').css('background','none');
		$('.servicebtn').css('background','none');
		
		
		// $.ajax({
		// 	type: "GET",
		// 	url: "?controller=Servicehistory&function=dashboard",
		// 	datatype: "json",
		// 	success:function(data){}
		// });

	})
	$(document).on("click",".servicebtn",function(){
		$(".mysetting").hide();
		$('.favourite').hide();
		$('.service_history').show();
		$('.dashboard').hide();
		$('.sbtn').css('background','#146371');
		$('.dbtn').css('background','none');
		$('.fbtn').css('background','none');
		
	})
	$(document).on("click",".favouritebtn",function(){
		$(".mysetting").hide();
		$('.favourite').show();
		$('.service_history').hide();
		$('.dashboard').hide();
		$('.fbtn').css('background','#146371');
		$('.dbtn').css('background','none');
		$('.sbtn').css('background','none');
		$('.verticalNavItem').removeClass('active');
		// $.ajax({
		// 	type: "POST",
		// 	url: "?controller=Bookservice&function=checkpincode",
		// 	datatype: "json",
		// 	data: $("#form-data").serialize(),
		// 	success:function(data){}
		// });
	})
});