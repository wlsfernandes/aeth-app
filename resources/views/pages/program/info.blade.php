@extends('layouts.template')

@section('title', $simplePage->title_en ?? 'Simple Page')

@section('content')
    <div class="rbt-overlay-page-wrapper">
        <div class="breadcrumb-image-container breadcrumb-style-max-width">
            <div class="breadcrumb-image-wrapper">
                <div class="breadcrumb-dark">
                    <img src="{{ asset('assets/images/bg/bg-image-9.jpg') }}" alt="{{ $simplePage->title_en }}">
                </div>
            </div>
            <div class="breadcrumb-content-top text-center">
                <ul class="meta-list justify-content-center mb--10">
                    @if ($simplePage->program && $simplePage->program->humanResource)
                        @php $hr = $simplePage->program->humanResource; @endphp
                        <li class="list-item">
                            <div class="author-thumbnail">
                                <img src="{{ asset($hr->photo_url ?? 'assets/images/testimonial/client-06.png') }}"
                                    alt="{{ $hr->name }}">
                            </div>
                            <div class="author-info">
                                <a href="#"><strong>{{ $hr->name }}</strong></a>
                                @if($simplePage->program)
                                    in <a href="#"><strong>{{ $simplePage->program->name }}</strong></a>
                                @endif
                            </div>
                        </li>
                    @endif

                    @if ($simplePage->date_of_publication)
                        <li class="list-item">
                            <i class="feather-clock"></i>
                            <span>{{ $simplePage->date_of_publication->format('M d, Y') }}</span>
                        </li>
                    @endif
                </ul>

                <h1 class="title">
                    {{ $simplePage->{'title_' . app()->getLocale()} ?? $simplePage->title_en }}
                </h1>
            </div>
        </div>

        <div class="rbt-blog-details-area rbt-section-gapBottom breadcrumb-style-max-width">
            <div class="blog-content-wrapper rbt-article-content-wrapper">
                <div class="content text-center d-flex flex-column align-items-center">

                    {{-- Featured image --}}
                    @if ($simplePage->image_url)
                        <div class="post-thumbnail mb--30 position-relative wp-block-image alignwide">
                            <figure>
                                <img src="{{ asset($simplePage->image_url) }}" alt="Blog Image"
                                    class="img-fluid rounded mx-auto d-block">
                            </figure>
                        </div>
                    @endif

                    {{-- Summary --}}
                    @if ($simplePage->{'summary_' . app()->getLocale()} ?? $simplePage->summary_es)
                        <div class="mt-3 w-100 text-center">
                            {!! $simplePage->{'summary_' . app()->getLocale()} ?? $simplePage->summary_es !!}
                        </div>
                    @endif

                    {{-- Download Button --}}
                    @isset($simplePage->{app()->getLocale() === 'es' ? 'file_url_es' : (app()->getLocale() === 'pt_BR' ? 'file_url_ptBR' : 'file_url')})
                        <a class="rbt-btn btn-gradient icon-hover radius-round btn-md mt-4"
                            href="{{ asset($simplePage->{app()->getLocale() === 'es' ? 'file_url_es' : (app()->getLocale() === 'pt_BR' ? 'file_url_ptBR' : 'file_url')}) }}"
                            target="_blank" style="">
                            <span class="btn-text" style="">{{ __('Download File') }}</span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </a>
                    @endisset

                    {{-- External Link --}}
                    @if ($simplePage->external_link && $simplePage->external_link_button)
                        <a class="rbt-btn btn-gradient icon-hover radius-round btn-md mt-4"
                            href="{{ $simplePage->external_link }}" class="btn btn-secondary mt-4" target="_blank">
                            {{ $simplePage->external_link_button }}
                        </a>
                    @endif

                </div>

            </div>
        </div>
    </div>
@endsection