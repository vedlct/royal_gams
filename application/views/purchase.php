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

    <style>

        @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,600,700');
        @import url('http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css');

        *, *:before, *:after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
        }

        body {
            font: 14px/1 'Open Sans', sans-serif;
            color: #555;
            background: #eee;
        }

        h1 {
            padding: 50px 0;
            font-weight: 400;
            text-align: center;
        }

        p {
            margin: 0 0 20px;
            line-height: 1.5;
        }

        main {
            min-width: 320px;
            max-width: 800px;
            padding: 50px;
            margin: 0 auto;
            background: #fff;
        }

        section {
            display: none;
            padding: 20px 0 0;
            border-top: 1px solid #ddd;
        }

        input {
            display: none;
        }

        label {
            display: inline-block;
            margin: 0 0 -1px;
            padding: 15px 25px;
            font-weight: 600;
            text-align: center;
            color: #bbb;
            border: 1px solid transparent;
            font-size: 14px;
        }

        label:before {
            font-family: fontawesome;
            font-weight: normal;
            margin-right: 10px;
        }

        /*label[for*='1']:before { content: '\f1cb'; }*/
        /*label[for*='2']:before { content: '\f17d'; }*/
        /*label[for*='3']:before { content: '\f16b'; }*/
        /*label[for*='4']:before { content: '\f1a9'; }*/

        label:hover {
            color: #888;
            cursor: pointer;
        }

        input:checked + label {
            color: #555;
            border: 1px solid #ddd;
            border-top: 2px solid deepskyblue;
            border-bottom: 1px solid #fff;
        }

        #tab1:checked ~ #content1,
        #tab2:checked ~ #content2,
        #tab3:checked ~ #content3,
        #tab4:checked ~ #content4 {
            display: block;
        }

        @media screen and (max-width: 650px) {
            label {
                font-size: 10px;
            }
            label:before {
                margin: 0;
                font-size: 18px;
            }
        }

        @media screen and (max-width: 400px) {
            label {
                padding: 15px;
            }
        }
    </style>



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

