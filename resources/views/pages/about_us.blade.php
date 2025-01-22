@extends('layouts.app')

@section('title', '#somosAETH | About Us')

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction')


<!-- Content here -->

@section('content')
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/gallery/about-us.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>@lang('messages.who_we_are')</h1>
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
                            <figure class="video video-1" style="float: left; margin: 0 20px 20px 0;">
                                <iframe
                                    src="https://player.vimeo.com/video/917698630?autoplay=1&loop=0&muted=0&title=1&portrait=1&byline=1"
                                    width="500" height="281" frameborder="0"
                                    allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                                    style="display: block;">
                                </iframe>
                            </figure>

                            <p>@lang('messages.who_we_are_p1')</p>
                            <p style="margin-top:20px;">@lang('messages.who_we_are_p2')</p>
                            <p style="margin-top:20px;">@lang('messages.who_we_are_p3')</p>
                            <p style="margin-top:20px;">@lang('messages.who_we_are_p4')</p>
                        </div>
                    </div>
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
<section class="cta-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="inner-box">
            <h2>@lang('messages.core_values')</h2>
            <p style="color: #000000;">
                @lang('messages.fundamental_beliefs')
            </p>
        </div>
    </div>
</section>

<section class="two-column-section" style="background-color: #ffffff; padding: 40px 0;">
    <div class="auto-container">
        <div class="row align-items-start">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-clipboard-check"></i>
                    @lang('messages.values')</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-compass"></i>
                    @lang('messages.principles')</h2>
            </div>
        </div>
    </div>
</section>
<section class="two-column-section" style="background-color: #ffffff; padding: 40px 0;">
    <div class="auto-container">
        <div class="row align-items-start">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-heart" style="color:#4a235a"></i>
                    @lang('messages.commitment')</h5>
                <p>@lang('messages.commitment_p1').</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 style="text-align: center; margin-bottom: 20px;"><i class="bi-check-circle"
                        style="color:#4a235a"></i>
                    @lang('messages.approach')</h5>
                <p>@lang('messages.approach_p1')</p>
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
                    @lang('messages.collaboration')</h5>
                <p>@lang('messages.collaboration_p1').</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-arrow-repeat"
                        style="color:#4a235a"></i>
                    @lang('messages.agility')</h5>
                <p>@lang('messages.agility_p1')</p>
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
                    @lang('messages.service')</h5>
                <p>@lang('messages.service_p1').</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 style="text-align: center; margin-bottom: 20px;"><i class="bi-chat-dots" style="color:#4a235a"></i>
                    @lang('messages.responsiveness')</h5>
                <p>@lang('messages.responsiveness_p1')</p>
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
                    @lang('messages.integrity')</h5>
                <p>@lang('messages.integrity_p1').</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-eye" style="color:#4a235a"></i>
                    @lang('messages.self_reflection')</h5>
                <p>@lang('messages.self_reflection_p1')</p>
            </div>
        </div>
    </div>
</section>
<section class="two-column-section" style="background-color: #ffffff; padding: 40px 0;">
    <div class="auto-container">
        <div class="row align-items-start">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 style="text-align: center; margin-bottom: 20px;"><i class="bi bi-stars" style="color:#4a235a"></i>
                    @lang('messages.excellence')</h5>
                <p>@lang('messages.excellence_p1').</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5 style="text-align: center; margin-bottom: 20px;"><i class="bi-person-check"
                        style="color:#4a235a"></i>
                    @lang('messages.responsibility')</h5>
                <p>@lang('messages.responsibility_p1')</p>
            </div>
        </div>
    </div>
</section>
@endsection
