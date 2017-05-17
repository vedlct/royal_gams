
<h1 style="text-align: center"><b>Profile Info</b></h1>

<form method="post" action="<?php echo base_url()?>Profile/edit_profile">

    <?php foreach ($userinfo as $uinfo){?>
        <div class="row" >
            <div class="col-md-6 col-sm-6" >
                <div class="form-group" >

                    <label >User Name</label >
                    <input class="form-control" type="text" name="username" value="<?php echo $uinfo->username?>">
                </div >
            </div >
            <div class="col-md-6 col-sm-6" >
                <div class="form-group" >
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" value="<?php echo $uinfo->password?>" readonly>
                </div >
            </div >
        </div >

        <div class="row" >
            <div class="col-md-6 col-sm-6" >
                <div class="form-group" >

                    <label>First Name</label>
                    <input class="form-control" type="text" name="first_name" value="<?php echo $uinfo->first_name?>" >
                </div >
            </div >
            <div class="col-md-6 col-sm-6" >
                <div class="form-group">
                    <label>Last Name</label>
                    <input class="form-control" type="text" name="last_name" value="<?php echo $uinfo->last_name?>" >
                </div>
            </div >
        </div >

        <div class="row" >
            <div class="col-md-6 col-sm-6" >
                <div class="form-group">
                    <label>Phone Number</label>
                    <input class="form-control" type="text" name="phone_number" value="<?php echo $uinfo->phone_number?>" >
                </div>
            </div>
            <div class="col-md-6 col-sm-6" >
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="text" name="email" value="<?php echo $uinfo->email?>" >
                </div>
            </div >
        </div >

        <input type="hidden" name="id" value="<?php echo $uinfo->id?>">
        <input class="btn btn-success" type="submit" value="submit">

    <?php } ?>

</form>