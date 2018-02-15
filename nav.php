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
