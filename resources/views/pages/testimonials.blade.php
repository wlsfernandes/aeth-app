@extends('layouts.app')

@section('title', '#somosAETH | Testimonials') 

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'testimonials, welcome, introduction') 


<!-- Content here -->

@section('content') 
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/gallery/about-us.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>@lang('messages.testimonials')</h1>
        </div>
    </div>
</section>
<section class="about-section bg-color-1 p_relative sec-pad">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div class="content_block_one">
                    <div class="content-box p_relative">
                        <div class="text mb_35">
                            <!-- Image floated to the left with margin -->
                            <figure class="photo photo-1" style="float: left; margin: 0 20px 20px 0;">
                                <img src="assets/images/testimonials/testimonial_1.jpg" width="500" height="281"
                                    style="display: block;">
                            </figure>

                            <h2><b>@lang('messages.testimonials_name1')</b></h2>
                            <h4><i>@lang('messages.testimonials_desc1')</i></h4>
                            <p style="margin-top:20px;text-align:justify">@lang('messages.testimonials_p1')</p>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-section bg-color-1 p_relative sec-pad" style="background-color:#ffffff">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div class="content_block_one">
                    <div class="content-box p_relative">
                        <div class="text mb_35">
                            <!-- Image floated to the left with margin -->
                            <figure class="photo photo-1" style="float: left; margin: 0 20px 20px 0;">
                                <img src="assets/images/testimonials/testimonial_2.jpg" width="500" height="281"
                                    style="display: block;">
                            </figure>

                            <h2><b>@lang('messages.testimonials_name2')</b></h2>
                            <h4><i>@lang('messages.testimonials_desc2')</i></h4>
                            <p style="margin-top:20px;text-align:justify">@lang('messages.testimonials_p2')</p>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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