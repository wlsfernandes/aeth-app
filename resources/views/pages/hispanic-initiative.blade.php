@extends('layouts.app')

@section('title', '#somosAETH | Blog')

@section('meta-description', __('hispanic_initiative.meta_description'))
@section('meta-keywords', __('hispanic_initiative.meta_keywords'))

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
                <li><strong>{{ __('hispanic_initiative.contact_phone_label') }}</strong>
                    {{ __('hispanic_initiative.contact_phone') }}</li>
                <li><strong>{{ __('hispanic_initiative.contact_email_label') }}</strong>
                    <a href="mailto:hispanicinitiative@aeth.org">{{ __('hispanic_initiative.contact_email') }}</a>
                </li>
            </ul>
        </div>
    </div>
@endsection