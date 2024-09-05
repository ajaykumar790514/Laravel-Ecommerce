<div>
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        @if ($setting->logo)
                        <a href="{{ route('index') }}"> <img src="{{ asset($setting->logo) }}" style="width: 150px"
                                alt="">
                        </a> @endif
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space user-dashboard-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="dashboard-sidebar">
                        <div class="profile-top">
                            <div class="profile-image">
                                <img src="../assets/images/avtar.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="profile-detail">
                                <h5>{{$user->name}}</h5>
                                <h6>{{$user->email}}</h6>
                            </div>
                        </div>
                        <div class="faq-tab">
                            <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                <li class="nav-item"><a data-bs-toggle="tab" data-bs-target="#info"
                                        class="nav-link active">Account Info</a></li>
                                <li class="nav-item"><a data-bs-toggle="tab" data-bs-target="#address"
                                        class="nav-link">Address Book</a></li>
                                <li class="nav-item"><a data-bs-toggle="tab" data-bs-target="#orders"
                                        class="nav-link">My Orders</a></li>



                                <li class="nav-item">
                                    <a href="{{ route('logout') }}" class="nav-link "
                                        style="width: 100%; text-align: start">
                                        Logout </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="faq-content tab-content" id="top-tabContent">
                        <div class="tab-pane fade show active" id="info">
                            <div class="counter-section">
                                <div class="welcome-msg">
                                    <h4>Hello, {{$user->name}} !</h4>
                                    <p>From your My Account Dashboard you have the ability to view a snapshot of your
                                        recent
                                        account activity and update your account information. Select a link below to
                                        view or
                                        edit information.</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="counter-box">
                                            <img src="{{ asset('img/sale.png') }}" class="img-fluid">
                                            <div>
                                                <h3>{{$orders->count()}}</h3>
                                                <h5>Total Order</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="counter-box">
                                            <img src="{{ asset('img/homework.png') }}" class="img-fluid">
                                            <div>
                                                <h3>{{$pendingOrder}}</h3>
                                                <h5>Pending Orders</h5>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="box-account box-info">
                                    <div class="box-head">
                                        <h4>Account Information</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 ">
                                            <div class="box ">
                                                <div class="box-title">
                                                    <h3>Contact Information</h3>
                                                </div>
                                                <div class="box-content">
                                                    <h6>{{$user->name}}</h6>
                                                    <h6>{{$user->email}}</h6>
                                                    <h6>+91 {{$user->mobile}}</h6>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="box mt-3">
                                        <div class="box-title">
                                            <h3>Address Book</h3>
                                                                     </div>
                                        <div class="row">
                                            <div class="col-sm-6 ps-3">
                                                <h6>Default Billing Address</h6>
                                                <address>
                                                    {{$defaultAddress->address}}  <br>
                                                    {{$defaultAddress->city}}, {{$defaultAddress->state}} <br>
                                                    {{$defaultAddress->pincode}}</address>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="address">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mt-0">
                                        <div class="card-body">
                                            <div class="top-sec">
                                                <h3>Address Book</h3>
                                                <a href="{{ route('add_address') }}" class="btn btn-sm btn-solid">+ add
                                                    new</a>
                                            </div>
                                            <div class="address-book-section">
                                                <div class="row g-4">
                                                    @foreach ($address as $add)
                                                    <div class="select-box active col-xl-4 col-md-6">
                                                        <div class="address-box">
                                                            <div class="top">
                                                                <h6>{{$add->user->name}}

                                                                    @if ($add->is_default)
                                                                    <span>Default</span>
                                                                    @endif
                                                                </h6>
                                                            </div>
                                                            <div class="middle">
                                                                <div class="address">
                                                                    <p>{{$add->address}}</p>
                                                                    <p>{{$add->city}}, {{$add->state}}</p>
                                                                    <p>{{$add->pincode}}</p>
                                                                </div>
                                                                <div class="number">
                                                                    <p>mobile: <span>+91-{{$add->mobile}}</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="bottom">
                                                                <a href="{{ route('edit_address', ['id'=>$add->id]) }}"
                                                                    class="bottom_btn">edit</a>
                                                                <button wire:confirm="Are You Want To Sure Delete "
                                                                    wire:click="deleteAddress({{$add->id}})"
                                                                    class="bottom_btn">remove</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card dashboard-table mt-0">
                                        <div class="card-body table-responsive-sm">
                                            <div class="top-sec">
                                                <h3>My Orders</h3>
                                            </div>
                                            <div class="table-responsive-xl">
                                                <table class="table cart-table order-table">
                                                    <thead>
                                                        <tr class="table-head">
                                                            <th scope="col">SR No.</th>
                                                            <th scope="col">Order Id</th>
                                                            <th scope="col">Payment Status</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach ($orders as $index=> $order)
                                                        <tr>
                                                            <td>
                                                                <span class="mt-0">{{$index+1}}</span>

                                                            </td>
                                                            <td>
                                                                <a href="{{ route('view_order', ['id'=>$order->order_number]) }}"
                                                                    class="mt-0">#{{$order->order_number}}</a>
                                                            </td>
                                                            <td>
                                                                @if ($order->payment_status == 'paid')
                                                                <span
                                                                    class="badge rounded-pill bg-success custom-badge">{{$order->payment_status}}</span>
                                                                @else
                                                                <span
                                                                    class="badge rounded-pill bg-warning text-dark custom-badge">{{$order->payment_status}}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if ($order->status == 'pending')
                                                                <span
                                                                    class="badge rounded-pill bg-warning custom-badge">{{$order->status}}</span>
                                                                @elseif ($order->status == 'accepted')
                                                                <span
                                                                    class="badge rounded-pill bg-success  custom-badge">{{$order->status}}</span>
                                                                @elseif ($order->status == 'cancelled')
                                                                <span
                                                                    class="badge rounded-pill bg-danger  custom-badge">{{$order->status}}</span>


                                                                @else
                                                                <span
                                                                    class="badge rounded-pill bg-info  custom-badge">{{$order->status}}</span>

                                                                @endif
                                                            </td>
                                                            <td>
                                                                <span class="theme-color fs-6">₹
                                                                    {{$order->total_amount}}</span>
                                                            </td>

                                                        </tr>
                                                        @endforeach





                                                    </tbody>
                                                </table>
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
    <!--  dashboard section end -->



</div>