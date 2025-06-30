@extends('layouts.app')

@section('title', '#somosAETH | Testimonials')

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'testimonials, welcome, introduction')


<!-- Content here -->
@section('content')


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
    @foreach($testimonials as $testimonial)
        <section class="about-section bg-color-1 p_relative sec-pad"
            style="background-color: {{ $loop->even ? '#f5f1f8' : '#ffffff' }}">
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                        <div class="content_block_one">
                            <div class="content-box p_relative">
                                <div class="text mb_35">

                                    <!-- Responsive, uniform image -->
                                    <figure class="photo photo-1" style="float: left; margin: 0 20px 20px 0; max-width: 300px;">
                                        <img src="{{ $testimonial->image_url }}" class="img-fluid"
                                            style="width: 300px; height: 240px; object-fit: cover; border-radius: 6px;"
                                            alt="{{ $testimonial->name }}">
                                    </figure>

                                    <h2><b>{{ $testimonial->name }}</b></h2>
                                    <h4><i>{{ $testimonial->title }}</i></h4>
                                    <p style="margin-top:20px;text-align:justify">
                                        @php
                                            $locale = app()->getLocale();
                                            $text = $testimonial->{'text_' . $locale} ?? $testimonial->text_es;
                                        @endphp

                                        {!! $text !!}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

@endsection