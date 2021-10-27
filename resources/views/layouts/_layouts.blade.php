<!doctype html>
<html lang="tr" dir="ltr">

<!-- Mirrored from www.spruko.com/demo/flaira/Flaira/LTR/Horizontal-Light/empty.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Oct 2021 18:32:22 GMT -->
<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Flaira - Bootstrap HTML Admin Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin dashboard template,admin panel template,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin panel,admin template,bootstrap admin template,dashboard template,	bootstrap admin template,premium admin templates,html admin template,ecommerce dashboard,admin panel template,bootstrap admin theme,bootstrap admin panel">

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="https://www.spruko.com/demo/flaira/Flaira/assets/images/brand/favicon.ico" />

		<!-- TITLE -->
		<title>@yield('title')</title>

		<!-- BOOTSTRAP CSS -->
		<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="/assets/css/style.css" rel="stylesheet"/>
		<link href="/assets/css/skin-modes.css" rel="stylesheet"/>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">


		<!-- SINGLE-PAGE CSS -->
		<link href="/assets/plugins/single-page/css/main.css" rel="stylesheet" type="text/css">

		<!--C3 CHARTS CSS -->
		<link href="/assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

		<!-- CUSTOM SCROLL BAR CSS-->
		<link href="/assets/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet"/>

		<!-- SELECT2 CSS -->
		<link href="/assets/plugins/select2/select2.min.css" rel="stylesheet"/>

		<!--- FONT-ICONS CSS -->
		<link href="/assets/css/icons.css" rel="stylesheet"/>


		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="/assets/colors/color1.css" />

	</head>
	<body>


		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="https://www.spruko.com/demo/flaira/Flaira/assets/images/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page h-90">
			<div class="page-main">

				<!--APP-SIDEBAR-->
				<div class="header hor-header">
					<div class="container">
						<div class="d-flex">
							<div class="">
								<a class="header-brand" href="index.html">
									<img src="/assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
									<img src="/assets/images/brand/logo-1.png" class="header-brand-img light-logo" alt="logo">
								</a><!-- LOGO -->
								<a class="header-brand header-brand1" href="index.html">
									<img src="/assets/images/brand/logo-white.png" class="header-brand-img desktop-logo" alt="logo">
									<img src="/assets/images/brand/logo-1.png" class="header-brand-img light-logo" alt="logo">
								</a><!-- LOGO -->
							</div>
							<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
							<div class="d-flex  ml-auto header-right-icons">
								<div class="d-sm-flex">
									<a href="#" class="nav-link icon search-btn">
										<i class="fe fe-search"></i>
									</a>
									<div class="search-area">
										<div class="close-btn pull-right"><button class="btn"><i class="fe fe-x"></i></button></div>
										<form>
											<div class="row">
												<div class="input-group form-btn">
													<div class="input-group-append">
														<button class="btn" type="button"><i class="fa fa-search"></i></button>
													</div>
													<input type="text" class="form-control" placeholder="Search here..." aria-label="Recipient's username" aria-describedby="button-addon2">
												</div>
											</div>
										</form>
									</div>
								</div><!-- SEARCH -->
								<div class="dropdown d-md-flex">
									<a class="nav-link icon full-screen-link nav-link-bg">
										<i class="fe fe-minimize fullscreen-button"></i>
									</a>
								</div><!-- FULL-SCREEN -->
								<div class="dropdown d-md-flex notifications">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-bell"></i>
										<span class="nav-unread badge badge-success badge-pill">2</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item text-center">Notifications</a>
										<div class="dropdown-divider"></div>
										<div class="notifications-menu">
											<a class="dropdown-item d-flex pb-3" href="#">
												<div class="fs-16 text-primary mr-3">
													<i class="fa fa-thumbs-o-up"></i>
												</div>
												<div class="">
													<strong>Event today</strong>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#">
												<div class="fs-16 text-primary mr-3">
													<i class="fa fa-commenting-o"></i>
												</div>
												<div class="">
													<strong>Settings</strong>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#">
												<div class="fs-16 text-danger mr-3">
													<i class="fa fa-cogs"></i>
												</div>
												<div class="">
													<strong>Your Admin Lanuch</strong>
												</div>
											</a>
										</div>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all Notification</a>
									</div>
								</div><!-- NOTIFICATIONS -->
								<div class="dropdown d-md-flex message">
									<a class="nav-link icon text-center" data-toggle="dropdown">
										<i class="fe fe-mail"></i>
										<span class="nav-unread badge badge-danger badge-pill">3</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="message-menu">
											<a class="dropdown-item d-flex pb-3" href="#">
												<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="/assets/images/users/1.jpg"></span>
												<div>
													<strong>Madeleine</strong> Hey! there I' am available....
													<div class="small text-muted">
														3 hours ago
													</div>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#">
												<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="/assets/images/users/12.jpg"></span>
												<div>
													<strong>Anthony</strong> New product Launching...
													<div class="small text-muted">
														5 hour ago
													</div>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#">
												<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="/assets/images/users/4.jpg"></span>
												<div>
													<strong>Olivia</strong> New Schedule Realease......
													<div class="small text-muted">
														45 mintues ago
													</div>
												</div>
											</a>
											<a class="dropdown-item d-flex pb-3" href="#">
												<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="/assets/images/users/15.jpg"></span>
												<div>
													<strong>Sanderson</strong> New Schedule Realease......
													<div class="small text-muted">
														2 days ago
													</div>
												</div>
											</a>
										</div>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">See all Messages</a>
									</div>
								</div><!-- MESSAGE-BOX -->
								<div class="dropdown profile-1">
									<a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
										<span>
											<img src="/assets/images/users/15.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="text-center">
												<h5 class="text-dark mb-0">   {{ Auth::user()->name }}</h5>
												<small class="text-muted">  {{ Auth::user()->roleId }}</small>
											</div>
										</div>
										<div class="dropdown-divider m-0"></div>

										<div class="dropdown-divider mt-0"></div>

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                      <i class="dropdown-icon mdi  mdi-logout-variant"></i>    {{ __('Çıkış Yap') }}
                                     </a>

                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                         @csrf
                                     </form>



									</div>
								</div>
								<div class="dropdown d-md-flex header-settings">
									<a href="#" class="nav-link icon " data-toggle="sidebar-right" data-target=".sidebar-right">
										<i class="fe fe-align-right"></i>
									</a>
								</div><!-- SIDE-MENU -->
							</div>
						</div>
					</div>
				</div>
				<!--APP-SIDEBAR-->

				<!--/Horizontal-main -->
