@extends('layouts.admin')
@section('content')    
<main class="dash-content">
    <div class="container-fluid">
        <form action="/admin/kategori" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Kategori</label>
               <input type="text" name="nama" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</main>
@endsection