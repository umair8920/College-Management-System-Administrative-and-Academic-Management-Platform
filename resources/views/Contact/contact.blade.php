@include('Frontend.layouts.header')


<!-- Breadcrumb Start -->

<div class="breadcrumb-area positioning">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="breadcrumb-content">
               <h1>Contact Us.</h1>
               <p>Looking for <a href="{{ url('contact') }}">help</a> from premier Assignment.</p>
            </div>
         </div>
         <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mobt-24">
            <div class="breadcrumb-link text-start text-lg-end">
               <h4><a href="{{ url('Home') }}">Home</a> > Contact Us</h4>
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
               <h2>Good Comments</h2>
               <p class="mt-2">Lorem ipsum dolor sit amen, consenter advising elite. Ut venerates.</p>
            </div>
            <form id="contact-form" action="https://themeforest.wprealizer.com/html-educoda-preview/educoda/mail.php" method="POST" class="contact-input mt-5 position-relative">
               <div class="row">
                  <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
                     <input type="text" name="name" placeholder="Your Full Name">
                  </div>
                  <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
                     <input type="email" name="email" placeholder="info.lawlead@gmail.com">
                  </div>
                  <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
                     <input type="tel" name="number" placeholder="+55 (121) 234 444">
                  </div>
                  <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
                     <input type="text" name="address" placeholder="Enter Your Address">
                  </div>
                  <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                     <textarea name="message" id="message" cols="30" rows="3" placeholder="Additional Message"></textarea>
                  </div>
                  <div class="col-xl-7 col-lg-10 col-sm-12 col-12">
                     <div class="contact-check mt-2">
                        <p><span>*</span> Call us 24/7 at 869-5414-5 or fill out the form below to receive a free and confidential initial consultation.</p>
                     </div>
                  </div>
                  <div class="contact-btn-wrap mt-5">
                     <button type="submit" class="common-btn">Submit Now +</button>
                  </div>
                  <p class="form-message"></p>
               </div>
            </form>
			</div>
			<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mobt-60">
				<div class="cart-wrap">
					<div class="single-cart" style="background-color: #ECE9F6;">
						<div class="cart-title">
							<h3>Contact Info 24/7</h3>
                     <p>Lorem ipsum dolor sit amen, consenter advising elite. Ut venerates sagittal torpor, in corvallis justs sagittal et. Ipsum dolor sit amen, consenter advising elite.</p>
						</div>
						<div class="contact-info d-flex align-items-center mt-4">
							<div class="contact-details-icon">
                        <i class="bi bi-telephone-plus d-flex align-items-center justify-content-center"></i>
                     </div>
                     <div class="contact-details-info">
                        <p>Contact Phone</p>
                        <h3><a href="tel:01716900757">+55 (9900) 666 22</a></h3>
                     </div>
						</div>
						<div class="contact-info d-flex align-items-center mt-4">
							<div class="contact-details-icon">
                        <i class="bi bi-envelope d-flex align-items-center justify-content-center"></i>
                     </div>
                     <div class="contact-details-info">
                        <p>Contact Mail</p>
                        <h3><a href="https://themeforest.wprealizer.com/cdn-cgi/l/email-protection#30595e565f1e514442595170575d51595c1e535f5d"><span class="__cf_email__" data-cfemail="0f66616960216e7b7d666e4f68626e6663216c6062">[email&#160;protected]</span></a></h3>
                     </div>
						</div>
						<div class="contact-info d-flex align-items-center mt-4">
							<div class="contact-details-icon">
                        <i class="bi bi-geo-alt d-flex align-items-center justify-content-center"></i>
                     </div>
                     <div class="contact-details-info">
                        <p>Contact Location</p>
                        <h3>18/2, Tropicana Road, Australia.</h3>
                     </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Contact From End -->

@include('Frontend.layouts.footer')