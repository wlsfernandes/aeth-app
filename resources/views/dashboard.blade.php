@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<section id="courses" class="container py-5">
    <div class="text-center mb-4">
        <h2>AETH - Exclusive Membership Content</h2>
        <p>Explore our wide range of courses and learn from the best instructors.</p>
    </div>
    <div class="row gy-4">
        <!-- Course Card 1 -->
        <div class="col-md-6 col-lg-6">
            <div class="card animated-zoom">
                <img src="{{ asset('assets/images/video-class.jpg') }}" class="card-img-top" alt="Video Class">
                <div class="card-body">
                    <h5 class="card-title">@lang('exclusive.dashboard.p1')</h5>
                    <p class="card-text">@lang('exclusive.dashboard.p2')</p>
                    <a href="{{ route('category') }}" class="btn btn-primary">
                        <i class="bi bi-box-arrow-in-right me-2"></i> Premium Access
                    </a>
                </div>
            </div>
        </div>
        <!-- Course Card 2 -->
        <div class="col-md-6 col-lg-6">
            <div class="card animated-zoom">
                <img src="{{ asset('assets/images/aeth-programs2.png') }}" class="card-img-top" alt="JC Center">
                <div class="card-body">
                    <h5 class="card-title">@lang('exclusive.dashboard.p3')</h5>
                    <p class="card-text">@lang('exclusive.dashboard.p4')</p>
                    <a href="{{ route('programs') }}" class="btn btn-primary custom-btn">
                        <i class="bi bi-box-arrow-in-right me-2"></i> Premium Access
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
