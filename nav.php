<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<!-- header-top-first start -->
				<div class="header-top-first clearfix">
					<ul class="social-links clearfix hidden-xs">
						<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
						<li class="facebook"><a target="_blank" href="https://www.facebook.com/contratachile"><i class="fa fa-facebook"></i></a></li>
					</ul>
					<div class="social-links hidden-lg hidden-md hidden-sm">
						<div class="btn-group dropdown">
							<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
							<ul class="dropdown-menu dropdown-animation">
								<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
								<li class="facebook"><a target="_blank" href="https://www.facebook.com/contratachile"><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- header-top-first end -->
			</div>
		</div>
	</div>
</div>
<!-- header-top end -->
<header class="header fixed clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-3">

				<!-- header-left start -->
				<!-- ================ -->
				<div class="header-left clearfix">

					<!-- logo -->
					<div class="logo">
						<a href="index.php"><img id="logo" class="img-responsive" src="images/logocontrata/lgocontrata3-01.png" alt="iDea"></a>
					</div>
				</div>
				<!-- header-left end -->

			</div>
			<div class="col-md-9">

				<!-- header-right start -->
				<!-- ================ -->
				<div class="header-right clearfix">

					<!-- main-navigation start -->
					<!-- ================ -->
					<div class="main-navigation animated">

						<!-- navbar start -->
						<!-- ================ -->
						<nav class="navbar navbar-default" role="navigation">
							<div class="container-fluid">

								<!-- Toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="navbar-collapse-1">
									<ul class="nav navbar-nav navbar-right">
										<li <?php if ($nav=='home'){ echo 'class="active"'; } ?> >
											<a href="index.php">Inicio</a>
										</li>
										<!-- mega-menu start -->
										<li <?php if ($nav=='servicios'){ echo 'class="active"'; } ?> >
											<a href="servicios.php">Servicios</a>
										</li>
										<li <?php if ($nav=='contacto'){ echo 'class="active"'; } ?>>
											<a href="contacto.php" >Contacto</a>
										</li>
									</ul>
								</div>

							</div>
						</nav>
						<!-- navbar end -->

					</div>
					<!-- main-navigation end -->

				</div>
				<!-- header-right end -->

			</div>
		</div>
	</div>
</header>
<!-- header end -->