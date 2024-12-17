@extends('layouts.app')

@section('title', '#somosAETH | Fund')

@section('meta-description', 'This is a brief description of the cart page.')

@section('meta-keywords', 'AETH, Cart, Fund, Shop')

@section('content')

@if(session('cart') && count(session('cart')) > 0)
    <section class="cart-section p_relative pt_120 pb_120 bg-color-4">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 table-column">
                    <div class="table-outer">
                        <table class="cart-table">
                            <thead class="cart-header">
                                <tr>
                                    <th>&nbsp;</th>
                                    <th class="prod-column">@lang('bookstore.product')</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th class="price">@lang('bookstore.price')</th>
                                    <th class="quantity">@lang('bookstore.quantity')</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody id="cart-body">
                                @foreach ($cart as $id => $item)
                                    <tr data-id="{{ $id }}">
                                        <td>
                                            <button class="remove-btn" onclick="removeItem('{{ $id }}')">
                                                <i class="icon-59"></i>
                                            </button>
                                        </td>
                                        <td class="prod-column">
                                            <div class="prod-thumb" style="width: 110px; height: 100px; object-fit: cover;">
                                                <img src="{{ $item['image'] ?? asset('assets/images/shop/no_image.jpg') }}"
                                                    alt="{{ $item['name'] ?? 'Product' }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <div class="prod-title">
                                                {{ $item['name'] ?? 'Unnamed Product' }}
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td class="price" data-price="{{ $item['price'] ?? 0 }}">
                                            ${{ number_format($item['price'] ?? 0, 2) }}
                                        </td>
                                        <td class="qty">
                                            <div class="item-quantity">
                                                <input class="quantity-spinner" type="number"
                                                    value="{{ $item['quantity'] ?? 1 }}" name="quantity[{{ $id }}]"
                                                    data-id="{{ $id }}" min="1" onchange="updateCart(event)">
                                            </div>
                                        </td>
                                        <td class="sub-total" data-id="{{ $id }}">
                                            $<span class="item-subtotal">
                                                {{ number_format(($item['price'] ?? 0) * ($item['quantity'] ?? 1), 2) }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="cart-total">
                <div class="row">
                    <div class="col-xl-5 col-lg-12 col-md-12 offset-xl-7 cart-column">
                        <div class="total-cart-box clearfix">
                            <h4 class="fs_20 fw_medium lh_30 d_block pb_20">Cart Totals</h4>
                            <ul class="list clearfix mb_30">
                                <li>
                                    Subtotal: <span id="cart-subtotal">
                                        ${{ number_format(array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart)), 2) }}
                                    </span>
                                </li>
                                <li>
                                    Total: <span id="cart-total">
                                        ${{ number_format(array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart)), 2) }}
                                    </span>
                                </li>
                            </ul>
                            <form action="{{ route('redirectCartPayment') }}" method="POST" id="checkout-form">
                                @csrf
                           
                                <input type="hidden" name="amount" id="amount" value="{{ session('cart_total', 0) }}">

                                <input type="hidden" name="weight" id="weight" value="{{ session('cart_total_weight', 0) }}">

                                @if(session('cart') && count(session('cart')) > 0)
                                    <button type="button" class="theme-btn-one" id="checkout-button" onclick="submitForm()">
                                    @lang('bookstore.proceed') <i class="icon-74"></i>
                                    </button>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@else
    <section class="cart-section p_relative pt_120 pb_120 bg-color-4">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 table-column">
                    <h5 style="color:#4a235a">@lang('bookstore.cart_empty')</h5>
                    <button type="button" class="theme-btn-one" style="margin-top:200px;">
                        <a href="{{ route('bookstore') }}" style="all: unset;">
                        @lang('bookstore.back_bookstore') <i class="icon-74"></i></a>
                    </button>
                </div>
            </div>
        </div>
    </section>
@endif

<script>
    function updateCart(event) {
        if (!event) return; // If event is undefined, exit early to prevent errors

        const input = event.target; // The quantity input field
        const quantity = input.value;
        const id = input.dataset.id;

        // Send the updated quantity to the server
        fetch('/update-cart', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            },
            body: JSON.stringify({ id, quantity }),
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Update the frontend with new totals
                    const row = input.closest('tr');
                    row.querySelector('.item-subtotal').textContent = data.itemSubtotal;

                    document.getElementById('cart-subtotal').textContent = data.cartSubtotal;
                    document.getElementById('cart-total').textContent = data.cartTotal;
                    document.getElementById('amount').value = data.cartTotal;
                    document.getElementById('weight').value = data.cartTotalWeight;
                } else {
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Error updating cart:', error);
            });
    }


    function submitForm() {
        updateCart();
        document.getElementById('checkout-form').submit();
    }


    function removeItem(id) {
        fetch('/cart/remove', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ id: id })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const row = document.querySelector(`#cart-body tr[data-id="${id}"]`);
                    if (row) row.remove();
                    updateCart();
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error('Error removing item:', error));
    }


</script>
@endsection