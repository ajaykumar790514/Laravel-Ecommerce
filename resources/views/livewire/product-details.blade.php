<div>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="active">{{$product->name}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!-- content-wraper start -->
    <div class="content-wraper">
        <div class="container">
            <div class="row single-product-area">
                <div class="col-lg-5 col-md-6" wire:ignore>
                    <!-- Product Details Left -->
                    <div class="product-details-left sp-tab-style-left-page">
                        <div class="product-details-images slider-navigation-1">

                            `

                            @if($product->images->isNotEmpty())
                            @foreach ($product->images as $prodImages)
                            <div class="lg-image">
                                <a class="popup-img venobox vbox-item" href="{{ asset($prodImages->image) }}"
                                    data-gall="myGallery">
                                    <img src="{{ asset($prodImages->image) }}" alt="product image">
                                </a>
                            </div>
                            @endforeach
                            @endif


                        </div>

                        <div class="tab-style-left">

                            @if($product->images->isNotEmpty())
                            @foreach ($product->images as $prodImg)

                            <div class="sm-image"><img src="{{ asset($prodImg->image) }}" alt="product image thumb">
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <!--// Product Details Left -->
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="product-details-view-content pt-60">
                        <div class="product-info">
                            <h2>{{$product->name}}</h2>
                            <div class="rating-box pt-10">
                                <ul class="rating rating-with-review-item">
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                    <li class="no-star"><i class="fa fa-star-o"></i></li>

                                </ul>
                            </div>
                            <div class="price-box pt-20">
                                <span class="new-price new-price-2">₹ {{$firstProductVariant->offer_price}}</span>
                                <del class="ml-15 ">₹ {{$firstProductVariant->price}}</del>
                            </div>

                            <div>
                                @if ($firstProductVariant->stock>0)

                                <p class="mx-2 text-success">In Stock</p>
                                @else

                                <p class="mx-2 text-danger">Out Of Stock</p>
                                @endif
                            </div>


                            <div class="product-desc">
                                <p>
                                    <span>{{ $product->description }}
                                    </span>
                                </p>
                            </div>
                            <div class="product-variants">
                                <div class="produt-variants-size">
                                    <label>Varient</label>


                                    <div class="mt-2">
                                        @foreach ($product->variants as $var)

                                        <button wire:key='{{$var->sku}}' wire:click="updateVariant('{{$var->sku}}')"
                                            class="mx-2 btn-outline-danger btn ">
                                            {{$var->name}}
                                        </button>

                                        @endforeach
                                    </div>



                                </div>
                            </div>
                            <div class="single-add-to-cart">
                                <form action="#" class="cart-quantity">

                                    <button
                                        wire:click="$dispatch('addToCart', { p_id: {{$product->id}},'varient':{{$firstProductVariant}} })"
                                        class="add-to-cart" type="button">Add to cart</button>
                                </form>
                            </div>
                            <div class="product-additional-info pt-25">
                                <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Add to
                                    wishlist</a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wraper end -->
    <!-- Begin Product Area -->
    <div class="product-area pt-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="li-product-tab">
                        <ul class="nav li-product-menu">
                            <li><a class="active" data-toggle="tab" href="#description"><span>Description</span></a>
                            </li>
                            <li><a data-toggle="tab" href="#product-details"><span>Product Details</span></a></li>
                            <li><a data-toggle="tab" href="#reviews"><span>Reviews</span></a></li>
                        </ul>
                    </div>
                    <!-- Begin Li's Tab Menu Content Area -->
                </div>
            </div>
            <div class="tab-content">
                <div id="description" class="tab-pane active show" role="tabpanel">
                    <div class="product-description">
                        <span>{{$product->description}}</span>
                    </div>
                </div>
                <div id="product-details" class="tab-pane" role="tabpanel">
                    <div class="product-details-manufacturer">
                        {!! $product->product_details !!}
                    </div>
                </div>
                <div id="reviews" class="tab-pane" role="tabpanel">
                    <div class="product-reviews">
                        <div class="product-details-comment-block">
                            <div class="comment-review">
                                <span>Grade</span>
                                <ul class="rating">
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                            <div class="comment-author-infos pt-25">
                                <span>HTML 5</span>
                                <em>01-12-18</em>
                            </div>
                            <div class="comment-details">
                                <h4 class="title-block">Demo</h4>
                                <p>Plaza</p>
                            </div>
                            <div class="review-btn">
                                <a class="review-links" href="#" data-toggle="modal" data-target="#mymodal">Write Your
                                    Review!</a>
                            </div>
                            <!-- Begin Quick View | Modal Area -->
                            <div class="modal fade modal-wrapper" id="mymodal">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h3 class="review-page-title">Write Your Review</h3>
                                            <div class="modal-inner-area row">
                                                <div class="col-lg-6">
                                                    <div class="li-review-product">
                                                        <img src="images/product/large-size/3.jpg" alt="Li's Product">
                                                        <div class="li-review-product-desc">
                                                            <p class="li-product-name">Today is a good day Framed poster
                                                            </p>
                                                            <p>
                                                                <span>Beach Camera Exclusive Bundle - Includes Two
                                                                    Samsung Radiant 360 R3 Wi-Fi Bluetooth Speakers.
                                                                    Fill The Entire Room With Exquisite Sound via Ring
                                                                    Radiator Technology. Stream And Control R3 Speakers
                                                                    Wirelessly With Your Smartphone. Sophisticated,
                                                                    Modern Design </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="li-review-content">
                                                        <!-- Begin Feedback Area -->
                                                        <div class="feedback-area">
                                                            <div class="feedback">
                                                                <h3 class="feedback-title">Our Feedback</h3>
                                                                <form action="#">
                                                                    <p class="your-opinion">
                                                                        <label>Your Rating</label>
                                                                        <span>
                                                                            <select class="star-rating">
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                            </select>
                                                                        </span>
                                                                    </p>
                                                                    <p class="feedback-form">
                                                                        <label for="feedback">Your Review</label>
                                                                        <textarea id="feedback" name="comment" cols="45"
                                                                            rows="8" aria-required="true"></textarea>
                                                                    </p>
                                                                    <div class="feedback-input">
                                                                        <p class="feedback-form-author">
                                                                            <label for="author">Name<span
                                                                                    class="required">*</span>
                                                                            </label>
                                                                            <input id="author" name="author" value=""
                                                                                size="30" aria-required="true"
                                                                                type="text">
                                                                        </p>
                                                                        <p
                                                                            class="feedback-form-author feedback-form-email">
                                                                            <label for="email">Email<span
                                                                                    class="required">*</span>
                                                                            </label>
                                                                            <input id="email" name="email" value=""
                                                                                size="30" aria-required="true"
                                                                                type="text">
                                                                            <span class="required"><sub>*</sub> Required
                                                                                fields</span>
                                                                        </p>
                                                                        <div class="feedback-btn pb-15">
                                                                            <a href="#" class="close"
                                                                                data-dismiss="modal"
                                                                                aria-label="Close">Close</a>
                                                                            <a href="#">Submit</a>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- Feedback Area End Here -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Quick View | Modal Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded',()=>{

    document.addEventListener('livewire:init', function () {
        // Initialize nice-select when Livewire is loaded
        $('select.nice-select').niceSelect();

// Reinitialize nice-select on DOM updates
Livewire.hook('message.processed', (message, component) => {
    $('select.nice-select').niceSelect('update');
    $('select.nice-select').niceSelect();
});
    });
   })
   ;
</script>