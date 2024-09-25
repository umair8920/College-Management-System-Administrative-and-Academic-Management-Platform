@include('Frontend.layouts.header')



<!-- Breadcrumb Start -->

<div class="breadcrumb-area positioning">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="breadcrumb-content">
               <h1>Case Details.</h1>
               <p>Looking for <a href="{{ url('contact') }}">help</a> from premier Assignment.</p>
            </div>
         </div>
         <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mobt-24">
            <div class="breadcrumb-link text-start text-lg-end">
               <h4><a href="{{ url('Home') }}">Home</a> > Case Details</h4>
            </div>
         </div>
      </div>
   </div>
	<img class="shape breadcrumb-round-1 d-lg-block d-none" src="{{ ('Frontend_assets/images/shape/breadcrumb-round.png') }}" alt="">
</div>

<!-- Breadcrumb End -->


</header>
<!--  Header area end -->




<!-- Case Study Details Area Start -->

<div class="case-study-details-area mt-120">
   <div class="container">
      <div class="row">
         <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="details-page-wrap">
               <div class="cta-video-wrap p-0 position-relative">
                  <div class="service-history-box">
                     <img class="w-100" src="{{ asset('Image_database/courses_images/' . $courses->image) }}" alt="Course Image">
                  </div>
               </div>
               <div class="case-study-details-content mt-60">
                  <h2>{{ $courses->Name }}</h2>
               </div>
               <p class="mt-4">{{ $courses->Description }}
					</p>
            </div>
            <div class="row align-items-center mt-60">
               <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                  <div class="pagination-list">
                     <ul>
                        <li><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mobt-24">
                  <div class="pagination-list pagination-list-2 text-lg-end">
                     <ul>
                        <li><a href="#"><i class="bi bi-arrow-left"></i></a></li>
                        <li><a href="#"><i class="bi bi-arrow-right"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mobt-60">
            <div class="cart-wrap">
               <div class="single-cart" style="background-color: #ECE9F6;">
                  <div class="cart-title mt-5">
                     <h3>Course Content</h3>
                  </div>
                  <div class="cart-service-list">
                     <ul>
                        <li><i class="bi bi-caret-right-fill"></i>{{ $courses->C1 }}</a></li>
                        <li><i class="bi bi-caret-right-fill"></i>{{ $courses->C2 }}</a></li>
                        <li><i class="bi bi-caret-right-fill"></i>{{ $courses->C3 }}</a></li>
                        <li><i class="bi bi-caret-right-fill"></i>{{ $courses->C4 }}</a></li>
                        <li><i class="bi bi-caret-right-fill"></i>{{ $courses->C5 }}</a></li>
                        <li><i class="bi bi-caret-right-fill"></i>{{ $courses->C6 }}</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Case Study Details Area End -->




<!-- Excellent Courses -->

<div class="excellent-courses mt-120">
   <div class="container">
      <div class="row">
         <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="section-title text-center">
					<p>Excellent Courses</p>
					<h1>Related New Courses</h1>
				</div>
			</div>
      </div>
		<div class="row mt-60">
         <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="single-courses-box single-courses-box-2">
               <div class="courses-img">
                  <a href="{{url('case-details', $courses->id) }}"><img class="w-100" src="{{ asset('Image_database/courses_images/' . $courses->image) }}" alt="Course Image"></a>
               </div>
               <div class="courses-content">
                  <h3><a href="{{url('case-details', $courses->id) }}">{{ $courses->Name }}</a></h3>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Excellent Courses End -->


@include('Frontend.layouts.footer')