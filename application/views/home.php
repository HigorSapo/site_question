<!doctype html>
<html lang="en" dir="ltr">
	
<!-- Mirrored from spruko.com/demo/ren/htm/Dark/Horizontal-Headerfix/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Oct 2018 15:30:39 GMT -->
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title>Ren - a responsive, flat and full featured admin template</title>

        <!--Font Awesome-->
		<link href="<?=base_url('assets/plugins/fontawesome-free/css/all.css')?>" rel="stylesheet">

		<!-- Font Family -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">

		<!-- Dashboard Css -->
		<link href="<?=base_url('assets/css/dashboard.css')?>" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="<?=base_url('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')?>" rel="stylesheet" />

		<!-- Sidemenu Css -->
		<link href="<?=base_url('assets/plugins/toggle-sidebar/css/sidemenu.css')?>" rel="stylesheet">

		<!-- c3.js Charts Plugin -->
		<link href="<?=base_url('assets/plugins/charts-c3/c3-chart.css')?>" rel="stylesheet" />

		<!-- select2 Plugin -->
		<link href="<?=base_url('assets/plugins/select2/select2.min.css');?>" rel="stylesheet" />

		<!-- Time picker Plugin -->
		<link href="<?=base_url('assets/plugins/time-picker/jquery.timepicker.css')?>" rel="stylesheet" />

		<!-- Date Picker Plugin -->
		<link href="<?=base_url('assets/plugins/date-picker/spectrum.css')?>" rel="stylesheet" />

		<!---Font icons-->
		<link href="<?=base_url('assets/plugins/iconfonts/plugin.css')?>" rel="stylesheet" />

	</head>
	<body class="app">
		<div id="global-loader" ><div class="showbox"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>
		<div class="page">
			<div class="page-main">
				<!-- Navbar-->
					<header class="app-header header shadow-none relative">
						<div id="particles-js" ></div>
						<div class="container">
						
						<!-- Header Background Animation-->
						<div id="canvas" class="gradient"></div>
						
						<!-- Navbar Right Menu-->
						<div class="container-fluid">
							<div class="d-flex">
								<a class="header-brand" href="index.html">
									<img alt="ren logo" class="header-brand-img" src="<?=base_url('assets/images/brand/logo.png')?>">
								</a>
								<div class="d-flex order-lg-2 ml-auto">
									<div class="">
										<form class="input-icon  mr-2">
											<input class="form-control header-search" placeholder="Search&hellip;" tabindex="1" type="search">
											<div class="input-icon-addon">
												<i class="fe fe-search"></i>
											</div>
										</form>
									</div>
									<div class="dropdown d-none d-md-flex">
										<a class="nav-link icon" data-toggle="dropdown">
											<i class="fas fa-user"></i>
											<span class="nav-unread bg-green"></span>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
											<a class="dropdown-item d-flex pb-3" href="#">
												<span class="avatar brround mr-3 align-self-center" style="background-image: url(<?=base_url('assets/images/faces/male/4.jpg')?>)"></span>
												<div>
													<strong>Madeleine Scott</strong> Sent you add request
													<div class="small text-muted">
														view profile
													</div>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#">
												<span class="avatar brround mr-3 align-self-center" style="background-image: url(<?=base_url('assets/images/faces/female/14.jpg')?>)"></span>
												<div>
													<strong>rebica</strong> Suggestions for you
													<div class="small text-muted">
														view profile
													</div>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#">
												<span class="avatar brround mr-3 align-self-center" style="background-image: url(<?=base_url('assets/images/faces/male/1.jpg')?>)"></span>
												<div>
													<strong>Devid robott</strong> sent you add request
													<div class="small text-muted">
														view profile
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div><a class="dropdown-item text-center text-white" href="#">View all contact list</a>
										</div>
									</div>
									<div class="dropdown d-none d-md-flex">
										<a class="nav-link icon" data-toggle="dropdown">
											<i class="fas fa-bell"></i>
											<span class="nav-unread bg-danger"></span>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
											<a class="dropdown-item d-flex pb-3" href="#">
												<div class="notifyimg">
													<i class="fas fa-thumbs-up"></i>
												</div>
												<div>
													<strong>Someone likes our posts.</strong>
													<div class="small text-muted">
														3 hours ago
													</div>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#">
												<div class="notifyimg">
													<i class="fas fa-comment-alt"></i>
												</div>
												<div>
													<strong>3 New Comments</strong>
													<div class="small text-muted">
														5 hour ago
													</div>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#">
												<div class="notifyimg">
													<i class="fas fa-cogs"></i>
												</div>
												<div>
													<strong>Server Rebooted.</strong>
													<div class="small text-muted">
														45 mintues ago
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item text-center text-white" href="#">View all Notification</a>
										</div>
									</div>
									<div class="dropdown d-none d-md-flex">
										<a class="nav-link icon" data-toggle="dropdown"><i class="fas fa-envelope"></i> <span class="badge badge-warning badge-pill">2</span></a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
											<a class="dropdown-item text-center text-white" href="#">2 New Messages</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item d-flex pb-3" href="#">
												<span class="avatar brround mr-3 align-self-center" style="background-image: url(<?=base_url('assets/images/faces/male/41.jpg')?>)"></span>
												<div>
													<strong>Madeleine</strong> Hey! there I' am available....
													<div class="small text-muted">
														3 hours ago
													</div>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar brround mr-3 align-self-center" style="background-image: url(<?=base_url('assets/images/faces/female/1.jpg')?>)"></span>
												<div>
													<strong>Anthony</strong> New product Launching...
													<div class="small text-muted">
														5 hour ago
													</div>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar brround mr-3 align-self-center" style="background-image: url(<?=base_url('assets/images/faces/female/18.jpg')?>)"></span>
												<div>
													<strong>Olivia</strong> New Schedule Realease......
													<div class="small text-muted">
														45 mintues ago
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item text-center text-white" href="#">See all Messages</a>
										</div>
									</div>
									<div class="dropdown">
										<a class="nav-link pr-0 leading-none d-flex" data-toggle="dropdown" href="#">
											<span class="avatar avatar-md brround" style="background-image: url(<?=base_url('assets/images/faces/female/25.jpg')?>)"></span>
											<span class="ml-2 d-none d-lg-block">
												<span class="text-white">Sindy Scribner</span>
											</span>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
											<a class="dropdown-item" href="#"><i class="dropdown-icon mdi mdi-account-outline"></i> Profile</a>
											<a class="dropdown-item" href="#"><i class="dropdown-icon mdi mdi-settings"></i> Settings</a>
											<a class="dropdown-item" href="#"><span class="float-right"><span class="badge badge-primary">6</span></span> <i class="dropdown-icon mdi mdi-message-outline"></i> Inbox</a>
											<a class="dropdown-item" href="#"><i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#"><i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?</a>
											<a class="dropdown-item" href="login.html"><i class="dropdown-icon mdi mdi-logout-variant"></i> Sign out</a>
										</div>
									</div>
								</div>
								<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
									<span class="header-toggler-icon"></span>
								</a>
							</div>
						</div>
					</div>
				</header>
				
				<!-- Horizantal menu-->
				<div class="ren-navbar fixed-header" id="headerMenuCollapse">
					<div class="container">
						<ul class="nav">
							<li class="nav-item with-sub">
								<a class="nav-link " href="#">
									<i class="fas fa-home"></i>
									<span> DASHBOARD</span>
								</a>
								<div class="sub-item">
									<ul>
										<li>
											<a href="index.html">Dashboard 1</a>
										</li>
										<li>
											<a href="index2.html">Dashboard 2</a>
										</li>
										<li>
											<a href="index3.html">Dashboard 3</a>
										</li>
										<li>
											<a href="index4.html">Dashboard 4</a>
										</li>
									</ul>
								</div><!-- sub-item -->
							</li>
							<li class="nav-item">
								<a class="nav-link" href="widgets.html">
									<i class="fas fa-window-restore"></i>
									<span>WIDGETS</span>
								</a>
							</li>
							<li class="nav-item with-sub">
								<a class="nav-link" href="#"><i class="fas fa-snowflake"></i> <span>UI DESIGN</span></a>
								<div class="sub-item">
									<ul>
										<li>
											<a href="maps.html">Maps</a>
										</li>
										<li>
											<a href="chart-morris.html">Chart Morris </a>
										</li>
                                        <li>
											<a href="chartjs.html">Chart js </a>
										</li>
										<li>
											<a href="charts-peity.html">Charts Peity</a>
										</li>
										<li>
											<a href="chart-flot.html">Chart Flot </a>
										</li>
										<li>
											<a href="chart-ricksaw.html">Chart Ricksaw </a>
										</li>
										<li class="align-items-center">
											<a href="chart-chartist.html">Chart Chartist </a>
										</li>
										<li class="sub-with-sub">
											<a href="#">C3 Charts</a>
											<ul>
												<li>
													<a href="charts.html">C3 Bar Charts</a>
												</li>
												<li>
													<a href="chart-line.html">C3 Line Charts</a>
												</li>
												<li>
													<a href="chart-donut.html">C3 Donut Charts</a>
												</li>
												<li>
													<a href="chart-pie.html">C3 Pie charts</a>
												</li>
											</ul>
										</li>
										<li class="sub-with-sub">
											<a href="#">Calendar </a>
											<ul>
												<li>
													<a href="calendar.html">Default calendar</a>
												</li>
												<li>
													<a href="calendar2.html">Full calendar</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="cards.html">Cards design</a>
										</li>
										<li>
											<a href="chat.html">Default Chat</a>
										</li>
										<li>
											<a href="notify.html">Notifications</a>
										</li>
										<li>
											<a href="sweetalert.html">Sweet alerts</a>
										</li>
										<li>
											<a href="rangeslider.html">Range slider</a>
										</li>
										<li>
											<a href="scroll.html">Content Scroll bar</a>
										</li>
										<li>
											<a href="counters.html">Counters</a>
										</li>
										<li>
											<a href="loaders.html">Loaders</a>
										</li>
									</ul>
								</div>
								<!-- dropdown-menu -->
							</li>
							<li class="nav-item with-sub mega-dropdown">
								<a class="nav-link" href="#"><i class="fas fa-pen-square"></i><span>UI ELEMENTS</span></a>
								<div class="sub-item">
									<div class="row">
										<div class="col-lg-6">
											<label class="section-label">Basic Elements</label>
											<div class="row">
												<div class="col">
													<ul>
														<li>
															<a href="alerts.html">Alerts</a>
														</li>
														<li>
															<a href="buttons.html">Buttons</a>
														</li>
														<li>
															<a href="colors.html">Colors</a>
														</li>
														<li>
															<a href="avatars.html">Avatar-Square</a>
														</li>
														<li>
															<a href="avatar-round.html">Avatar-Rounded</a>
														</li>
														<li>
															<a href="avatar-radius.html">Avatar-Radius</a>
														</li>
														<li>
															<a href="dropdown.html">Drop downs</a>
														</li>
														<li>
															<a href="thumbnails.html">Thumbnails</a>
														</li>
														<li>
															<a href="mediaobject.html">Media Object</a>
														</li>
													</ul>
												</div>
												<div class="col-lg">
													<ul>
														<li>
															<a href="list.html">List</a>
														</li>
														<li>
															<a href="tags.html">Tags</a>
														</li>
														<li>
															<a href="pagination.html">Pagination</a>
														</li>
														<li>
															<a href="navigation.html">Navigation</a>
														</li>
														<li>
															<a href="typography.html">Typography</a>
														</li>
														<li>
															<a href="breadcrumbs.html">Breadcrumbs</a>
														</li>
														<li>
															<a href="badge.html">Badges</a>
														</li>
														<li>
															<a href="jumbotron.html">Jumbotron</a>
														</li>
														<li>
															<a href="panels.html">Panels</a>
														</li>
													</ul>
												</div><!-- col -->
											</div><!-- row -->
										</div><!-- col -->
										<div class="col-lg mg-t-30 mg-lg-t-0">
											<label class="section-label">Other Elements</label>
											<ul>
												<li>
													<a href="modal.html">Modal</a>
												</li>
												<li>
													<a href="tooltipandpopover.html">Tooltip and popover</a>
												</li>
												<li>
													<a href="progress.html">Progress</a>
												</li>
												<li>
													<a href="chart.html">Charts</a>
												</li>
												<li>
													<a href="carousel.html">Carousels</a>
												</li>
												<li>
													<a href="Accordion.html">Accordions</a>
												</li>
												<li>
													<a href="tabs.html">Tabs</a>
												</li>
												<li>
													<a href="headers.html">Headers  </a>
												</li>
												<li>
													<a href="footers.html">Footers  </a>
												</li>
											</ul>
										</div><!-- col -->
										<div class="col-lg mg-t-30 mg-lg-t-0">
											<label class="section-label">Other Pages</label>
											<ul>
												<li>
													<a href="about.html">About Company </a>
												</li>
												<li>
													<a href="company-history.html">Company History </a>
												</li>
												<li>
													<a href="services.html">Services </a>
												</li>
												<li>
													<a href="faq.html">FAQS </a>
												</li>
												<li>
													<a href="terms.html">Terms and Conditions </a>
												</li>
												<li>
													<a href="time-line.html">Time Line</a>
												</li>
												<li>
													<a href="rating.html">Rating </a>
												</li>

											</ul>
										</div><!-- col -->

									</div><!-- row -->
								</div>
								<!-- dropdown-menu -->
							</li>
							<li class="nav-item with-sub">
								<a class="nav-link" href="#"><i class="fas fa-newspaper"></i><span>Pages</span></a>
								<div class="sub-item">
									<ul>
										<li>
											<a href="profile.html">Profile</a>
										</li>
										<li>
											<a href="editprofile.html">Edit Profile</a>
										</li>
										<li>
											<a href="email.html">Email</a>
										</li>
										<li>
											<a href="emailservices.html">Email Inbox</a>
										</li>
										<li class="sub-with-sub">
											<a href="#">User Pages</a>
											<ul>
												<li>
													<a href="login.html">Login</a>
												</li>
												<li>
													<a href="register.html">Register</a>
												</li>
												<li>
													<a href="forgot-password.html">Forgot password</a>
												</li>
												<li>
													<a href="lockscreen.html">Lock screen</a>
												</li>
												<li>
													<a href="empty.html">Empty Page</a>
												</li>
											</ul>
										</li>
										<li class="sub-with-sub">
											<a href="#">Error Pages</a>
											<ul>
												<li>
													<a href="400.html">400 Error</a>
												</li>
												<li>
													<a href="401.html">401 Error</a>
												</li>
												<li>
													<a href="403.html">403 Error</a>
												</li>
												<li>
													<a href="404.html">404 Error</a>
												</li>
												<li>
													<a href="500.html">500 Error</a>
												</li>
												<li>
													<a href="503.html">503 Error</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="construction.html">Under Construction</a>
										</li>
									</ul>
								</div>
								<!-- dropdown-menu -->
							</li>
							<li class="nav-item with-sub">
								<a class="nav-link active" data-toggle="dropdown" href="#"><i class="fas fa-file-alt"></i> <span>Forms</span></a>
								<div class="sub-item">
									<ul>
										<li>
											<a href="form-elements.html">Form Elements</a>
										</li>
										<li>
											<a href="form-wizard.html">Wizard Elements</a>
										</li>
										<li>
											<a href="wysiwyag.html">Text Editor</a>
										</li>

									</ul>
								</div>
								<!-- dropdown-menu -->
							</li>
							<li class="nav-item with-sub ">
								<a class="nav-link " data-toggle="dropdown" href="#"><i class="fas fa-cubes"></i> <span>COMPONENTS</span></a>
								<div class="sub-item">
									<ul>
										<li>
											<a href="pricing.html">Pricing Tables</a>
										</li>
										<li>
											<a href="crypto-currencies.html">Crypto-currencies</a>
										</li>
										<li>
											<a href="users-list.html">User List</a>
										</li>
										<li class="sub-with-sub">
											<a href="#">E-commerce </a>
											<ul>
												<li>
													<a href="shop.html">Products</a>
												</li>
												<li>
													<a href="shop-des.html">Product Details</a>
												</li>
												<li>
													<a href="cart.html">Shopping Cart</a>
												</li>
											</ul>
										</li>
										<li class="sub-with-sub">
											<a href="#">Icons</a>
											<ul>
												<li>
													<a href="icons.html">Font Awesome</a>
												</li>
												<li>
													<a href="icons2.html">Material Design Icons</a>
												</li>
												<li>
													<a href="icons3.html">Simple Line Iocns</a>
												</li>
												<li>
													<a href="icons4.html">Feather Icons</a>
												</li>
												<li>
													<a href="icons5.html">Ionic Icons</a>
												</li>
												<li>
													<a href="icons6.html">Flag Icons</a>
												</li>
											</ul>
										</li>
										<li class="sub-with-sub">
											<a href="#">Tables</a>
											<ul>
												<li>
													<a href="tables.html">Default table</a>
												</li>
												<li>
													<a href="datatable.html">Data Table</a>
												</li>

											</ul>
										</li>
										<li>
											<a href="search.html">Search page</a>
										</li>
										<li>
											<a href="blog.html">Blog</a>
										</li>
										<li>
											<a href="invoice.html">Invoice</a>
										</li>
									</ul>
								</div>
								<!-- dropdown-menu -->
							</li>
							<li class="nav-item">
								<a class="nav-link" href="gallery.html">
									<i class="fas fa-images"></i>
									<span>Gallery</span>
									<span class="square-8"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Horizantal menu-->
				
				<div class="container">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Forms</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Forms</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Elements</li>
							</ol>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-status bg-primary br-tr-3 br-tl-3"></div>
									<div class="card-header">
										<h3 class="card-title">Login to site.com</h3>
									</div>
									<div class="card-body row justify-content-between">
										<div class="w-100 mb-4">
										  <form id="loginForm" method="POST" action="https://spruko.com/login/" novalidate="novalidate">
												<div class="form-group">
												  <label for="username" class="control-label">Username</label>
												  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
												  <span class="help-block"></span>
												</div>
												<div class="form-group">
												  <label for="password" class="control-label">Password</label>
												  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
												  <span class="help-block"></span>
												</div>
												<div class="checkbox">
												  <label>
													  <input type="checkbox" name="remember" id="remember"> Remember login
												  </label>
												  <p class="help-block">(if this is a private computer)</p>
												</div>
												<button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
												<a href="#" class="btn btn-secondary btn-lg btn-block">Register</a>
												
												<div class="text-center p-5 font-weight-bold">OR </div>
												
												<div class="social-login-content btn-block">
													<div class="social-button">
														<button type="button" class="btn social btn-lg facebook btn-flat btn-addon btn-block mb-3"><i class="fab fa-facebook"></i> Sign in with facebook</button>
														<button type="button" class="btn social btn-lg twitter btn-flat btn-addon btn-block mt-2"><i class="fab fa-twitter"></i> Sign in with twitter</button>
													</div>
												</div>
										  </form>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<strong class="card-title">Credit Card</strong>
									</div>
									<div class="card-body">
									  <!-- Credit Card -->
									  <div id="pay-invoice">
										  <div class="card-title">
											  <h3 class="text-center">Pay Invoice</h3>
										  </div>
										  <hr>
										  <form action="#" method="post" novalidate="novalidate">
											  <div class="form-group text-center">
												  <ul class="list-inline">
													  <li class="list-inline-item"><i class="text-muted fab fa-cc-visa fa-2x"></i></li>
													  <li class="list-inline-item"><i class="fab fa-cc-mastercard fa-2x"></i></li>
													  <li class="list-inline-item"><i class="fab fa-cc-amex fa-2x"></i></li>
													  <li class="list-inline-item"><i class="fab fa-cc-discover fa-2x"></i></li>
												  </ul>
											  </div>
											  <div class="form-group">
												  <label for="cc-payment" class="control-label mb-1">Payment amount</label>
												  <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
											  </div>
											  <div class="form-group has-success">
												  <label for="cc-name" class="control-label mb-1">Name on card</label>
												  <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
												  <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
											  </div>
											  <div class="form-group">
												  <label for="cc-number" class="control-label mb-1">Card number</label>
												  <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
												  <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
											  </div>
											  <div class="row">
												  <div class="col-6">
													  <div class="form-group">
														  <label for="cc-exp" class="control-label mb-1">Expiration</label>
														  <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY" autocomplete="cc-exp">
														  <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
													  </div>
												  </div>
												  <div class="col-6">
													  <label for="x_card_code" class="control-label mb-1">Security code</label>
													  <div class="input-group">
														  <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
														  
															<span class="col-auto align-self-center ">
																<span class="form-help bg-primary text-white" data-toggle="popover" data-placement="top" data-content="<span>The 3 digit code on back of the card..</span>">?</span>
															</span>
													  </div>
												  </div>
											  </div>
											  <div>
												  <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
													  <i class="fa fa-lock fa-lg"></i>&nbsp;
													  <span id="payment-button-amount">Pay $100.00</span>
													  <span id="payment-button-sending" style="display:none;">Sending…</span>
												  </button>
											  </div>
										  </form>
									  </div>
									</div>
								</div> 								
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12">
								<form  method="post" class="card">
									<div class="card-header">
										<h3 class="card-title">Form elements</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<label class="form-label">Enter Name</label>
													<input type="text" class="form-control" name="example-text-input" placeholder="Name">
												</div>
												<div class="form-group">
													<label class="form-label">Text</label>
													<input type="text" class="form-control" name="example-text-input" placeholder="Text..">
												</div>

												<div class="form-group">
													<label class="form-label">Message <span class="form-label-small">56/100</span></label>
													<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="text here.."></textarea>
												</div>
												<div class="form-group">
													<label class="form-label">Disabled</label>
													<input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled text area.." value="" disabled>
												</div>
												<div class="form-group">
													<label class="form-label">Readonly</label>
													<input type="text" class="form-control" name="example-disabled-input" placeholder="Read Only Text area." value="Read Only Text area. " readonly>
												</div>
												<div class="form-group">
													<label class="form-label">Password</label>
													<input type="password" class="form-control" name="example-password-input" placeholder="Password..">
												</div>
												<div class="form-group">
													<label class="form-label">Valid Email</label>
													<input type="text" class="form-control is-valid state-valid" name="example-text-input-valid" placeholder="Valid Email..">
												</div>
												<div class="form-group m-0">
													<label class="form-label">Invalid Number</label>
													<input type="text" class="form-control is-invalid state-invalid" name="example-text-input-invalid"
													placeholder="Invalid Number..">
													<div class="invalid-feedback">Invalid feedback</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<label class="form-label">Country</label>
													<select name="country" id="select-countries" class="form-control custom-select">
														<option value="br" data-data='{"image": "./assets/images/flags/br.svg"}'>Brazil</option>
														<option value="cz" data-data='{"image": "./assets/images/flags/cz.svg"}'>Czech Republic</option>
														<option value="de" data-data='{"image": "./assets/images/flags/de.svg"}'>Germany</option>
														<option value="pl" data-data='{"image": "./assets/images/flags/pl.svg"}' selected>Poland</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Input group</label>
													<div class="input-group">
														<input type="text" class="form-control" placeholder="Search for...">
														<span class="input-group-append">
															<button class="btn btn-primary" type="button">Go!</button>
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="form-label">Input group buttons</label>
													<div class="input-group">
														<input type="text" class="form-control">
														<div class="input-group-append">
															<button type="button" class="btn btn-primary">Action</button>
															<button data-toggle="dropdown" type="button" class="btn btn-primary dropdown-toggle"></button>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)">News</a>
																<a class="dropdown-item" href="javascript:void(0)">Messages</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="javascript:void(0)">Edit Profile</a>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="form-label">Separated inputs</label>
													<div class="row gutters-xs">
														<div class="col">
															<input type="text" class="form-control" placeholder="Search for...">
														</div>
														<span class="col-auto">
															<button class="btn btn-primary" type="button"><i class="fe fe-search"></i></button>
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="form-label">Icon input</label>
													<div class="input-icon mb-3 form-control border">
														<input type="text" class="form-control" placeholder="Search for...">
														<span class="input-icon-addon">
															<i class="fe fe-search"></i>
														</span>
													</div>
													<div class="input-icon">
														<span class="input-icon-addon">
															<i class="fe fe-user"></i>
														</span>
														<input type="text" class="form-control" placeholder="Username">
													</div>
												</div>
												<div class="form-group">
													<label class="form-label">ZIP Code</label>
													<div class="row gutters-sm">
														<div class="col">
															<input type="text" class="form-control" placeholder="Search for...">
														</div>
														<span class="col-auto align-self-center">
															<span class="form-help bg-primary text-white" data-toggle="popover" data-placement="top"
															data-content="<p>ZIP Code must be US or CDN format. You can use an extended ZIP+4 code to determine address more accurately.</p>
															<p class='mb-0'><a href='#'>USP ZIP codes lookup tools</a></p>
															">?</span>
														</span>
													</div>
												</div>
												<div class="form-group">
													<div class="form-label">Bootstrap's Custom File Input</div>
													<div class="custom-file">
														<input type="file" class="custom-file-input" name="example-file-input-custom">
														<label class="custom-file-label">Choose file</label>
													</div>
												</div>
												<div class="form-group m-0">
													<label class="form-label">Date of birth</label>
													<div class="row gutters-xs">
														<div class="col-5">
															<select name="user[month]" class="form-control custom-select">
																<option value="">Month</option>
																<option value="1">January</option>
																<option value="2">February</option>
																<option value="3">March</option>
																<option value="4">April</option>
																<option value="5">May</option>
																<option selected="selected" value="6">June</option>
																<option value="7">July</option>
																<option value="8">August</option>
																<option value="9">September</option>
																<option value="10">October</option>
																<option value="11">November</option>
																<option value="12">December</option>
															</select>
														</div>
														<div class="col-3">
															<select name="user[day]" class="form-control custom-select">
																<option value="">Day</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
																<option value="11">11</option>
																<option value="12">12</option>
																<option value="13">13</option>
																<option value="14">14</option>
																<option value="15">15</option>
																<option value="16">16</option>
																<option value="17">17</option>
																<option value="18">18</option>
																<option value="19">19</option>
																<option selected="selected" value="20">20</option>
																<option value="21">21</option>
																<option value="22">22</option>
																<option value="23">23</option>
																<option value="24">24</option>
																<option value="25">25</option>
																<option value="26">26</option>
																<option value="27">27</option>
																<option value="28">28</option>
																<option value="29">29</option>
																<option value="30">30</option>
																<option value="31">31</option>
															</select>
														</div>
														<div class="col-4">
															<select name="user[year]" class="form-control custom-select">
																<option value="">Year</option>
																<option value="2014">2014</option>
																<option value="2013">2013</option>
																<option value="2012">2012</option>
																<option value="2011">2011</option>
																<option value="2010">2010</option>
																<option value="2009">2009</option>
																<option value="2008">2008</option>
																<option value="2007">2007</option>
																<option value="2006">2006</option>
																<option value="2005">2005</option>
																<option value="2004">2004</option>
																<option value="2003">2003</option>
																<option value="2002">2002</option>
																<option value="2001">2001</option>
																<option value="2000">2000</option>
																<option value="1999">1999</option>
																<option value="1998">1998</option>
																<option value="1997">1997</option>
																<option value="1996">1996</option>
																<option value="1995">1995</option>
																<option value="1994">1994</option>
																<option value="1993">1993</option>
																<option value="1992">1992</option>
																<option value="1991">1991</option>
																<option value="1990">1990</option>
																<option selected="selected" value="1989">1989</option>
																<option value="1988">1988</option>
																<option value="1987">1987</option>
																<option value="1986">1986</option>
																<option value="1985">1985</option>
																<option value="1984">1984</option>
																<option value="1983">1983</option>
																<option value="1982">1982</option>
																<option value="1981">1981</option>
																<option value="1980">1980</option>
																<option value="1979">1979</option>
																<option value="1978">1978</option>
																<option value="1977">1977</option>
																<option value="1976">1976</option>
																<option value="1975">1975</option>
																<option value="1974">1974</option>
																<option value="1973">1973</option>
																<option value="1972">1972</option>
																<option value="1971">1971</option>
																<option value="1970">1970</option>
																<option value="1969">1969</option>
																<option value="1968">1968</option>
																<option value="1967">1967</option>
																<option value="1966">1966</option>
																<option value="1965">1965</option>
																<option value="1964">1964</option>
																<option value="1963">1963</option>
																<option value="1962">1962</option>
																<option value="1961">1961</option>
																<option value="1960">1960</option>
																<option value="1959">1959</option>
																<option value="1958">1958</option>
																<option value="1957">1957</option>
																<option value="1956">1956</option>
																<option value="1955">1955</option>
																<option value="1954">1954</option>
																<option value="1953">1953</option>
																<option value="1952">1952</option>
																<option value="1951">1951</option>
																<option value="1950">1950</option>
																<option value="1949">1949</option>
																<option value="1948">1948</option>
																<option value="1947">1947</option>
																<option value="1946">1946</option>
																<option value="1945">1945</option>
																<option value="1944">1944</option>
																<option value="1943">1943</option>
																<option value="1942">1942</option>
																<option value="1941">1941</option>
																<option value="1940">1940</option>
																<option value="1939">1939</option>
																<option value="1938">1938</option>
																<option value="1937">1937</option>
																<option value="1936">1936</option>
																<option value="1935">1935</option>
																<option value="1934">1934</option>
																<option value="1933">1933</option>
																<option value="1932">1932</option>
																<option value="1931">1931</option>
																<option value="1930">1930</option>
																<option value="1929">1929</option>
																<option value="1928">1928</option>
																<option value="1927">1927</option>
																<option value="1926">1926</option>
																<option value="1925">1925</option>
																<option value="1924">1924</option>
																<option value="1923">1923</option>
																<option value="1922">1922</option>
																<option value="1921">1921</option>
																<option value="1920">1920</option>
																<option value="1919">1919</option>
																<option value="1918">1918</option>
																<option value="1917">1917</option>
																<option value="1916">1916</option>
																<option value="1915">1915</option>
																<option value="1914">1914</option>
																<option value="1913">1913</option>
																<option value="1912">1912</option>
																<option value="1911">1911</option>
																<option value="1910">1910</option>
																<option value="1909">1909</option>
																<option value="1908">1908</option>
																<option value="1907">1907</option>
																<option value="1906">1906</option>
																<option value="1905">1905</option>
																<option value="1904">1904</option>
																<option value="1903">1903</option>
																<option value="1902">1902</option>
																<option value="1901">1901</option>
																<option value="1900">1900</option>
																<option value="1899">1899</option>
																<option value="1898">1898</option>
																<option value="1897">1897</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer text-right">
										<div class="d-flex">
											<a href="javascript:void(0)" class="btn btn-link">Cancel</a>
											<button type="submit" class="btn btn-primary ml-auto">Send data</button>
										</div>
									</div>
								</form>
								<form method="post" class="card">
									<div class="card-header">
										<h3 class="card-title">form elements</h3>
									</div>
									<div class=" card-body">
										<div class="row">
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<div class="form-label">Toggle switch single</div>
													<label class="custom-switch">
														<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
														<span class="custom-switch-indicator"></span>
														<span class="custom-switch-description">I agree with terms and conditions</span>
													</label>
												</div>
												<div class="form-group ">
													<label class="form-label">Your skills</label>
													<div class="selectgroup selectgroup-pills">
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
															<span class="selectgroup-button">HTML</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="CSS" class="selectgroup-input">
															<span class="selectgroup-button">CSS</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="PHP" class="selectgroup-input">
															<span class="selectgroup-button">PHP</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="JavaScript" class="selectgroup-input">
															<span class="selectgroup-button">JavaScript</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="Angular" class="selectgroup-input">
															<span class="selectgroup-button">Angular</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="Java" class="selectgroup-input">
															<span class="selectgroup-button">Java</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="C++" class="selectgroup-input">
															<span class="selectgroup-button">C++</span>
														</label>
													</div>
												</div>
												<div class="form-group m-0">
													<label class="form-label">Select Color</label>
													<div class="row gutters-xs">
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="azure" class="colorinput-input" checked />
																<span class="colorinput-color bg-azure"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="indigo" class="colorinput-input"  />
																<span class="colorinput-color bg-indigo"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="purple" class="colorinput-input" />
																<span class="colorinput-color bg-purple"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="pink" class="colorinput-input" />
																<span class="colorinput-color bg-pink"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="red" class="colorinput-input" />
																<span class="colorinput-color bg-red"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="orange" class="colorinput-input" />
																<span class="colorinput-color bg-orange"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="yellow" class="colorinput-input" />
																<span class="colorinput-color bg-yellow"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="lime" class="colorinput-input" />
																<span class="colorinput-color bg-lime"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="green" class="colorinput-input" />
																<span class="colorinput-color bg-green"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="teal" class="colorinput-input" />
																<span class="colorinput-color bg-teal"></span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-6">
												<div class="form-group ">
													<div class="form-label">Radios</div>
													<div class="custom-controls-stacked">
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked>
															<span class="custom-control-label">Option 1</span>
														</label>
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios" value="option2">
															<span class="custom-control-label">Option 2</span>
														</label>
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios" value="option3" disabled>
															<span class="custom-control-label">Option Disabled</span>
														</label>
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios2" value="option4" disabled checked>
															<span class="custom-control-label">Option Disabled Checked</span>
														</label>
													</div>
												</div>

												<div class="form-group m-0">
													<div class="form-label">Checkboxes</div>
													<div class="custom-controls-stacked">
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
															<span class="custom-control-label">Option 1</span>
														</label>
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
															<span class="custom-control-label">Option 2</span>
														</label>
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled>
															<span class="custom-control-label">Option Disabled</span>
														</label>
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked disabled>
															<span class="custom-control-label">Option Disabled Checked</span>
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>

								<form  method="post" class="card">
									<div class="card-header">
										<h3 class="card-title">Select2 elements</h3>
									</div>
									<div class="card-body ">
										<div class="form-group ">
											<label class="form-label">Beast</label>
											<select class="form-control select2 custom-select" data-placeholder="Choose one">
												<option label="Choose one">
												</option>
												<option value="1">Chuck Testa</option>
												<option value="2">Sage Cattabriga-Alosa</option>
												<option value="3">Nikola Tesla</option>
												<option value="4">Cattabriga-Alosa</option>
												<option value="5">Nikola Alosa</option>
											</select>
										</div>
										<div class="form-group">
											<label class="form-label">Basic Select2</label>
											<select class="form-control select2" data-placeholder="Choose one (with optgroup)">
												<optgroup label="Mountain Time Zone">
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
													<option value="ID">Idaho</option>
													<option value="MT">Montana</option><option value="NE">Nebraska</option>
													<option value="NM">New Mexico</option>
													<option value="ND">North Dakota</option>
													<option value="UT">Utah</option>
													<option value="WY">Wyoming</option>
												</optgroup>
												<optgroup label="Central Time Zone">
													<option value="AL">Alabama</option>
													<option value="AR">Arkansas</option>
													<option value="IL">Illinois</option>
													<option value="IA">Iowa</option>
													<option value="KS">Kansas</option>
													<option value="KY">Kentucky</option>
													<option value="LA">Louisiana</option>
													<option value="MN">Minnesota</option>
													<option value="MS">Mississippi</option>
													<option value="MO">Missouri</option>
													<option value="OK">Oklahoma</option>
													<option value="SD">South Dakota</option>
													<option value="TX">Texas</option>
													<option value="TN">Tennessee</option>
													<option value="WI">Wisconsin</option>
												</optgroup>
											</select>
										</div>
										<div class="form-group">
											<label class="form-label"> Select2 with search box</label>
											<select class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)">
												<optgroup label="Mountain Time Zone">
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
													<option value="ID">Idaho</option>
													<option value="MT">Montana</option><option value="NE">Nebraska</option>
													<option value="NM">New Mexico</option>
													<option value="ND">North Dakota</option>
													<option value="UT">Utah</option>
													<option value="WY">Wyoming</option>
												</optgroup>
												<optgroup label="Central Time Zone">
													<option value="AL">Alabama</option>
													<option value="AR">Arkansas</option>
													<option value="IL">Illinois</option>
													<option value="IA">Iowa</option>
													<option value="KS">Kansas</option>
													<option value="KY">Kentucky</option>
													<option value="LA">Louisiana</option>
													<option value="MN">Minnesota</option>
													<option value="MS">Mississippi</option>
													<option value="MO">Missouri</option>
													<option value="OK">Oklahoma</option>
													<option value="SD">South Dakota</option>
													<option value="TX">Texas</option>
													<option value="TN">Tennessee</option>
													<option value="WI">Wisconsin</option>
												</optgroup>
											</select>
										</div>
										<div class="form-group">
											<label class="form-label">Users list</label>
											<select class="form-control select2" data-placeholder="Choose Browser" multiple>
												<option value="Firefox">
													Firefox
												</option>
												<option value="Chrome selected">
													Chrome
												</option>
												<option value="Safari">
													Safari
												</option>
												<option selected value="Opera">
													Opera
												</option>
												<option value="Internet Explorer">
													Internet Explorer
												</option>
											</select>
										</div>
									</div>
								</form>
							</div>
							<div class="col-lg-6 ">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Time Picker</h3>
									</div>
									<div class=" card-body">
										<label >Default Time Picker:</label>
										<div class="wd-150 mg-b-30">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fas fa-clock tx-16 lh-0 op-6"></i>
													</div>
												</div><!-- input-group-prepend -->
												<input class="form-control" id="tpBasic" placeholder="Set time" type="text">
											</div>
										</div><!-- wd-150 -->
										<label class="mt-4">Set the scroll position to local time if no value selected:</label>
										<div class="wd-150 mg-b-30">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fas fa-clock tx-16 lh-0 op-6"></i>
													</div><!-- input-group-text -->
												</div><!-- input-group-prepend -->
												<input class="form-control" id="tp2" placeholder="Set time" type="text">
											</div>
										</div><!-- wd-150 -->
										<label class="mt-4 ">Dynamically set the time using a Javascript Date object:</label>
										<div class="d-flex">
											<div class="input-group date-gutters wd-150">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fas fa-clock tx-16 lh-0 op-6"></i>
													</div><!-- input-group-text -->
												</div><!-- input-group-prepend -->
												<input class="form-control" id="tp3" placeholder="Set time" type="text">
												<button class="btn btn btn-primary " id="setTimeButton">Set Current Time</button>
											</div><!-- input-group -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 ">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Color Picker</h3>
									</div>
									<div class=" card-body">
										<p class=" mb-1">A simple component to select color in the same way you select color in Adobe Photoshop.</p><input id="colorpicker" type="text">
										<p class="mt-3  mb-1">You can allow alpha transparency selection. Check out these example.</p><input id="showAlpha" type="text">
										<p class="mt-4 mb-1">Show pallete only. If you'd like, spectrum can show the palettes you specify, and nothing else.</p><input id="showPaletteOnly" type="text">
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Default Date picker</div>
									</div>
									<div class="card-body">
										<p class="mg-b-20 mg-sm-b-40">The datepicker is tied to a standard form input field. Click on the input to open an interactive calendar in a small overlay. If a date is chosen, feedback is shown as the input's value.</p>
										<div class="wd-200 mg-b-30">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fas fa-calendar tx-16 lh-0 op-6"></i>
													</div>
												</div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Multiple Months </div>
									</div>
									<div class="card-body">
										<p class="mg-b-20 mg-sm-b-40">The datepicker is tied to a standard form input field. Click on the input to open an interactive calendar in a small overlay. If a date is chosen, feedback is shown as the input's value.</p>
										<div class="wd-200 mg-b-30">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fas fa-calendar tx-16 lh-0 op-6"></i>
													</div>
												</div><input class="form-control" id="datepickerNoOfMonths" placeholder="MM/DD/YYYY" type="text">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<form class="card" method="post">
									<div class="card-header">
										<div class="card-title">Login to your account</div>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label class="form-label">Email address</label>
											<input type="email" class="form-control" id="exampleInputEmail11"  placeholder="Enter email">
										</div>
										<div class="form-group">
											<label class="form-label">
											Password
											<a href="forgot-password.html" class="float-right small">I forgot password</a>
											</label>
											<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
										</div>
										<div class="form-group">
											<label class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" />
												<span class="custom-control-label">Remember me</span>
											</label>
										</div>
										<div class="form-footer">
											<button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>
									</div>
								</form>
								<div class="card">
									<div class="card-body">
										<div class="text-center text-muted">
											Don't have account yet? <a href="register.html">Sign up</a>
										</div>
										<form class="" method="post">
											<div class="mt-4">
												<div class="card-title">Forgot password</div>
												<p class="text-muted">Enter your email address and your password will be reset and emailed to you.</p>
												<div class="form-group">
													<label class="form-label" for="exampleInputEmail1">Email address</label>
													<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
												</div>
												<div class="form-footer">
													<button type="submit" class="btn btn-primary btn-block">Send me new password</button>
												</div>
											</div>
										</form>
										<div class="text-center text-muted mt-3 ">
											Forget it, <a href="login.html">send me back</a> to the sign in screen.
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<form class="card">
									<div class="card-header">
										<h3 class="card-title">Edit Profile</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label class="form-label">Company</label>
													<input type="text" class="form-control"  placeholder="Company" >
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label class="form-label">Username</label>
													<input type="text" class="form-control" placeholder="Username" >
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label class="form-label">Email address</label>
													<input type="email" class="form-control" placeholder="Email">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">First Name</label>
													<input type="text" class="form-control" placeholder="Company">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Last Name</label>
													<input type="text" class="form-control" placeholder="Last Name">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Address</label>
													<input type="text" class="form-control" placeholder="Home Address" >
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label class="form-label">City</label>
													<input type="text" class="form-control" placeholder="City" >
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label class="form-label">Postal Code</label>
													<input type="number" class="form-control" placeholder="ZIP Code">
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group">
													<label class="form-label">Country</label>
													<select class="form-control custom-select">
														<option value="0">--Select--</option>
														<option value="1">Germany</option>
														<option value="2">Canada</option>
														<option value="3">Usa</option>
														<option value="4">Aus</option>
													</select>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group mb-0">
													<label class="form-label">About Me</label>
													<textarea rows="5" class="form-control" placeholder="Enter About your description" ></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer text-right">
										<button type="submit" class="btn btn-primary">Update Profile</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!--footer-->
				<footer class="footer">
					<div class="container">
						<div class="row align-items-center flex-row-reverse">
							<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
								Copyright © 2018 <a href="#">Ren</a>. Designed by <a href="#">Spruko</a> All rights reserved.
							</div>
						</div>
					</div>
				</footer>
				<!-- End Footer-->
			</div>
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fas fa-angle-up"></i></a>
		<!-- Dashboard Css -->
		<script src="<?=base_url('assets/js/vendors/jquery-3.2.1.min.js')?>"></script>
		<script src="<?=base_url('assets/js/vendors/bootstrap.bundle.min.js')?>"></script>
		<script src="<?=base_url('assets/js/vendors/jquery.sparkline.min.js')?>"></script>
		<script src="<?=base_url('assets/js/vendors/selectize.min.js')?>"></script>
		<script src="<?=base_url('assets/js/vendors/jquery.tablesorter.min.js')?>"></script>
		<script src="<?=base_url('assets/js/vendors/circle-progress.min.js')?>"></script>
		<script src="<?=base_url('assets/plugins/rating/jquery.rating-stars.js')?>"></script>
		<!-- Side menu js -->
		<script src="<?=base_url('assets/plugins/toggle-sidebar/js/sidemenu.js')?>"></script>

		<!-- Custom scroll bar Js-->
		<script src="<?=base_url('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')?>"></script>

		<!--Select2 js -->
		<script src="<?=base_url('assets/plugins/select2/select2.full.min.js')?>"></script>

		<!-- Timepicker js -->
		<script src="<?=base_url('assets/plugins/time-picker/jquery.timepicker.js')?>"></script>
		<script src="<?=base_url('assets/plugins/time-picker/toggles.min.js')?>"></script>

		<!-- Datepicker js -->
		<script src="<?=base_url('assets/plugins/date-picker/spectrum.js')?>"></script>
		<script src="<?=base_url('assets/plugins/date-picker/jquery-ui.js')?>"></script>
		<script src="<?=base_url('assets/plugins/input-mask/jquery.maskedinput.js')?>0"></script>

		<!-- Animation -->
        <script src="<?=base_url('assets/plugins/particles/particles.js')?>"></script>
        <script src="<?=base_url('assets/plugins/particles/particlesapp_default.js')?>"></script>

		<!-- Inline js -->
		<script src="<?=base_url('assets/js/select2.js')?>"></script>

		<!--Counters -->
		<script src="<?=base_url('assets/plugins/counters/counterup.min.js')?>"></script>
		<script src="<?=base_url('assets/plugins/counters/waypoints.min.js')?>"></script>

		<!-- Custom js -->
		<script src="<?=base_url('assets/js/custom.js')?>"></script>

	</body>

<!-- Mirrored from spruko.com/demo/ren/htm/Dark/Horizontal-Headerfix/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Oct 2018 15:30:42 GMT -->
</html>


