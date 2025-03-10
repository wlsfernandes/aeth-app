@extends('layouts.app')

@section('title', '#somosAETH | González Center')

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction')


<!-- Content here -->

@section('content')


    <section class="about-section bg-color-1 p_relative sec-pad">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="content_block_one">
                        <div class="content-box p_relative">
                            <div class="text mb_35">
                                <!-- Image floated to the left with margin -->
                                <figure class="image image-1" style="float: left; margin: 0 20px 20px 0;">
                                    <img src="assets/images/gallery/AETH-helpDesk2.jpg" alt=""
                                        style="max-width: 500px; height: auto;">
                                </figure>
                                <p style="margin-top:20px;">@lang('pages.helpDesk.p1')</p>
                                <p>@lang('pages.helpDesk.p2')</p>
                                <p>@lang('pages.helpDesk.p3')</p>
                                <ul class="list-style-one clearfix" style="overflow: hidden;margin-top:20px;">
                                    <li>@lang('pages.helpDesk.p4')</li>
                                    <li>@lang('pages.helpDesk.p5')</li>
                                    <li>@lang('pages.helpDesk.p7')</li>
                                    <li>@lang('pages.helpDesk.p8')</li>
                                    <li>@lang('pages.helpDesk.p9')</li>
                                </ul>
                                <p style="margin-top:20px;">@lang('pages.helpDesk.p10')</p>



                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        </div>
    </section>
    <section class="cta-style-two">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
        <div class="auto-container">
            <div class="inner-box">
                <img src="assets/images/logo-3.png">
                <h1 style="color:#fff">Customer Service</h1><br>
            </div>
        </div>
    </section>
    @include('partials.help-desk')
@endsection
