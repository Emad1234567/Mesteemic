

		<!-- =======================y======================================= -->
		<!-- 						Topbar Start 							-->
		<!-- ============================================================== -->
		<div class="top-bar light-top-bar">
		<div class="container">
			<div class="row">
				<div class="col">
					<a class="admin-logo" href="{{route('dashboard')}}">
						<h1>
							<img alt="" src="{{ asset('mesteemic_mainsite.png')}}" class="logo-icon margin-r-10" style="
                            height: 45px;
                        ">
							{{-- <img alt="Dark logo" src="{{ asset('mesteemic_mainsite.png')}}" class="toggle-none hidden-xs"> --}}
						</h1>
					</a>
					{{-- <div class="search-form hidden-xs">
						<form>
							<input class="form-control" placeholder="Search for..." type="text"> <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
						</form>
					</div> --}}
					<ul class="list-inline top-right-nav">
						<li class="dropdown icons-dropdown d-none-m">
                            {{-- class="dropdown-toggle " data-toggle="dropdown" --}}
							<a  href="{{ route('chat') }}"><i class="fa fa-envelope"></i> <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div></a>

							{{-- <ul class="dropdown-menu top-dropdown lg-dropdown notification-dropdown">
								<li>
									<div class="dropdown-header">
										<a class="float-right" href="#"><small>View All</small></a> Messages
									</div>

									<div class="scrollDiv">
										<div class="notification-list">
											<a class="clearfix" href="javascript:%20void(0);">
												<span class="notification-icon">
													<img alt="" class="rounded-circle" src="{{ asset('assets/img/avtar-2.png')}}" width="50">
												</span>
												<span class="notification-title">
												John Doe
												<label class="label label-warning float-right">Support</label>
												</span>
												<span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
												<span class="notification-time">15 minutes ago</span>
											</a>

											<a class="clearfix" href="javascript:%20void(0);">
												<span class="notification-icon">
												<img alt="" class="rounded-circle" src="{{ asset('assets/img/avtar-3.png') }}"')}} width="50">
												</span>
												<span class="notification-title">
												Govindo Doe
												<label class="label label-warning float-right">Support</label>
												</span>
												<span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
												<span class="notification-time">15 minutes ago</span>
											</a>

											<a class="clearfix" href="javascript:%20void(0);">
												<span class="notification-icon">
												<img alt="" class="rounded-circle" src="{{ asset('assets/img/avtar-4.png')}}" width="50">
												</span>
												<span class="notification-title">
												Megan Doe
												<label class="label label-warning float-right">Support</label>
												</span>
												<span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
												<span class="notification-time">15 minutes ago</span>
											</a>

											<a class="clearfix" href="javascript:%20void(0);">
												<span class="notification-icon">
												<img alt="" class="rounded-circle" src="{{ asset('assets/img/avtar-5.png')}}" width="50">
												</span>
												<span class="notification-title">
												Hritik Doe
												<label class="label label-warning float-right">Support</label>
												</span>
												<span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
												<span class="notification-time">15 minutes ago</span>
											</a>

										</div>
									</div>
								</li>
							</ul> --}}
						</li>
						<li class="dropdown icons-dropdown d-none-m">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-bell"></i> <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div></a>
							<ul class="dropdown-menu top-dropdown lg-dropdown notification-dropdown">
								<li>
									<div class="dropdown-header">
										<a class="float-right" href="#"><small>View All</small></a> Notifications
									</div>
									<div class="scrollDiv">
										<div class="notification-list">

											<a class="clearfix" href="javascript:%20void(0);">
												<span class="notification-icon">
													<i class="icon-cloud-upload text-primary"></i>
												</span>
												<span class="notification-title">Upload Complete</span>
												<span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
												<span class="notification-time">15 minutes ago</span>
											</a>

											<a class="clearfix" href="javascript:%20void(0);">
												<span class="notification-icon">
													<i class="icon-info text-warning"></i>
												</span>
												<span class="notification-title">Storage Space low</span>
												<span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
												<span class="notification-time">15 minutes ago</span>
											</a>

											<a class="clearfix" href="javascript:%20void(0);">
												<span class="notification-icon">
													<i class="icon-check text-success"></i>
												</span>
												<span class="notification-title">Project Task Complete</span>
												<span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
												<span class="notification-time">15 minutes ago</span>
											</a>

											<a class="clearfix" href="javascript:%20void(0);">
												<span class="notification-icon">
													<i class=" icon-graph text-danger"></i>
												</span>
												<span class="notification-title">CPU Usage</span>
												<span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
												<span class="notification-time">15 minutes ago</span>
											</a>

										</div>
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="right-sidebar-toggle d-none-m" href="javascript:%20void(0);"><i class="fa fa-align-right"></i></a>
						</li>
						<li class="dropdown avtar-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<img alt="" class="rounded-circle" src="{{ asset('assets/img/avtar-2.png')}}" width="30">
								John Doe
							</a>
							<ul class="dropdown-menu top-dropdown">
								<li>
									<a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-bell"></i> Activities</a>
								</li>
								<li>
									<a class="dropdown-item" href="{{ route('my-profile')}}"><i class="icon-user"></i> Profile</a>
								</li>
								{{-- <li>
									<a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-settings"></i> Settings</a>
								</li> --}}
								<li class="dropdown-divider"></li>
								<li>
									<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();"><i class="icon-logout"></i> Logout</a>
									 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!--                        Topbar End                              -->
	<!-- ============================================================== -->


	<!-- ============================================================== -->
	<!--                        Right Side Start                        -->
	<!-- ============================================================== -->
	{{-- <nav class="toggle-sidebar" id="right-sidebar-toggle">
		<div class="nano">
			<div class="nano-content">
				<div>
					<ul class="list-inline nav-tab-card clearfix" role="tablist">

						<li class="active" role="presentation">
							<a aria-controls="friends" data-toggle="tab" href="#friends" role="tab">Friends</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="friends" role="tabcard">
							<ul class="list-unstyled sidebar-contact-list">
								<li class="clearfix">
									<a class="media-box" href="#"><span class="float-right"><span class="circle circle-success circle-lg"></span></span> <span class="float-left">
									 <img alt="user" class="media-box-object rounded-circle" src="{{ asset('assets/img/avtar-2.png') }}" width="50"></span>
									 <span class="media-box-body"><span class="media-box-heading"><strong>John Doe</strong><br>
									<small class="text-muted">Designer</small></span></span></a>
								</li>
								<li class="clearfix">
									<a class="media-box" href="#"><span class="float-right"><span class="circle circle-success circle-lg"></span></span> <span class="float-left">
									 <img alt="user" class="media-box-object rounded-circle" src="{{ asset('assets/img/avtar-1.png') }}" width="50"></span>
									 <span class="media-box-body"><span class="media-box-heading"><strong>Govinda Doe</strong><br>
									<small class="text-muted">Designer</small></span></span></a>
								</li>
								<li class="clearfix">
									<a class="media-box" href="#"><span class="float-right"><span class="circle circle-danger circle-lg"></span></span> <span class="float-left">
									 <img alt="user" class="media-box-object rounded-circle" src="{{ asset('assets/img/avtar-3.png') }}" width="50"></span>
									 <span class="media-box-body"><span class="media-box-heading"><strong>Megan Doe</strong><br>
									<small class="text-muted">Designer</small></span></span></a>
								</li>
								<li class="clearfix">
									<a class="media-box" href="#"><span class="float-right"><span class="circle circle-success circle-lg"></span></span> <span class="float-left">
									 <img alt="user" class="media-box-object rounded-circle" src="{{ asset('assets/img/avtar-4.png') }}" width="50"></span>
									 <span class="media-box-body"><span class="media-box-heading"><strong>Hritik Doe</strong><br>
									<small class="text-muted">Designer</small></span></span></a>
								</li>
								<li class="clearfix">
									<a class="media-box" href="#"><span class="float-right"><span class="circle circle-success circle-lg"></span></span> <span class="float-left">
									 <img alt="user" class="media-box-object rounded-circle" src="{{ asset('assets/img/avtar-5.png') }}" width="50"></span>
									 <span class="media-box-body"><span class="media-box-heading"><strong>Bianca Doe</strong><br>
									<small class="text-muted">Designer</small></span></span></a>
								</li>
								<li class="clearfix">
									<a class="media-box" href="#"><span class="float-right"><span class="circle circle-success circle-lg"></span></span> <span class="float-left">
									 <img alt="user" class="media-box-object rounded-circle" src="{{ asset('assets/img/avtar-6.png') }}" width="50"></span>
									 <span class="media-box-body"><span class="media-box-heading"><strong>John Doe</strong><br>
									<small class="text-muted">Designer</small></span></span></a>
								</li>
								<li class="clearfix">
									<a class="media-box" href="#"><span class="float-right"><span class="circle circle-success circle-lg"></span></span> <span class="float-left">
									 <img alt="user" class="media-box-object rounded-circle" src="{{ asset('assets/img/avtar-1.png') }}" width="50"></span>
									 <span class="media-box-body"><span class="media-box-heading"><strong>Govinda Doe</strong><br>
									<small class="text-muted">Designer</small></span></span></a>
								</li>
								<li class="clearfix">
									<a class="media-box" href="#"><span class="float-right"><span class="circle circle-danger circle-lg"></span></span> <span class="float-left">
									 <img alt="user" class="media-box-object rounded-circle" src="{{ asset('assets/img/avtar-2.png') }}" width="50"></span>
									 <span class="media-box-body"><span class="media-box-heading"><strong>Megan Doe</strong><br>
									<small class="text-muted">Designer</small></span></span></a>
								</li>
								<li>
									<div class=" text-center">
										<a class="btn btn-teal" href="javascript:void(0);" title="See more contacts">Load more..</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav> --}}
	<!-- ============================================================== -->
	<!--                        Right Side End                          -->
	<!-- ============================================================== -->


	<!-- ============================================================== -->
	<!-- 						Navigation Start 						-->
	<!-- ============================================================== -->
	<div class="main-horizontal-nav">
	<div class="container">
	 <nav>
	<!-- Menu Toggle btn-->
	<div class="menu-toggle">
		<h3>Menu</h3>
		<button type="button" id="menu-btn">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
					<li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></li>
					 <li>
						<a  href="{{ route('my-subscription') }}"><i class="fa fa-codepen"></i> My Plan</a>
						{{-- <ul>
							<li>
								<a href="#">Inbox</a>
								<ul>
									<li><a href="mail-index.html">Inbox</a></li>
									<li><a href="mail-view.html">Inbox view</a></li>
									<li><a href="mail-compose.html">Compose</a></li>
								</ul>
							</li>
							<li><a href="app-calendar.html">Calendar</a></li>
							<li><a href="app-chat.html">Chat App</a></li>
							<li><a href="app-ticket.html">Support Ticket</a></li>
							<li><a href="app-contact.html">Contact Grid</a></li>
							<li><a href="app-contact-detail.html">Contact Detail</a></li>
						</ul> --}}
					</li>
					 <li>
						<a  href="{{ route('loan-request')}}"><i class="fa fa-cogs"></i>Apply for loan</a>
						{{-- <ul>
							<li><a href="ui-jquery-elements.html">Jquery UI</a></li>
							<li><a href="ui-bootstrap-elements.html">Bootstrap UI</a></li>
							<li><a href="ui-typography.html">Typography</a></li>
							<li><a href="ui-buttons.html">Buttons</a></li>
							<li><a href="ui-cards.html">Cards</a></li>
							<li><a href="ui-tabs.html">Tabs</a></li>
							<li><a href="ui-tip-pop.html">Tooltip & Popovers</a></li>
							<li><a href="#">Alerts & Modals</a>
								<ul>
									<li><a href="ui-sweetalerts.html">Sweet Alers</a></li>
									<li><a href="ui-alertify.html">Alertify Alers</a></li>
									<li><a href="ui-modals.html">Modals</a></li>
								</ul>
							</li>
							<li><a href="ui-notification.html">Notification</a></li>
							<li><a href="ui-progress.html">Progress</a></li>
							<li><a href="ui-grid.html">Grid System</a></li>
							<li><a href="ui-nestable.html">Nestable</a></li>
							<li><a href="ui-treeview.html">Tree View</a></li>
							<li><a href="ui-draggable-cards.html">Draggable Cards</a></li>
						</ul> --}}
					</li>



					<li>
						<a href="#"><i class="fa fa-table"></i> <span class="toggle-none">Products <span class="fa arrow"></span></span></a>
						{{-- <ul>
							<li><a href="table-basic.html">Basic Tables</a></li>
							<li><a href="table-data.html">Data Tables</a></li>
							<li><a href="table-js-grid.html">JsGrid Tables</a></li>
							<li><a href="table-foo.html">Foo Tables</a></li>
						</ul> --}}
					</li>

					<li>
						<a  href="{{ route('select-category') }}"><i class="fa fa-th"></i> <span class="toggle-none">Categories <span class="fa arrow"></span></span></a>
					  {{-- <ul>
						<li><a href="ui-icons.html">Icons</a></li>
						<li><a href="ui-card-master.html">Card Master</a></li>
					    </ul> --}}
					</li>
					<li>
						<a href="{{ route('my-tickets')}}"><i class="fa fa-folder"></i>Support </a>
						{{-- <ul>
							<li><a href="page-blank.html">Blank Page</a></li>
							<li><a href="page-login.html">Login</a></li>
							<li><a href="page-register.html">Register</a></li>
							<li><a href="page-forget-password.html">Forget Password</a></li>
							<li><a href="page-lockscreen.html">Lock-screen</a></li>
							<li><a href="page-404.html">404</a></li>
							<li><a href="page-gallery.html">Gallery</a></li>
							<li><a href="page-timeline.html">Timeline</a></li>
							<li><a href="page-invoice.html">Invoice</a></li>
							<li><a href="page-profile.html">Profile</a></li>
							<li><a href="page-faqs.html">Faqs</a></li>
							<li><a href="page-pricing.html">Pricing</a></li>
						</ul> --}}
					</li>
				</ul>
				</nav>
				</div>
			</div>
		<!-- 						Navigation End	 						-->
		<!-- ============================================================== -->


		<!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->

		<div class="row page-header">
			<div class="container">
				<div class="row">
				<div class="col-lg-6 align-self-center ">
				  <h2>Dashboard</h2>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>

            </div>

            <section class="container">
                @yield('content')

            </section>



            <footer class="footer">
                <span>Copyright &copy; 2018 FixedPlus</span>
            </footer>


