@include('Frontend.layouts.header')


<!-- Breadcrumb Start -->

<div class="breadcrumb-area positioning">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="breadcrumb-content">
               <h1>About Us.</h1>
               <p>Looking for <a href="{{ url('contact') }}">help</a> from premier Assignment.</p>
            </div>
         </div>
         <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mobt-24">
            <div class="breadcrumb-link text-start text-lg-end">
               <h4><a href="{{ url('Home')}}">Home</a> > About Us</h4>
            </div>
         </div>
      </div>
   </div>
	<img class="shape breadcrumb-round-1 d-lg-block d-none" src="{{ asset('Frontend_assets/images/shape/breadcrumb-round.png') }}" alt="">
</div>

<!-- Breadcrumb End -->


</header>
<!--  Header area end -->




<!-- Service History Start -->

<div class="service-history mt-120">
   <div class="container">
      <div class="row">
         <div class="row justify-content-between align-items-center">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
               <div class="service-history-wrap position-relative">
                  <div class="service-history-box">
							<img class="w-100" src="{{ asset('Frontend_assets/images/history-img.png') }}" alt="">
						</div>
						<p><span>20 Years <br> Experience</span></p>
               </div>
            </div>
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 mobt-24">
               <div class="section-title">
                  <p>About Our History</p>
                  <h1>Education is about learning skills and knowledge</h1>
               </div>
               <div class="service-tab-content">
                  <p>Pellentesque habitant morbid critique selectus et net's et aalesund fames ac turpin egesta. Donee accusal sapiens augur, pulvinate minibus nullo sagittal at. Sed egesta augur eger lucius pianissimo. Suspensive ut placenta turpin. Nulled sed augur sed maurist corvallis fuegian partition eu nisi. Dubs aliquot vulgate leo, quia corvallis eros ornate a. Nulled in erat a maurist congee tempus.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Service History End -->




<!-- Service Area 2 Start -->

<div class="service-area mt-120">
	<div class="container">
		<div class="row">
			<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="section-title text-center">
					<p>Excellent Service</p>
					<h1>Get Only New And Unique Boots Your <br> Edocoda Online Learning!</h1>
				</div>
			</div>
		</div>
		<div class="row mt-60">
			<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="service-slide-wrap owl-carousel">
					<div class="single-service-box">
						<div class="service-icon">
							<img src="{{ asset('Frontend_assets/images/icon/service-icon-1.png') }}" alt="">
						</div>
						<div class="service-content">
							<h3>Dissertation Writing Service</h3>
							<p>Dubs aliquot vulgate leo, quia corvallis eros ornate a. Nulled in erat a maurist congee tempus. Suspensive commode dui quam, vitae mollie orca efficient pulvinate. </p>
						</div>
					</div>
					<div class="single-service-box">
						<div class="service-icon">
							<img src="{{ asset('Frontend_assets/images/icon/service-icon-2.png') }}" alt="">
						</div>
						<div class="service-content">
							<h3>Thesis Writing Help</h3>
							<p>Dubs aliquot vulgate leo, quia corvallis eros ornate a. Nulled in erat a maurist congee tempus. Suspensive commode dui quam, vitae mollie orca efficient pulvinate. </p>
						</div>
					</div>
					<div class="single-service-box">
						<div class="service-icon">
							<img src="{{ asset('Frontend_assets/images/icon/service-icon-3.png') }}" alt="">
						</div>
						<div class="service-content">
							<h3>Online Exam & quiz</h3>
							<p>Dubs aliquot vulgate leo, quia corvallis eros ornate a. Nulled in erat a maurist congee tempus. Suspensive commode dui quam, vitae mollie orca efficient pulvinate. </p>
						</div>
					</div>
					<div class="single-service-box">
						<div class="service-icon">
							<img src="{{ asset('Frontend_assets/images/icon/service-icon-1.png') }}" alt="">
						</div>
						<div class="service-content">
							<h3>Dissertation Writing Service</h3>
							<p>Dubs aliquot vulgate leo, quia corvallis eros ornate a. Nulled in erat a maurist congee tempus. Suspensive commode dui quam, vitae mollie orca efficient pulvinate. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Service Area 2 End -->




<!-- Team Area Start -->

<div class="team-area positioning mt-120 mb-96">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="team-cta-wrap text-center">
					<h1>Meet the main pioneers of education</h1>
					<div class="team-cta-btn-wrap">
						<a class="common-btn" href="{{ url('about-us') }}">Read More About +</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-120">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="section-title style-two text-center">
					<p>Excellent Courses</p>
					<h1>Exceptional Online Assignment</h1>
				</div>
			</div>
		</div>
		<div class="row mt-60">
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
				@if(isset($teachers) && $teachers->count() > 0)
	            	@foreach($teachers as $teacher)
						<div class="team-box">
							<div class="team-img">
								<a href="{{ url('teachers-details', $teacher->id) }}">
                           		<img class="w-100" src="{{ asset('Image_database/teachers_images/' . $teacher->image) }}" alt=""></a>
							</div>
							<div class="team-content-wrap d-flex align-items-center justify-content-between">
								<div class="team-content">
									<h3><a href="{{ url('teachers-details', $teacher->id) }}">{{ $teacher->Name }}</a></h3>
									<p>{{ $teacher->Role }}</p>
								</div>
							</div>
						</div>
					@endforeach
            	@else
                	<div class="col-lg-12">
                    	<p>No teachers found.</p>
                	</div>
            	@endif
			</div>
		</div>
	</div>
	<img class="shape assignment-shape-2" src="{{ asset('Frontend_assets/images/shape/assignment-single.png') }}" alt="">
</div>

<!-- Team Area End -->



<!-- Testimonial Start -->

<div class="testimonial-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="testimonial-title text-start text-xl-center position-relative">
					<img src="{{ asset('Frontend_assets/images/testimonial-quote.png') }}" alt="">
					<h1>Testimonials</h1>
				</div>
			</div>
		</div>
		<div class="row mt-60 justify-content-center">
			<div class="col-xl-10 col-lg-11 col-md-12 col-sm-12 col-12">
				<div class="testimonial-slide-wrap owl-carousel">
					<div class="single-testimonial">
						<p>“Maecenas egesta efficient eliot, vel fuegian torpor accusant sits amen. Sed vitae facilities magna. Nuns augur rectus, mollie et the auctors quia, molesting at edward.”</p>
					</div>
					<div class="single-testimonial">
						<p>“Maecenas egesta efficient eliot, vel fuegian torpor accusant sits amen. Sed vitae facilities magna. Nuns augur rectus, mollie et the auctors quia, molesting at edward.”</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Testimonial End -->

@include('Frontend.layouts.footer')