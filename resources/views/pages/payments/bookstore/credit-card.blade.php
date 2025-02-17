<form id="payment-form" action="{{ route('cartPayment')  }}" method="POST" class="default-form">
    @csrf
    <div class="card-body payment-card-body">
        <div class="d-flex align-items-center justify-content-between">
            <label for="amount_label" class="form-label"></label>
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
            <input type="email" id="email" name="email" class="form-control" placeholder="@lang('header.email')"
                required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">@lang('header.address'):</label>
            <input type="text" id="address" name="address" class="form-control" placeholder="@lang('header.address')"
                required>
        </div>
        <div class="mb-3">
            <label for="address_complement" class="form-label">@lang('header.address_complement'):</label>
            <input type="text" id="address_complement" name="address_complement" class="form-control"
                placeholder="@lang('header.address_complement')">
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">@lang('header.city'):</label>
            <input type="text" id="city" name="city" class="form-control" placeholder="@lang('header.city')" required>
        </div>
        <div class="mb-3">
            <label for="state" class="form-label">@lang('header.state'):</label>
            <input type="text" id="state" name="state" class="form-control" placeholder="@lang('header.state')"
                required>
        </div>

        <div class="mb-3">
            <label for="zipcode" class="form-label">@lang('header.zipcode'):</label>
            <input type="text" id="zipcode" name="zipcode" class="form-control" placeholder="@lang('header.zipcode')"
                required onblur="calculateShipping()" oninput="calculateShipping()">
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">@lang('header.amount_usd')</label>
            <input type="number" name="amount" id="amount" value="{{ number_format($amount ?? 0, 2, '.', '') }}"
                class="form-control" required min="1" step="0.01" disabled>
        </div>
        <div class="mb-3">
            <label for="shipment_cost" class="form-label">@lang('header.shipment_cost'):</label>
            <input type="number" name="shipment_cost" id="shipment_cost"
                value="{{ number_format($shipment_cost ?? 0, 2, '.', '') }}" class="form-control" required min="1"
                step="0.01" disabled>
        </div>

        <!-- Card Holder's Name -->
        <div class="mb-3">
            <label for="card-holder-name" class="form-label">@lang('header.card_name')</label>
            <input type="text" id="card-holder-name" name="card_holder_name" class="form-control"
                placeholder="@lang('header.name_on_card')" required>
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
        <input type="hidden" name="program" value="AETH">
        <input type="hidden" name="amount" value="{{ number_format($amount ?? 0, 2, '.', '') }}">
        <input type="hidden" name="weight" id="weight" value="{{ number_format($weight ?? 0, 2, '.', '') }}">
        <input type="hidden" name="hidden_shipment_cost" id="hidden_shipment_cost">

        @if(session('cart') && count(session('cart')) > 0)
            @foreach($cartItems as $index => $product)
                <input type="hidden" name="products[{{ $index }}][id]" value="{{ $product['id'] }}">
                <input type="hidden" name="products[{{ $index }}][quantity]" value="{{ $product['quantity'] }}">
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
