<!-- Testimonials (start) -->

<section class="testimonials-news">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="section-heading">
									<h1>What Our Students Say</h1>
									<img src="{{ asset("images/line-dec.png")}}" alt="">
								</div>
								<div class="row">
									<div class="col-md-12">
										<div id="owl-testimonials">
											<div class="item">
												<i class="fa fa-quote-right"></i>
												<p>{{ $testimonials[0]->text}}</p>
												<img src="{{ asset("images/" . $testimonials[0]->image) }}" alt="">
												<h4>{{ $testimonials[0]->name }}</h4>
												<span>{{ $testimonials[0]->job}}</span>
											</div>
											<div class="item">
												<i class="fa fa-quote-right"></i>
												<p>{{ $testimonials[1]->text }}</p>
												<img src="{{ asset("images/" . $testimonials[1]->image) }}" alt="">
												<h4>{{ $testimonials[1]->name }}</h4>
												<span>{{ $testimonials[1]->job }}</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="section-heading university-news">
									<h1>University News</h1>
									<img src="{{ asset("images/line-dec.png")}}" alt="">
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="news-item">
											<a href="single-post.html"><img src="http://placehold.it/175x130" alt=""></a>
											<ul>
												<li>7 Oct 2015</li>
												<li>By Admin</li>
												<li>2 Comments</li>
											</ul>
											<a href="single-post.html"><h4>New University Finder: Compare</h4></a>
											<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic.</p>
										</div>
										<div class="news-item">
											<a href="single-post.html"><img src="http://placehold.it/175x130" alt=""></a>
											<ul>
												<li>7 Oct 2015</li>
												<li>By Admin</li>
												<li>2 Comments</li>
											</ul>
											<a href="single-post.html"><h4>How Do Students Use Rankings?</h4></a>
											<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Testimonials (end) -->