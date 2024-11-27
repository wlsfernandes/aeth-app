@extends('layouts.app')

@section('title', '#somosAETH | Renew')

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'AETH, Membership, Renew')

@section('content')
<section>
    <div class="container px-4 py-5" id="hanging-icons">
        <div>
            <h2>@lang('members.renew.p1')</h2>
            <p class="mt-3">@lang('members.renew.p2')</p>
            <form action="{{ route('membershipRedirectRenewPayment') }}" method="POST">
                @csrf
                <div class="d-flex flex-column mt-3">
                    <input type="text" value={{$email}} disabled />
                    <input type="hidden" name="email" value={{  $email }} />
                    <input type="hidden" name="first_name" value={{  $first_name }} />
                    <input type="hidden" name="last_name" value={{  $last_name }} />
                   
                </div>
                <div class="d-flex flex-column mt-3">
                    <select id="membership_plan" name="membership_plan" class="form-select mb-3">
                        <option value="institutional_year">$200.00 - Institutional Membership Yearly</option>
                        <option value="individual_year">$100.00 - Individual Membership Yearly</option>
                        <option value="student_year">$ 50.00 - Student Membership Yearly</option>
                        <option value="institutional_month">$ 20.00 - Institutional Membership Monthly</option>
                        <option value="individual_month">$ 10.00 - Individual Membership Monthly</option>
                        <option value="student_month">$ 5.00 - Student Membership Monthly</option>
                    </select>
                    <button type="submit" class="btn btn-primary">
                        @lang('members.renew.p5')
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

@include('partials.contact')
@endsection