@extends('layouts.app')

@section('title', __('pages.compelling_preaching') . ' | AETH')
@section('meta-description', __('meta.description'))
@section('meta-keywords', __('meta.keywords'))


<!-- Content here -->
<style>
    #custom-carousel .owl-nav {
        display: none !important;
    }
</style>
@section('content')
    <section class="page-title centred">
        <a href="{{ route('lectureSeries2025') }}">
            <div
                style="background-image: url(assets/images/banner/compelling_preaching_banner.jpg); background-size: cover; background-position: center; width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 1;">
            </div>
        </a>

    </section>
    <section class="about-style-two pt_120">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box ml_30 mt_19">
                        <figure class="image"><img src="assets/images/gallery/cp1.jpg" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_two">
                        <div class="content-box ml_40">
                            <div class="sec-title mb_55">
                                <h2>@lang('programs.compelling.p6')</h2>
                            </div>
                            <div class="text mb_40">
                                <div class="text">
                                    <p>@lang('programs.compelling.p7') </p>
                                    <p>@lang('programs.compelling.p8')</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-style-two pt_120">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_three">
                        <div class="content-box mr_30">
                            <div class="sec-title mb_55">
                                <h2>@lang('programs.compelling.p9')</h2>
                            </div>
                            <div class="text mb_40">
                                <p>@lang('programs.compelling.p10') </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box ml_30 mt_19">
                        <figure class="image"><img src="assets/images/gallery/pastor.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-style-two pt_120" style="background-color:#f5f1fb;margin-top:25px;">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="content_block_two">
                        <div class="content-box ml_40">

                            <div class="text mb_40">
                                <div class="text">
                                    <p>
                                        <i class="bi bi-translate" style="font-size: 2.0rem; color: #007bff;"></i>
                                        @lang('programs.compelling.p11')
                                    </p>
                                    <p><!-- Empowerment: Raised Fist Icon -->
                                        <i class="bi bi-camera-video" style="font-size: 2.0rem; color: #28a745;"></i>
                                        @lang('programs.compelling.p12')
                                    </p>
                                    <p><!-- Empowerment: Raised Fist Icon -->
                                        <i class="bi bi-clock" style="font-size: 2.0rem; color: #ff9800;"></i>
                                        @lang('programs.compelling.p13')
                                    </p>
                                    <p><!-- Empowerment: Raised Fist Icon -->
                                        <i class="bi bi-people" style="font-size: 2.0rem; color: #673ab7;"></i>
                                        @lang('programs.compelling.p14')
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-style-two pt_120">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box ml_30 mt_19">
                        <figure class="image"><img src="assets/images/gallery/cp_church.jpg" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_two">
                        <div class="content-box ml_40">
                            <div class="sec-title mb_55">
                                <h2>@lang('programs.compelling.p15')</h2>
                            </div>
                            <div class="text mb_40">
                                <div class="text">
                                    <p>@lang('programs.compelling.p16') </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-style-two pt_120" style="background-color:#f5f1fb;margin-top:25px;">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_three">
                        <div class="content-box mr_30">
                            <div class="sec-title mb_55">
                                <h2>@lang('programs.compelling.p17')</h2>
                            </div>
                            <div class="text mb_40">
                                <p>@lang('programs.compelling.p18') </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box ml_30 mt_19">
                        <figure class="image"><img src="assets/images/gallery/cp-student.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="cta-style-two" style="background-color:#f5f1fb">
        <div class="pattern-layer" style="background-color:#f5f1fb"></div>
        <div class="auto-container" style="background-color:#f5f1fb">
            <div class="inner-box" style="max-width:40%;margin-left:350px">
                <img src="assets/images/gallery/logos-3.png" alt="Antioquia Logo">
            </div>
        </div>
    </section>
    <!-- event-section -->
    <section class="event-section bg-color-2 sec-pad" style="background-color:#f5f1fb">
        <div class="auto-container">

            <div id="custom-carousel" class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                <div class="events-block-one">
                    <div class="inner-box">
                        <figure class="image-box" style="margin-top:20px;"><img src="assets/images/resource/lms_aeth.jpg"
                                alt=""></figure>
                        <div class="content-box">
                            <img src="assets/images/resource/cp_logo.png" alt="Logo" style="width: 200px; height: auto;">
                            <h2><b><a href="https://aeth.jenlms.com/"
                                        target="_blank">@lang('ls25.virtual_academic_platform')</a></b></h2>
                            <div class="btn-box" style="margin-top:20px;">
                                <!--<a href="https://aeth.jenlms.com/" class="theme-btn-one" target="_blank">
                                                                            @lang('header.register_here')</a> -->
                                <a class="theme-btn-one" target="_blank">
                                    @lang('header.comming_soon')</a>
                                <h5 style="margin-top:20px;"><a href="https://aeth.jenlms.com/"
                                        target="_blank">@lang('ls25.enroll_online')</a></h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event-section end -->
    @include('partials.testimonial', ['testimonials' => $testimonials])
    @include('partials.contact')

@endsection