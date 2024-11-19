@extends('layouts.app')

@section('title', '#somosAETH | Testimonials') 

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'testimonials, welcome, introduction') 


<!-- Content here -->
@section('content') 
<section class="page-title centred">

    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Hanging icons</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#toggles2"></use>
                    </svg>
                </div>
                <div>
                    <h2>Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence
                        and probably just keep going until we run out of words.</p>
                    <a href="#" class="btn btn-primary">
                        Primary button
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#cpu-fill"></use>
                    </svg>
                </div>
                <div>
                    <h2>Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence
                        and probably just keep going until we run out of words.</p>
                    <a href="#" class="btn btn-primary">
                        Primary button
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#tools"></use>
                    </svg>
                </div>
                <div>
                    <h2>Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                        sentence
                        and probably just keep going until we run out of words.</p>
                    <a href="#" class="btn btn-primary">
                        Primary button
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="two-column-section" style="background-color: #ffffff; padding: 40px 0;">
    <div class="auto-container">
        <div class="row align-items-start">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-binoculars"></i>
                    @lang('messages.our_vision')</h2>
                <p>@lang('messages.our_vision_p1').</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-compass"></i>
                    @lang('messages.our_mission')</h2>
                <p>@lang('messages.our_vision_p1')</p>
            </div>
        </div>
    </div>
</section>


@include('partials.testimonial')






@endsection