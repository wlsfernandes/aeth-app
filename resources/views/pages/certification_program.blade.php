@extends('layouts.app')

@section('title', '#somosAETH | Certification Program') 

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction') 


<!-- Content here -->

@section('content') 
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/certification.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>@lang('programs.certification_program')</h1>
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
                            <!-- Thumbnail preview (initially visible) -->
                            <figure class="video video-1" style="float: left; margin: 0 20px 20px 0;">
                                <iframe
                                    src="https://player.vimeo.com/video/917698630?color&autopause=0&loop=0&muted=0&title=1&portrait=1&byline=1"
                                    width="500" height="350" frameborder="0"
                                    allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                                    style="display: block;">
                                </iframe>
                            </figure>
                            <h2>@lang('programs.certification_program_p1')</h2>
                            <p style="margin-top:20px;">@lang('programs.certification_program_p2')</p>
                            <p style="margin-top:20px;">@lang('programs.certification_program_p3')</p>
                            <p style="margin-top:20px;">@lang('programs.certification_program_p4')</p>
                            <p style="margin-top:20px;">@lang('programs.certification_program_p5')</p>
                            <p style="margin-top:20px;">@lang('programs.certification_program_p6')</p>
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
            <h2>@lang('programs.learn_more')</h2><br>
        </div>
    </div>
</section>

<section class="video-gallery" style="margin-top:50px; margin-bottom:100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/963247758"
                            allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <p class="card-title text-center"><i class="bi bi-play-circle"></i>
                            @lang('programs.introduction')</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/963249800"
                            allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <p class="card-title text-center"><i class="bi bi-play-circle"></i> @lang('programs.chapter1')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/963254707"
                            allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <p class="card-title text-center"><i class="bi bi-play-circle"></i> @lang('programs.chapter2')
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/963257890"
                            allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <p class="card-title text-center"><i class="bi bi-play-circle"></i> @lang('programs.chapter3')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/963264337"
                            allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <p class="card-title text-center"><i class="bi bi-play-circle"></i> @lang('programs.chapter4')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/963266740"
                            allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <p class="card-title text-center"><i class="bi bi-play-circle"></i> @lang('programs.chapter5')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="inner-box"  style="display: flex; justify-content: center;">
            <div class="btn-box" style="display: flex; justify-content: center;">
                <a href="{{ route('requestCertification') }}" class="theme-btn-one">
                    <span>@lang('programs.request_certification')</span>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="two-column-section" style="background-color: #ffffff; padding: 40px 0;">
    <div class="auto-container">
        <div class="row align-items-start">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h2 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-clipboard-check"></i>
                    @lang('programs.values')</h2>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h2 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-compass"></i>
                    @lang('programs.principles')</h2>
            </div>
        </div>
    </div>
</section>
<section class="two-column-section" style="background-color: #ffffff; padding: 40px 0;">
    <div class="auto-container">
        <div class="row align-items-start">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-heart" style="color:#4a235a"></i>
                    @lang('programs.commitment')</h5>
                <p>@lang('programs.commitment_p1').</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 style="text-align: center; margin-bottom: 20px;"><i class="bi-check-circle"
                        style="color:#4a235a"></i>
                    @lang('programs.approach')</h5>
                <p>@lang('programs.approach_p1')</p>
            </div>
        </div>
    </div>
</section>

<section class="two-column-section" style="background-color: #ffffff; padding: 40px 0;">
    <div class="auto-container">
        <div class="row align-items-start">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-person-lines-fill"
                        style="color:#4a235a"></i>
                    @lang('programs.collaboration')</h5>
                <p>@lang('programs.collaboration_p1').</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-arrow-repeat"
                        style="color:#4a235a"></i>
                    @lang('programs.agility')</h5>
                <p>@lang('programs.agility_p1')</p>
            </div>
        </div>
    </div>
</section>
<section class="two-column-section" style="background-color: #ffffff; padding: 40px 0;">
    <div class="auto-container">
        <div class="row align-items-start">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-hand-thumbs-up"
                        style="color:#4a235a"></i>
                    @lang('programs.service')</h5>
                <p>@lang('programs.service_p1').</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 style="text-align: center; margin-bottom: 20px;"><i class="bi-chat-dots" style="color:#4a235a"></i>
                    @lang('programs.responsiveness')</h5>
                <p>@lang('programs.responsiveness_p1')</p>
            </div>
        </div>
    </div>
</section>
<section class="two-column-section" style="background-color: #ffffff; padding: 40px 0;">
    <div class="auto-container">
        <div class="row align-items-start">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-shield-lock"
                        style="color:#4a235a"></i>
                    @lang('programs.integrity')</h5>
                <p>@lang('programs.integrity_p1').</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-eye" style="color:#4a235a"></i>
                    @lang('programs.self_reflection')</h5>
                <p>@lang('programs.self_reflection_p1')</p>
            </div>
        </div>
    </div>
</section>
<section class="two-column-section" style="background-color: #ffffff; padding: 40px 0;">
    <div class="auto-container">
        <div class="row align-items-start">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-stars" style="color:#4a235a"></i>
                    @lang('programs.excellence')</h5>
                <p>@lang('programs.excellence_p1').</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 style="text-align: center; margin-bottom: 20px;"><i class="bi-person-check"
                        style="color:#4a235a"></i>
                    @lang('programs.responsibility')</h5>
                <p>@lang('programs.responsibility_p1')</p>
            </div>
        </div>
    </div>
</section>
@endsection