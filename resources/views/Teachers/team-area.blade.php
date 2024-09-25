<!-- Team Area Start -->

<div class="team-area team-area-2 positioning pb-120" style="background-color: #E5E5E5;">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="team-cta-wrap text-center">
					<h1>Meet the main pioneers of education</h1>
					<div class="team-cta-btn-wrap wow flipInX" data-wow-duration="2.5s" data-wow-delay=".4s">
						<a class="common-btn" href="{{ url('about-us') }}">Read More About +</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-120">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="section-title style-two text-center wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s">
					<p>Excellent Courses</p>
					<h1>Added New Courses</h1>
				</div>
			</div>
		</div>
		<div class="service-tab-slide-wrap owl-carousel mt-60">
			<div class="row">
				@if(isset($courses) && $courses->count() > 0)
	         		@foreach($courses as $course)
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="single-courses-box single-courses-box-2">
				    			<div class="courses-img">
                        			<a href="{{url('case-details', $course->id) }}"><img class="w-100" src="data:image;base64,{{ $course->image }}" alt=""></a>
								</div>   
									<div class="courses-content">
										<h3><a href="{{ url('case-details', $course->id) }}">{{ $course->Name }}</a></h3>
									</div>
							</div>
						</div>
					@endforeach
            	@else
                <div class="col-lg-12">
                    <p>No Courses found.</p>
                </div>
           		 @endif
			</div>
		</div>
	</div>
	<img class="shape assignment-shape-2" src="{{ asset('Frontend_assets/images/shape/assignment-single.png') }}" alt="">
</div>

<!-- Team Area End -->