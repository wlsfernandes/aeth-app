@extends('layouts.app')

@section('title', '#somosAETH | Home')

@section('meta-description', 'Discover comprehensive Hispanic theological education and Latino ministry training programs. Explore Bible institute certifications, leadership development, and theological resources for Hispanic pastors and church leaders. Empower your ministry with tailored courses and Spanish-language resources.')

@section('meta-keywords', 'somosAETH,Hispanic theological education, Latino ministry training, Bible institute certification, Hispanic church leadership, theological resources for Hispanics, Hispanic ministry programs, Latino religious education, Hispanic theology courses, Spanish theological resources, Hispanic pastoral training, leadership development, Latino church leaders resources, certification for Hispanic Bible institutes,Preaching, Compelling, Teologia, Teologica, Educacion, Education, Servicio, Comunidad, Hispano, Latino, Predicacion, Transformacion, America Latina, Caribe, Educadores, Scholars, Autores, Historiadores, Teologia Integral, Teologia Sistematica, Migración, Justicia Social, Adiestramiento, Formacion, Antioquia, Reflexión, Recursos, Libros, Storytelling, Colaboracion, En Conjunto')



@section('content')
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            </ol>
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/images/banner/Cuaresma Web Banner Spa.jpg"
                            alt="AETH Cuaresma">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/images/banner/banner3.jpeg" alt="Third slide">
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="assets/images/banner/Banner-Website-Impactando.jpg" alt="AETH">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/images/banner/aeth_graduation.jpg" alt="AETH">
                        <div class="auto-container"
                            style="position: absolute; top: 70%; left: 50%; transform: translate(-50%, -50%); z-index: 2; text-align: center;">
                            <div class="content-box">
                                <h1 style="color:#fff"><b>@lang('header.complete_aeth_name')</b></h1>
                                <h5 style="color:#fff">@lang('header.education_p1')</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/images/banner/excelence.jpg" alt="Second slide">
                        <div class="auto-container"
                            style="position: absolute; top: 70%; left: 50%; transform: translate(-50%, -50%); z-index: 2; text-align: center;">
                            <div class="content-box">
                                <h1 style="color:#4a235a"><b>@lang('header.aeth_values')</b></h1>
                                <h5 style="color:#4a235a">@lang('header.values_p1')</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/images/gallery/bookstore.jpg" alt="Third slide">
                        <div class="auto-container"
                            style="position: absolute; top: 85%; left: 50%; transform: translate(-50%, -50%); z-index: 2; text-align: center;">
                            <div class="content-box">
                                <h1 style="color:#4a235a"><b>@lang('header.bookstore')</b></h1>
                                <h5 style="color:#4a235a">@lang('header.bookstore_enjoy')</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="clients-section">
        <div class="auto-container">
            <div class="four-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                <figure class="clients-logo"><a href="{{ route('antioquia') }}"><img
                            src="assets/images/logo/antioquia-logo.png" alt=""></a>
                </figure>
                <figure class="clients-logo"><a href="{{ route('capacityBuilding') }}"><img
                            src="assets/images/logo/cp_logo_white_transparent.png" alt=""></a>
                </figure>
                <figure class="clients-logo"><a href="{{ route('compelling_preaching') }}"><img
                            src="assets/images/logo/predication-logo.png" alt=""></a>
                </figure>
                <figure class="clients-logo"><a href="https://gonzalezcenter.org" target="_blank"><img
                            src="assets/images/logo/jcg-logo.png" alt=""></a>
                </figure>

            </div>
        </div>
    </section>



    <section class="faq-style-two sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                    <div class="video-content p_relative d_block mr_30">
                        <div class="video-inner centred"
                            style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                            <!-- Correct Vimeo Embed for Play Button -->
                            <iframe src="https://player.vimeo.com/video/767301063?title=0&byline=0&portrait=0"
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" frameborder="0"
                                allow="autoplay; fullscreen" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column" style="margin-top:100px;">
                    <div class="content_block_two">
                        <div class="content-box ml_40">
                            <div class="sec-title mb_55">
                                <h2>@lang('messages.what_we_do')</h2>
                            </div>
                            <div class="text mb_40">
                                <p>@lang('messages.what_we_do_p1')</p>
                                <p>@lang('messages.what_we_do_p2')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<section class="funfact-section alternat-2 pt_80 pb_80 bg-color-1">
                                                                                                                                                                                                                                                            <div class="auto-container">
                                                                                                                                                                                                                                                                <div class="inner-container">
                                                                                                                                                                                                                                                                    <div class="funfact-block-one">
                                                                                                                                                                                                                                                                        <div class="inner-box">
                                                                                                                                                                                                                                                                            <div class="count-outer count-box">
                                                                                                                                                                                                                                                                                <span class="count-text" data-speed="1500" data-stop="35">0</span>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                            <h3>Years of <br />AETH</h3>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                    <div class="funfact-block-one">
                                                                                                                                                                                                                                                                        <div class="inner-box">
                                                                                                                                                                                                                                                                            <div class="count-outer count-box">
                                                                                                                                                                                                                                                                                <span class="count-text" data-speed="1500" data-stop="3">0</span><span>k</span>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                            <h3>Happy <br />Volunteers</h3>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                    <div class="funfact-block-one">
                                                                                                                                                                                                                                                                        <div class="inner-box">
                                                                                                                                                                                                                                                                            <div class="count-outer count-box">
                                                                                                                                                                                                                                                                                <span class="count-text" data-speed="1500" data-stop="8">0</span><span>k</span>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                            <h3>Total <br />Monthly Doners</h3>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                    <div class="funfact-block-one">
                                                                                                                                                                                                                                                                        <div class="inner-box">
                                                                                                                                                                                                                                                                            <div class="count-outer count-box">
                                                                                                                                                                                                                                                                                <span class="count-text" data-speed="1500" data-stop="10">0</span><span>k</span>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                            <h3>Total <br />Campaigns</h3>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                        </section> -->
    <!--------------- partials.post --------------------------->
    @include('partials.article', ['articles' => $articles])


    <section class="cta-style-two" style="margin-top:48px;">
        <div class="pattern-layer"></div>
        <div class="auto-container">
            <div class="inner-box">
                <h1 style="color:#fff"><img src="assets/images/logo-3.png" alt="">@lang('messages.program_resources')</h1>
            </div>
        </div>
    </section>

    <section class="cause-section sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 cause-block"
                    style="min-height: 300px;display: flex;flex-direction: column;justify-content: space-between;">
                    <div class="cause-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="video">
                                    <a href="https://gonzalezcenter.org" target="blank">
                                        <video width="100%" height="auto" autoplay muted loop>
                                            <source src="assets/images/videos/gonzalezvideo.mp4" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </a>
                                </figure>
                                <div class="category"><a href="https://gonzalezcenter.org"
                                        target="blank">@lang('messages.resource_center')</a></div>
                            </div>
                            <div class="lower-content">
                                <div class="text">
                                    <p>@lang('programs.gonzalez.explore')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 cause-block"
                    style="min-height: 300px;display: flex;flex-direction: column;justify-content: space-between;">
                    <div class="cause-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="video">
                                    <a href="{{route('compelling_preaching')}}" target="blank">
                                        <video width="100%" height="auto" autoplay muted loop>
                                            <source src="assets/images/videos/preaching.mp4" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </a>
                                </figure>
                                <div class="category"><a href="{{route('compelling_preaching')}}"
                                        target="blank">@lang('messages.preaching')</a></div>
                            </div>
                            <div class="lower-content">
                                <div class="text">
                                    <p>@lang('programs.compelling.p19')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-12 cause-block"
                    style="min-height: 300px;display: flex;flex-direction: column;justify-content: space-between;">
                    <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="video">
                                    <a href="{{route('requestCertification')}}">
                                        <video width="100%" height="auto" autoplay muted loop>
                                            <source src="assets/images/videos/certification.mp4" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </a>
                                </figure>
                                <div class="category"><a
                                        href="{{route('requestCertification')}}">@lang('messages.certification')</a></div>
                            </div>
                            <div class="lower-content">
                                <div class="text">
                                    <p>@lang('programs.certification.p1')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- New fourth block -->
                <div class="col-lg-3 col-md-6 col-sm-12 cause-block"
                    style="min-height: 300px;display: flex;flex-direction: column;justify-content: space-between;">
                    <div class="cause-block-one wow fadeInUp animated" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="video">
                                    <a href="{{route('bookstore')}}">
                                        <video width="100%" height="auto" autoplay muted loop>
                                            <source src="assets/images/videos/bookstore-video.mp4" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </a>
                                </figure>
                                <div class="category"><a href="{{route('bookstore')}}">@lang('messages.bookstore')</a></div>
                            </div>
                            <div class="lower-content">
                                <div class="text">
                                    <p>@lang('messages.bookstore_p1')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- cause-section end -->

    <!--
                                                                                                                                                                                                                                                        <section class="about-style-three sec-pad" style="background-color:#e8daef;>
                                                                                                                                                                                                                                                            <div class=" auto-container">
                                                                                                                                                                                                                                                            <div class="row align-items-center clearfix">
                                                                                                                                                                                                                                                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                                                                                                                                                                                                                                                    <div class="content_block_two">
                                                                                                                                                                                                                                                                        <div class="content-box ml_40">

                                                                                                                                                                                                                                                                            <div class="text mb_40">
                                                                                                                                                                                                                                                                                <p>xxxxxxxxxxxxx</p>
                                                                                                                                                                                                                                                                                <p style="margin-top:15px;">xxxxxxxxxxxxxxxxxxxx</p>
                                                                                                                                                                                                                                                                                <div class="btn-box" style="margin-top:25px;">
                                                                                                                                                                                                                                                                                    <a href="#" target="blank" class="theme-btn-one">
                                                                                                                                                                                                                                                                                        xxxxxxxxxxxxxxxxx</a>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                <p style="margin-top:25px;">
                                                                                                                                                                                                                                                                                    xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                                                                                                                                                                                                                                                                                </p>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                </div>

                                                                                                                                                                                                                                                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                                                                                                                                                                                                                                                    <div class="image-box mr_40">
                                                                                                                                                                                                                                                                        <div class="image-shape" style="background-image: url(assets/images/shape/shape-1.png);">
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                        <figure class="video" style="width:60%">
                                                                                                                                                                                                                                                                            <video autoplay muted loop style="width: 100%;">
                                                                                                                                                                                                                                                                                <source src="assets/images/videos/somosAETH.mp4" type="video/mp4">
                                                                                                                                                                                                                                                                                Your browser does not support the video tag.
                                                                                                                                                                                                                                                                            </video>
                                                                                                                                                                                                                                                                        </figure>
                                                                                                                                                                                                                                                                    </div>

                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                        </section>



                                                                                                                                                                                                                                                        <section class="about-style-two pt_120">
                                                                                                                                                                                                                                                            <div class="auto-container">
                                                                                                                                                                                                                                                                <div class="row align-items-center clearfix">
                                                                                                                                                                                                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                                                                                                                                                                                                                                                        <div class="image-box mr_40">
                                                                                                                                                                                                                                                                            <div class="image-shape" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                                                                                                                                                                                                                                                                            <figure class="image"><img src="assets/images/gallery/puerto-rico.jpg" alt=""></figure>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                                                                                                                                                                                                                                                        <div class="content_block_two">
                                                                                                                                                                                                                                                                            <div class="content-box ml_40">
                                                                                                                                                                                                                                                                                <div class="sec-title mb_60">
                                                                                                                                                                                                                                                                                    <span class="sub-title">About Trusthand</span>
                                                                                                                                                                                                                                                                                    <h2>Our Mission Is to Change The World</h2>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                <div class="text mb_40">
                                                                                                                                                                                                                                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis porttitor pulvinar
                                                                                                                                                                                                                                                                                        faucibus a, nisi. Erat eget lectus diam tempor sed. Amet dui scelerisque vel habitant ut
                                                                                                                                                                                                                                                                                        eget tincidunt facilisis pretium. Porttitor mi nisi, non vitae tempus vel nec habitant
                                                                                                                                                                                                                                                                                        tristique. Aliquet dignissim venenatis pellentesque ultricies posuere id pharetra.</p>
                                                                                                                                                                                                                                                                                    <p>Nisi vel morbi purus habitasse vitae praesent phaselus viverra Suspendise diam, amet,
                                                                                                                                                                                                                                                                                        natoque neque non tempor ullamcorper aenean turpis dolor malesuada sit scelerisque elit
                                                                                                                                                                                                                                                                                        vitae.</p>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                <div class="btn-box">
                                                                                                                                                                                                                                                                                    <a href="about.html" class="theme-btn-one">More About Us</a>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                        </section>

                                                                                                                                                                                                                                                        <section class="feature-section p_relative sec-pad centred">
                                                                                                                                                                                                                                                            <div class="auto-container">
                                                                                                                                                                                                                                                                <div class="sec-title centred mb_50">
                                                                                                                                                                                                                                                                    <span class="sub-title">Features</span>
                                                                                                                                                                                                                                                                    <h2>AETH Asociaciación xxxxxxxx <br />xxxxxxxxxxxxxxxxx xxxxxxxxxx</h2>
                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                <div class="row clearfix">
                                                                                                                                                                                                                                                                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                                                                                                                                                                                                                                                                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                                                                                                                                                                                                                                                            <div class="inner-box">
                                                                                                                                                                                                                                                                                <div class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></div>
                                                                                                                                                                                                                                                                                <h3><a href="index.html">Become A Volunteer</a></h3>
                                                                                                                                                                                                                                                                                <p>Amet minim mollit no deserunt ulamco sit enim aliqua dolor sint Velit officia.</p>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                                                                                                                                                                                                                                                                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                                                                                                                                                                                                                                                            <div class="inner-box">
                                                                                                                                                                                                                                                                                <div class="icon-box"><img src="assets/images/icons/icon-2.png" alt=""></div>
                                                                                                                                                                                                                                                                                <h3><a href="index.html">Send Us Donations</a></h3>
                                                                                                                                                                                                                                                                                <p>Amet minim mollit no deserunt ulamco sit enim aliqua dolor sint Velit officia.</p>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                                                                                                                                                                                                                                                                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                                                                                                                                                                                                                                                            <div class="inner-box">
                                                                                                                                                                                                                                                                                <div class="icon-box"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                                                                                                                                                                                                                                                                <h3><a href="index.html">Get Support Directly</a></h3>
                                                                                                                                                                                                                                                                                <p>Amet minim mollit no deserunt ulamco sit enim aliqua dolor sint Velit officia.</p>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                        </section>
                                                                                                                                                                                                                                                        -->
    <section class="testimonial-section">
        <div class="bg-layer">
            <video autoplay muted loop playsinline id="background-video">
                <source src="assets/images/videos/Testimonials.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="outer-container clearfix">
            <div class="testimonial-content">
                <div class="content-box">
                    <div class="sec-title light mb_50">
                        <div class="sub-title">@lang('messages.testimonials')</div>
                        <h1 style="color:#fff">@lang('messages.testimonial_title')</h1>
                    </div>
                    <div class="bxslider">
                        <div class="slider-content">
                            <div class="slider-pager">
                                <ul class="thumb-box">
                                    <li>
                                        <a class="active" data-slide-index="0" href="#">
                                            <figure class="thumb thumb-1"><img src="assets/images/testimonials/thumbs/1.jpg"
                                                    alt=""></figure>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="testimonial-inner">
                                <ul class="rating-box clearfix">
                                    <li><i class="icon-13"></i></li>
                                    <li><i class="icon-13"></i></li>
                                    <li><i class="icon-13"></i></li>
                                    <li><i class="icon-13"></i></li>
                                    <li><i class="icon-13"></i></li>
                                </ul>
                                <p><i>@lang('messages.testimonials_phrase1')</i></p>
                                <div class="author-info">
                                    <h3>@lang('messages.testimonials_name1')</h3>
                                    <span class="designation">@lang('messages.testimonials_desc1')</span>
                                </div>
                            </div>
                        </div>
                        <div class="slider-content">
                            <div class="slider-pager">
                                <ul class="thumb-box">
                                    <li>
                                        <a data-slide-index="1" href="#">
                                            <figure class="thumb thumb-2"><img src="assets/images/testimonials/thumbs/2.jpg"
                                                    alt=""></figure>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="testimonial-inner">
                                <ul class="rating-box clearfix">
                                    <li><i class="icon-13"></i></li>
                                    <li><i class="icon-13"></i></li>
                                    <li><i class="icon-13"></i></li>
                                    <li><i class="icon-13"></i></li>
                                    <li><i class="icon-14"></i></li>
                                </ul>
                                <p><i>@lang('messages.testimonials_phrase2')</i></p>
                                <div class="author-info">
                                    <h3>@lang('messages.testimonials_name2')</h3>
                                    <span class="designation">@lang('messages.testimonials_desc2')</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section home-3 sec-pad bg-color-1">
        <div class="auto-container">
            <div class="sec-title centred mb_55">
                <span class="sub-title calendar">Calendar</span>
                <h2>Events</h2>
            </div>
            <div class="row clearfix">
                @foreach($events as $event)
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="{{ route('post.show', $event->slug) }}">
                                        <img src="{{$event->image_url}}" alt=""
                                            style="width: 440px; height: 220px; object-fit: cover; object-position: top;">
                                    </a>
                                </figure>

                                <div class="lower-content p_relative d_block">
                                    <div class="text">
                                        <div class="post-date">
                                            <h3>{{$event->date}}</h3>
                                        </div>
                                        <h3><a href="#">
                                                @if(App::getLocale() == 'es')
                                                    {{ $event->title_es }}
                                                @elseif(App::getLocale() == 'pt')
                                                    {{ $event->title_pt }}
                                                @else
                                                    {{ $event->title_en }}
                                                @endif
                                            </a></h3>
                                        <div class="btn-box">
                                            <a href="{{ route('post.show', $event->slug) }}" class="theme-btn-two">Read more</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.contact')

    <!-- clients-section -->
    <section class="clients-section" style="background:#f7f5f1">
        <div class="sec-title centred mb_55">
            <span class="sub-title calendar">@lang('messages.important_partners')</span>
        </div>
        <div class="auto-container">
            <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                <figure class="clients-logo"><a href="https://candler.emory.edu/" target="blank"><img
                            src="assets/images/clients/clients-2.png" alt=""></a>
                </figure>
                <figure class="clients-logo"><a href="https://www.garrett.edu/" target="blank"><img
                            src="assets/images/clients/clients-3.png" alt=""></a>
                </figure>
                <figure class="clients-logo"><a href="https://cbf.net/" target="blank"><img
                            src="assets/images/clients/clients-4.png" alt=""></a>
                </figure>
                <figure class="clients-logo"><a href="https://lillyendowment.org/" target="blank"><img
                            src="assets/images/clients/clients-5.png" alt=""></a>
                </figure>
                <figure class="clients-logo"><a href="https://www.ats.edu/" target="blank"><img
                            src="assets/images/clients/ats-logo.png" alt=""></a>
                </figure>
                <figure class="clients-logo" style="width:150px;"><a href="https://hti.ptsem.edu/" target="blank"><img
                            src="assets/images/clients/client-6.png" alt=""></a>
                </figure>
                <figure class="clients-logo" style="width:150px;"><a href="https://hispanicscholarsprogram.org/"
                        target="blank"><img src="assets/images/clients/clients-7.svg" alt=""></a>
                </figure>
                <figure class="clients-logo" style="width:150px;"><a href="https://www.intrust.org/" target="blank"><img
                            src="assets/images/clients/clients-8.png" alt=""></a>
                </figure>
                <figure class="clients-logo" style="width:150px;"><a href="https://www.inter.edu/en/" target="blank"><img
                            src="assets/images/clients/clients-9.png" alt=""></a>
                </figure>
                <figure class="clients-logo" style="width:150px;"><a href="https://www.wabash.edu/" target="blank"><img
                            src="assets/images/clients/clients-10.png" alt=""></a>
                </figure>
                <figure class="clients-logo" style="width:150px;"><a href="https://tertuhablemos.com/" target="blank"><img
                            src="assets/images/clients/clients-11.webp"></a>
                </figure>
                <figure class="clients-logo" style="width:150px;"><a
                        href="https://www.worldvision.org/country/latin-america-caribbean" target="blank"><img
                            src="assets/images/clients/clients-12.svg" alt=""></a>
                </figure>
                <figure class="clients-logo"><a href="https://se-pr.edu/" target="blank"><img
                            src="assets/images/clients/clients-13.png" alt=""></a>
                </figure>
            </div>
        </div>
    </section>
    <!-- clients-section end -->
@endsection
