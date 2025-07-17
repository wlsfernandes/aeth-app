@extends('layouts.app')

@section('title', __('pages.donate') . ' | AETH')
@section('meta-description', __('meta.description'))
@section('meta-keywords', __('meta.keywords'))


<!-- Content here -->

@section('content')
    <section class="page-title centred">
        <div class="bg-layer" style="background-image: url(assets/images/gallery/valores2.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>@lang('header.annual_fund')</h1>
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
                                <p><b>@lang('messages.annual_fund')</b></p>
                                <p>@lang('messages.annual_fund2')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Donatin form -->
            @include('pages.payments.donation.page', ['type' => 'Donation', 'program' => 'AETH'])
            <!-- Donatin form end -->

            @include('partials.testimonial', ['testimonials' => $testimonials])
        </div>
    </section>

@endsection