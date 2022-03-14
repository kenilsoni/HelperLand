<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
    <title>Forgot Password</title>
  <style>
      body{
        background-color: aquamarine;
        font-weight: bold;
      }
      .pin-btn {
        background-color: #1D7A8C;
        color: white;
        border: none;
        height: 46px;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 23px;
        margin-left: 10px;
    }
    h1{
      text-align: center;
      margin: 10px;
    }
    input:disabled {
    background: #eee;
}


.validate_cus {
	color: #a94442;
	font-size: small;
  }
  </style> 
</head>
  <body>
 <form class="container" action="?controller=Helperland&function=forgot_password" method="post" id="signup-form">
    <div class="row justify-content-center">
        <h1>Forgot Password</h1>
    </div>
    <div class="row justify-content-center">
      <div class="col-6 mb-3">
        <label class="form-label">New Password</label><br>
        <input type="text" class="form-control" name="password" id="password_reg" placeholder="Password" required>
        <span class="glyphicon form-control-feedback" id="password_reg1"></span>
        <input type="hidden" value="<?php if(isset($_GET['Parameter'])){ echo $_GET['Parameter'];}?>" name="id">
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-6 mb-3">
        <label class="form-label">Confirm Password</label><br>
        <input type="text" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required disabled>
        <span class="glyphicon form-control-feedback" id="confirmPassword1">
     		</span>
      </div>
    </div>
    <div class="row justify-content-center"><div style="text-align: center;"><input class="pin-btn " name="setbtn" type="submit"></div></div>
 </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>
<script src="./assets/js/password_validator.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>