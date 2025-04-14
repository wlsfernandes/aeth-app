@extends('layouts.app')

@section('title', '#somosAETH | Home')

@section('meta-description', 'Discover comprehensive Hispanic theological education and Latino ministry training programs. Explore Bible institute certifications, leadership development, and theological resources for Hispanic pastors and church leaders. Empower your ministry with tailored courses and Spanish-language resources.')

@section('meta-keywords', 'somosAETH,Hispanic theological education, Latino ministry training, Bible institute certification, Hispanic church leadership, theological resources for Hispanics, Hispanic ministry programs, Latino religious education, Hispanic theology courses, Spanish theological resources, Hispanic pastoral training, leadership development, Latino church leaders resources, certification for Hispanic Bible institutes,Preaching, Compelling, Teologia, Teologica, Educacion, Education, Servicio, Comunidad, Hispano, Latino, Predicacion, Transformacion, America Latina, Caribe, Educadores, Scholars, Autores, Historiadores, Teologia Integral, Teologia Sistematica, Migración, Justicia Social, Adiestramiento, Formacion, Antioquia, Reflexión, Recursos, Libros, Storytelling, Colaboracion, En Conjunto')


@section('content')
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>

            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/banner/Banner-Website-Impactando.jpg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/banner/banner3.jpeg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <a href="{{  route('lectureSeries2025')}}"> <img src="assets/images/gallery/LS_25.jpg"
                            class="d-block w-100" alt="Slide 3"></a>
                </div>
                <div class="carousel-item">
                    <a href="{{  route('bookstore')}}"><img src="assets/images/gallery/bookstore.jpg" class="d-block w-100"
                            alt="Slide 4"></a>
                    <div class="carousel-caption d-none d-md-block">
                        <div class="content-box">
                            <h1><b>@lang('header.bookstore')</b></h1>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="clients-section"
        style="background: linear-gradient(to right,#4a235a, #a569bd); border-color: #4a235a; color: #fff;">
        <div class="auto-container">
            <div class="four-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                <div class="client-logo-item">
                    <figure class="clients-logo">
                        <a href="{{ route('antioquia') }}">
                            <img src="assets/images/logo/antioquia-logo.png" alt="">
                        </a>
                    </figure>
                </div>
                <div class="client-logo-item">
                    <figure class="clients-logo">
                        <a href="{{ route('capacityBuilding') }}">
                            <img src="assets/images/logo/cp_logo_white_transparent.png" alt="">
                        </a>
                    </figure>
                </div>
                <div class="client-logo-item">
                    <figure class="clients-logo">
                        <a href="{{ route('compelling_preaching') }}">
                            <img src="assets/images/logo/predication-logo.png" alt="">
                        </a>
                    </figure>
                </div>
                <div class="client-logo-item">
                    <figure class="clients-logo">
                        <a href="https://gonzalezcenter.org" target="_blank">
                            <img src="assets/images/logo/jcg-logo.png" alt="">
                        </a>
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

    <!--------------- partials.post --------------------------->
    @include('partials.article', ['articles' => $articles])


    <section class="cta-style-two">
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
                <span class="sub-title calendar"><b>@lang('messages.calendar')</b></span>
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
                                        @if($event->date_of_event)
                                            <div class="post-date">
                                                <h3>{{ \Carbon\Carbon::parse($event->date_of_event)->format('d M') }}</h3>
                                            </div>
                                        @endif
                                        <h3><a href="{{ route('post.show', $event->slug) }}">
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
            <span class="sub-title calendar"><b>@lang('messages.important_partners')</b></span>
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
                <figure class="clients-logo"><a href="https://www.vanguard.edu/" target="blank"><img
                            src="assets/images/clients/vanguard.jpg" alt=""></a>
                </figure>
                <figure class="clients-logo"><a href="https://sitb.edu.ar/" target="blank"><img
                            src="assets/images/clients/sitb.webp" alt=""></a>
                </figure>
            </div>
        </div>
    </section>
    <!-- clients-section end -->
@endsection