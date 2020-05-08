@extends('layouts.admin')
@section('content')    
<main class="dash-content">
    <div class="container-fluid">
        <form action="/admin/barang/{{$barang->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{$barang->nama}}">
            </div>
            
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" class="form-control" value="{{$barang->harga}}">
            </div>

            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" name="stok" class="form-control" value="{{$barang->stok}}">
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" rows="5" class="form-control">{{$barang->deskripsi}}</textarea>
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select name="kategori">
                    @foreach ($kategori as $k)
                        <option value="{{$k->id}}">{{$k->kategori}}</option>
                    @endforeach 
                </select>    
            </div>
            
            <div class="form-group">
                <input type="file" name="image">
            </div>
            <input type="submit" value="Submit" class="btn btn-primary"> 
        </form>
    </div>
</main>
@endsection