@if ( Auth::user()->roleId==3)
@include('menus.user_menu')
@else
@include('menus.service_menu')

@endif
				<!--/Horizontal-main -->

				<!-- Mobile Header -->
				<div class="mobile-header">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
							<a class="header-brand" href="index.html">
								<img src="/assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
							</a>
							<a class="header-brand header-brand1" href="index.html">
								<img src="/assets/images/brand/logo-white.png" class="header-brand-img desktop-logo" alt="logo">
							</a><!-- LOGO -->
							<div class="d-flex order-lg-2 ml-auto header-right-icons">
								<button class="navbar-toggler navresponsive-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
									aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
								</button>
								<div class="dropdown profile-1">
									<a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
										<span>
											<img src="/assets/images/users/15.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="text-center">
												<h5 class="text-dark mb-0">  {{ Auth::user()->name }}</h5>
												<small class="text-muted">Administrator</small>
											</div>
										</div>
										<div class="dropdown-divider m-0"></div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon  mdi mdi-settings"></i> Settings
										</a>
										<a class="dropdown-item" href="#">
											<span class="float-right"></span>
											<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
										</a>
										<a class="dropdown-item" href="login.html">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
										</a>
									</div>
								</div>
								<div class="dropdown d-md-flex header-settings">
									<a href="#" class="nav-link icon " data-toggle="sidebar-right" data-target=".sidebar-right">
										<i class="fe fe-align-right"></i>
									</a>
								</div><!-- SIDE-MENU -->
							</div>
						</div>
					</div>
				</div>
				<div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
					<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
						<div class="d-flex order-lg-2 ml-auto">
							<div class="d-sm-flex">
								<a href="#" class="nav-link icon search-btn">
									<i class="fe fe-search"></i>
								</a>
								<div class="search-area">
									<div class="close-btn pull-right"><button class="btn"><i class="fe fe-x"></i></button></div>
									<form>
										<div class="row">
											<div class="input-group form-btn">
												<div class="input-group-append">
													<button class="btn" type="button"><i class="fa fa-search"></i></button>
												</div>
												<input type="text" class="form-control" placeholder="Search here..." aria-label="Recipient's username" aria-describedby="button-addon2">
											</div>
										</div>
									</form>
								</div>
							</div><!-- SEARCH -->
							<div class="dropdown d-md-flex">
								<a class="nav-link icon full-screen-link nav-link-bg">
									<i class="fe fe-maximize fullscreen-button"></i>
								</a>
							</div><!-- FULL-SCREEN -->
							<div class="dropdown d-md-flex notifications">
								<a class="nav-link icon" data-toggle="dropdown">
									<i class="fe fe-bell"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<div class="notifications-menu">
										<a class="dropdown-item d-flex pb-3" href="#">
											<div class="fs-16 text-success mr-3">
												<i class="fa fa-thumbs-o-up"></i>
											</div>
											<div class="">
												<strong>Someone likes our posts.</strong>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#">
											<div class="fs-16 text-primary mr-3">
												<i class="fa fa-commenting-o"></i>
											</div>
											<div class="">
												<strong>3 New Comments.</strong>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#">
											<div class="fs-16 text-danger mr-3">
												<i class="fa fa-cogs"></i>
											</div>
											<div class="">
												<strong>Server Rebooted</strong>
											</div>
										</a>
									</div>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item text-center">View all Notification</a>
								</div>
							</div><!-- NOTIFICATIONS -->
							<div class="dropdown d-md-flex message">
								<a class="nav-link icon text-center" data-toggle="dropdown">
									<i class="fe fe-mail"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<div class="message-menu">
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="/assets/images/users/1.jpg"></span>
											<div>
												<strong>Madeleine</strong> Hey! there I' am available....
												<div class="small text-muted">
													3 hours ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="/assets/images/users/12.jpg"></span>
											<div>
												<strong>Anthony</strong> New product Launching...
												<div class="small text-muted">
													5 hour ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="/assets/images/users/4.jpg"></span>
											<div>
												<strong>Olivia</strong> New Schedule Realease......
												<div class="small text-muted">
													45 mintues ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="/assets/images/users/15.jpg"></span>
											<div>
												<strong>Sanderson</strong> New Schedule Realease......
												<div class="small text-muted">
													2 days ago
												</div>
											</div>
										</a>
									</div>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item text-center">See all Messages</a>
								</div>
							</div><!-- MESSAGE-BOX -->
						</div>
					</div>
				</div>
				<!-- /Mobile Header -->

                <!--app-content open-->
				<div class="app-content">
