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

                            <div class="card-header p-0">
                                <h2 class="mb-0">
                                    <button class="btn btn-light btn-block text-left p-3 rounded-0" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
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
                                @include('pages.payments.bookstore.credit-card')
                            </div>
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
                                                style="width: 65px; height: auto; margin-right: 5px;">
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                @include('pages.payments.bookstore.paypal')
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- STRIPE PAYMENT -->
            @include('stripe.script')
            <!-- STRIPE PAYMENT -->
            <script>
                function calculateShipping() {
                    const zipCode = document.getElementById('zipcode').value;
                    const weight = parseFloat(document.getElementById('weight').value); // Get weight value

                    if (!zipCode || !weight || weight <= 0) {
                        alert('Please enter both ZIP code and valid weight.');
                        return;
                    }

                    fetch(`/calculate-shipping/${zipCode}?weight=${weight}`, {
                        method: 'GET',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        },
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.error) {
                                if (!window.errorDisplayed) {
                                    alert('Error: ' + data.error); // Show the error message in an alert
                                    window.errorDisplayed = true; // Flag to prevent displaying the error again

                                    if (data.redirect) {
                                        window.location.href = data.redirect; // Redirect if provided
                                    }
                                }
                                return; // Stop further execution if there's an error
                            }

                            // Reset the error flag on success
                            window.errorDisplayed = false;

                            const shippingCost = parseFloat(data.cost);
                            document.getElementById('shipment_cost').value = shippingCost.toFixed(2);
                            document.getElementById('hidden_shipment_cost').value = shippingCost.toFixed(2); // Set hidden value for form submission
                        })
                        .catch(error => {
                            console.error('Error fetching shipping cost:', error);
                        });
                }


            </script>

    </section>
@endsection
