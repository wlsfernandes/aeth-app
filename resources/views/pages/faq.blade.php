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
                                                        <h3 style="color:#4a235a">How to Become a Member of AETH</h3>
                                                    </div>
                                                    <div class="acc-content">
                                                        <div class="text" style="text-align: center;">
                                                            <h3>Step 1: Choose Your Membership</h3>
                                                            <p>Go to <a href="https://somosaeth.org/memberships"
                                                                    target="_blank">https://somosaeth.org/memberships</a>
                                                            </p>
                                                            <p>Select the best membership type for you:</p>
                                                            <ul>
                                                                <li><strong>Institutional</strong></li>
                                                                <li><strong>Individual</strong></li>
                                                                <li><strong>Student</strong></li>
                                                            </ul>
                                                            <p>Then choose if you prefer to pay <strong>monthly</strong> or
                                                                <strong>yearly</strong>. Click the button that matches your
                                                                choice.
                                                            </p>
                                                            <img src="assets/images/help/1.png" alt="Membership options"
                                                                style="width: 100%; max-width: 600px;" />
                                                            <img src="assets/images/help/2.png" alt="Payment options"
                                                                style="width: 100%; max-width: 600px;" />

                                                            <!-- Step 2 -->
                                                            <h3>Step 2: Choose Your Payment Method</h3>
                                                            <p>You will be redirected to the payment page. Choose between:
                                                            </p>
                                                            <ul>
                                                                <li><strong>Credit Card</strong></li>
                                                                <li><strong>PayPal</strong></li>
                                                            </ul>
                                                            <img src="assets/images/help/3.png" alt="Choose payment method"
                                                                style="width: 100%; max-width: 600px;" />

                                                            <!-- Step 3 -->
                                                            <h3>Step 3: Fill in Your Information</h3>
                                                            <p>Enter all required information like your:</p>
                                                            <ul>
                                                                <li>First Name</li>
                                                                <li>Last Name</li>
                                                                <li>Email Address</li>
                                                                <li>Payment Details</li>
                                                            </ul>
                                                            <img src="assets/images/help/4.png"
                                                                alt="Form with personal information"
                                                                style="width: 100%; max-width: 600px;" />

                                                            <!-- Step 4 -->
                                                            <h3>Step 4: Confirmation Email</h3>
                                                            <p>After payment is complete, you will receive an email with
                                                                your
                                                                login information and a temporary password.</p>
                                                            <img src="assets/images/help/5.png"
                                                                alt="Confirmation email example"
                                                                style="width: 100%; max-width: 600px;" />

                                                            <!-- Step 5 -->
                                                            <h3>Step 5: Login to the Portal</h3>
                                                            <p>Go to <a href="https://somosaeth.org/login"
                                                                    target="_blank">https://somosaeth.org/login</a></p>
                                                            <p>Enter your email and temporary password, then click
                                                                <strong>Login</strong>.
                                                            </p>
                                                            <img src="assets/images/help/6.png" alt="Login page"
                                                                style="width: 100%; max-width: 600px;" />

                                                            <!-- Step 6 -->
                                                            <h3>Step 6: Create a New Password</h3>
                                                            <p>After logging in, you will be redirected to a page where you
                                                                need
                                                                to create your own password.</p>
                                                            <img src="assets/images/help/7.png" alt="Password creation page"
                                                                style="width: 100%; max-width: 600px;" />

                                                            <!-- Step 7 -->
                                                            <h3>Step 7: Set Your Password</h3>
                                                            <p>Type your new password and click <strong>Update
                                                                    Password</strong>.</p>
                                                            <img src="assets/images/help/8.png" alt="Update password"
                                                                style="width: 100%; max-width: 600px;" />

                                                            <!-- Step 8 -->
                                                            <h3>Step 8: Access the Portal</h3>
                                                            <p>Now you can log in anytime at <a
                                                                    href="https://somosaeth.org/login"
                                                                    target="_blank">https://somosaeth.org/login</a> using
                                                                your
                                                                new password to access all the content.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!--        <li class="accordion block">
                                                        <div class="acc-btn">
                                                            <div class="icon-outer"></div>
                                                            <h4>Assisting the animals with the veterinarian</h4>
                                                        </div>
                                                        <div class="acc-content">
                                                            <div class="text">
                                                                <p>Sodales posuere facilisi metus elementum ipsum egestas amet
                                                                    amet
                                                                    mattis commodo Nunc tempor amet massa diam mauris Risus
                                                                    sodales
                                                                    interdum.</p>
                                                            </div>
                                                        </div>
                                                    </li> -->

                                            </ul>
                                        </div>
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

    @include('partials.help-desk')
@endsection