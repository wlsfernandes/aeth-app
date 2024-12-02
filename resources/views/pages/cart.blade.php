@extends('layouts.app')

@section('title', '#somosAETH | Fund') 

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction') 

@section('content') 

<section class="cart-section p_relative pt_120 pb_120 bg-color-4">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 table-column">
                <div class="table-outer">
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                                <th>&nbsp;</th>
                                <th class="prod-column">Product</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th class="price">Price</th>
                                <th class="quantity">Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody id="cart-body">
                            @foreach ($cart as $id => $item)
                                <tr data-id="{{ $id }}">
                                    <td colspan="4" class="prod-column">
                                        <div class="column-box">
                                            <button class="remove-btn" onclick="removeItem('{{ $id }}')">
                                                <i class="icon-59"></i>
                                            </button>
                                            <div class="prod-thumb">
                                                <img src="{{ isset($item['image']) && $item['image'] ? asset('assets/images/shop/' . $item['image']) : asset('assets/images/shop/no_image.jpg') }}"
                                                    alt="{{ $item['name'] }}">
                                            </div>
                                            <div class="prod-title">
                                                {{ $item['name'] }}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price" data-price="{{ $item['price'] }}">${{ number_format($item['price'], 2) }}</td>
                                    <td class="qty">
                                        <div class="item-quantity">
                                            <input class="quantity-spinner" type="number" value="{{ $item['quantity'] }}"
                                                name="quantity[{{ $id }}]" data-id="{{ $id }}" min="1" onchange="updateCart(this)">
                                        </div>
                                    </td>
                                    <td class="sub-total" data-id="{{ $id }}">$<span class="item-subtotal">{{ number_format($item['price'] * $item['quantity'], 2) }}</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="othre-content clearfix">
            <div class="coupon-box pull-left clearfix">
                <input type="text" placeholder="Coupon code...">
                <button type="button" class="theme-btn-one">Apply Coupon</button>
            </div>
            <div class="update-btn pull-right">
                <button type="button" class="theme-btn-two">Update Cart</button>
            </div>
        </div>
        <div class="cart-total">
            <div class="row">
                <div class="col-xl-5 col-lg-12 col-md-12 offset-xl-7 cart-column">
                    <div class="total-cart-box clearfix">
                        <h4 class="fs_20 fw_medium lh_30 d_block pb_20">Cart Totals</h4>
                        <ul class="list clearfix mb_30">
                            <li>Subtotal:<span><span id="cart-subtotal">${{ number_format(array_sum(array_column($cart, 'price')), 2) }}</span></span>
                            </li>
                            <li>Total:<span><span id="cart-total">${{ number_format(array_sum(array_map(function ($item) {
                                return $item['price'] * $item['quantity'];
                            }, $cart)), 2) }}</span></span></li>
                        </ul>
                        <a href="cart.html" class="theme-btn-one">Proceed to Checkout <i class="icon-74"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function updateCart(element) {
        const row = element.closest('tr');
        const price = parseFloat(row.querySelector('.price').dataset.price);
        const quantity = parseInt(element.value);
        const subtotalElement = row.querySelector('.item-subtotal');
        const newSubtotal = (price * quantity).toFixed(2);

        subtotalElement.textContent = newSubtotal;
        updateTotals();
    }

    function removeItem(id) {
        const row = document.querySelector(`tr[data-id="${id}"]`);
        row.remove();
        updateTotals();
    }

    function updateTotals() {
        const subtotals = Array.from(document.querySelectorAll('.item-subtotal'));
        let total = 0;

        subtotals.forEach(subtotal => {
            total += parseFloat(subtotal.textContent);
        });

        document.getElementById('cart-subtotal').textContent = total.toFixed(2);
        document.getElementById('cart-total').textContent = total.toFixed(2);
    }
</script>
@endsection


