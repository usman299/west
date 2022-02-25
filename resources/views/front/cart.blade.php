@extends('layouts.front')
@section('content')
    <section class="cartPage" >
        <div class="container" style="margin-top: 50px">
            <div class="row">
                <div class="col-lg-12">
                    <div class="woocommerce">
                            <table class="shop_table">
                                <thead>
                                <tr>
                                    <th class="product-name">Nom du produit</th>
                                    <th class="product-price">Prix</th>
                                    <th class="product-quantity">Quantité</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cartitems as $cart)
                                <tr class="cart_item">
                                    <td class="product-name" data-title="Product">
                                        <a href="">{{$cart->name}}</a>
                                    </td>
                                    <td class="product-price" data-title="Price">
                                        <span class="woocommerce-Price-amount amount"><bdi>{{$cart->price}}<span class="woocommerce-Price-currencySymbol">€</span></bdi></span>
                                    </td>
                                    <td class="product-name" data-title="Product">
                                        <a href="">{{$cart->quantity}}</a>
                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal">
                                        <span class="woocommerce-Price-amount amount"><bdi>{{$cart->price * $cart->quantity}}<span class="woocommerce-Price-currencySymbol">€</span></bdi></span>
                                    </td>
                                    <td class="product-remove">
                                        <a href="{{route('removecart', ['id' =>$cart->id ])}}" class="remove">×</a>
                                    </td>
                                </tr>
                                @endforeach
                          {{-- <tr>
                                    <td colspan="6" class="actions">
                                        <form action="" id="couponform">
                                            <h3 class="successalert" style="color: green;"></h3>
                                            <h3 class="erroralert" style="color: red;"></h3>
                                        <div class="coupon">
                                            <label for="coupon_code">Coupon:</label>
                                            <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Code de réduction">
                                            <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Appliquer Coupon</button>
                                        </div>
                                        </form>
                                        <a href="{{route('cart.reset')}}"> <button type="submit" class="button update" name="update_cart" value="Update cart">Réinitialiser le panier</button></a>
                                    </td>
                                </tr>--}}
                                </tbody>
                            </table>
                        <div class="row">
                            <div class="col-xl-7 col-lg-6 col-md-4"></div>
                            <div class="col-xl-5 col-lg-6 col-md-8">
                                <div class="cart-collaterals">
                                    <div class="cart_totals">
                                        <h2>Totaux du panier</h2>
                                        <table class="shop_table shop_table_responsive">
                                            <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Articles au total</th>
                                                <td data-title="Subtotal"><span class="amount">{{$cartTotalQuantity}}</span></td>
                                            </tr>
                                            @if($total)
                                            <tr class="cart-subtotal">
                                                <th>Total</th>
                                                <td data-title="Subtotal"><span class="amount">{{$total}} €</span></td>
                                            </tr>
                                            @endif
                                            @if($content)
                                            <tr class="cart-subtotal">
                                                <th>Remise</th>
                                                <td data-title="Subtotal"><span class="amount">{{$content->discount}} %</span></td>
                                            </tr>
                                            @endif
                                            <tr class="cart-subtotal">
                                                <th>Le montant final</th>
                                                <td data-title="Subtotal"><span class="amount">{{$total - ($total * $content->discount / 100)}} €</span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a class="checkout-button alt wc-forward" href="{{route('checkout')}}">Passer à la caisse</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $("#couponform").submit(function(){
            event.preventDefault();
            let code = $('#coupon_code').val();
            let _token   = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "{{route('redeemcoupon')}}",
                type:"POST",
                data:{
                    code:code,
                    _token: _token
                },
                success:function(response){
                    if(response.success) {

                        $('.successalert').html(response.success);
                        location.reload();

                    }else if(response.error){
                        $('.erroralert').html(response.error);
                    }
                },
            });
        });
    </script>
@endsection
