@extends('layouts.app')

@section('title')
    Not Found
@endsection

@section('head')
<link rel="stylesheet" href="{{asset("css/error.css")}}" />
@endsection

@section('body')
<section class="error-part">
    <div class="container">
      <h1>404 | Not Found</h1>
      <img class="img-fluid" src="{{asset("storage/images/error.png")}}" alt="error" />
      <h3>ooopps! this page can't be found.</h3>
      <p>It looks like nothing was found at this location.</p>
      <a href="{{route('home')}}">go to home</a>
    </div>
  </section>
@endsection