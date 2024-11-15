@extends('layouts.app')

@section('title', '#somosAETH | Events')

@section('meta-description', 'This is a brief description of the blog page.')

@section('meta-keywords', 'blog, posts, news')

@section('content')
<div class="container">
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{ $post->image_url }}" alt="{{ $post->title_en }}"
                        style="height: 225px; width: 100%; display: block;">
                    <div class="card-body d-flex flex-column">
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

                            <small class="text-muted"><i>
                                    {{-- Display summary based on the current locale and limit to 90 characters --}}
                                    @if(App::getLocale() == 'es')
                                        {{ Str::limit($post->summary_es, 90, '...') }}
                                    @elseif(App::getLocale() == 'pt')
                                        {{ Str::limit($post->summary_pt, 90, '...') }}
                                    @else
                                        {{ Str::limit($post->summary_en, 90, '...') }} {{-- Default to English if no locale
                                        match --}}
                                    @endif
                                </i></small>
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

    <div class="d-flex justify-content-center">
        {{-- Pagination Links --}}
        {{ $posts->links() }}
    </div>
</div>
@endsection