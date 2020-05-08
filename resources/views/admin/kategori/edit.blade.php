@extends('layouts.admin')
@section('content')    
<main class="dash-content">
    <div class="container-fluid">
        <form action="/admin/kategori/{{$kategori->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Kategori</label>
                <input type="text" name="nama" class="form-control" value="{{$kategori->kategori}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</main>
@endsection