@yield('content')
					<!-- CONTAINER CLOSED -->
				</div>
			</div>

			<!-- SIDE-BAR -->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="p-4 border-bottom">
			        <span class="fs-17">Profile Settings</span>
					<a href="#" class="sidebar-icon text-right float-right" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a>
				</div>
			   <div class="card-body p-0">
					<div class="header-user text-center mt-4 pb-4">
						<span class="avatar avatar-xxl brround"><img src="/assets/images/users/15.jpg" alt="Profile-img" class="avatar avatar-xxl brround"></span>
						<div class="dropdown-item text-center font-weight-semibold user h3 mb-0 p-0 mt-3">  {{ Auth::user()->name }}</div>
						<small>Administrator</small>
						<div class="card-body">
							<div class="form-group ">
								<label class="form-label  text-left">Offline/Online</label>
								<select class="form-control select2 " data-placeholder="Choose one">
									<option label="Choose one">
									</option>
									<option value="1">Online</option>
									<option value="2">Offline</option>
								</select>
							</div>
							<div class="form-group ">
								<label class="form-label text-left">Website</label>
								<select class="form-control select2 " data-placeholder="Choose one">
									<option label="Choose one">
									</option>
									<option value="1">Spruko.com</option>
									<option value="2">sprukosoft.com</option>
									<option value="3">sprukotechnologies.com</option>
									<option value="4">sprukoinfo.com</option>
									<option value="5">sprukotech.com</option>
								</select>
							</div>
						</div>
					</div>
					<a class="dropdown-item  border-top" href="#">
						<i class="dropdown-icon mdi mdi-account-outline "></i> Spruko technologies
					</a>
					<a class="dropdown-item border-top" href="#">
						<i class="dropdown-icon  mdi mdi-account-plus"></i> Add another Account
					</a>
					<div class="card-body border-top">
						<div class="row">
							<div class="col-4 text-center">
								<a class="" href="#"><i class="dropdown-icon mdi  mdi-message-outline fs-30 m-0 leading-tight"></i></a>
								<div>Inbox</div>
							</div>
							<div class="col-4 text-center">
								<a class="" href="#"><i class="dropdown-icon mdi mdi-tune fs-30 m-0 leading-tight"></i></a>
								<div>Settings</div>
							</div>
							<div class="col-4 text-center">
								<a class="" href="#"><i class="dropdown-icon mdi mdi-logout-variant fs-30 m-0 leading-tight"></i></a>
								<div>Sign out</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- SIDE-BAR CLOSED -->

			<!-- FOOTER -->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
							Copyright © 2019 <a href="#">Flaira</a>. Designed by <a href="#">  Spruko Technologies Pvt.Ltd </a> All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- FOOTER CLOSED -->
		</div>

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- JQUERY JS -->
		<script src="/assets/js/jquery-3.4.1.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="/assets/plugins/bootstrap/js/popper.min.js"></script>

		<!-- SPARKLINE JS-->
		<script src="/assets/js/jquery.sparkline.min.js"></script>

		<!-- CHART-CIRCLE JS-->
		<script src="/assets/js/circle-progress.min.js"></script>

		<!-- RATING STAR JS-->
		<script src="/assets/plugins/rating/jquery.rating-stars.js"></script>

		<!-- INPUT MASK JS-->
		<script src="/assets/plugins/input-mask/jquery.mask.min.js"></script>

		<!--HORIZONTAL JS-->
		<script src="/assets/plugins/horizontal-menu/horizontal-menu.js"></script>

		<!-- CUSTOM SCROLL BAR JS-->
		<script src="/assets/plugins/p-scroll/perfect-scrollbar.js"></script>

		<!-- SIDEBAR JS -->
		<script src="/assets/plugins/sidebar/sidebar.js"></script>

		<!-- STICKY JS -->
		<script src="/assets/js/stiky.js"></script>



		 <!-- SELECT2 JS -->
		 <script src="/assets/plugins/select2/select2.full.min.js"></script>


		<!-- CUSTOM JS-->
		<script src="/assets/js/custom.js"></script>

	</body>

<!-- Mirrored from www.spruko.com/demo/flaira/Flaira/LTR/Horizontal-Light/empty.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Oct 2021 18:32:22 GMT -->
</html>
