@extends('layouts.template')

@section('title', '#somosAETH | González Center')

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction')


<!-- Content here -->

@section('content')


    <div class="slider-area rbt-banner-10 height-750 bg_image bg_image--11" data-black-overlay="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner text-center">
                        <div class="section-title mb--20">
                            <span class="subtitle bg-coral-opacity">How We Work</span>
                        </div>
                        <h1 class="title display-one text-white">@lang('messages.welcome') *** Take Challenge for Build Your
                            Life. <br>The World Most
                            Lessons for Back to Your Life.</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area  -->

    <div class="rbt-counterup-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row g-5">
                <!-- Start Single Event  -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="">
                                <img src="{{ asset('assets/template/images/event/grid-type-01.jpg') }}" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <ul class="rbt-meta">
                                <li><i class="feather-calendar"></i>11 Jan, 2024</li>
                                <li><i class="feather-map-pin"></i>IAC Building</li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="">International Education Fair
                                    2024</a></h4>
                            <div class="read-more-btn">
                                <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="">
                                    <span class="icon-reverse-wrapper">

                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Event  -->
                <!-- Start Single Event  -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="">
                                <img src="{{ asset('assets/template/images/event/grid-type-02.jpg') }}" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <ul class="rbt-meta">
                                <li><i class="feather-map-pin"></i>Vancouver</li>
                                <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="">Painting Art Contest 2020</a>
                            </h4>

                            <div class="read-more-btn">
                                <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="">

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Event  -->

                <!-- Start Single Event  -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="">
                                <img src="{{ asset('assets/template/images/event/grid-type-03.jpg') }}" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <ul class="rbt-meta">
                                <li><i class="feather-map-pin"></i>Paris</li>
                                <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="">Histudy Education Fair
                                    2024</a>
                            </h4>

                            <div class="read-more-btn">
                                <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Get Ticket</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Event  -->

                <!-- Start Single Event  -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="">
                                <img src="{{ asset('assets/template/images/event/grid-type-04.jpg') }}" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <ul class="rbt-meta">
                                <li><i class="feather-map-pin"></i>IAC Building</li>
                                <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                            </ul>
                            <h4 class="rbt-card-title"><a href=""> Elegant Light Box Paper Cut
                                    Dioramas</a></h4>

                            <div class="read-more-btn">
                                <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Get Ticket</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Event  -->

                <!-- Start Single Event  -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="">
                                <img src="{{ asset('assets/template/images/event/grid-type-05.jpg') }}" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <ul class="rbt-meta">
                                <li><i class="feather-map-pin"></i>Vancouver</li>
                                <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="">Most Effective Ways
                                    Education's
                                    Problem.</a></h4>

                            <div class="read-more-btn">
                                <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Get Ticket</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Event  -->

                <!-- Start Single Event  -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="">
                                <img src="{{ asset('assets/template/images/event/grid-type-06.jpg') }}" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <ul class="rbt-meta">
                                <li><i class="feather-map-pin"></i>Paris</li>
                                <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="">Top 7 Common About
                                    Education.</a>
                            </h4>

                            <div class="read-more-btn">
                                <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Get Ticket</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Event  -->
            </div>
            <div class="row">
                <div class="col-lg-12 mt--60">
                    <nav>
                        <ul class="rbt-pagination">
                            <li><a href="#" aria-label="Previous"><i class="feather-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#" aria-label="Next"><i class="feather-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection