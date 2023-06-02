@extends('layouts.app')
@section('title')
    - about us
@endsection
@section('head')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection
@section('body')
    <section class="inner-section single-banner" style="background: url(/storage/images/single-banner.jpg) no-repeat center">
        <div class="container">
            <h2>contact us</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <span class="fw-bold text-white mx-2">/</span>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </div>
    </section>
    <section class="inner-section contact-part">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="contact-card">
                        <i class="icofont-location-pin"></i>
                        <h4>head office</h4>
                        <p>{{$details->address}}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="contact-card">
                        <i class="icofont-phone"></i>
                        <h4>phone number</h4>
                        <p>
                            <a href="tel:+91{{$details->contact}}">{{$details->contact}}</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="contact-card">
                        <i class="icofont-email"></i>
                        <h4>Support mail</h4>
                        <p>
                            <a href="mailto:{{$details->email}}">{{$details->email}}</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-map">
                        <iframe
                            src="{{$details->map}}"
                            width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="contact-form">
                        <h4>Drop Your Thoughts</h4>
                        <div class="form-group">
                            <div class="form-input-group">
                                <input class="form-control" type="text" placeholder="Your Name" /><i
                                    class="icofont-user-alt-3"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-input-group">
                                <input class="form-control" type="text" placeholder="Your Email" /><i
                                    class="icofont-email"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-input-group">
                                <input class="form-control" type="text" placeholder="Your Subject" /><i
                                    class="icofont-book-mark"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-input-group">
                                <textarea class="form-control" placeholder="Your Message"></textarea><i class="icofont-paragraph"></i>
                            </div>
                        </div>
                        <button type="submit" class="form-btn-group">
                            <i class="fas fa-envelope"></i><span>send message</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
