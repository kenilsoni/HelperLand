<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Create an account | Helperland</title>
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="./assets/css/create_account.css" />
		<link rel="shortcut icon" href="./assets/Images/favicon.png" type="image/x-icon" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	</head>
	<body>
      
	<?php include "header.php"; ?>
			<?php include "Login_modal.php"; ?>  
			<?php if(isset($_SESSION['user'])){if($_SESSION['user']==1){?>
							<script>
							swal({
								title: "sorry! ",
								text: "Email is already exist!",
								icon: "warning",
								});
								</script>
						<?php unset($_SESSION['user']); }elseif($_SESSION['user']==2){ ?>
							<script>
							swal({
								title: "sorry! ",
								text: "Please enter valid mobile number!",
								icon: "warning",
								});
								</script>
								<?php unset($_SESSION['user']);}elseif($_SESSION['user']==3){?>
									<script>
							swal({
								title: "sorry! ",
								text: "Please enter valid name!",
								icon: "warning",
								});
								</script>
								<?php unset($_SESSION['user']);}elseif($_SESSION['user']==4){?>
									<script>
							swal({
								title: "sorry! ",
								text: "Please enter valid email!",
								icon: "warning",
								});
								</script>
									<?php unset($_SESSION['user']);}}?>
    
		<div class="contactUsHeader container flex-column d-flex align-items-center justify-content-center">
			<div class="contactUsHeaderText text-center ">Create Account</div>
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
		<!-- contact us start -->
		<div class="contactUsForm container">
			
			<form action="?function=createaccount_user" method="post" id="signup-form">
				<div class="row align-items-center justify-content-center g-2">
				<input type="hidden" name="usertype" value="1">
					<div class="form-item col-12 col-sm-6">
						<input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required/>
					</div>
					<div class="form-item col-12 col-sm-6">
						<input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required/>
					</div>
					<div class="form-item col-12 col-sm-6">
						<div class="input-group mx-0 row">
							<input type="text" class="input-group-text col-2 px-0" id="countryCode" placeholder="+91" />
							<input
								type="text"
								class="form-control col-10"
								placeholder="Mobile Number"
								aria-label="Mobile Number"
								aria-describedby="basic-addon1"
								name="mobile"
								required
							/>
						</div>
					</div>
					<div class="form-item col-12 col-sm-6">
						<input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required/>
					</div>
                    <div class="form-item col-12 col-sm-6">
						<input type="password" class="form-control" name="password" id="password_reg" placeholder="password" required/>
						<span class="glyphicon form-control-feedback" id="password_reg1"></span>
					
					</div>
                    <div class="form-item col-12 col-sm-6">
						<input type="password" class="form-control" name="confirmPassword" id="confirmPassword"  placeholder="Repeat password" required disabled/>
						<span class="glyphicon form-control-feedback" id="confirmPassword1">
     					 </span>
					</div>
					
					<button class="submit rounded-pill border-0 outline-0" type="submit" name="submit">Register</button>
                    <div style="color: #A3A3A3; text-align: center;">Already Registered? <br/><a type="button" data-bs-toggle="modal" data-bs-target="#myModal" style="color: #0d6efd;">Login now</a></div>
				</div>
			</form>
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
		const tgle_class = document.querySelector(".tgle_class");
		const navmenu = document.querySelector(".navmenu");
		tgle_class.addEventListener("click", () => {
			tgle_class.classList.toggle("open");
			navmenu.classList.toggle("open");
		});

		
	</script>
</html>