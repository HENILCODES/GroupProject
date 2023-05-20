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
                        <a href="{{ route('home') }}"><img src="{{ asset('storage/images/logo.png') }}" alt="logo" /></a>
                    </div>
                    <div class="user-form-card shadow">
                        <div class="user-form-title">
                            <h2>welcome!</h2>
                            <p>Let's Order</p>
                        </div>
                        <div class="user-form-group">
                            <form class="user-form" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        placeholder=" email" value="{{ old('email') }}" required autocomplete="email"
                                        autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name=" password"
                                        placeholder="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="check">Remember Me</label>
                                </div>
                                <div class="form-button">
                                    <button type="submit">login</button>
                                    @if (Route::has('password.request'))
                                        <p>
                                            Forgot password?<a href="{{ route('password.request') }}">reset here</a>
                                        </p>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="user-form-remind shadow">
                        <p>
                            Don't have any account?<a href="{{ route('register') }}">register here</a>
                        </p>
                    </div>
                    <div class="user-form-footer">
                        <p>&COPY; 2023 Copyright <a href="{{ route('home') }}">JJK Store</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
