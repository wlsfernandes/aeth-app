@extends('layouts.app')

@section('title', '#somosAETH | ' . $speaker->name)

@section('meta-description', $speaker->name)

@section('meta-keywords', $speaker->name)

@section('content')
    <section class="team-details">
        <div class="auto-container">
            <div class="team-details-content">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-12 col-sm-12 image-column">
                        <figure class="image-box">
                            <img src="{{ $speaker->photo_url }}" alt="{{ $speaker->name }}">
                        </figure>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <h2>{{ $speaker->name }}</h2>
                            <p><b>{{ $speaker['title_' . app()->getLocale()] }}</b></p>
                            {!! $speaker['description_' . app()->getLocale()] !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection