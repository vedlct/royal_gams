<?php foreach ($this->data['edit'] as $e) {?>
<form class="form-material material-primary" method="post" action="<?php echo base_url()?>Salaryc/salarycedit/<?php echo $e->id ?>">
<div class="form-group row ">
<label  class="col-md-3 col-form-label"  >Name</label>
<div class="col-md-7">
    <input type="text" class="form-control"  placeholder="Name" name="name" id="p_id"  value="<?php echo $e->name ?>">
</div>
</div>
<div class="form-group row ">
<label  class="col-md-3 col-form-label"  >Designation</label>
<div class="col-md-7">
    <input type="text" class="form-control"  placeholder="Designation" name="degn"  value="<?php echo $e->desg?>">
</div>
</div>
<div class="form-group row ">
<label  class="col-md-3 col-form-label"  >Salary</label>
<div class="col-md-7">
    <input type="text" class="form-control"  placeholder="Salary" name="salary" id="p_id" value="<?php echo $e->salary?> ">
</div>
</div>
<div class="form-group row ">
<label  class="col-md-3 col-form-label"  >Phone Number</label>
<div class="col-md-7">
    <input type="text" class="form-control"  placeholder="Phone Number" name="pnumber"  value="<?php echo $e->phone ?>">
</div>
</div>

<div class="form-group row ">
<label  class="col-md-3 col-form-label"  >Address</label>
<div class="col-md-7">
    <input type="text" class="form-control"  placeholder="Address" name="address" value="<?php echo $e->address ?>">
</div>
</div>
<div class="form-group row " >
<label  class="col-md-3 col-form-label" >Status</label >
<div class="col-md-7" >
    <select name="status">
        <option value="<?php echo $e->status?>"><?php echo $e->status?></option>
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>

    </select>
</div>
</div>

<br>
<div class="form-group row">
<div class="col-md-2"></div>
<div class=" col-md-10">
    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
<button type="submit" class="btn btn-primary"  name="salsubmit">Submit</button>

</div>
</div>
</form>

<?php } ?>