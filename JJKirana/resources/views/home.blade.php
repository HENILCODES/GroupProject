@extends('layouts.app')

@section('title') - Home @endsection
@section('head')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
@endsection

@section('body')
    <x-home.banner-top />
    <x-home.recentSell />
    <x-home.promoCard image="03.jpg" />
    <x-home.featureItem />
    <x-home.countDownOffer title="special discount offer for vegetable items" description="Reprehenderit sed quod autem molestiae aut modi minus" endDate="2023/10/18" offer="20%" image="countdown.png" />
    <x-home.newItem />
    <x-home.promoCard image="05.jpg" />
    <x-home.brandList />
@endsection
