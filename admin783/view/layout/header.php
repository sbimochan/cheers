<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ecommerce Admin Panel</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.5 -->
	<link rel="stylesheet" href="<?php echo base_url() ?>public/bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() ?>public/dist/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url() ?>public/dist/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>public/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
		 folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url() ?>public/dist/css/skins/_all-skins.min.css">
 <script src="<?php echo base_url(); ?>public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="<?php echo base_url() ?>public/dist/js/html5shiv.min.js"></script>
	<script src="<?php echo base_url() ?>public/dist/js/respond.min.js"></script>
	<![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

	<header class="main-header">
		<!-- Logo -->
		<a href="<?php echo base_url() ?>public/index2.html" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>E</b>Admin</span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>Ecommerce</b>Admin</span>
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top" role="navigation">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">

					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo base_url() ?>public/dist/img/user2-160x160.jpg" class="user-image"
								 alt="User Image">
							<span class="hidden-xs"><?php SessionHelper::init(); echo $_SESSION['admin_username'] ?></span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<img src="<?php echo base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle"
									 alt="User Image">
								<p>
									<?php SessionHelper::init(); echo $_SESSION['admin_username'] ?>
									<small>Member since Nov. 2012</small>
								</p>
							</li>
							<!-- Menu Body -->

							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-left">
									<a href="#" class="btn btn-default btn-flat">Profile</a>
								</div>
								<div class="pull-right">
									<a href="<?php echo base_url(); ?>user/logout" class="btn btn-default btn-flat">Sign
										out</a>
								</div>
							</li>
						</ul>
					</li>
					<!-- Control Sidebar Toggle Button -->
					<li>
						<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<!-- =============================================== -->

	<!-- Left side column. contains the sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="<?php echo base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle"
						 alt="User Image">
				</div>
				<div class="pull-left info">
					<p>Alexander Pierce</p>
					<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			</div>

			<!-- /.search form -->
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu">
				<li class="header">MAIN NAVIGATION</li>
				<li>
					<a href="<?php echo base_url() ?>dashboard/index">
						<i class="fa fa-dashboard"></i> <span>Dashboard</span> <i
							class="fa fa-angle-left pull-right"></i>
					</a>

				</li>


				<li class="treeview">
					<a href="#">
						<i class="fa fa-laptop"></i>
						<span>Category Management</span>
						<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo base_url() ?>category/create"><i class="fa fa-circle-o"></i> Create
								Category</a></li>
						<li><a href="<?php echo base_url() ?>category/index"><i class="fa fa-circle-o"></i> List
								Category</a></li>

					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-laptop"></i>
						<span>Product Management</span>
						<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo base_url() ?>product/create"><i class="fa fa-circle-o"></i> Create
								Product</a></li>
						<li><a href="<?php echo base_url() ?>product/index"><i class="fa fa-circle-o"></i> List Product</a>
						</li>

					</ul>
				</li>
				<!-- <li class="treeview">
					<a href="#">
						<i class="fa fa-laptop"></i>
						<span>Category Management</span>
						<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo base_url() ?>category/create"><i class="fa fa-circle-o"></i> Create
								Category</a></li>
						<li><a href="<?php echo base_url() ?>category/index"><i class="fa fa-circle-o"></i> List
								Category</a></li> -->

					</ul>
				</li>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>

	<!-- =============================================== -->