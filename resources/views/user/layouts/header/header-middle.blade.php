<div class="header-middle ptb-15">
    <div class="container">
        <div class="row align-items-center no-gutters">
            <div class="col-lg-3 col-md-12">
                <div class="logo mb-all-30">
                    <a href="{{ route('user.index') }}"><img src="{{ url('user')}}/img\logo\logo.png" alt="logo-image"></a>
                </div>
            </div>
            <!-- Categorie Search Box Start Here -->
            <div class="col-lg-5 col-md-8 ml-auto mr-auto col-10">
                <div class="categorie-search-box">
                    <form action="#">
                        <div class="form-group">
                            <select class="bootstrap-select" name="poscats">
                                <option value="0">Danh mục</option>
                                <option value="2">Arrivals</option>
                                <option value="3">Cameras</option>
                                <option value="4">Cords and Cables</option>
                                <option value="5">gps accessories</option>
                                <option value="6">Microphones</option>
                                <option value="7">Wireless Transmitters</option>
                                <option value="8">GamePad</option>
                                <option value="9">cube lifestyle hd</option>
                                <option value="10">Bags</option>
                                <option value="11">Bottoms</option>
                                <option value="12">Shirts</option>
                                <option value="13">Tailored</option>
                                <option value="14">Home &amp; Kitchen</option>
                                <option value="15">Large Appliances</option>
                                <option value="16">Armchairs</option>
                                <option value="17">Bunk Bed</option>
                                <option value="18">Mattress</option>
                                <option value="19">Sideboard</option>
                                <option value="20">Small Appliances</option>
                                <option value="21">Bootees Bags</option>
                                <option value="22">Jackets</option>
                                <option value="23">Shelf</option>
                                <option value="24">Shoes</option>
                                <option value="25">Phones &amp; Tablets</option>
                                <option value="26">Tablet</option>
                                <option value="27">phones</option>
                            </select>
                        </div>
                        <input type="text" name="search" placeholder="Bạn muốn mua gì...?">
                        <button><i class="lnr lnr-magnifier"></i></button>
                    </form>
                </div>
            </div>
            <!-- Categorie Search Box End Here -->
            <!-- Cart Box Start Here -->
            <div class="col-lg-4 col-md-12">
                <div class="cart-box mt-all-30">
                    <ul class="d-flex justify-content-lg-end justify-content-center align-items-center">
                        <li><a href="#"><i class="lnr lnr-cart"></i><span class="my-cart"><span class="total-pro">2</span><span>giỏ hàng</span></span></a>
                            <ul class="ht-dropdown cart-box-width">
                                <li>
                                    <!-- Cart Box Start -->
                                    <div class="single-cart-box">
                                        <div class="cart-img">
                                            <a href="#"><img src="{{ url('user')}}/img\products\1.jpg" alt="cart-image"></a>
                                            <span class="pro-quantity">1X</span>
                                        </div>
                                        <div class="cart-content">
                                            <h6><a href="{{ url('user')}}/product.html">Printed Summer Red </a></h6>
                                            <span class="cart-price">27.45</span>
                                            <span>Size: S</span>
                                            <span>Color: Yellow</span>
                                        </div>
                                        <a class="del-icone" href="#"><i class="ion-close"></i></a>
                                    </div>
                                    <!-- Cart Box End -->
                                    <!-- Cart Box Start -->
                                    <div class="single-cart-box">
                                        <div class="cart-img">
                                            <a href="#"><img src="{{ url('user')}}/img\products\2.jpg" alt="cart-image"></a>
                                            <span class="pro-quantity">1X</span>
                                        </div>
                                        <div class="cart-content">
                                            <h6><a href="{{ url('user')}}/product.html">Printed Round Neck</a></h6>
                                            <span class="cart-price">45.00</span>
                                            <span>Size: XL</span>
                                            <span>Color: Green</span>
                                        </div>
                                        <a class="del-icone" href="#"><i class="ion-close"></i></a>
                                    </div>
                                    <!-- Cart Box End -->
                                    <!-- Cart Footer Inner Start -->
                                    <div class="cart-footer">
                                        <ul class="price-content">
                                            <li>Subtotal <span>$57.95</span></li>
                                            <li>Shipping <span>$7.00</span></li>
                                            <li>Taxes <span>$0.00</span></li>
                                            <li>Total <span>$64.95</span></li>
                                        </ul>
                                        <div class="cart-actions text-center">
                                            <a class="cart-checkout" href="{{ url('user')}}/checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                    <!-- Cart Footer Inner End -->
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="lnr lnr-heart"></i><span class="my-cart"><span>Danh sách</span><span>yêu thích (0)</span></span></a>
                        </li>
                        <li><a href="#"><i class="lnr lnr-user"></i><span class="my-cart"><span> <strong>Sign in</strong> Or</span><span> Join My Site</span></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Cart Box End Here -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>