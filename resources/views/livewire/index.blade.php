<div>
    <div class="slider-with-banner">
        <div class="container">
            <div class="row">
                <!-- Begin Slider Area -->
                <div class="col-lg-12 ">
                    <div class="slider-area">
                        <div class="slider-active owl-carousel">

                            @foreach ($banners as $banner)
                                
                            <div class="single-slide align-center-left  animation-style-01 bg-home"
                                style="background-image: url('{{asset($banner->image)}}')">
                                <div class="slider-progress"></div>
                          
                            </div>
                            @endforeach
                            <!-- Begin Single Slide Area -->
                            <!-- Single Slide Area End Here -->
                            <!-- Begin Single Slide Area -->
                            {{-- <div class="single-slide align-center-left animation-style-02 bg-home"
                                style="background-image: url('/img/banner/2.jpg')">
                                <div class="slider-progress"></div>
                               
                            </div> --}}
                            <!-- Single Slide Area End Here -->
                         
                            <!-- Single Slide Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Slider Area End Here -->
                <!-- Begin Li Banner Area -->
                {{-- <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                    <div class="li-banner">
                        <a href="#">
                            <img src="{{ asset('img/banner/40.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="li-banner mt-15 mt-sm-30 mt-xs-30">
                        <a href="#">
                            <img src="{{ asset('img/banner/38.jpg') }}" alt="">
                        </a>
                       
                          
                          
                    </div>
                   
                </div> --}}
                <!-- Li Banner Area End Here -->
            </div>
        </div>
    </div>
    <div class="product-area pt-60 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="li-product-tab">
                        <ul class="nav li-product-menu">
                            <li><a class="active" data-toggle="tab" href="#li-new-product"><span>New Arrival</span></a>
                            </li>
                            <li><a data-toggle="tab" href="#li-bestseller-product"><span>Bestseller</span></a></li>
                            <li><a data-toggle="tab" href="#li-featured-product"><span>Featured Products</span></a></li>
                        </ul>
                    </div>
                    <!-- Begin Li's Tab Menu Content Area -->
                </div>
            </div>
            <div class="tab-content">
                <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                    <div class="row">
                        <div class="product-active owl-carousel">
                            @foreach ($newProduct as $newPr)
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a
                                            href="{{ route('product_detail', ['cat'=>$newPr->category->slug,'sub_cat'=>$newPr->subCategory->slug,'id'=>$newPr->id]) }}">
                                            @if($newPr->images->isNotEmpty())
                                            <img src="{{ asset($newPr->images->first()->image) }}"
                                                alt="Li's Product Image">
                                            @endif
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">{{$newPr->brand->name}}</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name"
                                                    href="{{ route('product_detail', ['cat'=>$newPr->category->slug,'sub_cat'=>$newPr->subCategory->slug,'id'=>$newPr->id]) }}">{{$newPr->name}}</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">₹
                                                    {{$newPr->variants->first()->offer_price}}</span>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            @endforeach



                        </div>
                    </div>
                </div>
                <div id="li-bestseller-product" class="tab-pane" role="tabpanel">
                    <div class="row">
                        <div class="product-active owl-carousel">
                            @foreach ($bestProduct as $bestprod)
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a
                                            href="{{ route('product_detail', ['cat'=>$bestprod->category->slug,'sub_cat'=>$bestprod->subCategory->slug,'id'=>$bestprod->id]) }}">
                                            @if($bestprod->images->isNotEmpty())
                                            <img src="{{ asset($bestprod->images->first()->image) }}"
                                                alt="Li's Product Image">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">{{$bestprod->brand->name}}</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name"
                                                    href="{{ route('product_detail', ['cat'=>$bestprod->category->slug,'sub_cat'=>$bestprod->subCategory->slug,'id'=>$bestprod->id]) }}">{{$bestprod->name}}</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">₹
                                                    {{$bestprod->variants->first()->offer_price}}</span>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div id="li-featured-product" class="tab-pane" role="tabpanel">
                    <div class="row">
                        <div class="product-active owl-carousel">
                            @foreach ($products as $prod)
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a
                                            href="{{ route('product_detail', ['cat'=>$prod->category->slug,'sub_cat'=>$prod->subCategory->slug,'id'=>$prod->id]) }}">
                                            @if($prod->images->isNotEmpty())
                                            <img src="{{ asset($prod->images->first()->image) }}"
                                                alt="Li's Product Image">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">{{$prod->brand->name}}</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name"
                                                    href="{{ route('product_detail', ['cat'=>$prod->category->slug,'sub_cat'=>$prod->subCategory->slug,'id'=>$prod->id]) }}">{{$prod->name}}</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">₹
                                                    {{$prod->variants->first()->offer_price}}</span>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            @endforeach



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="li-static-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Begin Li's Static Home Image Area -->

                    @if($offerBanner)
                    <div class="li-static-home-image" style="background-image: url('{{asset($offerBanner->image)}}')"></div>
                    @endif
                    <!-- Li's Static Home Image Area End Here -->
                    <!-- Begin Li's Static Home Content Area -->
                   
                    <!-- Li's Static Home Content Area End Here -->
                </div>
            </div>
        </div>
    </div>

    @foreach ($categoryProducts as $catPro)

    <section class="product-area li-laptop-product pt-60 pb-45">
        <div class="container">
            <div class="row">
                <!-- Begin Li's Section Area -->
                <div class="col-lg-12">
                    <div class="li-section-title">
                        <h2>
                            <span>{{$catPro->name}}</span>
                        </h2>

                    </div>
                    <div class="row">
                        <div class="product-active owl-carousel">
                            @foreach ($catPro->products as $proItem)
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a
                                            href="{{ route('product_detail', ['cat'=>$proItem->category->slug,'sub_cat'=>$proItem->subCategory->slug,'id'=>$proItem->id]) }}">
                                            @if($proItem->images->isNotEmpty())
                                            <img src="{{ asset($proItem->images->first()->image) }}"
                                                alt="Li's Product Image">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="">{{$proItem->brand->name}}</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="single-product.html">
                                                    {{$proItem->name}}
                                                </a></h4>
                                            <div class="price-box">
                                                <span class="new-price">₹
                                                    {{$proItem->variants->first()->offer_price}}</span>
                                            </div>
                                        </div>
                                        {{-- <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                <li><a class="links-details" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                            
                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- Li's Section Area End Here -->
            </div>
        </div>
    </section>

    @endforeach


    <div class="footer-static-top">
        <div class="container">
            <!-- Begin Footer Shipping Area -->
            <div class="footer-shipping pt-60 pb-55 pb-xs-25">
                <div class="row">
                    <!-- Begin Li's Shipping Inner Box Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                        <div class="li-shipping-inner-box">
                            <div class="shipping-icon">
                                <img src="{{ asset('img/shipping-icon/1.png') }}" alt="Shipping Icon">
                            </div>
                            <div class="shipping-text">
                                <h2>Free Delivery</h2>
                                <p>And free returns. See checkout for delivery dates.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Shipping Inner Box Area End Here -->
                    <!-- Begin Li's Shipping Inner Box Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                        <div class="li-shipping-inner-box">
                            <div class="shipping-icon">
                                <img src="{{ asset('img/shipping-icon/2.png') }}" alt="Shipping Icon">
                            </div>
                            <div class="shipping-text">
                                <h2>Safe Payment</h2>
                                <p>Pay with the world's most popular and secure payment methods.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Shipping Inner Box Area End Here -->
                    <!-- Begin Li's Shipping Inner Box Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                        <div class="li-shipping-inner-box">
                            <div class="shipping-icon">
                                <img src="{{ asset('img/shipping-icon/3.png') }}" alt="Shipping Icon">
                            </div>
                            <div class="shipping-text">
                                <h2>Shop with Confidence</h2>
                                <p>Our Buyer Protection covers your purchasefrom click to delivery.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Shipping Inner Box Area End Here -->
                    <!-- Begin Li's Shipping Inner Box Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                        <div class="li-shipping-inner-box">
                            <div class="shipping-icon">
                                <img src="{{ asset('img/shipping-icon/4.png') }}" alt="Shipping Icon">
                            </div>
                            <div class="shipping-text">
                                <h2>24/7 Help Center</h2>
                                <p>Have a question? Call a Specialist or chat online.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Shipping Inner Box Area End Here -->
                </div>
            </div>
            <!-- Footer Shipping Area End Here -->
        </div>
    </div>
</div>