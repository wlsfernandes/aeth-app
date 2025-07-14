@extends('layouts.app')

@section('title', '#somosAETH | Certification Program')
@section('meta-description', 'This is a brief description of the home page.')
@section('meta-keywords', 'AETH, Antioquia, introduction')

<style>
    body {
        margin-top: 20px;
    }

    .history-wrapper {
        position: relative;
        padding: 50px 0 50px;
    }

    /* central line */
    .history-wrapper:after {
        content: "";
        width: 3px;
        height: 100%;
        background: #ededed;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        top: 0;
    }

    .history-wrapper .title-wrap {
        opacity: 0.2;
        padding: 100px 0 0 45px;
    }

    .history-wrapper .timeline-box {
        position: relative;
        width: 50%;
        float: left; /* base float – will be overridden for even items */
        clear: both; /* NEW: start each item on a new row to avoid overlap */
        margin-bottom: 180px; /* increased spacing for readability */
    }

    /* Alternate sides properly */
    .history-wrapper .timeline-box:nth-child(2n) {
        float: right; /* NEW: push even items to the right side */
        padding: 0 0 0 140px; /* existing left padding keeps content away from center line */
        text-align: left;
    }

    .history-wrapper .timeline-box:nth-child(2n+1) {
        float: left;  /* odd items stay on the left */
        padding: 0 140px 0 0;
        margin-top: 0; /* NEW: remove the previous negative margin that caused overlap */
        text-align: right;
    }

    /* Year circle */
    .year {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: absolute;
        background: #fff;
        top: 30%;
        color: #3b3b3b;
        transform: translateY(-50%);
        border: 1px solid #dbdbdb;
        line-height: 100px;
        text-align: center;
        font-size: 24px;
        font-weight: 700;
    }

    .timeline-box:nth-child(2n) .year {
        left: 25px;
    }

    .timeline-box:nth-child(2n+1) .year {
        right: 32px;
    }

    .year:before {
        content: "";
        width: 15px;
        height: 15px;
        border-left: 1px solid #dbdbdb;
        border-bottom: 1px solid #dbdbdb;
        background: #ffffff;
        position: absolute;
        top: 50%;
        margin-top: -7.5px;
    }

    .timeline-box:nth-child(2n) .year:before {
        left: -8px;
        transform: rotate(45deg);
    }

    .timeline-box:nth-child(2n+1) .year:before {
        right: -8px;
        transform: rotate(-135deg);
    }

    /* the orange line growing on hover */
    .timeline-box:after {
        content: "";
        width: 3px;
        height: 0;
        background: #ffa200;
        position: absolute;
        top: 30%;
        transform: translateY(-50%);
        z-index: 1;
        transition: height 0.3s ease-in-out;
    }

    .timeline-box:nth-child(2n):after {
        left: -1.5px;
    }

    .timeline-box:nth-child(2n+1):after {
        right: -1.5px;
    }

    .timeline-box:hover:after {
        height: 97px;
    }

    .timeline-box:before {
        content: "";
        width: 21px;
        height: 21px;
        border-radius: 50%;
        border: 5px solid #ededed;
        position: absolute;
        background: #fff;
        z-index: 2;
        top: 30%;
        transform: translateY(-50%);
        transition: border 0.3s ease-in-out;
    }

    .timeline-box:nth-child(2n):before {
        left: -10.5px;
    }

    .timeline-box:nth-child(2n+1):before {
        right: -10.5px;
    }

    .timeline-box:hover:before {
        border-color: #ffa200;
    }

    /* Small desktop */
    @media screen and (max-width: 1199px) {
        .year {
            width: 90px;
            height: 90px;
            line-height: 90px;
            font-size: 22px;
        }
    }

    /* Tablets */
    @media screen and (max-width: 991px) {
        .history-wrapper {
            padding: 30px 0 30px;
        }

        .history-wrapper .title-wrap {
            padding: 0;
            margin-bottom: 30px;
        }

        .history-wrapper:after {
            left: 0; /* vertical line sticks to the left */
        }

        .history-wrapper .timeline-box {
            width: 100%; /* stack full width */
            float: none;
            padding: 0 0 0 140px; /* keep content away from line */
            text-align: left;
        }

        .timeline-box .year {
            left: 32px; /* year always left */
        }

        .timeline-box:before {
            left: -10.5px;
        }

        .timeline-box:after {
            left: -1.5px;
        }
    }

    /* Mobile */
    @media screen and (max-width: 767px) {
        .history-wrapper:after,
        .year,
        .timeline-box:before {
            display: none;
        }

        .history-wrapper {
            padding: 0;
        }

        .history-wrapper .timeline-box {
            padding: 0 15px;
            margin-bottom: 50px; /* bigger gap for touch devices */
            width: 100%;
        }

        .timeline-box .content {
            text-align: center;
        }

        .timeline-box:after { display: none; }
    }
</style>

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="history-wrapper w-100">
                    <div class="title-wrap text-center w-100 mb-4">
                        <h5 class="h1 text-secondary mb-0 text-uppercase">Asociación para la Educación Teológica Hispana - AETH</h5>
                        <p class="fs-3 font-weight-500"><a href="https://aeth.org" target="_blank">https://aeth.org</a></p>
                    </div>

                    @foreach ($histories as $history)
                        <div class="timeline-box">
                            @if ($history->image_url)
                                <img class="mb-1-6 rounded" src="{{ asset($history->image_url) }}" alt="Image for {{ $history->title_en }}">
                            @endif

                            <div class="content">
                                <h3 class="h4 mb-2 mb-md-3">
                                    {{ $history->{'title_' . app()->getLocale()} ?? $history->title_en }}
                                </h3>
                                <p class="mb-0">
                                    {!! $history->{'description_' . app()->getLocale()} ?? $history->description_en !!}
                                </p>
                            </div>

                            <div class="year">{{ $history->year }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
