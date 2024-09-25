@include('Frontend.layouts.header')



<!-- Breadcrumb Start -->

<div class="breadcrumb-area positioning">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="breadcrumb-content">
               <h1>Teachers Page.</h1>
               <p>Looking for <a href="{{ url('contact') }}">help</a> from premier Assignment.</p>
            </div>
         </div>
         <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mobt-24">
            <div class="breadcrumb-link text-start text-lg-end">
               <h4><a href="{{ url('Home') }}">Home</a> > Teachers Page</h4>
            </div>
         </div>
      </div>
   </div>
	<img class="shape breadcrumb-round-1 d-lg-block d-none" src="{{ asset('Frontend_assets/images/shape/breadcrumb-round.png') }}" alt="">
</div>

<!-- Breadcrumb End -->


</header>
<!--  Header area end -->



<!-- Teachers Area Start -->

<div class="teachers-area mt-120">
   <div class="container">
      <div class="row">
	       @if(isset($teachers) && $teachers->count() > 0)
	            @foreach($teachers as $teacher)
			         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
				         <div class="team-box">
					         <div class="team-img">
                           <a href="{{ url('teachers-details', $teacher->id) }}">
                           <img class="w-100" src="{{ asset('Image_database/teachers_images/' . $teacher->image) }}" alt="Teacher Image"></a>
					         </div>
					            <div class="team-content-wrap d-flex align-items-center justify-content-between">
						            <div class="team-content">
							            <h3><a href="{{ url('teachers-details', $teacher->id) }}">{{ $teacher->Name }}</a></h3>
							            <p>{{ $teacher->Role }}</p>
						            </div>
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

<!-- Teachers Area End -->


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
