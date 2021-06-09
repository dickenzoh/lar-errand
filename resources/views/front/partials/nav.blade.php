<section>
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded" id="my-navbar">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="logo">
      <a class="navbar-brand mr-auto" href="{{ route('home') }}"><img src="images/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active wow slideInLeft" data-wow-delay="0s">
              <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active wow slideInLeft" data-wow-delay="0.3s">
              <a class="nav-link" href="{{ route('services') }}">Services</a>
            </li>
            <li class="nav-item active wow slideInLeft" data-wow-delay="0.6s">
              <a class="nav-link" href="{{ route('blog') }}">Blog</a>
            </li>
            <li class="nav-item active wow slideInLeft" data-wow-delay="0.9s">
              <a class="nav-link" href="{{ route('testimonials') }}">Testimonials</a>
            </li>
            <li class="nav-item active wow slideInLeft" data-wow-delay="1.2s">
              <a class="nav-link" href="{{ route('about') }}">About Us</a>
        </li>
          <li class="nav-item active wow slideInLeft" data-wow-delay="1.5s">
              <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
            </li>
        </ul>
    </div>
  </nav>
</section>