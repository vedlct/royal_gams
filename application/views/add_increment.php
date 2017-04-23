<?php foreach ($this->data['edit'] as $e) {?>
<form class="form-material material-primary" method="post" action="<?php base_url()?>Salaryc/add_increment/<?php echo $e->id ?>">
<div class="form-group row ">
<label  class="col-md-3 col-form-label"  >Name</label>
<div class="col-md-7">
    <input type="text" class="form-control"  placeholder="Name" name="name" id="name"  value=" <?php echo $e->name ?>" readonly>
</div>
</div>
<div class="form-group row ">
<label  class="col-md-3 col-form-label"  >Designation</label>
<div class="col-md-7">
    <input type="text" class="form-control"  placeholder="Designation" name="degn"  value=" <?php echo $e->desg?>" readonly>
</div>
</div>
<div class="form-group row ">
<label  class="col-md-3 col-form-label"  >Salary</label>
<div class="col-md-7">
    <input type="text" class="form-control"  placeholder="Salary" name="salary" id="p_id" value="<?php echo $e->salary?> "readonly>
</div>
</div>
<div class="form-group row ">
<label  class="col-md-3 col-form-label"  >Increment Amount</label>
<div class="col-md-7">
    <input type="text" class="form-control"  placeholder="Increment" name="increment"  value="">
</div>
</div>



<br>
<div class="form-group row">
<div class="col-md-2"></div>
<div class=" col-md-10">
<button type="submit" class="btn btn-primary"  name="salsubmit">Submit</button>
<?php } ?>
</div>
</div>
</form>