@extends('layouts.app')

@section('title', '#somosAETH | González Center')

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction')


<!-- Content here -->

@section('content')


    <section class="about-section bg-color-1 p_relative sec-pad">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="content_block_one">
                        <div class="content-box p_relative">
                            <div class="text mb_35">
                                <!-- Image floated to the left with margin -->
                                <figure class="image image-1" style="float: left; margin: 0 20px 20px 0;">
                                    <img src="assets/images/gallery/AETH-helpDesk2.jpg" alt=""
                                        style="max-width: 500px; height: auto;">
                                </figure>
                                <p style="margin-top:20px;">@lang('pages.helpDesk.p1')</p>
                                <p>@lang('pages.helpDesk.p2')</p>
                                <p>@lang('pages.helpDesk.p3')</p>
                                <ul class="list-style-one clearfix" style="overflow: hidden;margin-top:20px;">
                                    <li>@lang('pages.helpDesk.p4')</li>
                                    <li>@lang('pages.helpDesk.p5')</li>
                                    <li>@lang('pages.helpDesk.p7')</li>
                                    <li>@lang('pages.helpDesk.p8')</li>
                                    <li>@lang('pages.helpDesk.p9')</li>
                                </ul>
                                <p style="margin-top:20px;">@lang('pages.helpDesk.p10')</p>



                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        </div>
    </section>
    <section class="about-section bg-color-1 p_relative sec-pad">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                            <div class="auto-container">
                                <div class="sec-title mb_55 centred">
                                    <span class="sub-title">AETH Faq’s</span>
                                </div>
                                <div class="content_block_three">
                                    <div class="content-box">
                                        <div class="accordion-inner">
                                            <ul class="accordion-box">
                                                <li class="accordion block">
                                                    <div class="acc-btn">
                                                        <div class="icon-outer"></div>
                                                        <h3 style="color:#4a235a">{{ __('help.title') }}</h3>
                                                    </div>
                                                    <div class="acc-content">
                                                        <div class="text" style="text-align: center;">
                                                            <h3>{{ __('help.step1.title') }}</h3>
                                                            <p>{!! __('help.step1.line1') !!}</p>
                                                            <p>{{ __('help.step1.line2') }}</p>
                                                            <ul>
                                                                @foreach(__('help.step1.options') as $option)
                                                                    <li><strong>{{ $option }}</strong></li>
                                                                @endforeach
                                                            </ul>
                                                            <p>{!! __('help.step1.line3') !!}</p>
                                                            <img src="assets/images/help/1.png" alt="Membership options"
                                                                style="width: 100%; max-width: 600px;" />
                                                            <img src="assets/images/help/2.png" alt="Payment options"
                                                                style="width: 100%; max-width: 600px;" />

                                                            <h3>{{ __('help.step2.title') }}</h3>
                                                            <p>{{ __('help.step2.line1') }}</p>
                                                            <ul>
                                                                @foreach(__('help.step2.options') as $option)
                                                                    <li><strong>{{ $option }}</strong></li>
                                                                @endforeach
                                                            </ul>
                                                            <img src="assets/images/help/3.png" alt="Choose payment method"
                                                                style="width: 100%; max-width: 600px;" />

                                                            <h3>{{ __('help.step3.title') }}</h3>
                                                            <p>{{ __('help.step3.line1') }}</p>
                                                            <ul>
                                                                @foreach(__('help.step3.fields') as $field)
                                                                    <li>{{ $field }}</li>
                                                                @endforeach
                                                            </ul>
                                                            <img src="assets/images/help/4.png"
                                                                alt="Form with personal information"
                                                                style="width: 100%; max-width: 600px;" />

                                                            <h3>{{ __('help.step4.title') }}</h3>
                                                            <p>{{ __('help.step4.line1') }}</p>
                                                            <img src="assets/images/help/5.png" alt="Confirmation email"
                                                                style="width: 100%; max-width: 600px;" />

                                                            <h3>{{ __('help.step5.title') }}</h3>
                                                            <p>{!! __('help.step5.line1') !!}</p>
                                                            <p>{!! __('help.step5.line2') !!}</p>
                                                            <img src="assets/images/help/6.png" alt="Login page"
                                                                style="width: 100%; max-width: 600px;" />

                                                            <h3>{{ __('help.step6.title') }}</h3>
                                                            <p>{{ __('help.step6.line1') }}</p>
                                                            <img src="assets/images/help/7.png" alt="Create password"
                                                                style="width: 100%; max-width: 600px;" />

                                                            <h3>{{ __('help.step7.title') }}</h3>
                                                            <p>{!! __('help.step7.line1') !!}</p>
                                                            <img src="assets/images/help/8.png" alt="Update password"
                                                                style="width: 100%; max-width: 600px;" />

                                                            <h3>{{ __('help.step8.title') }}</h3>
                                                            <p>{!! __('help.step8.line1') !!}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- new accordion line -->
                                        <div class="accordion-inner">
                                            <ul class="accordion-box">
                                                <li class="accordion block">
                                                    <div class="acc-btn">
                                                        <div class="icon-outer"></div>
                                                        <h3 style="color:#4a235a">{{ __('help.renew.title') }}</h3>
                                                    </div>
                                                    <div class="acc-content">
                                                        <div class="text" style="text-align: center;">
                                                            <h3>Step 1</h3>
                                                            <p>{!! __('help.renew.step1.line1') !!}</p>
                                                            <img src="assets/images/help/21.png" alt="Step 1"
                                                                style="width: 100%; max-width: 600px;" />

                                                            <h3>Step 2</h3>
                                                            <p>{!! __('help.renew.step2.line1') !!}</p>
                                                            <img src="assets/images/help/22.png" alt="Step 2"
                                                                style="width: 100%; max-width: 600px;" />

                                                            <h3>Step 3</h3>
                                                            <p>{!! __('help.renew.step3.line1') !!}</p>
                                                            <img src="assets/images/help/23.png" alt="Step 3"
                                                                style="width: 100%; max-width: 600px;" />

                                                            <h3>Step 4</h3>
                                                            <p>{!! __('help.renew.step4.line1') !!}</p>
                                                            <img src="assets/images/help/24.png" alt="Step 4"
                                                                style="width: 100%; max-width: 600px;" />
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end accordion line -->



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
    <section class="cta-style-two">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
        <div class="auto-container">
            <div class="inner-box">
                <img src="assets/images/logo-3.png">
                <h1 style="color:#fff">Customer Service</h1><br>
            </div>
        </div>
    </section>
    @include('partials.help-desk')
@endsection
@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const accBtns = document.querySelectorAll(".acc-btn");

            accBtns.forEach(btn => {
                btn.addEventListener("click", function () {
                    const content = this.nextElementSibling;
                    const isOpen = this.classList.contains("active");

                    // Close all if you want only one open at a time
                    // Comment these lines if you want multiple open at the same time
                    document.querySelectorAll(".acc-btn").forEach(b => b.classList.remove("active"));
                    document.querySelectorAll(".acc-content").forEach(c => c.style.display = "none");

                    if (!isOpen) {
                        this.classList.add("active");
                        content.style.display = "block";
                    } else {
                        this.classList.remove("active");
                        content.style.display = "none";
                    }
                });
            });

            // Start all accordions closed
            document.querySelectorAll(".acc-content").forEach(c => c.style.display = "none");
        });
    </script>


@endsection