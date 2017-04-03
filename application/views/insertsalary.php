<style></style>
<form class="form-material material-primary" method="post" action="<?php base_url()?>Salaryc">
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Name</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="Name" name="name" id="p_id">
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Designation</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="Designation" name="degn" >
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Salary</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="Salary" name="salary" id="p_id">
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Phone Number</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="Phone Number" name="pnumber" >
        </div>
    </div>

    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Address</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="Address" name="address" >
        </div>
    </div>

    <div class="form-group row " >
        <label  class="col-md-3 col-form-label" >Status</label>
        <div class="col-md-7" >
            <select name="status">
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>

            </select>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <div class="col-md-2"></div>
        <div class=" col-md-10">
            <button type="submit" class="btn btn-primary"  name="salsubmit">Submit</button>

        </div>
    </div>
</form>