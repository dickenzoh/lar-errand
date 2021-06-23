@extends('layouts.app')
@section('content')
  
<!-- ======= Banner Section ======= -->
<section>
  <div class="banner">
  <div class="banner-text">
      <h1>Mars Errand Services</h1>
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
    <img src="images/1.jpg" alt="" class="w-100">
    <h4 class="my-4">Amazing. Incredible.</h4>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
      imus impedit!</p>
    <a href="#" class="btn btn_outline-dark btn-md">Our Story</a>	
  </div>
  <div class="col-md-4 my-4">
    <img src="images/2.jpg" alt="" class="w-100">
    <h4 class="my-4">Amazing. Incredible.</h4>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
      imus impedit!</p>
    <a href="#" class="btn btn_outline-dark btn-md">Our Story</a>	
  </div>
  <div class="col-md-4 my-4">
    <img src="images/3.jpg" alt="" class="w-100">
    <h4 class="my-4">Amazing. Incredible.</h4>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
      imus impedit!</p>
    <a href="#" class="btn btn_outline-dark btn-md">Our Story</a>	
  </div>
</div>
<div class="row my-5">
  <div class="col-md-4 my-4">
    <img src="images/3.jpg" alt="" class="w-100">
    <h4 class="my-4">Amazing. Incredible.</h4>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
      imus impedit!</p>
    <a href="#" class="btn btn_outline-dark btn-md">Our Story</a>	
  </div>
  <div class="col-md-4 my-4">
    <img src="images/1.jpg" alt="" class="w-100">
    <h4 class="my-4">Amazing. Incredible.</h4>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
      imus impedit!</p>
    <a href="#" class="btn btn_outline-dark btn-md">Our Story</a>	
  </div>
  <div class="col-md-4 my-4">
    <img src="images/2.jpg" alt="" class="w-100">
    <h4 class="my-4">Amazing. Incredible.</h4>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
      imus impedit!</p>
    <a href="#" class="btn btn_outline-dark btn-md">Our Story</a>	
  </div>
</div>
</div>

<!-- End Three Column Section -->
</section>

@endsection
@section('scripts')