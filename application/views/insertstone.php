<!--    --><?php //echo form_open('stockc/insertstock', 'class="form-material material-primary"'); ?>
<form class="form-material material-primary" method="post" action="">
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Stone ID</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="Product ID" name="p_id" id="p_id">
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Stone Name</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="Stone Name" name="s_name" id="s_name">
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Type</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="Type" name="type" value="Stone" readonly>
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Weight</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="Weight" name="weight" id="p_id">
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Price(per piece)</label>
        <div class="col-md-7">
            <input type="text" class="form-control" placeholder="Price" name="price" >
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >In Stock</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="In Stock" name="amount" >
        </div>
    </div>
    <br>
    <div class="form-group row">
        <div class="col-md-2"></div>
        <div class=" col-md-10">
            <button type="submit" class="btn btn-primary"  name="ssubmit">Submit</button>

        </div>
    </div>
</form>