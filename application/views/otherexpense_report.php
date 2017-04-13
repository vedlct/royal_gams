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
            <input style="margin-top: 44px;margin-left: 50px" type="submit" name="otherexpense_generate" class="btn btn-success" value="Generate">

        </form>


        <br>
        <h5 class="mb-1">Other Expense Report</h5>


        <?php if($this->input->post('otherexpense_generate')){?>

            <div class="table-responsive">
                <table class=" table table-bordered">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Date</th>
                        <th>Purpose</th>

                        <th>Amount</th>

                    </tr>
                    </thead>
                    <?php $count=0; ?>

                    <?php foreach ($this->data['show_buy_review_by_date_other_expense'] as $z){
                        $count++;?>
                        <tbody>
                        <tr>
                            <td><?php echo $count?></td>
                            <td><?php echo $z->date ?></td>
                            <td><?php echo $z->purpose ?></td>
                            <td><?php echo $z->amount ?> = <?php echo $z->rowtotal ?> </td>




                        </tr>

                        </tbody>
                    <?php }?>
                    <tr >
                        <td colspan="2"></td>

                        <th id="1">Total Amount</th>
                        <?php foreach ($this->data['gettotaltrans_other_expense'] as $m) { ?>
                            <td ><?php echo $m->total?></td>

                        <?php } ?>
                    </tr>
                </table>
            </div>
        <?php }else{ ?>


            <div class="table-responsive">
                <table class=" table table-bordered">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Date</th>
                        <th>Purpose</th>

                        <th>Amount</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $count=0;
                    foreach ($this->data['show_buy_review_date_other_expense'] as $v){?>
                    <tr>
                        <td><?php echo $count?></td>
                        <td><?php echo $v->date ?></td>
                        <td><?php echo $v->purpose ?></td>
                        <td><?php echo $v->amount ?></td>

                    </tr>
                    <?php
                    $count=$count+1;

                    ?>
                    </tbody>
                    <?php }?>
                    <tr >
                        <td colspan="2"></td>

                        <th id="1">Total Amount</th>
                        <?php foreach ($this->data['gettotal_other_expense'] as $m) { ?>
                            <td ><?php echo $m->total?></td>

                        <?php } ?>
                    </tr>
                </table>
            </div>

        <?php } ?>

    </div>
</div>