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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quam turpis nulla magnis
                                    vestibulum tempor quam molestie. Dolor tortor pulvinar mus et Euismod rhoncus imperdiet
                                    diam.Quis nibh massa nullam nunc, quis ridiculus. Est nisl, consectetur nunc.</p>
                            </div>
                            <div class="inner mb_45">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="upper">
                                                <div class="icon-box"><i class="icon-4"></i></div>
                                                <h3>Quick Fundraising</h3>
                                            </div>
                                            <p>Amet minim mollit no deserunt ulamco sit enim.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="upper">
                                                <div class="icon-box"><i class="icon-5"></i></div>
                                                <h3>Join our Team</h3>
                                            </div>
                                            <p>Amet minim mollit no deserunt ulamco sit enim.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box">
                                <a href="contact.html" class="theme-btn-one">Contact Us</a>
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
                            <figure class="image image-1"><img src="assets/images/resource/about-1.jpg" alt=""></figure>
                            <figure class="image image-2"><img src="assets/images/resource/about-2.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  <section class="about-style-two pt_120" style="background-color:#f5f1fb">
                                                                                    <div class="auto-container">
                                                                                        <div class="row align-items-center clearfix">
                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                                                                                <div class="image-box ml_30 mt_19">
                                                                                                    <figure class="image"><img src="assets/images/resource/calendar.png" alt=""></figure>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                                                                                <div class="content_block_two">
                                                                                                    <div class="content-box ml_40">
                                                                                                        <div class="sec-title mb_55">
                                                                                                            <h2>When</h2>
                                                                                                            <h3>09th - 10th - 11th | OCTOBER</h3>
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
                                                                                </section>-->
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
                                <h2>Hotel and Local info</h2>
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
                        <span class="sub-title">Oradores</span>
                        <h2>Meet <br />Our Awesome Oradores</h2>
                        <p class="mt_30">Amet dui scelerisque vel habitant eget tincidunt facilisis pretium. Porttitor mi
                            nisi, non vitae tempus.</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="two-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                            <div class="team-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="team-details.html"><img
                                                    src="assets/images/team/Justo Gonzalez.jpg" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3><a href="team-details.html">Dr. Justo González</a></h3>
                                            <span class="designation">Volunteer</span>
                                            <ul class="social-links clearfix">
                                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="team-details.html"><img
                                                    src="assets/images/team/team-2.jpg" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3><a href="team-details.html">Dra. Alma Tinoco Ruiz</a></h3>
                                            <span class="designation">Volunteer</span>
                                            <ul class="social-links clearfix">
                                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="team-details.html"><img
                                                    src="assets/images/team/team-2.jpg" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <h3><a href="team-details.html">Dr. Oscar Garcia Johnson</a></h3>
                                            <span class="designation">Volunteer</span>
                                            <ul class="social-links clearfix">
                                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
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
    <section class="clients-section"
        style="margin-bottom:75px;height:150px;background: linear-gradient(to right,#4a235a, #a569bd, #e8daef); border-color: #4a235a; color: #fff;">

        <div class="auto-container">
            <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                <figure class="clients-logo" style="width: 180px;height:auto;"><a href="index.html"><img
                            src="assets/images/team/Jessica Lugo.jpg" alt=""></a>
                </figure>
                <figure class="clients-logo" style="width: 180px;height:auto;"><a href="index.html"><img
                            src="assets/images/team/Ondina Gonzalez.jpg" alt=""></a>
                </figure>
                <figure class="clients-logo" style="width: 180px;height:auto;"><a href="index.html"><img
                            src="assets/images/team/Wilson Fernandes.jpg" alt=""></a>
                </figure>
                <figure class="clients-logo" style="width: 180px;height:auto;"><a href="index.html"><img
                            src="assets/images/team/Maylin Escala.jpg" alt=""></a>
                </figure>

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
                                    <p>@lang('programs.antioquia.p11')</p>
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
