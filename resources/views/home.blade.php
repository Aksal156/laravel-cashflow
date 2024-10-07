@extends('layouts.mainlayout')

@section('title', 'home')

@section('content')
<h3>selamat datang, {{ Auth::user()->name }} . anda adalah {{ Auth::user()->role->name }} </h3>
@if(Auth::check())
    <h3>Selamat datang, {{ Auth::user()->name }}. Anda adalah {{ Auth::user()->role->name }}</h3>
@else
    <h3>Selamat datang, pengunjung. Silakan masuk untuk melanjutkan.</h3>
@endif

@endsection
