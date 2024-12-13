@extends('layouts.app')

@section('title', '#somosAETH | Bookstore') 

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction') 


<!-- Content here -->

@section('content') 
<!-- Page Title -->
<!--<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/background/page-title-3.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Our Shop</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>Our Shop</li>
            </ul>
        </div>
    </div>
</section> -->
<!-- End Page Title -->
<!-- shop-page-section -->
<section class="shop-page-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                <div class="shop-sidebar">
                    <div class="search-widget">
                        <div class="widget-title">
                            <h3>@lang('bookstore.search')</h3>
                        </div>
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="search" name="search-field" placeholder="Search" required="">
                                <button type="submit"><i class="icon-1"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="category-widget">
                        <div class="widget-title">
                            <h3>@lang('bookstore.categories')</h3>
                        </div>
                        <ul class="category-list clearfix">
                            @foreach ($categorys as $category)
                                <li><a href="">{{$category->name ?? ''}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
            <!-- list product -->
            <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                <div class="our-shop">
                    <div class="row clearfix">
                        @forelse($products as $product)
                            <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                <div class="shop-block-one">
                                    <div class="inner-box">
                                        <div class="image-box" style="width: 300px; height: 370px; object-fit: cover;">
                                            <figure class="image">
                                                <img src="{{ isset($product->image) && $product->image ? $product->image : asset('assets/images/shop/no_image.jpg') }}"
                                                    alt="{{ $product->name }}">
                                            </figure>

                                            <ul class="info clearfix">
                                                <li>
                                                    <a href="{{ route('product.details', $product->id) }}">
                                                        <i class="icon-53"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ isset($product->image) && $product->image ? $product->image : asset('assets/images/shop/no_image.jpg') }}"
                                                        class="lightbox-image" data-fancybox="gallery">
                                                        <div class="image-frame">
                                                            <img src="{{ isset($product->image) && $product->image ? $product->image : asset('assets/images/shop/no_image.jpg') }}"
                                                                alt="Product Image" class="product-image">
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="btn-box">
                                                <a href="{{ route('product.details', $product->id) }}"
                                                    class="theme-btn-one">View Details</a>
                                            </div>
                                        </div>
                                        <div class="lower-content">
                                            <h4><a
                                                    href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a>
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
                                            <h5>${{ number_format($product->price, 2) }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-center">@lang('bookstore.no_products')</p>
                        @endforelse
                    </div>
                </div>
                <div class="pagination-wrapper centred">
                    <ul class="pagination clearfix">
                        @if ($products->onFirstPage())
                            <li><a href="#" aria-disabled="true"><i class="icon-56"></i></a></li>
                        @else
                            <li><a href="{{ $products->previousPageUrl() }}"><i class="icon-56"></i></a></li>
                        @endif

                        @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                            <li>
                                <a href="{{ $url }}" class="{{ $products->currentPage() === $page ? 'current' : '' }}">
                                    {{ $page }}
                                </a>
                            </li>
                        @endforeach

                        @if ($products->hasMorePages())
                            <li><a href="{{ $products->nextPageUrl() }}"><i class="icon-55"></i></a></li>
                        @else
                            <li><a href="#" aria-disabled="true"><i class="icon-55"></i></a></li>
                        @endif
                    </ul>
                </div>
                <!-- list product -->
            </div>
        </div>

</section>
<!-- shop-page-section end -->
@endsection