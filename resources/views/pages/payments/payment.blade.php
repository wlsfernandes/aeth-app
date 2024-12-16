@extends('layouts.app')

@section('title', '#somosAETH | Payment') 

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction') 


<!-- Content here -->

@section('content') 
<section>
    <div class="container d-flex justify-content-center mt-5 mb-5" style="height:100%">
        <div class="col-md-12">
           
            <div class="card" style="margin-bottom: 300px !important;">
                <span><b>@lang('header.choose_payment')</b></span>
                <div class="accordion" id="accordionExample" style="color:#4A235A;margin-top:20px;">
                    <div class="card">
                        <form id="payment-form"
                            action="{{ url('/handle-payment') }}"
                            method="POST" class="default-form">
                            @csrf
                            <div class="card-header p-0">
                                <h2 class="mb-0">
                                    <button class="btn btn-light btn-block text-left p-3 rounded-0"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
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
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body payment-card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label for="amount" class="form-label">@lang('header.amount_usd')</label>
                                        <div class="icons">
                                            <img src="{{ asset('assets/images/icons/visa.jpg') }}" alt="Visa"
                                                style="width: 30px; height: auto; margin-right: 5px;">
                                            <img src="{{ asset('assets/images/icons/mastercard.jpg') }}" alt="Master"
                                                style="width: 30px; height: auto; margin-right: 5px;">
                                            <img src="{{ asset('assets/images/icons/americanexpress.jpg') }}" alt="Amex"
                                                style="width: 30px; height: auto; margin-right: 5px;">
                                            <img src="{{ asset('assets/images/icons/discover.jpg') }}" alt="Discover"
                                                style="width: 30px; height: auto; margin-right: 5px;">
                                        </div>
                                    </div>
                                    <input type="hidden" name="type" value="{{ $type ?? '' }}">
                                    <input type="hidden" name="program" value="{{ $program ?? '' }}">
                                    <input type="hidden" name="membership_plan" value="{{ $membership_plan ?? '' }}">
                                    <input type="hidden" name="period" value="{{ old('period', $period ?? '') }}">

                                    <div class="mb-3">

                                        <input type="number" name="amount" id="amount"
                                            value="{{ number_format($amount ?? 0, 2, '.', '') }}" class="form-control"
                                            required min="1" step="0.01">

                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">@lang('header.first_name'):</label>
                                        <input type="text" id="first_name" name="first_name" class="form-control"
                                            placeholder="@lang('header.first_name')" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">@lang('header.last_name'):</label>
                                        <input type="text" id="last_name" name="last_name" class="form-control"
                                            placeholder="@lang('header.last_name')" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">@lang('header.email'):</label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="@lang('header.email')" required>
                                    </div>
                                    <!-- Card Holder's Name -->
                                    <div class="mb-3">
                                        <label for="card-holder-name"
                                            class="form-label">@lang('header.card_name')</label>
                                        <input type="text" id="card-holder-name" name="card_holder_name"
                                            class="form-control" placeholder="@lang('header.name_on_card')" required>
                                    </div>

                                    <!-- Stripe Elements Placeholder -->
                                    <div class="mb-3">
                                        <label for="card-element"
                                            class="form-label">@lang('header.credit_debit')</label>
                                        <div id="card-number-element" class="stripe-element-container">
                                            <!-- Stripe's Card Number Element will be inserted here -->
                                        </div>
                                        <div id="card-expiry-element" class="stripe-element-container mr-2">
                                            <!-- Stripe's Expiry Date Element will be inserted here -->
                                        </div>
                                        <div id="card-cvc-element" class="stripe-element-container mt-3">
                                            <!-- Stripe's CVC Element will be inserted here -->
                                        </div>
                                        <div id="card-errors" class="text-danger mt-2" role="alert"></div>
                                    </div>

                                    <input type="hidden" name="payment_method_id" id="payment-method-id">

                                    <button type="submit" id="card-button" class="btn-block mt-3"
                                        style="background-color:#330033;color:#fff;height:50px;">
                                        @lang('header.pay_now')
                                    </button>

                                    <p class="small" style="color:#330033;margin-top:20px;">
                                        <img src="{{ asset('assets/images/icons/locked-card.png') }}"
                                            style="width: 40px; height: auto; margin-right: 15px;">
                                        @lang('header.disclaimer')</i>
                                    </p>
                                </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-header p-0" id="headingTwo">
                            <h2 class="mb-0">
                                <button
                                    class="btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom"
                                    type="button" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span>Paypal</span>
                                        <img src="{{ asset('assets/images/icons/paypal.jpg') }}" alt="Paypal"
                                            style="width: 45px; height: auto; margin-right: 5px;">
                                    </div>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <input type="text" class="form-control" placeholder="Paypal email">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- STRIPE PAYMENT -->
   @include('stripe.script') 
  <!-- STRIPE PAYMENT -->  
   
</section>
@endsection