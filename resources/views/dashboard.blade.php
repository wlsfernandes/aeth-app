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
            <div class="card">
                <img src="assets/images/video-class.jpg" class="card-img-top" alt="Course Image">
                <div class="card-body">
                    <h5 class="card-title">Exclusive Video content</h5>
                    <p class="card-text">Brief description of the course goes here. It covers all the essential topics
                        and skills.</p>
                    <a href="{{ route('videoGallery') }}" class="btn btn-primary"> <i class="bi bi-box-arrow-in-right me-2"></i>  Premium Access</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <img src="assets/images/jccenter.jpg" class="card-img-top" alt="Course Image">
                <div class="card-body">
                    <h5 class="card-title">Justo & Catherine González Center Access</h5>
                    <p class="card-text">Brief description of the course goes here. It covers all the essential topics
                        and skills.</p>
                    <a href="{{ route('acervo')}}" class="btn btn-primary" style="background-color:#330033; border-color:#330033"> <i class="bi bi-box-arrow-in-right me-2"></i>  Premium Access</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection