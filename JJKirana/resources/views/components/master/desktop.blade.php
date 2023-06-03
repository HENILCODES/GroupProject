<div class="backdrop"></div>
{{-- header top head line --}}
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="header-top-welcome">
                    <marquee behavior="" direction="">Welcome to {{ env('APP_NAME') }} store.</marquee>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end --}}

{{-- title bar --}}
<a class="backtop fas fa-arrow-up" href="#"></a>
<header class="header-part">
    <div class="container">
        <div class="header-content">
            <div class="header-media-group">
                <button class="header-user">
                    <img src="{{ asset('storage/images/user.png') }}" alt="user" /></button>
                <a href="index.html"><img src="{{ asset('storage/images/logo.png') }}" alt="logo" /></a>
                <button class="header-src"><i class="fas fa-search"></i></button>
            </div>
            <a href="index.html" class="header-logo"><img src="{{ asset('storage/images/logo.png') }}"
                    alt="logo" /></a>
            <form class="header-form">
                <input type="text" placeholder="Search anything..." />
                <button><i class="fas fa-search"></i></button>
            </form>
            <div class="header-widget-group">
                <a href="wishlist.html" class="header-widget" title="Wishlist"><i
                        class="fas fa-heart"></i><sup>6</sup></a>
                <button class="header-widget header-cart" title="Cartlist">
                    <i class="fas fa-shopping-basket"></i><sup>9+</sup><span>total price<small>₹345.00</small></span>
                </button>
            </div>
        </div>
    </div>
</header>
{{-- end --}}

{{-- Desktop Nav Bar Start --}}
<nav class="navbar-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-content">
                    <ul class="navbar-list">
                        <li class="navbar-item dropdown">
                            <a class="navbar-link" href="{{ route('home') }}">home</a>
                        </li>
                        <li class="navbar-item dropdown">
                            <a class="navbar-link" href="{{ route('aboutus') }}">About Us</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link" href="{{ route('categorys.index') }}">categorys</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link" href="{{ route('brands.index') }}">Brands</a>
                        </li>
                        <li class="navbar-item dropdown">
                            <a class="navbar-link" href="{{ route('contactus') }}">Contact Us</a>
                        </li>
                        <li class="navbar-item dropdown">
                            <a class="navbar-link" href="contact.html">help</a>
                        </li>
                    </ul>
                    <div class="navbar-info-group">
                        <ul class="navbar-list">
                            <li class="navbar-item dropdown">
                                <span class="header-widget navbar-link dropdown-arrow"><img
                                        src="{{ asset('storage/images/user.png') }}" alt="user" /></span>
                                <ul class="dropdown-position-list">
                                    <li><a href="{{route('profile')}}">my profile</a></li>
                                    <li><a href="{{route('orderlist')}}">order history</a></li>
                                    <li><a href="wallet.html">my wallet</a></li>
                                    @auth
                                        <li>
                                            <form action="{{ route('logout') }}" method="post">@csrf <button
                                                    type="submit">Log out</button> </form>
                                        </li>
                                    @else
                                        <li><a href="{{ route('login') }}">Log in</a></li>
                                    @endauth
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
{{-- end --}}
