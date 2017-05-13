<div class="modal fade" id="forgot_pass" tabindex="-1" role="dialog" aria-labelledby="forgot_password" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <form action="<?php echo base_url()?>Home/forgot_pass" class="popup-form" id="forgot_pass" method="post">
                <div class="login_icon"><i class="icon_lock_alt"></i></div>
                <label ><h3 style="color: white">Please Enter Your Email Address<h3></label>
                <input type="email" class="form-control form-white" placeholder="Email" name="email" required>
                <div class="text-left">
                </div>
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                <button type="submit" class="btn btn-submit" value="Submit">Submit</button>
            </form>
        </div>
    </div>
</div>