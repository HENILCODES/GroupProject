@extends('layouts.app')

@section('title')
    Mango
@endsection

@section('head')
<link rel="stylesheet" href="{{asset("css/brand-single.css")}}" />
@endsection

@section('body')
    <section class="single-banner" style="background: url(/storage/images/single-banner.jpg) no-repeat center">
        <div class="container">
            <h2>{{$brand['name']}}</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <span class="mx-2 fw-bold text-white">/</span>
                <li class="breadcrumb-item"><a href="{{ route('brands.index') }}">Brands</a></li>
                <span class="mx-2 fw-bold text-white">/</span>
                <li class="breadcrumb-item active" aria-current="page">
                    Brand
                </li>
            </ol>
        </div>
    </section>
    <div class="brand-single">
        <a href="#"><img src="{{ asset('storage/images/brand/'.$brand['image']) }}" alt="brand" /></a><a href="#">
            <h3>{{$brand['name']}}</h3>
        </a>
        <p>({{totalProductItem('brand_id',$brand['id'])}} items)</p>
    </div>
    <section class="inner-section shop-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-filter">
                        <div class="filter-show">
                            <label class="filter-label">Show :</label><select class="form-select filter-select">
                                <option value="1">12</option>
                                <option value="2">24</option>
                                <option value="3">36</option>
                            </select>
                        </div>
                        <div class="filter-short">
                            <label class="filter-label">Short by :</label><select class="form-select filter-select">
                                <option selected>default</option>
                                <option value="3">trending</option>
                                <option value="1">featured</option>
                                <option value="2">recommend</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-5">
                @forelse ($products as $product)
                    <div class="col">
                    <x-products.cards.first name="{{$product['name']}}" image="{{$product['image']}}" price="{{$product['price']}}" badge="{{$product['badge']}}" rate="{{$product['rate']}}" />
                    </div>
                @empty
                    <h1>No Data</h1>
                @endforelse
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="bottom-paginate">
                        <p class="page-info">Showing 12 of 60 Results</p>
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-left"></i></a>
                            </li>
                            <li class="page-item">
                                <a class="page-link active" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">...</li>
                            <li class="page-item"><a class="page-link" href="#">60</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
