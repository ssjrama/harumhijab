@extends('layouts.admin')
@section('content')    
<main class="dash-content">
    <table class="table table-striped w-25">
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
            <td>Pemesan</td>
            <td>{{$pesanan->user->name}}</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>{{$pesanan->status}}</td>
        </tr>
   </table>
   <h3>Deskripsi</h3>
   <p>{{$pesanan->deskripsi}}</p>
   <h3>Alamat</h3>
   <p>{{$pesanan->alamat}}</p>
   <h3>Bukti Bayar</h3>
   <p>{{$pesanan->bukti_bayar}}</p>
   <form action="/pesanan/status/{{$pesanan->id}}" method="POST">
       @csrf
       <div class="form-group">
            <label for="status">Status</label>
            <select name="status">
                <option value="dibayar">Dibayar</option>
                <option value="dikirim">Dikirim</option>
                <option value="selesai">Selesai</option>
            </select>    
        </div>
        <input type="submit" value="Submit" class="btn btn-primary"> 
   </form>
</main>
@endsection