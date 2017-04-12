<!--    --><?php //echo form_open('stockc/insertstock', 'class="form-material material-primary"'); ?>
<form class="form-material material-primary" method="post" action="<?php echo base_url()?>Type/inserttype">
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Type Name</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="Type Name" name="t_name" id="t_name">
        </div>
    </div>

    <br>
    <div class="form-group row">
        <div class="col-md-2"></div>
        <div class=" col-md-10">
            <button type="submit" class="btn btn-primary"  name="tsubmit">Submit</button>

        </div>
    </div>
</form>