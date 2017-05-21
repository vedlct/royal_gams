<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from big-bang-studio.com/neptune/neptune-default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2016 09:04:13 GMT -->
<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Title -->
    <title>Royal Gems</title>

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

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/jscrollpane/jquery.jscrollpane.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/waves/waves.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/switchery/dist/switchery.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/morris/morris.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/jvectormap/jquery-jvectormap-2.0.3.css">

    <!-- ti icon-->
<!--    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" />-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Neptune CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/core.css">



    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <![endif]-->
</head>
<body class="fixed-sidebar fixed-header skin-default content-appear">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Sidebar -->



    <?php $this->load->view('Menu');?>
    <!-- Header -->
    <?php $this->load->view('top_header');?>


    <div class="site-content">
        <!-- Content -->
        <div class="content-area py-1">
            <div class="container-fluid">
                <div class="row row-md">
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 mb-2">
                            <div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
                            <div class="t-content">
                                <h6 class="text-uppercase mb-1">Other Expense</h6>
                                <h1 class="mb-1"><span id="other_expense"></h1>
<!--                                <span class="tag tag-danger mr-0-5">+17%</span>-->
<!--                                <span class="text-muted font-90">from previous period<-->
                            </div>
                        </div>
                    </div>
<!--                    <div class="col-lg-3 col-md-6 col-xs-12">-->
<!--                        <div class="box box-block bg-white tile tile-1 mb-2">-->
<!--                            <div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>-->
<!--                            <div class="t-content">-->
<!--                                <h6 class="text-uppercase mb-1">Revenue</h6>-->
<!--                                <h1 class="mb-1">$ 47,855</h1>-->
<!--                                <i class="fa fa-caret-up text-success mr-0-5"></i><span>12,350</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 mb-2">
                            <div class="t-icon right"><span class="bg-primary"></span><i class="ti-package"></i></div>
                            <div class="t-content">
                                <h6 class="text-uppercase mb-1">BUY</h6>
                                <h1 class="mb-1"><span id="todaybuy"></h1>
