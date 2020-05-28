@extends('layouts.app')
@section('content')
    <div class="container">
        {{$barang}}
        <br>
        <br>
        {{Auth::user()}}
    </div>
@endsection
