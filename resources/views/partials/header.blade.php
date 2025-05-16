<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>#somosAETH</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Icon Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Local Stylesheets -->
    <link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet"> <!-- Bootstrap 5 CSS -->
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.bootstrap-touchspin.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/elpath.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    <!-- Bootstrap 5 Bundle JS (includes Popper) – Required for carousel -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
</head>


<!-- START BODY -->
<style>
    .cart-count {
        background-color: #4a235a;
        color: white;
        font-size: 12px;
        font-weight: bold;
        width: 18px;
        height: 18px;
        text-align: center;
        border-radius: 50%;
        position: absolute;
        top: -5px;
        right: -5px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .lecture-series-pulse {
        position: relative;
        color: #4a235a;
        font-weight: bold;
        text-align: center;
    }

    .lecture-series-pulse .rounded-circle {
        background-color: #4a235a;
        width: 16px;
        height: 16px;
        display: inline-block;
        border-radius: 50%;
        animation: pulse 1.8s infinite ease-in-out;
        box-shadow: 0 0 8px rgba(74, 35, 90, 0.5);
    }

    .pulse-icon {
        font-size: 1rem;
        animation: pulse 1.5s infinite ease-in-out;
        color: #f39c12;
        /* Deep warm orange - better than plain yellow */
    }

    @keyframes pulse {
        0% {
            transform: scale(1) translate(-50%, -50%);
            opacity: 0.9;
            text-shadow: 0 0 4px rgba(243, 156, 18, 0.4);
        }

        50% {
            transform: scale(1.4) translate(-50%, -50%);
            opacity: 0.5;
            text-shadow: 0 0 12px rgba(243, 156, 18, 0.6);
        }

        100% {
            transform: scale(1) translate(-50%, -50%);
            opacity: 0.9;
            text-shadow: 0 0 4px rgba(243, 156, 18, 0.4);
        }
    }
</style>

<body>
    <div class="boxed_wrapper">


        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href=""><img src="assets/images/aeth-logo.png" alt=""></a>
                    </figure>
                    <div class="close-search pull-right"><span class="far fa-times"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="index.php">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value=""
                                        placeholder="Type your keyword and hit" required>
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <header class="main-header header-style-two">
            <!-- header-top -->
            <div class="header-top">
                <div class="top-inner">
                    <div class="top-left">
                        <div class="social-links">
                            <ul class="clearfix">
                                <li><a href="https://www.facebook.com/groups/662799037578468" target="blank"><span
                                            class="fab fa-facebook-square"></span></a></li>
                                <li><a href="https://www.instagram.com/aeth_org/" target="blank"><span
                                            class="fab fa-instagram"></span></a></li>
                                <li><a href="https://www.vimeo.com/aeth" target="blank"><span
                                            class="fab fa-vimeo"></span></a></li>

                            </ul>
                        </div>
                        <ul class="info">

                            <li>
                                <a href="{{ route('lang.switch', ['lang' => 'en']) }}" title="English">
                                    <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/flags/4x3/us.svg"
                                        alt="English" style="width: 24px;">
                                </a>
                                <a href="{{ route('lang.switch', ['lang' => 'es']) }}" title="Español"
                                    style="margin-left: 5px;">
                                    <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/flags/4x3/es.svg"
                                        alt="Español" style="width: 24px;">
                                </a>
                                <a href="{{ route('lang.switch', ['lang' => 'pt-BR']) }}" title="Português">
                                    <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/flags/4x3/br.svg"
                                        alt="Português" style="width: 24px;">
                                </a>
                            </li>


                        </ul>
                    </div>
                    <div class="top-right">
                        <ul class="info">
                            <li>
                                <a href="mailto:info@aeth.org" style="font-size: 12px;color:#4a235a">
                                    info@aeth.org</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    <i class="fas fa-check-circle"></i> <!-- Success icon -->
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    @if (is_array(session('error')))
                        {{ implode(', ', session('error')) }}
                    @else
                        {{ session('error') }}
                    @endif
                </div>
            @endif

            <div class="header-lower">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"> <a href="{{ url('/') }}"><img src="assets/images/aeth-logo.png"
                                    alt=""></a>
                        </figure>
                    </div>
                    <div class="menu-area clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current">
                                        <a href="{{url('/')}}">Home</a>
                                    </li>
                                    <!-- About Us -->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-title"
                                            style="pointer-events: none;">@lang('header.about_us')</a>
                                        <ul>
                                            <li><a href="{{ route('about_us') }}">@lang('header.about_us')</a></li>
                                            <li><a href="{{ route('showAllPages') }}">@lang('header.articles')</a></li>
                                            <li><a href="{{ route('post') }}">@lang('header.blog')</a></li>
                                            <li><a href="{{ route('contact_us') }}">@lang('header.contact_us')</a></li>
                                            <li><a href="{{ route('showAllEvents') }}">@lang('header.events')</a></li>
                                            <li><a href="{{ route('helpDesk') }}">@lang('pages.help_desk')</a></li>
                                            <li><a
                                                    href="{{ route('open_positions') }}">@lang('header.open_positions')</a>
                                            </li>
                                            <li><a href="{{ route('our_team') }}">@lang('header.our_team')</a></li>
                                            <li><a
                                                    href="{{ route('testimonials') }}">@lang('testimonial.testimonials')</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- Programs-->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-title"
                                            style="pointer-events: none;">@lang('header.programs')</a>
                                        <ul>
                                            <li><a href="{{ route('antioquia') }}">@lang('header.antioquia')</a></li>
                                            <li><a
                                                    href="{{ route('capacityBuilding') }}">@lang('header.capacity_building')</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('compelling_preaching') }}">@lang('header.compeling_preaching')</a>
                                            </li>
                                            <li><a href="https://gonzalezcenter.org"
                                                    target="_blank">@lang('header.gonzalez_center')</a></li>

                                            <li class="dropdown">
                                                <a href="{{ route('nishplc') }}">@lang('header.hispanic_initiative')</a>
                                                <ul>
                                                    <li><a
                                                            href="{{ route('grantees') }}">@lang('hispanic_initiative.grantees')</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li><a href="{{ route('young-leaders') }}">@lang('header.young_leaders')</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- Certification -->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-title"
                                            style="pointer-events: none;">@lang('header.certification')</a>
                                        <ul>
                                            <li><a
                                                    href="{{ route('certification_program') }}">@lang('header.certification_program')</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('certified_institutions') }}">@lang('header.certified_institutions')</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('requestCertification') }}">@lang('header.request_certification')</a>
                                            </li>


                                        </ul>
                                    </li>

                                    <!-- Bookstore -->
                                    <li class="current">
                                        <a href="{{ route('bookstore') }}">@lang('header.bookstore')</a>
                                    </li>
                                    <!-- LS25 -->
                                    <li class="current">
                                        <a href="{{ route('lectureSeries2025') }}"
                                            class="lecture-series-pulse d-inline-flex align-items-center">
                                            <span class="me-2">Lecture Series 2025</span>
                                            <i class="bi bi-star-fill pulse-icon ms-1"></i>
                                        </a>
                                    </li>
                                    <!-- Donations -->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-title"
                                            style="pointer-events: none;">@lang('header.donations')</a>
                                        <ul>
                                            <li><a href="{{ route('aeth_fund') }}">@lang('header.aeth_fund')</a></li>
                                            <li><a
                                                    href="{{ route('gonzalez_center') }}">@lang('header.gonzalez_center')</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <!-- Memberships -->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-title" style="pointer-events: none;"><i
                                                class="bi bi-person"></i> @lang('header.memberships')</a>
                                        <ul>
                                            <li><a href="{{ route('memberships') }}">Info</a>
                                            </li>
                                            <li><a href="{{ route('memberships') }}"><i class="bi bi-person-plus"></i>
                                                    @lang('header.signup_member')</a></li>
                                            <li><a href="{{ route('renew') }}"> <i class="bi bi-arrow-clockwise"></i>
                                                    @lang('header.renew')</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li> <a href="{{ route('login') }}" class="btn btn-sm btn-gradient"
                                            style="padding:0px;margin-top:35px">
                                            <i class="bi bi-box-arrow-in-right me-2"></i> @lang('header.login')
                                        </a></li>
                                </ul>
                            </div>
                        </nav>

                    </div>
                    <ul class="nav-right">

                        <li class="cart-box">
                            <a href="{{ route('helpDesk') }}"> <i class="bi bi-headset"></i></a>
                        </li>
                        <li class="cart-box">
                            <a href="{{ route('cart.show') }}">
                                <i class="icon-23"></i>
                                <span class="cart-count" style="display: {{ session('cart_count', 0) }};">
                                    {{ session('cart_count', 0) }}
                                </span>
                            </a>
                        </li>
                        <li>
                            <figure class="footer-logo" style="max-width:100px;"><a
                                    href="https://www.charitynavigator.org/ein/582022462" target="blank"><img
                                        src="{{ asset('assets/images/logo/charity-navigator-color.png') }}"
                                        alt="Charity Navigator"></a></figure>
                        </li>
                    </ul>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href=""><img src="assets/images/aeth-logo.png" alt=""></a>
                            </figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                            <ul class="nav-right">
                                <!--  <li class="search-box-outer search-toggler">
                                    <i class="icon-1"></i>
                                </li>
                                <li class="btn-box">
                                    <button class="donate-box-btn theme-btn-one"><span>Donate Now</span></button>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href=""><img src="assets/images/aeth-logo.png" alt="" title=""></a>
                </div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <!--    <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div> -->
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="https://www.facebook.com/groups/662799037578468" target="blank"><span
                                    class="fab fa-facebook-square"></span></a></li>
                        <li><a href="https://www.instagram.com/aeth_org/" target="blank"><span
                                    class="fab fa-instagram"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>