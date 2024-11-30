@extends('layouts.app')

@section('title', '#somosAETH | Bookstore') 

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction') 


<!-- Content here -->

@section('content') 
<!-- Page Title -->
<section class="page-title centred">
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
</section>
<!-- End Page Title -->
<!-- shop-page-section -->
<section class="shop-page-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                <!--    <div class="shop-sidebar">
                    <div class="search-widget">
                        <div class="widget-title">
                            <h3>Search</h3>
                        </div>
                        <form action="shop.html" method="post">
                            <div class="form-group">
                                <input type="search" name="search-field" placeholder="Search" required="">
                                <button type="submit"><i class="icon-1"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="category-widget">
                        <div class="widget-title">
                            <h3>Categories</h3>
                        </div>
                        <ul class="category-list clearfix">
                            <li><a href="shop-details.html">Decor</a></li>
                            <li><a href="shop-details.html">Furnitures</a></li>
                            <li><a href="shop-details.html">Clothing</a></li>
                            <li><a href="shop-details.html">Electronics</a></li>
                            <li><a href="shop-details.html">Accessories</a></li>
                            <li><a href="shop-details.html">Uncategories</a></li>
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <div class="widget-title">
                            <h3>Filter by Price</h3>
                        </div>
                        <div class="range-slider clearfix p_relative">
                            <div class="price-range-slider"></div>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <button class="filter-btn theme-btn-one">Filter</button>
                                </div>
                                <div class="pull-right mt_8">
                                    <p>Price:</p>
                                    <div class="title p_relative d_iblock"></div>
                                    <div class="input p_relative d_iblock"><input type="text" class="property-amount"
                                            name="field-name" readonly=""></div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>-->
            </div>
            <!-- list product -->
            <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                <div class="our-shop">
                    <div class="row clearfix">
                        @forelse($products as $product)
                            <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                <div class="shop-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image">
                                                <img src="{{ isset($product->image) && $product->image ? asset('assets/images/shop/' . $product->image) : asset('assets/images/shop/no_image.jpg') }}"
                                                    alt="{{ $product->name }}">
                                            </figure>

                                            <ul class="info clearfix">
                                                <li><a href="{{ route('product.details', $product->id) }}"><i
                                                            class="icon-51"></i></a></li>
                                                <li>
                                                    <a href="{{ isset($product->image) && $product->image ? asset('assets/images/shop/' . $product->image) : asset('assets/images/shop/no_image.jpg') }}"
                                                        class="lightbox-image" data-fancybox="gallery">
                                                        <i class="icon-52"></i>
                                                    </a>

                                                </li>
                                            </ul>
                                            <div class="btn-box">
                                                <a href="{{ route('cart.add', $product->id) }}" class="theme-btn-one">Add to
                                                    cart</a>
                                            </div>
                                        </div>
                                        <div class="lower-content">
                                            <h4><a
                                                    href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a>
                                            </h4>
                                            <ul class="rating clearfix">
                                                @for($i = 1; $i <= 5; $i++)
                                                    <li>
                                                        <i class="{{ $i <= $product->rating ? 'icon-53' : 'icon-54' }}"></i>
                                                    </li>
                                                @endfor
                                            </ul>
                                            <h5>${{ number_format($product->price, 2) }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-center">No products available.</p>
                        @endforelse
                    </div>
                </div>
                <div class="pagination-wrapper centred">
                    <ul class="pagination clearfix">
                        {{ $products->links() }}
                    </ul>
                </div>
            </div>
            <!-- list product -->
        </div>
    </div>
    </div>
</section>
<!-- shop-page-section end -->
@endsection