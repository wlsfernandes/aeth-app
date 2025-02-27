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
                        <figure class="image-box"><img src="assets/images/team/Juan Martinez.jpg" alt=""></figure>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <h2>Juan Martínez</h2>
                            <p><b>@lang('team.juan.p1')</b></p>
                            <p>@lang('team.juan.p2')</p>
                            <p><b>@lang('team.what_excites_about_aeth')</b></p>
                            <p>@lang('team.juan.p3')</p>
                            <p><b>@lang('team.spare_time')</b></p>
                            <p>@lang('team.juan.p4')</p>
                            <p><b>@lang('team.favorite_book')</b></p>
                            <p>@lang('team.juan.p5')</p>
                            <p><b>@lang('team.person_who_inspires')</b></p>
                            <p>@lang('team.juan.p6')</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
