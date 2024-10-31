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
<section class="faq-style-two sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 video-column" style="margin-top:100px;">
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
<!-- funfact-section -->
<section class="funfact-section alternat-2 pt_80 pb_80 bg-color-1">
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
</section>
<!-- funfact-section end -->
<!-- cause-section -->
<section class="cause-section sec-pad">
    <div class="auto-container">
        <div class="sec-title centred mb_50">
            <h2>@lang('messages.program_resources')</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 cause-block">
                <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="assets/images/gallery/certification.jpg"
                                        alt=""></a></figure>
                            <div class="category"><a href="#">@lang('messages.certification')</a></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">
                                <h3><a href="#">xxxxxxxxxx <br />xxxxxxx</a></h3>
                                <p>xxxxxxxxxxxxxxxxxxxxxxxxxxx.</p>
                            </div>
                            <div class="progress-box">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="85%">
                                        <div class="count-text">85%</div>
                                    </div>
                                </div>
                                <div class="donate-text">
                                    <h6><span>$5,020</span> Raised</h6>
                                    <h6><span>$8,000</span> Target</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 cause-block">
                <div class="cause-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="assets/images/gallery/meet1.jpg"
                                        style="width:470px;height:270px;"></a></figure>
                            <div class="category"><a href="#">@lang('messages.resource_center')</a></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">
                                <h3><a href="#">dddd <br />ddddddd</a></h3>
                                <p>ddddddddddddddddddddddd.</p>
                            </div>
                            <div class="progress-box">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="50%">
                                        <div class="count-text">50%</div>
                                    </div>
                                </div>
                                <div class="donate-text">
                                    <h6><span>$6,020</span> Raised</h6>
                                    <h6><span>$12,000,000</span> Target</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 cause-block">
                <div class="cause-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="assets/images/gallery/compelling.jpg"
                                        style="width:470px;height:270px;"></a></figure>
                            <div class="category"><a href="#">@lang('messages.preaching')</a></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">
                                <h3><a href="#">xxxxxxxxxxxx<br />ddddddd</a></h3>
                                <p>xxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                            </div>
                            <div class="progress-box">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="90%">
                                        <div class="count-text">90%</div>
                                    </div>
                                </div>
                                <div class="donate-text">
                                    <h6><span>$9,080</span> Raised</h6>
                                    <h6><span>$10,000</span> Target</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cause-section end -->

<section class="about-style-three sec-pad" style="background-color:#f7f5f1; margin-top:100px; margin-bottom:100px;">
    <div class="auto-container">
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


 <!-- about-style-two -->
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis porttitor pulvinar faucibus a, nisi. Erat eget lectus diam tempor sed. Amet dui scelerisque vel habitant ut eget tincidunt facilisis pretium. Porttitor mi nisi, non vitae tempus vel nec habitant tristique. Aliquet dignissim venenatis pellentesque ultricies posuere id pharetra.</p>
                                    <p>Nisi vel morbi purus habitasse vitae praesent phaselus viverra Suspendise diam, amet, natoque neque non tempor ullamcorper aenean turpis dolor malesuada sit scelerisque elit vitae.</p>
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
        <!-- about-style-two end -->

<!-- feature-section -->
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
<!-- feature-section end -->
<!-- testimonial-section -->
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
                    <div class="sub-title">Testimonials</div>
                    <h2>What Clients Say About AETH</h2>
                </div>
                <div class="bxslider">
                    <div class="slider-content">
                        <div class="slider-pager">
                            <ul class="thumb-box">
                                <li>
                                    <a class="active" data-slide-index="0" href="#">
                                        <figure class="thumb thumb-1"><img
                                                src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#">
                                        <figure class="thumb thumb-2"><img
                                                src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#">
                                        <figure class="thumb thumb-3"><img
                                                src="assets/images/resource/testimonial-3.jpg" alt=""></figure>
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
                            <p>“Blandit aliquet varius id malesuada nunc euismod id tempor, malesuada sollicitudin sit
                                nisi tellus auctor vitae dignissim lacinia convallis sapien dictum.”</p>
                            <div class="author-info">
                                <h3>Arlene McCoy</h3>
                                <span class="designation">Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider-content">
                        <div class="slider-pager">
                            <ul class="thumb-box">
                                <li>
                                    <a class="active" data-slide-index="0" href="#">
                                        <figure class="thumb thumb-1"><img
                                                src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#">
                                        <figure class="thumb thumb-2"><img
                                                src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#">
                                        <figure class="thumb thumb-3"><img
                                                src="assets/images/resource/testimonial-3.jpg" alt=""></figure>
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
                            <p>“Blandit aliquet varius id malesuada nunc euismod id tempor, malesuada sollicitudin sit
                                nisi tellus auctor vitae dignissim lacinia convallis sapien dictum.”</p>
                            <div class="author-info">
                                <h3>Haris Gulati</h3>
                                <span class="designation">Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider-content">
                        <div class="slider-pager">
                            <ul class="thumb-box">
                                <li>
                                    <a class="active" data-slide-index="0" href="#">
                                        <figure class="thumb thumb-1"><img
                                                src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#">
                                        <figure class="thumb thumb-2"><img
                                                src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#">
                                        <figure class="thumb thumb-3"><img
                                                src="assets/images/resource/testimonial-3.jpg" alt=""></figure>
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
                            <p>“Blandit aliquet varius id malesuada nunc euismod id tempor, malesuada sollicitudin sit
                                nisi tellus auctor vitae dignissim lacinia convallis sapien dictum.”</p>
                            <div class="author-info">
                                <h3>Jhon Haris</h3>
                                <span class="designation">Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->
<!-- event-section -->
<section class="event-section bg-color-1" style="margin-bottom:100px;">
    <div class="auto-container">
        <div class="sec-title mb_55 centred">
            <span class="sub-title">Upcoming Event</span>
            <h2>Join Upcoming Events</h2>
        </div>
        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            <div class="events-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/resource/event-1.jpg" alt=""></figure>
                    <div class="content-box">
                        <div class="date">
                            <h2>30 <span>AUG</span></h2>
                            <div class="date-shape" style="background-image: url(assets/images/icons/icon-bg-5.png);">
                            </div>
                        </div>
                        <h3><a href="events-details.html">Our Sponsorship Meetup will be Held Again</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Sed morbi nullam et. Bibendum nunc
                            fames fermentum lorem. Non potenti nunc ornare diam laoreet.</p>
                        <div class="btn-box">
                            <a href="events-details.html" class="theme-btn-one">join Event</a>
                        </div>
                        <ul class="lower-box">
                            <li class="admin"><i class="icon-38"></i>08:00AM-04:00PM</li>
                            <li class="comment"><i class="icon-39"></i>75 Roling Green Rd</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="events-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="assets/images/resource/event-2.jpg" alt=""></figure>
                    <div class="content-box">
                        <div class="date">
                            <h2>30 <span>AUG</span></h2>
                            <div class="date-shape" style="background-image: url(assets/images/icons/icon-bg-5.png);">
                            </div>
                        </div>
                        <h3><a href="events-details.html">Our Sponsorship Meetup will be Held Again</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Sed morbi nullam et. Bibendum nunc
                            fames fermentum lorem. Non potenti nunc ornare diam laoreet.</p>
                        <div class="btn-box">
                            <a href="events-details.html" class="theme-btn-one">join Event</a>
                        </div>
                        <ul class="lower-box">
                            <li class="admin"><i class="icon-38"></i>08:00AM-04:00PM</li>
                            <li class="comment"><i class="icon-39"></i>75 Roling Green Rd</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- event-section end -->


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