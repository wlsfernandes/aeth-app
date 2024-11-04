@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
  <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title-3.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Our Shop</h1>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- shop-page-section -->
        <section class="shop-page-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                        <div class="shop-sidebar">
                            <div class="search-widget">
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
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                    @foreach ($digitalCollections as $digitalCollection)
                    {{ Str::limit($digitalCollection->title, 20) }}
                    {{ Str::limit($digitalCollection->title, 20) }}
                        @endforeach
                        <div class="our-shop">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/shop/shop-1.png" alt=""></figure>
                                                <ul class="info clearfix">
                                                    <li><a href="shop-details.html"><i class="icon-51"></i></a></li>
                                                    <li><a href="assets/images/shop/shop-1.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-52"></i></a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="shop-details.html" class="theme-btn-one">Add to cart</a>
                                                </div>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="shop-details.html">Wooden Tea Table</a></h4>
                                                <ul class="rating clearfix">
                                                    <li><i class="icon-53"></i></li>
                                                    <li><i class="icon-53"></i></li>
                                                    <li><i class="icon-53"></i></li>
                                                    <li><i class="icon-53"></i></li>
                                                    <li><i class="icon-53"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-wrapper centred">
                                <ul class="pagination clearfix">
                                    <li><a href="shop.html"><i class="icon-56"></i></a></li>
                                    <li><a href="shop.html" class="current">1</a></li>
                                    <li><a href="shop.html">2</a></li>
                                    <li><a href="shop.html"><i class="icon-55"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-page-section end -->
@endsection