<div class="card-body">
    <form id="payment-form" action="{{ url('/handleMembershipPayment') }}" method="POST" class="default-form">
        @csrf

        <div class="payment-card-body">
            <div class="d-flex align-items-right">
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

            <!-- Hidden Inputs -->
            <input type="hidden" name="type" value="{{ old('type', $type ?? '') }}">
            <input type="hidden" name="program" value="{{ old('program', $program ?? '') }}">
            <input type="hidden" name="membership_plan" value="{{ old('membership_plan', $membership_plan ?? '') }}">
            <input type="hidden" name="period" value="{{ old('period', $period ?? '') }}">
            <input type="hidden" name="young_lideres_membership"
                value="{{ old('young_lideres_membership', $young_lideres_membership ?? '') }}">

            <!-- Payment Fields -->
            <div class="row justify-content-center text-center">
                <div class="col-md-2">
                    <label for="amount" class="form-label">(USD):</label>
                    <input type="number" name="amount" id="amount"
                        value="{{ old('amount', number_format($amount ?? 0, 2, '.', '')) }}" class="form-control"
                        required min="1" step="0.01" readonly>
                </div>
                <div class="col-md-3">
                    <label for="first_name" class="form-label">@lang('header.first_name'):</label>
                    <input type="text" id="first_name" name="first_name" class="form-control" required>
                </div>
                <div class="col-md-3">
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
                    <input type="text" id="address" name="address" class="form-control" required>
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
            <!-- Stripe Elements Placeholder -->
            <label for="card-element" class="form-label">@lang('header.credit_debit')</label>
            <div class="mb-3">
                <input type="text" id="card-holder-name" name="card_holder_name" class="form-control"
                    placeholder="@lang('header.name_on_card')" required>
            </div>
            <div class="row justify-content-center text-center">

                <div class="col-md-6">
                    <div id="card-number-element" class="stripe-element-container">
                        <!-- Stripe's Card Number Element will be inserted here -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="card-expiry-element" class="stripe-element-container">
                        <!-- Stripe's Expiry Date Element will be inserted here -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="card-cvc-element" class="stripe-element-container">
                        <!-- Stripe's CVC Element will be inserted here -->
                    </div>
                </div>
                <div id="card-errors" class="text-danger mt-2" role="alert"></div>
            </div>
            <input type="hidden" name="payment_method_id" id="payment-method-id">

            <button type="submit" id="card-button"
                class="btn-block mt-3 d-flex align-items-center justify-content-center"
                style="background-color:#330033;color:#fff;height:50px;">
                <span id="button-text">@lang('header.pay_now')</span>
                <span id="button-spinner" class="spinner-border spinner-border-sm d-none ms-2" role="status"></span>
            </button>

            <p class="small" style="color:#330033;margin-top:20px;">
                <img src="{{ asset('assets/images/icons/locked-card.png') }}"
                    style="width: 40px; height: auto; margin-right: 15px;">
                @lang('header.disclaimer')
            </p>
            <p class="small" style="color:#330033;margin-top:20px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="auto" viewBox="0 0 24 24" fill="none"
                    stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="1 4 1 10 7 10"></polyline>
                    <path d="M3.51 15a9 9 0 1 0-.49-5"></path>
                </svg>
                @lang('header.AETH_disclaimer')
            </p>
    </form>
</div>
<!-- STRIPE PAYMENT -->
@include('stripe.script')
<!-- STRIPE PAYMENT -->

<script>
    document.getElementById("payment-form").addEventListener("submit", function () {
        let button = document.getElementById("card-button");
        let spinner = document.getElementById("button-spinner");
        let buttonText = document.getElementById("button-text");

        button.disabled = true; // Disable button
        spinner.classList.remove("d-none"); // Show spinner
        buttonText.textContent = "Processing..."; // Change button text
    });
</script>