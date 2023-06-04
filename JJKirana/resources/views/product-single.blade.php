@extends('layouts.app')

@section('title')
    {{ $product['name'] }}
@endsection

@section('head')
    <link rel="stylesheet" href="{{ asset('css/product-details.css') }}">
@endsection

@section('body')
    <section class="single-banner inner-section" style="background: url(/storage/images/single-banner.jpg) no-repeat center">
        <div class="container">
            <h2>{{ $product['name'] }}</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <span class="mx-2 fw-bold text-white">/</span>

                <li class="breadcrumb-item"><a href="{{ route('brands.index') }}">Brands</a></li>
                <span class="mx-2 fw-bold text-white">/</span>

                <li class="breadcrumb-item"><a href="{{ route('brands.show', $product['brand_id']) }}">Brand</a></li>
                <span class="mx-2 fw-bold text-white">/</span>
                <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
        </div>
    </section>
    <section class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="details-gallery">
                        <div class="details-label-group">
                            <label class="details-label {{ $product['badge'] }}">{{ $product['badge'] }}</label>
                        </div>
                        <ul class="details-preview">
                            <li><img src="{{ asset('storage/images/product/01.jpg') }}" alt="product" /></li>
                            <li><img src="{{ asset('storage/images/product/02.jpg') }}" alt="product" /></li>
                            <li><img src="{{ asset('storage/images/product/03.jpg') }}" alt="product" /></li>
                            <li><img src="{{ asset('storage/images/product/04.jpg') }}" alt="product" /></li>
                            <li><img src="{{ asset('storage/images/product/05.jpg') }}" alt="product" /></li>
                        </ul>
                        <ul class="details-thumb">
                            <li><img src="{{ asset('storage/images/product/01.jpg') }}" alt="product" /></li>
                            <li><img src="{{ asset('storage/images/product/02.jpg') }}" alt="product" /></li>
                            <li><img src="{{ asset('storage/images/product/03.jpg') }}" alt="product" /></li>
                            <li><img src="{{ asset('storage/images/product/04.jpg') }}" alt="product" /></li>
                            <li><img src="{{ asset('storage/images/product/05.jpg') }}" alt="product" /></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="product-navigation">
                        <li class="product-nav-prev">
                            <a href="#"><i class="icofont-arrow-left"></i>prev product
                                <span class="product-nav-popup"><img src="{{ asset('storage/images/product/02.jpg') }}"
                                        alt="product" /><small>green chilis</small></span></a>
                        </li>
                        <li class="product-nav-next">
                            <a href="#">next product <i class="icofont-arrow-right"></i><span
                                    class="product-nav-popup"><img src="{{ asset('storage/images/product/03.jpg') }}"
                                        alt="product" /><small>green chilis</small></span></a>
                        </li>
                    </ul>
                    <div class="details-content">
                        <h3 class="details-name">
                            <a>{{ $product['name'] }}</a>
                        </h3>
                        <div class="details-meta">
                            <p>SKU:<span>{{ $product['id'] * 100 }}</span></p>
                            <p>BRAND:<a href="{{ route('brands.show', $brand['id']) }}">{{ $brand['name'] }}</a></p>
                        </div>
                        <h3 class="details-price">
                            <del style="margin-right: 10px !important">₹{{ $product['price'] + 10 }}</del><span
                                class="fw-bold">₹{{ $product['price'] }} </span><span
                                style="color: rgb(152, 111, 255) !important">
                                {{ $product['rate'] }}</span>
                        </h3>
                        <p class="details-desc">
                            {{ $product['description'] }}
                        </p>
                        <div class="details-list-group">
                            <label class="details-list-title">tags:</label>
                            <ul class="details-tag-list">
                                <li><a>{{ $product['name'] }}</a></li>
                                @isset($tags)
                                    {!! $tags['tag'] !!}
                                @endisset
                            </ul>
                        </div>
                        <div class="details-list-group">
                            <label class="details-list-title">Share:</label>
                            <ul class="details-share-list">
                                <li>
                                    <a href="#" class="icofont-facebook" title="Facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="icofont-twitter" title="Twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="icofont-linkedin" title="Linkedin"></a>
                                </li>
                                <li>
                                    <a href="#" class="icofont-instagram" title="Instagram"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="details-add-group">
                            <button class="product-add" title="Add to Cart">
                                <i class="fas fa-shopping-basket"></i><span>add to cart</span>
                            </button>
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus">
                                    <i class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1" /><button
                                    class="action-plus" title="Quantity Plus">
                                    <i class="icofont-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="details-action-group">
                            <a class="details-wish wish" href="#" title="Add Your Wishlist"><i
                                    class="icofont-heart"></i><span>add to wish</span></a><a class="details-compare"
                                href="compare.html" title="Compare This Item"><i class="fas fa-random"></i><span>Compare
                                    This</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
