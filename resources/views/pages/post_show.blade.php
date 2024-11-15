@extends('layouts.app')

@section('title', 
    App::getLocale() == 'es' ? $post->title_es : 
    (App::getLocale() == 'pt' ? $post->title_pt : $post->title_en)
)

@section('meta-description', 
    App::getLocale() == 'es' ? $post->summary_es : 
    (App::getLocale() == 'pt' ? $post->summary_pt : $post->summary_en)
)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-12 box-shadow">
                <img class="card-img-top" src="{{ $post->image_url }}" alt="{{ $post->title_en }}">
                <div class="card-body">
                    <h2>
                        {{-- Display title based on the current locale --}}
                        @if(App::getLocale() == 'es')
                            {{ $post->title_es }}
                        @elseif(App::getLocale() == 'pt')
                            {{ $post->title_pt }}
                        @else
                            {{ $post->title_en }} {{-- Default to English if no locale match --}}
                        @endif
                    </h2>

                    <p class="card-text">
                        {{-- Display content based on the current locale --}}
                        @if(App::getLocale() == 'es')
                            {{ $post->content_es }}
                        @elseif(App::getLocale() == 'pt')
                            {{ $post->content_pt }}
                        @else
                            {{ $post->content_en }} {{-- Default to English if no locale match --}}
                        @endif
                    </p>

                    <small class="text-muted">{{ $post->date }}</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
