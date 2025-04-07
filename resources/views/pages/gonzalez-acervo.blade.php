@extends('layouts.app')

@section('title', '#somosAETH | Bookstore')

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction')


<!-- Content here -->

@section('content')

    <section class="shop-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                    <div class="shop-sidebar">
                        <div class="search-widget">
                            <div class="widget-title">
                                <h3>@lang('bookstore.search')</h3>
                            </div>
                            <form action="{{ route('bookstore') }}" method="GET">
                                <div class="form-group">
                                    <input type="search" name="search-field" placeholder="Search"
                                        value="{{ request('search-field') }}" required>
                                    <button type="submit"><i class="icon-1"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="category-widget">
                            <div class="widget-title">
                                <h3>@lang('bookstore.categories')</h3>
                            </div>
                            <ul class="category-list clearfix">
                                <li><a href="">xxxxxx</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- list digitalCollection -->
                <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                    <div class="our-shop">
                        <div class="row clearfix">
                            @forelse($digitalCollections as $digitalCollection)
                                <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image">
                                                    <img src="assets/images/shop/no_image.jpg"
                                                        style="width: 300px; height: 370px; object-fit: cover; display: block;">
                                                </figure>

                                                <ul class="info clearfix">
                                                    <li>
                                                        <a href="{{ route('details', $digitalCollection->id) }}">
                                                            <i class="bi bi-arrow-right"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ isset($digitalCollection->media) && $digitalCollection->media ? $digitalCollection->media : asset('assets/images/shop/no_image.jpg') }}"
                                                            class="lightbox-image" data-fancybox="gallery">
                                                            <div class="image-frame">
                                                                <img src="{{ isset($digitalCollection->media) && $digitalCollection->media ? $digitalCollection->media : asset('assets/images/shop/no_image.jpg') }}"
                                                                    alt="digitalCollection Image"
                                                                    class="digitalCollection-image">
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="{{ route('details', $digitalCollection->id) }}"
                                                        class="theme-btn-one">View Details</a>
                                                </div>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a
                                                        href="{{ route('details', $digitalCollection->id) }}">{{ $digitalCollection->title }}</a>
                                                </h4>
                                                <div class="rating-box">
                                                    <ul class="rating clearfix">
                                                        <li><i class="icon-53"></i></li>
                                                        <li><i class="icon-53"></i></li>
                                                        <li><i class="icon-53"></i></li>
                                                        <li><i class="icon-53"></i></li>
                                                        <li><i class="icon-53"></i></li>
                                                    </ul>
                                                </div>
                                                <h5>${{ number_format($digitalCollection->price, 2) }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-center">@lang('bookstore.no_digitalCollections')</p>
                            @endforelse
                        </div>
                    </div>
                    <div class="pagination-wrapper centred">
                        <ul class="pagination pagination-sm clearfix">
                            @if ($digitalCollections->onFirstPage())
                                <li><a href="#" aria-disabled="true"><i class="icon-56"></i></a></li>
                            @else
                                <li><a href="{{ $digitalCollections->previousPageUrl() }}"><i class="icon-56"></i></a></li>
                            @endif

                            @foreach ($digitalCollections->getUrlRange(1, $digitalCollections->lastPage()) as $page => $url)
                                <li>
                                    <a href="{{ $url }}"
                                        class="{{ $digitalCollections->currentPage() === $page ? 'current' : '' }}">
                                        {{ $page }}
                                    </a>
                                </li>
                            @endforeach

                            @if ($digitalCollections->hasMorePages())
                                <li><a href="{{ $digitalCollections->nextPageUrl() }}"><i class="icon-55"></i></a></li>
                            @else
                                <li><a href="#" aria-disabled="true"><i class="icon-55"></i></a></li>
                            @endif
                        </ul>
                    </div>

                    <!-- list digitalCollection -->
                </div>
            </div>

    </section>
    <!-- shop-page-section end -->
@endsection