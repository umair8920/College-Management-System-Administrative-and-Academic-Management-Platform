@include('Frontend.layouts.header')


<!-- Breadcrumb Start -->

<div class="breadcrumb-area positioning">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="breadcrumb-content">
               <h1>Case Study.</h1>
               <p>Looking for <a href="{{ url('contact') }}">help</a> from premier Assignment.</p>
            </div>
         </div>
         <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mobt-24">
            <div class="breadcrumb-link text-start text-lg-end">
               <h4><a href="{{ url('index') }}">Home</a> > Case Study.</h4>
            </div>
         </div>
      </div>
   </div>
	<img class="shape breadcrumb-round-1 d-lg-block d-none" src="{{ asset('Frontend_assets/images/shape/breadcrumb-round.png') }}" alt="">
</div>

<!-- Breadcrumb End -->


</header>
<!--  Header area end -->




<!-- Case Study Area Start -->

<div class="case-study-area mt-120">
   <div class="container">
      <div class="row">
         @if(isset($courses) && $courses->count() > 0)
	         @foreach($courses as $course)
               <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="single-courses-box single-courses-box-2">
                     <div class="courses-img">
                        <a href="{{url('case-details', $course->id) }}"><img class="w-100" src="{{ asset('Image_database/courses_images/' . $course->image) }}" alt="Course Image"></a>
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
            <div class="row align-items-center mt-36">
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
</div>

<!-- Case Study Area End -->



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