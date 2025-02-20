@extends('layouts.app')

@section('title', '#somosAETH | Lecture Series 2025')

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'AETH, Antioquia, introduction')


<!-- Content here -->

@section('content')
    <section class="page-title centred">
        <div
            style="background-image: url(assets/images/gallery/8lseries.jpeg); background-size: cover; background-position: center; width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 1;">
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
                                    <!--  <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                                                                                                                                                                                                                                                                                                    <div class="single-item">
                                                                                                                                                                                                                                                                                                                                        <div class="upper">
                                                                                                                                                                                                                                                                                                                                            <div class="icon-box"><i class="icon-4"></i></div>
                                                                                                                                                                                                                                                                                                                                            <h3>Quick Fundraising</h3>
                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                        <p>Amet minim mollit no deserunt ulamco sit enim.</p>
                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                </div> -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="upper">
                                                <div class="icon-box"><i class="icon-5"></i></div>
                                                <h3>Join our Team</h3>
                                            </div>
                                            <!-- <p>Amet minim mollit no deserunt ulamco sit enim.</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--     <div class="btn-box">
                                                                                                                                                                                                                                                                                                                                <a href="contact.html" class="theme-btn-one">Contact Us</a>
                                                                                                                                                                                                                                                                                                                            </div> -->
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
                            <figure class="image image-1"><img src="assets/images/resource/Migration.jpg" alt="" style="
                                                                                                    height: 250px; /* Match the rendered height */
                                                                                                    object-fit: cover;">
                            </figure>
                            <figure class="image image-2"><img src="assets/images/resource/Preaching.jpg" alt="" style="
                                                                                                    height: 220px; /* Match the rendered height */
                                                                                                    object-fit: cover;">>
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
    <section class="about-style-two">
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
                                <a href="https://gonzalezcenter.s3.us-east-2.amazonaws.com/AETH_WEBSITE/pdf/Lecture+Series+25+Agenda+English+Version.pdf"
                                    class="theme-btn-one" target="blank">@lang('header.down_en')</a>
                                <a href="https://gonzalezcenter.s3.us-east-2.amazonaws.com/AETH_WEBSITE/pdf/Agenda+Lecture+Series+25+Espan%CC%83ol.pdf"
                                    class="theme-btn-one" target="_blank">@lang('header.down_es')</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box ml_30 mt_19">
                        <figure class="image"><img src="assets/images/resource/hotel.jpg" alt=""></figure>
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
                                        <figure class="image"><a href="#"><img src="assets/images/resource/justo.png"
                                                    alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3><a href="#">Dr. Justo González</a></h3>
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
                                        <figure class="image"><a href="#"><img src="assets/images/resource/Dr.Alma.png"
                                                    alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3><a href="#">Dra. Alma Tinoco Ruiz</a></h3>
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
                                        <figure class="image"><a href="#"><img src="assets/images/resource/salvatierra.png"
                                                    alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3><a href="#">Dr. Oscar Garcia Johnson</a></h3>
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
        </div>
    </section>
    <!-- clients-section -->
    <section class="clients-section" style="background:#f7f5f1">
        <div class="sec-title centred mb_55">
            <span class="sub-title calendar">@lang('messages.important_partners')</span>
        </div>
        <div class="auto-container">
            <div class="two-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                <figure class="clients-logo"><a href="https://www.garrett.edu/" target="blank"><img
                            src="assets/images/clients/clients-3.png" alt=""></a>
                </figure>
                <figure class="clients-logo"><a href="https://lillyendowment.org/" target="blank"><img
                            src="assets/images/clients/clients-5.png" alt=""></a>
                </figure>

            </div>
        </div>
    </section>
    <!-- clients-section end -->

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
                                <figure class="image"><a href="#"><img src="assets/images/gallery/certification.jpg"
                                            alt=""></a></figure>
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
                                <figure class="image"><a href="#"><img src="assets/images/gallery/teachers.jpg"
                                            style="width:470px;height:270px;"></a></figure>
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
                                <figure class="image"><a href="#"><img src="assets/images/gallery/meet1.jpg"
                                            style="width:470px;height:270px;"></a></figure>
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



    @include('partials.contact')

@endsection
