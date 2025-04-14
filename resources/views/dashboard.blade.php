@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <section id="courses" class="container py-5">
        <div class="text-center mb-4">
            <h2>@lang('exclusive.dashboard.aeth_exclusive_content')</h2>
            <p>@lang('exclusive.dashboard.explore')</p>
        </div>
        <div class="row gy-4">
            <div class="col-md-4 col-lg-4">
                <a href="{{ route('programs') }}">
                    <div class="card animated-zoom">
                        <img src="{{ asset('assets/images/findByProgram.jpg') }}" class="card-img-top" alt="JC Center">
                        <div class="card-body">
                            <h5 class="card-title">@lang('exclusive.dashboard.findByProgram')</h5>
                            <!--   <p class="card-text">@lang('exclusive.dashboard.p4')</p>-->
                            <a href="{{ route('programs') }}" class="btn btn-primary custom-btn">
                                <i class="bi bi-box-arrow-in-right me-2"></i> @lang('exclusive.dashboard.premium_access')
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="card animated-zoom">
                    <a href="{{ route('category') }}">
                        <img src="{{ asset('assets/images/browse.jpg') }}" class="card-img-top"></a>
                    <div class="card-body">
                        <h5 class="card-title">@lang('exclusive.dashboard.findByCategory')</h5>
                        <!--<p class="card-text">@lang('exclusive.dashboard.p2')</p>-->
                        <a href="{{ route('category') }}" class="btn btn-primary">
                            <i class="bi bi-box-arrow-in-right me-2"></i> @lang('exclusive.dashboard.premium_access')
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="card animated-zoom">
                    <a href="{{ route('findByEvent') }}">
                        <img src="{{ asset('assets/images/assemblie.jpg') }}" class="card-img-top"></a>
                    <div class="card-body">
                        <h5 class="card-title">@lang('exclusive.dashboard.findByEvent')</h5>
                        <!--<p class="card-text">@lang('exclusive.dashboard.p2')</p>-->
                        <a href="{{ route('category') }}" class="btn btn-primary">
                            <i class="bi bi-box-arrow-in-right me-2"></i> @lang('exclusive.dashboard.premium_access')
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@push('styles')
    <style>
        @keyframes zoomFade {
            0% {
                transform: scale(0.95);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .animated-zoom {
            opacity: 0;
            transform: scale(0.95);
            animation: zoomFade 0.8s ease-in-out forwards;
            animation-delay: 0.3s;
        }

        .animated-zoom:nth-child(2) {
            animation-delay: 0.5s;
        }

        .animated-zoom:nth-child(3) {
            animation-delay: 0.7s;
        }

        .custom-btn {
            background-color: #330033;
            border-color: #330033;
        }
    </style>
@endpush