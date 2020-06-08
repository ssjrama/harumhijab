@extends('layouts.admin')
@section('content')    
<main class="dash-content">
    <table class="table table-striped">
        <tr>
            <td>ID Pesanan</td>
            <td>{{$pesanan->id}}</td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>{{$pesanan->jumlah}}</td>
        </tr>
        <tr>
            <td>Barang</td>
            <td>{{$pesanan->barang->nama}}</td>
        </tr>
        <tr>
            <td>Pesanan</td>
            <td>{{$pesanan->user->name}}</td>
        </tr>
   </table>
   <h3>Deskripsi</h3>
   <p>{{$pesanan->deskripsi}}</p>
   <h3>Alamat</h3>
   <p>{{$pesanan->alamat}}</p>    
</main>
@endsection