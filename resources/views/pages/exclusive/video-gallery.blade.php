@extends('layouts.admin-categories')

@section('title', 'Admin Dashboard')

@section('content')

<section>
    <div class="text-center mb-4">
        <h2>@lang('exclusive.dashboard.video')</h2>
        <p>@lang('exclusive.dashboard.explore')</p>
    </div>
    <ol class="list-group list-group-light list-group-numbered">
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Subheading</div>
                Content for list item
            </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Subheading</div>
                Content for list item
            </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Subheading</div>
                Content for list item
            </div>
        </li>
    </ol>
</section>
<!-- <section id="courses" class="container py-5">
    <div class="text-center mb-4">
        <h2>Exclusive AETH Center Video Access</h2>
        <p>Explore our wide range of courses and learn from the best instructors.</p>
    </div>
    <div class="row gy-4">
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <video controls class="card-img-top"
                    poster="https://gonzalezcenter.s3.us-east-2.amazonaws.com/somosAETH/preview-jpg/jcgcenter-screenshot.jpg">
                    <source src="https://gonzalezcenter.s3.us-east-2.amazonaws.com/somosAETH/videos/videoplayback.mp4"
                        type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

        </div>
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <video controls class="card-img-top"
                poster="https://gonzalezcenter.s3.us-east-2.amazonaws.com/somosAETH/preview-jpg/jcgcenter-screenshot2.jpg">
                >
                    <source src="https://gonzalezcenter.s3.us-east-2.amazonaws.com/somosAETH/videos/videoplayback.mp4"
                        type="video/mp4">
                    Your browser does not support the video tag.
                </video>

            </div>
        </div>



    </div>
</section>-->

@endsection
