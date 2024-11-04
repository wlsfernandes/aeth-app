@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<!-- Page Title -->
<section class="page-title centred">
    <div style="background-image: url(assets/images/exclusive-content.jpg); background-size: cover; background-position: center; width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 1;">
    </div>
    <div class="auto-container" style="position: relative; z-index: 2;">
        <div class="content-box">
            <h1>AETH - Exclusive Premium Content</h1>
        </div>
    </div>
</section>


<!-- End Page Title -->
<section id="courses" class="container py-5">
    <div class="text-center mb-4">
        <h2>Exclusive AETH Center Video Access</h2>
        <p>Explore our wide range of courses and learn from the best instructors.</p>
    </div>
    <div class="row gy-4">
        <!-- Course Card 1 -->
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
</section>
@endsection