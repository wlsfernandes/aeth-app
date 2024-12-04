@extends('layouts.app')

@section('title', '#somosAETH | Fund')

@section('meta-description', 'This is a brief description of the cart page.')

@section('meta-keywords', 'AETH, Cart, Fund, Shop')

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
                                    <td>
                                        <button class="remove-btn" onclick="removeItem('{{ $id }}')">
                                            <i class="icon-59"></i>
                                        </button>
                                    </td>
                                    <td class="prod-column">
                                        <div class="prod-thumb">
                                            <img src="{{ isset($item['image']) && $item['image'] ? asset('assets/images/shop/' . $item['image']) : asset('assets/images/shop/no_image.jpg') }}"
                                                alt="{{ $item['name'] ?? 'Product' }}"
                                                style="width: 110px; height: 100px; object-fit: cover;">
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
                                                data-id="{{ $id }}" min="1" onchange="updateCart()">
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
                            <input type="hidden" name="amount" id="amount">
                            <button type="button" class="theme-btn-one" onclick="submitForm()">Proceed to Checkout <i
                                    class="icon-74"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function updateCart() {
        const rows = document.querySelectorAll('#cart-body tr');
        let total = 0;

        rows.forEach(row => {
            const price = parseFloat(row.querySelector('.price').dataset.price || 0);
            const quantity = parseInt(row.querySelector('.quantity-spinner').value || 1);
            const subtotal = price * quantity;

            row.querySelector('.item-subtotal').textContent = subtotal.toFixed(2);
            total += subtotal;
        });

        document.getElementById('cart-subtotal').textContent = total.toFixed(2);
        document.getElementById('cart-total').textContent = total.toFixed(2);
        document.getElementById('amount').value = total.toFixed(2);

    }

    function submitForm() {
        updateCart();
        document.getElementById('checkout-form').submit();
    }
</script>
@endsection