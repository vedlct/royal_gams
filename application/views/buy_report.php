<div class="row">
    <div class="col-md-12">
        <form method="post" action="<?php echo base_url()?>Report">
            <div class="col-md-3 col-sm-6" >
                <div class="form-group" >

                    <label for="date">From</label>
                    <input type="text" class="form-control docs-date" name="date_from" placeholder="Pick a date">
                </div >
            </div>

            <div class="col-md-3 col-sm-6" >
                <div class="form-group" >

                    <label for="date">To</label>
                    <input type="text" class="form-control docs-date" name="date_to" placeholder="Pick a date">
                </div >
            </div>


            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
            <input style="margin-top: 44px;margin-left: 50px" type="submit" name="buy_generate" class="btn btn-success" value="Generate">

        </form>


        <br>
        <h5 style="text-align: center" class="mb-1">BUY Report</h5>


        <?php if($this->input->post('buy_generate')){?>

            <div class="table-responsive">
                <table class=" table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Product ID</th>
                        <th>Type</th>
                        <th>Weight</th>

                        <th>Price</th>
                        <th>Instock</th>
                        <th>Paid</th>
                        <th>Due</th>
                    </tr>
                    </thead>
                    <?php $count=0; ?>

                    <?php foreach ($this->data['show_buy_review_by_date_buy'] as $z){
                        $count++;?>
                        <tbody>
                        <tr>
                            <td><?php echo $count?></td>
                            <td><?php echo $z->date ?></td>
                            <td><?php echo $z->product_id ?></td>
                            <td><?php echo $z->type ?></td>
                            <td><?php echo $z->weight ?></td>

                            <td><?php echo $z->price?> = <?php echo $z->tp ?></td>
                            <td><?php echo $z->instock ?></td>
                            <td><?php echo $z->paid ?></td>
                            <td><?php echo $z->due ?></td>



                        </tr>

                        </tbody>
                    <?php }?>
                    <tr >
                        <td colspan="4"></td>

                        <th id="1">Total Amount</th>
                        <?php foreach ($this->data['gettotaltrans_buy'] as $m) { ?>
                            <td ><?php echo $m->total?></td>

                        <?php } ?>
                        <td colspan="3"></td>
                    </tr>
                </table>
            </div>
        <?php }else{ ?>


            <div class="table-responsive">
                <table class=" table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Product ID</th>
                        <th>Type</th>
                        <th>Weight</th>

                        <th>Price</th>
                        <th>Instock</th>
                        <th>Paid</th>
                        <th>Due</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $count=0;
                    foreach ($this->data['show_buy_review_date_buy'] as $z){?>
                    <tr>
                        <th scope="row"><?php echo $count?></th>
                        <td><?php echo $z->date?></td>
                        <td><?php echo $z->product_id?></td>
                        <td><?php echo $z->type?></td>
                        <td><?php echo $z->weight?></td>

                        <td><?php echo $z->price?></td>
                        <td><?php echo $z->instock?></td>
                        <td><?php echo $z->paid?></td>
                        <td><?php echo $z->due?></td>

                    </tr>
                    <?php
                    $count=$count+1;

                    ?>
                    </tbody>
                    <?php }?>
                    <tr >
                        <td colspan="4"></td>

                        <th id="1">Total Price</th>
                        <?php foreach ($this->data['gettotal_buy'] as $m) { ?>
                            <td ><?php echo $m->total?></td>

                        <?php } ?>
                        <td colspan="3"></td>
                    </tr>
                </table>
            </div>

        <?php } ?>

    </div>
</div>