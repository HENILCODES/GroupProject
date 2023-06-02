@extends('layouts.app')

@section('title')
    - Brands
@endsection
@section('head')
    <link rel="stylesheet" href="css/brand-list.css" />
@endsection

@section('body')
    <section class="inner-section single-banner" style="background: url(/storage/images/single-banner.jpg) no-repeat center">
        <div class="container">
            <h2>Brands</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <span class="mx-2 fw-bold text-white">/</span>
                <li class="breadcrumb-item active" aria-current="page">Brands</li>
            </ol>
        </div>
    </section>
    <section class="inner-section">
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
                            <label class="filter-label">Short by :</label>
                            <select class="form-select filter-select isotope-select">
                                <option value="*" selected>show all</option>
                                @forelse ($brands as $brand)
                                    <option value=".{{ $brand['name'] }}">{{ $brand['name'] }}</option>
                                @empty
                                    <option>No Data Found</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 isotope-items">
                @forelse ($brands as $brand)
                    <div class="col all {{ $brand['name'] }}">

                        <x-brands.card name="{{ $brand['name'] }}" id="{{ $brand['id'] }}"
                            item="{{ totalProductItem('brand_id', $brand['id']) }}" image="{{ $brand['image'] }}" />
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
