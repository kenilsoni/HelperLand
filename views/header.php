  <!-- Navbar start -->
<?php session_start(); if(!isset($_SESSION['user_name'],$_SESSION['user_type'])){
	?>
  <nav class="mainnav d-md-flex align-items-center justify-content-between text-white">
		<div class="divlogo">
			<a class="d-block" href="?function=Homepage">
				<img src="./assets/Images/logo-small.png" alt="logo" />
			</a>
		</div>
		<div class="navMenu collapsed text-white d-flex align-items-start align-items-md-center justify-content-center">
            <div class="navItem highlight"><a href="?function=bookservice_page">Book now</a></div>
            <div class="navItem active"><a href="?function=pricepage">Prices & Services</a></div>
            <div class="navItem"><a href="#">Warranty</a></div>
            <div class="navItem"><a href="#">Blog</a></div>
            <div class="navItem"><a href="?function=contactpage">Contact</a></div>
            <div class="navItem highlight"><a type="button" data-bs-toggle="modal" data-bs-target="#myModal">Login</a></div>
            <div class="navItem highlight"><a href="?function=become_providerpage">Become a Helper</a></div>
		</div>
	</nav>
<nav class="navSm d-flex align-items-center justify-content-between">
		<div class="divlogo">
			<a class="d-block" href="?function=HomePage">
				<img src="./assets/Images/logo-small.png" alt="logo" />
			</a>
		</div>
		
		<div class="tgle_class me-3 me-0"></div>
		<div class="fullPage d-flex">
			<div class="fullPageHidden"></div>
			<div class="navSmMenu bg-white">
			
				<div class="navSmMenuItem"><a href="?function=bookservice_page">Book now</a></div>
				<div class="navSmMenuItem active"><a href="?function=pricepage">Prices & Services</a></div>
				<div class="navSmMenuItem">Warranty</div>
				<div class="navSmMenuItem">Blog</div>
				<div class="navSmMenuItem"><a href="?function=contactpage">Contact</a></div>
				<div class="navSmMenuItem"><a type="button" data-bs-toggle="modal" data-bs-target="#myModal">Login</a></div>
				<div class="navSmMenuItem"><a href="?function=become_providerpage">Become a Helper</a></div>
				<hr class="my-1" />
			</div>
		</div>
	</nav>
<?php }else if(isset($_SESSION['user_type'])){ 
	if($_SESSION['user_type']==3){header("location:?controller=Admin&function=admin_management");}?>

    <nav class="mainnav d-md-flex align-items-center justify-content-between text-white">
		<div class="divlogo">
			<a class="d-block" href="?function=Homepage">
				<img src="./assets/Images/logo-small.png" alt="logo" />
			</a>
		</div>
		<div class="navMenu collapsed text-white d-flex align-items-start align-items-md-center justify-content-center">
		<?php if($_SESSION['user_type']==1){?> <div class="navItem highlight"><a href="?function=bookservice_page">Book now</a></div> <?php }?>
            <div class="navItem active"><a href="?function=pricepage">Prices & Services</a></div>
            <div class="navItem"><a href="#">Warranty</a></div>
            <div class="navItem"><a href="#">Blog</a></div>
            <div class="navItem"><a href="?function=contactpage">Contact</a></div>
            <div class="loggedInMenu d-flex align-items-center justify-content-center">
				<div class="notifications position-relative">
					<img src="./assets/Images/icon-notification.png" />
					<span class="position-absolute text-center badge rounded-circle">2</span>
				</div>
				<?php if($_SESSION['user_type']==1){?>
				<div class="userInfo d-flex align-items-center justify-content-center" tabindex="0" role="button" data-bs-html="true" data-bs-toggle="popover" title="<div class='userInfoText'>Welcome,<br /><?php if (isset($_SESSION['user_name'])) {
																																																					echo $_SESSION['user_name'];
																																																				} ?></div>" data-bs-content="<a class='d-block userInfoItem text-decoration-none' href='?function=service_historypage&id=1'>To Overview</a><a class='d-block userInfoItem text-decoration-none' href='?function=service_historypage&id=2'>My Settings</a><a class='d-block userInfoItem text-decoration-none' href='?function=logout'>Logout</a>">
					<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36">
						<path fill-rule="evenodd" fill="#FFF" d="M35.999 17.999C35.999 8.75 27.924 0 17.999 0 8.75 0 0 8.75 0 17.999c0 5.243 2.254 9.968 5.842 13.26l-.017.015.584.492c.038.032.079.059.117.09.31.257.631.501.959.738.106.076.212.153.32.228.349.798.708.469 1.075.685.08.048.52.094.24.139.402.229.811 1.254 1.231.642l.093.042a17.834 17.834 0 0 0 4.474 1.399c.474.082.953.147 1.438.191l.177.014c.627.04.972.065 1.466.065.491 0 .974-.025 1.455-.064l.182-.013c.481-.044.957-.108 1.984-.188-.517-.008-.476-.015-.436-.023a17.8 17.8 0 0 0 4.292-1.345c.05-.023.1-.044.15-.068.674-.19.799-.394 1.186-.612.096-.055.488-.11 1.178-.166-.539-.208-.193.44.144-.655.121-.082.239-.169.359-.256.287-.206 1.137-.42.844-.643.061-.049.126-.092.186-.142l.599-.5-.018-.015c3.62-3.159 5.895-8.041 5.895-13.31zm-34.691 0c0-9.203 7.488-16.691 16.691-16.691 9.204 0 16.691 7.488 16.691 16.691 0 4.96-2.176 9.419-5.01 12.478-.804-.133-.998-.252-1.196-.351l-5.542-2.771c-.498-.249-.806-.749-.806-.855v-2.385c.128-.159.263-.338.403-.535a13.327 13.327 0 0 0 1.713-3.353c1.558-.394 1.364-.527 1.364-1.487v-2.986c0-.568-.208-1.118-.256-1.551v-3.055c.34-.339-.17-2.257-1.557-3.838-1.206-1.377-3.159-2.074-5.804-2.074-2.645 0-4.597.697-5.803 2.073-1.387 1.582-1.267 3.499-1.233 3.839v3.054a2.385 2.385 0 0 0-.581 1.551v2.977c0 .064.324.736.878 1.19.53 2.077 1.621 3.649 2.024 4.182v1.894c0 .534-.291 1.214-.761 1.282l-5.175 2.823c-.165.089-.158.194-.492.311-3.403-3.058-5.548-7.489-5.548-12.413zm26.483 13.505c-.229.166-.462.327.129.481-.936.575-1.044.141-1.155.21a16.35 16.35 0 0 1-.944.543c-.07.038-.142.073-.213.11-.737.377-1.5.702-2.283.966l-.083.028c-.411.136-.826 1.148-1.247.361l-.004.001c-.424.105-.853.192-1.285.263l-.035.007c-.407.066-.817.114-1.228.15l-.218.016c-.407.031-.815.05-1.226.05-.415 0-.828-.02-1.24-.051l-.213-.016a16.98 16.98 0 0 1-1.292-.163 16.582 16.582 0 0 1-2.547-.635l-.077-.026c-.412-.14-.819-.295-1.219-.467l-.008-.004c-.153-.163-.75-.343-1.116-.534-.048-.025-.096-.048-.143-.074a17.284 17.284 0 0 1-.985-.573c.481.713-.19.113-.285-.183a16.32 16.32 0 0 1-.875-.611c-.03-.022-.058-.045-.087-.068l.062-.035 5.176-2.823c1.25-.486 1.443-1.327 1.443-2.431v-2.358l-.151-.182c-.014-.016-1.322-1.737-1.964-4.068l-.06-.26-.223-.144c-.315-.204-.503-.544-.503-.254v-2.978c0-.304.129-.587.868-.8l-.288-.195v-3.646l-.006.139c-.002.65.444-1.815.914-3.079.946-.241 2.568-1.626 4.819-1.626 2.243 0 3.86 1.335 4.809 1.614 1.107 1.251.926 2.971.925 3.101l-.006 3.498.216.195c.235.212.364.496.364.801v2.986c0-.199-.317.224-.773.365l-.325.1-.105.324a12.1 12.1 0 0 1-1.634 3.294c-.171.827-.338.457-.481.621l-.163.185V26.5c0 .605.587 2.04 1.531 2.026l5.542 2.77c.035.018.07.036.501.055-.467.053-.539.102-.609.153z" />
					</svg>
					<svg xmlns="http://www.w3.org/2000/svg" width="11" height="6">
						<path fill-rule="evenodd" fill="#FFF" d="M.113.674C.37.597 0 .5 0 .394 0 .287.37.191.113.113c.152.297.399.297.55 0L5.499 5.43 10.336.113c.151.297.398.297.55 0 .484.155.484.406 0 .561l-5.112 5.21c-.151.506-.398.506-.55 0L.113.674z" />
					</svg>
				</div>
				<?php }if($_SESSION['user_type']==2){?>
					<div class="userInfo d-flex align-items-center justify-content-center" tabindex="0" role="button" data-bs-html="true" data-bs-toggle="popover" title="<div class='userInfoText'>Welcome,<br /><?php if (isset($_SESSION['user_name'])) {
																																																					echo $_SESSION['user_name'];
																																																				} ?></div>" data-bs-content="<a class='d-block userInfoItem text-decoration-none' href='?function=upcoming_servicepage&id=1'>To Overview</a><a class='d-block userInfoItem text-decoration-none' href='?function=upcoming_servicepage&id=7'>My Settings</a><a class='d-block userInfoItem text-decoration-none' href='?function=logout'>Logout</a>">
					<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36">
						<path fill-rule="evenodd" fill="#FFF" d="M35.999 17.999C35.999 8.75 27.924 0 17.999 0 8.75 0 0 8.75 0 17.999c0 5.243 2.254 9.968 5.842 13.26l-.017.015.584.492c.038.032.079.059.117.09.31.257.631.501.959.738.106.076.212.153.32.228.349.798.708.469 1.075.685.08.048.52.094.24.139.402.229.811 1.254 1.231.642l.093.042a17.834 17.834 0 0 0 4.474 1.399c.474.082.953.147 1.438.191l.177.014c.627.04.972.065 1.466.065.491 0 .974-.025 1.455-.064l.182-.013c.481-.044.957-.108 1.984-.188-.517-.008-.476-.015-.436-.023a17.8 17.8 0 0 0 4.292-1.345c.05-.023.1-.044.15-.068.674-.19.799-.394 1.186-.612.096-.055.488-.11 1.178-.166-.539-.208-.193.44.144-.655.121-.082.239-.169.359-.256.287-.206 1.137-.42.844-.643.061-.049.126-.092.186-.142l.599-.5-.018-.015c3.62-3.159 5.895-8.041 5.895-13.31zm-34.691 0c0-9.203 7.488-16.691 16.691-16.691 9.204 0 16.691 7.488 16.691 16.691 0 4.96-2.176 9.419-5.01 12.478-.804-.133-.998-.252-1.196-.351l-5.542-2.771c-.498-.249-.806-.749-.806-.855v-2.385c.128-.159.263-.338.403-.535a13.327 13.327 0 0 0 1.713-3.353c1.558-.394 1.364-.527 1.364-1.487v-2.986c0-.568-.208-1.118-.256-1.551v-3.055c.34-.339-.17-2.257-1.557-3.838-1.206-1.377-3.159-2.074-5.804-2.074-2.645 0-4.597.697-5.803 2.073-1.387 1.582-1.267 3.499-1.233 3.839v3.054a2.385 2.385 0 0 0-.581 1.551v2.977c0 .064.324.736.878 1.19.53 2.077 1.621 3.649 2.024 4.182v1.894c0 .534-.291 1.214-.761 1.282l-5.175 2.823c-.165.089-.158.194-.492.311-3.403-3.058-5.548-7.489-5.548-12.413zm26.483 13.505c-.229.166-.462.327.129.481-.936.575-1.044.141-1.155.21a16.35 16.35 0 0 1-.944.543c-.07.038-.142.073-.213.11-.737.377-1.5.702-2.283.966l-.083.028c-.411.136-.826 1.148-1.247.361l-.004.001c-.424.105-.853.192-1.285.263l-.035.007c-.407.066-.817.114-1.228.15l-.218.016c-.407.031-.815.05-1.226.05-.415 0-.828-.02-1.24-.051l-.213-.016a16.98 16.98 0 0 1-1.292-.163 16.582 16.582 0 0 1-2.547-.635l-.077-.026c-.412-.14-.819-.295-1.219-.467l-.008-.004c-.153-.163-.75-.343-1.116-.534-.048-.025-.096-.048-.143-.074a17.284 17.284 0 0 1-.985-.573c.481.713-.19.113-.285-.183a16.32 16.32 0 0 1-.875-.611c-.03-.022-.058-.045-.087-.068l.062-.035 5.176-2.823c1.25-.486 1.443-1.327 1.443-2.431v-2.358l-.151-.182c-.014-.016-1.322-1.737-1.964-4.068l-.06-.26-.223-.144c-.315-.204-.503-.544-.503-.254v-2.978c0-.304.129-.587.868-.8l-.288-.195v-3.646l-.006.139c-.002.65.444-1.815.914-3.079.946-.241 2.568-1.626 4.819-1.626 2.243 0 3.86 1.335 4.809 1.614 1.107 1.251.926 2.971.925 3.101l-.006 3.498.216.195c.235.212.364.496.364.801v2.986c0-.199-.317.224-.773.365l-.325.1-.105.324a12.1 12.1 0 0 1-1.634 3.294c-.171.827-.338.457-.481.621l-.163.185V26.5c0 .605.587 2.04 1.531 2.026l5.542 2.77c.035.018.07.036.501.055-.467.053-.539.102-.609.153z" />
					</svg>
					<svg xmlns="http://www.w3.org/2000/svg" width="11" height="6">
						<path fill-rule="evenodd" fill="#FFF" d="M.113.674C.37.597 0 .5 0 .394 0 .287.37.191.113.113c.152.297.399.297.55 0L5.499 5.43 10.336.113c.151.297.398.297.55 0 .484.155.484.406 0 .561l-5.112 5.21c-.151.506-.398.506-.55 0L.113.674z" />
					</svg>
				</div>
					<?php } ?>
				<div class="tgle_class me-3 me-md-0"></div>
			</div>
		</div>
	</nav>
	<?php if($_SESSION['user_type']==1){?>
<nav class="navSm d-flex align-items-center justify-content-between">
		<div class="divlogo">
			<a class="d-block" href="?function=HomePage">
				<img src="./assets/Images/logo-small.png" alt="logo" />
			</a>
		</div>
		<div class="notifications position-relative">
			<img src="./assets/Images/icon-notification.png" />
			<span class="position-absolute text-center badge rounded-circle">2</span>
		</div>
		<div class="tgle_class me-3 me-0"></div>
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
                <div class="navSmMenuItem"><a class='d-block userInfoItem text-decoration-none' href='?function=service_historypage&id=1'>Overview</a></div>
				<div class="navSmMenuItem active">Completed service order</div>
				<div class="navSmMenuItem">Calender view</div>
				<div class="navSmMenuItem">My Favourites</div>
				<div class="navSmMenuItem">bills</div>
				<div class="navSmMenuItem"><a class='d-block userInfoItem text-decoration-none' href='?function=service_historypage&id=2'>My Settings</a></div>
                <div class="navSmMenuItem"><a href='?function=logout'>Logout</a></div>
				<hr class="my-1" />
				<div class="navSmMenuItem"><a href="?function=bookservice_page">Book now</a></div>
				<div class="navSmMenuItem active"><a href="?function=pricepage">Prices & Services</a></div>
				<div class="navSmMenuItem">Warranty</div>
				<div class="navSmMenuItem">Blog</div>
				<div class="navSmMenuItem"><a href="?function=contactpage">Contact</a></div>
				<hr class="my-1" />
			</div>
		</div>
	</nav>
 <?php }else if($_SESSION['user_type']==2){ ?>
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
					<div class="navSmMenuItem"><a href='?function=upcoming_servicepage&id=1'>Dashboard</a></div>
					<div class="navSmMenuItem"><a href='?function=upcoming_servicepage&id=1'>New Service Request</a></div>
					<div class="navSmMenuItem"><a href='?function=upcoming_servicepage&id=2'>Upcoming Services</a></div>
					<div class="navSmMenuItem"><a href='?function=upcoming_servicepage&id=3'>Service Schedule</a></div>
					<div class="navSmMenuItem"><a href='?function=upcoming_servicepage&id=4'>Service History</a></div>
					<div class="navSmMenuItem"><a href='?function=upcoming_servicepage&id=5'>My Ratings</a></div>
					<div class="navSmMenuItem"><a href='?function=upcoming_servicepage&id=6'>Block Customer</a></div>
					<div class="navSmMenuItem"><a href='?function=upcoming_servicepage&id=7'>My Settings</a></div>
					<div class="navSmMenuItem"><a href='?function=logout'>Logout</a></div>
					<hr class="my-1" />
					<div class="navSmMenuItem"><a href="?function=pricepage">Plans & Services</a></div>
					<div class="navSmMenuItem"><a href="#">Warranty</a></div>
					<div class="navSmMenuItem"><a href="#">Blog</a></div>
					<div class="navSmMenuItem"><a href="?function=contactpage">Contact</a></div>
					<hr class="my-1" />
				</div>
			</div>
		</nav>

<?php } }?>


































