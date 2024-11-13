@extends('layouts.app')

@section('title', '#somosAETH | Testimonials') 

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'testimonials, welcome, introduction') 


<!-- Content here -->
@section('content') 
<!--<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/gallery/about-us.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>@lang('messages.testimonials')</h1>
        </div>
    </div>
</section> -->

@include('partials.testimonial')


<section class="two-column-section" style="background-color: #ffffff; padding: 40px 0;">
    <div class="auto-container">
        <div class="row align-items-start">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-binoculars"></i>   @lang('messages.our_vision')</h2>
                <p>@lang('messages.our_vision_p1').</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-compass"></i>   @lang('messages.our_mission')</h2>
                <p>@lang('messages.our_vision_p1')</p>
            </div>
        </div>
    </div>
</section>



@endsection