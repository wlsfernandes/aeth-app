@extends('layouts.app')

@section('title', '#somosAETH | LS 25 Speakers')

@section('meta-description', 'LS 25 Speakers')

@section('meta-keywords', 'LS 25 Speakers')


<!-- Content here -->

@section('content')
    <section class="team-details">
        <div class="auto-container">
            <div class="team-details-content">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-12 col-sm-12 image-column">
                        <figure class="image-box"><img src="assets/images/resource/Yenny Delgado.jpg" alt="">
                        </figure>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <h2>Yenny Delgado</h2>
                            <p><b>@lang('ls25.speaker_title_yenny')</b></p>
                            <p>@lang('ls25.speaker_desc_yenny')</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection