@extends('user.layouts.master')

@section('title', 'Shop')

@section('main')

        <!-- Categorie Menu & Slider Area Start Here -->
        <div class="main-page-banner pb-50 off-white-bg">
            <div class="container">
                <div class="row">
                    <!-- Vertical Menu Start Here -->
                    <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                        <div class="vertical-menu mb-all-30">
                            <nav>
                                <ul class="vertical-menu-list">
                                    <li class=""><a href="{{ url('user')}}/shop.html"><span><img src="{{ url('user')}}/img\vertical-menu\1.png" alt="menu-icon"></span>Automotive & Motorcycle<i class="fa fa-angle-right" aria-hidden="true"></i></a>

                                        <ul class="ht-dropdown mega-child">
                                            <li><a href="{{ url('user')}}/shop.html">Office chair <i class="fa fa-angle-right"></i></a>
                                                 <!-- category submenu end-->
                                                <ul class="ht-dropdown mega-child">
                                                    <li><a href="{{ url('user')}}/shop.html">Bibendum Cursus</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Dignissim Turpis</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Dining room</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Dining room</a></li>
                                                </ul>
                                                <!-- category submenu end-->
                                            </li>
                                            <li><a href="{{ url('user')}}/shop.html">Purus Lacus <i class="fa fa-angle-right"></i></a>
                                                 <!-- category submenu end-->
                                                <ul class="ht-dropdown mega-child">
                                                    <li><a href="{{ url('user')}}/shop.html">Magna Pellentesq</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Molestie Tortor</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Vehicula Element</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Sagittis Blandit</a></li>
                                                </ul>
                                                <!-- category submenu end-->
                                            </li>                                            
                                            <li><a href="{{ url('user')}}/shop.html">Sagittis Eget</a></li>
                                            <li><a href="{{ url('user')}}/shop.html">Sagittis Eget</a></li>
                                        </ul>
                                        <!-- category submenu end-->
                                    </li>
                                    <li><a href="{{ url('user')}}/shop.html"><span><img src="{{ url('user')}}/img\vertical-menu\3.png" alt="menu-icon"></span>Sports & Outdoors<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <!-- Vertical Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu first-megamenu">
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Cameras</li>
                                                    <li><a href="{{ url('user')}}/shop.html">Cords and Cables</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">gps accessories</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Microphones</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Wireless Transmitters</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="menu-tile">GamePad</li>
                                                    <li><a href="{{ url('user')}}/shop.html">real game hd</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">fighting game</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">racing pad</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">puzzle pad</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Digital Cameras</li>
                                                    <li><a href="{{ url('user')}}/shop.html">Camera one</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Camera two</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Camera three</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Camera four</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="menu-tile">Virtual Reality</li>
                                                    <li><a href="{{ url('user')}}/shop.html">Reality one</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Reality two</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Reality three</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Reality four</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Megamenu Image Start -->
                                            <li class="megamenu-img">
                                                <a href="{{ url('user')}}/shop.html"><img src="{{ url('user')}}/img\vertical-menu\sub-img1.jpg" alt="menu-image"></a>
                                                <a href="{{ url('user')}}/shop.html"><img src="{{ url('user')}}/img\vertical-menu\sub-img2.jpg" alt="menu-image"></a>
                                                <a href="{{ url('user')}}/shop.html"><img src="{{ url('user')}}/img\vertical-menu\sub-img3.jpg" alt="menu-image"></a>
                                            </li>
                                            <!-- Single Megamenu Image End -->
                                        </ul>
                                        <!-- Vertical Mega-Menu End -->
                                    </li>
                                    <li><a href="{{ url('user')}}/shop.html"><span><img src="{{ url('user')}}/img\vertical-menu\6.png" alt="menu-icon"></span>Fashion<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <!-- Vertical Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu megamenu-two">
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Men’s Fashion</li>
                                                    <li><a href="{{ url('user')}}/shop.html">Blazers</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Boots</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">pants</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Tops & Tees</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Women’s Fashion</li>
                                                    <li><a href="{{ url('user')}}/shop.html">Bags</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Bottoms</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Shirts</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Tailored</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                        </ul>
                                        <!-- Vertical Mega-Menu End -->
                                    </li>
                                    <li><a href="{{ url('user')}}/shop.html"><span><img src="{{ url('user')}}/img\vertical-menu\7.png" alt="menu-icon"></span>Home & Kitchen<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <!-- Vertical Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu megamenu-two">
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Large Appliances</li>
                                                    <li><a href="{{ url('user')}}/shop.html">Armchairs</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Bunk Bed</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Mattress</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Sideboard</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Small Appliances</li>
                                                    <li><a href="{{ url('user')}}/shop.html">Bootees Bags</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Jackets</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Shelf</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Shoes</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                        </ul>
                                        <!-- Vertical Mega-Menu End --> 
                                    </li>
                                    <li><a href="{{ url('user')}}/shop.html"><span><img src="{{ url('user')}}/img\vertical-menu\4.png" alt="menu-icon"></span>Phones & Tablets<i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                        <!-- Vertical Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu megamenu-two">
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Tablet</li>
                                                    <li><a href="{{ url('user')}}/shop.html">tablet one</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">tablet two</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">tablet three</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">tablet four</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Smartphone</li>
                                                    <li><a href="{{ url('user')}}/shop.html">phone one</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">phone two</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">phone three</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">phone four</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                        </ul>
                                        <!-- Vertical Mega-Menu End -->
                                    </li>
                                    <li><a href="{{ url('user')}}/shop.html"><span><img src="{{ url('user')}}/img\vertical-menu\6.png" alt="menu-icon"></span>TV & Video<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <!-- Vertical Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu megamenu-two">
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Gaming Desktops</li>
                                                    <li><a href="{{ url('user')}}/shop.html">Alpha Desktop</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">rober Desktop</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Ultra Desktop </a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">beta desktop</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Women’s Fashion</li>
                                                    <li><a href="{{ url('user')}}/shop.html">3D-Capable</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Clearance</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">Free Shipping Eligible</a></li>
                                                    <li><a href="{{ url('user')}}/shop.html">On Sale</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                        </ul>
                                        <!-- Vertical Mega-Menu End -->
                                    </li>
                                     <li><a href="{{ url('user')}}/shop.html"><span><img src="{{ url('user')}}/img\vertical-menu\5.png" alt="menu-icon"></span>Beauty</a>
                                    </li>
                                    <li><a href="{{ url('user')}}/shop.html"><span><img src="{{ url('user')}}/img\vertical-menu\8.png" alt="menu-icon"></span>Fruits & Veggies</a></li>
                                    <li><a href="{{ url('user')}}/shop.html"><span><img src="{{ url('user')}}/img\vertical-menu\9.png" alt="menu-icon"></span>Computer & Laptop</a></li>
                                    <li><a href="{{ url('user')}}/shop.html"><span><img src="{{ url('user')}}/img\vertical-menu\10.png" alt="menu-icon"></span>Meat & Seafood</a></li>
                                    <!-- More Categoies Start -->
                                    <li id="cate-toggle" class="category-menu v-cat-menu">
                                        <ul>
                                            <li class="has-sub"><a #">More Categories</a>
                                                <ul class="category-sub">
                                                    <li><a href="{{ url('user')}}/shop.html"><span><img src="{{ url('user')}}/img\vertical-menu\11.png" alt="menu-icon"></span>Accessories</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- More Categoies End -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Vertical Menu End Here -->
                    <!-- Slider Area Start Here -->
                    <div class="col-xl-9 col-lg-8 slider_box">
                        <div class="slider-wrapper theme-default">
                            <!-- Slider Background  Image Start-->
                            <div id="slider" class="nivoSlider">
                                <a href="{{ url('user')}}/shop.html"><img src="{{ url('user')}}/img\slider\1.jpg" data-thumb="img/slider/1.jpg" alt="" title="#htmlcaption"></a>
                                <a href="{{ url('user')}}/shop.html"><img src="{{ url('user')}}/img\slider\2.jpg" data-thumb="img/slider/2.jpg" alt="" title="#htmlcaption2"></a>
                            </div>
                            <!-- Slider Background  Image Start-->
                        </div>
                    </div>
                    <!-- Slider Area End Here -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Categorie Menu & Slider Area End Here -->
        <!-- Brand Banner Area Start Here -->
        <div class="image-banner pb-50 off-white-bg">
            <div class="container">
                <div class="col-img">
                    <a #"><img src="{{ url('user')}}/img\banner\h1-banner.jpg" alt="image banner"></a>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Brand Banner Area End Here -->
        <!-- Hot Deal Products Start Here -->
        <div class="hot-deal-products off-white-bg pb-90 pb-sm-50">
            <div class="container">
               <!-- Product Title Start -->
               <div class="post-title pb-30">
                   <h2>hot deals</h2>
               </div>
               <!-- Product Title End -->
                <!-- Hot Deal Product Activation Start -->
                <div class="hot-deal-active owl-carousel">
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="{{ url('user')}}/product.html">
                                <img class="primary-img" src="{{ url('user')}}/img\products\1.jpg" alt="single-product">
                                <img class="secondary-img" src="{{ url('user')}}/img\products\7.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="{{ url('user')}}/product.html">
                                <img class="primary-img" src="{{ url('user')}}/img\products\24.jpg" alt="single-product">
                                <img class="secondary-img" src="{{ url('user')}}/img\products\25.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="{{ url('user')}}/product.html">Light Inverted Pendant Quick</a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="{{ url('user')}}/product.html">
                                <img class="primary-img" src="{{ url('user')}}/img\products\42.jpg" alt="single-product">
                                <img class="secondary-img" src="{{ url('user')}}/img\products\43.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="{{ url('user')}}/product.html">Terra Xpress HE Cooking </a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">15<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="{{ url('user')}}/product.html">
                                <img class="primary-img" src="{{ url('user')}}/img\products\30.jpg" alt="single-product">
                                <img class="secondary-img" src="{{ url('user')}}/img\products\31.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="{{ url('user')}}/product.html">Calandiva Wrapped 12cm</a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="{{ url('user')}}/product.html">
                                <img class="primary-img" src="{{ url('user')}}/img\products\8.jpg" alt="single-product">
                                <img class="secondary-img" src="{{ url('user')}}/img\products\9.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="{{ url('user')}}/product.html">Gpoly and Bark Eames Styl...</a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">10<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="{{ url('user')}}/product.html">
                                <img class="primary-img" src="{{ url('user')}}/img\products\10.jpg" alt="single-product">
                                <img class="secondary-img" src="{{ url('user')}}/img\products\11.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">37<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Single Product End -->
                </div>
                <!-- Hot Deal Product Active End -->

            </div>
            <!-- Container End -->
        </div>
        <!-- Hot Deal Products End Here -->
        <!-- Hot Deal Products End Here -->

        <!-- Big Banner Start Here -->
        <div class="big-banner mt-100 pb-85 mt-sm-60 pb-sm-45">
            <div class="container banner-2">
                <div class="banner-box">
                    <div class="col-img">
                        <a #"><img src="{{ url('user')}}/img\banner\banner3-1.jpg" alt="banner 3"></a>
                    </div>
                    <div class="col-img">
                        <a #"><img src="{{ url('user')}}/img\banner\banner3-2.jpg" alt="banner 3"></a>
                    </div>
                </div>
                <div class="banner-box">
                    <div class="col-img">
                        <a #"><img src="{{ url('user')}}/img\banner\banner3-3.jpg" alt="banner 3"></a>
                    </div>
                </div>
                <div class="banner-box">
                    <div class="col-img">
                        <a #"><img src="{{ url('user')}}/img\banner\banner3-4.jpg" alt="banner 3"></a>
                    </div>
                    <div class="col-img">
                        <a #"><img src="{{ url('user')}}/img\banner\banner3-5.jpg" alt="banner 3"></a>
                    </div>
                </div>
                <div class="banner-box">
                    <div class="col-img">
                        <a #"><img src="{{ url('user')}}/img\banner\banner3-6.jpg" alt="banner 3"></a>
                    </div>
                </div>
                <div class="banner-box">
                    <div class="col-img">
                        <a #"><img src="{{ url('user')}}/img\banner\banner3-7.jpg" alt="banner 3"></a>
                    </div>
                    <div class="col-img">
                        <a #"><img src="{{ url('user')}}/img\banner\banner3-8.jpg" alt="banner 3"></a>
                    </div>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Big Banner End Here -->
        <!-- Arrivals Products Area Start Here -->
        <div class="arrivals-product pb-85 pb-sm-45">
            <div class="container">
                <div class="main-product-tab-area">
                    <div class="tab-menu mb-25">
                        <div class="section-ttitle">
                            <h2>New Arrivals</h2>
                       </div>
                        <!-- Nav tabs -->
                        <ul class="nav tabs-area" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" #fshion">Fashion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" #beauty">Beauty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" #electronics">Sport/Outdoor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" #kids">Living</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" #beauty">Food</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" #kids">Baby/Kids</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" #electronics">Electronics </a>
                            </li>
                        </ul>                       

                    </div> 

                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div id="fshion" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="electronics-pro-active owl-carousel">
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\1.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\2.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Work Lamp Silver Proin</a></h4>
                                                <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\3.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\4.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Gpoly and Bark Eames Style</a></h4>
                                                <p><span class="price">$150.30</span><del class="prev-price">$175.50</del></p>
                                                <div class="label-product l_sale">10<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\5.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\6.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\8.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\9.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Eames and Bark  Style</a></h4>
                                                <p><span class="price">$180.45</span><del class="prev-price">$200.50</del></p>
                                                <div class="label-product l_sale">18<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\11.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\12.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Eames and Vortex Side</a></h4>
                                                <p><span class="price">$160.45</span><del class="prev-price">$190.50</del></p>
                                                <div class="label-product l_sale">12<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\15.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\16.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Bark Vortex Side Eames</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\13.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\14.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\1.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\7.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #fshion End Here -->
                        <div id="kids" class="tab-pane fade show active">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="electronics-pro-active owl-carousel">
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\42.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\43.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Utensils and Knives Block</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\40.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\41.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Terra Xpress HE Cooking </a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$300.50</del></p>
                                                <div class="label-product l_sale">25<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\39.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\38.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Robert Welch Knife Block</a></h4>
                                                <p><span class="price">$100.45</span><del class="prev-price">$150.50</del></p>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\36.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\37.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$90.50</span><del class="prev-price">$120.50</del></p>
                                                <div class="label-product l_sale">15<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\35.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\36.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Bark and  Vortex Side</a></h4>
                                                <p><span class="price">$69.20</span><del class="prev-price">$145.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\34.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\35.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Compary and Bark Vortex Shewe</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\32.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\33.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">kallery kids  weare</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\1.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\7.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #fshion End Here -->
                        <div id="beauty" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="electronics-pro-active owl-carousel">
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\43.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\42.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\41.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\39.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\5.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\6.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\9.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\10.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\11.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\12.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\3.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\4.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\43.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\42.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\1.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\7.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #beauty End Here -->
                        <div id="electronics" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="electronics-pro-active owl-carousel">
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\17.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\18.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Flos Chasen S2 Suspension</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\19.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\20.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Country Squire Florist</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\20.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\21.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Concord Fabric Single</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\21.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\22.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\23.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\24.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Gpoly and Bark Eames Style</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\24.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\25.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Vortex and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\26.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\27.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Bark and Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\28.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\29.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Electronic and Bark Vortex</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #electronics End Here -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Arrivals Products Area End Here -->
        <!-- Arrivals Products Area Start Here -->
        <div class="second-arrivals-product pb-45 pb-sm-5">
            <div class="container">
                <div class="main-product-tab-area">
                    <div class="tab-menu mb-25">
                        <div class="section-ttitle">
                            <h2>Best Seller</h2>
                       </div>
                        <!-- Nav tabs -->
                        <ul class="nav tabs-area" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" #electronics2">Electronics </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" #beauty2">Beauty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" #electronics2">Sport/Outdoor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" #kids2">Living</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" #beauty2">Food</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" #kids2">Baby/Kids</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" #fshion2">Fashion</a>
                            </li>
                        </ul>                       

                    </div> 

                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div id="fshion2" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\1.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\2.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Work Lamp Silver Proin</a></h4>
                                                <p><span class="price">$320.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\3.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\4.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Gpoly and Bark Eames Style</a></h4>
                                                <p><span class="price">$150.30</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\5.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\6.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$150.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\8.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\9.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Eames and Bark  Style</a></h4>
                                                <p><span class="price">$180.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\11.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\12.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Eames and Vortex Side</a></h4>
                                                <p><span class="price">$160.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\15.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\16.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Bark Vortex Side Eames</a></h4>
                                                <p><span class="price">$84.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\13.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\14.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$95.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ url('user')}}/product.html">
                                                <img class="primary-img" src="{{ url('user')}}/img\products\1.jpg" alt="single-product">
                                                <img class="secondary-img" src="{{ url('user')}}/img\products\7.jpg" alt="single-product">
                                            </a>
                                            <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #fshion End Here -->
                        <div id="kids2" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\42.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\43.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Utensils and Knives Block</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\40.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\41.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Terra Xpress HE Cooking </a></h4>
                                            <p><span class="price">$63.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\39.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\38.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Robert Welch Knife Block</a></h4>
                                            <p><span class="price">$100.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\36.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\37.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$90.50</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\35.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\36.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Bark and  Vortex Side</a></h4>
                                            <p><span class="price">$69.20</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\34.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\35.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Compary and Bark Vortex Shewe</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\32.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\33.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">kallery kids  weare</a></h4>
                                            <p><span class="price">$98.50</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\1.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\7.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #fshion End Here -->
                        <div id="beauty2" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\43.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\42.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\41.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\39.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\5.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\6.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\9.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\10.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\11.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\12.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\3.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\4.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #beauty End Here -->
                        <div id="electronics2" class="tab-pane fade show active">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\17.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\18.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Flos Chasen S2 Suspension</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\19.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\20.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Country Squire Florist</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\20.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\21.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Concord Fabric Single</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\21.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\22.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\23.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\24.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Gpoly and Bark Eames Style</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\24.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\25.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Vortex and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\26.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\27.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Bark and Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="{{ url('user')}}/product.html">
                                            <img class="primary-img" src="{{ url('user')}}/img\products\28.jpg" alt="single-product">
                                            <img class="secondary-img" src="{{ url('user')}}/img\products\29.jpg" alt="single-product">
                                        </a>
                                        <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="{{ url('user')}}/product.html">Electronic and Bark Vortex</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #electronics End Here -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Arrivals Products Area End Here -->
        <!-- Like Products Area Start Here -->
        <div class="like-product ptb-95 off-white-bg pt-sm-50 pb-sm-55 ">
            <div class="container">
                <div class="like-product-area"> 
                    <h2 class="section-ttitle2 mb-30">You May Like </h2>
                    <!-- Arrivals Product Activation Start Here -->
                    <div class="like-pro-active owl-carousel">
                        <!-- Double Product Start -->
                        <div class="double-product">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="{{ url('user')}}/product.html">
                                        <img class="primary-img" src="{{ url('user')}}/img\products\17.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{ url('user')}}/img\products\18.jpg" alt="single-product">
                                    </a>
                                    <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="{{ url('user')}}/product.html">Flos Chasen S2 Suspension</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                             <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="{{ url('user')}}/product.html">
                                        <img class="primary-img" src="{{ url('user')}}/img\products\19.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{ url('user')}}/img\products\20.jpg" alt="single-product">
                                    </a>
                                    <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="{{ url('user')}}/product.html">Country Squire Florist</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Double Product End -->
                        <!-- Double Product Start -->
                        <div class="double-product">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="{{ url('user')}}/product.html">
                                        <img class="primary-img" src="{{ url('user')}}/img\products\39.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{ url('user')}}/img\products\38.jpg" alt="single-product">
                                    </a>
                                    <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="{{ url('user')}}/product.html">Robert Welch Knife Block</a></h4>
                                        <p><span class="price">$100.45</span><del class="prev-price">$150.50</del></p>
                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                             <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="{{ url('user')}}/product.html">
                                        <img class="primary-img" src="{{ url('user')}}/img\products\36.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{ url('user')}}/img\products\37.jpg" alt="single-product">
                                    </a>
                                    <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                        <p><span class="price">$90.50</span><del class="prev-price">$120.50</del></p>
                                        <div class="label-product l_sale">15<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Double Product End -->                        
                        <!-- Double Product Start -->
                        <div class="double-product">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="{{ url('user')}}/product.html">
                                        <img class="primary-img" src="{{ url('user')}}/img\products\20.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{ url('user')}}/img\products\21.jpg" alt="single-product">
                                    </a>
                                    <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="{{ url('user')}}/product.html">Concord Fabric Single</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                             <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="{{ url('user')}}/product.html">
                                        <img class="primary-img" src="{{ url('user')}}/img\products\21.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{ url('user')}}/img\products\22.jpg" alt="single-product">
                                    </a>
                                    <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Double Product End -->
                        <!-- Double Product Start -->
                        <div class="double-product">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="{{ url('user')}}/product.html">
                                        <img class="primary-img" src="{{ url('user')}}/img\products\23.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{ url('user')}}/img\products\24.jpg" alt="single-product">
                                    </a>
                                    <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="{{ url('user')}}/product.html">Gpoly and Bark Eames Style</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                             <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="{{ url('user')}}/product.html">
                                        <img class="primary-img" src="{{ url('user')}}/img\products\24.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{ url('user')}}/img\products\25.jpg" alt="single-product">
                                    </a>
                                    <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="{{ url('user')}}/product.html">Vortex and Bark Vortex Side</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Double Product End -->
                        <!-- Double Product Start -->
                        <div class="double-product">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="{{ url('user')}}/product.html">
                                        <img class="primary-img" src="{{ url('user')}}/img\products\26.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{ url('user')}}/img\products\27.jpg" alt="single-product">
                                    </a>
                                    <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="{{ url('user')}}/product.html">Bark and Vortex Side</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                             <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="{{ url('user')}}/product.html">
                                        <img class="primary-img" src="{{ url('user')}}/img\products\28.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{ url('user')}}/img\products\29.jpg" alt="single-product">
                                    </a>
                                    <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="{{ url('user')}}/product.html">Electronic and Bark Vortex</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Double Product End -->
                        <!-- Double Product Start -->
                        <div class="double-product">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="{{ url('user')}}/product.html">
                                        <img class="primary-img" src="{{ url('user')}}/img\products\42.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{ url('user')}}/img\products\43.jpg" alt="single-product">
                                    </a>
                                    <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="{{ url('user')}}/product.html">Utensils and Knives Block</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                             <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="{{ url('user')}}/product.html">
                                        <img class="primary-img" src="{{ url('user')}}/img\products\40.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{ url('user')}}/img\products\41.jpg" alt="single-product">
                                    </a>
                                    <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="{{ url('user')}}/product.html">Terra Xpress HE Cooking </a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$300.50</del></p>
                                        <div class="label-product l_sale">25<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Double Product End -->
                        <!-- Double Product Start -->
                        <div class="double-product">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="{{ url('user')}}/product.html">
                                        <img class="primary-img" src="{{ url('user')}}/img\products\35.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{ url('user')}}/img\products\36.jpg" alt="single-product">
                                    </a>
                                    <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="{{ url('user')}}/product.html">Bark and  Vortex Side</a></h4>
                                        <p><span class="price">$69.20</span><del class="prev-price">$145.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                             <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="{{ url('user')}}/product.html">
                                        <img class="primary-img" src="{{ url('user')}}/img\products\34.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{ url('user')}}/img\products\35.jpg" alt="single-product">
                                    </a>
                                    <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="{{ url('user')}}/product.html">Compary and Bark Vortex Shewe</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Double Product End -->
                        <!-- Double Product Start -->
                        <div class="double-product">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="{{ url('user')}}/product.html">
                                        <img class="primary-img" src="{{ url('user')}}/img\products\32.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{ url('user')}}/img\products\33.jpg" alt="single-product">
                                    </a>
                                    <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="{{ url('user')}}/product.html">kallery kids  weare</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                             <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="{{ url('user')}}/product.html">
                                        <img class="primary-img" src="{{ url('user')}}/img\products\1.jpg" alt="single-product">
                                        <img class="secondary-img" src="{{ url('user')}}/img\products\7.jpg" alt="single-product">
                                    </a>
                                    <a #" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <div class="pro-info">
                                        <h4><a href="{{ url('user')}}/product.html">Poly and Bark Vortex Side</a></h4>
                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="{{ url('user')}}/cart.html" title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="{{ url('user')}}/compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="{{ url('user')}}/wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                                <span class="sticker-new">new</span>
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Double Product End -->                        
                    </div>
                    <!-- Arrivals Product Activation End Here -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Lile Products Area End Here -->
        <!-- Brand Banner Area Start Here -->
        <div class="main-brand-banner pt-95 pb-100 pt-sm-55 pb-sm-60">
            <div class="container">
                <div class="section-ttitle mb-20">
                    <h2>Best Seller</h2>
               </div>
                <div class="row no-gutters">
                    <div class="col-lg-3">
                        <div class="col-img">
                            <img src="{{ url('user')}}/img\banner\h1-band1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Brand Banner Start -->
                        <div class="brand-banner owl-carousel">
                            <div class="single-brand">
                                <a #"><img class="img" src="{{ url('user')}}/img\brand\1.jpg" alt="brand-image"></a>
                                <a #"><img src="{{ url('user')}}/img\brand\2.jpg" alt="brand-image"></a>
                                <a #"><img src="{{ url('user')}}/img\brand\3.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a #"><img class="img" src="{{ url('user')}}/img\brand\1.jpg" alt="brand-image"></a>
                                <a #"><img src="{{ url('user')}}/img\brand\2.jpg" alt="brand-image"></a>
                                <a #"><img src="{{ url('user')}}/img\brand\3.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a #"><img src="{{ url('user')}}/img\brand\1.jpg" alt="brand-image"></a>
                                <a #"><img src="{{ url('user')}}/img\brand\2.jpg" alt="brand-image"></a>
                                <a #"><img src="{{ url('user')}}/img\brand\3.jpg" alt="brand-image"></a>

                            </div>
                            <div class="single-brand">
                                <a #"><img src="{{ url('user')}}/img\brand\2.jpg" alt="brand-image"></a>
                                <a #"><img src="{{ url('user')}}/img\brand\3.jpg" alt="brand-image"></a>
                                <a #"><img src="{{ url('user')}}/img\brand\4.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a #"><img src="{{ url('user')}}/img\brand\2.jpg" alt="brand-image"></a>
                                <a #"><img src="{{ url('user')}}/img\brand\3.jpg" alt="brand-image"></a>
                                <a #"><img src="{{ url('user')}}/img\brand\4.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a #"><img src="{{ url('user')}}/img\brand\2.jpg" alt="brand-image"></a>
                                <a #"><img src="{{ url('user')}}/img\brand\3.jpg" alt="brand-image"></a>
                                <a #"><img src="{{ url('user')}}/img\brand\4.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a #"><img src="{{ url('user')}}/img\brand\2.jpg" alt="brand-image"></a>
                                <a #"><img src="{{ url('user')}}/img\brand\3.jpg" alt="brand-image"></a>
                                <a #"><img src="{{ url('user')}}/img\brand\4.jpg" alt="brand-image"></a>
                            </div>
                        </div>
                        <!-- Brand Banner End -->                        

                    </div>
                    <div class="col-lg-3">
                        <div class="col-img">
                            <img src="{{ url('user')}}/img\banner\h1-band2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Brand Banner Area End Here -->
        <div class="big-banner pb-100 pb-sm-60">
            <div class="container big-banner-box">
                <div class="col-img">
                    <a #">
                    <img src="{{ url('user')}}/img\banner\5.jpg" alt="">
                    </a>
                </div>
                <div class="col-img">
                    <a #">
                    <img src="{{ url('user')}}/img\banner\h1-banner3.jpg" alt="">
                    </a>
                </div>
            </div>
            <!-- Container End -->
        </div>

@endsection