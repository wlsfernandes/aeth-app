@extends('layouts.app')

@section('title', __('pages.hispanic_initiative') . ' | AETH')
@section('meta-description', __('meta.description'))
@section('meta-keywords', __('meta.keywords'))

@section('content')
    <section class="page-title centred">
        <div class="bg-layer" style="background-image: url(assets/images/gallery/nish.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>{{ __('hispanic_initiative.title') }}</h1>
                <p class="lead" style="color:#fff"><b>{{ __('hispanic_initiative.subtitle') }}</b></p>
            </div>
        </div>
    </section>
    <section class="about-style-two pt_120">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box mr_40">
                        <div class="image-shape" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                        <figure class="image"><img src="assets/images/resource/puerto_rico.jpg" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_two">
                        <div class="content-box ml_40">
                            <div class="sec-title mb_60">
                                <span class="sub-title">@lang('hispanic_initiative.title')</span>
                                <h2>Puerto Rico</h2>
                            </div>
                            <div class="text mb_40">
                                <p>@lang('hispanic_initiative.puerto_rico_1')</p>
                                <p>@lang('hispanic_initiative.puerto_rico_2')</p>
                            </div>
                            <!-- <div class="btn-box">
                                                                                                                                            <a href="about.html" class="theme-btn-one">More About Us</a>
                                                                                                                                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-5">
        <div class="text-center mb-5">
            <img src="{{ asset('assets/images/logo/hispanic-initiative.png') }}" alt="NISHPLC Logo" class="img-fluid mb-3"
                style="max-height: 400px;">
            <blockquote class="blockquote fst-italic" style="color:#4a235a">
                <i>{{ __('hispanic_initiative.verse') }}</i>
            </blockquote>
        </div>

        <div class="row mb-4">
            <div class="col-md-12">
                <h3>{{ __('hispanic_initiative.about_title') }}</h3>
                <p>{!! __('hispanic_initiative.about_text') !!}</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-12">
                <h2><i class="bi bi-bookmark-check-fill me-2 text-success"></i>
                    {{ __('hispanic_initiative.guiding_principles') }}</h2>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-people-fill me-2"></i>
                            {{ __('hispanic_initiative.convene_title') }}</h5>
                        <p class="card-text">{{ __('hispanic_initiative.convene_text') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-lightbulb-fill me-2"></i>
                            {{ __('hispanic_initiative.innovate_title') }}</h5>
                        <p class="card-text">{{ __('hispanic_initiative.innovate_text') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-graph-up-arrow me-2"></i>
                            {{ __('hispanic_initiative.capacitate_title') }}</h5>
                        <p class="card-text">{{ __('hispanic_initiative.capacitate_text') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-tools me-2"></i>
                            {{ __('hispanic_initiative.facilitate_title') }}</h5>
                        <p class="card-text">{{ __('hispanic_initiative.facilitate_text') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-unlock-fill me-2"></i>
                            {{ __('hispanic_initiative.enable_title') }}</h5>
                        <p class="card-text">{{ __('hispanic_initiative.enable_text') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center my-5">
            <h2><i class="bi bi-people-fill text-warning me-2"></i> {{ __('hispanic_initiative.annual_title') }}</h2>
            <p class="lead">{{ __('hispanic_initiative.annual_subtitle') }}</p>
            <ul class="list-group list-group-flush text-start d-inline-block mx-auto" style="max-width: 700px;">
                <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>
                    {{ __('hispanic_initiative.annual_1') }}</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>
                    {{ __('hispanic_initiative.annual_2') }}</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>
                    {{ __('hispanic_initiative.annual_3') }}</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>
                    {{ __('hispanic_initiative.annual_4') }}</li>
                <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>
                    {{ __('hispanic_initiative.annual_5') }}</li>
            </ul>
        </div>

        <div class="bg-light rounded p-4 mt-5">
            <h2 class="mb-3"><i class="bi bi-envelope-fill text-danger me-5"></i>
                {{ __('hispanic_initiative.contact_title') }}</h2>
            <p>{{ __('hispanic_initiative.contact_intro') }}</p>
            <ul class="list-unstyled">
                <li><strong>{{ __('hispanic_initiative.contact_coordinated_by_label') }}</strong>
                    {{ __('hispanic_initiative.contact_coordinated_by') }}</li>
                <li><strong>{{ __('hispanic_initiative.contact_funded_by_label') }}</strong>
                    {{ __('hispanic_initiative.contact_funded_by') }}</li>
                <li><strong>{{ __('hispanic_initiative.contact_address_label') }}</strong>
                    {{ __('hispanic_initiative.contact_address') }}</li>
                <li><strong>{{ __('hispanic_initiative.contact_email_label') }}</strong>
                    <a href="mailto:hispanicinitiative@aeth.org">{{ __('hispanic_initiative.contact_email') }}</a>
                </li>
            </ul>
        </div>
        @include('partials.testimonial', ['testimonials' => $testimonials])
    </div>
@endsection