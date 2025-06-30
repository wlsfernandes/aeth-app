@extends('layouts.template')

@section('title', '#somosAETH | González Center')

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction')


<!-- Content here -->

@section('content')


    <div class="slider-area rbt-banner-10 height-750 bg_image" data-black-overlay="5"
        style="background-image: url('{{ asset('assets/images/events/event.jpg') }}')">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner text-center">
                        <div class="section-title mb--20">
                            <span class="subtitle bg-coral-opacity">@lang('messages.calendar')</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area  -->

    <div class="rbt-counterup-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row g-5">
                <!-- Start Single Event  -->
                @foreach($posts as $post)
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{ route('post.show', $post->slug) }}">
                                    <img src="{{ $post->image_url }}" alt="{{ $post->title_en }}"
                                        style="object-fit: cover; height: 250px; width: 100%;">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <ul class="rbt-meta">
                                    <li><i class="feather-calendar"></i>{{ $post->date }}</li>
                                    <li><i class="feather-map-pin"></i>{{ $post->location ?? 'Online' }}</li>
                                </ul>
                                <h4 class="rbt-card-title">
                                    <a href="{{ route('post.show', $post->slug) }}">
                                        @if(App::getLocale() == 'es')
                                            {{ $post->title_es }}
                                        @elseif(App::getLocale() == 'pt')
                                            {{ $post->title_pt }}
                                        @else
                                            {{ $post->title_en }}
                                        @endif
                                    </a>
                                </h4>
                                <p class="text-muted small">{{ $post->plain_summary }}</p>
                                <div class="read-more-btn mt-2">
                                    <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round"
                                        href="{{ route('post.show', $post->slug) }}">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">@lang('blog.read_more')</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- End Single Event  -->

                <div class="row">
                    <div class="pagination-wrapper centred">
                        <ul class="pagination clearfix">
                            @if ($posts->onFirstPage())
                                <li><a href="#" aria-disabled="true"><i class="icon-56"></i></a></li>
                            @else
                                <li><a href="{{ $posts->previousPageUrl() }}"><i class="icon-56"></i></a></li>
                            @endif

                            @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                                <li>
                                    <a href="{{ $url }}" class="{{ $posts->currentPage() === $page ? 'current' : '' }}">
                                        {{ $page }}
                                    </a>
                                </li>
                            @endforeach

                            @if ($posts->hasMorePages())
                                <li><a href="{{ $posts->nextPageUrl() }}"><i class="icon-55"></i></a></li>
                            @else
                                <li><a href="#" aria-disabled="true"><i class="icon-55"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection