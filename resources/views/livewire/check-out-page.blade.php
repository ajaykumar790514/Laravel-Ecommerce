<div>
    @php
    $totalPrice = 0;

    foreach ($carts as $key => $value) {
    $totalPrice += $value['varient']['offer_price'] * $value['quantity'];
    }
    @endphp
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="active">Checkout</li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Li's Breadcrumb Area End Here -->
    <!--Checkout Area Strat-->
    <div class="checkout-area pt-60 pb-30">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-12">
                    <form action="#">
                        <div class="checkbox-form">
                            <h3>Billing Details</h3>
                            <div class="row p-3">
                                @if (!empty($oldAddress))

                                @foreach ($oldAddress as $add)

                                <div class="col-12 p-3 old-address mb-10">
                                    <div>
                                        <input type="radio" name="oldAddress" id="" value="{{$add->id}}"
                                            wire:model.live="addressId">
                                    </div>
                                    <div>
                                        <h6>{{$add->user->name}}</h6>
                                        <p>
                                            {{$add->address}}, {{$add->city}}, {{$add->state}}, {{$add->pincode}}
                                        </p>
                                        <p>Mobile No. +91-<span>{{$add->mobile}}</span></p>
                                    </div>
                                </div>
                                @endforeach

                                @endif



                            </div>
                            <div class="different-address mt-20" wire:ignore>
                                <div class="ship-different-title">
                                    <h3>
                                        <label>Ship to a different address?</label>
                                        <input id="ship-box" type="checkbox">
                                    </h3>
                                </div>
                                <div id="ship-box-info" class="row">



                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input placeholder=" address" type="text" wire:model.live="address">
                                            @error('address')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Town / City <span class="required">*</span></label>
                                            <input type="text" placeholder="City" wire:model.live="city">
                                            @error('city')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>State <span class="required">*</span></label>
                                            <input placeholder="State" wire:model.live="state" type="text">
                                            @error('state')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>PinCode <span class="required">*</span></label>
                                            <input type="text" placeholder="PinCode" wire:model.live="pincode">
                                            @error('pincode')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Mobile <span class="required">*</span></label>
                                            <input type="text" placeholder="Mobile" wire:model.live="mobile">
                                            @error('mobile')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="order-notes">
                                    <div class="checkout-form-list">
                                        <label>Order Notes</label>
                                        <textarea id="checkout-mess" cols="30" rows="10"
                                            placeholder="Notes about your order, e.g. special notes for delivery."
                                            wire:model.live="notes"> </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="your-order">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-product-name">Product</th>
                                        <th class="cart-product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($carts))
                                    @foreach ($carts as $cart )
                                    <tr class="cart_item">
                                        <td class="cart-product-name"> {{$cart['title']}}<strong
                                                class="product-quantity"> × {{$cart['quantity']}}</strong></td>
                                        <td class="cart-product-total"><span class="amount">₹
                                                {{$cart['varient']['offer_price'] * $cart['quantity']}}</span></td>
                                    </tr>
                                    @endforeach
                                    @endif

                                </tbody>
                                <tfoot>

                                    <tr class="cart-subtotal text-danger">
                                        <th>Shipping Fees</th>
                                        <td><span class="amount"> + ₹ {{$shippingFee}}</span></td>
                                    </tr>
                                    <tr class="cart-subtotal text-danger">
                                        <th>Tax </th>
                                        <td><span class="amount"> + ₹ {{$tax}}</span></td>
                                    </tr>
                                    <tr class="cart-subtotal text-success">
                                        <th>Coupon </th>
                                        <td><span class="amount">- ₹ {{$couponCode}}</span></td>
                                    </tr>
                                    <tr class="cart-subtotal">
                                        <th>Cart Subtotal</th>
                                        <td><span class="amount">₹ {{$totalPrice}}</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td><strong><span class="amount">₹ {{$totalPrice +$shippingFee +
                                                    $tax - $couponCode }}</span></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div>
                            <h3>Paymeny Type</h3>
                            <div class=" payment" style="border: transparent;padding: 0">
                                <div>
                                    <input type="radio" name="paymentMode" id="" value="COD"
                                        wire:model.live="paymentMode">
                                </div>
                                <div>
                                    <h5>Cash On Delivery</h5>
                                </div>
                            </div>
                            <div class=" payment " style="border: transparent;padding: 0">
                                <div>
                                    <input type="radio" name="paymentMode" id="" value="Online"
                                        wire:model.live="paymentMode">
                                </div>
                                <div>
                                    <h5>PayOnline</h5>
                                </div>
                            </div>

                            @error($paymentMode)
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div>

                                <button class="btn btn-warning px-5 " wire:click="submit">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
@script
<script>
    $wire.on('triggerRazorpay', (event) => {
        let data = JSON.parse(event) 
        var options = {
        "key": data.key, 
        "amount": data.amount, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        "currency": "INR",
        "name": "Ecommerce", //your business name
        "description": "Test Transaction",
        "image": "{{asset('logo.png')}}",
        "order_id": data.orderId, 
        "checkout":{
            "method":{
                "upi":0,
                "netbanking":1,
                "wallet":0,
                "card":0
            }
        },
        //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
        "handler":function(response){
            // console.log(response)
            $dispatch('paymentsuccess',{response:response});
        },
        //"callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
        "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
            "name": data.name,
            "email": data.email,
            "contact": data.contact //Provide the customer's phone number for better conversion rates 
        },
        "notes": {
            "address": "Razorpay Corporate Office"
        },
        "theme": {
            "color": "#F37254"
    }
};
var rzp1 = new Razorpay(options);
rzp1.open();
    });
</script>
@endscript