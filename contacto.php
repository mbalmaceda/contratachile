<?php $titulo='Contacto'; $nav='contacto'?>
<?php include_once('header.php'); ?>
<body class="front no-trans">
	<?php include_once("analyticstracking.php") ?>
	<div class="scrollToTop"><i class="icon-up-open-big"></i></div>
		<div class="page-wrapper">
			<?php include_once('nav.php'); ?>
			<?php include_once('intro-page.php'); ?>
			<section class="main-container">
				<div class="container">
					<div class="row">
						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-8">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">Contáctanos</h1>
							<!-- page-title end -->
							<div class="alert alert-success hidden" id="contactSuccess">
								<strong>Tu mensaje ha sido enviado.</strong> Nos contactaremos contigo a la brevedad.
							</div>
							<div class="alert alert-error hidden" id="contactError">
								<strong>Error!</strong> Ocurrio un error mientras se enviaba tu mensaje.
							</div>
							<div class="contact-form">
								<form id="contact-form" role="form">
									<div class="form-group has-feedback">
										<label for="name">Nombre*</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="">
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label for="email">Email*</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="">
										<i class="fa fa-envelope form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label for="message">Mensaje*</label>
										<textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<input type="submit" value="Enviar" class="btn btn-default">
								</form>
							</div>
						</div>
						<!-- main end -->
						<!-- sidebar start -->
						<aside class="col-md-4">
							<div class="sidebar">
								<div class="side vertical-divider-left">
									<h3 class="title">Contrata Chile </h3>
									<ul class="list">
										<li><strong></strong></li>
										<li><i class="fa fa-home pr-10"></i>Dr. Sotero del Rio 508, Of. 931</li>
										<li><i class="fa fa-home pr-10"></i>Gran Avenida 3840, Of. 609</li>
										<li><i class="fa fa-phone pr-10 pl-6"></i><a href="tel:+56229047789">+562 29047789</a></li>
										<li><i class="fa fa-mobile pr-10 pl-5"></i><a href="tel:+56959487326">+569 59487326</a></li>
										<li><i class="fa fa-mobile pr-10 pl-5"></i><a href="tel:+569 54162515">+569 54165215</a></li>
										<li><i class="fa fa-envelope pr-10"></i><a href="mailto:contacto@contratachile.cl">contacto@contratachile.cl</a></li>
									</ul>
									<ul class="social-links colored circle large">
										<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/in/contrata-chile-2b0a66b4?authType=NAME_SEARCH&authToken=1fqp&locale=es_ES&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A408717348%2CauthType%3ANAME_SEARCH%2Cidx%3A2-1-2%2CtarId%3A1483739742272%2Ctas%3Acontrata%20chile"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</aside>
						<!-- sidebar end -->
					</div>
				</div>
			</section>
			<!-- main-container end -->
			<!-- section end -->
			<?php include_once('footer.php'); ?>
		</div>
	<?php include_once('template_js.php'); ?>
	<!-- Google Maps javascript -->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
		<script type="text/javascript" src="js/google.map.config.js"></script>
	</body>
</html>
