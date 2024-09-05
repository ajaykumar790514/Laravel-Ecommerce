<div>
    @php
    $sessCart = session('cart',[]);
    $totalPrice = 0;

    foreach ($sessCart as $key => $cart) {
    $totalPrice += $cart['varient']['offer_price'] * $cart['quantity'];
    }
    @endphp


    <div>
    </div>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!--Shopping Cart Area Strat-->
    <div class="Shopping-cart-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="li-product-thumbnail">images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="li-product-price">Unit Price</th>
                                        <th class="li-product-quantity">Quantity</th>
                                        <th class="li-product-subtotal">Total</th>
                                        <th class="li-product-remove">remove</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if (!empty($carts))

                                    @foreach ($carts as $cart)
                                    <tr>
                                        <td class="li-product-thumbnail"><a>
                                                <img src="{{$cart['image']}}" alt="Li's Product Image"
                                                    style="height: 90px"></a>
                                        </td>
                                        <td class="li-product-name"><a href="#">{{$cart['title']}}</a></td>
                                        <td class="li-product-price"><span class="amount">₹
                                                {{$cart['varient']['offer_price']}}</span></td>
                                        <td class="quantity">
                                            <div class="IncQuantity">

                                                <button wire:click = "Increment({{$cart['productId']}})" class=" "><i class="fa fa-plus"></i></button>
                                                <span>{{$cart['quantity']}}</span>
                                                <button  wire:click = "Decrement({{$cart['productId']}})" class=" "><i class="fa fa-minus"></i></button>

                                            </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">₹
                                                {{$cart['varient']['offer_price'] * $cart['quantity']}}</span></td>
                                        <td class="li-product-remove"><button type="button"   wire:click="$dispatch('removeCart',{'pr_id':{{$cart['productId']}}})" style="border: transparent;background-color: transparent" wire:click = "$dispatch('removeCart')"><i class="fa fa-times"></i></button></td>

                                    </tr>

                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6">No Cart Data</td>
                                    </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">
                                    <div class="coupon">
                                        <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                            placeholder="Coupon code" type="text">
                                        <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                    </div>
                                    <div class="coupon2">
                                        <input class="button" name="update_cart" value="Update cart" type="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul>
                                        <li>SubTotal <span> ₹ {{$totalPrice}}
                                            </span></li>
                                        <li>Total <span> ₹ {{$totalPrice}}
                                            </span></li>
                                    </ul>
                                    <a href="{{ route('checkout') }}">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>