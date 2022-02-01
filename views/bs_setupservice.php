<script>
$("#2,#3,#4").removeClass("add-color add");
$("#1").addClass("add");
$("#img2").attr("src","./assets/Images/schedule.png");
$("#img3").attr("src", "./assets/Images/details.png");
$("#img4").attr("src", "./assets/Images/payment.png");
</script>
<div class="pincode-check">
    <form action="/" method="post">
      <label class="pin-label" for="pincode">
        Please enter your zip code:
      </label>
      <br>
      <input class="pincode-input-box" type="text" name="pincode" placeholder="Postal code">
      <input class="pin-btn" type="submit" value="check availability">
    </form>
  </div>


