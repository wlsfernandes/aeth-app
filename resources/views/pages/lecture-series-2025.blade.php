@extends('layouts.app')

@section('title', __('header.lecture_series') . ' | AETH')
@section('meta-description', __('meta.description'))
@section('meta-keywords', __('meta.keywords'))


<!-- Content here -->

@section('content')
    <section class="page-title centred">
        <div
            style="background-image: url(assets/images/gallery/LS_25.jpg); background-size: cover; background-position: center; width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 1;">
        </div>

    </section>
    <section class="cta-style-two">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    </section>
    <!-- about-section -->
    <section class="about-section bg-color-1 p_relative sec-pad" style="background-color:#f5f1fb">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_one">
                        <div class="content-box p_relative mr_30">
                            <div class="sec-title mb_40">
                                <span class="sub-title">About The Event</span>
                                <h2>LS25 Predicación y Migración</h2>
                            </div>
                            <div class="text mb_35">
                                <p>@lang('pages.lectures.p1')</p>
                                <p>@lang('pages.lectures.p2')</p>
                            </div>
                            <div class="inner mb_45">
                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="upper">
                                                <a href="https://www.eventbrite.com/e/8th-justo-and-catherine-gonzalez-lecture-series-tickets-1270760511899?aff=oddtdtcreator"
                                                    target="_blank"
                                                    class="donate-box-btn theme-btn-one d-block w-100 text-center">

                                                    <span> <i class="bi bi-person-plus font-size-32"></i>
                                                        @lang('header.register_here')</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_one">
                        <div class="image-box p_relative d_block ml_40">
                            <div class="shape">
                                <div class="shape-1" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                                <div class="shape-2" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                                <div class="shape-3"></div>
                            </div>
                            <figure class="image image-1"><img src="assets/images/resource/Migration.jpg" alt=""
                                    style="height: 250px;object-fit: cover;">
                            </figure>
                            <figure class="image image-2"><img src="assets/images/resource/Preaching.jpg" alt=""
                                    style="height: 220px;object-fit: cover;">>
                            </figure>
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
                            <h1 style="margin-bottom: 20px; color:#fff"><b><i class="bi bi-geo-alt font-size:24">
                                        Life
                                        Pacific
                                        University - CA</i></b>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="about-style-two" style="background-color:#f5f1fb">
        <div class="iframe-container" style="margin-bottom: 30px;">
            <iframe
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Life%20Pacific%20University,%20San%20Dimas,%20California&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0">
            </iframe>

        </div>
        <div class="auto-container">

            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_three">
                        <div class="content-box mr_30">
                            <div class="sec-title mb_55">
                                <h2>LS25 Predicación y Migración - Agenda</h2>
                            </div>
                            <div class="text mb_40">
                                <p>@lang('pages.lectures.p3') </p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="https://gonzalezcenter.s3.us-east-2.amazonaws.com/AETH_WEBSITE/pdf/Program+Lecture+Series+-+English.pdf"
                                    class="theme-btn-one" target="blank"><small>@lang('header.down_en')</small></a>
                                <a href="https://gonzalezcenter.s3.us-east-2.amazonaws.com/AETH_WEBSITE/pdf/Program+Lecture+Series+-+Espan%CC%83ol.pdf"
                                    class="theme-btn-one" target="_blank"><small>@lang('header.down_es')</small></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box ml_30 mt_19">
                        <figure class="image"><img src="assets/images/resource/agenda.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-style-two sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                    <div class="sec-title mr_70">
                        <span class="sub-title">@lang('header.speakers')</span>
                        <h2>@lang('pages.lectures.keynote')</h2>
                        <p class="mt_30">@lang('pages.lectures.meet')</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="two-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                            <div class="team-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{ route('justo') }}"><img
                                                    src="assets/images/resource/justo.png" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3><a href="{{ route('justo') }}">Dr. Justo González</a></h3>
                                            <span class="designation">@lang('header.speaker')</span>
                                            <ul class="social-links clearfix">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{ route('alma') }}"><img
                                                    src="assets/images/resource/Dr.Alma.png" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3><a href="{{ route('alma') }}">Dra. Alma Tinoco Ruiz</a></h3>
                                            <span class="designation">@lang('header.speaker')</span>
                                            <ul class="social-links clearfix">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{ route('oscar') }}"><img
                                                    src="assets/images/resource/salvatierra.png" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3><a href="{{ route('oscar') }}">Dr. Oscar Garcia Johnson</a></h3>
                                            <span class="designation">@lang('header.speaker')</span>
                                            <ul class="social-links clearfix">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="workshop-speakers mt-5">
                <div class="sec-title centred mb_55" style="margin:0px;">
                    <span class="sub-title calendar">@lang('messages.workshops')</span>
                </div>

                <div class="row justify-content-center text-center" style="margin:0px;">
                    @foreach($speakers->chunk(5) as $chunk)
                        </div>
                        <div class="row justify-content-center text-center" style="margin:0px;">
                            @foreach($chunk as $speaker)
                                <div class="col-6 col-sm-4 col-md-2 mb-4">
                                    <a href="{{ route('speaker.show', $speaker->slug) }}" class="text-decoration-none text-dark">
                                        <img src="{{ $speaker->photo_url }}" alt="{{ $speaker->name }}"
                                            class="img-fluid rounded-circle mb-2"
                                            style="width: 100px; height: 100px; object-fit: cover;">
                                        <p class="mb-0">{{ $speaker->name }}</p>
                                    </a>
                                </div>
                            @endforeach
                    @endforeach
                </div>
            </div>
    </section>



    <section class="cause-section sec-pad">
        <div class="auto-container">
            <div class="sec-title centred mb_50">
                <h2>LS25 Predicación y Migración </h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 cause-block">
                    <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="assets/images/gallery/Identity.jpg" alt=""
                                            style="width:470px;height:auto;"></a>
                                </figure>
                                <div class="category"><a href="#">@lang('pages.lectures.p4')</a></div>
                            </div>
                            <div class="lower-content">
                                <div class="text">
                                    <p>@lang('pages.lectures.p5')</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 cause-block">
                    <div class="cause-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="assets/images/gallery/Trauma.jpg"
                                            style="width:470px;height:auto;"></a></figure>
                                <div class="category"><a href="#">@lang('pages.lectures.p6')</a></div>
                            </div>
                            <div class="lower-content">
                                <div class="text">

                                    <p>@lang('pages.lectures.p7')</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 cause-block">
                    <div class="cause-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="assets/images/gallery/Technique .jpg"
                                            style="width:470px;height:auto;"></a></figure>
                                <div class="category"><a href="#">@lang('pages.lectures.p8')</a></div>
                            </div>
                            <div class="lower-content">
                                <div class="text">
                                    <p>@lang('pages.lectures.p9')</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- faq-section -->
    <section class="faq-section bg-color-1 sec-pad" style="background-color:#f5f1fb">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_three">
                        <div class="content-box mr_30">
                            <div class="sec-title mb_55">
                                <span class="sub-title">Pacific Stay Hotel</span>
                                <h2>@lang('ls25.hotel_information')</h2>
                            </div>
                            <div class="accordion-inner">
                                <ul class="accordion-box">
                                    <li class="accordion block">
                                        <div class="acc-btn active">
                                            <div class="icon-outer"></div>
                                            <h4>@lang('ls25.hotel_procedures')</h4>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="upper">
                                                <a href="https://gonzalezcenter.s3.us-east-2.amazonaws.com/AETH_WEBSITE/blog/17cae89c-f7a7-4ad9-a420-98dfc5047c41.pdf"
                                                    target="_blank"
                                                    class="donate-box-btn theme-btn-one d-block w-100 text-center">
                                                    <span> <i class="bi bi-download font-size-32"></i>
                                                        @lang('ls25.hotel_click_here')</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"></div>
                                            <h4>@lang('ls25.hotel_address')</h4>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>3223 East Garvey Avenue NorthWest Covina - CA 91791 </p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"></div>
                                            <h4>@lang('ls25.hotel_front_desk')</h4>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>(866) 994-3523</p>
                                                <p>(626) 966 8311</p>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box ml_30 mt_19">
                        <figure class="image"><img src="assets/images/resource/hotel-pacific.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-section end -->
    <!-- Sponsors Section -->
    <section class="clients-section" style="background:none; border-color: #F8D7A1; color: #000;">
        <div class="sec-title centred mb_55">
            <span class="sub-title calendar"><b>@lang('messages.our_sponsors')</b></span>
        </div>
        <div class="auto-container">
            <div class="five-item-carousel owl-carousel owl-theme owl-dots-none">
                @foreach($sponsors as $sponsor)
                    <figure class="clients-logo" style="width:150px;">
                        <a href="{{ $sponsor->website_url }}" target="_blank">
                            <img src="{{ asset($sponsor->image_url) }}" alt="{{ $sponsor->name }}">
                        </a>
                    </figure>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Sponsors Section End -->
    <section class="about-section p_relative sec-pad" style="background-color: #f3e6f7;">

        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box ml_30 mt_19">
                        <figure class="image"><img src="assets/images/resource/sponsor_ls25.jpg" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_one">
                        <div class="content-box p_relative mr_30">
                            <!-- Section Title -->
                            <div class="sec-title mb_40">
                                <span class="sub-title">@lang('ls25.sponsorship_oportunities')</span>
                                <h2>LS25 Predicación y Migración</h2>
                            </div>

                            <!-- Description -->
                            <div class="text mb_35">
                                <p>@lang('ls25.identidad_trauma_tecnica')</p>
                            </div>

                            <!-- Sponsor Button -->
                            <div class="inner mb_45">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="upper">
                                                <a href="https://gonzalezcenter.s3.us-east-2.amazonaws.com/AETH_WEBSITE/blog/43511291-cd2c-41b5-b1d5-d279bafe9d5b.pdf"
                                                    target="_blank"
                                                    class="donate-box-btn theme-btn-one d-block w-100 text-center">
                                                    <span>@lang('ls25.become_sponsor_today')</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Sponsor Button -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('partials.contact')

@endsection