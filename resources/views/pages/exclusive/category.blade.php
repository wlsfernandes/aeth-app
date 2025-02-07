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
                    <a href="{{route('pdf')}}">
                        <img class="card-img-top img-fluid" src="{{asset('assets/images/aeth-doc.jpg')}}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">AETH Files</h4>
                            <p class="card-text">This is a longer card with supporting text below as
                                a natural lead-in to additional content. This content is a little
                                bit longer.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div><!-- end cardbody -->
                    </a>
                </div>


                <div class="card">
                    <img class="card-img-top img-fluid" src="{{asset('assets/images/aeth-category.jpg')}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This card has supporting text below as a natural
                            lead-in to additional content.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div><!-- end cardbody -->
                </div><!-- end card -->

                <div class="card">
                    <img class="card-img-top img-fluid" src="{{asset('assets/images/aeth-category.jpg')}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This is a wider card with supporting text below as
                            a natural lead-in to additional content. This card has even longer
                            content than the first to show that equal height action.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end card-group -->
        </div><!-- end col-12 -->

        <div class="col-12">
            <div class="card-group">
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{asset('assets/images/aeth-category.jpg')}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This is a longer card with supporting text below as
                            a natural lead-in to additional content. This content is a little
                            bit longer.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div><!-- end cardbody -->
                </div><!-- end card -->

                <div class="card">
                    <img class="card-img-top img-fluid" src="{{asset('assets/images/aeth-category.jpg')}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This card has supporting text below as a natural
                            lead-in to additional content.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div><!-- end cardbody -->
                </div><!-- end card -->

                <div class="card">
                    <img class="card-img-top img-fluid" src="{{asset('assets/images/aeth-category.jpg')}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This is a wider card with supporting text below as
                            a natural lead-in to additional content. This card has even longer
                            content than the first to show that equal height action.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end card-group -->
        </div><!-- end col-12 -->
    </div>

</section>
@endsection
