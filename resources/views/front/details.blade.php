@extends('front_partials.main')
@section('content')
<!-- breadcrumb_section - start
			================================================== -->
			<section class="breadcrumb_section d-flex align-items-center clearfix" style="background-image: url(../public/front/images/bgcrumbs.jpg); background-repeat: no-repeat;background-position: center;background-size: cover;">
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
							
							<div class="row">
								<div class="col-lg-12">
									<h4>ABOUT CLIENT</h4>
									<p>Our company from Pakistan which is developing world-class Web product. Their main goal is to fasted web product and well responsive.</p>
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
						

						<div class="col-lg-4 col-md-12 col-sm-12" id="rightblockcareers">
							<div class="row">
								 <div class="col-lg-12">
								 	 	<div class="p-2 same-primary-color rounded-circle circularimg">
								 	 		<img src="{{ asset('public/front/images/cartoon.jpg') }}" class="img-fluid rounded-circle">
								 	 	</div>
								 	 	<h6 class="pt-1">Name Category</h6>
								 	 	<div class="panel-heading1">
									     <h4 class="panel-title1">
									 		 <a class="colsps active">Recruiter Contacts &nbsp;<i class="fas fa-chevron-down"></i></a>
									     </h4>
								    	</div>
								    	<div class="panel-collapse1 collapse1 in">
								      	<div class="panel-body1" style="display: none;">
								        	<ul class="fa-ul">
								        		<li>
								        			<i class="fab fa-skype"></i> skype
								        		</li>
								        		<li>
								        			<i class="far fa-envelope"></i> info@gmail.com
								        		</li>
								        	</ul>
								      </div>
								    </div>
								 </div>
							</div>
							<div class="row mt-4">
								<div class="col-lg-12">
									<div>
										<button class="same-primary-color p-2 text-white" id="sendarrow" type="button" data-bs-toggle="modal" data-bs-target="#example11">APPLY</button>
									</div>
								</div>
								
							</div>
							<div class="row mt-4">
								<div class="col-lg-12">
									<div>
										<button class="p-3 text-dark" id="sendarrow" type="button" style="border: 2px solid lightgray; font-size: 13px;font-weight: 600">APPLY VIA LINKEDIN</button>
									</div>

									<div>
										<label style="font-size: 12px;">or <a href="#" style="border-bottom: 1px dashed gray;">refer a friend</a></label>
									</div>
								</div>
								
							</div>

							<div class="row mt-5">
								<div class="col-lg-12">
									<div>
										<h6>Share this vacancy</h6>
									</div>
									<div>
										<label>
											<a href="#" class="social_icon"><i class="fab fa-facebook-f" id="facebookicon"></i></a>
											<a href="#" class="social_icon"><i class="fab fa-linkedin-in" id="linkedinicon"></i></a>
										</label>
									</div>
								</div>

							</div>

						</div>

					</div>
				</div>
			</section>
			<div class="modal fade"  id="example11" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content p-3">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">APPLYING FOR JUNIOR/JUNIOR STRONG TEST ENGINEER</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			        <form method="post" action="{{ route('job.apply') }}" enctype="multipart/form-data">
			        	@csrf
			        	<input type="hidden" name="job_id" value="{{ $job->id }}">
				        <div class="row">
				        	<div class="mb-3 col-4">
			            		<input type="text" class="form-control" id="recipient-name" required placeholder="Name" name="name">
				          	</div>
				          	<div class="mb-3 col-4">
				           		<input type="text" class="form-control" id="recipient-name"  required placeholder="Email" name="email">
				          	</div>
			          		<div class="mb-3 col-4">
			            		<input type="text" class="form-control" id="recipient-name"  required placeholder="Phone" name="phone">
			          		</div>
			          		<div class="col-12">
			            		<textarea rows="10" class="form-control" id="message-text" placeholder="About Your Self" name="about"></textarea>
			            		<label for="file-upload" class="papperclipicon">
								    <i class="fas fa-paperclip"></i>
								</label>
								<input id="file-upload" type="file" name="cv" />
			          		</div>
				        </div>
			       
			        <div class="row">
			        	<div class="col-lg-9 col-md-12 col-sm-12 pt-2">
			        		<p style="font-size: 12px;color: black;">We will add your contact details provided in this form to our system for contacting you regarding your request. For more info please consult our <a href="#">privacy policy</a></p>
			        	</div>
			        	<div class="col-lg-3 col-md-12 col-sm-12 pt-2" style="text-align: end;">
			        		<button type="submit" class="same-primary-color p-2 text-white rounded " id="sendarrow"><i class="fas fa-paper-plane"></i> SEND</button>
			        	</div>
			        </div>
			         </form>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- shop_section - end
@endsection