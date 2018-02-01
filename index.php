<?php $titulo='Home'; $nav='home'; ?>
<?php include_once('header.php'); ?>
<body class="front no-trans">
	<?php include_once("analyticstracking.php") ?>
	<div class="scrollToTop"><i class="icon-up-open-big"></i></div>
		<div class="page-wrapper">
			<?php include_once('nav.php'); ?>
			<?php include_once('carousel.php'); ?>
			<!-- main-container start -->
			<!-- ================ -->
			<div class="page-top object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="text-center title">Servicios</h1>
							<div class="separator"></div>
							<div class="row grid-space-20">
								<div class="col-sm-12 col-md-4 col-md-push-4">
									<img src="images/logocontrata/CONTRATAISOTIPO.png" style="width:330px;height:330px;margin:0px auto;" alt="" class="object-non-visible" data-animation-effect="fadeInUp" data-effect-delay="0">
								</div>
								<div class="col-sm-6 col-md-4 col-md-pull-4">
									<div class="box-style-3 right object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
										<div class="icon-container default-bg">
											<i class="fa fa-users"></i>
										</div>
										<div class="body">
											<h2>Selección de Personal</h2>
										</div>
									</div>
									<div class="box-style-3 right object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
										<div class="icon-container default-bg">
											<i class="fa fa-sitemap"></i>
										</div>
										<div class="body">
											<h2>Gestión Organizacional</h2>
										</div>
									</div>
									<div class="box-style-3 right object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="400">
										<div class="icon-container default-bg">
											<i class="fa fa-slideshare"></i>
										</div>
										<div class="body">
											<h2>Outsourcing</h2>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="box-style-3 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
										<div class="icon-container default-bg">
											<i class="fa fa-exclamation-circle"></i>
										</div>
										<div class="body">
											<h2>Asesorías en Prevención de Riesgos</h2>
										</div>
									</div>
									<div class="box-style-3 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="400">
										<div class="icon-container default-bg">
											<i class="fa fa-flag"></i>
										</div>
										<div class="body">
											<h2>Consultoría en Capacitación</h2>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- page-top end -->

			<!-- main-container start -->
			<!-- ================ -->
			<!--<section class="main-container default-bg">
				<div class="main">
					<div class="container">
						<div class="call-to-action">
							<div class="row">
								<div class="col-md-8">
									<br>
									<h1 class="title text-center">¡ Postula con nosotros !</h1>
								</div>
								<div class="col-md-4">
									<div class="text-center">
										<button class="btn btn-white btn-lg" data-toggle="modal" data-target="#myModal">
											Enviar mi CV
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>-->
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
							<h4 class="modal-title" id="myModalLabel">Postula a tu nuevo empleo</h4>
						</div>
						<form class="form-horizontal" role="form">
							<div class="modal-body">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Nombres</label>
									<div class="col-sm-10">
										<input type="email" class="form-control" id="inputEmail3" placeholder="Nombres">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-2 control-label">Apellidos</label>
									<div class="col-sm-10">
										<input type="password" class="form-control" id="inputPassword3" placeholder="Apellidos">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-10">
										<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Adjuntar CV</label>
									<div class="col-sm-10">
										<input type="file" id="inputEmail3">
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn btn-sm btn-default">Enviar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- main-container end -->
			<?php include_once('footer.php'); ?>
		</div>
	<?php include_once('template_js.php'); ?>
	</body>
</html>
