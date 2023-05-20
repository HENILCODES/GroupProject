@extends('layouts.app')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/user-auth.css') }}" />
@endsection
@section('body')
    <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
                    <div class="user-form-logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('storage/images/logo.png') }}" alt="logo" /></a>
                    </div>
                    <div class="user-form-card shadow">
                        <div class="user-form-title">
                            <h2>Reset Password</h2>
                            <p>get link </p>
                        </div>
                        <form class="user-form" action="{{ route('password.email') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email" placeholder=" email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-button">
                                <button type="submit">send password reset link</button>
                            </div>
                        </form>
                    </div>
                    <div class="user-form-remind shadow">
                        <p>Go Back To<a href="{{ route('login') }}">login here</a></p>
                    </div>
                    <div class="user-form-footer">
                        <p>&COPY; 2023 Copyright <a href="{{ route('home') }}">JJK Store</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
