<!DOCTYPE html>
<html>
<head>
	<title>Heave Stack</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="{{asset('public/front/images/icons/h.png')}}')}}">

		<!-- fraimwork - css include -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/front/css/bootstrap.min.css')}}">

		<!-- icon - css include -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/front/css/flaticon.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/front/css/fontawesome.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css')}}">
		<!-- custom - css include -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/front/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/front/css/extracss.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/front/block.css')}}">
	
</head>
<body>
		<div id="thetop"></div>
		<div id="backtotop">
			<a href="#" id="scroll">
				<i class="far fa-arrow-up"></i>
			</a>
		</div>

<!-- header_section - start
		================================================== -->
		<header class="header_section sticky_header secondary_header clearfix " id="topNav">
			<div class="header_top bg_light clearfix" >
				<div class="maxw_1420 container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<ul class="header_contact_info ul_li clearfix">
								<li><i class="far fa-map-marker-alt"></i> Islamabad, Pakistan</li>
								<li><i class="far fa-envelope-open"></i> info@heavestack.com</li>
							</ul>
						</div>

						<div class="col-lg-6">
							<ul class="header_items_list ul_li_right clearfix">
								<li>
									<ul class="header_contact_info ul_li clearfix">
										<li><i class="far fa-clock"></i> Sun - Monday, 09 am - 04 pm</li>
									</ul>
								</li>
								<li>
									<div class="select_option mb-0">
										<button class="gradient-primary" style="padding: 12px 20px;border-radius: 6px;color: white;">Contact Us</button>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="header_bottom">
				<div class="maxw_1420 container">
					<div class="row align-items-center">

						<div class="col-lg-2">
							<div class="brand_logo">
								<a href="index.html" id="logov7">
									<img src="{{asset('public/front/images/logo/heave.png')}}" class="logov7" alt="logo_not_found">
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
									<li class="active">
										<a href="index.html">Home</a>
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
									<li><a href="#aboutus">About</a></li>
									<li class="">
										<a href="#service">Services</a>
										<!-- <ul class="submenu">
											<li><a href="service_1.html">Service V.1</a></li>
											<li><a href="service_2.html">Service V.2</a></li>
											<li><a href="service_details.html">Service Details</a></li>
										</ul> -->
									</li>
									<li>
										<a href="{{ route('front.career') }}">Careers</a>
										<!-- <ul class="submenu">
											<li><a href="shop.html">Our Shop</a></li>
											<li><a href="shop_details.html">Shop Details</a></li>
										</ul> -->
									</li>
									<li><a href="{{ route('front.blog') }}">Blog</a></li>
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
									<!-- <li>
										<a href="careers.html">Careers</a> -->
										<!-- <ul class="submenu">
											<li><a href="shop.html">Our Shop</a></li>
											<li><a href="shop_details.html">Shop Details</a></li>
										</ul> -->
									<!-- </li>
									<li>
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
									<li><a href="{{ route('front.contact') }}">Conatct</a></li>
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

			<div id="search_body_collapse" class="search_body_collapse collapse">
				<div class="search_body">
					<div class="container maxw_1420">
						<form action="#">
							<div class="form_item m-0">
								<input type="search" name="search" placeholder="Type here...">
								<button type="submit"><i class="fal fa-search"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</header>
		<!-- header_section - end-->

			
		<!-- Main Body--- start -->
		<main>

			<!-- <div class="container d-none">
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
			<div class="sidebar-menu-wrapper">
				<div class="sidebar_mobile_menu">

					<span class="close_btn"><i class="fal fa-times"></i></span>

					<div class="mobile_menu_list clearfix">
						<ul class="ul_li_block clearfix">
							<li class="active">
								<a href="index.html">Home</a>
								
							</li>
							<li><a href="#aboutus">About</a></li>
							<li>
								<a href="#service">Services</a>
								
							</li>
							
							<li>
								<a href="careers.html">Careers</a>
								
							</li>

							
							<li><a href="contact.html">Conatct</a></li>
						</ul>
					</div>

				</div>
				<div class="overlay"></div>
			</div> -->


			<!-- sidebar mobile menu - end
			================================================== -->
			<div id="pgc-8802-0-0" class="panel-grid-cell">
			    <div id="panel-8802-0-0-0" class="so-panel widget widget_head-servises-section panel-first-child panel-last-child" data-index="0">
			        <div class="so-widget-head-servises-section so-widget-head-servises-section-style-d75171398898">
			            <div class="section section--en rocket-lazyload lazyloaded" style="background-image: url('../public/front/images/banner.jpg')}}');" data-ll-status="loaded">
			                <img
			                    width="300"
			                    height="148"
			                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%20148'%3E%3C/svg%3E"
			                    class="section__image img-fluid"
			                    alt="app-development"
			                    style="opacity: 0;"
			                    data-lazy-srcset="https://eleks.com/wp-content/uploads/app-development-300x148.jpg')}} 300w, https://eleks.com/wp-content/uploads/app-development-768x380.jpg')}} 768w, https://eleks.com/wp-content/uploads/app-development-1024x507.jpg')}} 1024w"
			                    data-lazy-sizes="(max-width: 300px) 100vw, 300px"
			                    data-lazy-src="https://eleks.com/wp-content/uploads/app-development-300x148.jpg')}}"
			                />
			                <noscript>
			                    <img
			                        width="300"
			                        height="148"
			                        src="https://eleks.com/wp-content/uploads/app-development-300x148.jpg')}}"
			                        class="section__image img-fluid"
			                        alt="app-development"
			                        style="opacity: 0;"
			                        srcset="
			                            https://eleks.com/wp-content/uploads/app-development-300x148.jpg')}}   300w,
			                            https://eleks.com/wp-content/uploads/app-development-768x380.jpg')}}   768w,
			                            https://eleks.com/wp-content/uploads/app-development-1024x507.jpg')}} 1024w
			                        "
			                        sizes="(max-width: 300px) 100vw, 300px"
			                    />
			                </noscript>
			                <div class="section__related">
			                    <div class="tabs related-services" style="opacity: 0;">
			                        <div class="related-services__contentWrap">
			                            <div class="tab__content related-services__content active s1" style="display: none;" data-id="related-service17">
			                                <div class="related-services__contentInner">
			                                    <div class="related-services__content-title">Related Services</div>
			                                    <ul class="related-services__content-list related-services__content-list--gradient3">
			                                        <li class="">
			                                            <a href="">PoC Development Services</a>
			                                        </li>
			                                        <li class="active">
			                                            <a href="">Application development</a>
			                                        </li>
			                                        <li class="">
			                                            <a href="">Application re‑engineering</a>
			                                        </li>
			                                        <li class="">
			                                            <a href="">Cloud Migration</a>
			                                        </li>
			                                    </ul>
			                                </div>
			                            </div>
			                            <div class="tab__content related-services__content active s2"  style="display: flex;" data-id="related-service16">
			                                <div class="related-services__contentInner">
			                                    <div class="related-services__content-title">Related Services</div>
			                                    <ul class="related-services__content-list related-services__content-list--gradient2">
			                                        <li class="">
			                                            <a href="">Data Science</a>
			                                        </li>
			                                        <li class="">
			                                            <a href="">Product design</a>
			                                        </li>
			                                        <li class="">
			                                            <a href="">Technical feasibility study</a>
			                                        </li>
			                                        <li class="">
			                                            <a href="">Cyber Security</a>
			                                        </li>
			                                    </ul>
			                                </div>
			                            </div>
			                            <div class="tab__content related-services__content active s3"  style="display: none;" data-id="related-service18">
			                                <div class="related-services__contentInner">
			                                    <div class="related-services__content-title">Related Services</div>
			                                    <ul class="related-services__content-list related-services__content-list--gradient1">
			                                        <li class="">
			                                            <a href="">Software Audit</a>
			                                        </li>
			                                        <li class="">
			                                            <a href="">Software Testing and QA Services</a>
			                                        </li>
			                                        <li class="">
			                                            <a href="">Technical Support</a>
			                                        </li>
			                                    </ul>
			                                </div>
			                            </div>
			                        </div>
			                        <div style="display: flex;" class="tab__item related-services__title gradient3--vertical active tab1" data-id="related-service17">
			                            <span >Engineering</span>
			                        </div>
			                        <div class="tab__item related-services__title gradient2--vertical active tab2" data-id="related-service16 ">
			                            <span >Advisory</span>
			                        </div>
			                        <div class="tab__item related-services__title gradient1--vertical active tab3" data-id="related-service18 ">
			                            <span >Optimisation</span>
			                        </div>
			                    </div>
			                </div>
			               
			                <div class="section__mask"></div>
			                <div class="section__row">
			                    <div class="section__text">
			                        <div class="container" id="cont">
			                            <span class="section__group gradient-primary" style="opacity: 0;">Engineering</span>
			                            <h1 class="title title--white">Custom WEB Development Services</h1>
			                            <div class="description">
			                                We’ll help you bring your most complex software vision to life with our leading full-cycle custom application development service. So you can focus on delivering an incredible user experience that sets you
			                                apart from the competition.
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>


			<section class="d-lg-none d-md-none mt-3">
				<div class="container-fluid">
					<div class="row">
						<!-- <div class="col-lg-12 col-md-12 col-sm-12"> -->
							<div class="mini-slide-text d-flex d-lg-none d-md-none">
								<div class="c12 active">
									<p><a href="#">Web Development</a></p>
								</div>
								<div class="c12">
									<p><a href="#service">Graphic Designing</a></p>
								</div>
								<div class="c12">
									<p><a href="#about">CRM solution</a></p>
								</div>
								<div class="c12">
									<p><a href="#">Digital Marketing</a></p>
								</div>
								<div class="c12">
									<p><a href="#about">Design Branding</a></p>
								</div>
								<div class="c12">
									<p><a href="#service">E-commerce solution</a></p>
								</div>
								<!-- <div class="c12">
									<p><a href="#">Home heave stack software house</a></p>
								</div>
								<div class="c12">
									<p><a href="#about">About heave stack software house</a></p>
								</div>
								<div class="c12">
									<p><a href="#service">Services heave stack software house</a></p>
								</div>
								<div class="c12">
									<p><a href="#">Home</a></p>
								</div>
								<div class="c12">
									<p><a href="#about">About</a></p>
								</div>
								<div class="c12">
									<p><a href="#service">Services</a></p>
								</div> -->
							</div>							
						<!-- </div> -->
					</div>
				</div>
			</section>
				<!-- about_section - start
			================================================== -->
			<section class="about_section sec_ptb_130 clearfix" id="aboutus">
				<div class="container">
					<div class="section_title text-center mb_80 wow fadeInUp2" data-wow-delay=".1s">
						<div class="row justify-content-center">
							<div class="col-lg-8 col-md-7 col-sm-9 col-xs-12">
								<h4 class="small_title">About Our Company</h4>
								<h2 class="big_title mb-0">
									Develop Your Dream Works With Heave Stack
								</h2>
								<span class="biggest_title">AboutUs</span>
							</div>
						</div>
					</div>
					<div class="row justify-content-lg-between justify-content-md-center">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="about_content wow fadeInUp2 simpl touches__item" data-wow-delay=".3s">
								<h2>Simplicity </h2>
								<p>
									Product engineering is a complex thing. We organize work processes in a simple and transparent way for all participants. And make them as simple as a strategy doomed to success.
								</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="about_content wow fadeInUp2 advise touches__item">
								<h2>Advisory</h2>
								<p>
									We close the gap between solution advisory and product engineering, making development processes simple and easy to follow. Our R&D lab of analysts and solution architects will figure out all the ‘’hows’’ regarding business models, monetization, and digital transformations.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="about_content wow fadeInUp2 inno touches__item">
								<h2>Innovation</h2>
								<p>We see a future where all markets are dominated by tech companies and work hard to accelerate this process. We help agile-minded people to succeed in technology challenges.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="cricle_border">
					<img src="{{asset('public/front/images/about/about.svg')}}" alt="icon_not_found" style="background-position: center center;
    					background-repeat: no-repeat;background-size: contain;">
				</div>
			</section>
			<!-- about_section - end
			================================================== -->


			<!-- <section class="feature_section sec_ptb_130 clearfix" id="service">
				<div class="container">

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="section_title text-center mb_30 wow fadeInUp2" data-wow-delay=".1s">
								<img src="{{asset('public/front/images/combine.jpg')}}">
							</div>
						</div>
					</div> -->

					<!-- <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<div class="feature_image_1 wow fadeInUp2" data-wow-delay=".2s">
								<img src="{{asset('public/front/images/feature/img_05.jpg')}}" alt="icon_not_found">
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 order-first">
							<div class="feature_primary wow fadeInUp2 clearfix" data-wow-delay=".4s">
								<div class="item_icon bg_default_yellow">
									<i class="fa fa-rocket"></i>
								</div>
								<div class="item_content">
									<h3 class="item_title">Web Development</h3>
									<p>
										We Plan, Design, & Develop Websites from start to finish.Our website development company works with clients based all over Pakistan and worldwide.  
              
									</p>
									<a class="text_btn" target="_blank" href="service_details.html"><span>Read More</span> <i class="far fa-arrow-right"></i></a>
								</div>
							</div>

							<div class="feature_primary wow fadeInUp2 clearfix" data-wow-delay=".6s">
								<div class="item_icon bg_default_orange">
									<i class="fal fa-laptop-code"></i>
								</div>
								<div class="item_content">
									<h3 class="item_title">App Development</h3>
									<p>
										We know how to build products that can scale to your business' needs.
                        				The mobile application allows you to open new distribution channels for your business.
                    
                       					                   
              
									</p>
									<a class="text_btn" target="_blank" href="service_details.html"><span>Read More</span> <i class="far fa-arrow-right"></i></a>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="feature_primary wow fadeInUp2 clearfix" data-wow-delay=".4s">
								<div class="item_icon bg_default_blue">
									<i class="fal fa-cube"></i>
								</div>
								<div class="item_content">
									<h3 class="item_title">Graphic Designing</h3>
									<p>
										A visual identity that will allow you to stand out, attract attention.Heave Stack offers the evolution and creation of brand images.
									</p>
									<a class="text_btn" target="_blank" href="service_details.html"><span>Read More</span> <i class="far fa-arrow-right"></i></a>
								</div>
							</div>

							<div class="feature_primary wow fadeInUp2 clearfix" data-wow-delay=".6s">
								<div class="item_icon bg_default_pink">
									<i class="fal fa-cog"></i>
								</div>
								<div class="item_content">
									<h3 class="item_title">CRM Software</h3>
									<p>
										
                       				 Now a days CRM is the most important approach to manage a company's interaction with potential clients. We are the best CRM software and website development company
                    
									</p>
									<a class="text_btn" target="_blank" href="service_details.html"><span>Read More</span> <i class="far fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div> -->

				<!-- </div>

			</section> -->
			<!-- custom software -->

			<section class="overlayimgcirculate">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<h4>Why Choose Heave Stack</h4>
							<p class="col-5 plethora">
								There are a plethora of options for custom software development services, but there are more reasons to choose only Heave Stack.
							</p>
						</div>
					</div>
					<!-- upper blocks start -->
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-12">
							<div id="firstblock">
						      <i class="fas fa-gem" id="technologyicon"></i>
						      <div>
						        <h5>Cutting-edge Technologies</h5>
						      </div>
						    </div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-12">
							<div id="firstblock">
						      <i class="fas fa-headset" id="technologyicon"></i>
						      <div>
						        <h5>Impeccable Pricing</h5>
						      </div>
						    </div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-12">
							<div id="firstblock">
						      <i class="fas fa-user-friends" id="technologyicon"></i>
						      <div>
						        <h5>Total Customer Satisfaction</h5>
						      </div>
						    </div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-12">
							<div id="firstblock">
						      <i class="fas fa-users" id="technologyicon"></i>
						      <div>
						        <h5>A Team with Experience</h5>
						      </div>
						    </div>
						</div>
					</div>
					<!-- upper block end -->

					<!-- lower block start -->
					<div class="row mt-3">
						<div class="col-lg-3 col-md-4 col-sm-12">
							<div id="firstblock">
						      <i class="far fa-grin-stars" id="technologyicon"></i>
						      <div>
						        <h5>Focused Approach on Customers</h5>
						      </div>
						    </div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-12">
							<div id="firstblock">
						      <i class="fas fa-medal" id="technologyicon"></i>
						      <div>
						        <h5>Great Interactive Designs</h5>
						      </div>
						    </div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-12">
							<div id="firstblock">
						      <i class="fas fa-truck-loading" id="technologyicon"></i>
						      <div>
						        <h5>Timely Deliveries</h5>
						      </div>
						    </div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-12">
							<div id="firstblock">
						      <i class="fas fa-trophy" id="technologyicon"></i>
						      <div>
						        <h5>Perfect Final Product</h5>
						      </div>
						    </div>
						</div>
					</div>
					<!-- lower block end -->
				</div>
			</section>
			<!-- custom software end -->
			<!-- CIRCULATE SERVICES -->
			<!-- <section class="circuluatrimage">
				
							<div>
								<img src="{{asset('public/front/images/solar.png')}}" class="img-fluid" id="spinning-circle">
							</div>
			</section> -->
			<!-- END -->
			<!-- polygonal section -->
			<section class="service_section sec_ptb_130 clearfix" id="service">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
							<div class="section_title text-center mb_50 wow fadeInUp2" data-wow-delay=".1s">
								<h4 class="small_title">What We Offers</h4>
								<h2 class="big_title mb-0">
									We Provide Lot’s Of Web Development Service
								</h2>
								<span class="biggest_title">Services</span>
							</div>
						</div>
					</div>
					<!-- upperside blocks -->
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="service_grid_2 border1 rounded" data-wow-delay=".3s">
								<div class="row">
									<div class="col-6 ">
										<i class="fab fa-laravel service-icon"></i>
									</div>
									<div class="col-6 next-headings">
										<h2 class="h2-service">Laravel</h2>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="service_grid_2 border1 rounded" data-wow-delay=".3s">
								<div class="row">
									<div class="col-6">
										<i class="fab fa-python service-icon"></i>
									</div>
									<div class="col-6 next-heading">
										<h2 class="h2-service">Python</h2>
									</div>
								</div>					
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="service_grid_2 border1 rounded" data-wow-delay=".3s">
								<div class="row">
									<div class="col-6">
										<i class="fab fa-react service-icon"></i>
									</div>
									<div class="col-6 next-heading">
										<h2 class="h2-service">React</h2>
									</div>
								</div>									
							</div>
						</div>
					</div>

					<!-- end -->

					<!-- lowerside block -->
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="service_grid_2 border1 rounded" data-wow-delay=".3s">
								<div class="row">
									<div class="col-6">
										<i class="fab fa-js service-icon"></i>
									</div>
									<div class="col-6 next-heading">
										<h2 class="h2-service">Javascript</h2>
									</div>
								</div>									
							</div>
						</div>			
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="service_grid_2 border1 rounded" data-wow-delay=".3s">
								<div class="row">
									<div class="col-6">
										<i class="fab fa-wordpress-simple service-icon"></i>
									</div>
									<div class="col-6 next-heading">
										<h2 class="h2-service">Wordpress</h2>
									</div>
								</div>					
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="service_grid_2 border1 rounded" data-wow-delay=".3s">
								<div class="row">
									<div class="col-6">
										<i class="fab fa-bootstrap service-icon"></i>
									</div>
									<div class="col-6 next-headings">
										<h2 class="h2-service">Bootstrap</h2>
									</div>
								</div>						
							</div>
						</div>
									
					</div>	
					<!-- end -->
				</div>
			</section>


			<!-- end -->

			<!-- MULTIPLE VERTICLE EXPERTISE section -->
			<!-- <section class="desktopview">
				<section class="expertise dektop">
		         	<div class="expertise-row">
		            <div class="expertiseLeftSec">
		               <h2>Multiple Verticle Expertise</h2>
		               <ul class="nav nav-tabs">
		                  <li class="active"><a data-bs-toggle="tab" href="#travel" class="travel">Travel &amp; Hospitality </a></li>
		                  <li><a data-bs-toggle="tab" href="#on-demand-solutions" class="on-demand-solutions">On-Demand Solutions </a></li>
		                  <li><a data-bs-toggle="tab" href="#real-estate" class="real-estate">Real Estate &amp; Property</a></li>
		                  <li><a data-bs-toggle="tab" href="#social-networking" class="social-networking">Social Networking </a></li>
		                  <li><a data-bs-toggle="tab" href="#education" class="education">Education &amp; eLearning </a></li>
		                  <li><a data-bs-toggle="tab" href="#ecommerce" class="ecommerce">Ecommerce, Retail &amp; B2B </a></li>
		                  <li><a data-bs-toggle="tab" href="#healthcare" class="healthcare">Healthcare &amp; Fitness </a></li>
		                  <li><a data-bs-toggle="tab" href="#media" class="media">Media &amp; Entertainment</a></li>
		               </ul>
		            </div>
		            <div class="tab-content">
		               <div id="travel" class="tab-pane  in active">
		                  <img src="{{asset('public/front/images/travel-blue.png')}}" alt="Travel-Hospitality">
		                  <h3>Travel &amp; Hospitality </h3>
		                  <p>Comprehensive solutions for every segment of Travel industry.</p>
		               </div>
		               <div id="on-demand-solutions" class="tab-pane fade">
		                  <img src="{{asset('public/front/images/on-demand-blue.png')}}" alt="on demand solutions">
		                  <h3>On-Demand Solutions</h3>
		                  <p>Cater the needs of on-demand customers with on-demand apps.</p>
		               </div>
		               <div id="real-estate" class="tab-pane fade">
		                  <img src="{{asset('public/front/images/real-blue.png')}}" alt="Real Estate &amp; Property">
		                  <h3>Real Estate &amp; Property</h3>
		                  <p>Mobile apps &amp; web solutions for real estate agents as well as enterprises.</p>
		               </div>
		               <div id="social-networking" class="tab-pane fade">
		                  <img src="{{asset('public/front/images/networking-blue.png')}}" alt="Social Networking">
		                  <h3>Social Networking</h3>
		                  <p>Custom social media app development to capitalize on massive audiences.</p>
		               </div>
		               <div id="education" class="tab-pane fade">
		                  <img src="{{asset('public/front/images/education-blue.png')}}" alt="Real Estate &amp; Property">
		                  <h3>Education &amp; E-Learning</h3>
		                  <p>Diverse e-Learning solutions for all kinds of Institutions.</p>
		               </div>
		               <div id="ecommerce" class="tab-pane fade">
		                  <img src="{{asset('public/front/images/e-commarce-blue.png')}}" alt="Real Estate &amp; Property">
		                  <h3>eCommerce, Retail &amp; B2B</h3>
		                  <p>Scalable eCommerce, Retail &amp; B2B solutions to boost sales.</p>
		               </div>
		               <div id="healthcare" class="tab-pane fade">
		                  <img src="{{asset('public/front/images/healthcare-blue.png')}}" alt="Real Estate &amp; Property">
		                  <h3>Healthcare &amp; Fitness</h3>
		                  <p>End-to-End healthcare &amp; fitness solutions for higher patient satisfaction.</p>
		               </div>
		               <div id="media" class="tab-pane fade">
		                  <img src="{{asset('public/front/images/media-blue.png')}}" alt="Real Estate &amp; Property">
		                  <h3>Media &amp; Entertainment</h3>
		                  <p>Gain competitive advantage with our integrated Media &amp; Entertainment solutions.</p>
		               </div>
		            </div>
		         </div>
      		</section>
		</section> -->
		
			<!-- desktop end section -->
			<!-- mobile view section -->
		<div class="popular-articles">
			    <header class="popular-header header-card white-underline-links">
			        <h2 class="header-card-title">
			            Our <br />
			            Experties
			        </h2>
			        <p class="header-card-sponsor">
			            Sponsored by<br />
			            <a href="#">Frontend Masters</a>
			        </p>
			    </header>
			    <div class="mini-card-grid">
			        <article class="mini-card module module-article article" id="mini-post-326279">
			            <header class="mini-article-card-header">
			                <div class="mini-article-card-title">
			                   <!--  <div class="mini-article-subhead">
			                        Article
			                        <time datetime="2020-11-27"> Nov 27, 2020 </time>
			                    </div> -->
			                    <h2 class="">
			                        <a href="#" class="article-card-header read-article"> TRAVEL & HOSPITALITY</a>
			                    </h2>
			                    <p>Comprehensive solutions for every segment of Travel industry.</p>
			                </div>
			            </header>
			            <div class="mini-article-meta">
			                <div class="mini-article-byline text-center">
			                    <div class="author-avatar">
			                        <a class="author-name" href="#">
			                           <img src="{{asset('public/front/images/travel-blue.png')}}" alt="Travel-Hospitality">
			                        </a>
			                        <!-- <svg class="half-circle" width="80px" height="80px">
			                            <use xlink:href="#half-circle"></use>
			                        </svg> -->
			                    </div>
			                    <!-- <div class="author-name-area">
			                        <div class="author-name-prefix">
			                            Author
			                        </div>
			                        <a class="author-name" href="#"> Ryan Bethel </a>
			                    </div> -->
			                </div>
			                <div class="tags">
			                    <a href="#" rel="tag">Get a Code</a> 
			                </div>
			            </div>
			        </article>
			        <!-- <style type="text/css">
			        	.mini-article-card-title h2:hover{
			        		background: linear-gradient(90deg,#ff8a00,#e52e71);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    -webkit-box-decoration-break: clone;
    box-decoration-break: clone;
    text-shadow: none;
			        	}
			        </style> -->
			        <article class="mini-card module module-article article" id="mini-post-325635">
			            <header class="mini-article-card-header">
			                <div class="mini-article-card-title">
			                    <!-- <div class="mini-article-subhead">
			                        Article
			                        <time datetime="2020-11-24"> Nov 24, 2020 </time>
			                    </div> -->
			                    <h2 class="">
			                        <a href="#">
			                            ON-DEMAND SOLUTIONS
			                        </a>
			                    </h2>
			                    <p>Cater the needs of on-demand customers with on-demand apps.</p>
			                </div>
			            </header>
			            <div class="mini-article-meta">
			                <div class="mini-article-byline text-center">
			                    <div class="author-avatar">
			                        <a class="author-name" href="">
			                        	<img src="{{asset('public/front/images/on-demand-blue.png')}}" alt="on demand solutions">
			                           <!--  <img
			                                alt=""
			                                src="https://secure.gravatar.com/avatar/aa8075c33691e412f95d10013ed4b503?s=80&amp;d=retro&amp;r=pg"
			                                class="avatar avatar-80 photo jetpack-lazy-image jetpack-lazy-image--handled"
			                                height="80"
			                                width="80"
			                                loading="lazy"
			                                srcset="https://secure.gravatar.com/avatar/aa8075c33691e412f95d10013ed4b503?s=160&amp;d=retro&amp;r=pg 2x"
			                                data-lazy-loaded="1"
			                            /> -->
			                           
			                        </a>
			                       <!--  <svg class="half-circle" width="80px" height="80px">
			                            <use xlink:href="#half-circle"></use>
			                        </svg> -->
			                    </div>
			                    <!-- <div class="author-name-area">
			                        <div class="author-name-prefix">
			                            Author
			                        </div>
			                        <a class="author-name" href="https://css-tricks.com/author/adrianbece/"> Adrian Bece </a>
			                    </div> -->
			                </div>
			                <div class="tags">
			                    <a href="#" rel="tag">Get a Code</a> 
			                </div>
			            </div>
			        </article>
			        <article class="mini-card module module-article article" id="mini-post-325860">
			            <header class="mini-article-card-header">
			                <div class="mini-article-card-title">
			                   <!--  <div class="mini-article-subhead">
			                        Article
			                        <time datetime="2020-11-23"> Nov 23, 2020 </time>
			                    </div> -->
			                    <h2 class="">
			                        <a href="#"> REAL ESTATE & PROPERTY </a>
			                    </h2>
			                    <p>Mobile apps & web solutions for real estate agents as well as enterprises.</p>
			                </div>
			            </header>
			            <div class="mini-article-meta">
			                <div class="mini-article-byline text-center">
			                    <div class="author-avatar">
			                        <a class="author-name" href="">
			                        	<img src="{{asset('public/front/images/real-blue.png')}}" alt="Real Estate &amp; Property">
			                            <!-- <img
			                                alt=""
			                                src="https://secure.gravatar.com/avatar/48cfd8342f9b9e5b7970f63afb0a8ee3?s=80&amp;d=retro&amp;r=pg"
			                                class="avatar avatar-80 photo jetpack-lazy-image jetpack-lazy-image--handled"
			                                height="80"
			                                width="80"
			                                loading="lazy"
			                                srcset="https://secure.gravatar.com/avatar/48cfd8342f9b9e5b7970f63afb0a8ee3?s=160&amp;d=retro&amp;r=pg 2x"
			                                data-lazy-loaded="1"
			                            /> -->
			                        </a>
			                        <!-- <svg class="half-circle" width="80px" height="80px">
			                            <use xlink:href="#half-circle"></use>
			                        </svg> -->
			                    </div>
			                    <!-- <div class="author-name-area">
			                        <div class="author-name-prefix">
			                            Author
			                        </div>
			                        <a class="author-name" href="https://css-tricks.com/author/sdrasner/"> Sarah Drasner </a>
			                    </div> -->
			                </div>
			                <div class="tags">
			                   <a href="#" rel="tag">Get a Code</a> 
			                </div>
			            </div>
			        </article>
			        <article class="mini-card module module-article article" id="mini-post-325887">
			            <header class="mini-article-card-header">
			                <div class="mini-article-card-title">
			                    <!-- <div class="mini-article-subhead">
			                        Article
			                        <time datetime="2020-11-25"> Nov 25, 2020 </time>
			                    </div> -->
			                    <h2 class="">
			                        <a href=""> SOCIAL NETWORKING </a>
			                    </h2>
			                    <p>Custom social media app development to capitalize on massive audiences.</p>
			                </div>
			            </header>
			            <div class="mini-article-meta">
			                <div class="mini-article-byline text-center">
			                    <div class="author-avatar">
			                        <a class="author-name" href="">
			                        	<img src="{{asset('public/front/images/networking-blue.png')}}" alt="Social Networking">
			                           <!--  <img
			                                alt=""
			                                src="https://secure.gravatar.com/avatar/122ec14587214a657616c6f528c55122?s=80&amp;d=retro&amp;r=pg"
			                                class="avatar avatar-80 photo jetpack-lazy-image jetpack-lazy-image--handled"
			                                height="80"
			                                width="80"
			                                loading="lazy"
			                                srcset="https://secure.gravatar.com/avatar/122ec14587214a657616c6f528c55122?s=160&amp;d=retro&amp;r=pg 2x"
			                                data-lazy-loaded="1"
			                            /> -->
			                        </a>
			                       <!--  <svg class="half-circle" width="80px" height="80px">
			                            <use xlink:href="#half-circle"></use>
			                        </svg> -->
			                    </div>
			                    <!-- <div class="author-name-area">
			                        <div class="author-name-prefix">
			                            Author
			                        </div>
			                        <a class="author-name" href="https://css-tricks.com/author/tahmidkhan/"> Tahmid </a>
			                    </div> -->
			                </div>
			                <div class="tags">
			                   <a href="#" rel="tag">Get a Code</a> 
			                </div>
			            </div>
			        </article>
			        <article class="mini-card module module-article article" id="mini-post-325866">
			            <header class="mini-article-card-header">
			                <div class="mini-article-card-title">
			                    <!-- <div class="mini-article-subhead">
			                        Article
			                        <time datetime="2020-11-26"> Nov 26, 2020 </time>
			                    </div> -->
			                    <h2 class="">
			                        <a href="#"> EDUCATION & E-LEARNING </a>
			                    </h2>
			                    <p>Diverse e-Learning solutions for all kinds of Institutions</p>
			                </div>
			            </header>
			            <div class="mini-article-meta">
			                <div class="mini-article-byline text-center">
			                    <div class="author-avatar">
			                        <a class="author-name" href="">
			                        	<img src="{{asset('public/front/images/education-blue.png')}}" alt="Real Estate &amp; Property">
			                           <!--  <img
			                                alt=""
			                                class="avatar avatar-80 photo avatar-default jetpack-lazy-image jetpack-lazy-image--handled"
			                                height="80"
			                                src="https://css-tricks.com/wp-content/uploads/2019/01/me-black-white-80x80.jpg')}}"
			                                width="80"
			                                data-lazy-loaded="1"
			                            /> -->
			                        </a>
			                        <!-- <svg class="half-circle" width="80px" height="80px">
			                            <use xlink:href="#half-circle"></use>
			                        </svg> -->
			                    </div>
			                    <!-- <div class="author-name-area">
			                        <div class="author-name-prefix">
			                            Author
			                        </div> 
			                        <a class="author-name" href="https://css-tricks.com/author/robinrendle/"> Robin Rendle </a>
			                    </div> -->
			                </div>
			                <div class="tags">
			                   <a href="#" rel="tag">Get a Code</a> 
			                </div>
			            </div>
			        </article>
			        <article class="mini-card module module-article article" id="mini-post-324644">
			            <header class="mini-article-card-header">
			                <div class="mini-article-card-title">
			                    <!-- <div class="mini-article-subhead">
			                        Article
			                        <time datetime="2020-11-10"> Nov 10, 2020 </time>
			                    </div> -->
			                    <h2 class="">
			                        <a href="#"> ECOMMERCE, RETAIL & B2B </a>
			                    </h2>
			                    <p>Scalable eCommerce, Retail & B2B solutions to boost sales.</p>
			                </div>
			            </header>
			            <div class="mini-article-meta">
			                <div class="mini-article-byline text-center">
			                    <div class="author-avatar">
			                        <a class="author-name" href="">
			                        	<img src="{{asset('public/front/images/e-commarce-blue.png')}}" alt="Real Estate &amp; Property">
			                           <!--  <img
			                                alt=""
			                                class="avatar avatar-80 photo avatar-default jetpack-lazy-image"
			                                height="80"
			                                src="https://css-tricks.com/wp-content/uploads/2020/10/southpark_batch_small_reasonably_small_400x400-80x80.jpg')}}"
			                                width="80"
			                                data-lazy-src="https://css-tricks.com/wp-content/uploads/2020/10/southpark_batch_small_reasonably_small_400x400-80x80.jpg')}}?is-pending-load=1"
			                                srcset="data:image/gif;base64, R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
			                            /> -->
			                        </a>
			                        <!-- <svg class="half-circle" width="80px" height="80px">
			                            <use xlink:href="#half-circle"></use>
			                        </svg> -->
			                    </div>
			                   <!--  <div class="author-name-area">
			                        <div class="author-name-prefix">
			                            Author
			                        </div>
			                        <a class="author-name" href="https://css-tricks.com/author/mathiashulsbusch/"> Mathias Hülsbusch </a>
			                    </div> -->
			                </div>
			                <div class="tags">
			                   <a href="#" rel="tag">Get a Code</a> 
			                </div>
			            </div>
			        </article>
			        <article class="mini-card module module-article article" id="mini-post-324346">
			            <header class="mini-article-card-header">
			                <div class="mini-article-card-title">
			                    <!-- <div class="mini-article-subhead">
			                        Article
			                        <time datetime="2020-11-20"> Nov 20, 2020 </time>
			                    </div> -->
			                    <h2 class="">
			                        <a href="#"> HEALTHCARE & FITNESS </a>
			                    </h2>
			                    <p>End-to-End healthcare & fitness solutions for higher patient satisfaction.</p>
			                </div>
			            </header>
			            <div class="mini-article-meta">
			                <div class="mini-article-byline text-center">
			                    <div class="author-avatar">
			                        <a class="author-name" href="">
			                        	<img src="{{asset('public/front/images/healthcare-blue.png')}}" alt="Real Estate &amp; Property">
			                           <!--  <img
			                                alt=""
			                                src="https://secure.gravatar.com/avatar/8081b26e05bb4354f7d65ffc34cbbd67?s=80&amp;d=retro&amp;r=pg"
			                                class="avatar avatar-80 photo jetpack-lazy-image"
			                                height="80"
			                                width="80"
			                                loading="lazy"
			                                data-lazy-srcset="https://secure.gravatar.com/avatar/8081b26e05bb4354f7d65ffc34cbbd67?s=160&amp;d=retro&amp;r=pg 2x"
			                                data-lazy-src="https://secure.gravatar.com/avatar/8081b26e05bb4354f7d65ffc34cbbd67?s=80&amp;is-pending-load=1#038;d=retro&amp;r=pg"
			                                srcset="data:image/gif;base64, R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
			                            /> -->
			                        </a>
			                       <!--  <svg class="half-circle" width="80px" height="80px">
			                            <use xlink:href="#half-circle"></use>
			                        </svg> -->
			                    </div>
			                    <!-- <div class="author-name-area">
			                        <div class="author-name-prefix">
			                            Author
			                        </div>
			                        <a class="author-name" href="https://css-tricks.com/author/chriscoyier/"> Chris Coyier </a>
			                    </div> -->
			                </div>
			                <div class="tags">
			                    <a href="#" rel="tag">Get a Code</a> 
			                </div>
			            </div>
			        </article>
			        <article class="mini-card module module-article article" id="mini-post-326055">
			            <header class="mini-article-card-header">
			                <div class="mini-article-card-title">
			                    <!-- <div class="mini-article-subhead">
			                        Article
			                        <time datetime="2020-11-30"> Nov 30, 2020 </time>
			                    </div> -->
			                    <h2 class="">
			                        <a href="#"> MEDIA & ENTERTAINMENT </a>
			                    </h2>
			                    <p>Gain competitive advantage with our integrated Media & Entertainment solutions.</p>
			                </div>
			            </header>
			            <div class="mini-article-meta">
			                <div class="mini-article-byline text-center">
			                    <div class="author-avatar">
			                        <a class="author-name" href="">
			                        	<img src="{{asset('public/front/images/media-blue.png')}}" alt="Real Estate &amp; Property">
			                           <!--  <img
			                                alt=""
			                                class="avatar avatar-80 photo avatar-default jetpack-lazy-image"
			                                height="80"
			                                src="https://css-tricks.com/wp-content/uploads/2020/11/2m3kcqcZ7sl5xgLJtoXh0bw-80x80.jpeg"
			                                width="80"
			                                data-lazy-src="https://css-tricks.com/wp-content/uploads/2020/11/2m3kcqcZ7sl5xgLJtoXh0bw-80x80.jpeg?is-pending-load=1"
			                                srcset="data:image/gif;base64, R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
			                            /> -->
			                        </a>
			                        <!-- <svg class="half-circle" width="80px" height="80px">
			                            <use xlink:href="#half-circle"></use>
			                        </svg> -->
			                    </div>
			                    <!-- <div class="author-name-area">
			                        <div class="author-name-prefix">
			                            Author
			                        </div>
			                        <a class="author-name" href="https://css-tricks.com/author/jwahirksundai/"> Jwahir Sundai </a>
			                    </div> -->
			                </div>
			                <div class="tags">
			                    <a href="#" rel="tag">Get a Code</a> 
			                </div>
			            </div>
			        </article>
			        <!-- <article class="mini-card module module-article article" id="mini-post-324427">
			            <header class="mini-article-card-header">
			                <div class="mini-article-card-title">
			                    <div class="mini-article-subhead">
			                        Article
			                        <time datetime="2020-11-11"> Nov 11, 2020 </time>
			                    </div>
			                    <h2 class="">
			                        <a href="https://css-tricks.com/the-cleanest-trick-for-autogrowing-textareas/" class="article-card-header read-article"> The Cleanest Trick for Autogrowing Textareas </a>
			                    </h2>
			                </div>
			            </header>
			            <div class="mini-article-meta">
			                <div class="mini-article-byline">
			                    <div class="author-avatar">
			                        <a class="author-name" href="https://css-tricks.com/author/chriscoyier/">
			                            <img
			                                alt=""
			                                src="https://secure.gravatar.com/avatar/8081b26e05bb4354f7d65ffc34cbbd67?s=80&amp;d=retro&amp;r=pg"
			                                class="avatar avatar-80 photo jetpack-lazy-image"
			                                height="80"
			                                width="80"
			                                loading="lazy"
			                                data-lazy-srcset="https://secure.gravatar.com/avatar/8081b26e05bb4354f7d65ffc34cbbd67?s=160&amp;d=retro&amp;r=pg 2x"
			                                data-lazy-src="https://secure.gravatar.com/avatar/8081b26e05bb4354f7d65ffc34cbbd67?s=80&amp;is-pending-load=1#038;d=retro&amp;r=pg"
			                                srcset="data:image/gif;base64, R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
			                            />
			                        </a>
			                        <svg class="half-circle" width="80px" height="80px">
			                            <use xlink:href="#half-circle"></use>
			                        </svg>
			                    </div>
			                    <div class="author-name-area">
			                        <div class="author-name-prefix">
			                            Author
			                        </div>
			                        <a class="author-name" href="https://css-tricks.com/author/chriscoyier/"> Chris Coyier </a>
			                    </div>
			                </div>
			                <div class="tags"><a href="https://css-tricks.com/tag/grid/" rel="tag">grid</a> <a href="https://css-tricks.com/tag/textarea/" rel="tag">textarea</a></div>
			            </div>
			        </article>
			        <article class="mini-card module module-article article" id="mini-post-325027">
			            <header class="mini-article-card-header">
			                <div class="mini-article-card-title">
			                    <div class="mini-article-subhead">
			                        Article
			                        <time datetime="2020-11-10"> Nov 10, 2020 </time>
			                    </div>
			                    <h2 class="">
			                        <a href="https://css-tricks.com/understanding-flex-grow-flex-shrink-and-flex-basis/" class="article-card-header read-article"> Understanding flex-grow, flex-shrink, and flex-basis </a>
			                    </h2>
			                </div>
			            </header>
			            <div class="mini-article-meta">
			                <div class="mini-article-byline">
			                    <div class="author-avatar">
			                        <a class="author-name" href="https://css-tricks.com/author/robinrendle/">
			                            <img
			                                alt=""
			                                class="avatar avatar-80 photo avatar-default jetpack-lazy-image"
			                                height="80"
			                                src="https://css-tricks.com/wp-content/uploads/2019/01/me-black-white-80x80.jpg')}}"
			                                width="80"
			                                data-lazy-src="https://css-tricks.com/wp-content/uploads/2019/01/me-black-white-80x80.jpg')}}?is-pending-load=1"
			                                srcset="data:image/gif;base64, R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
			                            />
			                        </a>
			                        <svg class="half-circle" width="80px" height="80px">
			                            <use xlink:href="#half-circle"></use>
			                        </svg>
			                    </div>
			                    <div class="author-name-area">
			                        <div class="author-name-prefix">
			                            Author
			                        </div>
			                        <a class="author-name" href="https://css-tricks.com/author/robinrendle/"> Robin Rendle </a>
			                    </div>
			                </div>
			                <div class="tags">
			                    <a href="https://css-tricks.com/tag/flex-basis/" rel="tag">flex-basis</a> <a href="https://css-tricks.com/tag/flex-grow/" rel="tag">flex-grow</a>
			                    <a href="https://css-tricks.com/tag/flex-shrink/" rel="tag">flex-shrink</a> <a href="https://css-tricks.com/tag/flexbox/" rel="tag">flexbox</a>
			                </div>
			            </div>
			        </article> -->
			    </div>
			</div>
			<div class="brand_section primary_brand_section bg_gray d-flex align-items-center clearfix">
				<div class="container text-center">
					<div class="row align-items-center justify-content-lg-between">

						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="brand_logo bg_default_yellow">
								<a href="#!"  id="logov7a">
									<img src="{{asset('public/front/images/logo/logov7.png')}}" class="logov7a" alt="logo_not_found">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>


	</main>
	<footer class="footer_section secondary_footer bg_black text-white clearfix">
			<div class="container">
				<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

					<div class="col-lg-4 col-md-8">
						<div class="widget footer_about bg_black">
							<div class="brand_logo bg_default_yellow">
								<a href="#!" id="logov7aa">
									<img src="{{asset('public/front/images/logo/logov7.png')}}" class="logov7a" alt="logo_not_found">
								</a>
							</div>
							<p class="mb_30">
								Our team is passionate and always puts strategy before execution. We work with companies of all sizes. It's our business, our passion, our calling, and our expertise.
							</p>
							<ul class="circle_social_links ul_li mb_80 clearfix">
								<li>
									<a class="bg_facebook" href="#!">
										<i class="fab fa-facebook-f"></i>
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a class="bg_twitter" href="#!">
										<i class="fab fa-twitter"></i>
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a class="bg_youtube" href="#!">
										<i class="fab fa-youtube"></i>
										<i class="fab fa-youtube"></i>
									</a>
								</li>
								<li>
									<a class="bg_linkedin" href="#!">
										<i class="fab fa-linkedin"></i>
										<i class="fab fa-linkedin"></i>
									</a>
								</li>
							</ul>
							<div class="copyright_text bg_black">
								<p class="mb-0">© Copyright 2020 All Right Reserved Design By <a class="author_links" target="_blank" href="https://themeforest.net/user/bdevs">Heave Stack</a></p>
							</div>
						</div>
					</div>

					<div class="col-lg-8 col-md-8">
						<div class="footer_widget_area">
							<div class="row justify-content-lg-between">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="widget footer_useful_links">
										<h3 class="footer_widget_title">Quick Links</h3>
										<ul class="ul_li_block clearfix">
											<li><a href="#!">Design & Branding</a></li>
											<li><a href="#!">Web Designing</a></li>
											<li><a href="#!">Web Application</a></li>
											<li><a href="#!">App Development</a></li>
											<li><a href="#!">3D Animation</a></li>
											<li><a href="#!">UI/UX Designing</a></li>
										</ul>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="widget footer_contact_info clearfix">
										<h3 class="footer_widget_title">Conatct Us</h3>
										<ul class="ul_li_block clearfix">
											<li>
												<div class="item_icon bg_default_orange">
													<i class="fas fa-phone"></i>
												</div>
												<div class="item_content">
													<h4>phone number</h4>
													<p>+92-312-5879312</p>
												</div>
											</li>

											<li>
												<div class="item_icon bg_default_yellow">
													<i class="far fa-envelope-open"></i>
												</div>
												<div class="item_content">
													<h4>Email addres</h4>
													<p>info@heavestack.com</p>
												</div>
											</li>

											<li>
												<div class="item_icon bg_default_lightblue">
													<i class="fas fa-map-marker-alt"></i>
												</div>
												<div class="item_content">
													<h4>Locations</h4>
													<p> Islamabad, PAKISTAN</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="border_shapes" data-background="assets/images/shapes/borders_shape.png')}}"></div>
	</footer>

<!-- Js of heave Stack -->
<script src="{{asset('public/front/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('public/front/js/popper.min.js')}}"></script>
<script src="{{asset('public/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/front/js/nice-select.min.js')}}"></script>
<script type="text/javascript">
 $(window).on('scroll',function(){
  var scroll=$(window).scrollTop();
  console.log(scroll);
  if(scroll>170){
  //	alert('fu');
    
    $('#topNav').addClass('sticky-top');
    $('.header_top').hide();


  }else{

    
    $('#topNav').removeClass('sticky-top');
    $('.header_top').show();
  }
 });
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.tags a').on('click',function(){
			$('.tags a').removeClass('active');
			$('.tags a').css('background','transparent');
			$(this).addClass('active');
			$(this).css('background','#3DBBC2');
		})
	})
</script>
<script>
			$(document).ready(function(){
				$('.main_menu li').on('click',function(){
					$('.main_menu li').removeClass('active');
					$(this).addClass('active');
				})
			})
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.expertiseLeftSec li').on('click',function(){
					$('.expertiseLeftSec li').removeClass('active');
					$(this).addClass('active');
				})
			})
		</script>
		 <script>
			                	$(function(){
			                		$('.tab1').on('click',function(){

			                			$(this).addClass('active');
			                			$('.tab2').removeClass('active');
			                			$('.tab3').removeClass('active');
			                			$('.s1').show();

			                			$('.s2').hide();
			                			$('.s3').hide();
			                		});
			                		$('.tab2').on('click',function(){
			                			
			                			$(this).addClass('active');
			                			$('.tab1').removeClass('active');
			                			$('.tab3').removeClass('active');
			                			$('.s2').show();
			                			$('.s1').hide();
			                			$('.s3').hide();
			                		});
			                		$('.tab3').on('click',function(){
			                			$(this).addClass('active');
			                			$('.tab1').removeClass('active');
			                			$('.tab2').removeClass('active');
			                			$('.s3').show();
			                			$('.s1').hide();
			                			$('.s2').hide();
			                		});
			                	});
			                </script>
</body>
</html>