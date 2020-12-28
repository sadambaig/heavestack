<div class="header_bottom">
				<div class="maxw_1420 container">
					<div class="row align-items-center">

						<div class="col-lg-2">
							<div class="brand_logo">
								<a href="{{ url('/') }}" id="logov7">
									<img src="{{ asset('public/front/images/logo/logov7.png')}}" class="logov7" alt="logo_not_found">
								</a>

								<ul class="mobilemenu_btns_group ul_li_right clearfix">

									<li>
										<button class="gradient-primary" style="padding: 12px 20px;border-radius: 6px;color: white;">Call us</button>
									</li>
									<!-- <li>
										<button type="button" class="cart_btn">
											<i class="fal fa-shopping-cart"></i>
											<small class="cart_counter">2</small>
										</button>
									</li> -->
									<!-- <li>
										<button type="button" class="mobile_menu_btn"><i class="fal fa-bars"></i></button>
									</li> -->
								</ul>
							</div>
						</div>

						<div class="col-lg-7">
							<nav class="main_menu clearfix">
								<ul class="ul_li_center clearfix">
									<li class="{{ (Request::segments(0)=='')?'active':'' }}">
										<a href="{{ url('/') }}">Home</a>
										<!-- <ul class="submenu">
											<li class="has_child">
												<a href="index_1.html">Home Page V.1</a>
												<ul class="submenu">
													<li class="has_child">
														<a href="#!">example V.1</a>
														<ul class="submenu">
															<li><a href="#!">example V.1</a></li>
															<li><a href="#!">example V.2</a></li>
															<li><a href="#!">example V.3</a></li>
														</ul>
													</li>
													<li><a href="#!">example V.2</a></li>
													<li><a href="#!">example V.3</a></li>
												</ul>
											</li>
											<li class="has_child">
												<a href="index_2.html">Home Page V.2</a>
												<ul class="submenu">
													<li class="has_child">
														<a href="#!">example V.1</a>
														<ul class="submenu">
															<li><a href="#!">example V.1</a></li>
															<li><a href="#!">example V.2</a></li>
															<li><a href="#!">example V.3</a></li>
														</ul>
													</li>
													<li><a href="#!">example V.2</a></li>
													<li><a href="#!">example V.3</a></li>
												</ul>
											</li>
											<li class="has_child">
												<a href="index_3.html">Home Page V.3</a>
												<ul class="submenu">
													<li class="has_child">
														<a href="#!">example V.1</a>
														<ul class="submenu">
															<li><a href="#!">example V.1</a></li>
															<li><a href="#!">example V.2</a></li>
															<li><a href="#!">example V.3</a></li>
														</ul>
													</li>
													<li><a href="#!">example V.2</a></li>
													<li><a href="#!">example V.3</a></li>
												</ul>
											</li>
										</ul> -->
									</li>
									<li><a href="{{ url('/') }}">About</a></li>
									<li class="">
										<a href="{{ url('/') }}">Services</a>
										<!-- <ul class="submenu">
											<li><a href="service_1.html">Service V.1</a></li>
											<li><a href="service_2.html">Service V.2</a></li>
											<li><a href="service_details.html">Service Details</a></li>
										</ul> -->
									</li>
									<!-- <li>
										<a href="portfolio.html">Our Portfolio</a> -->
										<!-- <ul class="submenu">
											<li><a href="pricing.html">Pricing Plans</a></li>
											<li><a href="team.html">Creative Team</a></li>
											<li class="has_child">
												<a href="#!">Our Portfolio</a>
												<ul class="submenu">
													<li><a href="portfolio_metro.html">Portfolio Metro</a></li>
													<li><a href="portfolio_masonry.html">Portfolio Masonry</a></li>
													<li><a href="portfolio_details.html">Portfolio Details</a></li>
												</ul>
											</li>
											<li><a href="faq.html">F.A.Q.</a></li>
										</ul> -->
									<!-- </li> -->
								
									<li class="{{ (Request::segment(1)=='career')?'active':'' }}">
										<a href="{{ route('front.career') }}">Careers</a>
										<!-- <ul class="submenu">
											<li><a href="shop.html">Our Shop</a></li>
											<li><a href="shop_details.html">Shop Details</a></li>
										</ul> -->
									</li>
									<li class="{{ (Request::segment(1)=='blog')?'active':'' }}"><a href="{{ route('front.blog') }}">Blog</a></li>
									<!-- <li>
										<a href="blog_standard.html">Blog</a>
									</li> -->
									<!-- <li class="has_child">
										<a href="#!">News</a>
										<ul class="submenu">
											<li><a href="blog_grid.html">Blog Grid</a></li>
											<li><a href="blog_standard.html">Blog Standard</a></li>
											<li><a href="blog_details.html">Blog Details</a></li>
										</ul>
									</li> -->
									<li class="{{ (Request::segment(1)=='contact')?'active':'' }}">
										<a href="{{ route('front.contact') }}">Conatct</a></li>
								</ul>
							</nav>
						</div>

						<div class="col-lg-3">
							<ul class="header_icon_btns ul_li_right clearfix">
								<li>
									<button class="gradient-primary" style="padding: 12px 20px;border-radius: 6px;color: white;">Call us</button>
									</button>
								</li>
								<!-- <li>
									<button type="button" class="cart_btn">
										<i class="fal fa-shopping-cart"></i>
										<small class="cart_counter">2</small>
									</button>
								</li> -->
								<!-- <li>
									<button class="btn gradient3" style="padding: 12px 20px; background-color: gray;border-radius: 6px;color: white;">Call us</button>
								</li> -->
							</ul>
						</div>

					</div>
				</div>
			</div>