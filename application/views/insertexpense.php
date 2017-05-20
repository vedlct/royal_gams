<!--    --><?php //echo form_open('stockc/insertstock', 'class="form-material material-primary"'); ?>
<form class="form-material material-primary" method="post" action="<?php echo base_url()?>Expense/insertexpense">





    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Purpose</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder=" Your Purpose" name="purpose" id="purpose">
        </div>
    </div>



    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Amount</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="Your Amount" name="amount" >
        </div>
    </div>

    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Date</label>
        <div class="col-md-2">
            <input type="text" class="form-control docs-date" name="date" placeholder="Pick a date">
        </div>
    </div>

    <br>
    <div class="form-group row">
        <div class="col-md-2"></div>
        <div class=" col-md-10">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
            <button type="submit" class="btn btn-primary"  name="tsubmit">Submit</button>

        </div>
    </div>
</form>