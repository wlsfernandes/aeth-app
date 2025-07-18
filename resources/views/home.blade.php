@extends('layouts.app')

@section('title', __('pages.home') . ' | AETH')
@section('meta-description', __('meta.description'))
@section('meta-keywords', __('meta.keywords'))

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
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 5"></button>

            </div>
            <div class="carousel-inner">
            <div class="carousel-item active">
                @switch(App::getLocale())
                    @case('es')
                      <img src="assets/images/banner/3.jpg" class="d-block w-100" alt="Slide 1 (ES)">
                    @break
                    @case('pt')
                    <img src="assets/images/banner/3.jpg" class="d-block w-100" alt="Slide 1 (ES)">
                    @break
                    @default
                    <img src="assets/images/banner/4.jpg" class="d-block w-100" alt="Slide 1 (EN)">
                @endswitch
                </div>
                <div class="carousel-item">
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
<section class="clients-section no-margin-section gradient-bg text-white">
    <div class="auto-container">
        <div class="five-item-carousel owl-carousel owl-theme owl-dots-none" aria-label="Partner logos carousel">
            <figure class="clients-logo" style="width:120px;">
                <a href="{{ route('antioquia') }}">
                    <img src="{{ asset('assets/images/logo/antioquia-logo.png') }}" alt="Antioquia Logo" >
                </a>
            </figure>

            <figure class="clients-logo" style="width:120px;">
                <a href="{{ route('capacityBuilding') }}">
                    <img src="{{ asset('assets/images/logo/cp_logo_white_transparent.png') }}" alt="Capacity Building Logo" >
                </a>
            </figure>

            <figure class="clients-logo" style="width:180px;">
                <a href="{{ route('compelling_preaching') }}">
                    <img src="{{ asset('assets/images/logo/predication-logo.png') }}" alt="Compelling Preaching Logo" >
                </a>
            </figure>

            <figure class="clients-logo" style="width:200px;">
                <a href="https://gonzalezcenter.org" target="_blank" rel="noopener">
                    <img src="{{ asset('assets/images/logo/jcg-logo.png') }}" alt="Justo Gonzalez Center Logo" >
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
                            <iframe src="https://player.vimeo.com/video/767301063?title=0&byline=0&portrait=0" loading="lazy" frameborder="0" allow="autoplay; fullscreen" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
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

 @include('partials.testimonial', ['testimonials' => $testimonials])
    <section class="news-section home-3 sec-pad">
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
<section class="clients-section" style="background:none; border-color: #F8D7A1; color: #000;">
        <div class="sec-title centred mb_55">
            <span class="sub-title calendar"><b>@lang('messages.important_partners')</b></span>
        </div>
        <div class="auto-container">
            <div class="five-item-carousel owl-carousel owl-theme owl-dots-none">
                @foreach($partners as $partner)
                    <figure class="clients-logo" style="width:150px;">
                        <a href="{{ $partner->website_url }}" target="_blank">
                            <img src="{{ asset($partner->image_url) }}" alt="{{ $partner->name }}">
                        </a>
                    </figure>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.contact')


  
@endsection