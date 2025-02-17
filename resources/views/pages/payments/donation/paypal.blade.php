<form id="payment-paypal-form" action="{{ url('/paypal/payment') }}" method="POST" class="default-form">
    @csrf
    <input type="hidden" name="type" value="{{ $type ?? '' }}">
    <input type="hidden" name="program" value="{{ $program ?? '' }}">
    <input type="hidden" name="membership_plan" value="{{ $membership_plan ?? '' }}">
    <input type="hidden" name="period" value="{{ old('period', $period ?? '') }}">
    <div class="mb-3 d-flex align-items-center" style="margin-top:25px;">
        <div>
            <input type="number" name="amount" id="amount" value="{{ number_format($amount ?? 0, 2, '.', '') }}"
                class="form-control" required min="1" step="0.01">
        </div>
        <span style="width: 20px;"></span>
    </div>
    <button type="submit" id="card-button" class="btn-block mt-3"
        style="background-color:#330033;color:#fff;height:50px;">
        @lang('header.pay_now')
    </button>

    <p class="small" style="color:#330033;margin-top:20px;">
        <img src="{{ asset('assets/images/icons/locked-card.png') }}"
            style="width: 40px; height: auto; margin-right: 15px;">
        @lang('header.disclaimer')</i>
    </p>
</form>
