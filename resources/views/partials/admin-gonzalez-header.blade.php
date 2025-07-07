<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>González Resource Center</title>
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
    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(106, 90, 205, 0.4);
        }

        70% {
            box-shadow: 0 0 0 10px rgba(106, 90, 205, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(106, 90, 205, 0);
        }
    }
</style>

<body>
    <div class="boxed_wrapper">


        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href=""><img src="{{ asset('assets/images/aeth-logo.png') }}"
                                alt=""></a>
                    </figure>
                    <div class="close-search pull-right"><span class="far fa-times"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="GET" action="{{ route('globalSearch') }}">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value=""
                                        placeholder="@lang('dashboard.search_keyword_placeholder')" required>
                                    <small class="text-info"><i>@lang('dashboard.keyword_help')</i></small>
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
                                <a href="mailto:jcgcenter@aeth.org" style="font-size: 12px;color:#4a235a">
                                    jcgcenter@aeth.org</a>
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
                        <div class="d-flex align-items-center justify-content-start" style="gap: 20px;">
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix"
                                        style="margin: 0; padding: 0; display: flex; align-items: center; gap: 20px;">



                                        <li>
                                            <a href="{{ route('all')}}" style="text-transform: none;">
                                                @lang('dashboard.browse_all')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('browseCollections')}}" style="text-transform: none;">
                                                @lang('dashboard.browse_collections')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('tag.cloud')}}" style="text-transform: none;">
                                                @lang('dashboard.browse_tags')</a>

                                        <li><a href="{{ route('selector') }}">@lang('dashboard.search_items')</a></li>



                                        <li class="search-box-outer search-toggler" style="margin-left: 15px;">
                                            <a
                                                style="font-size: 14px;display: inline-flex;align-items: center;gap: 6px;color: #4A235A;font-weight: 600;padding: 10px 12px; border: 2px solid #4A235A; border-radius: 6px; transition: all 0.3s ease;animation: pulse 2s infinite; line-height: 1;  text-decoration: none;  height: 100%;">
                                                <i class="bi bi-search" style="font-size: 18px;"></i>
                                                @lang('dashboard.search_keyword')
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <ul class="nav-right">

                        <a href="#" class="btn btn-sm btn-gradient"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            style="font-size: 14px; display: flex; align-items: center;">
                            <i class="bi bi-box-arrow-left me-2"></i>
                            @lang('dashboard.logout')
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
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