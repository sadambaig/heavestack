@include('front_partials.head')
		<!-- backtotop - end -->
		<!-- header_section - start
		================================================== -->
		<header class="header_section sticky_header secondary_header clearfix" id="topNav">
			@include('front_partials.top_nav')
			@include('front_partials.navigation')

			@include('front_partials.search')
		</header>
		<!-- header_section - end
		================================================== -->


		<!-- main body - start
		================================================== -->
		<main>
			<div class="container d-none">
					<nav class="navbar fixed-bottom navbar-expand-sm navbottom">						  
						  <div class=" justify-content-center main-menu1">
						    <ul class="navbar-nav mr-auto">
						      <li class="nav-item active">
						        <a class="nav-link" href="#">Home </a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#aboutus">About</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#service">Services</a>
						      </li>
						      
						    </ul>
						  </div>
						</nav>
			</div>

			<!-- sidebar mobile menu - start
			================================================== -->
			{{-- <div class="sidebar-menu-wrapper">
				<div class="sidebar_mobile_menu">

					<span class="close_btn"><i class="fal fa-times"></i></span>

					<div class="mobile_menu_list clearfix">
						<ul class="ul_li_block clearfix">
							<li>
								<a href="index.html">Home</a>
								<!-- <ul class="dropdown-menu">
									<li><a href="index_1.html">Home Page V.1</a></li>
									<li><a href="index_2.html">Home Page V.2</a></li>
									<li><a href="index_3.html">Home Page V.3</a></li>
								</ul> -->
							</li>
							<li><a href="#aboutus">About</a></li>
							<li>
								<a href="#service">Services</a>
								<!-- <ul class="dropdown-menu">
									<li><a href="service_1.html">Service V.1</a></li>
									<li><a href="service_2.html">Service V.2</a></li>
									<li><a href="service_details.html">Service Details</a></li>
								</ul> -->
							</li>
							<!-- <li>
								<a href="portfolio.html">Our Portfolio</a> -->
								<ul class="dropdown-menu">
									<li><a href="pricing.html">Pricing Plans</a></li>
									<li><a href="team.html">Creative Team</a></li>
									<li class="dropdown">
										<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Portfolio</a>
										<ul class="dropdown-menu">
											<li><a href="portfolio_metro.html">Portfolio Metro</a></li>
											<li><a href="portfolio_masonry.html">Portfolio Masonry</a></li>
											<li><a href="portfolio_details.html">Portfolio Details</a></li>
										</ul>
									</li>
									<li><a href="faq.html">F.A.Q.</a></li>
								</ul>
							<!-- </li> -->
							<li class="active">
								<a href="Careers.html">Careers</a>
								<!-- <ul class="dropdown-menu">
									<li><a href="shop.html">Our Shop</a></li>
									<li><a href="shop_details.html">Shop Details</a></li>
								</ul> -->
							</li>
							<!-- <li>
								<a href="blog_standard.html">Blog</a>
							</li> -->
							<!-- <li>
								<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News</a> -->
								<!-- <ul class="dropdown-menu">
									<li><a href="blog_grid.html">Blog Grid</a></li>
									<li><a href="blog_standard.html">Blog Standard</a></li>
									<li><a href="blog_details.html">Blog Details</a></li>
								</ul> -->
							<!-- </li> -->
							<li><a href="contact.html">Conatct</a></li>
						</ul>
					</div>

				</div>
				<div class="overlay"></div>
			</div> --}}
			<!-- sidebar mobile menu - end
			================================================== -->


			{{-- @include('front_partials.banner') --}}
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- shop_section - start
			================================================== -->
			@yield('content')
			<!-- shop_section - end
			================================================== -->
			<div class="brand_section primary_brand_section bg_gray d-flex align-items-center clearfix">
				<div class="container text-center">
					<div class="row align-items-center justify-content-lg-between">

						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="brand_logo bg_default_yellow">
								<a href="#!"  id="logov7a">
									<img src="{{ asset('public/front/images/logo/logov7.png')}}" class="logov7a" alt="logo_not_found">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main>
		<!-- main body - end
		================================================== -->


	@include('front_partials.footer')
	@include('front_partials.scripts')