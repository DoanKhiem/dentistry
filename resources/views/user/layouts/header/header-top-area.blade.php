<div class="header-top-area">
    <div class="container">
        <!-- Header Top Start -->
        <div class="header-top">
            <ul>
                <li><a href="#">Free Shipping on order over $99</a></li>
                <li><a href="#">Shopping Cart</a></li>
                <li><a href="{{ route('user.checkout') }}">Checkout</a></li>
            </ul>
            <ul>                                          
                <li><span>Ngôn ngữ</span> <a href="#"><i class="lnr lnr-chevron-down"></i></a>
                    <!-- Dropdown Start -->
                    <ul class="ht-dropdown">
                        <li><a href="#"><img src="{{ url('user')}}/img\header\1.jpg" alt="language-selector">English</a></li>
                        <li><a href="#"><img src="{{ url('user')}}/img\header\2.jpg" alt="language-selector">Francis</a></li>
                    </ul>
                    <!-- Dropdown End -->
                </li>
                <!-- <li><span>Tiền tệ</span><a href="#"> USD $ <i class="lnr lnr-chevron-down"></i></a> -->
                    <!-- Dropdown Start -->
                    <!-- <ul class="ht-dropdown">
                        <li><a href="#">&#36; USD</a></li>
                        <li><a href="#"> € Euro</a></li>
                        <li><a href="#">&#163; Pound Sterling</a></li>
                    </ul> -->
                    <!-- Dropdown End -->
                <!-- </li> -->
                <li><a href="{{ route('user.register') }}">Đăng ký</a>
                    <!-- Dropdown Start -->
                    <!-- <ul class="ht-dropdown">
                        <li><a href="{{ route('user.login') }}">Login</a></li>
                        <li><a href="{{ route('user.register') }}">Register</a></li>
                    </ul> -->
                    <!-- Dropdown End -->
                </li> 
                <li><a href="{{ route('user.login') }}">Đăng nhập</a>
                    <!-- Dropdown Start -->
                    <!-- <ul class="ht-dropdown">
                        <li><a href="{{ route('user.login') }}">Login</a></li>
                        <li><a href="{{ route('user.register') }}">Register</a></li>
                    </ul> -->
                    <!-- Dropdown End -->
                </li> 
            </ul>
        </div>
        <!-- Header Top End -->
    </div>
    <!-- Container End -->
</div>