@extends('layouts.app')

@section('title')
    Not Found
@endsection

@section('head')
<link rel="stylesheet" href="{{asset("css/coming-soon.css")}}" />
@endsection

@section('body')
<section class="coming-part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="coming-content">
                    <h1 class="coming-title">coming soon...</h1>
                    <div class="countdown coming-clock" data-countdown="2023/12/12 23:59:59">
                        <span class="countdown-time"><span>00</span><small>days</small></span><span
                            class="countdown-time"><span>00</span><small>hours</small></span><span
                            class="countdown-time"><span>00</span><small>minutes</small></span><span
                            class="countdown-time"><span>00</span><small>seconds</small></span>
                    </div>
                    <h3 class="coming-subtitle">
                        We are currently working on an awesome new site. Subscribe to
                        our newsletter to stay updated.
                    </h3>
                    <form class="coming-form">
                        <input type="text" placeholder="enter your email" /><button>
                            <i class="icofont-paper-plane"></i>
                        </button>
                    </form>
                    <div class="coming-social">
                        <a class="icofont-facebook" href="#"></a><a class="icofont-twitter" href="#"></a><a
                            class="icofont-linkedin" href="#"></a><a class="icofont-instagram"
                            href="#"></a><a class="icofont-pinterest" href="#"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <img class="img-fluid" src="{{asset("storage/images/coming-soon.png")}}" alt="coming-soon" />
            </div>
        </div>
    </div>
</section>
@endsection
