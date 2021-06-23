@extends('layouts.app')
@section('content')

	<!-- Image Carousel -->
	<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="3000">

		<!-- Carousel Content -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/carousel/carousel-errand-laundry.jpg" alt="" class="w-100">
				<div class="carousel-caption">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-8 bg-custom d-none d-md-block py-3 px-8">
								<h1>Bootstrap 4</h1>
								<div class="border-top border-primary w-50 mx-auto my-3">
									<h3 class="pb-3">Complete Website Design</h3>
									<a href="#" class="btn btn-danger btn-lg mr-2">Click here</a>
									<a href="#" class="btn btn-primary btn-lg ml-2">Click here</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/carousel/carousel-errands-delivery.jpg" alt="" class="w-100">
				<div class="carousel-caption">
					<div class="container">
						<div class="row justify-content-end text-right">
							<div class="col-5 bg-custom d-none d-lg-block py-3 px-8 pr-3">
								<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architect
									 in ipsum est ullam laudantium omnis.</p>
									<a href="#" class="btn btn-primary btn-lg ml-2">Click here</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/carousel/carousel-errands-delivery.jpg" alt="" class="w-100">
				<div class="carousel-caption">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-8 bg-custom d-none d-md-block py-3 px-8">
								<h1>Bootstrap 4</h1>
								<div class="border-top border-primary w-50 mx-auto my-3">
									<h3 class="pb-3">Complete Website Design</h3>
									<a href="#" class="btn btn-danger btn-lg mr-2">Click here</a>
									<a href="#" class="btn btn-primary btn-lg ml-2">Click here</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- End Carousel Content -->


		<!-- Previous & Next Buttons -->
		<a href="#corousel" class="carousel-control-prev" role="button"	data-slide="prev">
			<span class="fas fa-chevron-left fa-2x"></span>
		</a>
		<a href="#corousel" class="carousel-control-next" role="button"	data-slide="next">
			<span class="fas fa-chevron-right fa-2x"></span>
		</a>

		<!-- End Previous & Next Buttons -->

	</div>
	<!-- End Image Carousel -->

  <!-- ======= Services Section ======= -->
  <section>
        <!-- Main Page Heading -->
    <div class="col-12 text-center mt-5">
      <h1 class="text-dark pt-4">Our Services</h1>
      <div class="border-top border-primary w-50 mx-auto my-3"></div>
      <p class="lead">The following include our services</p>
    </div>


    <!-- Three Column Section -->
    <div class="container">
      <div class="row my-5">
        <div class="col-md-4 my-4">
          <img src="images/services/card-errand-delivery.jpg" alt="" class="w-100">
          <h4 class="my-4">Amazing. Incredible.</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            imus impedit!</p>
            <a href= "{{ route('services') }}" alt='Broken Link'>
              <button type="button"><span></span>Order Now</button>
            </a>	
        </div>
        <div class="col-md-4 my-4">
          <img src="images/services/card-errands-house-cleaning.jpg" alt="" class="w-100">
          <h4 class="my-4">Amazing. Incredible.</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            imus impedit!</p>
            <a href= "{{ route('services') }}" alt='Broken Link'>
              <button type="button"><span></span>Order Now</button>
            </a>	
        </div>
        <div class="col-md-4 my-4">
          <img src="images/services/card-errands-full-laundry.jpg" alt="" class="w-100">
          <h4 class="my-4">Amazing. Incredible.</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            imus impedit!</p>
            <a href= "{{ route('services') }}" alt='Broken Link'>
              <button type="button"><span></span>Order Now</button>
            </a>
        </div>
      </div>
      <div class="row my-5">
        <div class="col-md-4 my-4">
          <img src="images/services/card-errand-gift-delivery.jpg" alt="" class="w-100">
          <h4 class="my-4">Amazing. Incredible.</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            imus impedit!</p>
            <a href= "{{ route('services') }}" alt='Broken Link'>
              <button type="button"><span></span>Order Now</button>
            </a>	
        </div>
        <div class="col-md-4 my-4">
          <img src="images/services/card-errands-iron-services.jpg" alt="" class="w-100">
          <h4 class="my-4">Amazing. Incredible.</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            imus impedit!</p>
            <a href= "{{ route('services') }}" alt='Broken Link'>
              <button type="button"><span></span>Order Now</button>
            </a>	
        </div>
        <div class="col-md-4 my-4">
          <img src="images/services/card-errands-grocery-shopping.jpg" alt="" class="w-100">
          <h4 class="my-4">Amazing. Incredible.</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            imus impedit!</p>
            <a href= "{{ route('services') }}" alt='Broken Link'>
              <button type="button"><span></span>Order Now</button>
            </a>	
        </div>
      </div>
    </div>

	<!-- End Three Column Section -->
  </section>
  <!-- =======End Services Section ======= -->
   <!-- ======= Testimonial Section ======= -->
   <section>
        <!-- Main Page Heading -->
    <div class="col-12 text-center mt-5">
      <h1 class="text-dark pt-4">Testimonials</h1>
      <div class="border-top border-primary w-50 mx-auto my-3"></div>
      <p class="lead">This is what our customers as to say</p>
    </div>
   </section>
@endsection
@section('scripts')


