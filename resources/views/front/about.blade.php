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
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    About Us
                    <div class="about">
                        <h1>Welcome to ErrandLess.</h1>
                        <p>We are a start-up company focusing on essential errands 
                            that require technical digital skills such as bookkeeping, data entry, typessetting and copywriting
                            for small companies and individuals that have no capacity to hire professionals on a 
                            full time basis to perfom the tasks. We have an experienced team of professional taskers!</p>
                        </div>
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>We are a start-up company focusing on essential errands 
                        that require technical digital skills such as bookkeeping, data entry, typessetting and copywriting
                        for small companies and individuals that have no capacity to hire professionals on a 
                        full time basis to perfom the tasks. We have an experienced team of professional taskers!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection