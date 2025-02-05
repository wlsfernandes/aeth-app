@extends('layouts.admin-programs')

@section('title', 'Admin Dashboard')

@section('content')
<section class="container d-flex justify-content-center">
    <div class="row gy-4">
        <div class="col-md-12 col-lg-6 mx-auto">
            <div class="card animated-zoom">
                <img src="{{ asset('assets/images/aeth-options.jpg') }}" class="card-img-top" alt="Video Class">
                <div class="card-body">
                    <h5 class="card-title">@lang('exclusive.dashboard.p5')</h5>
                    <p class="card-text">@lang('exclusive.dashboard.p2')</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
