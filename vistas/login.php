<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<?php require'../config/conexionPDOcontacto.php'; ?>
<?php require'../asistencia-diaria/Gestionar_citio/Consultas-sql.php'; ?>
		<title>Login | <?php echo $AInstitucion; ?></title>
		

		<link rel="shortcut icon" href="../files/imgInstitucion/<?php echo $ImGI; ?>">
         
		<meta name="description" content="User login page login usuarios" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="LGassets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="LGassets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="LGassets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="LGassets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="LGassets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="LGassets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="LGassets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="LGassets/js/html5shiv.min.js"></script>
		<script src="LGassets/js/respond.min.js"></script>
		<![endif]-->

		<!-- para precargar de la pagina -->
<link rel="stylesheet" media="screen" href="../public/precargaP/cargar.css">
	</head>

	<body class="login-layout bodyman" id="bodyman">

		 <!-- Page Preloder para la precarga de la pagina -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


<br><br>
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<!-- <i class="ace-icon fa fa-leaf green"></i> -->
									<img height="70px" class='user-image img-circle elevation-2' src="../files/imgInstitucion/<?php echo $ImGI; ?>">
									<span class="white" style="font-size: 30pt; text-shadow: 5px 2px 4px grey;" id="id-text2">Login </span>|
									<span class="blue" style=""><!-- red --><?php echo $AInstitucion;  ?></span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; Sistema de notas <!-- sistema Asistencia y notas --></h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header dark lighter bigger"><!--color anterior blue -->
												<i class="ace-icon fa fa-coffee dark"><!--color anterior green --></i>
												Escribe tus datos...
											</h4>

											<div class="space-6"></div>
                                                	<!-- login para ingresar al sistema -->
											 <form  method="post" id="frmAcceso" >
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<!-- Campo para usuario -->
															<input type="text" class="form-control" placeholder="Usuario" id="logina" name="logina" required />

															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<!-- Campo para contraseña -->
															<input type="password" class="form-control" placeholder="Contraseña" id="clavea" name="clavea"   required />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Recordarme</span>
														</label>

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Ingresar</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>

											
											</form>

											<div class="social-or-login center">
												<span class="bigger-110">Contactanos</span>
											</div>

											<div class="space-6"></div>

											<div class="social-login center">
												<a href="<?php echo $facebook; ?>" class="btn btn-primary">
													<i class="ace-icon fa fa-facebook"></i>
												</a>

												<a href="mailto:<?php echo $correo; ?>" class="btn btn-danger">
													<i class="ace-icon fa fa-envelope"></i>
												</a>

												<a href="https://api.whatsapp.com/send?phone=503<?php echo $telefono; ?>&text=Hola%20quiero%20realizar%20una%20consulta%20aserca %20del%20sistema%20de%20notas%20"  class="btn btn-success ">
													<i class="ace-icon fa fa-whatsapp"></i>
												</a>
											</div>
										</div><!-- /.widget-main -->

                                         <!--  login para restaurar contraseña  -->
										<div class="toolbar clearfix">
											<div>
												<a href="#" data-target="#forgot-box" class="forgot-password-link dark">
													<i class="ace-icon fa fa-arrow-left"></i>
													Olvide mi contraseña
												</a>
											</div>

											<div>
												<a href="#" data-target="#signup-box" class="user-signup-link white">
													Quiero registrarme
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								<!-- fin login para restaurar contraseña  -->
<!-- __________________________________________Restaurar contaseña___________________________________ -->
								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Restaurar Contraseña.
											</h4>

											<div class="space-6"></div>
											<!--div de mantenimiento  -->
											<div class=" text-center">
											   <i class="fa fa-warning text-danger" style=" font-size: 100px;"></i>
											   <h4>Servicio en mantenimiento</h4>
											</div>
											<!--/div de mantenimiento  -->

											<div class="space-6"></div>
											<p>
												Preciona enviar para recibir istrucciones en tu correo
											</p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<!-- Quitar el disabled cuando se active el servicio -->
															<input type="email" class="form-control" placeholder="Email" disabled="" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">Enviar!</span>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link white">
												Regresar a login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->

