@extends('layouts.app')

@section('title', '#somosAETH | Our team')

@section('meta-description', 'AETH - Team')

@section('meta-keywords', 'aeth, team')


<!-- Content here -->

@section('content')
<section class="team-details">
    <div class="auto-container">
        <div class="team-details-content">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-12 col-sm-12 image-column">
                    <figure class="image-box"><img src="assets/images/team/Maylin Escala.jpg" alt=""></figure>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <h2>Maylin Escala</h2>
                        <p><b>@lang('team.maylin.p1')</b></p>
                        <p>@lang('team.maylin.p2')</p>
                        <p><b>@lang('team.what_excites_about_aeth')</b></p>
                        <p>@lang('team.maylin.p3')</p>
                        <p><b>@lang('team.spare_time')</b></p>
                        <p>@lang('team.maylin.p4')</p>
                        <p><b>@lang('team.favorite_book')</b></p>
                        <p>@lang('team.maylin.p5')</p>
                        <p><b>@lang('team.person_who_inspires')</b></p>
                        <p>@lang('team.maylin.p6')</p>

                        <ul class="info-list clearfix">
                            <li><span>Email:</span> <a href="mailto:mescala@aeth.org">mescala@aeth.org</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
