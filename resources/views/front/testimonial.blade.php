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
<div class="content">
    <div class="row">
        <!-- ======= Testimonial Section ======= -->
   <section id="car-body">
    <!-- Main Page Heading -->
<div class="col-12 text-center mt-5">
  <h1 class="text-dark pt-4">Testimonials</h1>
  <div class="container-fluid px-3 px-sm-5 my-5 text-center">
    <h4 class="mb-5 font-weight-bold">What Our Client Say</h4>
    <div class="owl-carousel owl-theme">
        <div class="item first prev">
            <div class="card border-0 py-3 px-4">
                <div class="row justify-content-center"> <img src="images/services/card-errand-delivery.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                <h6 class="mb-3 mt-2">Marielle Haag</h6>
                <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
            </div>
        </div>
        <div class="item show">
            <div class="card border-0 py-3 px-4">
                <div class="row justify-content-center"> <img src="images/services/card-errand-delivery.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                <h6 class="mb-3 mt-2">Ximena Vegara</h6>
                <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
            </div>
        </div>
        <div class="item next">
            <div class="card border-0 py-3 px-4">
                <div class="row justify-content-center"> <img src="images/services/card-errand-delivery.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                <h6 class="mb-3 mt-2">John Paul</h6>
                <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
            </div>
        </div>
        <div class="item last">
            <div class="card border-0 py-3 px-4">
                <div class="row justify-content-center"> <img src="images/services/card-errand-delivery.jpg" class="img-fluid profile-pic mb-4 mt-3"> </div>
                <h6 class="mb-3 mt-2">William Doe</h6>
                <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!-- =======End Testimonial Section ======= -->
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection