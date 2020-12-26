@extends('front_partials.main')
@section('content')
<!-- breadcrumb_section - start
			================================================== -->
			<section class="breadcrumb_section d-flex align-items-center clearfix" style="background-image: url(./public/front/images/bgcrumbs.jpg); background-repeat: no-repeat;background-position: center;background-size: cover;">
				<div class="container">
					<div class="row align-items-center justify-content-lg-between">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay=".1s">
							<h1 class="mb-0" style="color: white;font-size: 36px;">{{ $job->title }}</h1>

							<div class="text-white mt-2">
								@foreach(json_decode($job->tags) as $tag)
								<span class="section__group gradient3 p-2 rounded" style="font-size: 11px">{{ $tag }}</span>
								
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- shop_section - start
			================================================== -->
			<section class="shop_section sec_ptb_130 clearfix">
				<div class="container">
					<div class="row justify-content-lg-between">
						<!-- left block start -->
						<div class="col-lg-8 col-md-12 col-sm-12 text-dark leftblockcareers">
							<div class="row pt-lg-4 pb-lg-4">
								<div class="col-lg-12">
									<p>Heave Stack Software house is looking for Junior Web Developer in our Islamabad, office.</p>
								</div>
							</div>
							
							
							<div class="row pt-lg-4 pb-lg-4">
								<div class="col-lg-12">
									<h4>REQUIREMENTS</h4>
									{!! $job->s_desc !!}
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<h4>NICE TO HAVE</h4>
									<ul style="list-style: circle;">
										<li>Experience in Web Development</li>
									</ul>
								</div>
							</div>
							<div class="row  pt-lg-4 pb-lg-4">
								<div class="col-lg-12">
									<h4>RESPONSIBILITIES</h4>
									{!! $job->desc !!}
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<h4>ABOUT HEAVE STACK</h4>
									<P>HEAVE STACK is a custom software development company. We deliver value to our clients, thanks to our expertise and experience gained from working as a software development company.</P>
									<p>We see a future where all markets are dominated by tech companies and work hard to accelerate this process. We help agile-minded people to succeed in technology challenges.</p>
								</div>								
							</div>
						</div>
						<!-- left block end -->
						<!-- right block Start-->
						<style type="text/css">
							.fa-chevron-down {
						  transition: transform .2s;
						}

						.fa-chevron-down.active {
						  transform: rotateZ(90deg);
						}
						</style>
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="row">
								 <div class="col-lg-10">
								 	 	<div class="p-2 bg-warning rounded-circle" style="width: 30%;margin-left: 10px;">
								 	 		<img src="{{ asset('public/front/images/cartoon.jpg')}}" class="img-fluid rounded-circle">
								 	 	</div>
								 	 	<h6 class="pt-1">Name Category</h6>
								 	 	<div class="panel-heading1">
									     <h4 class="panel-title1">
									 		 <a class="colsps" style="border-bottom: 1px dashed;width: 48%;">Recruiter Contacts &nbsp;<i class="fas fa-chevron-down"></i></a>
									     </h4>
								    	</div>
								    	<div class="panel-collapse1 collapse1 in">
								      	<div class="panel-body1" style="display: none;">
								        	<ul>
								        		<li>
								        			skype
								        		</li>
								        		<li>
								        			email
								        		</li>
								        	</ul>
								      </div>
								    </div>
								 </div>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- shop_section - end
			================================================== -->
@endsection