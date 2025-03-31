@extends('layouts.app')

@section('title')
    {{
        App::getLocale() === 'es' ? $post->title_es :
        (App::getLocale() === 'pt' ? $post->title_pt : $post->title_en)
    }}
@endsection

@section('meta-description')
    {{
        App::getLocale() === 'es' ? $post->summary_es :
        (App::getLocale() === 'pt' ? $post->summary_pt : $post->summary_en)
    }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-12 box-shadow">
                <img class="card-img-top"
                     src="{{ $post->image_url }}"
                     alt="{{ $post->title_en }}">
                <div class="card-body" style="min-height: 300px; display: flex; flex-direction: column; justify-content: space-between;">
                    <h2>
                        @switch(App::getLocale())
                            @case('es')
                                {{ $post->title_es }}
                                @break
                            @case('pt')
                                {{ $post->title_pt }}
                                @break
                            @default
                                {{ $post->title_en }}
                        @endswitch
                    </h2>

                    <p class="card-text" style="margin-top: 50px;">
                        @switch(App::getLocale())
                            @case('es')
                                {{ $post->content_es }}
                                @break
                            @case('pt')
                                {{ $post->content_pt }}
                                @break
                            @default
                                {{ $post->content_en }}
                        @endswitch
                    </p>

                    <small class="text-muted">{{ $post->date }}</small>

                    <div class="d-flex justify-content-center align-items-center" style="margin-top: 75px;">
                        @if($post->external_link)
                            <a href="{{ $post->external_link }}" target="_blank" class="btn btn-danger btn-md">
                                {{ $post->external_link_button ?? 'Click here to access' }}
                            </a>
                        @endif
                    </div>
                    @if($post->file_url)
                    <div class="d-flex justify-content-center align-items-center" style="margin-top: 50px;">
                    <a href="{{ $post->file_url }}" target="_blank" class="btn btn-primary btn-md">
                                    {{ $post->button_text_en ? $post->button_text_en : 'Download English here' }}
                                </a>
</div>
                    @endif
                    @if($post->file_url_es)
                    <div class="d-flex justify-content-center align-items-center" style="margin-top: 50px;">
                    <a href="{{ $post->file_url }}" target="_blank" class="btn btn-primary btn-md">
                                    {{ $post->button_text_en ? $post->button_text_en : 'Download English here' }}
                                </a>
</div>
                    @endif
                   
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div>
    </div>
</div>
@endsection
