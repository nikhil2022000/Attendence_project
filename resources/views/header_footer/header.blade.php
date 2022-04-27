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
		<link rel="stylesheet"  href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
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
														<a href="profile-1.html" class="text-center user pb-0 font-weight-bold">John Thomson</a>
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
													<a class="dropdown-item d-flex" href="login-1.html">
														<i class="feather feather-power me-3 fs-16 my-auto"></i>
														<div class="mt-1">Sign Out</div>
													</a>
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
											<h5 class=" mb-2">Abigali kelly</h5>
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
													<li><a href="/show_import" class="sub-slide-item">Import</a></li>
													<li><a href="/fetch" class="sub-slide-item">Attendence list</a></li>
													<li><a href="/emplist" class="sub-slide-item">short attendence</a></li>
													
													<li class="sub-slide2">
														<a class="sub-side-menu__item2" data-bs-toggle="sub-slide2"  href="javascript:void(0);"><span class="sub-side-menu__label">Attendance</span><i class="sub-angle2 fa fa-angle-right"></i></a>
														<ul class="sub-slide-menu2">
															<li><a class="sub-slide-item2" href="hr-attlist.html">Attendance List</a></li>
															<li><a class="sub-slide-item2" href="hr-attuser.html">Attendance By User</a></li>
															<li><a class="sub-slide-item2" href="hr-attview.html">Attendance View</a></li>
															<li><a class="sub-slide-item2" href="hr-overviewcldr.html">Overview Calender</a></li>
															<li><a class="sub-slide-item2" href="hr-attmark.html">Attendance Mark </a></li>
															<li><a class="sub-slide-item2" href="hr-leaves.html">Leave Settings</a></li>
															<li><a class="sub-slide-item2" href="hr-leavesapplication.html">Leave Applications</a></li>
															<li><a class="sub-slide-item2" href="hr-recentleaves.html">Recent Leaves </a></li>
														</ul>
													</li>
													<li><a href="hr-award.html" class="sub-slide-item">Awards</a></li>
													<li><a href="hr-holiday.html" class="sub-slide-item">Holidays</a></li>
													<li><a href="hr-notice.html" class="sub-slide-item">Notice Board</a></li>
													<li><a href="hr-expenses.html" class="sub-slide-item">Expenses</a></li>
													<li class="sub-slide2">
														<a class="sub-side-menu__item2" data-bs-toggle="sub-slide2"  href="javascript:void(0);"><span class="sub-side-menu__label">Payroll</span><i class="sub-angle2 fa fa-angle-right"></i></a>
														<ul class="sub-slide-menu2">
															<li><a class="sub-slide-item2" href="hr-empsalary.html">Employee Salary</a></li>
															<li><a class="sub-slide-item2" href="hr-addpayroll.html">Add Payroll</a></li>
															<li><a class="sub-slide-item2" href="hr-editpayroll.html">Edit Payroll</a></li>
														</ul>
													</li>
													<li><a href="hr-events.html" class="sub-slide-item">Events</a></li>
													<li><a href="hr-settings.html" class="sub-slide-item">Settings</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);">
													<span class="sub-side-menu__label">Employee <span class="nav-list">Dashboard</span></span><i class="sub-angle fa fa-angle-right"></i>
												</a>
												<ul class="sub-slide-menu">

													<li><a href="index2.html" class="sub-slide-item">Dashboard</a></li>
													<li><a href="employee-attendance.html" class="sub-slide-item">Attendance</a></li>
													<li><a href="employee-leaves.html" class="sub-slide-item">Apply Leaves </a></li>
													<li><a href="employee-myleaves.html" class="sub-slide-item">My Leaves </a></li>
													<li><a href="employee-payslips.html" class="sub-slide-item">Payslips </a></li>
													<li><a href="employee-expenses.html" class="sub-slide-item">Expenses</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);">
													<span class="sub-side-menu__label">Task<span class="nav-list">Dashboard</span></span><i class="sub-angle fa fa-angle-right"></i>
												</a>
												<ul class="sub-slide-menu">
													<li><a href="index3.html" class="sub-slide-item">Dashboard</a></li>
													<li><a href="task-list.html" class="sub-slide-item">Task List</a></li>
													<li><a href="task-running.html" class="sub-slide-item">Running Tasks</a></li>
													<li><a href="task-hold.html" class="sub-slide-item">OnHold Tasks</a></li>
													<li><a href="task-complete.html" class="sub-slide-item">Completed Tasks</a></li>
													<li><a href="task-view.html" class="sub-slide-item">View Task</a></li>
													<li><a href="task-overclndr.html" class="sub-slide-item">Overview Calendar</a></li>
													<li><a href="task-board.html" class="sub-slide-item">Task Board</a></li>
													<li><a href="task-new.html" class="sub-slide-item">New Task</a></li>
													<li><a href="task-profile.html" class="sub-slide-item">User Profile</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);">
													<span class="sub-side-menu__label">Project <span class="nav-list">Dashboard</span></span><i class="sub-angle fa fa-angle-right"></i>
												</a>
												<ul class="sub-slide-menu">
													<li><a href="index4.html" class="sub-slide-item">Dashboard</a></li>
													<li><a href="project-list.html" class="sub-slide-item">Project List</a></li>
													<li><a href="project-view.html" class="sub-slide-item">View Project</a></li>
													<li><a href="project-overclndr.html" class="sub-slide-item">Overview Calendar</a></li>
													<li><a href="project-new.html" class="sub-slide-item">New Project</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);">
													<span class="sub-side-menu__label">Client <span class="nav-list">Dashboard</span></span><i class="sub-angle fa fa-angle-right"></i>
												</a>
												<ul class="sub-slide-menu">
													<li><a href="index5.html" class="sub-slide-item">Dashboard</a></li>
													<li><a href="client-list.html" class="sub-slide-item">Client List</a></li>
													<li><a href="client-view.html" class="sub-slide-item">View Client</a></li>
													<li><a href="client-new.html" class="sub-slide-item">New Client</a></li>
													<li><a href="client-profile.html" class="sub-slide-item">User Profile</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);">
													<span class="sub-side-menu__label">Job <span class="nav-list">Dashboard</span></span><i class="sub-angle fa fa-angle-right"></i>
												</a>
												<ul class="sub-slide-menu">
													<li><a href="index6.html" class="sub-slide-item">Dashboard</a></li>
													<li><a href="job-list.html" class="sub-slide-item">Job Lists</a></li>
													<li><a href="job-view.html" class="sub-slide-item">Job View</a></li>
													<li><a href="job-applictaion.html" class="sub-slide-item">Job Applications</a></li>
													<li><a href="job-apply.html" class="sub-slide-item">Apply Job</a></li>
													<li><a href="job-new.html" class="sub-slide-item">New Job</a></li>
													<li><a href="job-user.html" class="sub-slide-item">User Profile</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);">
													<span class="sub-side-menu__label">Super Admin</span><i class="sub-angle fa fa-angle-right"></i>
												</a>
												<ul class="sub-slide-menu">
													<li><a href="index7.html" class="sub-slide-item">Dashboard</a></li>
													<li><a href="superadmin-company.html" class="sub-slide-item">Companies</a></li>
													<li><a href="superadmin-subscription.html" class="sub-slide-item">Subscription Plans</a></li>
													<li><a href="superadmin-invoices.html" class="sub-slide-item">Invoices</a></li>
													<li><a href="superadmin-admins.html" class="sub-slide-item">Super Admins</a></li>
													<li><a href="superadmin-settings.html" class="sub-slide-item">Settings</a></li>
													<li><a href="superadmin-role.html" class="sub-slide-item">Role Access</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide"  href="javascript:void(0);">
											<i class="feather feather-headphones sidemenu_icon"></i>
											<span class="side-menu__label">Support<span class="nav-list"> System</span></span><i class="angle fa fa-angle-right"></i>
										</a>
										<ul class="slide-menu">
										<li class="side-menu-label1"><a  href="javascript:void(0);">Support System</a></li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);"><span class="sub-side-menu__label">Landing Pages</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="support-landing.html">Landing Page</a></li>
													<li><a class="sub-slide-item" href="support-knowledge.html">Knowledge Page</a></li>
													<li><a class="sub-slide-item" href="support-knowledgeview.html">Knowledge View</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);"><span class="sub-side-menu__label">User Pages</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="support-userdash.html">Dashboard</a></li>
													<li><a class="sub-slide-item" href="support-editprofile.html">Profile</a></li>
													<li class="sub-slide2">
														<a class="sub-side-menu__item2"  href="javascript:void(0);" data-bs-toggle="sub-slide2"><span class="sub-side-menu__label2">Tickets</span><i class="sub-angle2 fa fa-angle-right"></i></a>
														<ul class="sub-slide-menu2">
															<li><a href="support-ticketlist.html" class="sub-slide-item2">Ticket List</a></li>
															<li><a href="support-ticketactive.html" class="sub-slide-item2">Active Tickets</a></li>
															<li><a href="support-ticketclosed.html" class="sub-slide-item2">Closed Tickets</a></li>
															<li><a href="support-ticketcreate.html" class="sub-slide-item2">Create Ticket</a></li>
															<li><a href="support-ticketview.html" class="sub-slide-item2">View Ticket</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="sub-slide">
												<a  href="javascript:void(0);" class="sub-side-menu__item" data-bs-toggle="sub-slide"><span class="sub-side-menu__label">Admin</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="support-admindash.html">Dashboard</a></li>
													<li><a class="sub-slide-item" href="support-admineditprofile.html">Edit Profile</a></li>
													<li class="sub-slide2">
														<a class="sub-side-menu__item2"  href="javascript:void(0);" data-bs-toggle="sub-slide2"><span class="sub-side-menu__label2">Tickets</span><i class="sub-angle2 fa fa-angle-right"></i></a>
														<ul class="sub-slide-menu2">
															<li><a href="support-adminticketlist.html" class="sub-slide-item2">Ticket List</a></li>
															<li><a href="support-adminticketactive.html" class="sub-slide-item2">Active Tickets</a></li>
															<li><a href="support-adminticketclosed.html" class="sub-slide-item2">Closed Tickets</a></li>
															<li><a href="support-adminticketnew.html" class="sub-slide-item2">New Ticket</a></li>
															<li><a href="support-adminticketview.html" class="sub-slide-item2">View Ticket</a></li>
														</ul>
													</li>
													<li><a class="sub-slide-item" href="support-admincustomer.html">Customers</a></li>
													<li><a class="sub-slide-item" href="support-admincategories.html">Categories</a></li>
													<li><a class="sub-slide-item" href="support-adminarticles.html">Articles</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a  href="javascript:void(0);" class="sub-side-menu__item" data-bs-toggle="sub-slide"><span class="sub-side-menu__label">Agent</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="support-agentdash.html">Dashboard</a></li>
													<li class="sub-slide2">
														<a class="sub-side-menu__item2"  href="javascript:void(0);" data-bs-toggle="sub-slide2"><span class="sub-side-menu__label2">Tickets</span><i class="sub-angle2 fa fa-angle-right"></i></a>
														<ul class="sub-slide-menu2">
															<li><a href="support-agentticketlist.html" class="sub-slide-item2">Ticket List</a></li>
															<li><a href="support-agentticketactive.html" class="sub-slide-item2">Active Tickets</a></li>
															<li><a href="support-agentticketclosed.html" class="sub-slide-item2">Closed Tickets</a></li>
															<li><a href="support-agentticketview.html" class="sub-slide-item2">View Ticket</a></li>
														</ul>
													</li>
													<li><a class="sub-slide-item" href="support-agentassign.html">Assigned Categories</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item"  href="chat-livechat.html">
											<i class="feather feather-message-square sidemenu_icon"></i>
											<span class="side-menu__label">Chat</span>
										</a>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide"  href="javascript:void(0);">
											<i class="feather feather-airplay sidemenu_icon"></i>
											<span class="side-menu__label">Admin</span><i class="angle fa fa-angle-right"></i>
										</a>
										<ul class="slide-menu">
										<li class="side-menu-label1"><a  href="javascript:void(0);">Admin</a></li>
											<li><a href="admin-general.html" class="slide-item">General Settings</a></li>
											<li><a href="admin-api.html" class="slide-item">API Settings</a></li>
											<li><a href="admin-role.html" class="slide-item">Role Access</a></li>
										</ul>
									</li>
									<li class="side-item side-item-category">Apps</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide"  href="javascript:void(0);">
										<i class="feather feather-codepen sidemenu_icon"></i>
										<span class="side-menu__label">Apps</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
										<li class="side-menu-label1"><a  href="javascript:void(0);">Elements</a></li>
										<li class="sub-slide">
											<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);">
											<span class="sub-side-menu__label">Theme <span class="nav-list">settings</span></span><i class="sub-angle fa fa-angle-right"></i>
											</a>
											<ul class="sub-slide-menu">
												<li><a href="theme-settings-1.html" class="sub-slide-item">Theme-style-1</style></a></li>
												<li><a href="theme-settings-2.html" class="sub-slide-item">Theme-style-2</a></li>
											</ul>
										</li>
										<li class="sub-slide">
											<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);">
											<span class="sub-side-menu__label">Forms</span><i class="sub-angle fa fa-angle-right"></i></a>
											<ul class="sub-slide-menu">
												<li><a href="form-elements.html" class="sub-slide-item"> Form Elements</a></li>
												<li><a href="advanced-forms.html" class="sub-slide-item"> Advanced Forms</a></li>
												<li><a href="form-wizard.html" class="sub-slide-item"> Form Wizard</a></li>
												<li><a href="form-editor.html" class="sub-slide-item"> Form Editor</a></li>
												<li><a href="form-sizes.html" class="sub-slide-item"> Form Element Sizes</a></li>
												<li><a href="form-treeview.html" class="sub-slide-item"> Form Treeview</a></li>
											</ul>
										</li>
										<li class="sub-slide">
											<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);">
											<span class="sub-side-menu__label">Charts</span><i class="sub-angle fa fa-angle-right"></i></a>
											<ul class="sub-slide-menu">
											  <li class="side-menu-label1"><a  href="javascript:void(0);">Charts</a></li>
												<li><a href="chart-chartist.html" class="sub-slide-item">Chartjs Charts</a></li>
												<li><a href="chart-morris.html" class="sub-slide-item"> Morris Charts</a></li>
												<li><a href="chart-apex.html" class="sub-slide-item"> Apex Charts</a></li>
												<li><a href="chart-peity.html" class="sub-slide-item"> Pie Charts</a></li>
												<li><a href="chart-echart.html" class="sub-slide-item"> Echart Charts</a></li>
												<li><a href="chart-flot.html" class="sub-slide-item"> Flot Charts</a></li>
												<li><a href="chart-c3.html" class="sub-slide-item">C3 Charts</a></li>
											</ul>
										</li>
										<li class="sub-slide">
											<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);">
											<span class="sub-side-menu__label">Widgets</span><i class="sub-angle fa fa-angle-right"></i></a>
											<ul class="sub-slide-menu">
											  <li class="side-menu-label1"><a  href="javascript:void(0);">Widgets</a></li>
												<li><a href="widgets-1.html" class="sub-slide-item">Widgets</a></li>
												<li><a href="widgets-2.html" class="sub-slide-item">Chart Widgets</a></li>
											</ul>
										</li>
										<li class="sub-slide">
											<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);">
											<span class="sub-side-menu__label">Maps</span><i class="sub-angle fa fa-angle-right"></i></a>
											<ul class="sub-slide-menu">
											  <li class="side-menu-label1"><a  href="javascript:void(0);">Maps</a></li>
												<li><a href="maps.html" class="sub-slide-item">Vector Maps</a></li>
												<li><a href="maps2.html" class="sub-slide-item">Leaflet Maps</a></li>
												<li><a href="maps3.html" class="sub-slide-item">Mapel Maps</a></li>
											</ul>
										</li>
										<li class="sub-slide">
											<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);">
											<span class="sub-side-menu__label">Tables</span><i class="sub-angle fa fa-angle-right"></i></a>
											<ul class="sub-slide-menu">
											  <li class="side-menu-label1"><a  href="javascript:void(0);">Tables</a></li>
												<li><a href="tables.html" class="sub-slide-item">Default table</a></li>
												<li><a href="datatable.html" class="sub-slide-item">Data Table</a></li>
											</ul>
										</li>
										<li class="sub-slide">
											<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);">
											<span class="sub-side-menu__label">Icons</span><i class="sub-angle fa fa-angle-right"></i></a>
											<ul class="sub-slide-menu">
											  <li class="side-menu-label1"><a  href="javascript:void(0);">Icons</a></li>
												<li><a href="icons.html" class="sub-slide-item"> Font Awesome</a></li>
												<li><a href="icons2.html" class="sub-slide-item"> Material Design Icons</a></li>
												<li><a href="icons3.html" class="sub-slide-item"> Simple Line Icons</a></li>
												<li><a href="icons4.html" class="sub-slide-item"> Feather Icons</a></li>
												<li><a href="icons5.html" class="sub-slide-item"> Ionic Icons</a></li>
												<li><a href="icons6.html" class="sub-slide-item"> Flag Icons</a></li>
												<li><a href="icons7.html" class="sub-slide-item"> pe7 Icons</a></li>
												<li><a href="icons8.html" class="sub-slide-item"> Themify Icons</a></li>
												<li><a href="icons9.html" class="sub-slide-item">Typicons Icons</a></li>
												<li><a href="icons10.html" class="sub-slide-item">Weather Icons</a></li>
												<li><a href="icons11.html" class="sub-slide-item">Material Icons</a></li>
											</ul>
										</li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide"  href="javascript:void(0);">
										<i class="feather feather-server sidemenu_icon"></i>
										<span class="side-menu__label">Components</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
										 <li class="side-menu-label1"><a  href="javascript:void(0);">Components</a></li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);"><span class="sub-side-menu__label">Chat</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="chat.html">Chat</a></li>
													<li><a class="sub-slide-item" href="chat2.html">Chat 02</a></li>
													<li><a class="sub-slide-item" href="chat3.html">Chat 03</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);"><span class="sub-side-menu__label">Contact</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="contact-list.html">Contact list</a></li>
													<li><a class="sub-slide-item" href="contact-list2.html">Contact list 02</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);"><span class="sub-side-menu__label">File Manager</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="file-manager.html">File Manager</a></li>
													<li><a class="sub-slide-item" href="file-manager-list.html">File Manager 02</a></li>
													<li><a class="sub-slide-item" href="file-details.html">File detailes</a></li>
													<li><a class="sub-slide-item" href="file-attachments.html">File attachments</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);"><span class="sub-side-menu__label">Todo List</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="todo-list.html">Todo List</a></li>
													<li><a class="sub-slide-item" href="todo-list2.html">Todo List 02</a></li>
													<li><a class="sub-slide-item" href="todo-list3.html">Todo List 03</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);"><span class="sub-side-menu__label">User List</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="users-list-1.html">User List 01</a></li>
													<li><a class="sub-slide-item" href="users-list-2.html">User List 02</a></li>
													<li><a class="sub-slide-item" href="users-list-3.html">User List 03</a></li>
													<li><a class="sub-slide-item" href="users-list-4.html">User List 04</a></li>
												</ul>
											</li>
											<li><a href="calendar.html" class="slide-item"> Calendar</a></li>
											<li><a href="dragula.html" class="slide-item"> Dragula Card</a></li>
											<li><a href="cookies.html" class="slide-item"> Cookies</a></li>
											<li><a href="image-comparison.html" class="slide-item"> Image Comparison</a></li>
											<li><a href="img-crop.html" class="slide-item"> Image Crop</a></li>
											<li><a href="page-sessiontimeout.html" class="slide-item"> Page-sessiontimeout</a></li>
											<li><a href="notify.html" class="slide-item"> Notifications</a></li>
											<li><a href="sweetalert.html" class="slide-item"> Sweet alerts</a></li>
											<li><a href="rangeslider.html" class="slide-item"> Range slider</a></li>
											<li><a href="counters.html" class="slide-item"> Counters</a></li>
											<li><a href="loaders.html" class="slide-item"> Loaders</a></li>
											<li><a href="time-line.html" class="slide-item"> Time Line</a></li>
											<li><a href="rating.html" class="slide-item"> Rating</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide"  href="javascript:void(0);">
										<i class="feather feather-layers sidemenu_icon"></i>
										<span class="side-menu__label">Elements</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
										<li class="side-menu-label1"><a  href="javascript:void(0);">Elements</a></li>
											<li><a href="accordion.html" class="slide-item"> Accordion</a></li>
											<li><a href="alerts.html" class="slide-item"> Alerts</a></li>
											<li><a href="avatars.html" class="slide-item"> Avatars</a></li>
											<li><a href="badge.html" class="slide-item"> Badges</a></li>
											<li><a href="breadcrumbs.html" class="slide-item"> Breadcrumb</a></li>
											<li><a href="buttons.html" class="slide-item"> Buttons</a></li>
											<li><a href="cards.html" class="slide-item"> Cards</a></li>
											<li><a href="cards-image.html" class="slide-item"> Card Images</a></li>
											<li><a href="carousel.html" class="slide-item"> Carousel</a></li>
											<li><a href="dropdown.html" class="slide-item"> Dropdown</a></li>
											<li><a href="footers.html" class="slide-item"> Footers</a></li>
											<li><a href="headers.html" class="slide-item"> Headers</a></li>
											<li><a href="list&listgroup.html" class="slide-item"> Lists & List Group</a></li>
											<li><a href="media-object.html" class="slide-item"> Media Obejct</a></li>
											<li><a href="modal.html" class="slide-item"> Modal</a></li>
											<li><a href="navigation.html" class="slide-item"> Navigation</a></li>
											<li><a href="pagination.html" class="slide-item"> Pagination</a></li>
											<li><a href="panels.html" class="slide-item"> Panel</a></li>
											<li><a href="popover.html" class="slide-item"> Popover</a></li>
											<li><a href="progress.html" class="slide-item"> Progress</a></li>
											<li><a href="tabs.html" class="slide-item"> Tabs</a></li>
											<li><a href="tags.html" class="slide-item"> Tags</a></li>
											<li><a href="tooltip.html" class="slide-item"> Tooltips</a></li>
										</ul>
									</li>
									<li class="side-item side-item-category">Pages</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide"  href="javascript:void(0);">
										<i class="feather feather-copy sidemenu_icon"></i>
										<span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
										<li class="side-menu-label1"><a  href="javascript:void(0);">Pages</a></li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);"><span class="sub-side-menu__label">Profile</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="profile-1.html">Profile 01</a></li>
													<li><a class="sub-slide-item" href="profile-2.html">Profile 02</a></li>
													<li><a class="sub-slide-item" href="profile-3.html">Profile 03</a></li>
												</ul>
											</li>
											<li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);"><span class="sub-side-menu__label">Email</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="email-compose.html">Email Compose</a></li>
													<li><a class="sub-slide-item" href="email-inbox.html">Email Inbox</a></li>
													<li><a class="sub-slide-item" href="email-read.html">Email Read</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);"><span class="sub-side-menu__label">Pricing</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="pricing.html">Pricing 01</a></li>
													<li><a class="sub-slide-item" href="pricing-2.html">Pricing 02</a></li>
													<li><a class="sub-slide-item" href="pricing-3.html">Pricing 03</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);"><span class="sub-side-menu__label">Invoice</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="invoice-list.html">Invoice list</a></li>
													<li><a class="sub-slide-item" href="invoice-1.html">Invoice 01</a></li>
													<li><a class="sub-slide-item" href="invoice-2.html">Invoice 02</a></li>
													<li><a class="sub-slide-item" href="invoice-3.html">Invoice 03</a></li>
													<li><a class="sub-slide-item" href="invoice-add.html">Add Invoice</a></li>
													<li><a class="sub-slide-item" href="invoice-edit.html">Edit Invoice</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);">
												<span class="sub-side-menu__label">Blog</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="blog.html">Blog 01</a></li>
													<li><a class="sub-slide-item" href="blog-2.html">Blog 02</a></li>
													<li><a class="sub-slide-item" href="blog-3.html">Blog 03</a></li>
													<li><a class="sub-slide-item" href="blog-styles.html">Blog Styles</a></li>
												</ul>
											</li>
											<li><a href="gallery.html" class="slide-item"> Gallery</a></li>
											<li><a href="faq.html" class="slide-item"> FAQS</a></li>
											<li><a href="terms.html" class="slide-item"> Terms</a></li>
											<li><a href="empty.html" class="slide-item"> Empty Page</a></li>
											<li><a href="search.html" class="slide-item"> Search</a></li>
											<li><a href="about.html" class="slide-item"> About</a></li>
											<li><a href="notification-list.html" class="slide-item">Notify-list</a></li>
											<li><a href="settings.html" class="slide-item"> Settings</a></li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);">
												<span class="side-menu__label">Utils</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
												<li class="side-menu-label1"><a  href="javascript:void(0);">Utils</a></li>
													<li><a href="element-colors.html" class="sub-slide-item"> Colors</a></li>
													<li><a href="element-flex.html" class="sub-slide-item"> Flex Items</a></li>
													<li><a href="element-height.html" class="sub-slide-item"> Height</a></li>
													<li><a href="elements-border.html" class="sub-slide-item"> Border</a></li>
													<li><a href="elements-display.html" class="sub-slide-item"> Display</a></li>
													<li><a href="elements-margin.html" class="sub-slide-item"> Margin</a></li>
													<li><a href="elements-paddning.html" class="sub-slide-item"> Padding</a></li>
													<li><a href="element-typography.html" class="sub-slide-item"> Typhography</a></li>
													<li><a href="element-width.html" class="sub-slide-item"> Width</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="slide ">
										<a class="side-menu__item" data-bs-toggle="slide"  href="javascript:void(0);">
										<i class="feather feather-sliders sidemenu_icon"></i>
										<span class="side-menu__label">Submenus</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li class="side-menu-label1"><a  href="javascript:void(0);">Submenus</a></li>
											<li><a  href="javascript:void(0);" class="slide-item">Level-1</a></li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);"><span class="sub-side-menu__label">Level-2</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item"  href="javascript:void(0);">Level-2.1</a></li>
													<li><a class="sub-slide-item"  href="javascript:void(0);">Level-2.2</a></li>
													<li class="sub-slide2">
														<a class="sub-side-menu__item2"  href="javascript:void(0);" data-bs-toggle="sub-slide2"><span class="sub-side-menu__label2">Level-2.3</span><i class="sub-angle2 fa fa-angle-right"></i></a>
														<ul class="sub-slide-menu2">
															<li><a  href="javascript:void(0);" class="sub-slide-item2">Level-2.3.1</a></li>
															<li><a  href="javascript:void(0);" class="sub-slide-item2">Level-2.3.2</a></li>
															<li><a  href="javascript:void(0);" class="sub-slide-item2">Level-2.3.3</a></li>
														</ul>
													</li>
													<li><a class="sub-slide-item"  href="javascript:void(0);">Level-2.4</a></li>
													<li><a class="sub-slide-item"  href="javascript:void(0);">Level-2.5</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide"  href="javascript:void(0);">
										<i class="feather feather-lock sidemenu_icon"></i>
										<span class="side-menu__label">Account</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li class="side-menu-label1"><a  href="javascript:void(0);">Account</a></li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);"><span class="sub-side-menu__label">Login</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="login-1.html">Login 01</a></li>
													<li><a class="sub-slide-item" href="login-2.html">Login 02</a></li>
													<li><a class="sub-slide-item" href="login-3.html">Login 03</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);"><span class="sub-side-menu__label">Register</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="register-1.html">Register 01</a></li>
													<li><a class="sub-slide-item" href="register-2.html">Register 02</a></li>
													<li><a class="sub-slide-item" href="register-3.html">Register 03</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);"><span class="sub-side-menu__label">Forgot Password</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="forgot-password-1.html">Forgot Password 01</a></li>
													<li><a class="sub-slide-item" href="forgot-password-2.html">Forgot Password 02</a></li>
													<li><a class="sub-slide-item" href="forgot-password-3.html">Forgot Password 03</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);"><span class="sub-side-menu__label">Reset Password</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="reset-password-1.html">Reset Password 01</a></li>
													<li><a class="sub-slide-item" href="reset-password-2.html">Reset Password 02</a></li>
													<li><a class="sub-slide-item" href="reset-password-3.html">Reset Password 03</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);"><span class="sub-side-menu__label">Lock Screen</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="lockscreen-1.html">Lock Screen 01</a></li>
													<li><a class="sub-slide-item" href="lockscreen-2.html">Lock Screen 02</a></li>
													<li><a class="sub-slide-item" href="lockscreen-3.html">Lock Screen 03</a></li>
												</ul>
											</li>
											<li><a href="construction.html" class="slide-item"> Under Construction</a></li>
											<li><a href="coming.html" class="slide-item"> Coming Soon</a></li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);">
												<span class="sub-side-menu__label">Alert<span class="nav-list">  Messages</span></span><i class="sub-angle  fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li class="side-menu-label1"><a  href="javascript:void(0);">Alert Messages</a></li>
													<li><a href="message-success.html" class="sub-slide-item">Success Message</a></li>
													<li><a href="message-warning.html" class="sub-slide-item">Warning Message</a></li>
													<li><a href="message-danger.html" class="sub-slide-item">Danger Message</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide"  href="javascript:void(0);">
												<span class="sub-side-menu__label">Error Pages</span><i class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li class="side-menu-label1"><a  href="javascript:void(0);">Error Pages</a></li>
													<li><a href="400.html" class="sub-slide-item"> 400</a></li>
													<li><a href="401.html" class="sub-slide-item"> 401</a></li>
													<li><a href="403.html" class="sub-slide-item"> 403</a></li>
													<li><a href="404.html" class="sub-slide-item"> 404</a></li>
													<li><a href="500.html" class="sub-slide-item"> 500</a></li>
													<li><a href="503.html" class="sub-slide-item"> 503</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide"  href="javascript:void(0);">
										<i class="feather feather-shopping-cart sidemenu_icon"></i>
										<span class="side-menu__label">E-commerce</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
										<li class="side-menu-label1"><a  href="javascript:void(0);">E-commerce</a></li>
											<li><a href="products.html" class="slide-item"> Products</a></li>
											<li><a href="product-details.html" class="slide-item"> Products Details</a></li>
											<li><a href="cart.html" class="slide-item"> Shopping Cart</a></li>
										</ul>
									</li>
								</ul>
								<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
								<div class="Annoucement_card">
									<div class="text-center">
										<div>
											<h5 class="title mt-0 mb-1 ms-2 font-weight-bold tx-12">Announcement</h5>
											<div class="bg-layer py-4">
												<img src="{{url('degine/images/photos/announcement-1.png')}}" class="py-3 text-center mx-auto" alt="img">
											</div>
											<p class="subtext mt-0 mb-0 ms-2 fs-13 text-center my-2">Make an Announcement to Our Employee</p>
										</div>
									</div>
									<button class="btn btn-block btn-primary my-4 fs-12">Create Announcement</button>
									<button class="btn btn-block btn-outline fs-12">See history</button>
								</div>
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
								<div class="page-title">HR<span class="font-weight-normal text-muted ms-2">Dashboard</span></div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="d-flex">
										<div class="header-datepicker me-3">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="feather feather-calendar"></i>
													</div>
												</div><input class="form-control fc-datepicker" placeholder="19 Feb 2020" type="text">
											</div>
										</div>
										<div class="header-datepicker me-3">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="feather feather-clock"></i>
													</div>
												</div><!-- input-group-prepend -->
												<input id="tpBasic" type="text" placeholder="09:30am" class="form-control input-small">
											</div>
										</div><!-- wd-150 -->
									</div>
									<div class="d-lg-flex d-block">
										<div class="btn-list">
											<button type="button"  class="btn btn-primary"  data-bs-toggle="modal"   data-bs-target="#clockinmodal">Clock In</button>
											<button type="button"  class="btn btn-light"    data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
											<button type="button"  class="btn btn-light"    data-bs-toggle="tooltip" data-bs-placement="top" title="Contact"> <i class="feather feather-phone-call"></i> </button>
											<button type="button"  class="btn btn-primary"  data-bs-toggle="tooltip" data-bs-placement="top"  title="Info"> <i class="feather feather-info"></i> </button>

										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Page header-->