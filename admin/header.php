<?php
include('../db.php');

if(empty($_SESSION["admin_name"]) || empty($_SESSION["admin_email"]))
{
	header("location:login.php");
}

$sql_admin="SELECT * FROM admin_login where email='$_SESSION[admin_email]'";
$rs_admin=$conn->query($sql_admin);
$res_admin=$rs_admin->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard - <?php echo $res_admin['name'];?></title>
        <link rel="shortcut icon" type="image/x-icon" href="../images/logo/cs.png">
		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<script src="assets/js/ace-extra.min.js"></script>
		<script src="assets/js/jquery.min.js"></script>
		
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.php" class="navbar-brand">
						<small>
							<!-- <i class="fa fa-leaf"></i> -->&nbsp;
							<img src="../images/Background__6_-removebg-preview.png" height="40" width="80">|
							Lexa Labs
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="grey dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-tasks"></i>
								<span class="badge badge-grey">0</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-check"></i>
									0 Tasks to complete
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See tasks with details
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>

						</li>

						<li class="purple dropdown-modal">

							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">0</span>
							</a>

					<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									0 Notifications
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>


				   </li>


						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img style="height: 50px;padding:2px;max-width: 80px;" class="nav-user-photo" src="../images/Background__6_-removebg-preview.png"  alt="Lexa Labs..!"/>
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $res_admin['name'];?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="change_password.php">
										<i class="ace-icon fa fa-lock"></i>
										Change Password
									</a>
								</li>

								<li>
									<a href="profile.php">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="logout.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>

							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">

					<li class="<?php if($page_id=="home"){echo "active open";} ?>">
						<a href="index.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
						<b class="arrow"></b>
					</li>


					<!-- Home Page Section Starts -->

                    <li class="<?php if($page_id=="home_page"){echo "active open";} ?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text">Home Page</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>

						<ul class="submenu">

							<li class="<?php if($sub_page_id=="home_slider"){echo "active";} ?>">
								<a href="home_slider.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Home Slider
								</a>
								<b class="arrow"></b>
							</li>

							<li class="<?php if($sub_page_id=="about_cont"){echo "active";} ?>">
								<a href="about_content.php">
									<i class="menu-icon fa fa-caret-right"></i>
									About Content
								</a>
								<b class="arrow"></b>
							</li>

							<li class="<?php if($sub_page_id=="about_gal"){echo "active";} ?>">
								<a href="about_gal.php">
									<i class="menu-icon fa fa-caret-right"></i>
									About Images
								</a>
								<b class="arrow"></b>
							</li>

							
						</ul>

					</li>

					<!--  <li class="<?php //if($page_id=="product_details"){echo "active open";} ?>">
						<a href="product_details.php">
							<i class="menu-icon fa fa-product-hunt"></i>
							<span class="menu-text">Product Details</span>
						</a>
						<b class="arrow"></b>
					  </li> -->


					  <li class="<?php if($page_id=="home_gallery"){echo "active open";} ?>">
								<a href="home_gallery.php">
									<i class="menu-icon fa fa-photo"></i>
								 Gallery
								</a>
								<b class="arrow"></b>
					   </li>
                 
					<li class="<?php if($page_id=="blogs"){echo "active open";} ?>">
						<a href="blogs.php">
							<i class="menu-icon fa fa-newspaper-o"></i>
							<span class="menu-text">Blog</span>
						</a>
						<b class="arrow"></b>
					  </li>

					  <li class="<?php if($page_id=="contact_us"){echo "active open";} ?>">
						<a href="contact_us.php">
							<i class="menu-icon fa fa-phone"></i>
							<span class="menu-text"> Contact Us </span>
						</a>
						<b class="arrow"></b>
					   </li>



					  <!-- Contact us page ends -->

                    <ul class="nav nav-list">
					<li>
						<a href="logout.php">
							<i class="menu-icon fa fa-power-off"></i>
							<span class="menu-text">Logout</span>
						</a>
						<b class="arrow"></b>
					</li>					
				</ul><!-- /.nav-list -->

				