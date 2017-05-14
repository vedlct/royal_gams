<div class="row">
    <div class="col-md-12">
        <form class="form-material material-primary" method="post" action="">
            <div class="form-group row ">
                <div class="col-md-3">
                    <input type="text" class="form-control"  placeholder="Employee ID" name="sp_id" id="p_id" >
                </div>

                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary"  name="sal_id_search">Search</button>
                </div>

        </form>
        <form class="form-material material-primary" method="post" action="">

            <div class="col-md-3">
                <input type="text" class="form-control"  placeholder="Salary" name="salary" id="salary" >
            </div>

            <div class="col-md-1">
                <button type="submit" class="btn btn-primary"  name="sal_sal_search">Search</button>
            </div>

        </form>
        <form class="form-material material-primary" method="post" action="">
            <div class="col-md-3">
                <select class="form-control" name="sp_type" id="sp_type"  >
                    <option selected  >Select Name</option>
                    <!--            --><?php
                    foreach ($showslname as $st)
                    {
                        echo "<option  value='" . $st->name . "'>" . $st->name . "</option>";
                    }
                    ?>

                </select>
            </div>
            <div class="col-md-1">
                <button type="submit" class="btn btn-primary"  name="sal_name_search">Search</button>
            </div>
    </div>
    </form>

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

    <div id="myModal2" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">×</span>

            <h2>Edit </h2>
            <div id="txtHint"><?php

                ?></div>




        </div>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
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

    var modal2 = document.getElementById('myModal2');
    var span = document.getElementsByClassName("close")[0];

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
        span.onclick = function() {
            modal5.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
        }
</script>