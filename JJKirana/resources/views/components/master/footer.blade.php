<section class="news-part" style="background: url({{ asset('storage/images/newsletter.jpg') }}) no-repeat center">
    <div class="container">
        <div class="row align-items-center">
        </div>
    </div>
</section>
<section class="intro-part">
    <div class="container">
        <div class="row intro-content">
            <div class="col-sm-6 col-lg-3">
                <div class="intro-wrap">
                    <div class="intro-icon"><i class="fas fa-truck"></i></div>
                    <div class="intro-content">
                        <h5>Fast home delivery</h5>
                        <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="intro-wrap">
                    <div class="intro-icon"><i class="fas fa-sync-alt"></i></div>
                    <div class="intro-content">
                        <h5>instant return policy</h5>
                        <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="intro-wrap">
                    <div class="intro-icon"><i class="fas fa-headset"></i></div>
                    <div class="intro-content">
                        <h5>quick support system</h5>
                        <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="intro-wrap">
                    <div class="intro-icon"><i class="fas fa-lock"></i></div>
                    <div class="intro-content">
                        <h5>secure payment way</h5>
                        <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer-part">
    <div class="container">
        @php $details = getSettingByType('contact') @endphp
        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <div class="footer-widget">
                    <a class="footer-logo" href="#"><img src="{{ asset('storage/images/logo.png') }}"
                            alt="logo" /></a>
                    <p class="footer-desc">
                        {{ $details->line[0] }}
                    </p>
                    <ul class="footer-social">
                        <li><a class="icofont-facebook" href="{{ $details->social->facebook }}"></a></li>

                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="footer-widget contact">
                    <h3 class="footer-title">contact us</h3>
                    <ul class="footer-contact">
                        <li>
                            <i class="icofont-ui-email"></i>
                            <p>
                                <span>{{ $details->email }}</span>
                            </p>
                        </li>
                        <li>
                            <i class="icofont-ui-touch-phone"></i>
                            <p>
                                <span>{{ $details->contact }}</span>
                            </p>
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i>
                            <p>{{ $details->address }}</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="footer-widget">
                    <h3 class="footer-title">quick Links</h3>
                    <div class="footer-links">
                        <ul>
                            <li><a href="{{ route('profile') }}">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="{{ route('orderlist') }}">Order Tracking</a></li>
                            <li><a href="#">Best Seller</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ route('contactus') }}">Contact</a></li>
                            <li><a href="">Carrer</a></li>
                            <li><a href="{{ route('faq') }}">Faq</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="footer-widget">
                    <h3 class="footer-title">Download App</h3>
                    <p class="footer-desc">
                        {{ $details->line[1] }}
                    </p>
                    <div class="footer-app">
                        <a href="#"><img src="{{ asset('storage/images/google-store.png') }}"
                                alt="google" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="footer-bottom">
                    <p class="footer-copytext">
                        &copy; All Copyrights Reserved by <a href="index.html">JJ Kirana</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
