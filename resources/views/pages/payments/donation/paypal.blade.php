<form id="payment-paypal-form" action="{{ route('paypal.donate') }}" method="POST" class="default-form">
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
    <button type="submit" id="card-button" class="btn-block mt-3"
        style="background-color:#330033;color:#fff;height:50px;">
        @lang('header.pay_now') with Paypal
    </button>

    <p class="small" style="color:#330033;margin-top:20px;">
        <img src="{{ asset('assets/images/icons/locked-card.png') }}"
            style="width: 40px; height: auto; margin-right: 15px;">
        @lang('header.disclaimer')</i>
    </p>
</form>
