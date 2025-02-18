@extends('layouts.app')

@section('title', '#somosAETH | Payment')

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction')

@section('content')
    <section>
        <div class="container d-flex justify-content-center mt-5 mb-5" style="height:100%">
            <div class="col-md-12">
                <div class="card" style="margin-bottom: 300px !important;">
                    <div class="card-body">
                        <form id="payment-form" action="{{ route(name: 'cartPayment')  }}" method="POST">
                            @csrf
                            <form id="payment-form" action="{{ route('cartPayment')  }}" method="POST" class="default-form">
                                @csrf
                                <div class="card-body payment-card-body">
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
                                    <div class="row justify-content-center text-center">
                                        <div class="col-md-3">
                                            <label for="amount" class="form-label">@lang('header.amount_usd')</label>
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input type="number" name="amount" id="amount"
                                                    value="{{ number_format($amount ?? 0, 2, '.', '') }}"
                                                    class="form-control" required min="1" step="0.01" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="shipment_cost"
                                                class="form-label">@lang('header.shipment_cost')</label>
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input type="number" name="shipment_cost" id="shipment_cost"
                                                    value="{{ number_format($shipment_cost ?? 0, 2, '.', '') }}"
                                                    class="form-control" required min="1" step="0.01" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="taxAmount" class="form-label">@lang('header.taxAmount')</label>
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input type="number" name="taxAmount" id="taxAmount"
                                                    value="{{ number_format($taxAmount ?? 0, 2, '.', '') }}"
                                                    class="form-control" required min="1" step="0.01" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="totalAmount" class="form-label"
                                                style="color: #4A235A; font-weight: bold;">
                                                @lang('header.totalAmount')
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-text"
                                                    style="background-color: #4A235A; color: white;">$</span>
                                                <input type="number" name="totalAmount" id="totalAmount"
                                                    value="{{ number_format($totalAmount ?? 0, 2, '.', '') }}"
                                                    class="form-control" required min="1" step="0.01" disabled
                                                    style="color: #4A235A; font-weight: bold;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="card-holder-name" class="form-label">@lang('header.card_name')</label>
                                        <input type="text" id="card-holder-name" name="card_holder_name"
                                            class="form-control" placeholder="@lang('header.name_on_card')" required>
                                    </div>
                                    <!-- Stripe Elements Placeholder -->
                                    <div class="mb-3">
                                        <label for="card-element" class="form-label">@lang('header.credit_debit')</label>
                                        <div id="card-number-element" class="stripe-element-container">
                                            <!-- Stripe's Card Number Element will be inserted here -->
                                        </div>
                                        <div id="card-expiry-element" class="stripe-element-container mt-3">
                                            <!-- Stripe's Expiry Date Element will be inserted here -->
                                        </div>
                                        <div id="card-cvc-element" class="stripe-element-container mt-3">
                                            <!-- Stripe's CVC Element will be inserted here -->
                                        </div>
                                        <div id="card-errors" class="text-danger mt-2" role="alert"></div>
                                    </div>

                                    <input type="hidden" name="payment_method_id" id="payment-method-id">
                                    <input type="hidden" name="type" value="Bookstore">
                                    <input type="hidden" name="first_name" value="{{ $first_name }}">
                                    <input type="hidden" name="last_name" value="{{ $last_name }}">
                                    <input type="hidden" name="email" value="{{ $email }}">
                                    <input type="hidden" name="program" value="AETH">
                                    <input type="hidden" name="amount"
                                        value="{{ number_format($amount ?? 0, 2, '.', '') }}">
                                    <input type="hidden" name="weight" id="weight"
                                        value="{{ number_format($weight ?? 0, 2, '.', '') }}">
                                    <input type="hidden" name="hidden_shipment_cost" id="hidden_shipment_cost"
                                        value="{{  number_format($shipment_cost ?? 0, 2, '.', '')}}">
                                    <input type="hidden" name="taxAmount" id="taxAmount"
                                        value="{{  number_format($taxAmount ?? 0, 2, '.', '')}}">

                                    @if(session('cart') && count(session('cart')) > 0)
                                        @foreach($cartItems as $index => $product)
                                            <input type="hidden" name="products[{{ $index }}][id]" value="{{ $product['id'] }}">
                                            <input type="hidden" name="products[{{ $index }}][quantity]"
                                                value="{{ $product['quantity'] }}">
                                        @endforeach

                                    @endif

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

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- STRIPE PAYMENT -->
        @include('stripe.script')
        <!-- STRIPE PAYMENT -->
    </section>
@endsection
