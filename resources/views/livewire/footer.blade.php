<div>
      <!-- Modal start -->
   
    <!-- modal end -->
    <div>
        <div class="footer">
            <!-- Begin Footer Static Top Area -->

            <!-- Footer Static Top Area End Here -->
            <!-- Begin Footer Static Middle Area -->
            <div class="footer-static-middle">
                <div class="container pt-3">
                    <div class="row">
                        <!-- Begin Footer Logo Area -->
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-logo">
                                <img src="{{ asset($setting->logo) }}" style="width: 130px" alt="Footer Logo">
                                <p class="info">
                                    {{$setting->slogan}}
                                </p>
                            </div>
                            <ul class="des">
                                <li>
                                    <span>Address: </span>
                                    {{$setting->address}}
                                </li>
                                <li>
                                    <span>Phone: </span>
                                    <a href="tel:{{$setting->phone}}
"> {{$setting->phone}}
                                    </a>
                                </li>
                                <li>
                                    <span>Email: </span>
                                    <a href="mailto:{{$setting->email}}"> {{$setting->email}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Footer Logo Area End Here -->
                        <!-- Begin Footer Block Area -->
                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <div class="footer-block">
                                <h3 class="footer-block-title">SHOP</h3>
                                <ul>
                                    @foreach ($categories as $cat)
                                    <li><a
                                            href="{{ route('categoryItem', ['category'=>$cat->slug]) }}">{{$cat->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Block Area End Here -->
                        <!-- Begin Footer Block Area -->
                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <div class="footer-block">
                                <h3 class="footer-block-title">Our company</h3>
                                <ul>
                                    <li><a href="#">Delivery</a></li>
                                    <li><a href="#">Legal Notice</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Block Area End Here -->
                        <!-- Begin Footer Block Area -->
                        <div class="col-lg-4">
                            <div class="footer-block">
                                <h3 class="footer-block-title">Follow Us</h3>
                                <ul class="social-link">
                                    <li class="twitter">
                                        <a href="{{$setting->twitter}}" data-toggle="tooltip" target="_blank"
                                            title="Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>


                                    <li class="facebook">
                                        <a href="{{$setting->facebook}}" data-toggle="tooltip" target="_blank"
                                            title="Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="{{$setting->youtube}}" data-toggle="tooltip" target="_blank"
                                            title="Youtube">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a href="{{$setting->instagram}}" data-toggle="tooltip" target="_blank"
                                            title="Instagram">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="{{$setting->twitter}}" data-toggle="tooltip" target="_blank"
                                            title="Linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Begin Footer Newsletter Area -->
                            <div class="footer-newsletter">
                                <h4>Sign up to newsletter</h4>
                                <form action="#" method="post" id="mc-embedded-subscribe-form"
                                    name="mc-embedded-subscribe-form" class="footer-subscribe-form validate"
                                    target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <div id="mc-form" class="mc-form subscribe-form form-group">
                                            <input id="mc-email" type="email" autocomplete="off"
                                                placeholder="Enter your email" />
                                            <button class="btn" id="mc-submit">Subscribe</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Footer Newsletter Area End Here -->
                        </div>
                        <!-- Footer Block Area End Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Static Middle Area End Here -->
        <!-- Begin Footer Static Bottom Area -->

        <!-- Footer Static Bottom Area End Here -->
    </div>
    <!-- Footer Area End Here -->
    <!-- Begin Quick View | Modal Area -->

</div>
<!-- Quick View | Modal Area End Here -->