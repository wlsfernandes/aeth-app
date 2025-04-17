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
                            <input type="hidden" name="weight" id="weight" value="{{ $weight ?? 0.1 }}">

                            <input type="hidden" name="hidden_shipment_cost" id="hidden_shipment_cost"
                                value="{{ $shipment_cost }}">

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
                                <p class="small" style="color:#330033;margin-top:20px;">
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
                                    <input type="text" id="zipcode" name="zipcode" class="form-control" required>
                                </div>
                            </div>
                            <div class="row justify-content-center text-center">

                                <p class="small" style="color:#330033;margin-top:20px;">
                                    <i>(*) @lang('header.info_button')</i>
                                </p>

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
            document.addEventListener("DOMContentLoaded", function () {
                let form = document.getElementById("payment-form");
                let requiredFields = document.querySelectorAll("#payment-form input[required]");
                let cardButton = document.getElementById("card-button");
                let paypalButton = document.getElementById("paypal-button");
                let paymentType = null; // Stores selected payment type

                // Disable buttons initially
                cardButton.disabled = true;
                paypalButton.disabled = true;

                // Function to check if all required fields are filled
                function checkFields() {
                    let allFilled = true;

                    requiredFields.forEach(field => {
                        if (field.value.trim() === "") {
                            allFilled = false;
                        }
                    });

                    // Enable or disable buttons based on validation
                    cardButton.disabled = !allFilled;
                    paypalButton.disabled = !allFilled;
                }

                // Attach event listener to each required field to check input
                requiredFields.forEach(field => {
                    field.addEventListener("input", checkFields);
                });

                // Function to set the payment type and validate fields before submitting
                function setPaymentAction(event, type) {
                    event.preventDefault(); // Prevent form from submitting immediately
                    paymentType = type; // Store the selected payment type

                    // Final validation before submission
                    let allFieldsValid = true;

                    requiredFields.forEach(field => {
                        if (field.value.trim() === "") {
                            field.classList.add("is-invalid"); // Bootstrap class to indicate error
                            allFieldsValid = false;
                        } else {
                            field.classList.remove("is-invalid");
                        }
                    });

                    if (!allFieldsValid) {
                        alert("Please fill in all required fields before proceeding.");
                        return;
                    }

                    // Set form action based on payment type
                    if (type === "credit") {
                        form.action = "{{ route('redirectCreditPayment') }}";
                    } else if (type === "paypal") {
                        form.action = "{{ route('paypal.payment') }}";
                    }

                    console.log("Form action set to:", form.action);

                    setTimeout(() => {
                        form.submit();
                    }, 100);
                }

                // Attach click events to the buttons
                cardButton.addEventListener("click", (event) => setPaymentAction(event, "credit"));
                paypalButton.addEventListener("click", (event) => setPaymentAction(event, "paypal"));

                // Initial check in case form fields are prefilled
                checkFields();
            });

        </script>
    </section>
@endsection