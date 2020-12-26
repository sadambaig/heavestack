@extends('front_partials.main')
@section('content')
<!-- breadcrumb_section - start
			================================================== -->
			<section class="breadcrumb_section d-flex align-items-center clearfix" style="background-image: url(./public/front/images/bgcrumbs.jpg); background-repeat: no-repeat;background-position: center;background-size: cover;">
				<div class="container">
					<div class="row align-items-center justify-content-lg-between">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay=".1s">
							<h3 class="page_title mb-0">Careers</h3>
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay=".1s">
							<ul class="breadcrumb_nav ul_li_right clearfix">
								<li><a href="index.html">Home</a></li>
								<li>Careers</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
<section class="shop_section sec_ptb_130 bg_gray clearfix">
				<div class="container">
					<div class="row justify-content-lg-between">
						@foreach($jobs as $job)
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="inner-career-block bor rounded p-3 bg-white shadow">
								<div class="row">

									<div class="col-9">
										<h4><a href="{{ route('fornt.detail',['id'=>$job->id]) }}">{{ $job->title }}</a></h4>
										<p><i class="fas fa-map-marker-alt"></i> <span>Islamabad</span></p>
									</div>
									<div class="col-3 p-2" style="text-align: end;">
										<span class="bg-danger p-1 rounded text-white"><a href="{{ route('fornt.detail',['id'=>$job->id]) }}" id="jobforIT">{{ $job->type }}</a></span>
									</div>
									
								</div>
								<hr style="height: 2;background-color: gray;">
								<div class="row">
									<div class="col-12">
										<p><a href="{{ route('fornt.detail',['id'=>$job->id]) }}"><i class="fas fa-th-large"></i> <span> {{ $job->title }}</span></a></p>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						

					</div>
				</div>
			</section>
@endsection