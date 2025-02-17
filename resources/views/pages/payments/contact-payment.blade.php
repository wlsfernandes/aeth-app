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
                        <form id="payment-form" action="{{ route(name: 'redirectCreditPayment')  }}" method="POST">
                            @csrf
                            <input type="hidden" name="type" value="Bookstore">
                            <input type="hidden" name="program" value="AETH">
                            <input type="hidden" name="amount" value="{{ number_format($amount ?? 0, 2, '.', '') }}">
                            <input type="hidden" name="weight" id="weight"
                                value="{{ number_format($weight ?? 0, 2, '.', '') }}">
                            <input type="hidden" name="hidden_shipment_cost" id="hidden_shipment_cost">

                            @if(session('cart') && count(session('cart')) > 0)
                                @foreach($cartItems as $index => $product)
                                    <input type="hidden" name="products[{{ $index }}][id]" value="{{ $product['id'] }}">
                                    <input type="hidden" name="products[{{ $index }}][quantity]" value="{{ $product['quantity'] }}">
                                @endforeach

                            @endif

                            <div class="mb-3">
                                <label for="first_name" class="form-label">@lang('header.first_name'):</label>
                                <input type="text" id="first_name" name="first_name" class="form-control"
                                    placeholder="@lang('header.first_name')" required>
                            </div>

                            <div class="mb-3">
                                <label for="last_name" class="form-label">@lang('header.last_name'):</label>
                                <input type="text" id="last_name" name="last_name" class="form-control"
                                    placeholder="@lang('header.last_name')" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">@lang('header.email'):</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="@lang('header.email')" required>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">@lang('header.address'):</label>
                                <input type="text" id="address" name="address" class="form-control"
                                    placeholder="@lang('header.address')" required>
                            </div>

                            <div class="mb-3">
                                <label for="city" class="form-label">@lang('header.city'):</label>
                                <input type="text" id="city" name="city" class="form-control"
                                    placeholder="@lang('header.city')" required>
                            </div>

                            <div class="mb-3">
                                <label for="state" class="form-label">@lang('header.state'):</label>
                                <input type="text" id="state" name="state" class="form-control"
                                    placeholder="@lang('header.state')" required>
                            </div>

                            <div class="mb-3">
                                <label for="zipcode" class="form-label">@lang('header.zipcode'):</label>
                                <input type="text" id="zipcode" name="zipcode" class="form-control"
                                    placeholder="@lang('header.zipcode')" required onblur="calculateShipping()"
                                    oninput="calculateShipping()">
                            </div>

                            <div class="mb-3">
                                <label for="amount" class="form-label">@lang('header.amount_usd')</label>
                                <input type="number" id="amount" value="{{ number_format($amount ?? 0, 2, '.', '') }}"
                                    class="form-control" disabled>
                            </div>

                            <div class="mb-3">
                                <label for="shipment_cost" class="form-label">@lang('header.shipment_cost'):</label>
                                <input type="number" id="shipment_cost"
                                    value="{{ number_format($shipment_cost ?? 0, 2, '.', '') }}" class="form-control"
                                    disabled>
                            </div>




                            <button type="submit" id="card-button" class="btn btn-primary btn-block mt-3">
                                credit
                            </button>
                            <button type="submit" id="card-button" class="btn btn-primary btn-block mt-3">
                                paypal
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
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
            }


        </script>
    </section>
@endsection