<!--                                <span class="tag tag-primary mr-0-5">+125</span>-->
<!--                                <span class="text-muted font-90">arraving today</span>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 mb-2">
                            <div class="t-icon right"><span class="bg-warning"></span><i class="ti-receipt"></i></div>
                            <div class="t-content">
                                <h6 class="text-uppercase mb-1">Sold</h6>
                                <h1 class="mb-1"><span id="todayssell"></span></h1>
                                <div id="sparkline1"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- from start -->

                <div class="content-area py-1">
                    <div class="container-fluid">

                        <!--                                <div class="box box-block bg-white">-->
                        <!--                                    <h5>Material Form</h5>-->
                        <!--                                    <form class="form-material">-->
                        <!--                                        <div class="form-group row">-->
                        <!--                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>-->
                        <!--                                            <div class="col-sm-10">-->
                        <!--                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">-->
                        <!--                                            </div>-->
                        <!--                                        </div>-->
                        <!--                                        <div class="form-group row">-->
                        <!--                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>-->
                        <!--                                            <div class="col-sm-10">-->
                        <!--                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">-->
                        <!--                                            </div>-->
                        <!--                                        </div>-->
                        <!--                                        <div class="form-group row">-->
                        <!--                                            <div class="offset-sm-2 col-sm-10">-->
                        <!--                                                <button type="submit" class="btn btn-primary">Sign in</button>-->
                        <!--                                            </div>-->
                        <!--                                        </div>-->
                        <!--                                    </form>-->
                        <!--                                </div>-->

                        <div class="col-lg-5">


                            <div class="box box-block bg-white" >
                                <h5>Product</h5>

                                <form class="form-material material-primary" id="p_from" method="post" action="Home"  enctype="multipart/form-data">
                                    <div class="form-group row ">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label"  >Product ID</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control"  placeholder="Product ID" name="p_id" id="p_id">
                                        </div>

                                        <div class=" col-md-5">
                                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                            <button type="submit" class="btn btn-primary"  name="psubmit">Submit</button>

                                        </div>
                                    </div>
                                </form>
                                <form class="form-material material-primary" id="cart_form" method="post" action="<?php echo base_url()?>Home/add_cart" enctype="multipart/form-data">
                                    <?php
                                    if(isset($_POST['psubmit'])){?>

                                        <h3 style="text-align: center;color: #aa0000"><b><?php echo  $this->data['msg'];?></b></h3>

                                        <?php foreach ($viewproduct as $vp) {
                                            ?>

                                            <br>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-3 col-form-label">Product ID</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="product_id" name="product_id" value="<?php echo $vp->product_id?>"
                                                           readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-3 col-form-label">Type</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="type" name="type" value="<?php echo $vp->type?>"readonly>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-3 col-form-label">Weight</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="weight" name="weight" placeholder="Success" value="<?php echo $vp->weight?>"readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-3 col-form-label">Price</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="price" name="price" placeholder="Warning" value="<?php echo $vp->price?>" readonly>
                                                </div>
                                            </div>
                                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-3 col-form-label">Amount</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Danger" value="<?php echo $vp->amount?>" readonly>
                                                </div>
                                            </div>

                                            <?php
                                        }
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>



                        <div class="col-lg-5" >

                            <div class="box box-block bg-white" >
                                <span id="cart_table">
                                <h5>Cart</h5><br>

                                <?php
                                if(isset($_POST['Submit'])){
                                    extract($_POST);
                                    // echo $p_id;
                                }
                                ?>
                                <form class="form-material material-primary" id="" method="post" action="<?php echo base_url()?>Home/add_cart" enctype="multipart/form-data">
                                                <table class="table-striped" width="100%">
                                                <tr>
                                                    <td align="center">
                                                        id
                                                    </td >
                                                     <td align="center">
                                                        Amount
                                                    </td>
                                                     <td align="center">
                                                        Price
                                                    </td>
                                                    <td align="center">
                                                        Action
                                                    </td>

                                                </tr>
                                    <?php $total = 0; foreach ($this->cart->contents() as $items) { ?>

                                            <tr>
                                                <td align="center">
                                                    <?php echo $items['id']?>
                                                </td>
                                                <td align="center">
                                            <div style="margin-left: 100px">
                                            <input type="button"  class="btn btn-default" style="background:#ec008c; text-align: center; width:30px; color: #fff; font-weight: bold; padding:0px 0px;  border-radius:0px; float: left" data-panel-id="<?= $items['rowid'] ?>" onclick="minus(this)" value="-"/>

                                                        <input type="text"  name="qty" id="<?php echo $items['rowid']?>" class="form-control" style="text-align: center; border-right:none; border-left:none; border-radius:0px; width: 50px; padding:0px 0px; height:auto; float: left" value="<?php echo $items['qty']?>"readonly/>
                                            <input type="button" class="btn btn-default" data-panel-id="<?= $items['rowid'] ?>" onclick="plus(this)" style="background:#ec008c; font-weight: bold; color: #fff; text-align: center; border-radius:0px; width: 30px; padding: 0px 0px; float: left" value="+">

                                                </div>
                                                </td>
                                                <td align="center">
                                                    <?php echo $items['price']*$items['qty'] ?>
                                                </td>
                                                <td>
                                                   <i style="alignment: right" data-panel-id="<?= $items['rowid'] ?>" onclick="selectid5(this)"  class="fa fa-trash-o" aria-hidden="true"></i>

                                                </td align="center">
                                            </tr>

                                         <?php

                                        ?>


                                        <input type="hidden" class="form-control" id="product_id" name="product_id" value="<?php echo $items['id']?>">

                                    <?php $total = $total+$items['subtotal'];}
                                    ?></table>
                                    <?php
                                    if($this->cart->contents()==null){ }else{
                                        $rows = "count: " . count($this->cart->contents());
//                                        echo $rows . "<br>";
                                        ?>

                                        <b>Total :  <?php echo $total;?><br></b>
                                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                        <a href="Home/removeall"> <button>Clear Cart</button></a>
                                        <a href=""> <button onclick="cart_submit()">Add Cart</button></a>
                                    <?php }?>

                                </form>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="myModal2" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">×</span>

                        <h2>Edit </h2>
                        <div id="txtHint"><?php

                            //$this->data['edit'] = $this->data['ev'];
                            //$this->load->view('editview', $this->data);
                            //$this->load->view('editview'); ?></div>




                    </div>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    </table>

                </div>

                <!-- Footer -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row text-xs-center">
                            <div class="col-sm-4 text-sm-left mb-0-5 mb-sm-0">
                                2016 © Tech Cloud Ltd.
                            </div>
                            <div class="col-sm-8 text-sm-right">
                                <ul class="nav nav-inline l-h-2">
                                    <li class="nav-item"><a class="nav-link text-black" href="#">Privacy</a></li>
                                    <li class="nav-item"><a class="nav-link text-black" href="#">Terms</a></li>
                                    <li class="nav-item"><a class="nav-link text-black" href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </div>



        <script type="text/javascript">



            var text_input = document.getElementById ('p_id');
            text_input.focus ();
            text_input.select ();
        </script>
        <!-- Vendor JS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/jquery/jquery-1.12.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/tether/js/tether.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap4/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/detectmobilebrowser/detectmobilebrowser.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/jscrollpane/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/jscrollpane/mwheelIntent.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/jscrollpane/jquery.jscrollpane.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/waves/waves.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/switchery/dist/switchery.min.js"></script>
<!--        <script type="text/javascript" src="--><?php //echo base_url(); ?><!--vendor/flot/jquery.flot.min.js"></script>-->
<!--        <script type="text/javascript" src="--><?php //echo base_url(); ?><!--vendor/flot/jquery.flot.resize.min.js"></script>-->
<!--        <script type="text/javascript" src="--><?php //echo base_url(); ?><!--vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>-->
<!--        <script type="text/javascript" src="--><?php //echo base_url(); ?><!--vendor/CurvedLines/curvedLines.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/TinyColor/tinycolor.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/sparkline/jquery.sparkline.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/raphael/raphael.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/morris/morris.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendor/peity/jquery.peity.js"></script>

        <!-- Neptune JS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/app.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/demo.js"></script>
<!--        <script type="text/javascript" src="--><?php //echo base_url(); ?><!--js/index.js"></script>-->



        <script>

            // Get the modal
            // var modal = document.getElementById('myModal');
            var modal2 = document.getElementById('myModal2');

            // Get the button that opens the modal
            //var btn = document.getElementById("myBtn");

            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal
            // btn = $(x).data('panel-name');


            function myfunc() {
                $("#p_from").submit(function (e) {
                    e.preventDefault();
                });
            }


            $.ajaxSetup({
                data: {
                    '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
                }
            });

            function cart_submit() {
                document.getElementById("cart_form").submit();
            }
            function plus(x) {
                var btn = $(x).data('panel-id');
                var p_id=document.getElementById('product_id').value;
                var x = parseInt(document.getElementById(btn).value);
                //alert(x);
                var newx= x+1;
//                document.getElementById('btn').value = newx;
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url("Home/update_cart/")?>' + btn+p_id,
                    data: {'id':btn,'amount':newx,'p_id':p_id },
                    cache: false,
                    success: function (data) {
                        if(data == 1){

                            alert("We don't have sufficent amount");
                        }

                    }
                });
                $('#cart_table').load(document.URL +  ' #cart_table');
