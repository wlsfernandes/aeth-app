@extends('layouts.app')

@section('title', '#somosAETH | ' . $hr->name)

@section('meta-description', $hr->name)

@section('meta-keywords', $hr->name)

@section('content')
    <section class="team-details">
        <div class="auto-container">
            <div class="team-details-content">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-12 col-sm-12 image-column">
                        <figure class="image-box">
                            <img src="{{ $hr->photo_url }}" alt="{{ $hr->name }}">
                        </figure>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <h2>{{ $hr->name }}</h2>
                            <p><b>{{ $hr['title_' . app()->getLocale()] }}</b></p>
                            {!! $hr['description_' . app()->getLocale()] !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection