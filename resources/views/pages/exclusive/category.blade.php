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
                    <a href="{{route('articles')}}">
                        <img class="card-img-top img-fluid" src="{{asset('assets/images/aeth-doc.jpg')}}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Articles</h4>
                            <p class="card-text">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div><!-- end cardbody -->
                    </a>
                </div>


                <div class="card">
                    <a href="{{route('bibleStudies')}}">
                        <img class="card-img-top img-fluid" src="{{asset('assets/images/aeth_bible.jpg')}}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Bible Studies</h4>
                            <p class="card-text">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </a>
                </div><!-- end card -->

                <div class="card">
                    <a href="{{route('conference')}}">
                        <img class="card-img-top img-fluid" src="{{asset('assets/images/conversatorio.jpg')}}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Conference</h4>
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
                    <a href="{{route('sermons')}}">
                        <img class="card-img-top img-fluid" src="{{asset('assets/images/lectures2.jpg')}}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Sermons</h4>
                            <p class="card-text">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </a>
                </div><!-- end card -->
                <div class="card">
                    <a href="{{route('workshops')}}">
                        <img class="card-img-top img-fluid" src="{{asset('assets/images/elet.jpg')}}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Workshop</h4>
                            <p class="card-text">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </a>
                </div><!-- end card -->

                <div class="card">
                    <a href="{{route('others')}}">
                        <img class="card-img-top img-fluid" src="{{asset('assets/images/aeth-category.jpg')}}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Others</h4>
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
