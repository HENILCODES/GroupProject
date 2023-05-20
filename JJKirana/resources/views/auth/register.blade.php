@extends('layouts.app')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/user-auth.css') }}" />
@endsection
@section('body')
    <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-12 col-lg-8 col-xl-4">
                    <div class="user-form-logo">
                        <a href="index.html"><img src="{{ asset('storage/images/logo.png') }}" alt="logo" /></a>
                    </div>
                    <div class="user-form-card shadow rounded">
                        <div class="user-form-title">
                            <h2>Join Now!</h2>
                            <p>Let's explore</p>
                        </div>
                        <div class="user-form-group">
                            <form class="user-form" action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" placeholder=" name"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" placeholder=" email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" contact" name="contact"
                                        required />
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" placeholder=" password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control"
                                        placeholder=" confirm password" name="password_confirmation" required
                                        autocomplete="new-password">

                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" required type="checkbox" id="check" /><label
                                        class="form-check-label" for="check">Accept all the <a href="#">Terms &
                                            Conditions</a></label>
                                </div>
                                <div class="form-button">
                                    <button type="submit">register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="user-form-remind shadow">
                        <p>Already Have An Account?<a href="{{ route('login') }}">login here</a></p>
                    </div>
                    <div class="user-form-footer">
                        <p>&COPY; 2023 Copyright <a href="{{ route('home') }}">JJK Store</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
