<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login/Logout animation concept</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <meta name="viewport" content="width=device-width" />




    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>


    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>


    <link rel="stylesheet" href="<?php echo base_url()?>css/login.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/animate.css">


    <style>
        .logoimg{
            height: 219px;width: 320px;
        }
        @media screen and (max-width: 415px) {
            .logoimg {
                height: 219px;
                width: 250px;
            }
        }
    </style>

</head>

<body>

<div class="cont">

    <div class="cont ">

        <div class="demo animated zoomIn">
            <div class="login" style="height: 100%" >
                <div ><img class="logoimg"  src="<?php echo base_url()?>img/logo.png" ></div>
                <div class="login__form ">

                    <form method="post" action="<?php echo base_url()?>Login/check_user"" >

                        <div class="login__row">
                            <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                                <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                            </svg>

                            <input type="text" class="login__input name" placeholder="Username" name="username"/>
                        </div><br/><br/>

                        <div class="login__row">
                            <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                                <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                            </svg>
                            <input type="password" class="login__input pass" placeholder="Password" name="password"/>
                        </div>
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                        <button type="submit" class="login__submit">Sign in</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="<?php echo base_url()?>js/login.js"></script>


</body>
</html>
