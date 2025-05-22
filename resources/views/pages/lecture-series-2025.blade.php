@extends('layouts.app')

@section('title', '#somosAETH | Lecture Series 2025')

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'AETH, Antioquia, introduction')


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
                                <a href="https://gonzalezcenter.s3.us-east-2.amazonaws.com/AETH_WEBSITE/pdf/Lecture+Series+25+Agenda+English+Version.pdf"
                                    class="theme-btn-one" target="blank"><small>@lang('header.down_en')</small></a>
                                <a href="https://gonzalezcenter.s3.us-east-2.amazonaws.com/AETH_WEBSITE/pdf/Agenda+Lecture+Series+25+Espan%CC%83ol.pdf"
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
                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('segura') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/Harold Segura.jpg" alt="Harold Segura"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">Harold Segura</p>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('fraiser') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/Elizabeth Conde Fraiser.jpg" alt="Fraiser"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">Elizabeth Conde-Fraiser</p>
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center text-center" style="margin:0px;">
                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('davi') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/David Vazquez LEvy.jpg" alt="Speaker 1"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">David Vazquez Levy</p>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('perea') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/Guesnerth Perea.jpg" alt="Speaker 2"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">Guesnerth Perea</p>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('tapia') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/Lori Tapia.jpg" alt="Speaker 3"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">Lori Tapia</p>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('harris') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/Marty Harris.jpg" alt="Speaker 4"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">Marty Harris</p>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('romero') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/Robert Chao Romero (1).jpg" alt="Speaker 5"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">Robert Chao Romero</p>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('estrada') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/Wilmer Estrada.jpg" alt="Speaker 6"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">Wilmer Estrada</p>
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center text-center" style="margin:0px;">

                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('zareth') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/Alexandra Zareth.jpg" alt="Zareth"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">Alexandra Zareth</p>
                        </a>
                    </div>

                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('salvatierra') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/Alexia Salvatierra.jpg" alt="Salvatierra"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">Alexia Salvatierra</p>
                        </a>
                    </div>

                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('canales') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/Andrea Canales.jpg" alt="Canales"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">Andrea Canales</p>
                        </a>
                    </div>

                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('anabalon') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/Pablo Anabalon.jpg" alt="Anabalon"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">Pablo Anabalon</p>
                        </a>
                    </div>

                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('delgado') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/Yenny Delgado.jpg" alt="Delgado"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">Yenny Delgado</p>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('rocha') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/Robert Rocha.jpg" alt="rocha"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">Robert Rocha</p>
                        </a>
                    </div>

                </div>
                <div class="row justify-content-center text-center" style="margin:0px;">
                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('malave') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/Carlos Malave.jpg" alt="Carlos Malave"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">Carlos Malave</p>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('montanez') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/Daniel Montañez.jpg" alt="Daniel Montañez"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">Daniel Montañez</p>
                        </a>
                    </div>



                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('viera') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/Javier Viera.jpg" alt="Viera"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">Javier Viera</p>
                        </a>
                    </div>

                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('caballero_ls2025') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/Jeffry Caballero.jpg" alt="Caballero"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">Jeffry Caballero</p>
                        </a>
                    </div>

                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('lugo_ls2025') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/Jessica Lugo.jpg" alt="Lugo"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">Jessica Lugo</p>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 mb-4">
                        <a href="{{ route('merlo_ls2025') }}" class="text-decoration-none text-dark">
                            <img src="assets/images/resource/Oscar Merlo.jpg" alt="Merlo"
                                class="img-fluid rounded-circle mb-2"
                                style="width: 100px; height: 100px; object-fit: cover;">
                            <p class="mb-0">Oscar Merlo</p>
                        </a>
                    </div>


                </div>



            </div>
    </section>
    <section class="clients-section" style="background-color:#f5f1fb">
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
    <!-- clients-section -->
    <section class="clients-section" style="background-color:#f5f1fb">
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



    @include('partials.contact')

@endsection