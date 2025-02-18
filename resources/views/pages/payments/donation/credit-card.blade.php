<form id="payment-form" action="{{ url('/handle-payment') }}" method="POST" class="default-form">
    @csrf
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

        <div class="row justify-content-left text-left" style="margin-top:25px;">
            <div class="col-md-2">
                <input type="number" name="amount" id="amount" value="{{ number_format($amount ?? 0, 2, '.', '') }}"
                    class="form-control" required min="1" step="0.01">
            </div>
            <div class="col-md-2">
                <input type="checkbox" id="is_recurring" name="is_recurring" value="1">
                <i class="fas fa-sync me-2"></i>
                <label for="is_recurring" class="form-label mb-0 me-2">@lang('header.recurring_donation')</label>

            </div>
        </div>

        <div class="row justify-content-center text-center" style="margin-top:25px;">
            <div class="col-md-4">
                <label for="name" class="form-label">@lang('header.first_name'):</label>
                <input type="text" id="first_name" name="first_name" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="name" class="form-label">@lang('header.last_name'):</label>
                <input type="text" id="last_name" name="last_name" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="email" class="form-label">@lang('header.email'):</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
        </div>
        <!-- Card Holder's Name -->
        <div class="mb-3" style="margin-top:25px;">
            <label for="card-holder-name" class="form-label">@lang('header.card_name')</label>
            <input type="text" id="card-holder-name" name="card_holder_name" class="form-control"
                placeholder="@lang('header.name_on_card')" required>
        </div>

        <!-- Stripe Elements Placeholder -->
        <label for="card-element" class="form-label">@lang('header.credit_debit')</label>
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
