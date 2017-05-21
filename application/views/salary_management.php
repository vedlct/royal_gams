
<div class="row">


    <form method="post" action="<?php echo base_url()?>Salaryc">

        <div class="col-md-3 col-sm-3" >
            <div class="form-group" >

                <label for="date">Select Month</label>
                <input type="text" class="form-control docs-date" id="month" name="month" placeholder="Pick a date">
                <input type="hidden" class="form-control docs-date" id="month1" name="month1" placeholder="Pick a date" value="<?php $month=$this->data['month']; echo $month;?>">
            </div >
        </div>


        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
        <input style="margin-top: 44px;margin-left: 50px" type="submit" name="find_salary" class="btn btn-success" value="Generate">

    </form>


    <br>

    <h5 style="text-align: center" class="mb-1">Employee List of <b style="color: #aa0000"><?php if ($this->input->post('find_salary')){$month=$this->data['month'];$query2=$this->db->query("SELECT MONTHNAME('$month') as month,YEAR('$month') as year");
            foreach ($query2->result() as $t){echo $t->month;echo " ".$t->year;}}
            else{$query3=$this->db->query("SELECT MONTHNAME(CURDATE()) as month,YEAR(CURDATE()) as year");
            foreach ($query3->result() as $t){echo $t->month;echo " ".$t->year;}}?></b></h5>
    <div class="table table-responsive">
        <table class="table mb-md-0">

            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>

                <th>Salary</th>
                <th>Status</th>

                <th>Action</th>

            </tr>
            </thead>
            <?php if ($this->input->post('find_salary')){?>
            <tbody>
            <?php
            $count=0;
            foreach ($showsl as $s){?>
                <tr>
                    <th scope="row"><?php echo $count?></th>
                    <td><?php echo $s->name ?></td>

                    <td><?php echo $s->salary ?></td>
                    <td><?php echo $s->status ?></td>


                    <td>
                        <?php $id=$s->id;
                        $month=$this->data['month'];
                        $query1=$this->db->query("SELECT * FROM `salary_paid` WHERE `salary_id` = '$id' AND (EXTRACT(MONTH FROM `date`))=MONTH('$month')");
                if ($query1->result() == null){?>
                    <button type="button" data-panel-id="<?php echo $s->id ?>" onclick="selectid1(this)" class="btn btn-warning">UnPaid</button>
                <?php }
                foreach ($query1->result()as $r){echo "Paid"?>


                    </td>
                    </tr>
                    <?php

                }
                $count=$count+1;
            }
            ?>
            </tbody>
            <?php }else{?>


            <tbody>
            <?php
            $count=0;
            foreach ($showsl as $s){?>
                <tr>
                    <th scope="row"><?php echo $count?></th>
                    <td><?php echo $s->name ?></td>

                    <td><?php echo $s->salary ?></td>
                    <td><?php echo $s->status ?></td>


                    <td>
                        <?php $id=$s->id;
//                        $month=$this->data['month'];
                        $query=$this->db->query("SELECT * FROM `salary_paid` WHERE `salary_id` = '$id' AND (EXTRACT(MONTH FROM `date`))= MONTH(CURDATE())");
                        if ($query->result() == null){?>
                            <button type="button" data-panel-id="<?php echo $s->id ?>" onclick="selectid1(this)" class="btn btn-warning">Unpaid</button>
                            <?php }
                        foreach ($query->result()as $r){echo "Paid"?>


                            </td>
                            </tr>
                            <?php

                        }
                $count=$count+1; }
            ?>
            </tbody>
<?php } ?>

        </table>

    </div>
</div>


<script>


        function selectid1(x) {

            btn = $(x).data('panel-id');
            month1 = document.getElementById('month1').value;
            //alert(btn);

            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("Salaryc/pay_salary/")?>' + btn+month1,
                data: {'id': btn,'month1':month1},
                cache: false,
                success: function (data) {

                    location.reload();
                    //alert(data);

                }

            });
        }
</script>