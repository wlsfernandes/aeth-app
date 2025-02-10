@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<section class="container d-flex justify-content-center" style="margin-bottom:50px;">
    <div class="row">
        <div class="col-12">
            <div class="card-group">
                <h5 class="card-title">@lang('exclusive.dashboard.p5')</h5>
                <p class="card-text">@lang('exclusive.dashboard.p2')</p>
            </div>
        </div>
        <div class="col-12">
            <div class="card-group">

                <div class="card">
                    <a href="{{route('aethProgram')}}">
                        <img class="card-img-top img-fluid" src="{{asset('assets/images/aeth-doc.jpg')}}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">AETH</h4>
                            <p class="card-text">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div><!-- end cardbody -->
                    </a>
                </div>


                <div class="card">
                    <a href="{{route('antioquiaExclusive')}}">
                        <img class="card-img-top img-fluid" src="{{asset('assets/images/aeth-category.jpg')}}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Antioquia</h4>
                            <p class="card-text">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </a>
                </div><!-- end card -->

                <div class="card">
                    <a href="{{route('capacityBuildingExclusive')}}">
                        <img class="card-img-top img-fluid" src="{{asset('assets/images/aeth-category.jpg')}}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Capacity Building</h4>
                            <p class="card-text">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </a>
                </div><!-- end card -->
            </div><!-- end card-group -->
        </div><!-- end col-12 -->

        <div class="col-12">
            <div class="card-group">
                <div class="card">
                    <a href="{{route('compellingPreachingExclusive')}}">
                        <img class="card-img-top img-fluid" src="{{asset('assets/images/aeth-category.jpg')}}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Compelling Preaching</h4>
                            <p class="card-text">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </a>
                </div><!-- end card -->

                <div class="card">
                    <a href="{{route('gonzalezExclusive')}}">
                        <img class="card-img-top img-fluid" src="{{asset('assets/images/aeth-category.jpg')}}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">González Center</h4>
                            <p class="card-text">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </a>
                </div><!-- end card -->
                <div class="card">
                    <a href="{{route('youngLideresExclusive')}}">
                        <img class="card-img-top img-fluid" src="{{asset('assets/images/aeth-category.jpg')}}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Young Líderes</h4>
                            <p class="card-text">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </a>
                </div><!-- end card -->
            </div><!-- end card-group -->
        </div><!-- end col-12 -->
    </div>

</section>
@endsection
