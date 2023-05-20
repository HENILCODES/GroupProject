{{-- slidar nav bar --}}
<aside class="nav-sidebar">
    <div class="nav-header">
        <a href="#"><img src="{{ 'storage/images/logo.png' }}" alt="logo" /></a><button class="nav-close"><i
                class="icofont-close"></i></button>
    </div>
    <div class="nav-content">
        <div class="nav-btn mt-3">
            <a href="login.html" class="btn btn-inline"><i class="fa fa-unlock-alt"></i><span>join here</span></a>
        </div>
        <ul class="nav-list">
            <li>
                <a class="nav-link" href="index.html"><i class="icofont-home"></i>Home</a>
            </li>
            <li>
                <a class="nav-link" href="about.html"><i class="icofont-info-circle"></i>About Us</a>
            </li>
            <li>
                <a class="nav-link" href="all-category.html"><i class="icofont-page"></i>Categories</a>
            </li>
            <li>
                <a class="nav-link" href="contact.html"><i class="icofont-contacts"></i>Contact Us</a>
            </li>
            @auth
                <li>
                    <form action="{{ route('logout') }}" method="post">@csrf <button type="submit"><i class="icofont-logout"></i> Log out</button>
                    </form>
                </li>
            @else
                <li><a class="nav-link" href="{{ route('login') }}"><i class="icofont-logout"></i> Log in</a></li>
            @endauth
        </ul>
        <div class="nav-info-group">
            <div class="nav-info">
                <i class="icofont-ui-touch-phone"></i>
                <p><small>call us</small><span>(+880) 183 8288 389</span></p>
            </div>
            <div class="nav-info">
                <i class="icofont-ui-email"></i>
                <p><small>email us</small><span>support@example.com</span></p>
            </div>
        </div>
        <div class="nav-footer">
            <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
        </div>
    </div>
</aside>

{{-- mobile bottom nav bar --}}
<div class="mobile-menu">
    <button class="cate-btn" title="Category List"><i class="bi bi-tags-fill fs-4"></i><span>category</span></button>

    <a href="wishlist.html" title="Wishlist"><i class="bi bi-heart-fill fs-4"></i><span>wishlist</span><sup>0</sup></a>

    <button class="cart-btn" title="Cartlist"><i
            class="bi bi-bag-check-fill fs-4"></i><span>cartlist</span><sup>9+</sup></button>

    <a href="#" title="Order List"><i class="bi bi-cart-check-fill fs-4"></i><span>Order</span></a>

    <a href="#" title="Order History"><i class="fas fa-history fs-2"></i><span>History</span></a>
</div>
