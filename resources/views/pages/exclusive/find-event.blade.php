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
                        <a href="{{route('aethEvents')}}">
                            <img class="card-img-top img-fluid" src="{{asset('assets/images/aeth-doc.jpg')}}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">AETH Events</h4>
                                <p class="card-text">@lang('exclusive.dashboard.program7')</p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div><!-- end cardbody -->
                        </a>
                    </div>


                    <div class="card">
                        <a href="{{route('assemblies')}}">
                            <img class="card-img-top img-fluid" src="{{asset('assets/images/assemblie.jpg')}}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Assemblies</h4>
                                <p class="card-text">@lang('exclusive.dashboard.program8')</p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </a>
                    </div><!-- end card -->

                    <div class="card">
                        <a href="{{route('conversatorios')}}">
                            <img class="card-img-top img-fluid" src="{{asset('assets/images/conversatorio.jpg')}}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Conversatorios</h4>
                                <p class="card-text">@lang('exclusive.dashboard.program9')</p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </a>
                    </div><!-- end card -->
                </div><!-- end card-group -->
            </div><!-- end col-12 -->

            <div class="col-8">
                <div class="card-group">
                    <div class="card">
                        <a href="{{route('lectures')}}">
                            <img class="card-img-top img-fluid" src="{{asset('assets/images/lectures2.jpg')}}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Lecture Series</h4>
                                <p class="card-text">@lang('exclusive.dashboard.program10')</p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </a>
                    </div><!-- end card -->

                    <div class="card">
                        <a href="{{route('elet')}}">
                            <img class="card-img-top img-fluid" src="{{ asset('assets/images/LOGO 3ELET.jpg') }}"
                                alt="3ELET" width="600" height="400">
                            <div class="card-body">
                                <h4 class="card-title">3ELET</h4>
                                <p class="card-text">@lang('exclusive.dashboard.program11')</p>
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
