<!-- Presentation (start) -->
<section>
					<div class="welcome-intro">
						<div class="container">
							<div class="row">
								<div class="col-md-8">
									<div class="section-heading">
										<h1>Welcome to Educa</h1>
										<span>Twee Vice synth stumptown</span>
										<img src="{{ asset("assets/images/line-dec.png")}}" alt="">
										<p>Twee Vice synth stumptown, distillery aesthetic slow-carb Intelligentsia bitters taxidermy<br>McSweeney's, flexitarian actually iPhone mlkshk brunch.</p>
									</div>
									<div class="row">
										<div class="col-md-6 col-sm-6">
											<div class="service-item">
												<i class="{{ $services[0]->icone}}"></i>
												<h4>{{ $services[0]->title}}</h4>
												<div class="line-dec"></div>
												<p>{{ $services[0]->description}}</p>
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="service-item">
												<i class="{{ $services[1]->icone}}"></i>
												<h4>{{ $services[1]->title }}</h4>
												<div class="line-dec"></div>
												<p>{{ $services[1]->description }}</p>
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="service-item">
												<i class="{{ $services[2]->icone }}"></i>
												<h4>{{ $services[2]->title}}</h4>
												<div class="line-dec"></div>
												<p>{{ $services[2]->description }}</p>
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="service-item last-service">
												<i class="{{ $services[3]->icone }}"></i>
												<h4>{{ $services[3]->title }}</h4>
												<div class="line-dec"></div>
												<p>{{ $services[3]->description }}</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="request-information">
										<div class="widget-heading">
											<h4>Request Information</h4>
										</div>
										<div class="search-form">
											<input type="text" id="name" name="s" placeholder="Full Name" value="">
											<input type="text" id="address" name="s" placeholder="E-mail Address" value="">
			                                <div class="select">
			                                    <select name="mark" id="campus">
			                                        <option value="-1">Campus of Interests</option>
			                                          <option>Nearby</option>
			                                          <option>High Classes</option>
			                                          <option>Short Time</option>
			                                          <option>Long Time</option>
			                                    </select>
			                                </div>
			                                <div class="select">
			                                    <select name="mark" id="program">
			                                        <option value="-1">Program of Interests</option>
			                                          <option>Wroking Process</option>
			                                          <option>Archivements</option>
			                                          <option>Social</option>
			                                          <option>Profits</option>
			                                    </select>
			                                </div>
			                                <div class="accent-button">
			                                	<a href="#">Submit Request</a>
			                                </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Presentation (end) -->