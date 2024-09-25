@include('Frontend.layouts.header')



<!-- Breadcrumb Start -->

<div class="breadcrumb-area positioning">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="breadcrumb-content">
               <h1>Teachers Details.</h1>
               <p>Looking for <a href="{{ url('contact') }}">help</a> from premier Assignment.</p>
            </div>
         </div>
         <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mobt-24">
            <div class="breadcrumb-link text-start text-lg-end">
               <h4><a href="{{ url('Home') }}">Home</a> > Teachers Details</h4>
            </div>
         </div>
      </div>
   </div>
	<img class="shape breadcrumb-round-1 d-lg-block d-none" src="{{ asset('Frontend_assets/images/shape/breadcrumb-round.png') }}" alt="">
</div>

<!-- Breadcrumb End -->

</header>
<!--  Header area end -->



<!-- Teachers Details Area Start -->


<div class="teachers-details-area mt-120">
   <div class="container">
      <div class="row">
         <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="details-page-wrap">
               <div class="row align-items-end">
                  <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12">
                     <div class="teachers-details-img-wrap">
                        <div class="teachers-details-img-box overflow-hidden position-relative">
                           <img class="w-100" src="{{ asset('Image_database/teachers_images/' . $teachers->image) }}" alt="Teacher Image">
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12 mobt-24">
                     <div class="section-title">
                        <p>{{ $teachers->Role }}</p>
                        <h1>{{ $teachers->Name }}</h1>
                     </div>
                     <div class="service-tab-content">
                        <p class="mb-3">{{ $teachers->Description }}</p>
                     </div>
                  </div>
               </div>
               <div class="details-page-title mt-5">
						<h3>Diversity of Experiences</h3>
					</div>
               <p class="mt-3">{{ $teachers->Experiences }}
                   </p>
               <div class="details-page-title mt-5">
                  <h3>Education</h3>
               </div>
               <p class="mt-3">{{ $teachers->Education }}
               </p>
               <div class="details-page-title mt-5">
                  <h3>Expertise & Skills</h3>
               </div>
               <p class="mt-3">{{ $teachers->Expertise }}
               </p>
            </div>
         </div>
         <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mobt-60">
            <div class="cart-wrap">
               <div class="single-cart" style="background-color: #ECE9F6;">
                  <div class="teachers-cart-content">
                     <div class="single-teachers-cart-content">
                        <h4>Languages</h4>
                        <p>{{ $teachers->language }}</p>
                     </div>
                     <div class="single-teachers-cart-content">
                        <h4>Position</h4>
                        <p>{{ $teachers->position }}</p>
                     </div>
                     <div class="single-teachers-cart-content">
                        <h4>Phone</h4>
                        <p>{{ $teachers->phone }}</p>
                     </div>
                     <div class="single-teachers-cart-content">
                        <h4>Mail</h4>
                        <p>{{ $teachers->mail }}</p>
                     </div>
                     <div class="single-teachers-cart-content">
                        <h4>Experience</h4>
                        <p>{{ $teachers->exp_years }}</p>
                     </div>
                     <div class="teachers-cart-btn-wrap d-flex mt-5">
                        <a class="common-btn w-100 text-center" href="{{ url('contact') }}">Contact Now +</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Teachers Details Area End -->



<!-- Cta -->

<div class="cta-area mt-120">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="team-cta-wrap text-center">
					<h1>Meet the main pioneers of education</h1>
					<div class="team-cta-btn-wrap">
						<a class="common-btn" href="{{ url('about-us') }}">Read More About +</a>
					</div>
				</div>
         </div>
      </div>
   </div>
</div>

<!-- Cta End -->


@include('Frontend.layouts.footer')