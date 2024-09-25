@include('Frontend.layouts.header')


<!-- Breadcrumb Start -->

<div class="breadcrumb-area positioning">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="breadcrumb-content">
               <h1>Sign In</h1>
               <p>Looking for <a href="contact">help</a> from premier Assignment.</p>
            </div>
         </div>
         <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mobt-24">
            <div class="breadcrumb-link text-start text-lg-end">
               <h4><a href="index">Home</a> > Sign In</h4>
            </div>
         </div>
      </div>
   </div>
	<img class="shape breadcrumb-round-1 d-lg-block d-none" src="{{ asset('Frontend_assets/images/shape/breadcrumb-round.png') }}" alt="">
</div>

<!-- Breadcrumb End -->


</header>
<!--  Header area end -->



<!-- Contact From Start -->

<div class="contact-area mt-120">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="contact-title">
               <h2>Sign Up Now!</h2>
               <p class="mt-2">Signup and get free newsletter, tips and tricks!</p>
               <div class="sign-up-social mt-4 mb-4 d-flex flex-wrap">
                  <a class="common-btn me-3" style="background:#0D8AF0 ; padding: 9px 37px;" href="#"><i class="bi bi-facebook"></i></a>
                  <a class="common-btn" style="background: #DD4B39; padding: 9px 37px;" href="#"><i class="bi bi-google"></i></a>
               </div>
            </div>
            <form id="contact-form" action="https://themeforest.wprealizer.com/html-educoda-preview/educoda/mail.php" method="POST" class="contact-input mt-5 position-relative">
               <div class="row">
                  <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                     <input type="email" name="email" placeholder="Your Email">
                  </div>
                  <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                     <input type="password" name="password" placeholder="Password">
                  </div>
                  <div class="contact-btn-wrap mt-5">
                     <button type="submit" class="common-btn">Log In</button>
                  </div>
               </div>
            </form>
			</div>
		</div>
	</div>
</div>

<!-- Contact From End -->

@include('Frontend.layouts.footer')