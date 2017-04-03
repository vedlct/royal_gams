<html>
<head>
<style>
    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: -10px;
        top: 0;

        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 40%;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0,0,0,.5);
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>
</head>

<div id="myModal2" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">×</span>

        <h2>Edit </h2>
        <!--    --><?php //echo form_open('stockc/insertstock', 'class="form-material material-primary"'); ?>
        <?php

        foreach ($edit as $e){
            ?>
            <form class="form-material material-primary" method="post" action="">
                <div class="form-group row ">
                    <label  class="col-md-3 col-form-label"  >Product ID</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control"  placeholder="Product ID" name="p_id" id="p_id" value="<?php echo $e->product_id?>" >
                    </div>
                </div>
                <div class="form-group row ">
                    <label  class="col-md-3 col-form-label"  >Type</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control"  placeholder="Type" name="type" value="<?php echo  $e->type?>" >
                    </div>
                </div>
                <div class="form-group row ">
                    <label  class="col-md-3 col-form-label"  >Weight</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control"  placeholder="Weight" name="weight" id="p_id" value="<?php echo $e->weight?>">
                    </div>
                </div>
                <div class="form-group row ">
                    <label  class="col-md-3 col-form-label"  >Price</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control"  placeholder="Price" name="price" value="<?php echo  $e->price?>" >
                    </div>
                </div>
                <div class="form-group row ">
                    <label  class="col-md-3 col-form-label"  >In Stock</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control"  placeholder="In Stock" name="amount" value="<?php echo $e->amount?>" >
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-md-2"></div>
                    <div class=" col-md-10">
                        <button type="submit" class="btn btn-primary"  name="psubmit">Submit</button>

                    </div>
                </div>
            </form>
        <?php }?>



        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        </table>

    </div>

</div>
</html>