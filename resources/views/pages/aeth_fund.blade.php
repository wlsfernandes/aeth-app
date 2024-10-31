@extends('layouts.app')

@section('title', '#somosAETH | Fund') 

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction') 


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
                            <!-- Image floated to the left with margin 
                            <figure class="image image-1" style="float: left; margin: 0 20px 20px 0;">
                                <img src="assets/images/gallery/meet1.jpg" alt=""
                                    style="max-width: 250px; height: auto;">
                            </figure> -->
                            <p>@lang('messages.annual_fund')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donatin form -->
        @include('partials.donation-form', ['type' => 'donation', 'program' => 'AETH']);
        <!-- Donatin form end -->
    </div>
</section>

@endsection