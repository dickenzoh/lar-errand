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

  <!-- ======= About Us Section ======= -->
  <section>
        <!-- Main Page Heading -->
    <div class="col-12 text-center mt-5">
      <h1 class="text-dark pt-4">About Us</h1>
      <div class="border-top border-primary w-50 mx-auto my-3"></div>
      <p class="lead">The following include our About Us</p>
    </div>


    <!-- Start Two Column Section -->
	<div class="cotainer my-5">
		<div class="row py-4">
			<div class="col-lg-6 mb-4 my-lg-auto">
				<h1 class="text-dark font-weight-bold mb-3">
					We have been expecting you.
				</h1>
				<p class="mb-4">Lorem ipsum, dolor sit amet consectetur 
					que molestiae magnam voluptate sapiente, 
					ius consectetur aspernatur in ducimus.</p>
				<a href="https://makeitlife.tk" target="blank" class="btn btn-outline-dark btn-lg">
				Check our themes</a>	
			</div>
			<div class="col-lg-6"><img src="images/carousel/carousel-errands-delivery.jpg" alt="" class="w-100"></div>
		</div>
		<div class="row py-4">
			<div class="col-lg-6"><img src="images/carousel/carousel-errands-cleaning.jpg" alt="" class="w-100"></div>
			<div class="col-lg-6 mb-4 my-lg-auto">
				<h1 class="text-dark font-weight-bold mb-3">
					We have been expecting you.
				</h1>
				<p class="mb-4">Lorem ipsum, dolor sit amet consectetur 
					que molestiae magnam voluptate sapiente, 
					ius consectetur aspernatur in ducimus.</p>
				<a href="https://makeitlife.tk" target="blank" class="btn btn-outline-dark btn-lg">
				Check our themes</a>	
			</div>
		</div>
		<div class="row py-4">
			<div class="col-lg-6 mb-4 my-lg-auto">
				<h1 class="text-dark font-weight-bold mb-3">
					We have been expecting you.
				</h1>
				<p class="mb-4">Lorem ipsum, dolor sit amet consectetur 
					que molestiae magnam voluptate sapiente, 
					ius consectetur aspernatur in ducimus.</p>
				<a href="https://makeitlife.tk" target="blank" class="btn btn-outline-dark btn-lg">
				Check our themes</a>	
			</div>
			<div class="col-lg-6"><img src="images/carousel/carousel-errand-laundry.jpg" alt="" class="w-100"></div>
		</div>
	</div>

	<!-- End Two Column Section -->
	 <!-- Main Page Heading -->
	 
	 
	
		<div class="container">
		  
		  <div class="team">
			<div class="member">
			  <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="member_image">
			  <h3>Paul Doe</h3>
			  <span>doe@gmail.com</span>
			  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.amet consecteturamet consecteturamet Laboriosam voluptatum fuga iure. Est, dicta voluptatum.</p>
			  <div class="btn">
				<a href="#">follow</a>
			  </div>
			</div>
			<div class="member">
			  <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="member_image">
			  <h3>John Doe</h3>
			  <span>doe@gmail.com</span>
			  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.amet consecteturamet consecteturamet Laboriosam voluptatum fuga iure. Est, dicta voluptatum.</p>
			  <div class="btn">
				<a href="#">follow</a>
			  </div>
			</div>
			<div class="member">
			  <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="member_image">
			  <h3>Alex Doe</h3>
			  <span>doe@gmail.com</span>
			  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.amet consecteturamet consecteturamet Laboriosam voluptatum fuga iure. Est, dicta voluptatum.</p>
			  <div class="btn">
				<a href="#">follow</a>
			  </div>
			</div>
		  </div>
		</div>
		
		
	  
  </section>
  <!-- =======End About Us Section ======= -->
@endsection
@section('scripts')


