<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prices & Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href='./assets/css/Price.css'/>
    <link rel="shortcut icon" href="./assets/Images/favicon.png" type="image/x-icon">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
</head>

<body>


  

	<?php include "header.php"; ?>
    <?php include "Login_modal.php"; ?>
       <!-- Image  -->
		<section class="priceimg">
			<img src="./assets/Images/priceimg.png" alt="pricesHeaderImage" />
		</section>
        <!-- PriceHeader start -->
		<section class="pricesHeader container">
			<div class="pricesHeaderText text-center">Prices</div>
			<div class="pricesHeaderDecoration w-100 d-flex align-items-center justify-content-center">
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
			<div class="priceCard">
				<div class="priceCardHeader text-center">One Time</div>
				<div class="priceCardText d-flex align-items-center justify-content-center">20</div>
				<div class="priceCardDescription row g-2">
					<div class="priceCardDescriptionItem col-11 col-sm-8 col-md-7">
						            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24">
                                        <path fill-rule="evenodd" fill="#1D7A8C" d="M20.335 22.153H1.86V3.691h13.627l1.153-1.846H1.86c-1.019 0-1.74.827-1.74 1.846v18.462c0 1.018.721 1.846 1.74 1.846h18.475c1.02 0 1.848-.828 1.848-1.846V9.963l-1.848 2.959v9.231zM23.446.21c-.22.46-.466-.21-.707-.21-.421 0-.834.205-1.083.584L11.613 15.62l-3.886-4.989a1.294 1.294 0 0 0-1.828.07c-.486.524-.453 1.729.072 1.826l4.67 5.326.113.13.118.135.048.029.26.097.091.115.058.028.396.068.018-.004c1.197.002.701-.128.957.009l.104-.584.006-.007L23.821 1.998c.39-.596.609-1.397-.375-1.788z"/>
                                    </svg> Lower prices
					</div>
					<div class="priceCardDescriptionItem col-11 col-sm-8 col-md-7">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24">
                                    <path fill-rule="evenodd" fill="#1D7A8C" d="M20.335 22.153H1.86V3.691h13.627l1.153-1.846H1.86c-1.019 0-1.74.827-1.74 1.846v18.462c0 1.018.721 1.846 1.74 1.846h18.475c1.02 0 1.848-.828 1.848-1.846V9.963l-1.848 2.959v9.231zM23.446.21c-.22.46-.466-.21-.707-.21-.421 0-.834.205-1.083.584L11.613 15.62l-3.886-4.989a1.294 1.294 0 0 0-1.828.07c-.486.524-.453 1.729.072 1.826l4.67 5.326.113.13.118.135.048.029.26.097.091.115.058.028.396.068.018-.004c1.197.002.701-.128.957.009l.104-.584.006-.007L23.821 1.998c.39-.596.609-1.397-.375-1.788z"/>
                                </svg> Easy online & secure payment
					</div>
					<div class="priceCardDescriptionItem col-11 col-sm-8 col-md-7">
						<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24">
                            <path fill-rule="evenodd" fill="#1D7A8C" d="M20.335 22.153H1.86V3.691h13.627l1.153-1.846H1.86c-1.019 0-1.74.827-1.74 1.846v18.462c0 1.018.721 1.846 1.74 1.846h18.475c1.02 0 1.848-.828 1.848-1.846V9.963l-1.848 2.959v9.231zM23.446.21c-.22.46-.466-.21-.707-.21-.421 0-.834.205-1.083.584L11.613 15.62l-3.886-4.989a1.294 1.294 0 0 0-1.828.07c-.486.524-.453 1.729.072 1.826l4.67 5.326.113.13.118.135.048.029.26.097.091.115.058.028.396.068.018-.004c1.197.002.701-.128.957.009l.104-.584.006-.007L23.821 1.998c.39-.596.609-1.397-.375-1.788z"/>
                        </svg> Easy amendment
					</div>
				</div>
			</div>
			<hr class="w-100" />
		</section>
        <!-- extraServices -->
		<section class="extraServices container">
			<div class="pricesHeaderText text-center ourStory">Extra services</div>
			<div class="pricesHeaderDecoration w-100 d-flex align-items-center justify-content-center">
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
			<div class="services d-flex flex-wrap align-items-center justify-content-center">
				<div class="service">
					<div class="serviceImage rounded-circle d-flex align-items-center justify-content-center">
						<svg xmlns="http://www.w3.org/2000/svg" width="37" height="48">
                            <path fill-rule="evenodd" fill="#646464" d="M34.744 0H2.254C1.11 0 0 1.16 0 2.264v45.735h36.999V2.264C36.999 1.16 35.987 0 34.744 0zm-9.078 21.995a2.8 2.8 0 0 1-2.791 2.804h-8.751a2.8 2.8 0 0 1-2.791-2.804v-1.196a.797.797 0 1 1 1.592 0v1.196c0 .664.538 1.204 1.199 1.204h8.751c.661 0 1.855-.54 1.855-1.204v-1.196c0-.443-.301-.8.14-.8.44 0 .796.357.796.8v1.196z"/>
                        </svg>
					</div>
					<div class="serviceText text-center">Inside Cabinets</div>
					<div class="serviceTime text-center">30 minutes</div>
				</div>
				<div class="service">
					<div class="serviceImage rounded-circle d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="56">
                            <path fill-rule="evenodd" fill="#646464" d="M25.406 52.934v3.065h-5.302v-3.065H7.883v3.065H2.581v-3.065H0V20.313h27.999v32.621h-2.593zM5.749 25.7c0-1.293-.54-1.784-1.159-1.784-.666 0-1.16.537-1.16 1.784v6.748c0 .664.54 1.156 1.16 1.156.665 0 1.159.056 1.159-1.156V25.7zM0 18.2V0h27.999v18.2H0zm3.43-4.201c0 .663.54 1.155 1.16 1.155.665 0 1.158-.538 1.158-1.155V6.621c0-.663-.539-1.155-1.158-1.155-.666 0-1.16.934-1.16 1.155v7.378z"/>
                        </svg>
					</div>
					<div class="serviceText text-center">Inside Fridge</div>
					<div class="serviceTime text-center">30 minutes</div>
				</div>
				<div class="service">
					<div class="serviceImage rounded-circle d-flex align-items-center justify-content-center">
						<svg xmlns="http://www.w3.org/2000/svg" width="52" height="33">
                            <path fill-rule="evenodd" fill="#646464" d="M50.119.981H1.879A1.881 1.881 0 0 0 0 2.863v28.246c0 1.037.842 1.881 1.879 1.881h48.24c1.039 0 1.88-.844 1.88-1.881V2.863a1.88 1.88 0 0 0-1.88-1.882zM41.814 8.68h2.936v3.22h-2.936V8.68zm0 3.045h2.936v2.941h-2.936v-2.941zm0 3.654h2.936v2.941h-2.936v-2.941zM38.6 8.68h2.399v3.22H38.6V8.68zm0 3.045h2.399v2.941H38.6v-2.941zm-3.829 17.5H31.52c.83-.292.876-.974.876-1.77h-6.111c3.125-1.913 5.172-5.054 5.172-8.611H7.21c0 3.557 2.46 6.7 4.981 8.611H6.82c0 .796-.377 1.478.134 1.77H3.758V4.746h31.013v24.479zM38.6 15.379h2.399v2.941H38.6v-2.941zm4.604 12.878c-1.774 0-3.212-1.44-3.212-2.837 0-2.155 1.438-3.595 3.212-3.595 1.772 0 3.209 1.44 3.209 3.595 0 1.397-1.437 2.837-3.209 2.837zm5.297-9.937h-2.936v-2.941h2.936v2.941zm0-3.654h-2.936v-2.941h2.936v2.941zm0-2.766h-2.936V8.68h2.936v3.22z"/>
                        </svg>
					</div>
					<div class="serviceText text-center">Inside Oven</div>
					<div class="serviceTime text-center">30 minutes</div>
				</div>
				<div class="service">
					<div class="serviceImage rounded-circle d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="39" height="46">
                            <path fill-rule="evenodd" fill="#646464" d="M0 45.999V8.987h38.999v37.012H0zm19.499-30.76c-6.798 0-12.329 5.497-12.329 12.254s5.531 12.255 12.329 12.255c6.798 0 12.329-5.498 12.329-12.255 0-6.757-5.53-12.254-12.329-12.254zm0 22.233c-5.535 0-10.039-4.477-10.039-9.979 0-5.502 4.504-9.978 10.039-9.978 5.851 0 10.04 4.476 10.04 9.978s-4.189 9.979-10.04 9.979zm7.985-9.979c0-4.383-3.575-7.936-7.985-7.936-3.609 0-7.984 3.553-7.984 7.936l.002.09c.379.326.796.637 2.283.637.115 0 .537-.368.944-.724.405-.354.788-.689 1.57-.689 1.636 0 1.164.335 1.569.689.408.356.829.724 1.664.724s1.256-.368 1.663-.724c.406-.354.789-.689 1.57-.689.782 0 1.165.335 1.57.689.408.356.829.724 1.79.724.576 0 .985-.26 1.34-.554.001-.058.004-.115.004-.173zm8.961-20.764c0 .624-.508 1.13-1.136 1.13a1.133 1.133 0 0 1-1.136-1.13c0-.623.509-1.129 1.136-1.129.628 0 1.136.506 1.136 1.129zm-3.645 0c0 .624-.509 1.13-1.137 1.13-.303 0-1.136-.506-1.136-1.13 0-.623.833-1.129 1.136-1.129.628 0 1.137.506 1.137 1.129zm-3.646 0c0 .624-.509 1.13-.974 1.13-.79 0-1.298-.506-1.298-1.13 0-.623.508-1.129 1.298-1.129.465 0 .974.506.974 1.129zm-20.683 0c0 .624-.508 1.13-1.136 1.13a1.133 1.133 0 0 1-1.136-1.13c0-.623.509-1.129 1.136-1.129.628 0 1.136.506 1.136 1.129zm-3.645 0c0 .624-.509 1.13-1.136 1.13-.07 0-1.137-.506-1.137-1.13C2.553 6.106 3.62 5.6 3.69 5.6c.627 0 1.136.506 1.136 1.129zM0 0h38.999v3.982H0V0z"/>
                        </svg>
					</div>
					<div class="serviceText text-center">Laundry Wash & Dry</div>
					<div class="serviceTime text-center">30 minutes</div>
				</div>
				<div class="service">
					<div class="serviceImage rounded-circle d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="47" height="47">
                            <path fill-rule="evenodd" fill="#646464" d="M45.699 46.999H1.3a1.3 1.3 0 0 1-1.3-1.3v-44.4A1.3 1.3 0 0 1 1.3 0h44.399c.719 0 1.3.581 1.3 1.299v44.4a1.3 1.3 0 0 1-1.3 1.3zM42.996 4.1H4.3v38.896h38.696V4.1zM21.68 21.68H7.642V7.641H21.68V21.68zm0 17.676H7.642V25.319H21.68v14.037zM39.358 21.68H25.319V7.641h14.039V21.68zm0 17.676H25.319V25.319h14.039v14.037z"/>
                        </svg>
					</div>
					<div class="serviceText text-center">Interior Windows</div>
					<div class="serviceTime text-center">30 minutes</div>
				</div>
			</div>
		</section>
        <!-- What we include in cleaning -->
		<section class="cleaningServices container-fluid">
			<div class="cleaningServicesHeader">
				<div class="cleaningServicesHeaderText text-center ourStory">What we include in cleaning</div>
				<div class="cleaningServicesHeaderDecoration w-100 d-flex align-items-center justify-content-center">
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
			</div>
			<div class="container">
				<div class="cleaningServicesCards d-flex align-items-start justify-content-center flex-wrap">
					<div class="cleaningServicesCard">
						<img src="./assets/Images/bedroom.png" alt="Bedroom" />
						<div class="cleaningServicesCardHeader">Bedroom and Living Room</div>
						<div class="cleaningServicesCardsDescription">
                            
							<div class="cleaningServicesCardsDescriptionItem">Dust all accessible surfaces</div>
							<div class="cleaningServicesCardsDescriptionItem">Wipe down all mirrors and glass fixtures</div>
							<div class="cleaningServicesCardsDescriptionItem">Clean all floor surfaces</div>
							<div class="cleaningServicesCardsDescriptionItem">Take out garbage and recycling</div>
						</div>
					</div>
					<div class="cleaningServicesCard">
						<img src="./assets/Images/bathroom.png" alt="Bathroom" />
						<div class="cleaningServicesCardHeader">Bathrooms</div>
						<div class="cleaningServicesCardsDescription">
							<div class="cleaningServicesCardsDescriptionItem">Wash and sanitize the toilet, shower, tub, sink</div>
							<div class="cleaningServicesCardsDescriptionItem">Dust all accessible surfaces</div>
							<div class="cleaningServicesCardsDescriptionItem">Wipe down all mirrors and glass fixtures</div>
							<div class="cleaningServicesCardsDescriptionItem">Clean all floor surfaces</div>
							<div class="cleaningServicesCardsDescriptionItem">Take out garbage and recycling</div>
						</div>
					</div>
					<div class="cleaningServicesCard">
						<img src="./assets/Images/kitchen.png" alt="Kitchen" />
						<div class="cleaningServicesCardHeader">Kitchen</div>
						<div class="cleaningServicesCardsDescription">
							<div class="cleaningServicesCardsDescriptionItem">Dust all accessible surfaces</div>
							<div class="cleaningServicesCardsDescriptionItem">Empty sink and load up dishwasher</div>
							<div class="cleaningServicesCardsDescriptionItem">Wipe down exterior of stove, oven and fridge</div>
							<div class="cleaningServicesCardsDescriptionItem">Clean all floor surfaces</div>
							<div class="cleaningServicesCardsDescriptionItem">Take out garbage and recycling</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- whyHelperland start -->
		<section class="whyHelperland container">
			<div class="whyHelperlandHeader">
				<div class="whyHelperlandHeaderText text-center ourStory">Why Helperland</div>
				<div class="whyHelperlandHeaderDecoration w-100 d-flex align-items-center justify-content-center">
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
			</div>
			<div class="whyDescription d-flex align-items-start  justify-content-center">
				<div>
					<div class="whyDescriptionItem">
						<div class="whyDescriptionItemHeader text-center text-sm-center text-md-center text-lg-end">
							Experienced and vetted professionals
						</div>
						<div class="whyDescriptionItemText text-center text-sm-center text-md-center text-lg-end">
							dominate the industry in scale and scope with an adaptable, extensive network that consistently delivers exceptional
							results.
						</div>
				
						<div class="whyDescriptionItemHeader text-center text-sm-center text-md-center text-lg-end">Dedicated customer service</div>
						<div class="whyDescriptionItemText text-center text-sm-center text-md-center text-lg-end">
							to our customers and are guided in all we do by their needs. The team is always happy to support you and offer all the
							information. you need.
						</div>
					</div>
				</div>
                <div class="align-self-center"><img src="./assets/Images/thebest.png"></div>
                
				
				<div>
					<div class="whyDescriptionItem">
						<div class="whyDescriptionItemHeader text-center text-sm-center text-md-center text-lg-start">Every cleaning is insured</div>
						<div class="whyDescriptionItemText text-center text-sm-center text-md-start">
							and seek to provide exceptional service and engage in proactive behavior. We‘d be happy to clean your homes.
						</div>
				
						<div class="whyDescriptionItemHeader text-center text-sm-center text-md-center text-lg-start">Secure online payment</div>
						<div class="whyDescriptionItemText text-center text-sm-center text-md-start">
							Payment is processed securely online. Customers pay safely online and manage the booking.
						</div>
					</div>
				</div>
			</div>
		</section>
    
		<?php include "footer.php"; ?>
</body>
  
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src='./assets/js/Price.js'></script>
</html>