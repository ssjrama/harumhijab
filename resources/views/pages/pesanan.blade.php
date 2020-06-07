@extends('layouts.app')
@section('content')
    <div class="container">
        {{$barang}}
        <br>
        <br>
        {{Auth::user()}}
    </div>
    <div class="container">
        <form action="/pesanan/{{$barang->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" name="jumlah" class="form-control">
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" rows="5" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" rows="5" class="form-control"></textarea>
            </div>

            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
@endsection
