@extends('layouts.app')
@section('title')
    - Order List
@endsection

@section('head')
    <link rel="stylesheet" href="{{ asset('css/orderlist.css') }}">
@endsection

@section('body')
    <section class="inner-section single-banner" style="background: url(/storage/images/single-banner.jpg) no-repeat center">
        <div class="container">
            <h2>Order History</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Orderlist</li>
            </ol>
        </div>
    </section>
    <section class="inner-section orderlist-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="orderlist-filter">
                        <h5>total order <span>- (4)</span></h5>
                        <div class="filter-short">
                            <label class="form-label">short by:</label><select class="form-select">
                                <option value="all" selected>all order</option>
                                <option value="recieved">recieved order</option>
                                <option value="processed">processed order</option>
                                <option value="shipped">shipped order</option>
                                <option value="delivered">delivered order</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                   <x-orders.list-card />
                   <x-orders.list-card />
                   <x-orders.list-card />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="icofont-arrow-left"></i></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link active" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">...</li>
                        <li class="page-item"><a class="page-link" href="#">65</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="icofont-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
