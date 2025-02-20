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
                        <form id="payment-form" method="POST">
                            @csrf
                            <input type="hidden" name="type" value="Bookstore">
                            <input type="hidden" name="program" value="AETH">

                            <input type="hidden" name="amount" value="{{ number_format($amount ?? 0, 2, '.', '') }}">
                            <input type="hidden" name="taxAmount" value="{{ number_format($taxAmount ?? 0, 2, '.', '') }}">
                            <input type="hidden" name="weight" id="weight"
                                value="{{ number_format($weight ?? 0, 2, '.', '') }}">
                            <input type="hidden" name="hidden_shipment_cost" id="hidden_shipment_cost">

                            @if(session('cart') && count(session('cart')) > 0)
                                @foreach($cartItems as $index => $product)
                                    <input type="hidden" name="products[{{ $index }}][id]" value="{{ $product['id'] }}">
                                    <input type="hidden" name="products[{{ $index }}][quantity]" value="{{ $product['quantity'] }}">
                                @endforeach

                            @endif
                            <div class="row justify-content-center text-center">
                                <div class="col-md-4">
                                    <label for="amount" class="form-label">@lang('header.amount_usd')</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" name="amount" id="amount"
                                            value="{{ number_format($amount ?? 0, 2, '.', '') }}" class="form-control"
                                            required min="1" step="0.01" disabled>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="shipment_cost" class="form-label">@lang('header.shipment_cost')</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" name="shipment_cost" id="shipment_cost"
                                            value="{{ number_format($shipment_cost ?? 0, 2, '.', '') }}"
                                            class="form-control" required min="1" step="0.01" disabled>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="taxAmount" class="form-label">@lang('header.taxAmount')</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" name="taxAmount" id="taxAmount"
                                            value="{{ number_format($taxAmount ?? 0, 2, '.', '') }}" class="form-control"
                                            required min="1" step="0.01" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center text-center">
                                <div class="col-md-4">
                                    <label for="first_name" class="form-label">@lang('header.first_name'):</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="last_name" class="form-label">@lang('header.last_name'):</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="email" class="form-label">@lang('header.email'):</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="row justify-content-center text-center">
                                <div class="col-md-7">
                                    <label for="address" class="form-label">@lang('header.address'):</label>
                                    <input type="text" id="address" name="address_line_1" class="form-control" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="city" class="form-label">@lang('header.city'):</label>
                                    <input type="text" id="city" name="city" class="form-control" required>
                                </div>
                                <div class="col-md-1">
                                    <label for="state" class="form-label">@lang('header.state'):</label>
                                    <input type="text" id="state" name="state" class="form-control" required>
                                </div>

                                <div class="col-md-2">
                                    <label for="zipcode" class="form-label">@lang('header.zipcode'):</label>
                                    <input type="text" id="zipcode" name="zipcode" class="form-control" required
                                        onblur="calculateShipping()" oninput="calculateShipping()">
                                </div>
                            </div>
                            <div class="row justify-content-center text-center">



                            </div>

                            <div class="container text-center" style="margin-top:50px;">
                                <div class="row justify-content-center">
                                    <div class="col-auto">
                                        <button type="submit" id="card-button" class="btn btn-primary px-4"
                                            onclick="setPaymentAction(event, 'credit')">
                                            <i class="fas fa-credit-card"></i> Pay with Credit Card
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" id="paypal-button" class="btn btn-primary px-4"
                                            onclick="setPaymentAction(event, 'paypal')">
                                            <i class="fab fa-paypal"></i> Pay with PayPal
                                        </button>
                                    </div>
                                    <p class="small" style="color:#330033;margin-top:20px;">
                                        <img src="{{ asset('assets/images/icons/locked-card.png') }}"
                                            style="width: 40px; height: auto; margin-right: 15px;">
                                        @lang('header.disclaimer')</i>
                                    </p>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function setPaymentAction(event, paymentType) {
                event.preventDefault(); // Prevents default submission until action is set

                let form = document.getElementById('payment-form');

                if (paymentType === 'credit') {
                    form.action = "{{ route('redirectCreditPayment') }}";
                } else if (paymentType === 'paypal') {
                    form.action = "{{ route('paypal.payment') }}";
                }

                console.log("Form action set to: ", form.action); // Debugging

                setTimeout(() => {
                    form.submit();
                }, 100); // Allows the browser to register the action before submitting
            }

            // Run this when DOM is fully loaded
            document.addEventListener('DOMContentLoaded', function () {
                let zipcodeInput = document.getElementById('zipcode');

                if (zipcodeInput) {
                    zipcodeInput.addEventListener('input', checkZipcode);
                    checkZipcode(); // Initial check in case input is pre-filled
                } else {
                    console.warn("Zipcode input field not found on the page.");
                }
            });
            function calculateShipping() {
                const zipCodeInput = document.getElementById('zipcode');
                const weightInput = document.getElementById('weight');

                // Debugging: Check if elements exist
                if (!zipCodeInput) {
                    console.error('Zipcode input not found.');
                    return;
                }
                if (!weightInput) {
                    console.error('Weight input not found.');
                    return;
                }

                const zipCode = zipCodeInput.value;
                const weight = parseFloat(weightInput.value) || 0; // Ensure valid number

                if (!zipCode || weight <= 0) {
                    alert('Please enter both ZIP code and a valid weight.');
                    console.warn(`Invalid inputs: zipCode=${zipCode}, weight=${weight}`);
                    return;
                }

                fetch(`/calculate-shipping/${zipCode}?weight=${weight}`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || '',
                    },
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.error) {
                            if (!window.errorDisplayed) {
                                alert('Error: ' + data.error);
                                window.errorDisplayed = true;

                                if (data.redirect) {
                                    window.location.href = data.redirect;
                                }
                            }
                            return;
                        }

                        window.errorDisplayed = false;

                        const shippingCost = parseFloat(data.cost);
                        document.getElementById('shipment_cost').value = shippingCost.toFixed(2);
                        document.getElementById('hidden_shipment_cost').value = shippingCost.toFixed(2);
                    })
                    .catch(error => {
                        console.error('Error fetching shipping cost:', error);
                    });
            };


        </script>
    </section>
@endsection
