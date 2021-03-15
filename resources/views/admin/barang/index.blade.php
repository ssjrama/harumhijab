@extends('layouts.admin')
@section('content')    
<main class="dash-content">
    <div class="container-fluid">
       <a href="/admin/barang/create" class="btn btn-primary">Tambah Barang</a>
       @if (count($barang)>0)
            <table class="table table-striped">
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Image</th>
                    <th></th>
                    <th></th>
                </tr>
            @foreach ($barang as $b)
                <tr>
                    <td>{{$b->nama}}</td>
                    <td>{{$b->harga}}</td>
                    <td>{{$b->stok}}</td>
                    <td>{{$b->kategori->kategori}}</td>
                    {{-- "/storage/images/{{$b->image}}" --}}
                    <td><img class="img-fluid h-25" src={{ asset("storage/images/$b->image")}} alt="image"></td>
                    <td><a href="/admin/barang/{{$b->id}}/edit" class="btn btn-success">Edit</a></td>
                    <td>
                        <form action="/admin/barang/{{$b->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
           </table>        
       @else
       @endif
    </div>
</main>
@endsection