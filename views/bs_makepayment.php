
<div id="make-payment">
	
<h4>Pay sechurely with Helperland payment gateway!</h4>


<form action="/" method="post">

    <input class="form-control make-payment-input" type="text" placeholder="card number">
   
    <div class="payment-condition">
      <input type="checkbox" name="acceptPrivacyPolicy" id="acceptPrivacyPolicy">
      <label for="acceptPrivacyPolicy">
        I accepted <a href="">terms and conditions</a>, the cancellation policy and the <a href="">privacy policy</a>. I confirm that Helperland starts to execute the contract before the expiry of the withdrawal period and I lose my right of withdrawal as a consumer with full performance of the contract.
      </label>
    </div>

    <div style="text-align:right"><input type="submit" class="complete" value="Complete Booking"></div>

</form>
</div>


<script>
$("#4").addClass("add");
$("#1,#2,#3").removeClass("add");
$("#2,#3,#4").addClass("add-color");
$("#img4").attr("src", "./assets/Images/payment-white.png");
$("#img3").attr("src", "./assets/Images/details-white.png");
$("#img2").attr("src", "./assets/Images/schedule-white.png");

</script>



