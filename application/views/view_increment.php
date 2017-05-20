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
                <th>Previous Salary</th>
                <th>Current Salary</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $count=0;
            foreach ($showslinc as $s){?>
                <tr>
                    <th scope="row"><?php echo $count?></th>
                    <td><?php echo $s->name ?></td>
                    <td><?php echo $s->previous_salary ?></td>
                    <td><?php echo $s->current_salary ?></td>
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
<script type="text/javascript">

    var text_input = document.getElementById ('p_id');
    text_input.focus ();
    text_input.select ();

</script>
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