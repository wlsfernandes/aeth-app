@extends('layouts.app')

@section('title', '#somosAETH | Payment') 

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction') 


<!-- Content here -->

@section('content') 
<div class="container d-flex justify-content-center mt-5 mb-5">
    <div class="col-md-12">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                <i class="fas fa-check-circle"></i> <!-- Success icon -->
                {{ session('success') }}
            </div>
        @endif
        @if($errors->has('email'))
            <div class="alert alert-warning">
                {!! $errors->first('email') !!}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        {{-- Skip the email error to avoid duplicate --}}
                        @if ($error !== $errors->first('email'))
                            <li><i class="bx bx-error"></i> {{ $error }}</li>
                        @endif
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <span><b>@lang('header.choose_payment')</b></span>
            <div class="accordion" id="accordionExample" style="color:#4A235A;margin-top:20px;">
                <div class="card">
                    <form id="payment-form"
                        action="{{ env('APP_ENV') === 'production' ? secure_url('/handle-payment') : url('/handle-payment') }}"
                        method="POST" class="default-form">
                        @csrf
                        <div class="card-header p-0">
                            <h2 class="mb-0">
                                <button class="btn btn-light btn-block text-left p-3 rounded-0" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
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
                                <div class="mb-3">

                                    <input type="number" name="amount" id="amount"
                                        value="{{ number_format($amount ?? 0, 2, '.', '') }}" class="form-control"
                                        required min="1" step="0.01">

                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">@lang('header.first_name'):</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control"
                                        placeholder="Your first name..." required>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">@lang('header.last_name'):</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control"
                                        placeholder="Your last name..." required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">@lang('header.email'):</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="email..." required>
                                </div>
                                <!-- Card Holder's Name -->
                                <div class="mb-3">
                                    <label for="card-holder-name" class="form-label">@lang('header.card_name')</label>
                                    <input type="text" id="card-holder-name" name="card_holder_name"
                                        class="form-control" placeholder="Name on card" required>
                                </div>

                                <!-- Stripe Elements Placeholder -->
                                <div class="mb-3">
                                    <label for="card-element" class="form-label">@lang('header.credit_debit')</label>
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
                                type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span>Paypal</span>
                                    <img src="{{ asset('assets/images/icons/paypal.jpg') }}" alt="Paypal"
                                        style="width: 45px; height: auto; margin-right: 5px;">
                                </div>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <input type="text" class="form-control" placeholder="Paypal email">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://js.stripe.com/v3/"></script> <!-- Load Stripe.js -->
<script>
    // Initialize Stripe with your publishable key
    const stripe = Stripe('{{ env('STRIPE_KEY') }}');

    // Create an instance of Elements
    const elements = stripe.elements();

    // Create an instance of the card Element
    const cardNumber = elements.create('cardNumber');
    cardNumber.mount('#card-number-element');

    // Create an instance of the CVC Element
    const cardCvc = elements.create('cardCvc');
    cardCvc.mount('#card-cvc-element');

    // Create an instance of the expiry date Element
    const cardExpiry = elements.create('cardExpiry');
    cardExpiry.mount('#card-expiry-element');

    // Handle form submission
    const form = document.getElementById('payment-form');
    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        // Disable the form to prevent multiple submissions
        form.querySelector('button').disabled = true;

        // Create a PaymentMethod using the card elements
        const { error, paymentMethod } = await stripe.createPaymentMethod({
            type: 'card',
            card: cardNumber,
            billing_details: {
                name: document.getElementById('card-holder-name').value,
                address: {
                    line1: document.getElementById('address') ? document.getElementById('address').value : '',
                    city: document.getElementById('city') ? document.getElementById('city').value : '',
                    state: document.getElementById('state') ? document.getElementById('state').value : '',
                    postal_code: document.getElementById('zip') ? document.getElementById('zip').value : ''
                }
            }
        });

        if (error) {
            // Display error message in #card-errors
            document.getElementById('card-errors').textContent = error.message;
            form.querySelector('button').disabled = false;
        } else {
            // Clear previous errors
            document.getElementById('card-errors').textContent = '';

            // Add the PaymentMethod ID to the hidden input field
            document.getElementById('payment-method-id').value = paymentMethod.id;

            // Submit the form
            form.submit();
        }
    });
</script>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');

    body {
        /*      background-color: #f5eee7; */
        font-family: "Poppins", sans-serif;
        font-weight: 300;
    }

    .container {
        height: 100vh;
    }

    .card {
        border: none;
    }

    .card-header {
        padding: 0.5rem 1rem;
        background-color: rgba(0, 0, 0, 0.03);
    }

    .btn-light:focus {
        background-color: #e2e6ea;
        border-color: #dae0e5;
        box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
    }

    .form-control {
        height: 50px;
        border: 2px solid #eee;
        border-radius: 6px;
        font-size: 14px;
    }

    .form-control:focus {
        border-color: #039be5;
    }

    .input {
        position: relative;
    }

    .input i {
        position: absolute;
        top: 16px;
        left: 11px;
        color: #989898;
    }

    .input input {
        text-indent: 25px;
    }

    .card-text {
        font-size: 13px;
        margin-left: 6px;
    }

    .certificate-text {
        font-size: 12px;
    }

    .billing {
        font-size: 11px;
    }

    .super-price {
        font-size: 22px;
    }

    .super-month {
        font-size: 11px;
    }

    .line {
        color: #bfbdbd;
    }

    .free-button {
        width: 100%;
        border-radius: 6px;
        background: #8d4b0c;
        color: white;
        padding: 10px;
        border: none;
    }

    .pay-button {
        width: 100%;
        border-radius: 6px;
        background: #2ecc71;
        color: white;
        padding: 10px;
        border: none;
    }

    .pay-button:hover {
        background: #27ae60;
    }

    .stripe-element-container {
        border: 1px solid #d7d7d7;
        border-radius: 6px;
        padding: 10px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
</style>

@endsection