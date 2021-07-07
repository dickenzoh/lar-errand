@extends('layouts.app')
@section('content')
  
<!-- ======= Banner Section ======= -->
<section>
  <div class="banner">
  <div class="banner-text">
      <h1>Mafua Errand Services</h1>
      <p>You make an order we deliver</p>
      <div>
          <a href= "{{ route('services') }}" alt='Broken Link'><button type="button"><span></span>Book Now</button></a>
          <a href= "{{ route('services') }}" alt='Broken Link'><button type="button"><span></span>Register</button></a>
      </div>
  </div>
  </div>
</section>
<!-- =======End Banner Section ======= -->
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
      <h4 class="my-4">Delivery Services</h4>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        imus impedit!</p>
        <a href= "{{ route('services') }}" alt='Broken Link'>
          <button type="button"><span></span>Order Now</button>
        </a>	
    </div>
    <div class="col-md-4 my-4">
      <img src="images/services/card-errands-house-cleaning.jpg" alt="" class="w-100">
      <h4 class="my-4">Cleaning Sevices</h4>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        imus impedit!</p>
        <a href= "{{ route('services') }}" alt='Broken Link'>
          <button type="button"><span></span>Order Now</button>
        </a>	
    </div>
    <div class="col-md-4 my-4">
      <img src="images/services/card-errands-full-laundry.jpg" alt="" class="w-100">
      <h4 class="my-4">Full Laundary</h4>
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
      <h4 class="my-4">Gift Delivery.</h4>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        imus impedit!</p>
        <a href= "{{ route('services') }}" alt='Broken Link'>
          <button type="button"><span></span>Order Now</button>
        </a>	
    </div>
    <div class="col-md-4 my-4">
      <img src="images/services/card-errands-iron-services.jpg" alt="" class="w-100">
      <h4 class="my-4">Ironing Services.</h4>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        imus impedit!</p>
        <a href= "{{ route('services') }}" alt='Broken Link'>
          <button type="button"><span></span>Order Now</button>
        </a>	
    </div>
    <div class="col-md-4 my-4">
      <img src="images/services/card-errands-grocery-shopping.jpg" alt="" class="w-100">
      <h4 class="my-4">Grocery Shopping</h4>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        imus impedit!</p>
        <a href= "{{ route('services') }}" alt='Broken Link'>
          <button type="button"><span></span>Order Now</button>
        </a>	
    </div>
    <!-- Three Column Section -->
    <div class="container">
      <div class="row my-5">
        <div class="col-md-4 my-4">
          <img src="images/services/card-errand-delivery.jpg" alt="" class="w-100">
          <h4 class="my-4">Delivery Services</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            imus impedit!</p>
            <a href= "{{ route('services') }}" alt='Broken Link'>
              <button type="button"><span></span>Order Now</button>
            </a>	
        </div>
        <div class="col-md-4 my-4">
          <img src="images/services/card-errands-house-cleaning.jpg" alt="" class="w-100">
          <h4 class="my-4">Cleaning Sevices</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            imus impedit!</p>
            <a href= "{{ route('services') }}" alt='Broken Link'>
              <button type="button"><span></span>Order Now</button>
            </a>	
        </div>
        <div class="col-md-4 my-4">
          <img src="images/services/card-errands-full-laundry.jpg" alt="" class="w-100">
          <h4 class="my-4">Full Laundary</h4>
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
          <h4 class="my-4">Gift Delivery.</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            imus impedit!</p>
            <a href= "{{ route('services') }}" alt='Broken Link'>
              <button type="button"><span></span>Order Now</button>
            </a>	
        </div>
        <div class="col-md-4 my-4">
          <img src="images/services/card-errands-iron-services.jpg" alt="" class="w-100">
          <h4 class="my-4">Ironing Services.</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            imus impedit!</p>
            <a href= "{{ route('services') }}" alt='Broken Link'>
              <button type="button"><span></span>Order Now</button>
            </a>	
        </div>
        <div class="col-md-4 my-4">
          <img src="images/services/card-errands-grocery-shopping.jpg" alt="" class="w-100">
          <h4 class="my-4">Grocery Shopping</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            imus impedit!</p>
            <a href= "{{ route('services') }}" alt='Broken Link'>
              <button type="button"><span></span>Order Now</button>
            </a>	
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End Three Column Section -->
</section>
@endsection
@section('scripts')