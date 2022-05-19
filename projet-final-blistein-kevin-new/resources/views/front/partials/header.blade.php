<!-- Header (start) -->

<header class="site-header">
					<div id="main-header" class="main-header header-sticky">
						<div class="inner-header container clearfix">
							<div class="logo">
								<a href="index.html"><img src="{{ asset("assets/images/logo.png")}}" alt=""></a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<div class="header-info hidden-sm hidden-xs">
								<ul>
									<li><i class="fa fa-phone"></i>+49 233 322 333</li>
									<li><i class="fa fa-envelope-o"></i>your@website.com</li>
									<li class="language">
									<p><a href="#" id="example-show" class="showLink" onclick="showHide('example');return false;"><i class="fa fa-globe"></i>English<i class="fa fa-angle-down"></i></a></p>
									<div id="example" class="more">
										<p><a href="#" id="example-hide" class="hideLink" 
										onclick="showHide('example');return false;"><i class="fa fa-globe"></i>English<i class="fa fa-angle-up"></i></a></p>
										<form method="get" id="blog-search" class="blog-search">
											<ul>
												<li><a href="#">English</a></li>
												<li><a href="#">Dutch</a></li>
												<li><a href="#">Albanian</a></li>
											</ul>
										</form>
									</div>
									</li>
									@if (Route::has('login'))
                            @auth
                                <li class=""><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            @else                        
                                <li class=""><a href="{{ route('login') }}">Login</a></li>
                                @if (Route::has('register'))
                                    <li class=""><a href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endauth
                        @endif 
								</ul>
							</div>
							<nav class="main-navigation text-left hidden-xs hidden-sm">
								<ul>
									<li><a href="#" class="has-submenu">Home</a>
										<ul class="sub-menu">
											<li><a href="{{ url('/welcome') }}">Homepage 1</a></li>
											<li><a href="{{ url('/front/pages/homepage-2') }}">Homepage 2</a></li>
										</ul>
									</li>
									<li><a href="#" class="has-submenu">Courses</a>
										<ul class="sub-menu">
											<li><a href="{{ url('/front/pages/courses-grid') }}">Courses Grids</a></li>
											<li><a href="{{ url('/front/pages/courses-list') }}">Courses List</a></li>
											<li><a href="{{ url('/front/pages/single-course') }}">Single Course</a></li>
										</ul>
									</li>
									<li><a href="#" class="has-submenu">Events</a>
										<ul class="sub-menu">
											<li><a href="{{ url('/front/pages/classic-events') }}">Classic Events</a></li>
											<li><a href="{{ url('/front/pages/calendar-events') }}">Calendar Events</a></li>
											<li><a href="{{ url('/front/pages/single-event') }}">Single Event</a></li>
										</ul>
									</li>
									<li><a href="#" class="has-submenu">Pages</a>
										<ul class="sub-menu">
											<li><a href="{{ url('/front/pages/about') }}">About Us</a></li>
											<li><a href="{{ url('/front/pages/our-teachers') }}">Our Teachers</a></li>
											<li><a href="{{ url('/front/pages/single-teacher') }}">Single Teacher</a></li>
											<li><a href="{{ url('/front/pages/gallery-4') }}">Gallery 4 Columns</a></li>
											<li><a href="{{ url('/front/pages/gallery-3') }}">Gallery 3 Columns</a></li>
										</ul>
									</li>
									<li><a href="#" class="has-submenu">News</a>
										<ul class="sub-menu">
											<li><a href="{{ url('/front/pages/classic-news') }}">Classic News</a></li>
											<li><a href="{{ url('/front/pages/grid-news') }}">Grid News</a></li>
											<li><a href="{{ url('/front/pages/single-post') }}">Single Post</a></li>
										</ul>
									</li>
									<li><a href="{{ url('/front/pages/contact') }}">Contact</a></li>
									<li><a href="#search"></a></li>
									<!-- <i class="fa fa-search"></i> -->
								</ul>
							</nav>
						</div>
					</div>
				</header>

		<!-- Header (end) -->