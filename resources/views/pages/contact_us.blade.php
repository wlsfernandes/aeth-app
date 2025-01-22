@extends('layouts.app')

@section('title', '#somosAETH | Contact')

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, contact, introduction')


<!-- Content here -->

@section('content')
<section class="contact-info-section bg-color-1 centred">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-63"></i></div>
                        <h3>Phone</h3>
                        <p><a href="tel:14077731234">+1 (407) 773-1234</a></p>
                        <p><a href="tel:14077546863">+1 (407) 754-6863</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-64"></i></div>
                        <h3>@lang('messages.email_address')</h3>
                        <p><a href="mailto:info@aeth.org">info@aeth.org</a></p>
                        <p><a href="mailto:administration@aeth.org">administration@aeth.org</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-65"></i></div>
                        <h3>@lang('messages.our_location')</h3>
                        <p>PO Box 677848 </br> Orlando, FL 32867</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-info-section end -->

<!-- contact-section -->
<section class="contact-section sec-pad">
    <div class="auto-container">
        <!-- iframe div -->

        <div class="iframe-container" style="margin-bottom: 30px;">
            <iframe
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=PO%20Box%20677848%20Orlando%20FL%2032867&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>

        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                <div class="content-box p_relative mr_70">
                    <h3>@lang('messages.feel_free')</h3>
                    <p>@lang('messages.feel_free_p1')</p>
                    <ul class="social-links clearfix">
                        <li><a href="https://www.facebook.com/groups/662799037578468" target="blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/aeth_org/" target="blank"><i
                                    class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                <div class="form-inner">
                    <form method="post" action="sendemail.php" id="contact-form">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="username" placeholder="@lang('messages.your_name')" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="@lang('messages.your_email')" required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="text" name="phone" required="" placeholder="@lang('messages.your_phone')">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="message" placeholder="@lang('messages.your_message')"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0">
                                <button class="theme-btn-one" type="submit"
                                    name="submit-form"><span>@lang('messages.send_message')</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
