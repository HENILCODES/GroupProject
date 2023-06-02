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
                        <p>Ashirwad Socitey Ground Floor Gunajn Vapi</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="contact-card">
                        <i class="icofont-phone"></i>
                        <h4>phone number</h4>
                        <p>
                            <a href="#">009-215-5596 <span>(toll free)</span></a><a href="#">009-215-5595</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="contact-card">
                        <i class="icofont-email"></i>
                        <h4>Support mail</h4>
                        <p>
                            <a href="#">contact@example.com</a><a href="#">info@example.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d685.6736435822922!2d72.92666563195735!3d20.379083617564568!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0cff27d31db7d%3A0xcb1f972ff953df8b!2sJAY%20JAGDAMBA%20KIRANA%20STORE%20(%20J%20J%20KIRANA%20STORE%20)!5e0!3m2!1sen!2sin!4v1684209770972!5m2!1sen!2sin"
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
