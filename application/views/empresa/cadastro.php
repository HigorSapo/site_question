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
								<a class="nav-link" href="<?=base_url('empresa/cadastro')?>">
									<i class="fas fa-address-card"></i>
									<span>Cadastro</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?=base_url('sistema')?>">
									<i class="fas fa-sign-in-alt"></i>
									<span>Acesso ao sistema</span>
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
												  <label for="login" class="control-label">Login</label>
												  <input type="text" class="form-control" id="login" name="login" value="" required="" placeholder="">
												  <span class="help-block"></span>
												</div>
												<div class="form-group">
												  <label for="senha" class="control-label">Senha</label>
												  <input type="password" class="form-control" id="senha" name="senha" value="" required="">
												  <span class="help-block"></span>
												</div>
												<div class="form-group">
												  <label for="senhaB" class="control-label">Confirme a senha</label>
												  <input type="password" class="form-control" id="senhaB" name="senhaB" value="" required="" title="Please enter your password">
												  <span class="help-block"></span>
												</div>
												<button type="button" class="btn btn-lg btn-success btn-block" id="bt-salvar">Salvar</button>
										  		<br>
										  		<div class="alert alert-info" id="alerta-cadastro" role="alert" style="display: none;">
												  
												</div>
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
															<label for="nome-empresa" class="control-label">Nome da empresa</label>
															<input type="text" class="form-control" id="nome-empresa" name="nome-empresa" value="" required="" placeholder="">
														</div>
														<div class="form-group">
															<label for="cep" class="control-label">CEP</label>
															<input type="text" class="form-control" id="cep" name="cep" value="" required="" placeholder="">
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<label for="cnpj" class="control-label">CNPJ</label>
															<input type="text" class="form-control" id="cnpj" name="cnpj" value="" required="" placeholder="">
														</div>
														<div class="form-group">
															<label for="endereco" class="control-label">Endereço</label>
															<input type="text" class="form-control" id="endereco" name="endereco" value="" required="" placeholder="">
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<label for="cidade" class="control-label">Cidade</label>
															<input type="text" class="form-control" id="cidade" name="cidade" value="" required="" placeholder="">
														</div>
														<div class="form-group">
															<label for="uf" class="control-label">UF</label>
															<input type="text" class="form-control" id="uf" name="uf" value="" required="" placeholder="">
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<label for="bairro" class="control-label">Bairro</label>
															<input type="text" class="form-control" id="bairro" name="bairro" value="" required="" placeholder="">
														</div>
														<div class="form-group">
															<label for="n-mepresa" class="control-label">Número</label>
															<input type="text" class="form-control" id="n-mepresa" name="n-mepresa" value="" required="" placeholder="">
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<label for="complemento" class="control-label">Complemento</label>
															<input type="text" class="form-control" id="complemento" name="complemento" value="" required="" placeholder="">
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<label for="telefone" class="control-label">Telefone</label>
															<input type="text" class="form-control" id="telefone" name="telefone" value="" required="" placeholder="">
														</div>
													</div>
													<div class="col-md-12 col-lg-12">
														<div class="form-group">
															<label for="url" class="control-label">Site da empresa</label>
															<input type="text" class="form-control" id="url" name="url" value="" required="" placeholder="">
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

		<script type="text/javascript">
			$("#alerta-cadastro").hide();

			$("#bt-salvar").click(function() {
				var login        = $("#login").val();
				var senha        = $("#senha").val();
				var senhaB       = $("#senhaB").val();
				var nomeEmpresa = $("#nome-empresa").val();
				var cnpj         = $("#cnpj").val();
				var cep          = $("#cep").val();
				var endereco     = $("#endereco").val();
				var cidade       = $("#cidade").val();
				var bairro       = $("#bairro").val();
				var uf           = $("#uf").val();
				var nEmpresa     = $("#n-mepresa").val();
				var complemento  = $("#complemento").val();
				var telefone     = $("#telefone").val();
				var urlCliente   = $("#url").val();

				if (login == '') {
					$("#alerta-cadastro").html("Preencha o campo login");
					$("#alerta-cadastro").show();
					return false;
				}
				if (senha == '') {
					$("#alerta-cadastro").html("Preencha o campo senha");
					$("#alerta-cadastro").show();
					return false;
				}
				if (senhaB == '') {
					$("#alerta-cadastro").html("Preencha o campo confirme a senha");
					$("#alerta-cadastro").show();
					return false;
				}
				if (senha != senhaB) {
					$("#alerta-cadastro").html("As senha não estão igual");
					$("#alerta-cadastro").show();
					return false;
				}
				if (nomeEmpresa == '') {
					$("#alerta-cadastro").html("Preencha o nome da empresa");
					$("#alerta-cadastro").show();
					return false;
				}
				if (cnpj == '') {
					$("#alerta-cadastro").html("Preencha o campo CNPJ");
					$("#alerta-cadastro").show();
					return false;
				}
				if (cep == '') {
					$("#alerta-cadastro").html("Preencha o campo CEP");
					$("#alerta-cadastro").show();
					return false;
				}
				if (endereco == '') {
					$("#alerta-cadastro").html("Preencha o campo endereço");
					$("#alerta-cadastro").show();
					return false;
				}
				if (cidade == '') {
					$("#alerta-cadastro").html("Preencha o campo cidade");
					$("#alerta-cadastro").show();
					return false;
				}
				if (bairro == '') {
					$("#alerta-cadastro").html("Preencha o campo bairro");
					$("#alerta-cadastro").show();
					return false;
				}
				if (uf == '') {
					$("#alerta-cadastro").html("Preencha o campo UF");
					$("#alerta-cadastro").show();
					return false;
				}
				if (nEmpresa == '') {
					$("#alerta-cadastro").html("Preencha o campo número");
					$("#alerta-cadastro").show();
					return false;
				}
				if (complemento == '') {
					$("#alerta-cadastro").html("Preencha o campo complemento");
					$("#alerta-cadastro").show();
					return false;
				}

				$.ajax({
		              type: 'POST',
		              dataType: 'json',
		              url: "<?=base_url('empresa/cadastroEmpresa')?>",
		              async: true,
		              data: {
						login       : login,
						senha       : senha,
						nomeEmpresa : nomeEmpresa,
						cnpj        : cnpj,
						cep         : cep,
						endereco    : endereco,
						cidade      : cidade,
						bairro      : bairro,
						uf          : uf,
						numero      : nEmpresa,
						complemento : complemento,
						telefone    : telefone,
						urlCliente  : urlCliente
		              },
		              beforeSend: function() {
		                  $("#bt-salvar").attr('disabled', true);
		              },
		              success: function(result, status, request) {
		                  if (result.erro == '1') {
		                    $("#alerta-cadastro").html("Erro: " + result.response);
							$("#alerta-cadastro").show();
		                    return false;
		                  }
		                  if (result.response == 'OK') {
		                      	$("#alerta-cadastro").html("Cadastro feito com sucesso!");
								$("#alerta-cadastro").show();
								return false;
		                  }
		                  console.log('Erro ' + request.responseText);
		              },
		              error: function(request, status, erro) {
		                  // alertError('Erro!', request.responseText, 'bottomCenter');
		                  console.log('Erro' + request.responseText);
		              },
		              complete: function() {
		                  $("#bt-salvar").attr('disabled', false);
		              }
		        });
			});
		</script>

	</body>

<!-- Mirrored from spruko.com/demo/ren/htm/Dark/Horizontal-Headerfix/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Oct 2018 15:30:42 GMT -->
</html>


