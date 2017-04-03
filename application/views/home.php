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
	</head>
	<body class="fixed-sidebar fixed-header skin-default content-appear">
		<div class="wrapper">

			<!-- Preloader -->
			<div class="preloader"></div>

			<!-- Sidebar -->



            <?php $this->load->view('Menu');?>

			<!-- Sidebar second -->
			<div class="site-sidebar-second custom-scroll custom-scroll-dark">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab">Chat</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab">Activity</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab">Todo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab">Settings</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab-1" role="tabpanel">
						<div class="sidebar-chat animated fadeIn">



						</div>
						<div class="sidebar-chat-window animated fadeIn">
							<div class="scw-header clearfix">
								<a class="text-grey float-xs-left" href="#"><i class="ti-angle-left"></i> Back</a>
								<div class="float-xs-right">
									<strong>Jonathan Mel</strong>
									<div class="avatar box-32">
										<img src="img/avatars/5.jpg" alt="">
										<span class="status bg-success top right"></span>
									</div>
								</div>
							</div>
							<div class="scw-item">
								<span>Hello!</span>
							</div>
							<div class="scw-item self">
								<span>Meeting at 16:00 in the conference room. Remember?</span>
							</div>
							<div class="scw-item">
								<span>No problem. Thank's for reminder!</span>
							</div>
							<div class="scw-item self">
								<span>Prepare to be amazed.</span>
							</div>
							<div class="scw-item">
								<span>Good. Can't wait!</span>
							</div>
							<div class="scw-form">
								<form>
									<input class="form-control" type="text" placeholder="Type...">
									<button class="btn btn-secondary" type="button"><i class="ti-angle-right"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab-2" role="tabpanel">
						<div class="sidebar-activity animated fadeIn">
							<div class="notifications">
								<div class="n-item">
									<div class="media">
										<div class="media-left">
											<div class="avatar box-48">
												<img class="b-a-radius-circle" src="img/avatars/1.jpg" alt="">
												<span class="n-icon bg-danger"><i class="ti-pin-alt"></i></span>
											</div>
										</div>
										<div class="media-body">
											<div class="n-text"><a class="text-black" href="#">John Doe</a> <span class="text-muted">uploaded <a class="text-black" href="#">monthly report</a></div>
											<div class="text-muted font-90">12 minutes ago</div>
										</div>
									</div>
								</div>
								<div class="n-item">
									<div class="media">
										<div class="media-left">
											<div class="avatar box-48">
												<img class="b-a-radius-circle" src="img/avatars/3.jpg" alt="">
												<span class="n-icon bg-success"><i class="ti-comment"></i></span>
											</div>
										</div>
										<div class="media-body">
											<div class="n-text"><a class="text-black" href="#">Vance Osborn</a> <span class="text-muted">commented </span> <a class="text-black" href="#">Project</a></div>
											<div class="n-comment my-0-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</div>
											<div class="text-muted font-90">3 hours ago</div>
										</div>
									</div>
								</div>
								<div class="n-item">
									<div class="media">
										<div class="media-left">
											<div class="avatar box-48">
												<img class="b-a-radius-circle" src="img/avatars/2.jpg" alt="">
												<span class="n-icon bg-danger"><i class="ti-email"></i></span>
											</div>
										</div>
										<div class="media-body">
											<div class="n-text"><a class="text-black" href="#">Ron Carran</a> <span class="text-muted">send you files</span></div>
											<div class="row row-sm my-0-5">
												<div class="col-xs-4">
													<img class="img-fluid" src="img/photos-1/1.jpg" alt="">
												</div>
												<div class="col-xs-4">
													<img class="img-fluid" src="img/photos-1/2.jpg" alt="">
												</div>
												<div class="col-xs-4">
													<img class="img-fluid" src="img/photos-1/3.jpg" alt="">
												</div>
											</div>
											<div class="text-muted font-90">30 minutes ago</div>
										</div>
									</div>
								</div>
								<div class="n-item">
									<div class="media">
										<div class="media-left">
											<div class="avatar box-48">
												<img class="b-a-radius-circle" src="img/avatars/4.jpg" alt="">
												<span class="n-icon bg-primary"><i class="ti-plus"></i></span>
											</div>
										</div>
										<div class="media-body">
											<div class="n-text"><a class="text-black" href="#">Larry Hal</a> <span class="text-muted">invited you to </span><a class="text-black" href="#">Project</a></div>
											<div class="text-muted font-90">10:58</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab-3" role="tabpanel">
						<div class="sidebar-todo animated fadeIn">
							<div class="sidebar-group">
								<h6>Important</h6>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Mock up</span>
									</label>
								</div>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" checked>
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Prototype iPhone</span>
									</label>
								</div>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Build final version</span>
									</label>
								</div>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Approval docs</span>
									</label>
								</div>
							</div>
							<div class="sidebar-group">
								<h6>Secondary</h6>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" checked>
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Website redesign</span>
									</label>
								</div>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" checked>
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Skype call</span>
									</label>
								</div>
								<div class="st-item">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Blog post</span>
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab-4" role="tabpanel">
						<div class="sidebar-settings animated fadeIn">
							<div class="sidebar-group">
								<h6>Main</h6>
								<div class="ss-item">
									<div class="text-truncate">Anyone can register</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
								</div>
								<div class="ss-item">
									<div class="text-truncate">Allow commenting</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9"></div>
								</div>
								<div class="ss-item">
									<div class="text-truncate">Allow deleting</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9"></div>
								</div>
							</div>
							<div class="sidebar-group">
								<h6>Notificatiоns</h6>
								<div class="ss-item">
									<div class="text-truncate">Commits</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9"></div>
								</div>
								<div class="ss-item">
									<div class="text-truncate">Messages</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
								</div>
							</div>
							<div class="sidebar-group">
								<h6>Security</h6>
								<div class="ss-item">
									<div class="text-truncate">Daily backup</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
								</div>
								<div class="ss-item">
									<div class="text-truncate">API Access</div>
									<div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>




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
							<li class="nav-item dropdown hidden-sm-down">


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
							<div class="col-lg-3 col-md-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Orders</h6>
										<h1 class="mb-1">1,325</h1>
										<span class="tag tag-danger mr-0-5">+17%</span>
										<span class="text-muted font-90">from previous period</span>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Revenue</h6>
										<h1 class="mb-1">$ 47,855</h1>
										<i class="fa fa-caret-up text-success mr-0-5"></i><span>12,350</span>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-primary"></span><i class="ti-package"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Products</h6>
										<h1 class="mb-1">6,800</h1>
										<span class="tag tag-primary mr-0-5">+125</span>
										<span class="text-muted font-90">arraving today</span>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 mb-2">
									<div class="t-icon right"><span class="bg-warning"></span><i class="ti-receipt"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase mb-1">Sold</h6>
										<h1 class="mb-1">1,682</h1>
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
                                                <button type="submit" class="btn btn-primary"  name="psubmit">Submit</button>

                                            </div>
                                        </div>
                                    </form>
                                    <?php
                                    if(isset($_POST['psubmit'])){

                                    foreach ($viewproduct as $vp) {
                                        ?>

                                        <br>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Product ID</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="inputEmail3" value="<?php echo $vp->product_id?>"
                                                       readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Type</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                       value="<?php echo $vp->type?>"readonly>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Weight</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                       placeholder="Success" value="<?php echo $vp->weight?>"readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Price</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                       placeholder="Warning" value="<?php echo $vp->price?>" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Amount</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="inputEmail3"
                                                       placeholder="Danger" value="<?php echo $vp->amount?>" readonly>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                    }
                                    ?>

                                </div>
                            </div>



                <div class="col-lg-7">

                    <div class="box box-block bg-white">
                        <h5>Cart</h5><br>

                        <?php

                        if(isset($_POST['Submit'])){


                            extract($_POST);
                           // echo $p_id;
                        }


                        foreach ($this->cart->contents() as $items){ ?>

                            <div style="background-color: #efefef; padding:20px; font-weight: bold"> <?php
                                echo "ID: ".$items['id']."<br>";
                                echo "Price: ".$items['price']."<br>"; ?>
                            </div> <br> <?php
                        }
                        $rows = "count: ".count($this->cart->contents());
                        echo $rows."<br>";

                        ?>
                        <a href="Home/removeall"> <button>Clear Cart</button></a>
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



        <script>

            function myfunc() {


                $("#p_from").submit(function(e) {

                   e.preventDefault();

                });

              )
        </script>



	</body>

<!-- Mirrored from big-bang-studio.com/neptune/neptune-default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2016 09:06:36 GMT -->
</html>