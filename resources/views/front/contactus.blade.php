@extends('layouts.app')
@section('content')
<div class="content">
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

  <!-- =======Contact Us Section ======= -->
  <section>
      <!-- Main Page Heading -->
    <div class="col-12 text-center mt-5">
        <h1 class="text-dark pt-4">Contact Us</h1>
        <div class="border-top border-primary w-50 mx-auto my-3"></div>
        <p class="lead">We woul love to here from here.</p>
      </div>

      <!-- Contact Form -->
      <div class="container text-center contact">
        <div class="row input-container align-center">
            <div class="col-xs-12">
                <div class="styled-input wide">
                    <input type="text" required />
                    <label>Name</label> 
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="styled-input">
                    <input type="text" required />
                    <label>Email</label> 
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="styled-input" style="float:right;">
                    <input type="text" required />
                    <label>Phone Number</label> 
                </div>
            </div>
            <div class="col-xs-12">
                <div class="styled-input wide">
                    <textarea required></textarea>
                    <label>Message</label>
                </div>
            </div>
            <div class="col-xs-12">
                <a href= "{{ route('services') }}" alt='Broken Link'>
                    <button type="button"><span></span>Send Message</button>
                </a>
            </div>
        </div>
      </div>
  </section>
</div>
@endsection
@section('scripts')
@parent

@endsection