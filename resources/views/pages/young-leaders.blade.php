@extends('layouts.app')

@section('title', '#somosAETH | Young Leaders')

@section('meta-description', 'Young leaders')

@section('meta-keywords', 'AETH, Young Leaders, introduction')


<!-- Content here -->

@section('content')
<section class="page-title centred">
    <div
        style="background-image: url(assets/images/gallery/young-leaders.jpg); background-size: cover; background-position: center; width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 1;">
    </div>
    <div class="auto-container" style="position: relative; z-index: 2;">
        <div class="content-box">
            <h1>@lang('programs.young_leaders.title')</h1>
        </div>
    </div>
</section>
<section class="cta-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="inner-box">

            <h2>@lang('programs.young_leaders.welcome')</h2><br>
        </div>
    </div>
</section>


<section class="about-style-two pt_120">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box ml_30 mt_19">
                    <figure class="image"><img src="assets/images/gallery/young-leaders-what.jpg" alt=""></figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_two">
                    <div class="content-box ml_40">
                        <div class="sec-title mb_55">
                            <h2>@lang('programs.young_leaders.p1')</h2>
                        </div>
                        <div class="text mb_40">
                            <div class="text">
                                <p>@lang('programs.young_leaders.p2') </p>
                                <p>@lang('programs.young_leaders.p3')</p>
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
                            <h2>@lang('programs.young_leaders.p4')</h2>
                        </div>
                        <div class="text mb_40">
                            <p>@lang('programs.young_leaders.p5') </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box ml_30 mt_19">
                    <figure class="image"><img src="assets/images/gallery/young-leaders-who.jpg" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!--<section class="cause-section sec-pad">
    <div class="auto-container">
        <div class="sec-title centred mb_50">
            <h2>@lang('programs.young_leaders.p9')</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 cause-block">
                <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="assets/images/gallery/certification.jpg"
                                        alt=""></a></figure>
                            <div class="category"><a href="#">@lang('programs.young_leaders.p10')</a></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">
                                <p>@lang('programs.young_leaders.p11')</p>
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
                            <div class="category"><a href="#">@lang('programs.young_leaders.p12')</a></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">

                                <p>@lang('programs.young_leaders.p13')</p>
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
                            <div class="category"><a href="#">@lang('programs.young_leaders.p14')</a></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">
                                <p>@lang('programs.young_leaders.p11')</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

</section>
<section class="about-style-two pt_120">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div class="content_block_two">
                    <div class="content-box ml_40">
                        <div class="sec-title mb_55">
                            <h2 style="color:#4a235a;margin-top:15px;">@lang('programs.young_leaders.key_points')</h2>
                        </div>
                        <div class="text mb_40">
                            <div class="text">
                                <p><!-- Growth: Tree with Roots Icon -->
                                    <i class="bi-shield-check" style="font-size: 2rem; color: green;"></i>
                                    @lang('programs.young_leaders.kp_1')
                                </p>
                                <p><!-- Empowerment: Raised Fist Icon -->
                                    <i class="bi-circle-half" style="font-size: 2rem; color: green;"></i>
                                    @lang('programs.young_leaders.kp_2')
                                </p>
                                <p><!-- Empowerment: Raised Fist Icon -->
                                    <i class="bi-link-45deg" style="font-size: 2rem; color:green;"></i>
                                    @lang('programs.young_leaders.kp_3')
                                </p>
                                <p><!-- Empowerment: Raised Fist Icon -->
                                    <i class="bi-person-bounding-box" style="font-size: 2rem; color:green;"></i>
                                    @lang('programs.young_leaders.kp_4')
                                </p>
                                <p><!-- Empowerment: Raised Fist Icon -->
                                    <i class="bi-lightbulb" style="font-size: 2rem; color:green;"></i>
                                    @lang('programs.young_leaders.kp_5')
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

            </div>
        </div>
    </div>
</section>
<section class="two-column-section" style="background-color:#f5f1fb; padding: 40px 0;">
    <div class="auto-container">
        <div class="row align-items-start">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-binoculars"></i>
                    @lang('programs.young_leaders.vision')</h2>
                <p>@lang('programs.young_leaders.vision_p1').</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-compass"></i>
                    @lang('programs.young_leaders.mission')</h2>
                <p>@lang('programs.young_leaders.mission_p1')</p>
            </div>
        </div>
    </div>
</section>

@include('partials.contact')

@endsection
