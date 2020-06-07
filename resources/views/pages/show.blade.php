@extends('layouts.app')
@section('content')
    <div class="container">
        {{$barang}}
        <br>
        <br>
        {{Auth::user()}}
        <br>
        <br>
        <a href="/pesanan/{{$barang->id}}" class="btn btn-primary">Order</a>
    </div>
@endsection
