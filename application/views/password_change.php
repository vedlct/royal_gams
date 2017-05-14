



<div class="modal fade" id="forgot_pass" tabindex="-1" role="dialog" aria-labelledby="forgot_password" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <form action="<?php echo base_url()?>Login/password_change" class="popup-form" id="forgot_pass" method="post">


                <h1 style="text-align: center">Change Password</h1>

                <div class="row" >
                    <div class="col-md-6 col-sm-6" >
                        <div class="form-group" >

                            <label >User Name</label >
                            <input class="form-control" type="text" name="username" >
                        </div >
                    </div >
                    <div class="col-md-6 col-sm-6" >
                        <div class="form-group" >
                            <label>Email</label>
                            <input class="form-control" type="text" name="email" >
                        </div >
                    </div >
                </div >

                <div class="row" >
                    <div class="col-md-6 col-sm-6" >
                        <div class="form-group" >

                            <label>New Password</label>
                            <input class="form-control" type="text" name="new_pass"  >
                        </div >
                    </div >
                    <div class="col-md-6 col-sm-6" >
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input class="form-control" type="text" name="con_pass" >
                        </div>
                    </div >
                </div >

                <div class="text-left">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                <button type="submit" class="btn btn-submit" value="Submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>