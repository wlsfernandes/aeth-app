@extends('layouts.app')

@section('title')
    {{
        App::getLocale() === 'es' ? $post->title_es :
        (App::getLocale() === 'pt-BR' ? $post->title_pt : $post->title_en)
    }}
@endsection

@section('meta-description')
    {{
        App::getLocale() === 'es' ? $post->summary_es :
        (App::getLocale() === 'pt-BR' ? $post->summary_pt : $post->summary_en)
    }}
@endsection

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow border-0">

                {{-- Title & Date --}}
                <div class="text-center py-4 px-3">
                    <h1 class="fw-bold" style="color:#4a235a">
                        @switch(App::getLocale())
                            @case('es')
                                {{ $post->title_es ?? '' }}
                                @break
                            @case('pt')
                                {{ $post->title_pt ?? '' }}
                                @break
                            @default
                                {{ $post->title_en ?? '' }}
                        @endswitch
                    </h1>
                    <small class="text-muted">{{ $post->date }}</small>
                </div>

                {{-- Image --}}
                <div class="text-center">
                    <img class="img-fluid" style="max-height: 600px; width: auto;" 
                         src="{{ $post->image_url }}" 
                         alt="{{ $post->title_en }}">
                </div>

                {{-- Content --}}
                <div class="card-body text-center">
                    <h3 style="color:#4a235a"><i>
                        @switch(App::getLocale())
                            @case('es')
                                {{ $post->content_es ?? '' }}
                                @break
                            @case('pt-Br')
                                {{ $post->content_pt ?? '' }}
                                @break
                            @default
                                {{ $post->content_en ?? '' }}
                        @endswitch
                    </i></h3>

                    <p class="mt-4 text-muted">
                        <small>
                            @switch(App::getLocale())
                                @case('es')
                                    {!! $post->summary_es ?? '' !!}
                                    @break
                                @case('pt-BR')
                                    {!! $post->summary_pt ?? '' !!}
                                    @break
                                @default
                                    {!! $post->summary_en ?? '' !!}
                            @endswitch
                        </small>
                    </p>

                    {{-- External Link Button --}}
                    @if($post->external_link)
                        <div class="mt-5">
                            <a href="{{ $post->external_link }}" target="_blank" class="btn btn-danger btn-md">
                                {{ $post->external_link_button ?? 'Click here to access' }}
                            </a>
                        </div>
                    @endif

                    {{-- Download Buttons --}}
                    @if($post->file_url)
                        <div class="mt-4">
                            <a href="{{ $post->file_url }}" target="_blank" class="btn btn-sm btn-gradient">
                                {{ $post->button_text_en ?? 'Download English here' }}
                            </a>
                        </div>
                    @endif

                    @if($post->file_url_es)
                        <div class="mt-3">
                            <a href="{{ $post->file_url_es }}" target="_blank" class="btn btn-sm btn-gradient">
                                {{ $post->button_text_es ?? 'Descargar Español aquí' }}
                            </a>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
