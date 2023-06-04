@extends('layouts.app')

@section('title')
    - Home
@endsection
@section('head')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
@endsection

@section('body')
    {{-- banner top --}}
    <section class="banner-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-1 order-lg-0 order-xl-0">
                    <div class="row">
                        <div class="col-sm-6 col-lg-12">
                            <div class="home-grid-promo">
                                <a href="#"><img src="{{ asset('storage/images/promo/home/' . $homeTopBanner->first) }}"
                                        alt="promo" /></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-12">
                            <div class="home-grid-promo">
                                <a href="#"><img
                                        src="{{ asset('storage/images/promo/home/' . $homeTopBanner->second) }}"
                                        alt="promo" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-0 order-lg-1 order-xl-1">
                    <div class="home-grid-slider slider-arrow slider-dots">
                        @forelse ($homeTopBanner->slider as $slider)
                            <a href="{{ $slider->url }}"><img src="{{ asset('storage/images/home/grid/' . $slider->image) }}"
                                    alt="{{ $slider->image }}" /></a>
                        @empty
                            <h3>No Data Found</h3>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- category list --}}
    <section class="section suggest-part">
        <div class="container">
            <ul class="suggest-slider slider-arrow">
                @forelse ($categorys as $category)
                    <li>
                        <a class="suggest-card" href="{{ route('categorys.show', $category['id']) }}"><img
                                src="{{ asset('storage/images/suggest/' . $category['image']) }}" alt="suggest" />
                            <h5>{{ $category['name'] }} <span>{{ totalProductItem('category_id', $category['id']) }}
                                    items</span></h5>
                        </a>
                    </li>
                @empty
                    <h4>No Category</h4>
                @endforelse
            </ul>
        </div>
    </section>

    {{-- resent sell --}}
    <section class="section recent-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>recently sold items</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                @forelse ($products as $product)
                    @if ($product['badge'] == 'sale')
                        <div class="col">
                            <x-products.cards.first id="{{ $product['id'] }}" badge="{{ $product['badge'] }}"
                                image="{{ $product['image'] }}" name="{{ $product['name'] }}"
                                price="{{ $product['price'] }}" rate="{{ $product['rate'] }}" />
                        </div>
                    @endif
                @empty
                    <h3>No Data Found</h3>
                @endforelse
            </div>
            <div cass="row">
                <div class="col-lg-12">
                    <div class="section-btn-25">
                        <a href="shop-5column.html" class="btn btn-outline"><i class="fas fa-eye"></i><span>show
                                more</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ad banner --}}
    <x-home.promoCard image="{{ $homePromo->first }}" />


    {{-- features item --}}
    <section class="section feature-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>our featured items</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">

                @forelse ($products as $product)
                    @if ($product['badge'] == 'feature')
                        <x-products.cards.second id="{{ $product['id'] }}" badge="{{ $product['badge'] }}"
                            image="{{ $product['image'] }}" name="{{ $product['name'] }}"
                            brand="{{ $product['brands'] }}" price="{{ $product['price'] }}"
                            rate="{{ $product['badge'] }}" description="{{ $product['description'] }}" />
                    @endif
                @empty
                    <h5>No Features item found</h5>
                @endforelse
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25">
                        <a href="shop-5column.html" class="btn btn-outline"><i class="fas fa-eye"></i><span>show
                                more</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <x-home.countDownOffer title="{{ $homeCountDownOffer->title }}" description="{{ $homeCountDownOffer->description }}"
        endDate="{{ $homeCountDownOffer->endDate }}" offer="{{ $homeCountDownOffer->offer }}"
        image="{{ $homeCountDownOffer->image }}" />


    {{-- new product list --}}
    <section class="section newitem-part">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-heading">
                        <h2>collected new items</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="new-slider slider-arrow">
                        @forelse ($products as $product)
                            @if ($product['badge'] == 'new')
                                <li>
                                    <x-products.cards.first id="{{ $product['id'] }}" badge="{{ $product['badge'] }}"
                                        image="{{ $product['image'] }}" name="{{ $product['name'] }}"
                                        price="{{ $product['price'] }}" rate="{{ $product['rate'] }}" />
                                </li>
                            @endif
                        @empty
                            <h1>No latest found</h1>
                        @endforelse
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="section-btn-25">
                        <a href="shop-5column.html" class="btn btn-outline"><i class="fas fa-eye"></i><span>show
                                more</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- promo card --}}
    <x-home.promoCard image="{{ $homePromo->second }}" />

    {{-- brands list --}}
    <section class="section brand-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>shop by brands</h2>
                    </div>
                </div>
            </div>
            <div class="brand-slider slider-arrow">
                @forelse ($brands as $brand)
                    <x-brands.card name="{{ $brand['name'] }}" item="{{ totalProductItem('brand_id', $brand['id']) }}"
                        id="{{ $brand['id'] }}" image="{{ $brand['image'] }}" />
                @empty
                    <h1>No Brands Found</h1>
                @endforelse

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-50">
                        <a href="brand-list.html" class="btn btn-outline"><i class="fas fa-eye"></i><span>view all
                                brands</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
