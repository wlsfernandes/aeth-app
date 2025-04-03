@extends('layouts.app')

@section('title', '#somosAETH | Events')

@section('meta-description', 'This is a brief description of the blog page.')

@section('meta-keywords', 'blog, posts, news')

@section('content')


    <div class="container" style="margin-top:50px;">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{ $post->image_url }}" alt="{{ $post->title_en }}"
                            style="height: 225px; width: 100%; display: block; object-fit: cover; object-position: left top;">

                        <div class="card-body d-flex flex-column"
                            style="min-height: 300px;display: flex;flex-direction: column;justify-content: space-between;">
                            <div class="d-flex flex-column flex-grow-1">
                                <p class="card-text" style="margin-bottom:15px;">
                                    @if(App::getLocale() == 'es')
                                        {{ $post->title_es }}
                                    @elseif(App::getLocale() == 'pt')
                                        {{ $post->title_pt }}
                                    @else
                                        {{ $post->title_en }} {{-- Default to English if no locale match --}}
                                    @endif
                                </p>

                                <p class="card-text text-muted small flex-grow-1">
                                    <i>{{ $post->plain_summary }}</i>
                                </p>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="btn-group">
                                    <a href="{{ route('post.show', $post->slug) }}"
                                        class="btn btn-sm btn-outline-secondary">View</a>
                                </div>
                                <small class="text-muted">{{ $post->date }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

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

    <section class="cta-style-two" style="margin-top:75px;">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
        <div class="auto-container">
            <div class="inner-box">

                <h2><i class="bi bi-book" style="font-size: 1.5rem;color:#fff;"></i> @lang('messages.resources_grow'):</h2>
                <br>
            </div>
        </div>
    </section>
@endsection