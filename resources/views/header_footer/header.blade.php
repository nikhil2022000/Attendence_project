<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="DayOne - It is one of the Major Dashboard Template which includes - HR, Employee and Job Dashboard. This template has multipurpose HTML template and also deals with Task, Project, Client and Support System Dashboard." name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="admin dashboard, admin panel template, html admin template, dashboard html template, bootstrap 5 dashboard, template admin bootstrap 5 , simple admin panel template, simple dashboard html template,  bootstrap admin panel, task dashboard, job dashboard, bootstrap admin panel, dashboards html, panel in html, bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap5 dashboard"/>

		<!-- Title -->
		<title>Dayone - Multipurpose Admin & Dashboard Template</title>

		<!--Favicon -->
		<link rel="icon" href="{{url('degine/images/brand/favicon.ico')}}" type="image/x-icon"/>



		<!-- Bootstrap css -->
		<link href="{{url('degine/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet" id="style"/>

		<!-- Style css -->
		<link href="{{url('degine/css/style.css')}}" rel="stylesheet" />
		<link href="{{url('degine/css/boxed.css')}}" rel="stylesheet" />
		<link href="{{url('degine/css/dark.css')}}" rel="stylesheet" />
		<link href="{{url('degine/css/skin-modes.css')}}" rel="stylesheet" />
		<link href="{{url('degine/css/transparent-style.css')}}" rel="stylesheet">
		<link  href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css" rel="stylesheet" />
		<!-- Animate css -->
		<link href="{{url('degine/css/animated.css')}}" rel="stylesheet" />

		<!---Icons css-->
		<link href="{{url('degine/css/icons.css')}}" rel="stylesheet" />

	</head>

	<body class="app sidebar-mini ltr">

		<!---Global-loader-->
		<div id="global-loader" >
			<img src="{{url('degine/images/svgs/loader.svg')}}" alt="loader">
		</div>
		<!---End Global-loader-->

		<div class="page">
			<div class="page-main">

				<!--app header-->
				<div class="app-header header sticky">
					<div class="container-fluid main-container">
						<div class="d-flex">
							<a class="header-brand" href="index.html">
								<img src="{{url('degine/images/brand/logo.')}}" class="header-brand-img desktop-lgo" alt="Dayonelogo">
								<img src="{{url('degine/images/brand/logo-white.png')}}" class="header-brand-img dark-logo" alt="Dayonelogo">
								<img src="{{url('degine/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Dayonelogo">
								<img src="{{url('degine/images/brand/favicon1.')}}" class="header-brand-img darkmobile-logo" alt="Dayonelogo">
							</a>
							<div class="app-sidebar__toggle" data-bs-toggle="sidebar">
								<a class="open-toggle"  href="javascript:void(0);">
									<i class="feather feather-menu"></i>
								</a>
								<a class="close-toggle"  href="javascript:void(0);">
									<i class="feather feather-x"></i>
								</a>
							</div>
							<div class="mt-0">
								<form class="form-inline">
									<div class="search-element">
										<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
										<button class="btn btn-primary-color" >
											<i class="feather feather-search"></i>
										</button>
									</div>
								</form>
							</div><!-- SEARCH -->
							<div class="d-flex order-lg-2 my-auto ms-auto">
								<button class="navbar-toggler nav-link icon navresponsive-toggler vertical-icon ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
									<i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
								</button>
								<div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
									<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
										<div class="d-flex ms-auto">
											<a class="nav-link  icon p-0 nav-link-lg d-lg-none navsearch"  href="javascript:void(0);" data-bs-toggle="search">
												<i class="feather feather-search search-icon header-icon"></i>
											</a>
											<div class="dropdown  d-flex">
												<a class="nav-link icon theme-layout nav-link-bg layout-setting">
													 <span class="dark-layout"><i class="fe fe-moon"></i></span>
													<span class="light-layout"><i class="fe fe-sun"></i></span>
												</a>
											</div>
											<div class="dropdown header-flags">
												<a class="nav-link icon" data-bs-toggle="dropdown">
													<img src="{{url('degine/images/flags/flag-png/united-kingdom.png')}}" class="h-24" alt="img">
												</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated">
													<a  href="javascript:void(0);" class="dropdown-item d-flex "> <span class="avatar  me-3 align-self-center bg-transparent"><img src="../assets/images/flags/flag-png/india.png" alt="img" class="h-24"></span>
														<div class="d-flex"> <span class="my-auto">India</span> </div>
													</a>
													<a  href="javascript:void(0);" class="dropdown-item d-flex"> <span class="avatar  me-3 align-self-center bg-transparent"><img src="../assets/images/flags/flag-png/united-kingdom.png" alt="img" class="h-24"></span>
														<div class="d-flex"> <span class="my-auto">UK</span> </div>
													</a>
													<a  href="javascript:void(0);" class="dropdown-item d-flex"> <span class="avatar me-3 align-self-center bg-transparent"><img src="../assets/images/flags/flag-png/italy.png" alt="img" class="h-24"></span>
														<div class="d-flex"> <span class="my-auto">Italy</span> </div>
													</a>
													<a  href="javascript:void(0);" class="dropdown-item d-flex"> <span class="avatar me-3 align-self-center bg-transparent"><img src="../assets/images/flags/flag-png/united-states-of-america.png" class="h-24" alt="img"></span>
														<div class="d-flex"> <span class="my-auto">US</span> </div>
													</a>
													<a  href="javascript:void(0);" class="dropdown-item d-flex"> <span class="avatar  me-3 align-self-center bg-transparent"><img src="../assets/images/flags/flag-png/spain.png" alt="img" class="h-24"></span>
														<div class="d-flex"> <span class="my-auto">Spain</span> </div>
													</a>
												</div>
											</div>
											<div class="dropdown header-fullscreen">
												<a class="nav-link icon full-screen-link">
													<i class="feather feather-maximize fullscreen-button fullscreen header-icons"></i>
													<i class="feather feather-minimize fullscreen-button exit-fullscreen header-icons"></i>
												</a>
											</div>
											<div class="dropdown header-message">
												<a class="nav-link icon" data-bs-toggle="dropdown">
													<i class="feather feather-mail header-icon"></i>
													<span class="badge badge-success side-badge">5</span>
												</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow  animated">
													<div class="header-dropdown-list message-menu" id="message-menu">
														<a class="dropdown-item border-bottom" href="chat.html">
															<div class="d-flex align-items-center">
																<div class="">
																	<span class="avatar avatar-md brround align-self-center cover-image" data-bs-image-src="../assets/images/users/1.jpg"></span>
																</div>
																<div class="d-flex">
																	<div class="ps-3 text-wrap text-break">
																		<h6 class="mb-1">Jack Wright</h6>
																		<p class="fs-13 mb-1">All the best your template awesome</p>
																		<div class="small text-muted">
																			3 hours ago
																		</div>
																	</div>
																</div>
															</div>
														</a>
														<a class="dropdown-item border-bottom" href="chat.html">
															<div class="d-flex align-items-center">
																<div class="">
																	<span class="avatar avatar-md brround align-self-center cover-image" data-bs-image-src="../assets/images/users/2.jpg"></span>
																</div>
																<div class="d-flex">
																	<div class="ps-3 text-wrap text-break">
																		<h6 class="mb-1">Lisa Rutherford</h6>
																		<p class="fs-13 mb-1">Hey! there I'm available</p>
																		<div class="small text-muted">
																			5 hour ago
																		</div>
																	</div>
																</div>
															</div>
														</a>
														<a class="dropdown-item border-bottom" href="chat.html">
															<div class="d-flex align-items-center">
																<div class="">
																	<span class="avatar avatar-md brround align-self-center cover-image" data-bs-image-src="../assets/images/users/3.jpg"></span>
																</div>
																<div class="d-flex">
																	<div class="ps-3 text-wrap text-break">
																		<h6 class="mb-1">Blake Walker</h6>
																		<p class="fs-13 mb-1">Just created a new blog post</p>
																		<div class="small text-muted">
																			45 mintues ago
																		</div>
																	</div>
																</div>
															</div>
														</a>
														<a class="dropdown-item border-bottom" href="chat.html">
															<div class="d-flex align-items-center">
																<div class="">
																	<span class="avatar avatar-md brround align-self-center cover-image" data-bs-image-src="../assets/images/users/4.jpg"></span>
																</div>
																<div class="d-flex">
																	<div class="ps-3 text-wrap text-break">
																		<h6 class="mb-1">Fiona Morrison</h6>
																		<p class="fs-13 mb-1">Added new comment on your photo</p>
																		<div class="small text-muted">
																			2 days ago
																		</div>
																	</div>
																</div>
															</div>
														</a>
														<a class="dropdown-item border-bottom" href="chat.html">
															<div class="d-flex align-items-center">
																<div class="">
																	<span class="avatar avatar-md brround align-self-center cover-image" data-bs-image-src="../assets/images/users/6.jpg"></span>
																</div>
																<div class="d-flex">
																	<div class="ps-3 text-wrap text-break">
																		<h6 class="mb-1">Stewart Bond</h6>
																		<p class="fs-13 mb-1">Your payment invoice is generated</p>
																		<div class="small text-muted">
																			3 days ago
																		</div>
																	</div>
																</div>
															</div>
														</a>
													</div>
													<div class=" text-center p-2">
														<a href="chat.html" class="">See All Messages</a>
													</div>
												</div>
											</div>
											<div class="dropdown header-notify">
												<a class="nav-link icon" data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right">
													<i class="feather feather-bell header-icon"></i>
													<span class="bg-dot"></span>
												</a>
											</div>
											<div class="dropdown profile-dropdown">
												<a  href="javascript:void(0);" class="nav-link pe-1 ps-0 leading-none" data-bs-toggle="dropdown">
													<span>
                                                    <img src="{{url('degine/images/users/16.jpg')}}" alt="img" class="avatar avatar-md bradius">
													</span>
												</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated">
													<div class="p-3 text-center border-bottom">
														<a href="profile-1.html" class="text-center user pb-0 font-weight-bold">  {{ Auth::user()->name }}</a>
														<p class="text-center user-semi-title">App Developer</p>
													</div>
													<a class="dropdown-item d-flex" href="profile-1.html">
														<i class="feather feather-user me-3 fs-16 my-auto"></i>
														<div class="mt-1">Profile</div>
													</a>
													<a class="dropdown-item d-flex" href="editprofile.html">
														<i class="feather feather-settings me-3 fs-16 my-auto"></i>
														<div class="mt-1">Settings</div>
													</a>
													<a class="dropdown-item d-flex" href="chat.html">
														<i class="feather feather-mail me-3 fs-16 my-auto"></i>
														<div class="mt-1">Messages</div>
													</a>
													<a class="dropdown-item d-flex"  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#changepasswordnmodal">
														<i class="feather feather-edit-2 me-3 fs-16 my-auto"></i>
														<div class="mt-1">Change Password</div>
													</a>

													<a class="dropdown-item dropdown-item d-flex" href="{{ route('logout') }}"
                                       					onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
													 <i class="feather feather-power me-3 fs-16 my-auto"></i>
                                       					 {{ __('Logout') }}
                                   					 </a>
														<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
														@csrf
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/app header-->

				<!--app-sidebar-->
				<div class="sticky">
					<aside class="app-sidebar">
						<div class="app-sidebar__logo">
							<a class="header-brand" href="index.html">
								<img src="{{url('degine/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Dayonelogo">
								<img src="{{url('degine/images/brand/logo-white.png')}}" class="header-brand-img dark-logo" alt="Dayonelogo">
								<img src="{{url('degine/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Dayonelogo">
								<img src="{{url('degine/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="Dayonelogo">
							</a>
						</div>
						<div class="app-sidebar3">
							<div class="main-menu">
								<div class="app-sidebar__user">
									<div class="dropdown user-pro-body text-center">
										<div class="user-pic">
											<img src="{{url('degine/images/users/16.jpg')}}" alt="user-img" class="avatar-xxl rounded-circle mb-1">
										</div>
										<div class="user-info">
											<h5 class=" mb-2"> {{ Auth::user()['name'] }}</h5>
											<span class="text-muted app-sidebar__user-name text-sm">App Developer</span>
										</div>
									</div>
								</div>
								<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
								<ul class="side-menu">
									<li class="side-item side-item-category mt-4">Dashboards</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide"  href="javascript:void(0);">
										<i class="feather feather-home  sidemenu_icon"></i>
										<span class="side-menu__label">Dashboards</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li class="side-menu-label1"><a  href="javascript:void(0);">Dashboards</a></li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);">
													<span class="sub-side-menu__label">Hr <span class="nav-list">Dashboard</span></span><i class="sub-angle fa fa-angle-right"></i>
												</a>
												<ul class="sub-slide-menu">
												<?php
												$user = auth()->user();
												//  var_dump($user->role);
												if ($user->role == 'hr_user') {
													?>

									<li><a href="/show_import" class="sub-slide-item">Import</a></li>
									<li><a href="/month_list" class="sub-slide-item">Month Attendence</a></li>
									<li><a href="/fetch" class="sub-slide-item">Attendence list</a></li>
									<li><a href="/emplist" class="sub-slide-item">short attendence</a></li>
									<li><a href="/master" class="sub-slide-item">Employe_list</a></li>
									<li><a href="/add_emp" class="sub-slide-item">Emp_master</a></li>
									<li><a href="/B-add" class="sub-slide-item">Branch_add</a></li>
									<li><a href="/Branch_list" class="sub-slide-item">Branch_list</a></li>
									<li><a href="/Add_holiday" class="sub-slide-item">add_holiday</a></li>
									

									<?php
											}
											
											if ($user->role == 'admin') {
													?>

									<li><a href="/show_import" class="sub-slide-item">Import</a></li>
									<li><a href="/fetch" class="sub-slide-item">Attendence list</a></li>
									<li><a href="/emplist" class="sub-slide-item">short attendence</a></li>
									<li><a href="/month_list" class="sub-slide-item">Month Attendence</a></li>
									<li><a href="/users" class="sub-slide-item">Admin</a></li>


											<?php

											}
											?>


											</ul>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</aside>
				</div>
				<!--app-sidebar closed-->

				<div class="app-content main-content">
					<div class="side-app main-container">
					<!--Page header-->
					<div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Attendance</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
										<a href="hr-attmark.html" class="btn btn-primary me-3">Mark Attendance</a>
										<button  class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
										<button  class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
										<button  class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
									</div>
								</div>
							</div>
						</div>
						<!--End Page header-->