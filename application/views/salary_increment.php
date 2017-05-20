<div class="row">
    <div class="col-md-12">


    <br>
    <h5 class="mb-1">Employee List</h5>
    <div class="table table-responsive">
        <table class="table mb-md-0">

            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Salary</th>

                <th>Action</th>



            </tr>
            </thead>
            <tbody>
            <?php
            $count=0;
            foreach ($showsl as $s){?>
                <tr>
                    <th scope="row"><?php echo $count?></th>
                    <td><?php echo $s->name ?></td>
                    <td><?php echo $s->desg ?></td>
                    <td><?php echo $s->salary ?></td>

                    <input type="hidden" name="sal_id" value="<?php echo $s->id ?>">
                    <input type="hidden" name="sal_amount" value="<?php echo $s->salary ?>">
                    <td><button data-panel-id="<?= $s->id ?>"  onclick="selectid3(this)"  class="btn btn-primary" aria-hidden="true">Add Increment</button></td>
<!--                    <td><input class="btn btn-primary" type="submit" value="Add" onclick="" name="increment_submit"></td>-->

                    </tr>
                <?php
                $count=$count+1;
            }
            ?>
            </tbody>
        </table>
    </div>



</div>
</div>



<script>



    function selectid3(x) {

        btn = $(x).data('panel-id');

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url("Salaryc/view_increment/")?>' + btn,
            data: {'id': btn},
            cache: false,
            success: function (data) {
                $('#txtHint').html(data);
            }

        });
        modal2.style.display = "block";
    }

</script>