<!-- ________________________________Fin_______Restaurar contaseña___________________________________ -->


<!-- __________________________________________Registrar usuario___________________________________ -->
								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="ace-icon fa fa-users blue"></i>
												Registrar Nuevo Usuario
											</h4>

											<div class="space-6"></div>
											
                                             <p>Datos de tu usuario:</p>
											 <form  method="post" id="registrarmee">
												<fieldset>
													

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<label for="usuario">Usuario(*)</label>
															<input type="text"  name="usuario" id="usuario" class="form-control" placeholder="*nombre de tu usuario"  maxlength="15"  />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<label for="clave">Contraseña(*)</label>
															<input type="password"  name="clave"   id="clave" class="form-control" placeholder="*Contraseña" maxlength="10"  />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>



                                                    <p>Datos personales:</p>
													


                                                        
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<label for="nombre">Nombres(*)</label>
															<input type="text"  name="nombre"  id="nombre" class="form-control" placeholder="*Nombres" />
															<i class="ace-icon fa fa-user-plus"></i>
														</span>
													</label>

														<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<label for="apellido">Apellido(*)</label>
															<input type="text"  name="apellido" id="apellido" class="form-control" placeholder="*Apellidos" />
															<i class="ace-icon fa fa-user-plus"></i>
														</span>
													</label>



													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<label for="email">Correo Electronico(*)</label>
															<input type="email"  name="email"   id="email" class="form-control" placeholder="*correo electronico"  autocomplete="off" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>




													<label class="block">
														<input type="checkbox" class="ace" required />
														<span class="lbl">
															Asepto los
															<a href="#">Terminos y condiciones</a>
														</span>
													</label>

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="ace-icon fa fa-refresh"></i>
															<span class="bigger-110">Limpiar</span>
														</button>

														<button type="submit" class="width-65 pull-right btn btn-sm btn-success">
															<span class="bigger-110">Registrarme</span>

															<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
														</button>
													</div><br>
													<div class='col-md-12' id="resultados_ajax"></div><!-- Carga los datos ajax -->
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link dark">
												<i class="ace-icon fa fa-arrow-left"></i>
												Volver al  login
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->

<!-- _________________________________Fin______Registrar usuario___________________________________ -->

							
							<div class="navbar-fixed-top align-right white" style=" text-shadow: 5px 2px 4px #000;">
								<br />
								&nbsp;
								<a id="btn-login-dark" style="color:white;" href="#">Tema Oscuro</a>
								&nbsp;
								<span class="white">/</span>
								&nbsp;
								<a id="btn-login-blur" style="color:white;" href="#">Tema Oficial</a>
								&nbsp;
								<span class="white">/</span>
								&nbsp;
								<a id="btn-login-light" style="color:white;" href="#">Tema Claro</a>
								&nbsp; &nbsp; &nbsp;
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="LGassets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="LGassets/js/jquery-1.11.3.min.js"></script>
<![endif]-->

<!-- jQuery -->
<script src="../public/jquery/jquery.min.js"></script>

<!-- popper -->
<script src="../public/bootstrap/js/segundo.js"></script>

<!-- Bootstrap -->
<script src="../public/bootstrap/js/bootstrap.min.js"></script>


<!-- para bootbox o sweetalert2 Alertas -->
<!-- <script src="../public/bootbox/bootbox.min.js"></script> -->
<script  src="../public/sweetalert2@9/sweetalert2@9.js"></script>

<script type="text/javascript" src="scripts/login.js"></script>

<script type="text/javascript" src="scripts/registrarme.js"></script>


		<!-- para precarga de la pagina -->
<script src="../public/precargaP/Fcargar.js"></script>




		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='LGassets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>



	</body>
</html>
