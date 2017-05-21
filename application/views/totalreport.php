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
    <input style="margin-top: 44px;margin-left: 50px" type="submit" name="total_generate" class="btn btn-success" value="Generate">

</form>

<br><br>

<h5 class="mb-1" style="text-align: center">Total Report</h5>
<?php if($this->input->post('total_generate')){?>

    <div class="table-responsive">
        <table class=" table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Sales</th>
                <th>Buy</th>
                <th>Other Expense</th>
                <th>Salary</th>

            </tr>
            </thead>
            <?php $count=0; ?>


                $count++;?>
                <tbody>
                <tr>
                    <th scope="row"><?php echo $count?></th>
                    <td>
                        <?php
                        date_default_timezone_set("Asia/Dhaka");

                        ?>
                        <?php echo  date("h:i:sa");?>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <td> </td>

                </tr>

                </tbody>

            <tr >
                <td colspan="2"></td>

                <th id="1">Total Amount</th>
<!--                --><?php //foreach ($this->data['gettotaltrans_total'] as $p) { ?>
                    <td ></td>

<!--                --><?php //} ?>
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
                <th>Sales</th>
                <th>Buy</th>
                <th>Other Expense</th>
                <th>Salary</th>
            </tr>
            </thead>
            <?php $count=0;


                $count++;?>
                <tbody>
                <tr>
                    <td><?php echo $count++ ?></td>
                    <td><?php
                        date_default_timezone_set("Asia/Dhaka");

                        ?>
                        <?php echo  date("Y-m-d");?>
                    </td>

                    <td>
                        <?php $query1 =$this->db->query(" select `date`,`product_id`,`type`,`weight`,SUM(`amount`) as amount, SUM(`price`) as price from `sales` WHERE DATE(`date`)=CURDATE() GROUP  BY `product_id` ");
                        foreach ($query1->result() as $v ){
                        ?>
                    <?php echo $v->product_id ?>
                    <?php echo $v->type ?>
                    <?php echo $v->weight ?>
                    <?php echo $v->amount ?>
                    <?php echo $v->price ?>
                            <?php }?>
                    </td>
                    <td>
                    <?php $query2 =$this->db->query("select `date`,`product_id`,`type`,`weight`,`instock`,`due`,`paid`, SUM(`price`) as price from `purchase` WHERE DATE(`date`)=CURDATE() GROUP  BY `product_id` ");
                    foreach ($query2->result() as $t ){
                            ?>
                        <?php echo $t->product_id ?>
                        <?php echo $t->type ?>
                        <?php echo $t->weight ?>
                        <?php echo $t->instock ?>
                        <?php echo $t->due ?>
                        <?php echo $t->paid ?>
                        <?php echo $t->price ?>

                    <?php }?>

                    </td>
                    <td>
                        <?php $query3 =$this->db->query("select `date`,`purpose`, SUM(`amount`) as amount from `expense` WHERE DATE(`date`)=CURDATE() GROUP  BY `purpose` ");
                        foreach ($query3->result() as $z ){
                            ?>
                            <?php echo $z->purpose ?>
                            <?php echo $z->amount ?>

                        <?php }?>
                    </td>
                    <td>
                        <?php $query4 =$this->db->query("select `date`,`name`, SUM(`amount`) as amount,`status` from `salary_paid` WHERE DATE(`date`)=CURDATE() GROUP  BY `name` ");
                        foreach ($query4->result() as $z ){
                            ?>
                            <?php echo $z->name ?>
                            <?php echo $z->amount ?>
                            <?php echo $z->status ?>


                        <?php }?>



                    </td>


                </tr>

                </tbody>

            <tr >
                <td colspan="2"></td>

                <th id="1">Total Amount</th>
<!--                --><?php //foreach ($this->data['gettotal_total'] as $r) { ?>
                    <td ></td>

<!--                --><?php //} ?>
            </tr>
        </table>
    </div>

<?php } ?>