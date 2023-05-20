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
                            <h2>Update Password</h2>
                        </div>
                        <form method="POST" class="user-form" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    placeholder="  email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                                    autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder=" password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control"
                                    placeholder="confirm password" name="password_confirmation" required
                                    autocomplete="new-password">
                            </div>
                            <div class="form-button">
                                <button type="submit">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
