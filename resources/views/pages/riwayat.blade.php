@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach ($pesanan as $p)
            {{$p}}
            <br>
            <a href="" class="btn btn-primary">Bayar</a>
            <br>
        @endforeach
    </div>
@endsection
