@extends('layouts.app')

@section('title', '#somosAETH | Bookstore')

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction')


@section('content')

    <!-- shop-details -->
    <section class="shop-details">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-9 col-md-12 col-sm-12 content-side">

                    <div class="shop-details-content">
                        <div class="row clearfix">
                            <div class="col-lg-5 col-md-12 col-sm-12 image-column"
                                style="width: 410px; height: 410px; object-fit: cover;">
                                <figure class="image-box">
                                    <a href="{{ isset($product->image) && $product->image ? $product->image : asset('assets/images/shop/no_image.jpg') }}"
                                        class="lightbox-image" data-fancbox><img
                                            src="{{ isset($product->image) && $product->image ? $product->image : asset('assets/images/shop/no_image.jpg') }}"
                                            alt=""></a>
                                </figure>
                            </div>
                            <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                                <div class="content-box">
                                    <h2>{{ $product->name }}</h2>
                                    <div class="rating-box">
                                        <ul class="rating clearfix">
                                            <li><i class="icon-53"></i></li>
                                            <li><i class="icon-53"></i></li>
                                            <li><i class="icon-53"></i></li>
                                            <li><i class="icon-53"></i></li>
                                            <li><i class="icon-53"></i></li>
                                        </ul>
                                    </div>
                                    <h5><b>${{ $product->price }}</b></h5>
                                    <p>{{ $product->description ?? ''}}</p>
                                    <div class="addto-cart-box p_relative d_block mb_25">
                                        <ul class="clearfix">

                                            <li class="p_relative d_block float_left mr_10">
                                                <div class="btn-box">
                                                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                                        @csrf <!-- Add CSRF token for security -->
                                                        <button type="submit" class="theme-btn-one">Add to cart</button>
                                                    </form>
                                                </div>

                                            </li>

                                            <li class="like-box p_relative d_block float_left"><a
                                                    href="{{ route('cart.show') }}"
                                                    class="d_iblock p_relative fs_20 lh_55 w_50 h_50 centred b_radius_50"><i
                                                        class="icon-23"></i>
                                                    <span class="cart-count"
                                                        style="display: {{ session('cart_count', 0) }};">
                                                        {{ session('cart_count', 0) }}
                                                    </span></a> My Cart</li>


                                        </ul>
                                    </div>
                                    <div class="addto-cart-box p_relative d_block mb_25">
                                        <ul class="clearfix">

                                            <div class="btn-box">
                                                <form action="{{ route('bookstore') }}" method="GET">
                                                    @csrf <!-- Add CSRF token for security -->
                                                    <button type="submit" class="theme-btn-one">Bookstore</button>
                                                </form>
                                            </div>
                                        </ul>
                                    </div>
                                    <!-- <div class="other-option">
                                                        <ul class="list clearfix">
                                                            <li><span>Category: </span> <a href=""> Chicken</a>, <a href="">Launch</a></li>
                                                            <li><span>Tags:</span> <a href="">Healthy</a>, <a href="">Organic</a>, <a
                                                                    href="">Chicken</a></li>
                                                        </ul>
                                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-discription p_relative d_block">
                        <div class="tabs-box">
                            <div class="tab-btn-box p_relative d_block">
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-1">Details</li>
                                    <!--  <li class="tab-btn" data-tab="#tab-2">Reviews (1)</li> -->
                                </ul>
                            </div>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-1">
                                    <div class="content-box">
                                        <h3>Description</h3>
                                        <p>{{ $product->description ?? ''}}</p>
                                    </div>
                                </div>
                                <!--    <div class="tab" id="tab-2">
                                                    <div class="customer-inner">
                                                        <div class="customer-review p_relative d_block pb_65 mb_65">
                                                            <h4 class="p_relative d_block fs_20 lh_30 fw_medium mb_40">Chicken & vegetable
                                                                fry</h4>
                                                            <div class="comment-box p_relative d_block pl_110">
                                                                <figure class="comment-thumb p_absolute l_0 t_0 w_80 h_80"><img
                                                                        src="assets/images/shop/comment-1.jpg" alt=""></figure>
                                                                <h5 class="d_block fs_18 lh_20 fw_medium">Keanu Reeves<span
                                                                        class="d_iblock fs_16"> - May 1, 2021</span></h5>
                                                                <ul class="rating clearfix mb_15">
                                                                    <li class="p_relative d_iblock pull-left mr_3 fs_13"><i
                                                                            class="fas fa-star"></i></li>
                                                                    <li class="p_relative d_iblock pull-left mr_3 fs_13"><i
                                                                            class="fas fa-star"></i></li>
                                                                    <li class="p_relative d_iblock pull-left mr_3 fs_13"><i
                                                                            class="fas fa-star"></i></li>
                                                                    <li class="p_relative d_iblock pull-left mr_3 fs_13"><i
                                                                            class="fas fa-star"></i></li>
                                                                    <li class="p_relative d_iblock pull-left mr_5 fs_13"><i
                                                                            class="far fa-star"></i></li>
                                                                </ul>
                                                                <div class="text">
                                                                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui
                                                                        officia deserunt mollit anim est laborum. Sed perspiciatis unde
                                                                        omnis natus error sit voluptatem accusa dolore mque laudant totam
                                                                        rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi
                                                                        arch tecto beatae vitae dicta.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="customer-comments p_relative">
                                                            <h4 class="p_relative d_block fs_20 lh_30 fw_medium mb_25">Be First to Add a
                                                                Review</h4>
                                                            <div class="rating-box clearfix mb_12">
                                                                <h6 class="p_relative d_iblock fs_16 fw_medium mr_15 float_left">Your Rating
                                                                </h6>
                                                                <ul class="rating p_relative d_block clearfix float_left">
                                                                    <li class="p_relative d_iblock fs_12 lh_26 float_left mr_3"><i
                                                                            class="far fa-star"></i></li>
                                                                    <li class="p_relative d_iblock fs_12 lh_26 float_left mr_3"><i
                                                                            class="far fa-star"></i></li>
                                                                    <li class="p_relative d_iblock fs_12 lh_26 float_left mr_3"><i
                                                                            class="far fa-star"></i></li>
                                                                    <li class="p_relative d_iblock fs_12 lh_26 float_left mr_3"><i
                                                                            class="far fa-star"></i></li>
                                                                    <li class="p_relative d_iblock fs_12 lh_26 float_left"><i
                                                                            class="far fa-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <form action="" method="post"
                                                                class="comment-form default-form">
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_15">
                                                                        <label
                                                                            class="p_relative d_block fs_16 mb_3 font_family_poppins">Your
                                                                            Review</label>
                                                                        <textarea name="message"></textarea>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_15">
                                                                        <label
                                                                            class="p_relative d_block fs_16 mb_3 font_family_poppins">Your
                                                                            Name</label>
                                                                        <input type="text" name="name" required="">
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_15">
                                                                        <label
                                                                            class="p_relative d_block fs_16 mb_3 font_family_poppins">Your
                                                                            Email</label>
                                                                        <input type="email" name="email" required="">
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn m_0">
                                                                        <button type="submit" class="theme-btn-one">Submit Your
                                                                            Review</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!--  <div class="related-product">
                                        <div class="title-text p_relative d_block mb_35">
                                            <h2 class="fs_30 lh_40 fw_medium color_black">Related Products</h2>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                                <div class="shop-block-one">
                                                    <div class="inner-box">
                                                        <div class="image-box">
                                                            <figure class="image"><img src="assets/images/shop/shop-1.png" alt=""></figure>
                                                            <ul class="info clearfix">
                                                                <li><a href=""><i class="icon-51"></i></a></li>
                                                                <li><a href="assets/images/shop/shop-1.png" class="lightbox-image"
                                                                        data-fancybox="gallery"><i class="icon-52"></i></a></li>
                                                            </ul>
                                                            <div class="btn-box">
                                                                <a href="" class="theme-btn-one">Add to cart</a>
                                                            </div>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h4><a href="">Wooden Tea Table</a></h4>
                                                            <ul class="rating clearfix">
                                                                <li><i class="icon-53"></i></li>
                                                                <li><i class="icon-53"></i></li>
                                                                <li><i class="icon-53"></i></li>
                                                                <li><i class="icon-53"></i></li>
                                                                <li><i class="icon-53"></i></li>
                                                            </ul>
                                                            <h5>$19:20</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                                <div class="shop-block-one">
                                                    <div class="inner-box">
                                                        <div class="image-box">
                                                            <figure class="image"><img src="assets/images/shop/shop-2.png" alt=""></figure>
                                                            <ul class="info clearfix">
                                                                <li><a href=""><i class="icon-51"></i></a></li>
                                                                <li><a href="assets/images/shop/shop-2.png" class="lightbox-image"
                                                                        data-fancybox="gallery"><i class="icon-52"></i></a></li>
                                                            </ul>
                                                            <div class="btn-box">
                                                                <a href="" class="theme-btn-one">Add to cart</a>
                                                            </div>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h4><a href="">White Lamp Handcraft</a></h4>
                                                            <ul class="rating clearfix">
                                                                <li><i class="icon-53"></i></li>
                                                                <li><i class="icon-53"></i></li>
                                                                <li><i class="icon-53"></i></li>
                                                                <li><i class="icon-53"></i></li>
                                                                <li><i class="icon-53"></i></li>
                                                            </ul>
                                                            <h5>$16:20</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                                <div class="shop-block-one">
                                                    <div class="inner-box">
                                                        <div class="image-box">
                                                            <figure class="image"><img src="assets/images/shop/shop-3.png" alt=""></figure>
                                                            <ul class="info clearfix">
                                                                <li><a href=""><i class="icon-51"></i></a></li>
                                                                <li><a href="assets/images/shop/shop-3.png" class="lightbox-image"
                                                                        data-fancybox="gallery"><i class="icon-52"></i></a></li>
                                                            </ul>
                                                            <div class="btn-box">
                                                                <a href="" class="theme-btn-one">Add to cart</a>
                                                            </div>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h4><a href="">Armchair Black Leather</a></h4>
                                                            <ul class="rating clearfix">
                                                                <li><i class="icon-53"></i></li>
                                                                <li><i class="icon-53"></i></li>
                                                                <li><i class="icon-53"></i></li>
                                                                <li><i class="icon-53"></i></li>
                                                                <li><i class="icon-53"></i></li>
                                                            </ul>
                                                            <h5>$18:20</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                </div>
                <!--      <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                                    <div class="shop-sidebar">
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
                                                <li><a href="">Decor</a></li>
                                                <li><a href="">Furnitures</a></li>
                                                <li><a href="">Clothing</a></li>
                                                <li><a href="">Electronics</a></li>
                                                <li><a href="">Accessories</a></li>
                                                <li><a href="">Uncategories</a></li>
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
                                    </div>
                                </div> -->
            </div>
        </div>
    </section>
    <!-- shop-details end -->

@endsection
