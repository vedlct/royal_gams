







        <form action="<?php echo base_url()?>Login/password_change" class="popup-form" id="forgot_pass" method="post">


            <h1 style="text-align: center;padding: 0px">Change Password</h1>

            <div class="row" >
                <div class="col-md-6 col-sm-6" >
                    <div class="form-group" >

                        <label >User Name</label >
                        <input class="form-control" type="text" name="username" required >
                    </div >
                </div >
                <div class="col-md-6 col-sm-6" >
                    <div class="form-group" >
                        <label>Old Password</label>
                        <input class="form-control" type="password" name="old_password" required>
                    </div >
                </div >
            </div >

            <div class="row" >
                <div class="col-md-6 col-sm-6" >
                    <div class="form-group" >

                        <label>New Password</label>
                        <input class="form-control" type="password" name="new_pass" required >
                    </div >
                </div >
                <div class="col-md-6 col-sm-6" >
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input class="form-control" type="password" name="con_pass" required >
                    </div>
                </div >
            </div >

            <div class="text-left">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                <button type="submit" class="btn btn-submit" value="Submit">Submit</button>
            </div>
        </form>










