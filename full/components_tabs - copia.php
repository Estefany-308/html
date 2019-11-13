<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../../../../global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="../../../../global_assets/js/main/jquery.min.js"></script>
	<script src="../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="assets/js/app.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
				<img src="../../../../global_assets/images/logo_light.png" alt="">
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
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
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
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
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
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
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
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
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
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
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
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
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
						<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
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
								<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
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
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Layouts</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="index.html" class="nav-link active">Default layout</a></li>
								<li class="nav-item"><a href="../../../../layout_2/LTR/default/full/index.html" class="nav-link">Layout 2</a></li>
								<li class="nav-item"><a href="../../../../layout_3/LTR/default/full/index.html" class="nav-link">Layout 3</a></li>
								<li class="nav-item"><a href="../../../../layout_4/LTR/default/full/index.html" class="nav-link">Layout 4</a></li>
								<li class="nav-item"><a href="../../../../layout_5/LTR/default/full/index.html" class="nav-link">Layout 5</a></li>
								<li class="nav-item"><a href="../../../../layout_6/LTR/default/full/index.html" class="nav-link disabled">Layout 6 <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Themes</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>
								<li class="nav-item"><a href="../../../LTR/material/full/index.html" class="nav-link">Material</a></li>
								<li class="nav-item"><a href="../../../LTR/dark/full/index.html" class="nav-link disabled">Dark <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item"><a href="../../../LTR/clean/full/index.html" class="nav-link disabled">Clean <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stack"></i> <span>Starter kit</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
								<li class="nav-item"><a href="../seed/layout_nav_horizontal.html" class="nav-link">Horizontal navigation</a></li>
								<li class="nav-item"><a href="../seed/sidebar_none.html" class="nav-link">No sidebar</a></li>
								<li class="nav-item"><a href="../seed/sidebar_main.html" class="nav-link">1 sidebar</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">2 sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="../seed/sidebar_secondary.html" class="nav-link">Secondary sidebar</a></li>
										<li class="nav-item"><a href="../seed/sidebar_right.html" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">3 sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="../seed/sidebar_right_hidden.html" class="nav-link">Right sidebar hidden</a></li>
										<li class="nav-item"><a href="../seed/sidebar_right_visible.html" class="nav-link">Right sidebar visible</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="../seed/sidebar_content_left.html" class="nav-link">Left sidebar</a></li>
										<li class="nav-item"><a href="../seed/sidebar_content_right.html" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="../seed/layout_boxed.html" class="nav-link">Boxed layout</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_main.html" class="nav-link">Fixed main navbar</a></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_secondary.html" class="nav-link">Fixed secondary navbar</a></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_both.html" class="nav-link">Both navbars fixed</a></li>
								<li class="nav-item"><a href="../seed/layout_fixed.html" class="nav-link">Fixed layout</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="changelog.html" class="nav-link">
								<i class="icon-list-unordered"></i>
								<span>Changelog</span>
								<span class="badge bg-blue-400 align-self-center ml-auto">2.2</span>
							</a>
						</li>
						<li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link"><i class="icon-width"></i> <span>RTL version</span></a></li>
						<!-- /main -->

						<!-- Forms -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Forms</div> <i class="icon-menu" title="Forms"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Form components</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form components">
								<li class="nav-item"><a href="form_inputs.html" class="nav-link">Basic inputs</a></li>
								<li class="nav-item"><a href="form_checkboxes_radios.html" class="nav-link">Checkboxes &amp; radios</a></li>
								<li class="nav-item"><a href="form_select2.html" class="nav-link">Select2 selects</a></li>
								<li class="nav-item"><a href="form_multiselect.html" class="nav-link">Bootstrap multiselect</a></li>
								<li class="nav-item"><a href="form_input_groups.html" class="nav-link">Input groups</a></li>
								<li class="nav-item"><a href="form_controls_extended.html" class="nav-link">Extended controls</a></li>
								<li class="nav-item"><a href="form_floating_labels.html" class="nav-link">Floating labels</a></li>
								<li class="nav-item"><a href="form_tag_inputs.html" class="nav-link">Tag inputs</a></li>
								<li class="nav-item"><a href="form_dual_listboxes.html" class="nav-link">Dual Listboxes</a></li>
								<li class="nav-item"><a href="form_validation.html" class="nav-link">Validation</a></li>
								<li class="nav-item"><a href="form_wizard.html" class="nav-link">Form wizard</a></li>
								<li class="nav-item"><a href="form_actions.html" class="nav-link">Form actions</a></li>
								<li class="nav-item"><a href="form_inputs_grid.html" class="nav-link">Inputs grid</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-file-css"></i> <span>JSON forms</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="JSON forms">
								<li class="nav-item"><a href="alpaca_basic.html" class="nav-link">Basic inputs</a></li>
								<li class="nav-item"><a href="alpaca_advanced.html" class="nav-link">Advanced inputs</a></li>
								<li class="nav-item"><a href="alpaca_controls.html" class="nav-link">Controls</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-spell-check"></i> <span>Text editors</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Text editors">
								<li class="nav-item"><a href="editor_summernote.html" class="nav-link">Summernote editor</a></li>
								<li class="nav-item"><a href="editor_ckeditor.html" class="nav-link">CKEditor</a></li>
								<li class="nav-item"><a href="editor_trumbowyg.html" class="nav-link">Trumbowyg editor</a></li>
								<li class="nav-item"><a href="editor_code.html" class="nav-link">Code editor</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-select2"></i> <span>Pickers</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Pickers">
								<li class="nav-item"><a href="picker_date.html" class="nav-link">Date &amp; time pickers</a></li>
								<li class="nav-item"><a href="picker_color.html" class="nav-link">Color pickers</a></li>
								<li class="nav-item"><a href="picker_location.html" class="nav-link">Location pickers</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Form layouts</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form layouts">
								<li class="nav-item"><a href="form_layout_vertical.html" class="nav-link">Vertical form</a></li>
								<li class="nav-item"><a href="form_layout_vertical_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="form_layout_horizontal.html" class="nav-link">Horizontal form</a></li>
								<li class="nav-item"><a href="form_layout_horizontal_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<!-- /forms -->

						<!-- Components -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Components</div> <i class="icon-menu" title="Components"></i></li>
						<li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
							<a href="#" class="nav-link"><i class="icon-grid"></i> <span>Basic components</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic components">
								<li class="nav-item"><a href="components_modals.html" class="nav-link">Modals</a></li>
								<li class="nav-item"><a href="components_dropdowns.html" class="nav-link">Dropdown menus</a></li>
								<li class="nav-item"><a href="components_tabs.html" class="nav-link active">Tabs component</a></li>
								<li class="nav-item"><a href="components_pills.html" class="nav-link">Pills component</a></li>
								<li class="nav-item"><a href="components_collapsible.html" class="nav-link">Collapsible</a></li>
								<li class="nav-item"><a href="components_navs.html" class="nav-link">Navs</a></li>
								<li class="nav-item"><a href="components_buttons.html" class="nav-link">Buttons</a></li>
								<li class="nav-item"><a href="components_popups.html" class="nav-link">Tooltips and popovers</a></li>
								<li class="nav-item"><a href="components_alerts.html" class="nav-link">Alerts</a></li>
								<li class="nav-item"><a href="components_pagination.html" class="nav-link">Pagination</a></li>
								<li class="nav-item"><a href="components_badges.html" class="nav-link">Badges</a></li>
								<li class="nav-item"><a href="components_progress.html" class="nav-link">Progress</a></li>
								<li class="nav-item"><a href="components_breadcrumbs.html" class="nav-link">Breadcrumbs</a></li>
								<li class="nav-item"><a href="components_media.html" class="nav-link">Media objects</a></li>
								<li class="nav-item"><a href="components_scrollspy.html" class="nav-link">Scrollspy</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-puzzle2"></i> <span>Content styling</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Content styling">
								<li class="nav-item"><a href="content_page_header.html" class="nav-link">Page header</a></li>
								<li class="nav-item"><a href="content_page_footer.html" class="nav-link disabled">Page footer <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="content_cards.html" class="nav-link">Cards</a></li>
								<li class="nav-item"><a href="content_cards_content.html" class="nav-link">Card content</a></li>
								<li class="nav-item"><a href="content_cards_layouts.html" class="nav-link">Card layouts</a></li>
								<li class="nav-item"><a href="content_cards_header.html" class="nav-link">Card header elements</a></li>
								<li class="nav-item"><a href="content_cards_footer.html" class="nav-link">Card footer elements</a></li>
								<li class="nav-item"><a href="content_cards_draggable.html" class="nav-link">Draggable cards</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="content_text_styling.html" class="nav-link">Text styling</a></li>
								<li class="nav-item"><a href="content_typography.html" class="nav-link">Typography</a></li>
								<li class="nav-item"><a href="content_helpers.html" class="nav-link">Helper classes</a></li>
								<li class="nav-item"><a href="content_helpers_flex.html" class="nav-link">Flex utilities</a></li>
								<li class="nav-item"><a href="content_syntax_highlighter.html" class="nav-link">Syntax highlighter</a></li>
								<li class="nav-item"><a href="content_grid.html" class="nav-link">Grid system</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-gift"></i> <span>Extra components</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Extra components">
								<li class="nav-item"><a href="extra_pnotify.html" class="nav-link">PNotify notifications</a></li>
								<li class="nav-item"><a href="extra_jgrowl_noty.html" class="nav-link">jGrowl and Noty notifications</a></li>
								<li class="nav-item"><a href="extra_sweetalert.html" class="nav-link">SweetAlert notifications</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="extra_sliders_noui.html" class="nav-link">NoUI sliders</a></li>
								<li class="nav-item"><a href="extra_sliders_ion.html" class="nav-link">Ion range sliders</a></li>
								<li class="nav-item"><a href="extra_trees.html" class="nav-link">Dynamic tree views</a></li>
								<li class="nav-item"><a href="extra_context_menu.html" class="nav-link">Context menu</a></li>
								<li class="nav-item"><a href="extra_fab.html" class="nav-link">Floating action buttons</a></li>
								<li class="nav-item"><a href="extra_session_timeout.html" class="nav-link">Session timeout</a></li>
								<li class="nav-item"><a href="extra_idle_timeout.html" class="nav-link">Idle timeout</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-droplet2"></i> <span>Color system</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Color system">
								<li class="nav-item"><a href="colors_primary.html" class="nav-link">Primary palette</a></li>
								<li class="nav-item"><a href="colors_danger.html" class="nav-link">Danger palette</a></li>
								<li class="nav-item"><a href="colors_success.html" class="nav-link">Success palette</a></li>
								<li class="nav-item"><a href="colors_warning.html" class="nav-link">Warning palette</a></li>
								<li class="nav-item"><a href="colors_info.html" class="nav-link">Info palette</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="colors_pink.html" class="nav-link">Pink palette</a></li>
								<li class="nav-item"><a href="colors_violet.html" class="nav-link">Violet palette</a></li>
								<li class="nav-item"><a href="colors_purple.html" class="nav-link">Purple palette</a></li>
								<li class="nav-item"><a href="colors_indigo.html" class="nav-link">Indigo palette</a></li>
								<li class="nav-item"><a href="colors_blue.html" class="nav-link">Blue palette</a></li>
								<li class="nav-item"><a href="colors_teal.html" class="nav-link">Teal palette</a></li>
								<li class="nav-item"><a href="colors_green.html" class="nav-link">Green palette</a></li>
								<li class="nav-item"><a href="colors_orange.html" class="nav-link">Orange palette</a></li>
								<li class="nav-item"><a href="colors_brown.html" class="nav-link">Brown palette</a></li>
								<li class="nav-item"><a href="colors_grey.html" class="nav-link">Grey palette</a></li>
								<li class="nav-item"><a href="colors_slate.html" class="nav-link">Slate palette</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-spinner2 spinner"></i> <span>Animations</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Animations">
								<li class="nav-item"><a href="animations_css3.html" class="nav-link">CSS3 animations</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Velocity animations</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="animations_velocity_basic.html" class="nav-link">Basic usage</a></li>
										<li class="nav-item"><a href="animations_velocity_ui.html" class="nav-link">UI pack effects</a></li>
										<li class="nav-item"><a href="animations_velocity_examples.html" class="nav-link">Advanced examples</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-thumbs-up2"></i> <span>Icons</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Icons">
								<li class="nav-item"><a href="icons_icomoon.html" class="nav-link">Icomoon</a></li>
								<li class="nav-item"><a href="icons_material.html" class="nav-link">Material</a></li>
								<li class="nav-item"><a href="icons_fontawesome.html" class="nav-link">Font awesome</a></li>
							</ul>
						</li>
						<!-- /components -->

						<!-- Layout -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Layout</div> <i class="icon-menu" title="Layout options"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Page layouts</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Page layouts">
								<li class="nav-item"><a href="layout_fixed_navbar.html" class="nav-link">Fixed navbar</a></li>
								<li class="nav-item"><a href="layout_fixed_sidebar_custom.html" class="nav-link">Fixed sidebar - custom scroll</a></li>
								<li class="nav-item"><a href="layout_fixed_sidebar_native.html" class="nav-link">Fixed sidebar - native scroll</a></li>
								<li class="nav-item"><a href="layout_fixed_hideable_navbar.html" class="nav-link">Hideable navbar</a></li>
								<li class="nav-item"><a href="layout_fixed_footer.html" class="nav-link">Fixed footer</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="layout_boxed_default.html" class="nav-link">Boxed with default sidebar</a></li>
								<li class="nav-item"><a href="layout_boxed_mini.html" class="nav-link">Boxed with mini sidebar</a></li>
								<li class="nav-item"><a href="layout_boxed_full.html" class="nav-link">Boxed full width</a></li>
								<li class="nav-item"><a href="layout_boxed_content.html" class="nav-link">Boxed content</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-indent-decrease2"></i> <span>Sidebars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Sidebars">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Main sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_default_collapse.html" class="nav-link">Default collapsible</a></li>
										<li class="nav-item"><a href="sidebar_default_hide.html" class="nav-link">Default hideable</a></li>
										<li class="nav-item"><a href="sidebar_default_hidden.html" class="nav-link">Default hidden</a></li>
										<li class="nav-item"><a href="sidebar_mini_collapse.html" class="nav-link">Mini collapsible</a></li>
										<li class="nav-item"><a href="sidebar_mini_hide.html" class="nav-link">Mini hideable</a></li>
										<li class="nav-item"><a href="sidebar_mini_hidden.html" class="nav-link">Mini hidden</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_default_color_light.html" class="nav-link">Light color</a></li>
										<li class="nav-item"><a href="sidebar_default_color_custom.html" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Secondary sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_secondary_after.html" class="nav-link">After default</a></li>
										<li class="nav-item"><a href="sidebar_secondary_before.html" class="nav-link">Before default</a></li>
										<li class="nav-item"><a href="sidebar_secondary_hidden.html" class="nav-link">Hidden by default</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_secondary_color_dark.html" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_secondary_color_custom.html" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Right sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_right_default_collapse.html" class="nav-link">Show - collapse main</a></li>
										<li class="nav-item"><a href="sidebar_right_default_hide.html" class="nav-link">Show - hide main</a></li>
										<li class="nav-item"><a href="sidebar_right_default_toggle.html" class="nav-link">Show - fix default width</a></li>
										<li class="nav-item"><a href="sidebar_right_mini_toggle.html" class="nav-link">Show - fix mini width</a></li>
										<li class="nav-item"><a href="sidebar_right_secondary_hide.html" class="nav-link">Show - hide secondary</a></li>
										<li class="nav-item"><a href="sidebar_right_visible.html" class="nav-link">Visible by default</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_right_color_dark.html" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_right_color_custom.html" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_content_left.html" class="nav-link">Left position</a></li>
										<li class="nav-item"><a href="sidebar_content_left_stretch.html" class="nav-link">Left stretched</a></li>
										<li class="nav-item"><a href="sidebar_content_left_hidden.html" class="nav-link">Left hidden</a></li>
										<li class="nav-item"><a href="sidebar_content_right.html" class="nav-link">Right position</a></li>
										<li class="nav-item"><a href="sidebar_content_right_stretch.html" class="nav-link">Right stretched</a></li>
										<li class="nav-item"><a href="sidebar_content_right_hidden.html" class="nav-link">Right hidden</a></li>
										<li class="nav-item"><a href="sidebar_content_sections.html" class="nav-link">Sectioned sidebar</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_content_color_dark.html" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_content_color_custom.html" class="nav-link">Custom color</a></li>
										<li class="nav-item"><a href="sidebar_content_color_sections_custom.html" class="nav-link">Custom sections color</a></li>
									</ul>
								</li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="sidebar_components.html" class="nav-link">Sidebar components</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-menu3"></i> <span>Navbars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Navbars">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Single navbar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_single_top_static.html" class="nav-link">Single top static</a></li>
										<li class="nav-item"><a href="navbar_single_top_fixed.html" class="nav-link">Single top fixed</a></li>
										<li class="nav-item"><a href="navbar_single_bottom_static.html" class="nav-link">Single bottom static</a></li>
										<li class="nav-item"><a href="navbar_single_bottom_fixed.html" class="nav-link">Single bottom fixed</a></li>
										<li class="nav-item"><a href="navbar_single_header_before.html" class="nav-link">Before page header</a></li>
										<li class="nav-item"><a href="navbar_single_header_after.html" class="nav-link">After page header</a></li>
										<li class="nav-item"><a href="navbar_single_content_after.html" class="nav-link">After page content</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Multiple navbars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_multiple_top_static.html" class="nav-link">Multiple top static</a></li>
										<li class="nav-item"><a href="navbar_multiple_top_fixed.html" class="nav-link">Multiple top fixed</a></li>
										<li class="nav-item"><a href="navbar_multiple_bottom_static.html" class="nav-link">Multiple bottom static</a></li>
										<li class="nav-item"><a href="navbar_multiple_bottom_fixed.html" class="nav-link">Multiple bottom fixed</a></li>
										<li class="nav-item"><a href="navbar_multiple_top_bottom.html" class="nav-link">Multiple - top and bottom</a></li>
										<li class="nav-item"><a href="navbar_multiple_secondary_sticky.html" class="nav-link">Multiple - secondary sticky</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content navbar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_component_single.html" class="nav-link">Single navbar</a></li>
										<li class="nav-item"><a href="navbar_component_multiple.html" class="nav-link">Multiple navbars</a></li>
									</ul>
								</li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="navbar_colors.html" class="nav-link">Color options</a></li>
								<li class="nav-item"><a href="navbar_sizes.html" class="nav-link">Sizing options</a></li>
								<li class="nav-item"><a href="navbar_hideable.html" class="nav-link">Hide on scroll</a></li>
								<li class="nav-item"><a href="navbar_components.html" class="nav-link">Navbar components</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-sort"></i> <span>Vertical navigation</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Vertical navigation">
								<li class="nav-item"><a href="navigation_vertical_collapsible.html" class="nav-link">Collapsible menu</a></li>
								<li class="nav-item"><a href="navigation_vertical_accordion.html" class="nav-link">Accordion menu</a></li>
								<li class="nav-item"><a href="navigation_vertical_bordered.html" class="nav-link">Bordered navigation</a></li>
								<li class="nav-item"><a href="navigation_vertical_right_icons.html" class="nav-link">Right icons</a></li>
								<li class="nav-item"><a href="navigation_vertical_badges.html" class="nav-link">Badges</a></li>
								<li class="nav-item"><a href="navigation_vertical_disabled.html" class="nav-link">Disabled items</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-transmission"></i> <span>Horizontal navigation</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Horizontal navigation">
								<li class="nav-item"><a href="navigation_horizontal_click.html" class="nav-link">Submenu on click</a></li>
								<li class="nav-item"><a href="navigation_horizontal_hover.html" class="nav-link">Submenu on hover</a></li>
								<li class="nav-item"><a href="navigation_horizontal_elements.html" class="nav-link">With custom elements</a></li>
								<li class="nav-item"><a href="navigation_horizontal_tabs.html" class="nav-link">Tabbed navigation</a></li>
								<li class="nav-item"><a href="navigation_horizontal_disabled.html" class="nav-link">Disabled navigation links</a></li>
								<li class="nav-item"><a href="navigation_horizontal_mega.html" class="nav-link">Horizontal mega menu</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>Menu levels</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> Second level</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link"><i class="icon-firefox"></i> Second level with child</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-android"></i> Third level</a></li>
										<li class="nav-item nav-item-submenu">
											<a href="#" class="nav-link"><i class="icon-apple2"></i> Third level with child</a>
											<ul class="nav nav-group-sub">
												<li class="nav-item"><a href="#" class="nav-link"><i class="icon-html5"></i> Fourth level</a></li>
												<li class="nav-item"><a href="#" class="nav-link"><i class="icon-css3"></i> Fourth level</a></li>
											</ul>
										</li>
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-windows"></i> Third level</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> Second level</a></li>
							</ul>
						</li>
						<!-- /layout -->

						<!-- Data visualization -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Data visualization</div> <i class="icon-menu" title="Data visualization"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-graph"></i> <span>Echarts library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="ECharts library">
								<li class="nav-item"><a href="echarts_lines.html" class="nav-link">Line charts</a></li>
								<li class="nav-item"><a href="echarts_areas.html" class="nav-link">Area charts</a></li>
								<li class="nav-item"><a href="echarts_columns_waterfalls.html" class="nav-link">Columns and waterfalls</a></li>
								<li class="nav-item"><a href="echarts_bars_tornados.html" class="nav-link">Bars and tornados</a></li>
								<li class="nav-item"><a href="echarts_scatter.html" class="nav-link">Scatter charts</a></li>
								<li class="nav-item"><a href="echarts_pies_donuts.html" class="nav-link">Pies and donuts</a></li>
								<li class="nav-item"><a href="echarts_funnels_calendars.html" class="nav-link">Funnels and calendars</a></li>
								<li class="nav-item"><a href="echarts_candlesticks_others.html" class="nav-link">Candlesticks and others</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-statistics"></i> <span>D3 library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="D3 library">
								<li class="nav-item"><a href="d3_lines_basic.html" class="nav-link">Simple lines</a></li>
								<li class="nav-item"><a href="d3_lines_advanced.html" class="nav-link">Advanced lines</a></li>
								<li class="nav-item"><a href="d3_bars_basic.html" class="nav-link">Simple bars</a></li>
								<li class="nav-item"><a href="d3_bars_advanced.html" class="nav-link">Advanced bars</a></li>
								<li class="nav-item"><a href="d3_pies.html" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="d3_circle_diagrams.html" class="nav-link">Circle diagrams</a></li>
								<li class="nav-item"><a href="d3_tree.html" class="nav-link">Tree layout</a></li>
								<li class="nav-item"><a href="d3_other.html" class="nav-link">Other charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stats-dots"></i> <span>Dimple library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Dimple library">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Line charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_lines_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_lines_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Bar charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_bars_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_bars_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Area charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_area_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_area_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Step charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_step_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_step_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="dimple_pies.html" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="dimple_rings.html" class="nav-link">Ring charts</a></li>
								<li class="nav-item"><a href="dimple_scatter.html" class="nav-link">Scatter charts</a></li>
								<li class="nav-item"><a href="dimple_bubble.html" class="nav-link">Bubble charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stats-bars"></i> <span>C3 library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="C3 library">
								<li class="nav-item"><a href="c3_lines_areas.html" class="nav-link">Lines and areas</a></li>
								<li class="nav-item"><a href="c3_bars_pies.html" class="nav-link">Bars and pies</a></li>
								<li class="nav-item"><a href="c3_advanced.html" class="nav-link">Advanced examples</a></li>
								<li class="nav-item"><a href="c3_axis.html" class="nav-link">Chart axis</a></li>
								<li class="nav-item"><a href="c3_grid.html" class="nav-link">Grid options</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-google"></i> <span>Google charts</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Google charts">
								<li class="nav-item"><a href="google_lines.html" class="nav-link">Line charts</a></li>
								<li class="nav-item"><a href="google_bars.html" class="nav-link">Bar charts</a></li>
								<li class="nav-item"><a href="google_pies.html" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="google_scatter_bubble.html" class="nav-link">Bubble &amp; scatter charts</a></li>
								<li class="nav-item"><a href="google_other.html" class="nav-link">Other charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-map5"></i> <span>Maps integration</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Maps integration">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Google maps</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="maps_google_basic.html" class="nav-link">Basics</a></li>
										<li class="nav-item"><a href="maps_google_controls.html" class="nav-link">Controls</a></li>
										<li class="nav-item"><a href="maps_google_markers.html" class="nav-link">Markers</a></li>
										<li class="nav-item"><a href="maps_google_drawings.html" class="nav-link">Map drawings</a></li>
										<li class="nav-item"><a href="maps_google_layers.html" class="nav-link ">Layers</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="maps_vector.html" class="nav-link">Vector maps</a></li>
								<li class="nav-item"><a href="maps_echarts.html" class="nav-link disabled">ECharts maps <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<!-- /data visualization -->

						<!-- Extensions -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Extensions</div> <i class="icon-menu" title="Extensions"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-puzzle4"></i> <span>Extensions</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Extensions">
								<li class="nav-item"><a href="extension_image_cropper.html" class="nav-link">Image cropper</a></li>
								<li class="nav-item"><a href="extension_blockui.html" class="nav-link">Block UI</a></li>
								<li class="nav-item"><a href="extension_dnd.html" class="nav-link">Drag and drop</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-popout"></i> <span>JQuery UI</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="jQuery UI">
								<li class="nav-item"><a href="jqueryui_interactions.html" class="nav-link">Interactions</a></li>
								<li class="nav-item"><a href="jqueryui_forms.html" class="nav-link">Forms</a></li>
								<li class="nav-item"><a href="jqueryui_components.html" class="nav-link">Components</a></li>
								<li class="nav-item"><a href="jqueryui_sliders.html" class="nav-link">Sliders</a></li>
								<li class="nav-item"><a href="jqueryui_navigation.html" class="nav-link">Navigation</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-upload"></i> <span>File uploaders</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="File uploaders">
								<li class="nav-item"><a href="uploader_plupload.html" class="nav-link">Plupload</a></li>
								<li class="nav-item"><a href="uploader_bootstrap.html" class="nav-link">Bootstrap file uploader</a></li>
								<li class="nav-item"><a href="uploader_dropzone.html" class="nav-link">Dropzone</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-calendar3"></i> <span>Event calendars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Event calendars">
								<li class="nav-item"><a href="fullcalendar_views.html" class="nav-link">Basic views</a></li>
								<li class="nav-item"><a href="fullcalendar_styling.html" class="nav-link">Event styling</a></li>
								<li class="nav-item"><a href="fullcalendar_formats.html" class="nav-link">Language and time</a></li>
								<li class="nav-item"><a href="fullcalendar_advanced.html" class="nav-link">Advanced usage</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-sphere"></i> <span>Internationalization</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Internationalization">
								<li class="nav-item"><a href="internationalization_switch_direct.html" class="nav-link">Direct translation</a></li>
								<li class="nav-item"><a href="internationalization_switch_query.html" class="nav-link">Querystring parameter</a></li>
								<li class="nav-item"><a href="internationalization_fallback.html" class="nav-link">Language fallback</a></li>
								<li class="nav-item"><a href="internationalization_callbacks.html" class="nav-link">Callbacks</a></li>
							</ul>
						</li>
						<!-- /extensions -->

						<!-- Tables -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Tables</div> <i class="icon-menu" title="Tables"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-table2"></i> <span>Basic tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic tables">
								<li class="nav-item"><a href="table_basic.html" class="nav-link">Basic examples</a></li>
								<li class="nav-item"><a href="table_sizing.html" class="nav-link">Table sizing</a></li>
								<li class="nav-item"><a href="table_borders.html" class="nav-link">Table borders</a></li>
								<li class="nav-item"><a href="table_styling.html" class="nav-link">Table styling</a></li>
								<li class="nav-item"><a href="table_elements.html" class="nav-link">Table elements</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid7"></i> <span>Data tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Data tables">
								<li class="nav-item"><a href="datatable_basic.html" class="nav-link">Basic initialization</a></li>
								<li class="nav-item"><a href="datatable_styling.html" class="nav-link">Basic styling</a></li>
								<li class="nav-item"><a href="datatable_advanced.html" class="nav-link">Advanced examples</a></li>
								<li class="nav-item"><a href="datatable_sorting.html" class="nav-link">Sorting options</a></li>
								<li class="nav-item"><a href="datatable_api.html" class="nav-link">Using API</a></li>
								<li class="nav-item"><a href="datatable_data_sources.html" class="nav-link">Data sources</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-alignment-unalign"></i> <span>Data tables extensions</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Data tables extensions">
								<li class="nav-item"><a href="datatable_extension_reorder.html" class="nav-link">Columns reorder</a></li>
								<li class="nav-item"><a href="datatable_extension_row_reorder.html" class="nav-link">Row reorder</a></li>
								<li class="nav-item"><a href="datatable_extension_fixed_columns.html" class="nav-link">Fixed columns</a></li>
								<li class="nav-item"><a href="datatable_extension_fixed_header.html" class="nav-link">Fixed header</a></li>
								<li class="nav-item"><a href="datatable_extension_autofill.html" class="nav-link">Auto fill</a></li>
								<li class="nav-item"><a href="datatable_extension_key_table.html" class="nav-link">Key table</a></li>
								<li class="nav-item"><a href="datatable_extension_scroller.html" class="nav-link">Scroller</a></li>
								<li class="nav-item"><a href="datatable_extension_select.html" class="nav-link">Select</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Buttons</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="datatable_extension_buttons_init.html" class="nav-link">Initialization</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_flash.html" class="nav-link">Flash buttons</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_print.html" class="nav-link">Print buttons</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_html5.html" class="nav-link">HTML5 buttons</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="datatable_extension_colvis.html" class="nav-link">Columns visibility</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-file-spreadsheet"></i> <span>Handsontable</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Handsontable">
								<li class="nav-item"><a href="handsontable_basic.html" class="nav-link">Basic configuration</a></li>
								<li class="nav-item"><a href="handsontable_advanced.html" class="nav-link">Advanced setup</a></li>
								<li class="nav-item"><a href="handsontable_cols.html" class="nav-link">Column features</a></li>
								<li class="nav-item"><a href="handsontable_cells.html" class="nav-link">Cell features</a></li>
								<li class="nav-item"><a href="handsontable_types.html" class="nav-link">Basic cell types</a></li>
								<li class="nav-item"><a href="handsontable_custom_checks.html" class="nav-link">Custom &amp; checkboxes</a></li>
								<li class="nav-item"><a href="handsontable_ac_password.html" class="nav-link">Autocomplete &amp; password</a></li>
								<li class="nav-item"><a href="handsontable_search.html" class="nav-link">Search</a></li>
								<li class="nav-item"><a href="handsontable_context.html" class="nav-link">Context menu</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-versions"></i> <span>Responsive tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Responsive tables">
								<li class="nav-item"><a href="table_responsive.html" class="nav-link">Responsive basic tables</a></li>
								<li class="nav-item"><a href="datatable_responsive.html" class="nav-link">Responsive data tables</a></li>
							</ul>
						</li>
						<!-- /tables -->

						<!-- Page kits -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Page kits</div> <i class="icon-menu" title="Page kits"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid6"></i> <span>General pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="General pages">
								<li class="nav-item"><a href="general_feed.html" class="nav-link">Feed</a></li>
								<li class="nav-item"><a href="general_embeds.html" class="nav-link">Embeds</a></li>
								<li class="nav-item"><a href="general_faq.html" class="nav-link">FAQ page</a></li>
								<li class="nav-item"><a href="general_knowledgebase.html" class="nav-link">Knowledgebase</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Blog</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="blog_classic_v.html" class="nav-link">Classic vertical</a></li>
										<li class="nav-item"><a href="blog_classic_h.html" class="nav-link">Classic horizontal</a></li>
										<li class="nav-item"><a href="blog_grid.html" class="nav-link">Grid</a></li>
										<li class="nav-item"><a href="blog_single.html" class="nav-link">Single post</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="blog_sidebar_left.html" class="nav-link">Left sidebar</a></li>
										<li class="nav-item"><a href="blog_sidebar_right.html" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Timelines</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="timelines_left.html" class="nav-link">Left timeline</a></li>
										<li class="nav-item"><a href="timelines_right.html" class="nav-link">Right timeline</a></li>
										<li class="nav-item"><a href="timelines_center.html" class="nav-link">Centered timeline</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Gallery</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="gallery_grid.html" class="nav-link">Media grid</a></li>
										<li class="nav-item"><a href="gallery_titles.html" class="nav-link">Media with titles</a></li>
										<li class="nav-item"><a href="gallery_description.html" class="nav-link">Media with description</a></li>
										<li class="nav-item"><a href="gallery_library.html" class="nav-link">Media library</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-wrench3"></i> <span>Service pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Service pages">
								<li class="nav-item"><a href="service_sitemap.html" class="nav-link">Sitemap</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Invoicing</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="invoice_template.html" class="nav-link">Invoice template</a></li>
										<li class="nav-item"><a href="invoice_grid.html" class="nav-link">Invoice grid</a></li>
										<li class="nav-item"><a href="invoice_archive.html" class="nav-link">Invoice archive</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Authentication</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="login_simple.html" class="nav-link">Simple login</a></li>
										<li class="nav-item"><a href="login_advanced.html" class="nav-link">More login info</a></li>
										<li class="nav-item"><a href="login_registration.html" class="nav-link">Simple registration</a></li>
										<li class="nav-item"><a href="login_registration_advanced.html" class="nav-link">More registration info</a></li>
										<li class="nav-item"><a href="login_unlock.html" class="nav-link">Unlock user</a></li>
										<li class="nav-item"><a href="login_password_recover.html" class="nav-link">Reset password</a></li>
										<li class="nav-item"><a href="login_hide_navbar.html" class="nav-link">Hide navbar</a></li>
										<li class="nav-item"><a href="login_transparent.html" class="nav-link">Transparent box</a></li>
										<li class="nav-item"><a href="login_background.html" class="nav-link">Background option</a></li>
										<li class="nav-item"><a href="login_validation.html" class="nav-link">With validation</a></li>
										<li class="nav-item"><a href="login_tabbed.html" class="nav-link">Tabbed form</a></li>
										<li class="nav-item"><a href="login_modals.html" class="nav-link">Inside modals</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Error pages</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="error_403.html" class="nav-link">Error 403</a></li>
										<li class="nav-item"><a href="error_404.html" class="nav-link">Error 404</a></li>
										<li class="nav-item"><a href="error_405.html" class="nav-link">Error 405</a></li>
										<li class="nav-item"><a href="error_500.html" class="nav-link">Error 500</a></li>
										<li class="nav-item"><a href="error_503.html" class="nav-link">Error 503</a></li>
										<li class="nav-item"><a href="error_offline.html" class="nav-link">Offline page</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-people"></i> <span>User pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="User pages">
								<li class="nav-item"><a href="user_pages_list.html" class="nav-link">User list</a></li>
								<li class="nav-item"><a href="user_pages_cards.html" class="nav-link">User cards</a></li>
								<li class="nav-item"><a href="user_pages_profile.html" class="nav-link">Simple profile</a></li>
								<li class="nav-item"><a href="user_pages_profile_tabbed.html" class="nav-link">Tabbed profile</a></li>
								<li class="nav-item"><a href="user_pages_profile_cover.html" class="nav-link">Profile with cover</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-cube3"></i> <span>Application pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Application pages">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Task manager</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="task_manager_grid.html" class="nav-link">Task grid</a></li>
										<li class="nav-item"><a href="task_manager_list.html" class="nav-link">Task list</a></li>
										<li class="nav-item"><a href="task_manager_detailed.html" class="nav-link">Task detailed</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Inbox</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="mail_list.html" class="nav-link">Mail list</a></li>
										<li class="nav-item"><a href="mail_list_detached.html" class="nav-link">Mail list (detached)</a></li>
										<li class="nav-item"><a href="mail_read.html" class="nav-link">Read mail</a></li>
										<li class="nav-item"><a href="mail_write.html" class="nav-link">Write mail</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="chat_layouts.html" class="nav-link">Chat layouts</a></li>
										<li class="nav-item"><a href="chat_options.html" class="nav-link">Chat options</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Search</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="search_basic.html" class="nav-link">Basic search results</a></li>
										<li class="nav-item"><a href="search_users.html" class="nav-link">User search results</a></li>
										<li class="nav-item"><a href="search_images.html" class="nav-link">Image search results</a></li>
										<li class="nav-item"><a href="search_videos.html" class="nav-link">Video search results</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Job search</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="job_list_cards.html" class="nav-link">Cards view</a></li>
										<li class="nav-item"><a href="job_list_list.html" class="nav-link">List view</a></li>
										<li class="nav-item"><a href="job_detailed.html" class="nav-link">Job detailed</a></li>
										<li class="nav-item"><a href="job_apply.html" class="nav-link">Apply</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Learning</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="learning_list.html" class="nav-link">List view</a></li>
										<li class="nav-item"><a href="learning_grid.html" class="nav-link">Grid view</a></li>
										<li class="nav-item"><a href="learning_detailed.html" class="nav-link">Detailed course</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Ecommerce set</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="ecommerce_product_list.html" class="nav-link">Product list</a></li>
										<li class="nav-item"><a href="ecommerce_product_grid.html" class="nav-link">Product grid</a></li>
										<li class="nav-item"><a href="ecommerce_orders_history.html" class="nav-link">Orders history</a></li>
										<li class="nav-item"><a href="ecommerce_customers.html" class="nav-link">Customers</a></li>
										<li class="nav-item"><a href="ecommerce_pricing.html" class="nav-link">Pricing tables</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-atom2"></i> <span>Widgets</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Widgets">
								<li class="nav-item"><a href="widgets_content.html" class="nav-link">Content widgets</a></li>
								<li class="nav-item"><a href="widgets_stats.html" class="nav-link">Statistics widgets</a></li>
								<li class="nav-item"><a href="widgets_menu.html" class="nav-link disabled">Menu widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item"><a href="widgets_form.html" class="nav-link disabled">Form widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Components</span> - Tabs</h4>
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
							<a href="components_tabs.html" class="breadcrumb-item">Components</a>
							<span class="breadcrumb-item active">Tabs</span>
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
			<div class="content">

				<!-- Basic tabs title -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Basic tabs layout
					</h6>
					<span class="text-muted d-block">Default tabs layout options</span>
				</div>
				<!-- /basic tabs title -->


				<!-- Basic tabs -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Basic tabs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs">
									<li class="nav-item"><a href="#basic-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#basic-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#basic-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#basic-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="basic-tab1">
										Basic tabs example using <code>.nav-tabs</code> class. Also requires base <code>.nav</code> class.
									</div>

									<div class="tab-pane fade" id="basic-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="basic-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="basic-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Basic justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-justified">
									<li class="nav-item"><a href="#basic-justified-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#basic-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#basic-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#basic-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="basic-justified-tab1">
										Easily make tabs equal widths of their parent with <code>.nav-justified</code> class.
									</div>

									<div class="tab-pane fade" id="basic-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="basic-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="basic-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /basic tabs -->


				<!-- Rounded basic tabs -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Basic rounded</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs">
									<li class="nav-item"><a href="#basic-rounded-tab1" class="nav-link rounded-top active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#basic-rounded-tab2" class="nav-link rounded-top" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link rounded-top dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#basic-rounded-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#basic-rounded-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="basic-rounded-tab1">
										Use <code>.rounded-top</code> class in <code>.nav-link</code> container to round top corners.
									</div>

									<div class="tab-pane fade" id="basic-rounded-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="basic-rounded-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="basic-rounded-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified rounded</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-justified">
									<li class="nav-item"><a href="#basic-rounded-justified-tab1" class="nav-link rounded-top active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#basic-rounded-justified-tab2" class="nav-link rounded-top" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link rounded-top dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#basic-rounded-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#basic-rounded-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="basic-rounded-justified-tab1">
										For justified tabs use <code>.nav-justified</code> added to <code>.nav</code> container.
									</div>

									<div class="tab-pane fade" id="basic-rounded-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="basic-rounded-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="basic-rounded-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /rounded basic tabs -->


				<!-- Highlighted tabs -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Highlighted tabs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight">
									<li class="nav-item"><a href="#highlight-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#highlighted-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#highlighted-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#highlighted-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="highlighted-tab1">
										Highlight top border of the active tab by adding <code>.nav-tabs-highlight</code> class.
									</div>

									<div class="tab-pane fade" id="highlighted-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="highlighted-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="highlighted-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Highlighted justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
									<li class="nav-item"><a href="#highlighted-justified-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#highlighted-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#highlighted-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#highlighted-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="highlighted-justified-tab1">
										To use in tabs with equal widths add <code>.nav-justified .nav-tabs-highlight</code> classes.
									</div>

									<div class="tab-pane fade" id="highlighted-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="highlighted-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="highlighted-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /highlighted tabs -->



				<!-- Tabs with top line -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Top line tabs
					</h6>
					<span class="text-muted d-block">Display only <code>top</code> border in active tab</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Top line tabs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-top">
									<li class="nav-item"><a href="#top-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#top-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#top-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#top-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="top-tab1">
										Add <code>top</code> border to the active tab with <code>.nav-tabs-top</code> class.
									</div>

									<div class="tab-pane fade" id="top-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="top-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="top-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Top line divided</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-top border-bottom-0">
									<li class="nav-item"><a href="#top-divided-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#top-divided-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#top-divided-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#top-divided-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="top-divided-tab1">
										Hide bottom border in top line layout by adding <code>.border-bottom-0</code> class.
									</div>

									<div class="tab-pane fade" id="top-divided-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="top-divided-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="top-divided-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Top line justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-top nav-justified">
									<li class="nav-item"><a href="#top-justified-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#top-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#top-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#top-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="top-justified-tab1">
										To use in tabs with equal widths add <code>.nav-justified .nav-tabs-top</code> classes.
									</div>

									<div class="tab-pane fade" id="top-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="top-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="top-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Top line divided/justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-top border-bottom-0 nav-justified">
									<li class="nav-item"><a href="#top-justified-divided-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#top-justified-divided-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#top-justified-divided-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#top-justified-divided-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="top-justified-divided-tab1">
										To use in tabs with equal widths add <code>.nav-justified .nav-tabs-top .border-bottom-0</code> classes.
									</div>

									<div class="tab-pane fade" id="top-justified-divided-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="top-justified-divided-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="top-justified-divided-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /tabs with top line -->



				<!-- Tabs with bottom line -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Bottom line tabs
					</h6>
					<span class="text-muted d-block">Display only <code>bottom</code> border in active tab</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bottom line tabs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item"><a href="#bottom-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#bottom-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#bottom-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#bottom-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="bottom-tab1">
										Add <code>bottom</code> border to the active tab with <code>.nav-tabs-bottom</code> class.
									</div>

									<div class="tab-pane fade" id="bottom-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="bottom-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="bottom-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bottom line divided</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-bottom border-bottom-0">
									<li class="nav-item"><a href="#bottom-divided-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#bottom-divided-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#bottom-divided-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#bottom-divided-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="bottom-divided-tab1">
										Hide bottom border in bottom line layout by adding <code>.border-bottom-0</code> class.
									</div>

									<div class="tab-pane fade" id="bottom-divided-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="bottom-divided-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="bottom-divided-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bottom line justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item"><a href="#bottom-justified-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#bottom-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#bottom-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#bottom-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="bottom-justified-tab1">
										To use in tabs with equal widths add <code>.nav-justified .nav-tabs-bottom</code> classes.
									</div>

									<div class="tab-pane fade" id="bottom-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="bottom-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="bottom-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bottom line divided/justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-bottom border-bottom-0 nav-justified">
									<li class="nav-item"><a href="#bottom-justified-divided-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#bottom-justified-divided-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#bottom-justified-divided-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#bottom-justified-divided-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="bottom-justified-divided-tab1">
										To use in tabs with equal widths add <code>.nav-justified .nav-tabs-bottom .border-bottom-0</code> classes.
									</div>

									<div class="tab-pane fade" id="bottom-justified-divided-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="bottom-justified-divided-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="bottom-justified-divided-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /tabs with bottom line -->



				<!-- Vertical tabs -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Vertical tabs
					</h6>
					<span class="text-muted d-block">Display tabs nav on left or right side</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Left side placement</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="d-md-flex">
									<ul class="nav nav-tabs nav-tabs-vertical flex-column mr-md-3 wmin-md-200 mb-md-0 border-bottom-0">
										<li class="nav-item"><a href="#vertical-left-tab1" class="nav-link active" data-toggle="tab"><i class="icon-menu7 mr-2"></i> Active</a></li>
										<li class="nav-item"><a href="#vertical-left-tab2" class="nav-link" data-toggle="tab"><i class="icon-mention mr-2"></i> Inactive</a></li>
										<li class="nav-item dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5 mr-2"></i> Dropdown</a>
											<div class="dropdown-menu">
												<a href="#vertical-left-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
												<a href="#vertical-left-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
											</div>
										</li>
									</ul>

									<div class="tab-content">
										<div class="tab-pane fade show active" id="vertical-left-tab1">
											Basic vertical tabs with left nav using <code>.nav-tabs-vertical</code> class.
										</div>

										<div class="tab-pane fade" id="vertical-left-tab2">
											Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
										</div>

										<div class="tab-pane fade" id="vertical-left-tab3">
											DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
										</div>

										<div class="tab-pane fade" id="vertical-left-tab4">
											Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Right side placement</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="d-md-flex">
									<div class="tab-content">
										<div class="tab-pane fade show active" id="vertical-right-tab1">
											Basic vertical tabs with right nav using <code>.nav-tabs-vertical nav-tabs-vertical-right</code> class.
										</div>

										<div class="tab-pane fade" id="vertical-right-tab2">
											Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
										</div>

										<div class="tab-pane fade" id="vertical-right-tab3">
											DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
										</div>

										<div class="tab-pane fade" id="vertical-right-tab4">
											Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
										</div>
									</div>

									<ul class="nav nav-tabs nav-tabs-vertical nav-tabs-vertical-right flex-column ml-md-3 wmin-md-200 mb-0 mt-3 mt-md-0 border-bottom-0">
										<li class="nav-item"><a href="#vertical-right-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
										<li class="nav-item"><a href="#vertical-right-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
										<li class="nav-item dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
											<div class="dropdown-menu">
												<a href="#vertical-right-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
												<a href="#vertical-right-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /vertical tabs -->



				<!-- Solid tabs title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Solid tabs
					</h6>
					<span class="text-muted d-block">Add visual difference to the tabs</span>
				</div>
				<!-- /solid tabs title -->


				<!-- Solid tabs -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Solid tabs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid border-0">
									<li class="nav-item"><a href="#solid-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#solid-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#solid-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#solid-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="solid-tab1">
										Add solid background color to the tabs with <code>.nav-tabs-solid .border-0</code> classes.
									</div>

									<div class="tab-pane fade" id="solid-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="solid-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="solid-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Solid justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid nav-justified border-0">
									<li class="nav-item"><a href="#solid-justified-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#solid-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#solid-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#solid-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="solid-justified-tab1">
										To use in tabs with equal widths add <code>.nav-justified .nav-tabs-solid .border-0</code> classes.
									</div>

									<div class="tab-pane fade" id="solid-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="solid-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="solid-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /solid tabs -->


				<!-- Solid bordered tabs -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Solid bordered tabs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid bg-light">
									<li class="nav-item"><a href="#solid-bordered-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#solid-bordered-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#solid-bordered-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#solid-bordered-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="solid-bordered-tab1">
										Add solid background color and border to the tabs with <code>.nav-tabs-solid</code> class. Use border helper classes to remove certain border if used as a toolbar inside card.
									</div>

									<div class="tab-pane fade" id="solid-bordered-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="solid-bordered-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="solid-bordered-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Solid bordered justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid nav-justified bg-light">
									<li class="nav-item"><a href="#solid-bordered-justified-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#solid-bordered-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#solid-bordered-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#solid-bordered-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="solid-bordered-justified-tab1">
										To use in tabs with equal widths add <code>.nav-justified .nav-tabs-solid</code> classes. Use border helper classes to remove certain border if used as a toolbar inside card.
									</div>

									<div class="tab-pane fade" id="solid-bordered-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="solid-bordered-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="solid-bordered-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /solid bordered tabs -->


				<!-- Rounded solid tabs -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Solid rounded</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid rounded border-0">
									<li class="nav-item"><a href="#solid-rounded-tab1" class="nav-link rounded-left active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#solid-rounded-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#solid-rounded-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#solid-rounded-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="solid-rounded-tab1">
										In solid tabs <code>.rounded</code> class rounds tabs container and <code>.rounded-left</code> first tab corners, <code>.border-0</code> class removes border.
									</div>

									<div class="tab-pane fade" id="solid-rounded-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="solid-rounded-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="solid-rounded-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Rounded justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid nav-justified rounded border-0">
									<li class="nav-item"><a href="#solid-rounded-justified-tab1" class="nav-link rounded-left active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#solid-rounded-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link rounded-right dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#solid-rounded-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#solid-rounded-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="solid-rounded-justified-tab1">
										For justified tabs use <code>.nav-justified .nav-tabs-solid .border-0</code> classes and <code>.rounded-left/.rounded-right</code> classes in the first/last items.
									</div>

									<div class="tab-pane fade" id="solid-rounded-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="solid-rounded-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="solid-rounded-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /rounded solid tabs -->


				<!-- Rounded solid bordered tabs -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Solid bordered/rounded</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid rounded bg-light">
									<li class="nav-item"><a href="#solid-rounded-bordered-tab1" class="nav-link rounded-left active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#solid-rounded-bordered-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#solid-rounded-bordered-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#solid-rounded-bordered-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="solid-rounded-bordered-tab1">
										Solid tabs have border by default - <code>.rounded</code> class rounds tabs nav container and <code>.rounded-left</code> first tab corners.
									</div>

									<div class="tab-pane fade" id="solid-rounded-bordered-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="solid-rounded-bordered-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="solid-rounded-bordered-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bordered/rounded justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid nav-justified rounded bg-light">
									<li class="nav-item"><a href="#solid-rounded-bordered-justified-tab1" class="nav-link rounded-left active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#solid-rounded-bordered-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link rounded-right dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#solid-rounded-bordered-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#solid-rounded-bordered-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="solid-rounded-bordered-justified-tab1">
										Solid tabs have border by default - <code>.rounded</code> class rounds tabs container and <code>.rounded-left/.rounded-right</code> first/last tabs.
									</div>

									<div class="tab-pane fade" id="solid-rounded-bordered-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="solid-rounded-bordered-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="solid-rounded-bordered-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /rounded solid bordered tabs -->


				<!-- Colored tabs -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Colored tabs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid bg-teal-400 border-0">
									<li class="nav-item"><a href="#colored-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#colored-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#colored-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#colored-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="colored-tab1">
										Add <code>custom</code> background color to the tabs using <code>.bg-* .border-0</code> classes.
									</div>

									<div class="tab-pane fade" id="colored-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="colored-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="colored-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Colored justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid bg-teal-400 border-0 nav-justified">
									<li class="nav-item"><a href="#colored-justified-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#colored-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#colored-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#colored-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="colored-justified-tab1">
										To use in tabs with equal widths add <code>.nav-justified .bg-* .border-0</code> classes.
									</div>

									<div class="tab-pane fade" id="colored-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="colored-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="colored-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /colored tabs -->


				<!-- Rounded colored tabs -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Colored rounded</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid bg-slate border-0 nav-tabs-component rounded">
									<li class="nav-item"><a href="#colored-rounded-tab1" class="nav-link active rounded-left" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#colored-rounded-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#colored-rounded-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#colored-rounded-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="colored-rounded-tab1">
										In solid tabs <code>.rounded</code> class rounds tabs container and <code>.rounded-left</code> first tab corners, <code>.border-0</code> class removes border.
									</div>

									<div class="tab-pane fade" id="colored-rounded-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="colored-rounded-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="colored-rounded-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Rounded justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid bg-slate border-0 nav-justified rounded">
									<li class="nav-item"><a href="#colored-rounded-justified-tab1" class="nav-link rounded-left active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#colored-rounded-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link rounded-right dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#colored-rounded-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#colored-rounded-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="colored-rounded-justified-tab1">
										For justified tabs use <code>.nav-justified .nav-tabs-solid .bg-*</code> classes and <code>.rounded-left/.rounded-right</code> classes in the first/last items.
									</div>

									<div class="tab-pane fade" id="colored-rounded-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="colored-rounded-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="colored-rounded-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /rounded colored tabs -->



				<!-- Tab options title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Other tab options
					</h6>
					<span class="text-muted d-block">Animations, position, borders, content</span>
				</div>
				<!-- /tab options title -->


				<!-- Tabs position -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Centered position</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight justify-content-center">
									<li class="nav-item"><a href="#centered-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#centered-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#centered-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#centered-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="centered-tab1">
										To use centered tabs, add <code>.justify-content-center</code> to the <code>.nav-tabs</code> class.
									</div>

									<div class="tab-pane fade" id="centered-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="centered-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="centered-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Right position</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight justify-content-end">
									<li class="nav-item"><a href="#right-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#right-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#right-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#right-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="right-tab1">
										To use right aligned tabs, add <code>.justify-content-end</code> to the <code>.nav-tabs</code> class.
									</div>

									<div class="tab-pane fade" id="right-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="right-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="right-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /tabs position -->


				<!-- Bordered tab content -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bordered tab content</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight mb-0">
									<li class="nav-item"><a href="#bordered-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#bordered-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#bordered-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#bordered-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content card card-body border-top-0 rounded-top-0 mb-0">
									<div class="tab-pane fade show active" id="bordered-tab1">
										To add border and padding to the tab content, add <code>.card</code> classes to the <code>.tab-content</code> container.
									</div>

									<div class="tab-pane fade" id="bordered-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="bordered-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="bordered-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bordered justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight nav-justified mb-0">
									<li class="nav-item"><a href="#bordered-justified-tab1" class="nav-link active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#bordered-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#bordered-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#bordered-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content card card-body border-top-0 rounded-0 rounded-bottom mb-0">
									<div class="tab-pane fade show active" id="bordered-justified-tab1">
										To use in tabs with equal widths add <code>.nav-justified</code> and <code>.card</code> classes to <code>.tab-content</code> container.
									</div>

									<div class="tab-pane fade" id="bordered-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="bordered-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="bordered-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /bordered tab content -->



				<!-- Tab icons -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Tabs with icons
					</h6>
					<span class="text-muted d-block">Show icons in different positions</span>
				</div>
				<!-- /tab icons title -->


				<!-- Left icons -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Tabs with left icons</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight">
									<li class="nav-item"><a href="#left-icon-tab1" class="nav-link active" data-toggle="tab"><i class="icon-menu7 mr-2"></i> Active</a></li>
									<li class="nav-item"><a href="#left-icon-tab2" class="nav-link" data-toggle="tab"><i class="icon-mention mr-2"></i> Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-gear mr-2"></i> Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#left-icon-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#left-icon-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="left-icon-tab1">
										Add icon markup <code>before</code> tab nav text to display icons on the left side.
									</div>

									<div class="tab-pane fade" id="left-icon-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="left-icon-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="left-icon-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified tabs. Left icons</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
									<li class="nav-item"><a href="#justified-left-icon-tab1" class="nav-link active" data-toggle="tab"><i class="icon-menu7 mr-2"></i> Active</a></li>
									<li class="nav-item"><a href="#justified-left-tab2" class="nav-link" data-toggle="tab"><i class="icon-mention mr-2"></i> Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-gear mr-2"></i> Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#justified-left-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#justified-left-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="justified-left-tab1">
										To use in tabs with equal widths add <code>.nav-justified</code> and icon markup to the tab nav.
									</div>

									<div class="tab-pane fade" id="justified-left-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="justified-left-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="justified-left-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /left icons -->


				<!-- Right icons -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Tabs with right icons</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight">
									<li class="nav-item"><a href="#right-icon-tab1" class="nav-link active" data-toggle="tab">Active <i class="icon-menu7 ml-2"></i></a></li>
									<li class="nav-item"><a href="#right-icon-tab2" class="nav-link" data-toggle="tab">Inactive <i class="icon-mention ml-2"></i></a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown <i class="icon-gear ml-2"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#right-icon-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#right-icon-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="right-icon-tab1">
										Add icon markup <code>after</code> tab nav text to display icons on the right side.
									</div>

									<div class="tab-pane fade" id="right-icon-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="right-icon-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="right-icon-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified tabs. Right icons</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item"><a href="#justified-right-icon-tab1" class="nav-link active" data-toggle="tab">Active <i class="icon-menu7 ml-2"></i></a></li>
									<li class="nav-item"><a href="#justified-right-icon-tab2" class="nav-link" data-toggle="tab">Inactive <i class="icon-mention ml-2"></i></a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown <i class="icon-gear ml-2"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#justified-right-icon-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#justified-right-icon-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="justified-right-icon-tab1">
										To use in tabs with equal widths add <code>.nav-justified</code> and icon markup to the tab nav.
									</div>

									<div class="tab-pane fade" id="justified-right-icon-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="justified-right-icon-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="justified-right-icon-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /right icons -->


				<!-- Top icons -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Tabs with top icons</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight">
									<li class="nav-item">
										<a href="#top-icon-tab1" class="nav-link active" data-toggle="tab">
											<div>
												<i class="icon-menu7 d-block mb-1 mt-1"></i>
												Active
											</div>
										</a>
									</li>
									<li class="nav-item">
										<a href="#top-icon-tab2" class="nav-link" data-toggle="tab">
											<div>
												<i class="icon-mention d-block mb-1 mt-1"></i>
												Inactive
											</div>
										</a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link" data-toggle="dropdown">
											<div>
												<i class="icon-gear d-block mb-1 mt-1"></i>
												Dropdown
											</div>
										</a>

										<div class="dropdown-menu dropdown-menu-right">
											<a href="#top-icon-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#top-icon-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="top-icon-tab1">
										To display icon on top, add icon code and <code>.d-block .mb-1 .mt-1</code> classes to icons.
									</div>

									<div class="tab-pane fade" id="top-icon-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="top-icon-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="top-icon-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified tabs. Top icons</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
									<li class="nav-item">
										<a href="#justified-top-icon-tab1" class="nav-link active" data-toggle="tab">
											<div>
												<i class="icon-menu7 d-block mb-1 mt-1"></i>
												Active
											</div>
										</a>
									</li>
									<li class="nav-item">
										<a href="#justified-top-icon-tab2" class="nav-link" data-toggle="tab">
											<div>
												<i class="icon-mention d-block mb-1 mt-1"></i>
												Inactive
											</div>
										</a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link" data-toggle="dropdown">
											<div>
												<i class="icon-gear d-block mb-1 mt-1"></i>
												Dropdown
											</div>
										</a>

										<div class="dropdown-menu dropdown-menu-right">
											<a href="#justified-top-icon-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#justified-top-icon-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="justified-top-icon-tab1">
										To use in tabs with equal widths add <code>.nav-justified</code> and icon markup to the tab nav.
									</div>

									<div class="tab-pane fade" id="justified-top-icon-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="justified-top-icon-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="justified-top-icon-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /top icons -->


				<!-- Icons only -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Tabs with icons only</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item">
										<a href="#icon-only-tab1" class="nav-link active" data-toggle="tab">
											<i class="icon-menu7"></i>
											<span class="d-md-none ml-2">Active</span>
										</a>
									</li>

									<li class="nav-item">
										<a href="#icon-only-tab2" class="nav-link" data-toggle="tab">
											<i class="icon-mention"></i>
											<span class="d-md-none ml-2">Inactive</span>
										</a>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-gear"></i>
											<span class="d-md-none ml-2">Dropdown</span>
										</a>

										<div class="dropdown-menu dropdown-menu-right">
											<a href="#icon-only-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#icon-only-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="icon-only-tab1">
										If tab nav doesn't have a text, add icon markup to display icon only.
									</div>

									<div class="tab-pane fade" id="icon-only-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="icon-only-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="icon-only-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified tabs. Icons only</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a href="#justified-icon-only-tab1" class="nav-link active" data-toggle="tab">
											<i class="icon-menu7"></i>
											<span class="d-md-none ml-2">Active</span>
										</a>
									</li>

									<li class="nav-item">
										<a href="#justified-icon-only-tab2" class="nav-link" data-toggle="tab">
											<i class="icon-mention"></i>
											<span class="d-md-none ml-2">Inactive</span>
										</a>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-gear"></i>
											<span class="d-md-none ml-2">Dropdown</span>
										</a>

										<div class="dropdown-menu dropdown-menu-right">
											<a href="#justified-icon-only-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#justified-icon-only-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="justified-icon-only-tab1">
										To use in tabs with equal widths add <code>.nav-justified</code> and icon markup to the tab nav.
									</div>

									<div class="tab-pane fade" id="justified-icon-only-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="justified-icon-only-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="justified-icon-only-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /icons only -->



				<!-- Tab badges title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Tabs with badges
					</h6>
					<span class="text-muted d-block">Display badges and pills</span>
				</div>
				<!-- /tab badges title -->


				<!-- Badges -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Tabs with badges</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight">
									<li class="nav-item"><a href="#badge-tab1" class="nav-link active" data-toggle="tab"><span class="badge badge-danger mr-2">Bug</span> Active</a></li>
									<li class="nav-item"><a href="#badge-tab2" class="nav-link" data-toggle="tab">Inactive <span class="badge bg-slate ml-2">Fixed</span></a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><span class="badge badge-info">Priority</span></a>
										<dic class="dropdown-menu dropdown-menu-right">
											<a href="#badge-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#badge-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</dic>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="badge-tab1">
										Display <code>badges</code> on the left/right sides and in empty tab nav. Empty badges are hidden.
									</div>

									<div class="tab-pane fade" id="badge-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="badge-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="badge-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified tabs with badges</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
									<li class="nav-item"><a href="#justified-badge-tab1" class="nav-link active" data-toggle="tab"><span class="badge badge-danger mr-2">Bug</span> Active</a></li>
									<li class="nav-item"><a href="#justified-badge-tab2" class="nav-link" data-toggle="tab">Inactive <span class="badge badge-info ml-2">Fixed</span></a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><span class="badge badge-success">Priority</span></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#justified-badge-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#justified-badge-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="justified-badge-tab1">
										To use in tabs with equal widths add <code>.nav-justified</code> and badge markup to the tab nav.
									</div>

									<div class="tab-pane fade" id="justified-badge-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="justified-badge-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="justified-badge-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /badges -->


				<!-- Pill badges -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Tabs with pill badges</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight">
									<li class="nav-item"><a href="#pill-badges-tab1" class="nav-link active" data-toggle="tab"><span class="badge badge-success badge-pill mr-2">78</span> Active</a></li>
									<li class="nav-item"><a href="#pill-badges-tab2" class="nav-link" data-toggle="tab">Inactive <span class="badge badge-danger badge-pill ml-2">23</span></a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><span class="badge bg-slate badge-pill">34</span></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#pill-badges-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#pill-badges-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="pill-badges-tab1">
										Display <code>pill badges</code> on the left/right sides and in empty tab nav. Empty badges are hidden.
									</div>

									<div class="tab-pane fade" id="pill-badges-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="pill-badges-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="pill-badges-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified tabs with pill badges</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
									<li class="nav-item"><a href="#justified-badges-tab1" class="nav-link active" data-toggle="tab"><span class="badge badge-danger badge-pill mr-2">87</span> Active</a></li>
									<li class="nav-item"><a href="#justified-badges-tab2" class="nav-link" data-toggle="tab">Inactive <span class="badge bg-slate badge-pill ml-2">23</span></a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><span class="badge badge-info badge-pill">34</span></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#justified-badges-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#justified-badges-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="justified-badges-tab1">
										To use in tabs with equal widths add <code>.nav-justified</code> and badge markup to the tab nav.
									</div>

									<div class="tab-pane fade" id="justified-badges-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="justified-badges-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="justified-badges-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /badges -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
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

</body>
</html>
