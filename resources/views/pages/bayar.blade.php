@extends('layouts.app')
@section('content')
    <div class="container">
        <p>Upload bukti bayar berupa no transaksi, waktu transaksi, Atas nama transaksi</p>
    </div>
    <div class="container">
        <form action="/bayar/{{$pesanan->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="bukti_bayar">Bukti Bayar</label>
                <textarea name="bukti_bayar" rows="5" class="form-control"></textarea>
            </div>
            <input type="submit" value="Submit" class="site-btn">
        </form>
    </div>
@endsection
