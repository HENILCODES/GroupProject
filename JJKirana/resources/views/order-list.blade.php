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
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
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
                    <div class="orderlist">
                        <div class="orderlist-head">
                            <h5>order#01</h5>
                            <h5>order recieved</h5>
                        </div>
                        <div class="orderlist-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="order-track">
                                        <div class="col-12 col-md-12 hh-grayBox pt45 pb20">
                                            <div class="row justify-content-between">
                                                <div class="order-tracking completed">
                                                    <span class="is-complete"></span>
                                                    <p>Ordered</p>
                                                </div>
                                                <div class="order-tracking completed">
                                                    <span class="is-complete"></span>
                                                    <p>Shipped</p>
                                                </div>
                                                <div class="order-tracking">
                                                    <span class="is-complete"></span>
                                                    <p>Delivered</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <ul class="orderlist-details">
                                        <li>
                                            <h6>order id</h6>
                                            <p>14667</p>
                                        </li>
                                        <li>
                                            <h6>Total Item</h6>
                                            <p>6 Items</p>
                                        </li>
                                        <li>
                                            <h6>Order Time</h6>
                                            <p>7th February 2021</p>
                                        </li>
                                        <li>
                                            <h6>Delivery Time</h6>
                                            <p>12th February 2021</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="orderlist-details">
                                        <li>
                                            <h6>Sub Total</h6>
                                            <p>₹10,864.00</p>
                                        </li>
                                        <li>
                                            <h6>discount</h6>
                                            <p>₹20.00</p>
                                        </li>
                                        <li>
                                            <h6>delivery fee</h6>
                                            <p>₹49.00</p>
                                        </li>
                                        <li>
                                            <h6>Total<small>(Incl. VAT)</small></h6>
                                            <p>₹10,874.00</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <div class="orderlist-deliver">
                                        <h6>Delivery location</h6>
                                        <p>
                                            502, Golden Height, Sagar Samrath Road, khariwad, Nani
                                            Daman, Daman-396210
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <figure class="snip1195">
                                                <a href="product-tab.html">
                                                    <h4>Capsicum</h4>
                                                    <div class="image">
                                                        <img src="{{ asset('storage/images/product/01.jpg') }}"
                                                            alt="sq-sample14" />
                                                    </div>
                                                    <figcaption>
                                                        <div class="product-info">
                                                            <div><strong>No:</strong> 01</div>
                                                            <div>
                                                                <strong>Produc:</strong> Sigh Bhujiya
                                                            </div>
                                                            <div><strong>Brand:</strong> Greeny</div>
                                                            <div><strong>Price:</strong> ₹100</div>
                                                            <div><strong>Quantity:</strong> 2</div>
                                                        </div>
                                                    </figcaption>
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-lg-4">
                                            <figure class="snip1195">
                                                <a href="product-tab.html">
                                                    <h4>Carrot</h4>
                                                    <div class="image">
                                                        <img src="{{ asset('storage/images/product/02.jpg') }}"
                                                            alt="sq-sample4" />
                                                    </div>
                                                    <figcaption>
                                                        <div class="product-info">
                                                            <div><strong>No:</strong> 01</div>
                                                            <div>
                                                                <strong>Product:</strong> Ice-Cream
                                                            </div>
                                                            <div><strong>Brand:</strong> Greeny</div>
                                                            <div><strong>Price:</strong> ₹100</div>
                                                            <div><strong>Quantity:</strong> 2</div>
                                                        </div>
                                                    </figcaption>
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-lg-4">
                                            <figure class="snip1195">
                                                <a href="product-tab.html">
                                                    <h4>Cucumber</h4>
                                                    <div class="image">
                                                        <img src="{{ asset('storage/images/product/03.jpg') }}"
                                                            alt="sq-sample4" />
                                                    </div>
                                                    <figcaption>
                                                        <div class="product-info">
                                                            <div><strong>No:</strong> 01</div>
                                                            <div><strong>Product:</strong> Ice-Cream</div>
                                                            <div><strong>Brand:</strong> Greeny</div>
                                                            <div><strong>Price:</strong> ₹100</div>
                                                            <div><strong>Quantity:</strong> 2</div>
                                                        </div>
                                                    </figcaption>
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
