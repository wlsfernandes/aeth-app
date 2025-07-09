@extends('layouts.template')

@section('title', __('page.title'))

@section('content')

    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
        <div class="rbt-banner-content">
            <!-- Start Banner Content Top  -->
            <div class="rbt-banner-content-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">

                            <!-- Title + Badge -->
                            <div class="title-wrapper">
                                <h1 class="title mb--0">{{ __('pages.all_pages') }}</h1>
                                <a href="#" class="rbt-badge-2">
                                    <div class="image">📄</div> {{ $simplePages->total() }} {{ __('pages.articles') }}
                                </a>
                            </div>

                            <p class="description">{{ __('pages.description') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cards Section -->
    <div class="rbt-blog-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 mt_dec--30">

                    @forelse ($simplePages as $page)
                        <!-- Start Card -->
                        <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                            <div class="rbt-card-img">
                                <a href="{{ route('simplePage.show', $page->slug) }}">
                                    <img src="{{ asset($page->image_url ?? 'assets/images/blog/blog-card-02.jpg') }}"
                                        alt="Page image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title">
                                    <a href="{{ route('simplePage.show', $page->slug) }}">
                                        {{ $page->{'title_' . app()->getLocale()} ?? $page->title_en }}
                                    </a>
                                </h5>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="{{ route('simplePage.show', $page->slug) }}">
                                        {{ __('page.read_article') }}
                                        <i>
                                            <svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                    <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                    <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                                </g>
                                            </svg>
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    @empty

                    @endforelse
                </div>
            </div>

            <!-- Pagination -->
            <div class="row">
                <div class="pagination-wrapper centred mt-5">
                    <ul class="pagination clearfix">
                        @if ($simplePages->onFirstPage())
                            <li><a href="#" aria-disabled="true"><i class="icon-56"></i></a></li>
                        @else
                            <li><a href="{{ $simplePages->previousPageUrl() }}"><i class="icon-56"></i></a></li>
                        @endif

                        @foreach ($simplePages->getUrlRange(1, $simplePages->lastPage()) as $pageNumber => $url)
                            <li>
                                <a href="{{ $url }}" class="{{ $simplePages->currentPage() === $pageNumber ? 'current' : '' }}">
                                    {{ $pageNumber }}
                                </a>
                            </li>
                        @endforeach

                        @if ($simplePages->hasMorePages())
                            <li><a href="{{ $simplePages->nextPageUrl() }}"><i class="icon-55"></i></a></li>
                        @else
                            <li><a href="#" aria-disabled="true"><i class="icon-55"></i></a></li>
                        @endif
                    </ul>
                </div>
            </div>

        </div>
    </div>

@endsection