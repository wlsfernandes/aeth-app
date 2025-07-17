@extends('layouts.app')

@section('title', 'González Center | AETH')
@section('meta-description', __('meta.description'))
@section('meta-keywords', __('meta.keywords'))


<!-- Content here -->

@section('content')
    <section class="page-title centred">
        <div class="bg-layer" style="background-image: url(assets/images/banner/gonzalez_center_banner.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Centro de Recursos Justo & Catherine González</h1>
            </div>
        </div>
    </section>
    <section class="about-section bg-color-1 p_relative sec-pad">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="content_block_one">
                        <div class="content-box p_relative">
                            <div class="text mb_35">
                                <!-- Image floated to the left with margin -->
                                <figure class="image image-1" style="float: left; margin: 0 20px 20px 0;">
                                    <img src="assets/images/gallery/meet1.jpg" alt=""
                                        style="max-width: 500px; height: auto;">
                                </figure>
                                <p>@lang('gonzalez.p1')</p>
                                <p style="margin-top:20px;">@lang('gonzalez.p2')</p>
                                <p style="margin-top:20px;">@lang('gonzalez.p3')</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Donation form -->
            @include('pages.payments.donation.page', ['type' => 'Donation', 'program' => 'González Center']);
            <!-- Donation form end -->
        </div>
    </section>

@endsection