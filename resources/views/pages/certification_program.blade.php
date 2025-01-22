@extends('layouts.app')

@section('title', '#somosAETH | Certification Program')

@section('meta-description', 'Discover the AET Certification Program: Empowering Hispanic, Latino, and Latine communities with accessible, contextualized theological education. Build leadership, faith identity, and critical thinking through innovative curriculum, mentorship, and collaboration. Join our network of scholars, students, and faith leaders committed to justice, ministry, and community transformation.')

@section('meta-keywords', 'mission, vision, theological education, theology, experts, Bible institutes, students, lay persons, accessible theological education, empower, certification, community, communities of practice, instructor education, leadership, capacity building,  organization, Hispanic, Latino, Latine, Latinx, curriculum, contextualized, library resources, collaboration, relations, membership, network, faith, identity, justice, calling, ministry, migrant, immigrant, church, research, study, reflection, practical theology, mentorship, publications, resources, evaluation, scholars, relevancy, critical thinking, initiatives, engagement, learning experiences, application, self-study, certified, institution, improvement, leadership development, standards, educational standards, organizational standards')


<!-- Content here -->

@section('content')
<section class="page-title centred">
    <div
        style="background-image: url(assets/images/certification.jpg); background-size: cover; background-position: center; width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 1;">
    </div>
    <div class="auto-container" style="position: relative; z-index: 2;">
        <div class="content-box">
            <h1>AETH - Certification Program</h1>
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
        <div class="inner-box" style="display: flex; justify-content: center;">
            <div class="btn-box" style="display: flex; justify-content: center;">
                <a href="{{ route('requestCertification') }}" class="theme-btn-two">
                    <span>@lang('programs.request_certification')</span>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="two-column-section" style="background-color: #ffffff; padding: 40px 0;">
    <div class="auto-container">
        <h2>@lang('programs.benefits_membership')</h2>
        <div class="inner-box" style="display: flex; justify-content: center;">
            <div class="btn-box" style="display: flex; justify-content: center;">

                <div class="row" style="margin-top:50px;">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <ul class="list-style-one clearfix">
                            <li>@lang('programs.desc_benefit1')</li>
                            <li>@lang('programs.desc_benefit2')</li>
                            <li>@lang('programs.desc_benefit3')</li>
                            <li>@lang('programs.desc_benefit4')</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <ul class="list-style-one clearfix">
                            <li>@lang('programs.desc_benefit5')</li>
                            <li>@lang('programs.desc_benefit6')</li>
                            <li>@lang('programs.desc_benefit7')</li>
                            <li>@lang('programs.desc_benefit8')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-style-two">
    <div class="pattern-layer"></div>
    <div class="auto-container">
        <div class="inner-box" style="display: flex; justify-content: center;">
            <div class="auto-container">
                <div class="row align-items-start">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <img src="assets/images/ats-logo.png">
                        <h2 style="text-align: center; margin-bottom: 20px;">@lang('programs.what_ats')</h2>
                        <p style="color:#fff"><b>@lang('programs.ats_p1')</b></p>
                        <p style="margin-top:15px;color:#fff">@lang('programs.ats_p2')</p>
                        <p style="color:#fff"><b>@lang('programs.ats_p3')</b></p>
                        <p style="margin-top:15px;color:#fff"><b>@lang('programs.ats_p4')</b></p>
                        <p style="color:#fff"><b>@lang('programs.ats_p5')</b></p>

                        <div class="btn-box" style="display: flex; justify-content: center;">
                            <a href="{{ asset('assets/images/files/pdf/ATS_Letter381_Approval_of_Standards.pdf') }}"
                                target="blank" class="theme-btn-two">
                                <span>@lang('programs.letter_approval')</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.testimonial')


@endsection
