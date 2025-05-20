@extends('layouts.app')

@section('title', '#somosAETH | Certification Program')

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'AETH, Antioquia, introduction')


<!-- Content here -->

@section('content')
    <section class="page-title centred">
        <div
            style="background-image: url(assets/images/gallery/antioquia-program.jpg); background-size: cover; background-position: center; width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 1;">
        </div>
    </section>
    <section class="cta-style-two">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
        <div class="auto-container">
            <div class="inner-box">
                <img src="assets/images/logo/antioquia-logo.png">
                <h1 style="color:#fff">@lang('programs.antioquia_title')</h1><br>
            </div>
        </div>
    </section>


    <section class="about-style-two pt_120">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box ml_30 mt_19">
                        <figure class="image"><img src="assets/images/gallery/antioquia-what.jpg" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_two">
                        <div class="content-box ml_40">
                            <div class="sec-title mb_55">
                                <h2>@lang('programs.antioquia.p1')</h2>
                            </div>
                            <div class="text mb_40">
                                <div class="text">
                                    <p>@lang('programs.antioquia.p2') </p>
                                    <p>@lang('programs.antioquia.p3')</p>
                                    <p>@lang('programs.antioquia.p4')</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-style-two pt_120" style="background-color:#f5f1fb">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_three">
                        <div class="content-box mr_30">
                            <div class="sec-title mb_55">
                                <h2>@lang('programs.antioquia.p5')</h2>
                            </div>
                            <div class="text mb_40">
                                <p>@lang('programs.antioquia.p6') </p>
                                <p>@lang('programs.antioquia.p7') </p>
                                <p>@lang('programs.antioquia.p8') </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box ml_30 mt_19">
                        <figure class="image"><img src="assets/images/gallery/antioquia2.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cause-section sec-pad">
        <div class="auto-container">
            <div class="sec-title centred mb_50">
                <h2>@lang('programs.antioquia.p9')</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 cause-block">
                    <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="assets/images/gallery/certification.jpg"
                                            alt=""></a></figure>
                                <div class="category"><a href="#">@lang('programs.antioquia.p10')</a></div>
                            </div>
                            <div class="lower-content">
                                <div class="text">
                                    <p>@lang('programs.antioquia.p11')</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 cause-block">
                    <div class="cause-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="assets/images/gallery/teachers.jpg"
                                            style="width:470px;height:270px;"></a></figure>
                                <div class="category"><a href="#">@lang('programs.antioquia.p12')</a></div>
                            </div>
                            <div class="lower-content">
                                <div class="text">

                                    <p>@lang('programs.antioquia.p13')</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 cause-block">
                    <div class="cause-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="assets/images/gallery/meet1.jpg"
                                            style="width:470px;height:270px;"></a></figure>
                                <div class="category"><a href="#">@lang('programs.antioquia.p14')</a></div>
                            </div>
                            <div class="lower-content">
                                <div class="text">
                                    <p>@lang('programs.antioquia.p15')</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-style-two">
        <div class="pattern-layer"></div>
        <div class="auto-container">
            <div class="inner-box" style="display: flex; justify-content: center; align-items: center;">
                <div class="auto-container">
                    <div class="row align-items-start">
                        <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center;">
                            <img src="assets/images/logo/antioquia-logo.png" alt="Antioquia Logo">
                            <h1 style="margin-bottom: 20px; color:#fff"><b><i>@lang('programs.antioquia.p16')</i></b>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="about-style-two pt_120">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="content_block_two">
                        <div class="content-box ml_40">
                            <div class="sec-title mb_55">
                                <h1>@lang('programs.antioquia.p17')</h1>
                                <h2 style="color:#4a235a;margin-top:15px;">@lang('programs.antioquia.p18')</h2>
                            </div>
                            <div class="text mb_40">
                                <div class="text">
                                    <p><!-- Growth: Tree with Roots Icon -->
                                        <i class="bi bi-tree" style="font-size: 2rem; color: green;"></i>
                                        @lang('programs.antioquia.p19')
                                    </p>
                                    <p><!-- Empowerment: Raised Fist Icon -->
                                        <i class="bi bi-person-arms-up" style="font-size: 2rem; color: green;"></i>
                                        @lang('programs.antioquia.p20')
                                    </p>
                                    <p><!-- Empowerment: Raised Fist Icon -->
                                        <i class="bi bi-arrow-repeat" style="font-size: 2rem; color:green;"></i>
                                        @lang('programs.antioquia.p21')
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-style-two pt_120" style="background-color:#f5f1fb">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 image-column">
                    <div class="sec-title mb_55">
                        <h1>@lang('programs.antioquia.p22')</h1>
                        <h2 style="color:#4a235a;margin-top:15px;">@lang('programs.antioquia.p23')</h2>
                    </div>
                    <div class="image-box ml_30 mt_19">
                        <a href="https://redet.us" target="blank">
                            <figure class="image"><img src="assets/images/gallery/redet.png" alt=""></figure>
                        </a>
                    </div>
                    <div class="text mb_40" style="margin-top:25px;">
                        <div class="text">
                            <p>
                                @lang('programs.antioquia.p29')
                            </p>
                            <p>
                                @lang('programs.antioquia.p25')
                            </p>
                            <p>
                                @lang('programs.antioquia.p26')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="cta-style-two">
        <div class="pattern-layer"></div>
        <div class="auto-container">
            <div class="sec-title mb_55">
                <h3 style="color:#fff">@lang('programs.antioquia.p28')</h3>
            </div>
            <div class="inner-box" style="margin-bottom:50px;">
                <img src="assets/images/gallery/aeth-logo.png" alt="Antioquia Logo">
                <img src="assets/images/gallery/emory-logo.png" alt="Antioquia Logo">
                <img src="assets/images/gallery/antioquia-logo2.png" alt="Antioquia Logo">
            </div>
        </div>
    </section>


    @include('partials.contact')

@endsection