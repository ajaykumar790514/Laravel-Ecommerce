<div>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <a href="{{ route('user_dashboard') }}">
                            <h2>DashBaord</h2>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user_dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->



    <!-- tracking page end -->
    <div class="container-fluid">

        <div class="container">
            <!-- Title -->
            <div class="d-flex justify-content-between align-items-center py-3">
                <h2 class="h5 mb-0"><a href="#" class="text-muted"></a> Order #{{$order->order_number}}</h2>
            </div>

            <!-- Main content -->
            <div class="row">
                <div class="col-lg-8">
                    <!-- Details -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-3 d-flex justify-content-between">
                                <div>
                                    <span class="me-3">{{$order->created_at->format('d-M-Y')}}</span>
                                    <span class="me-3">#{{$order->order_number}}</span>
                                    <span class="badge rounded-pill bg-info">
                                        {{ $order->history()->latest()->value('status') }}
                                    </span>
                                </div>
                                <div class="d-flex">

                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 text-muted" type="button"
                                            data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil"></i> Edit</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-printer"></i>
                                                    Print</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-borderless">
                                <tbody>
                                    @foreach ($order->orderItems as $item )
                                    @php
                                    $varient = json_decode($item->varient, true)
                                    @endphp
                                    <tr>
                                        <td>
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0">
                                                   @if ($item->product->images->first()->image)
                                                   <img src="{{ asset($item->product->images->first()->image) }}"
                                                   alt="Product Image" width="35" class="img-fluid">
                                                   @endif
                                                </div>
                                                <div class="flex-lg-grow-1 ms-3">
                                                    <h6 class="small mb-0"><a href="#"
                                                            class="text-reset">{{$item->product->name}}</a></h6>
                                                    <span class="small">{{$varient['name']}}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$item->quantity}}</td>
                                        <td class="text-end">₹ {{$varient['offer_price']}}</td>
                                        <td class="text-end">₹ {{$varient['offer_price'] * $item->quantity}}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2">Subtotal</td>
                                        <td colspan="2" class="text-end">₹ {{$order->cart_amount}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Tax</td>
                                        <td colspan="2" class="text-end">₹ {{$order->tax_amount}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Shipping</td>
                                        <td colspan="2" class="text-end">₹ {{$order->delivery_fee}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Discount </td>
                                        <td colspan="2" class="text-danger text-end">-₹ {{$order->discount_amount}}</td>
                                    </tr>
                                    <tr class="fw-bold">
                                        <td colspan="2">TOTAL</td>
                                        <td colspan="2" class="text-end">₹ {{$order->total_amount}}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- Payment -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3 class="h6">Payment Method</h3>
                                    <p>{{$order->payment_method}}</p>
                                    @if ($order->payment)
                                    <p><span>{{$order->payment->payment_method}}</span> <br>
                                        @endif
                                        Total: {{$order->total_amount}}<span class="badge bg-success rounded-pill">
                                            {{$order->payment_status}}</span></p>
                                </div>
                                <div class="col-lg-6">
                                    <h3 class="h6">Billing address</h3>
                                    <address>
                                        <strong>{{$order->user->name}}</strong><br>
                                        {{$order->customerAddress->address}}<br>
                                        {{$order->customerAddress->city}}
                                        {{$order->customerAddress->state}}
                                        <br>
                                        {{$order->customerAddress->pincode}} <br>
                                        <span title="Phone">Phone:</span> +91 {{$order->customerAddress->mobile}}
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <!-- Customer Notes -->

                    <div class="card mb-4">
                        <!-- Shipping information -->
                        <div class="card-body">
                            <h3 class="h6">Shipping Information</h3>
                            <strong>Delivery Date</strong>
                            @if ($order->delivery_time)
                            <p>{{\Carbon\Carbon::parse($order->delivery_time)->format('d-M-Y')}}</p>
                            @endif
                            <hr>
                            <h3 class="h6">Address</h3>
                            <address>
                                <strong>{{$order->user->name}}</strong><br>
                                {{$order->customerAddress->address}}<br>
                                {{$order->customerAddress->city}}
                                {{$order->customerAddress->state}}
                                <br>
                                {{$order->customerAddress->pincode}} <br>
                                <span title="Phone">Phone:</span> +91 {{$order->customerAddress->mobile}}
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-table table-responsive-sm pb-5">
                <table class="table mb-0 table-striped table-borderless">
                    <thead class="">
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($order->history as $history)
                        <tr>
                            <td>{{$history->created_at->format('d-m-Y')}}</td>
                            <td>{{$history->created_at->format('g:i A')}}</td>
                            <td>{{$history->status}}</td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>