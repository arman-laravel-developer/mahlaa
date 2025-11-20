@php
    $subtotal = Cart::instance('shopping')->subtotal();
    $subtotal=str_replace(',','',$subtotal);
    $subtotal=str_replace('.00', '',$subtotal);
    view()->share('subtotal',$subtotal);
    $shipping = Session::get('shipping')?Session::get('shipping'):0;
    $discount = Session::get('discount')?Session::get('discount'):0;
@endphp

<h5>Cart Summary</h5>
    <table class="table">
        <tbody>
            <tr>
                <td>Items</td>
                <td>{{Cart::instance('shopping')->count()}} (qty)</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>{{ formatPrice($subtotal) }}</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>{{ formatPrice($shipping) }}</td>
            </tr>
            <tr>
                <td>Discount</td>
                <td>{{ formatPrice($discount) }}</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>{{ formatPrice(($subtotal+$shipping) - $discount) }}</td>
            </tr>
        </tbody>
    </table>