</head>
<body class="fixed-sidebar fixed-header skin-default content-appear">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Sidebar -->


    <?php $this->load->view('Menu');?>

    <!-- Sidebar second -->

    <!-- Header -->
    <div class="site-header">
        <nav class="navbar navbar-light">
            <div class="navbar-left">
                <a class="navbar-brand" href="index.html">
                    <div class="logo"></div>
                </a>
                <div class="toggle-button dark sidebar-toggle-first float-xs-left hidden-md-up">
                    <span class="hamburger"></span>
                </div>
                <div class="toggle-button-second dark float-xs-right hidden-md-up">
                    <i class="ti-arrow-left"></i>
                </div>
                <div class="toggle-button dark float-xs-right hidden-md-up" data-toggle="collapse" data-target="#collapse-1">
                    <span class="more"></span>
                </div>
            </div>
            <div class="navbar-right navbar-toggleable-sm collapse" id="collapse-1">
                <div class="toggle-button light sidebar-toggle-second float-xs-left hidden-sm-down">
                    <span class="hamburger"></span>
                </div>

                <ul class="nav navbar-nav float-md-right">

                    <li class="nav-item dropdown hidden-sm-down">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
									<span class="avatar box-32">
										<img src="img/avatars/1.jpg" alt="">
									</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated fadeInUp">
                            <a class="dropdown-item" href="#">
                                <i class="ti-email mr-0-5"></i> Inbox
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="ti-user mr-0-5"></i> Profile
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="ti-help mr-0-5"></i> Help</a>
                            <a class="dropdown-item" href="#"><i class="ti-power-off mr-0-5"></i> Sign out</a>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item hidden-sm-down">
                        <a class="nav-link toggle-fullscreen" href="#">
                            <i class="ti-fullscreen"></i>
                        </a>
                    </li>

                </ul>

            </div>
        </nav>
    </div>


    <div class="site-content">
        <!-- Content -->
        <div class="content-area py-1">
            <div class="container-fluid">
                <div class="row row-md">

                </div>


                <!-- from start -->

                <div class="content-area py-1">
                    <div class="container-fluid">



                        <div class="col-lg-12">
                            <div class="box box-block bg-white" >

                                <input id="tab1" type="radio" name="tabs" checked>
                                <label for="tab1">Insert Purchase</label>

                                <input id="tab2" type="radio" name="tabs">
                                <label for="tab2">View</label>


                                <section id="content1">
                                    <?php $this->load->view('insertpurchase');?>


                                </section>

                                <section id="content2">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form class="form-material material-primary" method="post" action="Stockc/search_by_id">
                                                <div class="form-group row ">
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control"  placeholder="Product ID" name="sp_id" id="p_id" >
                                                    </div>

                                                    <div class="col-md-2">
                                                        <button type="submit" class="btn btn-primary"  name="submit">Submit</button>
                                                    </div>
                                                </div>
                                            </form>

                                            <br>
                                            <h5 class="mb-1">Product List</h5>
                                            <table class="table mb-md-0">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Product Id</th>
                                                    <th>Type</th>
                                                    <th>Weight</th>
                                                    <th>Price</th>
                                                    <th>In Stock</th>
                                                    <th>Paid</th>
                                                    <th>Due</th>
                                                    <th>Date</th>
                                                    <th>Action</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $count=0;
                                                foreach ($showpd as $s){?>
                                                    <tr>
                                                        <th scope="row"><?php echo $count?></th>
                                                        <td><?php echo $s->product_id?></td>
                                                        <td><?php echo $s->type?></td>
                                                        <td><?php echo $s->weight?></td>
                                                        <td><?php echo $s->price?></td>
                                                        <td><?php echo $s->	instock?></td>
                                                        <td><?php echo $s->	paid?></td>
                                                        <td><?php echo $s->	due?></td>
                                                        <td><?php echo $s->	date?></td>
                                                        <td>  <i data-panel-id="<?= $s->id ?>"  onclick="selectid2(this)"  class="fa fa-edit" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;<i data-panel-id="<?= $s->id ?>" onclick="selectid(this)"  class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;</td>
                                                    </tr>
                                                    <?php
                                                    $count=$count+1;
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </section>

                                <?php
                                //so you want to show the sidebar once submitted?
                                if(isset($_POST['psubmit'])){

                                    ?>
                                    <script>

                                        document.getElementById("tab2").checked = true;
                                    </script>

                                    <?php
                                }else {?>

                                    <?php

                                }
                                ?>

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

                    </div>



                </div>
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


    <script>


        // Get the modal
        // var modal = document.getElementById('myModal');
        var modal2 = document.getElementById('myModal2');

        // Get the button that opens the modal
        //var btn = document.getElementById("myBtn");

        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        // btn = $(x).data('panel-name');

        function selectid2(x) {

            btn = $(x).data('panel-id');


            $.ajax({
                type:'POST',
                url:'<?php echo base_url("Purchasec/showedit/")?>'+btn,
                data:{'id':btn},
                cache: false,
                success:function(data)
                {
                    $('#txtHint').html(data);
                }

            });


//                    if (window.XMLHttpRequest) {
//                        // code for IE7+, Firefox, Chrome, Opera, Safari
//                        xmlhttp = new XMLHttpRequest();
//                    } else {
//                        // code for IE6, IE5
//                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//                    }
//                    xmlhttp.onreadystatechange = function() {
//                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//                            document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
//                        }
//                    }
//
//
//                    xmlhttp.open("POST","views/editview?id"+btn);
//                    xmlhttp.send();


            modal2.style.display = "block";

        }


        function selectid(x) {

            btn1 = $(x).data('panel-id');

            if(confirm("Do you want to delete?")) {
                window.location="<?php echo base_url()?>Purchasec/delete/"+btn1;
            }



        }


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
    <script type="text/javascript" src="<?php echo base_url(); ?>vendor/flot/jquery.flot.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>vendor/flot/jquery.flot.resize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>vendor/CurvedLines/curvedLines.js"></script>
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
    <script type="text/javascript" src="<?php echo base_url(); ?>js/index.js"></script>







</body>

<!-- Mirrored from big-bang-studio.com/neptune/neptune-default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2016 09:06:36 GMT -->
</html>