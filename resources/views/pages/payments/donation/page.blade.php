<div class="donate-content">
    <x-alert />
    <div class="title-text centred" style="margin:50px;">
        <h2 style="margin:50px;color:#330033"><i>Donate</i></h2>
    </div>
    <form action="{{ route('donationRedirectPayment')  }}" method="POST" class="default-form">
        @csrf
        @csrf
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 donate-column">
                <div class="donate-box">
                    <div class="donate-option">
                        <input type="hidden" name="type" value="{{ $type }}">
                        <input type="hidden" name="program" value="{{ $program }}">
                        <h3>How Much?</h3>
                        <ul class="donate-list clearfix">
                            <li>
                                <input type="radio" id="donate-amount-1" name="donate-amount" value="15" />
                                <label for="donate-amount-1">$15</label>
                            </li>
                            <li>
                                <input type="radio" id="donate-amount-2" name="donate-amount" value="20" checked />
                                <label for="donate-amount-2">$20</label>
                            </li>
                            <li>
                                <input type="radio" id="donate-amount-3" name="donate-amount" value="50" />
                                <label for="donate-amount-3">$50</label>
                            </li>
                            <li>
                                <input type="radio" id="donate-amount-4" name="donate-amount" value="100" />
                                <label for="donate-amount-4">$100</label>
                            </li>
                            <li>
                                <input type="radio" id="donate-amount-5" name="donate-amount" value="500" />
                                <label for="donate-amount-5">$500</label>
                            </li>
                            <li>
                                <input type="radio" id="donate-amount-6" name="donate-amount" value="1000" />
                                <label for="donate-amount-6">$1000</label>
                            </li>
                        </ul>
                        <div class="other-amount">
                            <div class="text">
                                <h4>Like to Donate</h4>
                                <p>Enter your custom amount</p>
                            </div>
                            <div class="amount-box">
                                <div class="item-quantity">
                                    <input class="quantity-spinner" type="text" name="custom-amount" value="0">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="title-text centred">
            <button type="submit" class="theme-btn-one" style="margin:50px;">Donate Now</button>
            <figure class="footer-logo"><a href="https://www.charitynavigator.org/ein/582022462" target="blank"><img
                        src="{{ asset('assets/images/logo/charity-donation.png') }}" alt="Charity Navigator"></a>
                <p style="margin:25px"><b><a href="https://www.charitynavigator.org/ein/582022462" target="blank">
                            @lang('messages.proudly')</a></b></p>
            </figure>
        </div>
    </form>
</div>