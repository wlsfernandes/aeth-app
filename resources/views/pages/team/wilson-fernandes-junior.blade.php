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
                    <figure class="image-box"><img src="assets/images/team/WilsonFernandesJunior.jpg" alt=""></figure>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <h2>Wilson Fernandes Junior</h2>
                        <p><b>@lang('team.junior.p1')</b></p>
                        <p>@lang('team.junior.p2')</p>
                        <p>@lang('team.junior.p3')</p>
                        <p>@lang('team.junior.p4')</p>
                        <p>@lang('team.junior.p5')</p>
                        <p>@lang('team.junior.p6')</p>

                        <p><b>@lang('team.what_excites_about_aeth')</b></p>
                        <p>@lang('team.junior.p7')</p>
                        <p><b>@lang('team.spare_time')</b></p>
                        <p>@lang('team.junior.p8')</p>
                        <p><b>@lang('team.favorite_book')</b></p>
                        <p>@lang('team.junior.p9')</p>
                        <p><b>@lang('team.person_who_inspires')</b></p>
                        <p>@lang('team.junior.p10')</p>

                        <ul class="info-list clearfix">
                            <li><span>Email:</span> <a href="mailto:wlsfernandes@aeth.org">wlsfernandes@aeth.org</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection