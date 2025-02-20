@extends('layouts.app')

@section('title', '#somosAETH | Payment')

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction')

@section('content')
    <section>
        <div class="container d-flex justify-content-center mt-5 mb-5" style="height:100%">
            <div class="col-md-12">
                <div class="card" style="margin-bottom: 300px !important;">
                    <span><b>@lang('header.choose_payment')</b></span>
                    <div class="accordion" id="accordionExample" style="color:#4A235A;margin-top:20px;">

                        <!-- Credit Card Payment - Collapsed by Default -->
                        <div class="card">
                            <div class="card-header p-0">
                                <h2 class="mb-0">
                                    <button class="btn btn-light btn-block text-left p-3 rounded-0 collapsed"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>@lang('header.credit_card')</span>
                                            <div class="icons">
                                                <img src="{{ asset('assets/images/icons/locked-card.png') }}"
                                                    style="width: 40px; height: auto; margin-right: 5px;">
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                @include('pages.payments.membership.credit-card')
                            </div>
                        </div>

                        <!-- PayPal Payment Option -->
                        <div class="card">
                            <div class="card-header p-0">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom"
                                        type="button" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>Paypal</span>
                                            <img src="{{ asset('assets/images/icons/paypal.jpg') }}" alt="Paypal"
                                                style="width: 65px; height: auto; margin-right: 5px;">
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    @include('pages.payments.membership.paypal')
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


    </section>
@endsection
