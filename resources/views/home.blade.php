@extends('layouts.app')

@section('title', '#somosAETH | Home') 

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction') 


<!-- Content here -->

@section('content') 
<section class="page-title centred">
    <div class="bg-layer">
        <video autoplay muted loop playsinline id="background-video" style=" position: absolute;top: 0;left: 0;width: 100%;
height: 100%;
    object-fit: cover; /* Ensures the video covers the container while maintaining aspect ratio */
    z-index: -1; /* Keeps the video behind other content, if necessary */">
            <source src="assets/images/videos/intro-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="auto-container">
        <div class="content-box">
            <h1>@lang('header.complete_aeth_name')</h1>
        </div>
    </div>
</section>
<section class="cta-style-two">
    <div class="pattern-layer"></div>
    <div class="auto-container">
        <div class="inner-box">
            <a href="https://gonzalezcenter.org" target="blank"><img src="assets/images/jcg-logo.png"
                    alt="González Center"></a>
            <img src="assets/images/bienal-log.png" alt="Biennal24">
            <a href="{{ route('compelling_preaching') }}">
                <img src="assets/images/predication-logo.png" alt="CompellingPreaching"></a>
        </div>
    </div>
</section>
<section class="faq-style-two sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                <div class="video-content p_relative d_block mr_30">
                    <div class="video-inner centred"
                        style="background-image: url(assets/images/gallery/aeth-idea.jpg);">
                        <div class="video-btn">
                            <a href="https://vimeo.com/767301063" class="lightbox-image" data-caption=""><i
                                    class="fas fa-play" style="margin-top:25px;"></i></a>
                        </div>
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
            <div class="col-lg-4 col-md-6 col-sm-12 cause-block"
                style="min-height: 300px;display: flex;flex-direction: column;justify-content: space-between;">
                <div class="cause-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="video">
                                <a href="'assets/images/gonzalezvideo.mp4">
                                    <video width="470" height="270" autoplay muted loop>
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
            <div class="col-lg-4 col-md-6 col-sm-12 cause-block"
                style="min-height: 300px;display: flex;flex-direction: column;justify-content: space-between;">
                <div class="cause-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="assets/images/gallery/compelling.jpg"
                                        style="width:470px;height:270px;"></a></figure>
                            <div class="category"><a href="#">@lang('messages.preaching')</a></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">
                                <p>@lang('programs.compelling.p19')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 cause-block"
                style="min-height: 300px;display: flex;flex-direction: column;justify-content: space-between;">
                <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="video">
                                <a href="'assets/images/certification.mp4">
                                    <video width="470" height="270" autoplay muted loop>
                                        <source src="assets/images/videos/certification.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </a>
                            </figure>
                            <div class="category"><a href="#">@lang('messages.certification')</a></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">
                                <p>@lang('programs.certification.p1')</p>
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
                            <figure class="image-box"><a href="{{ route('post.show', $event->slug) }}"><img
                                        src="assets/images/events/1.jpg" alt=""></a></figure>
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
    <div class="auto-container">
        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
            <figure class="clients-logo"><a href="#"><img src="assets/images/clients/clients-1.png" alt=""></a>
            </figure>
            <figure class="clients-logo"><a href="#"><img src="assets/images/clients/clients-2.png" alt=""></a>
            </figure>
            <figure class="clients-logo"><a href="#"><img src="assets/images/clients/clients-3.png" alt=""></a>
            </figure>
            <figure class="clients-logo"><a href="#"><img src="assets/images/clients/clients-4.png" alt=""></a>
            </figure>
            <figure class="clients-logo"><a href="#"><img src="assets/images/clients/clients-5.png" alt=""></a>
            </figure>
        </div>
    </div>
</section>
<!-- clients-section end -->
@endsection