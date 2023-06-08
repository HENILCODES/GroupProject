@extends('layouts.app')

@section('title')
    - checkout
@endsection
@section('head')
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
@endsection
@section('body')
    <section class="inner-section single-banner" style="background: url(/storage/images/single-banner.jpg) no-repeat center">
        <div class="container">
            <h2>checkout</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <span class="mx-2 fw-bold text-white">/</span>
                <li class="breadcrumb-item">
                    <a href="{{ route('products.index') }}">Product</a>
                </li>
                <span class="mx-2 fw-bold text-white">/</span>
                <li class="breadcrumb-item active" aria-current="page">checkout</li>
            </ol>
        </div>
    </section>
    <section class="inner-section checkout-part mb-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert-info">
                        <p>
                            Returning customer? <a href="{{ route('login') }}">Click here to login</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Your order</h4>
                        </div>
                        <div class="account-content">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="blog-slider slider-arrow">
                                        <x-products.cards.third id="0" />
                                        <x-products.cards.third id="1" />
                                        <x-products.cards.third id="2" />
                                        <x-products.cards.third id="2" />
                                        <x-products.cards.third id="2" />
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-charge w-100">
                                <ul>
                                    <li><span>Sub total</span><span>₹267.45</span></li>
                                    <li><span>delivery fee</span><span>₹10.00</span></li>
                                    <li><span>discount</span><span>₹00.00</span></li>
                                    <li>
                                        <span>Total<small>(Incl. VAT)</small></span><span>₹277.00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Delivery Schedule</h4>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card schedule active">
                                        <h6>express</h6>
                                        <p>90 min express delivery</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card schedule">
                                        <h6>8am-10pm</h6>
                                        <p>8.00 AM - 10.00 PM</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card schedule">
                                        <h6>Next day</h6>
                                        <p>Next day or Tomorrow</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Details</h4>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card address">
                                        <h6>Contact No :-</h6>
                                        <p>+91 xxxxxxxxxx</p>
                                        <ul class="user-action">
                                            <li>
                                                <button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal"
                                                    data-bs-target="#address-edit"></button>
                                            </li>
                                            <li>
                                                <button class="trash icofont-ui-delete" title="Remove This"
                                                    data-bs-dismiss="alert"></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card address">
                                        <h6>Address :-</h6>
                                        <p>204,baban chinese hotel,khariwad, nani daman</p>
                                        <ul class="user-action">
                                            <li>
                                                <button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal"
                                                    data-bs-target="#address-edit"></button>
                                            </li>
                                            <li>
                                                <button class="trash icofont-ui-delete" title="Remove This"
                                                    data-bs-dismiss="alert"></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card address">
                                        <h6>Email ID :-</h6>
                                        <p>test@test.com</p>
                                        <ul class="user-action">
                                            <li>
                                                <button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal"
                                                    data-bs-target="#address-edit"></button>
                                            </li>
                                            <li>
                                                <button class="trash icofont-ui-delete" title="Remove This"
                                                    data-bs-dismiss="alert"></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card pt-1 pb-5">
                        <div class="checkout-check">
                            <input type="checkbox" id="checkout-check" /><label for="checkout-check">By making this
                                purchase
                                you agree to our
                                <a href="#">Terms and Conditions</a>.</label>
                        </div>
                        <div class="checkout-proced">
                            <a href="invoice.html" class="btn btn-inline">proced to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
