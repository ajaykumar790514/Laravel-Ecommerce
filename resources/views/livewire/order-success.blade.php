<div>

    <div class="order_main">
        <div class="order-success">
            <img src="{{ asset('img/success.gif') }}" alt="">

            <h5>Thank You! 😇</h5>
            <p>Your order <span class="text-info"> #{{$order->order_number}}</span> has been Booked!

            </p>
            <p> Time Booked: {{$order->created_at->format('d/m/Y g:i A')}}</p>
            </p>
        </div>
        <div class=" row mt-3 px-5 order-item justify-content-between">
            <div class="col-md-7 col-12 shadow ">
                @foreach ($order->orderItems as $item)
                @php
                $varient = json_decode($item->varient);
                @endphp
                <div class="d-flex justify-content-between px-4 py-2 ">
                    <div>
                        <h6 class="text-dark fs-1">{{$item->product->name}}</h6>
                        <p>{{$varient->name}}</p>
                    </div>
                    <p>{{$item->quantity}}</p>
                    <p>₹ {{$varient->offer_price}}</p>
                    <p>₹ {{$varient->offer_price * $item->quantity}}</p>
                </div>
                @endforeach
                <div class="order-price">
                    <div>
                        <h6>Cart Total</h6>
                        <p>₹ {{$order->cart_amount}}</p>
                    </div>
                    <div>
                        <h6>Tax Amount</h6>
                        <p>₹ {{$order->tax_amount}}</p>
                    </div>
                    <div>
                        <h6>Discount Amount</h6>
                        <p>₹ {{$order->discount_amount}}</p>
                    </div>
                    <div>
                        <h6>Delivery Fee</h6>
                        <p>₹ {{$order->delivery_fee}}</p>
                    </div>
                    <div>
                        <h6>Total Amount</h6>
                        <h6>₹ {{$order->total_amount}}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 p-4 ">
                <h6>Delivery Address
                </h6>
                <p>{{$order->customerAddress->address}} <br>
                    {{$order->customerAddress->city}},
                    {{$order->customerAddress->state}},<br>
                    {{$order->customerAddress->pincode}}

                </p>
                <p>Mobile No. +91-{{$order->customerAddress->mobile}}</p>

            </div>
        </div>
    </div>

</div>