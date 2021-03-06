<!doctype html>
<html lang="en" dir="ltr">
  
<!-- Mirrored from spruko.com/demo/ren/htm/Dark/Horizontal-Headerfix/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Oct 2018 15:29:42 GMT -->
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
		
		<!-- Custom scroll bar css-->
		<link href="<?=base_url('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')?>" rel="stylesheet">

		<!-- Dashboard Css -->
		<link href="<?=base_url('assets/css/dashboard.css')?>" rel="stylesheet">

		<!-- c3.js Charts Plugin -->
		<link href="<?=base_url('assets/plugins/charts-c3/c3-chart.css')?>" rel="stylesheet">

		<!---Font icons-->
		<link href="<?=base_url('assets/plugins/iconfonts/plugin.css')?>" rel="stylesheet">
  </head>
	<body class="login-img bg-gradient">
		<!-- Header Background Animation-->
		<div id="particles-js"  class=""></div>
		<div id="global-loader" ><div class="showbox"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>
		<div class="page">
			<div class="page-single">
				<div class="container">
					<div class="row">
						<div class="col col-login mx-auto">
							<div class="text-center mb-6 ">
								<img src="<?=base_url('assets/images/brand/logo.png')?>" class="h-6" alt="">
							</div>
							<form class="card" method="post">
								<div class="card-body p-6">
									<div class="card-title text-center">Login to your Account</div>
									<div class="form-group">
										<label class="form-label">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email">
									</div>
									<div class="form-group">
										<label class="form-label">Password
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
									<div class="text-center text-muted mt-3">
										Don't have account yet? <a href="register.html">Sign up</a>
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Dashboard js -->
		<script src="<?=base_url('assets/js/vendors/jquery-3.2.1.min.js')?>"></script>
		<script src="<?=base_url('assets/js/vendors/bootstrap.bundle.min.js')?>"></script>
		<script src="<?=base_url('assets/js/vendors/jquery.sparkline.min.js')?>"></script>
		<script src="<?=base_url('assets/js/vendors/selectize.min.js')?>"></script>
		<script src="<?=base_url('assets/js/vendors/jquery.tablesorter.min.js')?>"></script>
		<script src="<?=base_url('assets/js/vendors/circle-progress.min.js')?>"></script>
		<script src="<?=base_url('assets/plugins/rating/jquery.rating-stars.js')?>"></script>

		<!-- Custom scroll bar Js-->
		<script src="<?=base_url('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')?>"></script>
		
		<!-- animation -->
        <script src="<?=base_url('assets/plugins/particles/particles.js')?>"></script>
		<script src="<?=base_url('assets/plugins/particles/particlesapp_default.js')?>"></script>
		
		<!--Counters -->
		<script src="<?=base_url('assets/plugins/counters/counterup.min.js')?>"></script>
		<script src="<?=base_url('assets/plugins/counters/waypoints.min.js')?>"></script>

		<!-- custom js -->
		<script src="<?=base_url('assets/js/custom.js')?>"></script>
				<script>
			var colors = new Array(
			[94,114,228],
			[130,94,228],
			[45,206,137],
			[45,206,204],
			[17,205,239],
			[17,113,239],
			[245,54,92],
			[245,96,54]);
		</script>
	</body>

<!-- Mirrored from spruko.com/demo/ren/htm/Dark/Horizontal-Headerfix/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Oct 2018 15:29:42 GMT -->
</html>
