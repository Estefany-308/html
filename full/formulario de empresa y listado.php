<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/media/cropper.min.js"></script>
	<script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/extension_image_cropper.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
				<img src="global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="d-md-none ml-2">Git updates</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Git updates</span>
							<a href="#" class="text-default"><i class="icon-sync"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Drop the IE <a href="#">specific hacks</a> for temporal inputs
										<div class="text-muted font-size-sm">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>
									</div>
									
									<div class="media-body">
										Add full font overrides for popovers and tooltips
										<div class="text-muted font-size-sm">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
										<div class="text-muted font-size-sm">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
										<div class="text-muted font-size-sm">Dec 18, 18:36</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>
									
									<div class="media-body">
										Have Carousel ignore keyboard events
										<div class="text-muted font-size-sm">Dec 12, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All updates</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Users</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Users online</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
										<span class="d-block text-muted font-size-sm">UX expert</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All users</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Messages</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Messages</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">James Alexander</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>

										<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Margo Baker</span>
												<span class="text-muted float-right font-size-sm">12:16</span>
											</a>
										</div>

										<span class="text-muted">That was something he was unable to do because...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Jeremy Victorino</span>
												<span class="text-muted float-right font-size-sm">22:48</span>
											</a>
										</div>

										<span class="text-muted">But that would be extremely strained and suspicious...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Beatrix Diaz</span>
												<span class="text-muted float-right font-size-sm">Tue</span>
											</a>
										</div>

										<span class="text-muted">What a strenuous career it is that I've chosen...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Richard Vango</span>
												<span class="text-muted float-right font-size-sm">Mon</span>
											</a>
										</div>
										
										<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Victoria</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">Victoria Baker</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index.html" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Dashboard
									<span class="d-block font-weight-normal opacity-50">No active orders</span>
								</span>
							</a>
						</li>
												<!-- /main -->

						
						<!-- /data visualization -->

						<!-- Extensions -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Empresas<i class="icon-menu" title="Extensions"></i></li>
						<li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
							<a href="#" class="nav-link"><i class="icon-puzzle4"></i> <span>Empresas</a>
							<ul class="nav nav-group-sub" data-submenu-title="Extensions">
								<li class="nav-item"><a href="extension_image_cropper.html" class="nav-link active">Lista Empresarial
								<li class="nav-item"><a href="extension_blockui.html" class="nav-link">Agregar
								<li class="nav-item"><a href="extension_dnd.html" class="nav-link">Modificar
							</ul>
						</li>
						
						</ul>
						</li>
						<!-- /page kits -->

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Extensions</span> - Image Cropper</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="extension_image_cropper.html" class="breadcrumb-item">Extensions</a>
							<span class="breadcrumb-item active">Image cropper</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Support
							</a>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->

            <div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Agregar</span> - Datos basicos</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="form_inputs.html" class="breadcrumb-item">Forms</a>
							<span class="breadcrumb-item active">Añadir</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Support
							</a>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<<!-- Form inputs -->
				             <div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-4">Agregar datos de forma especifica. Se guardara la informacion.</p>

						<form action="#">
							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Datos</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Empresa</label>
									<div class="col-lg-10">
										<input type="text" class="form-control">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Usuario</label>
									<div class="col-lg-10">
										<input type="password" class="form-control">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Clave</label>
									<div class="col-lg-10">
										<input type="Enter" class="form-control" placeholder="Enter your Edad...">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Direccion</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" >
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Numero de serie</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" disabled value="disabled">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Pagina web de la emmpresa</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" value="http://">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Codigo Postal</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" placeholder="Autocomplete is off" autocomplete="off">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Clave del departamento</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" maxlength="4" placeholder="Maximum 4 characters">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2 cursor-pointer" for="clickable-label">Depratamento</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="clickable-label" placeholder="Ejemplo: Transport">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2"></label>
									<div class="col-lg-10">
										<div class="form-control-plaintext"></div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">fecha de trabajo</label>
									<div class="col-lg-10">
										<textarea rows="3" cols="3" class="form-control" placeholder="Default textarea">Queja o sugerencia</textarea>
									</div>
								</div>
							</fieldset>

			

				<!-- Scrollable datatable -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Empresa</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						This example shows the DataTables table body <code>scrolling</code> in the <code>vertical</code> direction. This can generally be seen as an alternative method to pagination for displaying a large table in a fairly small vertical area, and as such pagination has been disabled here. Note that this is not mandatory, it will work just fine with pagination enabled as well!.
					</div>

					<table class="table datatable-scroll-y" width="100%">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Clave</th>
								<th>Dirrecion de la empresa</th>
								
						</thead>
						<tbody>
							<tr>
								<td>Marth</td>
								<td><a href="#">1526</a></td>
								<td>Por ahi</td>
								<td>22 col. calle 1972</td>
								
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>/-->
								</td>
							</tr>
							<tr>
								<td>Jackelyn</td>
								<td>Weible</td>
								<td><a href="#">Airline Transport Pilot</a></td>
								<td>3 Oct 1981</td>
								<!--<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>/-->
								</td>
							</tr>
							<tr>
								<td>Aura</td>
								<td>Hard</td>
								<td>Business Services Sales Representative</td>
								<td>19 calle. direccion 1969</td>
								<!--<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>/-->
								</td>
							</tr>
							<tr>
								<td>Nathalie</td>
								<td><a href="#">Pretty</a></td>
								<td>Drywall </td>
								<td>13 calle colonia. 1977</td>
								<!--<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>/-->
								</td>
							</tr>
							<tr>
								<td>Sharan</td>
								<td>Leland</td>
								<td> Tactical Readiness Officer</td>
								<td>30 AviationDe calle 1991</td>
								<!--<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>/-->
								</td>
							</tr>
							<tr>
								<td>Maxine</td>
								<td><a href="#">Woldt</a></td>
								<td><a href="#">Business Services Sales Representative</a></td>
								<td>17 Oct 1987</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Sylvia</td>
								<td><a href="#">Mcgaughy</a></td>
								<td>Hemodialysis Technician</td>
								<td>11 Nov 1983</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Lizzee</td>
								<td><a href="#">Goodlow</a></td>
								<td>Technical Services Librarian</td>
								<td>1 Nov 1961</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Kennedy</td>
								<td>Haley</td>
								<td>Senior Marketing Designer</td>
								<td>18 Dec 1960</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Chantal</td>
								<td><a href="#">Nailor</a></td>
								<td>Technical Services Librarian</td>
								<td>10 Jan 1980</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Delma</td>
								<td>Bonds</td>
								<td>Lead Brand Manager</td>
								<td>21 Dec 1968</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Roland</td>
								<td>Salmos</td>
								<td><a href="#">Senior Program Developer</a></td>
								<td>5 Jun 1986</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Coy</td>
								<td>Wollard</td>
								<td>Customer Service Operator</td>
								<td>12 Oct 1982</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Maxwell</td>
								<td>Maben</td>
								<td>Regional Representative</td>
								<td>25 Feb 1988</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Cicely</td>
								<td>Sigler</td>
								<td><a href="#">Senior Research Officer</a></td>
								<td>15 Mar 1960</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>


				<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>





				<!-- /scrollable datatable 






					<div class="card-body">
						<p class="mb-3">This example demonstrates some basic functionality with previews in different sizes. <code>X</code> and <code>Y</code> values display current cropping zone position, <code>width</code> and <code>height</code> values display current cropping zone size, <code>scaleX</code> and <code>scaleY</code> values display current image scale. You can get image, crop box and container data by clicking on the proper button on the right side. Also you can change cropping zone aspect ratio and download cropped image on the fly.</p>

						<div class="row">
							<div class="col-md-6">
								<div class="image-cropper-container mb-3">
									<img src="global_assets/images/placeholders/placeholder.jpg" alt="" class="cropper" id="demo-cropper-image">
								</div>

								<div class="form-group demo-cropper-toolbar">
									<label class="font-weight-semibold">Toolbar:</label>
									<div class="btn-group btn-group-justified">
										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="setDragMode" data-option="move" title="Move">
												<span class="icon-move"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="setDragMode" data-option="crop" title="Crop">
												<span class="icon-crop2"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
												<span class="icon-arrow-left13"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="move" data-option="10" data-second-option="0" title="Move Right">
												<span class="icon-arrow-right14"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
												<span class="icon-arrow-up13"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="move" data-option="0" data-second-option="10" title="Move Down">
												<span class="icon-arrow-down132"></span>
											</button>
										</div>
									</div>
								</div>

								<div class="form-group demo-cropper-toolbar">
									<div class="btn-group btn-group-justified">
										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="zoom" data-option="0.1" title="Zoom In">
												<span class="icon-zoomin3"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="zoom" data-option="-0.1" title="Zoom Out">
												<span class="icon-zoomout3"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="rotate" data-option="-45" title="Rotate Left">
												<span class="icon-rotate-ccw3"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="rotate" data-option="45" title="Rotate Right">
												<span class="icon-rotate-cw3"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="scaleX" data-option="-1" title="Flip Horizontal">
												<span class="icon-flip-vertical4"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="scaleY" data-option="-1" title="Flip Vertical">
												<span class="icon-flip-vertical3"></span>
											</button>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="font-weight-semibold">Crop:</label>
									<div class="btn-group btn-group-justified demo-cropper-toolbar">
										<div class="btn-group">
											<button type="button" class="btn btn-light" data-method="getCroppedCanvas">
												Get Cropped Canvas
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn btn-light" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 150, &quot;height&quot;: 150 }">
												150&times;150
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn btn-light" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 120, &quot;height&quot;: 120 }">
												120&times;120
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn btn-light" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 90, &quot;height&quot;: 90 }">
												90&times;90
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn btn-light" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 60, &quot;height&quot;: 60 }">
												60&times;60
											</button>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="font-weight-semibold">Aspect ratio:</label>
									<div class="btn-group btn-group-justified demo-cropper-ratio" data-toggle="buttons">
										<label class="btn btn-light">
											<input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
											16:9
										</label>
										<label class="btn btn-light">
											<input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
											4:3
										</label>
										<label class="btn btn-light">
											<input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
											1:1
										</label>
										<label class="btn btn-light">
											<input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
											2:3
										</label>
										<label class="btn btn-light">
											<input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
											Free
										</label>
									</div>
								</div>

								<div class="form-group mb-0">
									<div class="row">
										<div class="col-md-4">
											<div class="form-check form-check-switchery form-check-switchery-double switchery-sm text-center">
												<label class="form-check-label">
													Clear
													<input type="checkbox" class="clear-crop-switch" checked data-fouc>
													Crop
												</label>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-check form-check-switchery form-check-switchery-double switchery-sm text-center">
												<label class="form-check-label">
													Disable
													<input type="checkbox" class="enable-disable-switch" checked data-fouc>
													Enable
												</label>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-check form-check-switchery form-check-switchery-double switchery-sm text-center">
												<label class="form-check-label">
													Destroy
													<input type="checkbox" class="destroy-create-switch" checked data-fouc>
													Create
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-3 text-center">
									<div class="eg-preview d-md-flex justify-content-md-center align-items-md-center text-center">
										<div class="preview preview-lg d-md-inline-block mt-3 mx-auto mr-md-0 mt-md-0 ml-md-3 overflow-hidden rounded"></div>
										<div class="preview preview-md d-md-inline-block mt-3 mx-auto mr-md-0 mt-md-0 ml-md-3 overflow-hidden rounded"></div>
										<div class="preview preview-md d-md-inline-block mt-3 mx-auto mr-md-0 mt-md-0 ml-md-3 overflow-hidden rounded"></div>
										<div class="preview preview-xs d-md-inline-block mt-3 mx-auto mr-md-0 mt-md-0 ml-md-3 overflow-hidden rounded"></div>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label class="font-weight-semibold">X value:</label>
											<input type="text" class="form-control" id="dataX" placeholder="x">
										</div>

										<div class="form-group">
											<label class="font-weight-semibold">Width:</label>
											<input type="text" class="form-control" id="dataWidth" placeholder="width">
										</div>

										<div class="form-group">
											<label class="font-weight-semibold">ScaleX:</label>
											<input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group">
											<label class="font-weight-semibold">Y value:</label>
											<input type="text" class="form-control" id="dataY" placeholder="y">
										</div>

										<div class="form-group">
											<label class="font-weight-semibold">Height:</label>
											<input type="text" class="form-control" id="dataHeight" placeholder="height">
										</div>

										<div class="form-group">
											<label class="font-weight-semibold">ScaleY:</label>
											<input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="font-weight-semibold">General data:</label>
									<div class="input-group">
										<input class="form-control" id="showData1" type="text" placeholder="General data">
										<span class="input-group-append">
											<button class="btn btn-light" id="getData" type="button">Get Data</button>
											<button class="btn btn-light" id="setData" type="button">Set Data</button>
										</span>
									</div>
								</div>

								<div class="form-group">
									<label class="font-weight-semibold">Container &amp; image data:</label>
									<div class="input-group">
										<input class="form-control" id="showData2" type="text" placeholder="Container and image data">
										<span class="input-group-append">
											<button class="btn btn-light" id="getContainerData" type="button">Get Container Data</button>
											<button class="btn btn-light" id="getImageData" type="button">Get Image Data</button>
										</span>
									</div>
								</div>

								<div class="form-group">
									<label class="font-weight-semibold">Canvas data:</label>
									<div class="input-group">
										<input class="form-control" id="showData3" type="text" placeholder="Canvas data">
										<span class="input-group-append">
											<button class="btn btn-light" id="getCanvasData" type="button">Get Canvas Data</button>
											<button class="btn btn-light" id="setCanvasData" type="button">Set Canvas Data</button>
										</span>
									</div>
								</div>

								<div class="form-group">
									<label class="font-weight-semibold">Crop box data:</label>
									<div class="input-group">
										<input class="form-control" id="showData4" type="text" placeholder="Crop box data">
										<span class="input-group-append">
											<button class="btn btn-light" id="getCropBoxData" type="button">Get Crop Box Data</button>
											<button class="btn btn-light" id="setCropBoxData" type="button">Set Crop Box Data</button>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>-->
				<!-- /cropper demonstration -->


				<!-- Basic usage 
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Basic usage</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">This is the most basic example of <code>cropper</code> implementation. By default cropping area is centered and takes 80% of image space. The image is resizable, but should be wrapped in block element with fixed height.</p>

								<div class="image-cropper-container">
									<img src="global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-basic">
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Hidden overlay</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">This example demonstrates default options, but with hidden black modal layer above the cropper. To hide the modal set <code>modal</code> option to <code>false</code>. If visible, modal color can be easily changed in css.</p>

								<div class="image-cropper-container">
									<img src="global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-modal">
								</div>
							</div>
						</div>
					</div>
				</div>-->
				<!-- /basic usage -->


				<!-- Zone options 
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Fixed position</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">This example demonstrates cropped area that has <code>fixed position</code> and can't be moved. Although it isn't movable, other options remain available: resize, dragging, callbacks, aspect ratios, modal etc.</p>

								<div class="image-cropper-container">
									<img src="global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-not-movable">
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Fixed size</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">This example demonstrates cropped area that has <code>fixed size</code> and can't be resized. Although it isn't resizable, other options remain available: moving, dragging, callbacks, aspect ratios, modal etc.</p>

								<div class="image-cropper-container">
									<img src="global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-not-resizable">
								</div>
							</div>
						</div>
					</div>
				</div>-->
				<!-- /zone options -->


				<!-- Disable functionality 
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Disabled autocrop</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">In this example cropping zone is not rendered automatically when initialize and available only on a new drag. By default, cropping zone is always <code>visible</code> and can be hidden by setting <code>autoCrop</code> option to <code>false</code>.</p>

								<div class="image-cropper-container">
									<img src="global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-auto">
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Disabled image drag</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">In this example the user can't drag the image within container, but can drag cropping area.. By default, this feature is disabled and can be enabled by setting <code>movable</code> option to <code>false</code>.</p>

								<div class="image-cropper-container">
									<img src="global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-drag">
								</div>
							</div>
						</div>
					</div>
				</div>-->
				<!-- /disable functionality -->


				<!-- Ratios 
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Fixed 16:9 ratio</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Thix example demonstrates fixed <code>16:9</code> dragging (selection) ratio. By default, aspect ratio isn't specified and is free. Optional aspect ratios are also available and can be specified using <code>aspectRatio</code> option.</p>

								<div class="image-cropper-container">
									<img src="global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-16-9">
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Fixed 4:3 ratio</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Thix example demonstrates fixed <code>4:3</code> dragging (selection) ratio. By default, aspect ratio isn't specified and is free. Optional aspect ratios are also available and can be specified using <code>aspectRatio</code> option.</p>

								<div class="image-cropper-container">
									<img src="global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-4-3">
								</div>
							</div>
						</div>
					</div>
				</div>-->

				<!-- /ratios -->


				<!-- Zone sizing 				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Minimum zone size</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">This example demonstrates the <code>minimum</code> width and height (px of original image) of the cropping zone. Better use this option only when you are sure that the image has this <code>minimum</code> width and height. By default, both values aren't specified.</p>

								<div class="image-cropper-container">
									<img src="global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-min">
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Disabled zoom</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">This example demonstrates the ability to disable <code>zoom</code> feature, it works in both options: disables zoom on scroll and zoom on touch. By default, image cropper is zoomable, to disable zooming set <code>zoomable</code> option to <code>false</code>.</p>

								<div class="image-cropper-container">
									<img src="global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-zoomable">
								</div>
							</div>
						</div>
					</div>
				</div>-->

				<!-- /zone sizing -->
			</div>
			<!-- /content area -->


			<!-- Footer 
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


	<!-- Modal with cropped image -->
	<div id="getCroppedCanvasModal" class="modal fade docs-cropped" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title" id="getCroppedCanvasTitle">Cropped</h6>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body text-center"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
					<a href="#" class="btn btn-primary" id="download" download="cropped.jpg">Download</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /modal with cropped image -->

</body>
</html>