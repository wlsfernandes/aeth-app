
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
                    <figure class="image-box"><img src="assets/images/team/Ondina.jpg" alt=""></figure>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <h2>Ondina González</h2>
                        <p><b>@lang('team.ondina.p1')</b></p>
                        <p>@lang('team.ondina.p2')</p>
                        <p><b>@lang('team.what_excites_about_aeth')</b></p>
                        <p>@lang('team.ondina.p3')</p>
                        <p><b>@lang('team.spare_time')</b></p>
                        <p>@lang('team.ondina.p4')</p>
                        <p><b>@lang('team.favorite_book')</b></p>
                        <p>@lang('team.ondina.p5')</p>
                        <p><b>@lang('team.person_who_inspires')</b></p>
                        <p>@lang('team.ondina.p6')</p>

                        <ul class="info-list clearfix">
                            <li><span>Email:</span> <a href="mailto:ogonzalez@aeth.org">ogonzalez@aeth.org</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection

