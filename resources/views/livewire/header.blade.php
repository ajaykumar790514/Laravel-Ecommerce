<div>




    <!-- Begin Header Area -->
    <header>
        <!-- Begin Header Top Area -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <!-- Begin Header Top Left Area -->
                    <div class="col-lg-3 col-md-4">
                        <div class="header-top-left">
                            <ul class="phone-wrap">
                                <li><span>Telephone Enquiry:</span><a href="tel:{{$setting->phone}}">&nbsp;  +91 {{$setting->phone}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top Left Area End Here -->
                    <!-- Begin Header Top Right Area -->
                    <div class="col-lg-9 col-md-8">
                        <div class="header-top-right">
                            <ul class="ht-menu">
                                <!-- Begin Setting Area -->
                                <li>
                                    <div class="ht-setting-trigger"><span>Setting</span></div>
                                    <div class="setting ht-setting">
                                        <ul class="ht-setting-list">
                                            <li><a href="{{ route('user_dashboard') }}">My Account</a></li>
                                            <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                            <li><a href="{{ route('login') }}">Sign In</a></li>

                                            @if (auth()->user())

                                            <li><a href="{{ route('logout') }}">Sign Out</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </li>
                                <!-- Setting Area End Here -->
                                <!-- Begin Currency Area -->
                               
                                <!-- Currency Area End Here -->
                                <!-- Begin Language Area -->
                             
                                <!-- Language Area End Here -->
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top Right Area End Here -->
                </div>
            </div>
        </div>
        <!-- Header Top Area End Here -->
        <!-- Begin Header Middle Area -->
        <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
            <div class="container">
                <div class="row">
                    <!-- Begin Header Logo Area -->
                    <div class="col-lg-3">
                        <div class="logo pb-sm-30 pb-xs-30">
                            <a href="{{ route('index') }}">
                                @if ($setting->logo)
                                <img src="{{ asset($setting->logo) }}" style="width: 150px" alt="">

                                @endif </a>
                        </div>
                    </div>
                    <!-- Header Logo Area End Here -->
                    <!-- Begin Header Middle Right Area -->
                    <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                        <!-- Begin Header Middle Searchbox Area -->
                        <form action="#" class="hm-searchbox">

                            <input type="text" placeholder="Enter your search key ...">
                            <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <!-- Header Middle Searchbox Area End Here -->
                        <!-- Begin Header Middle Right Area -->
                        <div class="header-middle-right">
                            <ul class="hm-menu">
                                <!-- Begin Header Middle Wishlist Area -->
                          
                                <!-- Header Middle Wishlist Area End Here -->
                                <!-- Begin Header Mini Cart Area -->
                                <li class="hm-minicart">
                                    <div class="hm-minicart-trigger">
                                        <span class="item-icon"></span>
                                        <span class="item-text">₹ {{$totalPrice}}
                                            <span class="cart-item-count">{{$cartItem ? count($cartItem) :
                                                0}}</span>
                                        </span>
                                    </div>
                                    <span></span>
                                    <div class="minicart">
                                        <ul class="minicart-product-list">
                                            @if ($cartItem)
                                            @foreach ($cartItem as $cItem)

                                            <li>
                                                @if ($cItem['image'])
                                                <a href="single-product.html" class="minicart-product-image">
                                                    <img src="{{ asset($cItem['image']) }}" alt="cart products">
                                                </a>

                                                @endif
                                                <div class="minicart-product-details">
                                                    <h6><a
                                                            href="single-product.html">{{$cItem['title']?$cItem['title']:''}}</a>
                                                    </h6>

                                                    <span>{{$cItem['varient']?$cItem['varient']['offer_price']:''}}
                                                        x
                                                        {{$cItem['quantity']?$cItem['quantity']:''}}</span>
                                                </div>
                                                <button class="close" title="Remove"
                                                    wire:click="$dispatch('removeCart',{'pr_id':{{$cItem['productId']}}})">
                                                    <i class="fa fa-close"></i>
                                                </button>
                                            </li>
                                            @endforeach
                                            @endif

                                        </ul>
                                        <p class="minicart-total">SUBTOTAL: <span>₹ {{$totalPrice}}</span></p>
                                        <div class="minicart-button">
                                            <a href="{{ route('cart') }}"
                                                class="li-button li-button-fullwidth li-button-dark">
                                                <span>View Full Cart</span>
                                            </a>
                                            <a href="{{ route('checkout') }}" class="li-button li-button-fullwidth">
                                                <span>Checkout</span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <!-- Header Mini Cart Area End Here -->
                            </ul>
                        </div>
                        <!-- Header Middle Right Area End Here -->
                    </div>
                    <!-- Header Middle Right Area End Here -->
                </div>
            </div>
        </div>
        <!-- Header Middle Area End Here -->
        <!-- Begin Header Bottom Area -->
        <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Begin Header Bottom Menu Area -->
                        <div class="hb-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('index') }}">Home</a>

                                    </li>

                                    <li class="dropdown-holder"><a href="">Shop</a>
                                        <ul class="hb-dropdown">

                                            @foreach ($categories as $category)
                                            <li class="sub-dropdown-holder"><a
                                                    href="{{ route('categoryItem', ['category'=>$category->slug]) }}">
                                                    {{$category->name}}
                                                </a>
                                                <ul class="hb-dropdown hb-sub-dropdown">
                                                    @foreach ($category->subCategory as $subCat)
                                                    <li>
                                                        <a
                                                            href="{{ route('category', ['category'=>$category->slug,'sub_category'=>$subCat->slug]) }}">{{$subCat->name}}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endforeach

                                        </ul>
                                    </li>

                                    <li class="dropdown-holder"><a href="">Brands</a>
                                        <ul class="hb-dropdown">

                                            @foreach ($brands as $brand)
                                            <li class="dropdown-holder"><a>
                                                    {{$brand->name}}
                                                </a>

                                            </li>
                                            @endforeach

                                        </ul>
                                    </li>

                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    <li><a href="{{ route('custom_product') }}">Customizable Product</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Bottom Menu Area End Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom Area End Here -->
        <!-- Begin Mobile Menu Area -->
        <div class="mobile-menu-area d-lg-none d-xl-none col-12">
            <div class="container">
                <div class="row">
                    <div class="mobile-menu">
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area End Here -->
    </header>
</div>