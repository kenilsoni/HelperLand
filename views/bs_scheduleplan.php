<script>
	$("#1,#3,#4").removeClass("add");
	$("#2").addClass("add-color add");
	$("#3,#4").removeClass("add-color");
	$("#img2").attr("src", "./assets/Images/schedule-white.png");
	$("#img3").attr("src", "./assets/Images/details.png");
	$("#img4").attr("src", "./assets/Images/payment.png");
	$(document).on("click", "#insideCabinetCheck", function() {
		if ($(this).prop("checked") == true) {
			$("#insideCabinetImg").attr("src", "./assets/Images/3-green.png");
		} else if ($(this).prop("checked") == false) {
			$("#insideCabinetImg").attr("src", "./assets/Images/3.png");
		}
	});

	$(document).on("click", "#insideFridgeCheck", function() {
		if ($(this).prop("checked") == true) {
			$("#insideFridgeImg").attr("src", "./assets/Images/5-green.png");
		} else if ($(this).prop("checked") == false) {
			$("#insideFridgeImg").attr("src", "./assets/Images/5.png");
		}
	});

	$(document).on("click", "#insideOvenCheck", function() {
		if ($(this).prop("checked") == true) {
			$("#insideOvenImg").attr("src", "./assets/Images/4-green.png");
		} else if ($(this).prop("checked") == false) {
			$("#insideOvenImg").attr("src", "./assets/Images/4.png");
		}
	});


	$(document).on("click", "#laundryCheck", function() {
		if ($(this).prop("checked") == true) {
			$("#laundryImg").attr("src", "./assets/Images/2-green.png");
		} else if ($(this).prop("checked") == false) {
			$("#laundryImg").attr("src", "./assets/Images/2.png");
		}
	});


	$(document).on("click", "#interiorCheck", function() {
		if ($(this).prop("checked") == true) {
			$("#interiorImg").attr("src", "./assets/Images/1-green.png");
		} else if ($(this).prop("checked") == false) {
			$("#interiorImg").attr("src", "./assets/Images/1.png");
		}
	});
</script>



<div class="schedule-plan">
	<form action="/" method="post">
		<label for="selectRoomAndBath">
			Select number of rooms and bath
		</label>
		<br />
		<div>
			<select name="numberOfRoom">
				<option value="1">1 bed</option>
				<option value="2">2 bed</option>
				<option value="3">3 bed</option>
				<option value="4">4 bed</option>
				<option value="5">5 bed</option>
			</select>
			<select name="numberOfBath">
				<option value="1">1 bath</option>
				<option value="2">1 bath</option>
				<option value="3">1 bath</option>
				<option value="4">1 bath</option>
				<option value="5">1 bath</option>
			</select>
		</div>
		<div class="selectRoomAndBath">
			<div>
				<label for="dateAndtime"> When do you need cleaner? </label>
				<div style="display: flex">
					<div class="date-input">
						<img src="./assets/Images/calendar.png" alt="calender" />
						<input type="date" name="date" />
					</div>
					<input type="time" name="time" id="" />
				</div>
			</div>
			<div class="totalTime">
				<label for="dateAndtime"> When do you need cleaner? </label>
				<br />
				<select name="range">
					<option value="1">1.0 Hrs</option>
					<option value="2">1.0 Hrs</option>
					<option value="3">1.0 Hrs</option>
					<option value="4">1.0 Hrs</option>
					<option value="5">1.0 Hrs</option>
				</select>
			</div>
		</div>
		<div class="extraService-checkbox">
			<h4>Extra services</h4>
			<div id="custom-checkboxes">
				<div class="checkbox">
					<input type="checkbox" name="insideCabinet" id="insideCabinetCheck" class="htmlcheckbox">
					<label for="insideCabinetCheck"><img src="./assets/Images/3.png" id="insideCabinetImg" alt=""></label>
					<p>inside cabinets</p>
				</div>

				<div class="checkbox">
					<input type="checkbox" id="insideFridgeCheck" name="insideFridge" class="htmlcheckbox">
					<label for="insideFridgeCheck"><img src="./assets/Images/5.png" id="insideFridgeImg" alt=""></label>
					<p>inside Fridge</p>
				</div>

				<div class="checkbox">
					<input type="checkbox" name="insideOven" id="insideOvenCheck" class="htmlcheckbox">
					<label for="insideOvenCheck"><img src="./assets/Images/4.png" id="insideOvenImg" alt=""></label>
					<p>inside Oven</p>
				</div>

				<div class="checkbox">
					<input type="checkbox" id="laundryCheck" name="laundry" class="htmlcheckbox">
					<label for="laundryCheck"><img src="./assets/Images/2.png" id="laundryImg" alt=""></label>
					<p>Laundry Wash & Dry</p>
				</div>

				<div class="checkbox">
					<input type="checkbox" id="interiorCheck" name="interior" class="htmlcheckbox">
					<label for="interiorCheck"><img src="./assets/Images/1.png" id="interiorImg" alt=""></label>
					<p>interior Windows</p>
				</div>
			</div>
		</div>
		<div class="comment-box">
			<label for="comment">
				Comments
			</label>
			<br>
			<textarea name="comment" id="comment" cols="30" rows="10"></textarea>
			<br>
			<input type="checkbox" name="have a pat"> <label class="have-pet">I have pets at home</label>
		</div>

		<div style="text-align: right;"><button class="continue" type="submit" name="submit" value="Continue">Continue</button></div>

	</form>
</div>