//                $('#cart_table').load(document.URL +  ' #cart_table');
            }
            function minus(x) {
                var btn = $(x).data('panel-id');
                var x = parseInt(document.getElementById(btn).value);
                var p_id=document.getElementById('product_id').value;
                var newx= x-1;
                document.getElementById(btn).value = newx;

                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url("Home/update_cart/")?>' + btn+p_id,
                    data: {'id':btn, 'amount':newx ,'p_id':p_id },
                    cache: false,
                    success: function (data) {
                        // $('#txt').html(data);
                        //  alert(data);
                    }
                });
                $('#cart_table').load(document.URL +  ' #cart_table');
//                $('#total_table').load(document.URL +  ' #total_table');
            }

            function selectid5(x) {

                btn4 = $(x).data('panel-id');
                //alert(btn4);

                $.ajax({
                    type:'POST',
                    url:'<?php echo base_url("Home/delete_from_cart_by_id/")?>'+btn4,
                    data:{id:btn4},
                    cache: false,
                    success:function(data) {

                        //location.reload();
                        //alert(data);
                        //$('#txtHint').html(data);

                        $('#cart_table').load(document.URL +  ' #cart_table');


                    }

                });
            }





            var btn =0;
            $.ajax({
                type:'POST',
                url:'<?php echo base_url("Home/todaybuy/")?>'+btn,
                data:{id:btn},
                cache: false,
                success:function(data) {

                    //location.reload();
                    //alert(data);
                    $('#todaybuy').html(data);

                   // $('#cart_table').load(document.URL +  ' #cart_table');


                }

            });

            $.ajax({
                type:'POST',
                url:'<?php echo base_url("Home/todayssell/")?>'+btn,
                data:{id:btn},
                cache: false,
                success:function(data) {

                    //location.reload();
                    //alert(data);
                    $('#todayssell').html(data);

                    // $('#cart_table').load(document.URL +  ' #cart_table');


                }

            });

            $.ajax({
                type:'POST',
                url:'<?php echo base_url("Home/other_expense/")?>'+btn,
                data:{id:btn},
                cache: false,
                success:function(data) {

                    //location.reload();
                    //alert(data);
                    $('#other_expense').html(data);

                    // $('#cart_table').load(document.URL +  ' #cart_table');


                }

            });








            span.onclick = function() {
                modal2.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal2) {
                    modal2.style.display = "none";
                }
            }



        </script>
        <script type="text/javascript">
            function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); };

            $(document).ready(function(){
                $(document).on("keydown", disableF5);
            });
        </script>

</body>

<!-- Mirrored from big-bang-studio.com/neptune/neptune-default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2016 09:06:36 GMT -->
</html>