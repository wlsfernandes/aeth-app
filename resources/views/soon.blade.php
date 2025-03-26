<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#somosAETH</title>
    <link href="{{ asset('assets/soon/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/soon/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/soon/css/iosoon-style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/soon/css/iosoon-theme12.css') }}" rel="stylesheet">

</head>

<body>
    <div class="form-body">
        <canvas id="pagebg" resize></canvas>
        <div class="row">
            <div class="form-holder col-sm-12 col-md-6 col-lg-5">
                <div class="form-content">
                    <div class="form-items">
                        <div class="form-row logo-social">
                            <div class="col-6">
                                <div>
                                    <div>
                                        <img class="logo-size"
                                            src="{{ asset('assets/images/aeth_logo_transparent.png') }}"
                                            alt="AETH Logo">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="other-links no-bg-icon">
                                    <a href="https://www.facebook.com/groups/662799037578468"><i
                                            class="fab fa-facebook-f" target="blank"></i></a><a
                                        href="https://www.instagram.com/aeth_org/"><i class="fab fa-instagram"
                                            target="blank"></i></a><a href="https://www.vimeo.com/aeth"><i
                                            class="fab fa-vimeo" target="blank"></i></a>
                                </div>
                            </div>
                        </div>
                        <h3>#somosAETH</h3>
                        <p>Soon, a new space for equipping Hispanic pastors, leaders, and learners will rise. Stay
                            tuned — your journey in faith and formation begins here.
                            — your journey in faith and formation begins here.
                        </p>
                        <form class="form-row">
                            <input class="form-control" type="text" name="firstname" placeholder="Your Name" required>
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register now</button>
                            </div>
                        </form>
                        <h5>Event will starts in</h5>
                        <div class="time-counter form-row other-style">
                            <div class="days count col">
                                <div class="num">6</div>
                                <div class="label">Days</div>
                            </div>
                            <div class="hours count col">
                                <div class="num">13</div>
                                <div class="label">Hrs</div>
                            </div>
                            <div class="minutes count col">
                                <div class="num">59</div>
                                <div class="label">Min</div>
                            </div>
                            <div class="seconds count col">
                                <div class="num">30</div>
                                <div class="label">Sec</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img-holder-right col-sm-12 col-md-6 col-lg-7">
                <img src="{{ asset('assets/soon/images/graphic7.svg') }}" alt="">
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/soon/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/soon/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/soon/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/soon/js/paper-full.min.js') }}"></script>
    <script src="{{ asset('assets/soon/js/animation6.js') }}"></script>
    <script src="{{ asset('assets/soon/js/main.js') }}"></script>

</body>

</html>
