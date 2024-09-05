<div>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="active"><a href="">{{$subCategory->first()->category->name}}</a></li>
                    <li class="active">{{$subCategory->first()->name}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!-- Begin Li's Content Wraper Area -->
    <div class="content-wraper pt-60 pb-60 pt-sm-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-1 order-lg-2">
                    <!-- Begin Li's Banner Area -->

                    <!-- Li's Banner Area End Here -->
                    <!-- shop-top-bar start -->
                    <div class="shop-top-bar mt-30">
                        <div class="shop-bar-inner">
                            <div class="product-view-mode">
                                <!-- shop-item-filter-list start -->
                                <ul class="nav shop-item-filter-list" role="tablist">
                                    <li class="active" role="presentation"><a aria-selected="true" class="active show"
                                            data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i
                                                class="fa fa-th"></i></a></li>
                                    <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view"
                                            href="#list-view"><i class="fa fa-th-list"></i></a></li>
                                </ul>
                                <!-- shop-item-filter-list end -->
                            </div>
                            <div class="toolbar-amount">
                                <span>Showing 1 to 9 of 15</span>
                            </div>
                        </div>
                        <!-- product-select-box start -->
                        <div class="product-select-box">
                            <div class="product-short">
                                <p>Sort By:</p>
                                <select class="nice-select">
                                    <option value="trending">Relevance</option>
                                    <option value="sales">Name (A - Z)</option>
                                    <option value="sales">Name (Z - A)</option>
                                    <option value="rating">Price (Low &gt; High)</option>
                                    <option value="date">Rating (Lowest)</option>
                                    <option value="price-asc">Model (A - Z)</option>
                                    <option value="price-asc">Model (Z - A)</option>
                                </select>
                            </div>
                        </div>
                        <!-- product-select-box end -->
                    </div>
                    <!-- shop-top-bar end -->
                    <!-- shop-products-wrapper start -->
                    <div class="shop-products-wrapper">
                        <div class="tab-content">
                            <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                <div class="product-area shop-product-area">
                                    <div class="row">
                                        @foreach ($categoryItems as $item)
                                        <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image" style="min-height: 200px">
                                                    <a
                                                        href="{{ route('product_detail', ['cat'=>$item->category->slug,'sub_cat'=>$item->subCategory->slug,'id'=>$item->id]) }}">
                                                        <img src="{{ asset($item->images->first()->image) }}"
                                                            alt="Li's Product Image">
                                                    </a>
                                                    <span class="sticker">New</span>
                                                </div>
                                                <div class="product_desc">
                                                    <div class="product_desc_info">
                                                        <div class="product-review">
                                                            <h5 class="manufacturer">
                                                                <a
                                                                    href="product-details.html">{{$item->category->name}}</a>
                                                            </h5>
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star-o"></i>
                                                                    </li>
                                                                    <li class="no-star"><i class="fa fa-star-o"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4><a class="product_name"
                                                                href="{{ route('product_detail', ['cat'=>$item->category->slug,'sub_cat'=>$item->subCategory->slug,'id'=>$item->id]) }}">{{$item->name}}</a>
                                                        </h4>
                                                        <div class="price-box">
                                                            <span class="new-price">₹
                                                                {{$item->variants->first()->offer_price}}</span>
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
                            <div id="list-view" class="tab-pane fade product-list-view" role="tabpanel">
                                <div class="row">
                                    <div class="col">
                                        @foreach ($categoryItems as $item)
                                        <div class="row product-layout-list">
                                            <div class="col-lg-3 col-md-5 ">
                                                <div class="product-image" style="min-height: 200px">
                                                    <a
                                                        href="{{ route('product_detail', ['cat'=>$item->category->slug,'sub_cat'=>$item->subCategory->slug,'id'=>$item->id]) }}">
                                                        <img src="{{ asset($item->images->first()->image) }}"
                                                            alt="Li's Product Image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-7">
                                                <div class="product_desc">
                                                    <div class="product_desc_info">
                                                        <div class="product-review">
                                                            <h5 class="manufacturer">
                                                                <a>{{$item->category->name}}</a>
                                                            </h5>
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star-o"></i>
                                                                    </li>
                                                                    <li class="no-star"><i class="fa fa-star-o"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4><a class="product_name"
                                                                href="{{ route('product_detail', ['cat'=>$item->category->slug,'sub_cat'=>$item->subCategory->slug,'id'=>$item->id]) }}">{{$item->name}}</a>
                                                        </h4>
                                                        <div class="price-box">
                                                            <span class="new-price">₹
                                                                {{$item->variants->first()->offer_price}}</span>
                                                        </div>
                                                        <p>{{ substr($item->description, 0, 150) }}...</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                            <div class="paginatoin-area">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 pt-xs-15">
                                        <p>Showing 1-12 of 13 item(s)</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul class="pagination-box pt-xs-20 pb-xs-15">
                                            <li><a href="#" class="Previous"><i class="fa fa-chevron-left"></i>
                                                    Previous</a>
                                            </li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li>
                                                <a href="#" class="Next"> Next <i class="fa fa-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop-products-wrapper end -->
                </div>
                <div class="col-lg-3 order-2 order-lg-1">
                    <!--sidebar-categores-box start  -->

                    <!--sidebar-categores-box end  -->
                    <!--sidebar-categores-box start  -->
                    <div class="sidebar-categores-box">
                        <h4>{{$subCategory->first()->category->name}}</h4>
                        <div class="sidebar-title">
                            <h2>Filter By</h2>
                        </div>
                        <!-- btn-clear-all start -->
                        <button class="btn-clear-all mb-sm-30 mb-xs-30" wire:click = 'resetFilter'>Clear all</button>
                        <!-- btn-clear-all end -->
                        <!-- filter-sub-area start -->
                        <div class="filter-sub-area">
                            <h5 class="filter-sub-titel">Brand</h5>
                            <div class="categori-checkbox">

                                <ul>

                                    @foreach ($brands as $brand)

                                    <li wire:key="{{$brand->name}}">
                                        <input wire:model.live="selectedBrand" type="checkbox" value="{{$brand->id}}">

                                        <a>{{$brand->name}}</a>
                                    </li>
                                    @endforeach

                                </ul>

                            </div>
                        </div>
                        <!-- filter-sub-area end -->
                        <!-- filter-sub-area start -->
                        {{-- <div class="filter-sub-area pt-sm-10 pt-xs-10">
                            <h5 class="filter-sub-titel">Categories</h5>
                            <div class="categori-checkbox">
                                <form action="#">
                                    <ul>
                                        @foreach ($subCategory as $subCat)

                                        <li wire:key="{{$subCat->name}}"><input type="radio" name="brand"><a
                                                href="#">{{$subCat->name}}</a></li>
                                        @endforeach

                                    </ul>
                                </form>
                            </div>
                        </div> --}}
                        <!-- filter-sub-area end -->
                        <!-- filter-sub-area start -->

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>