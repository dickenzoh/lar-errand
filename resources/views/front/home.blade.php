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
    
  </section>
  <!-- =======End Services Section ======= -->
@endsection
@section('scripts')


