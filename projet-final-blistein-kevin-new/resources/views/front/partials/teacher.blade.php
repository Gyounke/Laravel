<!-- Teachers (start) -->

<section class="our-teachers">
					<div class="container">
						<div class="row">
							<div class="section-heading text-center">
								<h1>Our Teachers</h1>
								<img src="{{ asset("images/line-dec.png")}}" alt="">
								<p>High Life squid literally scenester fap Helvetica quinoa church-key</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="teacher-item">
									<div class="thumb-holder">
										<a href="{{ url('/front/pages/single-teacher') }}"><img src="{{ asset("images/line-dec.png")}}" alt=""></a>
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="down-content">
										<a href="{{ url('/front/pages/single-teacher') }}"><h4>{{ $teachers[0]->name }}</h4></a>
										<span>{{ $teachers[0]->field }}</span>
										<p>{{ $teachers[0]->description }}</p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="teacher-item">
									<div class="thumb-holder">
										<a href="{{ url('/front/pages/single-teacher') }}"><img src="{{ asset("images/line-dec.png")}}" alt=""></a>
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="down-content">
										<a href="{{ url('/front/pages/single-teacher') }}"><h4>{{ $teachers[1]->name }}</h4></a>
										<span>{{ $teachers[1]->field }}</span>
										<p>{{ $teachers[1]->description }}</p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="teacher-item">
									<div class="thumb-holder">
										<a href="{{ url('/front/pages/single-teacher') }}"><img src="{{ asset("images/line-dec.png")}}" alt=""></a>
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="down-content">
										<a href="{{ url('/front/pages/single-teacher') }}"><h4>{{ $teachers[2]->name }}</h4></a>
										<span>{{ $teachers[2]->field }}</span>
										<p>{{ $teachers[2]->description }}</p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="teacher-item">
									<div class="thumb-holder">
										<a href="{{ url('/front/pages/single-teacher') }}"><img src="{{ asset("images/line-dec.png")}}" alt=""></a>
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="down-content">
										<a href="{{ url('/front/pages/single-teacher') }}"><h4>{{ $teachers[3]->name }}</h4></a>
										<span>{{ $teachers[3]->field }}</span>
										<p>{{ $teachers[3]->description }}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Teachers (end) -->
