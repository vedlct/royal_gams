<?php foreach ($this->data['edit'] as $e ){?>
<form class="form-material material-primary" method="post" action="<?php echo base_url()?>Stonec/edit/<?php echo $e->id ?>">
<div class="form-group row ">
<label  class="col-md-3 col-form-label"  >Product ID</label>
<div class="col-md-7">
    <input type="text" class="form-control"  placeholder="Product ID" name="p_id" id="p_id" value=" <?php echo $e->product_id ?>" >
</div>
</div>
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Stone Name</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="Stone Name" name="s_name" id="s_name" value="<?php echo $e->stone_name ?>">
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
    <input type="text" class="form-control"  placeholder="Weight" name="weight" id="p_id" value="<?php echo $e->weight ?>">
</div>
</div>
<div class="form-group row ">
<label  class="col-md-3 col-form-label"  >Price</label>
<div class="col-md-7">
    <input type="text" class="form-control"  placeholder="Price" name="price" value="<?php echo $e->price ?>" >
</div>
</div>
<div class="form-group row ">
<label  class="col-md-3 col-form-label"  >In Stock</label>
<div class="col-md-7">
    <input type="text" class="form-control"  placeholder="In Stock" name="amount" value="<?php echo $e->amount ?>" >
</div>
</div>
<br>
<div class="form-group row">
<div class="col-md-2"></div>
<div class= "col-md-10">
    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
<button type=submit class="btn btn-primary"  name="stockedit">Submit</button>
<?php } ?>
</div>
</div>
</form>