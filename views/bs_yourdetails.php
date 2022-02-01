

<script>
$(document).on("click", ".add-address-btn", function () {
	$(".add-address-box").css("display", "block");
	$(this).hide();
  });
  $("#2,#3").addClass("add-color");
  $("#3").addClass("add");
  $("#1,#2,#4").removeClass("add");
  $("#img3").attr("src", "./assets/Images/details-white.png");
  $("#4").removeClass("add-color");
  $("#img4").attr("src", "./assets/Images/payment.png");
  $("#img2").attr("src", "./assets/Images/schedule-white.png");
  </script>
<div id="address-list">
				<form action="" method="">
				  <label for="Address">
					Enter your details, so we can serve you in  better way!
				  </label>
				  <div class="address-check-box">
					<span><input type="radio" name="address1"></span>
					<span><p><strong>Address: </strong> </p>
					  <p><strong>Phone number: </strong></p>
					</span>
				  </div>
	
				  <div class="address-check-box">
					<span><input type="radio" name="address1"></span>
					<span><p><strong>Address: </strong> </p>
					  <p><strong>Phone number: </strong></p>
					</span>
				  </div>
				  
				  <button type="button" class="add-address-btn">+ Add New Address</button>
				  <div class="add-address-box">
					<div class="address-taker-box">
					  <div>
						<label for="streetname">
						  Street name
						</label>
						<br>
						<input type="text" name="streetname" placeholder="Street name" >
					  </div>
					  <div>
						<label for="housename">
						  House number
						</label>
						<br>
	
						<input type="text" name="housename" placeholder="House name">
					  </div>
					</div>
					<div class="address-taker-box">
					  <div>
						<label for="postalcode">
						  Postal code
						</label>
						<br>
						<input type="text" name="postalcode" placeholder="Postal code">
	
					  </div>
					  <div>
						<label for="city">
						  City
						</label>
						<br>
						<input type="text" name="city" placeholder="City">
					  </div>
					</div>
					<div class="address-taker-box tel">
					  <div>
						<label for="phonenumber">
						  Phone number
						</label>
						<br>
						<div class="tel-box">
						  <span class="tel-icon">
							+49
						  </span>
						  <input type="tel" name="phonenumber" placeholder="Phone number">
						</div>
					  </div>
					  <div id="tel2">
	
					  </div>
					</div>
					<div class="Button">
					  <button class="save-btn">Save</button>
					  <button class="clear-btn">Cancel</button>
					</div>
				  </div>
				  <h4 class="favourite-title">Your Favourite Service Providers</h4>
				  <div class="favourite-box">
					<label for="comment">
					  Your can choose your favourite service provider from the below list
					</label>
					<div class="favourite-worker">
					  <div style="text-align: center; width:20%;">
						<img class="favourite-worker-img" src="./assets/Images/cap.png" alt="cap">
						<p class="mb-2">Sandip Patel</p>
						<button class="btn btn-outline-secondary" type="button">Select</button>
					  </div>
					</div>
					
				  </div>
				  <div style="text-align: right;"><input class="continue" type="submit" name="submit" value="Continue"></div>
	
				</form>
			  </div>