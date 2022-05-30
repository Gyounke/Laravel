<!-- Courses (start) -->
<section class="popular-courses">
					<div class="container">
						<div class="row">
							<div class="section-heading text-center">
								<h1>Popular Courses</h1>
								<img src="{{ asset("assets/images/line-dec.png")}}" alt="">
								<p>Twee Vice synth stumptown distillery aesthetic slow carb</p>
							</div>
						</div>
						<div class="row">
							<div id="owl-courses">
								<div class="item course-item">
									<a href="{{ url('/front/pages/single-course') }}"><img src="http://placehold.it/345x235" alt=""></a>
									<div class="down-content">
										<img src="{{ asset("images/" . $courses[0]->image) }}" alt="">
										<h6>{{ $courses[0]->professor}}</h6>
										<div class="price-red">
											<span>{{ $courses[0]->price}}</span>
											<div class="base"></div>
										</div>
										<a href="{{ url('/front/pages/single-course') }}"><h4>{{ $courses[0]->course_name }}</h4></a>
										<p>{{ $courses[0]->course_description}}</p>
										<div class="text-button">
											<a href="{{ url('/front/pages/single-course') }}">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="item course-item">
									<a href="{{ url('/front/pages/single-course') }}"><img src="http://placehold.it/345x235" alt=""></a>
									<div class="down-content">
										<img src="{{ asset("images/" . $courses[1]->image) }}" alt="">
										<h6>{{ $courses[1]->professor}}</h6>
										<div class="price-red">
											<span>{{ $courses[1]->price}}</span>
											<div class="base"></div>
										</div>
										<a href="{{ url('/front/pages/single-course') }}"><h4>{{ $courses[1]->course_name }}</h4></a>
										<p>{{ $courses[1]->course_description}}</p>
										<div class="text-button">
											<a href="{{ url('/front/pages/single-course') }}">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="item course-item">
									<a href="{{ url('/front/pages/single-course') }}"><img src="http://placehold.it/345x235" alt=""></a>
									<div class="down-content">
										<img src="{{ asset("images/" . $courses[2]->image) }}" alt="">
										<h6>{{ $courses[2]->professor}}</h6>
										<div class="price-red">
											<span>{{ $courses[2]->price}}</span>
											<div class="base"></div>
										</div>
										<a href="{{ url('/front/pages/single-course') }}"><h4>{{ $courses[2]->course_name }}</h4></a>
										<p>{{ $courses[2]->course_description}}</p>
										<div class="text-button">
											<a href="{{ url('/front/pages/single-course') }}">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="item course-item">
									<a href="{{ url('/front/pages/single-course') }}"><img src="http://placehold.it/345x235" alt=""></a>
									<div class="down-content">
										<img src="{{ asset("images/" . $courses[3]->image) }}" alt="">
										<h6>{{ $courses[3]->professor}}</h6>
										<div class="price-red">
											<span>{{ $courses[3]->price}}</span>
											<div class="base"></div>
										</div>
										<a href="{{ url('/front/pages/single-course') }}"><h4>{{ $courses[3]->course_name }}</h4></a>
										<p>{{ $courses[3]->course_description}}</p>
										<div class="text-button">
											<a href="{{ url('/front/pages/single-course') }}">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="item course-item">
									<a href="{{ url('/front/pages/single-course') }}"><img src="http://placehold.it/345x235" alt=""></a>
									<div class="down-content">
										<img src="{{ asset("images/" . $courses[4]->image) }}" alt="">
										<h6>{{ $courses[4]->professor}}</h6>
										<div class="price-red">
											<span>{{ $courses[4]->price}}</span>
											<div class="base"></div>
										</div>
										<a href="{{ url('/front/pages/single-course') }}"><h4>{{ $courses[4]->course_name }}</h4></a>
										<p>{{ $courses[4]->course_description}}</p>
										<div class="text-button">
											<a href="{{ url('/front/pages/single-course') }}">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="item course-item">
									<a href="{{ url('/front/pages/single-course') }}"><img src="http://placehold.it/345x235" alt=""></a>
									<div class="down-content">
										<img src="{{ asset("images/" . $courses[5]->image) }}" alt="">
										<h6>{{ $courses[5]->professor}}</h6>
										<div class="price-red">
											<span>{{ $courses[5]->price}}</span>
											<div class="base"></div>
										</div>
										<a href="{{ url('/front/pages/single-course') }}"><h4>{{ $courses[5]->course_name }}</h4></a>
										<p>{{ $courses[5]->course_description}}</p>
										<div class="text-button">
											<a href="{{ url('/front/pages/single-course') }}">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="item course-item">
									<a href="{{ url('/front/pages/single-course') }}"><img src="http://placehold.it/345x235" alt=""></a>
									<div class="down-content">
										<img src="{{ asset("images/" . $courses[6]->image) }}" alt="">
										<h6>{{ $courses[6]->professor}}</h6>
										<div class="price-red">
											<span>{{ $courses[6]->price}}</span>
											<div class="base"></div>
										</div>
										<a href="{{ url('/front/pages/single-course') }}"><h4>{{ $courses[6]->course_name }}</h4></a>
										<p>{{ $courses[6]->course_description}}</p>
										<div class="text-button">
											<a href="{{ url('/front/pages/single-course') }}">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="item course-item">
									<a href="{{ url('/front/pages/single-course') }}"><img src="http://placehold.it/345x235" alt=""></a>
									<div class="down-content">
										<img src="{{ asset("images/" . $courses[7]->image) }}" alt="">
										<h6>{{ $courses[7]->professor}}</h6>
										<div class="price-red">
											<span>{{ $courses[7]->price}}</span>
											<div class="base"></div>
										</div>
										<a href="{{ url('/front/pages/single-course') }}"><h4>{{ $courses[7]->course_name }}</h4></a>
										<p>{{ $courses[7]->course_description}}</p>
										<div class="text-button">
											<a href="{{ url('/front/pages/single-course') }}">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="item course-item">
									<a href="{{ url('/front/pages/single-course') }}"><img src="http://placehold.it/345x235" alt=""></a>
									<div class="down-content">
										<img src="{{ asset("images/" . $courses[8]->image) }}" alt="">
										<h6>{{ $courses[8]->professor}}</h6>
										<div class="price-red">
											<span>{{ $courses[8]->price}}</span>
											<div class="base"></div>
										</div>
										<a href="{{ url('/front/pages/single-course') }}"><h4>{{ $courses[8]->course_name }}</h4></a>
										<p>{{ $courses[8]->course_description}}</p>
										<div class="text-button">
											<a href="{{ url('/front/pages/single-course') }}">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</section>

				<!-- Courses (end) -->