  
    <!-- Login modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 11111;">
        <div class="modal-dialog" role="document">
            <div class="modal-content clearfix">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="modal-body">
                    <h3 class="title">Login </h3>
                    <p class="description">Login here Using Email & Password</p>
                    <div class="form-group">
                       
                        <input type="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                       
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group checkbox">
                        <input type="checkbox">
                        <label>Remamber me</label>
                    </div>

                    <button class="btn">Login</button>
                    <div class="lowerpart">
                        <div> <a type="button" data-bs-toggle="modal" data-bs-target="#myModal2" href="">Forgot Password?</a></div>
                        <div><span>Dont Have an account?<span> <a href="./views/create_account.php">Create an account<a></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- fogot password modal -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 11111;">
        <div class="modal-dialog" role="document">
            <div class="modal-content clearfix">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="modal-body">
                    <h3 class="title">Forgot Password </h3>

                    <div class="form-group">
                      
                        <input type="email" class="form-control" placeholder="Enter email">
                    </div>


                    <button class="btn">Send</button>
                    <div class="lowerpart">
                        <div> <a href="" type="button" data-bs-toggle="modal" data-bs-target="#myModal">Login now</a></div>

                    </div>

                </div>
            </div>
        </div>
    </div>