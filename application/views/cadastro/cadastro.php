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
								<a class="header-brand" href="<?=base_url('cadastro')?>">
									<img alt="ren logo" class="header-brand-img" src="<?=base_url('assets/images/brand/logo.png')?>">
								</a>
							</div>
						</div>
					</div>
				</header>
				
				<!-- Horizantal menu-->
				<div class="ren-navbar fixed-header" id="headerMenuCollapse">
					<div class="container">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="widgets.html">
									<i class="fas fa-address-card"></i>
									<span>Cadastro</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Horizantal menu-->
				
				<div class="container">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Cadastro</h4>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-status bg-primary br-tr-3 br-tl-3"></div>
									<div class="card-header">
										<h3 class="card-title">Cadastro inicial</h3>
									</div>
									<div class="card-body row justify-content-between">
										<div class="w-100 mb-4">
										  <form id="loginForm" method="POST" action="https://spruko.com/login/" novalidate="novalidate">
												<div class="form-group">
												  <label for="username" class="control-label">Login</label>
												  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="">
												  <span class="help-block"></span>
												</div>
												<div class="form-group">
												  <label for="password" class="control-label">Senha</label>
												  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
												  <span class="help-block"></span>
												</div>
												<div class="form-group">
												  <label for="password" class="control-label">Confirme a senha</label>
												  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
												  <span class="help-block"></span>
												</div>
												<button type="submit" class="btn btn-lg btn-success btn-block">Salvar</button>
										  </form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="card">
									<div class="card-status bg-primary br-tr-3 br-tl-3"></div>
									<div class="card-header">
										<h3 class="card-title">Detalhes do cadastro</h3>
									</div>
									<div class="card-body row justify-content-between">
										<div class="w-100 mb-4">
										  <form id="loginForm" method="POST" action="https://spruko.com/login/" novalidate="novalidate">
												<div class="row">
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<label for="username" class="control-label">Nome da empresa</label>
															<input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="">
														</div>
														<div class="form-group">
															<label for="username" class="control-label">CEP</label>
															<input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="">
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<label for="username" class="control-label">CNPJ</label>
															<input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="">
														</div>
														<div class="form-group">
															<label for="username" class="control-label">Endereço</label>
															<input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="">
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<label for="username" class="control-label">Cidade</label>
															<input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="">
														</div>
														<div class="form-group">
															<label for="username" class="control-label">UF</label>
															<input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="">
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<label for="username" class="control-label">Bairro</label>
															<input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="">
														</div>
														<div class="form-group">
															<label for="username" class="control-label">Número</label>
															<input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="">
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<label for="username" class="control-label">Telefone</label>
															<input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="">
														</div>
													</div>
												</div>
										  </form>
										</div>
									</div>
								</div>
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


