<section class="contact-section sec-pad">
    <div class="auto-container">
        <div class="sec-title centred mb_55">
            <span class="sub-title calendar">@lang('pages.help_desk')</span>
        </div>

        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                <div class="content-box p_relative mr_70">
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
                    <form method="post" action="{{ route('contact.send') }}" id="contact-form">
                        @csrf
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
