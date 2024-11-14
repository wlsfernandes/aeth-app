@extends('layouts.app')

@section('title', '#somosAETH | Compelling Preaching') 

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'AETH, Compelling Preaching, introduction') 


<!-- Content here -->

@section('content') 
<section class="page-title centred">
    <div
        style="background-image: url(assets/images/gallery/compelling_preaching.jpg); background-size: cover; background-position: center; width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 1;">
    </div>

    <div class="auto-container" style="position: relative; z-index: 2;">
        <div class="content-box">
            <h1>@lang('programs.compelling.p1')</h1>
            <h2 style="color:#fff">@lang('programs.compelling.p2')</h2>
        </div>
    </div>
    <div class="inner-box" style="display: flex; justify-content: center;margin-top:25px;">
        <div class="btn-box" style="display: flex; justify-content: center;">
            <a href="#" class="theme-btn-one">
                @lang('programs.compelling.p3')
            </a>
        </div>
    </div>
</section>
<section class="cta-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="inner-box">
            <h2>@lang('programs.compelling.p4')</h2>
            <p><i>@lang('programs.compelling.p5')</i></p>
        </div>
    </div>
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
<section class="about-style-two pt_120" style="background-color:#f5f1fb;margin-top:25px;">
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

<section class="about-style-two pt_120">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box ml_30 mt_19">
                    <figure class="image"><img src="assets/images/gallery/cp2.jpg" alt=""></figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_two">
                    <div class="content-box ml_40">
                        <div class="sec-title mb_55">
                            <h2>@lang('programs.compelling.p9')</h2>
                        </div>
                        <div class="text mb_40">
                            <div class="text">
                                <p>@lang('programs.compelling.p10') </p>
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
                    <figure class="image"><img src="assets/images/gallery/cp_student.jpg" alt=""></figure>
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


@include('partials.contact')

@endsection