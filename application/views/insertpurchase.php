<!--    --><?php //echo form_open('stockc/insertstock', 'class="form-material material-primary"'); ?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
    <form class="form-material material-primary" method="post" action="<?php echo base_url()?>Purchasec/insert">
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Product ID</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="Product ID" name="p_id" id="p_id">
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Type</label>
        <div class="col-md-7">
            <input type="text" class="form-control"  placeholder="Type" name="type" >
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
            <input id="price" type="text" class="form-control"  placeholder="Price" name="price" >
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >In Stock</label>
        <div class="col-md-7">
            <input id="instock" type="text" class="form-control"  placeholder="In Stock"    name="amount" >
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Paid (total)</label>
        <div class="col-md-7">
            <input id="paid" type="text" class="form-control"  placeholder="paid" name="paid" >
        </div>
    </div>
    <div class="form-group row ">
        <label  class="col-md-3 col-form-label"  >Due (total)</label>
        <div class="col-md-7">
            <input id="due" type="text" class="form-control"  placeholder="Due" name="due" >
        </div>
    </div>
    <br>
    <div class="form-group row">
        <div class="col-md-2"></div>
        <div class=" col-md-10">
            <button type="submit" class="btn btn-primary"  name="purcsubmit">Submit</button>

        </div>
    </div>
</form>

<script>

    $(function() {

        $("#instock").on("keydown keyup", sum);
        function sum() {
            $("#due").val(Number($("#price").val()) * Number($("#instock").val()));
            //$("#subt").val(Number($("#num1").val()) - Number($("#num2").val()));
        }

        $("#paid").on("keydown keyup", sub);

        function sub() {
            $("#due").val((Number($("#price").val()) * Number($("#instock").val())) - Number($("#paid").val()));

        }
    });


</script>

<script type="text/javascript" src="<?php echo base_url(); ?>vendor/jquery/jquery-1.12.3.min.js"></script>
</html>